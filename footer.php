<footer class="piedpage">
<?php
$footer_couleur = "ffffff";
vague("#0088bee1", "#2dc7c7a9"); ?>
<footer class="piedpage" style="background-color: <?= $footer_couleur ?> ;">
	<div>
		<div class="piedpage__grille">
			<div class="piedpage__grille-carte">
				<h3> Agences de voyage</h3>
				<article class="piedpage__carte menu">      
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
						<img src="https://s2.svgbox.net/hero-solid.svg?ic=home&color=000" width="26" height="26"><span> 3800, rue Sherbrooke, Montréal, H1H 1H1</span>
						</div>
						<div class="piedpage__icone">
						<img src="https://s2.svgbox.net/materialui.svg?ic=smartphone&color=000" width="24" height="24"><span> 514-000-0000</span>
						</div>
						<div class="piedpage__icone">
						<img src="https://s2.svgbox.net/materialui.svg?ic=mail&color=000" width="26" height="26">
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
			<div class="piedpage__icone">
				<?php icone_sociaux('#ffffff') ?>
			</div>
			<p>Création : Chantal Pépin</p>
		</div>
	</div>
</footer>
<?php  wp_footer(); ?>
</body>
  	
</html>