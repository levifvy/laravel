from selenium import webdriver
from selenium.webdriver.common.by import By
from selenium.webdriver.chrome.options import Options
from selenium.webdriver.support.ui import WebDriverWait
from selenium.webdriver.support import expected_conditions as EC
from selenium.webdriver.chrome.service import Service
import mysql.connector
from datetime import datetime
import time

# Configuración de la base de datos de Laravel
db_config = {
    'host': 'localhost',      # Cambia si tu base de datos está en otro servidor
    'user': 'usuario',        # Usuario de la base de datos
    'password': 'usuario',    # Contraseña de la base de datos
    'database': 'laravel'     # Nombre de la base de datos de Laravel
}

# URL de la sección de fútbol de Marca
marca_url = 'https://www.marca.com/futbol.html?intcmp=MENUMIGA&s_kw=noticias'

# Función para extraer noticias usando Selenium
def scrape_with_selenium(url):
    # Configurar Selenium para usar Chrome
    options = Options()
    options.add_argument('--headless')  # Ejecutar en modo sin cabeza (headless)
    options.add_argument('--disable-gpu')  # Deshabilitar GPU para headless
    options.add_argument('--no-sandbox')  # Deshabilitar sandbox para headless
    options.add_argument('--disable-dev-shm-usage')  # Evitar problemas de memoria en headless

    # Especificar la ruta al chromedriver usando Service
    chrome_driver_path = '/usr/local/bin/chromedriver'  # Cambia esto si es necesario
    service = Service(chrome_driver_path)  # Crear una instancia de Service

    # Inicializar el navegador
    driver = webdriver.Chrome(service=service, options=options)

    try:
        # Conectar a la base de datos
        conn = mysql.connector.connect(**db_config)
        cursor = conn.cursor()

        # Abrir la página de fútbol de Marca
        driver.get(url)

        # Esperar a que la página se cargue completamente
        WebDriverWait(driver, 20).until(
            EC.presence_of_element_located((By.CLASS_NAME, "ue-c-cover-content__link"))
        )

        # Extraer los títulos, enlaces e imágenes de las noticias
        news_elements = driver.find_elements(By.CLASS_NAME, "ue-c-cover-content__link")
        image_elements = driver.find_elements(By.CLASS_NAME, "ue-c-cover-content__image")

        # Guardar los datos en una lista
        news_data = []
        for title_element, image_element in zip(news_elements, image_elements):
            title = title_element.text
            link = title_element.get_attribute("href")
            image_url = image_element.get_attribute("src")
            if title and link:  # Solo agregar si hay título y enlace
                news_data.append((title, link, image_url))

        # Visitar cada enlace y extraer el contenido
        for title, link, image_url in news_data:
            try:
                driver.get(link)
                # Esperar a que la página de la noticia se cargue completamente
                WebDriverWait(driver, 20).until(
                    EC.presence_of_element_located((By.CLASS_NAME, "ue-c-article__body"))
                )
                # Extraer el contenido de la noticia
                content_element = driver.find_element(By.CLASS_NAME, "ue-c-article__body")
                content = content_element.text
            except Exception as e:
                print(f"Error al extraer el contenido de {link}: {e}")
                content = "Contenido no disponible"

            # Insertar los datos en la base de datos
            query = """
            INSERT INTO news (title, content, source, url, image_url, published_at, created_at, updated_at)
            VALUES (%s, %s, %s, %s, %s, %s, NOW(), NOW())
            """
            values = (
                title,                  # Título de la noticia
                content,                # Contenido de la noticia
                "Marca",                # Fuente de la noticia
                link,                   # URL de la noticia
                image_url,              # URL de la imagen
                datetime.now()          # Fecha de publicación
            )

            try:
                cursor.execute(query, values)
                conn.commit()
            except mysql.connector.Error as e:
                print(f"Error al insertar en la base de datos: {e}")

    except Exception as e:
        print(f"Error durante la ejecución: {e}")
    finally:
        # Cerrar conexiones
        if 'cursor' in locals():
            cursor.close()
        if 'conn' in locals():
            conn.close()
        driver.quit()
        print("Scraping completado y datos guardados en la base de datos.")

# Ejecutar la función de scraping
scrape_with_selenium(marca_url)