INSERT INTO client VALUES (1,'Grégoire','26','qhsdjqkj');

INSERT INTO Bassin_eau (id_Bassin,id_client,type,numero,code_postal,rue,ville,volume_max,volume_actuelle,nom) VALUES ('H4040',1,'eau payante','3','59000','2','Lille','100','45','Saint Amand couvert');
INSERT INTO Bassin_eau (id_Bassin,id_client,type,numero,code_postal,rue,ville,volume_max,volume_actuelle,nom) VALUES ('I5050',1,'eau riviere','21','62100','1','Calais','100','10','recuperateur de pluie');
INSERT INTO Bassin_eau (id_Bassin,id_client,type,numero,code_postal,rue,ville,volume_max,volume_actuelle,nom) VALUES ('J6060',1,'eau pluie','53','59100','2','Roubaix','100','100','Saint Amand externe');

INSERT INTO Capteurs (id_capteur,id_bassinEau,adresse_ip) VALUES ('A2020','H4040','124.0.0.1');
INSERT INTO Capteurs (id_capteur,id_bassinEau,adresse_ip) VALUES ('A2729','H4040','124.0.0.2');
INSERT INTO Capteurs (id_capteur,id_bassinEau,adresse_ip) VALUES ('B1111','I5050','172.0.1.0');


INSERT INTO DHT (id_DHT,id_capteur,Temperature,Humidite) VALUES ('E1213','A2020','20','50');

INSERT INTO WaterSensor (id_WaterSensor,id_capteur,HauteurEau) VALUES ('N3232','B1111','45');
INSERT INTO WaterSensor (id_WaterSensor,id_capteur,HauteurEau) VALUES ('D6232','A2729','20');

INSERT INTO Valves (id_valve,nom,id_bassin,adresse_ip) VALUES ('6561','valve1','H4040','122.0.0.0');
INSERT INTO Valves (id_valve,nom,id_bassin,adresse_ip) VALUES ('7898','valve2','I5050','190.0.0.1');
INSERT INTO Valves (id_valve,nom,id_bassin,adresse_ip) VALUES ('9021','valve1','J6060','255.255.0.1');

INSERT INTO Mois (id_mois,nom,annee,prix_litre,Consomation,Economisation) VALUES (1,'Aout',2022,'0.032','120','45');
INSERT INTO Mois (id_mois,nom,annee,prix_litre,Consomation,Economisation) VALUES (2,'Septembre',2022,'0.042','202','0');
INSERT INTO Mois (id_mois,nom,annee,prix_litre,Consomation,Economisation) VALUES (3,'Octobre',2022,'0.022','310','0');
