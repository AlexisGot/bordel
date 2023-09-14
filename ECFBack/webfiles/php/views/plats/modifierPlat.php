<?php
require_once('../../models/dbConnect.php');

session_start();

function getPlatDetails($pdoConn, $id) {
    $query = "SELECT * FROM plats WHERE id = :id";
    $stmt = $pdoConn->prepare($query);
    $stmt->bindParam(":id", $id, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

if ($pdoConn) {
    $id = $_POST["id"];
    $platDetails = getPlatDetails($pdoConn, $id);

    if ($platDetails) {
        ?>
        <form method="POST" action="../../models/plats/modifierPlat.php">
            <input type="text" name="name" value="<?php echo $platDetails["name"]; ?>">
            <input type="text" name="desc" value="<?php echo $platDetails["description"]; ?>">
            <input type="number" step="0.01" max="999999999" min="0.01" name="prix" value="<?php echo $platDetails["price"]; ?>">
            <input type="hidden" name="id" value="<?php echo $id ?>">
            <button type="submit">Modifier</button>
        </form>
        <?php
    } else {
        echo "Plat non trouvé.";
    }
}
?>
