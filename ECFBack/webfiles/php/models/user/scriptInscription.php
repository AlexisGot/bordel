<?php
require_once("../dbconnect.php");

// Liste des domaines autorisés
$domainesAutorises = array("hotmail.fr", "hotmail.com", "outlook.fr", "outlook.com", "live.fr", "live.com", "free.fr", "free.com", "orange.fr", "orange.com");

if (!empty($pdoConn)) {
    $mail = $_POST["ml"];
    $motdepasse = $_POST["mdp"];
    $hashed = hash('md5', $motdepasse);

    // Extrait le domaine de l'e-mail
    $domaine = substr(strrchr($mail, "@"), 1);

    // Vérifie si le domaine est dans la liste des domaines autorisés
    if (!in_array($domaine, $domainesAutorises)) {
        echo "Veuillez saisir un email avec l'un des domaines autorisés : hotmail, outlook, live, free, orange";
        ?>
        <button><a href="../views/inscription.php">Redirection vers la page d'Inscription</a></button>
        <?php
        exit;
    }

    $req = "INSERT INTO users (email,pwd) VALUES ('$mail','$hashed')";
    $exec = $pdoConn->query($req);

    if ($exec != false) {
        header('Location: ../../../../index.php');
    } else {
        echo "Vous n'êtes pas inscrit";
    }
} else {
    echo "La connexion à la BDD n'a pas pu être effectuée";
}
?>
