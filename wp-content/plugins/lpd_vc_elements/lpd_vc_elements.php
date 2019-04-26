<?php
/**
* Plugin Name: LPD Visual Composer Elements
* Plugin URI: http://themeforest.net/user/lidplussdesign/?ref=lidplussdesign
* Description: Visual Composer Elements.
* Version: 1.1
* Author: lidplussdesign
* Author http://themeforest.net/user/lidplussdesign/?ref=lidplussdesign
* License: GPL (General Public License)
*/


if(!defined('VC_LPD_ELEMNTS')){
	define('VC_LPD_ELEMNTS', '1.1');
}

if(!class_exists('LPD_VC_Elements'))
{
	class LPD_VC_Elements
	{
	
		function __construct() {
			add_action('after_setup_theme',array($this,'lpd_vc_ele_init'));
			add_action('init', array($this, 'lpd_vc_ele_essential'));
			add_action('wp_enqueue_scripts', array( $this, 'lpd_vc_styles' ) );
			add_action( 'plugins_loaded', array( $this, 'lpd_vc_plugins_loaded' ) );
		}
		
		function lpd_vc_ele_init() {
		
			
			if( LPD_VC_Elements::lpd_vc_elements_vc_check() ) {
			
			
			require_once (plugin_dir_path( __FILE__ ). '/elements/bulleted_list.php');
			new lpd_vc_bulleted_list();

			require_once (plugin_dir_path( __FILE__ ). '/elements/info_box.php');
			new lpd_vc_info_box();
			
			}
			
		
		}
		function lpd_vc_ele_essential()
		{
			load_plugin_textdomain('lpd_vc_elements', FALSE, dirname(plugin_basename(__FILE__)).'/languages/');
			
		}
		
		function lpd_vc_styles(){
		
			wp_enqueue_style( 'vc_lpd_elements', plugin_dir_url(__FILE__).'assets/css/application.css', array(), VC_LPD_ELEMNTS );
			
		}
		
		public static function lpd_vc_elements_vc_check() {
			return in_array( 'js_composer/js_composer.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) );
		}
		
		public static function lpd_vc_elements_unyson_check() {
			return in_array( 'unyson/unyson.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) );
		}

		public function lpd_vc_plugins_loaded() {
			load_plugin_textdomain( 'lpd_vc_elements', false, plugin_basename( dirname( __FILE__ ) ) . '/languages' ); 
		}
		
	}
	new LPD_VC_Elements;
	
}
