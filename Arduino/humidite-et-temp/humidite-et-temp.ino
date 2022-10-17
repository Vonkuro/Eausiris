#include <Arduino.h>
#include <Wire.h>
#include <DHT.h>
#include <Adafruit_Sensor.h>



#define DHTPIN 8

#define DHTTYPE DHT11


DHT dht(DHTPIN, DHTTYPE); 

void setup(){
  Serial.begin(9600);
  Serial.println("DHT22 test");
  dht.begin();

}


void loop(){
  delay(1000);
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
