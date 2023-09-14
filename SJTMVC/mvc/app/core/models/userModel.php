<?php 

function sendSignUp($pseudo, $pass){
    require_once('./app/core/models/dbConnect.php');
    $req = "INSERT INTO user (pseudo, pass) VALUES ('$pseudo','$pass')";
    $exec = $pdoConn->query($req);
    return $exec;
}

function findOne($pseud){
    require_once('./app/core/models/dbConnect.php');
    $req = "SELECT * FROM user WHERE pseudo = '$pseud'";
    $exec = $pdoConn->query($req)->fetchAll(PDO::FETCH_ASSOC);
    return $exec;
}