#include<SoftwareSerial.h>
#include<TinyGPS.h>
float lat,lon,lat1,lon1;
int val,thres=100;
int stat=0;
String message="";

SoftwareSerial mySerial=SoftwareSerial(2,3);
SoftwareSerial gpsSerial(5,6);
TinyGPS gps;
void setup()
{
  Serial.begin(19200);
  gpsSerial.begin(9600);  
  mySerial.begin(19200);
}
void loop()
{
 // if(stat==0)
  //{
   gpsfun();
   
   if (mySerial.available())
  Serial.write(mySerial.read());
  //}
  
}
void gpsfun()
{
  //stat++;
 // val=analogRead(A0);
  //if(val>thres)
 // {
 
    gpsSerial.listen();
  while(gpsSerial.available())
  {
    if(gps.encode(gpsSerial.read()))
    {
      gps.f_get_position(&lat,&lon);
    Serial.println(lat); 
    Serial.println(lon); 
    
    lat1=lat;
    lon1=lon;
    Serial.println("lat lon");
    Serial.println(lat);
    Serial.println(lon);
    
   gsm(); 
    //}
  //}
  //}
}
  }
}
void gsm()
{
   Serial.println("lat1 lon1");
    Serial.println(lat1);
    Serial.println(lon1);
 mySerial.println("AT+CSQ");
  delay(1000);
 
  ShowSerialData();// this code is to show the data from gprs shield, in order to easily see the process of how the gprs shield submit a http request, and the following is for this purpose too.
 
  mySerial.println("AT+CGATT?");
  delay(1000);
 
  ShowSerialData();
 
  mySerial.println("AT+SAPBR=3,1,\"CONTYPE\",\"GPRS\"");//setting the SAPBR, the connection type is using gprs
  delay(1000);
 
  ShowSerialData();
 
  mySerial.println("AT+SAPBR=3,1,\"APN\",\"imis/internet\"");//setting the APN, the second need you fill in your local apn server
  delay(4000);
 
  ShowSerialData();
 
  mySerial.println("AT+SAPBR=1,1");//setting the SAPBR, for detail you can refer to the AT command mamual
  delay(2000);
 
  ShowSerialData();
 
  mySerial.println("AT+HTTPINIT"); //init the HTTP request
 
  delay(2000); 
  ShowSerialData();
 
  mySerial.print("AT+HTTPPARA=\"URL\",\"bustrackhost.netne.net/upload.php?lat=");// setting the httppara, the second parameter is the website you want to access
 //mySerial.print("lat=");
 mySerial.print(lat1,6);
 mySerial.print("&lon=");
 mySerial.print(lon1,6);
 mySerial.println("\"");
  delay(1000);
 
  ShowSerialData();
 
  mySerial.println("AT+HTTPACTION=0");//submit the request 
  delay(5000);//the delay is very important, the delay time is base on the return from the website, if the return datas are very large, the time required longer.
  //while(!mySerial.available());
 
  ShowSerialData();
 
  mySerial.println("AT+HTTPREAD");// read the data from the website you access
  delay(2000);
 
  ShowSerialData();
 
  mySerial.println("");
  delay(1000);
}
void ShowSerialData()
{
  while(mySerial.available()!=0)
    Serial.write(mySerial.read());
}

