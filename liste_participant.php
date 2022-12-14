
<!DOCTYPE html>
<!-- PAGE DE CONNEXTION ADMIN -->
<html lang="fr">
    <head>
        <!-- Titre de la page -->
        <title>Admin connect</title>
        <!-- Encodage -->
        <meta charset="utf-8">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="icon" href="img/icon.jpg">
    </head>

	<body>
	<!-- Navbar -->
        <?php 
            include("navbar.php"); 
        ?>
        <div class="evenement">

        <?php
        $id=$_GET['id'];
        include 'class.php';
        include ('connection_bdd.php');

        //On récupére les données de tout les participant de l'événement auquel ils ont participé.
        $requete='SELECT participant.nom_participant, participant.prenom_participant, participant.email_participant, participant.tel_participant FROM participant, va_participer WHERE participant.id_participant = va_participer.id_participant AND va_participer.id_event ='.$id;
        $resultats = $connection->query($requete) ;
        $tabparticipant=$resultats->fetchAll() ;
        $resultats->closeCursor() ;
        $nbparticipant=count($tabparticipant) ;

        // Requete SQL pour recupérer les informations sur l'événement voulu
        $requete="SELECT * FROM evenement WHERE id_event=$id";
        $resultats=$connection->query($requete);
        $tab_event=$resultats->fetch();
        $resultats->closeCursor();


        $event=new Evenement ($tab_event[1],$tab_event[2],$tab_event[3],$tab_event[4],$tab_event[5],$tab_event[6],$tab_event[7],$tab_event[8],$tab_event[0]);

        for ($i=0;$i<$nbparticipant;$i++){
            $participant=$event->creeparticipants($tabparticipant[$i][0],$tabparticipant[$i][1],$tabparticipant[$i][2],$tabparticipant[$i][3]);
        }

        ?>
	</div>
	<!-- Footer -->
    <?php 
        include("footer.php"); 
    ?>
	</body>
</html>
