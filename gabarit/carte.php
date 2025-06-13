<?php

/**
 * Template-part carte.phpAdd commentMore actions
 * Affiche une carte dans un conteneur flex
 */
$lien = "<a href=" . get_permalink() . ">... <?php echo ?> Suite</a>"
?>
<article class="conteneur__carte">
    <?php the_post_thumbnail('miniature'); ?>
    <h4><?php the_title(); ?></h4>
   <p><?php echo  wp_trim_words(get_the_excerpt(), 50, $lien) ?></p>
</article>