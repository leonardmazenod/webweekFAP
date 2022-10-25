<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content=width=device-width, initial-scale=1>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <title>Festival de l'Artisanat au Puy</title>
        <link rel="icon" href="img/icon.png">
        <link rel="stylesheet" href="css/style.css">
        <script src="https:/kit.fontawesome.com/37f50f5103.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.1.js"></script> 
    </head>
    <body>
        <header>    
            <!-- Navbar -->
            <nav>
                <ul>
                    <li>
                        <a href="programme.php">Programme</a>
                    </li>
                    <li>
                        <a href="programme.php">Artisans</a>
                    </li>
                    <li>
                        <a href="#">Carte</a>
                    </li>
                    <li>
                        <a href="index.php"><img src="img/logo.png" alt="logo"/></i></a>
                    </li>
                    <li>
                        <a href="festival.php">Le festival</a>
                    </li>
                    <li>
                        <a href="contact.php">Contact</a>
                    </li>
                    <li>
                        <a class="inscription" href="#">Inscription</a>
                    </li>
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