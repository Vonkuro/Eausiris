<?php
session_start();
include('modele.php');

?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Login</title>
  <?php
  $Informations = getInformations();
  
  ?>
  <link rel="stylesheet" href="login.css">
</head>
<body>
<!-- <div class="CarouselBackground">
<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" style="height:1024px; width:1920px; z-index: 1;" src="./agroalimentaire.jpg" alt="First slide">
    </div> -->

<div class="login-page" style="z-index: index 2;;">
    <div class="form" style=" border: 2mm ridge rgba(125, 0, 255, .6);">
    <img src="./logo.png" class="mx-auto d-block" alt="Eausiris">
    <h1 class="font-italic" class="mx-auto d-block"> Bougez Moins !</h1>
    <h2 class="font-italic" class="mx-auto d-block"> Economisez Plus !</h2>
      <form class="login-form" action="./login.php" method="post">
        <input type="text" name="identifiant" placeholder="pseudo" value="<?php $identifiant ?>"required/>
        <input type="password" name="motdepasse" placeholder="mot de passe" value="<?php $motdepasse ?>" required/>
        <button  type="submit" <a href="dashboard.php">Connexion</a></button>
        <p class="message">Pas encore enregistrée? <a href="createCompte.php">Créez un compte!</a></p>
      </form>

    </div>
    
<!-- </div>
</div>
  </div> -->
  </div>
</body>

  