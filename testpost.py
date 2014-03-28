import requests

#payload = {'sensorId': 'TESTTHING', 'netId': 'NETTEST', 'sensorOnt': '12'}
payload = {'netId': '00000000f01243e9'}
r = requests.post("http://uclteam10.azurewebsites.net/testpost.php", data=payload)
print r.text
