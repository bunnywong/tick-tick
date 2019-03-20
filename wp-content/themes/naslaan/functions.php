<?php

define( 'NASLAAN_THEME_VERSION', '1.0');

if ( ! isset( $content_width ) ) $content_width = 960;

add_action( 'vc_before_init', 'naslaan_vcSetAsTheme' );
function naslaan_vcSetAsTheme() {
    vc_set_as_theme();
}

if ( ! function_exists( 'naslaan_setup' ) ) :

function naslaan_setup() {

	load_theme_textdomain( 'naslaan', get_template_directory() . '/languages' );
	
	require_once get_template_directory() . '/functions/class-tgm-plugin-activation.php';
	require_once get_template_directory() . '/functions/fonts.php';
	
	require(get_template_directory() . '/includes/widgets/naslaan-latest-posts.php');
	require(get_template_directory() . '/includes/widgets/naslaan-about-widget.php');
	require(get_template_directory() . '/includes/widgets/naslaan-instagram-widget.php');
	require(get_template_directory() . '/includes/widgets/naslaan-social-widget.php');
	
	naslaan_init();
	naslaan_helpers();
	naslaan_front_functions();
	naslaan_widgets();
	
	naslaan_nav_menu_walker();
	
	if( naslaan_helpers::naslaan_woocommerce_check() ) {
		naslaan_woocommerce_functions();
		add_theme_support('woocommerce');
	}
	
	if( naslaan_helpers::naslaan_revslider_check() ) {
		if(is_admin()){set_revslider_as_theme();}
	}
	
	if( naslaan_helpers::naslaan_essential_grid_check() ) {
		if(is_admin()){set_ess_grid_as_theme();}
	}
	
	if( naslaan_helpers::naslaan_unyson_check() ) {
		naslaan_theme_option_functions();
		naslaan_front_css();
	}else{
		naslaan_default_css();
	}
	
	add_editor_style('assets/css/admin.css');
}

endif;

add_action( 'after_setup_theme', 'naslaan_setup' );


function naslaan_widgets() {}

function naslaan_init() {
	
		require_once get_template_directory() . '/functions/init.php';
		new naslaan_init();
	
}

function naslaan_front_enqueue() {
	
		require_once get_template_directory() . '/functions/front_enqueue.php';
		new naslaan_front_enqueue();
	
}

function naslaan_backend_enqueue() {
	
		require_once get_template_directory() . '/functions/backend_enqueue.php';
		new naslaan_backend_enqueue();
	
}

if( is_admin() ) {

	if ( function_exists( 'naslaan_backend_enqueue' ) ) :

		naslaan_backend_enqueue();
	
	endif;


}else{

	if ( function_exists( 'naslaan_front_enqueue' ) ) :
	
		naslaan_front_enqueue();
		
	endif;
	
}

function naslaan_helpers() {
	
		require_once get_template_directory() . '/functions/helpers.php';
		new naslaan_helpers();
	
}

function naslaan_front_functions() {
	
		require_once get_template_directory() . '/functions/front_functions.php';
		new naslaan_front_functions();
	
}

function naslaan_theme_option_functions() {
	
		require_once get_template_directory() . '/functions/theme_option_functions.php';
		new naslaan_theme_option_functions();
	
}

function naslaan_woocommerce_functions() {
	
		require_once get_template_directory() . '/functions/woocommerce_functions.php';
		new naslaan_woocommerce_functions();
	
}

function naslaan_front_css() {
	
		require_once get_template_directory() . '/functions/front_css.php';
		new naslaan_front_css();
	
}

function naslaan_default_css() {
	
		require_once get_template_directory() . '/functions/default_css.php';
		new naslaan_default_css();
	
}

function naslaan_nav_menu_walker() {
	
		require_once get_template_directory() . '/functions/front_mobmenu_walker.php';
		require_once get_template_directory() . '/functions/front_menu_walker.php';
		new naslaan_nav_menu_walker();
		new naslaan_nav_mobmenu_walker();
	
}