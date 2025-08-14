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
    /* créer le champ texte */
    $wp_customize->add_setting('hero_couleur', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    /* créer le contrôleur */
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'hero_couleur', array(
        'label' => __('Couleur du texte', 'theme_31w'),
        'section' => 'hero_section',
    )));


     /* créer le champ icone */
    $wp_customize->add_setting('hero_couleurIcone', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    /* créer le contrôleur */
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'hero_couleurIcone', array(        
        'label' => __('Couleur de l\'icône', 'theme_31w'),
        'section' => 'hero_section',
    )));


    // *******************************************************************************************************

    ///////////////////////// Ajout du panneau « pied de page »
    // Le code pour ajouter des sections, des réglages et des contrôles ira ici.    
    $wp_customize->add_section('piedpage_section', array(
        'title' => __('Section pied de page', 'theme_31w'),
        'priority' => 30,
    ));

    ////////////////////// Menu externe
    /* configuration du champ */
    $wp_customize->add_setting('piedpage_menu-externe', array(
        'default' => __('Menu Externe', 'theme_31w'),
        'sanitize_callback' => 'sanitize_text_field'
    ));
    /* configuration du contrôleur */
    $wp_customize->add_control('piedpage_menu-externe', array(
        'label' => __('Menu Externe pied de page ', 'theme_31w'),
        'section' => 'piedpage_section',
        'type' => 'text',
    ));

    ////////////////////// Adresse
    /* configuration du champ */
    $wp_customize->add_setting('piedpage_adresse', array(
        'default' => __('3800 Sherbrook-est', 'theme_31w'),
        'sanitize_callback' => 'sanitize_text_field'
    ));
    /* configuration du contrôleur */
    $wp_customize->add_control('piedpage_adresse', array(
        'label' => __('Adresse ', 'theme_31w'),
        'section' => 'piedpage_section',
        'type' => 'text',
    ));

    ////////////////////// Téléphone
    /* configuration du champ */
    $wp_customize->add_setting('piedpage_telephone', array(
        'default' => __('514-000-0000', 'theme_31w'),
        'sanitize_callback' => 'sanitize_text_field'
    ));
    /* configuration du contrôleur */
    $wp_customize->add_control('piedpage_telephone', array(
        'label' => __('Téléphone ', 'theme_31w'),
        'section' => 'piedpage_section',
        'type' => 'text',
    ));    

    ////////////////////// Mission
    /* configuration du champ */
    $wp_customize->add_setting('piedpage_mission', array(
        'default' => __('Notre mission est d\'inspirer et d\'informer nos membres sur des destinations de voyage qui répondent à leurs attentes. Nous favorisons les échanges et le partage d\’expériences à travers des activités sociales variées, telles que des rencontres, des conférences et des dîners.', 'theme_31w'),
        'sanitize_callback' => 'sanitize_text_field'
    ));
    /* configuration du contrôleur */
    $wp_customize->add_control('piedpage_mission', array(        
        'label' => __('Mission ', 'theme_31w'),
        'section' => 'piedpage_section',
        'type' => 'text',
    ));

    /////////////////// couleur du texte de la section pied de page
    ////////////////////// champ couleur
    /* créer le champ texte */
    $wp_customize->add_setting('piedpage_couleur', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    /* créer le contrôleur */
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'piedpage_couleur', array(
        'label' => __('Couleur du texte', 'theme_31w'),
        'section' => 'piedpage_section',
    )));

    /* créer le champ crédit */
    $wp_customize->add_setting('piedpage_couleur-credit', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    /* créer le contrôleur */
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'piedpage_couleur-credit', array(
        'section' => 'piedpage_section',
        'label' => __('Couleur du texte bas de page', 'theme_31w'),
    )));
    /* créer le champ icone */
    $wp_customize->add_setting('piedpage_couleur-icone', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    /* créer le contrôleur */
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'piedpage_couleur-icone', array(
        'section' => 'piedpage_section',
        'label' => __('Couleur de l\'icône', 'theme_31w'),
    )));

}

add_action('customize_register', 'theme_31w_customize_register');




