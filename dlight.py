#!/usr/bin/env python

import time
from sys import exit

try:
    import requests
except ImportError:
    exit("This script requires the requests module\nInstall with: sudo pip install requests")

import blinkt

blinkt.set_clear_on_exit()

def hex_to_rgb(col_hex):
    """Convert a hex colour to an RGB tuple"""
    col_hex = col_hex.lstrip("#")
    return bytearray.fromhex(col_hex)

while True:
    r = requests.get("http://bigredradish.com/sandbox/colour/api/?key=ff027210be06794ee598b8847490b9ae89c44db0", timeout=2)
    r, g, b = hex_to_rgb(r.json()["hex"])

    for i in range(blinkt.NUM_PIXELS):
        blinkt.set_pixel(i, r, g, b)

    blinkt.show()

    time.sleep(5) # Be friendly to the API
