<?php

	if ( ! defined( 'FW' ) ) {
		die( 'Forbidden' );
	}

	$options = array(
		array(
			'footer' => array(
				'title' => esc_html__( 'Footer', 'naslaan' ),
				'type' => 'tab',
				'options' => array(
				
					'footer_options' => array(
						'title' => esc_html__( 'Footer options', 'naslaan' ),
						'type' => 'tab',
						'options' => array(
	
							'theme_options-box' => array(
								'title' => esc_html__( 'Footer options', 'naslaan' ),
								'type' => 'box',
								'options' => array(
								
									'footer_options' => array(
										'type' => 'multi-picker',
										'label' => false,
										'desc' => false,
										'picker' => array(
											'footer_switch' => array(
												'type'  => 'switch',
											    'value' => 'enabled',
											    'label' => esc_html__('Footer', 'naslaan' ),
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
		
												'footer_background' => array(
													'type' => 'multi-picker',
													'show_borders' => false,
													'label' => false,
													'desc' => false,
													'value' => array(
														'footer_background_type' => 'background_color',
													),
													'picker' => array(
														'footer_background_type' => array(
															'type'  => 'radio',
														    'label' => esc_html__('Background', 'naslaan' ),
														    'choices' => array(
														        'background_color' => esc_html__('Background Color', 'naslaan' ),
														        'background_image' => esc_html__('Background Image', 'naslaan' ),
														    ),
														    'inline' => true,
														)
													),
													'choices' => array(
														'background_color' => array(
														
															'footer_color' => array(
															    'type'  => 'rgba-color-picker',
															    'value' => 'rgba(29,36,50,1)',
															    'label' => esc_html__('Background Color', 'naslaan'),
															),
												
														),
														'background_image' => array(
														
															'footer_color' => array(
															    'type'  => 'rgba-color-picker',
															    'value' => 'rgba(29,36,50,1)',
															    'label' => esc_html__('Background Color', 'naslaan'),
															),
															'footer_background_settings' => array(
															    'type'  => 'select',
															    'value' => 'repeat_center',
															    'label' => esc_html__('Background Settings', 'naslaan' ),
															    'choices' => array(
															        'repeat_center' => esc_html__('Repeat, Position: center center', 'naslaan' ),
															        'repeat_top' => esc_html__('Repeat, Position: top center', 'naslaan' ),
															        'cover_center' => esc_html__('Cover, Position: center center', 'naslaan' ),
															    ),
															    'no-validate' => false,
															),
															'footer_background_image' => array(
																'label' => esc_html__( 'Background Image', 'naslaan' ),
																'type' => 'upload',
															),
															
														
														),
													),
					
												),
		

												'footer_paddings' =>array(
												    'type'  => 'html',
												    'label' => esc_html__('Footer Paddings', 'naslaan' ),
												    'html'  => '',
												),
												'footer_padding_top' => array(
													'label' => '',
													'type' => 'short-text',
													'value' => '80',
													'desc' => esc_html__( 'top', 'naslaan' ),
												),
												'footer_padding_bottom' => array(
													'label' => '',
													'type' => 'short-text',
													'value' => '40',
													'desc' => esc_html__( 'bottom', 'naslaan' ),
												),
												'footer_padding_clearfix' =>array(
												    'type'  => 'html',
												    'label' => '',
												    'html'  => '<div class="wp-clearfix"></div>',
												),
												'footer_font' => array(
												    'type' => 'typography-v2',
												    'value' => array(
												        'family' => 'Lato',
												        'subset' => 'latin',
												        'variation' => 'regular',
												        'size' => 17,
												        'letter-spacing' => 0.3,
												    ),
												    'components' => array(
												        'family'         => true,
												        'size'           => true,
												        'line-height'    => false,
												        'letter-spacing' => true,
												        'color'          => false
												    ),
												    'label' => esc_html__('Font', 'naslaan'),
												),
												'footer_font_color' => array(
												    'type'  => 'rgba-color-picker',
												    'value' => 'rgba(255,255,255,0.4)',
												    'label' => esc_html__('Font Color', 'naslaan'),
												),
												'footer_link_color' => array(
												    'type'  => 'rgba-color-picker',
												    'value' => 'rgba(255,255,255,1)',
												    'label' => esc_html__('Link Color', 'naslaan'),
												),
												'footer_link_hover_color' => array(
												    'type'  => 'rgba-color-picker',
												    'value' => 'rgba(222,0,46,1)',
												    'label' => esc_html__('Link Hover Color', 'naslaan'),
												),
									
											),
										),
										'show_borders' => false,
									),
									

									
								)
							),
	
						),
					),
					
					'footer_bottom' => array(
						'title' => esc_html__( 'Footer bottom', 'naslaan' ),
						'type' => 'tab',
						'options' => array(
	
							'theme_options-box' => array(
								'title' => esc_html__( 'Footer bottom', 'naslaan' ),
								'type' => 'box',
								'options' => array(
		
									'footer_bottom_options' => array(
										'type' => 'multi-picker',
										'label' => false,
										'desc' => false,
										'picker' => array(
											'footer_bottom_switch' => array(
												'type'  => 'switch',
											    'value' => 'enabled',
											    'label' => esc_html__('Footer Bottom', 'naslaan' ),
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
		
												'footer_bottom_color' => array(
												    'type'  => 'rgba-color-picker',
												    'value' => 'rgba(21,26,36,1)',
												    'label' => esc_html__('Background Color', 'naslaan'),
												),
												'footer_bottom_paddings' =>array(
												    'type'  => 'html',
												    'label' => esc_html__('Footer Bottom Paddings', 'naslaan' ),
												    'html'  => '',
												),
												'footer_bottom_padding_top' => array(
													'label' => '',
													'type' => 'short-text',
													'value' => '20',
													'desc' => esc_html__( 'top', 'naslaan' ),
												),
												'footer_bottom_padding_bottom' => array(
													'label' => '',
													'type' => 'short-text',
													'value' => '10',
													'desc' => esc_html__( 'bottom', 'naslaan' ),
												),
												'footer_bottom_padding_clearfix' =>array(
												    'type'  => 'html',
												    'label' => '',
												    'html'  => '<div class="wp-clearfix"></div>',
												),
												'footer_bottom_font' => array(
												    'type' => 'typography-v2',
												    'value' => array(
												        'family' => 'Lato',
												        'subset' => 'latin',
												        'variation' => 'regular',
												        'size' => 16,
												        'letter-spacing' => 0.3,
												    ),
												    'components' => array(
												        'family'         => true,
												        'size'           => true,
												        'line-height'    => false,
												        'letter-spacing' => true,
												        'color'          => false
												    ),
												    'label' => esc_html__('Font', 'naslaan'),
												),
												'footer_bottom_font_color' => array(
												    'type'  => 'rgba-color-picker',
												    'value' => 'rgba(255,255,255,0.4)',
												    'label' => esc_html__('Font Color', 'naslaan'),
												),
												'footer_bottom_link_color' => array(
												    'type'  => 'rgba-color-picker',
												    'value' => 'rgba(255,255,255,0.4)',
												    'label' => esc_html__('Link Color', 'naslaan'),
												),
												'footer_bottom_link_hover_color' => array(
												    'type'  => 'rgba-color-picker',
												    'value' => 'rgba(255,255,255,0.7)',
												    'label' => esc_html__('Link Hover Color', 'naslaan'),
												),
												'footer_bottom_content' => array(
												    'type'  => 'wp-editor',
												    'value' => '',
												    'label' => esc_html__('Content', 'naslaan'),
												    'size' => 'small', // small, large
												    'editor_height' => 150,
												),
												'footer_bottom_top_border' => array(
													'type' => 'multi-picker',
													'label' => false,
													'desc' => false,
													'picker' => array(
														'footer_bottom_top_border_switch' => array(
															'type'  => 'switch',
														    'value' => 'disabled',
														    'label' => esc_html__('Top Border', 'naslaan' ),
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
					
															'footer_bottom_top_border_color' => array(
															    'type'  => 'rgba-color-picker',
															    'value' => 'rgba(255,255,255,1)',
															    'label' => esc_html__('Top Border Color', 'naslaan' )
															),
															'footer_bottom_top_border_width' => array(
																'label' => esc_html__('Top Border Width', 'naslaan' ),
																'type' => 'short-text',
																'value' => '1',
																'desc' => esc_html__( 'Value in pixels', 'naslaan' ),
															),
				
														),
													),
													'show_borders' => false,
												),
																								
	
											),
										),
										'show_borders' => false,
									),
		

									
								)
							),
	
						),
					),
					
					'footer_widgets' => array(
						'title' => esc_html__( 'Footer widgets', 'naslaan' ),
						'type' => 'tab',
						'options' => array(
	
							'theme_options-box' => array(
								'title' => esc_html__( 'Footer widgets', 'naslaan' ),
								'type' => 'box',
								'options' => array(
		
									'footer_widget_title' => array(
									    'type' => 'typography-v2',
									    'value' => array(
									        'family' => 'Montserrat',
									        'subset' => 'latin',
									        'variation' => '700',
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
									    'label' => esc_html__('Footer Widget Title', 'naslaan'),
									),
									'footer_widget_title_element' => array(
										'type' => 'multi-picker',
										'label' => false,
										'desc' => false,
										'picker' => array(
											'footer_widget_title_element_switch' => array(
												'type'  => 'switch',
											    'value' => 'enabled',
											    'label' => esc_html__('Footer Widget Title Element', 'naslaan' ),
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
							
												'footer_widget_title_element_color' => array(
												    'type'  => 'rgba-color-picker',
												    'value' => 'rgba(222,0,46,1)',
												    'label' => esc_html__('Color', 'naslaan' )
												),
							
											),
										),
										'show_borders' => false,
									),
									'footer_widget_title_color' => array(
									    'type'  => 'rgba-color-picker',
									    'value' => 'rgba(255,255,255,1)',
									    'label' => esc_html__('Widget Title Color', 'naslaan'),
									),
									
									'footer_columns' => array(
										'type' => 'multi-picker',
										'show_borders' => false,
										'label' => false,
										'desc' => false,
										'value' => array(
											'footer_num_columns' => 'footer_col_3',
										),
										'picker' => array(
											'footer_num_columns' => array(
												'type'  => 'radio',
											    'label' => esc_html__('Background', 'naslaan' ),
											    'choices' => array(
											        'footer_col_3' => esc_html__('Footer 3 Columns', 'naslaan' ),
											        'footer_col_4' => esc_html__('Footer 4 Columns', 'naslaan' ),
											    ),
											    'inline' => true,
											)
										),
										'choices' => array(
											'footer_col_3' => array(
											
												'footer_col_3_layouts' =>array(
												    'type'  => 'html',
												    'label' => esc_html__('Footer 3 Column Layouts', 'naslaan' ),
												    'html'  => '',
												),
												'footer_col_3_1' => array(
												    'type'  => 'short-select',
												    'value' => 'col_1_3',
												    'label' => '',
												    'choices' => array(
												    	'col_1_1' => esc_html__('Column 1/1', 'naslaan' ),
												        'col_1_2' => esc_html__('Column 1/2', 'naslaan' ),
												        'col_1_3' => esc_html__('Column 1/3', 'naslaan' ),
												        'col_1_4' => esc_html__('Column 1/4', 'naslaan' ),
												        'col_1_6' => esc_html__('Column 1/6', 'naslaan' ),
												    ),
												    'no-validate' => false,
												),
												'footer_col_3_2' => array(
												    'type'  => 'short-select',
												    'value' => 'col_1_3',
												    'label' => '',
												    'choices' => array(
												    	'col_1_1' => esc_html__('Column 1/1', 'naslaan' ),
												        'col_1_2' => esc_html__('Column 1/2', 'naslaan' ),
												        'col_1_3' => esc_html__('Column 1/3', 'naslaan' ),
												        'col_1_4' => esc_html__('Column 1/4', 'naslaan' ),
												        'col_1_6' => esc_html__('Column 1/6', 'naslaan' ),
												    ),
												    'no-validate' => false,
												),
												'footer_col_3_3' => array(
												    'type'  => 'short-select',
												    'value' => 'col_1_3',
												    'label' => '',
												    'choices' => array(
												    	'col_1_1' => esc_html__('Column 1/1', 'naslaan' ),
												        'col_1_2' => esc_html__('Column 1/2', 'naslaan' ),
												        'col_1_3' => esc_html__('Column 1/3', 'naslaan' ),
												        'col_1_4' => esc_html__('Column 1/4', 'naslaan' ),
												        'col_1_6' => esc_html__('Column 1/6', 'naslaan' ),
												    ),
												    'no-validate' => false,
												),
												'footer_col_3_layout_clearfix' =>array(
												    'type'  => 'html',
												    'label' => '',
												    'html'  => '<div class="wp-clearfix"></div>',
												),
									
											),
											'footer_col_4' => array(
											
												'footer_col_4_layouts' =>array(
												    'type'  => 'html',
												    'label' => esc_html__('Footer 4 Column Layouts', 'naslaan' ),
												    'html'  => '',
												),
												'footer_col_4_1' => array(
												    'type'  => 'short-select',
												    'value' => 'col_1_4',
												    'label' => '',
												    'choices' => array(
												    	'col_1_1' => esc_html__('Column 1/1', 'naslaan' ),
												        'col_1_2' => esc_html__('Column 1/2', 'naslaan' ),
												        'col_1_3' => esc_html__('Column 1/3', 'naslaan' ),
												        'col_1_4' => esc_html__('Column 1/4', 'naslaan' ),
												        'col_1_6' => esc_html__('Column 1/6', 'naslaan' ),
												    ),
												    'no-validate' => false,
												),
												'footer_col_4_2' => array(
												    'type'  => 'short-select',
												    'value' => 'col_1_4',
												    'label' => '',
												    'choices' => array(
												    	'col_1_1' => esc_html__('Column 1/1', 'naslaan' ),
												        'col_1_2' => esc_html__('Column 1/2', 'naslaan' ),
												        'col_1_3' => esc_html__('Column 1/3', 'naslaan' ),
												        'col_1_4' => esc_html__('Column 1/4', 'naslaan' ),
												        'col_1_6' => esc_html__('Column 1/6', 'naslaan' ),
												    ),
												    'no-validate' => false,
												),
												'footer_col_4_3' => array(
												    'type'  => 'short-select',
												    'value' => 'col_1_4',
												    'label' => '',
												    'choices' => array(
												    	'col_1_1' => esc_html__('Column 1/1', 'naslaan' ),
												        'col_1_2' => esc_html__('Column 1/2', 'naslaan' ),
												        'col_1_3' => esc_html__('Column 1/3', 'naslaan' ),
												        'col_1_4' => esc_html__('Column 1/4', 'naslaan' ),
												        'col_1_6' => esc_html__('Column 1/6', 'naslaan' ),
												    ),
												    'no-validate' => false,
												),
												'footer_col_4_4' => array(
												    'type'  => 'short-select',
												    'value' => 'col_1_4',
												    'label' => '',
												    'choices' => array(
												    	'col_1_1' => esc_html__('Column 1/1', 'naslaan' ),
												        'col_1_2' => esc_html__('Column 1/2', 'naslaan' ),
												        'col_1_3' => esc_html__('Column 1/3', 'naslaan' ),
												        'col_1_4' => esc_html__('Column 1/4', 'naslaan' ),
												        'col_1_6' => esc_html__('Column 1/6', 'naslaan' ),
												    ),
												    'no-validate' => false,
												),
												'footer_col_4_layout_clearfix' =>array(
												    'type'  => 'html',
												    'label' => '',
												    'html'  => '<div class="wp-clearfix"></div>',
												),

											),
										),
		
									),
									
									'footer_widget_list_link_color_group' => array(
									    'type' => 'group',
									    'options' => array(
									    
											'footer_widget_list_bullet_color' => array(
											    'type'  => 'rgba-color-picker',
											    'value' => 'rgba(222,0,46,1)',
											    'label' => esc_html__('Bullet Color', 'naslaan' )
											),

											'footer_widget_list_link_color' => array(
											    'type'  => 'rgba-color-picker',
											    'value' => 'rgba(255,255,255,0.8)',
											    'label' => esc_html__('Widget List Link Color', 'naslaan'),
											),
											
											'footer_widget_list_link_hover_color' => array(
											    'type'  => 'rgba-color-picker',
											    'value' => 'rgba(222,0,46,1)',
											    'label' => esc_html__('Widget List Link Hover Color', 'naslaan'),
											),
											'footer_widget_list_border_color' => array(
											    'type'  => 'rgba-color-picker',
											    'value' => 'rgba(255,255,255,0.1)',
											    'label' => esc_html__('Widget List Border Color', 'naslaan'),
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