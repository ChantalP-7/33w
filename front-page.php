<?php
  /**
   * Ici, le modèle Front-page permet d'afficher la page d'accueil.... 
   * */
?>

<?php get_header(); ?>
<h1>trace /--------------------------------------</h1>
<!-- Section hero -->
<?php get_template_part('gabarit/hero') ?>
<section class="hero">
      <div class="hero__contenu contenu-html">
          <h1 class="hero__titre">Je voyage</h1>
            <div class="hero__description">
                <p>
                  <strong>Je voyage</strong> est un club de voyageurs passionné.e.s de
                  découvertes et d'aventures, où les membres partagent leurs expériences et conseils pour organiser des voyages inoubliables. Ils bénéficient d'offres exclusives et découvrent de nouvelles destinations. ☀
                </p>
                <div class="hero__iconesContact">
                    <div class="hero__icone">
                      <img src="https://s2.svgbox.net/hero-solid.svg?ic=home&color=000" width="22" height="22"> 3800, rue Sherbrooke, Montréal, H1H 1H1
                    </div>
                    <div class="hero__icone">
                      <img src="https://s2.svgbox.net/materialui.svg?ic=smartphone&color=000" width="20" height="20"> 514-000-0000
                    </div>
                    <div class="hero__icone">
                      <img src="https://s2.svgbox.net/materialui.svg?ic=mail&color=000" width="22" height="22">
                      <a href="#">info@jevoyage.vo</a>
                    </div>
                </div>       
                <div class="hero__description-bouton-media">
                    <div>
                        <a class="bouton" href="#">Je m'inscris !</a>
                    </div>
                    <div class="hero__descripton-media">
                        <a href="#"
                            ><img
                            src="https://s2.svgbox.net/social.svg?ic=facebook&color=000"
                            width="28"
                            height="30" alt="icone facebook"
                        /></a>
                        <a href="#"
                            ><img
                            src="https://s2.svgbox.net/social.svg?ic=instagram&color=000"
                            width="28"
                            height="28" alt="icone instagram"
                        /></a>
                        <a href="#"
                            ><img
                            src="https://s2.svgbox.net/social.svg?ic=tiktok&color=000"
                            width="28"
                            height="28" alt="icone tiktok"
                        /></a>
                      
                  </div>
              </div>
            </div>
        </div>
      </section>
      <!-- section populaire  -->
      <section class="infolettre">
        <h2>Notre infolettre</h2>
        <p>Abonnez-vous!</p>
        <form action="" class="infolettre__formulaire" method="post">
            <div class="infolettre__div">
                <div class="infolettre__input">
                    <label class="infolettre__label" id="prenom">Prénom</label>
                    <input type="text" class="" name="prenom" id="prenom">
                </div>
                <div class="infolettre__input">
                    <label class="infolettre__label" id="nom">Nom</label>
                    <input type="text" class="" name="nom" id="nom">
                </div>
                <div class="infolettre__input">
                    <label class="infolettre__label" id="email">Courriel</label>
                    <input type="email" class="" name="email" id="email">
                </div>
            </div>          
          <input type="submit" class="bouton__fonce" name="soumettre" value="Soumettre">
        </form>
      </section>
      <!--<section class="galerie">
        <h2>Destinations favorites</h2>
        <div class="galerie__items">
          <picture class="galerie__picture">
            <img
              src="https://gftnth00.mywhc.ca/33we_18/wp-content/uploads/2025/06/Grece.jpg"
              class="galerie__img"
              alt="Grèce"
            />
            <figcaption class="galerie__caption">Grèce</figcaption>
          </picture>
          <picture class="galerie__picture">
            <img
              src="https://gftnth00.mywhc.ca/33we_18/wp-content/uploads/2025/06/Afrique.jpg"
              class="galerie__img"
              alt="Afrique"
            />
            <figcaption class="galerie__caption">Afrique</figcaption>
          </picture>
          <picture class="galerie__picture">
            <img
              src="https://gftnth00.mywhc.ca/33we_18/wp-content/uploads/2025/06/Cuba.jpg"
              class="galerie__img"
              alt="Cuba"
            />
            <figcaption class="galerie__caption">Cuba</figcaption>
          </picture>
          <picture class="galerie__picture">
            <img
              src="https://gftnth00.mywhc.ca/33we_18/wp-content/uploads/2025/06/Maroc.jpg"
              class="galerie__img"
              alt="Maroc"
            />
            <figcaption class="galerie__caption">Maroc</figcaption>
          </picture>
          <picture class="galerie__picture">
            <img
              src="https://gftnth00.mywhc.ca/33we_18/wp-content/uploads/2025/06/Martinique.jpg"
              class="galerie__img"
              alt="Martinique"
            />
            <figcaption class="galerie__caption">Martinique</figcaption>
          </picture>
          <picture class="galerie__picture">
                <img
                src="https://gftnth00.mywhc.ca/33we_18/wp-content/uploads/2025/06/France.jpg"
                class="galerie__img"
                alt="France"
                />
            <figcaption class="galerie__caption">France</figcaption>
          </picture>
          <picture class="galerie__picture">
            <img
              src="https://gftnth00.mywhc.ca/33we_18/wp-content/uploads/2025/06/Thailande.jpg"
              class="galerie__img"
              alt="Thailance"
            />
            <figcaption class="galerie__caption">Thailande</figcaption>
          </picture>
          <picture class="galerie__picture">
            <img
              src="https://gftnth00.mywhc.ca/33we_18/wp-content/uploads/2025/06/Australie.jpg"
              class="galerie__img"
              alt="Australie"
            />
            <figcaption class="galerie__caption">Australie</figcaption>
          </picture>
          <picture class="galerie__picture">
            <img
              src="https://gftnth00.mywhc.ca/33we_18/wp-content/uploads/2025/06/Voilier-mer-bleue.jpg"
              class="galerie__img"
              alt="Alaska"
            />
            <figcaption class="galerie__caption">Alaska</figcaption>
          </picture>
          <picture class="galerie__picture">
            <img
              src="https://gftnth00.mywhc.ca/33we_18/wp-content/uploads/2025/06/Amsterdam.jpg"
              class="galerie__img"
              alt="Amsterdam"
            />
            <figcaption class="galerie__caption">Amsterdam</figcaption>
          </picture>
      </div>
    </section>-->
    <section class="populaire">
<!--<h2>Destinations populaires</h2> -->    
        <div class="conteneur global">
          <?php if (have_posts()) {
          while (have_posts()) {
            /* affiche l'image « mise en avant » miniature */ 
            the_post();
            ?>
             <p><?php
              if (in_category('galerie')) {
                 get_template_part("gabarit/galerie");
              } else {  
                get_template_part("gabarit/carte"); 
              }  
          }
          
        }
          ?>
           </div>
    </section>
    <?php  get_footer();  ?>
  
