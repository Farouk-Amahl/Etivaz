<?php
/**
 * Template Name: Étivaz Page Simple
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

			get_template_part('template-parts/content', 'page');
			
		}
	}

	?>
	
	<div class="etivaz-separateur"></div>
	
	<?php
// ici frise de fromages
if(is_single('aop')){
	$args = array('tag' => 'aop', 'orderby' => 'rand', 'posts_per_page' => 12 );
}else{
	$args = array('cat' => get_cat_ID(pll__('fromages')), 'orderby' => 'rand', 'posts_per_page' => 6 );
}
$the_query = new WP_Query( $args );
while ( $the_query->have_posts() ) : $the_query->the_post();

	get_template_part('template-parts/content', 'miniature');

endwhile;
wp_reset_postdata();
?>

</div>

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php get_footer(); ?>
