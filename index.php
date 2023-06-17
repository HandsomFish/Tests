<?php

require "database.php";

$requete = $database->prepare("SELECT * FROM tweets ORDER BY id DESC");


$requete->execute();

//ETAPE 3 - ON EN FAIT UN TRUC
//Toutes les données : tu en fais un tableau
$allTweets = $requete->fetchAll(PDO::FETCH_ASSOC); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Twitter</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://kit.fontawesome.com/25e2ecb5af.js" crossorigin="anonymous"></script>
</head>
<body>

    <div class="header">
    <h1>Twitter</h1>
        <div class="nav-button"><i class="fa-solid fa-bars fa-2xl burger-menu"></i>
            <div class="navbar" id="menu">
                <a href="#" class="nav-item"><i class="fa-solid fa-house fa-xl nav-icon"></i></a>            
                <a href="#" class="nav-item"><i class="fa-solid fa-user fa-xl nav-icon"></i> </a>
                <a href="#" class="nav-item"><i class="fa-solid fa-envelope fa-xl nav-icon"></i></a>
                <a href="#" class="nav-item"><i class="fa-solid fa-magnifying-glass fa-xl nav-icon"></i></a>
            </div>
        </div>
    </div>

    <div class="searchBars">
        <form action="envoitweet.php" method="POST">
            <input type="text" name="tweet" placeholder="Tell the world what you're thinking">
            <button type="submit">Tweet!</button>
        </form>

        <form action="searchTweet.php" method="GET">
            <input type="text" name="search" placeholder="Search specific tweets">
            <button type="submit">Search</button>
        </form>
    </div>

    <br>
    <br>
    <div class="tweets">
    <?php foreach($allTweets as $tweets) { ?>

            <div class="id-content">
                <p class="id"><?= $tweets['id']?></p>
                <p class="content"><?= $tweets['contenu']?></p>
                <form action="delete.php" method="POST">
                    <input type="hidden" name="supprimer" value="<?= $tweets['id'] ?>">
                    <button type="submit">Supprimer</button>
            </form>
            </div>
            
 
        
    <?php } ?>
    </div>

    <div class="footer">
            <button class="contact-button" type="button">Contact Me!</button>
    

            <br/>

            <ul>
                <li><a href="https://www.larousse.fr/dictionnaires/francais/platonique/61555"><i class="fa-brands fa-square-instagram fa-xl"></i> Mon Réseau Social</a></li>
                <li><a href="https://fr.wikipedia.org/wiki/Friend_zone"><i class="fa-brands fa-facebook fa-xl"></i> Ceci est la friendzone</a></li>
                <li><a href="https://en.wikipedia.org/wiki/The_Social_Network"><i class="fa-brands fa-twitter fa-xl"></i> Un autre social network</a></li>
            </ul>
        </div>

    <script src="animation.js"></script>
</body>
</html>