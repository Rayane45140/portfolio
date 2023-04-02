<html>
    <head>
    
    </head>
    <body>
    <?php 
    include("vues/v_header.php");
    include("vues/v_footer.php");


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


    }
    ?>
    </body>
</html>