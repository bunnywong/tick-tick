<?php
if(!class_exists("lpd_vc_bulleted_list")){
	class lpd_vc_bulleted_list{

		function __construct(){
			add_action( 'vc_before_init',array($this,'lpd_vc_bulleted_list_map'));
			add_shortcode( 'lpd_vc_bulleted_list',array($this,'lpd_vc_bulleted_list_func'));
		}
	
		
		function lpd_vc_bulleted_list_func( $atts, $content = null ) {
		   
			$css_animation = $el_class = $element = $css = '';
			
			extract( shortcode_atts( array(
				'color' => 'rgba(37,37,37,0.8)',
				'link_color' => 'rgba(37,37,37,0.8)',
				'link_hover_color' => '#48cfad',
				'line_height' => '30',
				'list_type' => 'type-1',
				'bottom_border' => '#ebebeb',
				'icon' => '',
				'icon_color' => '#48cfad',
				'css_animation' => '',
				'el_class' => '',
				'css' => ''
			), $atts ) );
			
			$element_id = rand(); 
			
			$custom_css = '';
			
			$custom_css .= '.bulleted-list-'.$element_id.'{';
			$custom_css .= 'color:'.$color.';';
			$custom_css .= '}';
			$custom_css .= '.bulleted-list-'.$element_id.' a{';
			$custom_css .= 'color:'.$link_color.';';
			$custom_css .= '}';
			$custom_css .= '.bulleted-list-'.$element_id.' a:hover{';
			$custom_css .= 'color:'.$link_hover_color.';';
			$custom_css .= '}';
			
			if ($list_type=='type-2') {
				$custom_css .= '.bulleted-list-'.$element_id.'.bulleted-list-type-2{';
				$custom_css .= 'border-top-color:'.$bottom_border.';';
				$custom_css .= '}';
				$custom_css .= '.bulleted-list-'.$element_id.'.bulleted-list-type-2 li{';
				$custom_css .= 'border-bottom-color:'.$bottom_border.';';
				$custom_css .= '}';
			}
			
			if ($list_type=='type-3') {
				$custom_css .= '.bulleted-list-'.$element_id.'.bulleted-list-type-3 li:after{';
				$custom_css .= 'border-bottom-color:'.$bottom_border.';';
				$custom_css .= '}';
			}
			$custom_css .= '.bulleted-list-'.$element_id.'.bulleted-list .material-icons{';
			$custom_css .= 'color:'.$icon_color.';';
			$custom_css .= '}';
			
			if ( $el_class != "" ) { $el_class = $el_class.' ';}
			
			$el_class .= 'bulleted-list-'.$element_id;
			$el_class .= ' bulleted-list-'.$line_height;
			$el_class .= ' bulleted-list-'.$list_type;
			
			if($css_animation!=""){
				wp_enqueue_script( 'waypoints' );
				$css_animation = ' wpb_animate_when_almost_visible wpb_' . $css_animation. ' ' . $css_animation. ' ';
			}
			
			$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, $css_animation .vc_shortcode_custom_css_class( $css, ' ' ), 'lpd_vc_bulleted_list', $atts );
			
			$content = explode("\n",strip_tags($content));

			$element .= '<div class="'.esc_attr( $css_class ).'">';
			$element .= '<ul class="bulleted-list '.esc_attr( $el_class ).'">';
			foreach($content as $list){
			
				$list = explode("|",$list);
				
				if ( ! isset($list[1])) {
					$list[1] = null;
				}
				
				$element .= '<li>';
					if($icon) {
						$element .= '<i class="material-icons">'.$icon.'</i>';
					}
					if($list[1]) { $element .= '<a href="'.esc_url($list[1]).'">'; }
					$element .=  $list[0];
					if($list[1]) { $element .= '</a>'; }
				$element .= '</li>';
			}
			$element .= '</ul>';
			$element .= '</div>';
			
			$element .= '<style scoped>'.$custom_css.'</style>';
			
			return $element;
			 
		}
		
		function lpd_vc_bulleted_list_map() {
		   vc_map( array(
		      "name" => esc_html__( "Bulleted List", "lpd_vc_elements" ),
		      "base" => "lpd_vc_bulleted_list",
		      "class" => "",
		      "category" => esc_html__( "Content", "lpd_vc_elements"),
		      'admin_enqueue_css' => array( plugins_url('/admin.css',__FILE__)),
		      "params" => array(
		         array(
		            "type" => "colorpicker",
		            "class" => "",
		            "heading" => esc_html__( "Text color", "lpd_vc_elements" ),
		            "param_name" => "color",
		            "value" => 'rgba(37,37,37,0.8)',
		            "description" => esc_html__( "Choose text color", "lpd_vc_elements" )
		         ),
		         array(
		            "type" => "colorpicker",
		            "class" => "",
		            "heading" => esc_html__( "Link color", "lpd_vc_elements" ),
		            "param_name" => "link_color",
		            "value" => 'rgba(37,37,37,0.8)',
		            "description" => esc_html__( "Choose link color", "lpd_vc_elements" )
		         ),
		         array(
		            "type" => "colorpicker",
		            "class" => "",
		            "heading" => esc_html__( "Link hover color", "lpd_vc_elements" ),
		            "param_name" => "link_hover_color",
		            "value" => '#48cfad',
		            "description" => esc_html__( "Choose link hover color", "lpd_vc_elements" )
		         ),
				array(
					"type" => "dropdown",
					"class" => "",
					"heading" => esc_html__("Line Height", "lpd_vc_elements"),
					"param_name" => "line_height",
					"admin_label" => true,
					"value" =>  array(
							__("30px","lpd_vc_elements") => "30",
							__("40px","lpd_vc_elements") => "40",
							__("50px","lpd_vc_elements") => "50",
						),
				),
				array(
					"type" => "dropdown",
					"class" => "",
					"heading" => esc_html__("List Type", "lpd_vc_elements"),
					"param_name" => "list_type",
					"admin_label" => true,
					"value" =>  array(
							__("Type 1","lpd_vc_elements") => "type-1",
							__("Type 2","lpd_vc_elements") => "type-2",
							__("Type 3","lpd_vc_elements") => "type-3",
						),
				),
		         array(
		            "type" => "colorpicker",
		            "class" => "",
		            "heading" => esc_html__( "Bottom Border", "lpd_vc_elements" ),
		            "param_name" => "bottom_border",
		            "value" => '#ebebeb',
		            "description" => esc_html__( "Choose bottom border color", "lpd_vc_elements" ),
					'dependency' => array(
						'element' => 'list_type',
						'value_not_equal_to' => 'type-1',
					),
		         ),
		         array(
		            "type" => "textfield",
		            "class" => "",
		            "heading" => esc_html__( "Icon", "lpd_vc_elements" ),
		            "param_name" => "icon",
		            "value" => '',
		            "description" => esc_html__( "Material icons html code or icon name, find full list of icons on <a href='https://design.google.com/icons/'>link..</a>, example: 'check' or '&amp;#xE5CA;'", "lpd_vc_elements" )
		         ),
		         array(
		            "type" => "colorpicker",
		            "class" => "",
		            "heading" => esc_html__( "Icon color", "lpd_vc_elements" ),
		            "param_name" => "icon_color",
		            "value" => '#48cfad',
		            "description" => esc_html__( "Choose icon color", "lpd_vc_elements" )
		         ),
		         array(
		            "type" => "textarea",
		            "holder" => "div",
		            "class" => "",
		            "heading" => esc_html__( "Content", "lpd_vc_elements" ),
		            "param_name" => "content",
		            "value" => "",
		            "description" => esc_html__( "Place list item on each new line, example: 'list item one|http://themeforest.net/'", "lpd_vc_elements" )
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