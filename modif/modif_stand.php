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
  <link rel="stylesheet" href="../style.css">
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <title>Modification stand</title>
</head>
<body>
	<?php
    include 'navbar.php';
	echo '<h1 class="titre_3">Modification des informations du Stand : '.$tab[1].'</h1>';
	?>
	<form method="POST" action="modifier/modifier_stand.php">
		<?php
		echo '<input type="text" name="id" value="'.$tab[0].'" hidden>';
		?>
        <div class="row g-3">
            <div class="col-md-4">
                <label for="nom">Nom du Stand : </label>
                <?php
                echo '<input type="text" name="nom" id="nom" class="form-control" required="required" value="'.$tab[1].'">';
                ?>
            </div>
            <div class="col-md-4">
            <label for="type">Type du Stand :</label>
                <?php
                echo'<select class="form-select" name="type" aria-label="selecttype">
                    <option selected disabled>'.$tab[2].'</option>
                    <option value="textile">Textile</option>
                    <option value="sculpture">Sculpture</option>
                    <option value="bois">Travail du bois et des plantes</option>
                    <option value="autre">Autre</option>
                    </select>'
                
                ?>
            </div>
        </div>
        <div class="row g-3">
            <div class="col-md-4">
                <label for="xcoord">Coordonnées X : </label>
                <?php
                echo '<input type="float" id="xcoord" name="xcoord" class="form-control" required="required" value="'.$tab[3].'">';	
                ?>
            </div>
            <div class="col-md-4">
            <label for="ycoord">Coordonnées Y : </label>
                <?php
                echo '<input type="float" id="ycoord" name="ycoord" class="form-control" required="required" value="'.$tab[4].'">';	
                ?>
            </div>
            <div class="col-md-8">
            <label for="description">Description du Stand  : </label>
                <?php
                echo '<textarea id="description" name="description" class="form-control" required="required">'.$tab[5].'</textarea>';	
                ?>
            </div>
        </div>
        <div class="row g-3">
            <div class="col-md-4">
            <label for="ouverture">Horaire de l'ouverture : </label>
                <?php
                echo '<input type="text" id="ouverture" name="ouverture" class="form-control" required="required" value="'.$tab[7].'">';	
                ?>
            </div>
            <div class="col-md-4">
            <label for="fermeture">Horaire de la fermeture : </label>
                <?php
                echo '<input type="text" id="fermeture" name="fermeture" class="form-control" required="required" value="'.$tab[8].'">';	
                ?>
            </div>
            <div class="col-md-4">
            <label for="emplacement">Type d'emplacement : </label>
                <?php
                echo '<input type="text" id="tel" name="emplacement" class="form-control" required="required" value="'.$tab[9].'">';	
                ?>
            </div>
            <div class="col-md-4">
            <label for="img">Image du Stand : </label>
                <?php
                echo '<input type="file" id="img" name="img" class="form-control" required="required">';	
                ?>
            </div>
        </div>
		<div>
			<input type="submit" class="btn btn-primary green" value="Modifier les informations du Stand !">
		</div>
	</form>
	
	<form action="../admin.php">
		<input type="submit" class="btn btn-primary green" value="Annuler">
	</form>
</body>
</html>
