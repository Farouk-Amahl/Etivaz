<?php
get_header();
?>

<div class="">
	<header class="">
		<h1 class=""><?php the_title(); ?></h1>
	</header>
	<article class="">
		
	<?php
		if(have_posts()){
			while(have_posts()){
				the_post();
				// the_content();
				
				get_template_part('template-parts/content', 'archive');
			}
		}
	?>
		
	</article>
	<footer class="">
	</footer>
</div>

<?php
get_footer();
?>
	