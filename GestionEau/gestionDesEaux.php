<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="./gestionDesEaux.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <a href="http://localhost/Eausiris/TableauDeBord/dashboard.php">
                    <img src="../logo.png" alt="Eausiris">
                </a>
            </div>
            <div class="col"></div>
            <div class="col"></div>
            <div class="col"></div>
        </div>
        <div class="row">
            <div class="col"></div>
            <div class="col">
                <h1>Irrigation</h1>
            </div>
            <div class="col"></div>
        </div>
        <div class="row"><div class="col"><br></div></div>
        <div class="row"><div class="col"><br></div></div>
        <div class="row"><div class="col"><br></div></div>
        
        <?php afficherLesBassins() ?>
    </div>

 
</body>
</html>

<?php
// Bassin est un array
//     -nom
//     -volume actuel
//     -volume maximum
// valves est un array
//     -les noms en string des valves
function afficherBassin ($Bassin,$valves)
{
    echo 
    '
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-md-4">
            <h3>Bassin ' . $Bassin[0] . '</h3>
        </div>
        <div class="col-md-4">
    ';
    foreach ($valves as $valve) 
    {
        afficherValve($valve);
    }
    echo 
    '
        </div>
        <div class="col-sm-1"></div>
    </div>
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-md-auto">
            <h4>Volume de ' . $Bassin[1] . " Litres d'eau pour une contenance de " . $Bassin[2] . ' Litres</h4>
        </div>
        <div class="col-sm-1"></div>
        <div class="col-sm-1"></div>
    </div>
    ';
}

function afficherValve($nomValve)
{
    echo '<button type="button" class="btn btn-danger">' . $nomValve .'</button>';
}

// minimal pour présenter l'affichages des bassins
function afficherLesBassins()
{
    $bassin = ["Saint Amand couvert", 10,20];
    $valves = ["Valve d'entrée", "Valve de sortie"];
    afficherBassin($bassin, $valves);

    $bassin = ["recuperateur de pluie",5,6];
    $valves = ["Valve de sortie"];
    afficherBassin($bassin, $valves);

    $bassin = ["Saint Amand externe",522, 800];
    $valves = ["Valve d'entrée","Valve de sortie blé", "Valve de sortie maïs"];
    afficherBassin($bassin, $valves);

}
?>