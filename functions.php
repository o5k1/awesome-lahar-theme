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
	wp_enqueue_style( 'garamond-font', 'https://fonts.googleapis.com/css?family=EB+Garamond' );
	wp_enqueue_style( 'lato-font', 'https://fonts.googleapis.com/css?family=Lato:300,400' );
	wp_enqueue_style( 'dosis-font', 'https://fonts.googleapis.com/css?family=Dosis' );
	wp_enqueue_style( 'reset-style', get_template_directory_uri() . '/css/reset.css' );
	wp_enqueue_style( 'font-awesome', 'https://use.fontawesome.com/releases/v5.0.10/css/all.css' );
	wp_enqueue_style( 'custom-style', get_template_directory_uri() . '/css/awesome-lahar.css' );
	wp_enqueue_script( 'masonry', 'https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js', [ 'jquery' ], null, true );
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

	add_theme_support( 'html5', array( 'search-form' ) );

	register_nav_menus( array(
		'primary-nav' => __( 'Primary navigation' ),
		'social-menu' => __( 'Social links menu' )
	) );

	/**
	 * Permette di associare un tag ai post di tipo "attachment".
	 */
	register_taxonomy_for_object_type( 'post_tag', 'attachment' );
}

add_action( 'init', 'lahar_theme_setup' );

function lahar_get_tag_slug( $title ) {
	return str_replace( ' ', '-', strtolower( $title ) );
}

function lahar_get_posts_by_tag( $slug ) {
	return get_posts( array(
			'posts_per_page' => - 1,
			'tax_query'      => array(
				array(
					'taxonomy' => 'post_tag',
					'field'    => 'slug',
					'terms'    => $slug
				)
			)
		)
	);
}

function lahar_get_attachments_by_tag( $slug ) {
	return get_posts( array(
			'post_type'      => 'attachment',
			'posts_per_page' => - 1,
			'tax_query'      => array(
				array(
					'taxonomy' => 'post_tag',
					'field'    => 'slug',
					'terms'    => $slug
				)
			)
		)
	);
}

function lahar_has_parent_category( $parentName, $catId ) {
	$regex   = '/' . $parentName . '/i';
	$parents = get_category_parents( $catId );

	return preg_match( $regex, $parents ) === 1;
}

function lahar_get_site_title() {
	return wp_title( '|', false, 'right' ) . get_bloginfo( 'name' );
}

/**
 * Filter search query only for post and attachments.
 *
 * @param $query
 *
 * @return mixed
 */
function search_filter( $query ) {

	if ( $query->is_search && ! is_admin() ) {
		$query->set( 'post_type', array( 'post', 'attachment' ) );
		$query->set( 'post_status', 'any' );
	}

	return $query;
}

add_filter( 'pre_get_posts', 'search_filter' );



