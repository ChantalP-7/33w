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
    <?php wp_head(); ?>
  </head>
  <body>
    <header class="entete">
      <div class="entete__contenu">
          <figure>
            <a href="#">
                <?php echo get_custom_logo();?>
              </a>
          </figure>           
              <label for="chk__menu" class="entete__burger">
                <img
                  src="https://s2.svgbox.net/hero-solid.svg?ic=menu-alt-1&color=FFFFFF"
                  width="32"
                  height="32" alt="icone menu"
                />
              </label>             
              <input type="checkbox" class="chk__menu" id="chk__menu" />
              <nav class="entete__nav">
                <?php  wp_nav_menu(array(
                  "menu" => "principal",
                  'container' => "nav",
                  "container_class" => "entete__div-nav entete__contenu",
                  "menu_class" => "entete__menu entete__menu-item"
                  
              )); ?>
              <?php
              get_search_form();
              ?>                            
              </nav>
      </div>
  </header>