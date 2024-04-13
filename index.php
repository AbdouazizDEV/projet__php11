
<?php


   
    if(isset($_POST['val']) || isset($_GET['val'])) {
        
        include '../templates/partial/header.html.php';
					
        
        /* var_dump($sol); */
        if(isset($_GET["val"])) {
            $FICHIER=$_GET['val'];
            switch ($FICHIER) {
                case "":
                    include '../templates/promo.php';
                    break;
                case "3":
                    require_once '/var/www/html/projet/templates/promo.php';
                    break;
                case "4":
                    require_once '../templates/referentiels.php';
                    break;
                case "5":
                    require_once '../templates/cree-promo.php';
                    break;
                case "6":
                    require_once '../templates/apprenant.php';
                    
                    break;
                case "7":
                    require_once '../templates/presence.php';
                    break;
                case "8":
                    include '../templates/evénements.php';
                    break;
                default:
                    break;
            }
        }else{
            include '../templates/promo.php';
        }    
        include '../templates/partial/footer.html.php'; 
    }else{
        include '../templates/connexion.php';
    }


?>


<?php

