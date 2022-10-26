<?php
$id=$_POST['id'];
$bdd=new PDO('mysql:host=localhost;port=3306;dbname=festival','root','');
// Requête qui permet d'obtenir une liste avec toutes les informations sur le stand que l'ont a choisie // 
//Sert a compérer ses informations avec les info rentrer dans le formulaire pour savoir si l'admin a choisie oui ou non de modifier les informations //
$requete='SELECT * FROM `stand` WHERE id_stand='.$id; 
$resultats = $bdd->query($requete) ;
$tab=$resultats->fetch() ;
$resultats->closeCursor() ;

if ($_POST['nom']!=$tab[1]){
$connection = mysqli_connect("localhost", "root", "", "festival");
// Requête pour modifier le nom du stand dans le cas où l'admin l'a demandé //
$requete = 'UPDATE stand SET nomstand="'.$_POST['nom'].'" WHERE id_stand='.$id; 
if (mysqli_query($connection, $requete)) { echo "<p>La mise à jour du nom de la stand est un succés</p> </br>"; } 
else { echo "<p>Echec de la mise à jour du nom de la stand  : </p>" . mysqli_error($connection)."</br>"; }}

if ($_POST['type']!=$tab[2]){
$connection = mysqli_connect("localhost", "root", "", "festival");
// Requête pour modifier le type de la boutique dans le cas où l'admin l'a demandé //
$requete = 'UPDATE stand SET typestand="'.$_POST['type'].'" WHERE id_stand='.$id; 
if (mysqli_query($connection, $requete)) { echo "<p>La mise à jour du type du stand est un succés</p> </br>"; } 
else { echo "<p>Echec de la mise à jour du type du stand : </p>" . mysqli_error($connection)."</br>"; }}

if ($_POST['xcoord']!=$tab[3]){
$connection = mysqli_connect("localhost", "root", "", "festival");
// Requête pour modifier la coord X du stand dans le cas où l'admin l'a demandé //
$requete = 'UPDATE stand SET xcoordstand="'.$_POST['xcoord'].'" WHERE id_stand='.$id; 
if (mysqli_query($connection, $requete)) { echo "<p>La mise à jour de la coordonée X de la stand est un succés </p></br>"; } 
else { echo "<p>Echec de la mise à jour de la coordonée X de la stand : </p>" . mysqli_error($connection)."</br>"; }}

if ($_POST['ycoord']!=$tab[4]){
$connection = mysqli_connect("localhost", "root", "", "festival");
// Requête pour modifier la coord Y du stand dans le cas où l'admin l'a demandé //
$requete = 'UPDATE stand SET ycoordstand="'.$_POST['ycoord'].'" WHERE id_stand='.$id; 
if (mysqli_query($connection, $requete)) { echo "<p>La mise à jour de la coordonée Y de la stand est un succés </p></br>"; } 
else { echo "<p>Echec de la mise à jour de la coordonée Y de la stand : </p>" . mysqli_error($connection)."</br>"; }}

if ($_POST['description']!=$tab[5]){
$connection = mysqli_connect("localhost", "root", "", "festival");
// Requête pour modifier la description du stand dans le cas où l'admin l'a demandé //
$requete = 'UPDATE stand SET descriptionstand="'.$_POST['description'].'" WHERE id_stand='.$id; 
if (mysqli_query($connection, $requete)) { echo "<p>La mise à jour de la description de la stand est un succés </p></br>"; } 
else { echo "<p>Echec de la mise à jour de la description de la stand : </p>" . mysqli_error($connection)."</br>"; }}

if ($_POST['ouverture']!=$tab[7]){
$connection = mysqli_connect("localhost", "root", "", "festival");
// Requête pour modifier l'horaire d'ouverture de la stand dans le cas où l'admin l'a demandé //
$requete = 'UPDATE stand SET ouverturestand="'.$_POST['ouverture'].'" WHERE id_stand='.$id; 
if (mysqli_query($connection, $requete)) { echo "<p>La mise à jour de la description de l'horaire d'ouverture stand est un succés </p></br>"; } 
else { echo "<p>Echec de la mise à jour de l'horaire d'ouverture de la stand : </p>" . mysqli_error($connection)."</br>"; }}

if ($_POST['fermeture']!=$tab[8]){
$connection = mysqli_connect("localhost", "root", "", "festival");
// Requête pour modifier l'horaire de fermeture de la stand dans le cas où l'admin l'a demandé //
$requete = 'UPDATE stand SET fermeturestand="'.$_POST['fermeture'].'" WHERE id_stand='.$id; 
if (mysqli_query($connection, $requete)) { echo "<p>La mise à jour de la description de l'horaire de fermeture stand est un succés </p></br>"; } 
else { echo "<p>Echec de la mise à jour de l'horaire de fermeture de la stand : </p>" . mysqli_error($connection)."</br>"; }}

if ($_POST['emplacement']!=$tab[9]){
$connection = mysqli_connect("localhost", "root", "", "festival");
// Requête pour modifier l'horaire d'ouverture de la stand dans le cas où l'admin l'a demandé //
$requete = 'UPDATE stand SET emplacement="'.$_POST['emplacement'].'" WHERE id_stand='.$id; 
if (mysqli_query($connection, $requete)) { echo "<p>La mise à jour de l'emplacement du stand est un succés </p></br>"; } 
else { echo "<p>Echec de la mise à jour du téléphone de la stand : </p>" . mysqli_error($connection)."</br>"; }}

if ($_POST['img']!=$tab[9]){
$connection = mysqli_connect("localhost", "root", "", "festival");
// Requête pour modifier l'image de la stand dans le cas où l'admin l'a demandé //
$requete = 'UPDATE stand SET imgstand="'.$_POST['img'].'" WHERE id_stand='.$id; 
if (mysqli_query($connection, $requete)) { echo "<p>La mise à jour de l'image de la stand est un succés </p></br>"; } 
else { echo "<p>Echec de la mise à jour de l'image de la stand : </p>" . mysqli_error($connection)."</br>"; }}
    
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../../css/style.css">
  <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
  <title>Modifier un stand</title>
</head>
<body>
    <?php
    include 'navbar.php';
?>
<form action="../../admin.php">
	<input type="submit" class="btn btn-primary green" value="Retourner à la page d'acceuil !">
</form>
</body>
</html>
