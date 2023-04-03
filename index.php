<html>
    <head>
    
    </head>
    <body>
    <?php 
    include("vues/v_header.php");
    include("vues/v_footer.php");
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


    }
    ?>
    </body>
</html>