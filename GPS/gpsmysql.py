import serial, time
import smbus
import math
import RPi.GPIO as GPIO
import struct
import sys
import MySQLdb

 
ser = serial.Serial('/dev/ttyUSB0',  9600, timeout = 0)   #Open the serial port at 9600 baud
ser.flush()
 
class GPS:
    #The GPS module used is a Grove GPS module http://www.seeedstudio.com/depot/Grove-GPS-p-959.html
    inp=[]
    # Refer to SIM28 NMEA spec file https://raw.githubusercontent.com/SeeedDocument/Grove-GPS/master/res/SIM28_DATA_File.zip
    GGA=[]
 
    #Read data from the GPS
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
db = MySQLdb.connect (host = "localhost", user = "root" , passwd = "0000" , db = "pi")
while True:
    try:
        x=g.read()  #Read from GPS
        [t,fix,sats,alt,lat,lat_ns,long,long_ew]=g.vals() #Get the individial values
        print "Time:",t,"Fix status:",fix,"Sats in view:",sats,"Altitude",alt,"Lat:",lat,lat_ns,"Long:",long,long_ew
        time.sleep(2)
		# 執行SQL statement
        cursor = db.cursor()
        cursor.execute("INSERT INTO gps(longitude,latitude)VALUES ('%f','%f')" % (lat,long))
        db.commit()
		db.close()
	except MySQLdb.Error as e:
        print "Error %d: %s" % (e.args[0], e.args[1])
    except IndexError:
        print "Unable to read"
    except KeyboardInterrupt:
        print "Exiting"
        sys.exit(0)

