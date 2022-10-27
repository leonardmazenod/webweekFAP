<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="../../img/icon.png"/>
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <title>Ajouter une boutique</title>
</head>
<body>
<?php include '../../navbar.php';

$connection=new PDO('mysql:host=localhost;port=3306;dbname=festival','root','');
$nomboutique=$_POST['nom']; 
$typeboutique=$_POST['type']; 
$xcoordboutique=$_POST['xcoord']; 
$ycoordboutique=$_POST['ycoord']; 
$descriptionboutique=$_POST['description']; 
$ouvertureboutique=$_POST['ouverture']; 
$fermetureboutique=$_POST['fermeture']; 
$telboutique=$_POST['tel']; 

$file_min_size = 0;
$file_max_size = 10000000;

// On vérifie la présence d"un fichier à uploader
if (($_FILES["fichier"]["size"] > $file_min_size) && ($_FILES["fichier"]["size"] < $file_max_size)) :
    // dossier où sera déplacé le fichier; ce dossier doit exister
    $content_dir = "img_bdd/";
    $tmp_file = $_FILES["fichier"]["tmp_name"];
    if( !is_uploaded_file($tmp_file) ){
        echo "Image non trouvé";
    }
    // on vérifie l"extension
    $path = $_FILES["fichier"]["name"];
    $ext = pathinfo($path, PATHINFO_EXTENSION); // on récupère l"extension
    if(!strstr($ext, "jpg")&& !strstr($ext, "png")&& !strstr($ext, "jfif")&& !strstr($ext, "jpeg")){
        echo "EXTENSION ".$ext." NON AUTORISEE (extension autorisée : jpg / png / jpeg)";
    }
    // Si le formulaire est validé, on copie le fichier dans le dossier de destination
    if(empty($errors)){
        $name_file = md5(uniqid(rand(), true)).".".$ext; // on crée un nom unique en conservant l"extension
        if( !move_uploaded_file($tmp_file, $content_dir . $name_file) ){
            echo "Il y a des erreurs! Impossible de recupérer l'image";
        }
    } 
    // On récupère l'url du fichier envoyé
    $get_the_file = $content_dir.$name_file;
    
    elseif($_FILES["upfiles"]["size"] > $file_max_size):
        echo "le fichier dépasse la limite autorisée";
    else :
        echo "Pas de fichier joint";
    endif;
        $requete='INSERT INTO boutique(nomboutique,typeboutique,xcoordboutique,ycoordboutique,descriptionboutique,imgboutique,ouvertureboutique,fermetureboutique,telboutique) VALUES("'.$nomboutique.'","'.$typeboutique.'","'.$xcoordboutique.'","'.$ycoordboutique.'","'.$descriptionboutique.'","'.$get_the_file.'","'.$ouvertureboutique.'","'.$fermetureboutique.'","'.$telboutique.'")';
        $requete=$connection->query($requete);
        $requete->closeCursor();


?>

<form action="../../admin.php">
	<input type="submit" class="btn btn-primary green" value="Retourner à la page d'accueil !">
</form>
</body>
<?php include '../../footer.php'; ?>
</html>





