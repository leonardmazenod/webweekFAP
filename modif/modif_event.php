<?php 
$id=$_GET['id'];
$connection=new PDO('mysql:host=localhost;port=3306;dbname=festival','root','');
// Requete SQL pour recupérer les inaations sur les Boutiques
$requete="SELECT * FROM evenement WHERE id_event=".$id;
$resultats=$connection->query($requete);
$tab=$resultats->fetch();
$resultats->closeCursor();

?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../style.css"></link>
  <title>Modif Film</title>
</head>
<body>
	<?php
	echo '<h1>Modification des informations de l\'Événement : '.$tab[1].'</h1>';
	?>
	<form method="POST" action="modifier/modifier_event.php">
		<?php
		echo '<input type="text" name="id" value="'.$tab[0].'" hidden>';
		?>
		<div>
			<label for="nom">Nom de l'Événement : </label>
			<?php
			echo '<input type="text" name="nom" id="nom" required="required" value="'.$tab[1].'">';
			?>
		</div>
		<div>
			<label for="xcoord">Coordonée X : </label>
			<?php
			echo '<input type="float" name="xcoord" required="required" value="'.$tab[3].'">';	
			?>
		</div>
		<div>
        <label for="ycoord">Coordonée Y : </label>
			<?php
			echo '<input type="float" name="ycoord" required="required" value="'.$tab[4].'">';	
			?>
		</div>
        <div>
        <label for="description">Description de l'Événement  : </label>
			<?php
			echo '<textarea id="description" name="description" required="required">'.$tab[2].'</textarea>';	
			?>
		</div>
        <div>
        <label for="horaire">Horaire de l'Événement : </label>
			<?php
			echo '<input type="date" name="horaire" required="required" value="'.$tab[6].'">';	
			?>
		</div>
        <div>
        <label for="duree">Horaire de la fermeture : </label>
			<?php
			echo '<input type="text" name="duree" required="required" value="'.$tab[7].'">';	
			?>
		</div>
        <div>
        <label for="img">Image du Stand : </label>
			<?php
			echo '<input type="file" name="img" required="required">';	
			?>
		</div>
		<div>
			<input type="submit" value="Modifier les informations de l\'Événement !">
		</div>
	</form>
	<form action="../admin.php">
		<input type="submit" value="Annuler">
	</form>
</body>
</html>
