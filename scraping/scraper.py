from selenium import webdriver
from selenium.webdriver.common.keys import Keys
from selenium.webdriver.common.by import By
from selenium.webdriver.support.ui import WebDriverWait
from selenium.webdriver.support import expected_conditions as EC
import time
import io

fitxer= io.open("kaggle.txt",'w',encoding="utf-8")
driver = webdriver.Firefox()
driver.get("https://www.kaggle.com")
WebDriverWait(driver, 20).until(EC.element_to_be_clickable((By.XPATH, "/html/body/main/div[1]/div/div[5]/div[1]/div/div[2]/div"))).click()
elem = driver.find_element(By.XPATH, "/html/body/main/div[1]/div/div[3]/div/div[1]/a[2]").click()
elem = driver.find_element(By.XPATH, "/html/body/main/div[1]/div/div[5]/div[2]/div[4]/div/div/div[2]/button[1]").click()
elem = driver.find_element(By.XPATH, "/html/body/main/div[1]/div/div[5]/div[2]/div[4]/div/div/div[2]/button[1]/span").click()
time.sleep(2)
last_height = driver.execute_script("return document.body.scrollHeight")
comptador = 0
while comptador<50:
    comptador += 1
    print("Scrolling to the bottom of the page...")
    driver.execute_script("window.scrollTo(0, document.body.scrollHeight);")
      
    try:
        # Try to locate the button and click it
        print("Attempting to find the button...")
        elem = driver.find_element(By.XPATH, "/html/body/main/div[1]/div/div[5]/div[2]/div[5]/div/div/div/ul[2]/li[11]/button")
        print("Button found, attempting to click it...")
        elem.click()  # Click on the button
        print("Button clicked successfully!")

    except StaleElementReferenceException: # type: ignore
        print("StaleElementReferenceException encountered, retrying...")
        continue  # Retry finding the element

    except NoSuchElementException: # type: ignore
        print("NoSuchElementException: Couldn't find the button. The XPath might be wrong.")
        break  # If the element doesn't exist, stop the process

    except ElementNotInteractableException: # type: ignore
        print("ElementNotInteractableException: The button is present but not interactable. Maybe it's not visible yet.")
        break  # Handle when the button is not interactable

    # Check if we've reached the end of the page by comparing the heights
    new_height = driver.execute_script("return document.body.scrollHeight")
    if new_height == last_height:
        time.sleep(2)
        print("Reached the bottom of the page.")
        element = driver.find_element(By.XPATH, "/html/body/main/div[1]/div/div[5]/div[2]/div[5]/div/div/div/ul[1]")

# Obté el text de l'element
        element_text = element.text

# Mostra el text a la consola
       # Mostra el text del body
        fitxer.write(element_text+"\n")
      
    last_height = new_height

fitxer.close()