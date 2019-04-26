<?php
if(!class_exists("lpd_vc_info_box")){
	class lpd_vc_info_box{

		function __construct(){
			add_action( 'vc_before_init',array($this,'lpd_vc_info_box_map'));
			add_shortcode( 'lpd_vc_info_box',array($this,'lpd_vc_info_box_func'));
		}
	
		
		function lpd_vc_info_box_func( $atts, $content = null ) {
		   
			$css_animation = $fonts_style_title = $el_class = $element = $css = '';
			
			extract( shortcode_atts( array(
				'box_style' => 'heading-left',
				'box_align' => 'center',
				'use_seperator' => 'no',
				'seperator_line_height' => '1',
				'seperator_line_width' => '100',
				'seperator_line_color' => '#ebebeb',
				'seperator_line_hover_color' => '#ebebeb',
				'seperator_margin_top' => '5',
				'seperator_margin_bottom' => '5',
				'use_social_media_icons' => 'no',
				'social_media_icons' => '05-twitter',
				'icon' => '',
				'icon_size' => '32',
				'icon_margin_bottom' => '0',
				'icon_color' => '#252525',
				'icon_hover_color' => '#252525',
				'icon_style' => 'none',
				'icon_bg_size' => '50',
				'icon_bg_color' => '#48cfad',
				'icon_bg_color_hover' => '#252525',
				'use_overlay_effect' => 'no',
				'title' => '',
				'use_theme_fonts' => 'no',
				'google_fonts_title' => 'font_family:Poppins%3A300%2C400%2C500%2C600%2C700%2C|font_style:400%20regular%3A400%3Anormal',
				'title_font_size' => '18',
				'title_letter_spacing' => '0',
				'title_color' => '#252525',
				'title_hover_color' => '#252525',
				'content_margin_top' => '0',
				'font_size' => '',
				'box_width' => '',
				'box_float' => 'none',
				'apply_link' => 'none',
				'link' => '',
				'css_animation' => '',
				'el_class' => '',
				'css' => ''
			), $atts ) );
			
			if ( $use_theme_fonts != 'yes' ) {
				if ( $google_fonts_title ) {
					$settings = get_option( 'wpb_js_google_fonts_subsets' );
					if ( is_array( $settings ) && ! empty( $settings ) ) {
						$subsets = '&subset=' . implode( ',', $settings );
					} else {
						$subsets = '';
					}
					
					$google_fonts_obj = new Vc_Google_Fonts();
					
					$google_fonts_field_settings = isset( $google_fonts_field['settings'], $google_fonts_field['settings']['fields'] ) ? $google_fonts_field['settings']['fields'] : array();
					
					$google_fonts_data = strlen( $google_fonts_title ) > 0 ? $google_fonts_obj->_vc_google_fonts_parse_attributes( $google_fonts_field_settings, $google_fonts_title ) : ''; 
					
					wp_enqueue_style( 'vc_google_fonts_' . vc_build_safe_css_class( $google_fonts_data['values']['font_family'] ), '//fonts.googleapis.com/css?family=' . $google_fonts_data['values']['font_family'] . $subsets );
					
					if ( ( ! isset( $atts['use_theme_fonts'] ) || 'yes' !== $atts['use_theme_fonts'] ) && ! empty( $google_fonts_data ) && isset( $google_fonts_data['values'], $google_fonts_data['values']['font_family'], $google_fonts_data['values']['font_style'] ) ) {
						$google_fonts_family = explode( ':', $google_fonts_data['values']['font_family'] );
						$fonts_styles[] = 'font-family:' . $google_fonts_family[0];
						$google_fonts_styles = explode( ':', $google_fonts_data['values']['font_style'] );
						$fonts_styles[] = 'font-weight:' . $google_fonts_styles[1];
						$fonts_styles[] = 'font-style:' . $google_fonts_styles[2];
					}
					
					$fonts_style_title = implode("; ", $fonts_styles);
				
				}
			}
			
			$element_id = rand(); 
			
			$custom_css = '';
			
			if ( $box_float != 'none' ) {
				$custom_css .= '.vc_lpd_info_box-'.$element_id.'{float:'.$box_float.';}';
			}
			
			if ( $box_width != '' ) {
				$custom_css .= '.vc_lpd_info_box-'.$element_id.'{width:'.$box_width.'%;}';
			}
			
			if ( $font_size != '' ) {
				$custom_css .= '.vc_lpd_info_box-'.$element_id.'{font-size:'.$font_size.'px;}';
			}
			
			if ( $icon != '' ) {
			
				$custom_css .= '.vc_lpd_info_box-'.$element_id.' .vc_lpd_info_box_icon .material-icons{font-size:'.$icon_size.'px;}';
				if ( $icon_style != 'none' ) {
					$custom_css .= '.vc_lpd_info_box-'.$element_id.' .vc_lpd_info_box_icon .vc_lpd_info_box_iconWrap{background-color:'.$icon_bg_color.';height:'.$icon_bg_size.'px;width:'.$icon_bg_size.'px;line-height:'.$icon_bg_size.'px;}';
					$custom_css .= '.vc_lpd_info_box-'.$element_id.' .vc_lpd_info_box_icon .material-icons{line-height:'.$icon_bg_size.'px;}';
					if ( $use_overlay_effect != 'yes' ) {
						$custom_css .= '.vc_lpd_info_box-'.$element_id.':hover .vc_lpd_info_box_icon .vc_lpd_info_box_iconWrap{background-color:'.$icon_bg_color_hover.';}';
					}else{
						$custom_css .= '.vc_lpd_info_box-'.$element_id.' .vc_lpd_info_box_icon .vc_lpd_info_box_iconWrap:before{background-color:'.$icon_bg_color_hover.';}';
					}
				}
				$custom_css .= '.vc_lpd_info_box-'.$element_id.' .vc_lpd_info_box_icon .material-icons{color:'.$icon_color.';}';
				$custom_css .= '.vc_lpd_info_box-'.$element_id.':hover .vc_lpd_info_box_icon .material-icons{color:'.$icon_hover_color.';}';
			}
			
			
			if ( $use_social_media_icons == 'yes' && $social_media_icons != '' ) {
			
				$custom_css .= '.vc_lpd_info_box-'.$element_id.' .vc_lpd_info_box_icon .social-icon{font-size:'.$icon_size.'px;}';
				if ( $icon_style != 'none' ) {
					$custom_css .= '.vc_lpd_info_box-'.$element_id.' .vc_lpd_info_box_icon .vc_lpd_info_box_iconWrap{background-color:'.$icon_bg_color.';height:'.$icon_bg_size.'px;width:'.$icon_bg_size.'px;line-height:'.$icon_bg_size.'px;}';
					$custom_css .= '.vc_lpd_info_box-'.$element_id.' .vc_lpd_info_box_icon .social-icon{line-height:'.$icon_bg_size.'px;}';
					if ( $use_overlay_effect != 'yes' ) {
						$custom_css .= '.vc_lpd_info_box-'.$element_id.':hover .vc_lpd_info_box_icon .vc_lpd_info_box_iconWrap{background-color:'.$icon_bg_color_hover.';}';
					}else{
						$custom_css .= '.vc_lpd_info_box-'.$element_id.' .vc_lpd_info_box_icon .vc_lpd_info_box_iconWrap:before{background-color:'.$icon_bg_color_hover.';}';
					}
				}
				$custom_css .= '.vc_lpd_info_box-'.$element_id.' .vc_lpd_info_box_icon .social-icon{color:'.$icon_color.';}';
				$custom_css .= '.vc_lpd_info_box-'.$element_id.':hover .vc_lpd_info_box_icon .social-icon{color:'.$icon_hover_color.';}';
			}
			
			if ( $title != '' ) {
			
				$custom_css .= '.vc_lpd_info_box-'.$element_id.' .vc_lpd_info_box_header h3{font-size:'.$title_font_size.'px;letter-spacing:'.$title_letter_spacing.'px;'.$fonts_style_title.'}';
				
				if ( $apply_link == 'title' ) {
					$custom_css .= '.vc_lpd_info_box-'.$element_id.' .vc_lpd_info_box_header h3 a{color:'.$title_color.';}';
					$custom_css .= '.vc_lpd_info_box-'.$element_id.':hover .vc_lpd_info_box_header h3 a{color:'.$title_hover_color.';}';
				}else{
					$custom_css .= '.vc_lpd_info_box-'.$element_id.' .vc_lpd_info_box_header h3{color:'.$title_color.';}';
					$custom_css .= '.vc_lpd_info_box-'.$element_id.':hover .vc_lpd_info_box_header h3{color:'.$title_hover_color.';}';
				}
				
			}
			if ( $use_seperator == 'yes' ) {
				$custom_css .= '.vc_lpd_info_box-'.$element_id.':hover .vc_lpd_info_box_seperator{background-color:'.$seperator_line_hover_color.' !important;}';	
			}
			
			if ( $el_class != "" ) { $el_class = $el_class.' ';}
			
			$el_class .= 'vc_lpd_info_box vc_lpd_info_box-'.$element_id;
			
			$el_class .= ' vc_lpd_info_box-'.$icon_style;
			
			if ( $use_overlay_effect == 'yes' ) {
				$el_class .= ' vc_lpd_info_box-animated';
			}
			
			wp_enqueue_style( 'vc_lpd_elements_social_icons', plugin_dir_url(dirname(__FILE__)). 'assets/fonts/picons-social-icons/styles.css', array(), VC_LPD_ELEMNTS );
			
			if($css_animation!=""){
				wp_enqueue_script( 'waypoints' );
				$css_animation = ' wpb_animate_when_almost_visible wpb_' . $css_animation. ' ' . $css_animation. ' ';
			}
			
			$content = wpb_js_remove_wpautop($content, true); // fix unclosed/unwanted paragraph tags in $content
			$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, $css_animation . $el_class .vc_shortcode_custom_css_class( $css, ' ' ), 'lpd_vc_info_box', $atts );
			
			$link = ( '||' === $link ) ? '' : $link;
			$link = vc_build_link( $link );
			$a_href = $link['url'];
			$a_title = $link['title'];
			$a_target = $link['target'];
			
			$element_style = $element_content = $element_title = $element_icon = $element = '';
			
			
			if ( $use_social_media_icons == 'yes' && $social_media_icons != '' ) {
			
					$element_icon .= '<div class="vc_lpd_info_box_icon vc_lpd_info_box_icon-'.$box_style.'">';
						$element_icon .= '<div class="vc_lpd_info_box_iconWrap" style="margin-bottom:'.$icon_margin_bottom.'px;"><span><i class="social-icon social-icon-'.$social_media_icons.'"></i></span></div>';
					$element_icon .= "</div>";
				
			}else{
			
				if ( $icon != '' ) {
				
					$element_icon .= '<div class="vc_lpd_info_box_icon vc_lpd_info_box_icon-'.$box_style.'">';
						$element_icon .= '<div class="vc_lpd_info_box_iconWrap" style="margin-bottom:'.$icon_margin_bottom.'px;"><span><i class="material-icons">'.$icon.'</i></span></div>';
					$element_icon .= "</div>";
				
				}
				
			}
			
			if ( $title != '' ) {
			
				$element_title .= '<div class="vc_lpd_info_box_header vc_lpd_info_box_header-'.$box_style.'"><h3>';
					if ( $apply_link == 'title' ) {
						$element_title .= '<a href="'.esc_attr( $a_href ).'" title="'.esc_attr( $a_title ).'" target="'.esc_attr( $a_target ).'">';
					}
					$element_title .= $title;
					if ( $apply_link == 'title' ) {
						$element_title .= '</a>';
					}
				$element_title .= "</h3></div>";
			
			}
			
			if ( $content != '' ) {
				$element_content = '<div class="vc_lpd_info_box_content" style="margin-top:'.$content_margin_top.'px;">'.$content.'</div>';
			}
			
			if ( $box_style == 'top' ) {
				$element_style = ' style="text-align:'.$box_align.';"';
			}

			$element .= '<div class="'.esc_attr( $css_class ).'"'.$element_style.'>';

			if ( $box_style == 'heading-left' ) {
			
				$element .= $element_icon;
				$element .= $element_title;
				$element .= $element_content;
			
			}elseif ( $box_style == 'heading-right' ) {
			
				$element .= $element_title;
				$element .= $element_icon;
				$element .= $element_content;
										
			}elseif ( $box_style == 'left' ) {
			
				$element .= $element_icon;
				$element .= "<div class='vc_lpd_info_box_block'>";
				$element .= $element_title;
				$element .= $element_content;
				$element .= "</div>";
			
			}elseif ( $box_style == 'right' ) {
			
				$element .= "<div class='vc_lpd_info_box_block' style='text-align: right;'>";
				$element .= $element_title;
				$element .= $element_content;
				$element .= "</div>";
				$element .= $element_icon;		
			
			}elseif ( $box_style == 'top' ) {
			
				$element .= $element_icon;
				$element .= $element_title;
				
				if ( $use_seperator == 'yes' ) {
					$element .= '<div class="vc_lpd_info_box_seperator" style="width:'.$seperator_line_width.'px;height:'.$seperator_line_height.'px;margin-top:'.$seperator_margin_top.'px;margin-bottom:'.$seperator_margin_bottom.'px;background-color:'.$seperator_line_color.';"></div>';
				}
				
				$element .= $element_content;
			
			}
			
			$element .= '</div>';
			
			$element .= '<style scoped>'.$custom_css.'</style>';
			
			return $element;
			 
		}
		
		
		function lpd_vc_info_box_map() {
		   vc_map( array(
		      "name" => esc_html__( "Info Box", "lpd_vc_elements" ),
		      "base" => "lpd_vc_info_box",
		      "class" => "",
		      "category" => esc_html__( "Content", "lpd_vc_elements"),
		      'admin_enqueue_css' => array( plugins_url('/admin.css',__FILE__)),
		      "params" => array(
				array(
					"type" => "dropdown",
					"class" => "",
					"heading" => esc_html__("Box Style", "lpd_vc_elements"),
					"param_name" => "box_style",
					"value" => array(
						__("Icon at Left with heading","lpd_vc_elements") => "heading-left",
						__("Icon at Right with heading","lpd_vc_elements") => "heading-right",
						__("Icon at Left","lpd_vc_elements") => "left",
						__("Icon at Right","lpd_vc_elements") => "right",
						__("Icon at Top","lpd_vc_elements") => "top",
					),
					"description" => esc_html__("Select icon position. Icon box style will be changed according to the icon position.", "lpd_vc_elements")
				),
				array(
					"type" => "dropdown",
					"class" => "",
					"heading" => esc_html__("Box Align", "lpd_vc_elements"),
					"param_name" => "box_align",
					"value" => array(
						__("Center","lpd_vc_elements") => "center",
						__("Left","lpd_vc_elements") => "left",
						__("Right","lpd_vc_elements") => "right",
					),
					"description" => esc_html__("Select content alignment.", "lpd_vc_elements"),
					"dependency" => array("element" => "box_style","value" => array("top")),
				),
				array(
					'type' => 'checkbox',
					'heading' => esc_html__( 'Use seperator line?', 'lpd_vc_elements' ),
					'param_name' => 'use_seperator',
					'value' => array( esc_html__( 'Yes', 'lpd_vc_elements' ) => 'yes' ),
				),
				array(
					"type" => "textfield",
					"class" => "",
					"heading" => esc_html__("Line Height", "lpd_vc_elements"),
					"param_name" => "seperator_line_height",
					"value" => 1,
					"description" => esc_html__("Value in pixels.", "lpd_vc_elements"),
					"dependency" => array("element" => "use_seperator","value" => array("yes")),
				),
				array(
					"type" => "textfield",
					"class" => "",
					"heading" => esc_html__("Line Width", "lpd_vc_elements"),
					"param_name" => "seperator_line_width",
					"value" => 100,
					"description" => esc_html__("Value in pixels.", "lpd_vc_elements"),
					"dependency" => array("element" => "use_seperator","value" => array("yes")),
				),
		         array(
		            "type" => "colorpicker",
		            "class" => "",
		            "heading" => esc_html__( "Line Color", "lpd_vc_elements" ),
		            "param_name" => "seperator_line_color",
		            "value" => '#ebebeb',
		            "description" => esc_html__( "Choose line color", "lpd_vc_elements" ),
		            "dependency" => array("element" => "use_seperator","value" => array("yes")),
		         ),
		         array(
		            "type" => "colorpicker",
		            "class" => "",
		            "heading" => esc_html__( "Line Hover Color", "lpd_vc_elements" ),
		            "param_name" => "seperator_line_hover_color",
		            "value" => '#ebebeb',
		            "description" => esc_html__( "Choose line hover color", "lpd_vc_elements" ),
		            "dependency" => array("element" => "use_seperator","value" => array("yes")),
		         ),
				array(
					"type" => "textfield",
					"class" => "",
					"heading" => esc_html__("Seperator Margin Top", "lpd_vc_elements"),
					"param_name" => "seperator_margin_top",
					"value" => 5,
					"description" => esc_html__("Value in pixels.", "lpd_vc_elements"),
					"dependency" => array("element" => "use_seperator","value" => array("yes")),
				),
				array(
					"type" => "textfield",
					"class" => "",
					"heading" => esc_html__("Seperator Margin Bottom", "lpd_vc_elements"),
					"param_name" => "seperator_margin_bottom",
					"value" => 5,
					"description" => esc_html__("Value in pixels.", "lpd_vc_elements"),
					"dependency" => array("element" => "use_seperator","value" => array("yes")),
				),
				array(
					'type' => 'checkbox',
					'heading' => esc_html__( 'Use social media icons?', 'lpd_vc_elements' ),
					'param_name' => 'use_social_media_icons',
					'value' => array( esc_html__( 'Yes', 'lpd_vc_elements' ) => 'yes' ),
				),
				array(
					"type" => "dropdown",
					"class" => "",
					"heading" => esc_html__("Social Media Icons", "lpd_vc_elements"),
					"param_name" => "social_media_icons",
					"value" => array("01-forrst","02-dribbble","04-flickr","05-twitter","06-facebook","07-skype","08-digg","09-google","10-html5","11-linkedin","12-lastfm","13-vimeo","14-yahoo","15-tumblr","16-apple","17-windows","18-youtube","19-delicious","20-rss","21-picasa","22-deviantart","23-whatsapp","24-snapchat","25-blogger","26-wordpress","27-amazon","28-appstore","29-paypal","30-myspace","31-dropbox","32-windows8","33-pinterest","34-soundcloud","35-google-drive","36-android","37-behance","38-instagram","39-ebay","40-google-plus","41-github","42-stackoverflow","43-spotify","44-stumbleupon","45-visa","46-mastercard","47-amex","48-ios","49-osx","50-evernote","51-yelp","52-yelp","53-medium","54-slack","55-vine","56-edge","57-outlook","58-pencilcase","59-play","60-icloud"),
					"description" => esc_html__("Select your social media icons.", "lpd_vc_elements"),
					"dependency" => array("element" => "use_social_media_icons","value" => array("yes")),
				),
		         array(
		            "type" => "textfield",
		            "class" => "",
		            "heading" => esc_html__( "Icon", "lpd_vc_elements" ),
		            "param_name" => "icon",
		            "value" => '',
		            "description" => esc_html__( "Material icons html code or icon name, find full list of icons on <a href='https://design.google.com/icons/'>link..</a>, example: 'check' or '&amp;#xE5CA;'", "lpd_vc_elements" ),
		            "dependency" => array("element" => "use_social_media_icons","value_not_equal_to" => array("yes")),
		         ),
				array(
					"type" => "textfield",
					"class" => "",
					"heading" => esc_html__("Size of Icon", "lpd_vc_elements"),
					"param_name" => "icon_size",
					"value" => 32,
					"description" => esc_html__("Value in pixels.", "lpd_vc_elements"),
					"description" => esc_html__("How big would you like it? value in pixels.", "lpd_vc_elements"),
				),
				array(
					"type" => "textfield",
					"class" => "",
					"heading" => esc_html__("Icon Margin Bottom", "lpd_vc_elements"),
					"param_name" => "icon_margin_bottom",
					"value" => 0,
					"description" => esc_html__("Value in pixels.", "lpd_vc_elements"),
				),
		         array(
		            "type" => "colorpicker",
		            "class" => "",
		            "heading" => esc_html__( "Icon color", "lpd_vc_elements" ),
		            "param_name" => "icon_color",
		            "value" => '#252525',
		            "description" => esc_html__( "Choose link color", "lpd_vc_elements" )
		         ),
		         array(
		            "type" => "colorpicker",
		            "class" => "",
		            "heading" => esc_html__( "Icon hover color", "lpd_vc_elements" ),
		            "param_name" => "icon_hover_color",
		            "value" => '#252525',
		            "description" => esc_html__( "Choose link hover color", "lpd_vc_elements" )
		         ),
				array(
					"type" => "dropdown",
					"class" => "",
					"heading" => esc_html__("Icon Style", "lpd_vc_elements"),
					"param_name" => "icon_style",
					"value" => array(
						__("Simple","lpd_vc_elements") => "none",
						__("Circle Background","lpd_vc_elements") => "circle",
						__("Square Background","lpd_vc_elements") => "square",
					),
					"description" => esc_html__("Choose your icons style.", "lpd_vc_elements"),
				),
				array(
					"type" => "textfield",
					"class" => "",
					"heading" => esc_html__("Background Size", "lpd_vc_elements"),
					"param_name" => "icon_bg_size",
					"value" => 50,
					"description" => esc_html__("Value in pixels.", "lpd_vc_elements"),
					"dependency" => array("element" => "icon_style","value" => array("circle","square")),
				),
		         array(
		            "type" => "colorpicker",
		            "class" => "",
		            "heading" => esc_html__( "Icon Background Color", "lpd_vc_elements" ),
		            "param_name" => "icon_bg_color",
		            "value" => '#48cfad',
		            "description" => esc_html__( "Choose background color", "lpd_vc_elements" ),
		            "dependency" => array("element" => "icon_style","value" => array("circle","square")),
		         ),
		         array(
		            "type" => "colorpicker",
		            "class" => "",
		            "heading" => esc_html__( "Icon hover color", "lpd_vc_elements" ),
		            "param_name" => "icon_bg_color_hover",
		            "value" => '#252525',
		            "description" => esc_html__( "Choose background hover color", "lpd_vc_elements" ),
		            "dependency" => array("element" => "icon_style","value" => array("circle","square")),
		         ),
				array(
					'type' => 'checkbox',
					'heading' => esc_html__( 'Use overlay effect?', 'lpd_vc_elements' ),
					'param_name' => 'use_overlay_effect',
					'value' => array( esc_html__( 'Yes', 'lpd_vc_elements' ) => 'yes' ),
					'description' => esc_html__( 'Use background overlay effect.', 'lpd_vc_elements' ),
					"dependency" => array("element" => "icon_style","value" => array("circle","square")),
				),
				array(
					"type" => "textfield",
					"class" => "",
					"heading" => esc_html__("Title", "lpd_vc_elements"),
					"param_name" => "title",
					"admin_label" => true,
					"value" => "",
					"description" => esc_html__("Provide the title for this icon box.", "lpd_vc_elements"),
				),
				array(
					'type' => 'checkbox',
					'heading' => esc_html__( 'Use theme default font family?', 'lpd_vc_elements' ),
					'param_name' => 'use_theme_fonts',
					'value' => array( esc_html__( 'Yes', 'lpd_vc_elements' ) => 'yes' ),
					'description' => esc_html__( 'Use font family from the theme.', 'lpd_vc_elements' ),
				),
				array(
					'type' => 'google_fonts',
					'heading' => esc_html__( 'Title Font', 'lpd_vc_elements' ),
					'param_name' => 'google_fonts_title',
					'value' => 'font_family:Poppins%3A300%2C400%2C500%2C600%2C700%2C|font_style:400%20regular%3A400%3Anormal',
					'settings' => array(
						'fields' => array(
							'font_family_description' => esc_html__( 'Select font family.', 'lpd_vc_elements' ),
							'font_style_description' => esc_html__( 'Select font styling.', 'lpd_vc_elements' ),
						),
					),
					'dependency' => array(
						'element' => 'use_theme_fonts',
						'value_not_equal_to' => 'yes',
					),
				),
				array(
					"type" => "textfield",
					"class" => "",
					"heading" => esc_html__("Title Font Size", "lpd_vc_elements"),
					"param_name" => "title_font_size",
					"value" => 18,
					"description" => esc_html__("Choose title font size, value in pixels.", "lpd_vc_elements"),
				),
				array(
					"type" => "textfield",
					"class" => "",
					"heading" => esc_html__("Title Letter Spacing", "lpd_vc_elements"),
					"param_name" => "title_letter_spacing",
					"value" => 0,
					"description" => esc_html__("Choose title letter spacing, value in pixels.", "lpd_vc_elements"),
				),
		         array(
		            "type" => "colorpicker",
		            "class" => "",
		            "heading" => esc_html__( "Title Color", "lpd_vc_elements" ),
		            "param_name" => "title_color",
		            "value" => '#252525',
		            "description" => esc_html__( "Choose title color", "lpd_vc_elements" ),
		         ),
		         array(
		            "type" => "colorpicker",
		            "class" => "",
		            "heading" => esc_html__( "Title Hover Color", "lpd_vc_elements" ),
		            "param_name" => "title_hover_color",
		            "value" => '#252525',
		            "description" => esc_html__( "Choose title hover color", "lpd_vc_elements" ),
		         ),
				array(
					"type" => "textarea_html",
					"class" => "",
					"heading" => esc_html__("Description", "lpd_vc_elements"),
					"param_name" => "content",
					"value" => "",
					"description" => esc_html__("Provide the description for this icon box.", "lpd_vc_elements"),
				),
				array(
					"type" => "textfield",
					"class" => "",
					"heading" => esc_html__("Description Margin Top", "lpd_vc_elements"),
					"param_name" => "content_margin_top",
					"value" => 0,
					"description" => esc_html__("Value in pixels.", "lpd_vc_elements"),
				),
				array(
					"type" => "textfield",
					"class" => "",
					"heading" => esc_html__("Description Font Size", "lpd_vc_elements"),
					"param_name" => "font_size",
					"value" => "",
					"description" => esc_html__("Value in pixels.", "lpd_vc_elements"),
				),
				array(
					"type" => "textfield",
					"class" => "",
					"heading" => esc_html__("Box Width", "lpd_vc_elements"),
					"param_name" => "box_width",
					"value" => "",
					"description" => esc_html__("Value in percent.", "lpd_vc_elements"),
				),
				array(
					"type" => "dropdown",
					"class" => "",
					"heading" => esc_html__("Box Float", "lpd_vc_elements"),
					"param_name" => "box_float",
					"value" => array(
						__("None","lpd_vc_elements") => "none",
						__("Left","lpd_vc_elements") => "left",
						__("Right","lpd_vc_elements") => "right",
					),
					"description" => esc_html__("Select box float.", "lpd_vc_elements")
				),
				array(
					"type" => "dropdown",
					"class" => "",
					"heading" => esc_html__("Apply link to:", "lpd_vc_elements"),
					"param_name" => "apply_link",
					"value" => array(
						__("No Link","lpd_vc_elements") => "none",
						__("Box Title","lpd_vc_elements") => "title",
					),
					"description" => esc_html__("Select whether to use color for icon or not.", "lpd_vc_elements")
				),
				array(
					"type" => "vc_link",
					"class" => "",
					"heading" => esc_html__("Add Link", "lpd_vc_elements"),
					"param_name" => "link",
					"value" => "",
					"description" => esc_html__("Add a custom link or select existing page. You can remove existing link as well.", "lpd_vc_elements"),
					'dependency' => array(
						'element' => 'apply_link',
						'value' => 'title',
					),
				),
				vc_map_add_css_animation(),
				array(
					'type' => 'textfield',
					'heading' => __( 'Extra class name', 'js_composer' ),
					'param_name' => 'el_class',
					'description' => __( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'lpd_vc_elements' ),
				),
		        array(
		            'type' => 'css_editor',
		            'heading' => esc_html__( 'Css', 'lpd_vc_elements' ),
		            'param_name' => 'css',
		            'group' => esc_html__( 'Design options', 'lpd_vc_elements' ),
		        ),
		      )
		   ) );
		}

	}
}

?>
