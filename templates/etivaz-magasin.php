<?php
/**
 * Template Name: Étivaz magasin
 * Template Post Type: post, page
 *
 * 
 */
// ici prévoir à utliser le même template pour différents magasins
get_header();
?>

<div class="etivaz-corps">
<!--<div style="
		position: absolute;
		top: 24vh;
		box-shadow: 1px 1px 10px #000;
		z-index: 3000;
		transform: rotate(3deg);
		left: 70vh;
	"><img src="http://fransyr.cz/wp-content/themes/Etivaz/assets/images/8mai.jpg" /></div>-->
	<div class="etivaz-magasin">
		<header style="background-image: url(<?php the_post_thumbnail_url(); ?>)">
			<h1><?php the_title(); ?></h1>
			<?php the_content(); ?>
		</header>
		<div class="etivaz-separateur"></div>
		<?php get_template_part('template-parts/content', 'infos'); ?>
	</div>
</div>

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php get_footer(); ?>
