<?php

add_action( 'wp_enqueue_scripts', 'enqueue_styles' );

function enqueue_styles() {

	//change version to force cache flush
	$version = '1.0';

	wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css', array(), $version );

	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/css/style.min.css', array(), $version );

	wp_enqueue_script('jquery');

	wp_enqueue_script( 'custom-scripts', get_stylesheet_directory_uri() . '/js/all.min.js', array(), $version );

}


