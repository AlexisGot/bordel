<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta name="description" content="">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        if(empty($_POST)){
            header('Location: ./index.html'); 
        }
    
    ?>
    <header>


    </header>
    <main>
        <p>
            <?php
                $pattern = "/^[a-zA-ZÀ-ÿ]+$/";

                preg_match($pattern, trim($_POST["fname"]));
                if(!empty(trim($_POST["fname"])) && strlen($_POST["fname"]) > 2 && strlen($_POST["fname"]) < 25 && preg_match($pattern, trim($_POST["fname"]))){
                echo $_POST["fname"];
                } else {
                echo "Jean"; 
                }
            ?>
        </p>
        <p>
        <?php
                $pattern = "/^[a-zA-ZÀ-ÿ]+$/";

                preg_match($pattern, trim($_POST["lname"]));
                if(!empty(trim($_POST["lname"])) && strlen($_POST["lname"]) > 2 && strlen($_POST["lname"]) < 25 && preg_match($pattern, trim($_POST["lname"]))){
                echo $_POST["lname"];
                } else {
                echo "Cule"; 
                }
            ?>
        </p>
        <p>
        <?php
                $pattern = "/^[a-zA-ZÀ-ÿ]+$/";

                preg_match($pattern, trim($_POST["email"]));
                $email=($_POST["email"]);
                if(!empty(trim($_POST["email"])) && preg_match($pattern, trim($_POST["email"])) && filter_var($email, FILTER_VALIDATE_EMAIL)){
                echo $_POST["email"];
                } else {
                echo "exemple@mail.fr"; 
                }
            ?>
        </p>
        <p>
        <?php
                $pattern = "/^[a-zA-ZÀ-ÿ]+$/";

                preg_match($pattern, trim($_POST["message"]));
                if(!empty(trim($_POST["message"])) && strlen($_POST["message"]) > 10 && strlen($_POST["message"]) < 2000 && preg_match($pattern, trim($_POST["message"]))){
                echo $_POST["message"];
                } else {
                echo "Blablablabla"; 
                }
            ?>
        </p>
    </main>
    <footer>

    </footer>
</body>
</html>