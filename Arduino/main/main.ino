#include <Arduino.h>
#include <SPI.h>
#include <Ethernet.h>
#include <Wire.h>
#include <DHT.h>
#include <Adafruit_Sensor.h>
#include <stdio.h>
#include <Ethernet.h>
#include <MySQL_Connection.h>

#define DHTPIN 8

#define DHTTYPE DHT11




DHT dht(DHTPIN, DHTTYPE); 

byte mac_addr[] = { 0xA1, 0xB7, 0x3B, 0xD8, 0x2C, 0xFD };

IPAddress server_addr(127,0,0,1);  // IP of the MySQL *server* here
char user[] = "root";              // MySQL user login username
char password[] = "";        // MySQL user login password
char default_db = "eausiris";

EthernetClient client;
MySQL_Connection conn((Client *)&client);


void setup(){
  Serial.begin(115200);
  while (!Serial); 
  Ethernet.begin(mac_addr);
  Serial.println("Connecting...");
  if (conn.connect(server_addr, 3306, user, password, default_db)) {
    delay(1000);
    Serial.print("Fonctionnelle");
  }
  else
    Serial.println("Echec.");
  conn.close();
  Serial.println("DHT22 test");
  dht.begin();

}


void loop(){
  delay(5000);
  float h = dht.readHumidity();
  float t = dht.readTemperature();

  // float hi = dht.computeHeatIndex(f, h);

  Serial.println("Humidite : ");
  Serial.println(h);
  Serial.println("Temperature : ");
  Serial.println(t);
  // Serial.print("Temperature ressentie: ");
  // Serial.print(dht.convertFtoC(hi));
  // Serial.println(" *C");



}
