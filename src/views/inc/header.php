<header>
    <nav>
        <ul class="head">
            <li><a href="index.php" class="hd">Accueil</a></li>
            <li><a href="?page=mySondages" class="hd">Resultats</a></li>
            <li><a href="?page=friend" class="hd">Amis</a></li>
            <li><a href="?page=createSondage" class="hd">Sondage</a></li>

             <?php 
                if(isset($_SESSION['email'])) {
                    echo '<li><a href="?page=logout" class="hd">Se déconnecter</a></li>';
                    echo '<li><a href="?page=profile" class="hd">Bonjour ' . $_SESSION["pseudo"] . ' !</a></li>';
                }
                else {
                    echo '<li><a href="?page=log" class="hd">Connexion</a></li>';
                }
            
            ?>
            
          </ul>
    </nav>
</header>