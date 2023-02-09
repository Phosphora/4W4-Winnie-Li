<?php
/**
* L'ensemble des fonctions du thème
*/

function enfiler_css() {
wp_enqueue_style('4w4-principal', // Identificateur
        get_template_directory_uri() . '/style.css', // L'adresse url de style.css
        array(), // Définir les dépendances
        filemtime(get_template_directory() . '/style.css'), // Le calcul de la version du fichier css
        'all'); // Media
}

add_action( 'wp_enqueue_scripts', 'enfiler_css' );

/* Enregistrement des menus */
function enregistre_menus() {
	register_nav_menus( array(
	'menu_entete' => 'Menu entete',
	'menu_sidebar'  => 'Menu sidebar',
	) );
}
add_action( 'after_setup_theme', 'enregistre_menus', 0 );

/* add_theme_support */
add_theme_support( 'title-tag' );
add_theme_support( 'custom-logo', array(
    'height' => 150,
    'width'  => 150,
) );