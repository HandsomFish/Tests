<?php

    require "database.php";

    $insert = $database->prepare("INSERT INTO utilisateurs (nom, pseudo, mail, motdepasse, photo) VALUES (:nomPrenom, :username, :email, :mdp, :picture)");

    $insert->execute(
        [
            "nomPrenom" => $_POST['nom'],
            "username" => $_POST['pseudo'],
            "email" => $_POST['mail'],
            "mdp" => $_POST['motdepasse'],
            "picture" => $_POST['photo']
        ]
    );

header("Location: index.php");
?>

