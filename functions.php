<?php

function mon_theme_supports() {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('menus');
    add_image_size('miniature', 75, 75, true);
    add_theme_support('custom-logo', array(
        'height'      => 75,
        'width'       => 75,
        'border-radius' => 50,
        'flex-height' => true,
        'flex-width'  => true,
    ));   
            
}

add_action( 'after_setup_theme', 'mon_theme_supports' );

function theme_tp_enqueue_styles() { 
wp_enqueue_style('normalize', get_template_directory_uri() . '/normalize.css'); 
wp_enqueue_style('main-style', get_stylesheet_uri()); 

    $css_path = get_template_directory() . '/style.css';
    $css_url  = get_template_directory_uri() . '/style.css';

    wp_enqueue_style(
        'main-css',
        $css_url,
        array(),
        filemtime($css_path),
        true
    );

    $script_path = get_template_directory() . '/script/checkbox.js';
    $script_url  = get_template_directory_uri() . '/script/checkbox.js';

    wp_enqueue_script(
        'mon-script',
        $script_url,
        array(),
        filemtime($script_path),
        true
    );

    


add_action('wp_enqueue_scripts', 'mon_theme_ajouter_scripts');




} 
add_action('wp_enqueue_scripts', 'theme_tp_enqueue_styles');

/**
 * le hook « pre_get_posts » se manifeste juste avant d'exécuter la requête principal
 * Modifie la requete principale de WordPress avant qu\'elle soit exécuté
 * Dépendant de la condition initiale on peut filtrer un type particulier de requête * 
 * Dans ce cas ci nous filtrons la requête de la page d\'accueil
 * @param WP_query  $query la requête principal de WP
 */
function modifie_requete_principal( $query ) {
    if ( $query->is_home() && $query->is_main_query() && ! is_admin() ) {
      $query->set( 'category_name', 'populaire' );
      $query->set( 'orderby', 'title' );
      $query->set( 'order', 'ASC' );
      }
     }
     add_action( 'pre_get_posts', 'modifie_requete_principal' );


     

?>