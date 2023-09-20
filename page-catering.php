<?php
get_header();
?>
<div class="etivaz-corps">
	<section class="etivaz-section">
		<div class="etivaz-separateur"></div>
		<div class="etivaz-wrap-bloc"><!--
		<?php
		if(have_posts()){
			while(have_posts()){ the_post();
				get_template_part('template-parts/content', 'article');
			}
		}
		// Plateau Cadeaux
		$args = array('posts_per_page' => 1, 'tax_query' => array(
				array(
					'taxonomy' => 'category',
					'field'    => 'name',
					'terms'    => 'plateaux',
				),
			), 
		);
		$the_query = new WP_Query( $args );
		while ( $the_query->have_posts() ) : $the_query->the_post();

			get_template_part('template-parts/content', 'untiers', array( 'lien' => ''));

		endwhile;
		wp_reset_postdata();
		?>
		--></div><!--etivaz-wrap-bloc-->
		</section>
	<div class="etivaz-separateur"></div>
	<section class="etivaz-section">
		<?php
		$args = array('p' => 858, 'orderby' => 'rand', 'posts_per_page' => 1 );
		$the_query = new WP_Query( $args );
		while ( $the_query->have_posts() ) : $the_query->the_post();

			get_template_part('template-parts/content', 'titre');
			the_content();

		endwhile;
		wp_reset_postdata();
		?>
	</section>
</div><!--etivaz-corps-->
<?php
get_footer();
?>
	