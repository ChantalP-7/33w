<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <title>Je voyage</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Courgette&family=Quicksand:wght@300..700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="normalize.css" />
    <link rel="stylesheet" href="style.css" />
    <?php wp_head(); ?>
  </head>
  <body>
    <header class="entete">
      <div class="entete__contenu">
      <a href="#">
        <figure  class="entete__logo">
            <?= get_custom_logo();?>
        </figure>
        </a>
               
        <!--<h3>Je voyage</h3>-->
        <div class="entete__div-nav">
            <label for="chk__menu" class="entete__burger">
              <img
                src="https://s2.svgbox.net/hero-solid.svg?ic=menu-alt-1&color=FFFFFF"
                width="32"
                height="32" alt="icone menu"
              />
            </label>            
            <!--<label for="chk__menu-ferme" class="entete__burger-ferme">
                      <img src="https://s2.svgbox.net/hero-outline.svg?ic=x-circle&color=FFFFFF" width="32" height="32">
                  </label>-->
            <input type="checkbox" class="chk__menu" id="chk__menu" />
            <nav class="entete__nav">
              <!--<ul class="entete__menu">
                <li class="entete__menu-item"><a href="#">Aventure</a></li>
                <li class="entete__menu-item"><a href="#">Culturel</a></li>
                <li class="entete__menu-item"><a href="#">Zen</a></li>
                <li class="entete__menu-item"><a href="#">Sport</a></li>
                <li class="entete__menu-item"><a href="#">Croisière</a></li>
                <li class="entete__menu-item"><a href="#">Repos</a></li>
              </ul>-->
              <?php  wp_nav_menu(array(
                "menu" => "principal",
                'container' => "nav",
                "container_class" => "entete__nav",
                "menu_class" => "entete__menu",
            )); ?>
              <div class="entete__div">
                <form class="recherche" action="">
                  <label
                    for="recherche__input"
                    aria-label="champ de recherche"
                  ></label>
                  <input
                    class="recherche__input"
                    type="search"
                    name="recherche__input"
                    id="recherche__input"
                    placeholder="Chercher"
                  />
                  <button class="recherche__bouton">
                    <img
                      class="recherche__bouton-svg"
                      alt="loupe"
                      src="https://s2.svgbox.net/hero-solid.svg?ic=search&color=FFFFFF"
                      width="26"
                      height="26"
                    />
                  </button>
                </form>
              </div>
            </nav>
          </div>
      </div>
    </header>