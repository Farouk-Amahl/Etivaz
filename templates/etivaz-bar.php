<?php
/**
 * Template Name: Étivaz Bar à fromages
 * Template Post Type: post, page
 *
 * 
 */
get_header();
?>

<div class="etivaz-corps">

	<?php
	
	if ( have_posts() ) {

		while ( have_posts() ) {
			the_post();
get_template_part('template-parts/content', 'titre');
		}
	}
	?>
	
	<div class="etivaz-separateur"></div>
	
<?php

$args = array('p' => 781, 'posts_per_page' => 1 );
$the_query = new WP_Query( $args );
while ( $the_query->have_posts() ) : $the_query->the_post();

get_template_part('template-parts/content', 'article');

endwhile;
wp_reset_postdata();

$args = array('p' => 784, 'posts_per_page' => 1 );
$the_query = new WP_Query( $args );
while ( $the_query->have_posts() ) : $the_query->the_post();

get_template_part('template-parts/content', 'un');

endwhile;
wp_reset_postdata();
?>
	
	

</div>

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php get_footer(); ?>
