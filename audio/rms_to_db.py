import serial, time
import smbus
import math
import RPi.GPIO as GPIO
import struct
import sys
import MySQLdb
import subprocess
import datetime
path ='./rec09061632.wav'
get_rms = "sox "+path+".wav -n stat"
p = subprocess.Popen(get_rms, shell=True)
Hz=[]
RMS=[] 
while True:
    Hz.inp=p.readline()
    print(Hz.inp)
