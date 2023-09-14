<?php 

    function accueil(){
        session_start();
        require_once('./app/core/views/home/accueil.php');
        require_once('./app/core/controllers/messageController.php');
        require_once('./app/core/views/message/chat.php');
    }