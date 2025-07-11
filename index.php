<?php
/**
 * 
 * le modèle index représente le modèle par défaut.
 */
?>

<?php get_header(); ?>
      
    <section class=" galerie">
    <?php  
    if(have_posts()){
      while(have_posts()){         
        the_post();
        /*Affiche l'image mise en avant (miniature) */
        the_post_thumbnail('thumbnail');             
        ?>
        <h3><?php the_title(); ?></h3>
        <?php the_content();
      }
    }        /*Cette fonction permet d'afficher le contenu du post (article ou page) */

    ?>
    </section>
    <?php  get_footer();  ?>
  
