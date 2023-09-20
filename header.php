<!doctype html>
<html lang="en">
<head>

	<!--Metha-->
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link href="https://fonts.googleapis.com/css2?family=Hammersmith+One&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Sorts+Mill+Goudy:ital@0;1&display=swap" rel="stylesheet">
	<?php // ici trouver pourquoi ça merde avec jquery ?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<?php
	wp_head();
	?>
</head>
<body>
	<header id='etivaz-header' class='etivaz-header'>
		<div class="etivaz_logo">
		<?php
		// echo do_shortcode('[open day_format="short" consolidation="separate" time_format="24_h_trim"]');
		if(function_exists('the_custom_logo')){
			
			$custom_logo_id = get_theme_mod('custom_logo');
			$logo = wp_get_attachment_image_src($custom_logo_id);
			// print_r($logo);
		}
		?>
			<a href="<?php echo get_option('siteurl'); ?>" class="logo-etivaz" ><img class="" src="<?php echo $logo[0]; ?>" alt="logo"/></a>
			<nav id="menu-autres">
			<?php
			wp_nav_menu(
				array(
					'menu' => 'langues',
					'container' => '',
					'theme_location' => 'langues',
					'items_wrap' => '<ul id="" class="menu-langues">%3$s</ul>'
				)		
			);
			wp_nav_menu(
				array(
					'menu' => 'utils',
					'container' => '',
					'theme_location' => 'utils',
					'items_wrap' => '<ul id="" class="menu-utils">%3$s</ul>'
				)		
			);
			// wp_nav_menu(
				// array(
					// 'menu' => 'connex',
					// 'container' => '',
					// 'theme_location' => 'connex',
					// 'items_wrap' => '<ul id="" class="menu-connex">%3$s</ul>'
				// )		
			// );
			?>
			</nav>
		</div>
		<nav id="menu-premier">
		<?php
		wp_nav_menu(
			array(
				'menu' => 'premier',
				'container' => '',
				'theme_location' => 'premier',
				'items_wrap' => '<ul id="" class="menu-premier">%3$s</ul>'
			)
		); 
		?>
		</nav>
		<nav id="menu-mobil">
				<div id="hamburger"><i class="fa fa-bars"></i></div>
			<?php
				wp_nav_menu(
					array(
						'menu' => 'menu_mobils',
						'container' => '',
						'theme_location' => 'menu_mobils',
						'items_wrap' => '<ul id="" class="menu-mobil">%3$s</ul>'
					)		
				);
			?>
		</nav>
	</header>
	<div class="etivaz-space-menu"></div>