<?php

/**
 * Template-part 404.php
 * permet d'afficher la section  « 404 »
 */
?>
<?php

$erreur_404_couleurTexte = get_theme_mod('erreur-404_couleurTexte');
$erreur_404_couleurBouton = get_theme_mod('erreur-404_couleurBouton');

$erreur_404_titre = get_theme_mod('erreur-404_titre', 'Oops, vous avez échoué sur l\'île 404 !');
$erreur_404_description = get_theme_mod('erreur-404_description', 'Pas de panique, cher membre explorateur ! Vous avez dérivé une vague trop loin des destinations sélectionnées pour vous. Rejoignez votre groupe en cliquant sur "Accueil" pour découvrir à nouveau votre voyage d\'exception!');
?>
<div class="erreur-404__contenu">
    <h1 class="erreur-404__titre"><?php $erreur_404_titre ?></h1>
    <div class="erreur-404__description">
        <p><?php $page_404_description ?></p>
    </div>
        <a href="front-end.php">Retour à l'accueil</a>
        <div class="erreur-404__menu">
            <?php  wp_nav_menu(array(
                  "menu" => "erreur-404",
                  'container' => "nav",
                  "container_class" => "entete__div-nav entete__contenu",
                  "menu_class" => "erreur-404__boutons-menu"
                  
              )); ?>
                       
        </div>
        <?php
            get_search_form();
        ?>    
</div>
  
