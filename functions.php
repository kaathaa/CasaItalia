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
		'widget' => 'Widget Menu',
		) 
	);


	
// Custom Background
	$defaults = array(
		'wp-head-callback' => '_custom_background_cb',
	);	
	add_theme_support( 'custom-background', $defaults );



// Widgets
	register_sidebars(2, array('name'=>'Widget %d'));	 
	$args = array(
				'name'          => __('Sidebar %d'),
				'id'            => 'Sidebar-%d',          
				'description'   => '',
				'class'         => '',
				'before_widget' => '<li id="%1$s" class="widget %2$s">',
				'after_widget'  => '</li>',
				'before_title'  => '<h4 class="widgettitle">',
				'after_title'   => '</h4>' 
				); 

							
						















	