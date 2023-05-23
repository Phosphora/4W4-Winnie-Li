<?php
/**
* L'ensemble des fonctions du thème
*/

function enfiler_css() {
wp_enqueue_style('4w4-principal', // Identificateur
        get_template_directory_uri() . '/style.css', // L'adresse url de style.css
        array(), // Définir les dépendances
        filemtime(get_template_directory() . '/style.css'), // Le calcul de la version du fichier css
        'all'); // Média

        wp_enqueue_style("google_fonts",
            "https://fonts.googleapis.com/css2?family=Lora&family=Merriweather&family=Nunito&family=Ubuntu&display=swap",
            false);

        wp_enqueue_style("font_awesome",
            "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css",
            false);
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
add_theme_support( 'custom-background' );
add_theme_support( 'post-thumbnails' );

/**
 * Modifie la requete principale de Wordpress avant qu'elle soit exécuté
 * le hook « pre_get_posts » se manifeste juste avant d'exécuter la requête principal
 * Dépendant de la condition initiale on peut filtrer un type particulier de requête
 * Dans ce cas çi nous filtrons la requête de la page d'accueil
 * @param WP_query  $query la requête principal de WP
 */
function cidweb_modifie_requete_principal( $query ) {
    if (    $query->is_home() // Si page d'accueil
            && $query->is_main_query() // Si requête principale
            && ! is_admin() ) { // Si pas dans le tableau de bord
      // $query->set permet de modifier la requête principale.
      $query->set( 'category_name', 'note-de-cours-4w4' ); // Filtre les articles de categorie «note-de-cours4w4» slug
      $query->set( 'orderby', 'title' ); // Trier selon le champ title
      $query->set( 'order', 'ASC' ); // Trier en ordre ascendant
    }
}

add_action( 'pre_get_posts', 'cidweb_modifie_requete_principal' );

/**
* Permet de personaliser chacun des titres du menu
* @param $title : Titre du menu à modifier
*        $item : La structure « li » du menu
*        $args : Objet décrivant l'ensemble des menus de notre site
*        $depth : Niveau de profondeur du menu (On l'a retiré ici.)
*/
function perso_menu_item_title($title, $item, $args, $depth) {
    // Remplacer 'nom_de_votre_menu' par l'identifiant de votre menu
    if ($args -> menu == 'cours') { // On filtre uniquement le menu « cours ».
        // Modifier la longueur du titre en fonction de nos besoins
        $sigle = substr($title, 4, 3);
        $title = substr($title, 7);
        $title = "<code>" .$sigle. "</code>" . "<p>" . wp_trim_words($title, 2, ' ... ') . "</p>" ;
    }

    if ($args -> menu == 'note-de-cours-4w4') {
        if (substr($title, 0, 1) == '0') {
            $title = substr($title, 1);
        }
    }

    return $title;
}

add_filter( 'nav_menu_item_title', 'perso_menu_item_title', 10, 4 );

/**
 * Ajouter la description et l'image mise en avant à chacun des choix du menu « evenement »
 */

function add_menu_description_and_thumbnail($item_output, $item, $depth, $args) {
    if ('evenement' == $args -> menu || 'bloc-archive' == $args -> menu || 'atelier' == $args -> menu) {
        $post_thumbnail_id = get_post_thumbnail_id( $item->object_id );
        if ( $post_thumbnail_id ) {
            $post_thumbnail_url = wp_get_attachment_image_src( $post_thumbnail_id, 'thumbnail' );
            $item_output = str_replace( '">' . $args->link_before . $item->title, '">' . $args->link_before . '<span class="title">' . $item->title . '</span><span class="description">' . $item->description . '</span><img src="' . esc_url( $post_thumbnail_url[0] ) . '" class="menu-thumbnail" />', $item_output );
        } else {
            $item_output = str_replace( '">' . $args->link_before . $item->title, '">' . $args->link_before . '<span class="title">' . $item->title . '</span><span class="description">' . $item->description . '</span>', $item_output );
        }
    }

    return $item_output;
}

add_filter( 'walker_nav_menu_start_el', 'add_menu_description_and_thumbnail', 10, 4 );

/* Enregistrement des widgets */
// Enregistrer le sidebar
function enregistrer_sidebar() {
    register_sidebar( array(
        'name' => __( 'Footer 1', 'nom-de-mon-theme' ),
        'id' => 'footer_1',
        'description' => __( 'Une zone de widget pour afficher des widgets dans le pied de page.', 'nom-de-mon-theme' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ) );

    register_sidebar( array(
        'name' => __( 'Footer 2', 'nom-de-mon-theme' ),
        'id' => 'footer_2',
        'description' => __( 'Une zone de widget pour afficher des widgets dans le pied de page.', 'nom-de-mon-theme' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ) );

    register_sidebar( array(
        'name' => __( 'Footer 3', 'nom-de-mon-theme' ),
        'id' => 'footer_3',
        'description' => __( 'Une zone de widget pour afficher des widgets dans le pied de page.', 'nom-de-mon-theme' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ) );

    register_sidebar( array(
        'name' => __( 'Entete 1', 'nom-de-mon-theme' ),
        'id' => 'entete_1',
        'description' => __( 'Une zone de widget pour afficher des widgets dans la page accueil.', 'nom-de-mon-theme' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ) );
}

add_action( 'widgets_init', 'enregistrer_sidebar' );