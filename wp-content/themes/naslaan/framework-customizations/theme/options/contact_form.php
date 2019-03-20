<?php if (!defined( 'FW' )) die('Forbidden');

	$options = array(
		array(
			'contact_form' => array(
				'title' => esc_html__( 'Contact Form', 'naslaan' ),
				'type' => 'tab',
				'options' => array(
					
					'contact_form_primary_styles' => array(
						'title' => esc_html__( 'Primary styles', 'naslaan' ),
						'type' => 'tab',
						'options' => array(
	
							'contact_form_primary_options-box' => array(
								'title' => esc_html__( 'Primary styles', 'naslaan' ),
								'type' => 'box',
								'options' => array(


									'contact_form_border_color' => array(
									    'type'  => 'rgba-color-picker',
									    'value' => 'rgba(235,235,235,1)',
									    'label' => esc_html__('Border Color', 'naslaan' )
									),
									'contact_form_border_hover_color' => array(
									    'type'  => 'rgba-color-picker',
									    'value' => 'rgba(194,194,194,1)',
									    'label' => esc_html__('Border Focus Color', 'naslaan' )
									),
									'contact_form_bg_color' => array(
									    'type'  => 'rgba-color-picker',
									    'value' => 'rgba(255,255,255,1)',
									    'label' => esc_html__('Form Color', 'naslaan' )
									),
									'contact_form_bg_hover_color' => array(
									    'type'  => 'rgba-color-picker',
									    'value' => 'rgba(255,255,255,1)',
									    'label' => esc_html__('Form Focus Color', 'naslaan' )
									),
									'contact_form_label_font' => array(
									    'type' => 'typography-v2',
									    'value' => array(
									        'family' => 'Lato',
									        'subset' => 'latin',
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
									'contact_form_label_font_color' => array(
									    'type'  => 'rgba-color-picker',
									    'value' => 'rgba(37,37,37,1)',
									    'label' => esc_html__('Label Text Color', 'naslaan' )
									),
									'contact_form_input_text_color' => array(
									    'type'  => 'rgba-color-picker',
									    'value' => 'rgba(37,37,37,0.8)',
									    'label' => esc_html__('Input Text Color', 'naslaan'),
									),
									'contact_form_placeholder_color' => array(
									    'type'  => 'rgba-color-picker',
									    'value' => 'rgba(37,37,37,0.5)',
									    'label' => esc_html__('Placeholder Color', 'naslaan'),
									),
									'contact_form_btn_group' => array(
									    'type' => 'group',
									    'options' => array(

											'contact_form_btn_text' => array(
											    'type' => 'typography-v2',
											    'value' => array(
											        'family' => 'Mntserrat',
											        'subset' => 'latin',
											        'variation' => '600',
											        'size' => 13,
											        'letter-spacing' => 0.5
											    ),
											    'components' => array(
											        'family'         => true,
											        'size'           => true,
											        'line-height'    => false,
											        'letter-spacing' => true,
											        'color'          => false
											    ),
											    'label' => esc_html__('Button Text', 'naslaan' )
											),
											'contact_form_btn_color' => array(
											    'type'  => 'rgba-color-picker',
											    'value' => 'rgba(37,37,37,1)',
											    'label' => esc_html__('Button Text Color', 'naslaan' )
											),
											'contact_form_btn_color_hover' => array(
											    'type'  => 'rgba-color-picker',
											    'value' => 'rgba(255,255,255,1)',
											    'label' => esc_html__('Button Text Hover Color', 'naslaan' )
											),
											'contact_form_btn_background_color' => array(
											    'type'  => 'rgba-color-picker',
											    'value' => 'rgba(255,255,255,1)',
											    'label' => esc_html__('Button Color', 'naslaan' )
											),
											'contact_form_btn_background_color_hover' => array(
											    'type'  => 'rgba-color-picker',
											    'value' => 'rgba(222,0,46,1)',
											    'label' => esc_html__('Button Hover Color', 'naslaan' )
											),
											'contact_form_btn_border_color' => array(
											    'type'  => 'rgba-color-picker',
											    'value' => 'rgba(235,235,235,1)',
											    'label' => esc_html__('Button Color', 'naslaan' )
											),
											'contact_form_btn_border_color_hover' => array(
											    'type'  => 'rgba-color-picker',
											    'value' => 'rrgba(222,0,46,1)',
											    'label' => esc_html__('Button Hover Color', 'naslaan' )
											),
											'contact_form_btn_radius' => array(
												'label' => esc_html__('Button Radius', 'naslaan' ),
												'type' => 'short-text',
												'value' => '0',
												'desc' => esc_html__( 'px', 'naslaan' ),
											),
									    
									    ),
	
									    
									),
								
								)
							),
	
						),
					),
					'contact_form_secondary_styles' => array(
						'title' => esc_html__( 'Secondary styles', 'naslaan' ),
						'type' => 'tab',
						'options' => array(
	
							'contact_form_secondary_options-box' => array(
								'title' => esc_html__( 'Secondary styles', 'naslaan' ),
								'type' => 'box',
								'options' => array(


									'contact_form_secondary_info' => array(
									    'type'  => 'html',
									    'value' => 'default hidden value',
									    'label' => esc_html__('How to use?', 'naslaan' ),
									    'html'  => esc_html__('Use secondary-style with "html_class" attribute in Contact Form 7 shortcode, example: [contact-form-7 id="" title="Contact form 1" html_class="secondary-style"]', 'naslaan' ),
									),
									'contact_form_secondary_border_color' => array(
									    'type'  => 'rgba-color-picker',
									    'value' => 'rgba(235,235,235,1)',
									    'label' => esc_html__('Border Color', 'naslaan' )
									),
									'contact_form_secondary_border_hover_color' => array(
									    'type'  => 'rgba-color-picker',
									    'value' => 'rgba(194,194,194,1)',
									    'label' => esc_html__('Border Focus Color', 'naslaan' )
									),
									'contact_form_secondary_bg_color' => array(
									    'type'  => 'rgba-color-picker',
									    'value' => 'rgba(255,255,255,1)',
									    'label' => esc_html__('Form Color', 'naslaan' )
									),
									'contact_form_secondary_bg_hover_color' => array(
									    'type'  => 'rgba-color-picker',
									    'value' => 'rgba(255,255,255,1)',
									    'label' => esc_html__('Form Focus Color', 'naslaan' )
									),
									'contact_form_secondary_label_font' => array(
									    'type' => 'typography-v2',
									    'value' => array(
									        'family' => 'Lato',
									        'subset' => 'latin',
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
									'contact_form_secondary_label_font_color' => array(
									    'type'  => 'rgba-color-picker',
									    'value' => 'rgba(37,37,37,1)',
									    'label' => esc_html__('Label Text Color', 'naslaan' )
									),
									'contact_form_secondary_input_text_color' => array(
									    'type'  => 'rgba-color-picker',
									    'value' => 'rgba(37,37,37,0.8)',
									    'label' => esc_html__('Input Text Color', 'naslaan'),
									),
									'contact_form_secondary_placeholder_color' => array(
									    'type'  => 'rgba-color-picker',
									    'value' => 'rgba(37,37,37,0.5)',
									    'label' => esc_html__('Placeholder Color', 'naslaan'),
									),
									'contact_form_secondary_btn_group' => array(
									    'type' => 'group',
									    'options' => array(

											'contact_form_secondary_btn_text' => array(
											    'type' => 'typography-v2',
											    'value' => array(
											        'family' => 'Montserrat',
											        'subset' => 'latin',
											        'variation' => '600',
											        'size' => 13,
											        'letter-spacing' => 0.5
											    ),
											    'components' => array(
											        'family'         => true,
											        'size'           => true,
											        'line-height'    => false,
											        'letter-spacing' => true,
											        'color'          => false
											    ),
											    'label' => esc_html__('Button Text', 'naslaan' )
											),
											'contact_form_secondary_btn_color' => array(
											    'type'  => 'rgba-color-picker',
											    'value' => 'rgba(37,37,37,1)',
											    'label' => esc_html__('Button Text Color', 'naslaan' )
											),
											'contact_form_secondary_btn_color_hover' => array(
											    'type'  => 'rgba-color-picker',
											    'value' => 'rgba(255,255,255,1)',
											    'label' => esc_html__('Button Text Hover Color', 'naslaan' )
											),
											'contact_form_secondary_btn_background_color' => array(
											    'type'  => 'rgba-color-picker',
											    'value' => 'rgba(255,255,255,1)',
											    'label' => esc_html__('Button Color', 'naslaan' )
											),
											'contact_form_secondary_btn_background_color_hover' => array(
											    'type'  => 'rgba-color-picker',
											    'value' => 'rgba(79,45,127,1)',
											    'label' => esc_html__('Button Hover Color', 'naslaan' )
											),
											'contact_form_secondary_btn_border_color' => array(
											    'type'  => 'rgba-color-picker',
											    'value' => 'rgba(235,235,235,1)',
											    'label' => esc_html__('Button Color', 'naslaan' )
											),
											'contact_form_secondary_btn_border_color_hover' => array(
											    'type'  => 'rgba-color-picker',
											    'value' => 'rgba(79,45,127,1)',
											    'label' => esc_html__('Button Hover Color', 'naslaan' )
											),
											'contact_form_secondary_btn_radius' => array(
												'label' => esc_html__('Button Radius', 'naslaan' ),
												'type' => 'short-text',
												'value' => '0',
												'desc' => esc_html__( 'px', 'naslaan' ),
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
