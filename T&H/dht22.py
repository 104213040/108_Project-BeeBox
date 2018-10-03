import Adafruit_DHT as dht
import time
import datetime
import sys
import MySQLdb
#import sched


db = MySQLdb.connect (host = "163.22.17.251", user = "beebox" , passwd = "beebox1234" , db = "pi" )

#while True:

try:

  h,t = dht.read_retry(dht.DHT22 , 3)
#    time.sleep(2)
  print 'Temp = %.1f"C, Humidity = %.1f%%RH' % (t, h)
  print 'datetime = %s' % datetime.datetime.now()

  cursor = db.cursor()
  cursor.execute("INSERT INTO TNH(Time,Temperature,Humidity)VALUES ('%s','%.1f','%.1f')"%(datetime.datetime.now(),t,h))
  db.commit()
  db.close()

except MySQLdb.Error as e:
  print "Error %d: %s" % (e.args[0] , e.args[1])
except IndexError:
  print "Unable to read"
except KeyboardInterrupt:
  print "Exiting"
  sys.exit(0)

