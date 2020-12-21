<?php
namespace Controller;

use Core\Controller\DefaultController;
use Model\HomeModel;
use Model\SondageModel;

class HomeController extends DefaultController {

    public static function displayHomePage() {
        self::render("homepage");
    }

    public static function displayPlayPage() {

        if(isset($_SESSION['email'])) {

            $hasFriendSondages = null;

            $friends = HomeModel::getFriendSondages(["id"=>$_SESSION['id']]);
            
            if(!$friends) $hasFriendSondages = "Vous n'avez pas de sondages d'amis";
        
            self::render("play", compact("friends", "hasFriendSondages"));
            
        }
        else {
            echo 'Vous devez être connecté pour pouvoir répondre aux sondages de vos amis';
            die();
        }
        
        
        
    }
    
}