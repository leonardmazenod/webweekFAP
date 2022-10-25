<?php
$id=$_GET['id'];
$bdd=new PDO('mysql:host=localhost;port=3306;dbname=festival','root','');
// Requête pour supprimer le stand que l'on a choisie ( a l'aide d'un bouton disponible sur sa page admin)//
$requete='DELETE FROM stand WHERE id_stand='.$id; 
$resultats = $bdd->query($requete) ;

if ($resultats==true){
	echo "Le stand a bien été supprimé de la base de donnée du site. <br/><br/>";
}
else { echo "Le stand n'a pas pu être supprimé."; }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/style.css"></link>
  <title>Supprimer un Stand</title>
</head>
<body>
<form action="../admin.php">
	<input type="submit" value="Retourner à la page d'accueil !">
</form>
</body>
</html>