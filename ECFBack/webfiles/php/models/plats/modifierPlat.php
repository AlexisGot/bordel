<?php 

require_once('../dbConnect.php');

// Vérifie si la connexion à la base de données a été établie avec succès
if ($pdoConn) {
    // Récupère les valeurs depuis la requête POST (nom, description, prix et identifiant du plat)
    $nom = htmlentities($_POST["name"]);
    $desc = htmlentities($_POST["desc"]);
    $prix = htmlentities($_POST["prix"]);
    $id = $_POST["id"];

    // Construit une requête SQL préparée pour mettre à jour les valeurs du plat dans la table 'plats'
    $req = "UPDATE plats SET name = :nom, description = :desc, price = :prix WHERE id = :id";
    $preparedQuery = $pdoConn->prepare($req);
    $preparedQuery->bindParam(":nom", $nom, PDO::PARAM_STR, 255);
    $preparedQuery->bindParam(":desc", $desc, PDO::PARAM_STR, 255);
    $preparedQuery->bindParam(":prix", $prix, PDO::PARAM_INT, 10);
    $preparedQuery->bindParam(":id", $id, PDO::PARAM_INT, 10);

    // Exécute la requête préparée
    if ($preparedQuery->execute()) {
        // Redirige vers la page d'index
        header('Location: ../../../../index.php');
    } else {
        echo "La mise à jour du plat a échoué."; // Message affiché si la requête échoue
    }
}

?>

