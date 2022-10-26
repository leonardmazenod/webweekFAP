<?php
$id=$_GET['id'];
$connection=new PDO('mysql:host=localhost;port=3306;dbname=festival','root','');
// Requete SQL pour recupérer les informations sur les événements
$requete="SELECT nomevent FROM evenement WHERE id_event=$id";
$resultats=$connection->query($requete);
$tab_event=$resultats->fetch();
$resultats->closeCursor();

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

	<div class="page-inscription">
		<h1>Inscription à l'événement : <?php echo $tab_event[0] ?>
		<form method="POST" action="ajout/ajouter/ajouter_participant.php?id=<?php echo $id;?>">
			<div>
				<label for="nom">Nom : </label>
				<input type="text" name="nom" id="nom" required="required" placeholder="Nom de famille">
			</div><br/>
			<div>
				<label for="prenom">Prénom : </label>
				<input type="text" name="prenom" id="prenom" required="required" placeholder="Prénom">	
			</div><br/>
			<div>
			<label for="email">E-mail : </label>
				<input type="text" name="email" id="email" required="required" placeholder="adresse@mail.com">
			</div><br/>
			<div>
			<label for="tel">Téléphone : </label>
				<input type="text" id="tel" name="tel" required="required" placeholder="0601020304">
			</div><br/>
			<div>
				<input type="submit" value="Confirmer l'incription">
			</div>
		</form>
		<br/>
		<form action="programme.php">
			<input type="submit" value="Annuler">
		</form>
	</div>
	  <!-- Footer -->
	  <?php 
        include("footer.php"); 
    ?>
</body>
</html>
