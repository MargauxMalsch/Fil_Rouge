<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../public/style/header.css">
    <link rel="stylesheet" href="../public/style/footer.css">
    <link rel="stylesheet" href="../public/style/play.css">


  <title>Accueil</title>
</head>

<body>
<?php require('inc/header.php') ;?>


  <main>
    <section class="section1">
      <h1>IL EST TEMPS DE JOUER </h1>
     
      <article>

        <div class="sondage">

        <?php if(isset($_SESSION['email'])) echo '<h3>' . $hasFriendSondages . '</h3>'; ?>

        <?php foreach($friends as $friend): ?>

            <div class="questions">
                <h4>Créer par <?= $friend['pseudo'] ?>, <?php if($friend['time'] > 0 ) {
                echo " plus que " . $friend['time'] . " heures pour répondre !";
                } else {
                echo "le sondage est terminé...";
                }  ?></h4><br> <hr>
                <p id="q">Question : <?= $friend['question'] ?></p>
  
                <p>Choix 1 : <?= $friend['choice1'] ?></p> 
  
                <p>Choix 2 : <?= $friend['choice2'] ?></p> <br>
  
                <a href="?page=answer&id=<?= $friend['sondage_id'] ?>">Répondre</a> <br><br>
                <a href="?page=result&id=<?= $friend['sondage_id'] ?>">Voir les résultats</a>
              </div>

        <?php endforeach ?>

     
        </div>

      </article>
    </section>
    
  </main>

  <?php require('inc/footer.php') ;?>
  
</body>

</html>