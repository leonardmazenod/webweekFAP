<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
	<link rel="icon" href="../img/icon.png"/>
  <title>Supprimer un Stand</title>
</head>
<body>
<?php include '../navbar.php' 

$id=$_GET['id'];
$bdd=new PDO('mysql:host=localhost;port=3306;dbname=festival','root','');
// Requête pour supprimer le stand que l'on a choisie ( a l'aide d'un bouton disponible sur sa page admin)//
$requete='DELETE FROM stand WHERE id_stand='.$id; 
$resultats = $bdd->query($requete) ;

if ($resultats==true){
	echo "<p>Le stand a bien été supprimé de la base de donnée du site.</p>";
}
else { echo "<p>Le stand n'a pas pu être supprimé.</p>"; }
?>
<form action="../admin.php">
	<input type="submit" class="btn btn-primary green" value="Retourner à la page d'accueil !">
</form>
</body>
<?php include '../footer.php' ?>
</html>
