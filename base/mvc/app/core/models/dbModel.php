<?php 

function dbConnect(){
    
    // Informations permettant d'établir une connexion à la base de données intitulée mesLivres.
    $env = "localhost";
    $dbName = "mesLivres";
    $dbUser = "root";
    $dbPwd = "";
    
    // Stockage de l'état de la connexion à la base de données dans la variable $pdoConn.
    $conn = new PDO('mysql:host='.$env.';dbname='.$dbName.';charset=utf8',$dbUser,$dbPwd);

    // On return $conn car on en aura besoin en-dehors de la function
    return $conn;
}


