<?php
$id=$_GET['id'];
$connection=new PDO('mysql:host=localhost;port=3306;dbname=festival','root','');
// Requete SQL pour recupérer les informations sur l'événement voulu
$requete="SELECT nomevent FROM evenement WHERE id_event=$id";
$resultats=$connection->query($requete);
$tab_event=$resultats->fetch();
$resultats->closeCursor();

$connection=new PDO('mysql:host=localhost;port=3306;dbname=festival','root','');
// Requete SQL pour recupérer les informations sur les événements où l'on peut s'incrire
$requete="SELECT * FROM evenement WHERE nbplace>0";
$resultats=$connection->query($requete);
$tab_evenement=$resultats->fetchAll();
$resultats->closeCursor();
$nbevent=count($tab_evenement);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="img/icon.png">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <title>Inscription</title>
</head>
<body>

	<?php 
        include("navbar.php"); 
    ?>

	<div class="page-inscription">
		<?php 
		if ($id!=0){
		echo '<h1>Inscription à l\'événement :'. $tab_event[0].'</h1>';
		echo '<form method="POST" action="ajout/ajouter/ajouter_participant.php?id='.$id.'">';
		}
		else{
			echo '<h1>Inscription :</h1>';
			echo '<form method="POST" action="ajout/ajouter/ajouter_participant.php">';
			echo '<div>
			<label for="event">Événement : </label>
			<select name="event" id="event">';
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
		<form action="evenement.php">
			<div>
			<input type="submit" class="btn btn-primary green" value="Annuler">
			</div>
		</form>
	</div>
	  <!-- Footer -->
	  <?php include("footer.php"); ?>
</body>
</html>
