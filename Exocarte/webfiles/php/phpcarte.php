<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="csscarte.css">
</head>
<body>
    <pre>
        <?php var_dump($_FILES);?>
    </pre> 
    <pre>
        <?php var_dump($_POST);?>
    </pre>
    
    <?php 
        $nom = $_FILES["file"]["tmp_name"];
        $nomdestination = "./upload/".basename($_FILES["file"]["tmp_name"]);
        move_uploaded_file($nom, $nomdestination);
    ?>

    <?php 
        if(function_exists("exif_imagetype")){
            echo "Installed";
        } else {
            echo "Not Installed";
        }
    ?>

<?php 
            if(empty($_POST)){ ?>
                <h1><?php echo "Le formulaire n'a pas été envoyé"; ?></h1>
    <?php   }

            else{ 
                var_dump(formValidatorWithUrl($_POST));
            } 
            

            function formValidatorWithUrl($array){

                $userPtrn = "/^[a-zA-ZÀ-ÿ]+$/";
                    
                $formErrors = [];

                foreach($array as $cle => $valeur){

                    if($cle === "firstName" || $cle === "lastName"){

                        if(empty(trim($valeur)) || strlen($valeur) < 2 || strlen($valeur) > 25 || !preg_match($userPtrn, trim($valeur))){
                            $formErrors[$cle] = TRUE;
                        }
                    }
                    else{

                        if($cle === "urlT" || $cle === "urlL" || $cle === "urlF" ){
                            if(!filter_var($valeur,FILTER_FLAG_HOST_REQUIRED, FILTER_VALIDATE_URL)){
                                $formErrors[$cle] = TRUE;
                            }
                        }

                    }
                }
                
                return $formErrors;
            }
    ?>
<header>
</header>
<main>
    <img src="./upload/img.png" alt="">
    <p><?=$_POST["firstName"];?></p>
    <p><?=$_POST["lastName"];?></p>
    <a href="http://"></a>
    <a href="http://"></a>
    <a href="<?=$_POST["urlT"];?>"></a>    
    <a href="<?=$_POST["urlL"];?>"></a>    
    <a href="<?=$_POST["urlF"];?>"></a>    
</main>
<footer>

</footer>
</body>
</html>