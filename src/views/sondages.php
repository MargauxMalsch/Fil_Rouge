<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/style/header.css">
    <link rel="stylesheet" href="../public/style/footer.css">
    <link rel="stylesheet" href="../public/style/sondages.css">
   
    <title>Résultat</title>
</head>
<body>
<?php require('inc/header.php') ;?>

<main>
    <section class="section1">


<article>

    <h2>Découvrez les résultats de vos derniers sondages</h2>

<div class="sondage">

    <p class="noForm"><?= $hasSondages ?></p>

    <?php foreach($sondages as $sondage): ?>

    <div class="questions">
        <p id="q">Question : <?= $sondage['question'] ?></p>

        <p>Choix 1 : <?= $sondage['choice1'] ?></p> 

        <p>Choix 2 : <?= $sondage['choice2'] ?></p> <br>

        <a href="?page=result&id=<?= $sondage['sondage_id'] ?>">Voir les réponses</a>
    </div>
 <?php endforeach ?>


 
  </div>
</div>

</article>
</section>

</main>
    
 <?php require('inc/footer.php') ;?>
</body>
</html>