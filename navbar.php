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
                        <a href="'.$lien.'programme.php">Programme</a>
                    </li>
                    <li>
                        <a href="'.$lien.'programme.php#artisans">Artisans</a>
                    </li>
                    <li>
                        <a href="'.$lien.'index.php#map">Carte</a>
                    </li>
                    <li>
                        <a href="'.$lien.'index.php"><img src="'.$lien.'img/logo.png" alt="logo"/></i></a>
                    </li>
                    <li>
                        <a href="'.$lien.'festival.php">Le festival</a>
                    </li>
                    <li>
                        <a href="'.$lien.'contact.php">Contact</a>
                    </li>
                    <li>
                        <a class="inscription" href="inscription.php?id=0">Inscription</a>
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
