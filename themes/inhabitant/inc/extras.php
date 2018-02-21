<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'red_starter_body_classes' );

//Changes logo on login page

function inhabitent_login_logo() {
	echo '<style type="text/css">                                                                   
			.login h1 a { 
				background-image:url('.get_stylesheet_directory_uri().'/images/inhabitent-logo-text-dark.svg) !important;
				background-size:contain; 
				height: 50px; 
				width: 330px; 
				margin-left: -10px;}                            
	</style>';
}
add_action('login_head', 'inhabitent_login_logo');

//Changes path of logo on login page to be the site home page
function the_url( $url ) {
	return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'the_url' );

//customize the title attribute for the login logo link
function inhabitent_login_title() {
	return 'Inhabitent Camping Supply Co.';
}

add_filter('login_headertitle', 'inhabitent_login_title');

//customize the header image on the about page 

function change_header_image() {
	if ( !is_page_template('about.php') ) {
		return;
	}

	$image_url = CFS()->get( 'header_image' );

	if (!$image_url) {
		return;
	}

	$custom_css = "
                .page-template-about .entry-header{
												background-image: linear-gradient(rgba(0,0,0, 0.3),rgba(0,0,0,0.3)), url('{$image_url}');
												background-size: cover;
												width: 100vw;
												height: 100vh;
												display: flex;
												justify-content: center;
												align-items: center;
                }";
	wp_add_inline_style('inhabitant-style', $custom_css);
}

add_action('wp_enqueue_scripts', 'change_header_image');

