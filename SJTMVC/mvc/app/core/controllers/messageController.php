<?php 

    function submit(){

        session_start();
        $userID = $_SESSION["user_id"];
        $msg = htmlentities($_POST["mess"]);

        require_once('./app/core/models/messageModel.php');
        insert($msg, $userID);
    }

    function findAllMsg(){
        require_once('./app/core/models/messageModel.php');
        $allMsg = getAll();
        return $allMsg;
    }

    function APIfindAllMsg(){
        // Autorise n'importe qu'elle domaine (.fr, .com, etc)
        header("Access-Control-Allow-Origin: *");
        // Autorise l'acces sans utiliser de domaine
        header("Acces-Controller-Allow-Headers: *");
        require_once('./app/core/models/messageModel.php');
        $allMsg = getAll();
        echo json_encode($allMsg);
    }