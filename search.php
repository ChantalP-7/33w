<?php
/**
 * 
 * le modèle index représente le modèle par défaut.
 */
?>

<?php get_header(); ?>
<h3>--------- Trace Pour débogage À retirer -------- search.php ------------------</h3>
    
      
    <section class="populaire">
    <h2>Destinations populaires</h2>
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
  
