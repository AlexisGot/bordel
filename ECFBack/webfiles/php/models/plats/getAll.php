<?php

    // Récupère la connexion à la base de données
    require_once('./webfiles/php/models/dbConnect.php');

    // Contrôle de l'état de la connexion à la base de données
    if($pdoConn){

        // Si la connexion à la base de donnée est effective :

        // Stockage de la requête SQL au sein de la variable $query.
        $query = "SELECT * FROM `plats`";
    
        // Execution de la requête sur la base de données.
        // Stockage du résultat de l'exécution dans la variable $execution.
        $execution = $pdoConn->query($query);
    
        // Contrôle de l'état de l'exécution de la requête SQL
        if($execution){

            // Si la requête s'est exécutée sans accrocs :

            // Stockage de l'ensemble des résultats de la requête dans la variable $results
            $results = $execution->fetchAll(PDO::FETCH_ASSOC);
        }

    }

    
?>