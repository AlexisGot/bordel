<?php

require_once('dbModel.php');

function getAll()
{

  // Récupération de la connexion à la base de données

  $conn = dbConnect();

  if ($conn) {
    // Si la connexion à la base de donnée est effective :

    // Stockage de la requête SQL au sein de la variable $query.
    $query = "SELECT * FROM books";

    // Execution de la requête sur la base de données.
    // Stockage du résultat de l'exécution dans la variable $execution.
    $execution = $conn->query($query);

    if ($execution) {

      // Si la requête s'est exécutée sans accrocs :
      // Stockage de l'ensemble des résultats de la requête dans la variable $results
      $results = $execution->fetchAll(PDO::FETCH_ASSOC);
    }
  }

  return $results;
}

function findBy($bookID)
{

  $conn = dbConnect();

  if ($conn) {

    // Stockage de la requête SQL au sein de la variable $query.
    $query = "SELECT * FROM books WHERE id=$bookID";

    // Execution de la requête sur la base de données.
    // Stockage du résultat de l'exécution dans la variable $execution.
    $execution = $conn->query($query);

    if ($execution) {
      // Si la requête qui permet de récupérer les informations du livre souhaité s'est exécutée sans accrocs :
      // On stocke les données du livre dans une variable (utilisée ultérieurement pour être affichées dans les champs).
      $book = $execution->fetch(PDO::FETCH_ASSOC);
    }
    // Si la requête a rencontré une erreur lors de son execution
    else {
      header('Location: ../error.php');
    }
  }

  return $book;
}

function update($titre , $desc, $prix, $id){

  $conn = dbConnect();

  if ($conn) {

    // Stockage de la requête d'ajout au sein de la variable $query.
    $query = "UPDATE books SET name='$titre', description='$desc', price=$prix WHERE id=$id";

    // Execution de la requête sur la base de données.
    // Stockage du résultat de l'exécution dans la variable $execution.
    $execution = $conn->query($query);

    if ($execution) {
      // Si la requête s'est exécutée sans accrocs :
      // Redirection vers la page qui affiche l'ensemble des livres
      header('Location: ../views/book/all.php');
    } else {
      header('Location: ../vivews/error.php');
    }
  } // Fin du contrôle de la connexion à PDO

} // Fin du contrôle de l'envoi du formulaire de modification (existance du champ submitted)
