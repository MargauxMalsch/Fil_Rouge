<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/style/header.css">
    <link rel="stylesheet" href="../public/style/footer.css">
    <link rel="stylesheet" href="../public/style/creation.css">
    <title>Créer votre sondage</title>
</head>
<body>
<?php require('inc/header.php') ;?>
    <main>

    <div id="fond">
    <h1>Il est temps d'ajouter un nouveau sondage</h1>
    <div class="page">
        
        <div class="form">
             <form action="?page=creating" method="POST">
               <input type="text" placeholder="QUESTION" name="question" class="btn" id="Question" required> <br>
               <input type="text" placeholder="Choix 1" name="choice1" class="btn" id="Choix1" required> <br>
               <input type="text" placeholder="Choix 2" name="choice2" class="btn" id="Choix2" required> <br>
               
               <label for="ending_date" class="label">Le moment de la fin:</label> <br>
               <input type="datetime-local" name="ending_date" class="btn"> <br>

               
               <button name="create" id="signIn" class="menu">PUBLIER</button>
             </form>
            
        </div>
  
    </div>
    </div>

    </main>
    
    <?php require('inc/footer.php') ;?>
</body>
</html>