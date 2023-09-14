<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <header>
        <?php

        // Récupération de la connexion à la base de données
        $pdoConn = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');

        if ($pdoConn) {
            // Si la connexion à la base de donnée est effective :

            // Stockage de la requête SQL au sein de la variable $query.
            $query = "SELECT * FROM article";

            // Execution de la requête sur la base de données.
            // Stockage du résultat de l'exécution dans la variable $execution.
            $execution = $pdoConn->query($query);

            if ($execution) {

                // Si la requête s'est exécutée sans accrocs :
                // Stockage de l'ensemble des résultats de la requête dans la variable $results
                $results = $execution->fetchAll(PDO::FETCH_ASSOC);
            }
        }
        ?>

    </header>
    <main>
        <?php foreach ($results as $article) { ?>
            <h2><?= $article["nom"]; ?></h2>
            <img src="<?= $article["img"] ?>" alt="">
            <p><?= $article["desc"]; ?></p>
        <?php
        }
        ?>
    </main>
    <footer>


    </footer>
</body>

</html>