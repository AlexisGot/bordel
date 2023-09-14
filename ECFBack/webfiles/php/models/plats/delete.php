<?php

    // Récupère la connexion à la base de données
    require_once('../dbConnect.php');

    // Contrôle de l'état de la connexion à la base de données
    if($pdoConn){
        // Si la connexion à la base de donnée est effective :
        
        // Contrôle de l'existance de $_GET et du paramètre id issu de l'URL
        if($_POST && $_POST["id"]){
            
            // Stocke le paramètre ID dans une variable
            $platID = $_POST["id"];
    
            // Stockage de la requête SQL au sein de la variable $query.
            $query = "DELETE FROM `plats` WHERE id=$platID";
            
            // Execution de la requête sur la base de données.
            // Stockage du résultat de l'exécution dans la variable $execution.
            $execution = $pdoConn->query($query);

            if($execution){
                // Redirection vers l'index
                header('Location: ../../../../index.php');
            }
        }
        else{
            // Appeler une vue qui dit qu'une erreur s'est produite
        }

    }

?>