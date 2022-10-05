<?php 
    require_once("../vendor/phpChart_Lite/phpChart_Lite/conf.php");
?>


<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Tableau de bord</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="./dashboard.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col">
                <a href="http://localhost/Eausiris/Login/login.html">
                    <img src="../logo.png" alt="Eausiris">
                </a>
            </div>
            <div class="col">
                <h1>Tableau de Bord</h1>
            </div>
            <div class="col"></div>
        </div>
        <div class="row"><div class="col"><br></div></div>
        <div class="row"><div class="col"><br></div></div>
        <div class="row"><div class="col"><br></div></div>
        <div class="row "> <!-- align-items-start -->
            <div class="col"></div>
            <div class="col">
                
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../GestionEau/gestionDesEaux.php"><h2>Irrigation</h2></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#"><h2>Méthanisation</h2></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#"><h2>Récolte</h2></a>
                    </li>
                </ul>
            </div>

            <div class="col-3">
                <p>
                    <h4>Prix de l'eau <!-- Mois --> <span class="rectangle">0.035<!-- calcul --></span> </h4>
                </p>
                <p>
                    <h4>Volume d'eau utilisée <!-- Mois --> <span class="rectangle">0.035<!-- calcul --></span> </h4>
                </p>
                <p>
                    <h4>Facture d'eau effective <!-- Mois --> <span class="rectangle">0.035<!-- calcul --></span> </h4>
                </p>
                <p>
                    <h4>Econome effective <!-- Mois --> <span class="rectangle">0.035<!-- calcul --></span> </h4>
                </p>
                <p>
                    <h4>Facture d'eau effective <!-- Mois --> <span class="rectangle">0.035<!-- calcul --></span> </h4>
                </p>
                <p>
                    <h4>Econome effective <!-- Mois --> <span class="rectangle">0.035<!-- calcul --></span> </h4>
                </p>
            </div>

            <div class="col">
                <?php
                    $pc = new C_PhpChartX(array(array(11, 9, 5, 12, 14)),'basic_chart');
                    $pc->draw();
                ?>
            </div>
            <div class="col"></div>
        </div>
    </div>
</body>
</html>

<?php ?>