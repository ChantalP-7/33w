<?php
/**
 * Configuration des nouveaux panneaux du customizer
 */

function theme_31w_customize_register($wp_customize) {
    // Le code pour ajouter des sections, des réglages et des contrôles ira ici.

    $wp_customize->add_section('hero_section', array(
        'title' => __('Section Héro - Accueil', 'theme_31w'),
        'priority' => 30,
    ));

    /**
     * Configuration du champ personnalisé Intro auteur
     */

    $wp_customize->add_setting('hero_auteur', array(
        'default' => __('Bienvenue sur mon site', 'theme_31w'),
        'sanitize_callback' => 'sanitize_text_field'
    ));

    /**
     * Configuration du contrôleur : add_control
     */
    
    $wp_customize->add_control('hero_auteur', array(
        'label' => __('Auteur', 'theme_31w'),
        'section' => 'hero_section',
        'type' => 'text',
    ));

    ////////////////////////////////////////////
    /**
     * Configuration du champ personnalisé adresse
     */

    $wp_customize->add_setting('hero_adresse', array(
        'default' => __('3800, rue Sherbrooke, Est H1X 3C5', 'theme_31w'),
        'sanitize_callback' => 'sanitize_text_field'
    ));

    /**
     * Configuration du contrôleur : add_control
     */
    
    $wp_customize->add_control('hero_adresse', array(
        'label' => __('Adresse', 'theme_31w'),
        'section' => 'hero_section',
        'type' => 'text',
    ));


    ////////////////////////// Ajout des autres panneaux.... iCI PIED DE PAGE

    $wp_customize->add_section('footer_section', array(
        'title' => __('Section pied de page', 'theme_31w'),
        'priority' => 30,
    ));

//// Ajout des champs nécessaires....


}

add_action('customize_register', 'theme_31w_customize_register');




