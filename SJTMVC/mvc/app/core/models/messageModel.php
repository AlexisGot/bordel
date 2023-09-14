<?php 

    function insert($msg, $uID){
        require_once('./app/core/models/dbConnect.php');
        $req = "INSERT INTO message (contenu, user_id) VALUES ('$msg', $uID)";
        $exec = $pdoConn->query($req);
        header('Location: index.php?controller=home&action=accueil');
        return $exec;
    }

    function getAll(){
        require_once('./app/core/models/dbConnect.php');
        $req = "SELECT m.contenu, u.pseudo FROM message AS m INNER JOIN user AS u ON m.user_id = u.id";
        $exec = $pdoConn->query($req)->fetchAll(PDO::FETCH_ASSOC);
        return $exec;
    }