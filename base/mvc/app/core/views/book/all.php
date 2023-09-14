<?php 
    $pageTitle = "Notre bibliothèque";
    require_once('../header.php');
    require_once('../../models/bookModel.php');
    $results = getAll()
?>

<h1>Les ouvrages de notre bibliothèque&nbsp;:</h1>


<table border=1>
        <thead>
            <th>Titre</th>
            <th>Description</th>
            <th>Prix</th>
            <th>Modifier</th>
            <th>Supprimer</th>
        </thead>
        <tbody>
            <?php foreach($results as $book){ ?>
                <tr>
                    <td><?= $book["name"]; ?></td>
                    <td><?= $book["description"]; ?></td>
                    <td><?= $book["price"]; ?></td>
                    <td>
                        <form method="POST" action="./update.php">
                            <input type="hidden" value="<?= $book["id"]; ?>" name="updateID">
                            <input type="submit" value="📝">
                        </form>
                    </td>
                    <td>
                        <form method="POST" action="./delete.php">
                            <input type="hidden" value="<?= $book["id"]; ?>" name="deleteID">
                            <input type="submit" value="🗑️">
                        </form>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    <p><a href="./add.php" title="Ajouter un livre à notre bibliotheque">Ajouter un livre</a></p>