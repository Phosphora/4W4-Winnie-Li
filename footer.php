<footer class="site__footer">
<div class="conteneur-liens">
    <section>
        <h6>Profil de l'auteure</h6>
        <p>
            Passionnée d’informatique, de nouvelles
            technologies et de l’univers du jeu vidéo, je suis une jeune femme
            qui aimerait pouvoir continuer d’apprendre et de me spécialiser
            dans tout ce qui concerne les jeux vidéo, le web et le multimédia
            en général. Je suis une personne autonome et perservérante qui est
            capable de m’adapter à diverses situations.
        </p>
    </section>

    <section>
        <h6>Liens utiles</h6>
        <ul class="footer-liens">
            <li><a href="https://stackoverflow.com">Stack Overflow</a></li>
            <li><a href="https://www.w3schools.com">W3Schools</a></li>
            <li><a href="https://developer.mozilla.org/en-US/">Mozilla</a></li>
            <li><a href="https://fontawesome.com">Font Awesome</a></li>
            <li><a href="https://getbootstrap.com">Bootstrap</a></li>
            <li><a href="https://github.com/">GitHub</a></li>
        </ul>
    </section>

    <section>
        <h6>Maisonneuve</h6>
        <ul class="footer-liens">
            <li><a href="https://www.cmaisonneuve.qc.ca/a-propos/vision/">À propos</a></li>
            <li><a href="https://www.cmaisonneuve.qc.ca/regles-de-confidentialite/">Règles de confidentialité</a></li>
            <li><a href="https://www.cmaisonneuve.qc.ca/medias/communiques-presse/">Médias</a></li>
            <li><a href="https://www.cmaisonneuve.qc.ca/fondation/actualites-de-la-fondation/">Fondation du Collège de Maisonneuve</a></li>
            <li><a href="https://www.cmaisonneuve.qc.ca/faq/futurs-etudiants/">FAQ</a></li>
        </ul>
    </section>
</div>

<hr>

<section class="footer__col">
    <div class="sidebar">
        <?php dynamic_sidebar( 'footer_1' ); ?>
    </div>
</section>

<section class="footer__col">
    <div class="sidebar">
        <?php dynamic_sidebar( 'footer_2' ); ?>
    </div>
</section>

<section>
    <div class="sidebar">
        <?php dynamic_sidebar( 'footer_3' ); ?>
    </div>
</section>

<div class="conteneur-icones">
    <section>
        <p class="copyright-texte">Copyright &copy; 2023 - 
            <a href="https://www.cmaisonneuve.qc.ca">Collège de Maisonneuve</a>. Tous droits réservés.
        </p>
    </section>

    <section>
        <ul class="icones-sociaux">
            <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
            <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>   
        </ul>
    </section>
</div>
</footer>
    <?php wp_footer(); ?>