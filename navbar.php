<?php
  if (!isset($title)) $title = "Festival de l'Artisanat du Puy";
  if (!isset($description)) $description = "cette page vous renseigne sur l'évènement du Festival de l'Artisanat du Puy-en-Velay";
  if (!isset($bootstrap)) $bootstrap = false;
?>

<!DOCTYPE html>
<html lang="fr">
  <head>
      <meta charset="utf-8">
      <meta name="author" content="OTILEMA-WEB" />
      <meta name="description" content="<?php echo $description; ?>" />
      <meta name= "keywords" content= "festival,artisan,artisanat,evenement,art,spectacle">
      <meta name="viewport" content=width=device-width, initial-scale=1>
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <title><?php echo $title; ?></title>
      <link rel="icon" href="img/icon.png"/>
      <link rel="stylesheet" href="js/swiper.min.css">
      <link rel="stylesheet" href="css/style.css"/>
      <script src="https:/kit.fontawesome.com/37f50f5103.js" crossorigin="anonymous"></script>
      <script src="https://code.jquery.com/jquery-3.6.1.js"></script> 
      <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.1/dist/leaflet.css" integrity="sha256-sA+zWATbFveLLNqWO2gtiw3HL/lh1giY/Inf1BJ0z14=" crossorigin=""/>
      <script src="https://unpkg.com/leaflet@1.9.1/dist/leaflet.js" integrity="sha256-NDI0K41gVbWqfkkaHj15IzU7PtMoelkzyKp8TOaFQ3s=" crossorigin=""></script>
      <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
      <?php if ($bootstrap == true): ?> <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"><?php endif; ?>
  </head>

  <body>
    <?php
      if (file_exists("css/style.css")==1){$lien="";}
      elseif (file_exists("../css/style.css")==1){$lien="../";}
      elseif (file_exists("../../css/style.css")==1){$lien="../../";}
      echo '<link rel="stylesheet" href="'.$lien.'css/style.css">';
    ?>

    <header class="navbar">    
      <nav>
        <ul>
          <li><a href="<?php echo $lien; ?>evenement.php">Evènements</a></li>
          <li><a href="<?php echo $lien; ?>evenement.php#artisans">Artisans</a></li>
          <li><a href="<?php echo $lien; ?>index.php#map-titre">Carte</a></li>
          <li><a href="<?php echo $lien; ?>index.php"><img src="<?php echo $lien; ?>img/logo.png" alt="logo"/></i></a></li>
          <li><a href="<?php echo $lien; ?>festival.php">Le festival</a></li>
          <li><a href="<?php echo $lien; ?>contact.php">Contact</a></li>
          <li><a class="inscription" href="<?php echo $lien; ?>inscription.php?id=0">Inscription</a></li>
        </ul>
      </nav>
  </header>

  <!--Apparition du background sous le header-->
  <script type="text/Javascript">
      $(window).on('scroll',function(){
          if ($(window).scrollTop()){$('nav').addClass('bgheader');}
          else{$('nav').removeClass('bgheader');}
      })
  </script>

  <div class="header-holder">
    <header class="burger">
      
      <div class="search-mobile" style="display: block;">
        <a rel="nofollow">
          <i class="icon_search"></i>
        </a>
      </div>
      
    <nav class="header-nav">
      <div class="header-nav__inner">
        <ul class="header-menu-list">
          <li class="header-menu-item"><a href="<?php echo $lien; ?>index.php">Accueil</a></li>
          <li class="header-menu-item"><a href="<?php echo $lien; ?>evenement.php">Evènements</a></li>
          <li class="header-menu-item"><a href="<?php echo $lien; ?>evenement.php#artisans">Artisans</a></li>
          <li class="header-menu-item"><a href="<?php echo $lien; ?>index.php#map-titre">Carte</a></li>
          <li class="header-menu-item"><a href="<?php echo $lien; ?>festival.php">Le festival</a></li>
          <li class="header-menu-item"><a href="<?php echo $lien; ?>contact.php">Contact</a></li>
        </ul>
      </div>
    </nav>
      
      <a href="<?php echo $lien; ?>index.php" class="logo"><img src="img/logo.png" width="80px"/></a>
      
      <a href="#" class="device-menu">
        <div class="device-menu__inner">
          <span></span><span></span><span></span>
        </div>
      </a>
    </header>
</div>

<script src="js/menuburger.js"></script>
