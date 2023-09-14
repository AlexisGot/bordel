<?php 

    require_once("../dbconnect.php");

    if(!empty($conn)){

        
        $email = $_POST["mail"];
        $password = $_POST["passwrd"];

        $req = "SELECT * FROM users WHERE email='$email' AND pwd='$password'";

        $exec = $conn->query($req);

        if($exec != false){
            $result = $exec->fetchAll(PDO::FETCH_ASSOC);
                if(!empty($result)){
                    session_start();
                    $_SESSION["connected"] = TRUE;
                    header('Location: ../../views/products/index.php');
                    
                }else{
                    echo "Email/Mot de passe incorrecte, vous pouvez accèder au site en tant que Visiteur ou réesayer de vous connecter";?>
                    <button type="submit"><a href="../../views/login.php">Login</a></button>
                    <button type="submit"><a href="../../views/products/index.php">Mode Visiteur</a></button>
                <?php }
        
        }else{
            echo "Une erreur est survenue, vous allez accèder au site en tant que visiteur";?>
            <button type="submit"><a href="../../views/products/index.php">Mode Visiteur</a></button>
        <?php }

    }
    else{
        echo "La BDD n'est pas connecter";
    }
    
    
    
    
    
    
?>