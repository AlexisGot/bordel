<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
    function currencyConversion($a, $b){
        $taux = $a;
        $value = $b;
        $converted = $taux*$value;
        return $converted;
}?>

<p><?=currencyConversion(141,10)?></p>

<?php 
// function multiTable($b){
//     $product = 1;
//     for($i =0 ; $i <=10 ; $i++){
//     $product = $b*$i;
//     echo $product,"<br>";
//     }
// }?>


<?php 
    // function helloWorld($fname, $lname){
    //     echo 'Bonjour ',$fname ,' ', $lname, ' !!!';
    // } 

    // helloWorld('FirstName','LastName');
?>

<?php 

        // function fahrenheit($celsius){
        //     $fht = $celsius*1.8000+32;
        //     echo $fht, '°F';
        // }

        // fahrenheit(15);
?>

<?php 
    // $a = "Il fait MOCHE aujourd'hui";

    // if (str_contains($a, 'beau')){
    //     echo 'Vrai';
    // } else {
    //     echo 'Faux';
    // }
?>

<?php 
    // function nbTest($nb){
    //     if($nb>10){
    //         $result = 'Au-dessus de 10';
    //     } else {
    //         $result = 'En-dessous de 10';
    //     }
    //     return $result;
    // }?>



<?php 
    function noIdea($nb){
        if($nb%2){
            $result = "IMPAIR";
        } else {
            $result = "PAIR";
        }
        return $result;
    }
?>

<p><?=noIdea(5)?></p>

<?php 
    function connexion($login){
        if($login == TRUE){
            $m = "Connexion";
        } else {
            $m = "Accès refusé";
        }
        return $m;
    }
?>

<p><?=connexion(Admin)?></p>



</body>
</html>
