<?php
  /**
   * Ici, le modèle Front-page permet d'afficher la page d'accueil.... 
   * */
?>

<?php get_header(); ?>


<!-- section hero -->

<?php $hero_background[0] = get_theme_mod("hero_background_0");?>
<?php $hero_background[1] = get_theme_mod("hero_background_1");?>
<?php $hero_background[2] = get_theme_mod("hero_background_2");
?>


<div class="carrousel" style="background-image: url('<?= $hero_background[0] ?>'); opacity:1"></div>
<div class="carrousel" style="background-image: url('<?= $hero_background[1] ?>'); opacity:0"></div>
<div class="carrousel" style="background-image: url('<?= $hero_background[2] ?>'); opacity:0"></div>

<form class="carrousel__form">
  <input type="radio" name="carrousel__radio" class="carrousel__radio">
  <input type="radio" name="carrousel__radio" class="carrousel__radio">
  <input type="radio" name="carrousel__radio" class="carrousel__radio">
</form>

  

      <?php get_template_part("gabarit/hero"); ?>
     
      </section>
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
    
  <section class="destination">
  <h2 class="destination__titre">Articles de la catégorie</h2>
  <div class="destination__list"></div>
</section>

<?php  get_footer();  ?>
      
