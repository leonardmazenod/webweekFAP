<?php
$id=$_GET['id'];
include ('connection_bdd.php');
// Requete SQL pour recupérer les informations sur l'événement voulu
$requete="SELECT nomevent FROM evenement WHERE id_event=$id";
$resultats=$connection->query($requete);
$tab_event=$resultats->fetch();
$resultats->closeCursor();

// Requete SQL pour recupérer les informations sur les événements où l'on peut s'incrire
$requete="SELECT * FROM evenement WHERE nbplace>0";
$resultats=$connection->query($requete);
$tab_evenement=$resultats->fetchAll();
$resultats->closeCursor();
$nbevent=count($tab_evenement);
?>

<?php 
	$title="Page inscription";
	$description="cette page est utile pour s'inscrire";
	$bootstrap=true;
	include("navbar.php"); 
?>

<div class="allpage page-inscription">
	<?php 
	if ($id!=0){
	echo '<h1>Inscription à l\'événement :'. $tab_event[0].'</h1>';
	echo '<form method="POST" action="ajout/ajouter/ajouter_participant.php?id='.$id.'">';
	}
	else{
		echo '<h1>Inscription :</h1>';
		echo '<form method="POST" action="ajout/ajouter/ajouter_participant.php">';
		echo '<div class="col-md-8">
		<label for="event">Événement : </label>
		<select name="event" class="form-select" id="event">';
		for ($i=0;$i<$nbevent;$i++){
			echo "<option value=".$tab_evenement[$i]["id_event"].">".$tab_evenement[$i]["nomevent"]."</option>";
		}
		
		echo'</select></div>';
	}

	?>
	<div class="row gd-3">
		<div class="col-md-4">
			<label for="nom">Nom : </label>
			<input type="text" name="nom" id="nom" class="form-control" required="required" placeholder="Nom de famille">
		</div>
		<div class="col-md-4">
			<label for="prenom">Prénom : </label>
			<input type="text" name="prenom" id="prenom" class="form-control" required="required" placeholder="Prénom">	
		</div>
	</div>
	<div class="row gd-3">
		<div class="col-md-4">
			<label for="email">E-mail : </label>
			<input type="text" name="email" id="email" class="form-control" required="required" placeholder="adresse@mail.com">
		</div>
		<div class="col-md-4">
			<label for="tel">Téléphone : </label>
			<input type="text" id="tel" name="tel" class="form-control" required="required" placeholder="0601020304">
		</div>
	</div>
		<div>
			<input type="submit" class="btn btn-primary green" value="Confirmer l'incription">
		</div>
	</form>
	<form action="contact.php" method="POST">
		<div>
		<input type="hidden" name="x" value="0" >
		<input type="submit" class="btn btn-primary green" value="Annuler mon inscription">
		</div>
	</form>
</div>
	<!-- Footer -->
	<?php include("footer.php"); ?>