import serial, time
import datetime
import smbus
import math
import RPi.GPIO as GPIO
import struct
import sys
import MySQLdb

 
ser = serial.Serial('/dev/ttyUSB0',  9600, timeout = 0)   #Open the serial port at 9600 baud
ser.flush()
 
class GPS:
    inp=[]
    GGA=[]
 
    def read(self):
        while True:
            GPS.inp=ser.readline()
            if GPS.inp[:6] =='$GPGGA': # GGA data , packet 1, has all the data we need
                break
            time.sleep(0.1)
        try:
            ind=GPS.inp.index('$GPGGA',5,len(GPS.inp)) #Sometimes multiple GPS data packets come into the stream. Take the data only after the last '$GPGGA' is seen
            GPS.inp=GPS.inp[ind:]
        except ValueError:
            print ""
        GPS.GGA=GPS.inp.split(",")   #Split the stream into individual parts
        return [GPS.GGA]

    #Split the data into individual elements
    def vals(self):
        time=GPS.GGA[1]
        lat=GPS.GGA[2]
        lat_ns=GPS.GGA[3]
        long=GPS.GGA[4]
        long_ew=GPS.GGA[5]
        fix=GPS.GGA[6]
        sats=GPS.GGA[7]
        alt=GPS.GGA[9]
        return [time,fix,sats,alt,lat,lat_ns,long,long_ew]

g=GPS()
ind=0
db = MySQLdb.connect (host = "163.22.17.251", user = "beebox" , passwd = "beebox1234" , db = "pi" )
count = 0
while (count < 3):
    count = count + 1
    try:
        x=g.read()
        [t,fix,sats,alt,lat,lat_ns,long,long_ew]=g.vals()
        if not lat or not long:
            lat=0
            long=0
        else:
            lat=float(lat)/100
            long=float(long)/100
	    print "Time:",datetime.datetime.now(),"Fix status:",fix,"Sats in view:",sats,"Altitude",alt,"Lat:",lat,lat_ns,"Long:",long,long_ew
        cursor = db.cursor()
        cursor.execute("INSERT INTO GPS(Time,Longitude,Latitude)VALUES ('%s','%s','%s')" % (datetime.datetime.now(),long,lat))
        db.commit()
#        db.close()
    except MySQLdb.Error as e:
        print "Error %d: %s" % (e.args[0], e.args[1])
    except IndexError:
        print "Unable to read"
    except KeyboardInterrupt:
        print "Exiting"
        sys.exit(0)
