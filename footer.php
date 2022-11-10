<footer>
    <div class="nav">
        <ul>
            <li><a href="<?php echo $lien; ?>evenement.php">Evènements</a></li>
            <li><a href="<?php echo $lien; ?>evenement.php#artisans">Artisans</a></li>
            <li><a href="<?php echo $lien; ?>evenement.php#map-titre">Carte</a></li>
            <li><a href="<?php echo $lien; ?>index.php">Accueil</a></li>
            <li><a href="<?php echo $lien; ?>festival.php">Le festival</a></li>
            <li><a href="<?php echo $lien; ?>contact.php">Contact</a></li>
            <li><a href="<?php echo $lien; ?>inscription.php?id=0" class="inscription">Inscription</a></li>
        </ul>
    </div>

    <div class="footer-flex">
        <!--bouton admin-->
        <button><a href="<?php echo $lien; ?>admin.php">admin</a></button>

        <!--boutons changer de langue, mentions légale et sit map-->
        <div class="footer-button">
            <div class="langue">
                <a href="<?php echo $lien; ?>version_anglais/index_en.php">english </a><p> | francais</p>
            </div>
            <div class="mention-map">
                <a href="<?php echo $lien; ?>cgu.php">mentions légales</a>
            </div>
        </div>

        <!--sponsor-->
        <div class="sponsor">
            <img src="<?php echo $lien; ?>img/Sponsor/Agglo-01.png" alt="">
            <img src="<?php echo $lien; ?>img/Sponsor/chambre-des-metiers-01.png" alt="">
            <img src="<?php echo $lien; ?>img/Sponsor/CreditAgricole-01.png" alt="">
            <img src="<?php echo $lien; ?>img/Sponsor/LaRegion-01.png" alt="">
            <img src="<?php echo $lien; ?>img/Sponsor/ministere-01.png" alt="">
        </div>
    </div>
</footer>
    
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>AOS.init();</script>
<script src="js/script.js"></script>

    </body>
</html>
