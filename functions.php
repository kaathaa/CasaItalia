<?php

// HTML5
	$args = array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption'
	);
	add_theme_support( 'html5', $args );	
	
	
	
// Navigation
	require_once('wp_bootstrap_navwalker.php');
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'test' ),
		) 
	);


	
// Custom Background
	$defaults = array(
		'wp-head-callback'       => '_custom_background_cb',
	);	
	add_theme_support( 'custom-background', $defaults );




