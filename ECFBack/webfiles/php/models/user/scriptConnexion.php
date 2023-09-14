<?php 

    require_once("../dbconnect.php");

    if(!empty($pdoConn)){

        
        $email = $_POST["mail"];
        $password = $_POST["passwrd"];
        $hashed = hash('md5' , $password);

        $req = "SELECT * FROM users WHERE email='$email' AND pwd='$hashed'";

        $exec = $pdoConn->query($req);

        if($exec != false){
            $result = $exec->fetchAll(PDO::FETCH_ASSOC);
                if(!empty($result)){
                    session_start();
                    $_SESSION["connected"] = TRUE;
                    header('Location: ../../../../index.php');
                }else{
                    echo "Email/Mot de passe incorrecte, vous pouvez accèder au site en tant que Visiteur ou réesayer de vous connecter";?>
                    <button type="submit"><a href="../../views/login.php">Login</a></button>
                    <button type="submit"><a href="../../../../index.php">Mode Visiteur</a></button>
                <?php }
        
        }else{
            echo "Une erreur est survenue, vous allez accèder au site en tant que visiteur";?>
            <button type="submit"><a href="../../../../index.php">Mode Visiteur</a></button>
        <?php }

    }
    else{
        echo "La BDD n'est pas connecter";
    }

?>