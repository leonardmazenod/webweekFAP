<?php
$id=$_GET['id'];
$bdd=new PDO('mysql:host=localhost;port=3306;dbname=festival','root','');
// Requête pour supprimer la boutique que l'on a choisie ( a l'aide d'un bouton disponible sur sa page admin)//
$requete='DELETE FROM boutique WHERE id_boutique='.$id; 
$resultats = $bdd->query($requete) ;

if ($resultats==true){
	echo "La boutique a bien été supprimé de la base de donnée du site. <br/><br/>";
}
else { echo "La boutique n'a pas pu être supprimé."; }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/style.css"></link>
  <title>Supprimer une Boutique</title>
</head>
<body>
<form action="../admin.php">
	<input type="submit" value="Retourner à la page d'accueil !">
</form>
</body>
</html>