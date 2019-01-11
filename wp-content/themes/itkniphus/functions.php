<?php
function theme_styles() {

	wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri() . '/css/bootstrap.min.css' );
}

add_action( 'wp_enqueue_scripts', 'theme_styles');

function wpbootstrap_scripts_with_jquery()
{
	// Register the script like this for a theme:
	wp_register_script( 'custom-script', get_stylesheet_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ) );
	// For either a plugin or a theme, you can then enqueue the script:
	wp_enqueue_script( 'custom-script' );
}
add_action( 'wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery' );


add_theme_support( 'post-thumbnails' );

// Register custom navigation walker

//menu's

function register_my_menus() {
  register_nav_menus(
    array(
      'new-menu' => __( 'New Menu' ),
      'another-menu' => __( 'Another Menu' ),
      'an-extra-menu' => __( 'Media' )
    )
  );
}
add_action( 'init', 'register_my_menus' );


?>
