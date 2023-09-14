<?php 

    require_once('../../actions/dbconnect.php');

    session_start();
    
    if($conn){
     
        $id = $_POST["id"];

        $req = "SELECT * FROM products WHERE id=$id";

        $exec = $conn->query($req);

        if($exec != false){

            $res = $exec->fetchAll(PDO::FETCH_ASSOC);
        if(!empty($_SESSION) && $_SESSION["connected"] === TRUE){?>
            <form method="POST" action="../../actions/products/scriptUpdate.php">
                <input type="text" name="designation" value="<?php echo $res["0"]["designation"];?>">
                <input type="url" name="image" value="<?php echo $res["0"]["img"];?>">
                <input type="number" name="prix" value="<?php echo $res["0"]["prix"];?>">
                <input type="hidden" name="id" value="<?php echo $id ?>">
                <button type="submit">Modifier</button>
            </form>
    <?php }
else{
    header('Location: ./index.php');
}?>

        <?php }
    }



?>