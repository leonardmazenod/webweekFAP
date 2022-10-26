<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content=width=device-width, initial-scale=1>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <title>Festival de l'Artisanat au Puy</title>
        <link rel="icon" href="img/icon.png">
        <?php
        if (file_exists("css/style.css")==1){
            $lien="";
        }
        elseif (file_exists("../css/style.css")==1){
            $lien="../";
        }
        elseif (file_exists("../../css/style.css")==1){
            $lien="../../";
        }
        echo '<link rel="stylesheet" href="'.$lien.'css/style.css">';
        ?>
        <script src="https:/kit.fontawesome.com/37f50f5103.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.1.js"></script> 
    </head>
    <body>
        <header>    
            <!-- Navbar -->
            <nav>
                <ul>
                <?php
                echo'<li>
                        <a href="../evenement.php">Event</a>
                    </li>
                    <li>
                        <a href="../evenement.php#artisans">Craftsmen</a>
                    </li>
                    <li>
                        <a href="index_en.php#map">Map</a>
                    </li>
                    <li>
                        <a href="index_en.php"><img src="../img/logo.png" alt="logo"/></i></a>
                    </li>
                    <li>
                        <a href="festival_en.php">The festival</a>
                    </li>
                    <li>
                        <a href="contact_en.php">Contact</a>
                    </li>
                    <li>
                        <a class="inscription" href="../inscription.php?id=0">Inscription</a>
                    </li>'
                    ?>
                </ul>
            </nav>
        </header>

        <!--Apparition du background sous le header-->
        <script type="text/Javascript">
            $(window).on('scroll',function(){
                if ($(window).scrollTop()){
                    $('nav').addClass('bgheader');
                }
                else
                {
                    $('nav').removeClass('bgheader');
                }
            })
        </script>