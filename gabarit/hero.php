<?php

/**
 * Template-part hero.php
 * permet d'afficher la section  « Hero »
 */
?>
<?php

$hero_couleurTexte = get_theme_mod('hero_couleurTexte');
$hero_couleur = get_theme_mod('hero_couleur');
$hero_auteur = get_theme_mod('hero_auteur', 'Chantal Pépin');
$hero_adresse = get_theme_mod('hero_adresse', '3800, rue Sherbrooke Est, Montréal');
?>
<style>
    .hero__contenu {
        span {
            margin-top: 10px;
        }
        
        <?php bloginfo($hero_couleur) ?>
    }

    .hero__description {        
        background-color: rgba(255, 255, 255, 0.644);
        font-size: clamp(1.1rem, 0.554vw + 0.9345rem, 1.35rem);
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
        color: black;
        padding: 20px;
        border-radius: 8px;
        font-family: Quicksand;
        font-weight: 500;
        line-height: 1.8rem;
        max-width: 80ch;
        gap: 10px;
    }

</style>

<div class="hero__contenu">
    <h1 class="hero__titre"><?php bloginfo('name') ?></h1>
    <div class="hero__description">
        <p><strong>Description:</strong> <?php bloginfo('description')?></p>
        <p><strong>Auteur du thème:</strong> <?= $hero_auteur ?></p>
        <p><strong>Adresse du club:</strong> <?= $hero_adresse ?></p>
        <span><?php icone_sociaux($hero_couleurTexte) ?> </span>
        
    </div>
</div>