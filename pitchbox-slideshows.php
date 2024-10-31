<?php
/*
 * Plugin Name: Pitchbox SlideShows
 * Plugin URI: 	https://www.pitchbox.io
 * Description: Create and edit awesome presentations of your company, your products, services, or educational content, right in your Wordpress Dashboard!
 * Version: 	1.0.0
 * Author: 		Pitchbox
 * Author URI:  https://www.pitchbox.io
 * License: 	GPLv2 or later
*/
include_once dirname( __FILE__ ) . '/class.pitchbox-slideshows-admin.php';
register_activation_hook( __FILE__, 'pitchbox_slideshows_rewrite_flush' );
function pitchbox_slideshows_rewrite_flush() {
    PitchboxSlideShowsAdmin::init();
    flush_rewrite_rules();
}
?>