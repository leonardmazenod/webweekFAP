<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="../../img/icon.png"/>
  <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
  <title>Modifier un boutique</title>
</head>
<body>
<?php
    include '../../navbar.php';?>
  <div class="modifier_boutique">
    <?php
    $id=$_POST['id'];
    $bdd=new PDO('mysql:host=localhost;port=3306;dbname=festival','root','');
    // Requête qui permet d'obtenir une liste avec toutes les informations sur le boutique que l'ont a choisie // 
    //Sert a compérer ses informations avec les info rentrer dans le formulaire pour savoir si l'admin a choisie oui ou non de modifier les informations //
    $requete='SELECT * FROM `boutique` WHERE id_boutique='.$id; 
    $resultats = $bdd->query($requete) ;
    $tab=$resultats->fetch() ;
    $resultats->closeCursor() ;


    if ($_POST['nom']!=$tab[1]){
    $connection = mysqli_connect("localhost", "root", "", "festival");
    // Requête pour modifier le nom de la boutique dans le cas où l'admin l'a demandé //
    $requete = 'UPDATE boutique SET nomboutique="'.$_POST['nom'].'" WHERE id_boutique='.$id; 
    if (mysqli_query($connection, $requete)) { echo "<p>La mise à jour du nom de la boutique est un succés </p></br>"; } 
    else { echo "<p>Echec de la mise à jour du nom de la boutique  : </p>" . mysqli_error($connection)."</br>"; }}

    if ($_POST['type']!=$tab[2]){
    $connection = mysqli_connect("localhost", "root", "", "festival");
    // Requête pour modifier le type de la boutique dans le cas où l'admin l'a demandé //
    $requete = 'UPDATE boutique SET typeboutique="'.$_POST['type'].'" WHERE id_boutique='.$id; 
    if (mysqli_query($connection, $requete)) { echo "<p>La mise à jour du type de la boutique est un succés </p></br>"; } 
    else { echo "<p>Echec de la mise à jour du type de la boutique : </p>" . mysqli_error($connection)."</br>"; }}

    if ($_POST['xcoord']!=$tab[3]){
    $connection = mysqli_connect("localhost", "root", "", "festival");
    // Requête pour modifier la coord X de la boutique dans le cas où l'admin l'a demandé //
    $requete = 'UPDATE boutique SET xcoordboutique="'.$_POST['xcoord'].'" WHERE id_boutique='.$id; 
    if (mysqli_query($connection, $requete)) { echo "<p>La mise à jour de la coordonnée X de la boutique est un succés </p></br>"; } 
    else { echo "<p>Echec de la mise à jour de la coordonnée X de la boutique : </p>" . mysqli_error($connection)."</br>"; }}

    if ($_POST['ycoord']!=$tab[4]){
    $connection = mysqli_connect("localhost", "root", "", "festival");
    // Requête pour modifier la coord Y de la boutique dans le cas où l'admin l'a demandé //
    $requete = 'UPDATE boutique SET ycoordboutique="'.$_POST['ycoord'].'" WHERE id_boutique='.$id; 
    if (mysqli_query($connection, $requete)) { echo "<p>La mise à jour de la coordonnée Y de la boutique est un succés </p></br>"; } 
    else { echo "<p>Echec de la mise à jour de la coordonnée Y de la boutique : </p>" . mysqli_error($connection)."</br>"; }}

    if ($_POST['description']!=$tab[5]){
    $connection = mysqli_connect("localhost", "root", "", "festival");
    // Requête pour modifier la description de la boutique dans le cas où l'admin l'a demandé //
    $requete = 'UPDATE boutique SET descriptionboutique="'.$_POST['description'].'" WHERE id_boutique='.$id; 
    if (mysqli_query($connection, $requete)) { echo "<p>La mise à jour de la description de la boutique est un succés </p></br>"; } 
    else { echo "<p>Echec de la mise à jour de la description de la boutique : </p>" . mysqli_error($connection)."</br>"; }}

    if ($_POST['ouverture']!=$tab[7]){
    $connection = mysqli_connect("localhost", "root", "", "festival");
    // Requête pour modifier l'horaire d'ouverture de la boutique dans le cas où l'admin l'a demandé //
    $requete = 'UPDATE boutique SET ouvertureboutique="'.$_POST['ouverture'].'" WHERE id_boutique='.$id; 
    if (mysqli_query($connection, $requete)) { echo "<p>La mise à jour de la description de l'horaire d'ouverture boutique est un succés </p></br>"; } 
    else { echo "<p>Echec de la mise à jour de l'horaire d'ouverture de la boutique : </p>" . mysqli_error($connection)."</br>"; }}

    if ($_POST['fermeture']!=$tab[8]){
    $connection = mysqli_connect("localhost", "root", "", "festival");
    // Requête pour modifier l'horaire de fermeture de la boutique dans le cas où l'admin l'a demandé //
    $requete = 'UPDATE boutique SET fermetureboutique="'.$_POST['fermeture'].'" WHERE id_boutique='.$id; 
    if (mysqli_query($connection, $requete)) { echo "<p>La mise à jour de la description de l'horaire de fermeture boutique est un succés </p></br>"; } 
    else { echo "<p>Echec de la mise à jour de l'horaire de fermeture de la boutique : </p>" . mysqli_error($connection)."</br>"; }}

    if ($_POST['tel']!=$tab[9]){
    $connection = mysqli_connect("localhost", "root", "", "festival");
    // Requête pour modifier l'horaire d'ouverture de la boutique dans le cas où l'admin l'a demandé //
    $requete = 'UPDATE boutique SET telboutique="'.$_POST['tel'].'" WHERE id_boutique='.$id; 
    if (mysqli_query($connection, $requete)) { echo "<p>La mise à jour de la description du téléphone de la boutique est un succés </p></br>"; } 
    else { echo "<p>Echec de la mise à jour du téléphone de la boutique : </p>" . mysqli_error($connection)."</br>"; }}

    if ($_POST['img']!=$tab[9]){
    $connection = mysqli_connect("localhost", "root", "", "festival");
    // Requête pour modifier l'image de la boutique dans le cas où l'admin l'a demandé //
    $requete = 'UPDATE boutique SET imgboutique="'.$_POST['img'].'" WHERE id_boutique='.$id; 
    if (mysqli_query($connection, $requete)) { echo "<p>La mise à jour de l'image de la boutique est un succés </p></br>"; } 
    else { echo "<p>Echec de la mise à jour de l'image de la boutique : </p>" . mysqli_error($connection)."</br>"; }}
  
    ?>
    <form action="../../index.php">
      <input type="submit" class="btn btn-primary green" value="Retourner à la page d'acceuil !">
    </form>
  </div>
</body>
    <?php include("../../footer.php"); ?>
</html>
