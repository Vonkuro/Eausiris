<?php
session_start();
include('../Workspace/modele.php');

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

<div class="login-page">
    <div class="form">
      <form class="login-form" action="./login.php" method="post">
        <input type="text" name="identifiant" placeholder="pseudo" value="<?php $identifiant ?>"required/>
        <input type="password" name="motdepasse" placeholder="mot de passe" value="<?php $motdepasse ?>" required/>
        <button  type="submit" <a href="dashboard.php">Connexion</a></button>
        <p class="message">Pas encore enregistrée? <a href="../CreateCompte/createCompte.php">Créez un compte!</a></p>
      </form>
    </div>
  </div>