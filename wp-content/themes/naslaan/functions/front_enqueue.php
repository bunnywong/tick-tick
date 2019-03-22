<?php class naslaan_front_enqueue {


	function __construct() {
		
		add_action( 'wp_enqueue_scripts', array( $this, 'js_scripts' ) );
		add_action( 'wp_enqueue_scripts', array( $this, 'css_styles' ) );	
		add_action( 'wp_enqueue_scripts', array( $this, 'naslaan_woocommerce_styles' ) );
		
	}
	
	function js_scripts() {
		
		wp_enqueue_script( 'prefixfree', get_template_directory_uri() . '/assets/js/prefixfree.js', array( 'jquery' ), NASLAAN_THEME_VERSION );
		wp_enqueue_script( 'lpd_prettyphoto', get_template_directory_uri() . '/assets/js/prettyPhoto.js', array( 'jquery' ), NASLAAN_THEME_VERSION );
		wp_enqueue_script( 'lpd_waypoints', get_template_directory_uri() . '/assets/js/waypoints.js', array( 'jquery' ), NASLAAN_THEME_VERSION );
		wp_enqueue_script( 'skrollr', get_template_directory_uri() . '/assets/js/skrollr.js', array( 'jquery' ), NASLAAN_THEME_VERSION );
		wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/assets/js/bootstrap.js', array( 'jquery' ), NASLAAN_THEME_VERSION );
		wp_enqueue_script( 'naslaan_functions', get_template_directory_uri() . '/assets/js/functions.js', array( 'jquery' ), NASLAAN_THEME_VERSION );
		
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
		
		if( naslaan_helpers::naslaan_unyson_check() ) {
		
			$custom_js = fw_get_db_settings_option('custom_js');
			
			if( $custom_js != '' ) {
			
				wp_add_inline_script( 'naslaan_functions', $custom_js, array( 'jquery' ), NASLAAN_THEME_VERSION );
			
			}
		
		}
		
	}
	
	function css_styles() {
	
		wp_enqueue_style( 'naslaan_application', get_template_directory_uri() . '/assets/css/application.css', array(), NASLAAN_THEME_VERSION );
		wp_enqueue_style( 'lpd_mdi', 'https://fonts.googleapis.com/icon?family=Material+Icons', array(), NASLAAN_THEME_VERSION );
		if(is_singular('fw-portfolio')) {
			wp_enqueue_style( 'naslaan_prettyphoto', get_template_directory_uri() . '/assets/css/prettyPhoto.css', array(), NASLAAN_THEME_VERSION );
		}
		
	}
	
	function naslaan_woocommerce_styles() {
		if( naslaan_helpers::naslaan_woocommerce_check() ) {
			wp_enqueue_style( 'naslaan_woocommerce-general', get_template_directory_uri() . '/assets/css/woocommerce.css', array(), NASLAAN_THEME_VERSION );
		}
		
	}
	
}
?>
