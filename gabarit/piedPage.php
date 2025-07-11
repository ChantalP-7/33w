<?php
/**
 * Template-part hero.php
 * permet d'afficher la section  « Hero »
 */
?>
<?php
$footer_menuExterne = get_theme_mod('footer_menu-externe');

?>
<style>
    .hero__contenu {
        color: <?= $hero_couleur ?>;
    }
</style>

<!--<div class="hero__contenu">
    <h1 class="hero__titre">/*<?php bloginfo('name') ?>*/</h1>
    <div class="hero__description">
        <p>Description: <?php $hero_description ?></p>
        <p>Auteur du thème: <?= $hero_auteur ?></p>
        <p>Adresse du club: <?= $hero_adresse ?></p>
        <?php icone_sociaux($hero_couleur) ?>
    </div>
</div>-->

?>