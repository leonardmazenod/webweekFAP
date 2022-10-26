<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <title>Ajout Event</title>
</head>
<body>
    <?php include '../navbar.php'; ?>
    <div class="admin">
        <h1 class="titre_3">Ajout d'un événement :</h1>
        <form method="POST" action="ajouter/ajouter_event.php">
            <div class="row g-3">
                <div class="col-md-6">
                    <label for="nom">Nom de l'événement : </label>
                    <input type="text" name="nom" id="nom" class="form-control" required="required" value="">
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
                <label for="horaire">Heure du début de l'évenement : </label>
                    <input type="text" name="horaire" id="horaire" class="form-control" required="required" value="2022-01-01 12:00:00">
                </div>
                <div class="col-md-4">
                <label for="duree">Durée de l'événement : </label>
                    <input type="text" name="duree" id="duree" class="form-control" required="required" value="02:00:00">
                </div>
            </div>
            <div class="row g-3">
                <div class="col-md-4">
                    <label for="nbplace">Nombre de place à l'événement : </label>
                    <input type="number" name="nbplace" id="nbplace" class="form-control" required="required">
                </div>
                <div class="col-md-4">
                    <label for="img">Image de l'événement : </label>
                    <input type="file" name="img" id="img" class="form-control" required="required">
                </div>
            </div>
                <div>
                    <input type="submit" class="btn btn-primary green" value="Ajouter l'événement !">
                </div>
        </form>
        
        <form action="../admin.php">
            <div>
                <input type="submit" class="btn btn-primary green" value="Annuler">
            </div>
        </form>
    </div>
</body>
<?php include '../footer.php'; ?>
</html>
