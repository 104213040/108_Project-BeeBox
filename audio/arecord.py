import subprocess
import datetime
path ='/home/pi/beebox/audio/'
timestamp = datetime.datetime.now().strftime('%m%d%H%M')
record = "arecord -d 10 "+path+'rec'+timestamp+".mp3"
p = subprocess.Popen(record, shell=True)
