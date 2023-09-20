--><div class="etivaz-article etivaz-deux etivaz-banniere">
	
	<a href='<?php echo get_permalink(); ?>'>
		<div class="etivaz-banniere-inner" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>)")">
			<header>
				<h1><?php the_title(); ?></h1>
				<?php the_excerpt(); ?>
			</header>
		</div>
	</a>
	
</div><!--