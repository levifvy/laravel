import requests
from bs4 import BeautifulSoup

API_URL = 'http://localhost/api/news'

def scrape_and_post_news():
    # Realizar el scraping
    url = "https://example.com/futbol-internacional"
    response = requests.get(url)
    soup = BeautifulSoup(response.content, 'html.parser')

    # Extraer datos relevantes
    articles = soup.find_all('article', class_='news-item')
    for article in articles:
        title = article.find('h2').text.strip()
        content = article.find('p').text.strip()
        source = "Example Site"
        news_url = article.find('a')['href']
        published_at = article.find('time')['datetime']

        # Preparar los datos para enviar a la API
        data = {
            'title': title,
            'content': content,
            'source': source,
            'url': news_url,
            'published_at': published_at,
        }

        # Enviar a la API
        response = requests.post(API_URL, json=data)
        if response.status_code == 201:
            print(f"Noticia guardada: {title}")
        else:
            print(f"Error al guardar noticia: {response.json()}")

# Ejecutar el scraping
scrape_and_post_news()

