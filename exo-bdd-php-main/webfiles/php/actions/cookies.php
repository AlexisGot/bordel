<?php
    setcookie("rgpd", "accepted", time()+2592000, "/");
    header("location: ../views/products/index.php");
?>