<?php 
    
    $conn = new PDO(  
        'mysql:host=localhost;dbname=pays;charset=utf8','root',''
    );
        if(!empty($conn)){

            $nom = $_POST["nomV"];
            $desc = $_POST["descV"];
            $img = $_POST["imgV"];

            $req = "INSERT INTO suisse (ville, descv ,img) VALUES ('$nom', '$desc', '$img')";

            $exec = $conn->query($req);
        
        }else{
            echo "La connexion n'a pas pu être établi avec la BDD";
        }
?>