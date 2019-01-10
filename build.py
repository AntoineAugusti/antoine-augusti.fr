import feedparser
import os
import time

RSS_FEED = 'https://blog.antoine-augusti.fr/feed/'
REPLACE_TARGET = '<!-- BLOG_RECENT_ARTICLES -->'

feed = feedparser.parse(RSS_FEED)

items = []
template = '<li><a href="{link}">{title}</a> on <span class="text-muted">{date}</span></li>'
for item in feed['items'][:5]:
    html = template.format(
        title=item['title'],
        link=item['link'],
        date=time.strftime('%Y-%m-%d', item['published_parsed'])
    )
    items.append(html)

recent_articles_html = '<ul>' + ''.join(items) + '</ul>'

with open('template.html') as f:
    content = f.read().replace(REPLACE_TARGET, recent_articles_html)

with open('index.html', 'a') as f:
    f.write(content)

os.remove('template.html')
