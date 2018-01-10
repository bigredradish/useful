#!/usr/bin/env python

#https://www.makeuseof.com/tag/how-to-build-a-raspberry-pi-twitter-bot/

import sys
from twython import Twython
import os

CONSUMER_KEY = '***REPLACE WITH YOUR OWN*****'
CONSUMER_SECRET = '***REPLACE WITH YOUR OWN*****'
ACCESS_KEY = '***REPLACE WITH YOUR OWN*****'
ACCESS_SECRET = '***REPLACE WITH YOUR OWN*****'

api = Twython(CONSUMER_KEY,CONSUMER_SECRET,ACCESS_KEY,ACCESS_SECRET)

cmd = '/opt/vc/bin/vcgencmd measure_temp'
line = os.popen(cmd).readline().strip()
temp = line.split('=')[1].split("'")[0]
api.update_status(status='My current CPU temperature is '+temp+' C')
