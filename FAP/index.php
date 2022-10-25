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
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.1/dist/leaflet.css" integrity="sha256-sA+zWATbFveLLNqWO2gtiw3HL/lh1giY/Inf1BJ0z14=" crossorigin=""/>
        <script src="https://unpkg.com/leaflet@1.9.1/dist/leaflet.js" integrity="sha256-NDI0K41gVbWqfkkaHj15IzU7PtMoelkzyKp8TOaFQ3s=" crossorigin=""></script>
    </head>
    <body class="index">
    <!-- Navbar -->
    <?php 
        include("navbar.php"); 
    ?>

    <!-- Titre -->
    <div class="titre">
        <h1>Festival de l’Artisanat </br>au Puy-en-Velay </h1>
        <h3>du 08 au 10 avril 23</h3>
        <div class="container">
            <button>voir les activités</button>
            <i class="fa-solid fa-arrow-down fa-beat fa-xl"></i>
        </div>
    </div>

    <!-- Article -->
    <div class="Article">
        <h2>Des artisants de toute l’Europe se réunissent pour tenir un festival au Puy-en-Velay du 8 au 10 avril 2023</h2>
        <img src="img/artisan_petit.jpg">
        <div class="texte1">
            <h4>L’artisanat dévoile ses talents</h4>
            <p>Le Festival de l’Artisanat est un événement qui valorise toutes les filières de l’artisanat en vous offrant la possibilité de découvrir ou redécouvrir des savoir-faire, des techniques et des produits et services à l’occasion d’une grande fête de l’artisanat se déroulant sur 3 jours. Partez à la rencontre de près de 300 artisans dans tout le centre ville du Puy-en-Velay.</p>
            <button>en savoir plus sur le festival</button>
        </div>
    </div>

    <!-- Cartes -->
    <div class="cartes">
        <div class="carte">
            <img src="img/1.png" alt="Céramiste">
            <div class="sous-texte">
                <h4>Céramiste</h4>
                <p>George Rempart</br>retrouvé le à son atelier</br>de 8h à 19h du samedi au lundi</p>
                <a href="#">voir plus</a>
            </div>
        </div>
        <div class="carte">
            <img src="img/1.png" alt="Céramiste">
            <div class="sous-texte">
                <h4>Céramiste</h4>
                <p>George Rempart</br>retrouvé le à son atelier</br>de 8h à 19h du samedi au lundi</p>
                <a href="#">voir plus</a>
            </div>
        </div>
        <div class="carte">
            <img src="img/1.png" alt="Céramiste">
            <div class="sous-texte">
                <h4>Céramiste</h4>
                <p>George Rempart</br>retrouvé le à son atelier</br>de 8h à 19h du samedi au lundi</p>
                <a href="#">voir plus</a>
            </div>
        </div>
    </div>

    <div class="carte-flex">
            <div id="map" class="mapContainer"><script src="js/carte.js"></script></div>
        </div>

    <!-- Footer -->
    <?php 
        include("footer.php"); 
    ?>

    </body>
</html>
je rentre dans la base de donnée