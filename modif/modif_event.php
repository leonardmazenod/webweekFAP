<?php 
$id=$_GET['id'];
$connection=new PDO('mysql:host=localhost;port=3306;dbname=festival','root','');
// Requete SQL pour recupérer les inaations sur les Boutiques
$requete="SELECT * FROM evenement WHERE id_event=".$id;
$resultats=$connection->query($requete);
$tab=$resultats->fetch();
$resultats->closeCursor();

echo "<h1>".$tab[1]."</h1>";
?>