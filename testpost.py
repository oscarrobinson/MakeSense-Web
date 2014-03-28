import requests

payload = {'sensorId': 'TESTTHING', 'netId': 'NETTEST', 'sensorOnt': '12'}
r = requests.post("http://uclteam10.azurewebsites.net/testpost.php", data=payload)
print r.text
