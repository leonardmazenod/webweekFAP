<?php 
$id=$_GET['id'];
$connection=new PDO('mysql:host=localhost;port=3306;dbname=festival','root','');
// Requete SQL pour recupérer les inaations sur les Boutiques
$requete="SELECT * FROM boutique WHERE id_boutique=".$id;
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
	echo '<h1>Modification des informations de la Boutique : '.$tab[1].'</h1>';
	?>
	<form method="POST" action="modifier/modifier_boutique.php">
		<?php
		echo '<input type="text" name="id" value="'.$tab[0].'" hidden>';
		?>
		<div>
			<label for="nom">Nom de la boutique : </label>
			<?php
			echo '<input type="text" name="nom" id="nom" required="required" value="'.$tab[1].'">';
			?>
		</div><br/>
		<div>
			<label for="type">Type de la boutique :</label>
			<?php
            echo'<select class="form-select" name="type" aria-label="selecttype">
                <option selected disabled>'.$tab[2].'</option>
                <option value="textile">Textile</option>
                <option value="sculpture">Sculpture</option>
                <option value="bois">Travail du bois et des plantes</option>
                <option value="autre">Autre</option>
                </select>'
            
            ?>
		</div><br/>
		<div>
			<label for="xcoord">Coordonée X : </label>
			<?php
			echo '<input type="float" name="xcoord" id="xcoord" required="required" value="'.$tab[3].'">';	
			?>
		</div><br/>
		<div>
        <label for="ycoord">Coordonée Y : </label>
			<?php
			echo '<input type="float" name="ycoord" id="ycoord" required="required" value="'.$tab[4].'">';	
			?>
		</div><br/>
        <div>
        <label for="description">Description de la Boutique  : </label>
			<?php
			echo '<textarea id="description" name="description" required="required">'.$tab[5].'</textarea>';	
			?>
		</div><br/>
        <div>
        <label for="ouverture">Horaire de l'ouverture : </label>
			<?php
			echo '<input type="text" name="ouverture" id="ouverture" required="required" value="'.$tab[7].'">';	
			?>
		</div><br/>
        <div>
        <label for="fermeture">Horaire de la fermeture : </label>
			<?php
			echo '<input type="text" name="fermeture" id="fermeture" required="required" value="'.$tab[8].'">';	
			?>
		</div><br/>
        <div>
        <label for="tel">téléphone de la Boutique : </label>
			<?php
			echo '<input type="text" name="tel" id="tel" required="required" value="'.$tab[9].'">';	
			?>
		</div><br/>
        <div>
        <label for="img">Image de la Boutique : </label>
			<?php
			echo '<input type="file" name="img" id="img" required="required">';	
			?>
		</div><br/>
		<div>
			<input type="submit" value="Modifier les informations de la Boutique !">
		</div>
	</form>
	<br/>
	<form action="../admin.php">
		<input type="submit" value="Annuler">
	</form>
</body>
</html>
