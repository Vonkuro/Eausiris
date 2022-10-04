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
    <div class="container">
        
    <img src="../logo.jpg" alt="Eausiris">
        <div class="row align-items-start">
            <div class="col">
                
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Irrigation</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Méthanisation</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Récolte</a>
                    </li>
                </ul>
            </div>

            <div class="col">
                <p>
                    Prix de l'eau <!-- Mois --> <span class="rectangle">0.035<!-- calcul --></span>
                </p>
                <p>
                    Volume d'eau utilisée <!-- Mois --> <span class="rectangle">0.035<!-- calcul --></span>
                </p>
                <p>
                    Facture d'eau effective <!-- Mois --> <span class="rectangle">0.035<!-- calcul --></span>
                </p>
                <p>
                    Econome effective <!-- Mois --> <span class="rectangle">0.035<!-- calcul --></span>
                </p>
                <p>
                    Facture d'eau effective <!-- Mois --> <span class="rectangle">0.035<!-- calcul --></span>
                </p>
                <p>
                    Econome effective <!-- Mois --> <span class="rectangle">0.035<!-- calcul --></span>
                </p>
            </div>

            <div class="col">
                <?php
                    $pc = new C_PhpChartX(array(array(11, 9, 5, 12, 14)),'basic_chart');
                    $pc->draw();
                ?>
            </div>
        </div>
    </div>
</body>
</html>

<?php ?>