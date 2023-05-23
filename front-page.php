<?php
/**
 * front-page.php est le modèle par défaut de la page d'accueil du thème 4W4.
 */
?>

<?php get_header(); ?>
    <main class="site__main">
        <div class="sidebar">
            <?php dynamic_sidebar( 'entete_1' ); ?>
        </div>
        <pre>front-page.php</pre>
        <h1>Bienvenue sur 4W4!</h1>
        <section class="bloc__viewport">
        <h2>Événements à venir</h2>
        <?php
            wp_nav_menu( array(
            "menu" => "evenement",
            "container" => "nav"
            ));
        ?>
        <h2>Menus à explorer</h2>
        <?php
            wp_nav_menu( array(
            "menu" => "bloc-archive",
            "container" => "nav"
            ));
        ?>
        <h2>Ateliers de perfectionnement à faire</h2>
        <?php
            wp_nav_menu( array(
            "menu" => "atelier",
            "container" => "nav"
            ));
        ?>
        </section>
        <section class="blocflex">
        <?php
            if (have_posts()):
            while (have_posts()): the_post();
            $la_categorie = 'note-de-cours-4w4';
            if (in_category('galerie')) {
                $la_categorie = 'galerie';
            }
            get_template_part("template-parts/categorie", $la_categorie);
            endwhile;
            endif; ?>
        </section>
    </main>

    <?php get_footer(); ?>
</body>
</html>