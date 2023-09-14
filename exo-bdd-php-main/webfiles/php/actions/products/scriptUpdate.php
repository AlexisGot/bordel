<?php 
    
    require_once('../dbconnect.php');
    
    if($conn){

        $designation = $_POST["designation"];
        $prix = $_POST["prix"];
        $img = $_POST["image"];
        $id = $_POST["id"];
      

        $req = "UPDATE products SET designation = '$designation', img = '$img', prix = '$prix' WHERE id  = $id";

        $exec = $conn->query($req);

        if($exec != false){
            header('Location: ../../views/products');
        }
    }else{

        echo "Bien joué tu es nul";
    }
    ?>