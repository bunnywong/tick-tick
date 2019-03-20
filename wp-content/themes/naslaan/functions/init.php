<?php class naslaan_init {


	function __construct() {
		
		add_action( 'init', array( $this, 'add_theme_support'));
		add_action( 'init', array( $this, 'register_menus'));
		add_action( 'widgets_init', array( $this, 'register_sidebars'));
		add_action( 'tgmpa_register', array( $this, 'my_theme_register_required_plugins'));
		add_filter( 'fw:ext:backups-demo:demos', array( $this, '_filter_theme_fw_ext_backups_demos'));
		
	}
	
	function _filter_theme_fw_ext_backups_demos($demos) {
	    $demos_array = array(
	        'main-demo' => array(
	            'title' => esc_html__('Main Version', 'naslaan' ),
	            'screenshot' => get_template_directory_uri().'/assets/demo_main_01.jpg',
	            'preview_link' => 'http://themes.lpd-themes.com/naslaan-01/',
	        ),
	        'demo-02' => array(
	            'title' => esc_html__('Demo Version 2', 'naslaan' ),
	            'screenshot' => get_template_directory_uri().'/assets/demo_02.jpg',
	            'preview_link' => 'http://themes.lpd-themes.com/naslaan-02/',
	        ),
	        'demo-03' => array(
	            'title' => esc_html__('Demo Version 3', 'naslaan' ),
	            'screenshot' => get_template_directory_uri().'/assets/demo_03.jpg',
	            'preview_link' => 'http://themes.lpd-themes.com/naslaan-03/',
	        ),
	        'demo-04' => array(
	            'title' => esc_html__('Demo Version 4', 'naslaan' ),
	            'screenshot' => get_template_directory_uri().'/assets/demo_04.jpg',
	            'preview_link' => 'http://themes.lpd-themes.com/naslaan-04/',
	        ),
	        'demo-05' => array(
	            'title' => esc_html__('Demo Version 5', 'naslaan' ),
	            'screenshot' => get_template_directory_uri().'/assets/demo_05.jpg',
	            'preview_link' => 'http://themes.lpd-themes.com/naslaan-05/',
	        ),
	        'demo-06' => array(
	            'title' => esc_html__('Demo Version 6', 'naslaan' ),
	            'screenshot' => get_template_directory_uri().'/assets/demo_06.jpg',
	            'preview_link' => 'http://themes.lpd-themes.com/naslaan-06/',
	        ),
	    );
	
	    $download_url = 'http://demo.lpd-themes.com/restore_naslaan/';
	
	    foreach ($demos_array as $id => $data) {
	        $demo = new FW_Ext_Backups_Demo($id, 'piecemeal', array(
	            'url' => $download_url,
	            'file_id' => $id,
	        ));
	        $demo->set_title($data['title']);
	        $demo->set_screenshot($data['screenshot']);
	        $demo->set_preview_link($data['preview_link']);
	
	        $demos[ $demo->get_id() ] = $demo;
	
	        unset($demo);
	    }
	
	    return $demos;
	}
	
	function add_theme_support() {
		add_theme_support( 'title-tag' );	
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'woocommerce' );
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );
		add_theme_support( 'post-formats', array(
			'image',
			'video',
			'link',
		) );

		set_post_thumbnail_size( 100, 100, true ); // Normal post thumbnails
		add_image_size( 'naslaan-theme-size-4x3', 600, 450, true ); // 4x3
		add_image_size( 'naslaan-theme-size-3x2', 600, 400, true ); // 2x3
		add_image_size( 'naslaan-theme-size-16x9', 860, 338, true ); // 16x9
		add_image_size( 'naslaan-theme-size-1x1', 600, 600, true ); // 1x1
		add_image_size( 'naslaan-theme-size-3x4', 400, 600, true ); // 3x4
		add_image_size( 'naslaan-theme-size-2x3', 450, 600, true ); // 3x2
	}
	
	function register_menus() {
		register_nav_menus( array(
			'primary-menu' => esc_html__( 'Primary Menu', 'naslaan' ),
			'top-meta-menu-1' => esc_html__( 'Top Meta Menu 1', 'naslaan' ),
			'top-meta-menu-2' => esc_html__( 'Top Meta Menu 2', 'naslaan' ),
		) );
	}
	
	function register_sidebars() {
		
		register_sidebar( array(
			'name'          => esc_html__( 'Main Sidebar', 'naslaan' ),
			'id'            => 'main-sidebar',
			'description'   => esc_html__( 'Appears in the sidebar section.', 'naslaan' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '<div class="clearfix"></div></div>',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>'
		));
		
		register_sidebar( array(
			'name'          => esc_html__( 'Extra Sidebar', 'naslaan' ),
			'id'            => 'extra-sidebar',
			'description'   => esc_html__( 'Appears in the sidebar section.', 'naslaan' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '<div class="clearfix"></div></div>',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>'
		));
		
		register_sidebar( array(
			'name'          => esc_html__( 'Footer Column 1', 'naslaan' ),
			'id'            => 'sidebar-footer-col-1',
			'description'   => esc_html__( 'Appears in the footer section, use "Theme Settings" for column width.', 'naslaan' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '<div class="clearfix"></div></div>',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>'
		));
		
		register_sidebar( array(
			'name'          => esc_html__( 'Footer Column 2', 'naslaan' ),
			'id'            => 'sidebar-footer-col-2',
			'description'   => esc_html__( 'Appears in the footer section, use "Theme Settings" for column width.', 'naslaan' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '<div class="clearfix"></div></div>',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>'
		));
		
		register_sidebar( array(
			'name'          => esc_html__( 'Footer Column 3', 'naslaan' ),
			'id'            => 'sidebar-footer-col-3',
			'description'   => esc_html__( 'Appears in the footer section, use "Theme Settings" for column width.', 'naslaan' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '<div class="clearfix"></div></div>',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>'
		));
		
		register_sidebar( array(
			'name'          => esc_html__( 'Footer Column 4', 'naslaan' ),
			'id'            => 'sidebar-footer-col-4',
			'description'   => esc_html__( 'Appears in the footer section, use "Theme Settings" for column width.', 'naslaan' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '<div class="clearfix"></div></div>',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>'
		));
		
		register_sidebar( array(
			'name'          => esc_html__( 'Shop Sidebar', 'naslaan' ),
			'id'            => 'shop-sidebar',
			'description'   => esc_html__( 'Appears in the sidebar section.', 'naslaan' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '<div class="clearfix"></div></div>',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>'
		));
		
		register_sidebar( array(
			'name'          => esc_html__( 'Product Post Sidebar', 'naslaan' ),
			'id'            => 'product-sidebar',
			'description'   => esc_html__( 'Appears in the sidebar section.', 'naslaan' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '<div class="clearfix"></div></div>',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>'
		));
		
	}
	
	function my_theme_register_required_plugins() {
		/*
		 * Array of plugin arrays. Required keys are name and slug.
		 * If the source is NOT from the .org repo, then source is also required.
		 */
		$plugins = array(
	
			array(
				'name'         => esc_html__('Unyson WordPress Framework', 'naslaan' ),
				'slug'         => 'unyson',
				'source'       => 'https://downloads.wordpress.org/plugin/unyson.zip',
				'required'     => true,
				'external_url' => 'https://github.com/ThemeFuse/Unyson',
			),
			array(
				'name'         => esc_html__('WPBakery Visual Composer', 'naslaan' ),
				'slug'         => 'js_composer',
				'source'       => get_stylesheet_directory() . '/plugins/js_composer.zip',
				'required'     => true,
				'version'      => '5.4.7',
				'external_url' => 'https://vc.wpbakery.com/',
			),
			array(
				'name'         => esc_html__('LPD Service Posts', 'naslaan' ),
				'slug'         => 'lpd_service_posts',
				'source'       => get_stylesheet_directory() . '/plugins/lpd_service_posts.zip',
				'required'     => false,
				'version'      => '1.0',
				'external_url' => 'http://themeforest.net/user/lidplussdesign',
				'is_callable'  => 'js_composer'
			),
			array(
				'name'         => esc_html__('LPD WPBakery Elements', 'naslaan' ),
				'slug'         => 'lpd_vc_elements',
				'source'       => get_stylesheet_directory() . '/plugins/lpd_vc_elements.zip',
				'required'     => false,
				'version'      => '1.1',
				'external_url' => 'http://themeforest.net/user/lidplussdesign',
				'is_callable'  => 'js_composer'
			),
			array(
				'name'         => esc_html__('Slider Revolution Responsive WordPress Plugin', 'naslaan' ),
				'slug'         => 'revslider',
				'source'       => get_stylesheet_directory() . '/plugins/revslider.zip',
				'required'     => false,
				'version'      => '5.4.7.2',
				'external_url' => 'https://revolution.themepunch.com/',
			),
			array(
				'name'         => esc_html__('Essential Grid', 'naslaan' ),
				'slug'         => 'essential-grid',
				'source'       => get_stylesheet_directory() . '/plugins/essential-grid.zip',
				'required'     => false,
				'version'      => '2.2.4',
				'external_url' => 'https://revolution.themepunch.com/',
			),
			array(
				'name'         => esc_html__('Envato Market', 'naslaan' ),
				'slug'         => 'envato-market',
				'source'       => 'https://github.com/envato/wp-envato-market/archive/master.zip',
				'required'     => false,
				'external_url' => 'https://github.com/envato/wp-envato-market/',
			),
			array(
				'name'         => esc_html__('MailChimp for WordPress', 'naslaan' ),
				'slug'         => 'mailchimp-for-wp',
				'required'     => false,
				'is_callable'  => 'https://wordpress.org/plugins/mailchimp-for-wp/'
			),
			array(
				'name'      => esc_html__('WooCommerce', 'naslaan' ),
				'slug'      => 'woocommerce',
				'required'  => false,
				'external_url' => 'https://wordpress.org/plugins/woocommerce/',
			),
			array(
				'name'      => esc_html__('Contact Form 7', 'naslaan' ),
				'slug'      => 'contact-form-7',
				'required'  => false,
				'external_url' => 'https://wordpress.org/plugins/contact-form-7/',
			),
	
		);
	
		/*
		 * Array of configuration settings. Amend each line as needed.
		 *
		 * TGMPA will start providing localized text strings soon. If you already have translations of our standard
		 * strings available, please help us make TGMPA even better by giving us access to these translations or by
		 * sending in a pull-request with .po file(s) with the translations.
		 *
		 * Only uncomment the strings in the config array if you want to customize the strings.
		 */
		$config = array(
			'id'           => 'tgmpa',                 // Unique ID for hashing notices for multiple instances of TGMPA.
			'default_path' => '',                      // Default absolute path to bundled plugins.
			'menu'         => 'tgmpa-install-plugins', // Menu slug.
			'parent_slug'  => 'themes.php',            // Parent menu slug.
			'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
			'has_notices'  => true,                    // Show admin notices or not.
			'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
			'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
			'is_automatic' => false,                   // Automatically activate plugins after installation or not.
			'message'      => '',                      // Message to output right before the plugins table.
	
		);
	
		tgmpa( $plugins, $config );
	}

}
?>
