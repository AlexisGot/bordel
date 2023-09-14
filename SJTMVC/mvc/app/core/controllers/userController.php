<?php 
    // index.php?controller=user&action=showSignUpForm

    function showSignUpForm(){
        require_once('./app/core/views/user/signup.php');
    }

    // index.php?controller=user&action=signUp

    function signUp(){
        require_once('./app/core/models/userModel.php');

        $pseudo = htmlentities($_POST['pseudal']);
        $password = password_hash($_POST['mdp'], PASSWORD_ARGON2I);

        sendSignUp($pseudo, $password);
        header('Location: index.php?controller=home&action=accueil');
    }

    // index.php?controller=user&action=showLoginForm

    function showLoginForm(){
        require_once('./app/core/views/user/login.php');
    }

    function login(){
        // Recuperer les datas du formulaire (pseudo & le mot de passe)
        $pseudo = $_POST['pseudal'];
        $pass = $_POST['mdp'];

        // Requeter la BDD pour controller l'existance du pseudo
        require_once('./app/core/models/userModel.php');
        $results = findOne($pseudo);

        if($results){
            if(password_verify($pass, $results[0]['pass'])){
                // Proceder à la connexion
                session_start();
                $_SESSION['pseudo'] = $pseudo;
                $_SESSION['user_id'] = $results[0]['id'];
                header('Location: index.php?controller=home&action=accueil');
            }
        }
        else{
            echo "L'utilisateur renseigné n'existe pas en base de données";
        }

        // Si un champ est retourné alors on controle : 

        // Le cas contraire (afficher une erreur car le compte n'existe pas)
    }

    function signOut(){
        session_start();
        session_unset();
        session_destroy();
        header('Location: index.php?controller=home&action=accueil');
    }

?>