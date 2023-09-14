<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suisse</title>
    <meta name="description" content="Projet sur la Suisse et ses villes">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <nav>
            <img src="./suisse.png" alt="Image du drapeau de la Suisse">
            <ul>
                <li><a href="#">Spécialité</a></li>
                <li><a href="#">Tourisme</a></li>
                <li><a href="#">Sport</a></li>
                <li><a href="#">Histoire</a></li>
                <li><a href="#">Culture</a></li>
                <li><a href="#">Economie</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h2>Quels sont les villes ou aller en Suisse ?</h2>

        <?php 
             
             $conn = new PDO(
                'mysql:host=localhost;dbname=pays;charset=utf8','root',''
            );

            if(!empty($conn)){

                $req = "SELECT * FROM suisse";

                $exec = $conn->query($req);

                if($exec != false){

                    $results = $exec->FetchAll(PDO::FETCH_ASSOC);

                    foreach($results as $tuple){
                       
                        $city = $tuple["ville"];
                        $desc = $tuple["descv"];
                        $image = $tuple["img"];
                        ?>
        <p>
            <?php echo $city ?>
        </p>
        <img src="<?php echo $image ?>" alt="Illustration de <?php echo $city ?>">
        <p>
            <?php echo $desc ?>
        </p>
    </main>
        <?php
                    
                }
                }
                else{
                    echo "Une erreur est servenue";
                }
            }
            else{
                echo "Erreur à la base de données";
            }
          ?>
        <footer>
            <p>Projet réalisé par Alexis, Vincent et Valentin</p>
        </footer>


</body>

</html>