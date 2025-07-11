<?php

/**
 * Le modèle  front-page
 * Permet d'afficher la page d'accueil 
 */
?>
<?php get_header() ?>
<!-- section hero -->

<section class="hero">
  <?php
  $hero_background[0] = get_theme_mod("hero_background_0");
  $hero_background[1] = get_theme_mod("hero_background_1");
  $hero_background[2] = get_theme_mod("hero_background_2");
  ?>
  <div class="carrousel" style="background-image: url('<?= $hero_background[0] ?>'); opacity:1"></div>
  <div class="carrousel" style="background-image: url('<?= $hero_background[1] ?>'); opacity:0"></div>
  <div class="carrousel" style="background-image: url('<?= $hero_background[2] ?>'); opacity:0"></div>
  
  <form class="carrousel__form">
    <input type="radio" class="carrousel__radio" name="carrousel__radio">
    <input type="radio" class="carrousel__radio" name="carrousel__radio">
    <input type="radio" class="carrousel__radio" name="carrousel__radio">
  </form>
  <div></div>

  <?php get_template_part("gabarit/hero"); ?>
  
</section>
<section class="infolettre">
  <?php get_template_part("gabarit/infolettre"); ?>
</section>

<!-- section populaire -->
<section class="populaire">
  <h3 class="text-center">Voici des infos qui pourraient vous intéresser.</h3>
  <br>
  <?php get_template_part("gabarit/populaire"); ?>
</section>

<section class="destination">
  <div class="destination__div">
    <br>
    <h3 class="destination__titre">Articles de la catégorie Populaire</h3>
    <div class="destination__liste"></div>
    <br>
  </div>
</section>

<?php get_footer();
      
