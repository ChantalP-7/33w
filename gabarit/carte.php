<?php

/**
 * Template-part carte.phpAdd commentMore actions
 * Affiche une carte dans un conteneur flex
 */
$lien = "<a href=" . get_permalink() . ">... <?php echo ?> Suite</a>"
?>
<article class="conteneur__carte">
   <div>
        <br>
        <?php the_post_thumbnail('thumbnails'); ?>
        <br>
        <br>
        <h4><?php the_title(); ?></h4>
        <br>
        <p class="blue"><?=  wp_trim_words(get_the_excerpt(), 10, $lien) ?></p>
        <br>
        <p><stron>Température minimale : </strong> <em><?php the_field('temperature_minimale'); ?> &deg;C</em> </p>
        <p><stron>Température minimale : </strong> <em><?php the_field('temperature_moyenne') ; ?> &deg;C</em> </p>
        <p><stron>Température minimale : </strong> <em><?php the_field('temperature_maximale'); ?> &deg;C</em> </p>
        <br>
        <?php the_category() ?>
   <div>
</article>