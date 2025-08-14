<?php
$footer_couleur = "ffffff";
vague($footer_couleur, "#2dc7c7a9"); ?>
<footer class="piedpage" style="background-color: <?= $footer_couleur ?> ;">
	<div>
		<?php get_template_part("gabarit/piedpage"); ?>		
	</div>
</footer>
<?php  wp_footer(); ?>
</body>
  	
</html>