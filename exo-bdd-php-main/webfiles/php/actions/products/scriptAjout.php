<?php 
    
    require_once('../dbconnect.php');
    
    if(!empty($conn)){

        $nom = $_POST["nom_produit"];
        $image = $_POST["img_produit"];
        $prix = $_POST["prix_produit"];

        $req = "INSERT INTO products (designation, img, prix) VALUES ('$nom', '$image', '$prix')";

        $exec = $conn->query($req);

        if($exec != false){
            header('Location: ../../views/products');
        }
        else{
            echo "la requête n'a pas fonctionné";
        }
    }
    else{
        // Connexion à la BDD n'a pas fonctionnée
    }
?>