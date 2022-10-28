<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content=width=device-width, initial-scale=1>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <title>Festival de l'Artisanat au Puy</title>
        <link rel="icon" href="../img/icon.png"/>
        <link rel="stylesheet" href="js/swiper.min.css">
        <link rel="stylesheet" href="css/style.css"/>
        <script src="https:/kit.fontawesome.com/37f50f5103.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.1.js"></script> 
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.1/dist/leaflet.css" integrity="sha256-sA+zWATbFveLLNqWO2gtiw3HL/lh1giY/Inf1BJ0z14=" crossorigin=""/>
        <script src="https://unpkg.com/leaflet@1.9.1/dist/leaflet.js" integrity="sha256-NDI0K41gVbWqfkkaHj15IzU7PtMoelkzyKp8TOaFQ3s=" crossorigin=""></script>
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    </head>
    <body class="index">
    <!-- Navbar -->
    <?php 
         include("navbar_en.php"); 
    ?>
	
                <!-- Titre -->
                <div class="titre">
                    <div class="flex-titre" data-aos="fade-up">
                        <h1>The Festival of Artisans</h1>
                        <div class="festival-desc">
                            <p>
                            The Festival of Crafts is an event that promotes all sectors of crafts by offering you the opportunity to discover or rediscover know-how, techniques and products and services on the occasion of a great celebration of craftsmanship. Artisans taking place over 3 days. Meet nearly 300 artisans throughout the town center of Puy-en-Velay.
                            </p>
                            <div class="iconflex">
                                <a href="../festival.php" id="fleche"><i class="fa-solid fa-arrow-right fa-4"></i></a>
                                <a href="../festival.php" id="ensavoirplus">find out more about the festival</a>
                            </div>
                        </div>
                    </div>
                    <h1 class="aupuy" data-aos="fade-up">in Puy-en-Velay </h1>
                    <h3 data-aos="fade-up">from 08 to 10 April 23</h3>
                    <div class="container">
                        <a class="grosbouton" href="../evenement.php">see the activities</a>
                        <div class="btn">
                            <i class="fa-solid fa-arrow-turn-down fa-xl"></i>
                        </i>
                    </div>
                </div>
                </div>

                <div class="festival-desc1">
                            <p>
                                The Festival of Crafts is an event that promotes all sectors of crafts by offering you the opportunity to discover or rediscover know-how, techniques and products and services on the occasion of a great celebration of craftsmanship. Artisans taking place over 3 days. Meet nearly 300 artisans throughout the town center of Puy-en-Velay.
                            </p>
                            <div class="iconflex">
                                <a href="../festival.php" id="fleche"><i class="fa-solid fa-arrow-right fa-4"></i></a>
                                <a href="../festival.php" id="ensavoirplus">find out more about the festival</a>
                            </div>
                        </div>

                <div class="artisans"  data-aos="fade-up" data-aos-anchor-placement="center-bottom"><h1>
                    Our artisans
                </h1>
                <p>
                    You will find artisans of all kinds, in textiles, sculpture, plants and wood, jewelry and precious stones, metal or leather workers, or even a few watchmakers, stained glass artists and many others.
                </p>
                <p>
                    You will find among them some craftsmen:
                </p>
                </div>
                <!-- Cartes -->
                <div class="cartes">
                    <div class="carte">
                        <a href="../evenement.php"><img src="../img/1.jpg" alt="Céramiste" data-aos="fade-up"  data-aos-anchor-placement="center-bottom"></a>
                        <div class="sous-texte" data-aos="fade-up"  data-aos-anchor-placement="center-bottom">
                            <h4>Ceramist</h4>
                            <p>
                                Astrid Legosier
                                </br>
                                ceramic workshop
                                </br>
                                8 a.m. to 7 p.m. Saturday to Monday
                            </p>
                            <a href="../evenement.php">see more</a>
                        </div>
                    </div>
                    <div class="carte">
                        <a href="../evenement.php"><img src="../img/2.jpg" alt="Tufting" data-aos="fade-up"  data-aos-anchor-placement="center-bottom" data-aos-delay="100"></a>
                        <div class="sous-texte" data-aos="fade-up"  data-aos-anchor-placement="center-bottom" data-aos-delay="100">
                            <h4>Tufting</h4>
                            <p>
                                Maxime Dumat
                                </br>
                                Custom rug production
                                </br>
                                8 a.m. to 9 p.m. Saturday to Monday
                            </p>
                            <a href="../evenement.php">see more</a>
                        </div>
                    </div>
                    <div class="carte">
                        <a href="../evenement.php"><img src="../img/3.jpg" alt="bijoutier" data-aos="fade-up"  data-aos-anchor-placement="center-bottom" data-aos-delay="200"></a>
                        <div class="sous-texte" data-aos="fade-up"  data-aos-anchor-placement="center-bottom" data-aos-delay="200">
                            <h4>Jeweler</h4>
                            <p>
                                Lucie Cédiste
                                </br>
                                Sale and production of jewelry
                                </br>
                                8 a.m. to 7 p.m. Saturday to Monday
                            </p>
                            <a href="../evenement.php">see more</a>
                        </div>
                    </div>
                </div>

                <div class="voirartisans" data-aos="fade-up"  data-aos-anchor-placement="center-bottom">
                    <a class="grosbouton" href="../evenement.php">see all artisans</a>
                </div>

                <div class="artisans" data-aos="fade-up"  data-aos-anchor-placement="center-bottom">
                <h1>
                    Our events
                </h1>
                <p>
                    Some of our craftsmen offer to show you their know-how live, during an event where they practice their craftsmanship in front of you. Find them all over the city
                </p>
                </div>
                <!-- carousels-->
                <div class="swiper-container" data-aos="fade-up"  data-aos-anchor-placement="center-bottom"><div class="swiper-wrapper">
                    <div class="swiper-slide" style="background: url(./img/serigraphie.jpg) center/cover;">
                        <div class="sous-texte">
                            <h4>Screen printing</h4>
                            <p>
                                Jeremy Faure
                                </br>
                                Manual printing on t-shirts
                                </br>
                                6 p.m. to 9 p.m. Saturday and Sunday
                            </p>
                            <a href="../evenement.php">see more</a>
                        </div>
                    </div>
                    <div class="swiper-slide" style="background: url(./img/bois.PNG) center/cover;">
                        <div class="sous-texte">
                            <h4>Wood carving</h4>
                            <p>
                                Michel Auguste
                                </br>
                                Realization live
                                </br>
                                from 3 p.m. to 7 p.m. Saturday
                            </p>
                            <a href="../evenement.php">see more</a>
                        </div>
                    </div>
                    <div class="swiper-slide" style="background: url(./img/vitre.jpg) center/cover;">
                        <div class="sous-texte">
                            <h4>stained glass artist</h4>
                            <p>
                                Isabelle Carnot
                                </br>
                                Creation of stained glass
                                </br>
                                from 2 p.m. to 5 p.m. from Saturday to Monday
                            </p>
                            <a href="../evenement.php">see more</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
                </div>
                <script src="js/jquery.min.js" type="text/javascript" ></script>
                <script src="js/swiper.min.js"></script>
                <script src="js/carousel.js" type="text/javascript" ></script>

                <div class="voirartisans" data-aos="fade-up"  data-aos-anchor-placement="center-bottom">
                    <a class="grosbouton" id="map-titre" href="../evenement.php">see all events</a>
                </div>

                <!-- carte -->

                <div class="artisans" data-aos="fade-up"  data-aos-anchor-placement="center-bottom">
                <h1>
                    Map
                </h1>
                <p>
                    Find all the events, shops and stands on this interactive map.
                </p>
                </div>
                </h1>
                <div class="carte-flex" data-aos="fade-up"  data-aos-anchor-placement="center-bottom"><div id="map" class="mapContainer">
                <?php

// Script JS pour afficher la carte 
// On est obligé de faire le script dans le PHP car il est nécessaire que le fetch doit ce terminer aprés que l'on est affiche tous les points d'intérets

echo"<script>
fetch('https://france-geojson.gregoiredavid.fr/repo/regions.geojson')
.then((response) => response.json())
.then(async (json) => {
var map = L.map('map').setView([45.0415, 3.884], 16);
L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(map);

var event = L.icon({iconUrl: 'img/event.png', iconSize: [35, 35], iconAnchor: [0, 0], popupAnchor: [20, 10],});
var boutique = L.icon({iconUrl: 'img/boutique.png', iconSize: [35, 35], iconAnchor: [0, 0], popupAnchor: [20, 10],});
var stand = L.icon({iconUrl: 'img/stand.png', iconSize: [35, 35], iconAnchor: [0, 0], popupAnchor: [20, 10],});

function evenement_marker(xcoord,ycoord,nom,horaire,duree,bouton){
L.marker([xcoord,ycoord], {icon: event}).addTo(map)
.bindPopup('<h4>'+nom+'</h4>Horaire : '+horaire+'<br>Durée : '+duree+'<br><a href='+bouton+'><button>Voir plus</button></a>')
}

function boutique_marker(xcoord,ycoord,nom,type,ouverture,fermeture,bouton){
L.marker([xcoord,ycoord], {icon: boutique}).addTo(map)
.bindPopup('<h4>'+nom+'</h4>Type : '+type+'<br>Ouverture : '+ouverture+'<br>Fermeture : '+fermeture+'<br><a href='+bouton+'><button>Voir plus</button></a>')
}
function stand_marker(xcoord,ycoord,nom,type,ouverture,fermeture,bouton){
L.marker([xcoord,ycoord], {icon: stand}).addTo(map)
.bindPopup('<h4>'+nom+'</h4>Type : '+type+'<br>Ouverture : '+ouverture+'<br>Fermeture : '+fermeture+'<br><a href='+bouton+'><button>Voir plus</button></a>')
}";

include ('../connection_bdd.php');

// Requete SQL pour recupérer les informations sur les Stands
$requete="SELECT nomstand,typestand,ouverturestand,fermeturestand,xcoordstand,ycoordstand FROM stand";
$resultats=$connection->query($requete);
$tab_stand=$resultats->fetchAll();
$resultats->closeCursor();
$nbstand=count($tab_stand);

// Requete SQL pour recupérer les informations sur les Boutiques
$requete="SELECT nomboutique,typeboutique, ouvertureboutique, fermetureboutique,xcoordboutique,ycoordboutique FROM boutique";
$resultats=$connection->query($requete);
$tab_boutique=$resultats->fetchAll();
$resultats->closeCursor();
$nbboutique=count($tab_boutique);

// Requete SQL pour recupérer les informations sur les événements
$requete="SELECT nomevent, dureeevent, horaireevent, xcoordevent, ycoordevent FROM evenement";
$resultats=$connection->query($requete);
$tab_event=$resultats->fetchAll();
$resultats->closeCursor();
$nbevent=count($tab_event);

for ($i=0;$i<$nbevent;$i++){
    echo "evenement_marker(".$tab_event[$i][3].",".$tab_event[$i][4].",'".$tab_event[$i][0]."','".$tab_event[$i][1]."','".$tab_event[$i][2]."','evenement.php');";
}
for ($i=0;$i<$nbboutique;$i++){
    echo "boutique_marker(".$tab_boutique[$i][4].",".$tab_boutique[$i][5].",'".$tab_boutique[$i][0]."','".$tab_boutique[$i][1]."','".$tab_boutique[$i][2]."','".$tab_boutique[$i][3]."','evenement.php#artisans');";
}
for ($i=0;$i<$nbstand;$i++){
    echo "stand_marker(".$tab_stand[$i][4].",".$tab_stand[$i][5].",'".$tab_stand[$i][0]."','".$tab_stand[$i][1]."','".$tab_stand[$i][2]."','".$tab_stand[$i][3]."','evenement.php#artisans');";
}

echo "})
</script>";
?>
    </div>
    </div>

    <!-- Footer -->
    <?php 
        include("footer_en.php"); 
    ?>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
    AOS.init();
    </script>
    <script src="../js/script.js"></script>

    </body>
</html>
