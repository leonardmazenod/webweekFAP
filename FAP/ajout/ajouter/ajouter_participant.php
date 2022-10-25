<?php
$id_event=$_GET['id'];
$connection=new PDO('mysql:host=localhost;port=3306;dbname=festival','root','');
$nom=$_POST['nom']; 
$prenom=$_POST['prenom']; 
$email=$_POST['email']; 
$tel=$_POST['tel']; 



//	Requête qui permet d'insérer toutes les informations que l'on a récupéré dans le formlaire sur le nouveau film	et de les insérer dans la base de données // 
$reqpreparee = $connection->prepare("INSERT INTO participant(nom_participant,prenom_participant,email_participant,tel_participant) VALUES(:nom_participant,:prenom_participant,:email_participant,:tel_participant)");
$reqpreparee->bindParam(':nom_participant', $nom); 
$reqpreparee->bindParam(':prenom_participant', $prenom);
$reqpreparee->bindParam(':email_participant', $email); 
$reqpreparee->bindParam(':tel_participant', $tel); 

$succes=$reqpreparee->execute();

if($succes==true){
	echo 'Inscription confirmée avec succès';
}

// On récupére l'id du nouveau film que l'on vient d'ajouter  //
$id_participant=$connection->lastInsertId();

$reqpreparee = $connection->prepare("INSERT IGNORE INTO va_participer(id_event,id_participant) VALUES(:id_event,:id_participant)");
$reqpreparee->bindParam(':id_event', $id_event); 
$reqpreparee->bindParam(':id_participant', $id_participant);			
$succes=$reqpreparee->execute();

if($succes==true){
	echo 'ok';
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../../css/style.css"></link>
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <title>Ajouter un participant</title>
</head>
<body>
<?php include 'navbar.php'; ?>
<form action="../../admin.php">
	<input type="submit" class="btn btn-primary" value="Retourner à la page d'accueil !">
</form>
</body>