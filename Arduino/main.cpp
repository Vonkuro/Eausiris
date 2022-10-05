#include <Arduino.h>
#include <Wire.h>
#include <DHT.h>
#include <Adafruit_Sensor.h>
#include<stdio.h>
#include <mysql.h> 
#include <iostream>

using namespace std;

#define DHTPIN 8

#define DHTTYPE DHT11

int main void{
                  try{
                         sql::Driver* driver;
                         sql::Connection* con;
                         sql::Statement* stmt;
                         sql::ResultSet* requete;
                  
    driver = get_driver_instance();
    con = driver->connect("tcp://localhost:3306", "root", "");

    con->setSchema("eausiris");
    stmt = con->createStatement();

    requete = stmt->executeQuery("SELECT Temperature FROM dht");

    while(requete->next()){
      cout << "\t... MYSQL a repondu";

      cout << requete->getString("Temperature") << endl;
  

    }

    delete requete;
    delete stmt;
    delete con;

}  catch (sql::SQLException &e) {
  // Gestion des execeptions pour déboggage
  cout << "# ERR: " << e.what();
  cout << " (code erreur MySQL: " << e.getErrorCode();
  cout << ", EtatSQL: " << e.getSQLState() << " )" << endl;
}

cout << endl;

// on sort en indiquant que tout c'est bien passé
return EXIT_SUCCESS;
}


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
