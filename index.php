 <?php 
        $title = "Page d'accueil";
        $description = "cette page vous renseigne sur l'évènement du Festival de l'Artisanat du Puy-en-Velay";
        include("navbar.php"); 
?>

<div class="index">
    <!-- Titre -->
    <div class="titre">
    <div class="flex-titre" data-aos="fade-up">
            <h1>Festival de l’Artisanat</h1>
            <div class="festival-desc">
                <p>
                    Le Festival de l’Artisanat est un événement qui valorise toutes les filières de l’artisanat en vous offrant la possibilité de découvrir ou redécouvrir des savoir-faire, des techniques et des produits et services à l’occasion d’une grande fête de l’artisanat se déroulant sur 3 jours. Partez à la rencontre de près de 300 artisans dans tout le centre ville du Puy-en-Velay.
                </p>
                <div class="iconflex">
                    <a href="festival.php" id="fleche"><i class="fa-solid fa-arrow-right fa-4"></i></a>
                    <a href="festival.php" id="ensavoirplus">en savoir plus sur le festival</a>
                </div>
            </div>
        </div>
        <h1 class="aupuy" data-aos="fade-up">au Puy-en-Velay </h1>
        <h3 data-aos="fade-up">du 08 au 10 avril 2023</h3>
        <div class="container">
            <a class="grosbouton" href="evenement.php">voir les activités</a>
            <div class="btn">
                <i class="fa-solid fa-arrow-turn-down fa-xl"></i>
            </i>
        </div>
    </div>
    </div>

    <div class="festival-desc1">
                <p>
                    Le Festival de l’Artisanat est un événement qui valorise toutes les filières de l’artisanat en vous offrant la possibilité de découvrir ou redécouvrir des savoir-faire, des techniques et des produits et services à l’occasion d’une grande fête de l’artisanat se déroulant sur 3 jours. Partez à la rencontre de près de 300 artisans dans tout le centre ville du Puy-en-Velay.
                </p>
                <div class="iconflex">
                    <a href="festival.php" id="fleche"><i class="fa-solid fa-arrow-right fa-4"></i></a>
                    <a href="festival.php" id="ensavoirplus">en savoir plus sur le festival</a>
                </div>
            </div>

    <div class="artisans"  data-aos="fade-up" data-aos-anchor-placement="center-bottom"><h1>
        Nos artisans
    </h1>
    <p>
        Vous y retrouverez des artisans en tout genre, dans le textile, la sculpture, les plantes et le bois, les bijoux et les pierres précieuses, les travailleurs du métal ou du cuir, ou encore les quelques horlogers, vitraillistes et beaucoup d'autres.
    </p>
    <p>
        Vous retrouverez parmi eux ces quelques artisans :
    </p>
    </div>
    <!-- Cartes -->
    <div class="cartes">
        <div class="carte">
            <a href="evenement.php"><img src="img/1.jpg" alt="Céramiste" data-aos="fade-up"  data-aos-anchor-placement="center-bottom"></a>
            <div class="sous-texte" data-aos="fade-up"  data-aos-anchor-placement="center-bottom">
                <h4>Céramiste</h4>
                <p>
                    Astrid Legosier
                    </br>
                    Atelier de céramique
                    </br>
                    de 8h à 19h du samedi au lundi
                </p>
                <a href="evenement.php">voir plus</a>
            </div>
        </div>
        <div class="carte">
            <a href="evenement.php"><img src="img/2.jpg" alt="Tufting" data-aos="fade-up"  data-aos-anchor-placement="center-bottom" data-aos-delay="100"></a>
            <div class="sous-texte" data-aos="fade-up"  data-aos-anchor-placement="center-bottom" data-aos-delay="100">
                <h4>Tufting</h4>
                <p>
                    Maxime Dumat
                    </br>
                    Réalisation de tapis personnalisé
                    </br>
                    de 8h à 21h du samedi au lundi
                </p>
                <a href="evenement.php">voir plus</a>
            </div>
        </div>
        <div class="carte">
            <a href="evenement.php"><img src="img/3.jpg" alt="bijoutier" data-aos="fade-up"  data-aos-anchor-placement="center-bottom" data-aos-delay="200"></a>
            <div class="sous-texte" data-aos="fade-up"  data-aos-anchor-placement="center-bottom" data-aos-delay="200">
                <h4>Bijoutier</h4>
                <p>
                    Lucie Cédiste
                    </br>
                    Vente et réalisation de bijoux
                    </br>
                    de 8h à 19h du samedi au lundi
                </p>
                <a href="evenement.php">voir plus</a>
            </div>
        </div>
    </div>

    <div class="voirartisans" data-aos="fade-up"  data-aos-anchor-placement="center-bottom">
        <a class="grosbouton" href="evenement.php">voir tous les artisans</a>
    </div>

    <div class="artisans" data-aos="fade-up"  data-aos-anchor-placement="center-bottom">
    <h1>
        Nos évènements
    </h1>
    <p>
        Certains de nos artisans proposent de vous montrer leur savoir-faire en direct, lors d'évènement où ils pratiquent leurs artisanats devant vous. Retrouvez les aux quatres coins de la ville.
    </p>
    </div>
    <!-- carousels-->
    <div class="swiper-container" data-aos="fade-up"  data-aos-anchor-placement="center-bottom"><div class="swiper-wrapper">
        <div class="swiper-slide" style="background: url(./img/serigraphie.jpg) center/cover;">
            <div class="sous-texte">
                <h4>Sérigraphie</h4>
                <p>
                    Jeremy Faure
                    </br>
                    Impression manuel sur tee-shirt
                    </br>
                    de 18h à 21h samedi et dimanche
                </p>
                <a href="evenement.php">voir plus</a>
            </div>
        </div>
        <div class="swiper-slide" style="background: url(./img/bois.PNG) center/cover;">
            <div class="sous-texte">
                <h4>Sculpture sur bois</h4>
                <p>
                    Michel Auguste
                    </br>
                    Réalisation en direct
                    </br>
                    de 15h à 19h samedi
                </p>
                <a href="evenement.php">voir plus</a>
            </div>
        </div>
        <div class="swiper-slide" style="background: url(./img/vitre.jpg) center/cover;">
            <div class="sous-texte">
                <h4>Vitrailliste</h4>
                <p>
                    Isabelle Carnot
                    </br>
                    Création de vitraille
                    </br>
                    de 14h à 17h du samedi au lundi
                </p>
                <a href="evenement.php">voir plus</a>
            </div>
        </div>
    </div>
    <div class="swiper-pagination"></div>
    </div>
    <script src="js/jquery.min.js" type="text/javascript" ></script>
    <script src="js/swiper.min.js"></script>
    <script src="js/carousel.js" type="text/javascript" ></script>

    <div class="voirartisans" data-aos="fade-up"  data-aos-anchor-placement="center-bottom">
        <a class="grosbouton" id="map-titre" href="evenement.php">voir tous les évènements</a>
    </div>

    <!-- carte -->

    <div class="artisans" data-aos="fade-up"  data-aos-anchor-placement="center-bottom">
    <h1>
        Carte
    </h1>
    <p>
        Retrouvez tous les évènements, les boutiques et les stands sur cette carte interactive.
    </p>
    </div>
    </h1>
    <div class="carte-flex" data-aos="fade-up"  data-aos-anchor-placement="center-bottom">
<div id="map" class="mapContainer">


<!-- Script JS pour afficher la carte  -->
<!-- On est obligé de faire le script dans le PHP car il est nécessaire que le fetch doit ce terminer aprés que l'on est affiche tous les points d'intérets -->

<script>
fetch('https://france-geojson.gregoiredavid.fr/repo/regions.geojson')
.then((response) => response.json())
.then(async (json) => {
var map = L.map('map').setView([45.0415, 3.884], 16);
L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(map);

var event = L.icon({iconUrl: 'img/event.png', iconSize: [30, 30], iconAnchor: [0, 0], popupAnchor: [20, 10],});
var boutique = L.icon({iconUrl: 'img/boutique.png', iconSize: [40, 40], iconAnchor: [0, 0], popupAnchor: [20, 10],});
var stand = L.icon({iconUrl: 'img/stand.png', iconSize: [30, 30], iconAnchor: [0, 0], popupAnchor: [20, 10],});

function evenement_marker(xcoord,ycoord,nom,horaire,duree,bouton){
L.marker([xcoord,ycoord], {icon: event}).addTo(map)
.bindPopup('<h4>'+nom+'</h4>Horaire : '+duree+'<br>Durée : '+horaire+'<br><a href='+bouton+'><button>Voir plus</button></a>')
}

function boutique_marker(xcoord,ycoord,nom,type,ouverture,fermeture,bouton){
L.marker([xcoord,ycoord], {icon: boutique}).addTo(map)
.bindPopup('<h4>'+nom+'</h4>Type : '+type+'<br>Ouverture : '+ouverture+'<br>Fermeture : '+fermeture+'<br><a href='+bouton+'><button>Voir plus</button></a>')
}
function stand_marker(xcoord,ycoord,nom,type,ouverture,fermeture,bouton){
L.marker([xcoord,ycoord], {icon: stand}).addTo(map)
.bindPopup('<h4>'+nom+'</h4>Type : '+type+'<br>Ouverture : '+ouverture+'<br>Fermeture : '+fermeture+'<br><a href='+bouton+'><button>Voir plus</button></a>')
}

<?php
include ('connection_bdd.php');

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
</div>
</div>
<?php 
include("footer.php"); 
?>
