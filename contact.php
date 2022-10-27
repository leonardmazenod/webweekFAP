<!DOCTYPE html>
<!-- PAGE DE CONTACT -->
<html lang="fr">
    <head>
        <!-- Titre de la page -->
        <title>Contact</title>
        <!-- Encodage -->
        <meta charset="utf-8">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="icon" href="img/icon.png"/>
    </head>
    <body>
        <header>
            <!-- Navbar -->
            <?php 
                include("navbar.php"); 
            ?>
        </header>
        <div class="contact">
            <!-- titre du formulaire -->
            <h1>Formulaire de contact</h1>
            <!-- Formulaire -->
            <form method="post" action="mailto:festivalartisanatpuyenvelay@gmail.com">
                <div class="row g-3">
                    <div class="col-md-4">
                        <label for="inputname" class="form-label">Nom</label>
                        <input type="text" class="form-control" placeholder="Doe" aria-label="Nom">
                    </div>
                    <div class="col-md-4">
                        <label for="inputname2" class="form-label">Prénom</label>
                        <input type="text" class="form-control" placeholder="John" aria-label="Prenom">
                    </div>
                </div>
                <div class="row g-3">
                    <div class="col-md-4">
                        <label for="inputEmail4" class="form-label">Email</label>
                        <input type="email" class="form-control" placeholder="john.doe@email.com" id="inputEmail4">
                    </div>
                    <div class="col-md-4">
                        <label for="inputtel" class="form-label">Téléphone</label>
                        <input type="tel" class="form-control" placeholder="07 77 77 77 77" id="inputtel">
                    </div>
                </div>
                <div class="row g-3">
                    <div class="col-md-8">
                        <label for="floatingTextarea">Message</label>
                        <textarea class="form-control" placeholder="Ecrivez votre message ici" id="floatingTextarea"></textarea>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary green">Envoyer</button>
                    </div>
                </div>
            </form>
        </div>
    </body>
        <!-- Footer -->
    <?php 
        include("footer.php"); 
    ?>
</html>
