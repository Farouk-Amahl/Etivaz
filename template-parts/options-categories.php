<?php
	define('WP_USE_THEMES', false);
	// ici trouver une façon plus gracieuse d'écrire ça
	require ('../../../../wp-blog-header.php');
	
	$type = $_GET['type'];
	
	$catNum = get_category_by_slug($type);
	$catNum = $catNum->term_id;

	$args = array(
		'parent'         => $catNum,
		// 'child_of'      => $type, 
	); 

	$terms = get_categories( $args );
	
	echo "<option>catégories de $type</option>";
	foreach($terms as $term){
		echo "<option value='".$term->slug."'>".$term->cat_name."</option>";
	}

?>