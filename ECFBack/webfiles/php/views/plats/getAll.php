<?php
require_once('./webfiles/php/models/plats/getAll.php');
require_once('./webfiles/php/models/dbConnect.php');

?>
<img src="../../src/img/Restaurant.svg" alt="Image de l'enseigne du Restaurant (Fictif)">
</header>
<main>
    <div class="menuR">
<h1>Gestion des plats du restaurant :</h1>
    <table id="table">
        <thead>
            <th>Nom</th>
            <th>Description</th>
            <th>Prix</th>
            <?php if (!empty($_SESSION) && $_SESSION["connected"] === TRUE) { ?>
            <th>Modifier</th>
            <th>Supprimer</th>
            <?php }?>
        </thead>
        <?php foreach ($results as $single) { ?>
            <tr>
                <td class="nomPlat paddingBottom"><?php echo $single["name"] ?></td>
                <td class="paddingBottom"><?php echo $single["description"] ?></td>
                <td class="paddingBottom"><?php echo $single["price"] ?>€</td>
                <td>
                    <?php if (!empty($_SESSION) && $_SESSION["connected"] === TRUE) { ?>
                        <form method="POST" action="./webfiles/php/views/plats/modifierPlat.php" class="paddingBottom">
                            <input type="hidden" name="id" value="<?php echo $single["id"] ?>">
                            <button type="submit" title="Editer ce plat">📝</button>
                        </form>
                </td>
                <td>
                        <form method="POST" action="./webfiles/php/models/plats/delete.php" class="paddingBottom">
                            <input type="hidden" name="id" value="<?php echo $single["id"] ?>">
                            <button type="submit" title="Supprimer ce plat">🗑️</button>
                        </form>
                    <?php } ?>
                </td>
            </tr>
        <?php } // endForeach ?>
    </table>
        <p class="ajoutPlat"><a href="./webfiles/php/views/plats/ajoutPlat.php" title="Ajouter un plat à la carte du restaurant">Ajouter un plat</a></p>
    </div>
</main>
