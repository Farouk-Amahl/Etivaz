--><div class="etivaz-article etivaz-un etivaz-bloc ">
	<a href="<?php the_permalink(); ?>" class="etivaz-wrap-etiquette">
	
		<div class="etivaz-produit">
			<div class="etivaz-image" style="background-image: url(<?php echo get_the_post_thumbnail_url(null, 'large'); ?>)" >
			
			</div>
		</div>
		
		<div class="etivaz-etiquette-texte">
			<h2 class="etivaz-titre-etiquette" ><?php the_title(); ?></h2>
			<?php the_excerpt(); ?>
		</div>
		
	</a>
</div><!--