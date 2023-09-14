    <?php
    require_once('../../actions/dbconnect.php'); 
    require_once('../header.php');

    if(!empty($conn)):
            /* echo "Connexion BDD réussie"; */
    ?>
    </header>
    <main>
        <h1>Ventes flash et promotions</h1>
        <div class="container">


            <!-- 
                Modèle de carte HTML à afficher pour chaque article issu de la BDD
                en prenant soin de mettre à jour : 
                - l'illustration, 
                - la description de l'image (alt)
                - le prix
                - le nom du produit

                Bon courage ! :)
            -->

            <?php 
                $exec = $conn->query("SELECT * FROM products");
                if($exec != false):

                $res = $exec->fetchAll(PDO::FETCH_ASSOC);

                foreach($res as $tuple):
            ?>
                <div class="card">
                <?php if(!empty($_SESSION) && $_SESSION["connected"] === TRUE){?>
                    <form action="../../actions/products/scriptDelete.php" method="POST">
                        <input type="hidden" name="id" value="<?php echo $tuple["id"]; ?>">
                        <button type="submit">X</button>
                    </form>

                    <form action="./formUpdate.php" method="POST">
                        <input type="hidden" name="id" value="<?php echo $tuple["id"]; ?>">
                        <button type="submit">Modifier</button>
                    </form>
                <?php 
                }else{

                };
                ?>

                    <img 
                        src="<?= $tuple["img"]; ?>" 
                        alt="illustration de <?= $tuple["designation"]; ?>"
                    >
                    <p class="info"><?= $tuple["prix"]; ?> €&nbsp;-&nbsp;Vente flash</p>
                    <p class="product"><?= $tuple["designation"]; ?></p>
                </div>
                <!-- Fin du modèle de carte -->
            <?php endforeach; ?>

            <?php else: ?>
                <p>Requete SQL non valide.</p>
            <?php endif;?>









            
            
        </div>
    </main>

    <?php require_once('../footer.php');?>

    <?php endif; ?>
</body>
</html>