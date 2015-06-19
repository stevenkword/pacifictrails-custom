<?php
/*
Plugin Name: Pacific Trails Custom Functions
Version: 0.1-alpha
Description: PLUGIN DESCRIPTION HERE
Author: YOUR NAME HERE
Author URI: YOUR SITE HERE
Plugin URI: PLUGIN SITE HERE
Text Domain: pacifictrails-custom
Domain Path: /languages
*/

/*
array(2) {
  ["page-templates/contributors.php"]=>
  string(16) "Contributor Page"
  ["page-templates/full-width.php"]=>
  &string(15) "Full Width Page"
}
array(3) {
  ["page-templates/contributors.php"]=>
  string(16) "Contributor Page"
  ["page-templates/full-width.php"]=>
  &string(15) "Full Width Page"
  ["page-magic-widgets.php"]=>
  string(13) "Magic Widgets"
}
*/

/**
 * Replace all site titles to include "Hiking" for SEO
 * @param  [type] $title [description]
 * @return [type]        [description]
 */
function pacific_filter_wp_title( $title, $sep ) {
	//Except on the homepage
	if( is_home() || is_front_page() ) {
		return $title;
	}
	return 'Hiking ' . $title;
}
add_filter( 'wp_title', 'pacific_filter_wp_title', 10, 2 );