<?php
/**
 * 
 * le modèle index représente le modèle par défaut.
 */
?>

<?php get_header(); ?>
<div class="erreur404__conteneur">
<?php
  $erreur404_background = get_theme_mod("erreur404_background");?>
  <div  style="background-image: url('<?= $erreur404_background ?>'); "></div>
<?php get_template_part('gabarit/erreur404'); ?>
</div>
<?php get_footer();  ?>

  