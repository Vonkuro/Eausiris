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
                <a href="http://localhost/Eausiris/Login/login.php">
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
                    <h4>Prix de l'eau Octobre <span class="rectangle">0.035<!-- calcul -->€</span> </h4>
                </p>
                <p>
                    <h4>Volume d'eau utilisée Octobre <span class="rectangle">20 000<!-- calcul -->L</span> </h4>
                </p>
                <p>
                    <h4>Facture d'eau effective Octobre <span class="rectangle">557<!-- calcul -->€</span> </h4>
                </p>
                <p>
                    <h4>Econome effective Octobre <span class="rectangle">150<!-- calcul -->€</span> </h4>
                </p>
                <p>
                    <h4>Facture d'eau effective Septembre <span class="rectangle">565<!-- calcul -->€</span> </h4>
                </p>
                <p>
                    <h4>Econome effective Septembre <span class="rectangle">145<!-- calcul -->€</span> </h4>
                </p>
            </div>

            <div class="col">
                <?php
                    $data =array(array(1,600),array(2,585),array(3,590),array(4,580),array(5,550),array(6,550),array(7,565),array(8,567),array(9,565),array(10,557),array(11,550),array(12,553));
                    $pc = new C_PhpChartX(array($data),'basic_chart');
                    $pc->add_plugins(array('canvasTextRenderer'));
                    $pc->set_title(array('text'=>'Dépense en Eau par Mois'));
                    
                    //$pc->add_series(array('renderer'=>'plugin::BarRenderer'));
                    $pc->set_yaxes(array(
                        'yaxis' => array(
                            'label'=>'Euro')
                    ));
                    $pc->set_xaxes(array(
                        'xaxis'  => array(
                            'label'=>'Mois'))
                    );
                    $pc->draw();
                ?>
            </div>
            <div class="col"></div>
        </div>
    </div>
</body>
</html>

<?php ?>