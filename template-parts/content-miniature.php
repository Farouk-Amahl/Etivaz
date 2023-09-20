<div class="etivaz-article etivaz-miniature etivaz-bloc">
	<a href="<?php the_permalink(); ?>" class="ombre">
		<div class="etivaz-carre etivaz-miniature-image" style="background-image:url(<?php echo get_the_post_thumbnail_url( null, 'post-thumbnail'); ?> );">
			<?php // the_post_thumbnail('thumbnail'); ?>
		</div>
		<header>
			<h3><?php the_title(); ?></h3>
		</header>
	</a>
</div>