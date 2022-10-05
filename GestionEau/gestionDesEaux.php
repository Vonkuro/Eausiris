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
        <img src="../logo.jpg" alt="Eausiris"> 
        <h1>Irrigation</h1>
        <?php afficherLesBassins() ?>
    </div>

 
</body>
</html>

<?php
// nom est un string
// valves est un array
function afficherBassin ($nomBassin,$valves)
{
    echo "<h3>Bassin " . $nomBassin . "</h3>";
    foreach ($valves as $valve) 
    {
        afficherValve($valve);
    }
}

function afficherValve($nomValve)
{
    echo '<button type="button" class="btn btn-danger">' . $nomValve .'</button>';
}

// minimal pour présenter l'affichages des bassins
function afficherLesBassins()
{
    $bassin = "Saint Amand couvert";
    $valves = ["Valve d'entrée", "Valve de sortie"];
    afficherBassin($bassin, $valves);

    $bassin = "recuperateur de pluie";
    $valves = ["Valve de sortie"];
    afficherBassin($bassin, $valves);

    $bassin = "Saint Amand externe";
    $valves = ["Valve d'entrée","Valve du blé", "Valve du maïs"];
    afficherBassin($bassin, $valves);

}
?>