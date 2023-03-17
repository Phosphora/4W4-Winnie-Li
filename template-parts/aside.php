<?php
/**
 * «template part» gabarit aside permet d'afficher un article «bloc»
 * qui s'intègre dans la liste des cours qu'accède avec category/cours.
 */
?>

<aside class="site__aside">
    <h3>Menu secondaire</h3>
    <?php
    $menu = "note-de-cours-4w4";
    if (in_category('cours')) {
        $menu = "cours";
    }
    // $menu peut prendre les valeurs suivantes: "note-de-cours-4w4" ou "cours".
    wp_nav_menu( array(
        "menu" => $menu,
        "container" => "nav"
    ) ); ?>
</aside>