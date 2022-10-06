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

function insertBDD(){ //insertion BDD
        if(isset($_POST['identifiant']) && isset($_POST['motdepasse']) && isset($_POST['code_licence'])){
        $hash = hash('sha256', $_POST['motdepasse']);
        $bdd = getBdd();
        $requestId = $bdd->prepare('select id_client from client order by 1 DESC LIMIT 1;');
        $requestId ->execute();
        $idTableau = $requestId->fetch();
        $idTableau[0] += 1;
        $requests = $bdd->prepare('INSERT into client VALUES(?, ?, ?, ?)');
        //$requests -> execute(array($idTableau[0], $_POST['identifiant'], $_POST['motdepasse'], $_POST['code_licence']));
        $requests -> execute(array($idTableau[0], $_POST['identifiant'], $hash, $_POST['code_licence']));
        $results = $requests->fetchAll();
        return $results;
        }
}

function getInformations(){
     $bdd = getBdd();
     if (isset($_POST['identifiant']) && isset($_POST['motdepasse']))
     {
        $hash =  hash('sha256', $_POST['motdepasse']);
        $users = 'SELECT identifiant, motdepasse FROM client';
        $requete = $bdd->prepare($users);
        $requete->execute();
        $users = $requete->fetchAll();
        foreach ($users as $user) {
                if(
                    $user['identifiant'] === $_POST['identifiant'] &&
                    $user['motdepasse'] == $hash
                ) {
                        echo '<meta http-equiv="refresh" content="0; URL=../TableauDeBord/dashboard.php"/>';
                } else {        

                }
                
        }
         
     }
}



?>
