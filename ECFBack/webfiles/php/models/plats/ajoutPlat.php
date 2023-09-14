<?php 
    // Inclusion du fichier de connexion à la base de données
    require_once('../dbconnect.php');
    
    // Vérification si la connexion à la base de données n'est pas vide
    if (!empty($pdoConn)) {

        // Récupération des valeurs à partir de la requête POST
        $nom = htmlentities($_POST["nom_plat"]);
        $desc = htmlentities($_POST["desc_plat"]);
        $prix = filter_input(INPUT_POST, "prix_plat", FILTER_VALIDATE_FLOAT);

        // Vérification de l'intégrité des données
        if ($nom !== null && $desc !== null && $prix !== false) {
            // Construction de la requête SQL préparée
            $req = "INSERT INTO plats (name, description, price) VALUES (:nom, :desc, :prix)";
            $preparedQuery = $pdoConn->prepare($req);
            $preparedQuery->bindParam(":nom", $nom, PDO::PARAM_STR, 255);
            $preparedQuery->bindParam(":desc", $desc, PDO::PARAM_STR, 255);
            $preparedQuery->bindParam(":prix", $prix, PDO::PARAM_INT, 10);
            
            // Exécution de la requête préparée
            if ($preparedQuery->execute()) {
                // Redirection vers la page d'index
                header('Location: ../../../../index.php');
            } else {
                echo "La requête n'a pas fonctionné.";
            }
        } else {
            echo "Données invalides."; // Message affiché si les données sont invalides
        }
    }
    else {
        // La connexion à la base de données n'a pas réussi
    }
?>
