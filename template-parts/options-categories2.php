<?php
	define('WP_USE_THEMES', false);
	// ici trouver une façon plus gracieuse d'écrire ça
	require ('./../../../../wp-blog-header.php');

	$type = $_GET['type'];
	// echo $types;

	$catNum = get_category_by_slug($type);
	$catNum = $catNum->term_id;

	$args = array('cat' => $catNum, 'orderby' => 'title', 'order' => 'ASC','posts_per_page' => 10 );
	$the_query = new WP_Query( $args );
	echo "<!--";
	while ( $the_query->have_posts() ) : $the_query->the_post();

		get_template_part('template-parts/content', 'etiquette2');

	endwhile;
	wp_reset_postdata();

?>
