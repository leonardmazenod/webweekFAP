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
    <!-- bootstrap -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <!-- css -->
    <link rel="stylesheet" href="../css/style.css"></link>
    <!-- nom de la page -->
    <title>Modification Boutique</title>
</head>
<body>
    <!-- titre -->
	<?php
	echo '<h1>Modification des informations de la Boutique : '.$tab[1].'</h1>';
	?>
    <!-- formulaire -->
	<form method="POST" action="modifier/modifier_boutique.php">
    <div class="row g-3">
		<?php
		echo '<input type="text" name="id" value="'.$tab[0].'" hidden>';
		?>
        <!-- Nom -->
		<div class="col-md-4">
			<label for="nom">Nom de la boutique : </label>
			<?php
			echo '<input type="text" name="titre" id="nom" class="form-control" required="required" value="'.$tab[1].'">';
			?>
		</div>
        <!-- Type -->
		<div class="col-md-4">
			<label for="type">Type de la boutique :</label>
			<?php
            echo'<select class="form-select" aria-label="selecttype">
                <option selected disabled>'.$tab[2].'</option>
                <option value="textile">Textile</option>
                <option value="sculpture">Sculpture</option>
                <option value="bois">Travail du bois et des plantes</option>
                <option value="autre">Autre</option>
                </select>'
            ?>
		</div>
        <!-- Coordonées X -->
		<div class="col-md-4">
			<label for="xcoord">Coordonnées X : </label>
			<?php
			echo '<input type="float" id="xcoord" class="form-control" required="required" value="'.$tab[3].'">';	
			?>
		</div>
        <!-- Coordonées Y -->
		<div class="col-md-4">
        <label for="ycoord">Coordonnées Y : </label>
			<?php
			echo '<input type="float" id="ycoord" class="form-control" required="required" value="'.$tab[4].'">';	
			?>
		</div>
        <!-- Description -->
        <div class="col-md-8">
        <label for="description">Description de la Boutique  : </label>
			<?php
			echo '<textarea id="description" name="decription" class="form-control"  required="required">'.$tab[5].'</textarea>';	
			?>
		</div>
        <!-- Horaire ouverture -->
        <div class="col-md-4">
        <label for="ouverture">Horaire de l'ouverture : </label>
			<?php
			echo '<input type="text" id="ouverture" class="form-control" required="required" value="'.$tab[7].'">';	
			?>
		</div>
        <!-- Horaire fermeture -->
        <div class="col-md-4">
        <label for="fermeture">Horaire de la fermeture : </label>
			<?php
			echo '<input type="text" id="fermeture" class="form-control" required="required" value="'.$tab[8].'">';	
			?>
		</div>
        <!-- Telephone -->
        <div class="col-md-4">
        <label for="tel">Téléphone de la Boutique : </label>
			<?php
			echo '<input type="text" id="tel" class="form-control" required="required" value="'.$tab[9].'">';	
			?>
		</div>
        <!-- Image -->
        <div class="col-md-4">
        <label for="img">Image de la Boutique : </label>
			<?php
			echo '<input type="file" id="img" class="form-control" required="required">';	
			?>
		</div>
        <!-- Bouton valider -->
		<div>
			<input type="submit" class="btn btn-primary" value="Modifier les informations de la Boutique !">
		</div>
    </div>
	</form>
	<form action="../index.php">
        <!-- Bouton annuler -->
        <div>
		    <input type="submit" class="btn btn-primary" value="Annuler">
        </div>
	</form>
</body>
</html>
