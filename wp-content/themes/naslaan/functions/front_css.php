<?php class naslaan_front_css {


	function __construct() {
	
		add_action( 'wp_enqueue_scripts', array( $this, 'naslaan_custom_css_general' ) );
		add_action( 'wp_enqueue_scripts', array( $this, 'naslaan_custom_css_header' ) );
		add_action( 'wp_enqueue_scripts', array( $this, 'naslaan_custom_css_header_title' ) );
		add_action( 'wp_enqueue_scripts', array( $this, 'naslaan_custom_css_footer' ) );
		add_action( 'wp_enqueue_scripts', array( $this, 'naslaan_custom_css_blog' ) );
		if( naslaan_helpers::naslaan_woocommerce_check() ) {
			add_action( 'wp_enqueue_scripts', array( $this, 'naslaan_custom_css_woocommerce' ) );
			add_action( 'wp_enqueue_scripts', array( $this, 'naslaan_custom_js_woocommerce' ) );
		}
		add_action( 'wp_enqueue_scripts', array( $this, 'naslaan_custom_css_portfolio' ) );
		add_action( 'wp_enqueue_scripts', array( $this, 'naslaan_custom_css_contact_form' ) );
		add_action( 'wp_enqueue_scripts', array( $this, 'naslaan_custom_css_widgets' ) );

	}
	
	function naslaan_custom_css_widgets(){
		
	    if (!defined('FW')) return;
	    
	    $body_font = fw_get_db_settings_option('body_font');
		
		// Widget Social Media
		$widget_social_media_btn_color = fw_get_db_settings_option('widget_social_media_btn_color');
		$widget_social_media_btn_hover_color = fw_get_db_settings_option('widget_social_media_btn_hover_color');
		$widget_social_media_btn_background = fw_get_db_settings_option('widget_social_media_btn_background');
		$widget_social_media_btn_background_hover = fw_get_db_settings_option('widget_social_media_btn_background_hover');
		$widget_social_media_btn_border = fw_get_db_settings_option('widget_social_media_btn_border');
		$widget_social_media_btn_border_hover = fw_get_db_settings_option('widget_social_media_btn_border_hover');
		$widget_social_media_tooltip_bg = fw_get_db_settings_option('widget_social_media_tooltip_bg');
		
		// Latest Posts Widget
		$lpw_title = fw_get_db_settings_option('lpw_title');
		$lpw_title_color = fw_get_db_settings_option('lpw_title_color');
		$lpw_title_color_hover = fw_get_db_settings_option('lpw_title_color_hover');
		$lpw_meta = fw_get_db_settings_option('lpw_meta');
		$lpw_meta_color = fw_get_db_settings_option('lpw_meta_color');
		$lpw_meta_color_hover = fw_get_db_settings_option('lpw_meta_color_hover');
		
		// Instagram Widget
		$widget_newsletter_padding_top = fw_get_db_settings_option('widget_newsletter_padding_top');
		$widget_newsletter_padding_right = fw_get_db_settings_option('widget_newsletter_padding_right');
		$widget_newsletter_padding_bottom = fw_get_db_settings_option('widget_newsletter_padding_bottom');
		$widget_newsletter_padding_left = fw_get_db_settings_option('widget_newsletter_padding_left');
		$widget_newsletter_margin_top = fw_get_db_settings_option('widget_newsletter_margin_top');
		$widget_newsletter_margin_bottom = fw_get_db_settings_option('widget_newsletter_margin_bottom');
		$widget_newsletter_container_bg = fw_get_db_settings_option('widget_newsletter_container_bg');
		$widget_newsletter_container_border_color = fw_get_db_settings_option('widget_newsletter_container_border_color');
		$widget_newsletter_btn_color = fw_get_db_settings_option('widget_newsletter_btn_color');
		$widget_newsletter_btn_hover_color = fw_get_db_settings_option('widget_newsletter_btn_hover_color');
		$widget_newsletter_btn_bg_color = fw_get_db_settings_option('widget_newsletter_btn_bg_color');
		$widget_newsletter_btn_bg_hover_color = fw_get_db_settings_option('widget_newsletter_btn_bg_hover_color');
		$widget_newsletter_title_font = fw_get_db_settings_option('widget_newsletter_title_font');
		$widget_newsletter_description_font = fw_get_db_settings_option('widget_newsletter_description_font');
		
		// Category Widget
		$category_widget_title = fw_get_db_settings_option('category_widget_title');
		$category_widget_title_bg = fw_get_db_settings_option('category_widget_title_bg');
		$category_widget_bg_hover = fw_get_db_settings_option('category_widget_bg_hover');
		
		$custom_css = '';
		
        // Widget Social Media
        if($widget_newsletter_title_font){
        
			$current_style = $widget_newsletter_title_font['variation'];

			if ( $current_style === 'regular' ) {
                $current_style = '400';
            }
            if ( $current_style == 'italic' ) {
                $current_style = '400italic';
            }
            
			if($widget_newsletter_title_font['style']){
				$font_style  = 'font-style: '. $widget_newsletter_title_font['style'] .';';
			}else{
				$font_style  = ( strpos( $current_style, 'italic' ) ) ? 'font-style: italic;' : 'font-style: normal;';
			}
			
			if($widget_newsletter_title_font['weight']){
				$font_weight  = 'font-weight: '. $widget_newsletter_title_font['weight'] .';';
			}else{
				$font_weight = 'font-weight: ' . intval( $current_style ) . ';';
			}
			
	        $custom_css .= '
	        .widget .newsletter-content h4{
	            font-family: '. esc_html($widget_newsletter_title_font['family']) .';
	        	'. esc_html($font_style) .'
	        	'. esc_html($font_weight) .'
	            font-size: '. esc_html($widget_newsletter_title_font['size']) .'px;
	            letter-spacing: '. esc_html($widget_newsletter_title_font['letter-spacing']) .'px;
	            color: '. esc_html($widget_newsletter_title_font['color']) .';
	        }';
        }
        
        if($widget_newsletter_description_font){
        
			$current_style = $widget_newsletter_description_font['variation'];

			if ( $current_style === 'regular' ) {
                $current_style = '400';
            }
            if ( $current_style == 'italic' ) {
                $current_style = '400italic';
            }
            
			if($widget_newsletter_description_font['style']){
				$font_style  = 'font-style: '. $widget_newsletter_description_font['style'] .';';
			}else{
				$font_style  = ( strpos( $current_style, 'italic' ) ) ? 'font-style: italic;' : 'font-style: normal;';
			}
			
			if($widget_newsletter_description_font['weight']){
				$font_weight  = 'font-weight: '. $widget_newsletter_description_font['weight'] .';';
			}else{
				$font_weight = 'font-weight: ' . intval( $current_style ) . ';';
			}
			
	        $custom_css .= '
	        .widget .newsletter-content p{
	            font-family: '. esc_html($widget_newsletter_description_font['family']) .';
	        	'. esc_html($font_style) .'
	        	'. esc_html($font_weight) .'
	            font-size: '. esc_html($widget_newsletter_description_font['size']) .'px;
	            letter-spacing: '. esc_html($widget_newsletter_description_font['letter-spacing']) .'px;
	            color: '. esc_html($widget_newsletter_description_font['color']) .';
	        }';
        }
    
        $custom_css .= '
        .widget .mc4wp-form{
        	background-color: '. esc_html($widget_newsletter_container_bg) .';
        	border: 1px solid '. esc_html($widget_newsletter_container_border_color) .';
        	padding-top: '. esc_html($widget_newsletter_padding_top) .'px;
        	padding-bottom: '. esc_html($widget_newsletter_padding_bottom) .'px;
        	padding-left: '. esc_html($widget_newsletter_padding_left) .'px;
        	padding-right: '. esc_html($widget_newsletter_padding_right) .'px;
        	margin-top: '. esc_html($widget_newsletter_margin_top) .'px;
        	margin-bottom: '. esc_html($widget_newsletter_margin_bottom) .'px;
        }';
        
        $custom_css .= '
        .widget .newsletter-form input[type="submit"]{
            color: '. esc_html($widget_newsletter_btn_color) .';
            background-color: '. esc_html($widget_newsletter_btn_bg_color) .';
            border-color: transparent;
        }';
        
        $custom_css .= '
        .widget .newsletter-form input[type="submit"]:hover{
            color: '. esc_html($widget_newsletter_btn_hover_color) .';
            background-color: '. esc_html($widget_newsletter_btn_bg_hover_color) .';
            border-color: transparent;
            
        }';

        
    	$custom_css .= '
	    .widget .social-icons-container > ul > li > a{
	    	background-color: '. esc_html($widget_social_media_btn_background) .' !important;
	    	color: '. esc_html($widget_social_media_btn_color) .' !important;
	    	border: 1px solid '. esc_html($widget_social_media_btn_border) .';
	    }';
	    
	    $custom_css .= '
	    .widget .social-icons-container > ul > li > a:hover{
	    	color: '. esc_html($widget_social_media_btn_hover_color) .' !important;
	    	border: 1px solid '. esc_html($widget_social_media_btn_border_hover) .' !important;
	    }';
	    
	    $custom_css .= '
	    .widget .social-icons-container > ul > li > a span.bg-overlay{
	    	background-color: '. esc_html($widget_social_media_btn_background_hover) .';
	    }';
	    
	    $custom_css .= '
	    .widget .social-icons-container > ul > li > a .tooltip-container{
	    	background-color: '. esc_html($widget_social_media_tooltip_bg) .';
	    	font-size: '. esc_html($body_font['size']) .'px;
	    }';
	    
	    $custom_css .= '
	    .widget .social-icons-container > ul > li > a .tooltip-container:after{
	    	border-left-color: '. esc_html($widget_social_media_tooltip_bg) .';
	    }';
	    
	    
        // Social Media Widget
	    $custom_css .= '
	    .social-container .social-icons-container > ul > li > a .tooltip-container{
	    	font-family: '. esc_html($body_font['family']) .';
	    }';

        // Latest Posts Widget
		if($lpw_title){
			$current_style = $lpw_title['variation'];

			if ( $current_style === 'regular' ) {
                $current_style = '400';
            }
            if ( $current_style == 'italic' ) {
                $current_style = '400italic';
            }
            
			if($lpw_title['style']){
				$font_style  = 'font-style: '. $lpw_title['style'] .';';
			}else{
				$font_style  = ( strpos( $current_style, 'italic' ) ) ? 'font-style: italic;' : 'font-style: normal;';
			}
			
			if($lpw_title['weight']){
				$font_weight  = 'font-weight: '. $lpw_title['weight'] .';';
			}else{
				$font_weight = 'font-weight: ' . intval( $current_style ) . ';';
			}
			
	        $custom_css .= '
	        .widget_naslaan_posts_widget h4.title{
	            font-family: '. esc_html($lpw_title['family']) .';
	        	'. esc_html($font_style) .'
	        	'. esc_html($font_weight) .'
	            font-size: '. esc_html($lpw_title['size']) .'px;
	            letter-spacing: '. esc_html($lpw_title['letter-spacing']) .'px;
	            color: '. esc_html($lpw_title_color) .';
	        }';
	        
	        $custom_css .= '
	        .widget_naslaan_posts_widget a:hover h4.title{
	            color: '. esc_html($lpw_title_color_hover) .';
	        }';
        }
        
		if($lpw_meta){
			$current_style = $lpw_meta['variation'];

			if ( $current_style === 'regular' ) {
                $current_style = '400';
            }
            if ( $current_style == 'italic' ) {
                $current_style = '400italic';
            }
            
			if($lpw_meta['style']){
				$font_style  = 'font-style: '. $lpw_meta['style'] .';';
			}else{
				$font_style  = ( strpos( $current_style, 'italic' ) ) ? 'font-style: italic;' : 'font-style: normal;';
			}
			
			if($lpw_meta['weight']){
				$font_weight  = 'font-weight: '. $lpw_meta['weight'] .';';
			}else{
				$font_weight = 'font-weight: ' . intval( $current_style ) . ';';
			}
			
	        $custom_css .= '
	        .widget_naslaan_posts_widget .mw-date{
	            font-family: '. esc_html($lpw_meta['family']) .';
	        	'. esc_html($font_style) .'
	        	'. esc_html($font_weight) .'
	            font-size: '. esc_html($lpw_meta['size']) .'px;
	            letter-spacing: '. esc_html($lpw_meta['letter-spacing']) .'px;
	            color: '. esc_html($lpw_meta_color) .';
	        }';
        }
        
		$custom_css = trim(preg_replace('/\s+/', ' ', $custom_css));
		
        wp_add_inline_style( 'naslaan_application', $custom_css );
		
	}
	
	function naslaan_custom_css_contact_form(){

	    if (!defined('FW')) return; // prevent fatal error when the framework is not active
		
		// Contact Options (primary)
	    $contact_form_border_color = fw_get_db_settings_option('contact_form_border_color');
	    $contact_form_border_hover_color = fw_get_db_settings_option('contact_form_border_hover_color');
	    $contact_form_bg_color = fw_get_db_settings_option('contact_form_bg_color');
	    $contact_form_bg_hover_color = fw_get_db_settings_option('contact_form_bg_hover_color');
	    $contact_form_label_font = fw_get_db_settings_option('contact_form_label_font');
	    $contact_form_label_font_color = fw_get_db_settings_option('contact_form_label_font_color');
	    $contact_form_label_element_color = fw_get_db_settings_option('contact_form_label_element_color');
	    $contact_form_input_text_color = fw_get_db_settings_option('contact_form_input_text_color');
	    $contact_form_placeholder_color = fw_get_db_settings_option('contact_form_placeholder_color');
	    $contact_form_checkbox_switch = fw_get_db_settings_option('contact_form_checkbox/contact_form_checkbox_switch');
	    $contact_form_checkbox_label = fw_get_db_settings_option('contact_form_checkbox/enabled/contact_form_checkbox_label');
	    $contact_form_checkbox_label_color = fw_get_db_settings_option('contact_form_checkbox/enabled/contact_form_checkbox_label_color');
	    $contact_form_checkbox_bg = fw_get_db_settings_option('contact_form_checkbox/enabled/contact_form_checkbox_bg');
	    $contact_form_checkbox_hover_bg = fw_get_db_settings_option('contact_form_checkbox/enabled/contact_form_checkbox_hover_bg');
	    $contact_form_btn_text = fw_get_db_settings_option('contact_form_btn_text');
	    $contact_form_btn_color = fw_get_db_settings_option('contact_form_btn_color');
	    $contact_form_btn_color_hover = fw_get_db_settings_option('contact_form_btn_color_hover');
	    $contact_form_btn_background_color = fw_get_db_settings_option('contact_form_btn_background_color');
	    $contact_form_btn_background_color_hover = fw_get_db_settings_option('contact_form_btn_background_color_hover');
	    $contact_form_btn_border_color = fw_get_db_settings_option('contact_form_btn_border_color');
	    $contact_form_btn_border_color_hover = fw_get_db_settings_option('contact_form_btn_border_color_hover');
	    $contact_form_btn_radius = fw_get_db_settings_option('contact_form_btn_radius');
	    
		// Contact Options (secondary)
	    $contact_form_secondary_border_color = fw_get_db_settings_option('contact_form_secondary_border_color');
	    $contact_form_secondary_border_hover_color = fw_get_db_settings_option('contact_form_secondary_border_hover_color');
	    $contact_form_secondary_bg_color = fw_get_db_settings_option('contact_form_secondary_bg_color');
	    $contact_form_secondary_bg_hover_color = fw_get_db_settings_option('contact_form_secondary_bg_hover_color');
	    $contact_form_secondary_label_font = fw_get_db_settings_option('contact_form_secondary_label_font');
	    $contact_form_secondary_label_font_color = fw_get_db_settings_option('contact_form_secondary_label_font_color');
	    $contact_form_secondary_label_element_color = fw_get_db_settings_option('contact_form_secondary_label_element_color');
	    $contact_form_secondary_input_text_color = fw_get_db_settings_option('contact_form_secondary_input_text_color');
	    $contact_form_secondary_placeholder_color = fw_get_db_settings_option('contact_form_secondary_placeholder_color');
	    $contact_form_secondary_checkbox_switch = fw_get_db_settings_option('contact_form_secondary_checkbox/contact_form_checkbox_switch');
	    $contact_form_secondary_checkbox_label = fw_get_db_settings_option('contact_form_secondary_checkbox/enabled/contact_form_checkbox_label');
	    $contact_form_secondary_checkbox_label_color = fw_get_db_settings_option('contact_form_secondary_checkbox/enabled/contact_form_checkbox_label_color');
	    $contact_form_secondary_checkbox_bg = fw_get_db_settings_option('contact_form_secondary_checkbox/enabled/contact_form_checkbox_bg');
	    $contact_form_secondary_checkbox_hover_bg = fw_get_db_settings_option('contact_form_secondary_checkbox/enabled/contact_form_checkbox_hover_bg');
	    $contact_form_secondary_btn_text = fw_get_db_settings_option('contact_form_secondary_btn_text');
	    $contact_form_secondary_btn_color = fw_get_db_settings_option('contact_form_secondary_btn_color');
	    $contact_form_secondary_btn_color_hover = fw_get_db_settings_option('contact_form_secondary_btn_color_hover');
	    $contact_form_secondary_btn_background_color = fw_get_db_settings_option('contact_form_secondary_btn_background_color');
	    $contact_form_secondary_btn_background_color_hover = fw_get_db_settings_option('contact_form_secondary_btn_background_color_hover');
	    $contact_form_secondary_btn_border_color = fw_get_db_settings_option('contact_form_secondary_btn_border_color');
	    $contact_form_secondary_btn_border_color_hover = fw_get_db_settings_option('contact_form_secondary_btn_border_color_hover');
	    $contact_form_secondary_btn_radius = fw_get_db_settings_option('contact_form_secondary_btn_radius');

		$custom_css = '';
		
        // Contact Options (primary)
        $custom_css .= '
		select.wpcf7-form-control,
		textarea.wpcf7-form-control,
		input[type="email"].wpcf7-form-control,
		input[type="date"].wpcf7-form-control,
		input[type="number"].wpcf7-form-control,
		input[type="tel"].wpcf7-form-control,
		input[type="url"].wpcf7-form-control,
		input[type="email"].wpcf7-form-control,
		input[type="text"].wpcf7-form-control{
			border-color: '. esc_html($contact_form_border_color) .';
			background-color: '. esc_html($contact_form_bg_color) .';
        }';
        $custom_css .= '
		select.wpcf7-form-control:focus,
		textarea.wpcf7-form-control:focus,
		input[type="email"].wpcf7-form-control:focus,
		input[type="date"].wpcf7-form-control:focus,
		input[type="number"].wpcf7-form-control:focus,
		input[type="tel"].wpcf7-form-control:focus,
		input[type="url"].wpcf7-form-control:focus,
		input[type="email"].wpcf7-form-control:focus,
		input[type="text"].wpcf7-form-control:focus{
			border-color: '. esc_html($contact_form_border_hover_color) .';
			background-color: '. esc_html($contact_form_bg_hover_color) .';
        }';
        if($contact_form_label_font){
        
			$current_style = $contact_form_label_font['variation'];

			if ( $current_style === 'regular' ) {
                $current_style = '400';
            }
            if ( $current_style == 'italic' ) {
                $current_style = '400italic';
            }
            
			if($contact_form_label_font['style']){
				$font_style  = 'font-style: '. $contact_form_label_font['style'] .';';
			}else{
				$font_style  = ( strpos( $current_style, 'italic' ) ) ? 'font-style: italic;' : 'font-style: normal;';
			}
			
			if($contact_form_label_font['weight']){
				$font_weight  = 'font-weight: '. $contact_form_label_font['weight'] .';';
			}else{
				$font_weight = 'font-weight: ' . intval( $current_style ) . ';';
			}
			
	        $custom_css .= '
	        .wpcf7-form label{
	            font-family: '. esc_html($contact_form_label_font['family']) .';
	        	'. esc_html($font_style) .'
	        	'. esc_html($font_weight) .'
	            font-size: '. esc_html($contact_form_label_font['size']) .'px;
	            letter-spacing: '. esc_html($contact_form_label_font['letter-spacing']) .'px;
	            color: '.esc_html($contact_form_label_font_color).';
	        }';
        }
        $custom_css .= '
		select.wpcf7-form-control,
		textarea.wpcf7-form-control,
		input[type="email"].wpcf7-form-control,
		input[type="date"].wpcf7-form-control,
		input[type="number"].wpcf7-form-control,
		input[type="tel"].wpcf7-form-control,
		input[type="url"].wpcf7-form-control,
		input[type="email"].wpcf7-form-control,
		input[type="text"].wpcf7-form-control{
        	color: '. esc_html($contact_form_input_text_color) .';
        }';
        $custom_css .= '
		.wpcf7-form-control::-moz-placeholder,
		.wpcf7-form-control:-ms-input-placeholder,
		.wpcf7-form-control::-webkit-input-placeholder{
        	color: '. esc_html($contact_form_placeholder_color) .';
        }';
    
        if($contact_form_btn_text){
        
			$current_style = $contact_form_btn_text['variation'];

			if ( $current_style === 'regular' ) {
                $current_style = '400';
            }
            if ( $current_style == 'italic' ) {
                $current_style = '400italic';
            }
            
			if($contact_form_btn_text['style']){
				$font_style  = 'font-style: '. $contact_form_btn_text['style'] .';';
			}else{
				$font_style  = ( strpos( $current_style, 'italic' ) ) ? 'font-style: italic;' : 'font-style: normal;';
			}
			
			if($contact_form_btn_text['weight']){
				$font_weight  = 'font-weight: '. $contact_form_btn_text['weight'] .';';
			}else{
				$font_weight = 'font-weight: ' . intval( $current_style ) . ';';
			}
			
	        $custom_css .= '
	        input.wpcf7-form-control[type="submit"]{
	            font-family: '. esc_html($contact_form_btn_text['family']) .';
	        	'. esc_html($font_style) .'
	        	'. esc_html($font_weight) .'
	            font-size: '. esc_html($contact_form_btn_text['size']) .'px;
	            letter-spacing: '. esc_html($contact_form_btn_text['letter-spacing']) .'px;
				background-color: '. esc_html($contact_form_btn_background_color) .'; 
				border-color: '. esc_html($contact_form_btn_border_color) .'; 
				color: '. esc_html($contact_form_btn_color) .';
				-webkit-border-radius: '. esc_html($contact_form_btn_radius) .'px;
				-moz-border-radius: '. esc_html($contact_form_btn_radius) .'px;
				border-radius: '. esc_html($contact_form_btn_radius) .'px;
	        }';
        }
        $custom_css .= '
        input.wpcf7-form-control[type="submit"]:hover,
		input.wpcf7-form-control[type="submit"]:active,
		input.wpcf7-form-control[type="submit"]:focus{
				background-color: '. esc_html($contact_form_btn_background_color_hover) .';
				border-color: '. esc_html($contact_form_btn_border_color_hover) .';
				color: '. esc_html($contact_form_btn_color_hover) .';
        }';
        
        // Contact Options (secondary)
        $custom_css .= '
		.wpcf7-form.secondary-style select.wpcf7-form-control,
		.wpcf7-form.secondary-style textarea.wpcf7-form-control,
		.wpcf7-form.secondary-style input[type="email"].wpcf7-form-control,
		.wpcf7-form.secondary-style input[type="date"].wpcf7-form-control,
		.wpcf7-form.secondary-style input[type="number"].wpcf7-form-control,
		.wpcf7-form.secondary-style input[type="tel"].wpcf7-form-control,
		.wpcf7-form.secondary-style input[type="url"].wpcf7-form-control,
		.wpcf7-form.secondary-style input[type="email"].wpcf7-form-control,
		.wpcf7-form.secondary-style input[type="text"].wpcf7-form-control{
			border-color: '. esc_html($contact_form_secondary_border_color) .';
			background-color: '. esc_html($contact_form_secondary_bg_color) .';
        }';
        $custom_css .= '
		.wpcf7-form.secondary-style select.wpcf7-form-control:focus,
		.wpcf7-form.secondary-style textarea.wpcf7-form-control:focus,
		.wpcf7-form.secondary-style input[type="email"].wpcf7-form-control:focus,
		.wpcf7-form.secondary-style input[type="date"].wpcf7-form-control:focus,
		.wpcf7-form.secondary-style input[type="number"].wpcf7-form-control:focus,
		.wpcf7-form.secondary-style input[type="tel"].wpcf7-form-control:focus,
		.wpcf7-form.secondary-style input[type="url"].wpcf7-form-control:focus,
		.wpcf7-form.secondary-style input[type="email"].wpcf7-form-control:focus,
		.wpcf7-form.secondary-style input[type="text"].wpcf7-form-control:focus{
			border-color: '. esc_html($contact_form_secondary_border_hover_color) .';
			background-color: '. esc_html($contact_form_secondary_bg_hover_color) .';
        }';
        if($contact_form_secondary_label_font){
        
			$current_style = $contact_form_secondary_label_font['variation'];

			if ( $current_style === 'regular' ) {
                $current_style = '400';
            }
            if ( $current_style == 'italic' ) {
                $current_style = '400italic';
            }
            
			if($contact_form_secondary_label_font['style']){
				$font_style  = 'font-style: '. $contact_form_secondary_label_font['style'] .';';
			}else{
				$font_style  = ( strpos( $current_style, 'italic' ) ) ? 'font-style: italic;' : 'font-style: normal;';
			}
			
			if($contact_form_secondary_label_font['weight']){
				$font_weight  = 'font-weight: '. $contact_form_secondary_label_font['weight'] .';';
			}else{
				$font_weight = 'font-weight: ' . intval( $current_style ) . ';';
			}
			
	        $custom_css .= '
	        .wpcf7-form.secondary-style label{
	            font-family: '. esc_html($contact_form_secondary_label_font['family']) .';
	        	'. esc_html($font_style) .'
	        	'. esc_html($font_weight) .'
	            font-size: '. esc_html($contact_form_secondary_label_font['size']) .'px;
	            letter-spacing: '. esc_html($contact_form_secondary_label_font['letter-spacing']) .'px;
	            color: '. esc_html($contact_form_secondary_label_font_color).';
	        }';
        }
        $custom_css .= '
		.wpcf7-form.secondary-style select.wpcf7-form-control,
		.wpcf7-form.secondary-style textarea.wpcf7-form-control,
		.wpcf7-form.secondary-style input[type="email"].wpcf7-form-control,
		.wpcf7-form.secondary-style input[type="date"].wpcf7-form-control,
		.wpcf7-form.secondary-style input[type="number"].wpcf7-form-control,
		.wpcf7-form.secondary-style input[type="tel"].wpcf7-form-control,
		.wpcf7-form.secondary-style input[type="url"].wpcf7-form-control,
		.wpcf7-form.secondary-style input[type="email"].wpcf7-form-control,
		.wpcf7-form.secondary-style input[type="text"].wpcf7-form-control{
        	color: '. esc_html($contact_form_secondary_input_text_color) .';
        }';
        $custom_css .= '
		.wpcf7-form.secondary-style .wpcf7-form-control::-moz-placeholder,
		.wpcf7-form.secondary-style .wpcf7-form-control:-ms-input-placeholder,
		.wpcf7-form.secondary-style .wpcf7-form-control::-webkit-input-placeholder{
        	color: '. esc_html($contact_form_secondary_placeholder_color) .';
        }';
        if($contact_form_secondary_checkbox_switch!='disabled'){
	        if($contact_form_secondary_checkbox_label){
	        
				$current_style = $contact_form_secondary_checkbox_label['variation'];
	
				if ( $current_style === 'regular' ) {
	                $current_style = '400';
	            }
	            if ( $current_style == 'italic' ) {
	                $current_style = '400italic';
	            }
	            
				if($contact_form_secondary_checkbox_label['style']){
					$font_style  = 'font-style: '. $contact_form_secondary_checkbox_label['style'] .';';
				}else{
					$font_style  = ( strpos( $current_style, 'italic' ) ) ? 'font-style: italic;' : 'font-style: normal;';
				}
				
				if($contact_form_secondary_checkbox_label['weight']){
					$font_weight  = 'font-weight: '. $contact_form_secondary_checkbox_label['weight'] .';';
				}else{
					$font_weight = 'font-weight: ' . intval( $current_style ) . ';';
				}
				
		        $custom_css .= '
		        .wpcf7-form.secondary-style .wpcf7-list-item-label{
		            font-family: '. esc_html($contact_form_secondary_checkbox_label['family']) .';
		        	'. esc_html($font_style) .'
		        	'. esc_html($font_weight) .'
		            font-size: '. esc_html($contact_form_secondary_checkbox_label['size']) .'px;
		            letter-spacing: '. esc_html($contact_form_secondary_checkbox_label['letter-spacing']) .'px;
					color: '. esc_html($contact_form_secondary_checkbox_label_color) .';
		        }';
	        }
		}
        if($contact_form_secondary_btn_text){
        
			$current_style = $contact_form_secondary_btn_text['variation'];

			if ( $current_style === 'regular' ) {
                $current_style = '400';
            }
            if ( $current_style == 'italic' ) {
                $current_style = '400italic';
            }
            
			if($contact_form_secondary_btn_text['style']){
				$font_style  = 'font-style: '. $contact_form_secondary_btn_text['style'] .';';
			}else{
				$font_style  = ( strpos( $current_style, 'italic' ) ) ? 'font-style: italic;' : 'font-style: normal;';
			}
			
			if($contact_form_secondary_btn_text['weight']){
				$font_weight  = 'font-weight: '. $contact_form_secondary_btn_text['weight'] .';';
			}else{
				$font_weight = 'font-weight: ' . intval( $current_style ) . ';';
			}
			
	        $custom_css .= '
	        .wpcf7-form.secondary-style input.wpcf7-form-control[type="submit"]{
	            font-family: '. esc_html($contact_form_secondary_btn_text['family']) .';
	        	'. esc_html($font_style) .'
	        	'. esc_html($font_weight) .'
	            font-size: '. esc_html($contact_form_secondary_btn_text['size']) .'px;
	            letter-spacing: '. esc_html($contact_form_secondary_btn_text['letter-spacing']) .'px;
				background-color: '. esc_html($contact_form_secondary_btn_background_color) .';
				border-color: '. esc_html($contact_form_secondary_btn_border_color) .';
				color: '. esc_html($contact_form_secondary_btn_color) .';
				-webkit-border-radius: '. esc_html($contact_form_secondary_btn_radius) .'px;
				-moz-border-radius: '. esc_html($contact_form_secondary_btn_radius) .'px;
				border-radius: '. esc_html($contact_form_secondary_btn_radius) .'px;
	        }';
        }
        $custom_css .= '
        .wpcf7-form.secondary-style input.wpcf7-form-control[type="submit"]:hover,
		.wpcf7-form.secondary-style input.wpcf7-form-control[type="submit"]:active,
		.wpcf7-form.secondary-style input.wpcf7-form-control[type="submit"]:focus{
				background-color: '. esc_html($contact_form_secondary_btn_background_color_hover) .';
				border-color: '. esc_html($contact_form_secondary_btn_border_color_hover) .'; 
				color: '. esc_html($contact_form_secondary_btn_color_hover) .';
        }';
        
        $custom_css = trim(preg_replace('/\s+/', ' ', $custom_css));
		
        wp_add_inline_style( 'naslaan_application', $custom_css );
	
	}
	
	function naslaan_custom_css_portfolio(){

	    if (!defined('FW')) return; // prevent fatal error when the framework is not active
	    
		// Portfolio Options
		$portfolio_link_color = fw_get_db_settings_option('portfolio_link_color');
		$portfolio_link_hover_color = fw_get_db_settings_option('portfolio_link_hover_color');
		$portfolio_related_post_title = fw_get_db_settings_option('portfolio_related_post_title');
		$portfolio_related_post_title_color = fw_get_db_settings_option('portfolio_related_post_title_color');
		$portfolio_related_post_title_hover_color = fw_get_db_settings_option('portfolio_related_post_title_hover_color');
		$portfolio_related_post_switch = fw_get_db_settings_option('portfolio_related_post_meta/portfolio_related_post_switch');
		$portfolio_related_post_meta= fw_get_db_settings_option('portfolio_related_post_meta/enabled/portfolio_related_post_meta_font');
	    $portfolio_post_navigation_btn_font = fw_get_db_settings_option('portfolio_post_navigation_btn_font');
	    $portfolio_post_navigation_btn_link_color = fw_get_db_settings_option('portfolio_post_navigation_btn_link_color');
	    $portfolio_post_navigation_btn_hover_link_color = fw_get_db_settings_option('portfolio_post_navigation_btn_hover_link_color');   
		
		$custom_css = '';
		
        if($portfolio_related_post_title){
        
			$current_style = $portfolio_related_post_title['variation'];

			if ( $current_style === 'regular' ) {
                $current_style = '400';
            }
            if ( $current_style == 'italic' ) {
                $current_style = '400italic';
            }
            
			if($portfolio_related_post_title['style']){
				$font_style  = 'font-style: '. $portfolio_related_post_title['style'] .';';
			}else{
				$font_style  = ( strpos( $current_style, 'italic' ) ) ? 'font-style: italic;' : 'font-style: normal;';
			}
			
			if($portfolio_related_post_title['weight']){
				$font_weight  = 'font-weight: '. $portfolio_related_post_title['weight'] .';';
			}else{
				$font_weight = 'font-weight: ' . intval( $current_style ) . ';';
			}
			
	        $custom_css .= '
	        .inner-portfolio-post .related-post-container-content h4 a{
	            font-family: '. esc_html($portfolio_related_post_title['family']) .';
	        	'. esc_html($font_style) .'
	        	'. esc_html($font_weight) .'
	            font-size: '. esc_html($portfolio_related_post_title['size']) .'px;
	            letter-spacing: '. esc_html($portfolio_related_post_title['letter-spacing']) .'px;
	            color: '. esc_html($portfolio_related_post_title_color) .';
	        }';
        }
        $custom_css .= '
        .inner-portfolio-post .related-post-container-content h4 a:hover{
        	color: '. esc_html($portfolio_related_post_title_hover_color) .';
        }';
        if($portfolio_related_post_switch == "enabled"){
        
			$current_style = $portfolio_related_post_meta['variation'];

			if ( $current_style === 'regular' ) {
                $current_style = '400';
            }
            if ( $current_style == 'italic' ) {
                $current_style = '400italic';
            }
            
			if($portfolio_related_post_meta['style']){
				$font_style  = 'font-style: '. $portfolio_related_post_meta['style'] .';';
			}else{
				$font_style  = ( strpos( $current_style, 'italic' ) ) ? 'font-style: italic;' : 'font-style: normal;';
			}
			
			if($portfolio_related_post_meta['weight']){
				$font_weight  = 'font-weight: '. $portfolio_related_post_meta['weight'] .';';
			}else{
				$font_weight = 'font-weight: ' . intval( $current_style ) . ';';
			}
			
	        $custom_css .= '
	        .inner-portfolio-post .related-post-container .related-post-container-meta a{
	            font-family: '. esc_html($portfolio_related_post_meta['family']) .';
	        	'. esc_html($font_style) .'
	        	'. esc_html($font_weight) .'
	            font-size: '. esc_html($portfolio_related_post_meta['size']) .'px;
	            letter-spacing: '. esc_html($portfolio_related_post_meta['letter-spacing']) .'px;
	        }';
        }
        $custom_css .= '
        .inner-portfolio-post a{
        	color: '. esc_html($portfolio_link_color) .';
        }';
        $custom_css .= '
        .inner-portfolio-post a:hover{
        	color: '. esc_html($portfolio_link_hover_color) .';
        }';
        $custom_css .= '
        .inner-portfolio-post .related-post-container .related-post-container-meta .material-icons{
        	color: '. esc_html($portfolio_link_color) .';
        }';
        $custom_css .= '
        .theme-default .nivo-controlNav a.active{
        	border-color: '. esc_html($portfolio_link_color) .';
        }';
        $custom_css .= '
        .theme-default .nivo-directionNav a{
        	background-color: '. esc_html($portfolio_link_color) .';
        }';
        if($portfolio_post_navigation_btn_font){
        
			$current_style = $portfolio_post_navigation_btn_font['variation'];

			if ( $current_style === 'regular' ) { $current_style = '400'; }
            if ( $current_style == 'italic' ) { $current_style = '400italic'; }
            
			if($portfolio_post_navigation_btn_font['style']){
				$font_style  = 'font-style: '. $portfolio_post_navigation_btn_font['style'] .';';
			}else{
				$font_style  = ( strpos( $current_style, 'italic' ) ) ? 'font-style: italic;' : 'font-style: normal;';
			}
			
			if($portfolio_post_navigation_btn_font['weight']){
				$font_weight  = 'font-weight: '. $portfolio_post_navigation_btn_font['weight'] .';';
			}else{
				$font_weight = 'font-weight: ' . intval( $current_style ) . ';';
			}
			
	        $custom_css .= '
	        .inner-portfolio-post .post-footer-navigation a{
	            font-family: '. esc_html($portfolio_post_navigation_btn_font['family']) .';
	        	'. esc_html($font_style) .'
	        	'. esc_html($font_weight) .'
	        	font-size: '. esc_html($portfolio_post_navigation_btn_font['size']) .'px;
	            letter-spacing: '. esc_html($portfolio_post_navigation_btn_font['letter-spacing']) .'px;
	            color: '. esc_html($portfolio_post_navigation_btn_link_color) .';
	        }';
	        
	        $custom_css .= '.inner-portfolio-post .post-footer-navigation a:hover{color:'.$portfolio_post_navigation_btn_hover_link_color.';}';
        }
        
        $custom_css = trim(preg_replace('/\s+/', ' ', $custom_css));
		
        wp_add_inline_style( 'naslaan_application', $custom_css );
	
	}
	
	function naslaan_custom_js_woocommerce(){
	
		if (!defined('FW')) return; // prevent fatal error when the framework is not active
		
		$shop_btn_overlay_effect = fw_get_db_settings_option('shop_btn_overlay_effect');
		
		$custom_js = '';
		
		if($shop_btn_overlay_effect=='enabled'){
			$custom_js .= '
			jQuery(document).ready(function() {
			"use strict";
			jQuery( ".woocommerce .button" ).addClass( "lpd_btn_overlay");
			jQuery( ".woocommerce input.button" ).removeClass( "lpd_btn_overlay");
			jQuery( ".woocommerce .button" ).wrapInner( "<span></span>");
			jQuery( ".woocommerce button.button" ).addClass( "lpd_btn_overlay");
			jQuery( ".woocommerce button.button" ).wrapInner( "<span></span>");
			jQuery( ".woocommerce .product-btn .button" ).on("click", function(){
				jQuery(this).removeClass("lpd_btn_overlay"); 
			}); 
			
			});';
		}
		
		wp_add_inline_script( 'naslaan_functions', $custom_js );
		
	}
	
	function naslaan_custom_css_woocommerce(){

	    if (!defined('FW')) return; // prevent fatal error when the framework is not active
	    
	    // Shop Options
		$shop_price_font = fw_get_db_settings_option('shop_price_font');
		$shop_rating_color = fw_get_db_settings_option('shop_rating_color');
		$shop_btn_text = fw_get_db_settings_option('shop_btn_text');
		$shop_btn_color = fw_get_db_settings_option('shop_btn_color');
		$shop_btn_color_hover = fw_get_db_settings_option('shop_btn_color_hover');
		$shop_btn_background_color = fw_get_db_settings_option('shop_btn_background_color');
		$shop_btn_background_color_hover = fw_get_db_settings_option('shop_btn_background_color_hover');
		$shop_btn_border_color = fw_get_db_settings_option('shop_btn_border_color');
		$shop_btn_border_color_hover = fw_get_db_settings_option('shop_btn_border_color_hover');
		$shop_btn_radius = '0';
		$shop_btn_overlay_effect = fw_get_db_settings_option('shop_btn_overlay_effect');
		$alt_shop_btn_color = fw_get_db_settings_option('alt_shop_btn_color');
		$alt_shop_btn_color_hover = fw_get_db_settings_option('alt_shop_btn_color_hover');
		$alt_shop_btn_background_color = fw_get_db_settings_option('alt_shop_btn_background_color');
		$alt_shop_btn_background_color_hover = fw_get_db_settings_option('alt_shop_btn_background_color_hover');
		$alt_shop_btn_border_color = fw_get_db_settings_option('alt_shop_btn_border_color');
		$alt_shop_btn_border_color_hover = fw_get_db_settings_option('alt_shop_btn_border_color_hover');
		$alt_shop_btn_radius = fw_get_db_settings_option('alt_shop_btn_radius');
		$shop_sale_color = fw_get_db_settings_option('shop_sale_color');
		$shop_sale_font = fw_get_db_settings_option('shop_sale_font');
		$shop_out_color = fw_get_db_settings_option('shop_out_color');
		$shop_out_font = fw_get_db_settings_option('shop_out_font');
		$shop_form_label_font = fw_get_db_settings_option('shop_form_label_font');
		$shop_form_label_element_color = fw_get_db_settings_option('shop_form_label_element_color');
		
	    // Shopping Cart
		$shopping_cart_btn_text = fw_get_db_settings_option('shopping_cart_btn_text');
		$shopping_cart_btn_color = fw_get_db_settings_option('shopping_cart_btn_color');
		$shopping_cart_btn_color_hover = fw_get_db_settings_option('shopping_cart_btn_color_hover');
		$shopping_cart_btn_background_color = fw_get_db_settings_option('shopping_cart_btn_background_color');
		$shopping_cart_btn_background_color_hover = fw_get_db_settings_option('shopping_cart_btn_background_color_hover');
		$shopping_cart_btn_border_color = fw_get_db_settings_option('shopping_cart_btn_border_color');
		$shopping_cart_btn_border_color_hover = fw_get_db_settings_option('shopping_cart_btn_border_color_hover');
		$shopping_cart_btn_radius = fw_get_db_settings_option('shopping_cart_btn_radius');

		$shopping_cart_btn_overlay_effect = fw_get_db_settings_option('shopping_cart_btn_overlay_effect');
		$alt_shopping_cart_btn_color = fw_get_db_settings_option('alt_shopping_cart_btn_color');
		$alt_shopping_cart_btn_color_hover = fw_get_db_settings_option('alt_shopping_cart_btn_color_hover');
		$alt_shopping_cart_btn_background_color = fw_get_db_settings_option('alt_shopping_cart_btn_background_color');
		$alt_shopping_cart_btn_background_color_hover = fw_get_db_settings_option('alt_shopping_cart_btn_background_color_hover');
		$alt_shopping_cart_btn_border_color = fw_get_db_settings_option('alt_shopping_cart_btn_border_color');
		$alt_shopping_cart_btn_border_color_hover = fw_get_db_settings_option('alt_shopping_cart_btn_border_color_hover');
		$alt_shopping_cart_btn_radius = fw_get_db_settings_option('alt_shopping_cart_btn_radius');
		$shopping_cart_dropdown_border_switch = fw_get_db_settings_option('shopping_cart_dropdown_border/shopping_cart_dropdown_border_switch');
		$shopping_cart_dropdown_border_color = fw_get_db_settings_option('shopping_cart_dropdown_border/enabled/shopping_cart_dropdown_border_color');
	    
		// Catalog Options
		$product_catalog_title_font = fw_get_db_settings_option('product_catalog_title_font');
		$product_catalog_icon_bg = fw_get_db_settings_option('product_catalog_icon_bg');
		$product_catalog_item_switch = fw_get_db_settings_option('product_catalog_item_border/product_category_item_switch');
		$product_catalog_item_border_weight = fw_get_db_settings_option('product_catalog_item_border/enabled/product_catalog_item_border_weight');
		$product_catalog_item_border_color = fw_get_db_settings_option('product_catalog_item_border/enabled/product_catalog_item_border_color');
		$product_category_title_font = fw_get_db_settings_option('product_category_title_font');
		$product_category_counter_font = fw_get_db_settings_option('product_category_counter_font');
		$product_category_item_color = fw_get_db_settings_option('product_category_item_color');
		$product_category_item_hover_color = fw_get_db_settings_option('product_category_item_hover_color');
		$product_category_item_switch = fw_get_db_settings_option('product_category_item_border/product_category_item_switch');
		$product_category_item_border_weight = fw_get_db_settings_option('product_category_item_border/enabled/product_category_item_border_weight');
		$product_category_item_border_color = fw_get_db_settings_option('product_category_item_border/enabled/product_category_item_border_color');
		
		// Product Options
		$product_post_title_font = fw_get_db_settings_option('product_post_title_font');
		$product_post_heading_font = fw_get_db_settings_option('product_post_heading_font');
		$product_post_tab_btn_font = fw_get_db_settings_option('product_post_tab_btn_font');
		$product_post_tab_btn_color = fw_get_db_settings_option('product_post_tab_btn_color');
		$product_post_tab_btn_active_color = fw_get_db_settings_option('product_post_tab_btn_active_color');
		$product_post_review_author_font = fw_get_db_settings_option('product_post_review_author_font');
		
		// Checkout Options
		$shop_checkout_heading_font = fw_get_db_settings_option('shop_checkout_heading_font');
		
		// Cart Options
		$shop_cart_heading_font = fw_get_db_settings_option('shop_cart_heading_font');
		$shop_cart_remove_btn = fw_get_db_settings_option('shop_cart_remove_btn');
		$shop_cart_remove_btn_hover = fw_get_db_settings_option('shop_cart_remove_btn_hover');
		$shop_cart_product_title = fw_get_db_settings_option('shop_cart_product_title');
		
		// Widget Options
		$prodcut_widget_title_font = fw_get_db_settings_option('prodcut_widget_title_font');
		$prodcut_widget_btn = fw_get_db_settings_option('prodcut_widget_btn');
		$prodcut_widget_btn_hover = fw_get_db_settings_option('prodcut_widget_btn_hover');
		$search_widget_btn_color = fw_get_db_settings_option('search_widget_btn_color');
		$search_widget_btn_hover_color = fw_get_db_settings_option('search_widget_btn_hover_color');
		
		$custom_css = '';
		
		// Widget Options
        if($prodcut_widget_title_font){
        
			$current_style = $prodcut_widget_title_font['variation'];

			if ( $current_style === 'regular' ) {
                $current_style = '400';
            }
            if ( $current_style == 'italic' ) {
                $current_style = '400italic';
            }
            
			if($prodcut_widget_title_font['style']){
				$font_style  = 'font-style: '. $prodcut_widget_title_font['style'] .';';
			}else{
				$font_style  = ( strpos( $current_style, 'italic' ) ) ? 'font-style: italic;' : 'font-style: normal;';
			}
			
			if($prodcut_widget_title_font['weight']){
				$font_weight  = 'font-weight: '. $prodcut_widget_title_font['weight'] .';';
			}else{
				$font_weight = 'font-weight: ' . intval( $current_style ) . ';';
			}
			
	        $custom_css .= '
	        .woocommerce ul.cart_list li a,
	        .woocommerce ul.product_list_widget li a{
	            font-family: '. esc_html($prodcut_widget_title_font['family']) .';
	        	'. esc_html($font_style) .'
	        	'. esc_html($font_weight) .'
	        	font-size: '. esc_html($prodcut_widget_title_font['size']) .'px;
	            letter-spacing: '. esc_html($prodcut_widget_title_font['letter-spacing']) .'px;
	            color: '. esc_html($prodcut_widget_btn) .';
	        }';
        }
        $custom_css .= '
        .woocommerce ul.cart_list li a:hover,
        .woocommerce ul.product_list_widget li a:hover{
        	color: '. esc_html($prodcut_widget_btn_hover) .';
        }';
        $custom_css .= '
        .woocommerce ul.cart_list li:hover img,
        .woocommerce ul.product_list_widget li:hover img{
        	border-color: '. esc_html($prodcut_widget_btn_hover) .';
        }';
        $custom_css .= '
        .woocommerce .widget_price_filter .price_slider_wrapper .ui-widget-content{
        	background-color: '. esc_html($prodcut_widget_btn_hover) .';
        }';
		
		// Product Options
        if($product_post_title_font){
        
			$current_style = $product_post_title_font['variation'];

			if ( $current_style === 'regular' ) {
                $current_style = '400';
            }
            if ( $current_style == 'italic' ) {
                $current_style = '400italic';
            }
            
			if($product_post_title_font['style']){
				$font_style  = 'font-style: '. $product_post_title_font['style'] .';';
			}else{
				$font_style  = ( strpos( $current_style, 'italic' ) ) ? 'font-style: italic;' : 'font-style: normal;';
			}
			
			if($product_post_title_font['weight']){
				$font_weight  = 'font-weight: '. $product_post_title_font['weight'] .';';
			}else{
				$font_weight = 'font-weight: ' . intval( $current_style ) . ';';
			}
			
	        $custom_css .= '
	        .woocommerce div.product .product_title{
	            font-family: '. esc_html($product_post_title_font['family']) .';
	        	'. esc_html($font_style) .'
	        	'. esc_html($font_weight) .'
	        	font-size: '. esc_html($product_post_title_font['size']) .'px;
	            letter-spacing: '. esc_html($product_post_title_font['letter-spacing']) .'px;
	            color: '. esc_html($product_post_title_font['color']) .';
	        }';
        }
        if($product_post_heading_font){
        
			$current_style = $product_post_heading_font['variation'];

			if ( $current_style === 'regular' ) {
                $current_style = '400';
            }
            if ( $current_style == 'italic' ) {
                $current_style = '400italic';
            }
            
			if($product_post_heading_font['style']){
				$font_style  = 'font-style: '. $product_post_heading_font['style'] .';';
			}else{
				$font_style  = ( strpos( $current_style, 'italic' ) ) ? 'font-style: italic;' : 'font-style: normal;';
			}
			
			if($product_post_heading_font['weight']){
				$font_weight  = 'font-weight: '. $product_post_heading_font['weight'] .';';
			}else{
				$font_weight = 'font-weight: ' . intval( $current_style ) . ';';
			}
			
	        $custom_css .= '
	        .woocommerce div.product .woocommerce-tabs .panel h2,
	        .inner-product-post .upsells.products h2,
	        .inner-product-post .related.products h2{
	            font-family: '. esc_html($product_post_heading_font['family']) .';
	        	'. esc_html($font_style) .'
	        	'. esc_html($font_weight) .'
	        	font-size: '. esc_html($product_post_heading_font['size']) .'px;
	            letter-spacing: '. esc_html($product_post_heading_font['letter-spacing']) .'px;
	            color: '. esc_html($product_post_heading_font['color']) .';
	        }';
        }
        if($product_post_tab_btn_font){
        
			$current_style = $product_post_tab_btn_font['variation'];

			if ( $current_style === 'regular' ) {
                $current_style = '400';
            }
            if ( $current_style == 'italic' ) {
                $current_style = '400italic';
            }
            
			if($product_post_tab_btn_font['style']){
				$font_style  = 'font-style: '. $product_post_tab_btn_font['style'] .';';
			}else{
				$font_style  = ( strpos( $current_style, 'italic' ) ) ? 'font-style: italic;' : 'font-style: normal;';
			}
			
			if($product_post_tab_btn_font['weight']){
				$font_weight  = 'font-weight: '. $product_post_tab_btn_font['weight'] .';';
			}else{
				$font_weight = 'font-weight: ' . intval( $current_style ) . ';';
			}
			
	        $custom_css .= '
	        .woocommerce div.product .woocommerce-tabs ul.tabs li a{
	            font-family: '. esc_html($product_post_tab_btn_font['family']) .';
	        	'. esc_html($font_style) .'
	        	'. esc_html($font_weight) .'
	        	font-size: '. esc_html($product_post_tab_btn_font['size']) .'px;
	            letter-spacing: '. esc_html($product_post_tab_btn_font['letter-spacing']) .'px;
	            color: '. esc_html($product_post_tab_btn_color) .';
	        }';
        }
        $custom_css .= '
        .woocommerce div.product .woocommerce-tabs ul.tabs li.active a{
        	color: '. esc_html($product_post_tab_btn_active_color) .';
        }';
        if($product_post_review_author_font){
        
			$current_style = $product_post_review_author_font['variation'];

			if ( $current_style === 'regular' ) {
                $current_style = '400';
            }
            if ( $current_style == 'italic' ) {
                $current_style = '400italic';
            }
            
			if($product_post_review_author_font['style']){
				$font_style  = 'font-style: '. $product_post_review_author_font['style'] .';';
			}else{
				$font_style  = ( strpos( $current_style, 'italic' ) ) ? 'font-style: italic;' : 'font-style: normal;';
			}
			
			if($product_post_review_author_font['weight']){
				$font_weight  = 'font-weight: '. $product_post_review_author_font['weight'] .';';
			}else{
				$font_weight = 'font-weight: ' . intval( $current_style ) . ';';
			}
			
	        $custom_css .= '
	        .woocommerce #reviews #comments ol.commentlist li .meta strong{
	            font-family: '. esc_html($product_post_review_author_font['family']) .';
	        	'. esc_html($font_style) .'
	        	'. esc_html($font_weight) .'
	        	font-size: '. esc_html($product_post_review_author_font['size']) .'px;
	            letter-spacing: '. esc_html($product_post_review_author_font['letter-spacing']) .'px;
	            color: '. esc_html($product_post_review_author_font['color']) .';
	        }';
        }
		
		// Shop Options
        if($shop_price_font){
        
			$current_style = $shop_price_font['variation'];

			if ( $current_style === 'regular' ) {
                $current_style = '400';
            }
            if ( $current_style == 'italic' ) {
                $current_style = '400italic';
            }
            
			if($shop_price_font['style']){
				$font_style  = 'font-style: '. $shop_price_font['style'] .';';
			}else{
				$font_style  = ( strpos( $current_style, 'italic' ) ) ? 'font-style: italic;' : 'font-style: normal;';
			}
			
			if($shop_price_font['weight']){
				$font_weight  = 'font-weight: '. $shop_price_font['weight'] .' !important;';
			}else{
				$font_weight = 'font-weight: ' . intval( $current_style ) . ' !important;';
			}
			
	        $custom_css .= '
	        .woocommerce ul.cart_list li .priceWrap, .woocommerce ul.product_list_widget li .priceWrap,
	        .woocommerce div.product p.price, .woocommerce div.product span.price,
	        .woocommerce ul.products li.product .price, .woocommerce ul.products li.product .price ins{
	            font-family: '. esc_html($shop_price_font['family']) .';
	        	'. esc_html($font_style) .'
	        	'. esc_html($font_weight) .'
	            letter-spacing: '. esc_html($shop_price_font['letter-spacing']) .'px;
	            color: '. esc_html($shop_price_font['color']) .';
	        }';
        }
        $custom_css .= '
        .woocommerce .star-rating span::before{
        	color: '. esc_html($shop_rating_color) .';
        }';
        if($shop_btn_text){
        
			$current_style = $shop_btn_text['variation'];

			if ( $current_style === 'regular' ) {
                $current_style = '400';
            }
            if ( $current_style == 'italic' ) {
                $current_style = '400italic';
            }
            
			if($shop_btn_text['style']){
				$font_style  = 'font-style: '. $shop_btn_text['style'] .';';
			}else{
				$font_style  = ( strpos( $current_style, 'italic' ) ) ? 'font-style: italic;' : 'font-style: normal;';
			}
			
			if($shop_btn_text['weight']){
				$font_weight  = 'font-weight: '. $shop_btn_text['weight'] .';';
			}else{
				$font_weight = 'font-weight: ' . intval( $current_style ) . ';';
			}
			
	        $custom_css .= '
	        .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button{
	            font-family: '. esc_html($shop_btn_text['family']) .';
	        	'. esc_html($font_style) .'
	        	'. esc_html($font_weight) .'
	            letter-spacing: '. esc_html($shop_btn_text['letter-spacing']) .'px;
	            color: '. esc_html($shop_btn_color) .';
	            background-color: '. esc_html($shop_btn_background_color) .';
	            border-color: '. esc_html($shop_btn_border_color) .'; 
	        }';
        }
        $custom_css .= '
        .woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover{
        	color: '. esc_html($shop_btn_color_hover) .';
        	background-color: '. esc_html($shop_btn_background_color_hover) .';
        	border-color: '. esc_html($shop_btn_border_color_hover) .';  
        }';
        $custom_css .= '
		.woocommerce #respond input#submit.alt.disabled, .woocommerce #respond input#submit.alt.disabled:hover, .woocommerce #respond input#submit.alt:disabled, .woocommerce #respond input#submit.alt:disabled:hover, .woocommerce #respond input#submit.alt:disabled[disabled], .woocommerce #respond input#submit.alt:disabled[disabled]:hover, .woocommerce a.button.alt.disabled, .woocommerce a.button.alt.disabled:hover, .woocommerce a.button.alt:disabled, .woocommerce a.button.alt:disabled:hover, .woocommerce a.button.alt:disabled[disabled], .woocommerce a.button.alt:disabled[disabled]:hover, .woocommerce button.button.alt.disabled, .woocommerce button.button.alt.disabled:hover, .woocommerce button.button.alt:disabled, .woocommerce button.button.alt:disabled:hover, .woocommerce button.button.alt:disabled[disabled], .woocommerce button.button.alt:disabled[disabled]:hover, .woocommerce input.button.alt.disabled, .woocommerce input.button.alt.disabled:hover, .woocommerce input.button.alt:disabled, .woocommerce input.button.alt:disabled:hover, .woocommerce input.button.alt:disabled[disabled], .woocommerce input.button.alt:disabled[disabled]:hover,
        .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt{
        	color: '. esc_html($alt_shop_btn_color) .';
        	background-color: '. esc_html($alt_shop_btn_background_color) .';
        	border-color: '. esc_html($alt_shop_btn_border_color) .';
        }';
        $custom_css .= '
		.woocommerce #respond input#submit.disabled:hover, .woocommerce #respond input#submit:disabled:hover, .woocommerce #respond input#submit:disabled[disabled]:hover, .woocommerce a.button.disabled:hover, .woocommerce a.button:disabled:hover, .woocommerce a.button:disabled[disabled]:hover, .woocommerce button.button.disabled:hover, .woocommerce button.button:disabled:hover, .woocommerce button.button:disabled[disabled]:hover, .woocommerce input.button.disabled:hover, .woocommerce input.button:disabled:hover, .woocommerce input.button:disabled[disabled]:hover,
        .woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover{
        	color: '. esc_html($alt_shop_btn_color_hover) .';
        	background-color: '. esc_html($alt_shop_btn_background_color_hover) .';
        	border-color: '. esc_html($alt_shop_btn_border_color_hover) .';
        }';
        $custom_css .= '
		.woocommerce a.button.alt.disabled, .woocommerce a.button.alt.disabled:hover, .woocommerce a.button.alt:disabled, .woocommerce a.button.alt:disabled:hover, .woocommerce a.button.alt:disabled[disabled], .woocommerce a.button.alt:disabled[disabled]:hover, .woocommerce button.button.alt.disabled, .woocommerce button.button.alt.disabled:hover, .woocommerce button.button.alt:disabled, .woocommerce button.button.alt:disabled:hover, .woocommerce button.button.alt:disabled[disabled], .woocommerce button.button.alt:disabled[disabled]:hover{
        	background-color: '. esc_html($alt_shop_btn_background_color) .';
        }';
		if($shop_btn_overlay_effect=='enabled'){
	        $custom_css .= '
			.lpd_btn_overlay{
				position: relative !important;
				overflow: hidden !important;
				z-index: 1;
			}
			.lpd_btn_overlay:after{
				content: "";
				position: absolute;
				display: block;
				top: 0;
				left: 50%;
				-webkit-transform: translateX(-50%);
				transform: translateX(-50%);
				width: 0;
				height: 100%;
				z-index: -1;
				-webkit-transition: width 200ms ease-in-out;
				transition: width 200ms ease-in-out;
			}
			.lpd_btn_overlay:hover:after {
				width: 110%;
			}
	        .lpd_btn_overlay:after{
	        	background-color: '. esc_html($shop_btn_background_color_hover) .';
	        }
	        .lpd_btn_overlay:hover{
				 background-color: '. esc_html($shop_btn_background_color) .' !important;
			}
	        .alt.lpd_btn_overlay:after{
	        	background-color: '. esc_html($alt_shop_btn_background_color_hover) .';
	        }
	        .alt.lpd_btn_overlay:hover{
				 background-color: '. esc_html($alt_shop_btn_background_color) .' !important;
			}
			';
        }
        
        if($shop_sale_font){
        
			$current_style = $shop_sale_font['variation'];

			if ( $current_style === 'regular' ) {
                $current_style = '400';
            }
            if ( $current_style == 'italic' ) {
                $current_style = '400italic';
            }
            
			if($shop_sale_font['style']){
				$font_style  = 'font-style: '. $shop_sale_font['style'] .';';
			}else{
				$font_style  = ( strpos( $current_style, 'italic' ) ) ? 'font-style: italic;' : 'font-style: normal;';
			}
			
			if($shop_sale_font['weight']){
				$font_weight  = 'font-weight: '. $shop_sale_font['weight'] .';';
			}else{
				$font_weight = 'font-weight: ' . intval( $current_style ) . ';';
			}
			
	        $custom_css .= '
	        .woocommerce span.onsale{
	            font-family: '. esc_html($shop_sale_font['family']) .';
	        	'. esc_html($font_style) .'
	        	'. esc_html($font_weight) .'
	        	font-size: '. esc_html($shop_sale_font['size']) .'px;
	            letter-spacing: '. esc_html($shop_sale_font['letter-spacing']) .'px;
	            background-color: '. esc_html($shop_sale_color) .'; 
	        }';
        }
        if($shop_out_font){
        
			$current_style = $shop_out_font['variation'];

			if ( $current_style === 'regular' ) {
                $current_style = '400';
            }
            if ( $current_style == 'italic' ) {
                $current_style = '400italic';
            }
            
			if($shop_out_font['style']){
				$font_style  = 'font-style: '. $shop_out_font['style'] .';';
			}else{
				$font_style  = ( strpos( $current_style, 'italic' ) ) ? 'font-style: italic;' : 'font-style: normal;';
			}
			
			if($shop_out_font['weight']){
				$font_weight  = 'font-weight: '. $shop_out_font['weight'] .';';
			}else{
				$font_weight = 'font-weight: ' . intval( $current_style ) . ';';
			}
			
	        $custom_css .= '
	        .woocommerce span.lpd-out-of-s{
	            font-family: '. esc_html($shop_out_font['family']) .';
	        	'. esc_html($font_style) .'
	        	'. esc_html($font_weight) .'
	        	font-size: '. esc_html($shop_out_font['size']) .'px;
	            letter-spacing: '. esc_html($shop_out_font['letter-spacing']) .'px;
	            background-color: '. esc_html($shop_out_color) .'; 
	        }';
        }
		if($shop_form_label_font){
        
			$current_style = $shop_form_label_font['variation'];

			if ( $current_style === 'regular' ) {
                $current_style = '400';
            }
            if ( $current_style == 'italic' ) {
                $current_style = '400italic';
            }
            
			if($shop_form_label_font['style']){
				$font_style  = 'font-style: '. $shop_form_label_font['style'] .';';
			}else{
				$font_style  = ( strpos( $current_style, 'italic' ) ) ? 'font-style: italic;' : 'font-style: normal;';
			}
			
			if($shop_form_label_font['weight']){
				$font_weight  = 'font-weight: '. $shop_form_label_font['weight'] .';';
			}else{
				$font_weight = 'font-weight: ' . intval( $current_style ) . ';';
			}
			
	        $custom_css .= '
	        .woocommerce form .form-row label,
			.woocommerce #review_form .comment-form label{
	            font-family: '. esc_html($shop_form_label_font['family']) .';
	        	'. esc_html($font_style) .'
	        	'. esc_html($font_weight) .'
	            font-size: '. esc_html($shop_form_label_font['size']) .'px;
	            letter-spacing: '. esc_html($shop_form_label_font['letter-spacing']) .'px;
	        }';
        }
		 
		// Shopping Cart
        if($shopping_cart_btn_text){
        
			$current_style = $shopping_cart_btn_text['variation'];

			if ( $current_style === 'regular' ) {
                $current_style = '400';
            }
            if ( $current_style == 'italic' ) {
                $current_style = '400italic';
            }
            
			if($shopping_cart_btn_text['style']){
				$font_style  = 'font-style: '. $shopping_cart_btn_text['style'] .';';
			}else{
				$font_style  = ( strpos( $current_style, 'italic' ) ) ? 'font-style: italic;' : 'font-style: normal;';
			}
			
			if($shopping_cart_btn_text['weight']){
				$font_weight  = 'font-weight: '. $shopping_cart_btn_text['weight'] .';';
			}else{
				$font_weight = 'font-weight: ' . intval( $current_style ) . ';';
			}
			
	        $custom_css .= '
	        .woocommerce .shopping-cart-dropdown a.button{
	            font-family: '. esc_html($shopping_cart_btn_text['family']) .';
	        	'. esc_html($font_style) .'
	        	'. esc_html($font_weight) .'
	            letter-spacing: '. esc_html($shopping_cart_btn_text['letter-spacing']) .'px;
	            color: '. esc_html($shopping_cart_btn_color) .';
	            background-color: '. esc_html($shopping_cart_btn_background_color) .';
	        	-webkit-border-radius: '. esc_html($shopping_cart_btn_radius) .'px;
	        	-moz-border-radius: '. esc_html($shopping_cart_btn_radius) .'px;
	        	border-radius: '. esc_html($shopping_cart_btn_radius) .'px;
	        	border-color: '. esc_html($shopping_cart_btn_border_color) .';
	        }';
        }
        $custom_css .= '
        .woocommerce .shopping-cart-dropdown a.button:hover{
        	color: '. esc_html($shopping_cart_btn_color_hover) .';
        	background-color: '. esc_html($shopping_cart_btn_background_color_hover) .';
        	border-color: '. esc_html($shopping_cart_btn_border_color_hover) .';
        }';
        $custom_css .= '
		.woocommerce .shopping-cart-dropdown a.button.alt{
        	color: '. esc_html($alt_shopping_cart_btn_color) .';
        	background-color: '. esc_html($alt_shopping_cart_btn_background_color) .';
        	-webkit-border-radius: '. esc_html($alt_shopping_cart_btn_radius) .'px;
        	-moz-border-radius: '. esc_html($alt_shopping_cart_btn_radius) .'px;
        	border-radius: '. esc_html($alt_shopping_cart_btn_radius) .'px;
        	border-color: '. esc_html($alt_shopping_cart_btn_border_color) .';
        }';
        $custom_css .= '
		.woocommerce .shopping-cart-dropdown a.button.alt:hover{
        	color: '. esc_html($alt_shopping_cart_btn_color_hover) .';
        	background-color: '. esc_html($alt_shopping_cart_btn_background_color_hover) .';
        	border-color: '. esc_html($alt_shopping_cart_btn_border_color_hover) .';
        }';
		if($shopping_cart_btn_overlay_effect=='enabled'){
	        $custom_css .= '
			.woocommerce .shopping-cart-dropdown a.button{
				position: relative !important;
				overflow: hidden !important;
				z-index: 1;
			}
			.woocommerce .shopping-cart-dropdown a.button:after{
				content: "";
				position: absolute;
				display: block;
				top: 0;
				left: 50%;
				-webkit-transform: translateX(-50%);
				transform: translateX(-50%);
				width: 0;
				height: 100%;
				z-index: -1;
				-webkit-transition: width 200ms ease-in-out;
				transition: width 200ms ease-in-out;
			}
			.woocommerce .shopping-cart-dropdown a.button:hover:after {
				width: 110%;
			}
	        .woocommerce .shopping-cart-dropdown a.button:after{
	        	background-color: '. esc_html($shopping_cart_btn_background_color_hover) .';
	        }
	        .woocommerce .shopping-cart-dropdown a.button:hover{
				 background-color: '. esc_html($shopping_cart_btn_background_color) .' !important;
			}
	        .woocommerce .shopping-cart-dropdown a.button.alt:after{
	        	background-color: '. esc_html($alt_shopping_cart_btn_background_color_hover) .';
	        }
	        .woocommerce .shopping-cart-dropdown a.button.alt:hover{
				 background-color: '. esc_html($alt_shopping_cart_btn_background_color) .' !important;
			}';
        }
		if($shopping_cart_dropdown_border_switch=='enabled'){
	        $custom_css .= '
	        .shopping-cart-dropdown-border .shopping-cart-dropdown:after{
	        	background-color: '. esc_html($shopping_cart_dropdown_border_color) .';
	        }';
        }
			
        // Catalog Options
        if($product_catalog_title_font){
        
			$current_style = $product_catalog_title_font['variation'];

			if ( $current_style === 'regular' ) {
                $current_style = '400';
            }
            if ( $current_style == 'italic' ) {
                $current_style = '400italic';
            }
            
			if($product_catalog_title_font['style']){
				$font_style  = 'font-style: '. $product_catalog_title_font['style'] .';';
			}else{
				$font_style  = ( strpos( $current_style, 'italic' ) ) ? 'font-style: italic;' : 'font-style: normal;';
			}
			
			if($product_catalog_title_font['weight']){
				$font_weight  = 'font-weight: '. $product_catalog_title_font['weight'] .';';
			}else{
				$font_weight = 'font-weight: ' . intval( $current_style ) . ';';
			}
			
	        $custom_css .= '
	        .woocommerce ul.products li.product .woocommerce-loop-product__title{
	            font-family: '. esc_html($product_catalog_title_font['family']) .';
	        	'. esc_html($font_style) .'
	        	'. esc_html($font_weight) .'
	            font-size: '. esc_html($product_catalog_title_font['size']) .'px;
	            letter-spacing: '. esc_html($product_catalog_title_font['letter-spacing']) .'px;
	            color: '. esc_html($product_catalog_title_font['color']) .';
	        }';
        }
		if($product_catalog_item_switch=='enabled'){
	        $custom_css .= '
	        .woocommerce ul.products li.product .productWrap{
	        	border: '. esc_html($product_catalog_item_border_weight) .'px solid;
	        	border-color: '. esc_html($product_catalog_item_border_color) .';
	        }';
        }
        if($product_category_title_font){
        
			$current_style = $product_category_title_font['variation'];

			if ( $current_style === 'regular' ) {
                $current_style = '400';
            }
            if ( $current_style == 'italic' ) {
                $current_style = '400italic';
            }
            
			if($product_category_title_font['style']){
				$font_style  = 'font-style: '. $product_category_title_font['style'] .';';
			}else{
				$font_style  = ( strpos( $current_style, 'italic' ) ) ? 'font-style: italic;' : 'font-style: normal;';
			}
			
			if($product_catalog_title_font['weight']){
				$font_weight  = 'font-weight: '. $product_category_title_font['weight'] .';';
			}else{
				$font_weight = 'font-weight: ' . intval( $current_style ) . ';';
			}
			
	        $custom_css .= '
	        .woocommerce ul.products li.product-category h3{
	            font-family: '. esc_html($product_category_title_font['family']) .';
	        	'. esc_html($font_style) .'
	        	'. esc_html($font_weight) .'
	            font-size: '. esc_html($product_category_title_font['size']) .'px;
	            letter-spacing: '. esc_html($product_category_title_font['letter-spacing']) .'px;
	        }';
        }
        $custom_css .= '
        .woocommerce ul.products li.product-category a h3{
        	background-color: '. esc_html($product_category_item_color) .';
        }';
        $custom_css .= '
        .woocommerce ul.products li.product-category a:hover h3{
        	background-color: '. esc_html($product_category_item_hover_color) .';
        }';
        if($product_category_counter_font){
        
			$current_style = $product_category_counter_font['variation'];

			if ( $current_style === 'regular' ) {
                $current_style = '400';
            }
            if ( $current_style == 'italic' ) {
                $current_style = '400italic';
            }
            
			if($product_category_counter_font['style']){
				$font_style  = 'font-style: '. $product_category_counter_font['style'] .';';
			}else{
				$font_style  = ( strpos( $current_style, 'italic' ) ) ? 'font-style: italic;' : 'font-style: normal;';
			}
			
			if($product_category_counter_font['weight']){
				$font_weight  = 'font-weight: '. $product_category_counter_font['weight'] .';';
			}else{
				$font_weight = 'font-weight: ' . intval( $current_style ) . ';';
			}
			
	        $custom_css .= '
	        .woocommerce ul.products li.product-category mark{
	            font-family: '. esc_html($product_category_counter_font['family']) .';
	        	'. esc_html($font_style) .'
	        	'. esc_html($font_weight) .'
	            font-size: '. esc_html($product_category_counter_font['size']) .'px;
	            letter-spacing: '. esc_html($product_category_counter_font['letter-spacing']) .'px;
	            background-color: '. esc_html($product_category_item_color) .';
	        }';
	        $custom_css .= '
	        .woocommerce ul.products li.product-category a:hover mark{
	            background-color: '. esc_html($product_category_item_hover_color) .';
	        }';
        }
		if($product_category_item_switch=='enabled'){
	        $custom_css .= '
	        .woocommerce ul.products li.product-category a{
	        	border: '. esc_html($product_category_item_border_weight) .'px solid;
	        	border-color: '. esc_html($product_category_item_border_color) .';
	        }';
        }
        
        // Checkout Options
        if($shop_checkout_heading_font){
        
			$current_style = $shop_checkout_heading_font['variation'];

			if ( $current_style === 'regular' ) {
                $current_style = '400';
            }
            if ( $current_style == 'italic' ) {
                $current_style = '400italic';
            }
            
			if($shop_checkout_heading_font['style']){
				$font_style  = 'font-style: '. $shop_checkout_heading_font['style'] .';';
			}else{
				$font_style  = ( strpos( $current_style, 'italic' ) ) ? 'font-style: italic;' : 'font-style: normal;';
			}
			
			if($shop_checkout_heading_font['weight']){
				$font_weight  = 'font-weight: '. $shop_checkout_heading_font['weight'] .';';
			}else{
				$font_weight = 'font-weight: ' . intval( $current_style ) . ';';
			}
			
	        $custom_css .= '
	        .woocommerce-billing-fields h3,
	        .woocommerce-checkout-review-order #order_review_heading,
	        .woocommerce-shipping-fields #ship-to-different-address{
	            font-family: '. esc_html($shop_checkout_heading_font['family']) .';
	        	'. esc_html($font_style) .'
	        	'. esc_html($font_weight) .'
	        	font-size: '. esc_html($shop_checkout_heading_font['size']) .'px;
	            letter-spacing: '. esc_html($shop_checkout_heading_font['letter-spacing']) .'px;
	            color: '. esc_html($shop_checkout_heading_font['color']) .';
	        }';
        }

        // Cart Options
        if($shop_cart_heading_font){
        
			$current_style = $shop_cart_heading_font['variation'];

			if ( $current_style === 'regular' ) {
                $current_style = '400';
            }
            if ( $current_style == 'italic' ) {
                $current_style = '400italic';
            }
            
			if($shop_cart_heading_font['style']){
				$font_style  = 'font-style: '. $shop_cart_heading_font['style'] .';';
			}else{
				$font_style  = ( strpos( $current_style, 'italic' ) ) ? 'font-style: italic;' : 'font-style: normal;';
			}
			
			if($shop_cart_heading_font['weight']){
				$font_weight  = 'font-weight: '. $shop_cart_heading_font['weight'] .';';
			}else{
				$font_weight = 'font-weight: ' . intval( $current_style ) . ';';
			}
			
	        $custom_css .= '
	        .cross-sells h2,
	        .woocommerce-cart .shipping-calculator-button,
	        .woocommerce-cart .cart_totals h2,
	        .inner-cart-page .coupon label{
	            font-family: '. esc_html($shop_cart_heading_font['family']) .';
	        	'. esc_html($font_style) .'
	        	'. esc_html($font_weight) .'
	        	font-size: '. esc_html($shop_cart_heading_font['size']) .'px;
	            letter-spacing: '. esc_html($shop_cart_heading_font['letter-spacing']) .'px;
	            color: '. esc_html($shop_cart_heading_font['color']) .';
	        }';
        }
        $custom_css .= '
        .woocommerce a.remove{
        	background-color: '. esc_html($shop_cart_remove_btn) .';
        }';
        $custom_css .= '
        .woocommerce a.remove:hover{
        	background-color: '. esc_html($shop_cart_remove_btn_hover) .';
        }';
        if($shop_cart_product_title){
        
			$current_style = $shop_cart_product_title['variation'];

			if ( $current_style === 'regular' ) {
                $current_style = '400';
            }
            if ( $current_style == 'italic' ) {
                $current_style = '400italic';
            }
            
			if($shop_cart_product_title['style']){
				$font_style  = 'font-style: '. $shop_cart_product_title['style'] .';';
			}else{
				$font_style  = ( strpos( $current_style, 'italic' ) ) ? 'font-style: italic;' : 'font-style: normal;';
			}
			
			if($shop_cart_product_title['weight']){
				$font_weight  = 'font-weight: '. $shop_cart_product_title['weight'] .';';
			}else{
				$font_weight = 'font-weight: ' . intval( $current_style ) . ';';
			}
			
	        $custom_css .= '
	        .woocommerce-cart table.cart td.product-name a{
	            font-family: '. esc_html($shop_cart_product_title['family']) .';
	        	'. esc_html($font_style) .'
	        	'. esc_html($font_weight) .'
	        	font-size: '. esc_html($shop_cart_product_title['size']) .'px;
	            letter-spacing: '. esc_html($shop_cart_product_title['letter-spacing']) .'px;
	            color: '. esc_html($shop_cart_product_title['color']) .';
	        }';
        }
        
        $custom_css = trim(preg_replace('/\s+/', ' ', $custom_css));
        	
		wp_add_inline_style( 'naslaan_woocommerce-general', $custom_css );
			
	}
	
	function naslaan_custom_css_blog(){

	    if (!defined('FW')) return; // prevent fatal error when the framework is not active
		
		// Blog Options							
		$blog_post_link_color = fw_get_db_settings_option('blog_post_link_color');
		$blog_post_hover_color = fw_get_db_settings_option('blog_post_hover_color');
		$blog_post_title = fw_get_db_settings_option('blog_post_title');
		$blog_post_title_link_color = fw_get_db_settings_option('blog_post_title_link_color');
		$blog_post_title_hover_link_color = fw_get_db_settings_option('blog_post_title_hover_link_color');
		$blog_post_meta_font = fw_get_db_settings_option('blog_post_meta_font');
		$more_btn_font = fw_get_db_settings_option('more_btn_font');
		$more_btn_color = fw_get_db_settings_option('more_btn_color');
		$more_btn_hover_color = fw_get_db_settings_option('more_btn_hover_color');
		$more_btn_bg_color = fw_get_db_settings_option('more_btn_bg_color');
		$more_btn_bg_hover_color = fw_get_db_settings_option('more_btn_bg_hover_color');
		$more_btn_border_color = fw_get_db_settings_option('more_btn_border_color');
		$more_btn_border_hover_color = fw_get_db_settings_option('more_btn_border_hover_color');
		$thumbnail_overlay_bg = fw_get_db_settings_option('thumbnail_overlay_bg');
		$thumbnail_overlay_btn = fw_get_db_settings_option('thumbnail_overlay_btn');
		$thumbnail_overlay_btn_hover = fw_get_db_settings_option('thumbnail_overlay_btn_hover');
		
		$blog_post_date_font_m = fw_get_db_settings_option('blog_post_date_font_m');
		$blog_post_date_font_d = fw_get_db_settings_option('blog_post_date_font_d');
		$blog_post_date_bg = fw_get_db_settings_option('blog_post_date_bg');
		
		// Post Options							
		$post_link_color = fw_get_db_settings_option('post_link_color');
		$post_link_hover_color = fw_get_db_settings_option('post_link_hover_color');
		$post_meta_font = fw_get_db_settings_option('post_meta_font');
		$post_author_font = fw_get_db_settings_option('post_author_font');
	    $post_navigation_btn_font = fw_get_db_settings_option('post_navigation_btn_font');
	    $post_navigation_btn_link_color = fw_get_db_settings_option('post_navigation_btn_link_color');
	    $post_navigation_btn_hover_link_color = fw_get_db_settings_option('post_navigation_btn_hover_link_color');   
		
		// Related Post Options
		$related_post_thumb_overlay_color = fw_get_db_settings_option('related_post_thumb_overlay_color');
		$related_post_thumb_btn_color = fw_get_db_settings_option('related_post_thumb_btn_color');
		$related_post_thumb_btn_hover_color = fw_get_db_settings_option('related_post_thumb_btn_hover_color');
		$related_post_title = fw_get_db_settings_option('related_post_title');
		$related_post_title_color = fw_get_db_settings_option('related_post_title_color');
		$related_post_title_hover_color = fw_get_db_settings_option('related_post_title_hover_color');
		$related_post_switch = fw_get_db_settings_option('related_post_meta/related_post_switch');
		$related_post_meta= fw_get_db_settings_option('related_post_meta/enabled/related_post_meta_font');
		
		// Comments Options	
		$comment_link_color = fw_get_db_settings_option('comment_link_color');
		$comment_link_hover_color = fw_get_db_settings_option('comment_link_hover_color');
		$comment_author_font = fw_get_db_settings_option('comment_author_font');
		$comment_reply_font = fw_get_db_settings_option('comment_reply_font');
		$comment_reply_btn_color = fw_get_db_settings_option('comment_reply_btn_color');
		$comment_reply_btn_hover_color = fw_get_db_settings_option('comment_reply_btn_hover_color');
		$comment_form_label_font = fw_get_db_settings_option('comment_form_label_font');
		$comment_form_label_element_color = fw_get_db_settings_option('comment_form_label_element_color');
		$comment_form_btn_text = fw_get_db_settings_option('comment_form_btn_text');
		$comment_form_btn_color = fw_get_db_settings_option('comment_form_btn_color');
		$comment_form_btn_color_hover = fw_get_db_settings_option('comment_form_btn_color_hover');
		$comment_form_btn_background_color = fw_get_db_settings_option('comment_form_btn_background_color');
		$comment_form_btn_background_color_hover = fw_get_db_settings_option('comment_form_btn_background_color_hover');
		$comment_form_btn_border_color = fw_get_db_settings_option('comment_form_btn_border_color');
		$comment_form_btn_border_color_hover = fw_get_db_settings_option('comment_form_btn_border_color_hover');

		$custom_css = '';
		
        // Blog Options
        $custom_css .= '
        .front-blog-post .post a{
        	color: '. esc_html($blog_post_link_color) .';
        }';
        $custom_css .= '
        .front-blog-post .post a:hover{
        	color: '. esc_html($blog_post_hover_color) .';
        }';
        $custom_css .= '
        .front-blog-post .post-title > span{
        	background-color: '. esc_html($blog_post_link_color) .';
        }';
        if($blog_post_title){
        
			$current_style = $blog_post_title['variation'];

			if ( $current_style === 'regular' ) {
                $current_style = '400';
            }
            if ( $current_style == 'italic' ) {
                $current_style = '400italic';
            }
            
			if($blog_post_title['style']){
				$font_style  = 'font-style: '. $blog_post_title['style'] .';';
			}else{
				$font_style  = ( strpos( $current_style, 'italic' ) ) ? 'font-style: italic;' : 'font-style: normal;';
			}
			
			if($blog_post_title['weight']){
				$font_weight  = 'font-weight: '. $blog_post_title['weight'] .';';
			}else{
				$font_weight = 'font-weight: ' . intval( $current_style ) . ';';
			}
			
	        $custom_css .= '
	        .inner-blog-post .post-title > h3,
	        .front-blog-post .post-title > h3{
	            font-family: '. esc_html($blog_post_title['family']) .';
	        	'. esc_html($font_style) .'
	        	'. esc_html($font_weight) .'
	            font-size: '. esc_html($blog_post_title['size']) .'px;
	            letter-spacing: '. esc_html($blog_post_title['letter-spacing']) .'px;
	            color: '. esc_html($blog_post_title['color']) .';
	        }';
        }
        $custom_css .= '
        .front-blog-post .post-title > h3 a{
        	color: '. esc_html($blog_post_title_link_color) .';
        }';
        $custom_css .= '
        .front-blog-post .post-title > h3 a:hover{
        	color: '. esc_html($blog_post_title_hover_link_color) .';
        }';
        if($blog_post_meta_font){
        
			$current_style = $blog_post_meta_font['variation'];

			if ( $current_style === 'regular' ) {
                $current_style = '400';
            }
            if ( $current_style == 'italic' ) {
                $current_style = '400italic';
            }
            
			if($blog_post_meta_font['style']){
				$font_style  = 'font-style: '. $blog_post_meta_font['style'] .';';
			}else{
				$font_style  = ( strpos( $current_style, 'italic' ) ) ? 'font-style: italic;' : 'font-style: normal;';
			}
			
			if($blog_post_meta_font['weight']){
				$font_weight  = 'font-weight: '. $blog_post_meta_font['weight'] .';';
			}else{
				$font_weight = 'font-weight: ' . intval( $current_style ) . ';';
			}
			
	        $custom_css .= '
	        .front-blog-post .post-meta ul li{
	            font-family: '. esc_html($blog_post_meta_font['family']) .';
	        	'. esc_html($font_style) .'
	        	'. esc_html($font_weight) .'
	            font-size: '. esc_html($blog_post_meta_font['size']) .'px;
	            letter-spacing: '. esc_html($blog_post_meta_font['letter-spacing']) .'px;
	        }';
        }
        if($more_btn_font){
        
			$current_style = $more_btn_font['variation'];

			if ( $current_style === 'regular' ) {
                $current_style = '400';
            }
            if ( $current_style == 'italic' ) {
                $current_style = '400italic';
            }
            
			if($more_btn_font['style']){
				$font_style  = 'font-style: '. $more_btn_font['style'] .';';
			}else{
				$font_style  = ( strpos( $current_style, 'italic' ) ) ? 'font-style: italic;' : 'font-style: normal;';
			}
			
			if($more_btn_font['weight']){
				$font_weight  = 'font-weight: '. $more_btn_font['weight'] .';';
			}else{
				$font_weight = 'font-weight: ' . intval( $current_style ) . ';';
			}
			
	        $custom_css .= '
	        .front-blog-post .post-bottom .lpd_t_btn{
	            font-family: '. esc_html($more_btn_font['family']) .';
	        	'. esc_html($font_style) .'
	        	'. esc_html($font_weight) .'
	            font-size: '. esc_html($more_btn_font['size']) .'px;
	            letter-spacing: '. esc_html($more_btn_font['letter-spacing']) .'px;
	            color: '. esc_html($more_btn_color) .';
	            background-color: '. esc_html($more_btn_bg_color) .';
	            border-color: '. esc_html($more_btn_border_color) .';
	        }';
        }
        $custom_css .= '
        .front-blog-post .post-bottom .lpd_t_btn:hover{
        	color: '. esc_html($more_btn_hover_color) .';
        	background-color: '. esc_html($more_btn_bg_hover_color) .';
        	border-color: '. esc_html($more_btn_border_hover_color) .';
        }';
        $custom_css .= '
        .front-blog-post .post-bottom .lpd_t_btn.lpd_t_btn-animated:after{
        	background-color: '. esc_html($more_btn_bg_hover_color) .';
        }
        .front-blog-post .post-bottom .lpd_t_btn.lpd_t_btn-animated:hover{
			 background-color: '. esc_html($more_btn_bg_color) .';
		}
		';
		
		
        if($blog_post_date_font_d){
        
			$current_style = $blog_post_date_font_d['variation'];

			if ( $current_style === 'regular' ) {
                $current_style = '400';
            }
            if ( $current_style == 'italic' ) {
                $current_style = '400italic';
            }
            
			if($blog_post_date_font_d['style']){
				$font_style  = 'font-style: '. $blog_post_date_font_d['style'] .';';
			}else{
				$font_style  = ( strpos( $current_style, 'italic' ) ) ? 'font-style: italic;' : 'font-style: normal;';
			}
			
			if($blog_post_date_font_d['weight']){
				$font_weight  = 'font-weight: '. $blog_post_date_font_d['weight'] .';';
			}else{
				$font_weight = 'font-weight: ' . intval( $current_style ) . ';';
			}
			
	        $custom_css .= '
	        .inner-page-content .featured-image .date span span.day{
	            font-family: '. esc_html($blog_post_date_font_d['family']) .';
	        	'. esc_html($font_style) .'
	        	'. esc_html($font_weight) .'
	            font-size: '. esc_html($blog_post_date_font_d['size']) .'px;
	            letter-spacing: '. esc_html($blog_post_date_font_d['letter-spacing']) .'px;
	            color: '. esc_html($blog_post_date_font_d['color']) .';
	        }';
        }
        
        if($blog_post_date_font_m){
        
			$current_style = $blog_post_date_font_m['variation'];

			if ( $current_style === 'regular' ) {
                $current_style = '400';
            }
            if ( $current_style == 'italic' ) {
                $current_style = '400italic';
            }
            
			if($blog_post_date_font_m['style']){
				$font_style  = 'font-style: '. $blog_post_date_font_m['style'] .';';
			}else{
				$font_style  = ( strpos( $current_style, 'italic' ) ) ? 'font-style: italic;' : 'font-style: normal;';
			}
			
			if($blog_post_date_font_m['weight']){
				$font_weight  = 'font-weight: '. $blog_post_date_font_m['weight'] .';';
			}else{
				$font_weight = 'font-weight: ' . intval( $current_style ) . ';';
			}
			
	        $custom_css .= '
	        .inner-page-content .featured-image .date span span.month{
	            font-family: '. esc_html($blog_post_date_font_m['family']) .';
	        	'. esc_html($font_style) .'
	        	'. esc_html($font_weight) .'
	            font-size: '. esc_html($blog_post_date_font_m['size']) .'px;
	            letter-spacing: '. esc_html($blog_post_date_font_m['letter-spacing']) .'px;
	            color: '. esc_html($blog_post_date_font_m['color']) .';
	        }';
        }
        
        $custom_css .= '
        .inner-page-content .featured-image .date{
        	background-color: '. esc_html($blog_post_date_bg) .';
        }';
       
        // Post Options
        $custom_css .= '
        .inner-blog-post a{
        	color: '. esc_html($post_link_color) .';
        }';
        $custom_css .= '
        .inner-blog-post a:hover{
        	color: '. esc_html($post_link_hover_color) .';
        }';
        $custom_css .= '
        .inner-blog-post .post-title > span{
        	background-color: '. esc_html($post_link_color) .';
        }';
        if($post_meta_font){
        
			$current_style = $post_meta_font['variation'];

			if ( $current_style === 'regular' ) {
                $current_style = '400';
            }
            if ( $current_style == 'italic' ) {
                $current_style = '400italic';
            }
            
			if($post_meta_font['style']){
				$font_style  = 'font-style: '. $post_meta_font['style'] .';';
			}else{
				$font_style  = ( strpos( $current_style, 'italic' ) ) ? 'font-style: italic;' : 'font-style: normal;';
			}
			
			if($post_meta_font['weight']){
				$font_weight  = 'font-weight: '. $post_meta_font['weight'] .';';
			}else{
				$font_weight = 'font-weight: ' . intval( $current_style ) . ';';
			}
			
	        $custom_css .= '
	        .post-tags,
	        .inner-blog-post .post-meta ul li{
	            font-family: '. esc_html($post_meta_font['family']) .';
	        	'. esc_html($font_style) .'
	        	'. esc_html($font_weight) .'
	            font-size: '. esc_html($post_meta_font['size']) .'px;
	            letter-spacing: '. esc_html($post_meta_font['letter-spacing']) .'px;
	        }';
        }
        if($post_author_font){
        
			$current_style = $post_author_font['variation'];

			if ( $current_style === 'regular' ) {
                $current_style = '400';
            }
            if ( $current_style == 'italic' ) {
                $current_style = '400italic';
            }
            
			if($post_author_font['style']){
				$font_style  = 'font-style: '. $post_author_font['style'] .';';
			}else{
				$font_style  = ( strpos( $current_style, 'italic' ) ) ? 'font-style: italic;' : 'font-style: normal;';
			}
			
			if($post_author_font['weight']){
				$font_weight  = 'font-weight: '. $post_author_font['weight'] .';';
			}else{
				$font_weight = 'font-weight: ' . intval( $current_style ) . ';';
			}
			
	        $custom_css .= '
	        .inner-blog-post .post-author .author-info h3{
	            font-family: '. esc_html($post_author_font['family']) .';
	        	'. esc_html($font_style) .'
	        	'. esc_html($font_weight) .'
	            font-size: '. esc_html($post_author_font['size']) .'px;
	            letter-spacing: '. esc_html($post_author_font['letter-spacing']) .'px;
	        }';
        }
        if($post_navigation_btn_font){
        
			$current_style = $post_navigation_btn_font['variation'];

			if ( $current_style === 'regular' ) {
                $current_style = '400';
            }
            if ( $current_style == 'italic' ) {
                $current_style = '400italic';
            }
            
			if($post_navigation_btn_font['style']){
				$font_style  = 'font-style: '. $post_navigation_btn_font['style'] .';';
			}else{
				$font_style  = ( strpos( $current_style, 'italic' ) ) ? 'font-style: italic;' : 'font-style: normal;';
			}
			
			if($post_navigation_btn_font['weight']){
				$font_weight  = 'font-weight: '. $post_navigation_btn_font['weight'] .';';
			}else{
				$font_weight = 'font-weight: ' . intval( $current_style ) . ';';
			}
			
	        $custom_css .= '
	        .single-service .post-footer-navigation a,
	        .inner-blog-post .post-footer-navigation a{
	            font-family: '. esc_html($post_navigation_btn_font['family']) .';
	        	'. esc_html($font_style) .'
	        	'. esc_html($font_weight) .'
	        	font-size: '. esc_html($post_navigation_btn_font['size']) .'px;
	            letter-spacing: '. esc_html($post_navigation_btn_font['letter-spacing']) .'px;
	            color: '. esc_html($post_navigation_btn_link_color) .';
	        }';
	        
	        $custom_css .= '.single-service .post-footer-navigation a:hover,.inner-blog-post .post-footer-navigation a:hover{color:'.$post_navigation_btn_hover_link_color.';}';
	        $custom_css .= '.single-service .post-footer-navigation a:hover .icon-wrap,.inner-blog-post .post-footer-navigation a:hover .icon-wrap{background-color:'.$post_navigation_btn_hover_link_color.';}';
        }

        // Related Post Options
        if($related_post_title){
        
			$current_style = $related_post_title['variation'];

			if ( $current_style === 'regular' ) {
                $current_style = '400';
            }
            if ( $current_style == 'italic' ) {
                $current_style = '400italic';
            }
            
			if($related_post_title['style']){
				$font_style  = 'font-style: '. $related_post_title['style'] .';';
			}else{
				$font_style  = ( strpos( $current_style, 'italic' ) ) ? 'font-style: italic;' : 'font-style: normal;';
			}
			
			if($related_post_title['weight']){
				$font_weight  = 'font-weight: '. $related_post_title['weight'] .';';
			}else{
				$font_weight = 'font-weight: ' . intval( $current_style ) . ';';
			}
			
	        $custom_css .= '
	        .inner-blog-post .related-post-container-content h4 a{
	            font-family: '. esc_html($related_post_title['family']) .';
	        	'. esc_html($font_style) .'
	        	'. esc_html($font_weight) .'
	            font-size: '. esc_html($related_post_title['size']) .'px;
	            letter-spacing: '. esc_html($related_post_title['letter-spacing']) .'px;
	            color: '. esc_html($related_post_title_color) .';
	        }';
        }
        $custom_css .= '
        .inner-blog-post .related-post-container-content h4 a:hover{
        	color: '. esc_html($related_post_title_hover_color) .';
        }';
        if( $related_post_switch == "enabled" ){
        
			$current_style = $related_post_meta['variation'];

			if ( $current_style === 'regular' ) {
                $current_style = '400';
            }
            if ( $current_style == 'italic' ) {
                $current_style = '400italic';
            }
            
			if($related_post_meta['style']){
				$font_style  = 'font-style: '. $related_post_meta['style'] .';';
			}else{
				$font_style  = ( strpos( $current_style, 'italic' ) ) ? 'font-style: italic;' : 'font-style: normal;';
			}
			
			if($related_post_meta['weight']){
				$font_weight  = 'font-weight: '. $related_post_meta['weight'] .';';
			}else{
				$font_weight = 'font-weight: ' . intval( $current_style ) . ';';
			}
			
	        $custom_css .= '
	        .inner-blog-post .related-post-container .related-post-container-meta a{
	            font-family: '. esc_html($related_post_meta['family']) .';
	        	'. esc_html($font_style) .'
	        	'. esc_html($font_weight) .'
	            font-size: '. esc_html($related_post_meta['size']) .'px;
	            letter-spacing: '. esc_html($related_post_meta['letter-spacing']) .'px;
	        }';
        }
        $custom_css .= '
        .inner-blog-post .related-post-container .related-post-container-meta .material-icons{
        	color: '. esc_html($post_link_color) .';
        }';
        
        // Comments Options	
        $custom_css .= '
        .inner-comment-page .comments-area a{
        	color: '. esc_html($comment_link_color) .';
        }';
        $custom_css .= '
        .inner-comment-page .comments-area a:hover{
        	color: '. esc_html($comment_link_hover_color) .';
        }';
        $custom_css .= '
        .inner-comment-page .comments-area .comment-list .comment-meta ul li.author,
        .inner-comment-page .comments-area .comment-list .comment-meta ul li.author a{
        	color: '. esc_html($comment_link_color) .';
        }';
        $custom_css .= '
        .inner-comment-page .comments-area .comment-list .avatar-wrap > span{
        	background-color: '. esc_html($comment_link_color) .';
        }';
        if($comment_author_font){
        
			$current_style = $comment_author_font['variation'];

			if ( $current_style === 'regular' ) {
                $current_style = '400';
            }
            if ( $current_style == 'italic' ) {
                $current_style = '400italic';
            }
            
			if($comment_author_font['style']){
				$font_style  = 'font-style: '. $comment_author_font['style'] .';';
			}else{
				$font_style  = ( strpos( $current_style, 'italic' ) ) ? 'font-style: italic;' : 'font-style: normal;';
			}
			
			if($comment_author_font['weight']){
				$font_weight  = 'font-weight: '. $comment_author_font['weight'] .';';
			}else{
				$font_weight = 'font-weight: ' . intval( $current_style ) . ';';
			}
			
	        $custom_css .= '
	        .inner-comment-page .comments-area .comment-list .comment-meta ul li.author,
			.inner-comment-page .comments-area .comment-list .comment-meta ul li.author a{
	            font-family: '. esc_html($comment_author_font['family']) .';
	        	'. esc_html($font_style) .'
	        	'. esc_html($font_weight) .'
	            font-size: '. esc_html($comment_author_font['size']) .'px;
	            letter-spacing: '. esc_html($comment_author_font['letter-spacing']) .'px;
	        }';
        }
        if($comment_reply_font){
        
			$current_style = $comment_reply_font['variation'];

			if ( $current_style === 'regular' ) {
                $current_style = '400';
            }
            if ( $current_style == 'italic' ) {
                $current_style = '400italic';
            }
            
			if($comment_reply_font['style']){
				$font_style  = 'font-style: '. $comment_reply_font['style'] .';';
			}else{
				$font_style  = ( strpos( $current_style, 'italic' ) ) ? 'font-style: italic;' : 'font-style: normal;';
			}
			
			if($comment_reply_font['weight']){
				$font_weight  = 'font-weight: '. $comment_reply_font['weight'] .';';
			}else{
				$font_weight = 'font-weight: ' . intval( $current_style ) . ';';
			}
			
	        $custom_css .= '
	        .inner-comment-page .comments-area .comment-list .comment-meta .reply a{
	            font-family: '. esc_html($comment_reply_font['family']) .';
	        	'. esc_html($font_style) .'
	        	'. esc_html($font_weight) .'
	            font-size: '. esc_html($comment_reply_font['size']) .'px;
	            letter-spacing: '. esc_html($comment_reply_font['letter-spacing']) .'px;
	        }';
        }
        $custom_css .= '
        .inner-comment-page .comments-area .comment-list .comment-meta .reply a{
        	background-color: '. esc_html($comment_reply_btn_color) .';
        }';
        $custom_css .= '
        .inner-comment-page .comments-area .comment-list .comment-meta .reply a:hover{
        	background-color: '. esc_html($comment_reply_btn_hover_color) .';
        }';
        if($comment_form_label_font){
        
			$current_style = $comment_form_label_font['variation'];

			if ( $current_style === 'regular' ) {
                $current_style = '400';
            }
            if ( $current_style == 'italic' ) {
                $current_style = '400italic';
            }
            
			if($comment_form_label_font['style']){
				$font_style  = 'font-style: '. $comment_form_label_font['style'] .';';
			}else{
				$font_style  = ( strpos( $current_style, 'italic' ) ) ? 'font-style: italic;' : 'font-style: normal;';
			}
			
			if($comment_form_label_font['weight']){
				$font_weight  = 'font-weight: '. $comment_form_label_font['weight'] .';';
			}else{
				$font_weight = 'font-weight: ' . intval( $current_style ) . ';';
			}
			
	        $custom_css .= '
	        .inner-comment-page .comment-form label{
	            font-family: '. esc_html($comment_form_label_font['family']) .';
	        	'. esc_html($font_style) .'
	        	'. esc_html($font_weight) .'
	            font-size: '. esc_html($comment_form_label_font['size']) .'px;
	            letter-spacing: '. esc_html($comment_form_label_font['letter-spacing']) .'px;
	        }';
        }
        if($comment_form_btn_text){
        
			$current_style = $comment_form_btn_text['variation'];

			if ( $current_style === 'regular' ) {
                $current_style = '400';
            }
            if ( $current_style == 'italic' ) {
                $current_style = '400italic';
            }
            
			if($comment_form_btn_text['style']){
				$font_style  = 'font-style: '. $comment_form_btn_text['style'] .';';
			}else{
				$font_style  = ( strpos( $current_style, 'italic' ) ) ? 'font-style: italic;' : 'font-style: normal;';
			}
			
			if($comment_form_btn_text['weight']){
				$font_weight  = 'font-weight: '. $comment_form_btn_text['weight'] .';';
			}else{
				$font_weight = 'font-weight: ' . intval( $current_style ) . ';';
			}
			
	        $custom_css .= '
	        .inner-comment-page .comment-form .lpd_t_btn{
	            font-family: '. esc_html($comment_form_btn_text['family']) .';
	        	'. esc_html($font_style) .'
	        	'. esc_html($font_weight) .'
	            font-size: '. esc_html($comment_form_btn_text['size']) .'px;
	            letter-spacing: '. esc_html($comment_form_btn_text['letter-spacing']) .'px;
				background-color: '. esc_html($comment_form_btn_background_color) .';
				border-color: '. esc_html($comment_form_btn_border_color) .'; 
				color: '. esc_html($comment_form_btn_color) .';
	        }';
        }
        $custom_css .= '
        .inner-comment-page .comment-form .lpd_t_btn:hover,
        .inner-comment-page .comment-form .lpd_t_btn:active,
        .inner-comment-page .comment-form .lpd_t_btn:focus{
			background-color: '. esc_html($comment_form_btn_background_color_hover) .'; 
			color: '. esc_html($comment_form_btn_color_hover) .';
			border-color: '. esc_html($comment_form_btn_border_color_hover) .'; 
        }';
		
		$custom_css = trim(preg_replace('/\s+/', ' ', $custom_css));
		
        wp_add_inline_style( 'naslaan_application', $custom_css );
	
	}
	
	function naslaan_custom_css_footer(){

	    if (!defined('FW')) return; // prevent fatal error when the framework is not active
		
		$widget_variant = fw_get_db_settings_option('widget_style_variant/widget_variant');
		
		// Footer Options
		$footer_switch = fw_get_db_settings_option('footer_options/footer_switch');
		$footer_background_type = fw_get_db_settings_option('footer_options/enabled/footer_background/footer_background_type');
		$footer_background_color = fw_get_db_settings_option('footer_options/enabled/footer_background/background_color/footer_color');
		$footer_background_image_color = fw_get_db_settings_option('footer_options/enabled/footer_background/background_image/footer_color');
		$footer_background_settings = fw_get_db_settings_option('footer_options/enabled/footer_background/background_image/footer_background_settings');
		$footer_background_image = esc_attr(fw_get_db_settings_option('footer_options/enabled/footer_background/background_image/footer_background_image/url'));
		$footer_padding_top = fw_get_db_settings_option('footer_options/enabled/footer_padding_top');
		$footer_padding_bottom = fw_get_db_settings_option('footer_options/enabled/footer_padding_bottom');
		$footer_font = fw_get_db_settings_option('footer_options/enabled/footer_font');
		$footer_font_color = fw_get_db_settings_option('footer_options/enabled/footer_font_color');
		$footer_link_color = fw_get_db_settings_option('footer_options/enabled/footer_link_color');
		$footer_link_hover_color = fw_get_db_settings_option('footer_options/enabled/footer_link_hover_color');
		
		// Footer Bottom
		$footer_bottom_switch = fw_get_db_settings_option('footer_bottom_options/footer_bottom_switch');
		$footer_bottom_color = fw_get_db_settings_option('footer_bottom_options/enabled/footer_bottom_color');
		$footer_bottom_padding_top = fw_get_db_settings_option('footer_bottom_options/enabled/footer_bottom_padding_top');
		$footer_bottom_padding_bottom = fw_get_db_settings_option('footer_bottom_options/enabled/footer_bottom_padding_bottom');
		$footer_bottom_font = fw_get_db_settings_option('footer_bottom_options/enabled/footer_bottom_font');
		$footer_bottom_font_color = fw_get_db_settings_option('footer_bottom_options/enabled/footer_bottom_font_color');
		$footer_bottom_link_color = fw_get_db_settings_option('footer_bottom_options/enabled/footer_bottom_link_color');
		$footer_bottom_link_hover_color = fw_get_db_settings_option('footer_bottom_options/enabled/footer_bottom_link_hover_color');
		$footer_bottom_top_border_switch = fw_get_db_settings_option('footer_bottom_options/enabled/footer_bottom_top_border/footer_bottom_top_border_switch');
		$footer_bottom_top_border_color = fw_get_db_settings_option('footer_bottom_options/enabled/footer_bottom_top_border/enabled/footer_bottom_top_border_color');
		$footer_bottom_top_border_width = fw_get_db_settings_option('footer_bottom_options/enabled/footer_bottom_top_border/enabled/footer_bottom_top_border_width');
		
		// Footer Widgets
		$footer_widget_title = fw_get_db_settings_option('footer_widget_title');
		$footer_widget_title_color = fw_get_db_settings_option('footer_widget_title_color');
		$footer_widget_list_bullet_color = fw_get_db_settings_option('footer_widget_list_bullet_color');
		$footer_widget_list_link_color = fw_get_db_settings_option('footer_widget_list_link_color');
		$footer_widget_list_link_hover_color = fw_get_db_settings_option('footer_widget_list_link_hover_color');
		$footer_widget_list_border_color = fw_get_db_settings_option('footer_widget_list_border_color');
		$footer_search_widget_btn_color = fw_get_db_settings_option('footer_search_widget_btn_color');
		$footer_search_widget_btn_hover_color = fw_get_db_settings_option('footer_search_widget_btn_hover_color');
		
		$footer_widget_title_element = fw_get_db_settings_option('footer_widget_title_element/footer_widget_title_element_switch');
		$footer_widget_title_element_color = fw_get_db_settings_option('footer_widget_title_element/enabled/footer_widget_title_element_color');
		
		
		
		$custom_css = '';
		
        // Footer Options
        if($footer_switch=='enabled'){
        
	        if($footer_font){
	        
				$current_style = $footer_font['variation'];
	
				if ( $current_style === 'regular' ) {
	                $current_style = '400';
	            }
	            if ( $current_style == 'italic' ) {
	                $current_style = '400italic';
	            }
	            
				if($footer_font['style']){
					$font_style  = 'font-style: '. $footer_font['style'] .';';
				}else{
					$font_style  = ( strpos( $current_style, 'italic' ) ) ? 'font-style: italic;' : 'font-style: normal;';
				}
				
				if($footer_font['weight']){
					$font_weight  = 'font-weight: '. $footer_font['weight'] .';';
				}else{
					$font_weight = 'font-weight: ' . intval( $current_style ) . ';';
				}
				
		        $custom_css .= '
		        #footer{
		            font-family: '. esc_html($footer_font['family']) .';
		        	'. esc_html($font_style) .'
		        	'. esc_html($font_weight) .'
		            font-size: '. esc_html($footer_font['size']) .'px;
		            letter-spacing: '. esc_html($footer_font['letter-spacing']) .'px;
		        	color: '. esc_html($footer_font_color) .';
		        }';
	        }
	        
	        $custom_css .= '
	        #footer a{
	        	color: '. esc_html($footer_link_color) .';
	        }';
	        
	        $custom_css .= '
	        #footer a:hover{
	        	color: '. esc_html($footer_link_hover_color) .';
	        }';
	        
	        $custom_css .= '
	        #footer .middle-section{
	        	padding-top: '. esc_html($footer_padding_top) .'px;
	        	padding-bottom: '. esc_html($footer_padding_bottom) .'px;
	        }';
	        
	        if(($footer_background_type=='background_image')&&$footer_background_image){
		        $custom_css .= '
		        #footer{
		        	background-color: '. esc_html($footer_background_image_color) .';
		        	background-image: url('. esc_html($footer_background_image) .');
		        }';
	        }else{
		        $custom_css .= '
		        #footer{
		        	background-color: '. esc_html($footer_background_color) .';
		        }';
	        }
	        
        }
        
        // Footer Bottom
        if($footer_bottom_switch=='enabled'){
        
	        if($footer_bottom_font){
	        
				$current_style = $footer_bottom_font['variation'];
	
				if ( $current_style === 'regular' ) {
	                $current_style = '400';
	            }
	            if ( $current_style == 'italic' ) {
	                $current_style = '400italic';
	            }
	            
				if($footer_bottom_font['style']){
					$font_style  = 'font-style: '. $footer_bottom_font['style'] .';';
				}else{
					$font_style  = ( strpos( $current_style, 'italic' ) ) ? 'font-style: italic;' : 'font-style: normal;';
				}
				
				if($footer_bottom_font['weight']){
					$font_weight  = 'font-weight: '. $footer_bottom_font['weight'] .';';
				}else{
					$font_weight = 'font-weight: ' . intval( $current_style ) . ';';
				}
				
		        $custom_css .= '
		        #footer .bottom-section{
		            font-family: '. esc_html($footer_bottom_font['family']) .';
		        	'. esc_html($font_style) .'
		        	'. esc_html($font_weight) .'
		            font-size: '. esc_html($footer_bottom_font['size']) .'px;
		            letter-spacing: '. esc_html($footer_bottom_font['letter-spacing']) .'px;
		        	background-color: '. esc_html($footer_bottom_color) .';
		        	color: '. esc_html($footer_bottom_font_color) .';
		        	padding-top: '. esc_html($footer_bottom_padding_top) .'px;
		        	padding-bottom: '. esc_html($footer_bottom_padding_bottom) .'px;
		        }';
	        }
	        
	        $custom_css .= '
	        #footer .bottom-section a{
	        	color: '. esc_html($footer_bottom_link_color) .';
	        }';
	        
	        $custom_css .= '
	        #footer .bottom-section a:hover{
	        	color: '. esc_html($footer_bottom_link_hover_color) .';
	        }';

			if($footer_bottom_top_border_switch=='enabled'){
		        $custom_css .= '
		        #footer .bottom-section{
		        	border-top-style: solid;
		        	border-top-color: '. esc_html($footer_bottom_top_border_color) .';
		        	border-top-width: '. esc_html($footer_bottom_top_border_width) .'px;
		        }';
	        }
	        
        }
          
		// Footer Widget
        if($footer_widget_title){
        
			$current_style = $footer_widget_title['variation'];

			if ( $current_style === 'regular' ) {
                $current_style = '400';
            }
            if ( $current_style == 'italic' ) {
                $current_style = '400italic';
            }
            
			if($footer_widget_title['style']){
				$font_style  = 'font-style: '. $footer_widget_title['style'] .';';
			}else{
				$font_style  = ( strpos( $current_style, 'italic' ) ) ? 'font-style: italic;' : 'font-style: normal;';
			}
			
			if($footer_widget_title['weight']){
				$font_weight  = 'font-weight: '. $footer_widget_title['weight'] .';';
			}else{
				$font_weight = 'font-weight: ' . intval( $current_style ) . ';';
			}
			
	        $custom_css .= '
	        #footer .widget-title{
	            font-family: '. esc_html($footer_widget_title['family']) .';
	        	'. esc_html($font_style) .'
	        	'. esc_html($font_weight) .'
	            font-size: '. esc_html($footer_widget_title['size']) .'px;
	            letter-spacing: '. esc_html($footer_widget_title['letter-spacing']) .'px;
	            color: '. esc_html($footer_widget_title_color) .';
	        }';
        }
		
        if($footer_widget_title_element=="enabled"){
	        $custom_css .= '
			#footer .widget h4.widget-title{
				position: relative;
				margin-bottom: 20px;
				padding-bottom: 15px;
			}
			#footer .widget h4.widget-title:before{
				content: "";
				width: 50px;
				height: 2px;
				background-color: '. esc_html($footer_widget_title_element_color) .';
				position: absolute;
				left: 0px;
				bottom: 0px;
			}
			';
        }
		
        $custom_css .= '
        #footer .tagcloud a,
        #footer .widget ul > li > a{
        	color: '. esc_html($footer_widget_list_link_color) .';
        }';
        $custom_css .= '
        #footer .tagcloud a:hover,
        #footer .widget ul > li > a:hover{
        	color: '. esc_html($footer_widget_list_link_hover_color) .';
        }';
        $custom_css .= '
        #footer .widget ul > li > a:after{
        	border-bottom-color: '. esc_html($footer_widget_list_link_hover_color) .';
        }';
        $custom_css .= '
        #footer .widget ul li{
        	border-color: '. esc_html($footer_widget_list_border_color) .';
        }';
        if($widget_variant=="variant-1"){
	        $custom_css .= '
			#footer .widget_nav_menu ul > li a:before,
			#footer .widget_archive ul > li a:before,
			#footer .widget_recent_entries ul > li a:before,
			#footer .widget.widget_pages ul > li a:before,
			#footer .widget.widget_categories ul > li a:before{
				background-color: '.esc_html($footer_widget_list_bullet_color).';
	        }';
        }

                
		$custom_css = trim(preg_replace('/\s+/', ' ', $custom_css));
		
        wp_add_inline_style( 'naslaan_application', $custom_css );
	
	}
	
	function naslaan_custom_css_header_title(){

	    if (!defined('FW')) return; // prevent fatal error when the framework is not active
			
		// Title
		$title_variant = naslaan_theme_option_functions::naslaan_header_title_variant();
		
		if($title_variant=='variant-1') {
			$header_title_padding_top = naslaan_theme_option_functions::naslaan_header_title_padding_top_v1();
			$header_title_padding_bottom = naslaan_theme_option_functions::naslaan_header_title_padding_bottom_v1();
			$header_title_visibility = naslaan_theme_option_functions::naslaan_header_title_visibility_v1();
			$header_title = naslaan_theme_option_functions::naslaan_header_title_v1();
			$header_title_underline = naslaan_theme_option_functions::naslaan_header_title_underline_v1();
			
			$header_breadcrumb_visibility = naslaan_theme_option_functions::naslaan_header_breadcrumb_visibility_v1();
			$header_breadcrumb_padding_top = naslaan_theme_option_functions::naslaan_header_breadcrumb_padding_top_v1();
			$header_breadcrumb_padding_bottom = naslaan_theme_option_functions::naslaan_header_breadcrumb_padding_bottom_v1();
			$header_breadcrumb_bg_color = naslaan_theme_option_functions::naslaan_header_breadcrumb_bg_color();
			$header_breadcrumb_font = naslaan_theme_option_functions::naslaan_header_breadcrumb_font_v1();
			$header_breadcrumb_font_color = naslaan_theme_option_functions::naslaan_header_breadcrumb_font_color_v1();
			$header_breadcrumb_link_color = naslaan_theme_option_functions::naslaan_header_breadcrumb_link_color_v1();
			$header_breadcrumb_hover_link_color = naslaan_theme_option_functions::naslaan_header_breadcrumb_hover_link_color_v1();
			
			$header_share_visibility = naslaan_theme_option_functions::naslaan_header_share_visibility_v1();
			$header_share_btn_padding_top = naslaan_theme_option_functions::naslaan_header_share_btn_padding_top_v1();
			$header_share_btn_padding_bottom = naslaan_theme_option_functions::naslaan_header_share_btn_padding_bottom_v1();
			$header_share_btn_text = naslaan_theme_option_functions::naslaan_header_share_btn_text_v1();
			$header_share_btn_text_color = naslaan_theme_option_functions::naslaan_header_share_btn_text_color_v1();
			$header_share_btn_icon_color = naslaan_theme_option_functions::naslaan_header_share_btn_icon_color_v1();
			$header_share_btn_sep_line_color = naslaan_theme_option_functions::naslaan_header_share_btn_sep_line_color_v1();
			$header_share_dropdown_text = naslaan_theme_option_functions::naslaan_header_share_dropdown_text_v1();
			$header_share_dropdown_hover_link_color = naslaan_theme_option_functions::naslaan_header_share_dropdown_hover_link_color_v1();
			$header_share_dropdown_link_color = naslaan_theme_option_functions::naslaan_header_share_dropdown_link_color_v1();
			
			$header_share_btn_icon_color_1 = naslaan_theme_option_functions::naslaan_header_share_btn_icon_color_1();
			$header_share_btn_icon_bg_color_1 = naslaan_theme_option_functions::naslaan_header_share_btn_icon_bg_color_1();
			$header_share_btn_icon_border_color_1 = naslaan_theme_option_functions::naslaan_header_share_btn_icon_border_color_1();
			$header_share_btn_icon_color_hover_1 = naslaan_theme_option_functions::naslaan_header_share_btn_icon_color_hover_1();
			$header_share_btn_icon_bg_color_hover_1 = naslaan_theme_option_functions::naslaan_header_share_btn_icon_bg_color_hover_1();
			$header_share_btn_icon_border_color_hover_1 = naslaan_theme_option_functions::naslaan_header_share_btn_icon_border_color_hover_1();
			
		}
		elseif($title_variant=='variant-2'){
			$header_title_padding_top = naslaan_theme_option_functions::naslaan_header_title_padding_top_v2();
			$header_title_padding_bottom = naslaan_theme_option_functions::naslaan_header_title_padding_bottom_v2();
			$header_title_visibility = naslaan_theme_option_functions::naslaan_header_title_visibility_v2();
			$header_title = naslaan_theme_option_functions::naslaan_header_title_v2();
			$header_title_underline = naslaan_theme_option_functions::naslaan_header_title_underline_v2();
			$header_title_desc_visibility = naslaan_theme_option_functions::naslaan_header_title_desc_visibility_v2();
			$header_title_desc = naslaan_theme_option_functions::naslaan_header_title_desc_v2();
			$header_title_desc_underline = naslaan_theme_option_functions::naslaan_header_title_desc_underline_v2();
		}
		
		$header_background_type = naslaan_theme_option_functions::naslaan_header_background_type();
		$header_background_color = naslaan_theme_option_functions::naslaan_header_background_color();
		$header_background_image_color = naslaan_theme_option_functions::naslaan_header_background_image_color();
		$header_background_settings = naslaan_theme_option_functions::naslaan_header_background_settings();
		$header_background_image = naslaan_theme_option_functions::naslaan_header_background_image();
		$header_animated_gradient_visibility = naslaan_theme_option_functions::naslaan_header_animated_gradient_visibility();
		$header_animated_gradient_color_1 = naslaan_theme_option_functions::naslaan_header_animated_gradient_color_1();
		$header_animated_gradient_color_2 = naslaan_theme_option_functions::naslaan_header_animated_gradient_color_2();
		$header_animated_gradient_opacity = naslaan_theme_option_functions::naslaan_header_animated_gradient_opacity();
		
		$multitheme = 'disabled';
		
		$custom_css = '';
		
		if($title_variant=='variant-1') {
	        
	        $custom_css .= '
	        .title-variant-1 #title > .container{padding-top: '. esc_html($header_title_padding_top) .'px; padding-bottom: '. esc_html($header_title_padding_bottom) .'px;}';

	        if( $header_title_visibility == 'enabled' ) {
		        if($header_title){
					$current_style = $header_title['variation'];
		
					if ( $current_style === 'regular' ) { $current_style = '400'; }
		            if ( $current_style == 'italic' ) { $current_style = '400italic'; }
		            
					if($header_title['style']){ $font_style  = 'font-style: '. $header_title['style'] .';'; }
					else{ $font_style  = ( strpos( $current_style, 'italic' ) ) ? 'font-style: italic;' : 'font-style: normal;'; }
					
					if($header_title['weight']){ $font_weight  = 'font-weight: '. $header_title['weight'] .';';
					}else{ $font_weight = 'font-weight: ' . intval( $current_style ) . ';'; }
					
			        $custom_css .= '
			        .title-variant-1 #title .title h2{
			            font-family: '. esc_html($header_title['family']) .';
			        	'. esc_html($font_style) .'
			        	'. esc_html($font_weight) .'
			            font-size: '. esc_html($header_title['size']) .'px;
			            letter-spacing: '. esc_html($header_title['letter-spacing']) .'px;
			            color: '. esc_html($header_title['color']) .';
			        }';
			        if( $header_title_underline == 'enabled' ) {
				        $custom_css .= '
				        .title-variant-1 #title .title h2{
				            text-decoration: underline;
				        }';
			        }
		        }
	        }
	        
			if( $header_breadcrumb_visibility == 'enabled' ) {
		        if($header_breadcrumb_font){
					$current_style = $header_breadcrumb_font['variation'];
		
					if ( $current_style === 'regular' ) { $current_style = '400'; }
		            if ( $current_style == 'italic' ) { $current_style = '400italic'; }
		            
					if($header_breadcrumb_font['style']){ $font_style  = 'font-style: '. $header_breadcrumb_font['style'] .';'; }
					else{ $font_style  = ( strpos( $current_style, 'italic' ) ) ? 'font-style: italic;' : 'font-style: normal;'; }
					
					if($header_breadcrumb_font['weight']){ $font_weight  = 'font-weight: '. $header_breadcrumb_font['weight'] .';';
					}else{ $font_weight = 'font-weight: ' . intval( $current_style ) . ';'; }
					
			        $custom_css .= '
			        .title-variant-1 #title .breadcrumb{
			            font-family: '. esc_html($header_breadcrumb_font['family']) .';
			        	'. esc_html($font_style) .'
			        	'. esc_html($font_weight) .'
			            font-size: '. esc_html($header_breadcrumb_font['size']) .'px;
			            letter-spacing: '. esc_html($header_breadcrumb_font['letter-spacing']) .'px;
			        }';
		        }
		        $custom_css .= '
		        .title-variant-1 #title .bradcrumb-top{
		        	padding-top: '. esc_html($header_breadcrumb_padding_top) .'px;
		        	padding-bottom: '. esc_html($header_breadcrumb_padding_bottom) .'px;
		        	background-color: '. esc_html($header_breadcrumb_bg_color) .';
		        }';
		        $custom_css .= '
		        .title-variant-1 #title .breadcrumb{
		        	color: '. esc_html($header_breadcrumb_font_color) .';
		        }';
		        $custom_css .= '
		        .title-variant-1 #title .bradcrumb-top i,
		        .title-variant-1 #title .material-icons,
		        .title-variant-1 #title .breadcrumb a{
		        	color: '. esc_html($header_breadcrumb_link_color) .';
		        }';
		        $custom_css .= '
		        .title-variant-1 #title .breadcrumb a:hover{
		        	color: '. esc_html($header_breadcrumb_hover_link_color) .';
		        }';
			}

	        if( $header_share_visibility == 'enabled' ) {
	        
		        $custom_css .= '
		        .title-variant-1 #title .page-share-1{
		        	padding-top: '. esc_html($header_share_btn_padding_top) .'px;
		        	padding-bottom: '. esc_html($header_share_btn_padding_bottom) .'px;
		        }';
		        $custom_css .= '
		        .title-variant-1 #title .page-share-1 a{
		        	border-color:'. esc_html($header_share_btn_icon_border_color_1) .';
		        	background-color:'. esc_html($header_share_btn_icon_bg_color_1) .';
		        	color:'. esc_html($header_share_btn_icon_color_1) .';
		        }';
		        $custom_css .= '
		        .title-variant-1 #title .page-share-1 a:hover{
		        	border-color:'. esc_html($header_share_btn_icon_border_color_hover_1) .';
		        	background-color:'. esc_html($header_share_btn_icon_bg_color_hover_1) .';
		        	color:'. esc_html($header_share_btn_icon_color_hover_1) .';
		        }';   
		        
		        if($multitheme=="enabled"){
		        if($header_share_btn_text){
		        
					$current_style = $header_share_btn_text['variation'];
		
					if ( $current_style === 'regular' ) {
		                $current_style = '400';
		            }
		            if ( $current_style == 'italic' ) {
		                $current_style = '400italic';
		            }
		            
					if($header_share_btn_text['style']){
						$font_style  = 'font-style: '. $header_share_btn_text['style'] .';';
					}else{
						$font_style  = ( strpos( $current_style, 'italic' ) ) ? 'font-style: italic;' : 'font-style: normal;';
					}
					
					if($header_share_btn_text['weight']){
						$font_weight  = 'font-weight: '. $header_share_btn_text['weight'] .';';
					}else{
						$font_weight = 'font-weight: ' . intval( $current_style ) . ';';
					}
					
			        $custom_css .= '
			        .title-variant-1 #title .page-share .share-btn{
			            font-family: '. esc_html($header_share_btn_text['family']) .';
			        	'. esc_html($font_style) .'
			        	'. esc_html($font_weight) .'
			            font-size: '. esc_html($header_share_btn_text['size']) .'px;
			            line-height: '. esc_html($header_share_btn_text['line-height']) .'px;
			            letter-spacing: '. esc_html($header_share_btn_text['letter-spacing']) .'px;
			            color: '. esc_html($header_share_btn_text_color) .';
			        }';
			        
		        }
		        $custom_css .= '
		        .title-variant-1 #title .page-share-1{
		        	padding-top: '. esc_html($header_share_btn_padding_top) .'px;
		        	padding-bottom: '. esc_html($header_share_btn_padding_bottom) .'px;
		        }';
		        $custom_css .= '
		        .title-variant-1 #title .page-share .share-btn .material-icons{
		        	border-color: '. esc_html($header_share_btn_icon_color) .';
		        	color: '. esc_html($header_share_btn_icon_color) .';
		        }';
		        
		        if($header_title_visibility!='disabled'){
			        $custom_css .= '
			        .title-variant-1 #title .page-share{
						padding-left: 20px;
						margin-left: 20px;
			        }';
			        $custom_css .= '
			        .title-variant-1 #title .page-share:before{
			        	background-color: '. esc_html($header_share_btn_sep_line_color) .';
			        }';
			        $custom_css .= '
			        .title-variant-1 #title .page-share .share-dropdown{
						left: 20px;
			        }';
		        }
		        if($header_share_dropdown_text){
			        
					$current_style = $header_share_dropdown_text['variation'];
		
					if ( $current_style === 'regular' ) {
		                $current_style = '400';
		            }
		            if ( $current_style == 'italic' ) {
		                $current_style = '400italic';
		            }
		            
					if($header_share_dropdown_text['style']){
						$font_style  = 'font-style: '. $header_share_dropdown_text['style'] .';';
					}else{
						$font_style  = ( strpos( $current_style, 'italic' ) ) ? 'font-style: italic;' : 'font-style: normal;';
					}
					
					if($header_share_dropdown_text['weight']){
						$font_weight  = 'font-weight: '. $header_share_dropdown_text['weight'] .';';
					}else{
						$font_weight = 'font-weight: ' . intval( $current_style ) . ';';
					}
					
			        $custom_css .= '
			        .title-variant-1 #title .share-dropdown ul li a{
			            font-family: '. esc_html($header_share_dropdown_text['family']) .';
			        	'. esc_html($font_style) .'
			        	'. esc_html($font_weight) .'
			            font-size: '. esc_html($header_share_dropdown_text['size']) .'px;
			            line-height: '. esc_html($header_share_dropdown_text['line-height']) .'px;
			            letter-spacing: '. esc_html($header_share_dropdown_text['letter-spacing']) .'px;
			            color: '. esc_html($header_share_dropdown_link_color) .';
			        }';
			        $custom_css .= '
			        .title-variant-1 #title .share-dropdown ul li a:hover{
			            color: '. esc_html($header_share_dropdown_hover_link_color) .';
			        }';
			        
		        }
		        }
	        }
	        
		}
		elseif($title_variant=='variant-2'){
	        $custom_css .= '
	        .title-variant-2 #title{padding-top: '. esc_html($header_title_padding_top) .'px; padding-bottom: '. esc_html($header_title_padding_bottom) .'px;}';
	        
	        if( $header_title_visibility == 'enabled' ) {
		        if($header_title){
					$current_style = $header_title['variation'];
		
					if ( $current_style === 'regular' ) { $current_style = '400'; }
		            if ( $current_style == 'italic' ) { $current_style = '400italic'; }
		            
					if($header_title['style']){ $font_style  = 'font-style: '. $header_title['style'] .';'; }
					else{ $font_style  = ( strpos( $current_style, 'italic' ) ) ? 'font-style: italic;' : 'font-style: normal;'; }
					
					if($header_title['weight']){ $font_weight  = 'font-weight: '. $header_title['weight'] .';';
					}else{ $font_weight = 'font-weight: ' . intval( $current_style ) . ';'; }
					
			        $custom_css .= '
			        .title-variant-2 #title .title h2{
			            font-family: '. esc_html($header_title['family']) .';
			        	'. esc_html($font_style) .'
			        	'. esc_html($font_weight) .'
			            font-size: '. esc_html($header_title['size']) .'px;
			            line-height: '. esc_html($header_title['line-height']) .'px;
			            letter-spacing: '. esc_html($header_title['letter-spacing']) .'px;
			            color: '. esc_html($header_title['color']) .';
			        }';
			        if( $header_title_underline == 'enabled' ) {
				        $custom_css .= '
				        .title-variant-2 #title .title h2{
				            text-decoration: underline;
				        }';
			        }
		        }
	        }
	        
	        if( $header_title_desc_visibility == 'enabled' ) {
		        if($header_title_desc){
					$current_style = $header_title_desc['variation'];
		
					if ( $current_style === 'regular' ) { $current_style = '400'; }
		            if ( $current_style == 'italic' ) { $current_style = '400italic'; }
		            
					if($header_title_desc['style']){ $font_style  = 'font-style: '. $header_title_desc['style'] .';'; }
					else{ $font_style  = ( strpos( $current_style, 'italic' ) ) ? 'font-style: italic;' : 'font-style: normal;'; }
					
					if($header_title_desc['weight']){ $font_weight  = 'font-weight: '. $header_title_desc['weight'] .';';
					}else{ $font_weight = 'font-weight: ' . intval( $current_style ) . ';'; }
					
			        $custom_css .= '
			        .title-variant-2 #title .title .title-description{
			            font-family: '. esc_html($header_title_desc['family']) .';
			        	'. esc_html($font_style) .'
			        	'. esc_html($font_weight) .'
			            font-size: '. esc_html($header_title_desc['size']) .'px;
			            line-height: '. esc_html($header_title_desc['line-height']) .'px;
			            letter-spacing: '. esc_html($header_title_desc['letter-spacing']) .'px;
			            color: '. esc_html($header_title_desc['color']) .';
			        }';
			        if( $header_title_desc_underline == 'enabled' ) {
				        $custom_css .= '
				        .title-variant-2 #title .title .title-description{
				            text-decoration: underline;
				        }';
			        }
		        }
	        }
		}
		
		if($header_animated_gradient_visibility=='enabled') {
	        
	        $custom_css .= '
	        #title-gradient{
	        	opacity:'. esc_html($header_animated_gradient_opacity) .';
	        }';
	        
		}
		
		$custom_css = trim(preg_replace('/\s+/', ' ', $custom_css));

		
        wp_add_inline_style( 'naslaan_application', $custom_css );
	
	}
	
	function naslaan_custom_css_header(){
	
	    if (!defined('FW')) return; // prevent fatal error when the framework is not active
	
		// Typography
		$body_font = fw_get_db_settings_option('body_font');
			
		// Header Elements
		$header_type = fw_get_db_settings_option('header_types/header_type');
		
		if($header_type=='left') {
			$navigation_variant = fw_get_db_settings_option('header_types/left/navigation_types/navigation_variant');
			
			$right_bar_border_switch_left_v1 = fw_get_db_settings_option('header_types/left/navigation_types/variant_1/right_bar_border/right_bar_border_switch');
			$right_bar_border_color_left_v1 = naslaan_theme_option_functions::naslaan_header_types_left_right_bar_border_color_v1();
			
			$nav_holder_bg_left_v2 = naslaan_theme_option_functions::naslaan_header_types_left_nav_holder_background();
			$top_border_switch_left_v2 = fw_get_db_settings_option('header_types/left/navigation_types/variant_2/nav_holder_top_border/top_border_switch');
			$top_border_color_left_v2 = naslaan_theme_option_functions::naslaan_header_types_left_nav_holder_top_border_color();
			$bottom_border_switch_left_v2 = fw_get_db_settings_option('header_types/left/navigation_types/variant_2/nav_holder_bottom_border/bottom_border_switch');
			$bottom_border_color_left_v2 = naslaan_theme_option_functions::naslaan_header_types_left_nav_holder_bottom_border_color();
			$right_bar_border_switch_left_v2 = fw_get_db_settings_option('header_types/left/navigation_types/variant_2/right_bar_border/right_bar_border_switch');
			$right_bar_border_color_left_v2 = naslaan_theme_option_functions::naslaan_header_types_left_right_bar_border_color_v2();
			
			$right_bar_border_switch_left_v3 = fw_get_db_settings_option('header_types/left/navigation_types/variant_3/right_bar_border/right_bar_border_switch');
			$right_bar_border_color_left_v3 = naslaan_theme_option_functions::naslaan_header_types_left_right_bar_border_color_v3();
			
			$header_margin_top = fw_get_db_settings_option('header_types/left/header_margin_top');
			$header_margin_right = fw_get_db_settings_option('header_types/left/header_margin_right');
			$header_margin_bottom = fw_get_db_settings_option('header_types/left/header_margin_bottom');
			$header_margin_left = fw_get_db_settings_option('header_types/left/header_margin_left');
			$header_background = naslaan_theme_option_functions::naslaan_header_types_left_background();
			$header_top_border_switch = fw_get_db_settings_option('header_types/left/middle_header_top_border/top_border_switch');
			$header_top_border_color = naslaan_theme_option_functions::naslaan_header_types_left_top_border_color();
			$header_top_border_weight = fw_get_db_settings_option('header_types/left/middle_header_top_border/enabled/top_border_weight');
			$header_bottom_border_switch = fw_get_db_settings_option('header_types/left/middle_header_bottom_border/bottom_border_switch');
			$header_bottom_border_color = naslaan_theme_option_functions::naslaan_header_types_left_bottom_border_color();
			$header_bottom_border_weight = fw_get_db_settings_option('header_types/left/middle_header_bottom_border/enabled/bottom_border_weight');
			
		}
		elseif($header_type=='center'){
			$navigation_variant = fw_get_db_settings_option('header_types/center/navigation_types/navigation_variant');
			
			$right_bar_border_switch_center_v1 = fw_get_db_settings_option('header_types/center/navigation_types/variant_1/right_bar_border/right_bar_border_switch');
			$right_bar_border_color_center_v1 = naslaan_theme_option_functions::naslaan_header_types_center_right_bar_border_color_v1();
			$left_bar_border_switch_center_v1 = fw_get_db_settings_option('header_types/center/navigation_types/variant_1/left_bar_border/left_bar_border_switch');
			$left_bar_border_color_center_v1 = naslaan_theme_option_functions::naslaan_header_types_center_left_bar_border_color_v1();
			
			$nav_holder_bg_center_v2 = naslaan_theme_option_functions::naslaan_header_types_center_nav_holder_background();
			$top_border_switch_center_v2 = fw_get_db_settings_option('header_types/center/navigation_types/variant_2/nav_holder_top_border/top_border_switch');
			$top_border_color_center_v2 = naslaan_theme_option_functions::naslaan_header_types_center_nav_holder_top_border_color();
			$bottom_border_switch_center_v2 = fw_get_db_settings_option('header_types/center/navigation_types/variant_2/nav_holder_bottom_border/bottom_border_switch');
			$bottom_border_color_center_v2 = naslaan_theme_option_functions::naslaan_header_types_center_nav_holder_bottom_border_color();
			$right_bar_border_switch_center_v2 = fw_get_db_settings_option('header_types/center/navigation_types/variant_2/right_bar_border/right_bar_border_switch');
			$right_bar_border_color_center_v2 = naslaan_theme_option_functions::naslaan_header_types_center_right_bar_border_color_v2();
			$left_bar_border_switch_center_v2 = fw_get_db_settings_option('header_types/center/navigation_types/variant_2/left_bar_border/left_bar_border_switch');
			$left_bar_border_color_center_v2 = naslaan_theme_option_functions::naslaan_header_types_center_left_bar_border_color_v2();
			
			$right_bar_border_switch_center_v3 = fw_get_db_settings_option('header_types/center/navigation_types/variant_3/right_bar_border/right_bar_border_switch');
			$right_bar_border_color_center_v3 = naslaan_theme_option_functions::naslaan_header_types_center_right_bar_border_color_v3();
			$left_bar_border_switch_center_v3 = fw_get_db_settings_option('header_types/center/navigation_types/variant_3/left_bar_border/left_bar_border_switch');
			$left_bar_border_color_center_v3 = naslaan_theme_option_functions::naslaan_header_types_center_left_bar_border_color_v3();
			
			$header_margin_top = fw_get_db_settings_option('header_types/center/header_margin_top');
			$header_margin_right = fw_get_db_settings_option('header_types/center/header_margin_right');
			$header_margin_bottom = fw_get_db_settings_option('header_types/center/header_margin_bottom');
			$header_margin_left = fw_get_db_settings_option('header_types/center/header_margin_left');
			$header_background = naslaan_theme_option_functions::naslaan_header_types_center_background();
			$header_top_border_switch = fw_get_db_settings_option('header_types/center/middle_header_top_border/top_border_switch');
			$header_top_border_color = naslaan_theme_option_functions::naslaan_header_types_center_top_border_color();
			$header_top_border_weight = fw_get_db_settings_option('header_types/center/middle_header_top_border/enabled/top_border_weight');
			$header_bottom_border_switch = fw_get_db_settings_option('header_types/center/middle_header_bottom_border/bottom_border_switch');
			$header_bottom_border_color = naslaan_theme_option_functions::naslaan_header_types_center_bottom_border_color();
			$header_bottom_border_weight = fw_get_db_settings_option('header_types/center/middle_header_bottom_border/enabled/bottom_border_weight');
		
		}
		elseif($header_type=='side'){
			$header_background = naslaan_theme_option_functions::naslaan_header_types_side_background();
			$bottom_bar_border_switch_side = fw_get_db_settings_option('header_types/side/bottom_bar_border/bottom_bar_border_switch');
			$bottom_bar_border_color_side = naslaan_theme_option_functions::naslaan_header_types_side_bottom_bar_border_color();
		}

		$logo_type = fw_get_db_settings_option('header_logo/logo_type');
		$header_logo_text = fw_get_db_settings_option('header_logo/text_logo/header_logo_text');
		$header_logo_text_color = naslaan_theme_option_functions::naslaan_header_logo_text_color();
		$header_logo_text_padding_top = fw_get_db_settings_option('header_logo/text_logo/header_logo_text_padding_top');
		$header_logo_text_padding_right = fw_get_db_settings_option('header_logo/text_logo/header_logo_text_padding_right');
		$header_logo_text_padding_bottom = fw_get_db_settings_option('header_logo/text_logo/header_logo_text_padding_bottom');
		$header_logo_text_padding_left = fw_get_db_settings_option('header_logo/text_logo/header_logo_text_padding_left');
		$header_logo_text_border_switch = fw_get_db_settings_option('header_logo/text_logo/header_logo_text_border/logo_border_switch');
		$header_logo_text_border_color = naslaan_theme_option_functions::naslaan_header_logo_text_border_color();
		$header_logo_width = fw_get_db_settings_option('header_logo/image_logo/header_logo_width');
		$header_logo_padding_top = fw_get_db_settings_option('header_logo/image_logo/header_logo_padding_top');
		$header_logo_padding_right = fw_get_db_settings_option('header_logo/image_logo/header_logo_padding_right');
		$header_logo_padding_bottom = fw_get_db_settings_option('header_logo/image_logo/header_logo_padding_bottom');
		$header_logo_padding_left = fw_get_db_settings_option('header_logo/image_logo/header_logo_padding_left');
		$header_logo_border_switch = fw_get_db_settings_option('header_logo/image_logo/header_logo_border/logo_border_switch');
		$header_logo_border_color = naslaan_theme_option_functions::naslaan_header_logo_image_border_color();
		
		$navigation_margin_right = fw_get_db_settings_option('navigation_margin_right');
		$navigation_margin_left = fw_get_db_settings_option('navigation_margin_left');
		$menu_item_padding_top = fw_get_db_settings_option('menu_item_padding_top');
		$menu_item_padding_right = fw_get_db_settings_option('menu_item_padding_right');
		$menu_item_padding_bottom = fw_get_db_settings_option('menu_item_padding_bottom');
		$menu_item_padding_left = fw_get_db_settings_option('menu_item_padding_left');
		$menu_button_paddings_nl_switch = fw_get_db_settings_option('menu_button_paddings_notebook_layout/menu_button_paddings_nl_switch');
		$menu_button_padding_right_nl = fw_get_db_settings_option('menu_button_paddings_notebook_layout/enabled/menu_button_padding_right_nl');
		$menu_button_padding_left_nl = fw_get_db_settings_option('menu_button_paddings_notebook_layout/enabled/menu_button_padding_left_nl');
		$menu_button_paddings_tl_switch = fw_get_db_settings_option('menu_button_paddings_tablet_layout/menu_button_paddings_tl_switch');
		$menu_button_padding_right_tl = fw_get_db_settings_option('menu_button_paddings_tablet_layout/enabled/menu_button_padding_right_tl');
		$menu_button_padding_left_tl = fw_get_db_settings_option('menu_button_paddings_tablet_layout/enabled/menu_button_padding_left_tl');
		$menu_button_inner_padding_right = fw_get_db_settings_option('menu_button_inner_padding_right');
		$menu_button_inner_padding_left = fw_get_db_settings_option('menu_button_inner_padding_left');
		$menu_button_inner_paddings_nl_switch = fw_get_db_settings_option('menu_button_inner_paddings_notebook_layout/menu_button_inner_paddings_nl_switch');
		$menu_button_inner_padding_right_nl = fw_get_db_settings_option('menu_button_inner_paddings_notebook_layout/enabled/menu_button_inner_padding_right_nl');
		$menu_button_inner_padding_left_nl = fw_get_db_settings_option('menu_button_inner_paddings_notebook_layout/enabled/menu_button_inner_padding_left_nl');
		$menu_button_inner_paddings_tl_switch = fw_get_db_settings_option('menu_button_inner_paddings_tablet_layout/menu_button_inner_paddings_tl_switch');
		$menu_button_inner_padding_right_tl = fw_get_db_settings_option('menu_button_inner_paddings_tablet_layout/enabled/menu_button_inner_padding_right_tl');
		$menu_button_inner_padding_left_tl = fw_get_db_settings_option('menu_button_inner_paddings_tablet_layout/enabled/menu_button_inner_padding_left_tl');
		$menu_button_text = fw_get_db_settings_option('menu_button_text');
		
		$menu_button_text_nl_switch = fw_get_db_settings_option('menu_button_text_notebook_layout/menu_button_text_nl_switch');
		$menu_button_text_nl = fw_get_db_settings_option('menu_button_text_notebook_layout/enabled/font_size');
		$menu_button_text_tl_switch = fw_get_db_settings_option('menu_button_text_tablet_layout/menu_button_text_tl_switch');
		$menu_button_text_tl = fw_get_db_settings_option('menu_button_text_tablet_layout/enabled/font_size');
		
		$menu_button_color = naslaan_theme_option_functions::naslaan_menu_button_color();
		$menu_button_color_hover = naslaan_theme_option_functions::naslaan_menu_button_color_hover();
		$menu_background_color = naslaan_theme_option_functions::naslaan_menu_background_color();
		$menu_background_color_hover = naslaan_theme_option_functions::naslaan_menu_background_color_hover();
		$menu_button_overlay_effect_switch = fw_get_db_settings_option('menu_button_overlay_effect/menu_button_overlay_effect_switch');
		$menu_button_overlay_effect_types = fw_get_db_settings_option('menu_button_overlay_effect/enabled/menu_button_overlay_effect_types');
		$menu_button_radius = fw_get_db_settings_option('menu_button_radius');
		$menu_button_top_border_switch = fw_get_db_settings_option('menu_button_top_border/top_border_switch');
		$menu_button_top_border_color = naslaan_theme_option_functions::naslaan_menu_top_border_color();
		$menu_button_top_border_hover_color = naslaan_theme_option_functions::naslaan_menu_top_border_hover_color();
		$menu_button_top_border_height = fw_get_db_settings_option('menu_button_top_border/enabled/top_border_height');
		$menu_button_right_border_switch = fw_get_db_settings_option('menu_button_right_border/right_border_switch');
		$menu_button_right_border_color = naslaan_theme_option_functions::naslaan_menu_right_border_color();
		$menu_button_right_border_hover_color = naslaan_theme_option_functions::naslaan_menu_right_border_hover_color();
		$menu_button_right_border_height = fw_get_db_settings_option('menu_button_right_border/enabled/right_border_height');
		$menu_button_bottom_border_switch = fw_get_db_settings_option('menu_button_bottom_border/bottom_border_switch');
		$menu_button_bottom_border_color = naslaan_theme_option_functions::naslaan_menu_bottom_border_color();
		$menu_button_bottom_border_hover_color = naslaan_theme_option_functions::naslaan_menu_bottom_border_hover_color();
		$menu_button_bottom_border_height = fw_get_db_settings_option('menu_button_bottom_border/enabled/bottom_border_height');
		$menu_button_left_border_switch = fw_get_db_settings_option('menu_button_left_border/left_border_switch');
		$menu_button_left_border_color = naslaan_theme_option_functions::naslaan_menu_left_border_color();
		$menu_button_left_border_hover_color = naslaan_theme_option_functions::naslaan_menu_left_border_hover_color();
		$menu_button_left_border_height = fw_get_db_settings_option('menu_button_left_border/enabled/left_border_height');
		
		$bullet_color = fw_get_db_settings_option('menu_dropdown_variant/variant_2/bullet_color');
		$menu_dropdown_border_switch = fw_get_db_settings_option('menu_dropdown_border/menu_dropdown_border_switch');
		$menu_dropdown_border_color = fw_get_db_settings_option('menu_dropdown_border/enabled/menu_dropdown_border_color');
		$dropdown_font = fw_get_db_settings_option('dropdown_font');
		$dropdown_color = fw_get_db_settings_option('dropdown_color');
		$dropdown_color_hover = fw_get_db_settings_option('dropdown_color_hover');
		$dropdown_title_font = fw_get_db_settings_option('dropdown_title_font');
		
		$search_form_visibility = fw_get_db_settings_option('search_form/search_form_visibility');
		$search_btn_container_margin_top = fw_get_db_settings_option('search_form/enabled/search_btn_container_margin_top');
		$search_btn_container_margin_right = fw_get_db_settings_option('search_form/enabled/search_btn_container_margin_right');
		$search_btn_container_margin_bottom = fw_get_db_settings_option('search_form/enabled/search_btn_container_margin_bottom');
		$search_btn_container_margin_left = fw_get_db_settings_option('search_form/enabled/search_btn_container_margin_left');
		$search_btn_sepline = fw_get_db_settings_option('search_form/enabled/search_btn_sepline/sepline_switch');
		$search_btn_sepline_color = naslaan_theme_option_functions::naslaan_search_btn_sepline_color();
		$search_btn_margin_right = fw_get_db_settings_option('search_form/enabled/search_btn_margin_right');
		$search_btn_margin_left = fw_get_db_settings_option('search_form/enabled/search_btn_margin_left');
		$search_btn_width = fw_get_db_settings_option('search_form/enabled/search_btn_width');
		$search_btn_icon_size = fw_get_db_settings_option('search_form/enabled/search_btn_icon_size');
		$search_btn_color = naslaan_theme_option_functions::naslaan_search_btn_color();
		$search_btn_color_hover = naslaan_theme_option_functions::naslaan_search_btn_color_hover();
		$search_btn_background = naslaan_theme_option_functions::naslaan_search_btn_background();
		$search_btn_background_hover = naslaan_theme_option_functions::naslaan_search_btn_background_hover();
		$search_button_border = fw_get_db_settings_option('search_form/enabled/search_button_border/search_button_border_switch');
		$search_border_weight = fw_get_db_settings_option('search_form/enabled/search_button_border/enabled/search_border_weight');
		$search_border_color = naslaan_theme_option_functions::naslaan_search_border_color();
		$search_border_color_hover = naslaan_theme_option_functions::naslaan_search_border_color_hover();
		
		$msg_container_visibility = fw_get_db_settings_option('msg_container_visibility/msg_container_switch');
		$msg_container_margin_top = fw_get_db_settings_option('msg_container_visibility/enabled/msg_container_margin_top');
		$msg_container_margin_right = fw_get_db_settings_option('msg_container_visibility/enabled/msg_container_margin_right');
		$msg_container_margin_bottom = fw_get_db_settings_option('msg_container_visibility/enabled/msg_container_margin_bottom');
		$msg_container_margin_left = fw_get_db_settings_option('msg_container_visibility/enabled/msg_container_margin_left');
		$msg_container_sepline = fw_get_db_settings_option('msg_container_visibility/enabled/msg_container_sepline/sepline_switch');
		$msg_container_sepline_color = naslaan_theme_option_functions::naslaan_msg_container_sepline_color();
		$msg_block_margin_right = fw_get_db_settings_option('msg_container_visibility/enabled/msg_block_margin_right');
		$msg_block_margin_left = fw_get_db_settings_option('msg_container_visibility/enabled/msg_block_margin_left');
		$msg_block_padding_right = fw_get_db_settings_option('msg_container_visibility/enabled/msg_block_padding_right');
		$msg_block_padding_left = fw_get_db_settings_option('msg_container_visibility/enabled/msg_block_padding_left');
		$msg_block_content = fw_get_db_settings_option('msg_container_visibility/enabled/msg_block_content');
		$msg_block_url = fw_get_db_settings_option('msg_container_visibility/enabled/msg_block_url');
		$msg_block_text = fw_get_db_settings_option('msg_container_visibility/enabled/msg_block_text');
		$msg_block_text_color = naslaan_theme_option_functions::naslaan_msg_block_text_color();
		$msg_block_underline = naslaan_theme_option_functions::naslaan_msg_block_underline();
		$msg_block_background = naslaan_theme_option_functions::naslaan_msg_block_background();
		$msg_block_border = fw_get_db_settings_option('msg_container_visibility/enabled/msg_block_border/msg_block_border_switch');
		$msg_block_border_weight = fw_get_db_settings_option('msg_container_visibility/enabled/msg_block_border/enabled/msg_block_border_weight');
		$msg_block_border_color = naslaan_theme_option_functions::naslaan_msg_block_border_color();
		$msg_block_border_color_hover = naslaan_theme_option_functions::naslaan_msg_block_border_color_hover();
		
		$social_media_visibility = fw_get_db_settings_option('header_social_media_picker/social_media_visibility');
		$social_media_btn_color = naslaan_theme_option_functions::naslaan_header_social_media_btn_color();
		$social_media_btn_hover_color = naslaan_theme_option_functions::naslaan_header_social_media_btn_hover_color();
		$social_media_btn_background = naslaan_theme_option_functions::naslaan_header_social_media_btn_background();
		$social_media_btn_background_hover = naslaan_theme_option_functions::naslaan_header_social_media_btn_background_hover();
		$social_media_tooltip_bg = naslaan_theme_option_functions::naslaan_header_social_media_tooltip_bg();
		$social_media_container_margin_top = fw_get_db_settings_option('header_social_media_container_margin_top');
		$social_media_container_margin_right = fw_get_db_settings_option('header_social_media_container_margin_right');
		$social_media_container_margin_bottom = fw_get_db_settings_option('header_social_media_container_margin_bottom');
		$social_media_container_margin_left = fw_get_db_settings_option('header_social_media_container_margin_left');
		$social_media_sepline = fw_get_db_settings_option('header_social_media_sepline/sepline_switch');
		$social_media_sepline_color = naslaan_theme_option_functions::naslaan_header_social_media_sepline_color();
		$social_media_margin_right = fw_get_db_settings_option('header_social_media_margin_right');
		$social_media_margin_left = fw_get_db_settings_option('header_social_media_margin_left');
		
		$shopping_cart_visibility = fw_get_db_settings_option('shopping_cart/shopping_cart_visibility');
		$shopping_cart_btn_container_margin_top = fw_get_db_settings_option('shopping_cart/enabled/shopping_cart_btn_container_margin_top');
		$shopping_cart_btn_container_margin_right = fw_get_db_settings_option('shopping_cart/enabled/shopping_cart_btn_container_margin_right');
		$shopping_cart_btn_container_margin_bottom = fw_get_db_settings_option('shopping_cart/enabled/shopping_cart_btn_container_margin_bottom');
		$shopping_cart_btn_container_margin_left = fw_get_db_settings_option('shopping_cart/enabled/shopping_cart_btn_container_margin_left');
		$shopping_sepline_switch = fw_get_db_settings_option('shopping_cart/enabled/shopping_cart_btn_sepline/sepline_switch');
		$shopping_cart_btn_sepline_color = naslaan_theme_option_functions::naslaan_shopping_cart_btn_sepline_color();
		$shopping_cart_btn_margin_right = fw_get_db_settings_option('shopping_cart/enabled/shopping_cart_btn_margin_right');
		$shopping_cart_btn_margin_left = fw_get_db_settings_option('shopping_cart/enabled/shopping_cart_btn_margin_left');
		$shopping_cart_btn_padding_bottom = fw_get_db_settings_option('shopping_cart/enabled/shopping_cart_btn_padding_bottom');
		$shopping_cart_btn_width = fw_get_db_settings_option('shopping_cart/enabled/shopping_cart_btn_width');
		$shopping_cart_btn_color = naslaan_theme_option_functions::naslaan_shopping_cart_btn_color();
		$shopping_cart_btn_color_hover = naslaan_theme_option_functions::naslaan_shopping_cart_btn_color_hover();
		$shopping_cart_btn_background = naslaan_theme_option_functions::naslaan_shopping_cart_btn_background();
		$shopping_cart_btn_background_hover = naslaan_theme_option_functions::naslaan_shopping_cart_btn_background_hover();
		$shopping_cart_alternative = fw_get_db_settings_option('shopping_cart/enabled/shopping_cart_alternative/shopping_cart_alternative_switch');
		$shopping_cart_btn_counter_color = naslaan_theme_option_functions::naslaan_shopping_cart_btn_counter_color();
		$shopping_cart_btn_counter_color_hover = naslaan_theme_option_functions::naslaan_shopping_cart_btn_counter_color_hover();
		$shopping_cart_btn_counter_bg = naslaan_theme_option_functions::naslaan_shopping_cart_btn_counter_bg();
		$shopping_cart_btn_counter_bg_hover = naslaan_theme_option_functions::naslaan_shopping_cart_btn_counter_bg_hover();
		$shopping_cart_button_border_switch = fw_get_db_settings_option('shopping_cart/enabled/shopping_cart_button_border/shopping_cart_button_border_switch');
		$shopping_cart_border_weight = fw_get_db_settings_option('shopping_cart/enabled/shopping_cart_button_border/enabled/shopping_cart_border_weight');
		$shopping_cart_border_color = naslaan_theme_option_functions::naslaan_shopping_cart_border_color();
		$shopping_cart_border_color_hover = naslaan_theme_option_functions::naslaan_shopping_cart_border_color_hover();
		
		$wpml_container_switch = fw_get_db_settings_option('wpml_container_visibility/wpml_container_switch');
		$wpml_container_margin_top = fw_get_db_settings_option('wpml_container_visibility/enabled/wpml_container_margin_top');
		$wpml_container_margin_right = fw_get_db_settings_option('wpml_container_visibility/enabled/wpml_container_margin_right');
		$wpml_container_margin_left = fw_get_db_settings_option('wpml_container_visibility/enabled/wpml_container_margin_left');
		$wpml_container_margin_bottom = fw_get_db_settings_option('wpml_container_visibility/enabled/wpml_container_margin_bottom');
		$wpml_btn_sepline = fw_get_db_settings_option('wpml_container_visibility/enabled/wpml_btn_sepline/sepline_switch');
		$wpml_btn_sepline_color = naslaan_theme_option_functions::naslaan_wpml_btn_sepline_color();
		$wpml_btn_margin_right = fw_get_db_settings_option('wpml_container_visibility/enabled/wpml_btn_margin_right');
		$wpml_btn_margin_left = fw_get_db_settings_option('wpml_container_visibility/enabled/wpml_btn_margin_left');
		$wpml_btn_padding_bottom = fw_get_db_settings_option('wpml_container_visibility/enabled/wpml_btn_padding_bottom');
		$wpml_btn_width = fw_get_db_settings_option('wpml_container_visibility/enabled/wpml_btn_width');
		$wpml_btn_font = fw_get_db_settings_option('wpml_container_visibility/enabled/wpml_btn_font');
		$wpml_btn_font_uppercase = fw_get_db_settings_option('wpml_container_visibility/enabled/wpml_btn_font_uppercase');
		$wpml_btn_color = naslaan_theme_option_functions::naslaan_wpml_btn_color();
		$wpml_btn_color_hover = naslaan_theme_option_functions::naslaan_wpml_btn_color_hover();
		$wpml_btn_background = naslaan_theme_option_functions::naslaan_wpml_btn_background();
		$wpml_btn_background_hover = naslaan_theme_option_functions::naslaan_wpml_btn_background_hover();
		$wpml_button_border_switch = fw_get_db_settings_option('wpml_container_visibility/enabled/wpml_button_border/wpml_button_border_switch');
		$wpml_border_weight = fw_get_db_settings_option('wpml_container_visibility/enabled/wpml_button_border/enabled/wpml_border_weight');
		$wpml_border_color = naslaan_theme_option_functions::naslaan_wpml_border_color();
		$wpml_border_color_hover = naslaan_theme_option_functions::naslaan_wpml_border_color_hover();
		$wpml_dropdown_text_color = fw_get_db_settings_option('wpml_container_visibility/enabled/wpml_dropdown_text_color');
		$wpml_dropdown_text_color_hover = fw_get_db_settings_option('wpml_container_visibility/enabled/wpml_dropdown_text_color_hover');
		
		// Header 2nd Styles
		$second_custom_styles_switch = fw_get_db_settings_option('second_header_custom_styles/second_custom_styles_switch');
		$second_header_background = fw_get_db_settings_option('second_header_custom_styles/enabled/header_background');
		$second_top_border_color = fw_get_db_settings_option('second_header_custom_styles/enabled/top_border_color');
		$second_bottom_border_color = fw_get_db_settings_option('second_header_custom_styles/enabled/bottom_border_color');
		$second_right_bar_border_color = fw_get_db_settings_option('second_header_custom_styles/enabled/right_bar_border_color');
		$second_left_bar_border_color = fw_get_db_settings_option('second_header_custom_styles/enabled/left_bar_border_color');
		$second_bottom_bar_border_color = fw_get_db_settings_option('second_header_custom_styles/enabled/bottom_bar_border_color');
		$second_nav_holder_bg = fw_get_db_settings_option('second_header_custom_styles/enabled/nav_holder_bg');
		$second_nav_holder_top_border_color = fw_get_db_settings_option('second_header_custom_styles/enabled/nav_holder_top_border_color');
		$second_nav_holder_bottom_border_color = fw_get_db_settings_option('second_header_custom_styles/enabled/nav_holder_bottom_border_color');
		
		$second_header_logo_text_color = fw_get_db_settings_option('second_header_custom_styles/enabled/text_logo_color');
		$second_header_logo_text_border_color = fw_get_db_settings_option('second_header_custom_styles/enabled/logo_border_color');
		$second_header_logo_image = fw_get_db_settings_option('second_header_custom_styles/enabled/header_logo_image/url');
		$second_header_logo_border_color = fw_get_db_settings_option('second_header_custom_styles/enabled/logo_border_color');
		
		$second_menu_button_color = fw_get_db_settings_option('second_header_custom_styles/enabled/menu_button_color');
		$second_menu_button_color_hover = fw_get_db_settings_option('second_header_custom_styles/enabled/menu_button_color_hover');
		$second_menu_background_color = fw_get_db_settings_option('second_header_custom_styles/enabled/menu_background_color');
		$second_menu_background_color_hover = fw_get_db_settings_option('second_header_custom_styles/enabled/menu_background_color_hover');
		$second_menu_button_top_border_color = fw_get_db_settings_option('second_header_custom_styles/enabled/menu_button_top_border_color');
		$second_menu_button_top_border_hover_color = fw_get_db_settings_option('second_header_custom_styles/enabled/menu_button_top_border_hover_color');
		$second_menu_button_right_border_color = fw_get_db_settings_option('second_header_custom_styles/enabled/menu_button_right_border_color');
		$second_menu_button_right_border_hover_color = fw_get_db_settings_option('second_header_custom_styles/enabled/menu_button_right_border_hover_color');
		$second_menu_button_bottom_border_color = fw_get_db_settings_option('second_header_custom_styles/enabled/menu_button_bottom_border_color');
		$second_menu_button_bottom_border_hover_color = fw_get_db_settings_option('second_header_custom_styles/enabled/menu_button_bottom_border_hover_color');
		$second_menu_button_left_border_color = fw_get_db_settings_option('second_header_custom_styles/enabled/menu_button_left_border_color');
		$second_menu_button_left_border_hover_color = fw_get_db_settings_option('second_header_custom_styles/enabled/menu_button_left_border_hover_color');
		
		$second_search_btn_sepline_color = fw_get_db_settings_option('second_header_custom_styles/enabled/search_btn_sepline_color');
		$second_search_btn_color = fw_get_db_settings_option('second_header_custom_styles/enabled/search_btn_color');
		$second_search_btn_color_hover = fw_get_db_settings_option('second_header_custom_styles/enabled/search_btn_color_hover');
		$second_search_btn_background = fw_get_db_settings_option('second_header_custom_styles/enabled/search_btn_background');
		$second_search_btn_background_hover = fw_get_db_settings_option('second_header_custom_styles/enabled/search_btn_background_hover');
		$second_search_border_color = fw_get_db_settings_option('second_header_custom_styles/enabled/search_border_color');
		$second_search_border_color_hover = fw_get_db_settings_option('second_header_custom_styles/enabled/search_border_color_hover');

		$second_msg_container_sepline_color = fw_get_db_settings_option('second_header_custom_styles/enabled/msg_container_sepline_color');
		$second_msg_block_text_color = fw_get_db_settings_option('second_header_custom_styles/enabled/msg_block_text_color');
		$second_msg_block_underline = fw_get_db_settings_option('second_header_custom_styles/enabled/msg_block_underline');
		$second_msg_block_background = fw_get_db_settings_option('second_header_custom_styles/enabled/msg_block_background');
		$second_msg_block_border_color = fw_get_db_settings_option('second_header_custom_styles/enabled/msg_block_border_color');
		$second_msg_block_border_color_hover = fw_get_db_settings_option('second_header_custom_styles/enabled/msg_block_border_color_hover');
		
		$second_social_media_btn_color = fw_get_db_settings_option('second_header_custom_styles/enabled/header_social_media_btn_color');
		$second_social_media_btn_hover_color = fw_get_db_settings_option('second_header_custom_styles/enabled/header_social_media_btn_hover_color');
		$second_social_media_btn_background = fw_get_db_settings_option('second_header_custom_styles/enabled/header_social_media_btn_background');
		$second_social_media_btn_background_hover = fw_get_db_settings_option('second_header_custom_styles/enabled/header_social_media_btn_background_hover');
		$second_social_media_tooltip_bg = fw_get_db_settings_option('second_header_custom_styles/enabled/header_social_media_tooltip_bg');
		$second_social_media_sepline_color = fw_get_db_settings_option('second_header_custom_styles/enabled/header_social_media_sepline_color');
		
		$second_shopping_cart_btn_sepline_color = fw_get_db_settings_option('fw/option type/rgba/color/picker initialized');
		$second_shopping_cart_btn_color = fw_get_db_settings_option('second_header_custom_styles/enabled/shopping_cart_btn_color');
		$second_shopping_cart_btn_color_hover = fw_get_db_settings_option('second_header_custom_styles/enabled/shopping_cart_btn_color');
		$second_shopping_cart_btn_background = fw_get_db_settings_option('second_header_custom_styles/enabled/shopping_cart_btn_background');
		$second_shopping_cart_btn_background_hover = fw_get_db_settings_option('second_header_custom_styles/enabled/shopping_cart_btn_background_hover');
		$second_shopping_cart_btn_counter_color = fw_get_db_settings_option('second_header_custom_styles/enabled/shopping_cart_btn_counter_color');
		$second_shopping_cart_btn_counter_color_hover = fw_get_db_settings_option('second_header_custom_styles/enabled/shopping_cart_btn_counter_color_hover');
		$second_shopping_cart_btn_counter_bg = fw_get_db_settings_option('second_header_custom_styles/enabled/shopping_cart_btn_counter_bg');
		$second_shopping_cart_btn_counter_bg_hover = fw_get_db_settings_option('second_header_custom_styles/enabled/shopping_cart_btn_counter_bg_hover');
		$second_shopping_cart_border_color = fw_get_db_settings_option('second_header_custom_styles/enabled/shopping_cart_border_color');
		$second_shopping_cart_border_color_hover = fw_get_db_settings_option('second_header_custom_styles/enabled/shopping_cart_border_color_hover');
		
		$second_wpml_btn_sepline_color = fw_get_db_settings_option('second_header_custom_styles/enabled/wpml_btn_sepline_color');
		$second_wpml_btn_color = fw_get_db_settings_option('second_header_custom_styles/enabled/wpml_btn_color');
		$second_wpml_btn_color_hover = fw_get_db_settings_option('second_header_custom_styles/enabled/wpml_btn_color_hover');
		$second_wpml_btn_background = fw_get_db_settings_option('second_header_custom_styles/enabled/wpml_btn_background');
		$second_wpml_btn_background_hover = fw_get_db_settings_option('second_header_custom_styles/enabled/wpml_btn_background_hover');
		$second_wpml_border_color = fw_get_db_settings_option('second_header_custom_styles/enabled/wpml_border_color');
		$second_wpml_border_color_hover = fw_get_db_settings_option('second_header_custom_styles/enabled/wpml_border_color_hover');
		
		// Mobile Navigation
		$header_top_block_1_visibility = fw_get_db_settings_option('header_top_switch/enabled/header_top_block_1_switch/header_top_block_visibility');
		$header_top_block_1_icon_color = fw_get_db_settings_option('header_top_switch/enabled/header_top_block_1_switch/enabled/header_top_block_icon_color');
		$header_top_block_1_title_text = fw_get_db_settings_option('header_top_switch/enabled/header_top_block_1_switch/enabled/header_top_block_title_text');
		$header_top_block_1_desc_text = fw_get_db_settings_option('header_top_switch/enabled/header_top_block_1_switch/enabled/header_top_block_desc_text');
		$header_top_block_1_margin_top = fw_get_db_settings_option('header_top_switch/enabled/header_top_block_1_switch/enabled/header_top_block_margin_top');
		$header_top_block_1_margin_right = fw_get_db_settings_option('header_top_switch/enabled/header_top_block_1_switch/enabled/header_top_block_margin_right');
		$header_top_block_1_margin_bottom = fw_get_db_settings_option('header_top_switch/enabled/header_top_block_1_switch/enabled/header_top_block_margin_bottom');
		$header_top_block_1_margin_left = fw_get_db_settings_option('header_top_switch/enabled/header_top_block_1_switch/enabled/header_top_block_margin_left');
		$header_top_block_2_visibility = fw_get_db_settings_option('header_top_switch/enabled/header_top_block_2_switch/header_top_block_visibility');
		$header_top_block_2_icon_color = fw_get_db_settings_option('header_top_switch/enabled/header_top_block_2_switch/enabled/header_top_block_icon_color');
		$header_top_block_2_title_text = fw_get_db_settings_option('header_top_switch/enabled/header_top_block_2_switch/enabled/header_top_block_title_text');
		$header_top_block_2_desc_text = fw_get_db_settings_option('header_top_switch/enabled/header_top_block_2_switch/enabled/header_top_block_desc_text');
		$header_top_block_2_margin_top = fw_get_db_settings_option('header_top_switch/enabled/header_top_block_2_switch/enabled/header_top_block_margin_top');
		$header_top_block_2_margin_right = fw_get_db_settings_option('header_top_switch/enabled/header_top_block_2_switch/enabled/header_top_block_margin_right');
		$header_top_block_2_margin_bottom = fw_get_db_settings_option('header_top_switch/enabled/header_top_block_2_switch/enabled/header_top_block_margin_bottom');
		$header_top_block_2_margin_left = fw_get_db_settings_option('header_top_switch/enabled/header_top_block_2_switch/enabled/header_top_block_margin_left');
		$header_top_block_3_visibility = fw_get_db_settings_option('header_top_switch/enabled/header_top_block_3_switch/header_top_block_visibility');
		$header_top_block_3_icon_color = fw_get_db_settings_option('header_top_switch/enabled/header_top_block_3_switch/enabled/header_top_block_icon_color');
		$header_top_block_3_title_text = fw_get_db_settings_option('header_top_switch/enabled/header_top_block_3_switch/enabled/header_top_block_title_text');
		$header_top_block_3_desc_text = fw_get_db_settings_option('header_top_switch/enabled/header_top_block_3_switch/enabled/header_top_block_desc_text');
		$header_top_block_3_margin_top = fw_get_db_settings_option('header_top_switch/enabled/header_top_block_3_switch/enabled/header_top_block_margin_top');
		$header_top_block_3_margin_right = fw_get_db_settings_option('header_top_switch/enabled/header_top_block_3_switch/enabled/header_top_block_margin_right');
		$header_top_block_3_margin_bottom = fw_get_db_settings_option('header_top_switch/enabled/header_top_block_3_switch/enabled/header_top_block_margin_bottom');
		$header_top_block_3_margin_left = fw_get_db_settings_option('header_top_switch/enabled/header_top_block_3_switch/enabled/header_top_block_margin_left');
		$header_top_block_4_visibility = fw_get_db_settings_option('header_top_switch/enabled/header_top_block_4_switch/header_top_block_visibility');
		$header_top_block_4_icon_color = fw_get_db_settings_option('header_top_switch/enabled/header_top_block_4_switch/enabled/header_top_block_icon_color');
		$header_top_block_4_title_text = fw_get_db_settings_option('header_top_switch/enabled/header_top_block_4_switch/enabled/header_top_block_title_text');
		$header_top_block_4_desc_text = fw_get_db_settings_option('header_top_switch/enabled/header_top_block_4_switch/enabled/header_top_block_desc_text');
		$header_top_block_4_margin_top = fw_get_db_settings_option('header_top_switch/enabled/header_top_block_4_switch/enabled/header_top_block_margin_top');
		$header_top_block_4_margin_right = fw_get_db_settings_option('header_top_switch/enabled/header_top_block_4_switch/enabled/header_top_block_margin_right');
		$header_top_block_4_margin_bottom = fw_get_db_settings_option('header_top_switch/enabled/header_top_block_4_switch/enabled/header_top_block_margin_bottom');
		$header_top_block_4_margin_left = fw_get_db_settings_option('header_top_switch/enabled/header_top_block_4_switch/enabled/header_top_block_margin_left');
		
		// Mobile Navigation
		$mob_first_level_nav_font = fw_get_db_settings_option('mob_first_level_nav_font');
		$mob_first_level_nav_color = fw_get_db_settings_option('mob_first_level_nav_color');
		$mob_first_level_nav_color_hover = fw_get_db_settings_option('mob_first_level_nav_color_hover');
		$mob_nav_font = fw_get_db_settings_option('mob_nav_font');
		$mob_nav_color = fw_get_db_settings_option('mob_nav_color');
		$mob_nav_color_hover = fw_get_db_settings_option('mob_nav_color_hover');
		$mob_nav_title_font = fw_get_db_settings_option('mob_nav_title_font');
		$mob_nav_title_font_color = fw_get_db_settings_option('mob_nav_title_font_color');
		$mob_nav_btn_margin_top = fw_get_db_settings_option('mob_nav_btn_margin_top');
		$mob_nav_btn_margin_right = fw_get_db_settings_option('mob_nav_btn_margin_right');
		$mob_nav_btn_margin_bottom = fw_get_db_settings_option('mob_nav_btn_margin_bottom');
		$mob_nav_btn_margin_left = fw_get_db_settings_option('mob_nav_btn_margin_left');
		$mob_nav_btn_color = fw_get_db_settings_option('mob_nav_btn_color');
		$mob_nav_btn_color_hover = fw_get_db_settings_option('mob_nav_btn_color_hover');
		
		// Sticky Header
		$sticky_header_visibility = fw_get_db_settings_option('sticky_header_switch/sticky_header_visibility');
		
		$sticky_background = fw_get_db_settings_option('sticky_header_switch/enabled/header_background');
		$sticky_top_border_switch = fw_get_db_settings_option('sticky_header_switch/enabled/middle_header_top_border/top_border_switch');
		$sticky_top_border_color = fw_get_db_settings_option('sticky_header_switch/enabled/middle_header_top_border/enabled/top_border_color');
		$sticky_top_border_height = fw_get_db_settings_option('sticky_header_switch/enabled/middle_header_top_border/enabled/top_border_height');
		$sticky_bottom_border_switch = fw_get_db_settings_option('sticky_header_switch/enabled/middle_header_bottom_border/bottom_border_switch');
		$sticky_bottom_border_color = fw_get_db_settings_option('sticky_header_switch/enabled/middle_header_bottom_border/enabled/bottom_border_color');
		$sticky_bottom_border_height = fw_get_db_settings_option('sticky_header_switch/enabled/middle_header_bottom_border/enabled/bottom_border_height');
		$sticky_mob_nav_btn_color = fw_get_db_settings_option('sticky_header_switch/enabled/mob_nav_btn_color');
		$sticky_mob_nav_btn_color_hover = fw_get_db_settings_option('sticky_header_switch/enabled/mob_nav_btn_color_hover');
		$sticky_mob_nav_btn_bg = fw_get_db_settings_option('sticky_header_switch/enabled/mob_nav_btn_bg');
		$sticky_mob_nav_btn_bg_hover = fw_get_db_settings_option('sticky_header_switch/enabled/mob_nav_btn_bg_hover');
		$sticky_logo_type = fw_get_db_settings_option('sticky_header_switch/enabled/header_logo/logo_type');
		$sticky_logo_text = fw_get_db_settings_option('sticky_header_switch/enabled/header_logo/text_logo/header_logo_text');
		$sticky_logo_text_padding_top = fw_get_db_settings_option('sticky_header_switch/enabled/header_logo/text_logo/header_logo_text_padding_top');
		$sticky_logo_text_padding_right = fw_get_db_settings_option('sticky_header_switch/enabled/header_logo/text_logo/header_logo_text_padding_right');
		$sticky_logo_text_padding_bottom = fw_get_db_settings_option('sticky_header_switch/enabled/header_logo/text_logo/header_logo_text_padding_bottom');
		$sticky_logo_text_padding_left = fw_get_db_settings_option('sticky_header_switch/enabled/header_logo/text_logo/header_logo_text_padding_left');
		$sticky_logo_text_border_switch = fw_get_db_settings_option('sticky_header_switch/enabled/header_logo/text_logo/header_logo_text_border/logo_border_switch');
		$sticky_logo_text_border_color = fw_get_db_settings_option('sticky_header_switch/enabled/header_logo/text_logo/header_logo_text_border/enabled/logo_border_color');
		$sticky_logo_image = fw_get_db_settings_option('sticky_header_switch/enabled/header_logo/image_logo/header_logo_image');
		$sticky_logo_width = fw_get_db_settings_option('sticky_header_switch/enabled/header_logo/image_logo/header_logo_width');
		$sticky_logo_padding_top = fw_get_db_settings_option('sticky_header_switch/enabled/header_logo/image_logo/header_logo_padding_top');
		$sticky_logo_padding_right = fw_get_db_settings_option('sticky_header_switch/enabled/header_logo/image_logo/header_logo_padding_right');
		$sticky_logo_padding_bottom = fw_get_db_settings_option('sticky_header_switch/enabled/header_logo/image_logo/header_logo_padding_bottom');
		$sticky_logo_padding_left = fw_get_db_settings_option('sticky_header_switch/enabled/header_logo/image_logo/header_logo_padding_left');
		$sticky_logo_border_switch = fw_get_db_settings_option('sticky_header_switch/enabled/header_logo/image_logo/logo_border/logo_border_switch');
		$sticky_logo_border_color = fw_get_db_settings_option('sticky_header_switch/enabled/header_logo/image_logo/logo_border/enabled/logo_border_color');
		$sticky_navigation_margin_right = fw_get_db_settings_option('sticky_header_switch/enabled/navigation_margin_right');
		$sticky_navigation_margin_left = fw_get_db_settings_option('sticky_header_switch/enabled/navigation_margin_left');
		$sticky_menu_item_padding_top = fw_get_db_settings_option('sticky_header_switch/enabled/menu_item_padding_top');
		$sticky_menu_item_padding_right = fw_get_db_settings_option('sticky_header_switch/enabled/menu_item_padding_right');
		$sticky_menu_item_padding_bottom = fw_get_db_settings_option('sticky_header_switch/enabled/menu_item_padding_bottom');
		$sticky_menu_item_padding_left = fw_get_db_settings_option('sticky_header_switch/enabled/menu_item_padding_left');
		$sticky_menu_button_paddings_nl_switch = fw_get_db_settings_option('sticky_header_switch/enabled/menu_button_paddings_notebook_layout/menu_button_paddings_nl_switch');
		$sticky_menu_button_padding_right_nl = fw_get_db_settings_option('sticky_header_switch/enabled/menu_button_paddings_notebook_layout/enabled/menu_button_padding_right_nl');
		$sticky_menu_button_padding_left_nl = fw_get_db_settings_option('sticky_header_switch/enabled/menu_button_paddings_notebook_layout/enabled/menu_button_padding_left_nl');
		$sticky_menu_button_paddings_tl_switch = fw_get_db_settings_option('sticky_header_switch/enabled/menu_button_paddings_tablet_layout/menu_button_paddings_tl_switch');
		$sticky_menu_button_padding_right_tl = fw_get_db_settings_option('sticky_header_switch/enabled/menu_button_paddings_tablet_layout/enabled/menu_button_padding_right_tl');
		$sticky_menu_button_padding_left_tl = fw_get_db_settings_option('sticky_header_switch/enabled/menu_button_paddings_tablet_layout/enabled/menu_button_padding_left_tl');
		$sticky_menu_button_inner_padding_right = fw_get_db_settings_option('sticky_header_switch/enabled/menu_button_inner_padding_right');
		$sticky_menu_button_inner_padding_left = fw_get_db_settings_option('sticky_header_switch/enabled/menu_button_inner_padding_left');
		$sticky_menu_button_inner_paddings_nl_switch = fw_get_db_settings_option('sticky_header_switch/enabled/menu_button_inner_paddings_notebook_layout/menu_button_inner_paddings_nl_switch');
		$sticky_menu_button_inner_padding_right_nl = fw_get_db_settings_option('sticky_header_switch/enabled/menu_button_inner_paddings_notebook_layout/enabled/menu_button_inner_padding_right_nl');
		$sticky_menu_button_inner_padding_left_nl = fw_get_db_settings_option('sticky_header_switch/enabled/menu_button_inner_paddings_notebook_layout/enabled/menu_button_inner_padding_left_nl');
		$sticky_menu_button_inner_paddings_tl_switch = fw_get_db_settings_option('sticky_header_switch/enabled/menu_button_inner_paddings_tablet_layout/menu_button_inner_paddings_tl_switch');
		$sticky_menu_button_inner_padding_right_tl = fw_get_db_settings_option('sticky_header_switch/enabled/menu_button_inner_paddings_tablet_layout/enabled/menu_button_inner_padding_right_tl');
		$sticky_menu_button_inner_padding_left_tl = fw_get_db_settings_option('sticky_header_switch/enabled/menu_button_inner_paddings_tablet_layout/enabled/menu_button_inner_padding_left_tl');
		$sticky_menu_button_text = fw_get_db_settings_option('sticky_header_switch/enabled/menu_button_text');
		$sticky_menu_button_text_nl_switch = fw_get_db_settings_option('sticky_header_switch/enabled/menu_button_text_notebook_layout/menu_button_text_nl_switch');
		$sticky_menu_button_text_nl = fw_get_db_settings_option('sticky_header_switch/enabled/menu_button_text_notebook_layout/enabled/font_size');
		$sticky_menu_button_text_tl_switch = fw_get_db_settings_option('sticky_header_switch/enabled/menu_button_text_tablet_layout/menu_button_text_tl_switch');
		$sticky_menu_button_text_tl = fw_get_db_settings_option('sticky_header_switch/enabled/menu_button_text_tablet_layout/enabled/font_size');
		$sticky_menu_button_color = fw_get_db_settings_option('sticky_header_switch/enabled/menu_button_color');
		$sticky_menu_button_color_hover = fw_get_db_settings_option('sticky_header_switch/enabled/menu_button_color_hover');
		$sticky_menu_background_color = fw_get_db_settings_option('sticky_header_switch/enabled/menu_background_color');
		$sticky_menu_background_color_hover = fw_get_db_settings_option('sticky_header_switch/enabled/menu_background_color_hover');
		$sticky_menu_button_overlay_effect_switch = fw_get_db_settings_option('sticky_header_switch/enabled/menu_button_overlay_effect/menu_button_overlay_effect_switch');
		$sticky_menu_button_overlay_effect_types = fw_get_db_settings_option('sticky_header_switch/enabled/menu_button_overlay_effect/enabled/menu_button_overlay_effect_types');
		$sticky_menu_button_radius = fw_get_db_settings_option('sticky_header_switch/enabled/menu_button_radius');

		$sticky_menu_button_top_border_switch = fw_get_db_settings_option('sticky_header_switch/enabled/menu_button_top_border/top_border_switch');
		$sticky_menu_button_top_border_color = fw_get_db_settings_option('sticky_header_switch/enabled/menu_button_top_border/enabled/top_border_color');
		$sticky_menu_button_top_border_hover_color = fw_get_db_settings_option('sticky_header_switch/enabled/menu_button_top_border/enabled/top_border_hover_color');
		$sticky_menu_button_top_border_height = fw_get_db_settings_option('sticky_header_switch/enabled/menu_button_top_border/enabled/top_border_height');
		
		$sticky_menu_button_right_border_switch = fw_get_db_settings_option('sticky_header_switch/enabled/menu_button_right_border/right_border_switch');
		$sticky_menu_button_right_border_color = fw_get_db_settings_option('sticky_header_switch/enabled/menu_button_right_border/enabled/right_border_color');
		$sticky_menu_button_right_border_hover_color = fw_get_db_settings_option('sticky_header_switch/enabled/menu_button_right_border/enabled/right_border_hover_color');
		$sticky_menu_button_right_border_height = fw_get_db_settings_option('sticky_header_switch/enabled/menu_button_right_border/enabled/right_border_height');
		
		$sticky_menu_button_bottom_border_switch = fw_get_db_settings_option('sticky_header_switch/enabled/menu_button_bottom_border/bottom_border_switch');
		$sticky_menu_button_bottom_border_color = fw_get_db_settings_option('sticky_header_switch/enabled/menu_button_bottom_border/enabled/bottom_border_color');
		$sticky_menu_button_bottom_border_hover_color = fw_get_db_settings_option('sticky_header_switch/enabled/menu_button_bottom_border/enabled/bottom_border_hover_color');
		$sticky_menu_button_bottom_border_height = fw_get_db_settings_option('sticky_header_switch/enabled/menu_button_bottom_border/enabled/bottom_border_height');
		
		$sticky_menu_button_left_border_switch = fw_get_db_settings_option('sticky_header_switch/enabled/menu_button_left_border/left_border_switch');
		$sticky_menu_button_left_border_color = fw_get_db_settings_option('sticky_header_switch/enabled/menu_button_left_border/enabled/left_border_color');
		$sticky_menu_button_left_border_hover_color = fw_get_db_settings_option('sticky_header_switch/enabled/menu_button_left_border/enabled/left_border_hover_color');
		$sticky_menu_button_left_border_height = fw_get_db_settings_option('sticky_header_switch/enabled/menu_button_left_border/enabled/left_border_height');
		
		$sticky_navigation_align = fw_get_db_settings_option('sticky_header_switch/enabled/navigation_align');
		$sticky_right_bar_border_switch = fw_get_db_settings_option('sticky_header_switch/enabled/right_bar_border/right_bar_border_switch');
		$sticky_right_bar_border_color = fw_get_db_settings_option('sticky_header_switch/enabled/right_bar_border/enabled/right_bar_border_color');
		$sticky_right_bar_order_1 = fw_get_db_settings_option('sticky_header_switch/enabled/right_bar_order_1');
		$sticky_right_bar_order_2 = fw_get_db_settings_option('sticky_header_switch/enabled/right_bar_order_2');
		$sticky_right_bar_order_3 = fw_get_db_settings_option('sticky_header_switch/enabled/right_bar_order_3');
		$sticky_right_bar_order_4 = fw_get_db_settings_option('sticky_header_switch/enabled/right_bar_order_4');
		$sticky_right_bar_order_5 = fw_get_db_settings_option('sticky_header_switch/enabled/right_bar_order_5');

		$sticky_search_form_visibility = fw_get_db_settings_option('sticky_header_switch/enabled/search_form/search_form_visibility');
		$sticky_search_btn_container_margin_top = fw_get_db_settings_option('sticky_header_switch/enabled/search_form/enabled/search_btn_container_margin_top');
		$sticky_search_btn_container_margin_right = fw_get_db_settings_option('sticky_header_switch/enabled/search_form/enabled/search_btn_container_margin_right');
		$sticky_search_btn_container_margin_bottom = fw_get_db_settings_option('sticky_header_switch/enabled/search_form/enabled/search_btn_container_margin_bottom');
		$sticky_search_btn_container_margin_left = fw_get_db_settings_option('sticky_header_switch/enabled/search_form/enabled/search_btn_container_margin_left');
		$sticky_search_btn_sepline = fw_get_db_settings_option('sticky_header_switch/enabled/search_form/enabled/search_btn_sepline/sepline_switch');
		$sticky_search_btn_sepline_color = fw_get_db_settings_option('sticky_header_switch/enabled/search_form/enabled/search_btn_sepline/enabled/search_btn_sepline_color');
		$sticky_search_btn_margin_right = fw_get_db_settings_option('sticky_header_switch/enabled/search_form/enabled/search_btn_margin_right');
		$sticky_search_btn_margin_left = fw_get_db_settings_option('sticky_header_switch/enabled/search_form/enabled/search_btn_margin_left');
		$sticky_search_btn_width = fw_get_db_settings_option('sticky_header_switch/enabled/search_form/enabled/search_btn_width');
		$sticky_search_btn_icon_size = fw_get_db_settings_option('sticky_header_switch/enabled/search_form/enabled/search_btn_icon_size');
		$sticky_search_btn_color = fw_get_db_settings_option('sticky_header_switch/enabled/search_form/enabled/search_btn_color');
		$sticky_search_btn_color_hover = fw_get_db_settings_option('sticky_header_switch/enabled/search_form/enabled/search_btn_color_hover');
		$sticky_search_btn_background = fw_get_db_settings_option('sticky_header_switch/enabled/search_form/enabled/search_btn_background');
		$sticky_search_btn_background_hover = fw_get_db_settings_option('sticky_header_switch/enabled/search_form/enabled/search_btn_background_hover');
		$sticky_search_button_border = fw_get_db_settings_option('sticky_header_switch/enabled/search_form/enabled/search_button_border/search_button_border_switch');
		$sticky_search_border_weight = fw_get_db_settings_option('sticky_header_switch/enabled/search_form/enabled/search_button_border/enabled/search_border_weight');
		$sticky_search_border_color = fw_get_db_settings_option('sticky_header_switch/enabled/search_form/enabled/search_button_border/enabled/search_border_color');
		$sticky_search_border_color_hover = fw_get_db_settings_option('sticky_header_switch/enabled/search_form/enabled/search_button_border/enabled/search_border_color_hover');
		
		$sticky_msg_container_visibility = fw_get_db_settings_option('sticky_header_switch/enabled/msg_container_visibility/msg_container_switch');
		$sticky_msg_container_margin_top = fw_get_db_settings_option('sticky_header_switch/enabled/msg_container_visibility/enabled/msg_container_margin_top');
		$sticky_msg_container_margin_right = fw_get_db_settings_option('sticky_header_switch/enabled/msg_container_visibility/enabled/msg_container_margin_right');
		$sticky_msg_container_margin_bottom = fw_get_db_settings_option('sticky_header_switch/enabled/msg_container_visibility/enabled/msg_container_margin_bottom');
		$sticky_msg_container_margin_left = fw_get_db_settings_option('sticky_header_switch/enabled/msg_container_visibility/enabled/msg_container_margin_left');
		$sticky_msg_container_sepline = fw_get_db_settings_option('sticky_header_switch/enabled/msg_container_visibility/enabled/msg_container_sepline/sepline_switch');
		$sticky_msg_container_sepline_color = fw_get_db_settings_option('sticky_header_switch/enabled/msg_container_visibility/enabled/msg_container_sepline/enabled/msg_container_sepline_color');
		$sticky_msg_block_margin_right = fw_get_db_settings_option('sticky_header_switch/enabled/msg_container_visibility/enabled/msg_block_margin_right');
		$sticky_msg_block_margin_left = fw_get_db_settings_option('sticky_header_switch/enabled/msg_container_visibility/enabled/msg_block_margin_left');
		$sticky_msg_block_padding_right = fw_get_db_settings_option('sticky_header_switch/enabled/msg_container_visibility/enabled/msg_block_padding_right');
		$sticky_msg_block_padding_left = fw_get_db_settings_option('sticky_header_switch/enabled/msg_container_visibility/enabled/msg_block_padding_left');
		$sticky_msg_block_content = fw_get_db_settings_option('sticky_header_switch/enabled/msg_container_visibility/enabled/msg_block_content');
		$sticky_msg_block_url = fw_get_db_settings_option('sticky_header_switch/enabled/msg_container_visibility/enabled/msg_block_url');
		$sticky_msg_block_text = fw_get_db_settings_option('sticky_header_switch/enabled/msg_container_visibility/enabled/msg_block_text');
		$sticky_msg_block_underline = fw_get_db_settings_option('sticky_header_switch/enabled/msg_container_visibility/enabled/msg_block_underline');
		$sticky_msg_block_background = fw_get_db_settings_option('sticky_header_switch/enabled/msg_container_visibility/enabled/msg_block_background');
		$sticky_msg_block_border = fw_get_db_settings_option('sticky_header_switch/enabled/msg_container_visibility/enabled/msg_block_border/msg_block_border_switch');
		$sticky_msg_block_border_weight = fw_get_db_settings_option('sticky_header_switch/enabled/msg_container_visibility/enabled/msg_block_border/enabled/msg_block_border_weight');
		$sticky_msg_block_border_color = fw_get_db_settings_option('sticky_header_switch/enabled/msg_container_visibility/enabled/msg_block_border/enabled/msg_block_border_color');
		$sticky_msg_block_border_color_hover = fw_get_db_settings_option('sticky_header_switch/enabled/msg_container_visibility/enabled/msg_block_border/enabled/msg_block_border_color_hover');
		
		$sticky_social_media_visibility = fw_get_db_settings_option('sticky_header_switch/enabled/header_social_media_picker/social_media_visibility');
		$sticky_social_media_btn_color = fw_get_db_settings_option('sticky_header_switch/enabled/header_social_media_picker/enabled/header_social_media_btn_color');
		$sticky_social_media_btn_hover_color = fw_get_db_settings_option('sticky_header_switch/enabled/header_social_media_picker/enabled/header_social_media_btn_hover_color');
		$sticky_social_media_btn_background = fw_get_db_settings_option('sticky_header_switch/enabled/header_social_media_picker/enabled/header_social_media_btn_background');
		$sticky_social_media_btn_background_hover = fw_get_db_settings_option('sticky_header_switch/enabled/header_social_media_picker/enabled/header_social_media_btn_background_hover');
		$sticky_social_media_tooltip_bg = fw_get_db_settings_option('sticky_header_switch/enabled/header_social_media_picker/enabled/header_social_media_tooltip_bg');
		$sticky_social_media_container_margin_top = fw_get_db_settings_option('sticky_header_switch/enabled/header_social_media_picker/enabled/header_social_media_container_margin_top');
		$sticky_social_media_container_margin_right = fw_get_db_settings_option('sticky_header_switch/enabled/header_social_media_picker/enabled/header_social_media_container_margin_right');
		$sticky_social_media_container_margin_bottom = fw_get_db_settings_option('sticky_header_switch/enabled/header_social_media_picker/enabled/header_social_media_container_margin_bottom');
		$sticky_social_media_container_margin_left = fw_get_db_settings_option('sticky_header_switch/enabled/header_social_media_picker/enabled/header_social_media_container_margin_left');
		$sticky_social_media_sepline = fw_get_db_settings_option('sticky_header_switch/enabled/header_social_media_picker/enabled/header_social_media_sepline/sepline_switch');
		$sticky_social_media_sepline_color = fw_get_db_settings_option('sticky_header_switch/enabled/header_social_media_picker/enabled/header_social_media_sepline/enabled/header_social_media_sepline_color');
		$sticky_social_media_margin_right = fw_get_db_settings_option('sticky_header_switch/enabled/header_social_media_picker/enabled/header_social_media_margin_right');
		$sticky_social_media_margin_left = fw_get_db_settings_option('sticky_header_switch/enabled/header_social_media_picker/enabled/header_social_media_margin_left');
		
		$sticky_shopping_cart_visibility = fw_get_db_settings_option('sticky_header_switch/enabled/shopping_cart/shopping_cart_visibility');
		$sticky_shopping_cart_btn_container_margin_top = fw_get_db_settings_option('sticky_header_switch/enabled/shopping_cart/enabled/shopping_cart_btn_container_margin_top');
		$sticky_shopping_cart_btn_container_margin_right = fw_get_db_settings_option('sticky_header_switch/enabled/shopping_cart/enabled/shopping_cart_btn_container_margin_right');
		$sticky_shopping_cart_btn_container_margin_bottom = fw_get_db_settings_option('sticky_header_switch/enabled/shopping_cart/enabled/shopping_cart_btn_container_margin_bottom');
		$sticky_shopping_cart_btn_container_margin_left = fw_get_db_settings_option('sticky_header_switch/enabled/shopping_cart/enabled/shopping_cart_btn_container_margin_left');
		$sticky_shopping_sepline_switch = fw_get_db_settings_option('sticky_header_switch/enabled/shopping_cart/enabled/shopping_cart_btn_sepline/sepline_switch');
		$sticky_shopping_cart_btn_sepline_color = fw_get_db_settings_option('sticky_header_switch/enabled/shopping_cart/enabled/shopping_cart_btn_sepline/enabled/shopping_cart_btn_sepline_color');
		$sticky_shopping_cart_btn_margin_right = fw_get_db_settings_option('sticky_header_switch/enabled/shopping_cart/enabled/shopping_cart_btn_margin_right');
		$sticky_shopping_cart_btn_margin_left = fw_get_db_settings_option('sticky_header_switch/enabled/shopping_cart/enabled/shopping_cart_btn_margin_left');
		$sticky_shopping_cart_btn_padding_bottom = fw_get_db_settings_option('sticky_header_switch/enabled/shopping_cart/enabled/shopping_cart_btn_padding_bottom');
		$sticky_shopping_cart_btn_width = fw_get_db_settings_option('sticky_header_switch/enabled/shopping_cart/enabled/shopping_cart_btn_width');
		$sticky_shopping_cart_btn_color = fw_get_db_settings_option('sticky_header_switch/enabled/shopping_cart/enabled/shopping_cart_btn_color');
		$sticky_shopping_cart_btn_color_hover = fw_get_db_settings_option('sticky_header_switch/enabled/shopping_cart/enabled/shopping_cart_btn_color_hover');
		$sticky_shopping_cart_btn_background = fw_get_db_settings_option('sticky_header_switch/enabled/shopping_cart/enabled/shopping_cart_btn_background');
		$sticky_shopping_cart_btn_background_hover = fw_get_db_settings_option('sticky_header_switch/enabled/shopping_cart/enabled/shopping_cart_btn_background_hover');
		$sticky_shopping_cart_alternative = fw_get_db_settings_option('sticky_header_switch/enabled/shopping_cart/enabled/shopping_cart_alternative/shopping_cart_alternative_switch');
		$sticky_shopping_cart_btn_counter_color = fw_get_db_settings_option('sticky_header_switch/enabled/shopping_cart/enabled/shopping_cart_alternative/enabled/shopping_cart_btn_counter_color');
		$sticky_shopping_cart_btn_counter_color_hover = fw_get_db_settings_option('sticky_header_switch/enabled/shopping_cart/enabled/shopping_cart_alternative/enabled/shopping_cart_btn_counter_color_hover');
		$sticky_shopping_cart_btn_counter_bg = fw_get_db_settings_option('sticky_header_switch/enabled/shopping_cart/enabled/shopping_cart_alternative/enabled/shopping_cart_btn_counter_bg');
		$sticky_shopping_cart_btn_counter_bg_hover = fw_get_db_settings_option('sticky_header_switch/enabled/shopping_cart/enabled/shopping_cart_alternative/enabled/shopping_cart_btn_counter_bg_hover');
		$sticky_shopping_cart_button_border_switch = fw_get_db_settings_option('sticky_header_switch/enabled/shopping_cart/enabled/shopping_cart_button_border/shopping_cart_button_border_switch');
		$sticky_shopping_cart_border_weight = fw_get_db_settings_option('sticky_header_switch/enabled/shopping_cart/enabled/shopping_cart_button_border/enabled/shopping_cart_border_weight');
		$sticky_shopping_cart_border_color = fw_get_db_settings_option('sticky_header_switch/enabled/shopping_cart/enabled/shopping_cart_button_border/enabled/shopping_cart_border_color');
		$sticky_shopping_cart_border_color_hover= fw_get_db_settings_option('sticky_header_switch/enabled/shopping_cart/enabled/shopping_cart_button_border/enabled/shopping_cart_border_color_hover');
		
		$sticky_wpml_container_switch = fw_get_db_settings_option('sticky_header_switch/enabled/wpml_container_visibility/wpml_container_switch');
		$sticky_wpml_container_margin_top = fw_get_db_settings_option('sticky_header_switch/enabled/wpml_container_visibility/enabled/wpml_container_margin_top');
		$sticky_wpml_container_margin_right = fw_get_db_settings_option('sticky_header_switch/enabled/wpml_container_visibility/enabled/wpml_container_margin_right');
		$sticky_wpml_container_margin_left = fw_get_db_settings_option('sticky_header_switch/enabled/wpml_container_visibility/enabled/wpml_container_margin_left');
		$sticky_wpml_container_margin_bottom = fw_get_db_settings_option('sticky_header_switch/enabled/wpml_container_visibility/enabled/wpml_container_margin_bottom');
		$sticky_wpml_btn_sepline = fw_get_db_settings_option('sticky_header_switch/enabled/wpml_container_visibility/enabled/wpml_btn_sepline/sepline_switch');
		$sticky_wpml_btn_sepline_color = fw_get_db_settings_option('sticky_header_switch/enabled/wpml_container_visibility/enabled/wpml_btn_sepline/enabled/wpml_btn_sepline_color');
		$sticky_wpml_btn_margin_right = fw_get_db_settings_option('sticky_header_switch/enabled/wpml_container_visibility/enabled/wpml_btn_margin_right');
		$sticky_wpml_btn_margin_left = fw_get_db_settings_option('sticky_header_switch/enabled/wpml_container_visibility/enabled/wpml_btn_margin_left');
		$sticky_wpml_btn_padding_bottom = fw_get_db_settings_option('sticky_header_switch/enabled/wpml_container_visibility/enabled/wpml_btn_padding_bottom');
		$sticky_wpml_btn_width = fw_get_db_settings_option('sticky_header_switch/enabled/wpml_container_visibility/enabled/wpml_btn_width');
		$sticky_wpml_btn_font = fw_get_db_settings_option('sticky_header_switch/enabled/wpml_container_visibility/enabled/wpml_btn_font');
		$sticky_wpml_btn_font_uppercase = fw_get_db_settings_option('sticky_header_switch/enabled/wpml_container_visibility/enabled/wpml_btn_font_uppercase');
		$sticky_wpml_btn_color = fw_get_db_settings_option('sticky_header_switch/enabled/wpml_container_visibility/enabled/wpml_btn_color');
		$sticky_wpml_btn_color_hover = fw_get_db_settings_option('sticky_header_switch/enabled/wpml_container_visibility/enabled/wpml_btn_color_hover');
		$sticky_wpml_btn_background = fw_get_db_settings_option('sticky_header_switch/enabled/wpml_container_visibility/enabled/wpml_btn_background');
		$sticky_wpml_btn_background_hover = fw_get_db_settings_option('sticky_header_switch/enabled/wpml_container_visibility/enabled/wpml_btn_background_hover');
		$sticky_wpml_button_border_switch = fw_get_db_settings_option('sticky_header_switch/enabled/wpml_container_visibility/enabled/wpml_button_border/wpml_button_border_switch');
		$sticky_wpml_border_weight = fw_get_db_settings_option('sticky_header_switch/enabled/wpml_container_visibility/enabled/wpml_button_border/enabled/wpml_border_weight');
		$sticky_wpml_border_color = fw_get_db_settings_option('sticky_header_switch/enabled/wpml_container_visibility/enabled/wpml_button_border/enabled/wpml_border_color');
		$sticky_wpml_border_color_hover = fw_get_db_settings_option('sticky_header_switch/enabled/wpml_container_visibility/enabled/wpml_button_border/enabled/wpml_border_color_hover');
		$sticky_wpml_dropdown_text_color = fw_get_db_settings_option('sticky_header_switch/enabled/wpml_container_visibility/enabled/wpml_dropdown_text_color');
		$sticky_wpml_dropdown_text_color_hover = fw_get_db_settings_option('sticky_header_switch/enabled/wpml_container_visibility/enabled/wpml_dropdown_text_color_hover');
		
		// Top Section
		$top_section_background = fw_get_db_settings_option('top_section_switch/enabled/top_section_background');
		$top_section_padding_top = fw_get_db_settings_option('top_section_switch/enabled/top_section_padding_top');
		$top_section_padding_bottom = fw_get_db_settings_option('top_section_switch/enabled/top_section_padding_bottom');
		$top_section_font_size = fw_get_db_settings_option('top_section_switch/enabled/top_section_font_size');
		$top_section_text_color = fw_get_db_settings_option('top_section_switch/enabled/top_section_text_color');
		$top_section_text_link = fw_get_db_settings_option('top_section_switch/enabled/top_section_text_link');
		$top_section_text_link_hover = fw_get_db_settings_option('top_section_switch/enabled/top_section_text_link_hover');
		$top_section_btn_font = fw_get_db_settings_option('top_section_switch/enabled/top_section_btn_font');
		$top_section_btn_bg = fw_get_db_settings_option('top_section_switch/enabled/top_section_btn_bg');
		$top_section_btn_bg_hover = fw_get_db_settings_option('top_section_switch/enabled/top_section_btn_bg_hover');
		
		// Meta Top
		$meta_top_bg_color = fw_get_db_settings_option('meta_top_bar_switch/enabled/meta_top_bg_color');
		$text_msg_1 = fw_get_db_settings_option('meta_top_bar_switch/enabled/text_msg_1_switch/enabled/text_msg_text');
		$text_msg_1_font = fw_get_db_settings_option('meta_top_bar_switch/enabled/text_msg_1_switch/enabled/text_msg_font');
		$text_msg_1_color = fw_get_db_settings_option('meta_top_bar_switch/enabled/text_msg_1_switch/enabled/text_msg_color');
		$text_msg_1_color_hover = fw_get_db_settings_option('meta_top_bar_switch/enabled/text_msg_1_switch/enabled/text_msg_color_hover');
		$text_msg_1_margin_top = fw_get_db_settings_option('meta_top_bar_switch/enabled/text_msg_1_switch/enabled/text_msg_margin_top');
		$text_msg_1_margin_right = fw_get_db_settings_option('meta_top_bar_switch/enabled/text_msg_1_switch/enabled/text_msg_margin_right');
		$text_msg_1_margin_bottom = fw_get_db_settings_option('meta_top_bar_switch/enabled/text_msg_1_switch/enabled/text_msg_margin_bottom');
		$text_msg_1_margin_left = fw_get_db_settings_option('meta_top_bar_switch/enabled/text_msg_1_switch/enabled/text_msg_margin_left');
		$text_msg_2 = fw_get_db_settings_option('meta_top_bar_switch/enabled/text_msg_2_switch/enabled/text_msg_text');
		$text_msg_2_font = fw_get_db_settings_option('meta_top_bar_switch/enabled/text_msg_2_switch/enabled/text_msg_font');
		$text_msg_2_color = fw_get_db_settings_option('meta_top_bar_switch/enabled/text_msg_2_switch/enabled/text_msg_color');
		$text_msg_2_color_hover = fw_get_db_settings_option('meta_top_bar_switch/enabled/text_msg_2_switch/enabled/text_msg_color_hover');
		$text_msg_2_margin_top = fw_get_db_settings_option('meta_top_bar_switch/enabled/text_msg_2_switch/enabled/text_msg_margin_top');
		$text_msg_2_margin_right = fw_get_db_settings_option('meta_top_bar_switch/enabled/text_msg_2_switch/enabled/text_msg_margin_right');
		$text_msg_2_margin_bottom = fw_get_db_settings_option('meta_top_bar_switch/enabled/text_msg_2_switch/enabled/text_msg_margin_bottom');
		$text_msg_2_margin_left = fw_get_db_settings_option('meta_top_bar_switch/enabled/text_msg_2_switch/enabled/text_msg_margin_left');	
		$meta_top_menu_1_font = fw_get_db_settings_option('meta_top_bar_switch/enabled/meta_top_menu_1_font');
		$meta_top_menu_1_color = fw_get_db_settings_option('meta_top_bar_switch/enabled/meta_top_menu_1_color');
		$meta_top_menu_1_color_hover = fw_get_db_settings_option('meta_top_bar_switch/enabled/meta_top_menu_1_color_hover');
		$meta_top_menu_1_icon_color = fw_get_db_settings_option('meta_top_bar_switch/enabled/meta_top_menu_1_icon_color');
		$meta_top_menu_1_sep_line = fw_get_db_settings_option('meta_top_bar_switch/enabled/meta_top_menu_1_sep_line');
		$meta_top_menu_1_margin_top = fw_get_db_settings_option('meta_top_bar_switch/enabled/meta_top_menu_1_margin_top');
		$meta_top_menu_1_margin_right = fw_get_db_settings_option('meta_top_bar_switch/enabled/meta_top_menu_1_margin_right');
		$meta_top_menu_1_margin_bottom = fw_get_db_settings_option('meta_top_bar_switch/enabled/meta_top_menu_1_margin_bottom');
		$meta_top_menu_1_margin_left = fw_get_db_settings_option('meta_top_bar_switch/enabled/meta_top_menu_1_margin_left');
		$meta_top_menu_2_font = fw_get_db_settings_option('meta_top_bar_switch/enabled/meta_top_menu_2_font');
		$meta_top_menu_2_color = fw_get_db_settings_option('meta_top_bar_switch/enabled/meta_top_menu_2_color');
		$meta_top_menu_2_color_hover = fw_get_db_settings_option('meta_top_bar_switch/enabled/meta_top_menu_2_color_hover');
		$meta_top_menu_2_icon_color = fw_get_db_settings_option('meta_top_bar_switch/enabled/meta_top_menu_2_icon_color');
		$meta_top_menu_2_sep_line = fw_get_db_settings_option('meta_top_bar_switch/enabled/meta_top_menu_2_sep_line');
		$meta_top_menu_2_margin_top = fw_get_db_settings_option('meta_top_bar_switch/enabled/meta_top_menu_2_margin_top');
		$meta_top_menu_2_margin_right = fw_get_db_settings_option('meta_top_bar_switch/enabled/meta_top_menu_2_margin_right');
		$meta_top_menu_2_margin_bottom = fw_get_db_settings_option('meta_top_bar_switch/enabled/meta_top_menu_2_margin_bottom');
		$meta_top_menu_2_margin_left = fw_get_db_settings_option('meta_top_bar_switch/enabled/meta_top_menu_2_margin_left');
		
		$meta_top_border = fw_get_db_settings_option('meta_top_bar_switch/enabled/meta_top_bottom_border/meta_top_border_switch');
		$meta_top_border_color = fw_get_db_settings_option('meta_top_bar_switch/enabled/meta_top_bottom_border/enabled/meta_top_border_color');
		
		
        $custom_css = '';
        //-----------------
        

        // Header Elements
        
        if($meta_top_border=='enabled') {
	        $custom_css .= '
			.meta-top .col-md-12{
				border-bottom: 1px solid '. esc_html($meta_top_border_color) .';
				padding: 0 !important;
			}
			.meta-top .col-md-12:after {
			    clear: both;
			}
			.meta-top .col-md-12:after {
			    content: "";
			    display: table;
			}
			.meta-top .row{
				margin: 0 !important;
			}
	        ';
	    }

		if($header_type=='left') {
			if($navigation_variant=='variant_1') {
		        if($right_bar_border_switch_left_v1!='disabled'){
			        $custom_css .= '
			        .left-header-variant-1 .header-container .right-bar{border-left: 1px solid '. esc_html($right_bar_border_color_left_v1) .';}';
		        }
	        }elseif($navigation_variant=='variant_2') {
	        
		        if($right_bar_border_switch_left_v2!='disabled'){
			        $custom_css .= '
			        .left-header-variant-2 .right-bar{border-left: 1px solid '. esc_html($right_bar_border_color_left_v2) .';}';
		        }
		        
		        $custom_css .= '
		        .left-header-variant-2 .header-bottom{background-color: '. esc_html($nav_holder_bg_left_v2) .';}';
		        
		        if($top_border_switch_left_v2!='disabled'){
			        $custom_css .= '
			        .left-header-variant-2 .header-bottom{border-top: 1px solid '. esc_html($top_border_color_left_v2) .';}';
		        }
		        
		        if($bottom_border_switch_left_v2!='disabled'){
			        $custom_css .= '
			        .left-header-variant-2 .header-bottom{border-bottom: 1px solid '. esc_html($bottom_border_color_left_v2) .';}';
		        }
		        
		    }elseif($navigation_variant=='variant_3') {
		        if($right_bar_border_switch_left_v3!='disabled'){
			        $custom_css .= '
			        .left-header-variant-3 .header-container .right-bar{border-left: 1px solid '. esc_html($right_bar_border_color_left_v3) .';}';
		        }
	        }
		}
		elseif($header_type=='center'){
			if($navigation_variant=='variant_1') {
		        if($right_bar_border_switch_center_v1!='disabled'){
			        $custom_css .= '
			        .center-header-variant-1 .header-container .right-bar{border-left: 1px solid '. esc_html($right_bar_border_color_center_v1) .';}';
		        }
		        if($left_bar_border_switch_center_v1!='disabled'){
			        $custom_css .= '
			        .center-header-variant-1 .header-container .left-bar{border-right: 1px solid '. esc_html($left_bar_border_color_center_v1) .';}';
		        }
	        }elseif($navigation_variant=='variant_2') {
	        
		        if($right_bar_border_switch_center_v2!='disabled'){
			        $custom_css .= '
			        .center-header-variant-2 .header-container .right-bar{border-left: 1px solid '. esc_html($right_bar_border_color_center_v2) .';}';
		        }
		        if($left_bar_border_switch_center_v2!='disabled'){
			        $custom_css .= '
			        .center-header-variant-2 .header-container .left-bar{border-right: 1px solid '. esc_html($left_bar_border_color_center_v2) .';}';
		        }
		        
		        $custom_css .= '
		        .center-header-variant-2 .header-container .header-bottom{background-color: '. esc_html($nav_holder_bg_center_v2) .';}';
		        
		        if($top_border_switch_center_v2!='disabled'){
			        $custom_css .= '
			        .center-header-variant-2 .header-container .header-bottom{border-top: 1px solid '. esc_html($top_border_color_center_v2) .';}';
		        }
		        
		        if($bottom_border_switch_center_v2!='disabled'){
			        $custom_css .= '
			        .center-header-variant-2 .header-container .header-bottom{border-bottom: 1px solid '. esc_html($bottom_border_color_center_v2) .';}';
		        }
		        
		    }elseif($navigation_variant=='variant_3') {
		        if($right_bar_border_switch_center_v3!='disabled'){
			        $custom_css .= '
			        .center-header-variant-3 .header-container .right-bar{border-left: 1px solid '. esc_html($right_bar_border_color_center_v3) .';}';
		        }
		        if($left_bar_border_switch_center_v3!='disabled'){
			        $custom_css .= '
			        .center-header-variant-3 .header-container .left-bar{border-right: 1px solid '. esc_html($left_bar_border_color_center_v3) .';}';
		        }
	        }
		}
		elseif($header_type=='side'){
			if($bottom_bar_border_switch_side!='disabled'){
		        $custom_css .= '
		        .side-header-variant-1 .header-container .bottom-bar{border-top: 1px solid '. esc_html($bottom_bar_border_color_side) .';}';
	        }
		}
        
        if($header_type=='left'||$header_type=='center') {
	        $custom_css .= '
	        #header{padding-top: '. esc_html($header_margin_top) .'px;padding-right: '. esc_html($header_margin_right) .'px;padding-bottom: '. esc_html($header_margin_bottom) .'px;padding-left: '. esc_html($header_margin_left) .'px;}';
	        
	        if($header_top_border_switch!='disabled'){
		        $custom_css .= '
		        .header-main{border-top-color: '. esc_html($header_top_border_color) .';border-top-style: solid;border-top-width: '. esc_html($header_top_border_weight) .'px;}';
	        }
	        
	        if($header_bottom_border_switch!='disabled'){
		        $custom_css .= '
		        .header-main{border-bottom-color: '. esc_html($header_bottom_border_color) .';border-bottom-style: solid;border-bottom-width: '. esc_html($header_bottom_border_weight) .'px;}';
	        }
        }
        
        if($header_type=='left'||$header_type=='center') {
	        $custom_css .= '
	        .header-main{background-color: '. esc_html($header_background) .';}';
	    }
	    elseif($header_type=='side') {
	        $custom_css .= '
	        #header{background-color: '. esc_html($header_background) .';}';
	    }
        
        if($logo_type=='text_logo'){
        
			$current_style = $header_logo_text['variation'];

			if ( $current_style === 'regular' ) { $current_style = '400'; }
            if ( $current_style == 'italic' ) { $current_style = '400italic'; }
            
			if($header_logo_text['style']){
				$font_style  = 'font-style: '. $header_logo_text['style'] .';';
			}else{
				$font_style  = ( strpos( $current_style, 'italic' ) ) ? 'font-style: italic;' : 'font-style: normal;';
			}
			
			if($header_logo_text['weight']){
				$font_weight  = 'font-weight: '. $header_logo_text['weight'] .';';
			}else{
				$font_weight = 'font-weight: ' . intval( $current_style ) . ';';
			}
			
	        $custom_css .= '
	        .header-container .text-logo .logo{
	            font-family: '. esc_html($header_logo_text['family']) .';
	        	'. esc_html($font_style) .'
	        	'. esc_html($font_weight) .'
	            font-size: '. esc_html($header_logo_text['size']) .'px;
	            letter-spacing: '. esc_html($header_logo_text['letter-spacing']) .'px;
	            color: '. esc_html($header_logo_text_color) .';
	        	padding-top: '. esc_html($header_logo_text_padding_top) .'px;
	        	padding-right: '. esc_html($header_logo_text_padding_right) .'px;
	        	padding-bottom: '. esc_html($header_logo_text_padding_bottom) .'px;
	            padding-left: '. esc_html($header_logo_text_padding_left) .'px;
	        }';
	        
	        if($header_type=='left'||$header_type=='center') {
		        if($header_logo_text_border_switch=='enabled'){
			        $custom_css .= '
			        .header-container .text-logo .logo{
			            border-right: 1px solid '. esc_html($header_logo_text_border_color) .';
			        }';
		        }
	        }
	        elseif($header_type=='side') {
		        if($header_logo_text_border_switch=='enabled'){
			        $custom_css .= '
			        .header-container .text-logo .logo{
			            border-bottom: 1px solid '. esc_html($header_logo_text_border_color) .';
			        }';
		        }

	        }
        
        }
        if($logo_type=='image_logo'){
	    	$custom_css .= '
	        .header-container .image-logo .logo{
	        	padding-top: '. esc_html($header_logo_padding_top) .'px;
	        	padding-right: '. esc_html($header_logo_padding_right) .'px;
	        	padding-bottom: '. esc_html($header_logo_padding_bottom) .'px;
	            padding-left: '. esc_html($header_logo_padding_left) .'px;
	        }';
	        
	        
	        if($header_type=='left'||$header_type=='center') {
		        if($header_logo_border_switch=='enabled'){
			        $custom_css .= '
			        .header-container .image-logo .logo{
			            border-right: 1px solid '. esc_html($header_logo_border_color) .';
			        }';
		        }
	        }
	        elseif($header_type=='side') {
		        if($header_logo_border_switch=='enabled'){
			        $custom_css .= '
					.header-container .image-logo .logo{
			            border-bottom: 1px solid '. esc_html($header_logo_border_color) .';
			        }';
		        }

	        }
	        
	        if($header_type=='left') {
		    	$custom_css .= '
		        .header-container #logo{
		        	min-width: '. esc_html($header_logo_width) .'px;
		        }';
	        }
	        elseif($header_type=='center') {
		    	if($navigation_variant=='variant_1') {
			    	$custom_css .= '
			        .header-container #logo{
			        	width: '. esc_html($header_logo_width) .'px;
			        }';
		        }
		        elseif($navigation_variant=='variant_2'||$navigation_variant=='variant_3') {
			    	$custom_css .= '
			        .header-container #logo .logo{
			        	width: '. esc_html($header_logo_width) .'px;
			        }';
		        }
	        }

	    }
        
        $custom_css .= '
        .header-container .lpdmenu{margin-right: '. esc_html($navigation_margin_right) .'px; margin-left: '. esc_html($navigation_margin_left) .'px;}';
        
        $custom_css .= '
        .header-container .lpdmenu-list > li{ padding-top: '. esc_html($menu_item_padding_top) .'px; padding-right: '. esc_html($menu_item_padding_right) .'px; padding-bottom: '. esc_html($menu_item_padding_bottom) .'px; padding-left: '. esc_html($menu_item_padding_left) .'px;
        }';
        
        if($menu_button_paddings_nl_switch=="enabled"){
	        $custom_css .= '
	        @media (min-width: 1200px) and (max-width: 1479px) { .header-container .lpdmenu-list > li{ padding-right: '. esc_html($menu_button_padding_right_nl) .'px; padding-left: '. esc_html($menu_button_padding_left_nl) .'px; }}';
        }
       
        if($menu_button_paddings_tl_switch=="enabled"){
	        $custom_css .= '
	        @media (min-width: 992px) and (max-width: 1199px) { .header-container .lpdmenu-list > li{ padding-right: '. esc_html($menu_button_padding_right_tl) .'px; padding-left: '. esc_html($menu_button_padding_left_tl) .'px; }}';
        }
        
        $custom_css .= '
        .header-container .lpdmenu-list > li > a > span{
        	padding-right: '. esc_html($menu_button_inner_padding_right) .'px;
            padding-left: '. esc_html($menu_button_inner_padding_left) .'px;
            background-color: '. esc_html($menu_background_color) .';
			-webkit-border-radius: '. esc_html($menu_button_radius) .'px;
			-moz-border-radius: '. esc_html($menu_button_radius) .'px;
			border-radius: '. esc_html($menu_button_radius) .'px;
        }
		.header-container .lpdmenu-list > li.current_page_parent > a > span,.header-container .lpdmenu-list > li.current-menu-ancestor > a > span,.header-container .lpdmenu-list > li.current-menu-parent > a > span,.header-container .lpdmenu-list > li.current_page_ancestor > a > span,.header-container .lpdmenu-list > li.current-menu-item > a > span,.header-container .lpdmenu-list > li > a.active > span{
			background-color: '. esc_html($menu_background_color_hover) .';
		}';
		
        if($menu_button_overlay_effect_switch=="disabled"){
	        $custom_css .= '.header-container .lpdmenu-list > li:hover > a > span,.header-container .lpdmenu-list > li > a:hover > span{background-color: '. esc_html($menu_background_color_hover) .';}';  
        }
        
        $custom_css .= '
       	.header-container .lpdmenu-list > li.current_page_parent > a > span,.header-container .lpdmenu-list > li.current-menu-ancestor > a > span,.header-container .lpdmenu-list > li.current-menu-parent > a > span,.header-container .lpdmenu-list > li.current_page_ancestor > a > span,.header-container .lpdmenu-list > li.current-menu-item > a > span,.header-container .lpdmenu-list > li:hover > a > span,.header-container .lpdmenu-list > li > a:hover > span,.header-container .lpdmenu-list > li > a.active > span{
		    border-top-color:'. esc_html($menu_button_top_border_hover_color) .';
		}';
    
        if($menu_button_top_border_switch=='enabled'){
	        $custom_css .= '
	        .header-container .lpdmenu-list > li > a > span{
	        	border-top:'. esc_html($menu_button_top_border_height) .'px solid '. esc_html($menu_button_top_border_color) .';
	        }
			.header-container .lpdmenu-list > li.current_page_parent > a > span,.header-container .lpdmenu-list > li.current-menu-ancestor > a > span,.header-container .lpdmenu-list > li.current-menu-parent > a > span,.header-container .lpdmenu-list > li.current_page_ancestor > a > span,.header-container .lpdmenu-list > li.current-menu-item > a > span,.header-container .lpdmenu-list > li:hover > a > span,.header-container .lpdmenu-list > li > a:hover > span,.header-container .lpdmenu-list > li > a.active > span{
			    border-right-color:'. esc_html($menu_button_top_border_hover_color) .';
			}';
        }
        
        if($menu_button_right_border_switch=='enabled'){
	        $custom_css .= '
	        .header-container .lpdmenu-list > li > a > span{
	        	border-right:'. esc_html($menu_button_right_border_height) .'px solid '. esc_html($menu_button_right_border_color) .';
	        }
	       	.header-container .lpdmenu-list > li.current_page_parent > a > span,
	       	.header-container .lpdmenu-list > li.current-menu-ancestor > a > span,
	       	.header-container .lpdmenu-list > li.current-menu-parent > a > span,
	       	.header-container .lpdmenu-list > li.current_page_ancestor > a > span,
	       	
	       	.header-container .lpdmenu-list > li.current-menu-item > a > span,
			.header-container .lpdmenu-list > li:hover > a > span,
			.header-container .lpdmenu-list > li > a:hover > span,
			.header-container .lpdmenu-list > li > a.active > span{
			    border-right-color:'. esc_html($menu_button_right_border_hover_color) .';
			}';
        }
        
        if($menu_button_bottom_border_switch=='enabled'){
	        $custom_css .= '
	        .header-container .lpdmenu-list > li > a > span{
	        	border-bottom:'. esc_html($menu_button_bottom_border_height) .'px solid '. esc_html($menu_button_bottom_border_color) .';
	        }
	       	.header-container .lpdmenu-list > li.current_page_parent > a > span,
	       	.header-container .lpdmenu-list > li.current-menu-ancestor > a > span,
	       	.header-container .lpdmenu-list > li.current-menu-parent > a > span,
	       	.header-container .lpdmenu-list > li.current_page_ancestor > a > span,
	       	
	       	.header-container .lpdmenu-list > li.current-menu-item > a > span,
			.header-container .lpdmenu-list > li:hover > a > span,
			.header-container .lpdmenu-list > li > a:hover > span,
			.header-container .lpdmenu-list > li > a.active > span{
			    border-bottom-color:'. esc_html($menu_button_bottom_border_hover_color) .';
			}';
        }
        
        if($menu_button_left_border_switch=='enabled'){
	        $custom_css .= '
	        .header-container .lpdmenu-list > li > a > span{
	        	border-left:'. esc_html($menu_button_left_border_height) .'px solid '. esc_html($menu_button_left_border_color) .';
	        }
	       	.header-container .lpdmenu-list > li.current_page_parent > a > span,
	       	.header-container .lpdmenu-list > li.current-menu-ancestor > a > span,
	       	.header-container .lpdmenu-list > li.current-menu-parent > a > span,
	       	.header-container .lpdmenu-list > li.current_page_ancestor > a > span,
	       	
	       	.header-container .lpdmenu-list > li.current-menu-item > a > span,
			.header-container .lpdmenu-list > li:hover > a > span,
			.header-container .lpdmenu-list > li > a:hover > span,
			.header-container .lpdmenu-list > li > a.active > span{
			    border-left-color:'. esc_html($menu_button_left_border_hover_color) .';
			}';
        }
        
        if($menu_button_inner_paddings_nl_switch=="enabled"){
	        $custom_css .= '
	        @media (min-width: 1200px) and (max-width: 1479px) {
	        .header-container .lpdmenu-list > li > a > span{
	        	padding-right: '. esc_html($menu_button_inner_padding_right_nl) .'px;
	            padding-left: '. esc_html($menu_button_inner_padding_left_nl) .'px;
	        }}';
        }
       
        if($menu_button_inner_paddings_tl_switch=="enabled"){
	        $custom_css .= '
	        @media (min-width: 992px) and (max-width: 1199px) {
	        .header-container .lpdmenu-list > li > a > span{
	        	padding-right: '. esc_html($menu_button_inner_padding_right_tl) .'px;
	            padding-left: '. esc_html($menu_button_inner_padding_left_tl) .'px;
	        }}';
        }    
        
        if($menu_button_text){
        
			$current_style = $menu_button_text['variation'];

			if ( $current_style === 'regular' ) { $current_style = '400'; }
            if ( $current_style == 'italic' ) { $current_style = '400italic'; }
            
			if($menu_button_text['style']){ $font_style  = 'font-style: '. $menu_button_text['style'] .';';
			}else{ $font_style  = ( strpos( $current_style, 'italic' ) ) ? 'font-style: italic;' : 'font-style: normal;'; }
			
			if($menu_button_text['weight']){
				$font_weight  = 'font-weight: '. $menu_button_text['weight'] .';';
			}else{
				$font_weight = 'font-weight: ' . intval( $current_style ) . ';';
			}
			
	       $custom_css .= '
			.header-container .lpdmenu-list > li > a{
			    font-family: '. esc_html($menu_button_text['family']) .';
				'. esc_html($font_style) .'
				'. esc_html($font_weight) .'
			    font-size: '. esc_html($menu_button_text['size']) .'px;
			    letter-spacing: '. esc_html($menu_button_text['letter-spacing']) .'px;
			    line-height: '. esc_html($menu_button_text['line-height']) .'px;
			    color: '. esc_html($menu_button_color) .';
			}';
	       $custom_css .= '
	       	.header-container .lpdmenu-list > li.current_page_parent > a,.header-container .lpdmenu-list > li.current-menu-ancestor > a,.header-container .lpdmenu-list > li.current-menu-parent > a,.header-container .lpdmenu-list > li.current_page_ancestor > a,.header-container .lpdmenu-list > li.current-menu-item > a,.lpdmenu-list > li:hover > a,.header-container .lpdmenu-list > li > a:hover,.header-container .lpdmenu-list > li > a.active{
			    color: '. esc_html($menu_button_color_hover) .';
			}';
			
		$custom_css .= '.slide-panel-toggle span, .slide-panel-toggle span:before, .slide-panel-toggle span:after {
        	background-color: '. esc_html($menu_button_color) .';
        }
        .slide-panel-toggle:hover span, .slide-panel-toggle:hover span:before, .slide-panel-toggle:hover span:after {
        	background-color: '. esc_html($menu_button_color_hover) .';
        }';
			
	        if($menu_button_text_nl_switch=="enabled"){
		        $custom_css .= '
		        @media (min-width: 1200px) and (max-width: 1479px) {
		        .header-container .lpdmenu-list > li > a{
		        	font-size: '. esc_html($menu_button_text_nl) .'px;
		        }}';
	        }
	       
	        if($menu_button_text_tl_switch=="enabled"){
		        $custom_css .= '
		        @media (min-width: 992px) and (max-width: 1199px) {
		        .header-container .lpdmenu-list > li > a{
		        	font-size: '. esc_html($menu_button_text_tl) .'px;
		        }}';
	        }  

        }
        
        if($menu_button_overlay_effect_switch=="enabled"){
        
	        if($menu_button_overlay_effect_types=="type_1"){
	        $custom_css .= '
	        .header-container .lpdmenu-list.menu-btn-animated > li > a > span > span.btn-overlay{
	        	height: '. esc_html($menu_button_text['line-height']) .'px;
	            background-color: '. esc_html($menu_background_color_hover) .';
				-webkit-border-radius: '. esc_html($menu_button_radius) .'px;
				-moz-border-radius: '. esc_html($menu_button_radius) .'px;
				border-radius: '. esc_html($menu_button_radius) .'px;
	        }';
	        }
	        
	        if($menu_button_overlay_effect_types=="type_2"){
	        $custom_css .= '
	        .header-container .lpdmenu-list.menu-btn-animated-2 > li > a > span > span.btn-overlay{
	        	height: '. esc_html($menu_button_text['line-height']) .'px;
	            background-color: '. esc_html($menu_background_color_hover) .';
				-webkit-border-radius: '. esc_html($menu_button_radius) .'px;
				-moz-border-radius: '. esc_html($menu_button_radius) .'px;
				border-radius: '. esc_html($menu_button_radius) .'px;

	        }';
	        }
        
        }
        
        if($menu_dropdown_border_switch=="enabled"){
	        $custom_css .= '
	        .nav-submenu-type-2 .lpdmenu-list .lpdmenu-submenu-sub-sub:after,
			.nav-submenu-type-2 .lpdmenu-list .lpdmenu-submenu-sub:after,
			.nav-submenu-type-2 .lpdmenu-list .lpdmenu-submenu:after,
	        .nav-submenu-type-1 .lpdmenu-list .lpdmenu-submenu-sub-sub:after,
			.nav-submenu-type-1 .lpdmenu-list .lpdmenu-submenu-sub:after,
			.nav-submenu-type-1 .lpdmenu-list .lpdmenu-submenu:after{
	        	background-color: '. esc_html($menu_dropdown_border_color) .';
	        }';
	        $custom_css .= '
	        .nav-megamenu-type-2 .lpdmenu-list .megamenu,
	        .nav-megamenu-type-1 .lpdmenu-list .megamenu{
	        	border-color: '. esc_html($menu_dropdown_border_color) .';
	        }';
        }
        
        if($dropdown_font){
        
			$current_style = $dropdown_font['variation'];

			if ( $current_style === 'regular' ) {
                $current_style = '400';
            }
            if ( $current_style == 'italic' ) {
                $current_style = '400italic';
            }
            
			if($dropdown_font['style']){
				$font_style  = 'font-style: '. $dropdown_font['style'] .';';
			}else{
				$font_style  = ( strpos( $current_style, 'italic' ) ) ? 'font-style: italic;' : 'font-style: normal;';
			}
			
			if($dropdown_font['weight']){
				$font_weight  = 'font-weight: '. $dropdown_font['weight'] .';';
			}else{
				$font_weight = 'font-weight: ' . intval( $current_style ) . ';';
			}
			
	        $custom_css .= '
			.nav-megamenu-type-2 .lpdmenu-list .megamenu .link-list li.menu-item a,
	        .nav-submenu-type-2 .lpdmenu-list .lpdmenu-submenu li a,
	        .nav-megamenu-type-1 .lpdmenu-list .megamenu .link-list li.menu-item a,
	        .nav-submenu-type-1 .lpdmenu-list .lpdmenu-submenu li a{
	            font-family: '. esc_html($dropdown_font['family']) .';
	        	'. esc_html($font_style) .'
	        	'. esc_html($font_weight) .'
	            font-size: '. esc_html($dropdown_font['size']) .'px;
	            line-height: '. esc_html($dropdown_font['line-height']) .';
	            letter-spacing: '. esc_html($dropdown_font['letter-spacing']) .'px;
	            color: '. esc_html($dropdown_color) .';
	        }';
        }
        
        $custom_css .= '
        .nav-megamenu-type-2 .lpdmenu-list .megamenu .link-list li.menu-item a .menu-item-textWrap:after,
		.nav-submenu-type-2 .lpdmenu-list .lpdmenu-submenu li a .menu-item-textWrap:after,
        .nav-megamenu-type-1 .lpdmenu-list .megamenu .link-list li.menu-item a .menu-item-textWrap:after,
		.nav-submenu-type-1 .lpdmenu-list .lpdmenu-submenu li a .menu-item-textWrap:after{
        	background-color: '. esc_html($dropdown_color_hover) .';
        }';

        $custom_css .= '
        .nav-megamenu-type-2 .lpdmenu-list .megamenu .link-list li.menu-item a:active,
        .nav-megamenu-type-2 .lpdmenu-list .megamenu .link-list li.menu-item a:hover,
        .nav-submenu-type-2 .lpdmenu-list .lpdmenu-submenu li a.active,
		.nav-submenu-type-2 .lpdmenu-list .lpdmenu-submenu li a:hover,
        .nav-megamenu-type-1 .lpdmenu-list .megamenu .link-list li.menu-item a:active,
        .nav-megamenu-type-1 .lpdmenu-list .megamenu .link-list li.menu-item a:hover,
        .nav-submenu-type-1 .lpdmenu-list .lpdmenu-submenu li a.active,
		.nav-submenu-type-1 .lpdmenu-list .lpdmenu-submenu li a:hover{
        	color: '. esc_html($dropdown_color_hover) .';
        }';
        
        if($dropdown_title_font){
        
			$current_style = $dropdown_title_font['variation'];

			if ( $current_style === 'regular' ) {
                $current_style = '400';
            }
            if ( $current_style == 'italic' ) {
                $current_style = '400italic';
            }
            
			if($dropdown_title_font['style']){
				$font_style  = 'font-style: '. $dropdown_title_font['style'] .';';
			}else{
				$font_style  = ( strpos( $current_style, 'italic' ) ) ? 'font-style: italic;' : 'font-style: normal;';
			}
			
			if($dropdown_title_font['weight']){
				$font_weight  = 'font-weight: '. $dropdown_title_font['weight'] .';';
			}else{
				$font_weight = 'font-weight: ' . intval( $current_style ) . ';';
			}
			
	        $custom_css .= '
	        .nav-megamenu-type-2 .lpdmenu-list .megamenu li.title,
	        .nav-megamenu-type-1 .lpdmenu-list .megamenu li.title{
	            font-family: '. esc_html($dropdown_title_font['family']) .';
	        	'. esc_html($font_style) .'
	        	'. esc_html($font_weight) .'
	            font-size: '. esc_html($dropdown_title_font['size']) .'px;
	            letter-spacing: '. esc_html($dropdown_title_font['letter-spacing']) .'px;
	            color: '. esc_html($dropdown_title_font['color']) .';
	        }';
        }
        
        $custom_css .= '
        .nav-megamenu-type-2 .lpdmenu-list .megamenu .link-list li.menu-item a .menu-item-textWrap > .material-icons,
        .nav-submenu-type-2 .lpdmenu-list .lpdmenu-submenu li a .menu-item-textWrap > .material-icons{
        	color: '. esc_html($bullet_color) .';
        }';
        
        if($header_type=='side') {
	        $custom_css .= '
	        .side-lpdmenu{margin-right: '. esc_html($navigation_margin_right) .'px; margin-left: '. esc_html($navigation_margin_left) .'px;}';
	        
	        $custom_css .= '
	        .side-lpdmenu-list > li{ padding-top: '. esc_html($menu_item_padding_top) .'px; padding-right: '. esc_html($menu_item_padding_right) .'px; padding-bottom: '. esc_html($menu_item_padding_bottom) .'px; padding-left: '. esc_html($menu_item_padding_left) .'px;
	        }';
	        $custom_css .= '
	        .side-lpdmenu-list > li > a > span{
	        	padding-right: '. esc_html($menu_button_inner_padding_right) .'px;
	            padding-left: '. esc_html($menu_button_inner_padding_left) .'px;
	            background-color: '. esc_html($menu_background_color) .';
				-webkit-border-radius: '. esc_html($menu_button_radius) .'px;
				-moz-border-radius: '. esc_html($menu_button_radius) .'px;
				border-radius: '. esc_html($menu_button_radius) .'px;
	        }
			.side-lpdmenu-list > li.current_page_parent > a > span,.side-lpdmenu-list > li.current-menu-ancestor > a > span,.side-lpdmenu-list > li.current-menu-parent > a > span,.side-lpdmenu-list > li.current_page_ancestor > a > span,.side-lpdmenu-list > li.current-menu-item > a > span,.side-lpdmenu-list > li > a.active > span{
				background-color: '. esc_html($menu_background_color_hover) .';
			}';
	        if($menu_button_overlay_effect_switch=="disabled"){
		        $custom_css .= '.side-lpdmenu-list > li:hover > a > span,.side-lpdmenu-list > li > a:hover > span{background-color: '. esc_html($menu_background_color_hover) .';}';  
	        }
	        
	        $custom_css .= '
	       	.side-lpdmenu-list > li.current_page_parent > a > span,.side-lpdmenu-list > li.current-menu-ancestor > a > span,.side-lpdmenu-list > li.current-menu-parent > a > span,.side-lpdmenu-list > li.current_page_ancestor > a > span,.side-lpdmenu-list > li.current-menu-item > a > span,.side-lpdmenu-list > li:hover > a > span,.side-lpdmenu-list > li > a:hover > span,.side-lpdmenu-list > li > a.active > span{
			    border-top-color:'. esc_html($menu_button_top_border_hover_color) .';
			}';
	    
	        if($menu_button_top_border_switch=='enabled'){
		        $custom_css .= '
		        .side-lpdmenu-list > li > a > span{
		        	border-top:'. esc_html($menu_button_top_border_height) .'px solid '. esc_html($menu_button_top_border_color) .';
		        }
				.side-lpdmenu-list > li.current_page_parent > a > span,.side-lpdmenu-list > li.current-menu-ancestor > a > span,.side-lpdmenu-list > li.current-menu-parent > a > span,.side-lpdmenu-list > li.current_page_ancestor > a > span,.side-lpdmenu-list > li.current-menu-item > a > span,.side-lpdmenu-list > li:hover > a > span,.side-lpdmenu-list > li > a:hover > span,.side-lpdmenu-list > li > a.active > span{
				    border-right-color:'. esc_html($menu_button_top_border_hover_color) .';
				}';
	        }
	        
	        if($menu_button_right_border_switch=='enabled'){
		        $custom_css .= '
		        .side-lpdmenu-list > li > a > span{
		        	border-right:'. esc_html($menu_button_right_border_height) .'px solid '. esc_html($menu_button_right_border_color) .';
		        }
		       	.side-lpdmenu-list > li.current_page_parent > a > span,
		       	.side-lpdmenu-list > li.current-menu-ancestor > a > span,
		       	.side-lpdmenu-list > li.current-menu-parent > a > span,
		       	.side-lpdmenu-list > li.current_page_ancestor > a > span,
		       	
		       	.side-lpdmenu-list > li.current-menu-item > a > span,
				.side-lpdmenu-list > li:hover > a > span,
				.side-lpdmenu-list > li > a:hover > span,
				.side-lpdmenu-list > li > a.active > span{
				    border-right-color:'. esc_html($menu_button_right_border_hover_color) .';
				}';
	        }
	        
	        if($menu_button_bottom_border_switch=='enabled'){
		        $custom_css .= '
		        .side-lpdmenu-list > li > a > span{
		        	border-bottom:'. esc_html($menu_button_bottom_border_height) .'px solid '. esc_html($menu_button_bottom_border_color) .';
		        }
		       	.side-lpdmenu-list > li.current_page_parent > a > span,
		       	.side-lpdmenu-list > li.current-menu-ancestor > a > span,
		       	.side-lpdmenu-list > li.current-menu-parent > a > span,
		       	.side-lpdmenu-list > li.current_page_ancestor > a > span,
		       	
		       	.side-lpdmenu-list > li.current-menu-item > a > span,
				.side-lpdmenu-list > li:hover > a > span,
				.side-lpdmenu-list > li > a:hover > span,
				.side-lpdmenu-list > li > a.active > span{
				    border-bottom-color:'. esc_html($menu_button_bottom_border_hover_color) .';
				}';
	        }
	        
	        if($menu_button_left_border_switch=='enabled'){
		        $custom_css .= '
		        .side-lpdmenu-list > li > a > span{
		        	border-left:'. esc_html($menu_button_left_border_height) .'px solid '. esc_html($menu_button_left_border_color) .';
		        }
		       	.side-lpdmenu-list > li.current_page_parent > a > span,
		       	.side-lpdmenu-list > li.current-menu-ancestor > a > span,
		       	.side-lpdmenu-list > li.current-menu-parent > a > span,
		       	.side-lpdmenu-list > li.current_page_ancestor > a > span,
		       	
		       	.side-lpdmenu-list > li.current-menu-item > a > span,
				.side-lpdmenu-list > li:hover > a > span,
				.side-lpdmenu-list > li > a:hover > span,
				.side-lpdmenu-list > li > a.active > span{
				    border-left-color:'. esc_html($menu_button_left_border_hover_color) .';
				}';
	        }
	        
	        if($menu_button_text){
	        
				$current_style = $menu_button_text['variation'];
	
				if ( $current_style === 'regular' ) { $current_style = '400'; }
	            if ( $current_style == 'italic' ) { $current_style = '400italic'; }
	            
				if($menu_button_text['style']){ $font_style  = 'font-style: '. $menu_button_text['style'] .';';
				}else{ $font_style  = ( strpos( $current_style, 'italic' ) ) ? 'font-style: italic;' : 'font-style: normal;'; }
				
				if($menu_button_text['weight']){
					$font_weight  = 'font-weight: '. $menu_button_text['weight'] .';';
				}else{
					$font_weight = 'font-weight: ' . intval( $current_style ) . ';';
				}
				
		       $custom_css .= '
				.side-lpdmenu-list > li > a{
				    font-family: '. esc_html($menu_button_text['family']) .';
					'. esc_html($font_style) .'
					'. esc_html($font_weight) .'
				    font-size: '. esc_html($menu_button_text['size']) .'px;
				    letter-spacing: '. esc_html($menu_button_text['letter-spacing']) .'px;
				    line-height: '. esc_html($menu_button_text['line-height']) .'px;
				    color: '. esc_html($menu_button_color) .';
				}';
		       $custom_css .= '
		       	.side-lpdmenu-list > li.current_page_parent > a,.side-lpdmenu-list > li.current-menu-ancestor > a,.side-lpdmenu-list > li.current-menu-parent > a,.side-lpdmenu-list > li.current_page_ancestor > a,.side-lpdmenu-list > li.current-menu-item > a,.side-lpdmenu-list > li:hover > a,.side-lpdmenu-list > li > a:hover,.side-lpdmenu-list > li > a.active{
				    color: '. esc_html($menu_button_color_hover) .';
				}';
	
	        }
	        
	        if($menu_button_overlay_effect_switch=="enabled"){
	        
		        if($menu_button_overlay_effect_types=="type_1"){
		        $custom_css .= '
		        .side-lpdmenu-list.menu-btn-animated > li > a > span > span.btn-overlay{
		        	height: '. esc_html($menu_button_text['line-height']) .'px;
		            background-color: '. esc_html($menu_background_color_hover) .';
					-webkit-border-radius: '. esc_html($menu_button_radius) .'px;
					-moz-border-radius: '. esc_html($menu_button_radius) .'px;
					border-radius: '. esc_html($menu_button_radius) .'px;
		        }';
		        }
		        
		        if($menu_button_overlay_effect_types=="type_2"){
		        $custom_css .= '
		        .side-lpdmenu-list.menu-btn-animated-2 > li > a > span > span.btn-overlay{
		        	height: '. esc_html($menu_button_text['line-height']) .'px;
		            background-color: '. esc_html($menu_background_color_hover) .';
					-webkit-border-radius: '. esc_html($menu_button_radius) .'px;
					-moz-border-radius: '. esc_html($menu_button_radius) .'px;
					border-radius: '. esc_html($menu_button_radius) .'px;
	
		        }';
		        }
	        
	        }
	        
	        if($dropdown_font){
	        
				$current_style = $dropdown_font['variation'];
	
				if ( $current_style === 'regular' ) {
	                $current_style = '400';
	            }
	            if ( $current_style == 'italic' ) {
	                $current_style = '400italic';
	            }
	            
				if($dropdown_font['style']){
					$font_style  = 'font-style: '. $dropdown_font['style'] .';';
				}else{
					$font_style  = ( strpos( $current_style, 'italic' ) ) ? 'font-style: italic;' : 'font-style: normal;';
				}
				
				if($dropdown_font['weight']){
					$font_weight  = 'font-weight: '. $dropdown_font['weight'] .';';
				}else{
					$font_weight = 'font-weight: ' . intval( $current_style ) . ';';
				}
				
		        $custom_css .= '
				.nav-megamenu-type-2 .side-lpdmenu-list .megamenu .link-list li.menu-item a,
		        .nav-submenu-type-2 .side-lpdmenu-list .lpdmenu-submenu li a,
		        .nav-megamenu-type-1 .side-lpdmenu-list .megamenu .link-list li.menu-item a,
		        .nav-submenu-type-1 .side-lpdmenu-list .lpdmenu-submenu li a{
		            font-family: '. esc_html($dropdown_font['family']) .';
		        	'. esc_html($font_style) .'
		        	'. esc_html($font_weight) .'
		            font-size: '. esc_html($dropdown_font['size']) .'px;
		            line-height: '. esc_html($dropdown_font['line-height']) .';
		            letter-spacing: '. esc_html($dropdown_font['letter-spacing']) .'px;
		            color: '. esc_html($dropdown_color) .';
		        }';
	        }
	        
	        $custom_css .= '
	        .nav-megamenu-type-2 .side-lpdmenu-list .megamenu .link-list li.menu-item a .menu-item-textWrap:after,
			.nav-submenu-type-2 .side-lpdmenu-list .lpdmenu-submenu li a .menu-item-textWrap:after,
	        .nav-megamenu-type-1 .side-lpdmenu-list .megamenu .link-list li.menu-item a .menu-item-textWrap:after,
			.nav-submenu-type-1 .side-lpdmenu-list .lpdmenu-submenu li a .menu-item-textWrap:after{
	        	background-color: '. esc_html($dropdown_color_hover) .';
	        }';
	
	        $custom_css .= '
	        .nav-megamenu-type-2 .side-lpdmenu-list .megamenu .link-list li.menu-item a:active,
	        .nav-megamenu-type-2 .side-lpdmenu-list .megamenu .link-list li.menu-item a:hover,
	        .nav-submenu-type-2 .side-lpdmenu-list .lpdmenu-submenu li a.active,
			.nav-submenu-type-2 .side-lpdmenu-list .lpdmenu-submenu li a:hover,
	        .nav-megamenu-type-1 .side-lpdmenu-list .megamenu .link-list li.menu-item a:active,
	        .nav-megamenu-type-1 .side-lpdmenu-list .megamenu .link-list li.menu-item a:hover,
	        .nav-submenu-type-1 .side-lpdmenu-list .lpdmenu-submenu li a.active,
			.nav-submenu-type-1 .side-lpdmenu-list .lpdmenu-submenu li a:hover{
	        	color: '. esc_html($dropdown_color_hover) .';
	        }';
	        
	        if($dropdown_title_font){
	        
				$current_style = $dropdown_title_font['variation'];
	
				if ( $current_style === 'regular' ) {
	                $current_style = '400';
	            }
	            if ( $current_style == 'italic' ) {
	                $current_style = '400italic';
	            }
	            
				if($dropdown_title_font['style']){
					$font_style  = 'font-style: '. $dropdown_title_font['style'] .';';
				}else{
					$font_style  = ( strpos( $current_style, 'italic' ) ) ? 'font-style: italic;' : 'font-style: normal;';
				}
				
				if($dropdown_title_font['weight']){
					$font_weight  = 'font-weight: '. $dropdown_title_font['weight'] .';';
				}else{
					$font_weight = 'font-weight: ' . intval( $current_style ) . ';';
				}
				
		        $custom_css .= '
		        .nav-megamenu-type-2 .side-lpdmenu-list .megamenu li.title,
		        .nav-megamenu-type-1 .side-lpdmenu-list .megamenu li.title{
		            font-family: '. esc_html($dropdown_title_font['family']) .';
		        	'. esc_html($font_style) .'
		        	'. esc_html($font_weight) .'
		            font-size: '. esc_html($dropdown_title_font['size']) .'px;
		            letter-spacing: '. esc_html($dropdown_title_font['letter-spacing']) .'px;
		            color: '. esc_html($dropdown_title_font['color']) .';
		        }';
	        }
	        
	        $custom_css .= '
	        .nav-megamenu-type-2 .side-lpdmenu-list .megamenu .link-list li.menu-item a .menu-item-textWrap > .material-icons,
	        .nav-submenu-type-2 .side-lpdmenu-list .lpdmenu-submenu li a .menu-item-textWrap > .material-icons{
	        	color: '. esc_html($bullet_color) .';
	        }';

        }
        
        if($search_form_visibility=='enabled'){
	        $custom_css .= '
	        .header-container .search-container{
	        	margin-top: '. esc_html($search_btn_container_margin_top) .'px;
	        	margin-right: '. esc_html($search_btn_container_margin_right) .'px;
	        	margin-bottom: '. esc_html($search_btn_container_margin_bottom) .'px;
	            margin-left: '. esc_html($search_btn_container_margin_left) .'px;
	        }';
	        
	        if($search_btn_sepline=='enabled'){
		        $custom_css .= '
			    .header-container .search-container:before{
				    position: absolute;
				    top: 50%;
				    left: 0;
				    width: 1px;
				    height: 30px;
				    margin-top:-15px;
				    background-color: '. esc_html($search_btn_sepline_color) .';
				    content: "";
		        }';
	        }
	        
	        $custom_css .= '
		    .header-container .search-btn{
	        	margin-right: '. esc_html($search_btn_margin_right) .'px;
	            margin-left: '. esc_html($search_btn_margin_left) .'px;
	        }';
	        
	        $custom_css .= '
		    .header-container .search-btn > div{
	        	width: '. esc_html($search_btn_width) .'px;
	        	color: '. esc_html($search_btn_color) .';
	        	background-color: '. esc_html($search_btn_background) .';
	        }';
	        
	        $custom_css .= '
		    .header-container .search-btn > div:hover{
	        	color: '. esc_html($search_btn_color_hover) .';
	        	background-color: '. esc_html($search_btn_background_hover) .';
	        }';
	        
	        $custom_css .= '
		    .header-container .search-btn span{
	        	font-size: '. esc_html($search_btn_icon_size) .'px;
	        }';
	        
	        if($search_button_border=='enabled'){
		        $custom_css .= '
		        .header-container .search-btn > div:before{
					position: absolute;
					top: 0;
					right: 0;
					bottom: 0;
					left: 0;
					content: "";
		            border-width: '. esc_html($search_border_weight) .'px;
		            border-color: '. esc_html($search_border_color) .';
		            border-style: solid;
					-webkit-border-radius: 50%;
					-moz-border-radius: 50%;
					border-radius: 50%;
		        }';
		        $custom_css .= '
		        .header-container .search-btn:hover > div:before{
		            border-color: '. esc_html($search_border_color_hover) .';
		        }';
	        }
	        
        }
        
        if($msg_container_visibility=="enabled"){
	       
	        $custom_css .= '
	        .header-container .message-container{
	        	margin-top: '. esc_html($msg_container_margin_top) .'px;
	        	margin-right: '. esc_html($msg_container_margin_right) .'px;
	        	margin-bottom: '. esc_html($msg_container_margin_bottom) .'px;
	            margin-left: '. esc_html($msg_container_margin_left) .'px;
	        }';
	        
	        if($msg_container_sepline=='enabled'){
		        $custom_css .= '
			    .header-container .message-container:before{
				    position: absolute;
				    top: 50%;
				    left: 0;
				    width: 1px;
				    height: 30px;
				    margin-top:-15px;
				    background-color: '. esc_html($msg_container_sepline_color) .';
				    content: "";
		        }';
	        } 
	        
	        $custom_css .= '
	        .header-container .message-container-wrap{
	        	margin-right: '. esc_html($msg_block_margin_right) .'px;
	            margin-left: '. esc_html($msg_block_margin_left) .'px;
	        }';
	        
	        if($msg_block_text){
	        
				$current_style = $msg_block_text['variation'];
	
				if ( $current_style === 'regular' ) {
	                $current_style = '400';
	            }
	            if ( $current_style == 'italic' ) {
	                $current_style = '400italic';
	            }
	            
				if($msg_block_text['style']){
					$font_style  = 'font-style: '. $msg_block_text['style'] .';';
				}else{
					$font_style  = ( strpos( $current_style, 'italic' ) ) ? 'font-style: italic;' : 'font-style: normal;';
				}
				
				if($msg_block_text['weight']){
					$font_weight  = 'font-weight: '. $msg_block_text['weight'] .';';
				}else{
					$font_weight = 'font-weight: ' . intval( $current_style ) . ';';
				}

		        $custom_css .= '
		        .header-container .message-block{
		            font-family: '. esc_html($msg_block_text['family']) .';
		        	'. esc_html($font_style) .'
		        	'. esc_html($font_weight) .'
		            font-size: '. esc_html($msg_block_text['size']) .'px;
		            letter-spacing: '. esc_html($msg_block_text['letter-spacing']) .'px;
		            color: '. esc_html($msg_block_text_color) .' !important;
		        	padding-right: '. esc_html($msg_block_padding_right) .'px;
		            padding-left: '. esc_html($msg_block_padding_left) .'px;
		            background-color: '. esc_html($msg_block_background) .';
		            
		        }';
		        $custom_css .= '
		        .header-container .message-block u{
		            color: '. esc_html($msg_block_underline) .' !important;
		            
		        }';
		        
	        }
	        
	        if($msg_block_border=='enabled'){
		        $custom_css .= '
		        .header-container .message-block:before{
					position: absolute;
					top: 0;
					right: 0;
					bottom: 0;
					left: 0;
					content: "";
		            border-width: '. esc_html($msg_block_border_weight) .'px;
		            border-color: '. esc_html($msg_block_border_color) .';
		            border-style: solid;
		        }';
		        $custom_css .= '
		        .header-container .message-block:hover:before{
		            border-color: '. esc_html($msg_block_border_color_hover) .';
		        }';
	        }
	        
        }
        
		if($social_media_visibility=="enabled") {
		    $custom_css .= '
		    #header .social-container .social-icons-container > ul > li > a{
		    	background-color: '. esc_html($social_media_btn_background) .';
		    	color: '. esc_html($social_media_btn_color) .';
		    }';
		    
		    $custom_css .= '
		    #header .social-container .social-icons-container > ul > li > a:hover{
		    	color: '. esc_html($social_media_btn_hover_color) .';
		    }';
		    
		    $custom_css .= '
		    #header .social-container .social-icons-container > ul > li > a span.bg-overlay{
		    	background-color: '. esc_html($social_media_btn_background_hover) .';
		    }';
		    
		    $custom_css .= '
		    #header .social-container .social-icons-container > ul > li > a .tooltip-container{
		    	background-color: '. esc_html($social_media_tooltip_bg) .';
		    	font-size: '. esc_html($body_font['size']) .'px;
		    }';
		    
		    $custom_css .= '
		    #header .social-container .social-icons-container > ul > li > a .tooltip-container:after{
		    	border-left-color: '. esc_html($social_media_tooltip_bg) .';
		    }';
		    
		    $custom_css .= '
		    #header .social-container{
		    	margin-top: '. esc_html($social_media_container_margin_top) .'px;
		    	margin-right: '. esc_html($social_media_container_margin_right) .'px;
		    	margin-bottom: '. esc_html($social_media_container_margin_bottom) .'px;
		        margin-left: '. esc_html($social_media_container_margin_left) .'px;
		    }';
		    
		    if($social_media_sepline=='enabled'){
			    $custom_css .= '
			    #header .social-container:before{
				    position: absolute;
				    top: 50%;
				    left: 0;
				    width: 1px;
				    height: 30px;
				    margin-top:-17px;
				    background-color: '. esc_html($social_media_sepline_color) .';
				    content: "";
			    }';
			}
		    
		    $custom_css .= '
		    #header .social-container .social-icons-container{
		    	margin-right: '. esc_html($social_media_margin_right) .'px;
		        margin-left: '. esc_html($social_media_margin_left) .'px;
		    }';
		    
		}
		
		if($shopping_cart_visibility == "enabled" ) {
		
		    $custom_css .= '
		    .header-container .shopping-cart-container{
		    	margin-top: '. esc_html($shopping_cart_btn_container_margin_top) .'px;
		    	margin-right: '. esc_html($shopping_cart_btn_container_margin_right) .'px;
		    	margin-bottom: '. esc_html($shopping_cart_btn_container_margin_bottom) .'px;
		        margin-left: '. esc_html($shopping_cart_btn_container_margin_left) .'px;
		    }';
		    
		    if($shopping_sepline_switch=='enabled'){
		        $custom_css .= '
			    .header-container .shopping-cart-container:before{
				    position: absolute;
				    top: 5px;
				    left: 0;
				    width: 1px;
				    height: 30px;
				    background-color: '. esc_html($shopping_cart_btn_sepline_color) .';
				    content: "";
		        }';
		    }
		    
		    $custom_css .= '
		    .header-container .shopping-cart-btn-wrap{
		    	margin-right: '. esc_html($shopping_cart_btn_margin_right) .'px;
		        margin-left: '. esc_html($shopping_cart_btn_margin_left) .'px;
		        padding-bottom: '. esc_html($shopping_cart_btn_padding_bottom) .'px;
		    }';
		    
		    $custom_css .= '
		    .header-container .shopping-cart-btn-content{
		    	width: '. esc_html($shopping_cart_btn_width) .'px;
		    	color: '. esc_html($shopping_cart_btn_color) .';
		    	background-color: '. esc_html($shopping_cart_btn_background) .';
		    }';
		    
		    $custom_css .= '
		    .header-container .shopping-cart-btn-wrap:hover .shopping-cart-btn-content{
		    	color: '. esc_html($shopping_cart_btn_color_hover) .';
		    	background-color: '. esc_html($shopping_cart_btn_background_hover) .';
		    }';
		    
		    if($shopping_cart_button_border_switch=='enabled'){
		        $custom_css .= '
		        .header-container .shopping-cart-btn-content:before{
					position: absolute;
					top: 0;
					right: 0;
					bottom: 0;
					left: 0;
					content: "";
		            border-width: '. esc_html($shopping_cart_border_weight) .'px;
		            border-color: '. esc_html($shopping_cart_border_color) .';
		            border-style: solid;
		        }';
		        $custom_css .= '
		        .header-container .shopping-cart-btn-wrap:hover .shopping-cart-btn-content:before{
		            border-color: '. esc_html($shopping_cart_border_color_hover) .';
		        }';
		    }
		    
		    if($shopping_cart_alternative=='enabled'){
		        
		        $custom_css .= '
			    .header-container .shopping-cart-btn.shopping-cart-btn-type-1 .count{
		        	color: '. esc_html($shopping_cart_btn_counter_color) .';
		        	background-color: '. esc_html($shopping_cart_btn_counter_bg) .';
		        }';
		        
		        $custom_css .= '
			    .header-container .shopping-cart-btn-wrap:hover .shopping-cart-btn.shopping-cart-btn-type-1 .count{
		        	color: '. esc_html($shopping_cart_btn_counter_color_hover) .';
		        	background-color: '. esc_html($shopping_cart_btn_counter_bg_hover) .';
		        }';
		    }
		
		   
		}

		if($wpml_container_switch=="enabled"){
	        $custom_css .= '
	        .header-container .wpml-container-1{
	        	margin-top: '. esc_html($wpml_container_margin_top) .'px;
	        	margin-right: '. esc_html($wpml_container_margin_right) .'px;
	        	margin-bottom: '. esc_html($wpml_container_margin_bottom) .'px;
	            margin-left: '. esc_html($wpml_container_margin_left) .'px;
	            width: '. esc_html($wpml_btn_width) .'px;
	        }';
	        
	        if($wpml_btn_sepline=='enabled'){
		        $custom_css .= '
			    .header-container .wpml-container-1:before{
				    position: absolute;
				    top: 5px;
				    left: 0;
				    width: 1px;
				    height: 30px;
				    background-color: '. esc_html($wpml_btn_sepline_color) .';
				    content: "";
		        }';
	        } 
	        
	        $custom_css .= '
	        .header-container .wpml-container-1 .wpml-button{
	        	color: '. esc_html($wpml_btn_color) .';
	        }';

	        
	        if($wpml_btn_font){
	        
				$current_style = $wpml_btn_font['variation'];
	
				if ( $current_style === 'regular' ) {
	                $current_style = '400';
	            }
	            if ( $current_style == 'italic' ) {
	                $current_style = '400italic';
	            }
	            
				if($wpml_btn_font['style']){
					$font_style  = 'font-style: '. $wpml_btn_font['style'] .';';
				}else{
					$font_style  = ( strpos( $current_style, 'italic' ) ) ? 'font-style: italic;' : 'font-style: normal;';
				}
				
				if($wpml_btn_font['weight']){
					$font_weight  = 'font-weight: '. $wpml_btn_font['weight'] .';';
				}else{
					$font_weight = 'font-weight: ' . intval( $current_style ) . ';';
				}
				
		        $custom_css .= '
		        .header-container .wpml-container-1 .wpml-button{
		            font-family: '. esc_html($wpml_btn_font['family']) .';
		        	'. esc_html($font_style) .'
		        	'. esc_html($font_weight) .'
		            font-size: '. esc_html($wpml_btn_font['size']) .'px;
		            letter-spacing: '. esc_html($wpml_btn_font['letter-spacing']) .'px;
		            text-transform: uppercase;
		        }';
	        }
	        
	        $custom_css .= '
	        .header-container .wpml-container-1 .wpml-button:hover{
	        	color: '. esc_html($wpml_btn_color_hover) .';
	        }';
	        
        }
		
		
		if($second_custom_styles_switch=='enabled') {
		
		if($header_type!='side') {
		
		if($header_type=='left') {
			if($navigation_variant=='variant_1') {
		        if($right_bar_border_switch_left_v1!='disabled'){
			        $custom_css .= '
			        .lpd-slider-second-style-header.left-header-variant-1 .header-container .right-bar{border-left: 1px solid '. esc_html($second_right_bar_border_color) .';}';
		        }
	        }elseif($navigation_variant=='variant_2') {
	        
		        if($right_bar_border_switch_left_v2!='disabled'){
			        $custom_css .= '
			        .lpd-slider-second-style-header.left-header-variant-2 .right-bar{border-left: 1px solid '. esc_html($second_right_bar_border_color) .';}';
		        }
		        
		        $custom_css .= '
		        .lpd-slider-second-style-header.left-header-variant-2 .header-bottom{background-color: '. esc_html($second_nav_holder_bg) .';}';
		        
		        if($top_border_switch_left_v2!='disabled'){
			        $custom_css .= '
			        .lpd-slider-second-style-header.left-header-variant-2 .header-bottom{border-top: 1px solid '. esc_html($second_nav_holder_top_border_color) .';}';
		        }
		        
		        if($bottom_border_switch_left_v2!='disabled'){
			        $custom_css .= '
			        .lpd-slider-second-style-header.left-header-variant-2 .header-bottom{border-bottom: 1px solid '. esc_html($second_nav_holder_bottom_border_color) .';}';
		        }
		        
		    }elseif($navigation_variant=='variant_3') {
		        if($right_bar_border_switch_left_v3!='disabled'){
			        $custom_css .= '
			        .lpd-slider-second-style-header.left-header-variant-3 .header-container .right-bar{border-left: 1px solid '. esc_html($second_right_bar_border_color) .';}';
		        }
	        }
		}
		elseif($header_type=='center'){
			if($navigation_variant=='variant_1') {
		        if($right_bar_border_switch_center_v1!='disabled'){
			        $custom_css .= '
			        .lpd-slider-second-style-header.center-header-variant-1 .header-container .right-bar{border-left: 1px solid '. esc_html($second_right_bar_border_color) .';}';
		        }
		        if($left_bar_border_switch_center_v1!='disabled'){
			        $custom_css .= '
			        .lpd-slider-second-style-header.center-header-variant-1 .header-container .left-bar{border-right: 1px solid '. esc_html($second_left_bar_border_color) .';}';
		        }
	        }elseif($navigation_variant=='variant_2') {
	        
		        if($right_bar_border_switch_center_v2!='disabled'){
			        $custom_css .= '
			        .lpd-slider-second-style-header.center-header-variant-2 .header-container .right-bar{border-left: 1px solid '. esc_html($second_right_bar_border_color) .';}';
		        }
		        if($left_bar_border_switch_center_v2!='disabled'){
			        $custom_css .= '
			        .lpd-slider-second-style-header.center-header-variant-2 .header-container .left-bar{border-right: 1px solid '. esc_html($second_left_bar_border_color) .';}';
		        }
		        
		        $custom_css .= '
		        .lpd-slider-second-style-header.center-header-variant-2 .header-container .header-container .header-bottom{background-color: '. esc_html($second_nav_holder_bg) .';}';
		        
		        if($top_border_switch_center_v2!='disabled'){
			        $custom_css .= '
			        .lpd-slider-second-style-header.center-header-variant-2 .header-container .header-bottom{border-top: 1px solid '. esc_html($second_nav_holder_top_border_color) .';}';
		        }
		        
		        if($bottom_border_switch_center_v2!='disabled'){
			        $custom_css .= '
			        .lpd-slider-second-style-header.center-header-variant-2 .header-container .header-bottom{border-bottom: 1px solid '. esc_html($second_nav_holder_bottom_border_color) .';}';
		        }
		        
		    }elseif($navigation_variant=='variant_3') {
		        if($right_bar_border_switch_center_v3!='disabled'){
			        $custom_css .= '
			        .lpd-slider-second-style-header.center-header-variant-3 .header-container .right-bar{border-left: 1px solid '. esc_html($second_right_bar_border_color) .';}';
		        }
		        if($left_bar_border_switch_center_v3!='disabled'){
			        $custom_css .= '
			        .lpd-slider-second-style-header.center-header-variant-3 .header-container .left-bar{border-right: 1px solid '. esc_html($second_left_bar_border_color) .';}';
		        }
	        }
		}
        
        if($header_type=='left'||$header_type=='center') {
	        
	        if($header_top_border_switch!='disabled'){
		        $custom_css .= '
		        .lpd-slider-second-style-header .header-main{border-top-color: '. esc_html($second_top_border_color) .';border-top-style: solid;border-top-width: '. esc_html($header_top_border_weight) .'px;}';
	        }
	        
	        if($header_bottom_border_switch!='disabled'){
		        $custom_css .= '
		        .lpd-slider-second-style-header .header-main{border-bottom-color: '. esc_html($second_bottom_border_color) .';border-bottom-style: solid;border-bottom-width: '. esc_html($header_bottom_border_weight) .'px;}';
	        }
        }
        
        if($header_type=='left'||$header_type=='center') {
	        $custom_css .= '
	        .lpd-slider-second-style-header .header-main{background-color: '. esc_html($second_header_background) .';}';
	    }
		
        if($logo_type=='text_logo'){
			
	        $custom_css .= '
	        .lpd-slider-second-style-header .header-container .text-logo .logo{
	            color: '. esc_html($second_header_logo_text_color) .';
	        }';
	        
	        if($header_type=='left'||$header_type=='center') {
		        if($header_logo_text_border_switch=='enabled'){
			        $custom_css .= '
			        .lpd-slider-second-style-header .header-container .text-logo .logo{
			            border-right: 1px solid '. esc_html($second_header_logo_text_border_color) .';
			        }';
		        }
	        }
        
        }
        
        if($logo_type=='image_logo'){
        
	        if($header_type=='left'||$header_type=='center') {
		        if($header_logo_border_switch=='enabled'){
			        $custom_css .= '
			        .lpd-slider-second-style-header .header-container .image-logo .logo{
			            border-right: 1px solid '. esc_html($second_header_logo_border_color) .';
			        }';
		        }
	        }

	    }

        $custom_css .= '
        .lpd-slider-second-style-header .header-container .lpdmenu-list > li > a > span{
            background-color: '. esc_html($second_menu_background_color) .';
        }
		.lpd-slider-second-style-header .header-container .lpdmenu-list > li.current_page_parent > a > span,.lpd-slider-second-style-header .header-container .lpdmenu-list > li.current-menu-ancestor > a > span,.lpd-slider-second-style-header .header-container .lpdmenu-list > li.current-menu-parent > a > span,.lpd-slider-second-style-header .header-container .lpdmenu-list > li.current_page_ancestor > a > span,.lpd-slider-second-style-header .header-container .lpdmenu-list > li.current-menu-item > a > span,.lpd-slider-second-style-header .header-container .lpdmenu-list > li > a.active > span{
			background-color: '. esc_html($second_menu_background_color_hover) .';
		}';
		
        if($menu_button_overlay_effect_switch=="disabled"){
	        $custom_css .= '.lpd-slider-second-style-header .header-container .lpdmenu-list > li:hover > a > span,.lpd-slider-second-style-header .header-container .lpdmenu-list > li > a:hover > span{background-color: '. esc_html($second_menu_background_color_hover) .';}';  
        }
        
        $custom_css .= '
       	.lpd-slider-second-style-header .header-container .lpdmenu-list > li.current_page_parent > a > span,.lpd-slider-second-style-header .header-container .lpdmenu-list > li.current-menu-ancestor > a > span,.lpd-slider-second-style-header .header-container .lpdmenu-list > li.current-menu-parent > a > span,.lpd-slider-second-style-header .header-container .lpdmenu-list > li.current_page_ancestor > a > span,.lpd-slider-second-style-header .header-container .lpdmenu-list > li.current-menu-item > a > span,.lpd-slider-second-style-header .header-container .lpdmenu-list > li:hover > a > span,.lpd-slider-second-style-header .header-container .lpdmenu-list > li > a:hover > span,.lpd-slider-second-style-header .header-container .lpdmenu-list > li > a.active > span{
		    border-top-color:'. esc_html($second_menu_button_top_border_hover_color) .';
		}';
		
        if($menu_button_text){
			
	       $custom_css .= '
			.lpd-slider-second-style-header .header-container .lpdmenu-list > li > a{
			    color: '. esc_html($second_menu_button_color) .';
			}';
	       $custom_css .= '
	       	.lpd-slider-second-style-header .header-container .lpdmenu-list > li.current_page_parent > a,.lpd-slider-second-style-header .header-container .lpdmenu-list > li.current-menu-ancestor > a,.lpd-slider-second-style-header .header-container .lpdmenu-list > li.current-menu-parent > a,.lpd-slider-second-style-header .header-container .lpdmenu-list > li.current_page_ancestor > a,.lpd-slider-second-style-header .header-container .lpdmenu-list > li.current-menu-item > a,.lpd-slider-second-style-header .lpdmenu-list > li:hover > a,.lpd-slider-second-style-header .header-container .lpdmenu-list > li > a:hover,.lpd-slider-second-style-header .header-container .lpdmenu-list > li > a.active{
			    color: '. esc_html($second_menu_button_color_hover) .';
			}';

        }
		
        if($menu_button_top_border_switch=='enabled'){
	        $custom_css .= '
	        .lpd-slider-second-style-header .header-container .lpdmenu-list > li > a > span{
	        	border-top:'. esc_html($menu_button_top_border_height) .'px solid '. esc_html($second_menu_button_top_border_color) .';
	        }
			.lpd-slider-second-style-header .header-container .lpdmenu-list > li.current_page_parent > a > span,.lpd-slider-second-style-header .header-container .lpdmenu-list > li.current-menu-ancestor > a > span,.lpd-slider-second-style-header .header-container .lpdmenu-list > li.current-menu-parent > a > span,.lpd-slider-second-style-header .header-container .lpdmenu-list > li.current_page_ancestor > a > span,.lpd-slider-second-style-header .header-container .lpdmenu-list > li.current-menu-item > a > span,.lpd-slider-second-style-header .header-container .lpdmenu-list > li:hover > a > span,.lpd-slider-second-style-header .header-container .lpdmenu-list > li > a:hover > span,.lpd-slider-second-style-header .header-container .lpdmenu-list > li > a.active > span{
			    border-right-color:'. esc_html($menu_button_top_border_hover_color) .';
			}';
        }
        
        if($menu_button_right_border_switch=='enabled'){
	        $custom_css .= '
	        .lpd-slider-second-style-header .header-container .lpdmenu-list > li > a > span{
	        	border-right:'. esc_html($menu_button_right_border_height) .'px solid '. esc_html($second_menu_button_right_border_color) .';
	        }
	       	.lpd-slider-second-style-header .header-container .lpdmenu-list > li.current_page_parent > a > span,
	       	.lpd-slider-second-style-header .header-container .lpdmenu-list > li.current-menu-ancestor > a > span,
	       	.lpd-slider-second-style-header .header-container .lpdmenu-list > li.current-menu-parent > a > span,
	       	.lpd-slider-second-style-header .header-container .lpdmenu-list > li.current_page_ancestor > a > span,
	       	
	       	.lpd-slider-second-style-header .header-container .lpdmenu-list > li.current-menu-item > a > span,
			.lpd-slider-second-style-header .header-container .lpdmenu-list > li:hover > a > span,
			.lpd-slider-second-style-header .header-container .lpdmenu-list > li > a:hover > span,
			.lpd-slider-second-style-header .header-container .lpdmenu-list > li > a.active > span{
			    border-right-color:'. esc_html($second_menu_button_right_border_hover_color) .';
			}';
        }
        
        if($menu_button_bottom_border_switch=='enabled'){
	        $custom_css .= '
	        .lpd-slider-second-style-header .header-container .lpdmenu-list > li > a > span{
	        	border-bottom:'. esc_html($menu_button_bottom_border_height) .'px solid '. esc_html($second_menu_button_bottom_border_color) .';
	        }
	       	.lpd-slider-second-style-header .header-container .lpdmenu-list > li.current_page_parent > a > span,
	       	.lpd-slider-second-style-header .header-container .lpdmenu-list > li.current-menu-ancestor > a > span,
	       	.lpd-slider-second-style-header .header-container .lpdmenu-list > li.current-menu-parent > a > span,
	       	.lpd-slider-second-style-header .header-container .lpdmenu-list > li.current_page_ancestor > a > span,
	       	
	       	.lpd-slider-second-style-header .header-container .lpdmenu-list > li.current-menu-item > a > span,
			.lpd-slider-second-style-header .header-container .lpdmenu-list > li:hover > a > span,
			.lpd-slider-second-style-header .header-container .lpdmenu-list > li > a:hover > span,
			.lpd-slider-second-style-header .header-container .lpdmenu-list > li > a.active > span{
			    border-bottom-color:'. esc_html($second_menu_button_bottom_border_hover_color) .';
			}';
        }
        
        if($menu_button_left_border_switch=='enabled'){
	        $custom_css .= '
	        .lpd-slider-second-style-header .header-container .lpdmenu-list > li > a > span{
	        	border-left:'. esc_html($menu_button_left_border_height) .'px solid '. esc_html($second_menu_button_left_border_color) .';
	        }
	       	.lpd-slider-second-style-header .header-container .lpdmenu-list > li.current_page_parent > a > span,
	       	.lpd-slider-second-style-header .header-container .lpdmenu-list > li.current-menu-ancestor > a > span,
	       	.lpd-slider-second-style-header .header-container .lpdmenu-list > li.current-menu-parent > a > span,
	       	.lpd-slider-second-style-header .header-container .lpdmenu-list > li.current_page_ancestor > a > span,
	       	
	       	.lpd-slider-second-style-header .header-container .lpdmenu-list > li.current-menu-item > a > span,
			.lpd-slider-second-style-header .header-container .lpdmenu-list > li:hover > a > span,
			.lpd-slider-second-style-header .header-container .lpdmenu-list > li > a:hover > span,
			.lpd-slider-second-style-header .header-container .lpdmenu-list > li > a.active > span{
			    border-left-color:'. esc_html($second_menu_button_left_border_hover_color) .';
			}';
        }
       
        if($search_form_visibility=='enabled'){

	        if($search_btn_sepline=='enabled'){
		        $custom_css .= '
			    .lpd-slider-second-style-header .header-container .search-container:before{
				    background-color: '. esc_html($second_search_btn_sepline_color) .';
		        }';
	        }
	        
	        $custom_css .= '
		    .lpd-slider-second-style-header .header-container .search-btn > div{
	        	color: '. esc_html($second_search_btn_color) .';
	        	background-color: '. esc_html($second_search_btn_background) .';
	        }';
	        
	        $custom_css .= '
		    .lpd-slider-second-style-header .header-container .search-btn > div:hover{
	        	color: '. esc_html($second_search_btn_color_hover) .';
	        	background-color: '. esc_html($second_search_btn_background_hover) .';
	        }';
	        
	        if($search_button_border=='enabled'){
		        $custom_css .= '
		        .lpd-slider-second-style-header .header-container .search-btn > div:before{
		            border-color: '. esc_html($second_search_border_color) .';
		        }';
		        $custom_css .= '
		        .lpd-slider-second-style-header .header-container .search-btn:hover > div:before{
		            border-color: '. esc_html($second_search_border_color_hover) .';
		        }';
	        }
	        
        }
        
        if($msg_container_visibility=="enabled"){
	        
	        if($msg_container_sepline=='enabled'){
		        $custom_css .= '
			    .lpd-slider-second-style-header .header-container .message-container:before{
				    background-color: '. esc_html($second_msg_container_sepline_color) .';
		        }';
	        } 
	        
	        if($msg_block_text){

		        $custom_css .= '
		        .lpd-slider-second-style-header .header-container .message-block{
		            color: '. esc_html($second_msg_block_text_color) .' !important;
		            background-color: '. esc_html($second_msg_block_background) .';
		            
		        }';
		        $custom_css .= '
		        .lpd-slider-second-style-header .header-container .message-block u{
		            color: '. esc_html($second_msg_block_underline) .' !important;
		            
		        }';
		        
	        }
	        
	        if($msg_block_border=='enabled'){
		        $custom_css .= '
		        .lpd-slider-second-style-header .header-container .message-block:before{
		            border-color: '. esc_html($second_msg_block_border_color) .';
		        }';
		        $custom_css .= '
		        .lpd-slider-second-style-header .header-container .message-block:hover:before{
		            border-color: '. esc_html($second_msg_block_border_color_hover) .';
		        }';
	        }
	        
        }
		
		if($social_media_visibility=="enabled") {
		    $custom_css .= '
		    .lpd-slider-second-style-header .header-container .social-container .social-icons-container > ul > li > a{
		    	background-color: '. esc_html($second_social_media_btn_background) .';
		    	color: '. esc_html($second_social_media_btn_color) .';
		    }';
		    
		    $custom_css .= '
		    .lpd-slider-second-style-header .header-container .social-container .social-icons-container > ul > li > a:hover{
		    	color: '. esc_html($second_social_media_btn_hover_color) .';
		    }';
		    
		    $custom_css .= '
		    .lpd-slider-second-style-header .header-container .social-container .social-icons-container > ul > li > a span.bg-overlay{
		    	background-color: '. esc_html($second_social_media_btn_background_hover) .';
		    }';
		    
		    $custom_css .= '
		    .lpd-slider-second-style-header .header-container .social-container .social-icons-container > ul > li > a .tooltip-container{
		    	background-color: '. esc_html($second_social_media_tooltip_bg) .';
		    	font-size: '. esc_html($body_font['size']) .'px;
		    }';
		    
		    $custom_css .= '
		    .lpd-slider-second-style-header .header-container .social-container .social-icons-container > ul > li > a .tooltip-container:after{
		    	border-left-color: '. esc_html($second_social_media_tooltip_bg) .';
		    }';
		    
		    if($social_media_sepline=='enabled'){
			    $custom_css .= '
			    .lpd-slider-second-style-header .header-container .social-container:before{
				    background-color: '. esc_html($second_social_media_sepline_color) .';
			    }';
			}
		    
		}
		
		if($shopping_cart_visibility == "enabled" ) {

		    if($shopping_sepline_switch=='enabled'){
		        $custom_css .= '
			    .lpd-slider-second-style-header .header-container .shopping-cart-container:before{
				    background-color: '. esc_html($second_shopping_cart_btn_sepline_color) .';
		        }';
		    }
		    
		    $custom_css .= '
		    .lpd-slider-second-style-header .header-container .shopping-cart-btn-content{
		    	color: '. esc_html($second_shopping_cart_btn_color) .';
		    	background-color: '. esc_html($second_shopping_cart_btn_background) .';
		    }';
		    
		    $custom_css .= '
		    .lpd-slider-second-style-header .header-container .shopping-cart-btn-wrap:hover .shopping-cart-btn-content{
		    	color: '. esc_html($second_shopping_cart_btn_color_hover) .';
		    	background-color: '. esc_html($second_shopping_cart_btn_background_hover) .';
		    }';
		    
		    if($shopping_cart_button_border_switch=='enabled'){
		        $custom_css .= '
		        .lpd-slider-second-style-header .header-container .shopping-cart-btn-content:before{
		            border-color: '. esc_html($second_shopping_cart_border_color) .';
		        }';
		        $custom_css .= '
		        .lpd-slider-second-style-header .header-container .shopping-cart-btn-wrap:hover .shopping-cart-btn-content:before{
		            border-color: '. esc_html($second_shopping_cart_border_color_hover) .';
		        }';
		    }
		    
		    if($shopping_cart_alternative=='enabled'){
		        
		        $custom_css .= '
			    .lpd-slider-second-style-header .header-container .shopping-cart-btn.shopping-cart-btn-type-1 .count{
		        	color: '. esc_html($second_shopping_cart_btn_counter_color) .';
		        	background-color: '. esc_html($second_shopping_cart_btn_counter_bg) .';
		        }';
		        
		        $custom_css .= '
			    .lpd-slider-second-style-header .header-container .shopping-cart-btn-wrap:hover .shopping-cart-btn.shopping-cart-btn-type-1 .count{
		        	color: '. esc_html($second_shopping_cart_btn_counter_color_hover) .';
		        	background-color: '. esc_html($second_shopping_cart_btn_counter_bg_hover) .';
		        }';
		    }
		
		   
		}
		
		if($wpml_container_switch=="enabled"){
	        
	        if($wpml_btn_sepline=='enabled'){
		        $custom_css .= '
			    .lpd-slider-second-style-header .header-container .wpml-container-1 .wpml-button:before{
				    background-color: '. esc_html($second_wpml_btn_sepline_color) .';
		        }';
	        } 
	        
	        $custom_css .= '
	        .lpd-slider-second-style-header .header-container .wpml-container-1 .wpml-button{
	        	color: '. esc_html($second_wpml_btn_color) .';
	            background-color: '. esc_html($second_wpml_btn_background) .';
	        }';
	        
	        $custom_css .= '
	        .lpd-slider-second-style-header .header-container .wpml-container-1 .wpml-button:hover{
	        	color: '. esc_html($second_wpml_btn_color_hover) .';
	        }';
	        
	        
        }
		
		}
		
		}
        
		
		// Mobile Navigation
        $custom_css .= '
        .lpdmobmenu-click i{
        	color: '. esc_html($mob_first_level_nav_color) .';
        }';
        
        if($mob_first_level_nav_font){
        
			$current_style = $mob_first_level_nav_font['variation'];

			if ( $current_style === 'regular' ) {
                $current_style = '400';
            }
            if ( $current_style == 'italic' ) {
                $current_style = '400italic';
            }
            
			if($mob_first_level_nav_font['style']){
				$font_style  = 'font-style: '. $mob_first_level_nav_font['style'] .';';
			}else{
				$font_style  = ( strpos( $current_style, 'italic' ) ) ? 'font-style: italic;' : 'font-style: normal;';
			}
			
			if($mob_first_level_nav_font['weight']){
				$font_weight  = 'font-weight: '. $mob_first_level_nav_font['weight'] .';';
			}else{
				$font_weight = 'font-weight: ' . intval( $current_style ) . ';';
			}
			
	        $custom_css .= '
	        .lpdmobmenu > .lpdmobmenu-list > li > a{
	            font-family: '. esc_html($mob_first_level_nav_font['family']) .';
	        	'. esc_html($font_style) .'
	        	'. esc_html($font_weight) .'
	            font-size: '. esc_html($mob_first_level_nav_font['size']) .'px;
	            letter-spacing: '. esc_html($mob_first_level_nav_font['letter-spacing']) .'px;
	            color: '. esc_html($mob_first_level_nav_color) .';
	        }';
        }
        
        $custom_css .= '
        .lpdmobmenu > .lpdmobmenu-list > li.current_page_parent > a,
        .lpdmobmenu > .lpdmobmenu-list > li.current-menu-ancestor > a,
        .lpdmobmenu > .lpdmobmenu-list > li.current-menu-parent > a,
        .lpdmobmenu > .lpdmobmenu-list > li.current_page_ancestor > a,
        
        .lpdmobmenu > .lpdmobmenu-list > li.current-menu-item > a,
        .lpdmobmenu > .lpdmobmenu-list > li > a.active,
		.lpdmobmenu > .lpdmobmenu-list > li:hover > a{
        	color: '. esc_html($mob_first_level_nav_color_hover) .';
        }';
        
        if($mob_nav_font){
        
			$current_style = $mob_nav_font['variation'];

			if ( $current_style === 'regular' ) { $current_style = '400'; }
            if ( $current_style == 'italic' ) { $current_style = '400italic'; }
            
			if($mob_nav_font['style']){
				$font_style  = 'font-style: '. $mob_nav_font['style'] .';';
			}else{
				$font_style  = ( strpos( $current_style, 'italic' ) ) ? 'font-style: italic !important;' : 'font-style: normal !important;';
			}
			
			if($mob_nav_font['weight']){
				$font_weight  = 'font-weight: '. $mob_nav_font['weight'] .' !important;';
			}else{
				$font_weight = 'font-weight: ' . intval( $current_style ) . ' !important;';
			}
			
	        $custom_css .= '
	        .lpdmobmenu .megamenu > ul > li > a,
	        .lpdmobmenu .lpdmobmenu-submenu li a{
	            font-family: '. esc_html($mob_nav_font['family']) .' !important;
	        	'. esc_html($font_style) .'
	        	'. esc_html($font_weight) .'
	            font-size: '. esc_html($mob_nav_font['size']) .'px !important;
	            letter-spacing: '. esc_html($mob_nav_font['letter-spacing']) .'px !important;
	            color: '. esc_html($mob_nav_color) .' !important;
	        }';
        }
        
        $custom_css .= '
        .lpdmobmenu .megamenu > ul > li.current_page_parent > a,
        .lpdmobmenu .megamenu > ul > li.current-menu-ancestor > a,
        .lpdmobmenu .megamenu > ul > li.current-menu-parent > a,
        .lpdmobmenu .megamenu > ul > li.current_page_ancestor > a,
        
        .lpdmobmenu .megamenu > ul > li.current-menu-item > a,
        .lpdmobmenu .megamenu > ul > li > a:hover,
        
        .lpdmobmenu .lpdmobmenu-submenu li.current_page_parent > a,
        .lpdmobmenu .lpdmobmenu-submenu li.current-menu-ancestor > a,
        .lpdmobmenu .lpdmobmenu-submenu li.current-menu-parent > a,
        .lpdmobmenu .lpdmobmenu-submenu li.current_page_ancestor > a,
        
        .lpdmobmenu .lpdmobmenu-submenu li.current-menu-item > a,
        .lpdmobmenu .lpdmobmenu-submenu li a:hover,
		.lpdmobmenu .lpdmobmenu-submenu li a:active,
		.lpdmobmenu .lpdmobmenu-submenu li:hover > a{
        	color: '. esc_html($mob_nav_color_hover) .' !important;
        }';
        
        if($mob_nav_title_font){
        
			$current_style = $mob_nav_title_font['variation'];

			if ( $current_style === 'regular' ) {
                $current_style = '400';
            }
            if ( $current_style == 'italic' ) {
                $current_style = '400italic';
            }
            
			if($mob_nav_title_font['style']){
				$font_style  = 'font-style: '. $mob_nav_title_font['style'] .';';
			}else{
				$font_style  = ( strpos( $current_style, 'italic' ) ) ? 'font-style: italic !important;' : 'font-style: normal !important;';
			}
			
			if($mob_nav_title_font['weight']){
				$font_weight  = 'font-weight: '. $mob_nav_title_font['weight'] .' !important;';
			}else{
				$font_weight = 'font-weight: ' . intval( $current_style ) . ' !important;';
			}
			
	        $custom_css .= '
	        .lpdmobmenu .megamenu ul li.title{
	            font-family: '. esc_html($mob_nav_title_font['family']) .' !important;
	        	'. esc_html($font_style) .'
	        	'. esc_html($font_weight) .'
	            font-size: '. esc_html($mob_nav_title_font['size']) .'px !important;
	            letter-spacing: '. esc_html($mob_nav_title_font['letter-spacing']) .'px !important;
	            color: '. esc_html($mob_nav_title_font_color) .' !important;
	        }';
        }
        
        $custom_css .= '
        .slide-panel-toggle{
        	margin-top: '. esc_html($mob_nav_btn_margin_top) .'px;
        	margin-right: '. esc_html($mob_nav_btn_margin_right) .'px;
        	margin-bottom: '. esc_html($mob_nav_btn_margin_bottom) .'px;
        	margin-left: '. esc_html($mob_nav_btn_margin_left) .'px;
        }
        .sticky-slide-panel-toggle .slide-panel-toggle span,.sticky-slide-panel-toggle .slide-panel-toggle span:before,.sticky-slide-panel-toggle .slide-panel-toggle span:after {
        	background-color: '. esc_html($mob_nav_btn_color) .';
        }
        .sticky-slide-panel-toggle .slide-panel-toggle:hover span,.sticky-slide-panel-toggle .slide-panel-toggle:hover span:before,.sticky-slide-panel-toggle .slide-panel-toggle:hover span:after {
        	background-color: '. esc_html($mob_nav_btn_color_hover) .';
        }';
        
        if($sticky_header_visibility=='enabled'){
        
        	$custom_css .= '
	        .nav-sticky {
	        	background-color:'. esc_html($sticky_background) .';
	        }';
	        
	        if($sticky_top_border_switch!='disabled'){
		        $custom_css .= '
		        .header-main{border-top-color: '. esc_html($sticky_top_border_color) .';border-top-style: solid;border-top-width: '. esc_html($sticky_top_border_weight) .'px;}';
	        }
	        
	        if($sticky_bottom_border_switch!='disabled'){
		        $custom_css .= '
		        .header-main{border-bottom-color: '. esc_html($sticky_bottom_border_color) .';border-bottom-style: solid;border-bottom-width: '. esc_html($sticky_bottom_border_weight) .'px;}';
	        }
	                
	        $custom_css .= '
	        .sticky-slide-panel-toggle {
	        	background-color:'. esc_html($sticky_mob_nav_btn_bg) .';
	        }
	        .sticky-slide-panel-toggle span, .sticky-slide-panel-toggle span:before, .sticky-slide-panel-toggle span:after {
        		background-color:'. esc_html($sticky_mob_nav_btn_color) .';
			}';
	        
	        $custom_css .= '
	        .sticky-slide-panel-toggle:hover{
	        	background-color:'. esc_html($sticky_mob_nav_btn_bg_hover) .';
	        }
	        .sticky-slide-panel-toggle:hover span, .sticky-slide-panel-toggle:hover span:before, .sticky-slide-panel-toggle:hover span:after {
        		background-color: '. esc_html($sticky_mob_nav_btn_color_hover) .';
			}';
	        ;
	        
	        if($sticky_logo_type=='text_logo'){
	        
				$current_style = $sticky_logo_text['variation'];
	
				if ( $current_style === 'regular' ) { $current_style = '400'; }
	            if ( $current_style == 'italic' ) { $current_style = '400italic'; }
	            
				if($sticky_logo_text['style']){
					$font_style  = 'font-style: '. $sticky_logo_text['style'] .';';
				}else{
					$font_style  = ( strpos( $current_style, 'italic' ) ) ? 'font-style: italic;' : 'font-style: normal;';
				}
				
				if($sticky_logo_text['weight']){
					$font_weight  = 'font-weight: '. $sticky_logo_text['weight'] .';';
				}else{
					$font_weight = 'font-weight: ' . intval( $current_style ) . ';';
				}
				
		        $custom_css .= '
		        .sticky-wrapper .text-logo .logo{
		            font-family: '. esc_html($sticky_logo_text['family']) .';
		        	'. esc_html($font_style) .'
		        	'. esc_html($font_weight) .'
		            font-size: '. esc_html($sticky_logo_text['size']) .'px;
		            letter-spacing: '. esc_html($sticky_logo_text['letter-spacing']) .'px;
		            color: '. esc_html($sticky_logo_text['color']) .';
		        	padding-top: '. esc_html($sticky_logo_text_padding_top) .'px;
		        	padding-right: '. esc_html($sticky_logo_text_padding_right) .'px;
		        	padding-bottom: '. esc_html($sticky_logo_text_padding_bottom) .'px;
		            padding-left: '. esc_html($sticky_logo_text_padding_left) .'px;
		        }';

		        if($sticky_logo_text_border_switch=='enabled'){
			        $custom_css .= '
			        .sticky-wrapper .text-logo .logo{
			            border-right: 1px solid '. esc_html($sticky_logo_text_border_color) .';
			        }';
		        }
	        
	        }
	        if($sticky_logo_type=='image_logo'){
		    	$custom_css .= '
		        .sticky-wrapper .image-logo .logo{
		        	padding-top: '. esc_html($sticky_logo_padding_top) .'px;
		        	padding-right: '. esc_html($sticky_logo_padding_right) .'px;
		        	padding-bottom: '. esc_html($sticky_logo_padding_bottom) .'px;
		            padding-left: '. esc_html($sticky_logo_padding_left) .'px;
		        }';
		        
		        

		        if($sticky_logo_border_switch=='enabled'){
			        $custom_css .= '
					.sticky-wrapper .image-logo .logo{
			            border-right: 1px solid '. esc_html($sticky_logo_border_color) .';
			        }';
		        }

		    	$custom_css .= '
		        .sticky-wrapper #logo-sticky{
		        	min-width: '. esc_html($sticky_logo_width) .'px;
		        }';

	
		    }
	        
	        $custom_css .= '
	        .sticky-wrapper .lpdmenu{margin-right: '. esc_html($sticky_navigation_margin_right) .'px; margin-left: '. esc_html($sticky_navigation_margin_left) .'px;}';
	        
	        $custom_css .= '
	        .sticky-wrapper .lpdmenu-list > li{ padding-top: '. esc_html($sticky_menu_item_padding_top) .'px; padding-right: '. esc_html($sticky_menu_item_padding_right) .'px; padding-bottom: '. esc_html($sticky_menu_item_padding_bottom) .'px; padding-left: '. esc_html($sticky_menu_item_padding_left) .'px;
	        }';
	        
	        if($sticky_menu_button_paddings_nl_switch=="enabled"){
		        $custom_css .= '
		        @media (min-width: 1200px) and (max-width: 1479px) { .sticky-wrapper .lpdmenu-list > li{ padding-right: '. esc_html($sticky_menu_button_padding_right_nl) .'px; padding-left: '. esc_html($sticky_menu_button_padding_left_nl) .'px; }}';
	        }
	       
	        if($sticky_menu_button_paddings_tl_switch=="enabled"){
		        $custom_css .= '
		        @media (min-width: 992px) and (max-width: 1199px) { .sticky-wrapper .lpdmenu-list > li{ padding-right: '. esc_html($sticky_menu_button_padding_right_tl) .'px; padding-left: '. esc_html($sticky_menu_button_padding_left_tl) .'px; }}';
	        }
	        
	        $custom_css .= '
	        .sticky-wrapper .lpdmenu-list > li > a > span{
	        	padding-right: '. esc_html($sticky_menu_button_inner_padding_right) .'px;
	            padding-left: '. esc_html($sticky_menu_button_inner_padding_left) .'px;
	            background-color: '. esc_html($sticky_menu_background_color) .';
				-webkit-border-radius: '. esc_html($sticky_menu_button_radius) .'px;
				-moz-border-radius: '. esc_html($sticky_menu_button_radius) .'px;
				border-radius: '. esc_html($sticky_menu_button_radius) .'px;
	        }
			.sticky-wrapper .lpdmenu-list > li.current_page_parent > a > span,.sticky-wrapper .lpdmenu-list > li.current-menu-ancestor > a > span,.sticky-wrapper .lpdmenu-list > li.current-menu-parent > a > span,.sticky-wrapper .lpdmenu-list > li.current_page_ancestor > a > span,.sticky-wrapper .lpdmenu-list > li.current-menu-item > a > span,.sticky-wrapper .lpdmenu-list > li > a.active > span{
				background-color: '. esc_html($sticky_menu_background_color_hover) .';
			}';
			
	        if($sticky_menu_button_overlay_effect_switch=="disabled"){
		        $custom_css .= '.sticky-wrapper .lpdmenu-list > li:hover > a > span,.sticky-wrapper .lpdmenu-list > li > a:hover > span{background-color: '. esc_html($sticky_menu_background_color_hover) .';}';  
	        }
	        
	        $custom_css .= '
	       	.sticky-wrapper .lpdmenu-list > li.current_page_parent > a > span,.sticky-wrapper .lpdmenu-list > li.current-menu-ancestor > a > span,.sticky-wrapper .lpdmenu-list > li.current-menu-parent > a > span,.sticky-wrapper .lpdmenu-list > li.current_page_ancestor > a > span,.sticky-wrapper .lpdmenu-list > li.current-menu-item > a > span,.sticky-wrapper .lpdmenu-list > li:hover > a > span,.sticky-wrapper .lpdmenu-list > li > a:hover > span,.sticky-wrapper .lpdmenu-list > li > a.active > span{
			    border-top-color:'. esc_html($sticky_menu_button_top_border_hover_color) .';
			}';
	    
	        if($sticky_menu_button_top_border_switch=='enabled'){
		        $custom_css .= '
		        .sticky-wrapper .lpdmenu-list > li > a > span{
		        	border-top:'. esc_html($sticky_menu_button_top_border_height) .'px solid '. esc_html($sticky_menu_button_top_border_color) .';
		        }
				.sticky-wrapper .lpdmenu-list > li.current_page_parent > a > span,.sticky-wrapper .lpdmenu-list > li.current-menu-ancestor > a > span,.sticky-wrapper .lpdmenu-list > li.current-menu-parent > a > span,.sticky-wrapper .lpdmenu-list > li.current_page_ancestor > a > span,.sticky-wrapper .lpdmenu-list > li.current-menu-item > a > span,.sticky-wrapper .lpdmenu-list > li:hover > a > span,.sticky-wrapper .lpdmenu-list > li > a:hover > span,.sticky-wrapper .lpdmenu-list > li > a.active > span{
				    border-right-color:'. esc_html($sticky_menu_button_top_border_hover_color) .';
				}';
	        }
	        
	        if($sticky_menu_button_right_border_switch=='enabled'){
		        $custom_css .= '
		        .sticky-wrapper .lpdmenu-list > li > a > span{
		        	border-right:'. esc_html($sticky_menu_button_right_border_height) .'px solid '. esc_html($sticky_menu_button_right_border_color) .';
		        }
		       	.sticky-wrapper .lpdmenu-list > li.current_page_parent > a > span,
		       	.sticky-wrapper .lpdmenu-list > li.current-menu-ancestor > a > span,
		       	.sticky-wrapper .lpdmenu-list > li.current-menu-parent > a > span,
		       	.sticky-wrapper .lpdmenu-list > li.current_page_ancestor > a > span,
		       	
		       	.sticky-wrapper .lpdmenu-list > li.current-menu-item > a > span,
				.sticky-wrapper .lpdmenu-list > li:hover > a > span,
				.sticky-wrapper .lpdmenu-list > li > a:hover > span,
				.sticky-wrapper .lpdmenu-list > li > a.active > span{
				    border-right-color:'. esc_html($sticky_menu_button_right_border_hover_color) .';
				}';
	        }
	        
	        if($sticky_menu_button_bottom_border_switch=='enabled'){
		        $custom_css .= '
		        .sticky-wrapper .lpdmenu-list > li > a > span{
		        	border-bottom:'. esc_html($sticky_menu_button_bottom_border_height) .'px solid '. esc_html($sticky_menu_button_bottom_border_color) .';
		        }
		       	.sticky-wrapper .lpdmenu-list > li.current_page_parent > a > span,
		       	.sticky-wrapper .lpdmenu-list > li.current-menu-ancestor > a > span,
		       	.sticky-wrapper .lpdmenu-list > li.current-menu-parent > a > span,
		       	.sticky-wrapper .lpdmenu-list > li.current_page_ancestor > a > span,
		       	
		       	.sticky-wrapper .lpdmenu-list > li.current-menu-item > a > span,
				.sticky-wrapper .lpdmenu-list > li:hover > a > span,
				.sticky-wrapper .lpdmenu-list > li > a:hover > span,
				.sticky-wrapper .lpdmenu-list > li > a.active > span{
				    border-bottom-color:'. esc_html($sticky_menu_button_bottom_border_hover_color) .';
				}';
	        }
	        
	        if($sticky_menu_button_left_border_switch=='enabled'){
		        $custom_css .= '
		        .sticky-wrapper .lpdmenu-list > li > a > span{
		        	border-left:'. esc_html($sticky_menu_button_left_border_height) .'px solid '. esc_html($sticky_menu_button_left_border_color) .';
		        }
		       	.sticky-wrapper .lpdmenu-list > li.current_page_parent > a > span,
		       	.sticky-wrapper .lpdmenu-list > li.current-menu-ancestor > a > span,
		       	.sticky-wrapper .lpdmenu-list > li.current-menu-parent > a > span,
		       	.sticky-wrapper .lpdmenu-list > li.current_page_ancestor > a > span,
		       	
		       	.sticky-wrapper .lpdmenu-list > li.current-menu-item > a > span,
				.sticky-wrapper .lpdmenu-list > li:hover > a > span,
				.sticky-wrapper .lpdmenu-list > li > a:hover > span,
				.sticky-wrapper .lpdmenu-list > li > a.active > span{
				    border-left-color:'. esc_html($sticky_menu_button_left_border_hover_color) .';
				}';
	        }
	        
	        if($sticky_menu_button_inner_paddings_nl_switch=="enabled"){
		        $custom_css .= '
		        @media (min-width: 1200px) and (max-width: 1479px) {
		        .sticky-wrapper .lpdmenu-list > li > a > span{
		        	padding-right: '. esc_html($sticky_menu_button_inner_padding_right_nl) .'px;
		            padding-left: '. esc_html($sticky_menu_button_inner_padding_left_nl) .'px;
		        }}';
	        }
	       
	        if($sticky_menu_button_inner_paddings_tl_switch=="enabled"){
		        $custom_css .= '
		        @media (min-width: 992px) and (max-width: 1199px) {
		        .sticky-wrapper .lpdmenu-list > li > a > span{
		        	padding-right: '. esc_html($sticky_menu_button_inner_padding_right_tl) .'px;
		            padding-left: '. esc_html($sticky_menu_button_inner_padding_left_tl) .'px;
		        }}';
	        }    
		        
	        if($sticky_menu_button_text){
	        
				$current_style = $sticky_menu_button_text['variation'];
	
				if ( $current_style === 'regular' ) { $current_style = '400'; }
	            if ( $current_style == 'italic' ) { $current_style = '400italic'; }
	            
				if($sticky_menu_button_text['style']){ $font_style  = 'font-style: '. $sticky_menu_button_text['style'] .';';
				}else{ $font_style  = ( strpos( $current_style, 'italic' ) ) ? 'font-style: italic;' : 'font-style: normal;'; }
				
				if($sticky_menu_button_text['weight']){
					$font_weight  = 'font-weight: '. $sticky_menu_button_text['weight'] .';';
				}else{
					$font_weight = 'font-weight: ' . intval( $current_style ) . ';';
				}
				
		       $custom_css .= '
				.sticky-wrapper .lpdmenu-list > li > a{
				    font-family: '. esc_html($sticky_menu_button_text['family']) .';
					'. esc_html($font_style) .'
					'. esc_html($font_weight) .'
				    font-size: '. esc_html($sticky_menu_button_text['size']) .'px;
				    letter-spacing: '. esc_html($sticky_menu_button_text['letter-spacing']) .'px;
				    line-height: '. esc_html($sticky_menu_button_text['line-height']) .'px;
				    color: '. esc_html($sticky_menu_button_color) .';
				}';
		       $custom_css .= '
		       	.sticky-wrapper .lpdmenu-list > li.current_page_parent > a,.sticky-wrapper .lpdmenu-list > li.current-menu-ancestor > a,.sticky-wrapper .lpdmenu-list > li.current-menu-parent > a,.sticky-wrapper .lpdmenu-list > li.current_page_ancestor > a,.sticky-wrapper .lpdmenu-list > li.current-menu-item > a,.sticky-wrapper .lpdmenu-list > li:hover > a,.sticky-wrapper .lpdmenu-list > li > a:hover,.sticky-wrapper .lpdmenu-list > li > a.active{
				    color: '. esc_html($sticky_menu_button_color_hover) .';
				}';
				
		        if($sticky_menu_button_text_nl_switch=="enabled"){
			        $custom_css .= '
			        @media (min-width: 1200px) and (max-width: 1479px) {
			        .sticky-wrapper .lpdmenu-list > li > a{
			        	font-size: '. esc_html($sticky_menu_button_text_nl) .'px;
			        }}';
		        }
		       
		        if($sticky_menu_button_text_tl_switch=="enabled"){
			        $custom_css .= '
			        @media (min-width: 992px) and (max-width: 1199px) {
			        .sticky-wrapper .lpdmenu-list > li > a{
			        	font-size: '. esc_html($sticky_menu_button_text_tl) .'px;
			        }}';
		        }  
	
	        }
	        
	        if($sticky_menu_button_overlay_effect_switch=="enabled"){
	        
		        if($sticky_menu_button_overlay_effect_types=="type_1"){
		        $custom_css .= '
		        .sticky-wrapper .lpdmenu-list.menu-btn-animated > li > a > span > span.btn-overlay{
		        	height: '. esc_html($sticky_menu_button_text['line-height']) .'px;
		            background-color: '. esc_html($sticky_menu_background_color_hover) .';
					-webkit-border-radius: '. esc_html($sticky_menu_button_radius) .'px;
					-moz-border-radius: '. esc_html($sticky_menu_button_radius) .'px;
					border-radius: '. esc_html($sticky_menu_button_radius) .'px;
		        }';
		        }
		        
		        if($sticky_menu_button_overlay_effect_types=="type_2"){
		        $custom_css .= '
		        .sticky-wrapper .lpdmenu-list.menu-btn-animated-2 > li > a > span > span.btn-overlay{
		        	height: '. esc_html($sticky_menu_button_text['line-height']) .'px;
		            background-color: '. esc_html($sticky_menu_background_color_hover) .';
					-webkit-border-radius: '. esc_html($sticky_menu_button_radius) .'px;
					-moz-border-radius: '. esc_html($sticky_menu_button_radius) .'px;
					border-radius: '. esc_html($sticky_menu_button_radius) .'px;
	
		        }';
		        }
	        
	        }
	        
	        if($sticky_right_bar_border_switch!='disabled'){
		        $custom_css .= '
		        .sticky-wrapper .right-bar{border-left: 1px solid '. esc_html($sticky_right_bar_border_color) .';}';
	        }
	        
	        if($sticky_search_form_visibility=='enabled'){
		        $custom_css .= '
		        .sticky-wrapper .search-container{
		        	margin-top: '. esc_html($sticky_search_btn_container_margin_top) .'px;
		        	margin-right: '. esc_html($sticky_search_btn_container_margin_right) .'px;
		        	margin-bottom: '. esc_html($sticky_search_btn_container_margin_bottom) .'px;
		            margin-left: '. esc_html($sticky_search_btn_container_margin_left) .'px;
		        }';
		        
		        if($sticky_search_btn_sepline=='enabled'){
			        $custom_css .= '
				    .sticky-wrapper .search-container:before{
					    position: absolute;
					    top: 5px;
					    left: 0;
					    width: 1px;
					    height: 30px;
					    background-color: '. esc_html($sticky_search_btn_sepline_color) .';
					    content: "";
			        }';
		        }
		        
		        $custom_css .= '
			    .sticky-wrapper .search-btn{
		        	margin-right: '. esc_html($sticky_search_btn_margin_right) .'px;
		            margin-left: '. esc_html($sticky_search_btn_margin_left) .'px;
		        }';
		        
		        $custom_css .= '
			    .sticky-wrapper .search-btn > div{
		        	width: '. esc_html($sticky_search_btn_width) .'px;
		        	color: '. esc_html($sticky_search_btn_color) .';
		        	background-color: '. esc_html($sticky_search_btn_background) .';
		        }';
		        
		        $custom_css .= '
			    .sticky-wrapper .search-btn > div:hover{
		        	color: '. esc_html($sticky_search_btn_color_hover) .';
		        	background-color: '. esc_html($sticky_search_btn_background_hover) .';
		        }';
		        
		        $custom_css .= '
			    .sticky-wrapper .search-btn span{
		        	font-size: '. esc_html($sticky_search_btn_icon_size) .'px;
		        }';
		        
		        if($sticky_search_button_border=='enabled'){
			        $custom_css .= '
			        .sticky-wrapper .search-btn > div:before{
						position: absolute;
						top: 0;
						right: 0;
						bottom: 0;
						left: 0;
						content: "";
			            border-width: '. esc_html($sticky_search_border_weight) .'px;
			            border-color: '. esc_html($sticky_search_border_color) .';
		            border-style: solid;
					-webkit-border-radius: 50%;
					-moz-border-radius: 50%;
					border-radius: 50%;
			        }';
			        $custom_css .= '
			        .sticky-wrapper .search-btn:hover > div:before{
			            border-color: '. esc_html($sticky_search_border_color_hover) .';
			        }';
		        }
		        
	        }
	        
	        if($sticky_msg_container_visibility=="enabled"){
		       
		        $custom_css .= '
		        .sticky-wrapper .message-container{
		        	margin-top: '. esc_html($sticky_msg_container_margin_top) .'px;
		        	margin-right: '. esc_html($sticky_msg_container_margin_right) .'px;
		        	margin-bottom: '. esc_html($sticky_msg_container_margin_bottom) .'px;
		            margin-left: '. esc_html($sticky_msg_container_margin_left) .'px;
		        }';
		        
		        if($sticky_msg_container_sepline=='enabled'){
			        $custom_css .= '
				    .sticky-wrapper .message-container:before{
					    position: absolute;
					    top: 5px;
					    left: 0;
					    width: 1px;
					    height: 30px;
					    background-color: '. esc_html($sticky_msg_container_sepline_color) .';
					    content: "";
			        }';
		        } 
		        
		        $custom_css .= '
		        .sticky-wrapper .message-container-wrap{
		        	margin-right: '. esc_html($sticky_msg_block_margin_right) .'px;
		            margin-left: '. esc_html($sticky_msg_block_margin_left) .'px;
		        }';
		        
		        if($sticky_msg_block_text){
		        
					$current_style = $sticky_msg_block_text['variation'];
		
					if ( $current_style === 'regular' ) {
		                $current_style = '400';
		            }
		            if ( $current_style == 'italic' ) {
		                $current_style = '400italic';
		            }
		            
					if($sticky_msg_block_text['style']){
						$font_style  = 'font-style: '. $sticky_msg_block_text['style'] .';';
					}else{
						$font_style  = ( strpos( $current_style, 'italic' ) ) ? 'font-style: italic;' : 'font-style: normal;';
					}
					
					if($sticky_msg_block_text['weight']){
						$font_weight  = 'font-weight: '. $sticky_msg_block_text['weight'] .';';
					}else{
						$font_weight = 'font-weight: ' . intval( $current_style ) . ';';
					}
	
			        $custom_css .= '
			        .sticky-wrapper .message-block{
			            font-family: '. esc_html($sticky_msg_block_text['family']) .';
			        	'. esc_html($font_style) .'
			        	'. esc_html($font_weight) .'
			            font-size: '. esc_html($sticky_msg_block_text['size']) .'px;
			            letter-spacing: '. esc_html($sticky_msg_block_text['letter-spacing']) .'px;
			            color: '. esc_html($sticky_msg_block_text['color']) .' !important;
			        	padding-right: '. esc_html($sticky_msg_block_padding_right) .'px;
			            padding-left: '. esc_html($sticky_msg_block_padding_left) .'px;
			            background-color: '. esc_html($sticky_msg_block_background) .';
			            
			        }';
			        $custom_css .= '
			        .sticky-wrapper .message-block u{
			            color: '. esc_html($sticky_msg_block_underline) .' !important;
			            
			        }';
			        
		        }
		        
		        if($sticky_msg_block_border=='enabled'){
			        $custom_css .= '
			        .sticky-wrapper .message-block:before{
						position: absolute;
						top: 0;
						right: 0;
						bottom: 0;
						left: 0;
						content: "";
			            border-width: '. esc_html($sticky_msg_block_border_weight) .'px;
			            border-color: '. esc_html($sticky_msg_block_border_color) .';
			            border-style: solid;
			        }';
			        $custom_css .= '
			        .sticky-wrapper .message-block:hover:before{
			            border-color: '. esc_html($sticky_msg_block_border_color_hover) .';
			        }';
		        }
		        
	        }
	        
			if($sticky_social_media_visibility=="enabled"){
			    $custom_css .= '
			    .sticky-wrapper .social-container .social-icons-container > ul > li > a{
			    	background-color: '. esc_html($sticky_social_media_btn_background) .';
			    	color: '. esc_html($sticky_social_media_btn_color) .';
			    }';
			    
			    $custom_css .= '
			    .sticky-wrapper .social-container .social-icons-container > ul > li > a:hover{
			    	color: '. esc_html($sticky_social_media_btn_hover_color) .';
			    }';
			    
			    $custom_css .= '
			    .sticky-wrapper .social-container .social-icons-container > ul > li > a span.bg-overlay{
			    	background-color: '. esc_html($sticky_social_media_btn_background_hover) .';
			    }';
			    
			    $custom_css .= '
			    .sticky-wrapper .social-container .social-icons-container > ul > li > a .tooltip-container{
			    	background-color: '. esc_html($sticky_social_media_tooltip_bg) .';
			    	font-size: '. esc_html($body_font['size']) .'px;
			    }';
			    
			    $custom_css .= '
			    .sticky-wrapper .social-container .social-icons-container > ul > li > a .tooltip-container:after{
			    	border-left-color: '. esc_html($sticky_social_media_tooltip_bg) .';
			    }';
			    
			    $custom_css .= '
			    .sticky-wrapper .social-container{
			    	margin-top: '. esc_html($sticky_social_media_container_margin_top) .'px;
			    	margin-right: '. esc_html($sticky_social_media_container_margin_right) .'px;
			    	margin-bottom: '. esc_html($sticky_social_media_container_margin_bottom) .'px;
			        margin-left: '. esc_html($sticky_social_media_container_margin_left) .'px;
			    }';
			    
			    if($sticky_social_media_sepline=='enabled'){
				    $custom_css .= '
				    .sticky-wrapper .social-container:before{
					    position: absolute;
					    top: 5px;
					    left: 0;
					    width: 1px;
					    height: 30px;
					    background-color: '. esc_html($sticky_social_media_sepline_color) .';
					    content: "";
				    }';
				}
			    
			    $custom_css .= '
			    .sticky-wrapper .social-container .social-icons-container{
			    	margin-right: '. esc_html($sticky_social_media_margin_right) .'px;
			        margin-left: '. esc_html($sticky_social_media_margin_left) .'px;
			    }';
			    
			}
			
			if($sticky_shopping_cart_visibility == "enabled" ) {
			
			    $custom_css .= '
			    .sticky-wrapper .shopping-cart-container{
			    	margin-top: '. esc_html($sticky_shopping_cart_btn_container_margin_top) .'px;
			    	margin-right: '. esc_html($sticky_shopping_cart_btn_container_margin_right) .'px;
			    	margin-bottom: '. esc_html($sticky_shopping_cart_btn_container_margin_bottom) .'px;
			        margin-left: '. esc_html($sticky_shopping_cart_btn_container_margin_left) .'px;
			    }';
			    
			    if($sticky_shopping_sepline_switch=='enabled'){
			        $custom_css .= '
				    .sticky-wrapper .shopping-cart-container:before{
					    position: absolute;
					    top: 5px;
					    left: 0;
					    width: 1px;
					    height: 30px;
					    background-color: '. esc_html($sticky_shopping_cart_btn_sepline_color) .';
					    content: "";
			        }';
			    }
			    
			    $custom_css .= '
			    .sticky-wrapper .shopping-cart-btn-wrap{
			    	margin-right: '. esc_html($sticky_shopping_cart_btn_margin_right) .'px;
			        margin-left: '. esc_html($sticky_shopping_cart_btn_margin_left) .'px;
			        padding-bottom: '. esc_html($sticky_shopping_cart_btn_padding_bottom) .'px;
			    }';
			    
			    $custom_css .= '
			    .sticky-wrapper .shopping-cart-btn-content{
			    	width: '. esc_html($sticky_shopping_cart_btn_width) .'px;
			    	color: '. esc_html($sticky_shopping_cart_btn_color) .';
			    	background-color: '. esc_html($sticky_shopping_cart_btn_background) .';
			    }';
			    
			    $custom_css .= '
			    .sticky-wrapper .shopping-cart-btn-wrap:hover .shopping-cart-btn-content{
			    	color: '. esc_html($sticky_shopping_cart_btn_color_hover) .';
			    	background-color: '. esc_html($sticky_shopping_cart_btn_background_hover) .';
			    }';
			    
			    if($sticky_shopping_cart_button_border_switch=='enabled'){
			        $custom_css .= '
			        .sticky-wrapper .shopping-cart-btn-content:before{
						position: absolute;
						top: 0;
						right: 0;
						bottom: 0;
						left: 0;
						content: "";
			            border-width: '. esc_html($sticky_shopping_cart_border_weight) .'px;
			            border-color: '. esc_html($sticky_shopping_cart_border_color) .';
			            border-style: solid;
			        }';
			        $custom_css .= '
			        .sticky-wrapper .shopping-cart-btn-wrap:hover .shopping-cart-btn-content:before{
			            border-color: '. esc_html($sticky_shopping_cart_border_color_hover) .';
			        }';
			    }
			    
			    if($sticky_shopping_cart_alternative=='enabled'){
			        
			        $custom_css .= '
				    .sticky-wrapper .shopping-cart-btn.shopping-cart-btn-type-1 .count{
			        	color: '. esc_html($sticky_shopping_cart_btn_counter_color) .';
			        	background-color: '. esc_html($sticky_shopping_cart_btn_counter_bg) .';
			        }';
			        
			        $custom_css .= '
				    .sticky-wrapper .shopping-cart-btn-wrap:hover .shopping-cart-btn.shopping-cart-btn-type-1 .count{
			        	color: '. esc_html($sticky_shopping_cart_btn_counter_color_hover) .';
			        	background-color: '. esc_html($sticky_shopping_cart_btn_counter_bg_hover) .';
			        }';
			    }
			
			   
			}
			
			if($sticky_wpml_container_switch=="enabled"){
		        $custom_css .= '
		        .sticky-wrapper .wpml-container-1{
		        	margin-top: '. esc_html($sticky_wpml_container_margin_top) .'px;
		        	margin-right: '. esc_html($sticky_wpml_container_margin_right) .'px;
		        	margin-bottom: '. esc_html($sticky_wpml_container_margin_bottom) .'px;
		            margin-left: '. esc_html($sticky_wpml_container_margin_left) .'px;
		            width: '. esc_html($sticky_wpml_btn_width) .'px;
		        }';
		        
		        if($sticky_wpml_btn_sepline=='enabled'){
			        $custom_css .= '
				    .sticky-wrapper .wpml-container-1:before{
					    position: absolute;
					    top: 5px;
					    left: 0;
					    width: 1px;
					    height: 30px;
					    background-color: '. esc_html($sticky_wpml_btn_sepline_color) .';
					    content: "";
			        }';
		        } 
		        
		        $custom_css .= '
		        .sticky-wrapper .wpml-container-1 .wpml-button{
		        	color: '. esc_html($sticky_wpml_btn_color) .';
		        }';
	
		        
		        if($sticky_wpml_btn_font){
		        
					$current_style = $sticky_wpml_btn_font['variation'];
		
					if ( $current_style === 'regular' ) {
		                $current_style = '400';
		            }
		            if ( $current_style == 'italic' ) {
		                $current_style = '400italic';
		            }
		            
					if($sticky_wpml_btn_font['style']){
						$font_style  = 'font-style: '. $sticky_wpml_btn_font['style'] .';';
					}else{
						$font_style  = ( strpos( $current_style, 'italic' ) ) ? 'font-style: italic;' : 'font-style: normal;';
					}
					
					if($sticky_wpml_btn_font['weight']){
						$font_weight  = 'font-weight: '. $sticky_wpml_btn_font['weight'] .';';
					}else{
						$font_weight = 'font-weight: ' . intval( $current_style ) . ';';
					}
					
			        $custom_css .= '
			        .sticky-wrapper .wpml-container-1 .wpml-button{
			            font-family: '. esc_html($sticky_wpml_btn_font['family']) .';
			        	'. esc_html($font_style) .'
			        	'. esc_html($font_weight) .'
			            font-size: '. esc_html($sticky_wpml_btn_font['size']) .'px;
			            letter-spacing: '. esc_html($sticky_wpml_btn_font['letter-spacing']) .'px;
			            text-transform: uppercase;
			        }';
		        }
		        
		        $custom_css .= '
		        .sticky-wrapper .wpml-container-1 .wpml-button:hover{
		        	color: '. esc_html($sticky_wpml_btn_color_hover) .';
		        }';
		        
	        }
			        
        }
        
        // Meta Top Bar
        if( naslaan_helpers::naslaan_unyson_check() ) {
        if($meta_top_bg_color){
	        $custom_css .= '
	        .meta-top{
	        	background-color: '. esc_html($meta_top_bg_color) .';
	        }';
	    }
        if($text_msg_1!=""){
	        $custom_css .= '
	        .text-message-1{
	        	margin-top: '. esc_html($text_msg_1_margin_top) .'px;
	        	margin-left: '. esc_html($text_msg_1_margin_left) .'px;
	        	margin-bottom: '. esc_html($text_msg_1_margin_bottom) .'px;
	        	margin-right: '. esc_html($text_msg_1_margin_right) .'px;
	        }';
	        if($text_msg_1_font){
	        
				$current_style = $text_msg_1_font['variation'];
	
				if ( $current_style === 'regular' ) {
	                $current_style = '400';
	            }
	            if ( $current_style == 'italic' ) {
	                $current_style = '400italic';
	            }
	            
				if($text_msg_1_font['style']){
					$font_style  = 'font-style: '. $text_msg_1_font['style'] .';';
				}else{
					$font_style  = ( strpos( $current_style, 'italic' ) ) ? 'font-style: italic;' : 'font-style: normal;';
				}
				
				if($text_msg_1_font['weight']){
					$font_weight  = 'font-weight: '. $text_msg_1_font['weight'] .';';
				}else{
					$font_weight = 'font-weight: ' . intval( $current_style ) . ';';
				}
				
		        $custom_css .= '
		        .text-message-1{
		            font-family: '. esc_html($text_msg_1_font['family']) .';
		        	'. esc_html($font_style) .'
		        	'. esc_html($font_weight) .'
		            font-size: '. esc_html($text_msg_1_font['size']) .'px;
		            line-height: '. esc_html($text_msg_1_font['line-height']) .'px;
		            letter-spacing: '. esc_html($text_msg_1_font['letter-spacing']) .'px;
		            color: '. esc_html($text_msg_1_color) .';
		        }';
		        $custom_css .= '
		        a.text-message-1:hover{
		        	color: '. esc_html($text_msg_1_color_hover) .';
		        }';
	        }
  
        }
        if($text_msg_2!=""){
	        $custom_css .= '
	        .text-message-2{
	        	margin-top: '. esc_html($text_msg_2_margin_top) .'px;
	        	margin-left: '. esc_html($text_msg_2_margin_left) .'px;
	        	margin-bottom: '. esc_html($text_msg_2_margin_bottom) .'px;
	        	margin-right: '. esc_html($text_msg_2_margin_right) .'px;
	        }';
	        if($text_msg_2_font){
	        
				$current_style = $text_msg_2_font['variation'];
	
				if ( $current_style === 'regular' ) {
	                $current_style = '400';
	            }
	            if ( $current_style == 'italic' ) {
	                $current_style = '400italic';
	            }
	            
				if($text_msg_2_font['style']){
					$font_style  = 'font-style: '. $text_msg_2_font['style'] .';';
				}else{
					$font_style  = ( strpos( $current_style, 'italic' ) ) ? 'font-style: italic;' : 'font-style: normal;';
				}
				
				if($text_msg_2_font['weight']){
					$font_weight  = 'font-weight: '. $text_msg_2_font['weight'] .';';
				}else{
					$font_weight = 'font-weight: ' . intval( $current_style ) . ';';
				}
				
		        $custom_css .= '
		        .text-message-2{
		            font-family: '. esc_html($text_msg_2_font['family']) .';
		        	'. esc_html($font_style) .'
		        	'. esc_html($font_weight) .'
		            font-size: '. esc_html($text_msg_2_font['size']) .'px;
		            line-height: '. esc_html($text_msg_2_font['line-height']) .'px;
		            letter-spacing: '. esc_html($text_msg_2_font['letter-spacing']) .'px;
		            color: '. esc_html($text_msg_2_color) .';
		        }';
		        $custom_css .= '
		        a.text-message-2:hover{
		        	color: '. esc_html($text_msg_2_color_hover) .';
		        }';
	        }
  
        }
        if ( has_nav_menu( 'top-meta-menu-1' ) ) {
	        $custom_css .= '
	        .meta-top .top-meta-menu-1{
	        	margin-top: '. esc_html($meta_top_menu_1_margin_top) .'px;
	        	margin-left: '. esc_html($meta_top_menu_1_margin_left) .'px;
	        	margin-bottom: '. esc_html($meta_top_menu_1_margin_bottom) .'px;
	        	margin-right: '. esc_html($meta_top_menu_1_margin_right) .'px;
	        }';
	        if($meta_top_menu_1_font){
	        
				$current_style = $meta_top_menu_1_font['variation'];
	
				if ( $current_style === 'regular' ) {
	                $current_style = '400';
	            }
	            if ( $current_style == 'italic' ) {
	                $current_style = '400italic';
	            }
	            
				if($meta_top_menu_1_font['style']){
					$font_style  = 'font-style: '. $meta_top_menu_1_font['style'] .';';
				}else{
					$font_style  = ( strpos( $current_style, 'italic' ) ) ? 'font-style: italic;' : 'font-style: normal;';
				}
				
				if($meta_top_menu_1_font['weight']){
					$font_weight  = 'font-weight: '. $meta_top_menu_1_font['weight'] .';';
				}else{
					$font_weight = 'font-weight: ' . intval( $current_style ) . ';';
				}
				
		        $custom_css .= '
		        .meta-top .top-meta-menu-1 li a{
		            font-family: '. esc_html($meta_top_menu_1_font['family']) .';
		        	'. esc_html($font_style) .'
		        	'. esc_html($font_weight) .'
		            font-size: '. esc_html($meta_top_menu_1_font['size']) .'px;
		            line-height: '. esc_html($meta_top_menu_1_font['line-height']) .'px;
		            letter-spacing: '. esc_html($meta_top_menu_1_font['letter-spacing']) .'px;
		            color: '. esc_html($meta_top_menu_1_color) .';
		        }';
		        $custom_css .= '
		        .meta-top .top-meta-menu-1 li a:hover{
		        	color: '. esc_html($meta_top_menu_1_color_hover) .';
		        }';
	        }
	        $custom_css .= '
	        .meta-top .top-meta-menu-1 li a .material-icons{
	        	color: '. esc_html($meta_top_menu_1_icon_color) .';
	        }';
	        $custom_css .= '
	        .meta-top .top-meta-menu-1 li{
	        	border-right-color: '. esc_html($meta_top_menu_1_sep_line) .';
	        }';
        }
        if ( has_nav_menu( 'top-meta-menu-2' ) ) {
	        $custom_css .= '
	        .meta-top .top-meta-menu-2{
	        	margin-top: '. esc_html($meta_top_menu_2_margin_top) .'px;
	        	margin-left: '. esc_html($meta_top_menu_2_margin_left) .'px;
	        	margin-bottom: '. esc_html($meta_top_menu_2_margin_bottom) .'px;
	        	margin-right: '. esc_html($meta_top_menu_2_margin_right) .'px;
	        }';
	        if($meta_top_menu_2_font){
	        
				$current_style = $meta_top_menu_2_font['variation'];
	
				if ( $current_style === 'regular' ) {
	                $current_style = '400';
	            }
	            if ( $current_style == 'italic' ) {
	                $current_style = '400italic';
	            }
	            
				if($meta_top_menu_2_font['style']){
					$font_style  = 'font-style: '. $meta_top_menu_2_font['style'] .';';
				}else{
					$font_style  = ( strpos( $current_style, 'italic' ) ) ? 'font-style: italic;' : 'font-style: normal;';
				}
				
				if($meta_top_menu_2_font['weight']){
					$font_weight  = 'font-weight: '. $meta_top_menu_2_font['weight'] .';';
				}else{
					$font_weight = 'font-weight: ' . intval( $current_style ) . ';';
				}
				
		        $custom_css .= '
		        .meta-top .top-meta-menu-2 li a{
		            font-family: '. esc_html($meta_top_menu_2_font['family']) .';
		        	'. esc_html($font_style) .'
		        	'. esc_html($font_weight) .'
		            font-size: '. esc_html($meta_top_menu_2_font['size']) .'px;
		            line-height: '. esc_html($meta_top_menu_2_font['line-height']) .'px;
		            letter-spacing: '. esc_html($meta_top_menu_2_font['letter-spacing']) .'px;
		            color: '. esc_html($meta_top_menu_2_color) .';
		        }';
		        $custom_css .= '
		        .meta-top .top-meta-menu-2 li a:hover{
		        	color: '. esc_html($meta_top_menu_2_color_hover) .';
		        }';
	        }
	        $custom_css .= '
	        .meta-top .top-meta-menu-2 li a .material-icons{
	        	color: '. esc_html($meta_top_menu_2_icon_color) .';
	        }';
	        $custom_css .= '
	        .meta-top .top-meta-menu-2 li{
	        	border-right-color: '. esc_html($meta_top_menu_2_sep_line) .';
	        }';
        }
        }
        
        $custom_css = trim(preg_replace('/\s+/', ' ', $custom_css));
        
        wp_add_inline_style( 'naslaan_application', $custom_css );
		
	}
	
	function naslaan_custom_css_general(){
	
	    if (!defined('FW')) return; // prevent fatal error when the framework is not active
			
		// General Settings
		$body_color = fw_get_db_settings_option('body_color');
		$header_wrap_bg = fw_get_db_settings_option('header_wrap_bg');
		
		// Typography
		$body_font = fw_get_db_settings_option('body_font');
		$body_font_color = fw_get_db_settings_option('body_font_color');
		$link_color = fw_get_db_settings_option('link_color');
		$link_hover_color = fw_get_db_settings_option('link_hover_color');
		$headings_font = fw_get_db_settings_option('headings_font');
		$headings_font_color = fw_get_db_settings_option('headings_font_color');
		
		// Inner Buttons
		$btn_text = fw_get_db_settings_option('btn_text');
		$btn_uppercase = fw_get_db_settings_option('btn_uppercase');
		$btn_color = fw_get_db_settings_option('btn_color');
		$btn_color_hover = fw_get_db_settings_option('btn_color_hover');
		$btn_background_color = fw_get_db_settings_option('btn_background_color');
		$btn_background_color_hover = fw_get_db_settings_option('btn_background_color_hover');
		$btn_border_color = fw_get_db_settings_option('btn_border_color');
		$btn_border_color_hover = fw_get_db_settings_option('btn_border_color_hover');
		$alt_btn_color = fw_get_db_settings_option('alt_btn_color');
		$alt_btn_color_hover = fw_get_db_settings_option('alt_btn_color_hover');
		$alt_btn_background_color = fw_get_db_settings_option('alt_btn_background_color');
		$alt_btn_background_color_hover = fw_get_db_settings_option('alt_btn_background_color_hover');
		$alt_btn_border_color = fw_get_db_settings_option('alt_btn_border_color');
		$alt_btn_border_color_hover = fw_get_db_settings_option('alt_btn_border_color_hover');
		$lg_btn_padding_top = fw_get_db_settings_option('lg_btn_padding_top');
		$lg_btn_padding_right = fw_get_db_settings_option('lg_btn_padding_right');
		$lg_btn_padding_bottom = fw_get_db_settings_option('lg_btn_padding_bottom');
		$lg_btn_padding_left = fw_get_db_settings_option('lg_btn_padding_left');
		$lg_btn_font_size = fw_get_db_settings_option('lg_btn_font_size');
		$lg_btn_radius = fw_get_db_settings_option('lg_btn_radius');
		$md_btn_padding_top = fw_get_db_settings_option('md_btn_padding_top');
		$md_btn_padding_right = fw_get_db_settings_option('md_btn_padding_right');
		$md_btn_padding_bottom = fw_get_db_settings_option('md_btn_padding_bottom');
		$md_btn_padding_left = fw_get_db_settings_option('md_btn_padding_left');
		$md_btn_font_size = fw_get_db_settings_option('md_btn_font_size');
		$md_btn_radius = fw_get_db_settings_option('md_btn_radius');
		$sm_btn_padding_top = fw_get_db_settings_option('sm_btn_padding_top');
		$sm_btn_padding_right = fw_get_db_settings_option('sm_btn_padding_right');
		$sm_btn_padding_bottom = fw_get_db_settings_option('sm_btn_padding_bottom');
		$sm_btn_padding_left = fw_get_db_settings_option('sm_btn_padding_left');
		$sm_btn_font_size = fw_get_db_settings_option('sm_btn_font_size');
		$sm_btn_radius = fw_get_db_settings_option('sm_btn_radius');
		
		// Inner Forms
		$form_text_color = fw_get_db_settings_option('form_text_color');
		$form_border_color = fw_get_db_settings_option('form_border_color');
		$form_border_hover_color = fw_get_db_settings_option('form_border_hover_color');
		$form_bg_color = fw_get_db_settings_option('form_bg_color');
		$form_bg_hover_color = fw_get_db_settings_option('form_bg_hover_color');
		$form_padding_top = fw_get_db_settings_option('form_padding_top');
		$form_padding_right = fw_get_db_settings_option('form_padding_right');
		$form_padding_bottom = fw_get_db_settings_option('form_padding_bottom');
		$form_padding_left = fw_get_db_settings_option('form_padding_left');
		$form_label_font = fw_get_db_settings_option('form_label_font');
		$form_label_element_color = fw_get_db_settings_option('form_label_element_color');
		
		// Sidebar
		$widget_link_color = fw_get_db_settings_option('widget_link_color');
		$widget_link_hover_color = fw_get_db_settings_option('widget_link_hover_color');
		$widget_title_font = fw_get_db_settings_option('widget_title_font');
		$widget_variant = fw_get_db_settings_option('widget_style_variant/widget_variant');
		$widget_bullet_color = fw_get_db_settings_option('widget_style_variant/variant-1/bullet_color');
		$widget_list_link_color = fw_get_db_settings_option('widget_list_link_color');
		$widget_list_link_counter_color = fw_get_db_settings_option('widget_list_link_counter_color');
		$widget_list_link_hover_color = fw_get_db_settings_option('widget_list_link_hover_color');
		$widget_list_link_counter_hover_color = fw_get_db_settings_option('widget_list_link_counter_hover_color');
		$search_widget_btn_color = fw_get_db_settings_option('search_widget_btn_color');
		$search_widget_btn_hover_color = fw_get_db_settings_option('search_widget_btn_hover_color');
		$tag_widget_title_font = fw_get_db_settings_option('tag_widget_title_font');
		$tag_widget_color = fw_get_db_settings_option('tag_widget_color');
		$tag_widget_hover_color = fw_get_db_settings_option('tag_text_hover_color');
		$mini_table_primary_color = fw_get_db_settings_option('mini_table_primary_color');
		$mini_table_secondary_color = fw_get_db_settings_option('mini_table_secondary_color');
		$mini_table_border_color = fw_get_db_settings_option('mini_table_border_color');
		$mini_table_font = fw_get_db_settings_option('mini_table_font');
		$mini_table_heading_color = fw_get_db_settings_option('mini_table_heading_color');
		$mini_table_heading_bold = fw_get_db_settings_option('mini_table_heading_bold');
		$mini_table_font_color= fw_get_db_settings_option('mini_table_font_color');
		$mini_table_selected_font = fw_get_db_settings_option('mini_table_selected_font');
		$mini_table_selected_font_color = fw_get_db_settings_option('mini_table_selected_font_color');
		$mini_table_selected_font_bg = fw_get_db_settings_option('mini_table_selected_font_bg');
		$custom_menu_title_font = fw_get_db_settings_option('custom_menu_title_font');
		$custom_menu_color = fw_get_db_settings_option('custom_menu_color');
		$custom_menu_hover_color = fw_get_db_settings_option('custom_menu_hover_color');
		$custom_menu_bg = fw_get_db_settings_option('custom_menu_bg');
		$custom_menu_hover_bg = fw_get_db_settings_option('custom_menu_hover_bg');
		
		// Custom Css/Js
		$custom_css_styles = fw_get_db_settings_option('custom_css');
		
		// Widget Social Media
		$widget_forrst_switch = fw_get_db_settings_option('widget_social_media_forrst/forrst_switch');
		$widget_dribbble_switch = fw_get_db_settings_option('widget_social_media_dribbble/dribbble_switch');
		$widget_twitter_switch = fw_get_db_settings_option('widget_social_media_twitter/twitter_switch');
		$widget_flickr_switch = fw_get_db_settings_option('widget_social_media_flickr/flickr_switch');
		$widget_twitter2_switch = fw_get_db_settings_option('widget_social_media_twitter2/twitter2_switch');
		$widget_facebook_switch = fw_get_db_settings_option('widget_social_media_facebook/facebook_switch');
		$widget_skype_switch = fw_get_db_settings_option('widget_social_media_skype/skype_switch');
		$widget_digg_switch = fw_get_db_settings_option('widget_social_media_digg/digg_switch');
		$widget_google_switch = fw_get_db_settings_option('widget_social_media_google/google_switch');
		$widget_html5_switch = fw_get_db_settings_option('widget_social_media_html5/html5_switch');
		$widget_linkedin_switch = fw_get_db_settings_option('widget_social_media_linkedin/linkedin_switch');
		$widget_lastfm_switch = fw_get_db_settings_option('widget_social_media_lastfm/lastfm_switch');
		$widget_vimeo_switch = fw_get_db_settings_option('widget_social_media_vimeo/vimeo_switch');
		$widget_yahoo_switch = fw_get_db_settings_option('widget_social_media_yahoo/yahoo_switch');
		$widget_tumblr_switch = fw_get_db_settings_option('widget_social_media_tumblr/tumblr_switch');
		$widget_apple_switch = fw_get_db_settings_option('widget_social_media_apple/apple_switch');
		$widget_windows_switch = fw_get_db_settings_option('widget_social_media_windows/windows_switch');
		$widget_youtube_switch = fw_get_db_settings_option('widget_social_media_youtube/youtube_switch');
		$widget_delicious_switch = fw_get_db_settings_option('widget_social_media_delicious/delicious_switch');
		$widget_rss_switch = fw_get_db_settings_option('widget_social_media_rss/rss_switch');
		$widget_picasa_switch = fw_get_db_settings_option('widget_social_media_picasa/picasa_switch');
		$widget_deviantart_switch = fw_get_db_settings_option('widget_social_media_deviantart/deviantart_switch');
		$widget_whatsapp_switch = fw_get_db_settings_option('widget_social_media_whatsapp/whatsapp_switch');
		$widget_snapchat_switch = fw_get_db_settings_option('widget_social_media_snapchat/snapchat_switch');
		$widget_blogger_switch = fw_get_db_settings_option('widget_social_media_blogger/blogger_switch');
		$widget_wordpress_switch = fw_get_db_settings_option('widget_social_media_wordpress/wordpress_switch');
		$widget_amazon_switch = fw_get_db_settings_option('widget_social_media_amazon/amazon_switch');
		$widget_appstore_switch = fw_get_db_settings_option('widget_social_media_appstore/appstore_switch');
		$widget_paypal_switch = fw_get_db_settings_option('widget_social_media_paypal/paypal_switch');
		$widget_myspace_switch = fw_get_db_settings_option('widget_social_media_myspace/myspace_switch');
		$widget_dropbox_switch = fw_get_db_settings_option('widget_social_media_dropbox/dropbox_switch');
		$widget_windows8_switch = fw_get_db_settings_option('widget_social_media_windows8/windows8_switch');
		$widget_pinterest_switch = fw_get_db_settings_option('widget_social_media_pinterest/pinterest_switch');
		$widget_soundcloud_switch = fw_get_db_settings_option('widget_social_media_soundcloud/soundcloud_switch');
		$widget_google_drive_switch = fw_get_db_settings_option('widget_social_media_google_drive/google_drive_switch');
		$widget_android_switch = fw_get_db_settings_option('widget_social_media_android/android_switch');
		$widget_behance_switch = fw_get_db_settings_option('widget_social_media_behance/behance_switch');
		$widget_instagram_switch = fw_get_db_settings_option('widget_social_media_instagram/instagram_switch');
		$widget_ebay_switch = fw_get_db_settings_option('widget_social_media_ebay/ebay_switch');
		$widget_google_plus_switch = fw_get_db_settings_option('widget_social_media_google_plus/google_plus_switch');
		$widget_github_switch = fw_get_db_settings_option('widget_social_media_github/github_switch');
		$widget_stackoverflow_switch = fw_get_db_settings_option('widget_social_media_stackoverflow/stackoverflow_switch');
		$widget_spotify_switch = fw_get_db_settings_option('widget_social_media_spotify/spotify_switch');
		$widget_stumbleupon_switch = fw_get_db_settings_option('widget_social_media_stumbleupon/stumbleupon_switch');
		$widget_visa_switch = fw_get_db_settings_option('widget_social_media_visa/visa_switch');
		$widget_mastercard_switch = fw_get_db_settings_option('widget_social_media_mastercard/mastercard_switch');
		$widget_amex_switch = fw_get_db_settings_option('widget_social_media_amex/amex_switch');
		$widget_ios_switch = fw_get_db_settings_option('widget_social_media_ios/ios_switch');
		$widget_osx_switch = fw_get_db_settings_option('widget_social_media_osx/osx_switch');
		$widget_evernote_switch = fw_get_db_settings_option('widget_social_media_evernote/evernote_switch');
		$widget_yelp_switch = fw_get_db_settings_option('widget_social_media_yelp/yelp_switch');
		$widget_yelp2_switch = fw_get_db_settings_option('widget_social_media_yelp2/yelp2_switch');
		$widget_medium_switch = fw_get_db_settings_option('widget_social_media_medium/medium_switch');
		$widget_slack_switch = fw_get_db_settings_option('widget_social_media_slack/slack_switch');
		$widget_vine_switch = fw_get_db_settings_option('widget_social_media_vine/vine_switch');
		$widget_edge_switch = fw_get_db_settings_option('widget_social_media_edge/edge_switch');
		$widget_outlook_switch = fw_get_db_settings_option('widget_social_media_outlook/outlook_switch');
		$widget_pencilcase_switch = fw_get_db_settings_option('widget_social_media_pencilcase/pencilcase_switch');
		$widget_play_switch = fw_get_db_settings_option('widget_social_media_play/play_switch');
		$widget_icloud_switch = fw_get_db_settings_option('widget_social_media_icloud/icloud_switch');
		$widget_forrst_switch_1 = fw_get_db_settings_option('widget_social_media_forrst_1/forrst_switch_1');
		$widget_dribbble_switch_1 = fw_get_db_settings_option('widget_social_media_dribbble_1/dribbble_switch_1');
		$widget_twitter_switch_1 = fw_get_db_settings_option('widget_social_media_twitter_1/twitter_switch_1');
		$widget_flickr_switch_1 = fw_get_db_settings_option('widget_social_media_flickr_1/flickr_switch_1');
		$widget_twitter2_switch_1 = fw_get_db_settings_option('widget_social_media_twitter2_1/twitter2_switch_1');
		$widget_facebook_switch_1 = fw_get_db_settings_option('widget_social_media_facebook_1/facebook_switch_1');
		$widget_skype_switch_1 = fw_get_db_settings_option('widget_social_media_skype_1/skype_switch_1');
		$widget_digg_switch_1 = fw_get_db_settings_option('widget_social_media_digg_1/digg_switch_1');
		$widget_google_switch_1 = fw_get_db_settings_option('widget_social_media_google_1/google_switch_1');
		$widget_html5_switch_1 = fw_get_db_settings_option('widget_social_media_html5_1/html5_switch_1');
		$widget_linkedin_switch_1 = fw_get_db_settings_option('widget_social_media_linkedin_1/linkedin_switch_1');
		$widget_lastfm_switch_1 = fw_get_db_settings_option('widget_social_media_lastfm_1/lastfm_switch_1');
		$widget_vimeo_switch_1 = fw_get_db_settings_option('widget_social_media_vimeo_1/vimeo_switch_1');
		$widget_yahoo_switch_1 = fw_get_db_settings_option('widget_social_media_yahoo_1/yahoo_switch_1');
		$widget_tumblr_switch_1 = fw_get_db_settings_option('widget_social_media_tumblr_1/tumblr_switch_1');
		$widget_apple_switch_1 = fw_get_db_settings_option('widget_social_media_apple_1/apple_switch_1');
		$widget_windows_switch_1 = fw_get_db_settings_option('widget_social_media_windows_1/windows_switch_1');
		$widget_youtube_switch_1 = fw_get_db_settings_option('widget_social_media_youtube_1/youtube_switch_1');
		$widget_delicious_switch_1 = fw_get_db_settings_option('widget_social_media_delicious_1/delicious_switch_1');
		$widget_rss_switch_1 = fw_get_db_settings_option('widget_social_media_rss_1/rss_switch_1');
		$widget_picasa_switch_1 = fw_get_db_settings_option('widget_social_media_picasa_1/picasa_switch_1');
		$widget_deviantart_switch_1 = fw_get_db_settings_option('widget_social_media_deviantart_1/deviantart_switch_1');
		$widget_whatsapp_switch_1 = fw_get_db_settings_option('widget_social_media_whatsapp_1/whatsapp_switch_1');
		$widget_snapchat_switch_1 = fw_get_db_settings_option('widget_social_media_snapchat_1/snapchat_switch_1');
		$widget_blogger_switch_1 = fw_get_db_settings_option('widget_social_media_blogger_1/blogger_switch_1');
		$widget_wordpress_switch_1 = fw_get_db_settings_option('widget_social_media_wordpress_1/wordpress_switch_1');
		$widget_amazon_switch_1 = fw_get_db_settings_option('widget_social_media_amazon_1/amazon_switch_1');
		$widget_appstore_switch_1 = fw_get_db_settings_option('widget_social_media_appstore_1/appstore_switch_1');
		$widget_paypal_switch_1 = fw_get_db_settings_option('widget_social_media_paypal_1/paypal_switch_1');
		$widget_myspace_switch_1 = fw_get_db_settings_option('widget_social_media_myspace_1/myspace_switch_1');
		$widget_dropbox_switch_1 = fw_get_db_settings_option('widget_social_media_dropbox_1/dropbox_switch_1');
		$widget_windows8_switch_1 = fw_get_db_settings_option('widget_social_media_windows8_1/windows8_switch_1');
		$widget_pinterest_switch_1 = fw_get_db_settings_option('widget_social_media_pinterest_1/pinterest_switch_1');
		$widget_soundcloud_switch_1 = fw_get_db_settings_option('widget_social_media_soundcloud_1/soundcloud_switch_1');
		$widget_google_drive_switch_1 = fw_get_db_settings_option('widget_social_media_google_drive_1/google_drive_switch_1');
		$widget_android_switch_1 = fw_get_db_settings_option('widget_social_media_android_1/android_switch_1');
		$widget_behance_switch_1 = fw_get_db_settings_option('widget_social_media_behance_1/behance_switch_1');
		$widget_instagram_switch_1 = fw_get_db_settings_option('widget_social_media_instagram_1/instagram_switch_1');
		$widget_ebay_switch_1 = fw_get_db_settings_option('widget_social_media_ebay_1/ebay_switch_1');
		$widget_google_plus_switch_1 = fw_get_db_settings_option('widget_social_media_google_plus_1/google_plus_switch_1');
		$widget_github_switch_1 = fw_get_db_settings_option('widget_social_media_github_1/github_switch_1');
		$widget_stackoverflow_switch_1 = fw_get_db_settings_option('widget_social_media_stackoverflow_1/stackoverflow_switch_1');
		$widget_spotify_switch_1 = fw_get_db_settings_option('widget_social_media_spotify_1/spotify_switch_1');
		$widget_stumbleupon_switch_1 = fw_get_db_settings_option('widget_social_media_stumbleupon_1/stumbleupon_switch_1');
		$widget_visa_switch_1 = fw_get_db_settings_option('widget_social_media_visa_1/visa_switch_1');
		$widget_mastercard_switch_1 = fw_get_db_settings_option('widget_social_media_mastercard_1/mastercard_switch_1');
		$widget_amex_switch_1 = fw_get_db_settings_option('widget_social_media_amex_1/amex_switch_1');
		$widget_ios_switch_1 = fw_get_db_settings_option('widget_social_media_ios_1/ios_switch_1');
		$widget_osx_switch_1 = fw_get_db_settings_option('widget_social_media_osx_1/osx_switch_1');
		$widget_evernote_switch_1 = fw_get_db_settings_option('widget_social_media_evernote_1/evernote_switch_1');
		$widget_yelp_switch_1 = fw_get_db_settings_option('widget_social_media_yelp_1/yelp_switch_1');
		$widget_yelp2_switch_1 = fw_get_db_settings_option('widget_social_media_yelp2_1/yelp2_switch_1');
		$widget_medium_switch_1 = fw_get_db_settings_option('widget_social_media_medium_1/medium_switch_1');
		$widget_slack_switch_1 = fw_get_db_settings_option('widget_social_media_slack_1/slack_switch_1');
		$widget_vine_switch_1 = fw_get_db_settings_option('widget_social_media_vine_1/vine_switch_1');
		$widget_edge_switch_1 = fw_get_db_settings_option('widget_social_media_edge_1/edge_switch_1');
		$widget_outlook_switch_1 = fw_get_db_settings_option('widget_social_media_outlook_1/outlook_switch_1');
		$widget_pencilcase_switch_1 = fw_get_db_settings_option('widget_social_media_pencilcase_1/pencilcase_switch_1');
		$widget_play_switch_1 = fw_get_db_settings_option('widget_social_media_play_1/play_switch_1');
		$widget_icloud_switch_1 = fw_get_db_settings_option('widget_social_media_icloud_1/icloud_switch_1');
		$widget_social_media_btn_color = fw_get_db_settings_option('widget_social_media_btn_color');
		$widget_social_media_btn_color = fw_get_db_settings_option('widget_social_media_btn_hover_color');
		$widget_social_media_btn_background = fw_get_db_settings_option('widget_social_media_btn_background');
		$widget_social_media_btn_background_hover = fw_get_db_settings_option('widget_social_media_btn_background_hover');
		$widget_social_media_tooltip_bg = fw_get_db_settings_option('widget_social_media_tooltip_bg');
		
		// Search Page
	    $search_page_form_btn_text = fw_get_db_settings_option('search_page_form_btn_text');
	    $search_page_form_btn_color = fw_get_db_settings_option('search_page_form_btn_color');
	    $search_page_form_btn_color_hover = fw_get_db_settings_option('search_page_form_btn_color_hover');
	    $search_page_form_btn_background_color = fw_get_db_settings_option('search_page_form_btn_background_color');
	    $search_page_form_btn_background_color_hover = fw_get_db_settings_option('search_page_form_btn_background_color_hover');
		$search_page_thumb_overlay_color = fw_get_db_settings_option('search_page_thumb_overlay_color');
		$search_page_thumb_btn_color = fw_get_db_settings_option('search_page_thumb_btn_color');
		$search_page_thumb_btn_hover_color = fw_get_db_settings_option('search_page_thumb_btn_hover_color');
		$search_page_title = fw_get_db_settings_option('search_page_title');
		$search_page_title_color = fw_get_db_settings_option('search_page_title_color');
		$search_page_title_hover_color = fw_get_db_settings_option('search_page_title_hover_color');
		$search_page_img_replacement = fw_get_db_settings_option('search_page_img_replacement');
		
		// Pageloader
	    $pageloader_visibility = fw_get_db_settings_option('pageloader_switch/pageloader_visibility');
	    $pageloader_bg = fw_get_db_settings_option('pageloader_switch/enabled/pageloader_bg');
	    $pageloader_spinner = fw_get_db_settings_option('pageloader_switch/enabled/pageloader_spinner');
		
		// Back To Top Scroll
	    $back_to_top_visibility = fw_get_db_settings_option('back_to_top_switch/back_to_top_visibility');
	    $back_to_top_bg_color = fw_get_db_settings_option('back_to_top_switch/enabled/back_to_top_bg_color');
	    $back_to_top_bg_hover_color = fw_get_db_settings_option('back_to_top_switch/enabled/back_to_top_bg_hover_color');
	    $back_to_top_color = fw_get_db_settings_option('back_to_top_switch/enabled/back_to_top_color');
	    $back_to_top_hover_color = fw_get_db_settings_option('back_to_top_switch/enabled/back_to_top_hover_color');
	    $back_to_top_bg_size = fw_get_db_settings_option('back_to_top_switch/enabled/back_to_top_bg_size');
		$back_to_top_bg_icon_size = fw_get_db_settings_option('back_to_top_switch/enabled/back_to_top_bg_icon_size');
		$back_to_top_bg_border_radius = fw_get_db_settings_option('back_to_top_switch/enabled/back_to_top_bg_border_radius');
		$back_to_top_margin_top = fw_get_db_settings_option('back_to_top_switch/enabled/back_to_top_margin_top');
		$back_to_top_margin_right = fw_get_db_settings_option('back_to_top_switch/enabled/back_to_top_margin_right');
		$back_to_top_margin_bottom = fw_get_db_settings_option('back_to_top_switch/enabled/back_to_top_margin_bottom');
		$back_to_top_margin_left = fw_get_db_settings_option('back_to_top_switch/enabled/back_to_top_margin_left');

        $custom_css = '';
        //-----------------

        // Pageloader
        if($pageloader_visibility=='enabled'){
        $custom_css .= '
        .lpd-loading-screen{background-color: '. esc_html($pageloader_bg) .';}';
        
        $custom_css .= '
        .sk-double-bounce .sk-child{background-color: '. esc_html($pageloader_spinner) .';}';
        }
        

        // General Options
        $custom_css .= '
        #main,body{background-color: '. esc_html($body_color) .';}';
        
        // Typography
        if($body_font){
        
			$current_style = $body_font['variation'];

			if ( $current_style === 'regular' ) {
                $current_style = '400';
            }
            if ( $current_style == 'italic' ) {
                $current_style = '400italic';
            }
            
			if($body_font['style']){
				$font_style  = 'font-style: '. $body_font['style'] .';';
			}else{
				$font_style  = ( strpos( $current_style, 'italic' ) ) ? 'font-style: italic;' : 'font-style: normal;';
			}
			
			if($body_font['weight']){
				$font_weight  = 'font-weight: '. $body_font['weight'] .';';
			}else{
				$font_weight = 'font-weight: ' . intval( $current_style ) . ';';
			}
			
	        $custom_css .= '
	        body{
	            font-family: '. esc_html($body_font['family']) .';
	        	'. esc_html($font_style) .'
	        	'. esc_html($font_weight) .'
	            font-size: '. esc_html($body_font['size']) .'px;
	            line-height: '. esc_html($body_font['line-height']) .';
	            letter-spacing: '. esc_html($body_font['letter-spacing']) .'px;
	            color: '. esc_html($body_font_color) .';
	        }';
        }
        $custom_css .= 'a{color: '. esc_html($link_color) .';}';
        $custom_css .= 'a:hover{color: '. esc_html($link_hover_color) .';}';
        if($headings_font){
        
			$current_style = $headings_font['variation'];

			if ( $current_style === 'regular' ) {
                $current_style = '400';
            }
            if ( $current_style == 'italic' ) {
                $current_style = '400italic';
            }
            
			if($headings_font['style']){
				$font_style  = 'font-style: '. $headings_font['style'] .';';
			}else{
				$font_style  = ( strpos( $current_style, 'italic' ) ) ? 'font-style: italic;' : 'font-style: normal;';
			}
			
			if($headings_font['weight']){
				$font_weight  = 'font-weight: '. $headings_font['weight'] .';';
			}else{
				$font_weight = 'font-weight: ' . intval( $current_style ) . ';';
			}
			
	        $custom_css .= '
	        h1,h2,h3,h4,h5,h6{
	            font-family: '. esc_html($headings_font['family']) .';
	        	'. esc_html($font_style) .'
	        	'. esc_html($font_weight) .'
	            line-height: '. esc_html($headings_font['line-height']) .';
	            letter-spacing: '. esc_html($headings_font['letter-spacing']) .'px;
	            color: '. esc_html($headings_font_color) .';
	        }';
        }
        
        // Inner Buttons
        if($btn_text){
        
			$current_style = $btn_text['variation'];

			if ( $current_style === 'regular' ) {
                $current_style = '400';
            }
            if ( $current_style == 'italic' ) {
                $current_style = '400italic';
            }
            
			if($btn_text['style']){
				$font_style  = 'font-style: '. $btn_text['style'] .';';
			}else{
				$font_style  = ( strpos( $current_style, 'italic' ) ) ? 'font-style: italic;' : 'font-style: normal;';
			}
			
			if($btn_text['weight']){
				$font_weight  = 'font-weight: '. $btn_text['weight'] .';';
			}else{
				$font_weight = 'font-weight: ' . intval( $current_style ) . ';';
			}
			
	        $custom_css .= '
	        input[type="submit"],
	        .lpd_t_btn{
	            font-family: '. esc_html($btn_text['family']) .';
	        	'. esc_html($font_style) .'
	        	'. esc_html($font_weight) .'
	            letter-spacing: '. esc_html($btn_text['letter-spacing']) .'px;
	            color: '. esc_html($btn_color) .';
	            background-color: '. esc_html($btn_background_color) .';
	            border-color: '. esc_html($btn_border_color) .';
	            padding-top: '. esc_html($lg_btn_padding_top) .'px;
	            padding-right: '. esc_html($lg_btn_padding_right) .'px;
	            padding-bottom: '. esc_html($lg_btn_padding_bottom) .'px;
	            padding-left: '. esc_html($lg_btn_padding_left) .'px;
	            font-size: '. esc_html($lg_btn_font_size) .'px;
				-webkit-border-radius: '. esc_html($lg_btn_radius) .'px;
				-moz-border-radius: '. esc_html($lg_btn_radius) .'px;
				border-radius: '. esc_html($lg_btn_radius) .'px;
	        }';
	        
	        $custom_css .= '
	        .lpd_alt_t_btn{
	            color: '. esc_html($alt_btn_color) .' !important;
	            background-color: '. esc_html($alt_btn_background_color) .' !important;
	            border-color: '. esc_html($alt_btn_border_color) .' !important;
	        }';
	        
	        if($btn_uppercase=='enabled'){
		        $custom_css .= '
		        input[type="submit"],
		        .lpd_t_btn{
		            text-transform: uppercase;
		        }'; 
	        }
	        
	        $custom_css .= '
	        input[type="submit"]:hover,
	        .lpd_t_btn:hover{
	            color: '. esc_html($btn_color_hover) .';
	            background-color: '. esc_html($btn_background_color_hover) .';
	            border-color: '. esc_html($btn_border_color_hover) .';
	        }';
	        
	        $custom_css .= '
	        .lpd_alt_t_btn:hover{
	            color: '. esc_html($alt_btn_color_hover) .' !important;
	            background-color: '. esc_html($alt_btn_background_color_hover) .' !important;
	            border-color: '. esc_html($alt_btn_border_color_hover) .' !important;
	        }';
	        
	        $custom_css .= '
	        .lpd_t_btn-md{
	            padding-top: '. esc_html($md_btn_padding_top) .'px;
	            padding-right: '. esc_html($md_btn_padding_right) .'px;
	            padding-bottom: '. esc_html($md_btn_padding_bottom) .'px;
	            padding-left: '. esc_html($md_btn_padding_left) .'px;
	            font-size: '. esc_html($md_btn_font_size) .'px;
				-webkit-border-radius: '. esc_html($md_btn_radius) .'px;
				-moz-border-radius: '. esc_html($md_btn_radius) .'px;
				border-radius: '. esc_html($md_btn_radius) .'px;
	        }';
	        
	        $custom_css .= '
	        .lpd_t_btn-sm{
	            padding-top: '. esc_html($sm_btn_padding_top) .'px;
	            padding-right: '. esc_html($sm_btn_padding_right) .'px;
	            padding-bottom: '. esc_html($sm_btn_padding_bottom) .'px;
	            padding-left: '. esc_html($sm_btn_padding_left) .'px;
	            font-size: '. esc_html($sm_btn_font_size) .'px;
				-webkit-border-radius: '. esc_html($sm_btn_radius) .'px;
				-moz-border-radius: '. esc_html($sm_btn_radius) .'px;
				border-radius: '. esc_html($sm_btn_radius) .'px;
	        }
	        .lpd_t_btn-animated:after{
	        	background-color: '. esc_html($btn_background_color_hover) .';
	        }
	        .lpd_t_btn-animated:hover{
				 background-color: '. esc_html($btn_background_color) .';
			}
	        .lpd_alt_t_btn.lpd_t_btn-animated:after{
	        	background-color: '. esc_html($alt_btn_background_color_hover) .';
	        }
	        .lpd_alt_t_btn.lpd_t_btn-animated:hover{
				 background-color: '. esc_html($alt_btn_background_color) .' !important;
			}
	        ';
			
        }
        
        // VC Inner Buttons
        if( naslaan_helpers::naslaan_vc_check() ) {
	        if($btn_text){
	        
				$current_style = $btn_text['variation'];
	
				if ( $current_style === 'regular' ) {
	                $current_style = '400';
	            }
	            if ( $current_style == 'italic' ) {
	                $current_style = '400italic';
	            }
	            
				if($btn_text['style']){
					$font_style  = 'font-style: '. $btn_text['style'] .'';
				}else{
					$font_style  = ( strpos( $current_style, 'italic' ) ) ? 'font-style: italic' : 'font-style: normal';
				}
				
				if($btn_text['weight']){
					$font_weight  = 'font-weight: '. $btn_text['weight'] .'';
				}else{
					$font_weight = 'font-weight: ' . intval( $current_style ) . '';
				}
				
		        $custom_css .= '
		        .lpd_vc_btn a,
		        .lpd_vc_btn button{
		            font-family: '. esc_html($btn_text['family']) .' !important;
		        	'. esc_html($font_style) .' !important;
		        	'. esc_html($font_weight) .' !important;
		            letter-spacing: '. esc_html($btn_text['letter-spacing']) .'px !important;
		            color: '. esc_html($btn_color) .' !important;
		            background-color: '. esc_html($btn_background_color) .' !important;
		            border-color: '. esc_html($btn_border_color) .' !important;
		            padding-top: '. esc_html($lg_btn_padding_top) .'px !important;
		            padding-right: '. esc_html($lg_btn_padding_right) .'px !important;
		            padding-bottom: '. esc_html($lg_btn_padding_bottom) .'px !important;
		            padding-left: '. esc_html($lg_btn_padding_left) .'px !important;
		            font-size: '. esc_html($lg_btn_font_size) .'px !important;
					-webkit-border-radius: '. esc_html($lg_btn_radius) .'px !important;
					-moz-border-radius: '. esc_html($lg_btn_radius) .'px !important;
					border-radius: '. esc_html($lg_btn_radius) .'px !important;
		        }';
		        
		        $custom_css .= '
		        .lpd_alt_vc_btn a,
		        .lpd_alt_vc_btn button{
		            color: '. esc_html($alt_btn_color) .' !important;
		            background-color: '. esc_html($alt_btn_background_color) .' !important;
		            border-color: '. esc_html($alt_btn_border_color) .' !important;
		        }';
		        
		        if($btn_uppercase=='enabled'){
			        $custom_css .= '
			        .lpd_vc_btn a,
			        .lpd_vc_btn button{
			            text-transform: uppercase !important;
			        }'; 
		        }
		        
		        $custom_css .= '
		        .lpd_vc_btn a:hover,
		        .lpd_vc_btn button:hover{
		            color: '. esc_html($btn_color_hover) .' !important;
		            background-color: '. esc_html($btn_background_color_hover) .' !important;
		            border-color: '. esc_html($btn_border_color_hover) .' !important;
		        }';
		        
		        $custom_css .= '
		        .lpd_alt_vc_btn a:hover,
		        .lpd_alt_vc_btn button:hover{
		            color: '. esc_html($alt_btn_color_hover) .' !important;
		            background-color: '. esc_html($alt_btn_background_color_hover) .' !important;
		            border-color: '. esc_html($alt_btn_border_color_hover) .' !important;
		        }';
		        
		        $custom_css .= '
		        .lpd_vc_btn-md a,
		        .lpd_vc_btn-md button{
		            padding-top: '. esc_html($md_btn_padding_top) .'px !important;
		            padding-right: '. esc_html($md_btn_padding_right) .'px !important;
		            padding-bottom: '. esc_html($md_btn_padding_bottom) .'px !important;
		            padding-left: '. esc_html($md_btn_padding_left) .'px !important;
		            font-size: '. esc_html($md_btn_font_size) .'px !important;
					-webkit-border-radius: '. esc_html($md_btn_radius) .'px !important;
					-moz-border-radius: '. esc_html($md_btn_radius) .'px !important;
					border-radius: '. esc_html($md_btn_radius) .'px !important;
		        }';
		        
		        $custom_css .= '
		        .lpd_vc_btn-sm a,
		        .lpd_vc_btn-sm button{
		            padding-top: '. esc_html($sm_btn_padding_top) .'px !important;
		            padding-right: '. esc_html($sm_btn_padding_right) .'px !important;
		            padding-bottom: '. esc_html($sm_btn_padding_bottom) .'px !important;
		            padding-left: '. esc_html($sm_btn_padding_left) .'px !important;
		            font-size: '. esc_html($sm_btn_font_size) .'px !important;
					-webkit-border-radius: '. esc_html($sm_btn_radius) .'px !important;
					-moz-border-radius: '. esc_html($sm_btn_radius) .'px !important;
					border-radius: '. esc_html($sm_btn_radius) .'px !important;
		        }';
		        
		        $custom_css .= '
		        .lpd_vc_btn-animated a,
		        .lpd_vc_btn-animated button{
					-webkit-box-shadow: 0 0 0 1px '. esc_html($btn_border_color) .' inset !important;
					-moz-box-shadow: 0 0 0 1px '. esc_html($btn_border_color) .' inset !important;
				    box-shadow: 0 0 0 1px '. esc_html($btn_border_color) .' inset !important;
		        }';
		     
		        $custom_css .= '
		        .lpd_vc_btn-animated a:hover:before,
		        .lpd_vc_btn-animated button:hover:before {
				    border-right-color: '. esc_html($btn_border_color_hover) .' !important;
				    border-top-color: '. esc_html($btn_border_color_hover) .' !important;
				}
				.lpd_vc_btn-animated a:hover:after,
				.lpd_vc_btn-animated button:hover:after {
				    border-bottom-color: '. esc_html($btn_border_color_hover) .' !important;
				    border-left-color: '. esc_html($btn_border_color_hover) .' !important;
				}';
				
		        $custom_css .= '
		        .lpd_alt_vc_btn.lpd_vc_btn-animated a,
		        .lpd_alt_vc_btn.lpd_vc_btn-animated button{
					-webkit-box-shadow: 0 0 0 1px '. esc_html($alt_btn_border_color) .' inset !important;
					-moz-box-shadow: 0 0 0 1px '. esc_html($alt_btn_border_color) .' inset !important;
				    box-shadow: 0 0 0 1px '. esc_html($alt_btn_border_color) .' inset !important;
		        }';
		     
		        $custom_css .= '
		        .lpd_alt_vc_btn.lpd_vc_btn-animated a:hover:before,
		        .lpd_alt_vc_btn.lpd_vc_btn-animated button:hover:before {
				    border-right-color: '. esc_html($alt_btn_border_color_hover) .' !important;
				    border-top-color: '. esc_html($alt_btn_border_color_hover) .' !important;
				}
				.lpd_alt_vc_btn.lpd_vc_btn-animated a:hover:after,
				.lpd_alt_vc_btn.lpd_vc_btn-animated button:hover:after {
				    border-bottom-color: '. esc_html($alt_btn_border_color_hover) .' !important;
				    border-left-color: '. esc_html($alt_btn_border_color_hover) .' !important;
				}';
				
	        } 
        }
        
		// Inner Forms
		$form_text_color = fw_get_db_settings_option('form_text_color');
		$form_border_color = fw_get_db_settings_option('form_border_color');
		$form_border_hover_color = fw_get_db_settings_option('form_border_hover_color');
		$form_bg_color = fw_get_db_settings_option('form_bg_color');
		$form_bg_hover_color = fw_get_db_settings_option('form_bg_hover_color');
		$form_padding_top = fw_get_db_settings_option('form_padding_top');
		$form_padding_right = fw_get_db_settings_option('form_padding_right');
		$form_padding_bottom = fw_get_db_settings_option('form_padding_bottom');
		$form_padding_left = fw_get_db_settings_option('form_padding_left');
		$form_label_font = fw_get_db_settings_option('form_label_font');
		$form_label_element_color = fw_get_db_settings_option('form_label_element_color');
		
        $custom_css .= '
		select,
		textarea,
		input[type="email"],
		input[type="date"],
		input[type="number"],
		input[type="tel"],
		input[type="url"],
		input[type="password"],
		input[type="text"],
		.theme-form{
        	color: '. esc_html($form_text_color) .';
        	padding-top: '. esc_html($form_padding_top) .'px;
			padding-right: '. esc_html($form_padding_right) .'px;
			padding-bottom: '. esc_html($form_padding_bottom) .'px;
			padding-left: '. esc_html($form_padding_left) .'px;
			border-color: '. esc_html($form_border_color) .';
			background-color: '. esc_html($form_bg_color) .';
        }';
        
        $custom_css .= '
		select:focus,
		textarea:focus,
		input[type="email"]:focus,
		input[type="date"]:focus,
		input[type="number"]:focus,
		input[type="tel"]:focus,
		input[type="url"]:focus,
		input[type="password"]:focus,
		input[type="text"]:focus,
		.theme-form:focus{
			border-color: '. esc_html($form_border_hover_color ) .';
			background-color: '. esc_html($form_bg_hover_color) .';
        }';
        
        if($form_label_font){
        
			$current_style = $form_label_font['variation'];

			if ( $current_style === 'regular' ) { $current_style = '400'; }
			
            if ( $current_style == 'italic' ) { $current_style = '400italic'; }
            
			if($form_label_font['style']){
				$font_style  = 'font-style: '. $form_label_font['style'] .';';
			}else{
				$font_style  = ( strpos( $current_style, 'italic' ) ) ? 'font-style: italic;' : 'font-style: normal;';
			}
			
			if($form_label_font['weight']){
				$font_weight  = 'font-weight: '. $form_label_font['weight'] .';';
			}else{
				$font_weight = 'font-weight: ' . intval( $current_style ) . ';';
			}
			
	        $custom_css .= '
	        label{
	            font-family: '. esc_html($form_label_font['family']) .';
	        	'. esc_html($font_style) .'
	        	'. esc_html($font_weight) .'
	            font-size: '. esc_html($form_label_font['size']) .'px;
	            letter-spacing: '. esc_html($form_label_font['letter-spacing']) .'px;
	        }';
        }
        
        // Sidebar
        $custom_css .= '
        .widget ul > li > a.rsswidget,
        .sidebar a{
        	color: '. esc_html($widget_link_color) .';
        }';
        
        $custom_css .= '
        .widget ul > li > a.rsswidget:hover,
        .sidebar a:hover{
        	color: '. esc_html($widget_link_hover_color) .';
        }';
        
        if($widget_title_font){
        
			$current_style = $widget_title_font['variation'];

			if ( $current_style === 'regular' ) {
                $current_style = '400';
            }
            if ( $current_style == 'italic' ) {
                $current_style = '400italic';
            }
            
			if($widget_title_font['style']){
				$font_style  = 'font-style: '. $widget_title_font['style'] .';';
			}else{
				$font_style  = ( strpos( $current_style, 'italic' ) ) ? 'font-style: italic;' : 'font-style: normal;';
			}
			
			if($widget_title_font['weight']){
				$font_weight  = 'font-weight: '. $widget_title_font['weight'] .';';
			}else{
				$font_weight = 'font-weight: ' . intval( $current_style ) . ';';
			}
			
	        $custom_css .= '
	        .box_header,
	        .widget-title{
	            font-family: '. esc_html($widget_title_font['family']) .';
	        	'. esc_html($font_style) .'
	        	'. esc_html($font_weight) .'
	            font-size: '. esc_html($widget_title_font['size']) .'px;
	            letter-spacing: '. esc_html($widget_title_font['letter-spacing']) .'px;
	            color: '. esc_html($widget_title_font['color']) .';
	        }';
        }
        
        $custom_css .= '
        .tagcloud a,
        .widget ul > li > a{
        	color: '. esc_html($widget_list_link_color) .';
        }';
        $custom_css .= '
        .tagcloud a:hover,
        .widget ul > li > a:hover{
        	color: '. esc_html($widget_list_link_hover_color) .';
        }';
        $custom_css .= '
        .widget_product_categories ul ul li .material-icons{
        	color: '. esc_html($widget_list_link_hover_color) .';
        }';
        $custom_css .= '
        .widget ul > li > a:after{
        	border-bottom-color: '. esc_html($widget_list_link_hover_color) .';
        }';
        
        if($tag_widget_title_font){
        
			$current_style = $tag_widget_title_font['variation'];

			if ( $current_style === 'regular' ) {
                $current_style = '400';
            }
            if ( $current_style == 'italic' ) {
                $current_style = '400italic';
            }
            
			if($tag_widget_title_font['style']){
				$font_style  = 'font-style: '. $tag_widget_title_font['style'] .';';
			}else{
				$font_style  = ( strpos( $current_style, 'italic' ) ) ? 'font-style: italic;' : 'font-style: normal;';
			}
			
			if($tag_widget_title_font['weight']){
				$font_weight  = 'font-weight: '. $tag_widget_title_font['weight'] .';';
			}else{
				$font_weight = 'font-weight: ' . intval( $current_style ) . ';';
			}
			
	        $custom_css .= '
	        .tagcloud a{
	            font-family: '. esc_html($tag_widget_title_font['family']) .';
	        	'. esc_html($font_style) .'
	        	'. esc_html($font_weight) .'
	            font-size: '. esc_html($tag_widget_title_font['size']) .'px !important;
	            letter-spacing: '. esc_html($tag_widget_title_font['letter-spacing']) .'px;
	            color: '. esc_html($tag_widget_color) .' !important;
	        }';
	        $custom_css .= '
	        .tagcloud a:hover{
	            color: '. esc_html($tag_widget_hover_color) .' !important;
	        }';
        }
        
		// Search Page
	
        $custom_css .= '
        .search-post-container .featured-image:before{
        	background-color: '. esc_html($search_page_thumb_overlay_color) .';
        }';
        $custom_css .= '
        .search-post-container .featured-image .hover-effect-btn{
        	background-color: '. esc_html($search_page_thumb_btn_color) .';
        }';
        $custom_css .= '
        .search-post-container .featured-image .hover-effect-btn:hover {
        	background-color: '. esc_html($search_page_thumb_btn_hover_color) .';
        }';
        if($search_page_title){
        
			$current_style = $search_page_title['variation'];

			if ( $current_style === 'regular' ) {
                $current_style = '400';
            }
            if ( $current_style == 'italic' ) {
                $current_style = '400italic';
            }
            
			if($search_page_title['style']){
				$font_style  = 'font-style: '. $search_page_title['style'] .';';
			}else{
				$font_style  = ( strpos( $current_style, 'italic' ) ) ? 'font-style: italic;' : 'font-style: normal;';
			}
			
			if($search_page_title['weight']){
				$font_weight  = 'font-weight: '. $search_page_title['weight'] .';';
			}else{
				$font_weight = 'font-weight: ' . intval( $current_style ) . ';';
			}
			
	        $custom_css .= '
	        .inner-search-page .search-post-container-content h4 a{
	            font-family: '. esc_html($search_page_title['family']) .';
	        	'. esc_html($font_style) .'
	        	'. esc_html($font_weight) .'
	            font-size: '. esc_html($search_page_title['size']) .'px;
	            letter-spacing: '. esc_html($search_page_title['letter-spacing']) .'px;
	            color: '. esc_html($search_page_title_color) .';
	        }';
        }
        $custom_css .= '
        .inner-search-page .search-post-container-content h4 a:hover{
        	color: '. esc_html($search_page_title_hover_color) .';
        }';
        
        $custom_css .= $custom_css_styles;
        
		// Back To Top
        if($back_to_top_visibility=='enabled'){
	        $custom_css .= '
	        #back-to-top{
	        	color: '. esc_html($back_to_top_color) .';
	        	background-color: '. esc_html($back_to_top_bg_color) .';
	        	height: '. esc_html($back_to_top_bg_size) .'px;
	        	width: '. esc_html($back_to_top_bg_size) .'px;
	        	line-height: '. esc_html($back_to_top_bg_size) .'px;
	        	-webkit-border-radius: '. esc_html($back_to_top_bg_border_radius) .'px;
	        	-moz-border-radius: '. esc_html($back_to_top_bg_border_radius) .'px;
	        	border-radius: '. esc_html($back_to_top_bg_border_radius) .'px;
	        	margin-top: '. esc_html($back_to_top_margin_top) .'px;
	        	margin-right: '. esc_html($back_to_top_margin_right) .'px;
	        	margin-bottom: '. esc_html($back_to_top_margin_bottom) .'px;
	        	margin-left: '. esc_html($back_to_top_margin_left) .'px;
	        }';
	        $custom_css .= '
	        #back-to-top:hover{
	        	color: '. esc_html($back_to_top_hover_color) .';
	        	background-color: '. esc_html($back_to_top_bg_hover_color) .';
	        }';
	        $custom_css .= '
	        #back-to-top .icon{
	        	font-size: '. esc_html($back_to_top_bg_icon_size) .'px;
	        }';
        }
        
        $custom_css = trim(preg_replace('/\s+/', ' ', $custom_css));
       
        wp_add_inline_style( 'naslaan_application', $custom_css );
		
	}
	
	
}

?>
