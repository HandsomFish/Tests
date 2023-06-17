<?php

    require "database.php";

    $insert = $database->prepare("INSERT INTO tweets (contenu) VALUES (:content)");

    $insert->execute(
        [
            "content" => $_POST['tweet']
        ]
    );

    header("Location: index.php");
?>