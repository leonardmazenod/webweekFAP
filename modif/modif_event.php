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
  <link rel="icon" href="../img/icon.png"/>
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <title>Modifier Event</title>
</head>
<body>
	<?php
    include '../navbar.php';
	echo '<h1 class="titre_3">Modification des informations de l\'Événement : '.$tab[1].'</h1>';
	?>
	<form method="POST" action="modifier/modifier_event.php">
		<?php
		echo '<input type="text" name="id" value="'.$tab[0].'" hidden>';
		?>
		<div class="col-md-6">
			<label for="nom">Nom de l'Événement : </label>
			<?php
			echo '<input type="text" name="nom" id="nom" class="form-control" required="required" value="'.$tab[1].'">';
			?>
		</div>
        <div class="row g-3">
            <div class="col-md-4">
                <label for="xcoord">Coordonnées X : </label>
                <?php
                echo '<input type="float" name="xcoord" class="form-control" required="required" value="'.$tab[3].'">';	
                ?>
            </div>
            <div class="col-md-4">
            <label for="ycoord">Coordonnées Y : </label>
                <?php
                echo '<input type="float" name="ycoord" class="form-control" required="required" value="'.$tab[4].'">';	
                ?>
            </div>
            <div class="col-md-8">
            <label for="description">Description de l'Événement  : </label>
                <?php
                echo '<textarea id="description" name="description" class="form-control" required="required">'.$tab[2].'</textarea>';	
                ?>
            </div>
        </div>
        <div class="row g-3">
            <div class="col-md-4">
            <label for="horaire">Horaire de l'Événement : </label>
                <?php
                echo '<input type="date" name="horaire" class="form-control" required="required" value="'.$tab[6].'">';	
                ?>
            </div>
            <div class="col-md-4">
            <label for="duree">Horaire de la fermeture : </label>
                <?php
                echo '<input type="text" name="duree" class="form-control" required="required" value="'.$tab[7].'">';	
                ?>
            </div>
            <div class="col-md-4">
            <label for="img">Image de l'Événement : </label>
                <?php
                echo '<input type="file" name="img" class="form-control" required="required">';	
                ?>
            </div>
        </div>
		<div>
			<input type="submit" class="btn btn-primary green" value="Modifier les informations de l\'Événement !">
		</div>
	</form>
	<form action="../admin.php">
		<input type="submit" class="btn btn-primary green" value="Annuler">
	</form>
</body>
</html>
