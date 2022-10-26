<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <title>Ajout Boutique</title>
</head>
<body>
    <?php include '../navbar.php'; ?>
    <div class="admin">
        <h1 class="titre_3">Ajout d'une Boutique :</h1>
        <form method="POST" action="ajouter/ajouter_boutique.php" enctype="multipart/form-data">
            <div class="row g-3">
                <div class="col-md-4">
                    <label for="nom">Nom de la boutique : </label>
                    <input type="text" name="nom" id="nom" class="form-control" required="required" value="">
                </div>
                <div class="col-md-4">
                    <label for="type">Type de la boutique :</label>
                    <select class="form-select" required="required" name="type" aria-label="selecttype">
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
                    </select>
                </div>
            </div>
            <div class="row g-3">
                <div class="col-md-4">
                    <label for="xcoord">Coordonnées X : </label>
                    <input type="float" name="xcoord" id="xcoord" class="form-control" required="required" value="00.00">	
                </div>
                <div class="col-md-4">
                    <label for="ycoord">Coordonnées Y : </label>
                    <input type="float" name="ycoord" id="ycoord" class="form-control" required="required" value="00.00">
                </div>
                <div class="col-md-9">
                    <label for="description">Description : </label>
                    <textarea id="description" name="description" class="form-control" required="required">... ... ...</textarea>
                </div>
            </div>
            <div class="row g-3">
                <div class="col-md-4">
                    <label for="ouverture">Horaire de l'ouverture : </label>
                    <input type="text" name="ouverture" id="ouverture" class="form-control" required="required" value="00:00:00">
                </div>
                <div class="col-md-4">
                    <label for="fermeture">Horaire de la fermeture : </label>
                    <input type="text" name="fermeture" id="fermeture" class="form-control" required="required" value="00:00:00">	
                </div>
            </div>
            <div class="row g-3">
                <div class="col-md-4">
                    <label for="tel">Téléphone de la Boutique : </label>
                    <input type="text" name="tel" id="tel" class="form-control" required="required" value="0601020304">
                </div>
                <div class="col-md-4">
                    <label for="img">Image de la Boutique : </label>
                    <input type="file" name="img" id="img" class="form-control" required="required">
                </div>
            </div>
            <div>
                <input type="submit" class="btn btn-primary" value="Ajouter la Boutique !">
            </div>
        </form>
        
        <form action="../admin.php">
            <div>
                <input type="submit" class="btn btn-primary" value="Annuler">
            </div>
        </form>
    </div>
</body>
<?php include '../footer.php'; ?>
</html>