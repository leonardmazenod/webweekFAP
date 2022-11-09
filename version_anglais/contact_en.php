<!DOCTYPE html>
<!-- PAGE DE CONTACT -->
<html lang="fr">
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content=width=device-width, initial-scale=1>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="author" content="OTILEMA-WEB" />
        <meta name="description" content=" this page is useful to contact us " />
        <meta name= "keywords" content= "contact,Surname,first name,E-mail,telephone,message">
        <title>Festival de l'Artisanat au Puy</title>
        <link rel="icon" href="../img/icon.png"/>
        <link rel="stylesheet" href="js/swiper.min.css">
        <link rel="stylesheet" href="css/style.css"/>
        <script src="https:/kit.fontawesome.com/37f50f5103.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.1.js"></script> 
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
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
