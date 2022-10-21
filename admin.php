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
    </head>
    <body>
        <header></header>
        <!-- titre du formulaire -->
        <h1>Compte Administrateur</h1>
        <!-- Formulaire -->
        <form method="post" action="admin_connexion.php">
            <div class="row g-3">
                <div class="col-md-3">
                  <label for="inputlogin" class="form-label">Login</label>
                  <input type="text" class="form-control" name="login" id="inputlogin">
                </div>
                <div class="col-md-3">
                  <label for="inputPassword4" class="form-label">Mot de passe</label>
                  <input type="password" class="form-control" name="password" id="inputPassword4">
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Se connecter</button>
                </div>
            </div>
        </form>
    </body>
</html>