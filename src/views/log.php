<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/style/header.css">
    <link rel="stylesheet" href="../public/style/footer.css">
    <link rel="stylesheet" href="../public/style/log.css">

   
    <title>Accueil</title>
</head>
<body>
<?php require('inc/header.php') ;?>
<main>
<article>
<div>
    <div class="page">
        <h1>SIGN IN</h1>
        <div class="form">
            <form action="?page=logged" method="POST">
                <input type="email" placeholder="Email" name="email" class="btnn">
                <input type="password" placeholder="Password" name="password" class="btnn">
                <input type="submit" name="login" id="signIn" value="Se connecter" class="menu">
            </form>
            
        </div>
    
    </div>
    </div>
    <div>
    <div class="page">
        <h1>NEW ACCOUNT</h1>
        <div class="form">
            <form action="?page=signed" method="POST">
                <input type="text" placeholder="Nom" name="lastname" class="btn" required>
                <input type="text" placeholder="Prenom" name="firstname" class="btn" required>
                <input type="email" placeholder="Email" name="email" class="btn" required>
                <input type="text" name="pseudo" placeholder="Pseudo" class="btn" required>
                <input type="password" placeholder="Password" name="password" class="btn" required>
                <input type="submit" name="signup" value="S'inscrire" id="signIn" class="menu">
            </form>
            
        </div>
        
    </div>
    </div>
</article>
</main>
    
<?php require('inc/footer.php') ;?>
   
</body>
</html>