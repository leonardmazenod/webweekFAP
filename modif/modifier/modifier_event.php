<?php
$id=$_POST['id'];
$bdd=new PDO('mysql:host=localhost;port=3306;dbname=festival','root','');
// Requête qui permet d'obtenir une liste avec toutes les informations sur le event que l'ont a choisie // 
//Sert a compérer ses informations avec les info rentrer dans le formulaire pour savoir si l'admin a choisie oui ou non de modifier les informations //
$requete='SELECT * FROM `evenement` WHERE id_event='.$id; 
$resultats = $bdd->query($requete) ;
$tab=$resultats->fetch() ;
$resultats->closeCursor() ;

if ($_POST['nom']!=$tab[1]){
$connection = mysqli_connect("localhost", "root", "", "festival");
// Requête pour modifier le nom du event dans le cas où l'admin l'a demandé //
$requete = 'UPDATE evenement SET nomevent="'.$_POST['nom'].'" WHERE id_event='.$id; 
if (mysqli_query($connection, $requete)) { echo "<p>La mise à jour du nom de la event est un succés </p></br>"; } 
else { echo "<p>Echec de la mise à jour du nom de la event  : </p>" . mysqli_error($conn)."</br>"; }}

if ($_POST['xcoord']!=$tab[2]){
$connection = mysqli_connect("localhost", "root", "", "festival");
// Requête pour modifier la coord X du event dans le cas où l'admin l'a demandé //
$requete = 'UPDATE evenement SET xcoordevent="'.$_POST['xcoord'].'" WHERE id_event='.$id; 
if (mysqli_query($connection, $requete)) { echo "<p>La mise à jour de la coordonnée X de l'event est un succés </p></br>"; } 
else { echo "<p>Echec de la mise à jour de la coordonnée X de la event : </p>" . mysqli_error($conn)."</br>"; }}

if ($_POST['ycoord']!=$tab[3]){
$connection = mysqli_connect("localhost", "root", "", "festival");
// Requête pour modifier la coord Y du event dans le cas où l'admin l'a demandé //
$requete = 'UPDATE evenement SET ycoordevent="'.$_POST['ycoord'].'" WHERE id_event='.$id; 
if (mysqli_query($connection, $requete)) { echo "<p>La mise à jour de la coordonnée Y de l'event est un succés </p></br>"; } 
else { echo "<p>Echec de la mise à jour de la coordonnée Y de la event : </p>" . mysqli_error($conn)."</br>"; }}

if ($_POST['description']!=$tab[4]){
$connection = mysqli_connect("localhost", "root", "", "festival");
// Requête pour modifier la description de l'event dans le cas où l'admin l'a demandé //
$requete = 'UPDATE evenement SET defevent="'.$_POST['description'].'" WHERE id_event='.$id; 
if (mysqli_query($connection, $requete)) { echo "<p>La mise à jour de la description de l'vent est un succés </p></br>"; } 
else { echo "<p>Echec de la mise à jour de la description de la event : </p>" . mysqli_error($conn)."</br>"; }}

if ($_POST['horaire']!=$tab[5]){
$connection = mysqli_connect("localhost", "root", "", "festival");
// Requête pour modifier l'horaire de l'event dans le cas où l'admin l'a demandé //
$requete = 'UPDATE evenement SET horaireevent="'.$_POST['horaire'].'" WHERE id_event='.$id; 
if (mysqli_query($connection, $requete)) { echo "<p>La mise à jour de la description de l'horaire de l'event est un succés </p></br>"; } 
else { echo "<p>Echec de la mise à jour de l'horaire de l'event : </p>" . mysqli_error($conn)."</br>"; }}

if ($_POST['duree']!=$tab[6]){
$connection = mysqli_connect("localhost", "root", "", "festival");
// Requête pour modifier la duree l'event dans le cas où l'admin l'a demandé //
$requete = 'UPDATE evenement SET dureeevent="'.$_POST['duree'].'" WHERE id_event='.$id; 
if (mysqli_query($connection, $requete)) { echo "<p>La mise à jour de la description de l'horaire de fermeture event est un succés </p></br>"; } 
else { echo "<p>Echec de la mise à jour de l'horaire de fermeture de la event : </p>" . mysqli_error($conn)."</br>"; }}

if ($_POST['img']!=$tab[7]){
$connection = mysqli_connect("localhost", "root", "", "festival");
// Requête pour modifier l'image de l'event dans le cas où l'admin l'a demandé //
$requete = 'UPDATE evenement SET imgevent="'.$_POST['img'].'" WHERE id_event='.$id; 
if (mysqli_query($connection, $requete)) { echo "<p>La mise à jour de l'image de l'event est un succés </p></br>"; } 
else { echo "<p>Echec de la mise à jour de l'image de l'event : </p>" . mysqli_error($conn)."</br>"; }}
    
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../../css/style.css">
  <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
  <title>Modifier un event</title>
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
