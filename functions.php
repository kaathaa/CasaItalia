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


	
	
// Custom Header
	$defaults = array(
		'width'                  => 1140,
		'height'                 => 370,
		'flex-height'            => true,
		'flex-width'             => true,
		'uploads'                => true,
		'header-text'            => true,
	);
	add_theme_support( 'custom-header', $defaults );
	
	
	
	
	
	

	
	
// Customizer	
	function casaItalia_customize_register($wp_customize) {             
		
		// Section
		$wp_customize->add_section('casaItalia_section', array(
			'title'       => 'Headeranpassungen Casa Italia',
			'priority'    => 2,
			'description' => 'Weitere Anpassungen für Header und Navigation',
		));
		
		
		// Settings Schriftfarbe
		$wp_customize->add_setting('casaItalia_color', array(
			'default'           => 'white',
			'sanitize_callback' => 'sanitize_text_field', 
			'type'              => 'option',
		));		
		
		// Settings Opacity
		$wp_customize->add_setting('casaItalia_opacity', array(
			'default'        => '0.5',
			'sanitize_callback' => 'sanitize_text_field', 
			'type'           => 'option',
		));
		
		
		// Control Opacity
		$wp_customize->add_control('casaItalia_color_scheme', array(
			'label'      => __('Transparenz', 'themename'),
			'default'    => '0.5',
			'section'    => 'casaItalia_section',
			'settings'   => 'casaItalia_opacity',
			'type'       => 'radio',
			'choices'    => array(
				'0.3' => 'leicht',
				'0.5' => 'mittel',
				'0.7' => 'stark',
			),
		));
						
		// Control Schriftfarbe
		$wp_customize->add_control( 
			new WP_Customize_Color_Control( 
				$wp_customize, 
				'casaItalia_color_control', 
				array(
					'label'    => 'Schriftfarbe wählen',
					'section'  => 'casaItalia_section',
					'settings' => 'casaItalia_color',
				)
			) 
		);
		
	}  

	add_action('customize_register', 'casaItalia_customize_register');  






// Widgets
	function casaItalia_widgets_init() {
	    register_sidebar( array(
	        'name'          => __( 'Frontpage Widget', 'casaItalia' ),
	        'id'            => 'sidebar-1',
	        'description'   => __( 'Appears on the Frontpage.', 'casaItalia' ),
	        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	        'after_widget'  => '</aside>',
	        'before_title'  => '<h3 class="widget-title">',
	        'after_title'   => '</h3>',
	    ) );
	 
	    register_sidebar( array(
	        'name'          => __( 'Footer Widget Area', 'casaItalia' ),
	        'id'            => 'sidebar-2',
	        'description'   => __( 'Appears in the footer section of the site.', 'casaItalia' ),
	        'before_widget' => '<div id="%1$s" class="widget %2$s">',
	        'after_widget'  => '</div>',
	        'before_title'  => '<h4 class="widget-title">',
	        'after_title'   => '</h4>',
	    ) );
	}
	add_action( 'widgets_init', 'casaItalia_widgets_init' );
							
						