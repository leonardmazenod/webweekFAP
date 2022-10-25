<?php 
$id=$_GET['id'];
$connection=new PDO('mysql:host=localhost;port=3306;dbname=festival','root','');
// Requete SQL pour recupérer les inaations sur les Boutiques
$requete="SELECT * FROM stand WHERE id_stand=".$id;
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
	echo '<h1>Modification des informations du Stand : '.$tab[1].'</h1>';
	?>
	<form method="POST" action="modifier/modifier_stand.php">
		<?php
		echo '<input type="text" name="id" value="'.$tab[0].'" hidden>';
		?>
		<div>
			<label for="nom">Nom du Stand : </label>
			<?php
			echo '<input type="text" name="nom" id="nom" required="required" value="'.$tab[1].'">';
			?>
		</div><br/>
		<div>
        <label for="type">Type du Stand :</label>
			<?php
            echo'<select class="form-select" required="required" name="type" aria-label="selecttype">
                <option selected disabled>Choisir un type</option>
                <option value="textile">Textile</option>
                <option value="sculpture">Sculpture</option>
                <option value="bois">Travail du bois et des plantes</option>
		<option value="tufting">Tufting</option>
		<option value="dentelle">Dentelle</option>
		<option value="joallier">Joallier</option>
		<option value="horloger">Horloger</option>
		<option value="céramiste">Céramiste</option>
		<option value="vitrailliste">Vitrailliste</option>
		<option value="tanneur">Tanneur</option>		
                <option value="autre">Autre</option>
                </select>'
            
            ?>
		</div><br/>
		<div>
			<label for="xcoord">Coordonée X : </label>
			<?php
			echo '<input type="float" id="xcoord" name="xcoord" required="required" value="'.$tab[3].'">';	
			?>
		</div><br/>
		<div>
        <label for="ycoord">Coordonée Y : </label>
			<?php
			echo '<input type="float" id="ycoord" name="ycoord" required="required" value="'.$tab[4].'">';	
			?>
		</div><br/>
        <div>
        <label for="description">Description du Stand  : </label>
			<?php
			echo '<textarea id="description" name="description" required="required">'.$tab[5].'</textarea>';	
			?>
		</div><br/>
        <div>
        <label for="ouverture">Horaire de l'ouverture : </label>
			<?php
			echo '<input type="text" id="ouverture" name="ouverture" required="required" value="'.$tab[7].'">';	
			?>
		</div><br/>
        <div>
        <label for="fermeture">Horaire de la fermeture : </label>
			<?php
			echo '<input type="text" id="fermeture" name="fermeture" required="required" value="'.$tab[8].'">';	
			?>
		</div><br/>
        <div>
        <label for="emplacement">Type d'emplacement : </label>
			<?php
			echo '<input type="text" id="tel" name="emplacement" required="required" value="'.$tab[9].'">';	
			?>
		</div><br/>
        <div>
        <label for="img">Image du Stand : </label>
			<?php
			echo '<input type="file" id="img" name="img" required="required">';	
			?>
		</div><br/>
		<div>
			<input type="submit" value="Modifier les informations du Stand !">
		</div>
	</form>
	<br/>
	<form action="../admin.php">
		<input type="submit" value="Annuler">
	</form>
</body>
</html>
