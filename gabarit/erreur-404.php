<?php

/**
 * Template-part 404.php
 * permet d'afficher la section  « 404 »
 */
?>
<?php

$page_404_couleurTexte = get_theme_mod('404_couleurTexte');
$page_404_couleurBouton = get_theme_mod('404_couleurBouton');

$page_404_titre = get_theme_mod('404_titre', 'Oops, vous avez échoué sur l\'île 404 !');
$page_404_description = get_theme_mod('404_description', 'Pas de panique, cher membre explorateur ! Vous avez dérivé une vague trop loin des destinations sélectionnées pour vous. Rejoignez votre groupe en cliquant sur "Accueil" pour découvrir à nouveau votre voyage d\'exception!');
?>
<?php get_header(); ?>
   
<div class="hero__contenu">
    <h1 class="hero__titre"><?php $page_404_titre ?></h1>
    <div class="hero__description">
        <p><?php $page_404_description ?></p>
        <a href="front-end.php">Retour à l'accueil</a>
        <div class="description-bouton-media">
            <?php  wp_nav_menu(array(
                  "menu" => "404",
                  'container' => "nav",
                  "container_class" => "entete__div-nav entete__contenu",
                  "menu_class" => "entete__menu entete__menu-item"
                  
              )); ?>
            <div>
                <a class="bouton" href="#">Contactez-nous</a>
            </div>            
        </div>
    </div> 
</div>
<?php  get_footer();  ?>
  
