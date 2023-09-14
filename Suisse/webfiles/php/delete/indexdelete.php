
<?php
    $database = new PDO(
    'mysql:host=localhost;dbname=pays;charset=utf8','root',''
);

if(!empty($database)){?>
    <?php $requete = "DELETE FROM suisse WHERE id=$id";
        $exec = $database->query($requete);
        if($exec != false){?>
            <?php $resultats = $exec->fetchAll(PDO::FETCH_ASSOC);?>

           <?php foreach($resultats as $tuple){

            $img = $tuple["img"];
            $descr = $tuple["descv"];
            $ville = $tuple["ville"];
            ?>
                <div class="card">
                <form action="./scriptdelete.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $tuple["id"];?>">
                <div><button type="submit">Suprimer l'article</button></div>
                </form>
                <img src=<?php echo "$img";?> alt="illustration de <?php echo "$descr";?>">
                <p class="info"><?php echo "$ville";?></p>
                <p class="product"><?php echo "$descr";?></p>
                </div>
            <?php }
        }
        else{
            echo "échec de l'execution de la requete";
        }
}
else{
    echo "Echec de la connexion";
}
?>
