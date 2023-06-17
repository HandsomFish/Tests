<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
</head>
<body>

    <h1>Twitter</h1>

    <form action="inscription.php" method="POST">
        <input type="text" name="nom" placeholder="Nom et Prénom">
        <input type="text" name="pseudo" placeholder="Votre Pseudo">
        <input type="email" name="mail" placeholder="Votre e-mail">
        <input type="password" name="motdepasse" placeholder="Mot de Passe">
        <input type="text" name="photo" placeholder="Votre Image">
        
        <button type="submit">Log In</button>
    </form>
</body>
</html>