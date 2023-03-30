<?php 
/**
 * 404.php est le modèle par défaut pour le message d'erreur du thème 4W4.
 */
?>

<?php get_header(); ?>
    <main class="site__main">
        <pre>404.php</pre>
        <h1>Erreur 404</h1>
        <h2>Page introuvable, vous pouvez tenter une recherche</h2>
        <div class="erreur__recherche">
            <?= get_search_form() ?>
        </div>
    </main>
    <?php get_footer(); ?>
</body>
</html>