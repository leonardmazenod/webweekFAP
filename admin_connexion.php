<?php
$connection=new PDO('mysql:host=localhost;port=3306;dbname=festival','root','');
$requete="SELECT * FROM `admin`";
$resultats=$connection->query($requete);
$tab=$resultats->fetch();
$resultats->closeCursor();

echo "hello";





?>