<?php
/**
* L'ensemble des fonctions du thème
*/

wp_enqueue_style('4w4-principal', // Identificateur
get_template_directory_uri() . '/style.css', // Adresse URL de style.css
array(), // Définir les dépendances
filemtime(get_template_directory() . '/style.css'), // Le calcul de la version du fichier css
'all'); // Media