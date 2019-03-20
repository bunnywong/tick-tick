<?php	

class naslaan_front_functions {

		function __construct() {
		
		
			add_action('wp_head', array( $this, 'naslaan_load_google_fonts'));
			add_filter('fw_ext_breadcrumbs_build', array( $this, 'naslaan_breadcrumbs_items') );
			
			add_filter('body_class', array( $this, 'naslaan_body_classes'));
			
			add_filter('wp_list_categories', array( $this, 'naslaan_cat_count'));
			
			if( naslaan_helpers::naslaan_unyson_check()) {
				add_action('init', array( $this, 'naslaan_add_excerpt_fw_portfolio'));
			}
			
			if( naslaan_helpers::naslaan_woocommerce_check()) {
				add_filter('woocommerce_add_to_cart_fragments', array( $this, 'naslaan_shopping_cart_dropdown_fragments'));
				add_filter('woocommerce_add_to_cart_fragments', array( $this, 'naslaan_shopping_cart_count_fragments'));
			}

			add_filter( 'excerpt_length',array($this,'naslaan_excerpt_length'));
			
			add_filter('user_contactmethods', array( $this, 'naslaan_add_extra_profile_social'), 10, 1 );
			
			add_filter( 'get_search_form', array( $this, 'naslaan_widget_search_form'), 100 );

			add_filter( 'widget_text', 'do_shortcode');
			
			add_filter( 'comment_form_fields', array( $this, 'naslaan_move_comment_field_to_bottom'));
		
		}
		
		function naslaan_move_comment_field_to_bottom( $fields ) {
			$comment_field = $fields['comment'];
			unset( $fields['comment'] );
			$fields['comment'] = $comment_field;
			return $fields;
		}
		
		public static function naslaan_add_extra_profile_social() {
		
		    $contactmethods['twitter'] = 'Twitter';
		    $contactmethods['facebook'] = 'Facebook';
		    $contactmethods['instagram'] = 'Instagram';
		    $contactmethods['pintrest'] = 'Pintrest';
		    $contactmethods['linkedin'] = 'LinkedIn';
		
		    return $contactmethods;
		}
		
		public static function naslaan_footer_cta() {
		
		$cta_background_image = '//localhost:8888/naslaan-1109/wp-content/uploads/2017/09/contact_main-1.jpg';
		$cta_background_type = 'background_image';
		$cta_background_settings ='parallax_center';
		
			$f = $title_layouts = $title_class = $header_share_visibility = $header_title_visibility = $header_breadcrumb_visibility = $share_btn_email = $header_background_type = $header_background_settings = $header_background_image = $header_background_image_color = $header_background_color = '';
		
			if( naslaan_helpers::naslaan_unyson_check() ) {
				$cta_visibility = fw_get_db_settings_option('call_to_action_options/footer_switch');
				$cta_background_type = fw_get_db_settings_option('call_to_action_options/enabled/cta_background_choice/cta_background_type');
				$cta_background_color = fw_get_db_settings_option('call_to_action_options/enabled/cta_background_choice/cta_background_color/header_background_color');
				$cta_background_image_color = fw_get_db_settings_option('call_to_action_options/enabled/cta_background_choice/cta_background_image/cta_background_color');
				$cta_background_settings = fw_get_db_settings_option('call_to_action_options/enabled/cta_background_choice/cta_background_image/cta_background_settings');
				$cta_background_image = fw_get_db_settings_option('call_to_action_options/enabled/cta_background_choice/cta_background_image/cta_background_image/url');
				$cta_animated_gradient_visibility = fw_get_db_settings_option('call_to_action_options/enabled/cta_background_choice/cta_background_image/cta_animated_gradient/cta_animated_gradient_switch');
				$cta_animated_gradient_color_1 = fw_get_db_settings_option('call_to_action_options/enabled/cta_background_choice/cta_background_image/cta_animated_gradient/enabled/cta_animated_gradient_color_1');
				$cta_animated_gradient_color_2 = fw_get_db_settings_option('call_to_action_options/enabled/cta_background_choice/cta_background_image/cta_animated_gradient/enabled/cta_animated_gradient_color_2');
				$cta_animated_gradient_opacity = fw_get_db_settings_option('call_to_action_options/enabled/cta_background_choice/cta_background_image/cta_animated_gradient/enabled/cta_animated_gradient_opacity');
				$cta_title_text = fw_get_db_settings_option('call_to_action_options/enabled/cta_title_text');
				$cta_btn_text = fw_get_db_settings_option('call_to_action_options/enabled/cta_btn_text');
				$cta_btn_link = fw_get_db_settings_option('call_to_action_options/enabled/cta_btn_link');
				$cta_btn_link_target = fw_get_db_settings_option('call_to_action_options/enabled/cta_btn_link_target');
			}
		
			if($cta_visibility=='enabled'){
			$f .= '<div class="call-to-action">';
				if($cta_background_type=='cta_background_image'){
					if($cta_background_settings=='repeat_center'){
						$f .= '<div class="cta_bg cta-image-bg" style="background-image: url('.esc_url($cta_background_image).');background-color:'.esc_attr($cta_background_image_color).';"></div>';
					}elseif($cta_background_settings=='repeat_top'){
						$f .= '<div class="cta_bg cta-image-bg-top" style="background-image: url('.esc_url($cta_background_image).');background-color:'.esc_attr($cta_background_image_color).';"></div>';
					}elseif($cta_background_settings=='cover_center'){
						$f .= '<div class="cta_bg cta-image-bg-cover" style="background-image: url('. esc_url($cta_background_image).');background-color:'.esc_attr($cta_background_image_color).';"></div>';
					}elseif($cta_background_settings=='cover_top'){
						$f .= '<div class="cta_bg cta-image-bg-cover-top" style="background-image: url('. esc_url($cta_background_image).');background-color:'.esc_attr($cta_background_image_color).';"></div>';
					}elseif($cta_background_settings=='parallax_center'){
						$f .= '<div class="cta_bg parallax-bg" data-parallax-image-bg="'.esc_url($cta_background_image).'" style="background-color:'.esc_attr($cta_background_image_color).';" data-vc-parallax="1.5"></div>';
					}elseif($cta_background_settings=='parallax_top'){
						$f .= '<div class="cta_bg parallax-bg parallax-bg-top" data-parallax-image-bg="'.esc_url($cta_background_image).'" style="background-color:'.esc_attr($cta_background_image_color).';" data-vc-parallax="1.5"></div>';
					}else{
						$f .= '<div class="cta_bg"></div>';
					}
				}
				else{
					$f .= '<div class="cta_bg"';
					
					if($cta_background_color!="") { $f .= 'style="background-color:'.esc_attr($cta_background_color).';"'; }
					
					$f .= '></div>';
				}
				
				if($cta_animated_gradient_visibility=='enabled'){
				$f .= '<div id="footer-call-to-action-gradient" data-color-1="'.esc_attr($cta_animated_gradient_color_1).'" data-color-2="'.esc_attr($cta_animated_gradient_color_2).'"></div>';
				}
				
				if($cta_btn_text!=''){
					$cta_title_col = 'col-md-8';
				}else{
					$cta_title_col = 'col-md-12';
				}
				
				$f .= '<div class="container">';
					$f .= '<div class="row">';
					$f .= '<div class="'.esc_attr($cta_title_col).'">';
					if($cta_title_text!=''){$f .= '<h4>'.wp_kses_post($cta_title_text).'</h4>';}
					$f .= '</div>';
					if($cta_btn_text!=''){
					$f .= '<div class="col-md-4">';
						
						$f .= '<a class="lpd_t_btn lpd_alt_t_btn lpd_t_btn-animated" ';
						if($cta_btn_link_target=='enabled'){
						$f .= 'target="_blank" ';
						}
						$f .= 'href="'.esc_url($cta_btn_link).'">'.wp_kses_post($cta_btn_text).'</a>';
						
					$f .= '</div>';
					}
					$f .= '</div>';
				$f .= '</div>';
			$f .= '</div>';
			}
			echo $f;
			
		}
		
		public static function naslaan_header_title() {
		
			$title_variant = '';
		
			if( naslaan_helpers::naslaan_unyson_check() ) {
				$title_variant = naslaan_theme_option_functions::naslaan_header_title_variant();
			}else{
				naslaan_front_functions::naslaan_header_title_default();
			}
			
			if($title_variant=='variant-1') { 
			
				naslaan_front_functions::naslaan_header_title_varant_1();
			
			}

		}
		
		public static function naslaan_header_title_default() {
		
				$f = '';
			
				$title_class = ' class="min-width-1200"';
				
				$f .= '<div id="title" '.$title_class.'>';
				

				$f .= '<div class="title_bg"';
				
				$f .= ' style="background-color:#959595"';
				
				$f .= '></div>';

			
				$f .= '<div class="container"><div class="row"><div class="col-md-12">';
		    
				$f .= '<div class="title">';
			    
			    ob_start();
			    
			    naslaan_front_functions::naslaan_page_title();
			    
			    $f .= ob_get_clean();
			    
			    $f .= '</div>';
			    
				$f .= '</div></div></div>';
				
				
				$f .= '</div>';
				
				echo $f;

		}
		
		public static function naslaan_header_title_varant_1() {
		
			$f = $title_layouts = $title_class = $header_share_visibility = $header_title_visibility = $header_breadcrumb_visibility = $share_btn_email = $header_background_type = $header_background_settings = $header_background_image = $header_background_image_color = $header_background_color = '';
		
			if( naslaan_helpers::naslaan_unyson_check() ) {
				$title_layouts = fw_get_db_settings_option('title_layouts');
			}
			
			$header_title_padding_top = naslaan_theme_option_functions::naslaan_header_title_padding_top_v1();
			$header_title_padding_bottom = naslaan_theme_option_functions::naslaan_header_title_padding_bottom_v1();
			$header_title_visibility = naslaan_theme_option_functions::naslaan_header_title_visibility_v1();
			$header_title = naslaan_theme_option_functions::naslaan_header_title_v1();
			$header_title_underline = naslaan_theme_option_functions::naslaan_header_title_underline_v1();

			$header_share_visibility = naslaan_theme_option_functions::naslaan_header_share_visibility_v1();
			$header_share_btn_email = naslaan_theme_option_functions::naslaan_header_share_btn_email_v1();
			
			$header_breadcrumb_visibility = naslaan_theme_option_functions::naslaan_header_breadcrumb_visibility_v1();
	
			$header_background_type = naslaan_theme_option_functions::naslaan_header_background_type();
			$header_background_color = naslaan_theme_option_functions::naslaan_header_background_color();
			$header_background_image_color = naslaan_theme_option_functions::naslaan_header_background_image_color();
			$header_background_settings = naslaan_theme_option_functions::naslaan_header_background_settings();
			$header_background_image = naslaan_theme_option_functions::naslaan_header_background_image();
			$header_animated_gradient_visibility = naslaan_theme_option_functions::naslaan_header_animated_gradient_visibility();
			$header_animated_gradient_color_1 = naslaan_theme_option_functions::naslaan_header_animated_gradient_color_1();
			$header_animated_gradient_color_2 = naslaan_theme_option_functions::naslaan_header_animated_gradient_color_2();
			$header_animated_gradient_opacity = naslaan_theme_option_functions::naslaan_header_animated_gradient_opacity();
			
			$current_page_url = "http://" . $_SERVER['HTTP_HOST']  . $_SERVER['REQUEST_URI'];
				
			if($header_title_visibility!='disabled'||function_exists('fw_ext_breadcrumbs'||$header_breadcrumb_visibility!='disabled')&&$header_title_padding_top!=''||$header_title_padding_bottom!='') {
			
				if($title_layouts=='1480') { $title_class = ' class="min-width-1480"'; }elseif($title_layouts=='full') { $title_class = ' class="min-width-100p"'; }
				
				$f .= '<div id="title" '.$title_class.'>';
				
				if($header_background_type=='background_image'){
					if($header_background_settings=='repeat_center'){
						$f .= '<div class="title_bg header-image-bg" style="background-image: url('.esc_url($header_background_image).');background-color:'.esc_attr($header_background_image_color).';"></div>';
					}elseif($header_background_settings=='repeat_top'){
						$f .= '<div class="title_bg header-image-bg-top" style="background-image: url('.esc_url($header_background_image).');background-color:'.esc_attr($header_background_image_color).';"></div>';
					}elseif($header_background_settings=='cover_center'){
						$f .= '<div class="title_bg header-image-bg-cover" style="background-image: url('. esc_url($header_background_image).');background-color:'.esc_attr($header_background_image_color).';"></div>';
					}elseif($header_background_settings=='cover_top'){
						$f .= '<div class="title_bg header-image-bg-cover-top" style="background-image: url('. esc_url($header_background_image).');background-color:'.esc_attr($header_background_image_color).';"></div>';
					}elseif($header_background_settings=='parallax_center'){
						$f .= '<div class="title_bg parallax-bg" data-parallax-image-bg="'.esc_url($header_background_image).'" style="background-color:'.esc_attr($header_background_image_color).';" data-vc-parallax="1.5"></div>';
					}elseif($header_background_settings=='parallax_top'){
						$f .= '<div class="title_bg parallax-bg parallax-bg-top" data-parallax-image-bg="'.esc_url($header_background_image).'" style="background-color:'.esc_attr($header_background_image_color).';" data-vc-parallax="1.5"></div>';
					}else{
						$f .= '<div class="title_bg">';
					}
				}
				else{
					$f .= '<div class="title_bg"';
					
					if($header_background_color!="") { $f .= ' style="background-color:'.esc_attr($header_background_color).';"'; }
					
					$f .= '></div>';
				}
				
				if($header_animated_gradient_visibility=='enabled'){
					$f .= '<div id="title-gradient" data-color-1="'.esc_attr($header_animated_gradient_color_1).'" data-color-2="'.esc_attr($header_animated_gradient_color_2).'"></div>';
				}
				
				if(($header_title_visibility!='disabled')||($header_share_visibility!='disabled')) {
					
				    $f .= '<div class="container"><div class="row"><div class="col-md-12">';
				    
				    if($header_title_visibility!='disabled') {
					    
					    $f .= '<div class="title">';
					    
					    ob_start();
					    
					    naslaan_front_functions::naslaan_page_title();
					    
					    $f .= ob_get_clean();
					    
					    $f .= '</div>';
					    
				    }	
				    
					$f .= '</div></div></div>';
					
				}
				
				if(($header_breadcrumb_visibility!='disabled')) {
				
				$f .= '<div class=bradcrumb-top><div class="container"><div class="row"><div class="col-md-12"><i class="material-icons">&#xE5DA;</i>';
				
					if( function_exists('fw_ext_breadcrumbs') ) {
						if($header_breadcrumb_visibility!='disabled') {
							
							ob_start();
							
							fw_ext_breadcrumbs($separator = '');
							
							$f .= ob_get_clean();
						}
					}
				
				$f .= '</div></div></div></div>';
					
				}
				
				$f .= '</div>';
				
				echo $f;
			
			}

		}
		
		public static function naslaan_header() {
			
			$header_layouts = $sticky_menu_visibility = $header_top_visibility = $header_absolute = '';
			
			if( naslaan_helpers::naslaan_unyson_check() ) {
				$header_layouts = fw_get_db_settings_option('header_layouts');
				$sticky_menu_visibility = fw_get_db_settings_option('sticky_header_switch/sticky_header_visibility');
				$header_absolute = naslaan_theme_option_functions::naslaan_header_absolute();
			}
		
			$f = '<header id="header" class="';
			
			if($header_absolute=='enabled') {
				$f .= 'header-absolute ';
			}
			
			if( !naslaan_helpers::naslaan_unyson_check() ) {
				$f .= 'header-absolute ';
			}
			
			if($header_layouts=='1480') {
				$f .= 'min-width-1480';
			}else if($header_layouts=='full') {
				$f .= 'min-width-100p';
			}
			
			$f .= '">';
			
			ob_start();
			get_template_part('includes/header_search_form');
			
			if( naslaan_helpers::naslaan_wpml_check() ) {
			get_template_part('includes/header_wpml_switcher');
			}
			
			get_template_part('includes/meta-top');
			get_template_part('includes/header-container');
			
			if($sticky_menu_visibility=='enabled'){
				get_template_part('includes/header-sticky');
			}
			
			$f .= ob_get_clean();
				
			$f .= '</header>';
			
			echo $f;
			
		}
		
		public static function naslaan_side_header() {
			
			$f = '';
			
			ob_start();
		
			naslaan_front_functions::naslaan_slide_panel_toggle();
			
			$f .= ob_get_clean();
		
			$f .= '<header id="header" class="side-header">';
			
			ob_start();
			get_template_part('includes/header_search_form');
			
			if( naslaan_helpers::naslaan_wpml_check() ) {
			get_template_part('includes/header_wpml_switcher');
			}
			
			get_template_part('includes/header-container');
	
			$f .= ob_get_clean();
				
			$f .= '</header>';
			
			echo $f;
			
		}
		
		public static function naslaan_revslider_container() {
			
			$slider_container = $slider_shortcode = '';
			
			if( naslaan_helpers::naslaan_unyson_check() ) {
				$slider_container = fw_get_db_post_option( get_the_ID(),'slider_container/slider_container_type');
				$slider_shortcode = fw_get_db_post_option( get_the_ID(),'slider_shortcode');
			}
		
			$f = '';
		
			if ($slider_shortcode) {
			$f .= '<div id="revslider-container';
				if ($slider_container=="1480") {
					$f .= 'min-width-1480';
				}
			$f .= '">';
			
				if ($slider_container!="full") {
				$f .= '<div class="container">';
					$f .= '<div class="row">';
						$f .= '<div class="col-md-12">';
				}		
							$f .= do_shortcode( $slider_shortcode );
							
				if ($slider_container!="full") {	
						$f .= '</div>';
					$f .= '</div>';
				$f .= '</div>';
				}
				
			$f .= '</div>';
			}
			
			echo $f;
			
		}
		
		public static function naslaan_main_class() {
			
			$main_class = '';
			
			if( naslaan_helpers::naslaan_unyson_check() && function_exists('fw_ext_sidebars_get_current_position') ) {
			
				if( naslaan_helpers::naslaan_event_calendar_check() && tribe_is_event_query() && is_archive()){
				
					$current_position = fw_get_db_settings_option( 'events_sidebar' );
				
				}
				else{
				
					$current_position = fw_ext_sidebars_get_current_position();
					
				}
			
				if( $current_position === 'left' ){
					
					$main_class .= 'inner-page-left-sidebar';
					
				}
				elseif( $current_position === 'right' ){
					
					$main_class .= 'inner-page-right-sidebar';
					
				}
				elseif( $current_position === 'full' ){
					
					$main_class .= 'inner-page-no-sidebar';
					
				}
				else {
					
					$main_class .= 'inner-page-right-sidebar';
					
				}
			
			}
			
			if( naslaan_helpers::naslaan_unyson_check() ) {
				$main_layouts = naslaan_theme_option_functions::naslaan_main_layouts();
				
				if( $main_layouts=="1480" ) {
					$main_class .= ' min-width-1480';
				}
				elseif( $main_layouts=="full" ) {
					$main_class .= ' min-width-100p';
				}elseif( $main_layouts=="992" ) {
					$main_class .= ' min-width-992';
				}elseif( $main_layouts=="1110" ) {
					$main_class .= ' min-width-1110';
				}else{
					$main_class .= ' min-width-1200';
				}
			}
			
			if((is_front_page() && is_home()) || is_home() || is_archive()) {
					
				
				if( naslaan_helpers::naslaan_event_calendar_check() && tribe_is_event_query() && is_archive()){
				
					$main_class .= ' inner_events_page';
				
				}else{
				
					$main_class .= ' front-blog-post';
					
				}
				
			}
			
			if(is_singular('post')) {
			
				$main_class .= ' inner-blog-post';
				
			}
			
			if( naslaan_helpers::naslaan_woocommerce_check() && is_cart()) {
			
				$main_class .= ' inner-cart-page';
				
			}
			if( naslaan_helpers::naslaan_woocommerce_check() && is_checkout()) {
			
				$main_class .= ' inner-checkout-page';
				
			}
			if( naslaan_helpers::naslaan_woocommerce_check() && is_product()) {
			
				$main_class .= ' inner-product-post';
				
				global $post;
				
				$product = get_product( $post->ID );
				
				if( $product->is_type( 'simple' ) ){
				
					$main_class .= ' inner-single-product';
					
				}elseif( $product->is_type( 'variable' ) ){
				
					$main_class .= ' inner-variable-product';
					
				}
				
				if( naslaan_helpers::naslaan_unyson_check()) {
					
					$product_post_layout = fw_get_db_post_option( get_the_ID(), 'product_post_layout');
					
					if($product_post_layout=='50-50') {
					
						$main_class .= ' inner-product-post-50-50';
					
					}
					
				}
				
			}
			
			if(is_singular('fw-portfolio')) {
			
				$main_class .= ' inner-portfolio-post';
				
			}
			
			if ( is_singular('post') && comments_open() || get_comments_number() ) {
				
				$main_class .= ' inner-comment-page';
				
			}
			
			if ( is_page() && comments_open() || get_comments_number() ) {
				
				$main_class .= ' inner-comment-page';
				
			}
			
			if ( wp_attachment_is_image() ) {
				
				$main_class .= ' inner-comment-page';
				
			}
			
			if( is_search() ){
				
				$main_class .= ' inner-search-page';
			}
			
			if( is_404() ){
				
				$main_class .= ' inner-404-page';
			}
			

			echo $main_class;
		}
		
		public static function naslaan_inner_page_columns() {
		
			$main_layouts = $current_position = '';
			
			if( naslaan_helpers::naslaan_unyson_check() && function_exists('fw_ext_sidebars_get_current_position') ) {
			
				if( naslaan_helpers::naslaan_event_calendar_check() && tribe_is_event_query() && is_archive()){
				
					$current_position = fw_get_db_settings_option( 'events_sidebar' );
				
				}else{
				
					$current_position = fw_ext_sidebars_get_current_position();
					
				}
			
			}
			
			if( naslaan_helpers::naslaan_unyson_check() ) {
				$main_layouts = naslaan_theme_option_functions::naslaan_main_layouts();
			}
			
			
			if ( $current_position === 'full' ) {
				$inner_page='col-md-12';
			}else{
				if( $main_layouts=="1110" ) {
					$inner_page='col-md-8';
				}else{
					$inner_page='col-md-9';
				}
			}
			
			echo $inner_page;
			
		}
		
		public static function naslaan_page_paddings() {
			
			if( naslaan_helpers::naslaan_unyson_check() ) {
				
				$page_options_padding_top=$page_options_padding_bottom='';
				
				if( naslaan_helpers::naslaan_event_calendar_check() && tribe_is_event_query() && is_archive()){
				
					$page_options_padding_top = fw_get_db_settings_option( 'events_options_padding_top' );
					$page_options_padding_bottom = fw_get_db_settings_option( 'events_options_padding_bottom' );
				
				}elseif( naslaan_helpers::naslaan_woocommerce_check() && is_shop() ){
				
					$shop_page = get_post( wc_get_page_id( 'shop' ) );
					$page_options_padding_top  = fw_get_db_post_option( $shop_page->ID, 'page_options_padding_top' );
					$page_options_padding_bottom  = fw_get_db_post_option( $shop_page->ID, 'page_options_padding_bottom' );
				
				}elseif(is_single() || is_page()) {
				
					$page_options_padding_top  = fw_get_db_post_option( get_the_ID(), 'page_options_padding_top' );
					$page_options_padding_bottom  = fw_get_db_post_option( get_the_ID(), 'page_options_padding_bottom' );
					
				} elseif((is_front_page() && is_home()) || is_home()) {
				
					$page_options_padding_top = fw_get_db_post_option( get_option( 'page_for_posts'), 'page_options_padding_top' );
					$page_options_padding_bottom = fw_get_db_post_option( get_option( 'page_for_posts'), 'page_options_padding_bottom' );
				}
				
				return array(
					'top' => $page_options_padding_top,
					'bottom' => $page_options_padding_bottom,
				);
			}
			
		}
		
		public static function naslaan_page_paddings_value() {
		
			$page_paddings = '';
		
			if( naslaan_helpers::naslaan_unyson_check()) {
			
				$page_paddings=naslaan_front_functions::naslaan_page_paddings();
				
				if($page_paddings['top']==''){
					$page_padding_top = '50';
				}else{
					$page_padding_top = $page_paddings['top'];
				}
				if($page_paddings['bottom']==''){
					$page_padding_bottom = '30';
				}else{
					$page_padding_bottom = $page_paddings['bottom'];
				}
			
				$page_paddings = ' style="padding-top:'.esc_attr($page_padding_top).'px;padding-bottom:'.esc_attr($page_padding_bottom).'px;"';
			
			}
		
			echo $page_paddings;
		}
		
		function naslaan_body_classes( $classes ) {
			
			$header_types = $navigation_left_variants = $navigation_center_variants = $navigation_left_variant_1_align = $navigation_left_variant_2_align = $sticky_header_visibility = $sticky_navigation_align = $dropdown_variant = $widget_variant = $title_variant = '';
			
			if( naslaan_helpers::naslaan_woocommerce_check() && naslaan_helpers::naslaan_unyson_check()) {
				$shop_products_per_row = fw_get_db_settings_option('shop_products_per_row');
				$menu_one_page_menu = fw_get_db_settings_option('menu_one_page_menu');
				if( $menu_one_page_menu == 'enabled' ) {
					$classes[] = 'one-page-template';
				}
				if( is_shop()||is_product_category()||is_product_tag() ) {
					$classes[] = 'columns-'. $shop_products_per_row ;
				}
			}
			
			if( naslaan_helpers::naslaan_unyson_check() ) {
				$header_types = fw_get_db_settings_option('header_types/header_type');
				$navigation_left_variants = fw_get_db_settings_option('header_types/left/navigation_types/navigation_variant');
				$navigation_center_variants = fw_get_db_settings_option('header_types/center/navigation_types/navigation_variant');
				$navigation_left_variant_1_align = fw_get_db_settings_option('header_types/left/navigation_types/variant_1/navigation_align');
				$navigation_left_variant_2_align = fw_get_db_settings_option('header_types/left/navigation_types/variant_2/navigation_align');
				$sticky_header_visibility = fw_get_db_settings_option('sticky_header_switch/sticky_header_visibility');
				$sticky_navigation_align = fw_get_db_settings_option('sticky_header_switch/enabled/navigation_align');
				$dropdown_variant = fw_get_db_settings_option('menu_dropdown_variant/dropdown_variant');
				$widget_variant = fw_get_db_settings_option('widget_style_variant/widget_variant');
				$title_variant = naslaan_theme_option_functions::naslaan_header_title_variant();
			}

			if($header_types=='left'){
				$classes[] = 'left-header-type';
				if($navigation_left_variants=='variant_1'){
					$classes[] = 'left-header-variant-1';
					$classes[] = 'navigation-align-'.$navigation_left_variant_1_align;
				}elseif($navigation_left_variants=='variant_2'){
					$classes[] = 'left-header-variant-2';
					$classes[] = 'navigation-align-'.$navigation_left_variant_2_align;
				}elseif($navigation_left_variants=='variant_3'){
					$classes[] = 'left-header-variant-3 header-slide-panel';
				}elseif($navigation_left_variants=='variant_4'){
					$classes[] = 'left-header-variant-4';
				}
			}
			elseif($header_types=='center'){
				$classes[] = 'center-header-type';
				if($navigation_center_variants=='variant_1'){
					$classes[] = 'center-header-variant-1';
				}elseif($navigation_center_variants=='variant_2'){
					$classes[] = 'center-header-variant-2';
				}elseif($navigation_center_variants=='variant_3'){
					$classes[] = 'center-header-variant-3 header-slide-panel';
				}
			}
			elseif($header_types=='side'){
				$classes[] = 'side-header-variant-1';
			}
			
			if($dropdown_variant=='variant_2'){
				$classes[] = 'nav-submenu-type-2';
				$classes[] = 'nav-megamenu-type-2';
			}
			else{
				$classes[] = 'nav-submenu-type-1';
				$classes[] = 'nav-megamenu-type-1';
			}
			
			if($widget_variant=="variant-1"){
				$classes[] = 'widget-'.$widget_variant;
			}
			
			if($sticky_header_visibility=="enabled"){
				$classes[] = 'sticky-navigation-align-'.$sticky_navigation_align;
			}
			
			$classes[] = 'title-'.$title_variant;
			$classes[] = 'header-type-'.$header_types;
			$classes[] = 'slide-panel-left';
			$classes[] = 'push-slide-panel';
			
			return $classes;
		}
		
		public static function naslaan_slide_panel() {
			
			$f = '<div class="overlay-layer"><div class="panel-close-btn"><span></span></div></div>';
		
			$f .= '<div id="slide-panel">';
		
				$f .= '<div class="slide-panel-wrap">';
		
					$f .= '<div class="lpdmobmenu-wrapper">';
						
						$f .= '<nav class="lpdmobmenu">';
						
						$menu_class = "lpdmobmenu-list";
						
						ob_start();
						
						if ( has_nav_menu( 'primary-menu' ) ) {
							wp_nav_menu( array(
								'theme_location' => 'primary-menu',
								'menu_class' => $menu_class,
								'container' => '',
								'walker' => new naslaan_nav_mobmenu_walker,				
							));
						}
						
						$f .= ob_get_clean();
						
						$f .= '</nav>';
					
					$f .= '</div>';
		
				$f .= '</div>';
		
			$f .= '</div>';
			
			echo $f;
			
		}
		
		public static function naslaan_logo() {
		
			$header_logo ='text_logo';
			
			if( naslaan_helpers::naslaan_unyson_check() ) {
				$header_logo = fw_get_db_settings_option('header_logo/logo_type');
				
			}
			
			$f = '';
			
			ob_start();
			
			if($header_logo=='image_logo'){
				get_template_part('includes/logo/image-logo');
			}elseif($header_logo=='text_logo'){
				get_template_part('includes/logo/text-logo');
			}
			
			$f .= ob_get_clean();
			
			echo $f;
			
		}
		
		public static function naslaan_logo_sticky() {
		
			$header_logo ='';
			
			if( naslaan_helpers::naslaan_unyson_check() ) {
				$header_logo = fw_get_db_settings_option('sticky_header_switch/enabled/header_logo/logo_type');
				
			}
			
			$f = '';
			
			ob_start();
			
			if($header_logo=='image_logo'){
				get_template_part('includes/logo/image-logo-sticky');
			}elseif($header_logo=='text_logo'){
				get_template_part('includes/logo/text-logo');
			}
			
			$f .= ob_get_clean();
			
			echo $f;
			
		}
		
		public static function naslaan_navigation() {
		
			$f = '<div class="lpdmenu-wrapper">';
				
				$f .= '<nav class="lpdmenu">';
				
				$menu_button_overlay_effect_switch = $menu_button_overlay_effect_types = "";
				
				if( naslaan_helpers::naslaan_unyson_check() ) {
					$menu_button_overlay_effect_switch = fw_get_db_settings_option('menu_button_overlay_effect/menu_button_overlay_effect_switch');
					$menu_button_overlay_effect_types = fw_get_db_settings_option('menu_button_overlay_effect/enabled/menu_button_overlay_effect_types');
				}
				
				$menu_button_overlay_effect="";
				
				$menu_class = "lpdmenu-list";
				
				if($menu_button_overlay_effect_switch=="enabled"){
					if($menu_button_overlay_effect_types=="type_1"){
						$menu_class .= " menu-btn-animated";
					}elseif($menu_button_overlay_effect_types=="type_2"){
						$menu_class .= " menu-btn-animated-2";
					}
				}
				
				ob_start();
				
				if ( has_nav_menu( 'primary-menu' ) ) {
					wp_nav_menu( array(
						'theme_location' => 'primary-menu',
						'menu_class' => $menu_class,
						'container' => '',
						'walker' => new naslaan_nav_menu_walker,				
					));
				}
				
				$f .= ob_get_clean();
				
				$f .= '</nav>';
			
			$f .= '</div>';
			
			echo $f;
			
		}
		
		public static function naslaan_navigation_sticky() {
		
			$f = '<div class="lpdmenu-wrapper">';
				
				$f .= '<nav class="lpdmenu">';
				
				$menu_button_overlay_effect_switch = $menu_button_overlay_effect_types = "";
				
				if( naslaan_helpers::naslaan_unyson_check() ) {
					$menu_button_overlay_effect_switch = fw_get_db_settings_option('sticky_header_switch/enabled/menu_button_overlay_effect/menu_button_overlay_effect_switch');
					$menu_button_overlay_effect_types = fw_get_db_settings_option('sticky_header_switch/enabled/menu_button_overlay_effect/enabled/menu_button_overlay_effect_types');
				}
				
				$menu_button_overlay_effect="";
				
				$menu_class = "lpdmenu-list";
				
				if($menu_button_overlay_effect_switch=="enabled"){
					if($menu_button_overlay_effect_types=="type_1"){
						$menu_class .= " menu-btn-animated";
					}elseif($menu_button_overlay_effect_types=="type_2"){
						$menu_class .= " menu-btn-animated-2";
					}
				}
				
				ob_start();
				
				if ( has_nav_menu( 'primary-menu' ) ) {
					wp_nav_menu( array(
						'theme_location' => 'primary-menu',
						'menu_class' => $menu_class,
						'container' => '',
						'walker' => new naslaan_nav_menu_walker,				
					));
				}
				
				$f .= ob_get_clean();
				
				$f .= '</nav>';
			
			$f .= '</div>';
			
			echo $f;
			
		}
		
		public static function naslaan_side_navigation() {
		
			$f = '<div class="side-lpdmenu-wrapper">';
				
				$f .= '<nav class="side-lpdmenu">';
				
				$menu_button_overlay_effect_switch = $menu_button_overlay_effect_types = "";
				
				if( naslaan_helpers::naslaan_unyson_check() ) {
					$menu_button_overlay_effect_switch = fw_get_db_settings_option('menu_button_overlay_effect/menu_button_overlay_effect_switch');
					$menu_button_overlay_effect_types = fw_get_db_settings_option('menu_button_overlay_effect/enabled/menu_button_overlay_effect_types');
				}
				
				$menu_button_overlay_effect="";
				
				$menu_class = "side-lpdmenu-list";
				
				if($menu_button_overlay_effect_switch=="enabled"){
					if($menu_button_overlay_effect_types=="type_1"){
						$menu_class .= " menu-btn-animated";
					}elseif($menu_button_overlay_effect_types=="type_2"){
						$menu_class .= " menu-btn-animated-2";
					}
				}
				
				ob_start();
				
				if ( has_nav_menu( 'primary-menu' ) ) {
					wp_nav_menu( array(
						'theme_location' => 'primary-menu',
						'menu_class' => $menu_class,
						'container' => '',
						'walker' => new naslaan_nav_menu_walker,				
					));
				}
				
				$f .= ob_get_clean();
				
				$f .= '</nav>';
			
			$f .= '</div>';
			
			echo $f;
			
		}
		
		public static function naslaan_right_bar() {
			
			$header_elem_order_1 = $header_elem_order_2 = $header_elem_order_3 = $header_elem_order_4 = $header_elem_order_5 = '';
			
			if( naslaan_helpers::naslaan_unyson_check() ) {
			
				$header_type = fw_get_db_settings_option('header_types/header_type');
			
				if($header_type=='left') {
					
					$navigation_variant = fw_get_db_settings_option('header_types/left/navigation_types/navigation_variant');
				
					if( $navigation_variant=='variant_1' ) {
						$header_elem_order_1 = fw_get_db_settings_option('header_types/left/navigation_types/variant_1/right_bar_order_1');
						$header_elem_order_2 = fw_get_db_settings_option('header_types/left/navigation_types/variant_1/right_bar_order_2');
						$header_elem_order_3 = fw_get_db_settings_option('header_types/left/navigation_types/variant_1/right_bar_order_3');
						$header_elem_order_4 = fw_get_db_settings_option('header_types/left/navigation_types/variant_1/right_bar_order_4');
						$header_elem_order_5 = fw_get_db_settings_option('header_types/left/navigation_types/variant_1/right_bar_order_5');
					}elseif( $navigation_variant=='variant_2' ){
						$header_elem_order_1 = fw_get_db_settings_option('header_types/left/navigation_types/variant_2/right_bar_order_1');
						$header_elem_order_2 = fw_get_db_settings_option('header_types/left/navigation_types/variant_2/right_bar_order_2');
						$header_elem_order_3 = fw_get_db_settings_option('header_types/left/navigation_types/variant_2/right_bar_order_3');
						$header_elem_order_4 = fw_get_db_settings_option('header_types/left/navigation_types/variant_2/right_bar_order_4');
						$header_elem_order_5 = fw_get_db_settings_option('header_types/left/navigation_types/variant_2/right_bar_order_5');
					}elseif( $navigation_variant=='variant_3' ){
						$header_elem_order_1 = fw_get_db_settings_option('header_types/left/navigation_types/variant_3/right_bar_order_1');
						$header_elem_order_2 = fw_get_db_settings_option('header_types/left/navigation_types/variant_3/right_bar_order_2');
						$header_elem_order_3 = fw_get_db_settings_option('header_types/left/navigation_types/variant_3/right_bar_order_3');
						$header_elem_order_4 = fw_get_db_settings_option('header_types/left/navigation_types/variant_3/right_bar_order_4');
						$header_elem_order_5 = fw_get_db_settings_option('header_types/left/navigation_types/variant_3/right_bar_order_5');
					}
					
				}elseif($header_type=='center'){
					
					$navigation_variant = fw_get_db_settings_option('header_types/center/navigation_types/navigation_variant');
				
					if( $navigation_variant=='variant_1' ) {
						$header_elem_order_1 = fw_get_db_settings_option('header_types/center/navigation_types/variant_1/right_bar_order_1');
						$header_elem_order_2 = fw_get_db_settings_option('header_types/center/navigation_types/variant_1/right_bar_order_2');
						$header_elem_order_3 = fw_get_db_settings_option('header_types/center/navigation_types/variant_1/right_bar_order_3');
						$header_elem_order_4 = fw_get_db_settings_option('header_types/center/navigation_types/variant_1/right_bar_order_4');
						$header_elem_order_5 = fw_get_db_settings_option('header_types/center/navigation_types/variant_1/right_bar_order_5');
					}elseif( $navigation_variant=='variant_2' ){
						$header_elem_order_1 = fw_get_db_settings_option('header_types/center/navigation_types/variant_2/right_bar_order_1');
						$header_elem_order_2 = fw_get_db_settings_option('header_types/center/navigation_types/variant_2/right_bar_order_2');
						$header_elem_order_3 = fw_get_db_settings_option('header_types/center/navigation_types/variant_2/right_bar_order_3');
						$header_elem_order_4 = fw_get_db_settings_option('header_types/center/navigation_types/variant_2/right_bar_order_4');
						$header_elem_order_5 = fw_get_db_settings_option('header_types/center/navigation_types/variant_2/right_bar_order_5');
					}elseif( $navigation_variant=='variant_3' ){
						$header_elem_order_1 = fw_get_db_settings_option('header_types/center/navigation_types/variant_3/right_bar_order_1');
						$header_elem_order_2 = fw_get_db_settings_option('header_types/center/navigation_types/variant_3/right_bar_order_2');
						$header_elem_order_3 = fw_get_db_settings_option('header_types/center/navigation_types/variant_3/right_bar_order_3');
						$header_elem_order_4 = fw_get_db_settings_option('header_types/center/navigation_types/variant_3/right_bar_order_4');
						$header_elem_order_5 = fw_get_db_settings_option('header_types/center/navigation_types/variant_3/right_bar_order_5');
					}
					
				}
			

			}
		
			$f = '<div class="right-bar">';
			
			$f .= '<ul>';
			
			if($header_elem_order_5!='none'||$header_elem_order_4!='none'||$header_elem_order_3!='none'||$header_elem_order_2!='none'||$header_elem_order_1!='none'){
			
				if($header_elem_order_1!='none'){
				
				$f .= '<li class="order-1">';
				
					ob_start();
					
					if($header_elem_order_1=='wpml_btn'){
						naslaan_front_functions::naslaan_new_language_selector_flags();
					}elseif($header_elem_order_1=='message'){
						naslaan_front_functions::naslaan_header_message_block();
					}elseif($header_elem_order_1=='social'){
						naslaan_front_functions::naslaan_header_social_media();
					}elseif($header_elem_order_1=='shopping_cart'){
						naslaan_front_functions::naslaan_shopping_cart();
					}elseif($header_elem_order_1=='search'){
						naslaan_front_functions::naslaan_header_search_btn();
					}

					$f .= ob_get_clean();
				
				$f .= '</li>';
				
				}
				
				if($header_elem_order_2!='none'){
				
				$f .= '<li class="order-2">';
				
					ob_start();
				
					if($header_elem_order_2=='wpml_btn'){
						naslaan_front_functions::naslaan_new_language_selector_flags();
					}elseif($header_elem_order_2=='message'){
						naslaan_front_functions::naslaan_header_message_block();
					}elseif($header_elem_order_2=='social'){
						naslaan_front_functions::naslaan_header_social_media();
					}elseif($header_elem_order_2=='shopping_cart'){
						naslaan_front_functions::naslaan_shopping_cart();
					}elseif($header_elem_order_2=='search'){
						naslaan_front_functions::naslaan_header_search_btn();
					}
					
					$f .= ob_get_clean();
				
				$f .= '</li>';
				
				}
				
				if($header_elem_order_3!='none'){
				
				$f .= '<li class="order-3">';
				
					ob_start();
				
					if($header_elem_order_3=='wpml_btn'){
						naslaan_front_functions::naslaan_new_language_selector_flags();
					}elseif($header_elem_order_3=='message'){
						naslaan_front_functions::naslaan_header_message_block();
					}elseif($header_elem_order_3=='social'){
						naslaan_front_functions::naslaan_header_social_media();
					}elseif($header_elem_order_3=='shopping_cart'){
						naslaan_front_functions::naslaan_shopping_cart();
					}elseif($header_elem_order_3=='search'){
						naslaan_front_functions::naslaan_header_search_btn();
					}
					
					$f .= ob_get_clean();
				
				$f .= '</li>';
				
				}
				
				if($header_elem_order_4!='none'){
				
				$f .= '<li class="order-4">';
				
					ob_start();
				
					if($header_elem_order_4=='wpml_btn'){
						naslaan_front_functions::naslaan_new_language_selector_flags();
					}elseif($header_elem_order_4=='message'){
						naslaan_front_functions::naslaan_header_message_block();
					}elseif($header_elem_order_4=='social'){
						naslaan_front_functions::naslaan_header_social_media();
					}elseif($header_elem_order_4=='shopping_cart'){
						naslaan_front_functions::naslaan_shopping_cart();
					}elseif($header_elem_order_4=='search'){
						naslaan_front_functions::naslaan_header_search_btn();
					}
					
					$f .= ob_get_clean();
				
				$f .= '</li>';
				
				}
				
				if($header_elem_order_5!='none'){
				
				$f .= '<li class="order-5">';
				
					ob_start();
				
					if($header_elem_order_5=='wpml_btn'){
						naslaan_front_functions::naslaan_new_language_selector_flags();
					}elseif($header_elem_order_5=='message'){
						naslaan_front_functions::naslaan_header_message_block();
					}elseif($header_elem_order_5=='social'){
						naslaan_front_functions::naslaan_header_social_media();
					}elseif($header_elem_order_5=='shopping_cart'){
						naslaan_front_functions::naslaan_shopping_cart();
					}elseif($header_elem_order_5=='search'){
						naslaan_front_functions::naslaan_header_search_btn();
					}
					
					$f .= ob_get_clean();
				
				$f .= '</li>';
				
				}
			
			}
			
			$f .= '<li class="responsive-navigation-btn">';
			
				ob_start();
			
				naslaan_front_functions::naslaan_slide_panel_toggle();
				
				$f .= ob_get_clean();
			
			$f .= '</li>';
			
			
			$f .= '</ul>';
				
			$f .= '</div>';
			
			echo $f;
			
		}
		
		public static function naslaan_right_bar_sticky() {
			
			$header_elem_order_1 = $header_elem_order_2 = $header_elem_order_3 = $header_elem_order_4 = $header_elem_order_5 = '';
			
			if( naslaan_helpers::naslaan_unyson_check() ) {
			
				$header_elem_order_1 = fw_get_db_settings_option('sticky_header_switch/enabled/right_bar_order_1');
				$header_elem_order_2 = fw_get_db_settings_option('sticky_header_switch/enabled/right_bar_order_2');
				$header_elem_order_3 = fw_get_db_settings_option('sticky_header_switch/enabled/right_bar_order_3');
				$header_elem_order_4 = fw_get_db_settings_option('sticky_header_switch/enabled/right_bar_order_4');
				$header_elem_order_5 = fw_get_db_settings_option('sticky_header_switch/enabled/right_bar_order_5');

			}
		
			$f = '<div class="right-bar">';
			
			$f .= '<ul>';
			
			if($header_elem_order_5!='none'||$header_elem_order_4!='none'||$header_elem_order_3!='none'||$header_elem_order_2!='none'||$header_elem_order_1!='none'){
			
				if($header_elem_order_1!='none'){
				
				$f .= '<li class="order-1">';
				
					ob_start();
					
					if($header_elem_order_1=='wpml_btn'){
						naslaan_front_functions::naslaan_new_language_selector_flags_sticky();
					}elseif($header_elem_order_1=='message'){
						naslaan_front_functions::naslaan_header_message_block_sticky();
					}elseif($header_elem_order_1=='social'){
						naslaan_front_functions::naslaan_header_social_media_sticky();
					}elseif($header_elem_order_1=='shopping_cart'){
						naslaan_front_functions::naslaan_shopping_cart_sticky();
					}elseif($header_elem_order_1=='search'){
						naslaan_front_functions::naslaan_header_search_btn_sticky();
					}

					$f .= ob_get_clean();
				
				$f .= '</li>';
				
				}
				
				if($header_elem_order_2!='none'){
				
				$f .= '<li class="order-2">';
				
					ob_start();
				
					if($header_elem_order_2=='wpml_btn'){
						naslaan_front_functions::naslaan_new_language_selector_flags_sticky();
					}elseif($header_elem_order_2=='message'){
						naslaan_front_functions::naslaan_header_message_block_sticky();
					}elseif($header_elem_order_2=='social'){
						naslaan_front_functions::naslaan_header_social_media_sticky();
					}elseif($header_elem_order_2=='shopping_cart'){
						naslaan_front_functions::naslaan_shopping_cart_sticky();
					}elseif($header_elem_order_2=='search'){
						naslaan_front_functions::naslaan_header_search_btn_sticky();
					}
					
					$f .= ob_get_clean();
				
				$f .= '</li>';
				
				}
				
				if($header_elem_order_3!='none'){
				
				$f .= '<li class="order-3">';
				
					ob_start();
				
					if($header_elem_order_3=='wpml_btn'){
						naslaan_front_functions::naslaan_new_language_selector_flags_sticky();
					}elseif($header_elem_order_3=='message'){
						naslaan_front_functions::naslaan_header_message_block_sticky();
					}elseif($header_elem_order_3=='social'){
						naslaan_front_functions::naslaan_header_social_media_sticky();
					}elseif($header_elem_order_3=='shopping_cart'){
						naslaan_front_functions::naslaan_shopping_cart_sticky();
					}elseif($header_elem_order_3=='search'){
						naslaan_front_functions::naslaan_header_search_btn_sticky();
					}
					
					$f .= ob_get_clean();
				
				$f .= '</li>';
				
				}
				
				if($header_elem_order_4!='none'){
				
				$f .= '<li class="order-4">';
				
					ob_start();
				
					if($header_elem_order_4=='wpml_btn'){
						naslaan_front_functions::naslaan_new_language_selector_flags_sticky();
					}elseif($header_elem_order_4=='message'){
						naslaan_front_functions::naslaan_header_message_block_sticky();
					}elseif($header_elem_order_4=='social'){
						naslaan_front_functions::naslaan_header_social_media_sticky();
					}elseif($header_elem_order_4=='shopping_cart'){
						naslaan_front_functions::naslaan_shopping_cart_sticky();
					}elseif($header_elem_order_4=='search'){
						naslaan_front_functions::naslaan_header_search_btn_sticky();
					}
					
					$f .= ob_get_clean();
				
				$f .= '</li>';
				
				}
				
				if($header_elem_order_5!='none'){
				
				$f .= '<li class="order-5">';
				
					ob_start();
				
					if($header_elem_order_5=='wpml_btn'){
						naslaan_front_functions::naslaan_new_language_selector_flags_sticky();
					}elseif($header_elem_order_5=='message'){
						naslaan_front_functions::naslaan_header_message_block_sticky();
					}elseif($header_elem_order_5=='social'){
						naslaan_front_functions::naslaan_header_social_media_sticky();
					}elseif($header_elem_order_5=='shopping_cart'){
						naslaan_front_functions::naslaan_shopping_cart_sticky();
					}elseif($header_elem_order_5=='search'){
						naslaan_front_functions::naslaan_header_search_btn_sticky();
					}
					
					$f .= ob_get_clean();
				
				$f .= '</li>';
				
				}
			
			}
			
			$f .= '</ul>';
				
			$f .= '</div>';
			
			echo $f;
			
		}
		
		public static function naslaan_ht_right_bar() {
			
			$header_elem_order_1 = $header_elem_order_2 = $header_elem_order_3 = $header_elem_order_4 = $header_elem_order_5 = '';
			
			if( naslaan_helpers::naslaan_unyson_check() ) {
			
				$header_elem_order_1 = fw_get_db_settings_option('header_top_switch/enabled/header_elem_order_top_1');
				$header_elem_order_2 = fw_get_db_settings_option('header_top_switch/enabled/header_elem_order_top_2');
				$header_elem_order_3 = fw_get_db_settings_option('header_top_switch/enabled/header_elem_order_top_3');
				$header_elem_order_4 = fw_get_db_settings_option('header_top_switch/enabled/header_elem_order_top_4');
				$header_elem_order_5 = fw_get_db_settings_option('header_top_switch/enabled/header_elem_order_top_5');
			

			}
		
			$f = '<div class="right-bar">';
			
			$f .= '<ul>';
			
			if($header_elem_order_5!='none'||$header_elem_order_4!='none'||$header_elem_order_3!='none'||$header_elem_order_2!='none'||$header_elem_order_1!='none'){
			
				if($header_elem_order_1!='none'){
				
				$f .= '<li class="order-1">';
				
					ob_start();
					
					if($header_elem_order_1=='wpml_btn'){
						naslaan_front_functions::naslaan_new_language_selector_flags();
					}elseif($header_elem_order_1=='message'){
						naslaan_front_functions::naslaan_header_message_block();
					}elseif($header_elem_order_1=='social'){
						naslaan_front_functions::naslaan_header_social_media();
					}elseif($header_elem_order_1=='shopping_cart'){
						naslaan_front_functions::naslaan_shopping_cart();
					}elseif($header_elem_order_1=='search'){
						naslaan_front_functions::naslaan_header_search_btn();
					}

					$f .= ob_get_clean();
				
				$f .= '</li>';
				
				}
				
				if($header_elem_order_2!='none'){
				
				$f .= '<li class="order-2">';
				
					ob_start();
				
					if($header_elem_order_2=='wpml_btn'){
						naslaan_front_functions::naslaan_new_language_selector_flags();
					}elseif($header_elem_order_2=='message'){
						naslaan_front_functions::naslaan_header_message_block();
					}elseif($header_elem_order_2=='social'){
						naslaan_front_functions::naslaan_header_social_media();
					}elseif($header_elem_order_2=='shopping_cart'){
						naslaan_front_functions::naslaan_shopping_cart();
					}elseif($header_elem_order_2=='search'){
						naslaan_front_functions::naslaan_header_search_btn();
					}
					
					$f .= ob_get_clean();
				
				$f .= '</li>';
				
				}
				
				if($header_elem_order_3!='none'){
				
				$f .= '<li class="order-3">';
				
					ob_start();
				
					if($header_elem_order_3=='wpml_btn'){
						naslaan_front_functions::naslaan_new_language_selector_flags();
					}elseif($header_elem_order_3=='message'){
						naslaan_front_functions::naslaan_header_message_block();
					}elseif($header_elem_order_3=='social'){
						naslaan_front_functions::naslaan_header_social_media();
					}elseif($header_elem_order_3=='shopping_cart'){
						naslaan_front_functions::naslaan_shopping_cart();
					}elseif($header_elem_order_3=='search'){
						naslaan_front_functions::naslaan_header_search_btn();
					}
					
					$f .= ob_get_clean();
				
				$f .= '</li>';
				
				}
				
				if($header_elem_order_4!='none'){
				
				$f .= '<li class="order-4">';
				
					ob_start();
				
					if($header_elem_order_4=='wpml_btn'){
						naslaan_front_functions::naslaan_new_language_selector_flags();
					}elseif($header_elem_order_4=='message'){
						naslaan_front_functions::naslaan_header_message_block();
					}elseif($header_elem_order_4=='social'){
						naslaan_front_functions::naslaan_header_social_media();
					}elseif($header_elem_order_4=='shopping_cart'){
						naslaan_front_functions::naslaan_shopping_cart();
					}elseif($header_elem_order_4=='search'){
						naslaan_front_functions::naslaan_header_search_btn();
					}
					
					$f .= ob_get_clean();
				
				$f .= '</li>';
				
				}
				
				if($header_elem_order_5!='none'){
				
				$f .= '<li class="order-5">';
				
					ob_start();
				
					if($header_elem_order_5=='wpml_btn'){
						naslaan_front_functions::naslaan_new_language_selector_flags();
					}elseif($header_elem_order_5=='message'){
						naslaan_front_functions::naslaan_header_message_block();
					}elseif($header_elem_order_5=='social'){
						naslaan_front_functions::naslaan_header_social_media();
					}elseif($header_elem_order_5=='shopping_cart'){
						naslaan_front_functions::naslaan_shopping_cart();
					}elseif($header_elem_order_5=='search'){
						naslaan_front_functions::naslaan_header_search_btn();
					}
					
					$f .= ob_get_clean();
				
				$f .= '</li>';
				
				}
			
			}
			
			$f .= '</ul>';
				
			$f .= '</div>';
			

			
			echo $f;
			
		}
		
		public static function naslaan_left_bar() {
			
			$header_elem_order_1 = $header_elem_order_2 = $header_elem_order_3 = $header_elem_order_4 = $header_elem_order_5 = '';
			
			if( naslaan_helpers::naslaan_unyson_check() ) {
			
				$header_type = fw_get_db_settings_option('header_types/header_type');
			
				if($header_type=='center'){
					
					$navigation_variant = fw_get_db_settings_option('header_types/center/navigation_types/navigation_variant');
				
					if( $navigation_variant=='variant_1' ) {
						$header_elem_order_1 = fw_get_db_settings_option('header_types/center/navigation_types/variant_1/left_bar_order_1');
						$header_elem_order_2 = fw_get_db_settings_option('header_types/center/navigation_types/variant_1/left_bar_order_2');
						$header_elem_order_3 = fw_get_db_settings_option('header_types/center/navigation_types/variant_1/left_bar_order_3');
						$header_elem_order_4 = fw_get_db_settings_option('header_types/center/navigation_types/variant_1/left_bar_order_4');
						$header_elem_order_5 = fw_get_db_settings_option('header_types/center/navigation_types/variant_1/left_bar_order_5');
					}elseif( $navigation_variant=='variant_2' ){
						$header_elem_order_1 = fw_get_db_settings_option('header_types/center/navigation_types/variant_2/left_bar_order_1');
						$header_elem_order_2 = fw_get_db_settings_option('header_types/center/navigation_types/variant_2/left_bar_order_2');
						$header_elem_order_3 = fw_get_db_settings_option('header_types/center/navigation_types/variant_2/left_bar_order_3');
						$header_elem_order_4 = fw_get_db_settings_option('header_types/center/navigation_types/variant_2/left_bar_order_4');
						$header_elem_order_5 = fw_get_db_settings_option('header_types/center/navigation_types/variant_2/left_bar_order_5');
					}elseif( $navigation_variant=='variant_3' ){
						$header_elem_order_1 = fw_get_db_settings_option('header_types/center/navigation_types/variant_3/left_bar_order_1');
						$header_elem_order_2 = fw_get_db_settings_option('header_types/center/navigation_types/variant_3/left_bar_order_2');
						$header_elem_order_3 = fw_get_db_settings_option('header_types/center/navigation_types/variant_3/left_bar_order_3');
						$header_elem_order_4 = fw_get_db_settings_option('header_types/center/navigation_types/variant_3/left_bar_order_4');
						$header_elem_order_5 = fw_get_db_settings_option('header_types/center/navigation_types/variant_3/left_bar_order_5');
					}
					
				}
			

			}
		
			$f = '<div class="left-bar">';
			
			$f .= '<ul>';
			
			if($header_elem_order_5!='none'||$header_elem_order_4!='none'||$header_elem_order_3!='none'||$header_elem_order_2!='none'||$header_elem_order_1!='none'){
			
				if($header_elem_order_1!='none'){
				
				$f .= '<li class="order-1">';
				
					ob_start();
					
					if($header_elem_order_1=='wpml_btn'){
						naslaan_front_functions::naslaan_new_language_selector_flags();
					}elseif($header_elem_order_1=='message'){
						naslaan_front_functions::naslaan_header_message_block();
					}elseif($header_elem_order_1=='social'){
						naslaan_front_functions::naslaan_header_social_media();
					}elseif($header_elem_order_1=='shopping_cart'){
						naslaan_front_functions::naslaan_shopping_cart();
					}elseif($header_elem_order_1=='search'){
						naslaan_front_functions::naslaan_header_search_btn();
					}

					$f .= ob_get_clean();
				
				$f .= '</li>';
				
				}
				
				if($header_elem_order_2!='none'){
				
				$f .= '<li class="order-2">';
				
					ob_start();
				
					if($header_elem_order_2=='wpml_btn'){
						naslaan_front_functions::naslaan_new_language_selector_flags();
					}elseif($header_elem_order_2=='message'){
						naslaan_front_functions::naslaan_header_message_block();
					}elseif($header_elem_order_2=='social'){
						naslaan_front_functions::naslaan_header_social_media();
					}elseif($header_elem_order_2=='shopping_cart'){
						naslaan_front_functions::naslaan_shopping_cart();
					}elseif($header_elem_order_2=='search'){
						naslaan_front_functions::naslaan_header_search_btn();
					}
					
					$f .= ob_get_clean();
				
				$f .= '</li>';
				
				}
				
				if($header_elem_order_3!='none'){
				
				$f .= '<li class="order-3">';
				
					ob_start();
				
					if($header_elem_order_3=='wpml_btn'){
						naslaan_front_functions::naslaan_new_language_selector_flags();
					}elseif($header_elem_order_3=='message'){
						naslaan_front_functions::naslaan_header_message_block();
					}elseif($header_elem_order_3=='social'){
						naslaan_front_functions::naslaan_header_social_media();
					}elseif($header_elem_order_3=='shopping_cart'){
						naslaan_front_functions::naslaan_shopping_cart();
					}elseif($header_elem_order_3=='search'){
						naslaan_front_functions::naslaan_header_search_btn();
					}
					
					$f .= ob_get_clean();
				
				$f .= '</li>';
				
				}
				
				if($header_elem_order_4!='none'){
				
				$f .= '<li class="order-4">';
				
					ob_start();
				
					if($header_elem_order_4=='wpml_btn'){
						naslaan_front_functions::naslaan_new_language_selector_flags();
					}elseif($header_elem_order_4=='message'){
						naslaan_front_functions::naslaan_header_message_block();
					}elseif($header_elem_order_4=='social'){
						naslaan_front_functions::naslaan_header_social_media();
					}elseif($header_elem_order_4=='shopping_cart'){
						naslaan_front_functions::naslaan_shopping_cart();
					}elseif($header_elem_order_4=='search'){
						naslaan_front_functions::naslaan_header_search_btn();
					}
					
					$f .= ob_get_clean();
				
				$f .= '</li>';
				
				}
				
				if($header_elem_order_5!='none'){
				
				$f .= '<li class="order-5">';
				
					ob_start();
				
					if($header_elem_order_5=='wpml_btn'){
						naslaan_front_functions::naslaan_new_language_selector_flags();
					}elseif($header_elem_order_5=='message'){
						naslaan_front_functions::naslaan_header_message_block();
					}elseif($header_elem_order_5=='social'){
						naslaan_front_functions::naslaan_header_social_media();
					}elseif($header_elem_order_5=='shopping_cart'){
						naslaan_front_functions::naslaan_shopping_cart();
					}elseif($header_elem_order_5=='search'){
						naslaan_front_functions::naslaan_header_search_btn();
					}
					
					$f .= ob_get_clean();
				
				$f .= '</li>';
				
				}
			
			}
			
			$f .= '</ul>';
				
			$f .= '</div>';
			
			echo $f;
			
		}
		
		public static function naslaan_bottom_bar() {
			
			$header_elem_order_1 = $header_elem_order_2 = $header_elem_order_3 = $header_elem_order_4 = $header_elem_order_5 = '';
			
			if( naslaan_helpers::naslaan_unyson_check() ) {
			
				$header_type = fw_get_db_settings_option('header_types/header_type');
			
				if($header_type=='side'){

					$header_elem_order_1 = fw_get_db_settings_option('header_types/side/bottom_bar_order_1');
					$header_elem_order_2 = fw_get_db_settings_option('header_types/side/bottom_bar_order_2');
					$header_elem_order_3 = fw_get_db_settings_option('header_types/side/bottom_bar_order_3');
					$header_elem_order_4 = fw_get_db_settings_option('header_types/side/bottom_bar_order_4');
					$header_elem_order_5 = fw_get_db_settings_option('header_types/side/bottom_bar_order_5');
					
				}
			

			}
		
			$f = '<div class="bottom-bar">';
			
			$f .= '<ul>';
			
			if($header_elem_order_5!='none'||$header_elem_order_4!='none'||$header_elem_order_3!='none'||$header_elem_order_2!='none'||$header_elem_order_1!='none'){
			
				if($header_elem_order_1!='none'){
				
				$f .= '<li class="order-1">';
				
					ob_start();
					
					if($header_elem_order_1=='wpml_btn'){
						naslaan_front_functions::naslaan_new_language_selector_flags();
					}elseif($header_elem_order_1=='message'){
						naslaan_front_functions::naslaan_header_message_block();
					}elseif($header_elem_order_1=='social'){
						naslaan_front_functions::naslaan_header_social_media();
					}elseif($header_elem_order_1=='shopping_cart'){
						naslaan_front_functions::naslaan_shopping_cart();
					}elseif($header_elem_order_1=='search'){
						naslaan_front_functions::naslaan_header_search_btn();
					}

					$f .= ob_get_clean();
				
				$f .= '</li>';
				
				}
				
				if($header_elem_order_2!='none'){
				
				$f .= '<li class="order-2">';
				
					ob_start();
				
					if($header_elem_order_2=='wpml_btn'){
						naslaan_front_functions::naslaan_new_language_selector_flags();
					}elseif($header_elem_order_2=='message'){
						naslaan_front_functions::naslaan_header_message_block();
					}elseif($header_elem_order_2=='social'){
						naslaan_front_functions::naslaan_header_social_media();
					}elseif($header_elem_order_2=='shopping_cart'){
						naslaan_front_functions::naslaan_shopping_cart();
					}elseif($header_elem_order_2=='search'){
						naslaan_front_functions::naslaan_header_search_btn();
					}
					
					$f .= ob_get_clean();
				
				$f .= '</li>';
				
				}
				
				if($header_elem_order_3!='none'){
				
				$f .= '<li class="order-3">';
				
					ob_start();
				
					if($header_elem_order_3=='wpml_btn'){
						naslaan_front_functions::naslaan_new_language_selector_flags();
					}elseif($header_elem_order_3=='message'){
						naslaan_front_functions::naslaan_header_message_block();
					}elseif($header_elem_order_3=='social'){
						naslaan_front_functions::naslaan_header_social_media();
					}elseif($header_elem_order_3=='shopping_cart'){
						naslaan_front_functions::naslaan_shopping_cart();
					}elseif($header_elem_order_3=='search'){
						naslaan_front_functions::naslaan_header_search_btn();
					}
					
					$f .= ob_get_clean();
				
				$f .= '</li>';
				
				}
				
				if($header_elem_order_4!='none'){
				
				$f .= '<li class="order-4">';
				
					ob_start();
				
					if($header_elem_order_4=='wpml_btn'){
						naslaan_front_functions::naslaan_new_language_selector_flags();
					}elseif($header_elem_order_4=='message'){
						naslaan_front_functions::naslaan_header_message_block();
					}elseif($header_elem_order_4=='social'){
						naslaan_front_functions::naslaan_header_social_media();
					}elseif($header_elem_order_4=='shopping_cart'){
						naslaan_front_functions::naslaan_shopping_cart();
					}elseif($header_elem_order_4=='search'){
						naslaan_front_functions::naslaan_header_search_btn();
					}
					
					$f .= ob_get_clean();
				
				$f .= '</li>';
				
				}
				
				if($header_elem_order_5!='none'){
				
				$f .= '<li class="order-5">';
				
					ob_start();
				
					if($header_elem_order_5=='wpml_btn'){
						naslaan_front_functions::naslaan_new_language_selector_flags();
					}elseif($header_elem_order_5=='message'){
						naslaan_front_functions::naslaan_header_message_block();
					}elseif($header_elem_order_5=='social'){
						naslaan_front_functions::naslaan_header_social_media();
					}elseif($header_elem_order_5=='shopping_cart'){
						naslaan_front_functions::naslaan_shopping_cart();
					}elseif($header_elem_order_5=='search'){
						naslaan_front_functions::naslaan_header_search_btn();
					}
					
					$f .= ob_get_clean();
				
				$f .= '</li>';
				
				}
			
			}
			
			$f .= '</ul>';
				
			$f .= '</div>';
			
			echo $f;
			
		}
		
		public static function naslaan_slide_panel_toggle() {
			
			$f = '<div class="slide-panel-toggle"><span></span></div>';
			
			echo $f;
			
		}
		
		public static function naslaan_pageloader() {
		
			if( naslaan_helpers::naslaan_unyson_check() ) {
			
				$pageloader_visibility = fw_get_db_settings_option('pageloader_switch/pageloader_visibility');
				
				if($pageloader_visibility=='enabled'){
			
					$f = '<div class="lpd-loading-screen lpd-preloader">
					<div class="lpd-loading-inner">
					<div class="lpd-loading-center">
					<div class="lpd-loading-center-middle">
					<div class="lpd-loading-spinner">
					<div class="sk-double-bounce">
					<div class="sk-child sk-double-bounce1"></div>
					<div class="sk-child sk-double-bounce2"></div>
					</div>
					</div>
					</div>
					</div>
					</div>
					</div>';
					
					echo $f;
			
				}
			
			}
			
		}
		
		public static function naslaan_get_css_styles( $styles ) {
			
			$css_styles = '';
			
			if( isset( $styles['width'] ) && $styles['width'] <> '' ) {
				$css_styles .= 'width: ' . $styles['width'] .'px; ';
			}
			
			if( isset( $styles['height'] ) && $styles['height'] <> '' ) {
				$css_styles .= 'height: ' . $styles['height'] .'px; ';
			}
			
			if( isset( $styles['top_margin'] ) && $styles['top_margin'] <> '' ) {
				$css_styles .= 'margin-top: ' . $styles['top_margin'] .'px; ';
			}
			
			if( isset( $styles['right_margin'] ) && $styles['right_margin'] <> '' ) {
				$css_styles .= 'margin-right: ' . $styles['right_margin'] .'px; ';
			}
			
			if( isset( $styles['bottom_margin'] ) && $styles['bottom_margin'] <> '' ) {
				$css_styles .= 'margin-bottom: ' . $styles['bottom_margin'] .'px; ';
			}
			
			if( isset( $styles['left_margin'] ) && $styles['left_margin'] <> '' ) {
				$css_styles .= 'margin-left: ' . $styles['left_margin'] .'px; ';
			}
			
			if( isset( $styles['top_padding'] ) && $styles['top_padding'] <> '' ) {
				$css_styles .= 'padding-top: ' . $styles['top_padding'] .'px; ';
			}
			
			if( isset( $styles['right_padding'] ) && $styles['right_padding'] <> '' ) {
				$css_styles .= 'padding-right: ' . $styles['right_padding'] .'px; ';
			}
			
			if( isset( $styles['bottom_padding'] ) && $styles['bottom_padding'] <> '' ) {
				$css_styles .= 'padding-bottom: ' . $styles['bottom_padding'] .'px; ';
			}
			
			if( isset( $styles['left_padding'] ) && $styles['left_padding'] <> '' ) {
				$css_styles .= 'padding-left: ' . $styles['left_padding'] .'px;';
			}
			
			if( isset( $styles['top_border'] ) && $styles['top_border'] <> '' ) {
				$css_styles .= 'border-top-width: ' . $styles['top_border'] .'px; ';
			}
			
			if( isset( $styles['right_border'] ) && $styles['right_border'] <> '' ) {
				$css_styles .= 'border-right-width: ' . $styles['right_border'] .'px; ';
			}
			
			if( isset( $styles['bottom_border'] ) && $styles['bottom_border'] <> '' ) {
				$css_styles .= 'border-bottom-width: ' . $styles['bottom_border'] .'px; ';
			}
			
			return $css_styles;
			
		}
 		
 		public static function naslaan_page_title() {

			echo "<h2>";
			
			if( naslaan_helpers::naslaan_woocommerce_check() && ( is_shop() || is_product_category() || is_product_tag() || is_singular('product') ) ):
			
				$shop_title = esc_html__( 'Shop', 'naslaan' );
				if( naslaan_helpers::naslaan_unyson_check() && (fw_get_db_settings_option( 'shop_title' )!='') ) {
					$shop_title = fw_get_db_settings_option( 'shop_title' );
				}
				echo wp_kses_post( $shop_title );
			
			elseif(is_front_page() && is_home() ):
			
				if( naslaan_helpers::naslaan_unyson_check() ) {
					$blog_title = fw_get_db_settings_option( 'blog_title' );
				}else{
					$blog_title = get_bloginfo('description');
				}
				echo wp_kses_post( $blog_title );

			elseif( is_single('post') ):
			
				if( naslaan_helpers::naslaan_unyson_check() ) {
					$blog_title = fw_get_db_settings_option( 'blog_title' );
				}else{
					$blog_title = get_bloginfo('description');
				}
				echo wp_kses_post( $blog_title );
			
			elseif( is_home() ):
			
				if( naslaan_helpers::naslaan_unyson_check() ) {
					$blog_title = fw_get_db_settings_option( 'blog_title' );
				}else{
					$blog_title = get_bloginfo('description');
				}
				echo wp_kses_post( $blog_title );
			
			elseif( is_category() ):
			
				if( naslaan_helpers::naslaan_unyson_check() ) {
					$blog_title = fw_get_db_settings_option( 'blog_title' );
				}else{
					$blog_title = get_bloginfo('description');
				}
				echo wp_kses_post( $blog_title );
			
			elseif( is_tag() ):
			
				if( naslaan_helpers::naslaan_unyson_check() ) {
					$blog_title = fw_get_db_settings_option( 'blog_title' );
				}else{
					$blog_title = get_bloginfo('description');
				}
				echo wp_kses_post( $blog_title );
			
			elseif( is_archive()):
				
				if (naslaan_helpers::naslaan_event_calendar_check()&&tribe_is_event_query()){
					
					$events_title = esc_html__( 'Events', 'naslaan' );
					
					if( naslaan_helpers::naslaan_unyson_check() ) {
						$events_title = fw_get_db_settings_option( 'events_title' );
					}
					
					echo wp_kses_post( $events_title );
					
				}else{
					
					echo get_the_archive_title();
					
				}
			
			elseif( is_author() ):
			
				if( naslaan_helpers::naslaan_unyson_check() ) {
					$blog_title = fw_get_db_settings_option( 'blog_title' );
				}else{
					$blog_title = get_bloginfo('name');
				}
				echo wp_kses_post( $blog_title );
			
			elseif( is_404() ):
			
				esc_html_e( 'Page not found', 'naslaan' );
				
			elseif( is_search() ):
			
				esc_html_e( 'Search results', 'naslaan' );
				
			elseif( is_singular() ):
			
				single_post_title();
			
			endif;
			
			echo "</h2>";

		}
 		
 		public static function naslaan_page_title_desc() {

			$start = "<span class='title-description'>";
			
			$end = "</span>";
			
			if( naslaan_helpers::naslaan_woocommerce_check() && ( is_shop() || is_product_category() || is_product_tag() || is_singular('product') ) ){
			
				$value  = fw_get_db_settings_option( 'shop_description' );
				
				if($value!=''){
					echo $start;
					
					echo wp_kses_post( $value );
					
					echo $end;
				}
			}
			elseif(is_front_page() && is_home() ){
			
				$value  = fw_get_db_settings_option( 'blog_description' );
				
				if($value!=''){
					echo $start;
					
					echo wp_kses_post( $value );
					
					echo $end;
				}
			}	
			elseif( is_single() ){
			
				$value  = fw_get_db_post_option( get_the_ID(), 'title_description' );
				
				if($value!=''){
					echo $start;
					
					echo wp_kses_post( $value );
					
					echo $end;
				}
			}
			elseif( is_home() ){
			
				$value  = fw_get_db_settings_option( 'blog_description' );
				
				if($value!=''){
					echo $start;
					
					echo wp_kses_post( $value );
					
					echo $end;
				}
			}
			elseif( is_category() ){
			}
			elseif( is_tag() ){
			}
			elseif( is_archive()){
				
				if (naslaan_helpers::naslaan_event_calendar_check()&&tribe_is_event_query()){
					
					$value  = fw_get_db_post_option( get_the_ID(), 'events_description' );
					
					if($value!=''){
						echo $start;
						
						echo wp_kses_post( $value );
						
						echo $end;
					}
					
				}
			}
			elseif( is_author() ){
			}
			elseif( is_404() ){
			}
			elseif( is_search() ){
			}
			elseif( is_singular() ){
			
				echo $start;
			
				$value  = fw_get_db_post_option( get_the_ID(), 'title_description' );
				
				echo wp_kses_post( $value );
				
				echo $end;
			
			}
			


		}
 		
		public static function naslaan_header_search_btn() {
			
			$search_form_visibility = $search_button_visibility = $f = '';
		
			if( naslaan_helpers::naslaan_unyson_check() ) {
				$search_form_visibility = fw_get_db_settings_option('search_form/search_form_visibility');
				$search_button_visibility = fw_get_db_settings_option('search_form/enabled/search_button_visibility');
			}
			
			$search_button_visibility_class = '';
			
			if(isset($search_button_visibility['notebook'])!=''){
				$search_button_visibility_class .= ' hidden-md';
			}
			
			if(isset($search_button_visibility['tablet'])!=''){
				$search_button_visibility_class .= ' hidden-sm';
			}
			
			if(isset($search_button_visibility['mobile'])!=''){
				$search_button_visibility_class .= ' hidden-xs';
			}
			
			if($search_form_visibility=='enabled'){
				$f = '<div class="search-container'.esc_attr($search_button_visibility_class).'">';
				
					$f .= '<div class="search-btn">';
						$f .= '<div>';
							$f .= '<span class="icon icon-search"></span>';
						$f .= '</div>';
					$f .= '</div>';
					
				$f .= '</div>';
			}
			
			echo $f;
			
		}
		
		public static function naslaan_header_search_btn_sticky() {
			
			$search_form_visibility = $search_button_visibility = $f = '';
		
			if( naslaan_helpers::naslaan_unyson_check() ) {
				$search_form_visibility = fw_get_db_settings_option('sticky_header_switch/enabled/search_form/search_form_visibility');
				$search_button_visibility = fw_get_db_settings_option('sticky_header_switch/enabled/search_form/enabled/search_button_visibility');
			}
			
			$search_button_visibility_class = '';
			
			if(isset($search_button_visibility['notebook'])!=''){
				$search_button_visibility_class .= ' hidden-md';
			}
			
			if(isset($search_button_visibility['tablet'])!=''){
				$search_button_visibility_class .= ' hidden-sm';
			}
			
			if(isset($search_button_visibility['mobile'])!=''){
				$search_button_visibility_class .= ' hidden-xs';
			}
			
			if($search_form_visibility=='enabled'){
				$f = '<div class="search-container'.esc_attr($search_button_visibility_class).'">';
				
					$f .= '<div class="search-btn">';
						$f .= '<div>';
							$f .= '<span class="icon icon-search"></span>';
						$f .= '</div>';
					$f .= '</div>';
					
				$f .= '</div>';
			}
			
			echo $f;
			
		}
		
		public static function naslaan_header_message_block() {
		
			$msg_container_visibility = $msg_block_content = $msg_block_url = $msg_block_visibility = $f = '';
			
			if( naslaan_helpers::naslaan_unyson_check() ) {
				$msg_container_visibility = fw_get_db_settings_option('msg_container_visibility/msg_container_switch');
				$msg_block_content = fw_get_db_settings_option('msg_container_visibility/enabled/msg_block_content');
				$msg_block_url = fw_get_db_settings_option('msg_container_visibility/enabled/msg_block_url');
				$msg_block_visibility = fw_get_db_settings_option('msg_container_visibility/enabled/msg_block_visibility');
			}
			
			$msg_block_visibility_class = '';
			
			if(isset($msg_block_visibility['notebook'])!=''){
				$msg_block_visibility_class .= ' hidden-md';
			}
			
			if(isset($msg_block_visibility['tablet'])!=''){
				$msg_block_visibility_class .= ' hidden-sm';
			}
			
			if(isset($msg_block_visibility['mobile'])!=''){
				$msg_block_visibility_class .= ' hidden-xs';
			}

			if($msg_container_visibility=="enabled"){
				$f = '<div class="message-container'.esc_attr($msg_block_visibility_class).'">';
					$f .= '<div class="message-container-wrap">';
						
						if($msg_block_url){
							$f .= '<a href="'.esc_url($msg_block_url).'" class="message-block">';
						}else{
							$f .= '<div class="message-block">';
						}
						
						if($msg_block_content){ $f .= wp_kses_post($msg_block_content); }
						
						if($msg_block_url){ $f .= '</a>'; }else{ $f .= '</div>'; }
						
					$f .= '</div>';
				$f .= '</div>';
			}

			echo $f;
			
		}
		
		public static function naslaan_header_message_block_sticky() {
		
			$msg_container_visibility = $msg_block_content = $msg_block_url = $msg_block_visibility = $f = '';
			
			if( naslaan_helpers::naslaan_unyson_check() ) {
				$msg_container_visibility = fw_get_db_settings_option('sticky_header_switch/enabled/msg_container_visibility/msg_container_switch');
				$msg_block_content = fw_get_db_settings_option('sticky_header_switch/enabled/msg_container_visibility/enabled/msg_block_content');
				$msg_block_url = fw_get_db_settings_option('sticky_header_switch/enabled/msg_container_visibility/enabled/msg_block_url');
				$msg_block_visibility = fw_get_db_settings_option('sticky_header_switch/enabled/msg_container_visibility/enabled/msg_block_visibility');
			}
			
			$msg_block_visibility_class = '';
			
			if(isset($msg_block_visibility['notebook'])!=''){
				$msg_block_visibility_class .= ' hidden-md';
			}
			
			if(isset($msg_block_visibility['tablet'])!=''){
				$msg_block_visibility_class .= ' hidden-sm';
			}
			
			if(isset($msg_block_visibility['mobile'])!=''){
				$msg_block_visibility_class .= ' hidden-xs';
			}

			if($msg_container_visibility=="enabled"){
				$f = '<div class="message-container'.esc_attr($msg_block_visibility_class).'">';
					$f .= '<div class="message-container-wrap">';
						
						if($msg_block_url){
							$f .= '<a href="'.esc_url($msg_block_url).'" class="message-block">';
						}else{
							$f .= '<div class="message-block">';
						}
						
						if($msg_block_content){ $f .= wp_kses_post($msg_block_content); }
						
						if($msg_block_url){ $f .= '</a>'; }else{ $f .= '</div>'; }
						
					$f .= '</div>';
				$f .= '</div>';
			}

			echo $f;
			
		}
		
		public static function naslaan_header_social_media() {
		
			ob_start();
			
			get_template_part('includes/header_social_media');
			
			echo ob_get_clean();
			
		}
		
		public static function naslaan_widgets_social_media() {
		
			ob_start();
			
			get_template_part('includes/widgets_social_media');
			
			echo ob_get_clean();
			
		}
		
		public static function naslaan_header_social_media_sticky() {
		
			if( naslaan_helpers::naslaan_unyson_check() ) {
				$sticky_social_media_visibility = fw_get_db_settings_option('sticky_header_switch/enabled/header_social_media_picker/social_media_visibility');
			}
			
			if($sticky_social_media_visibility=='enabled'){
		
				ob_start();
				
				get_template_part('includes/header_social_media');
				
				echo ob_get_clean();
				
			}

		}
 		
		public static function naslaan_shopping_cart() {
		
			$header_types = $shopping_cart_alternative = $shopping_cart_button_visibility = $shopping_cart_dropdown_border_switch = '';
		
			if( naslaan_helpers::naslaan_unyson_check() ) {
				$shopping_cart_visibility = fw_get_db_settings_option('shopping_cart/shopping_cart_visibility');
				$shopping_cart_alternative = fw_get_db_settings_option('shopping_cart/enabled/shopping_cart_alternative/shopping_cart_alternative_switch');
				$shopping_cart_button_visibility = fw_get_db_settings_option('shopping_cart/enabled/shopping_cart_button_visibility');
				$shopping_cart_dropdown_border_switch = fw_get_db_settings_option('shopping_cart_dropdown_border/shopping_cart_dropdown_border_switch');
				$header_types = fw_get_db_settings_option('header_types/header_type');
			}

			$shopping_cart_button_visibility_class = '';
			
			if(isset($shopping_cart_button_visibility['notebook'])!=''){
				$shopping_cart_button_visibility_class .= ' hidden-md';
			}
			
			if(isset($shopping_cart_button_visibility['tablet'])!=''){
				$shopping_cart_button_visibility_class .= ' hidden-sm';
			}
			
			if(isset($shopping_cart_button_visibility['mobile'])!=''){
				$shopping_cart_button_visibility_class .= ' hidden-xs';
			}
			
			$shopping_cart_dropdown_border = '';
			
			if($shopping_cart_dropdown_border_switch == 'enabled'){
				$shopping_cart_dropdown_border = ' shopping-cart-dropdown-border';
			}
				
			if( naslaan_helpers::naslaan_woocommerce_check() ) {
				if( $shopping_cart_visibility == "enabled" ) {
	
				echo "<div class='shopping-cart-container woocommerce" .esc_attr($shopping_cart_button_visibility_class). "" .esc_attr($shopping_cart_dropdown_border). "'>";
					echo "<div class='shopping-cart-btn-wrap'>";
						echo "<a href='".esc_url(WC()->cart->get_cart_url())."' class='shopping-cart-btn";
						if($shopping_cart_alternative=='enabled'){
							echo " shopping-cart-btn-type-1";
						}
						echo "'>";
							echo "<span class='shopping-cart-btn-content'><span>";
								echo '<span class="icon icon-shopping-cart-2"></span>';
								echo '<span class="count">'.esc_html(WC()->cart->get_cart_contents_count()).'</span>';
							echo "</span></span>";
						echo "</a>";
						if($header_types!='side'){
						naslaan_front_functions::naslaan_shopping_cart_dropdown();
						}
					echo "</div>";
				echo "</div>";
				
				}
			}
			
		}
		
		public static function naslaan_shopping_cart_sticky() {
		
			$shopping_cart_alternative = $shopping_cart_button_visibility = $shopping_cart_dropdown_border_switch = '';
		
			if( naslaan_helpers::naslaan_unyson_check() ) {
				$shopping_cart_visibility = fw_get_db_settings_option('sticky_header_switch/enabled/shopping_cart/shopping_cart_visibility');
				$shopping_cart_alternative = fw_get_db_settings_option('sticky_header_switch/enabled/shopping_cart/enabled/shopping_cart_alternative/shopping_cart_alternative_switch');
				$shopping_cart_button_visibility = fw_get_db_settings_option('sticky_header_switch/enabled/shopping_cart/enabled/shopping_cart_button_visibility');
				$shopping_cart_dropdown_border_switch = fw_get_db_settings_option('sticky_header_switch/enabled/shopping_cart_dropdown_border/shopping_cart_dropdown_border_switch');
			}

			$shopping_cart_button_visibility_class = '';
			
			if(isset($shopping_cart_button_visibility['notebook'])!=''){
				$shopping_cart_button_visibility_class .= ' hidden-md';
			}
			
			if(isset($shopping_cart_button_visibility['tablet'])!=''){
				$shopping_cart_button_visibility_class .= ' hidden-sm';
			}
			
			if(isset($shopping_cart_button_visibility['mobile'])!=''){
				$shopping_cart_button_visibility_class .= ' hidden-xs';
			}
			
			$shopping_cart_dropdown_border = '';
			
			if($shopping_cart_dropdown_border_switch == 'enabled'){
				$shopping_cart_dropdown_border = ' shopping-cart-dropdown-border';
			}
				
			if( naslaan_helpers::naslaan_woocommerce_check() ) {
				if( $shopping_cart_visibility == "enabled" ) {
	
				echo "<div class='shopping-cart-container woocommerce" .esc_attr($shopping_cart_button_visibility_class). "" .esc_attr($shopping_cart_dropdown_border). "'>";
					echo "<div class='shopping-cart-btn-wrap'>";
						echo "<a href='".esc_url(WC()->cart->get_cart_url())."' class='shopping-cart-btn";
						if($shopping_cart_alternative=='enabled'){
							echo " shopping-cart-btn-type-1";
						}
						echo "'>";
							echo "<span class='shopping-cart-btn-content'><span>";
								echo '<span class="icon icon-shopping-cart-2"></span>';
								echo '<span class="count">'.esc_html(WC()->cart->get_cart_contents_count()).'</span>';
							echo "</span></span>";
						echo "</a>";
						naslaan_front_functions::naslaan_shopping_cart_dropdown();
					echo "</div>";
				echo "</div>";
				
				}
			}
			
		}
		
		public static function naslaan_shopping_cart_dropdown() {
			echo "<div class='shopping-cart-dropdown'>";
				if ( sizeof( WC()->cart->get_cart() ) > 0 ) :
					foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
					
						$product     = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
						$product_id   = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );
						
						if ( $product && $product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_widget_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
						
							$product_name = apply_filters( 'woocommerce_cart_item_name', $product->get_title(), $cart_item, $cart_item_key );
							$product_thumbnail = apply_filters( 'woocommerce_cart_item_thumbnail', $product->get_image(), $cart_item, $cart_item_key );
							$product_price = apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $product ), $cart_item, $cart_item_key );
						
							echo "<div class='items'>";
								echo "<div class='item clearfix'>";
										echo "<a href='".esc_url(get_permalink( $product_id ))."'>".$product_name."".$product_thumbnail."</a>";
										echo apply_filters( 'woocommerce_widget_cart_item_quantity', '<span class="quantity">' . sprintf( '%s &times; %s', $cart_item['quantity'], $product_price ) . '</span>', $cart_item, $cart_item_key );;
								echo "</div>";
							echo "</div>";
						}
					}
				else :
					echo "<p class='empty'>".esc_html__( 'No products in the cart.', 'naslaan' )."</p>";
				endif;
				echo "<div class='shopping-cart-subtotal clearfix'><strong>".esc_html__( 'Subtotal:', 'naslaan' )."</strong><span class='amount'>".WC()->cart->get_cart_subtotal()."</span></div>";
				echo "<div class='shopping-cart-navigation clearfix'>";
					echo "<a href='".esc_url(WC()->cart->get_cart_url())."' class='button'><span>".esc_html__( 'View Cart', 'naslaan' )."</span></a>";
					echo "<a href='".esc_url(WC()->cart->get_checkout_url())."' class='button alt'><span>".esc_html__( 'Checkout', 'naslaan' )."</span></a>";
				echo "</div>";
			echo "</div>";
		}
		
		function naslaan_shopping_cart_count_fragments( $fragments ) {
			global $woocommerce;
			ob_start();
			
			echo '<span class="count">'.esc_html(WC()->cart->get_cart_contents_count()).'</span>';
			
			$fragments['.shopping-cart-btn-content .count'] = ob_get_clean();
			return $fragments;
		}
					
		function naslaan_shopping_cart_dropdown_fragments( $fragments ) {
			global $woocommerce;
			ob_start();
			
			naslaan_front_functions::naslaan_shopping_cart_dropdown();
			
			$fragments['.shopping-cart-dropdown'] = ob_get_clean();
			return $fragments;
		}
		
		public static function naslaan_language_selector_flags(){
		
			$wpml_container_switch = $wpml_btn_visibility_class ='';
			
			if( naslaan_helpers::naslaan_unyson_check() ) {
				$wpml_container_switch = fw_get_db_settings_option('wpml_container_visibility/wpml_container_switch');
				$wpml_btn_visibility = fw_get_db_settings_option('wpml_container_visibility/enabled/wpml_btn_visibility');
			}
			
			$wpml_btn_visibility_class = '';
			
			if(isset($wpml_btn_visibility['notebook'])!=''){
				$wpml_btn_visibility_class .= ' hidden-md';
			}
			
			if(isset($wpml_btn_visibility['tablet'])!=''){
				$wpml_btn_visibility_class .= ' hidden-sm';
			}
			
			if(isset($wpml_btn_visibility['mobile'])!=''){
				$wpml_btn_visibility_class .= ' hidden-xs';
			}
		
			if( naslaan_helpers::naslaan_wpml_check() ) {
				if($wpml_container_switch=="enabled"){
				echo '<div class="wpml-container'.esc_attr($wpml_btn_visibility_class).'">';
					echo '<div class="wpml-btn-wrap">';
	
			    $languages = icl_get_languages('skip_missing=0&orderby=code');
			    
			    if(!empty($languages)){
			        foreach($languages as $l){
			        
			        	if($l['active']) echo '<a href="#" class="wpml-btn"><span><img title="'.esc_attr($l['translated_name']).'" src="'.esc_attr($l['country_flag_url']).'" alt="'.esc_attr($l['language_code']).'" height="12"/>'.esc_html($l['language_code']).'</span></a>';
			        
			        }
			    }
			    
			    echo '<div class="wpml-dropdown">';
					echo '<ul>';
				    if(!empty($languages)){
				        foreach($languages as $l){
				        if(!$l['active']) echo '<li>';
				            if(!$l['active']) echo '<a href="'.esc_url($l['url']).'">';
				            if(!$l['active']) echo '<img title="'.esc_attr($l['translated_name']).'" src="'.esc_attr($l['country_flag_url']).'" alt="'.esc_attr($l['language_code']).'" height="12"/>';
				            if(!$l['active']) echo ''.esc_html($l['translated_name']).'';
				            if(!$l['active']) echo '</a>';
				        if(!$l['active']) echo '</li>';
				        }
				    } 
				    echo '</ul>';
			    echo '</div>';
			    
					echo '</div>';
				echo '</div>';
				}
			}
		    
		    
		}
		
		public static function naslaan_new_language_selector_flags(){
		
			$wpml_container_switch = $wpml_btn_visibility_class ='';
			
			if( naslaan_helpers::naslaan_unyson_check() ) {
				$wpml_container_switch = fw_get_db_settings_option('wpml_container_visibility/wpml_container_switch');
				$wpml_btn_visibility = fw_get_db_settings_option('wpml_container_visibility/enabled/wpml_btn_visibility');
			}
			
			$wpml_btn_visibility_class = '';
			
			if(isset($wpml_btn_visibility['notebook'])!=''){
				$wpml_btn_visibility_class .= ' hidden-md';
			}
			
			if(isset($wpml_btn_visibility['tablet'])!=''){
				$wpml_btn_visibility_class .= ' hidden-sm';
			}
			
			if(isset($wpml_btn_visibility['mobile'])!=''){
				$wpml_btn_visibility_class .= ' hidden-xs';
			}
		
			if( naslaan_helpers::naslaan_wpml_check() ) {
				if($wpml_container_switch=="enabled"){
				echo '<div class="wpml-container-1'.esc_attr($wpml_btn_visibility_class).'">';
		
	
			    $languages = icl_get_languages('skip_missing=0&orderby=code');
			    
			    if(!empty($languages)){
			        foreach($languages as $l){
			        
						if($l['active']) echo '<a href="#" title="'.esc_attr($l['translated_name']).'" class="wpml-button"><span class="wpml-button-lg-code">'.esc_attr($l['language_code']).'</span><span style="background-image:url('.esc_attr($l['country_flag_url']).');" class="wpml-button-flag"></span></a>';
			        
			        }
			    }
			    
				echo '</div>';
				}
			}
		    
		    
		}
		
		public static function naslaan_language_selector_flags_sticky(){
		
			$wpml_container_switch = $wpml_btn_visibility_class ='';
			
			if( naslaan_helpers::naslaan_unyson_check() ) {
				$wpml_container_switch = fw_get_db_settings_option('sticky_header_switch/enabled/wpml_container_visibility/wpml_container_switch');
				$wpml_btn_visibility = fw_get_db_settings_option('sticky_header_switch/enabled/wpml_container_visibility/enabled/wpml_btn_visibility');
			}
			
			$wpml_btn_visibility_class = '';
			
			if(isset($wpml_btn_visibility['notebook'])!=''){
				$wpml_btn_visibility_class .= ' hidden-md';
			}
			
			if(isset($wpml_btn_visibility['tablet'])!=''){
				$wpml_btn_visibility_class .= ' hidden-sm';
			}
			
			if(isset($wpml_btn_visibility['mobile'])!=''){
				$wpml_btn_visibility_class .= ' hidden-xs';
			}
		
			if( naslaan_helpers::naslaan_wpml_check() ) {
				if($wpml_container_switch=="enabled"){
				echo '<div class="wpml-container'.esc_attr($wpml_btn_visibility_class).'">';
					echo '<div class="wpml-btn-wrap">';
	
			    $languages = icl_get_languages('skip_missing=0&orderby=code');
			    
			    if(!empty($languages)){
			        foreach($languages as $l){
			        
			        	if($l['active']) echo '<a href="#" class="wpml-btn"><span><img title="'.esc_attr($l['translated_name']).'" src="'.esc_attr($l['country_flag_url']).'" alt="'.esc_attr($l['language_code']).'" height="12"/>'.esc_html($l['language_code']).'</span></a>';
			        
			        }
			    }
			    
			    echo '<div class="wpml-dropdown">';
					echo '<ul>';
				    if(!empty($languages)){
				        foreach($languages as $l){
				        if(!$l['active']) echo '<li>';
				            if(!$l['active']) echo '<a href="'.esc_url($l['url']).'">';
				            if(!$l['active']) echo '<img title="'.esc_attr($l['translated_name']).'" src="'.esc_attr($l['country_flag_url']).'" alt="'.esc_attr($l['language_code']).'" height="12"/>';
				            if(!$l['active']) echo ''.esc_html($l['translated_name']).'';
				            if(!$l['active']) echo '</a>';
				        if(!$l['active']) echo '</li>';
				        }
				    } 
				    echo '</ul>';
			    echo '</div>';
			    
					echo '</div>';
				echo '</div>';
				}
			}
		    
		}
		
		public static function naslaan_new_language_selector_flags_sticky(){
		
			$wpml_container_switch = $wpml_btn_visibility_class ='';
			
			if( naslaan_helpers::naslaan_unyson_check() ) {
				$wpml_container_switch = fw_get_db_settings_option('sticky_header_switch/enabled/wpml_container_visibility/wpml_container_switch');
				$wpml_btn_visibility = fw_get_db_settings_option('sticky_header_switch/enabled/wpml_container_visibility/enabled/wpml_btn_visibility');
			}
			
			$wpml_btn_visibility_class = '';
			
			if(isset($wpml_btn_visibility['notebook'])!=''){
				$wpml_btn_visibility_class .= ' hidden-md';
			}
			
			if(isset($wpml_btn_visibility['tablet'])!=''){
				$wpml_btn_visibility_class .= ' hidden-sm';
			}
			
			if(isset($wpml_btn_visibility['mobile'])!=''){
				$wpml_btn_visibility_class .= ' hidden-xs';
			}
		
			if( naslaan_helpers::naslaan_wpml_check() ) {
				if($wpml_container_switch=="enabled"){
				echo '<div class="wpml-container-1'.esc_attr($wpml_btn_visibility_class).'">';
		
	
			    $languages = icl_get_languages('skip_missing=0&orderby=code');
			    
			    if(!empty($languages)){
			        foreach($languages as $l){
			        
			        	if($l['active']) echo '<a href="#" title="'.esc_attr($l['translated_name']).'" class="wpml-button"></span><span class="wpml-button-lg-code">'.esc_attr($l['language_code']).'</span><span style="background-image:url('.esc_attr($l['country_flag_url']).');" class="wpml-button-flag"></a>';
			        
			        }
			    }
			    
				echo '</div>';
				}
			}
		    
		    
		}
		
		public static function naslaan_get_categories( $separator = ', ' ) {
			
			$post_type = get_post_type();
			
			if($post_type=='post'){
				return get_the_category_list( $separator );
			}elseif($post_type=='fw-portfolio'){
				return get_the_term_list( get_the_ID(), 'fw-portfolio-category', '', $separator, '' );
			}
			
		}

		public static function naslaan_read_more_link() {
			return '<a class="lpd_t_btn lpd_t_btn-animated lpd_t_btn-lg" href="' . esc_url(get_permalink()) . '">'. esc_html__('Read More', 'naslaan'). '</a>';
		}
		
		function naslaan_excerpt_length( $length ) {
			return 55;
		}
		
		static function naslaan_excerpt($limit) {
			$excerpt = explode(' ', get_the_excerpt(), $limit);
			if (count($excerpt)>=$limit) {
				array_pop($excerpt);
				$excerpt = implode(" ",$excerpt).' [...]';
			} else {
				$excerpt = implode(" ",$excerpt);
			}
			$excerpt = preg_replace('`[[^]]*]`','',$excerpt);
			return '<p>'.$excerpt.'</p>';
		}
		
		public static function naslaan_get_youtube_url( $content ) {
			
			preg_match_all(
			    "/\s*[a-zA-Z\/\/:\.]*youtube.com\/watch\?v=([a-zA-Z0-9\-_]+)([a-zA-Z0-9\/\*\-\_\?\&\;\%\=\.]*)/i",
			    $content,
			    $matches
			);
			if (isset($matches[0][0])) {
				return $matches[0][0];
			} 
		}
		
		public static function naslaan_get_youtube_id( $url ) {
	    	$video_id = false;
		    $url = parse_url($url);
		    if ( isset( $url['host'] ) && strcasecmp($url['host'], 'youtu.be') === 0) {
		        $video_id = substr($url['path'], 1);
		    }
		    elseif ( isset( $url['host'] ) && strcasecmp($url['host'], 'www.youtube.com') === 0) {
		        if (isset($url['query'])) {
		          parse_str($url['query'], $url['query']);
		          if (isset($url['query']['v'])) {
		
		            $video_id = $url['query']['v'];
		          }
		        }
		        if ($video_id == false) {
		          $url['path'] = explode('/', substr($url['path'], 1));
		          if (in_array($url['path'][0], array('e', 'embed', 'v'))) {
		            $video_id = $url['path'][1];
		          }
		        }
		    }
	    	return $video_id;
		}
		
		function naslaan_cat_count($links) {
			$links = str_replace('(', '<span class="countWrap">', $links);
			$links = str_replace(')', '</span>', $links);
			return $links;
		}
		
		function naslaan_add_excerpt_fw_portfolio() {
			add_post_type_support( 'fw-portfolio', 'excerpt' );
		}
		
		function naslaan_widget_search_form( $form ) {
		    $form = '<form role="search" method="get" class="search-form" action="' . esc_url(home_url('/')) . '" >
			    <label><span class="screen-reader-text">' . esc_html__( 'Search for:', 'naslaan' ) . '</span>
			        <input type="search" class="search-field"
			            placeholder="' . esc_html__( 'Search For', 'naslaan' ) . '"
			            value="' . get_search_query() . '" name="s"
			            title="' . esc_html__( 'Search for:', 'naslaan' ) . '" />
			    </label>
			    <button hidden="hidden" type="submit" id="search-submit"></button>
			    
			</form>';
		 
		    return $form;
		}
		
		function naslaan_page_template( $page_templates ) {
		    if( !naslaan_helpers::naslaan_revslider_check() ) {
		    	unset( $page_templates['slider-template.php'] );
		    }
		    return $page_templates;
		}
		
		function naslaan_breadcrumbs_items( $items ) {
		
		if ( ! empty( $items ) ) : ?>
			<div class="breadcrumb">
				<?php
				$you_are_here = '';
				 if($you_are_here) : ?>
					<span><?php echo esc_html('You Are Here:', 'naslaan' ); ?></span>
				<?php endif ?>
				<ul class="clearfix">
					<?php for ( $i = 0; $i < count( $items ); $i ++ ) : ?>
						<?php if ( $i == ( count( $items ) - 1 ) ) : ?>
							<li class="breadcrumb-title last-item<?php if ( count( $items ) == 1 ) : ?> only-one-item<?php endif ?>"><?php echo esc_html($items[ $i ]['name']) ?></li>
						<?php elseif ( $i == 0 ) : ?>
							<li class="parent first-item<?php if ( $i == ( count( $items ) - 2 ) ) : ?> last-parent<?php endif ?>">
							<?php if( isset( $items[ $i ]['url'] ) ) : ?>
								<a href="<?php echo esc_url($items[ $i ]['url']) ?>"><?php echo esc_html($items[ $i ]['name']) ?></a><i>/</i>
							<?php else : echo esc_html($items[ $i ]['name']); endif ?>
							</li>
						<?php
						else : ?>
							<li class="parent <?php echo( $i - 1 ) ?>-item<?php if ( $i == ( count( $items ) - 2 ) ) : ?> last-parent<?php endif ?>">
								<?php if( isset( $items[ $i ]['url'] ) ) : ?>
									<a href="<?php echo esc_url($items[ $i ]['url']) ?>"><?php echo esc_html($items[ $i ]['name']) ?></a><i>/</i>
								<?php else : echo esc_html($items[ $i ]['name']); endif ?>
							</li>
						<?php endif ?>
					<?php endfor ?>
				</ul>
			</div>
		<?php endif; 
		    
		}
		
		public static function naslaan_comments_callback( $comment, $args, $depth) {
			$GLOBALS['comment'] = $comment;
			switch ( $comment->comment_type ) :
				case 'pingback' :
				case 'trackback' :
				// Display trackbacks differently than normal comments.
			?>
			<li <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">
				<p><?php esc_html_e( 'Pingback:', 'naslaan' ); ?> <?php comment_author_link(); ?> <?php edit_comment_link( esc_html__( '(Edit)', 'naslaan' ), '<span class="edit-link">', '</span>' ); ?></p>
			<?php
					break;
				default :
				// Proceed with normal comments.
				global $post;
			?>
			<li <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">
				<div class="comment-wrap">
					<div class="avatar-wrap">
						<?php echo get_avatar( $comment, 60 ); ?>
					</div>
					<div class="comment-content">
					
						<div class="comment-meta">
							<ul>
								<li class="author"><?php echo get_comment_author_link(); ?></li>
								<li class="posted-on"><?php esc_html_e('posted on', 'naslaan' ) ?> <?php echo esc_html(get_comment_date())?></li>
							</ul>
							<div class="reply">
								<?php comment_reply_link( array_merge( $args, array( 'reply_text' => esc_html__( 'Reply', 'naslaan' ), 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
							</div>
							
						</div>
						<?php comment_text(); ?>
						<?php edit_comment_link( esc_html__( 'Edit', 'naslaan' ), '<p class="edit-link">', '</p>' ); ?>
					</div>
				</div>
			<?php
				break;
			endswitch; // end comment_type check
		}
		
		function naslaan_load_google_fonts(){
		
			if (!defined('FW')) return;

		    $body_font = fw_get_db_settings_option('body_font');
			if($body_font['variation']!=''){
				$family = $body_font['family'].':'.$body_font['variation'];
				naslaan_enqueue_font(sanitize_title($family), array( "family"  => array($family), "subset"  => array($body_font['subset'])) );
			}
			
		    $headings_font = fw_get_db_settings_option('headings_font');
			if($headings_font['variation']!=''){
				$family = $headings_font['family'].':'.$headings_font['variation'];
				naslaan_enqueue_font(sanitize_title($family), array( "family"  => array($family), "subset"  => array($headings_font['subset'])) );
			}
			
		    $btn_text = fw_get_db_settings_option('btn_text');
			if($btn_text['variation']!=''){
				$family = $btn_text['family'].':'.$btn_text['variation'];
				naslaan_enqueue_font(sanitize_title($family), array( "family"  => array($family), "subset"  => array($btn_text['subset'])) );
			}
			
		    $form_label_font = fw_get_db_settings_option('form_label_font');
			if($form_label_font['variation']!=''){
				$family = $form_label_font['family'].':'.$form_label_font['variation'];
				naslaan_enqueue_font(sanitize_title($family), array( "family"  => array($family), "subset"  => array($form_label_font['subset'])) );
			}
			
		    $widget_title_font = fw_get_db_settings_option('widget_title_font');
			if($widget_title_font['variation']!=''){
				$family = $widget_title_font['family'].':'.$widget_title_font['variation'];
				naslaan_enqueue_font(sanitize_title($family), array( "family"  => array($family), "subset"  => array($widget_title_font['subset'])) );
			}
			
		    $tag_widget_title_font = fw_get_db_settings_option('tag_widget_title_font');
			if($tag_widget_title_font['variation']!=''){
				$family = $body_font['family'].':'.$tag_widget_title_font['variation'];
				naslaan_enqueue_font(sanitize_title($family), array( "family"  => array($family), "subset"  => array($tag_widget_title_font['subset'])) );
			}
			
		    $mini_table_font = fw_get_db_settings_option('mini_table_font');
			if($mini_table_font['variation']!=''){
				$family = $mini_table_font['family'].':'.$mini_table_font['variation'];
				naslaan_enqueue_font(sanitize_title($family), array( "family"  => array($family), "subset"  => array($mini_table_font['subset'])) );
			}
			
		    $mini_table_selected_font = fw_get_db_settings_option('mini_table_selected_font');
			if($mini_table_selected_font['variation']!=''){
				$family = $mini_table_selected_font['family'].':'.$mini_table_selected_font['variation'];
				naslaan_enqueue_font(sanitize_title($family), array( "family"  => array($family), "subset"  => array($mini_table_selected_font['subset'])) );
			}
			
		    $custom_menu_title_font = fw_get_db_settings_option('custom_menu_title_font');
			if($custom_menu_title_font['variation']!=''){
				$family = $custom_menu_title_font['family'].':'.$custom_menu_title_font['variation'];
				naslaan_enqueue_font(sanitize_title($family), array( "family"  => array($family), "subset"  => array($custom_menu_title_font['subset'])) );
			}
			
		    $search_page_title = fw_get_db_settings_option('search_page_title');
			if($search_page_title['variation']!=''){
				$family = $search_page_title['family'].':'.$search_page_title['variation'];
				naslaan_enqueue_font(sanitize_title($family), array( "family"  => array($family), "subset"  => array($search_page_title['subset'])) );
			}
			
		    $menu_button_text = fw_get_db_settings_option('menu_button_text');
			if($menu_button_text['variation']!=''){
				$family = $menu_button_text['family'].':'.$menu_button_text['variation'];
				naslaan_enqueue_font(sanitize_title($family), array( "family"  => array($family), "subset"  => array($menu_button_text['subset'])) );
			}
			
		    $dropdown_font = fw_get_db_settings_option('dropdown_font');
			if($dropdown_font['variation']!=''){
				$family = $dropdown_font['family'].':'.$dropdown_font['variation'];
				naslaan_enqueue_font(sanitize_title($family), array( "family"  => array($family), "subset"  => array($dropdown_font['subset'])) );
			}
			
		    $dropdown_title_font = fw_get_db_settings_option('dropdown_title_font');
			if($dropdown_title_font['variation']!=''){
				$family = $dropdown_title_font['family'].':'.$dropdown_title_font['variation'];
				naslaan_enqueue_font(sanitize_title($family), array( "family"  => array($family), "subset"  => array($dropdown_title_font['subset'])) );
			}
			
		    $msg_block_text = fw_get_db_settings_option('msg_container_visibility/enabled/msg_block_text');
			if($msg_block_text['variation']!=''){
				$family = $msg_block_text['family'].':'.$msg_block_text['variation'];
				naslaan_enqueue_font(sanitize_title($family), array( "family"  => array($family), "subset"  => array($msg_block_text['subset'])) );
			}
			
		    $wpml_btn_font = fw_get_db_settings_option('wpml_container_visibility/enabled/wpml_btn_font');
			if($wpml_btn_font['variation']!=''){
				$family = $wpml_btn_font['family'].':'.$wpml_btn_font['variation'];
				naslaan_enqueue_font(sanitize_title($family), array( "family"  => array($family), "subset"  => array($wpml_btn_font['subset'])) );
			}
			
		    $header_top_block_title_text_1 = fw_get_db_settings_option('header_top_switch/enabled/header_top_block_1_switch/enabled/header_top_block_title_text');
			if($header_top_block_title_text_1['variation']!=''){
				$family = $header_top_block_title_text_1['family'].':'.$header_top_block_title_text_1['variation'];
				naslaan_enqueue_font(sanitize_title($family), array( "family"  => array($family), "subset"  => array($header_top_block_title_text_1['subset'])) );
			}
			
		    $header_top_block_desc_text_1 = fw_get_db_settings_option('header_top_switch/enabled/header_top_block_1_switch/enabled/header_top_block_desc_text');
			if($header_top_block_desc_text_1['variation']!=''){
				$family = $header_top_block_desc_text_1['family'].':'.$header_top_block_desc_text_1['variation'];
				naslaan_enqueue_font(sanitize_title($family), array( "family"  => array($family), "subset"  => array($header_top_block_desc_text_1['subset'])) );
			}
			
		    $header_top_block_title_text_2 = fw_get_db_settings_option('header_top_switch/enabled/header_top_block_2_switch/enabled/header_top_block_title_text');
			if($header_top_block_title_text_2['variation']!=''){
				$family = $header_top_block_title_text_2['family'].':'.$header_top_block_title_text_2['variation'];
				naslaan_enqueue_font(sanitize_title($family), array( "family"  => array($family), "subset"  => array($header_top_block_title_text_2['subset'])) );
			}
			
		    $header_top_block_desc_text_2 = fw_get_db_settings_option('header_top_switch/enabled/header_top_block_2_switch/enabled/header_top_block_desc_text');
			if($header_top_block_desc_text_2['variation']!=''){
				$family = $header_top_block_desc_text_2['family'].':'.$header_top_block_desc_text_2['variation'];
				naslaan_enqueue_font(sanitize_title($family), array( "family"  => array($family), "subset"  => array($header_top_block_desc_text_2['subset'])) );
			}
			
		    $header_top_block_title_text_3 = fw_get_db_settings_option('header_top_switch/enabled/header_top_block_3_switch/enabled/header_top_block_title_text');
			if($header_top_block_title_text_3['variation']!=''){
				$family = $header_top_block_title_text_3['family'].':'.$header_top_block_title_text_3['variation'];
				naslaan_enqueue_font(sanitize_title($family), array( "family"  => array($family), "subset"  => array($header_top_block_title_text_3['subset'])) );
			}
			
		    $header_top_block_desc_text_3 = fw_get_db_settings_option('header_top_switch/enabled/header_top_block_3_switch/enabled/header_top_block_desc_text');
			if($header_top_block_desc_text_3['variation']!=''){
				$family = $header_top_block_desc_text_3['family'].':'.$header_top_block_desc_text_3['variation'];
				naslaan_enqueue_font(sanitize_title($family), array( "family"  => array($family), "subset"  => array($header_top_block_desc_text_3['subset'])) );
			}
			
		    $header_top_block_title_text_4 = fw_get_db_settings_option('header_top_switch/enabled/header_top_block_4_switch/enabled/header_top_block_title_text');
			if($header_top_block_title_text_4['variation']!=''){
				$family = $header_top_block_title_text_4['family'].':'.$header_top_block_title_text_4['variation'];
				naslaan_enqueue_font(sanitize_title($family), array( "family"  => array($family), "subset"  => array($header_top_block_title_text_4['subset'])) );
			}
			
		    $header_top_block_desc_text_4 = fw_get_db_settings_option('header_top_switch/enabled/header_top_block_4_switch/enabled/header_top_block_desc_text');
			if($header_top_block_desc_text_4['variation']!=''){
				$family = $header_top_block_desc_text_4['family'].':'.$header_top_block_desc_text_4['variation'];
				naslaan_enqueue_font(sanitize_title($family), array( "family"  => array($family), "subset"  => array($header_top_block_desc_text_4['subset'])) );
			}
			
		    $mob_first_level_nav_font = fw_get_db_settings_option('mob_first_level_nav_font');
			if($mob_first_level_nav_font['variation']!=''){
				$family = $mob_first_level_nav_font['family'].':'.$mob_first_level_nav_font['variation'];
				naslaan_enqueue_font(sanitize_title($family), array( "family"  => array($family), "subset"  => array($mob_first_level_nav_font['subset'])) );
			}
			
		    $mob_nav_font = fw_get_db_settings_option('mob_nav_font');
			if($mob_nav_font['variation']!=''){
				$family = $mob_nav_font['family'].':'.$mob_nav_font['variation'];
				naslaan_enqueue_font(sanitize_title($family), array( "family"  => array($family), "subset"  => array($mob_nav_font['subset'])) );
			}
			
		    $mob_nav_title_font = fw_get_db_settings_option('mob_nav_title_font');
			if($mob_nav_title_font['variation']!=''){
				$family = $mob_nav_title_font['family'].':'.$mob_nav_title_font['variation'];
				naslaan_enqueue_font(sanitize_title($family), array( "family"  => array($family), "subset"  => array($mob_nav_title_font['subset'])) );
			}
			
		    $header_logo_text_s = fw_get_db_settings_option('sticky_header_switch/enabled/header_logo/text_logo/header_logo_text');
			if($header_logo_text_s['variation']!=''){
				$family = $header_logo_text_s['family'].':'.$header_logo_text_s['variation'];
				naslaan_enqueue_font(sanitize_title($family), array( "family"  => array($family), "subset"  => array($header_logo_text_s['subset'])) );
			}
			
		    $menu_button_text_s = fw_get_db_settings_option('sticky_header_switch/enabled/menu_button_text');
			if($menu_button_text_s['variation']!=''){
				$family = $menu_button_text_s['family'].':'.$menu_button_text_s['variation'];
				naslaan_enqueue_font(sanitize_title($family), array( "family"  => array($family), "subset"  => array($menu_button_text_s['subset'])) );
			}
			
		    $msg_block_text_s = fw_get_db_settings_option('sticky_header_switch/enabled/msg_container_visibility/enabled/msg_block_text');
			if($msg_block_text_s['variation']!=''){
				$family = $msg_block_text_s['family'].':'.$msg_block_text_s['variation'];
				naslaan_enqueue_font(sanitize_title($family), array( "family"  => array($family), "subset"  => array($msg_block_text_s['subset'])) );
			}
			
		    $wpml_btn_font_s = fw_get_db_settings_option('sticky_header_switch/enabled/wpml_container_visibility/enabled/wpml_btn_font');
			if($wpml_btn_font_s['variation']!=''){
				$family = $wpml_btn_font_s['family'].':'.$wpml_btn_font_s['variation'];
				naslaan_enqueue_font(sanitize_title($family), array( "family"  => array($family), "subset"  => array($wpml_btn_font_s['subset'])) );
			}
			
		    $header_title = fw_get_db_settings_option('title_variants/variant-1/header_title_visibility/enabled/header_title');
			if($header_title['variation']!=''){
				$family = $header_title['family'].':'.$header_title['variation'];
				naslaan_enqueue_font(sanitize_title($family), array( "family"  => array($family), "subset"  => array($header_title['subset'])) );
			}
			
		    $breadcrumb_font = fw_get_db_settings_option('title_variants/variant-1/header_breadcrumb_visibility/enabled/breadcrumb_font');
			if($breadcrumb_font['variation']!=''){
				$family = $breadcrumb_font['family'].':'.$breadcrumb_font['variation'];
				naslaan_enqueue_font(sanitize_title($family), array( "family"  => array($family), "subset"  => array($breadcrumb_font['subset'])) );
			}
			
		    $share_btn_text = fw_get_db_settings_option('title_variants/variant-1/header_share_visibility/enabled/share_btn_text');
			if($share_btn_text['variation']!=''){
				$family = $share_btn_text['family'].':'.$share_btn_text['variation'];
				naslaan_enqueue_font(sanitize_title($family), array( "family"  => array($family), "subset"  => array($share_btn_text['subset'])) );
			}
			
		    $share_dropdown_text = fw_get_db_settings_option('title_variants/variant-1/header_share_visibility/enabled/share_dropdown_text');
			if($share_dropdown_text['variation']!=''){
				$family = $share_dropdown_text['family'].':'.$share_dropdown_text['variation'];
				naslaan_enqueue_font(sanitize_title($family), array( "family"  => array($family), "subset"  => array($share_dropdown_text['subset'])) );
			}
			
		    $footer_font = fw_get_db_settings_option('footer_options/enabled/footer_font');
			if($footer_font['variation']!=''){
				$family = $footer_font['family'].':'.$footer_font['variation'];
				naslaan_enqueue_font(sanitize_title($family), array( "family"  => array($family), "subset"  => array($footer_font['subset'])) );
			}
			
		    $footer_bottom_font = fw_get_db_settings_option('footer_bottom_options/enabled/footer_bottom_font');
			if($footer_bottom_font['variation']!=''){
				$family = $footer_bottom_font['family'].':'.$footer_bottom_font['variation'];
				naslaan_enqueue_font(sanitize_title($family), array( "family"  => array($family), "subset"  => array($footer_bottom_font['subset'])) );
			}
			
		    $footer_widget_title = fw_get_db_settings_option('footer_widget_title');
			if($footer_widget_title['variation']!=''){
				$family = $footer_widget_title['family'].':'.$footer_widget_title['variation'];
				naslaan_enqueue_font(sanitize_title($family), array( "family"  => array($family), "subset"  => array($footer_widget_title['subset'])) );
			}
			
		    $header_title_2 = fw_get_db_settings_option('title_variants/variant-2/header_title_visibility/enabled/header_title');
			if($header_title_2['variation']!=''){
				$family = $header_title_2['family'].':'.$header_title_2['variation'];
				naslaan_enqueue_font(sanitize_title($family), array( "family"  => array($family), "subset"  => array($header_title_2['subset'])) );
			}
			
		    $header_title_desc = fw_get_db_settings_option('title_variants/variant-2/header_title_desc_visibility/enabled/header_title_desc');
			if($header_title_desc['variation']!=''){
				$family = $header_title_desc['family'].':'.$header_title_desc['variation'];
				naslaan_enqueue_font(sanitize_title($family), array( "family"  => array($family), "subset"  => array($header_title_desc['subset'])) );
			}
		    $blog_post_title = fw_get_db_settings_option('blog_post_title');
			if($blog_post_title['variation']!=''){
				$family = $blog_post_title['family'].':'.$blog_post_title['variation'];
				naslaan_enqueue_font(sanitize_title($family), array( "family"  => array($family), "subset"  => array($blog_post_title['subset'])) );
			}
			
		    $blog_post_meta_font = fw_get_db_settings_option('blog_post_meta_font');
			if($blog_post_meta_font['variation']!=''){
				$family = $blog_post_meta_font['family'].':'.$blog_post_meta_font['variation'];
				naslaan_enqueue_font(sanitize_title($family), array( "family"  => array($family), "subset"  => array($blog_post_meta_font['subset'])) );
			}
			
		    $more_btn_font = fw_get_db_settings_option('more_btn_font');
			if($more_btn_font['variation']!=''){
				$family = $more_btn_font['family'].':'.$more_btn_font['variation'];
				naslaan_enqueue_font(sanitize_title($family), array( "family"  => array($family), "subset"  => array($more_btn_font['subset'])) );
			}
			
		    $post_meta_font = fw_get_db_settings_option('post_meta_font');
			if($post_meta_font['variation']!=''){
				$family = $post_meta_font['family'].':'.$post_meta_font['variation'];
				naslaan_enqueue_font(sanitize_title($family), array( "family"  => array($family), "subset"  => array($post_meta_font['subset'])) );
			}
			
		    $post_navigation_btn_font = fw_get_db_settings_option('post_navigation_btn_font');
			if($body_font['variation']!=''){
				$family = $post_navigation_btn_font['family'].':'.$post_navigation_btn_font['variation'];
				naslaan_enqueue_font(sanitize_title($family), array( "family"  => array($family), "subset"  => array($post_navigation_btn_font['subset'])) );
			}
			
		    $related_post_title = fw_get_db_settings_option('related_post_title');
			if($related_post_title['variation']!=''){
				$family = $related_post_title['family'].':'.$related_post_title['variation'];
				naslaan_enqueue_font(sanitize_title($family), array( "family"  => array($family), "subset"  => array($related_post_title['subset'])) );
			}
			
		    $comment_author_font = fw_get_db_settings_option('comment_author_font');
			if($comment_author_font['variation']!=''){
				$family = $comment_author_font['family'].':'.$comment_author_font['variation'];
				naslaan_enqueue_font(sanitize_title($family), array( "family"  => array($family), "subset"  => array($comment_author_font['subset'])) );
			}
			
		    $comment_reply_font = fw_get_db_settings_option('comment_reply_font');
			if($comment_reply_font['variation']!=''){
				$family = $comment_reply_font['family'].':'.$comment_reply_font['variation'];
				naslaan_enqueue_font(sanitize_title($family), array( "family"  => array($family), "subset"  => array($comment_reply_font['subset'])) );
			}
			
		    $comment_form_label_font = fw_get_db_settings_option('comment_form_label_font');
			if($comment_form_label_font['variation']!=''){
				$family = $comment_form_label_font['family'].':'.$comment_form_label_font['variation'];
				naslaan_enqueue_font(sanitize_title($family), array( "family"  => array($family), "subset"  => array($comment_form_label_font['subset'])) );
			}
			
		    $comment_form_btn_text = fw_get_db_settings_option('comment_form_btn_text');
			if($comment_form_btn_text['variation']!=''){
				$family = $comment_form_btn_text['family'].':'.$comment_form_btn_text['variation'];
				naslaan_enqueue_font(sanitize_title($family), array( "family"  => array($family), "subset"  => array($comment_form_btn_text['subset'])) );
			}
			
		    $shop_price_font = fw_get_db_settings_option('shop_price_font');
			if($shop_price_font['variation']!=''){
				$family = $shop_price_font['family'].':'.$shop_price_font['variation'];
				naslaan_enqueue_font(sanitize_title($family), array( "family"  => array($family), "subset"  => array($shop_price_font['subset'])) );
			}
			
		    $shop_btn_text = fw_get_db_settings_option('shop_btn_text');
			if($shop_btn_text['variation']!=''){
				$family = $shop_btn_text['family'].':'.$shop_btn_text['variation'];
				naslaan_enqueue_font(sanitize_title($family), array( "family"  => array($family), "subset"  => array($shop_btn_text['subset'])) );
			}
			
		    $shop_sale_font = fw_get_db_settings_option('shop_sale_font');
			if($shop_sale_font['variation']!=''){
				$family = $shop_sale_font['family'].':'.$shop_sale_font['variation'];
				naslaan_enqueue_font(sanitize_title($family), array( "family"  => array($family), "subset"  => array($shop_sale_font['subset'])) );
			}
		    $shop_out_font = fw_get_db_settings_option('shop_out_font');
			if($shop_out_font['variation']!=''){
				$family = $shop_out_font['family'].':'.$shop_out_font['variation'];
				naslaan_enqueue_font(sanitize_title($family), array( "family"  => array($family), "subset"  => array($shop_out_font['subset'])) );
			}
			
		    $shop_form_label_font = fw_get_db_settings_option('shop_form_label_font');
			if($shop_form_label_font['variation']!=''){
				$family = $shop_form_label_font['family'].':'.$shop_form_label_font['variation'];
				naslaan_enqueue_font(sanitize_title($family), array( "family"  => array($family), "subset"  => array($shop_form_label_font['subset'])) );
			}
			
		    $body_font = fw_get_db_settings_option('contact_form_label_font');
			if($body_font['variation']!=''){
				$family = $body_font['family'].':'.$body_font['variation'];
				naslaan_enqueue_font(sanitize_title($family), array( "family"  => array($family), "subset"  => array($body_font['subset'])) );
			}
			
		    $body_font = fw_get_db_settings_option('contact_form_checkbox_label');
			if($body_font['variation']!=''){
				$family = $body_font['family'].':'.$body_font['variation'];
				naslaan_enqueue_font(sanitize_title($family), array( "family"  => array($family), "subset"  => array($body_font['subset'])) );
			}
			
		    $body_font = fw_get_db_settings_option('contact_form_btn_text');
			if($body_font['variation']!=''){
				$family = $body_font['family'].':'.$body_font['variation'];
				naslaan_enqueue_font(sanitize_title($family), array( "family"  => array($family), "subset"  => array($body_font['subset'])) );
			}
			
		    $body_font = fw_get_db_settings_option('contact_form_secondary_label_font');
			if($body_font['variation']!=''){
				$family = $body_font['family'].':'.$body_font['variation'];
				naslaan_enqueue_font(sanitize_title($family), array( "family"  => array($family), "subset"  => array($body_font['subset'])) );
			}
			
		    $body_font = fw_get_db_settings_option('contact_form_secondary_checkbox_label');
			if($body_font['variation']!=''){
				$family = $body_font['family'].':'.$body_font['variation'];
				naslaan_enqueue_font(sanitize_title($family), array( "family"  => array($family), "subset"  => array($body_font['subset'])) );
			}
			
		    $body_font = fw_get_db_settings_option('contact_form_secondary_btn_text');
			if($body_font['variation']!=''){
				$family = $body_font['family'].':'.$body_font['variation'];
				naslaan_enqueue_font(sanitize_title($family), array( "family"  => array($family), "subset"  => array($body_font['subset'])) );
			}
			
		    $body_font = fw_get_db_settings_option('portfolio_related_post_title');
			if($body_font['variation']!=''){
				$family = $body_font['family'].':'.$body_font['variation'];
				naslaan_enqueue_font(sanitize_title($family), array( "family"  => array($family), "subset"  => array($body_font['subset'])) );
			}
			
		    $body_font = fw_get_db_settings_option('portfolio_post_navigation_btn_font');
			if($body_font['variation']!=''){
				$family = $body_font['family'].':'.$body_font['variation'];
				naslaan_enqueue_font(sanitize_title($family), array( "family"  => array($family), "subset"  => array($body_font['subset'])) );
			}
			
		}

		
}