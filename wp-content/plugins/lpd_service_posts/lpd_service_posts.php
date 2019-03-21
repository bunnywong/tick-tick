<?php
/**
* Plugin Name: LPD Service Posts
* Plugin URI: http://themeforest.net/user/lidplussdesign/?ref=lidplussdesign
* Description: Service Post Type.
* Version: 1.0.0
* Author: lidplussdesign
* Author http://themeforest.net/user/lidplussdesign/?ref=lidplussdesign
* License: GPL (General Public License)
*/

if(!defined('VC_LPD_SERVICE_POSTS')){
	define('VC_LPD_SERVICE_POSTS', '1.0.0');
}

$dir = dirname(__FILE__);

include_once ($dir. '/post-type/service.php');

function lpd_vc_plugins_loaded() {
	load_plugin_textdomain( 'lpd_service_posts', false, plugin_basename( dirname( __FILE__ ) ) . '/languages' ); 
}

add_action( 'plugins_loaded', 'lpd_vc_plugins_loaded' );

function register_service_sidebar() {
	
	register_sidebar( array(
		'name'          => esc_html__( 'Service Sidebar', 'lpd_service_posts' ),
		'id'            => 'service-sidebar',
		'description'   => esc_html__( 'Appears in the sidebar section.', 'lpd_service_posts' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '<div class="clearfix"></div></div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>'
	));
	
}

add_action( 'widgets_init', 'register_service_sidebar');