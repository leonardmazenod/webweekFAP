<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../style.css"></link>
  <title>Modif Film</title>
</head>
<body>

    <h1>Ajout d'un stand :</h1>
	<form method="POST" action="ajout/ajout_stand.php">
		<div>
			<label for="nom">Nom de la stand : </label>
            <input type="text" name="nom" id="nom" required="required" value="">
		</div><br/>
		<div>
			<label for="type">Type de la stand :</label>
			<select class="form-select" name="type" aria-label="selecttype">
                <option selected disabled>Choisir un type</option>
                <option value="textile">Textile</option>
                <option value="sculpture">Sculpture</option>
                <option value="bois">Travail du bois et des plantes</option>
                <option value="autre">Autre</option>
                </select>
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
        <label for="ouverture">Horaire de l'ouverture : </label>
			<input type="text" name="ouverture" id="ouverture" required="required" value="00:00:00">
		</div><br/>
        <div>
        <label for="fermeture">Horaire de la fermeture : </label>
			<input type="text" name="fermeture" id="fermeture" required="required" value="00:00:00">	
		</div><br/>
        <div>
        <label for="emplacement">type de l'emplacement du stand : </label>
			<input type="text" name="emplacement" id="emplacement" required="required" value="couvert">
		</div><br/>
        <div>
        <label for="img">Image du stand : </label>
			<input type="file" name="img" id="img" required="required">
		</div><br/>
		<div>
			<input type="submit" value="Ajouter le stand !">
		</div>
	</form>
	<br/>
	<form action="../admin.php">
		<input type="submit" value="Annuler">
	</form>
</body>
</html>