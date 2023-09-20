<?php

function etivaz_theme_support(){
	// gestion du titre du site
	add_theme_support('title-tag');
	add_theme_support('custom-logo');
	add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'etivaz_theme_support');

function etivaz_menus(){
	
	$locations = array(
		'premier' => 'menu principal',
		'utils' => 'menu autres',
		'connex' => 'menu connexion',
		'langues' => 'menu langues',
		'menu_mobils' => 'menu mobils',
	);
	
	register_nav_menus($locations);
	
}

add_action('init', 'etivaz_menus');

function etivaz_register_styles(){
	
	$version = wp_get_theme()->get('Version');
	wp_enqueue_style('etivaz', get_template_directory_uri() . "/style.css", array('reset'), $version, 'all');
	wp_enqueue_style('reset', get_template_directory_uri() . "/assets/css/reset.css", array(), '2.0', 'all');
	wp_enqueue_style('header', get_template_directory_uri() . "/assets/css/header.css", array('reset'), '1.0', 'all');
	wp_enqueue_style('slider', get_template_directory_uri() . "/assets/css/slider.css", array(), '1.0', 'all');
	wp_enqueue_style('blocs', get_template_directory_uri() . "/assets/css/etivaz-blocs.css", array(), '1.0', 'all');
	wp_enqueue_style('open', get_template_directory_uri() . "/assets/css/opening-hours.css", array(), '1.0', 'all');
	wp_enqueue_style('tri', get_template_directory_uri() . "/assets/css/tri.css", array(), '1.0', 'all');
	wp_enqueue_style('menu', get_template_directory_uri() . "/assets/css/menu.css", array(), '1.0', 'all');
	wp_enqueue_style('formulaires', get_template_directory_uri() . "/assets/css/formulaires.css", array(), '1.0', 'all');
	wp_enqueue_style('tableaux', get_template_directory_uri() . "/assets/css/tableaux.css", array(), '1.0', 'all');
	wp_enqueue_style('annonce', get_template_directory_uri() . "/assets/css/annonce.css", array(), '1.0', 'all');
	/*mobils*/
	wp_enqueue_style('etivaz-mini', get_template_directory_uri() . "/assets/css/etivaz-mini.css", array('etivaz', 'header'), $version, 'all');
	/*
	bootstrap ? ou autre
	wp_enqueue_style('etivaz', "lien vers le distant", array("nom de la dépendance", '1.0', 'all');
	*/
	
}

add_action('wp_enqueue_scripts', 'etivaz_register_styles');

function etivaz_register_scripts(){
	
	// wp_enqueue_script('etivaz-jquery', "https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js", array(), '3.5.1', true);
	wp_enqueue_script('etivaz-scripts', get_template_directory_uri() . "/assets/js/etivaz.js", array(), '1.0', true);
	wp_enqueue_script('etivaz-menmob', get_template_directory_uri() . "/assets/js/menmob.js", array(), '1.0', true);
	
}

add_action('wp_enqueue_scripts', 'etivaz_register_scripts');

function etivaz_widget_areas(){
	
	register_sidebar(
		array(
			'before_title' => '',
			'after_title' => '',
			'before_widget' => '--><div class="etivaz-article etivaz-un etivaz-bloc ">',
			'after_widget' => '</div><!--',
			'name' => 'Next Event Area',
			'id' => 'next-event-area',
			'description' => 'Next Event Area'
		)
	);
	
}

add_action('widgets_init', 'etivaz_widget_areas');

function get_category_id($cat_name){
	$term = get_term_by('name', $cat_name, 'category');
	return $term->term_id;
}

// polylang

function register_strings() { 
    pll_register_string('piece', 'pièce');
	pll_register_string('nosFromages', 'Nos Fromages'); 
    pll_register_string('lundi', 'lundi'); 
    pll_register_string('mardi', 'mardi'); 
    pll_register_string('mercredi', 'mercredi'); 
    pll_register_string('jeudi', 'jeudi'); 
    pll_register_string('vendredi', 'vendredi'); 
    pll_register_string('samedi', 'samedi'); 
    pll_register_string('dimanche', 'dimanche'); 
    pll_register_string('lienFromage', 'nos-fromages'); 
    pll_register_string('nos', 'Nos'); 
    pll_register_string('fromages', 'fromages'); 
    pll_register_string('produits', 'produits'); 
    pll_register_string('categories', 'catégories'); 
    pll_register_string('fromageDuMoment', 'Fromage du moment');
    pll_register_string('prochainEvenement', 'Prochain évènement');
    pll_register_string('texteEven', 'Vous trouverez ici toutes les informations sur nos prochaines manifestations.');
    pll_register_string('recheche', 'Recherche');
    pll_register_string('autresProduits', 'Autres produits de la même catégorie : ');
    pll_register_string('adresse', 'Adresse');
    pll_register_string('horaires', 'Horaires');
    pll_register_string('region', 'région');
    pll_register_string('pate', 'pâte');
    pll_register_string('lait', 'lait');
    pll_register_string('affinage', 'affinage');
    pll_register_string('croute', 'croûte');
    pll_register_string('matiereGrasse', 'matière grasse');
	pll_register_string('fermeture', 'fermé');
	pll_register_string('magasin', 'magasin');
	pll_register_string('bistrot', 'bistrot');
} 
add_action('init','register_strings'); 
?>