<?php class naslaan_backend_enqueue {


	function __construct() {
	
		add_action( 'admin_enqueue_scripts', array( $this, 'naslaan_admin_css_styles' ) );
		add_action( 'admin_enqueue_scripts', array( $this, 'naslaan_admin_add_scripts' ) );
	
	}
	
	function naslaan_admin_css_styles() {
	
		wp_enqueue_style( 'naslaan_admin', get_template_directory_uri() . '/assets/css/admin.css', array(), NASLAAN_THEME_VERSION );
		
	}
	function naslaan_admin_add_scripts() {
	
		wp_enqueue_script( 'naslaan_admin', get_template_directory_uri() . '/assets/js/admin.js', array(), NASLAAN_THEME_VERSION );
		
	}
	
}
?>