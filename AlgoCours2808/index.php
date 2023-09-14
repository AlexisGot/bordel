<?php

/**
 * Fonction qui permet de doubler la valeur d'un nombre souhaité
 * 
 * @param float $nb Valeur qu'on souhaite doubler
 * @return float
 * 
 * @author
 */
// function doubleTaValeur(float $nb){
// $result = $nb + $nb;
// echo $result;
// }

// doubleTaValeur(5);


// /**
//  * Fonction qui permet de rendre la valeur souhaité en cube
//  * 
//  * @param float $nbCube Valeur qu'on souhaite rendre en cube
//  * @return float
//  * 
//  * @author Ratio
//  */
// function cubeTaValeur($nbCube){
//     $resultCube = $nbCube*$nbCube*$nbCube;
//     echo $resultCube;
// }
// cubeTaValeur(10);

// function salutation($nmFamille, $prenom){
//     echo " Bonjour ".$nmFamille.' '.$prenom." ! Comment vas tu ?";
// }

// salutation("GOT", "Alexis");
// salutation("WONG", "Jerome");
// salutation("Houilles", "Jack");

// /**
//  * Fonction qui permet de valider des prénoms et des noms de familles selon un preg_match
//  * 
//  * @param string $nmFamille
//  * @param string $prenom
//  * @return string
//  * 
//  * @author Ratio 
//  */

// function verifName(string $nmFamille, string $prenom){
//     $regex = '/^[A-Z][\p{L}-]*$/';
//     if(!empty(preg_match($regex, $nmFamille))){
//         echo "le nom est valide ";
//         if(!empty(preg_match($regex, $prenom))){
//                 echo "le nom et le prénom sont valides ";
//             }else{
//                     echo "le prenom n'est pas valide ";
//                 }
//             }else{
//                     echo "le nom n'est pas valide ";
//     }
// }

// verifName("Bernard", "");

// // //---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

// /**
//  * Fonction qui permet de convertir l'Euro en Dollar Us
//  * 
//  * @param float $val Correspond à la valeur qu'on souhaite convertir
//  * @return float
//  * 
//  * @author Ratio
//  */
// function convertisseurSommeFunction(float $val){

//     $dollarUs = "1.08";
//     $res = $val*$dollarUs;

//     return $res;
// }


// convertisseurSommeFunction(100);

/**
 * Fonction de connexion à la base de données
 * 
 * @param string $dbName Correspond to the dataBase Name
 * @param string $user Correspond to the User in dataBase
 * @param string $psw Correspond to the Password in dataBase
 * @param string $hote Correspond to the hote in dataBase
 * @return PDO $conn
 * 
 * @author Ratio
 */

// Fonction pour établir une connexion à la base de données
function dbConnect(string $dbName, string $user, string $psw , string $hote = "localhost")
{
    $conn = new PDO(
        "mysql:host=$hote;dbname=$dbName;charset=utf8",
        "$user",
        "$psw"
    );
    return $conn;
};



// // Fonction pour insérer les informations du client dans la base de données

// /**
//  * Fonction pour inserrer un client dans la table souhaité
//  * 
//  * @param string $nom Corresponds to the Last Name User in table
//  * @param string $prenom Corresponds to the First Name User in table
//  * @param string $email Corresponds to the Email User in table
//  * @param string $mdp Corresponds to the Password User in table
//  * @param int $chevalet Corresponds to the Chevalet ID in table (Foreign Key)
//  * @return TRUE
//  * 
//  * @author Ratio
//  */
// function insertClient(string $nom, string $prenom, string $email, string $mdp, int $chevalet) {
//     // Obtenir une connexion à la base de données
//     $conn = dbconnect("localhost", "bk", "root", "");

//     // Vérifier si la connexion a réussi
//     if ($conn) {
//         // Construire la requête SQL pour insérer les données du client
//         $reqInsert = "INSERT INTO client (cli_nom, cli_prenom, cli_email, cli_password, id_Chevalet) 
//                     VALUES ('$nom', '$prenom', '$email', '$mdp', '$chevalet')";

//         // Exécuter la requête
//         $exec = $conn->query($reqInsert);

//         // Vérifier si l'exécution de la requête a réussi
//         if ($exec) {
//             return true; // Indiquer que l'insertion a réussi
//         }
//     }
// }

// // Appeler la fonction insertClient pour insérer un nouvel enregistrement de client
// insertClient("Tantpis", "Bernard", "BernardTantpis@hotmail.fr", "123Bernard", "2");

/**
 * Fonction pour supprimer le client (qu'on souhaite par son id) de la table voulu
 * 
 * @param int $idClient Variable qui prend pour valeur l'ID de la personne qu'on souhaite supprimer
 * @return TRUE
 * 
 * @author Ratio
 * 
 */
// Création de la function (de type Function)
function deleteClient(int $idClient){
    // Connexion à la base de donnée
    $conn = dbconnect("localhost","bk","root","");

    //Mise en place du Si/Sinon
    if($conn){
        // Création de la requête de supprésion
        $reqDelete = "DELETE FROM client WHERE id_Client = $idClient";

        
        // Exécution de la requête
        $exec = $conn->query($reqDelete);
        // Vérifier si l'exécution de la requête a réussi
        if($exec){
            return TRUE;
        }
    }
}

// // Appel de la fonction pour supprimer le Client dont l'id est 9
// deleteClient("9");

/**
 * Ratio (Pour faire une description)
 * 
 * @param int $id Corresponds to the User ID in table (Primary Key)
 * @param string $nom Corresponds to the Last Name User in table
 * @param string $prenom Corresponds to the First Name User in table
 * @param string $email Corresponds to the Email User in table
 * @param string $motDePasse Corresponds to the Password User in table
 * @param int $chev Corresponds to the Chevalet ID in table (Foreign Key)
 * @return bool 
 * 
 * @author Ratio
 */

// function update(int $id, string $nom, string $prenom, string $email, string $motDePasse, int $chev){
//     $conn = dbConnect("bk", "root","","localhost");
//     if($conn){
//         $req = "UPDATE client SET cli_nom=:cliNom, cli_prenom=:cliPren, cli_email=:cliMail, cli_password=:cliPass, id_Chevalet=:cliChev WHERE Id_Client=:cliID";

//     $prepared = $conn->prepare($req);

//         $prepared->bindParam(':cliNom', $nom, PDO::PARAM_STR, 30);
//         $prepared->bindParam(':cliPren', $prenom, PDO::PARAM_STR, 30);
//         $prepared->bindParam(':cliMail', $email, PDO::PARAM_STR, 255);
//         $prepared->bindParam(':cliPass', $motDePasse, PDO::PARAM_STR, 100);
//         $prepared->bindParam(':cliChev', $chev, PDO::PARAM_INT);
//         $prepared->bindParam(':cliID', $id, PDO::PARAM_INT);

//         $execute = $prepared->execute();

//         if($execute){
//             $reply = TRUE;
//         }
//         else{
//             $reply = FALSE;
//         }
//     }

//     return $reply;
// }

// update(3, 'Dalor', 'Homer', 'aurevoirboujou@gmail.com', '123testPepito', 2);

/**
 * Fonction pour séléctionner la totalité d'une table qu'on souhaite
 * 
 * @param string $table Correspond à la table qu'on souhaite extraire la totalité des données
 * @return Array|FALSE
 * 
 * @author ratio
 */

// function selectAll(string $table)
// {

//     $conn = dbconnect("localhost", "bk", "root", "");

//     if ($conn) {
//         $reqAll = "SELECT * FROM $table";
//         $exec = $conn->query($reqAll);
//         if ($exec) {
//             $results = $exec->fetchAll(PDO::FETCH_ASSOC);
//             if ($results) {
//                 $return = $results;
//             } else {
//                 $return = FALSE;
//             }
//         }
//     }

//     return $return;
// }

// $clients = selectAll("client")
// ?>
