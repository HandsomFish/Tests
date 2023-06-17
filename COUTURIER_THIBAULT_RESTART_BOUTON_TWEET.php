<?php

require "database.php";

$requete = $database->prepare("SELECT * FROM tweets ORDER BY id DESC LIMIT 1");


$requete->execute();

//ETAPE 3 - ON EN FAIT UN TRUC
//Toutes les données : tu en fais un tableau
$allTweets = $requete->fetch(PDO::FETCH_ASSOC); 

echo json_encode($allTweets);
?>

  

    



