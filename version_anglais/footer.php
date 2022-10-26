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
        <link rel="stylesheet" href="css/style.css">
        <script src="https:/kit.fontawesome.com/37f50f5103.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.1.js"></script> 
    </head>
    <body>
        <footer>
        <!-- Navbar -->
        <div class="nav">
                <ul>
                <?php
                echo'<li>
                        <a href="'.$lien.'evenement.php">Evènements</a>
                    </li>
                    <li>
                        <a href="'.$lien.'evenement.php#artisans">Artisans</a>
                    </li>
                    <li>
                        <a href="'.$lien.'index.php#map-titre">Carte</a>
                    </li>
                    <li>
                        <a href="'.$lien.'index.php">Accueil</a>
                    </li>
                    <li>
                        <a href="'.$lien.'festival.php">Le festival</a>
                    </li>
                    <li>
                        <a href="'.$lien.'contact.php">Contact</a>
                    </li>
                    <li>
                        <a class="inscription" href="'.$lien.'inscription.php?id=0">Inscription</a>
                    </li>
                    
                </ul>
                </div>

            <div class="sponsor-flex">
                <button><a href="'.$lien.'admin.php">admin</a></button>
                <a href="version_anglais/index_en.php"><img src="img/flagsen.png" alt="drapeau anglais" width="48" height="32"></a>
                <div class="sponsor">
                    <img src="'.$lien.'img/Sponsor/Agglo-01.png" alt="">
                    <img src="'.$lien.'img/Sponsor/chambre-des-metiers-01.png" alt="">
                    <img src="'.$lien.'img/Sponsor/CreditAgricole-01.png" alt="">
                    <img src="'.$lien.'img/Sponsor/LaRegion-01.png" alt="">
                    <img src="'.$lien.'img/Sponsor/ministere-01.png" alt="">
                </div>
            </div>'
            ?>
        </footer>
    </body>
