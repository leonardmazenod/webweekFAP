<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../style.css"></link>
  <title>Modif Film</title>
</head>
<body>

    <h1>Ajout d'un événement :</h1>
	<form method="POST" action="ajouter/ajouter_event.php">
		<div>
			<label for="nom">Nom de l'événement : </label>
            <input type="text" name="nom" id="nom" required="required" value="">
		</div><br/>
		<div>
			<label for="xcoord">Coordonée X : </label>
			<input type="float" name="xcoord" id="xcoord" required="required" value="00.00">	
		</div><br/>
		<div>
        <label for="ycoord">Coordonée Y : </label>
            <input type="float" name="ycoord" id="ycoord" required="required" value="00.00">
		</div><br/>
        <div>
        <label for="description">Description : </label>
			<textarea id="description" name="description" required="required">... ... ...</textarea>
		</div><br/>
        <div>
        <label for="horaire">Heure du début de l'évenement : </label>
			<input type="text" name="horaire" id="horaire" required="required" value="2022-01-01 12:00:00">
		</div><br/>
        <div>
        <label for="duree">durée dé l'événement : </label>
			<input type="text" name="duree" id="duree" required="required" value="02:00:00">
		</div><br/>
		<div>
        <div>
        <label for="nbplace">Nombre de place à l'événement : </label>
			<input type="number" name="nbplace" id="nbplace" required="required">
		</div><br/>
		<label for="img">Image de l'événement : </label>
			<input type="file" name="img" id="img" required="required">
		</div><br/>
		<div>
			<input type="submit" value="Ajouter l'événement !">
		</div>
	</form>
	<br/>
	<form action="../admin.php">
		<input type="submit" value="Annuler">
	</form>
</body>
</html>
