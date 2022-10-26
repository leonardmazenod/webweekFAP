<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content=width=device-width, initial-scale=1>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <title>Festival de l'Artisanat au Puy</title>
        <link rel="icon" href="../img/icon.png"/>
        <link rel="stylesheet" href="./../node_modules/swiper/css/swiper.min.css">
        <link rel="stylesheet" href="../css/style.css"/>
        <script src="https:/kit.fontawesome.com/37f50f5103.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.1.js"></script> 
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.1/dist/leaflet.css" integrity="sha256-sA+zWATbFveLLNqWO2gtiw3HL/lh1giY/Inf1BJ0z14=" crossorigin=""/>
        <script src="https://unpkg.com/leaflet@1.9.1/dist/leaflet.js" integrity="sha256-NDI0K41gVbWqfkkaHj15IzU7PtMoelkzyKp8TOaFQ3s=" crossorigin=""></script>
    </head>
    <body class="index">
    <!-- Navbar -->
    <?php 
        include("navbar_en.php"); 
    ?>

    <!-- Titre -->
    <div class="titre">
        <h1>The Festival of Artisans </br>in Puy-en-Velay </h1>
        <h3>from 08 to 10 April 23</h3>
        <div class="container">
            <a href="../evenements.php?"><button>See the activities.</button>
            <i class="fa-solid fa-arrow-down fa-beat fa-xl"></i>
        </div>
    </div>

    <!-- Article -->
    <div class="Article">
        <h2>Artisans from all over Europe come together to hold a festival in Le Puy-en-Velay from April 8 to 10, 2023</h2>
        <img src="../img/artisan_petit.jpg">
        <div class="texte1">
            <h4>Craftsmanship reveals its talents.</h4>
            <p>The Festival of Crafts is an event that promotes all sectors of crafts by offering you the opportunity to discover or rediscover know-how, techniques and products and services on the occasion of a great celebration of craftsmanship. Artisans taking place over 3 days. Meet nearly 300 artisans throughout the town center of Puy-en-Velay.</p>
            <button>Find out more about the festival.</button>
        </div>
    </div>

     <!-- carousels-->

    <h1 class="fap">The Festival of Artisans</h1>

  <div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide" style="background: url(./../img/bois.jpg) center/cover;"></div>
      <div class="swiper-slide" style="background: url(./../img/verre.jpg) center/cover;"> </div>
      <div class="swiper-slide" style="background: url(./../img/dentelle.jpg) center/cover;"> </div>
    </div>
    <div class="swiper-pagination"></div>
  </div>
   


  <script src="../js/jquery.min.js" type="text/javascript" ></script>
  <script src="../js/swiper.min.js"></script>
  <script src="../js/carousel.js" type="text/javascript" ></script>

        <br><br><br>

    <div class="carte-flex">
            <div id="map" class="mapContainer"><script src="carte_en.js"></script></div>
    </div>

    <!-- Footer -->
    <?php 
        include("footer_en.php"); 
    ?>

    </body>
</html>
