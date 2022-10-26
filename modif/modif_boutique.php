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
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="icon" href="../img/icon.png"/>
    <title>Modifier Boutique</title>
</head>
<body>
    <?php
    include '../navbar.php';
	echo '<div class="admin"><h1 class="titre_3">Modification des informations de la Boutique : '.$tab[1].'</h1>';
	?>
	<form method="POST" action="modifier/modifier_boutique.php">
		<?php
		echo '<input type="text" name="id" value="'.$tab[0].'" hidden>';
		?>
        <div class="row g-3">
            <div class="col-md-4">
                <label for="nom">Nom de la boutique : </label>
                <?php
                echo '<input type="text" name="nom" id="nom" class="form-control" required="required" value="'.$tab[1].'">';
                ?>
            </div>
            <div class="col-md-4">
                <label for="type">Type de la boutique :</label>
                <?php
                echo'<select class="form-select" name="type" aria-label="selecttype">
                    <option selected >'.$tab[2].'</option>
                    <option value="textile">Textile</option>
                    <option value="sculpture">Sculpture</option>
                    <option value="bois">Travail du bois et des plantes</option>
                    <option value="autre">Autre</option>
                    </select>'
                
                ?>
            </div>
        </div>
        <!-- Coordonnées -->
        <div class="row g-3">
            <div class="col-md-4">
                <label for="xcoord">Coordonnées X : </label>
                <?php
                echo '<input type="float" name="xcoord" id="xcoord" class="form-control" required="required" value="'.$tab[3].'">';	
                ?>
            </div>
            <div class="col-md-4">
            <label for="ycoord">Coordonnées Y : </label>
                <?php
                echo '<input type="float" name="ycoord" id="ycoord" class="form-control" required="required" value="'.$tab[4].'">';	
                ?>
            </div>
            <div class="col-md-8">
            <label for="description">Description de la Boutique  : </label>
                <?php
                echo '<textarea id="description" name="description" class="form-control" required="required">'.$tab[5].'</textarea>';	
                ?>
            </div>
        </div>
        <div class="row g-3">
            <div class="col-md-4">
            <label for="ouverture">Horaire de l'ouverture : </label>
                <?php
                echo '<input type="text" name="ouverture" id="ouverture" class="form-control" required="required" value="'.$tab[7].'">';	
                ?>
            </div>
            <div class="col-md-4">
            <label for="fermeture">Horaire de la fermeture : </label>
                <?php
                echo '<input type="text" name="fermeture" id="fermeture" class="form-control" required="required" value="'.$tab[8].'">';	
                ?>
            </div>
        </div>
        <div class="row g-3">
            <div class="col-md-4">
            <label for="tel">téléphone de la Boutique : </label>
                <?php
                echo '<input type="text" name="tel" id="tel" class="form-control" required="required" value="'.$tab[9].'">';	
                ?>
            </div>
            <div class="col-md-4">
            <label for="img">Image de la Boutique : </label>
                <?php
                echo '<input type="file" name="img" id="img" class="form-control" required="required">';	
                ?>
            </div>
        </div>
		<div class="col-md-4">
			<input type="submit" class="btn btn-primary green" value="Modifier les informations de la Boutique !">
		</div>
	</form>
	
	<form action="../admin.php">
		<input type="submit" class="btn btn-primary green" value="Annuler">
	</form>
    </div>
</body>
<?php include '../footer.php'?>
</html>
