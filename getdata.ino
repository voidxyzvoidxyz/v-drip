int led= 2;
int motor= 4;
int moisture = 0;
int value = 0;
int aid=1;
int vid=1;
#include <Arduino.h>
#include <ESP8266WiFi.h>
#include <ESP8266WiFiMulti.h>
#include <ESP8266HTTPClient.h>
#define USE_SERIAL Serial
ESP8266WiFiMulti WiFiMulti;
void setup() {
   Serial.begin(9600);
   WiFi.mode(WIFI_STA);
   WiFiMulti.addAP("hashichemnad", "passwords");
   pinMode(led, OUTPUT);
   pinMode(motor, OUTPUT);
}
void loop() {
   
   if((WiFiMulti.run() == WL_CONNECTED)) {
       Serial.print("MOISTURE LEVEL : ");
       value= analogRead(moisture);
       value= value/10;
       Serial.println(value);
       HTTPClient http;
       char url[100];
       sprintf(url, "http://192.168.43.114/v-drip/update.php?vid=%d&aid=%d&m=%d",vid,aid,value);
       http.begin(url);
       Serial.print(url);
       int httpCode = http.GET();
       if(httpCode > 0) {
           if(httpCode == HTTP_CODE_OK) {
               String payload = http.getString();
               if(payload=="on"){
                  digitalWrite(led,HIGH);
                  digitalWrite(motor,HIGH);
               }
               else{
                  digitalWrite(led,LOW);
                  digitalWrite(motor,LOW);
               }
           }
       }
       http.end();
   }
   delay(5000);
}
