--><div class="etivaz-article etivaz-un etivaz-bloc ">
	<a href="<?php the_permalink(); ?>" class="etivaz-wrap-etiquette">
		<div class="etivaz-produit">
			<div class="etivaz-image">
			<?php the_post_thumbnail('medium'); ?>
			</div>
		</div>
		<header>
			<h2 class="etivaz-titre-etiquette" ><?php the_title(); ?></h2>
			<?php the_excerpt(); ?>
		</header>
		
	</a>
</div><!--