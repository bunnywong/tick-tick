<?php

	if ( ! defined( 'FW' ) ) {
		die( 'Forbidden' );
	}

	$options = array(
		array(
			'general' => array(
				'title' => esc_html__( 'General', 'naslaan' ),
				'type' => 'tab',
				'options' => array(
				
					'general_options' => array(
						'title' => esc_html__( 'General options', 'naslaan' ),
						'type' => 'tab',
						'options' => array(
	
							'theme_options-box' => array(
								'title' => esc_html__( 'General options', 'naslaan' ),
								'type' => 'box',
								'options' => array(
		
									'body_color' => array(
									    'type'  => 'rgba-color-picker',
									    'value' => 'rgba(255,255,255,1)',
									    'label' => esc_html__('Body Color', 'naslaan'),
									),
									'header_layouts' => array(
									    'type'  => 'select',
									    'value' => '1200',
									    'label' => esc_html__('Header Layouts', 'naslaan' ),
									    'choices' => array(
									    	'full' => esc_html__('full width', 'naslaan' ),
									        '1480' => esc_html__('1480px width', 'naslaan' ),
									        '1200' => esc_html__('1200px width', 'naslaan' ),
									    ),
									),
									'title_layouts' => array(
									    'type'  => 'select',
									    'value' => '1200',
									    'label' => esc_html__('Title Layouts', 'naslaan' ),
									    'choices' => array(
									    	'full' => esc_html__('full width', 'naslaan' ),
									        '1480' => esc_html__('1480px width', 'naslaan' ),
									        '1200' => esc_html__('1200px width', 'naslaan' ),
									    ),
									),
									'main_layouts' => array(
									    'type'  => 'select',
									    'value' => '1200',
									    'label' => esc_html__('Page Layouts', 'naslaan' ),
									    'choices' => array(
									    	'full' => esc_html__('full width', 'naslaan' ),
									        '1480' => esc_html__('1480px width', 'naslaan' ),
									        '1200' => esc_html__('1200px width', 'naslaan' ),
									    ),
									),
									'footer_layouts' => array(
									    'type'  => 'select',
									    'value' => '1200',
									    'label' => esc_html__('Footer Layouts', 'naslaan' ),
									    'choices' => array(
									    	'full' => esc_html__('full width', 'naslaan' ),
									        '1480' => esc_html__('1480px width', 'naslaan' ),
									        '1200' => esc_html__('1200px width', 'naslaan' ),
									    ),
									),
									
								)
							),
	
						),
					),
					
					'typography_options' => array(
						'title' => esc_html__( 'Typography', 'naslaan' ),
						'type' => 'tab',
						'options' => array(
	
							'theme_options-box' => array(
								'title' => esc_html__( 'Typography', 'naslaan' ),
								'type' => 'box',
								'options' => array(
		
									'body_font' => array(
									    'type' => 'typography-v2',
									    'value' => array(
									        'family' => 'Lato',
									        'subset' => 'latin-ext',
									        'variation' => 'regular',
									        'size' => 17,
									        'line-height' => 1.7,
									        'letter-spacing' => 0.3,
									    ),
									    'components' => array(
									        'family'         => true,
									        'size'           => true,
									        'line-height'    => true,
									        'letter-spacing' => true,
									        'color'          => false
									    ),
									    'label' => esc_html__('Body Font', 'naslaan'),
									),
									
									'body_font_color' => array(
									    'type'  => 'rgba-color-picker',
									    'value' => 'rgba(112,112,112,1)',
									    'label' => esc_html__('Body Font Color', 'naslaan'),
									),
									
									'link_color' => array(
									    'type'  => 'rgba-color-picker',
									    'value' => 'rgba(79,45,127,1)',
									    'label' => esc_html__('Link Color', 'naslaan'),
									),
									
									'link_hover_color' => array(
									    'type'  => 'rgba-color-picker',
									    'value' => 'rgba(222,0,46,1)',
									    'label' => esc_html__('Link Hover Color', 'naslaan'),
									),
									
									'headings_font' => array(
									    'type' => 'typography-v2',
									    'value' => array(
									        'family' => 'Montserrat',
									        'subset' => 'latin-ext',
									        'variation' => '700',
									        'line-height' => 1.4,
									        'letter-spacing' => 0,
									    ),
									    'components' => array(
									        'family'         => true,
									        'size'           => false,
									        'line-height'    => true,
									        'letter-spacing' => true,
									        'color'          => false
									    ),
									    'label' => esc_html__('Headings Font', 'naslaan'),
									),
									
									'headings_font_color' => array(
									    'type'  => 'rgba-color-picker',
									    'value' => 'rgba(37,37,37,1)',
									    'label' => esc_html__('Headings Font Color', 'naslaan'),
									),


								)
							),
	
						),
					),
					
					'btn_options' => array(
						'title' => esc_html__( 'Inner Buttons', 'naslaan' ),
						'type' => 'tab',
						'options' => array(
	
							'theme_options-box' => array(
								'title' => esc_html__( 'Inner Buttons', 'naslaan' ),
								'type' => 'box',
								'options' => array(
		
									'btn_group' => array(
									    'type' => 'group',
									    'options' => array(

											'btn_text' => array(
											    'type' => 'typography-v2',
											    'value' => array(
											        'family' => 'Montserrat',
											        'subset' => 'latin-ext',
											        'variation' => '600',
											        'letter-spacing' => 0.3
											    ),
											    'components' => array(
											        'family'         => true,
											        'size'           => false,
											        'line-height'    => false,
											        'letter-spacing' => true,
											        'color'          => false
											    ),
											    'label' => esc_html__('Button Text', 'naslaan' )
											),
											'btn_uppercase' =>array(
											    'type'  => 'switch',
											    'value' => 'enabled',
											    'label' => esc_html__('Button Uppercase', 'naslaan' ),
											    'left-choice' => array(
											        'value' => 'disabled',
											        'label' => esc_html__('Disabled', 'naslaan' ),
											    ),
											    'right-choice' => array(
											        'value' => 'enabled',
											        'label' => esc_html__('Enabled', 'naslaan' ),
											    ),
											),
											'btn_color' => array(
											    'type'  => 'rgba-color-picker',
											    'value' => 'rgba(37,37,37,1)',
											    'label' => esc_html__('Button Text Color', 'naslaan' )
											),
											'btn_color_hover' => array(
											    'type'  => 'rgba-color-picker',
											    'value' => 'rgba(255,255,255,1)',
											    'label' => esc_html__('Button Text Hover Color', 'naslaan' )
											),
											'btn_background_color' => array(
											    'type'  => 'rgba-color-picker',
											    'value' => 'rgba(255,255,255,1)',
											    'label' => esc_html__('Button Color', 'naslaan' )
											),
											'btn_background_color_hover' => array(
											    'type'  => 'rgba-color-picker',
											    'value' => 'rgba(222,0,46,1)',
											    'label' => esc_html__('Button Hover Color', 'naslaan' )
											),
											'btn_border_color' => array(
											    'type'  => 'rgba-color-picker',
											    'value' => 'rgba(225,225,225,1)',
											    'label' => esc_html__('Button Border Color', 'naslaan' )
											),
											'btn_border_color_hover' => array(
											    'type'  => 'rgba-color-picker',
											    'value' => 'rgba(222,0,46,1)',
											    'label' => esc_html__('Button Border Hover Color', 'naslaan' )
											),
											'alt_btn_color' => array(
											    'type'  => 'rgba-color-picker',
											    'value' => 'rgba(37,37,37,1)',
											    'label' => esc_html__('Alt. Button Text Color', 'naslaan' )
											),
											'alt_btn_color_hover' => array(
											    'type'  => 'rgba-color-picker',
											    'value' => 'rgba(255,255,255,1)',
											    'label' => esc_html__('Alt. Button Text Hover Color', 'naslaan' )
											),
											'alt_btn_background_color' => array(
											    'type'  => 'rgba-color-picker',
											    'value' => 'rgba(255,255,255,1)',
											    'label' => esc_html__('Alt. Button Color', 'naslaan' )
											),
											'alt_btn_background_color_hover' => array(
											    'type'  => 'rgba-color-picker',
											    'value' => 'rgba(79,45,127,1)',
											    'label' => esc_html__('Alt. Button Hover Color', 'naslaan' )
											),
											'alt_btn_border_color' => array(
											    'type'  => 'rgba-color-picker',
											    'value' => 'rgba(225,225,225,1)',
											    'label' => esc_html__('Alt. Button Border Color', 'naslaan' )
											),
											'alt_btn_border_color_hover' => array(
											    'type'  => 'rgba-color-picker',
											    'value' => 'rgba(79,45,127,1)',
											    'label' => esc_html__('Alt. Button Border Hover Color', 'naslaan' )
											),
											
									    ),
									    
									),
									
									'lg_btn_group' => array(
									    'type' => 'group',
									    'options' => array(

											'lg_btn_title' => array(
												'label' => esc_html__('Large Button', 'naslaan' ),
												'type' => 'html',
												'html'  => esc_html__('Styles for large button.', 'naslaan' ),
											),
											'lg_btn_paddings' =>array(
											    'type'  => 'html',
											    'label' => esc_html__('Padding', 'naslaan' ),
											    'html'  => '',
											),
											'lg_btn_padding_top' => array(
												'label' => '',
												'type' => 'short-text',
												'value' => '14',
												'desc' => esc_html__( 'top', 'naslaan' ),
											),
											'lg_btn_padding_right' => array(
												'label' => '',
												'type' => 'short-text',
												'value' => '30',
												'desc' => esc_html__( 'right', 'naslaan' ),
											),
											'lg_btn_padding_bottom' => array(
												'label' => '',
												'type' => 'short-text',
												'value' => '14',
												'desc' => esc_html__( 'bottom', 'naslaan' ),
											),
											'lg_btn_padding_left' => array(
												'label' => '',
												'type' => 'short-text',
												'value' => '30',
												'desc' => esc_html__( 'left', 'naslaan' ),
											),
											'lg_btn_padding_clearfix' =>array(
											    'type'  => 'html',
											    'label' => '',
											    'html'  => '<div class="wp-clearfix"></div>',
											),
											'lg_btn_font_size' => array(
												'label' => esc_html__('Font Size', 'naslaan' ),
												'type' => 'short-text',
												'value' => '14',
												'desc' => esc_html__( 'pixels', 'naslaan' ),
											),
											'lg_btn_radius' => array(
												'label' => esc_html__('Button Radius', 'naslaan' ),
												'type' => 'short-text',
												'value' => '0',
												'desc' => esc_html__( 'pixels', 'naslaan' ),
											),
									    
									    ),
									    
									),
									
									'md_btn_group' => array(
									    'type' => 'group',
									    'options' => array(

											'md_btn_title' => array(
												'label' => esc_html__('Medium Button', 'naslaan' ),
												'type' => 'html',
												'html'  => esc_html__('Styles for medium button.', 'naslaan' ),
											),
											'md_btn_paddings' =>array(
											    'type'  => 'html',
											    'label' => esc_html__('Padding', 'naslaan' ),
											    'html'  => '',
											),
											'md_btn_padding_top' => array(
												'label' => '',
												'type' => 'short-text',
												'value' => '8',
												'desc' => esc_html__( 'top', 'naslaan' ),
											),
											'md_btn_padding_right' => array(
												'label' => '',
												'type' => 'short-text',
												'value' => '25',
												'desc' => esc_html__( 'right', 'naslaan' ),
											),
											'md_btn_padding_bottom' => array(
												'label' => '',
												'type' => 'short-text',
												'value' => '8',
												'desc' => esc_html__( 'bottom', 'naslaan' ),
											),
											'md_btn_padding_left' => array(
												'label' => '',
												'type' => 'short-text',
												'value' => '25',
												'desc' => esc_html__( 'left', 'naslaan' ),
											),
											'md_btn_padding_clearfix' =>array(
											    'type'  => 'html',
											    'label' => '',
											    'html'  => '<div class="wp-clearfix"></div>',
											),
											'md_btn_font_size' => array(
												'label' => esc_html__('Font Size', 'naslaan' ),
												'type' => 'short-text',
												'value' => '14',
												'desc' => esc_html__( 'pixels', 'naslaan' ),
											),
											'md_btn_radius' => array(
												'label' => esc_html__('Button Radius', 'naslaan' ),
												'type' => 'short-text',
												'value' => '0',
												'desc' => esc_html__( 'pixels', 'naslaan' ),
											),
									    
									    ),
									    
									),
									
									'sm_btn_group' => array(
									    'type' => 'group',
									    'options' => array(

											'sm_btn_title' => array(
												'label' => esc_html__('Small Button', 'naslaan' ),
												'type' => 'html',
												'html'  => esc_html__('Styles for small button.', 'naslaan' ),
											),
											'sm_btn_paddings' =>array(
											    'type'  => 'html',
											    'label' => esc_html__('Padding', 'naslaan' ),
											    'html'  => '',
											),
											'sm_btn_padding_top' => array(
												'label' => '',
												'type' => 'short-text',
												'value' => '5',
												'desc' => esc_html__( 'top', 'naslaan' ),
											),
											'sm_btn_padding_right' => array(
												'label' => '',
												'type' => 'short-text',
												'value' => '20',
												'desc' => esc_html__( 'right', 'naslaan' ),
											),
											'sm_btn_padding_bottom' => array(
												'label' => '',
												'type' => 'short-text',
												'value' => '5',
												'desc' => esc_html__( 'bottom', 'naslaan' ),
											),
											'sm_btn_padding_left' => array(
												'label' => '',
												'type' => 'short-text',
												'value' => '20',
												'desc' => esc_html__( 'left', 'naslaan' ),
											),
											'sm_btn_padding_clearfix' =>array(
											    'type'  => 'html',
											    'label' => '',
											    'html'  => '<div class="wp-clearfix"></div>',
											),
											'sm_btn_font_size' => array(
												'label' => esc_html__('Font Size', 'naslaan' ),
												'type' => 'short-text',
												'value' => '14',
												'desc' => esc_html__( 'pixels', 'naslaan' ),
											),
											'sm_btn_radius' => array(
												'label' => esc_html__('Button Radius', 'naslaan' ),
												'type' => 'short-text',
												'value' => '0',
												'desc' => esc_html__( 'pixels', 'naslaan' ),
											),
									    
									    ),
									    
									),

								)
							),
	
						),
					),
					
					'form_options' => array(
						'title' => esc_html__( 'Inner Forms', 'naslaan' ),
						'type' => 'tab',
						'options' => array(
	
							'theme_options-box' => array(
								'title' => esc_html__( 'Inner Forms', 'naslaan' ),
								'type' => 'box',
								'options' => array(
		
									'form_group' => array(
									    'type' => 'group',
									    'options' => array(
											'form_text_color' => array(
											    'type'  => 'rgba-color-picker',
											    'value' => 'rgba(37,37,37,1)',
											    'label' => esc_html__('Text Color', 'naslaan' )
											),
											'form_border_color' => array(
											    'type'  => 'rgba-color-picker',
											    'value' => 'rgba(235,235,235,1)',
											    'label' => esc_html__('Border Color', 'naslaan' )
											),
											'form_border_hover_color' => array(
											    'type'  => 'rgba-color-picker',
											    'value' => 'rgba(194,194,194,1)',
											    'label' => esc_html__('Border Focus Color', 'naslaan' )
											),
											'form_bg_color' => array(
											    'type'  => 'rgba-color-picker',
											    'value' => 'rgba(255,255,255,1)',
											    'label' => esc_html__('Form Color', 'naslaan' )
											),
											'form_bg_hover_color' => array(
											    'type'  => 'rgba-color-picker',
											    'value' => 'rgba(255,255,255,1)',
											    'label' => esc_html__('Form Focus Color', 'naslaan' )
											),
											'form_paddings' =>array(
											    'type'  => 'html',
											    'label' => esc_html__('Padding', 'naslaan' ),
											    'html'  => '',
											),
											'form_padding_top' => array(
												'label' => '',
												'type' => 'short-text',
												'value' => '13',
												'desc' => esc_html__( 'top', 'naslaan' ),
											),
											'form_padding_right' => array(
												'label' => '',
												'type' => 'short-text',
												'value' => '20',
												'desc' => esc_html__( 'right', 'naslaan' ),
											),
											'form_padding_bottom' => array(
												'label' => '',
												'type' => 'short-text',
												'value' => '13',
												'desc' => esc_html__( 'bottom', 'naslaan' ),
											),
											'form_padding_left' => array(
												'label' => '',
												'type' => 'short-text',
												'value' => '20',
												'desc' => esc_html__( 'left', 'naslaan' ),
											),
											'form_padding_clearfix' =>array(
											    'type'  => 'html',
											    'label' => '',
											    'html'  => '<div class="wp-clearfix"></div>',
											),
											'form_label_font' => array(
											    'type' => 'typography-v2',
											    'value' => array(
											        'family' => 'Lato',
											        'subset' => 'latin-ext',
											        'variation' => 'regular',
											        'size' => 16,
											        'letter-spacing' => 0,
											    ),
											    'components' => array(
											        'family'         => true,
											        'size'           => true,
											        'line-height'    => false,
											        'letter-spacing' => true,
											        'color'          => false
											    ),
											    'label' => esc_html__('Form Label Font', 'naslaan'),
											),
									    ),
	
									    
									),

								)
							),
	
						),
					),			
					
					'sidebar_options' => array(
						'title' => esc_html__( 'Sidebar', 'naslaan' ),
						'type' => 'tab',
						'options' => array(
	
	
							'theme_options-box' => array(
								'title' => esc_html__( 'Sidebar', 'naslaan' ),
								'type' => 'box',
								'options' => array(
								
									'widget_link_color_group' => array(
									    'type' => 'group',
									    'options' => array(

											'widget_link_color' => array(
											    'type'  => 'rgba-color-picker',
											    'value' => 'rgba(79,45,127,1)',
											    'label' => esc_html__('Link Color', 'naslaan'),
											),
											
											'widget_link_hover_color' => array(
											    'type'  => 'rgba-color-picker',
											    'value' => 'rgba(222,0,46,1)',
											    'label' => esc_html__('Link Hover Color', 'naslaan'),
											),
									    
									    ),
									    
									),								

									'widget_title_font' => array(
									    'type' => 'typography-v2',
									    'value' => array(
									        'family' => 'Montserrat',
									        'subset' => 'latin',
									        'variation' => '700',
									        'size' => 20,
									        'letter-spacing' => 0,
									        'color' => '#252525'
									    ),
									    'components' => array(
									        'family'         => true,
									        'size'           => true,
									        'line-height'    => false,
									        'letter-spacing' => true,
									        'color'          => true
									    ),
									    'label' => esc_html__('Widget Title Font', 'naslaan'),
									),
									
									'widget_list_link_color_group' => array(
									    'type' => 'group',
									    'options' => array(
									    
									    
											'widget_style_variant' => array(
												'type' => 'multi-picker',
												'show_borders' => false,
												'label' => false,
												'desc' => false,
												'value' => array(
													'widget_variant' => 'variant-2',
												),
												'picker' => array(
													'widget_variant' => array(
														'type'  => 'radio',
													    'label' => esc_html__('Widget Style', 'naslaan' ),
													    'choices' => array(
													        'variant-2' => esc_html__('Variant 2', 'naslaan' ),
													    ),
													    'inline' => false,
													)
												),
												'choices' => array(
													'variant-1' => array(),
													'variant-2' => array()
												),
				
											),

											'widget_list_link_color' => array(
											    'type'  => 'rgba-color-picker',
											    'value' => 'rgba(79,45,127,1)',
											    'label' => esc_html__('Widget List Link Color', 'naslaan'),
											),
											
											'widget_list_link_hover_color' => array(
											    'type'  => 'rgba-color-picker',
											    'value' => 'rgba(222,0,46,1)',
											    'label' => esc_html__('Widget List Link Hover Color', 'naslaan'),
											),
									    ),
									    
									),
									'tag_widget_group' => array(
									    'type' => 'group',
									    'options' => array(

											'tag_widget_title_font' => array(
											    'type' => 'typography-v2',
											    'value' => array(
											        'family' => 'Lato',
											        'subset' => 'latin-ext',
											        'variation' => 'regular',
											        'size' => 16,
											        'letter-spacing' => 0,
											    ),
											    'components' => array(
											        'family'         => true,
											        'size'           => true,
											        'line-height'    => false,
											        'letter-spacing' => true,
											        'color'          => false
											    ),
											    'label' => esc_html__('Tag Widget Font', 'naslaan'),
											),
											'tag_widget_color' => array(
											    'type'  => 'rgba-color-picker',
											    'value' => 'rgba(112,112,112,1)',
											    'label' => esc_html__('Tag Text Color', 'naslaan'),
											),
											
											'tag_text_hover_color' => array(
											    'type'  => 'rgba-color-picker',
											    'value' => 'rgba(79,45,127,1)',
											    'label' => esc_html__('Tag Text Hover Color', 'naslaan'),
											),
									    
									    ),
									    
									),

								)
							),
	
						),
					),
					
					'custom_cssjs_options' => array(
						'title' => esc_html__( 'Custom Css/Js', 'naslaan' ),
						'type' => 'tab',
						'options' => array(
						
							'custom_cssjs_options-box' => array(
								'title' => esc_html__( 'Custom Css/Js', 'naslaan' ),
								'type' => 'box',
								'options' => array(
								
									'custom_css' => array(
									    'type'  => 'textarea',
									    'value' => '.widget ul li{font-size: 16px;}',
									    'label' => esc_html__('Custom Css', 'naslaan'),
									),
									
									'custom_js' => array(
									    'type'  => 'textarea',
									    'value' => '',
									    'label' => esc_html__('Custom Js', 'naslaan'),
									),
									
								)
							),
	
						),
					),
					
					'search_page_options' => array(
						'title' => esc_html__( 'Search Page', 'naslaan' ),
						'type' => 'tab',
						'options' => array(
						
							'search_page_options-box' => array(
								'title' => esc_html__( 'Search Page', 'naslaan' ),
								'type' => 'box',
								'options' => array(

									'search_page_thumbnail_group' => array(
									    'type' => 'group',
									    'options' => array(

											'search_page_thumb_overlay_color' => array(
											    'type'  => 'rgba-color-picker',
											    'value' => 'rgba(255,255,255,0.3)',
											    'label' => esc_html__('Thumbnail Overlay Color', 'naslaan'),
											),
											'search_page_thumb_btn_color' => array(
											    'type'  => 'rgba-color-picker',
											    'value' => 'rgba(79,45,127,1)',
											    'label' => esc_html__('Thumbnail Button Color', 'naslaan'),
											),
											'search_page_thumb_btn_hover_color' => array(
											    'type'  => 'rgba-color-picker',
											    'value' => 'rgba(222,0,46,1)',
											    'label' => esc_html__('Thumbnail Button Hover Color', 'naslaan'),
											),
									    
									    ),
									    
									),
									'search_page_title_group' => array(
									    'type' => 'group',
									    'options' => array(

											'search_page_title' => array(
											    'type' => 'typography-v2',
											    'value' => array(
											        'family' => 'Montserrat',
											        'subset' => 'latin',
											        'variation' => 'regular',
											        'size' => 18,
											        'letter-spacing' => 0,
											    ),
											    'components' => array(
											        'family'         => true,
											        'size'           => true,
											        'line-height'    => false,
											        'letter-spacing' => true,
											        'color'          => false
											    ),
											    'label' => esc_html__('Post Title Font', 'naslaan'),
											),
											'search_page_title_color' => array(
											    'type'  => 'rgba-color-picker',
											    'value' => 'rgba(37,37,37,1)',
											    'label' => esc_html__('Title Color', 'naslaan'),
											),
											'search_page_title_hover_color' => array(
											    'type'  => 'rgba-color-picker',
											    'value' => 'rgba(79,45,127,1)',
											    'label' => esc_html__('Title Hover Color', 'naslaan'),
											),
									    
									    ),
									    
									),
									'search_page_img_replacement' =>array(
									    'type'  => 'switch',
									    'value' => 'enabled',
									    'label' => esc_html__('Image Replacement', 'naslaan' ),
									    'left-choice' => array(
									        'value' => 'disabled',
									        'label' => esc_html__('Disabled', 'naslaan' ),
									    ),
									    'right-choice' => array(
									        'value' => 'enabled',
									        'label' => esc_html__('Enabled', 'naslaan' ),
									    ),
									),
								
								)
							),
	
						),
					),
					'pageloader' => array(
						'title' => esc_html__( 'Pageloader', 'naslaan' ),
						'type' => 'tab',
						'options' => array(
	
							'theme_options-box' => array(
								'title' => esc_html__( 'Pageloader', 'naslaan' ),
								'type' => 'box',
								'options' => array(

									'back_to_top_group' => array(
									    'type' => 'group',
									    'options' => array(
									    
									    
											'pageloader_switch' => array(
												'type' => 'multi-picker',
												'label' => false,
												'desc' => false,
												'picker' => array(
													'pageloader_visibility' => array(
														'type'  => 'switch',
													    'value' => 'disabled',
													    'label' => esc_html__('Pageloader', 'naslaan' ),
													    'left-choice' => array(
													        'value' => 'disabled',
													        'label' => esc_html__('Disabled', 'naslaan' ),
													    ),
													    'right-choice' => array(
													        'value' => 'enabled',
													        'label' => esc_html__('Enabled', 'naslaan' ),
													    ),
													)
												),
												'choices' => array(
													'enabled' => array(
													
														'pageloader_bg' => array(
														    'type'  => 'rgba-color-picker',
														    'value' => 'rgba(255,255,255,1)',
														    'label' => esc_html__('Background', 'naslaan' )
														),
														'pageloader_spinner' => array(
														    'type'  => 'rgba-color-picker',
														    'value' => 'rgba(79,45,127,1)',
														    'label' => esc_html__('Spinner Color', 'naslaan' )
														),
													),
												),
												'show_borders' => false,
											),
									    
										),
									),							
								
								)
							),
	
						),
					),
					'back_to_top' => array(
						'title' => esc_html__( 'Back To Top Scroll', 'naslaan' ),
						'type' => 'tab',
						'options' => array(
	
							'theme_options-box' => array(
								'title' => esc_html__( 'Back To Top Scroll', 'naslaan' ),
								'type' => 'box',
								'options' => array(

									'back_to_top_group' => array(
									    'type' => 'group',
									    'options' => array(
									    
									    
											'back_to_top_switch' => array(
												'type' => 'multi-picker',
												'label' => false,
												'desc' => false,
												'picker' => array(
													'back_to_top_visibility' => array(
														'type'  => 'switch',
													    'value' => 'disabled',
													    'label' => esc_html__('Back To Top Button', 'naslaan' ),
													    'left-choice' => array(
													        'value' => 'disabled',
													        'label' => esc_html__('Disabled', 'naslaan' ),
													    ),
													    'right-choice' => array(
													        'value' => 'enabled',
													        'label' => esc_html__('Enabled', 'naslaan' ),
													    ),
													)
												),
												'choices' => array(
													'enabled' => array(
													
														'back_to_top_bg_color' => array(
														    'type'  => 'rgba-color-picker',
														    'value' => 'rgba(79,45,127,1)',
														    'label' => esc_html__('Background Color', 'naslaan' )
														),
														'back_to_top_bg_hover_color' => array(
														    'type'  => 'rgba-color-picker',
														    'value' => 'rgba(222,0,46,1)',
														    'label' => esc_html__('Background Hover', 'naslaan' )
														),
														'back_to_top_color' => array(
														    'type'  => 'rgba-color-picker',
														    'value' => 'rgba(255,255,255,1)',
														    'label' => esc_html__('Color', 'naslaan' )
														),
														'back_to_top_hover_color' => array(
														    'type'  => 'rgba-color-picker',
														    'value' => 'rgba(255,255,255,1)',
														    'label' => esc_html__('Hover Color', 'naslaan' )
														),
														'back_to_top_bg_size' => array(
															'label' => esc_html__('Background Size', 'naslaan' ),
															'type' => 'short-text',
															'value' => '50',
															'desc' => esc_html__( 'Pixels', 'naslaan' ),
														),
														'back_to_top_bg_icon_size' => array(
															'label' => esc_html__('Icon Size', 'naslaan' ),
															'type' => 'short-text',
															'value' => '30',
															'desc' => esc_html__( 'Pixels', 'naslaan' ),
														),
														'back_to_top_bg_border_radius' => array(
															'label' => esc_html__('Border Radius', 'naslaan' ),
															'type' => 'short-text',
															'value' => '25',
															'desc' => esc_html__( 'Pixels', 'naslaan' ),
														),
														'back_to_top_margins' =>array(
														    'type'  => 'html',
														    'label' => esc_html__('Header Margins', 'naslaan' ),
														    'html'  => '',
														),
														'back_to_top_margin_top' => array(
															'label' => '',
															'type' => 'short-text',
															'value' => '20',
															'desc' => esc_html__( 'top', 'naslaan' ),
														),
														'back_to_top_margin_right' => array(
															'label' => '',
															'type' => 'short-text',
															'value' => '20',
															'desc' => esc_html__( 'right', 'naslaan' ),
														),
														'back_to_top_margin_bottom' => array(
															'label' => '',
															'type' => 'short-text',
															'value' => '20',
															'desc' => esc_html__( 'bottom', 'naslaan' ),
														),
														'back_to_top_margin_left' => array(
															'label' => '',
															'type' => 'short-text',
															'value' => '20',
															'desc' => esc_html__( 'left', 'naslaan' ),
														),
														'back_to_top_margin_clearfix' =>array(
														    'type'  => 'html',
														    'label' => '',
														    'html'  => '<div class="wp-clearfix"></div>',
														),
				
													),
												),
												'show_borders' => false,
											),
									    
										),
									),							
								
								)
							),
	
						),
					),
					
				)
			)
		),
	);
	
	?>