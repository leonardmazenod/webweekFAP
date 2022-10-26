<?php

include "class.php";

$connection=new PDO('mysql:host=localhost;port=3306;dbname=festival','root','');
// Requete SQL pour recupérer les informations sur les Stands
$requete="SELECT * FROM stand";
$resultats=$connection->query($requete);
$tab_stand=$resultats->fetchAll();
$resultats->closeCursor();
$nbstand=count($tab_stand);

// Requete SQL pour recupérer les informations sur les Boutiques
$requete="SELECT * FROM boutique";
$resultats=$connection->query($requete);
$tab_boutique=$resultats->fetchAll();
$resultats->closeCursor();
$nbboutique=count($tab_boutique);

// Requete SQL pour recupérer les informations sur les événements
$requete="SELECT * FROM evenement";
$resultats=$connection->query($requete);
$tab_event=$resultats->fetchAll();
$resultats->closeCursor();
$nbevent=count($tab_event);

?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="img/icon.png">
  <link rel="stylesheet" href="css/style.css">
  <title>Inscription</title>
</head>
<body>

	<?php 
        include("navbar.php"); 
    ?>

	<div class="evenement">

        <?php

        echo "<h1>Evènements</h1>";

        echo "<h2>Liste des Événements : </h2>";
        $liste_event=array();
        for ($i=0;$i<$nbevent;$i++){
            $id_event=$tab_event[$i][0];
            $requete="SELECT * FROM `va_participer` WHERE id_event=$id_event";
            $resultats=$connection->query($requete);
            $tab_participant=$resultats->fetchAll();
            $resultats->closeCursor();
            $nbparticipant=count($tab_participant);

            $liste_event[$i]=new Evenement ($tab_event[$i][1],$tab_event[$i][2],$tab_event[$i][3],$tab_event[$i][4],$tab_event[$i][5],$tab_event[$i][6],$tab_event[$i][7],$tab_event[$i][8],$tab_event[$i][0]);
            $liste_event[$i]->affiche_event($nbparticipant);
        }

        echo "<h1 id='artisans'>Artisans</h1>";

        echo "<h2>Liste des Boutique : </h2>";
        $liste_boutique=array();
        for ($i=0;$i<$nbboutique;$i++){
            $liste_boutique[$i]=new Boutique ($tab_boutique[$i][1],$tab_boutique[$i][2],$tab_boutique[$i][3],$tab_boutique[$i][4],$tab_boutique[$i][5],$tab_boutique[$i][6],$tab_boutique[$i][7],$tab_boutique[$i][8],$tab_boutique[$i][9]);
            $liste_boutique[$i]->affiche_boutique();
        }
        echo "<h2>Liste des Stands : </h2>";
        $liste_stand=array();
        for ($i=0;$i<$nbstand;$i++){
            $liste_stand[$i]=new Stand ($tab_stand[$i][1],$tab_stand[$i][2],$tab_stand[$i][3],$tab_stand[$i][4],$tab_stand[$i][5],$tab_stand[$i][6],$tab_stand[$i][7],$tab_stand[$i][8],$tab_stand[$i][9]);
            $liste_stand[$i]->affiche_stand();
        }
        ?>
    </div>

<?php
//footer
    include("footer.php"); 
?>


