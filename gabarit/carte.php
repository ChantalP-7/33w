<?php
/**
 * Template-part carte.php
 * Affiche une carte dans un conteneur
 */

 $lien = "<a href=" . get_permalink() . ">...Suite</a>";

?>

<article class="conteneur__carte">
    <?php the_post_thumbnail('thumbnail'); ?>
    <h3><?php the_title(); ?></h3>
    <p><?php  echo '<p>' . wp_trim_words(get_the_excerpt(), 100, $lien); ?> </p>        
</article>