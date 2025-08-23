<?php

/**
 * Template-part 404.php
 * permet d'afficher la section  « 404 »
 */
?>
<?php

$erreur404_couleurTexte = get_theme_mod('erreur404_couleurTexte');
$erreur404_couleurBouton = get_theme_mod('erreur404_couleurBouton');

$erreur404_titre = get_theme_mod('erreur404_titre', 'Oops, vous avez échoué sur l\'île 404 !');
$erreur404_message = get_theme_mod('erreur404_message', 'Pas de panique, cher membre explorateur ! Vous avez dérivé une vague trop loin des destinations sélectionnées pour vous. Rejoignez votre groupe en cliquant sur "Accueil" pour découvrir à nouveau votre voyage d\'exception!');
?>
<style>

    .erreur404__boutons-menu {
        background-color: <?= $erreur404_couleurBouton ?> ;
        padding: 10px;  
        color: black;         
    } 
    
</style>

    
       <h2 class="erreur404__titre"><?php $erreur404_titre ?> Oops, vous avez échoué sur l'île 404 !</h2>
        
        <div class="erreur404__contenu">
            
            <div class="erreur404__message">
                <p><?php $page404_message?>
                    Pas de panique, cher membre explorateur ! Vous avez dérivé d'une vague trop loin des destinations sélectionnées pour vous. Rejoignez votre groupe en cliquant sur "Accueil" pour découvrir à nouveau votre voyage d'exception
            </p>
            </div>
            <a href="/">Retour à l'accueil</a>
            <?php  wp_nav_menu(array(
                  "menu" => "erreur404",
                  'container' => "div",
                  "container_class" => "",
                  "menu_class" => "erreur404__boutons-menu"
                  
              )); ?>
              <?php
                    get_search_form();
                ?>   
                       
        </div>
