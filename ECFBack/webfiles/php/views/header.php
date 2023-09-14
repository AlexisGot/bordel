<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes Bons Petits Plats - Admin Dashboard - Gestion de la carte du restaurant</title>
    <meta name="description" content="Administration des plats du restaurant">
    <link rel="stylesheet" href="./webfiles/css/style.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <meta name="description" content="ECF Back End d'une carte d'un restaurant">
</head>
<?php
session_start();
?>

<body>
    <header>
        <nav>
            <p>Restaurant</p>
            <ul>
                <li><a href="#">Plat</a></li>
                <li><a href="#">Dessert</a></li>
                <li><a href="#">Boissons</a></li>
                <?php if (!empty($_SESSION) && $_SESSION["connected"] === TRUE) { ?>
                    <li><a href="./webfiles/php/models/user/scriptDeconnexion.php">Deconnexion</a></li>
                <?php } else { ?>
                    <li><a href="./webfiles/php/views/inscription.php">Inscription</a></li>
                    <li><a href="./webfiles/php/views/login.php">Connexion</a></li>
                <?php } ?>
            </ul>
        </nav>