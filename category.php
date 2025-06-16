<?php
/**
 * 
 * le modèle index représente le modèle par défaut.
 */
?>

<?php get_header(); ?>
    <section class="populaire">
    <h2>Destinations populaires</h2>
    <?php  
    if(have_posts()){
      while(have_posts()){ 
        /*Affiche de l'image mise en avant (miniature) */        
        the_post();      
        the_post_thumbnail('thumbnail');             
        ?>
        <h3><?php
        /* Affiche le titre principal du " post " */
        the_title(); ?></h3>
        <?php 
        /*Cette fonction permet d'afficher le contenu du post (article ou page) */
        the_content();
      }
    }        

    ?>
    </section>
    <?php  get_footer();  ?>
  
