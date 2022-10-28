<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="../img/icon.png"/>
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <title>Supprimer une Boutique</title>
</head>
<body>
<?php include '../navbar.php';
include '../connection_bdd.php';?>
 <div class="supp_boutique">
    <?php 
      $id=$_GET['id'];
      // Requête pour supprimer la boutique que l'on a choisie ( a l'aide d'un bouton disponible sur sa page admin)//
      $requete='DELETE FROM boutique WHERE id_boutique='.$id; 
      $resultats = $connection->query($requete) ;

      if ($resultats==true){
        echo "<p>La boutique a bien été supprimé de la base de donnée du site. </p>";
      }
      else { echo "<p>La boutique n'a pas pu être supprimé.</p>"; }
    ?>
    <form action="../index.php">
	    <input type="submit" class="btn btn-primary green" value="Retourner à la page d'accueil !">
    </form>
  </div>
</body>
<?php include '../footer.php' ?>
</html>
