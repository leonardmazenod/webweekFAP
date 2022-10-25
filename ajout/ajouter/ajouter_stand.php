<?php
$connection=new PDO('mysql:host=localhost;port=3306;dbname=festival','root','');
$nomstand=$_POST['nom']; 
$typestand=$_POST['type']; 
$xcoordstand=$_POST['xcoord']; 
$ycoordstand=$_POST['ycoord']; 
$descriptionstand=$_POST['description']; 
$ouverturestand=$_POST['ouverture']; 
$fermeturestand=$_POST['fermeture']; 
$emplacement=$_POST['emplacement']; 
$imgstand=$_POST['img'];


//	Requête qui permet d'insérer toutes les informations que l'on a récupéré dans le formlaire sur le nouveau film	et de les insérer dans la base de données // 
$reqpreparee = $connection->prepare("INSERT INTO stand(nomstand,typestand,xcoordstand,ycoordstand,descriptionstand,imgstand,ouverturestand,fermeturestand,emplacement) VALUES(:nomstand,:typestand,:xcoordstand,:ycoordstand,:descriptionstand,:imgstand,:ouverturestand,:fermeturestand,:emplacement)");
$reqpreparee->bindParam(':nomstand', $nomstand); 
$reqpreparee->bindParam(':typestand', $typestand);
$reqpreparee->bindParam(':xcoordstand', $xcoordstand); 
$reqpreparee->bindParam(':ycoordstand', $ycoordstand); 
$reqpreparee->bindParam(':descriptionstand', $descriptionstand); 
$reqpreparee->bindParam(':imgstand', $imgstand); 
$reqpreparee->bindParam(':ouverturestand', $ouverturestand); 
$reqpreparee->bindParam(':fermeturestand', $fermeturestand); 
$reqpreparee->bindParam(':emplacement', $emplacement); 

$succes=$reqpreparee->execute();

if($succes==true){
	echo ' Information du nouveaux stand ajouté';
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../../style.css"></link>
  <title>Ajouter un Film</title>
</head>
<body>
<form action="../../admin.php">
	<input type="submit" value="Retourner à la page d'accueil !">
</form>
</body>
