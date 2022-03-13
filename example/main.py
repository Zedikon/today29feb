import requests
import json

response = requests.get('http://today29feb.ml/api/')
json_data = json.loads(response.text)
print(json_data['today_29_feb'] + ' ' + json_data['when_29_feb'])
