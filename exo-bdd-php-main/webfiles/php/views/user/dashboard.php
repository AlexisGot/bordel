<?php 
    session_start();
    if(!empty($_SESSION) && $_SESSION["connected"] === TRUE){
        header('Location: ../products');
    }else{
        echo "Vous n'avez pas accès à la page, veuillez-vous connectez !";?>
        
        <button type="submit"><a href="../login.php">Se connecter</a></button>
    <?php
    }
?>