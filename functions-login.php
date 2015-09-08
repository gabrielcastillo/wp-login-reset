<?php
/*
 * Add custom stylesheet to login page
 */
function custom_login_style() {
	echo '<link rel="stylesheet" href="' . get_stylesheet_directory_uri() . '/css/login.css" media="all" />';
}
add_action( 'login_head', 'custom_login_style' );

/*
 * Change login logo's title and the URL it links to
 */
function custom_login_header_title( $title ) {
	return 'Go to the ENTER YOU SITENAME HERE home page';
}
add_filter( 'login_headertitle', 'custom_login_header_title' );

function custom_login_header_url( $url ) {
	return home_url();
}
add_filter( 'login_headerurl', 'custom_login_header_url' );
