<?php
$connection=new PDO('mysql:host=localhost;port=3306;dbname=festival','root','');
// Requete SQL pour recupérer les inaations sur les administrateurs
$requete="SELECT * FROM admin"; 
$resultats=$connection->query($requete);
$tab=$resultats->fetchAll();
$resultats->closeCursor();
$nbadmin=count($tab);

// Requete SQL pour recupérer les inaations sur les Stands
$requete="SELECT id_stand,nomstand,typestand FROM stand";
$resultats=$connection->query($requete);
$tab_stand=$resultats->fetchAll();
$resultats->closeCursor();
$nbstand=count($tab_stand);

// Requete SQL pour recupérer les inaations sur les Boutiques
$requete="SELECT id_boutique,nomboutique,typeboutique FROM boutique";
$resultats=$connection->query($requete);
$tab_boutique=$resultats->fetchAll();
$resultats->closeCursor();
$nbboutique=count($tab_boutique);

// Requete SQL pour recupérer les inaations sur les événements
$requete="SELECT id_event,nomevent,nbplace FROM evenement";
$resultats=$connection->query($requete);
$tab_event=$resultats->fetchAll();
$resultats->closeCursor();
$nbevent=count($tab_event);
?>

<!DOCTYPE html>
<!-- PAGE DE CONNEXTION ADMIN -->
<html lang="fr">
    <head>
        <!-- Titre de la page -->
        <title>Admin connect</title>
        <!-- Encodage -->
        <meta charset="utf-8">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
    </head>

	<body>
	<!-- Navbar -->
	<?php 
		include("navbar.php"); 
    ?>
	<div class="admin_connexion">
		<?php
		$login=$_POST['login']-1;
			if ($_POST['password']==$tab[$login]['password']){ // Si le mot de passe est correct on le fait accéder a la page admin
				?>
				<h1>Page de l'administrateur : <?php echo $tab[$login]['login']; ?></h1>

				<?php
				// On affiche tout les événements avec un bouton pour le modifier et un autre boutons pour le supprimer
					echo "<h3>Liste des Événements :</h3><ul>";
					for($i=0;$i<$nbevent;$i++){ // Avec la boucle for on va créer une liste à puces qui va contenir tout les évenements 
					echo "<li>".$tab_event[$i]["nomevent"];
				// On commence par créer le bouton pour modifier
					echo "<a href='modif/modif_event.php?id=".$tab_event[$i]["id_event"]."'>
					<button>Modifier</button></a>";
				// On regarde si l'événment propose de s'inscrire puis si c'ets le cas on demande si l'admin veut voir la liste de tout les participants
					if ($tab_event[$i]["nbplace"]>0){
					echo "<a href='liste_participant.php?id=".$tab_event[$i]["id_event"]."'>
					<button>Voir Inscrits</button></a></li>" ;}}
				// Selon les droits de l'admin on lui affcihe le bouton pour ajouter des événements
					if ($tab[$login]['login']=="admin_fap_all_right"){ 
				// On ajoute un bouton pour ajouter un événement a la fin de la liste des évents.
					echo "</ul><a href='ajout/ajout_event.php'>
					<button>Ajouter un Événement</button></a>";}
					else{echo'</ul>';}


				//On refait pareil avec les boutiques
					echo "<h3>Liste des Boutiques :</h3><ul>";
					for($i=0;$i<$nbboutique;$i++){
					echo "<li>".$tab_boutique[$i]["nomboutique"];
					echo "<a href='modif/modif_boutique.php?id=".$tab_boutique[$i]["id_boutique"]."'>
					<button>Modifier</button></a>";
					if ($tab[$login]['login']=="admin_fap_all_right"){
					echo "<a href='supp/supp_boutique.php?id=".$tab_boutique[$i]["id_boutique"]."'>
					<button>Supprimer</button></a></li>" ;
					}else{echo'</li>';}}
					if ($tab[$login]['login']=="admin_fap_all_right"){
					echo "</ul><a href='ajout/ajout_boutique.php'>
					<button>Ajouter une Boutique</button></a>";}
					else{echo'</ul>';}

				// On refait pareil avec les stand
					echo "<h3>Liste des Stands :</h3><ul>";
					for($i=0;$i<$nbstand;$i++){
					echo "<li>".$tab_stand[$i]["nomstand"];
					echo "<a href='modif/modif_stand.php?id=".$tab_stand[$i]["id_stand"]."'>
					<button>Modifier</button></a>";
					if ($tab[$login]['login']=="admin_fap_all_right"){
					echo "<a href='supp/supp_stand.php?id=".$tab_stand[$i]["id_stand"]."'>
					<button>Supprimer</button></a></li>" ;
					}else{echo'</li>';}}
					if ($tab[$login]['login']=="admin_fap_all_right"){
					echo "</ul><a href='ajout/ajout_stand.php'>
					<button>Ajouter un Stand</button></a>";}
					else{echo'</ul>';}	
					
				}
					else { // Sinon on le redirige sur la page de connextion et on indique, via l'url et à la méthode GET
					echo '<script> 
					function Redirection(){
					document.location.href="admin.php?error=1"; 
					}
					Redirection()
					</script>';}
		?>
		<div><a href='admin.php'>
		<button>Retour</button></a></div>
	</div>
	<!-- Footer -->
    <?php 
        include("footer.php"); 
    ?>
	</body>
</html>
