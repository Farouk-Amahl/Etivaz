<?php // print_r($args); 
?>

<a href="<?php echo $args['lien']; ?>" class="etivaz-wrap-etiquette">
	<div class="etivaz-produit">
		<div class="etivaz-image etivaz-transition <?php if($args['image']){ echo $args['image']; } ?>" style="background-image: url(<?php echo get_the_post_thumbnail_url(null, 'large'); ?>)" >
		</div>
	</div>	
	<header class="etivaz-etiquette-texte etivaz-transition">
		<h2 class="etivaz-titre-etiquette" ><?php the_title(); ?></h2>
		<?php the_excerpt(); ?>
	</header>
	<?php 
	if($args['fermeture']){ 
		echo '<img src="http://localhost/nouvFransyr/wp-content/uploads/2020/11/marcheferme.png" style="position: absolute; top: 0; left: 0; width: 100%"/>'; 
	} 
	?>
</a>