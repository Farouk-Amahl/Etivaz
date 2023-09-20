<?php $methas = get_post_meta(get_the_ID()); //print_r($methas); ?>
<a href="<?php echo $methas['lien'][0]; ?>" target="blank" class="etivaz-wrap-etiquette">	
	<div class="etivaz-produit">
		<div class="etivaz-image etivaz-transition" style="background-image: url(<?php echo get_the_post_thumbnail_url(null, 'large'); ?>)" >
		</div>
	</div>	
	<header class="etivaz-etiquette-texte etivaz-transition">
		<h2 class="etivaz-titre-etiquette" ><?php the_title(); ?></h2>
		<?php the_excerpt(); ?>
	</header>	
</a>