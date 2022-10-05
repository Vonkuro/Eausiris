<?php

function getBdd(){
try{        

        $bdd = new PDO('mysql:host=localhost:3306;dbname=eausiris;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

}
catch(Exception $e){   
                die('Erreur : '.$e->getMessage());
         }
return $bdd;
}


// function getDebitEau(){ En developpement , à faire dans le sprit suivant

// }

function getEconomieMois($MoisAvant, $MoisMtn){   //je recupere les economies du mois d'avant et je compare avec ceux du mois actuelle
        $MoisEnCours = $MoisMtn - $MoisAvant;
        return $MoisEnCours;
}

function getVolumeEauActuelle(){   //je recupere le volume d'eau actuelle
        $bdd = getBdd();
        $VolumeEau = $bdd->prepare('SELECT volume_actuelle FROM bassin_eau');
        $VolumeEau -> execute();
        return $VolumeEau;
}

function getVolumeEauMax(){  //je recupere le volume d'eau max
        $bdd = getBdd();
        $VolumeEauMax = $bdd->prepare('SELECT volume_max FROM bassin_eau');
        $VolumeEauMax -> execute();
        return $VolumeEauMax;
}

function getCapteursTemp(){  //je vais chercher la temperature & humidite des capteurs 
        $bdd = getBdd();
        $ValeurDHT = $bdd->prepare('SELECT Temperature,Humidite FROM DHT');
        $ValeurDHT -> execute();
        $results = $ValeurDHT->fetchAll();
        return $results;
}



?>
