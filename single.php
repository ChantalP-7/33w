<?php

/**
 * le modèle single.php
 * Représente le modèle par défaut
 */

?>

<?php get_header() ?>
<section class="populaire">
  <?php if (have_posts()) {
    while (have_posts()) {
      /* affiche l'image « mise en avant » miniature */
      the_post();
      the_post_thumbnail('large');
  ?>
      <h2 class="text-left"><?php
          /* affiche le titre pricipal du « post » */
          the_title(); ?></h2>

  <?php
      /* cette fontion permet d'afficher l'ensemble du contenu (même les images) du post (article ou page)*/
      the_content();
      edit_post_link();
    }
  } ?>
</section>
<?php get_footer();
  
