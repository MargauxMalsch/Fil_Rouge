<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../public/style/header.css">
    <link rel="stylesheet" href="../public/style/footer.css">
    <link rel="stylesheet" href="../public/style/resultat.css">

  <title>Reponses</title>
</head>

<body>
<?php include 'inc/header.php' ?>
  <main id="sondagereponse">
  <h2> Les résultats </h2>
  <div class="formulaire" id="nbr"></div>

    <input type="hidden" value="<?= $id ?>" name="sondage_id" id="sondage_id">
    <input type="hidden" value="<?= $_SESSION['id'] ?>" name="user_id" id="user_id">

    <div id="reps"></div>

  <div id="titre">
  <h2> TCHAT</h2>
  <img src="../public/img/tchat.gif" alt="Chat">
  </div>

  <div class="formulaire">
    <br>
    <div id="messages"></div>

    <form class="plusami">
        <input type="text" placeholder="Écrire" name="message" id="msg">
        <button id="envoyer">Envoyer</button>
    </form>
    <br>
</div>
  </main>
    <?php include 'inc/footer.php' ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="../public/js/rep.js"></script>
</body>

</html>