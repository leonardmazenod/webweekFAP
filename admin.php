<?php
include ('connection_bdd.php');
$requete="SELECT * FROM admin";
$resultats=$connection->query($requete);
$tab=$resultats->fetchAll();
$resultats->closeCursor();
$nbadmin=count($tab);
?>

<!DOCTYPE html>
<!-- PAGE DE LOGIN ADMIN -->
<html lang="fr">
    <head>
        <!-- Titre de la page -->
        <title>Admin</title>
        <!-- Encodage -->
        <meta charset="utf-8">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="icon" href="img/icon.png">
    </head>
    <body>
        <header>
        <?php 
            include("navbar.php"); 
        ?>
        </header>

        <div class="admin">
            <div class="admin_page_de_connexion">
            <!-- titre du formulaire -->
            <h1>Compte Administrateur</h1>
            <!-- Formulaire -->
            <form method="post" action="admin_connexion.php">
                <div class="row g-3">
                    <!-- Login -->
                    <div class="col-md-3">
                    <label for="inputlogin" class="form-label">Login</label>
                    <select name="login" class="form-select" required=required id="pet-select">
                        <?php echo'<option disabled=disabled>Choisir un profil admin</option>'; 
                        for ($i=0;$i<$nbadmin;$i++){
                            echo'<option value="'.$tab[$i]['id_admin'].'">'.$tab[$i]['login'].'</option>'; 
                        }
                        ?>
                        </select>
                    </div>
                    <!-- Mot de passe -->
                    <div class="col-md-3">
                    <label for="inputPassword4" class="form-label">Mot de passe</label>
                    <input type="password" class="form-control" name="password" id="inputPassword4">
                    </div>

                    <?php // Message d'erreur dans le cas ou l'on met un mauvais mot de passe
                    if (isset($_GET['error'])){ //mettre le message en rouge 
                        if ($_GET['error']==1){ 
                            echo'<div>Mot de passe incorrect</div>'; 
                        }
                        if ($_GET['error']==2){ 
                            echo'<div>Connecte toi bien connard</div>'; 
                        }
                    }
                    ?>
                    <!-- Bouton de connexion -->
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary green">Se connecter</button>
                    </div>
                </div>
            </form>
                </div>
        </div>
        <!-- Footer -->
        <?php 
            include("footer.php"); 
        ?>
    </body>
</html>
