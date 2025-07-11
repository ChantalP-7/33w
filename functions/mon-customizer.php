<?php

/**
 * configuration des nouveau panneaux du cutomizer
 */

function theme_31w_customize_register($wp_customize)
{
    // Le code pour ajouter des sections, des réglages et des contrôles ira ici.
    $wp_customize->add_section('hero_section', array(
        'title' => __('Section Héro - Accueil', 'theme_31w'),
        'priority' => 30,
    ));
    //////////////////////  Auteur
    /* configuration du champ */
    $wp_customize->add_setting('hero_auteur', array(
        'default' => __('Bienvenue sur mon site', 'theme_31w'),
        'sanitize_callback' => 'sanitize_text_field'
    ));
    /* configuration du contrôleur */
    $wp_customize->add_control('hero_auteur', array(
        'label' => __('Auteur ', 'theme_31w'),
        'section' => 'hero_section',
        'type' => 'text',
    ));
    ////////////////////// Adresse
    /* configuration du champ */
    $wp_customize->add_setting('hero_adresse', array(
        'default' => __('3800 Sherbrook-est', 'theme_31w'),
        'sanitize_callback' => 'sanitize_text_field'
    ));
    /* configuration du contrôleur */
    $wp_customize->add_control('hero_adresse', array(
        'label' => __('Adresse ', 'theme_31w'),
        'section' => 'hero_section',
        'type' => 'text',
    ));

    ////////////////////// Description
    /* configuration du champ */
    $wp_customize->add_setting('hero_description', array(
        'default' => __('Je voyage est un club de voyageurs passionné.e.s de
                  découvertes et d\'aventures, où les membres partagent leurs expériences et conseils pour organiser des voyages inoubliables. Ils bénéficient d\'offres exclusives et découvrent de nouvelles destinations.'),
        'sanitize_callback' => 'sanitize_text_field'
    ));
    /* configuration du contrôleur */
    $wp_customize->add_control('hero_description', array(
        'label' => __('Description ', 'theme_31w'),
        'section' => 'hero_section',
        'type' => 'text',
    ));


    ////////////////////// image 0
    /* créer le champ */
    $wp_customize->add_setting('hero_background_0', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    /* créer le contrôleur */
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_background_0', array(
        'label' => __('Image en arrière plan', 'theme_31w'),
        'section' => 'hero_section',
    )));
    // image 1
    /* créer le champ */
    $wp_customize->add_setting('hero_background_1', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    /* créer le contrôleur */
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_background_1', array(
        'label' => __('Image en arrière plan', 'theme_31w'),
        'section' => 'hero_section',
    )));
    // image 2
    /* créer le champ */
    $wp_customize->add_setting('hero_background_2', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    /* créer le contrôleur */
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_background_2', array(
        'label' => __('Image en arrière plan', 'theme_31w'),
        'section' => 'hero_section',
    )));





    /////////////////// couleur du texte de la section hero
    ////////////////////// champ couleur
    /* créer le champ */
    $wp_customize->add_setting('hero_couleur', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    /* créer le contrôleur */
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'hero_couleur', array(
        'label' => __('Couleur du texte', 'theme_31w'),
        'section' => 'hero_section',
    )));


    ///////////////////////// Ajout du panneau « pied de page »
    // Le code pour ajouter des sections, des réglages et des contrôles ira ici.
    $wp_customize->add_section('footer_section', array(
        'title' => __('Section pied de page', 'theme_31w'),
        'priority' => 30,
    ));

    $wp_customize->add_setting('footer_menu-externe', array(
        'default' => __('Agence de voyage', 'theme_31w'),
        'sanitize_callback' => 'sanitize_text_field'
    ));
    /* configuration du contrôleur */
    $wp_customize->add_control('footer_menu-externe', array(
        'label' => __('Menu Externe pied de page ', 'theme_31w'),
        'section' => 'footer_section',
        'type' => 'text',
    ));
}

add_action('customize_register', 'theme_31w_customize_register');




