<?php

/**
 * Template-part carte.phpAdd commentMore actions
 * Affiche une carte dans un conteneur flex
 */
$lien = "<a href=" . get_permalink() . ">... <?php echo ?> Suite</a>"
?>
<article class="conteneur__carte">
    <?php the_post_thumbnail('thumbnails'); ?>
    <h4><?php the_title(); ?></h4>
   <p><?=  wp_trim_words(get_the_excerpt(), 50, $lien) ?></p>
   <p><stron>Température minimale : </strong> <em><?php the_field('temperature_minimale'); ?> &deg;C</em> </p>
   <p><stron>Température minimale : </strong> <em><?php the_field('temperature_moyenne') ; ?> &deg;C</em> </p>
   <p><stron>Température minimale : </strong> <em><?php the_field('temperature_maximale'); ?> &deg;C</em> </p>
   <?php the_category() ?>
</article>