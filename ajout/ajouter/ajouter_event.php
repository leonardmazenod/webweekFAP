<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../../css/style.css"></link>
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <title>Ajouter un événement</title>
</head>
<body>
<?php include '../../navbar.php';

$connection=new PDO('mysql:host=localhost;port=3306;dbname=festival','root','');
$nomevent=$_POST['nom']; 
$xcoordevent=$_POST['xcoord']; 
$ycoordevent=$_POST['ycoord']; 
$defevent=$_POST['description']; 
$horaireevent=$_POST['horaire']; 
$dureeevent=$_POST['duree']; 
$imgevent=$_POST['img'];
$nbplace=$_POST['nbplace'];


//	Requête qui permet d'insérer toutes les informations que l'on a récupéré dans le formlaire sur le nouveau film	et de les insérer dans la base de données // 
$reqpreparee = $connection->prepare("INSERT INTO evenement(nomevent,defevent,xcoordevent,ycoordevent,imgevent,horaireevent,dureeevent,nbplace) VALUES(:nomevent,:defevent,:xcoordevent,:ycoordevent,:imgevent,:horaireevent,:dureeevent,:nbplace)");
$reqpreparee->bindParam(':nomevent', $nomevent); 
$reqpreparee->bindParam(':xcoordevent', $xcoordevent);
$reqpreparee->bindParam(':ycoordevent', $ycoordevent); 
$reqpreparee->bindParam(':defevent', $defevent); 
$reqpreparee->bindParam(':horaireevent', $horaireevent); 
$reqpreparee->bindParam(':dureeevent', $dureeevent); 
$reqpreparee->bindParam(':imgevent', $imgevent); 
$reqpreparee->bindParam(':nbplace', $nbplace); 


$succes=$reqpreparee->execute();

if($succes==true){
	echo '<p> Information du nouvel événement ajoutée.</p>';
}

?>
<form action="../../admin.php">
	<input type="submit" class="btn btn-primary green" value="Retourner à la page d'accueil !">
</form>
</body>
<?php include '../../footer.php'; ?>
</html>
