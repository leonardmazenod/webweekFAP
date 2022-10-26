<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="../../img/icon.png"/>
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <title>Ajouter une boutique</title>
</head>
<body>
<?php include '../../navbar.php';

$connection=new PDO('mysql:host=localhost;port=3306;dbname=festival','root','');
$nomboutique=$_POST['nom']; 
$typeboutique=$_POST['type']; 
$xcoordboutique=$_POST['xcoord']; 
$ycoordboutique=$_POST['ycoord']; 
$descriptionboutique=$_POST['description']; 
$ouvertureboutique=$_POST['ouverture']; 
$fermetureboutique=$_POST['fermeture']; 
$telboutique=$_POST['tel']; 
$imgboutique=$_POST['img'];


//	Requête qui permet d'insérer toutes les informations que l'on a récupéré dans le formlaire sur le nouveau film	et de les insérer dans la base de données // 
$reqpreparee = $connection->prepare("INSERT INTO boutique(nomboutique,typeboutique,xcoordboutique,ycoordboutique,descriptionboutique,imgboutique,ouvertureboutique,fermetureboutique,telboutique) VALUES(:nomboutique,:typeboutique,:xcoordboutique,:ycoordboutique,:descriptionboutique,:imgboutique,:ouvertureboutique,:fermetureboutique,:telboutique)");
$reqpreparee->bindParam(':nomboutique', $nomboutique); 
$reqpreparee->bindParam(':typeboutique', $typeboutique);
$reqpreparee->bindParam(':xcoordboutique', $xcoordboutique); 
$reqpreparee->bindParam(':ycoordboutique', $ycoordboutique); 
$reqpreparee->bindParam(':descriptionboutique', $descriptionboutique); 
$reqpreparee->bindParam(':imgboutique', $imgboutique); 
$reqpreparee->bindParam(':ouvertureboutique', $ouvertureboutique); 
$reqpreparee->bindParam(':fermetureboutique', $fermetureboutique); 
$reqpreparee->bindParam(':telboutique', $telboutique); 

$succes=$reqpreparee->execute();

if($succes==true){
	echo '<p>Information de la nouvelle boutique ajoutée.</p>';
}

?>

<form action="../../admin.php">
	<input type="submit" class="btn btn-primary green" value="Retourner à la page d'accueil !">
</form>
</body>
<?php include '../../footer.php'; ?>
</html>
