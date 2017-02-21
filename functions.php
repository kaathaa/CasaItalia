<?php



// Navigation
require_once('wp_bootstrap_navwalker.php');
register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'test' ),
) );
/*
add_action( 'after_setup_theme', 'wp_register_nav' );

function wp_register_nav() {
  register_nav_menu('nav_main','Navbar im Header');
  register_nav_menu('nav_footer','Navigation im Footer');
}
*/
