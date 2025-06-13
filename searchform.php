<?php

/**
 * le gabarti searchform.php permet d'afficher un formulaire de recherche
 */

?>
<form class="recherche" role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
    <label>
        <input class="recherche__input" type="search" placeholder="Rechercher..." value="<?php echo get_search_query(); ?>" name="s" />
    </label>
    <button class="recherche__bouton" type="submit">
    <img
                      class="recherche__bouton-svg"
                      alt="loupe"
                      src="https://s2.svgbox.net/hero-solid.svg?ic=search&color=FFFFFF"
                      width="26"
                      height="26"
                    />
    </button>
</form>