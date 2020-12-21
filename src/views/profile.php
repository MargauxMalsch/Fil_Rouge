<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/style/header.css">
    <link rel="stylesheet" href="../public/style/footer.css">
    <link rel="stylesheet" href="../public/style/profile.css">
    <title>Profil</title>
</head>
<body>
<?php require('inc/header.php') ;?>

<main>

    <h1>Bienvenue sur le profil</h1>


<section class="profil">

    <article class="infoProfil">
        <h3>WELCOME</h3>
        <p>Pseudo : <?= $_SESSION['pseudo'] ?></p>
        <p>Nom : <?= $_SESSION['lastname'] ?></p>
        <p>Prénom : <?= $_SESSION['firstname'] ?></p>
        <p>Email : <?= $_SESSION['email'] ?></p>
    </article>
</section>

<section class="changeProfil">

    <form action="?page=changed" method="POST" class="modif">
            <input type="text" placeholder="pseudo" name="pseudo" class="btn" value="<?= $_SESSION["pseudo"] ?>">
            <input type="text" placeholder="nom" name="lastname" class="btn" value="<?= $_SESSION["lastname"] ?>">
            <input type="text" placeholder="prenom" name="firstname" class="btn" value="<?= $_SESSION["firstname"] ?>">
            <input type="email" placeholder="email" name="email" class="btn" value="<?= $_SESSION["email"] ?>">
            <input type="password" placeholder="Nouveau mot de passe (remettez le même si vous ne voulez pas changer)" name="password" class="btn">
            <input type="password" placeholder="Mot de passe" name="exPassword" class="btn">
            <button class="menu" name="changeProfile">VALIDER LES MODIFICATIONS</button>
    </form>

</section>

</main>

<?php require('inc/footer.php') ;?>
</body>
</html>