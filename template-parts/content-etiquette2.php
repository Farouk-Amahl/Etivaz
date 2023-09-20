--><div class="etivaz-etiquette etivaz-bloc">
	<a href="<?php the_permalink(); ?>" class="etivaz-wrap-etiquette">

		<div class="etivaz-produit">
			<!--<div class="etivaz-image">
			<?php the_post_thumbnail('medium'); ?>
			</div>-->
			<div class="etivaz-image etivaz-transition" style="background-image: url(<?php echo get_the_post_thumbnail_url(null, 'large'); ?>)" >
			</div>
		</div>

		<header class="etivaz-etiquette-texte etivaz-transition">
			<h2 class="etivaz-titre-etiquette" ><?php the_title(); ?></h2>
			<!--<p><?php the_excerpt(); ?></p>-->
		</header>
	</a>
</div><!--