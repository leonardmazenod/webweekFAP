            <?php 
                $title="Page contact";
                $description = "cette page est utile pour nous contacter";
                $bootstrap=true;
                include("navbar.php"); 
            ?>
        <div class="allpage admin">
            <!-- titre du formulaire -->
            <?php if(isset($_POST['x'])){
                echo'<h1>Annulation de l\'inscription</h1>
                <a>*Pour vous retrouvez plus facilment est simplifiez la démarche merci de bien vouloir nous retransmettre vos données personnelles.</a>
                <br><a>**Ces données ne seront pas stockées et détruites automatiquement à la fin de la procédure.</a>';}
            else {echo'<h1>Formulaire de contact</h1>';} ?>

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
                        <textarea class="form-control" placeholder=
                        <?php if(isset($_POST['x'])){
                            echo'"Merci de nous expliquez la raison de votre annulation"';
                        }
                        else {echo'"Ecrivez votre message ici"';} ?>
                        id="floatingTextarea"></textarea>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary green">Envoyer</button>
                    </div>
                </div>
            </form>
        </div>
     <!-- Footer -->
    <?php 
        include("footer.php"); 
    ?>
