<?php
/**
 *  Template-part hero.php
 *  permet d'afficher la section hero
 * */ 
?>
<?php
$hero_couleur = get_theme_mod('hero_couleur');
$hero_auteur = get_theme_mod('hero_auteur', 'Mireille Fouchon');
$hero_adresse = get_theme_mod('hero_adresse', '18, rue des Grenouilles, Paris, Canada');
$hero_description = get_theme_mod("hero_description', '<strong>Je voyage</strong> est un club de voyageurs passionné.e.s de 
découvertes et d'aventures, où les membres partagent leurs expériences et conseils pour organiser des voyages inoubliables. Ils bénéficient d\'offres exclusives et découvrent de nouvelles destinations. ☀");
?>

<style>
    .hero__contenu {
        color: <?= $hero_couleur ?>;
    }
</style>

<div class="hero__contenu">
    <h1 class="hero__titre"><?php bloginfo('name') ?></h1>
    <div class="hero__description">
        <p > <?= $hero_description ?></p>
        <p>Auteur du thème: <?= $hero_auteur ?></p>
        <p>Adresse du club: <?= $hero_adresse ?></p>
        <?php icone_sociaux($hero_couleur) ?>
    </div>
    
    
</div>

<?php 


?>