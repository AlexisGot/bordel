<?php
    $database = new PDO(
    'mysql:host=localhost;dbname=pays;charset=utf8',
    'root',
    ''
);

if(!empty($database)){
    $id = $_POST["id"];
    

    $req = "DELETE FROM suisse WHERE id=$id";
    $execution = $database->query($req);
    if($execution != false){
        echo " Supression OK";
    }
    else{
        echo "erreur de supression";
    }
}
else{

}
?>