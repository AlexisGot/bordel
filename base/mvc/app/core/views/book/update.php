<?php 
        $pageTitle = "Modification d'un livre";
        require_once('../header.php'); 
        require_once('../../models/bookModel.php');

        $book = findBy($_POST['updateID']);
    ?>

    <h1>Modification du livre intitulé <?= $book["name"]?>&nbsp;:</h1>

    <form action="./update.php" method="POST">
        <input type="text" name="titre" placeholder="Nom de votre livre" value="<?= $book["name"]?>">
        <textarea name="description" placeholder="Courte description de votre livre"><?= $book["description"]?></textarea>
        <input type="number" name="prix" placeholder="Prix du livre" value="<?= $book["price"]?>">
        <input type="hidden" value="<?= $book["id"]; ?>" name="bookID">
        <input type="submit" value="Envoyer" name="submitted">
    </form>
    
    <?php require_once('../footer.php'); ?>