<?php
    require 'modele.php';
    $insertionbdd = insertBDD();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Creation de Compte</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="./createCompte.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <img src="../logo.png" alt="Eausiris">
            </div>
            <div class="col">
            </div>
            <div class="col">
            </div>
        </div>
        <div class="row">
            <div class="col">
            </div>
            <div class="col">
            </div>  
            <div class="col">
            </div>
        </div>
        <div class="row">
            <div class="col">
            </div>      
            <div class="col">
                <h1>Création de Compte</h1>
                <br>
                <form name="form_inscription" method="post" action="./createCompte.php">
                    <div class="mb-3">
                        <label for="identifiant" class="form-label">
                            <h3>Nom d'Utilisateur</h3>
                        </label>
                        <input type="text" class="form-control" name="identifiant">
                    </div>
                    <div class="mb-3">
                        <label for="motdepasse" class="form-label">
                            <h3>Mot de Passe</h3>
                        </label>
                        <input type="password" class="form-control" name="motdepasse">
                    </div>
                    <div class="mb-3">
                        <label for="code_licence" class="form-label">
                            <h3>Clé de Licence</h3>
                        </label>
                        <input type="text" class="form-control" name="code_licence">
                    </div>
                    <div class="d-grid gap-2 col-12 mx-auto">
                        <button type="submit" name="valider" class="btn btn-success">Enregistrer</button>
                    </div>
                </form>
            </div>
            <div class="col">
            </div>
        </div>
    </div>
</body>
</html>
