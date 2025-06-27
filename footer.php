<footer class="piedpage">
  	<div class="piedpage__grille">
	  	<div>
		  	<h3> Agences de voyage</h3>
			  <article class="piedpage__carte">      
				<?php				
				wp_nav_menu(array(
					"menu" => "externe",
					"container" => "nav"
				))
				?>
			</article>
		</div>
		<div class="piedpage__carte">
			<h3>Nous joindre</h3>
				<article>
                    <div class="piedpage__icone">
                      <img src="https://s2.svgbox.net/hero-solid.svg?ic=home&color=000" width="22" height="22"> 3800, rue Sherbrooke, Montréal, H1H 1H1
                    </div>
                    <div class="piedpage__icone">
                      <img src="https://s2.svgbox.net/materialui.svg?ic=smartphone&color=000" width="20" height="20"> 514-000-0000
                    </div>
                    <div class="piedpage__icone">
                      <img src="https://s2.svgbox.net/materialui.svg?ic=mail&color=000" width="22" height="22">
                      <a href="#">info@jevoyage.vo</a>
                    </div>
				</article>
		</div> 
		<div>
			<article>
				<h3>Notre mission</h3>
				<p>Notre mission est d'inspirer et d'informer nos membres sur des destinations de voyage qui répondent à leurs attentes. Nous favorisons les échanges et le partage d’expériences à travers des activités sociales variées, telles que des rencontres, des conférences et des dîners.
				</p>
			</article>
		</div>
	</div>
	
	<div class="piedpage__credits">
		<p>Tous droits réservés : Je voyage - 2025</p>
		<div class="hero__description-media">
			<a href="https://facebook.com"
				><img
				src="https://s2.svgbox.net/social.svg?ic=facebook&color=FFFFFF"
				width="28"
				height="30" alt="icone facebook"
			/></a>
			<a href="https://instagram.com"
				><img
				src="https://s2.svgbox.net/social.svg?ic=instagram&color=FFFFFF"
				width="28"
				height="28" alt="icone instagram"
			/></a>
			<a href="https://tiktok.com"
				><img
				src="https://s2.svgbox.net/social.svg?ic=tiktok&color=FFFFFF"
				width="28"
				height="28" alt="icone tiktok"
			/></a>
			<a href="https://github.com/ChantalP-7/33w/tree/tp1"
				><img src="https://s2.svgbox.net/social.svg?ic=github&color=FFFFFF" width="28" height="28" alt="github">
			</a>			
		</div>
		<p>Création : Chantal Pépin</p>
	</div>
</footer>
<?php  wp_footer(); ?>
</body>
  	<script src="script/checkbox.js"></script>
</html>