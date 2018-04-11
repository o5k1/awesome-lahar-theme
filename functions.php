<?php
/**
 * The functions file behaves like a WordPress Plugin, adding features and functionality to a WordPress
 * site through PHP code. You can use it to call native PHP functions, WordPress functions,
 * or to define your own functions.
 */

/**
 * Add scripts to index's head/footer.
 */
function lahar_enqueue_scripts() {
	wp_enqueue_style( 'custom-style', get_template_directory_uri() . '/css/awesome-lahar.css' );
	wp_enqueue_script('masonry', 'https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js', [], null, true);
	wp_enqueue_script( 'custom-scripts', get_template_directory_uri() . '/js/awesome-lahar.js', array( 'jquery' ), null, true );
}

add_action( 'wp_enqueue_scripts', 'lahar_enqueue_scripts' );

function lahar_theme_setup() {
	/**
	 * Permette di gestire i menu da wp-admin
	 */
	add_theme_support( 'menus' );

	add_theme_support( 'custom-logo' );

	add_theme_support( 'post-thumbnails' );

	register_nav_menus( array(
		'primary-nav' => __( 'Primary navigation' ),
		'social-menu'  => __( 'Social links menu' )
	) );
}

add_action( 'init', 'lahar_theme_setup' );


