<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        var_dump($_GET);
    ?>

    <header>
        <h1><?php echo $_GET["h1"]; ?></h1>
        <p><?php echo $_GET["intro"]; ?></p>
        <img src="<?php echo $_GET["illustration"];?>" alt="Illustration de ...">
    </header>
    <main>
        <h2><?php echo $_GET["h2"]; ?></h2>
        <p><?php echo $_GET["sous-intro"]; ?></p>
        <div>
            <article>
                <h3><?php echo $_GET["first-h3"]; ?></h3>
                <p><?php echo $_GET["parag-sous-h3-1"]; ?></p>
            </article>
            <article>
                <h3><?php echo $_GET["second-h3"]; ?></h3>
                <p><?php echo $_GET["parag-sous-h3-2"]; ?></p>

                <!-- 
                    Extension Chrome et Firefox qui permet d'auto renseigner
                    des champs afin de tester les choses rapidement.

                    FAKE FILLER
                -->

            </article>
        </div>
    </main>
</body>
</html>