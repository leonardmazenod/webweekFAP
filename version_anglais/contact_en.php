<!DOCTYPE html>
<!-- PAGE DE CONTACT -->
<html lang="fr">
    <head>
        <!-- Titre de la page -->
        <title>Contact</title>
        <!-- Encodage -->
        <meta charset="utf-8">
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/style.css">
    </head>
    <body>
        <header>
            <!-- Navbar -->
            <?php 
                include("navbar_en.php"); 
            ?>
        </header>
        <div class="contact">
            <!-- titre du formulaire -->
            <h1>Formulaire de contact</h1>
            <!-- Formulaire -->
            <form method="post" action="mailto:">
                <div class="row g-3">
                    <div class="col-md-4">
                        <label for="inputname" class="form-label">Last name</label>
                        <input type="text" class="form-control" placeholder="Doe" aria-label="Nom">
                    </div>
                    <div class="col-md-4">
                        <label for="inputname2" class="form-label">First name</label>
                        <input type="text" class="form-control" placeholder="John" aria-label="Prenom">
                    </div>
                </div>
                <div class="row g-3">
                    <div class="col-md-4">
                        <label for="inputEmail4" class="form-label">Email</label>
                        <input type="email" class="form-control" placeholder="john.doe@email.com" id="inputEmail4">
                    </div>
                    <div class="col-md-4">
                        <label for="inputtel" class="form-label">Phone number</label>
                        <input type="tel" class="form-control" placeholder="+44 0102030405" id="inputtel">
                    </div>
                </div>
                <div class="row g-3">
                    <div class="col-md-8">
                        <label for="floatingTextarea">Message</label>
                        <textarea class="form-control" placeholder="Write your message here !" id="floatingTextarea"></textarea>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary green">Send</button>
                    </div>
                </div>
            </form>
        </div>
    <!-- Footer -->
    <?php 
        include("footer_en.php"); 
    ?>
    </body>
</html>
