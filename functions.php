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





// Styles & Scripts
    add_action( 'wp_enqueue_scripts', 'casaItalia_register_styles' );

    function casaItalia_register_styles() {
        
        wp_register_style( 'style', get_stylesheet_uri());
        wp_enqueue_style( 'style' );
        
        wp_register_style( 'hover', get_template_directory_uri() . '/css/hover-min.css' );
        wp_enqueue_style( 'hover' );
    }



	
	
// Navigation
	require_once('wp_bootstrap_navwalker.php');
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'CasaItalia' ),
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
	
	
		
	
	
// Post Type Orte	
    function casaItalia_cpt_orte() {

        $labels = array(
            'menu_name'             => 'Orte',
            'name_admin_bar'        => 'Orte',
            'all_items'             => 'Alle Orte',
            'add_new'               => 'Neuen Ort hinzufügen',		
        );
        $args = array(
            'label'                 => '',
            'labels'                => $labels,
            'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields', ),
            'public'                => true,
            'show_in_admin_bar'     => true,
			'menu_icon'             => 'dashicons-location',
            'can_export'            => true,
            'has_archive'           => true,		
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
			'rewrite' => array('slug' => 'staedte')
        );
        register_post_type( 'orte', $args );
    }
    add_action( 'init', 'casaItalia_cpt_orte', 0 );




// Post Type Strände	
    function casaItalia_cpt_beach() {

        $labels = array(
            'menu_name'             => 'Strände',
            'name_admin_bar'        => 'Strände',
            'all_items'             => 'Alle Strände',
            'add_new'               => 'Neuen Strand hinzufügen',		
        );
        $args = array(
            'label'                 => '',
            'labels'                => $labels,
            'supports'              => array( 'title', 'editor', 'thumbnail'),
            'hierarchical'          => false,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
			'menu_icon'             => 'dashicons-palmtree',
            'can_export'            => true,
            'has_archive'           => true,		
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
			'rewrite' => array('slug' => 'straende')
        );
        register_post_type( 'beach', $args );
    }
    add_action( 'init', 'casaItalia_cpt_beach', 0 );






// Post Type Schlechtwetter	
    function casaItalia_cpt_rain() {

        $labels = array(
            'menu_name'             => 'Schlechtwetter',
            'name_admin_bar'        => 'Schlechtwetter',
            'all_items'             => 'Alle Schlechtwettertipps',
            'add_new'               => 'Neuen Schlechtwettertipp hinzufügen',		
        );
        $args = array(
            'label'                 => '',
            'labels'                => $labels,
            'supports'              => array( 'title', 'editor', 'thumbnail'),
            'public'                => true,
            'show_in_admin_bar'     => true,
            'can_export'            => true,
            'has_archive'           => true,		
            'exclude_from_search'   => false,
			'menu_icon'             => 'dashicons-cloud',
            'publicly_queryable'    => true,
			'rewrite' => array('slug' => 'staedte')
        );
        register_post_type( 'rain', $args );
    }
    add_action( 'init', 'casaItalia_cpt_rain', 0 );

	
	
	
// Beitragsbilder
	add_theme_support('post-thumbnails');
	add_image_size( 'card', 150, 101 );
	add_image_size( 'gallery', 300, 199 );
	//add_image_size( 'half-card', 300, 201, array( 'left', 'top' ) );
	add_image_size( 'half-card', 600, 250);

	
	
	
// Customizer
    require_once(get_template_directory() . '/customizer.php');	


	

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
	        'before_widget' => '<div id="%1$s" class="widget col-xs-6 %2$s">',
	        'after_widget'  => '</div>',
	        'before_title'  => '<h4 class="widget-title">',
	        'after_title'   => '</h4>',
	    ) );
	}
	add_action( 'widgets_init', 'casaItalia_widgets_init' );
	
	
	
	
// Last Comment Widget
	require_once(get_template_directory() . '/widget.php');	
// Weather Widget
	require_once(get_template_directory() . '/widget-weather.php');	




	
// Filter Gallery - Bootstrap	
	function my_gallery_shortcode( $output = '', $atts, $instance ) {
		$return = $output; // fallback

		// retrieve content of your own gallery function	
		$atts = array_merge(array('columns' => 3), $atts);
		$columns = $atts['columns'];
		$images = explode(',', $atts['ids']);
		$col_class = 'col-xs-12 col-sm-4 gallery-item'; // default 3 columns 
		
		$i = 0;
		foreach ($images as $key => $value) {

			if ($i%$columns == 0 && $i > 0) {
				$return .= '</div><div class="row">';
			}

			$image_attributes = wp_get_attachment_image_src($value, 'gallery');
		
			$return .= '
				<div class="'.$col_class.'">
					<a data-gallery="gallery" href="'.$image_attributes[0].'">
						<img src="'.$image_attributes[0].'" alt="" class="img-responsive aligncenter">
					</a>
				</div>';

			$i++;
		}
	
		// boolean false = empty
		if( !empty( $my_result ) ) {
			$return = $my_result;
		}

		return $return;
	}
	add_filter( 'post_gallery', 'my_gallery_shortcode', 10, 3 );
	
	
	
	
	

	
	
							
						