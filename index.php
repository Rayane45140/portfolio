<html>
    <head>
    
    </head>
    <body>
    <?php 
    include("vues/v_header.php");
    include_once("modele/bd.inc.php");
    include_once("modele/articles.php");


    if(!isset($_REQUEST['uc']) || empty($_REQUEST['uc']))
    $uc = 'accueil';
    else{
    $uc = $_REQUEST['uc'];
    }

    switch($uc)
    {
        default :
        {   
            include("vues/v_accueil.php");
            break;
        }

    case 'competences':
        {
            include("vues/v_competences.php");
            break;
        }

    case 'veille':
        {
            include("vues/v_veille.php");
            break;
        }

    case 'profil':
        {
            include("vues/v_profil.php");
            break;
        }

    case 'e4':
        {
            include("vues/v_e4.php");
            break;
        }

    }
    ?>
    <!--<?php include("vues/v_footer.php") ;?>-->
    </body>
</html>