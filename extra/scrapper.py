from bs4 import BeautifulSoup
from requests import *
search = "Back%20end"
content = get(f"https://www.linkedin.com/jobs/search?keywords={search}").content
soup = BeautifulSoup(content,'lxml')
works = soup.find('ul',class_="jobs-search__results-list")
results = works.find_all('li')
jobs = []
for x in results:
    jobs.append(x.find('div',class_="base-search-card__info").find('h3',class_="base-search-card__title").text.replace(' ','').replace('\n',''))
    jobs.append(x.find('div',class_="base-search-card__info").find('h3',class_="base-search-card__title").text.replace(' ','').replace('\n',''))

with open('result.html','w') as file:
     file.write("\n".join(jobs))
# with open('result.html','wb') as file:
    # file.write(content)