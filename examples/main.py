import requests
import json

response = requests.get('http://zedikon.ml/api/')
json_data = json.loads(response.text)
print(json_data['responce'])
