<div class="">
	<div class="">
		<?php the_post_thumbnail('thumbnail'); ?>
		<img class="" src="<?php // the_post_thumbnail_url(); ?>" alt="" />
		<div>
			<a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
			<div>
<?php
	the_excerpt();
?>
			<div>
			<a href="<?php the_permalink(); ?>">En savoir plus...</a>
		</div>
	</div>
</div>