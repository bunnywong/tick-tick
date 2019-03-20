<?php if (!defined( 'FW' )) die('Forbidden');

	$options = array(
		array(
			'header' => array(
				'title' => esc_html__( 'Header', 'naslaan' ),
				'type' => 'tab',
				'options' => array(
				
					'header_elements' => array(
						'title' => esc_html__( 'Header Elements', 'naslaan' ),
						'type' => 'tab',
						'options' => array(
	
							'theme_options-box' => array(
								'title' => esc_html__( 'Header Elements', 'naslaan' ),
								'type' => 'box',
								'options' => array(
								
									'header_group' => array(
									    'type' => 'group',
									    'options' => array(
									    
											'header_types' => array(
												'type' => 'multi-picker',
												'show_borders' => false,
												'label' => false,
												'desc' => false,
												'value' => array(
													'header_type' => 'left',
												),
												'picker' => array(
													'header_type' => array(
														'type'  => 'radio',
													    'label' => esc_html__('Header Type', 'naslaan' ),
													    'choices' => array(
													        'left' => esc_html__('Left', 'naslaan' ),
													        'center' => esc_html__('Center', 'naslaan' ),
													        'side' => esc_html__('Side', 'naslaan' ),
													    ),
													    'inline' => false,
													)
												),
												'choices' => array(
													'left' => array(
													
													
														'header_absolute' =>array(
														    'type'  => 'switch',
														    'value' => 'enabled',
														    'label' => esc_html__('Header Absolute Position', 'naslaan' ),
														    'left-choice' => array(
														        'value' => 'disabled',
														        'label' => esc_html__('Disabled', 'naslaan' ),
														    ),
														    'right-choice' => array(
														        'value' => 'enabled',
														        'label' => esc_html__('Enabled', 'naslaan' ),
														    ),
														),
														'navigation_types' => array(
															'type' => 'multi-picker',
															'show_borders' => false,
															'label' => false,
															'desc' => false,
															'value' => array(
																'navigation_variant' => 'variant_1',
															),	
															'picker' => array(
																'navigation_variant' => array(
																	'type'  => 'radio',
																    'label' => esc_html__('Navigation Types', 'naslaan' ),
																    'choices' => array(
																        'variant_1' => esc_html__('Variant 1', 'naslaan' ),
																        'variant_2' => esc_html__('Variant 2', 'naslaan' ),
																        'variant_3' => esc_html__('Variant 3', 'naslaan' ),
																    ),
																    'inline' => false,
																)
															),
															'choices' => array(
																'variant_1' => array(
																	'navigation_align' => array(
																		'type'  => 'radio',
																		'value' => 'right',
																	    'label' => esc_html__('Navigation Align', 'naslaan' ),
																	    'choices' => array(
																	        'left' => esc_html__('Left', 'naslaan' ),
																	        'center' => esc_html__('Center', 'naslaan' ),
																	        'right' => esc_html__('Right', 'naslaan' ),
																	    ),
																	    'desc' => '',
																	    'inline' => false,
																	),
																	'right_bar_border' => array(
																		'type' => 'multi-picker',
																		'label' => false,
																		'desc' => false,
																		'picker' => array(
																			'right_bar_border_switch' => array(
																				'type'  => 'switch',
																			    'value' => 'disabled',
																			    'label' => esc_html__('Right Bar Border', 'naslaan' ),
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
															
																				'right_bar_border_color' => array(
																				    'type'  => 'rgba-color-picker',
																				    'value' => 'rgba(255,255,255,0.15)',
																				    'label' => esc_html__('Border Color', 'naslaan' )
																				),
															
																			),
																		),
																		'show_borders' => false,
																	),
																	'right_bar_order' => array(
																	    'type' => 'group',
																	    'options' => array(
																	    
																			'right_bar_order_title' => array(
																				'label' => esc_html__('Right Bar Order', 'naslaan' ),
																				'type' => 'html',
																				'html'  => esc_html__('Elements order for the "Right Bar".', 'naslaan' ),
																			),
																			'right_bar_order_1' => array(
																			    'type'  => 'select',
																			    'value' => 'none',
																			    'label' => esc_html__('Order 1', 'naslaan' ),
																			    'choices' => array(
																			        'none' => esc_html__('None', 'naslaan' ),
																			        'search' => esc_html__('Search', 'naslaan' ),
																			        'message' => esc_html__('Message Block', 'naslaan' ),
																			        'social' => esc_html__('Social Media', 'naslaan' ),
																			        'shopping_cart' => esc_html__('Shopping Cart', 'naslaan' ),
																			        'wpml_btn' => esc_html__('WPML Button', 'naslaan' ),
																			    ),
																			),
																			'right_bar_order_2' => array(
																			    'type'  => 'select',
																			    'value' => 'none',
																			    'label' => esc_html__('Order 2', 'naslaan' ),
																			    'choices' => array(
																			        'none' => esc_html__('None', 'naslaan' ),
																			        'search' => esc_html__('Search', 'naslaan' ),
																			        'message' => esc_html__('Message Block', 'naslaan' ),
																			        'social' => esc_html__('Social Media', 'naslaan' ),
																			        'shopping_cart' => esc_html__('Shopping Cart', 'naslaan' ),
																			        'wpml_btn' => esc_html__('WPML Button', 'naslaan' ),
																			    ),
																			),
																			'right_bar_order_3' => array(
																			    'type'  => 'select',
																			    'value' => 'none',
																			    'label' => esc_html__('Order 3', 'naslaan' ),
																			    'choices' => array(
																			        'none' => esc_html__('None', 'naslaan' ),
																			        'search' => esc_html__('Search', 'naslaan' ),
																			        'message' => esc_html__('Message Block', 'naslaan' ),
																			        'social' => esc_html__('Social Media', 'naslaan' ),
																			        'shopping_cart' => esc_html__('Shopping Cart', 'naslaan' ),
																			        'wpml_btn' => esc_html__('WPML Button', 'naslaan' ),
																			    ),
																			),
																			'right_bar_order_4' => array(
																			    'type'  => 'select',
																			    'value' => 'none',
																			    'label' => esc_html__('Order 4', 'naslaan' ),
																			    'choices' => array(
																			        'none' => esc_html__('None', 'naslaan' ),
																			        'search' => esc_html__('Search', 'naslaan' ),
																			        'message' => esc_html__('Message Block', 'naslaan' ),
																			        'social' => esc_html__('Social Media', 'naslaan' ),
																			        'shopping_cart' => esc_html__('Shopping Cart', 'naslaan' ),
																			        'wpml_btn' => esc_html__('WPML Button', 'naslaan' ),
																			    ),
																			),
																			'right_bar_order_5' => array(
																			    'type'  => 'select',
																			    'value' => 'none',
																			    'label' => esc_html__('Order 5', 'naslaan' ),
																			    'choices' => array(
																			        'none' => esc_html__('None', 'naslaan' ),
																			        'search' => esc_html__('Search', 'naslaan' ),
																			        'message' => esc_html__('Message Block', 'naslaan' ),
																			        'social' => esc_html__('Social Media', 'naslaan' ),
																			        'shopping_cart' => esc_html__('Shopping Cart', 'naslaan' ),
																			        'wpml_btn' => esc_html__('WPML Button', 'naslaan' ),
																			    ),
																			),
																	    
																		),
																	),
																),
																'variant_2' => array(
																
																	'nav_holder_bg' => array(
																	    'type'  => 'rgba-color-picker',
																	    'value' => 'rgba(255,255,255,0.06)',
																	    'label' => esc_html__('Navigation Background', 'naslaan' )
																	),
																	'nav_holder_top_border' => array(
																		'type' => 'multi-picker',
																		'label' => false,
																		'desc' => false,
																		'picker' => array(
																			'top_border_switch' => array(
																				'type'  => 'switch',
																			    'value' => 'disabled',
																			    'label' => esc_html__('Navigation Top Border', 'naslaan' ),
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
															
																				'top_border_color' => array(
																				    'type'  => 'rgba-color-picker',
																				    'value' => 'rgba(235,235,235,1)',
																				    'label' => esc_html__('Border Color', 'naslaan' )
																				),
															
																			),
																		),
																		'show_borders' => false,
																	),
																	'nav_holder_bottom_border' => array(
																		'type' => 'multi-picker',
																		'label' => false,
																		'desc' => false,
																		'picker' => array(
																			'bottom_border_switch' => array(
																				'type'  => 'switch',
																			    'value' => 'disabled',
																			    'label' => esc_html__('Navigation Bottom Border', 'naslaan' ),
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
															
																				'bottom_border_color' => array(
																				    'type'  => 'rgba-color-picker',
																				    'value' => 'rgba(235,235,235,1)',
																				    'label' => esc_html__('Border Color', 'naslaan' )
																				),
															
																			),
																		),
																		'show_borders' => false,
																	),
																	'navigation_align' => array(
																		'type'  => 'radio',
																		'value' => 'left',
																	    'label' => esc_html__('Navigation Align', 'naslaan' ),
																	    'choices' => array(
																	        'left' => esc_html__('Left', 'naslaan' ),
																	        'center' => esc_html__('Center', 'naslaan' ),
																	    ),
																	    'desc' => '',
																	    'inline' => false,
																	),
																	'right_bar_border' => array(
																		'type' => 'multi-picker',
																		'label' => false,
																		'desc' => false,
																		'picker' => array(
																			'right_bar_border_switch' => array(
																				'type'  => 'switch',
																			    'value' => 'disabled',
																			    'label' => esc_html__('Right Bar Border', 'naslaan' ),
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
															
																				'right_bar_border_color' => array(
																				    'type'  => 'rgba-color-picker',
																				    'value' => 'rgba(235,235,235,1)',
																				    'label' => esc_html__('Border Color', 'naslaan' )
																				),
															
																			),
																		),
																		'show_borders' => false,
																	),
																	'right_bar_order' => array(
																	    'type' => 'group',
																	    'options' => array(
																	    
																			'right_bar_order_title' => array(
																				'label' => esc_html__('Right Bar Order', 'naslaan' ),
																				'type' => 'html',
																				'html'  => esc_html__('Elements order for the "Right Bar".', 'naslaan' ),
																			),
																			'right_bar_order_1' => array(
																			    'type'  => 'select',
																			    'value' => 'none',
																			    'label' => esc_html__('Order 1', 'naslaan' ),
																			    'choices' => array(
																			        'none' => esc_html__('None', 'naslaan' ),
																			        'search' => esc_html__('Search', 'naslaan' ),
																			        'message' => esc_html__('Message Block', 'naslaan' ),
																			        'social' => esc_html__('Social Media', 'naslaan' ),
																			        'shopping_cart' => esc_html__('Shopping Cart', 'naslaan' ),
																			        'wpml_btn' => esc_html__('WPML Button', 'naslaan' ),
																			    ),
																			),
																			'right_bar_order_2' => array(
																			    'type'  => 'select',
																			    'value' => 'none',
																			    'label' => esc_html__('Order 2', 'naslaan' ),
																			    'choices' => array(
																			        'none' => esc_html__('None', 'naslaan' ),
																			        'search' => esc_html__('Search', 'naslaan' ),
																			        'message' => esc_html__('Message Block', 'naslaan' ),
																			        'social' => esc_html__('Social Media', 'naslaan' ),
																			        'shopping_cart' => esc_html__('Shopping Cart', 'naslaan' ),
																			        'wpml_btn' => esc_html__('WPML Button', 'naslaan' ),
																			    ),
																			),
																			'right_bar_order_3' => array(
																			    'type'  => 'select',
																			    'value' => 'none',
																			    'label' => esc_html__('Order 3', 'naslaan' ),
																			    'choices' => array(
																			        'none' => esc_html__('None', 'naslaan' ),
																			        'search' => esc_html__('Search', 'naslaan' ),
																			        'message' => esc_html__('Message Block', 'naslaan' ),
																			        'social' => esc_html__('Social Media', 'naslaan' ),
																			        'shopping_cart' => esc_html__('Shopping Cart', 'naslaan' ),
																			        'wpml_btn' => esc_html__('WPML Button', 'naslaan' ),
																			    ),
																			),
																			'right_bar_order_4' => array(
																			    'type'  => 'select',
																			    'value' => 'none',
																			    'label' => esc_html__('Order 4', 'naslaan' ),
																			    'choices' => array(
																			        'none' => esc_html__('None', 'naslaan' ),
																			        'search' => esc_html__('Search', 'naslaan' ),
																			        'message' => esc_html__('Message Block', 'naslaan' ),
																			        'social' => esc_html__('Social Media', 'naslaan' ),
																			        'shopping_cart' => esc_html__('Shopping Cart', 'naslaan' ),
																			        'wpml_btn' => esc_html__('WPML Button', 'naslaan' ),
																			    ),
																			),
																			'right_bar_order_5' => array(
																			    'type'  => 'select',
																			    'value' => 'none',
																			    'label' => esc_html__('Order 5', 'naslaan' ),
																			    'choices' => array(
																			        'none' => esc_html__('None', 'naslaan' ),
																			        'search' => esc_html__('Search', 'naslaan' ),
																			        'message' => esc_html__('Message Block', 'naslaan' ),
																			        'social' => esc_html__('Social Media', 'naslaan' ),
																			        'shopping_cart' => esc_html__('Shopping Cart', 'naslaan' ),
																			        'wpml_btn' => esc_html__('WPML Button', 'naslaan' ),
																			    ),
																			),
																	    
																		),
																	),
																),
																'variant_3' => array(
																	'right_bar_border' => array(
																		'type' => 'multi-picker',
																		'label' => false,
																		'desc' => false,
																		'picker' => array(
																			'right_bar_border_switch' => array(
																				'type'  => 'switch',
																			    'value' => 'disabled',
																			    'label' => esc_html__('Right Bar Border', 'naslaan' ),
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
															
																				'right_bar_border_color' => array(
																				    'type'  => 'rgba-color-picker',
																				    'value' => 'rgba(235,235,235,1)',
																				    'label' => esc_html__('Border Color', 'naslaan' )
																				),
															
																			),
																		),
																		'show_borders' => false,
																	),
																	'right_bar_order' => array(
																	    'type' => 'group',
																	    'options' => array(
																	    
																			'right_bar_order_title' => array(
																				'label' => esc_html__('Right Bar Order', 'naslaan' ),
																				'type' => 'html',
																				'html'  => esc_html__('Elements order for the "Right Bar".', 'naslaan' ),
																			),
																			'right_bar_order_1' => array(
																			    'type'  => 'select',
																			    'value' => 'none',
																			    'label' => esc_html__('Order 1', 'naslaan' ),
																			    'choices' => array(
																			        'none' => esc_html__('None', 'naslaan' ),
																			        'search' => esc_html__('Search', 'naslaan' ),
																			        'message' => esc_html__('Message Block', 'naslaan' ),
																			        'social' => esc_html__('Social Media', 'naslaan' ),
																			        'shopping_cart' => esc_html__('Shopping Cart', 'naslaan' ),
																			        'wpml_btn' => esc_html__('WPML Button', 'naslaan' ),
																			        
																			    ),
																			),
																			'right_bar_order_2' => array(
																			    'type'  => 'select',
																			    'value' => 'none',
																			    'label' => esc_html__('Order 2', 'naslaan' ),
																			    'choices' => array(
																			        'none' => esc_html__('None', 'naslaan' ),
																			        'search' => esc_html__('Search', 'naslaan' ),
																			        'message' => esc_html__('Message Block', 'naslaan' ),
																			        'social' => esc_html__('Social Media', 'naslaan' ),
																			        'shopping_cart' => esc_html__('Shopping Cart', 'naslaan' ),
																			        'wpml_btn' => esc_html__('WPML Button', 'naslaan' ),
																			        
																			    ),
																			),
																			'right_bar_order_3' => array(
																			    'type'  => 'select',
																			    'value' => 'none',
																			    'label' => esc_html__('Order 3', 'naslaan' ),
																			    'choices' => array(
																			        'none' => esc_html__('None', 'naslaan' ),
																			        'search' => esc_html__('Search', 'naslaan' ),
																			        'message' => esc_html__('Message Block', 'naslaan' ),
																			        'social' => esc_html__('Social Media', 'naslaan' ),
																			        'shopping_cart' => esc_html__('Shopping Cart', 'naslaan' ),
																			        'wpml_btn' => esc_html__('WPML Button', 'naslaan' ),
																			        
																			    ),
																			),
																			'right_bar_order_4' => array(
																			    'type'  => 'select',
																			    'value' => 'none',
																			    'label' => esc_html__('Order 4', 'naslaan' ),
																			    'choices' => array(
																			        'none' => esc_html__('None', 'naslaan' ),
																			        'search' => esc_html__('Search', 'naslaan' ),
																			        'message' => esc_html__('Message Block', 'naslaan' ),
																			        'social' => esc_html__('Social Media', 'naslaan' ),
																			        'shopping_cart' => esc_html__('Shopping Cart', 'naslaan' ),
																			        'wpml_btn' => esc_html__('WPML Button', 'naslaan' ),
																			        
																			    ),
																			),
																			'right_bar_order_5' => array(
																			    'type'  => 'select',
																			    'value' => 'none',
																			    'label' => esc_html__('Order 5', 'naslaan' ),
																			    'choices' => array(
																			        'none' => esc_html__('None', 'naslaan' ),
																			        'search' => esc_html__('Search', 'naslaan' ),
																			        'message' => esc_html__('Message Block', 'naslaan' ),
																			        'social' => esc_html__('Social Media', 'naslaan' ),
																			        'shopping_cart' => esc_html__('Shopping Cart', 'naslaan' ),
																			        'wpml_btn' => esc_html__('WPML Button', 'naslaan' ),
																			        
																			    ),
																			),
																	    
																		),
																	),
																),
															),
														),
																			
														'header_margins' =>array(
														    'type'  => 'html',
														    'label' => esc_html__('Global Header Margins', 'naslaan' ),
														    'html'  => '',
														),
														'header_margin_top' => array(
															'label' => '',
															'type' => 'short-text',
															'value' => '0',
															'desc' => esc_html__( 'top', 'naslaan' ),
														),
														'header_margin_right' => array(
															'label' => '',
															'type' => 'short-text',
															'value' => '0',
															'desc' => esc_html__( 'right', 'naslaan' ),
														),
														'header_margin_bottom' => array(
															'label' => '',
															'type' => 'short-text',
															'value' => '0',
															'desc' => esc_html__( 'bottom', 'naslaan' ),
														),
														'header_margin_left' => array(
															'label' => '',
															'type' => 'short-text',
															'value' => '0',
															'desc' => esc_html__( 'left', 'naslaan' ),
														),
														'header_margin_clearfix' =>array(
														    'type'  => 'html',
														    'label' => '',
														    'html'  => '<div class="wp-clearfix"></div>',
														),					
														'header_background' => array(
														    'type'  => 'rgba-color-picker',
														    'value' => 'rgba(255,255,255,0.06)',
														    'label' => esc_html__('Header Background', 'naslaan' )
														),		
														'middle_header_top_border' => array(
															'type' => 'multi-picker',
															'label' => false,
															'desc' => false,
															'picker' => array(
																'top_border_switch' => array(
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
												
																	'top_border_color' => array(
																	    'type'  => 'rgba-color-picker',
																	    'value' => 'rgba(255,255,255,0.15)',
																	    'label' => esc_html__('Border Color', 'naslaan' )
																	),
																	'top_border_weight' => array(
																		'label' => esc_html__('Border Width', 'naslaan' ),
																		'type' => 'short-text',
																		'value' => '1',
																		'desc' => esc_html__( 'value in pixels', 'naslaan' ),
																	),
												
																),
															),
															'show_borders' => false,
														),
														
														'middle_header_bottom_border' => array(
															'type' => 'multi-picker',
															'label' => false,
															'desc' => false,
															'picker' => array(
																'bottom_border_switch' => array(
																	'type'  => 'switch',
																    'value' => 'disabled',
																    'label' => esc_html__('Bottom Border', 'naslaan' ),
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
												
																	'bottom_border_color' => array(
																	    'type'  => 'rgba-color-picker',
																	    'value' => 'rgba(255,255,255,0.15)',
																	    'label' => esc_html__('Border Color', 'naslaan' )
																	),
																	'bottom_border_weight' => array(
																		'label' => esc_html__('Border Width', 'naslaan' ),
																		'type' => 'short-text',
																		'value' => '1',
																		'desc' => esc_html__( 'value in pixels', 'naslaan' ),
																	),
												
																),
															),
															'show_borders' => false,
														),			
																				
												
													),
													'center' => array(
													
														'header_absolute' =>array(
														    'type'  => 'switch',
														    'value' => 'enabled',
														    'label' => esc_html__('Header Absolute Position', 'naslaan' ),
														    'left-choice' => array(
														        'value' => 'disabled',
														        'label' => esc_html__('Disabled', 'naslaan' ),
														    ),
														    'right-choice' => array(
														        'value' => 'enabled',
														        'label' => esc_html__('Enabled', 'naslaan' ),
														    ),
														),
														'navigation_types' => array(
															'type' => 'multi-picker',
															'show_borders' => false,
															'label' => false,
															'desc' => false,
															'value' => array(
																'navigation_variant' => 'variant_1',
															),	
															'picker' => array(
																'navigation_variant' => array(
																	'type'  => 'radio',
																    'label' => esc_html__('Navigation Types', 'naslaan' ),
																    'choices' => array(
																        'variant_1' => esc_html__('Variant 1', 'naslaan' ),
																        'variant_2' => esc_html__('Variant 2', 'naslaan' ),
																        'variant_3' => esc_html__('Variant 3', 'naslaan' ),
																    ),
																    'inline' => false,
																)
															),
															'choices' => array(
																'variant_1' => array(
																	'left_bar_border' => array(
																		'type' => 'multi-picker',
																		'label' => false,
																		'desc' => false,
																		'picker' => array(
																			'left_bar_border_switch' => array(
																				'type'  => 'switch',
																			    'value' => 'disabled',
																			    'label' => esc_html__('Left Bar Border', 'naslaan' ),
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
															
																				'left_bar_border_color' => array(
																				    'type'  => 'rgba-color-picker',
																				    'value' => 'rgba(235,235,235,1)',
																				    'label' => esc_html__('Border Color', 'naslaan' )
																				),
															
																			),
																		),
																		'show_borders' => false,
																	),
																	'left_bar_order' => array(
																	    'type' => 'group',
																	    'options' => array(
																	    
																			'left_bar_order_title' => array(
																				'label' => esc_html__('Left Bar Order', 'naslaan' ),
																				'type' => 'html',
																				'html'  => esc_html__('Elements order for the "Left Bar".', 'naslaan' ),
																			),
																			'left_bar_order_1' => array(
																			    'type'  => 'select',
																			    'value' => 'none',
																			    'label' => esc_html__('Order 1', 'naslaan' ),
																			    'choices' => array(
																			        'none' => esc_html__('None', 'naslaan' ),
																			        'search' => esc_html__('Search', 'naslaan' ),
																			        'message' => esc_html__('Message Block', 'naslaan' ),
																			        'social' => esc_html__('Social Media', 'naslaan' ),
																			        'shopping_cart' => esc_html__('Shopping Cart', 'naslaan' ),
																			        'wpml_btn' => esc_html__('WPML Button', 'naslaan' ),
																			    ),
																			),
																			'left_bar_order_2' => array(
																			    'type'  => 'select',
																			    'value' => 'none',
																			    'label' => esc_html__('Order 2', 'naslaan' ),
																			    'choices' => array(
																			        'none' => esc_html__('None', 'naslaan' ),
																			        'search' => esc_html__('Search', 'naslaan' ),
																			        'message' => esc_html__('Message Block', 'naslaan' ),
																			        'social' => esc_html__('Social Media', 'naslaan' ),
																			        'shopping_cart' => esc_html__('Shopping Cart', 'naslaan' ),
																			        'wpml_btn' => esc_html__('WPML Button', 'naslaan' ),
																			    ),
																			),
																			'left_bar_order_3' => array(
																			    'type'  => 'select',
																			    'value' => 'none',
																			    'label' => esc_html__('Order 3', 'naslaan' ),
																			    'choices' => array(
																			        'none' => esc_html__('None', 'naslaan' ),
																			        'search' => esc_html__('Search', 'naslaan' ),
																			        'message' => esc_html__('Message Block', 'naslaan' ),
																			        'social' => esc_html__('Social Media', 'naslaan' ),
																			        'shopping_cart' => esc_html__('Shopping Cart', 'naslaan' ),
																			        'wpml_btn' => esc_html__('WPML Button', 'naslaan' ),
																			    ),
																			),
																			'left_bar_order_4' => array(
																			    'type'  => 'select',
																			    'value' => 'none',
																			    'label' => esc_html__('Order 4', 'naslaan' ),
																			    'choices' => array(
																			        'none' => esc_html__('None', 'naslaan' ),
																			        'search' => esc_html__('Search', 'naslaan' ),
																			        'message' => esc_html__('Message Block', 'naslaan' ),
																			        'social' => esc_html__('Social Media', 'naslaan' ),
																			        'shopping_cart' => esc_html__('Shopping Cart', 'naslaan' ),
																			        'wpml_btn' => esc_html__('WPML Button', 'naslaan' ),
																			    ),
																			),
																			'left_bar_order_5' => array(
																			    'type'  => 'select',
																			    'value' => 'none',
																			    'label' => esc_html__('Order 5', 'naslaan' ),
																			    'choices' => array(
																			        'none' => esc_html__('None', 'naslaan' ),
																			        'search' => esc_html__('Search', 'naslaan' ),
																			        'message' => esc_html__('Message Block', 'naslaan' ),
																			        'social' => esc_html__('Social Media', 'naslaan' ),
																			        'shopping_cart' => esc_html__('Shopping Cart', 'naslaan' ),
																			        'wpml_btn' => esc_html__('WPML Button', 'naslaan' ),
																			    ),
																			),
																	    
																		),
																	),
																	'right_bar_border' => array(
																		'type' => 'multi-picker',
																		'label' => false,
																		'desc' => false,
																		'picker' => array(
																			'right_bar_border_switch' => array(
																				'type'  => 'switch',
																			    'value' => 'disabled',
																			    'label' => esc_html__('Right Bar Border', 'naslaan' ),
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
															
																				'right_bar_border_color' => array(
																				    'type'  => 'rgba-color-picker',
																				    'value' => 'rgba(235,235,235,1)',
																				    'label' => esc_html__('Border Color', 'naslaan' )
																				),
															
																			),
																		),
																		'show_borders' => false,
																	),
																	'right_bar_order' => array(
																	    'type' => 'group',
																	    'options' => array(
																	    
																			'right_bar_order_title' => array(
																				'label' => esc_html__('Right Bar Order', 'naslaan' ),
																				'type' => 'html',
																				'html'  => esc_html__('Elements order for the "Right Bar".', 'naslaan' ),
																			),
																			'right_bar_order_1' => array(
																			    'type'  => 'select',
																			    'value' => 'none',
																			    'label' => esc_html__('Order 1', 'naslaan' ),
																			    'choices' => array(
																			        'none' => esc_html__('None', 'naslaan' ),
																			        'search' => esc_html__('Search', 'naslaan' ),
																			        'message' => esc_html__('Message Block', 'naslaan' ),
																			        'social' => esc_html__('Social Media', 'naslaan' ),
																			        'shopping_cart' => esc_html__('Shopping Cart', 'naslaan' ),
																			        'wpml_btn' => esc_html__('WPML Button', 'naslaan' ),
																			    ),
																			),
																			'right_bar_order_2' => array(
																			    'type'  => 'select',
																			    'value' => 'none',
																			    'label' => esc_html__('Order 2', 'naslaan' ),
																			    'choices' => array(
																			        'none' => esc_html__('None', 'naslaan' ),
																			        'search' => esc_html__('Search', 'naslaan' ),
																			        'message' => esc_html__('Message Block', 'naslaan' ),
																			        'social' => esc_html__('Social Media', 'naslaan' ),
																			        'shopping_cart' => esc_html__('Shopping Cart', 'naslaan' ),
																			        'wpml_btn' => esc_html__('WPML Button', 'naslaan' ),
																			    ),
																			),
																			'right_bar_order_3' => array(
																			    'type'  => 'select',
																			    'value' => 'none',
																			    'label' => esc_html__('Order 3', 'naslaan' ),
																			    'choices' => array(
																			        'none' => esc_html__('None', 'naslaan' ),
																			        'search' => esc_html__('Search', 'naslaan' ),
																			        'message' => esc_html__('Message Block', 'naslaan' ),
																			        'social' => esc_html__('Social Media', 'naslaan' ),
																			        'shopping_cart' => esc_html__('Shopping Cart', 'naslaan' ),
																			        'wpml_btn' => esc_html__('WPML Button', 'naslaan' ),
																			    ),
																			),
																			'right_bar_order_4' => array(
																			    'type'  => 'select',
																			    'value' => 'none',
																			    'label' => esc_html__('Order 4', 'naslaan' ),
																			    'choices' => array(
																			        'none' => esc_html__('None', 'naslaan' ),
																			        'search' => esc_html__('Search', 'naslaan' ),
																			        'message' => esc_html__('Message Block', 'naslaan' ),
																			        'social' => esc_html__('Social Media', 'naslaan' ),
																			        'shopping_cart' => esc_html__('Shopping Cart', 'naslaan' ),
																			        'wpml_btn' => esc_html__('WPML Button', 'naslaan' ),
																			    ),
																			),
																			'right_bar_order_5' => array(
																			    'type'  => 'select',
																			    'value' => 'none',
																			    'label' => esc_html__('Order 5', 'naslaan' ),
																			    'choices' => array(
																			        'none' => esc_html__('None', 'naslaan' ),
																			        'search' => esc_html__('Search', 'naslaan' ),
																			        'message' => esc_html__('Message Block', 'naslaan' ),
																			        'social' => esc_html__('Social Media', 'naslaan' ),
																			        'shopping_cart' => esc_html__('Shopping Cart', 'naslaan' ),
																			        'wpml_btn' => esc_html__('WPML Button', 'naslaan' ),
																			    ),
																			),
																	    
																		),
																	),
																),
																'variant_2' => array(
																
																	'nav_holder_bg' => array(
																	    'type'  => 'rgba-color-picker',
																	    'value' => 'rgba(255,255,255,0.06)',
																	    'label' => esc_html__('Navigation Background', 'naslaan' )
																	),
																	'nav_holder_top_border' => array(
																		'type' => 'multi-picker',
																		'label' => false,
																		'desc' => false,
																		'picker' => array(
																			'top_border_switch' => array(
																				'type'  => 'switch',
																			    'value' => 'disabled',
																			    'label' => esc_html__('Navigation Top Border', 'naslaan' ),
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
															
																				'top_border_color' => array(
																				    'type'  => 'rgba-color-picker',
																				    'value' => 'rgba(235,235,235,1)',
																				    'label' => esc_html__('Border Color', 'naslaan' )
																				),
															
																			),
																		),
																		'show_borders' => false,
																	),
																	'nav_holder_bottom_border' => array(
																		'type' => 'multi-picker',
																		'label' => false,
																		'desc' => false,
																		'picker' => array(
																			'bottom_border_switch' => array(
																				'type'  => 'switch',
																			    'value' => 'disabled',
																			    'label' => esc_html__('Navigation Bottom Border', 'naslaan' ),
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
															
																				'bottom_border_color' => array(
																				    'type'  => 'rgba-color-picker',
																				    'value' => 'rgba(235,235,235,1)',
																				    'label' => esc_html__('Border Color', 'naslaan' )
																				),
															
																			),
																		),
																		'show_borders' => false,
																	),
																	'navigation_align' => array(
																		'type'  => 'radio',
																		'value' => 'left',
																	    'label' => esc_html__('Navigation Align', 'naslaan' ),
																	    'choices' => array(
																	        'left' => esc_html__('Left', 'naslaan' ),
																	        'center' => esc_html__('Center', 'naslaan' ),
																	    ),
																	    'desc' => '',
																	    'inline' => false,
																	),
																	'left_bar_border' => array(
																		'type' => 'multi-picker',
																		'label' => false,
																		'desc' => false,
																		'picker' => array(
																			'left_bar_border_switch' => array(
																				'type'  => 'switch',
																			    'value' => 'disabled',
																			    'label' => esc_html__('Left Bar Border', 'naslaan' ),
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
															
																				'left_bar_border_color' => array(
																				    'type'  => 'rgba-color-picker',
																				    'value' => 'rgba(235,235,235,1)',
																				    'label' => esc_html__('Border Color', 'naslaan' )
																				),
															
																			),
																		),
																		'show_borders' => false,
																	),
																	'left_bar_order' => array(
																	    'type' => 'group',
																	    'options' => array(
																	    
																			'left_bar_order_title' => array(
																				'label' => esc_html__('Left Bar Order', 'naslaan' ),
																				'type' => 'html',
																				'html'  => esc_html__('Elements order for the "Left Bar".', 'naslaan' ),
																			),
																			'left_bar_order_1' => array(
																			    'type'  => 'select',
																			    'value' => 'none',
																			    'label' => esc_html__('Order 1', 'naslaan' ),
																			    'choices' => array(
																			        'none' => esc_html__('None', 'naslaan' ),
																			        'search' => esc_html__('Search', 'naslaan' ),
																			        'message' => esc_html__('Message Block', 'naslaan' ),
																			        'social' => esc_html__('Social Media', 'naslaan' ),
																			        'shopping_cart' => esc_html__('Shopping Cart', 'naslaan' ),
																			        'wpml_btn' => esc_html__('WPML Button', 'naslaan' ),
																			    ),
																			),
																			'left_bar_order_2' => array(
																			    'type'  => 'select',
																			    'value' => 'none',
																			    'label' => esc_html__('Order 2', 'naslaan' ),
																			    'choices' => array(
																			        'none' => esc_html__('None', 'naslaan' ),
																			        'search' => esc_html__('Search', 'naslaan' ),
																			        'message' => esc_html__('Message Block', 'naslaan' ),
																			        'social' => esc_html__('Social Media', 'naslaan' ),
																			        'shopping_cart' => esc_html__('Shopping Cart', 'naslaan' ),
																			        'wpml_btn' => esc_html__('WPML Button', 'naslaan' ),
																			    ),
																			),
																			'left_bar_order_3' => array(
																			    'type'  => 'select',
																			    'value' => 'none',
																			    'label' => esc_html__('Order 3', 'naslaan' ),
																			    'choices' => array(
																			        'none' => esc_html__('None', 'naslaan' ),
																			        'search' => esc_html__('Search', 'naslaan' ),
																			        'message' => esc_html__('Message Block', 'naslaan' ),
																			        'social' => esc_html__('Social Media', 'naslaan' ),
																			        'shopping_cart' => esc_html__('Shopping Cart', 'naslaan' ),
																			        'wpml_btn' => esc_html__('WPML Button', 'naslaan' ),
																			    ),
																			),
																			'left_bar_order_4' => array(
																			    'type'  => 'select',
																			    'value' => 'none',
																			    'label' => esc_html__('Order 4', 'naslaan' ),
																			    'choices' => array(
																			        'none' => esc_html__('None', 'naslaan' ),
																			        'search' => esc_html__('Search', 'naslaan' ),
																			        'message' => esc_html__('Message Block', 'naslaan' ),
																			        'social' => esc_html__('Social Media', 'naslaan' ),
																			        'shopping_cart' => esc_html__('Shopping Cart', 'naslaan' ),
																			        'wpml_btn' => esc_html__('WPML Button', 'naslaan' ),
																			    ),
																			),
																			'left_bar_order_5' => array(
																			    'type'  => 'select',
																			    'value' => 'none',
																			    'label' => esc_html__('Order 5', 'naslaan' ),
																			    'choices' => array(
																			        'none' => esc_html__('None', 'naslaan' ),
																			        'search' => esc_html__('Search', 'naslaan' ),
																			        'message' => esc_html__('Message Block', 'naslaan' ),
																			        'social' => esc_html__('Social Media', 'naslaan' ),
																			        'shopping_cart' => esc_html__('Shopping Cart', 'naslaan' ),
																			        'wpml_btn' => esc_html__('WPML Button', 'naslaan' ),
																			    ),
																			),
																	    
																		),
																	),
																	'right_bar_border' => array(
																		'type' => 'multi-picker',
																		'label' => false,
																		'desc' => false,
																		'picker' => array(
																			'right_bar_border_switch' => array(
																				'type'  => 'switch',
																			    'value' => 'disabled',
																			    'label' => esc_html__('Right Bar Border', 'naslaan' ),
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
															
																				'right_bar_border_color' => array(
																				    'type'  => 'rgba-color-picker',
																				    'value' => 'rgba(235,235,235,1)',
																				    'label' => esc_html__('Border Color', 'naslaan' )
																				),
															
																			),
																		),
																		'show_borders' => false,
																	),
																	'right_bar_order' => array(
																	    'type' => 'group',
																	    'options' => array(
																	    
																			'right_bar_order_title' => array(
																				'label' => esc_html__('Right Bar Order', 'naslaan' ),
																				'type' => 'html',
																				'html'  => esc_html__('Elements order for the "Right Bar".', 'naslaan' ),
																			),
																			'right_bar_order_1' => array(
																			    'type'  => 'select',
																			    'value' => 'none',
																			    'label' => esc_html__('Order 1', 'naslaan' ),
																			    'choices' => array(
																			        'none' => esc_html__('None', 'naslaan' ),
																			        'search' => esc_html__('Search', 'naslaan' ),
																			        'message' => esc_html__('Message Block', 'naslaan' ),
																			        'social' => esc_html__('Social Media', 'naslaan' ),
																			        'shopping_cart' => esc_html__('Shopping Cart', 'naslaan' ),
																			        'wpml_btn' => esc_html__('WPML Button', 'naslaan' ),
																			    ),
																			),
																			'right_bar_order_2' => array(
																			    'type'  => 'select',
																			    'value' => 'none',
																			    'label' => esc_html__('Order 2', 'naslaan' ),
																			    'choices' => array(
																			        'none' => esc_html__('None', 'naslaan' ),
																			        'search' => esc_html__('Search', 'naslaan' ),
																			        'message' => esc_html__('Message Block', 'naslaan' ),
																			        'social' => esc_html__('Social Media', 'naslaan' ),
																			        'shopping_cart' => esc_html__('Shopping Cart', 'naslaan' ),
																			        'wpml_btn' => esc_html__('WPML Button', 'naslaan' ),
																			    ),
																			),
																			'right_bar_order_3' => array(
																			    'type'  => 'select',
																			    'value' => 'none',
																			    'label' => esc_html__('Order 3', 'naslaan' ),
																			    'choices' => array(
																			        'none' => esc_html__('None', 'naslaan' ),
																			        'search' => esc_html__('Search', 'naslaan' ),
																			        'message' => esc_html__('Message Block', 'naslaan' ),
																			        'social' => esc_html__('Social Media', 'naslaan' ),
																			        'shopping_cart' => esc_html__('Shopping Cart', 'naslaan' ),
																			        'wpml_btn' => esc_html__('WPML Button', 'naslaan' ),
																			    ),
																			),
																			'right_bar_order_4' => array(
																			    'type'  => 'select',
																			    'value' => 'none',
																			    'label' => esc_html__('Order 4', 'naslaan' ),
																			    'choices' => array(
																			        'none' => esc_html__('None', 'naslaan' ),
																			        'search' => esc_html__('Search', 'naslaan' ),
																			        'message' => esc_html__('Message Block', 'naslaan' ),
																			        'social' => esc_html__('Social Media', 'naslaan' ),
																			        'shopping_cart' => esc_html__('Shopping Cart', 'naslaan' ),
																			        'wpml_btn' => esc_html__('WPML Button', 'naslaan' ),
																			    ),
																			),
																			'right_bar_order_5' => array(
																			    'type'  => 'select',
																			    'value' => 'none',
																			    'label' => esc_html__('Order 5', 'naslaan' ),
																			    'choices' => array(
																			        'none' => esc_html__('None', 'naslaan' ),
																			        'search' => esc_html__('Search', 'naslaan' ),
																			        'message' => esc_html__('Message Block', 'naslaan' ),
																			        'social' => esc_html__('Social Media', 'naslaan' ),
																			        'shopping_cart' => esc_html__('Shopping Cart', 'naslaan' ),
																			        'wpml_btn' => esc_html__('WPML Button', 'naslaan' ),
																			    ),
																			),
																	    
																		),
																	),

																),
																'variant_3' => array(
																	'left_bar_border' => array(
																		'type' => 'multi-picker',
																		'label' => false,
																		'desc' => false,
																		'picker' => array(
																			'left_bar_border_switch' => array(
																				'type'  => 'switch',
																			    'value' => 'disabled',
																			    'label' => esc_html__('Left Bar Border', 'naslaan' ),
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
															
																				'left_bar_border_color' => array(
																				    'type'  => 'rgba-color-picker',
																				    'value' => 'rgba(235,235,235,1)',
																				    'label' => esc_html__('Border Color', 'naslaan' )
																				),
															
																			),
																		),
																		'show_borders' => false,
																	),
																	'left_bar_order' => array(
																	    'type' => 'group',
																	    'options' => array(
																	    
																			'left_bar_order_title' => array(
																				'label' => esc_html__('Left Bar Order', 'naslaan' ),
																				'type' => 'html',
																				'html'  => esc_html__('Elements order for the "Left Bar".', 'naslaan' ),
																			),
																			'left_bar_order_1' => array(
																			    'type'  => 'select',
																			    'value' => 'none',
																			    'label' => esc_html__('Order 1', 'naslaan' ),
																			    'choices' => array(
																			        'none' => esc_html__('None', 'naslaan' ),
																			        'search' => esc_html__('Search', 'naslaan' ),
																			        'message' => esc_html__('Message Block', 'naslaan' ),
																			        'social' => esc_html__('Social Media', 'naslaan' ),
																			        'shopping_cart' => esc_html__('Shopping Cart', 'naslaan' ),
																			        'wpml_btn' => esc_html__('WPML Button', 'naslaan' ),
																			        'slide_menu' => esc_html__('Slide Panel Menu', 'naslaan' ),
																			    ),
																			),
																			'left_bar_order_2' => array(
																			    'type'  => 'select',
																			    'value' => 'none',
																			    'label' => esc_html__('Order 2', 'naslaan' ),
																			    'choices' => array(
																			        'none' => esc_html__('None', 'naslaan' ),
																			        'search' => esc_html__('Search', 'naslaan' ),
																			        'message' => esc_html__('Message Block', 'naslaan' ),
																			        'social' => esc_html__('Social Media', 'naslaan' ),
																			        'shopping_cart' => esc_html__('Shopping Cart', 'naslaan' ),
																			        'wpml_btn' => esc_html__('WPML Button', 'naslaan' ),
																			        'slide_menu' => esc_html__('Slide Panel Menu', 'naslaan' ),
																			    ),
																			),
																			'left_bar_order_3' => array(
																			    'type'  => 'select',
																			    'value' => 'none',
																			    'label' => esc_html__('Order 3', 'naslaan' ),
																			    'choices' => array(
																			        'none' => esc_html__('None', 'naslaan' ),
																			        'search' => esc_html__('Search', 'naslaan' ),
																			        'message' => esc_html__('Message Block', 'naslaan' ),
																			        'social' => esc_html__('Social Media', 'naslaan' ),
																			        'shopping_cart' => esc_html__('Shopping Cart', 'naslaan' ),
																			        'wpml_btn' => esc_html__('WPML Button', 'naslaan' ),
																			        'slide_menu' => esc_html__('Slide Panel Menu', 'naslaan' ),
																			    ),
																			),
																			'left_bar_order_4' => array(
																			    'type'  => 'select',
																			    'value' => 'none',
																			    'label' => esc_html__('Order 4', 'naslaan' ),
																			    'choices' => array(
																			        'none' => esc_html__('None', 'naslaan' ),
																			        'search' => esc_html__('Search', 'naslaan' ),
																			        'message' => esc_html__('Message Block', 'naslaan' ),
																			        'social' => esc_html__('Social Media', 'naslaan' ),
																			        'shopping_cart' => esc_html__('Shopping Cart', 'naslaan' ),
																			        'wpml_btn' => esc_html__('WPML Button', 'naslaan' ),
																			        'slide_menu' => esc_html__('Slide Panel Menu', 'naslaan' ),
																			    ),
																			),
																			'left_bar_order_5' => array(
																			    'type'  => 'select',
																			    'value' => 'none',
																			    'label' => esc_html__('Order 5', 'naslaan' ),
																			    'choices' => array(
																			        'none' => esc_html__('None', 'naslaan' ),
																			        'search' => esc_html__('Search', 'naslaan' ),
																			        'message' => esc_html__('Message Block', 'naslaan' ),
																			        'social' => esc_html__('Social Media', 'naslaan' ),
																			        'shopping_cart' => esc_html__('Shopping Cart', 'naslaan' ),
																			        'wpml_btn' => esc_html__('WPML Button', 'naslaan' ),
																			        'slide_menu' => esc_html__('Slide Panel Menu', 'naslaan' ),
																			    ),
																			),
																	    
																		),
																	),
																	'right_bar_border' => array(
																		'type' => 'multi-picker',
																		'label' => false,
																		'desc' => false,
																		'picker' => array(
																			'right_bar_border_switch' => array(
																				'type'  => 'switch',
																			    'value' => 'disabled',
																			    'label' => esc_html__('Right Bar Border', 'naslaan' ),
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
															
																				'right_bar_border_color' => array(
																				    'type'  => 'rgba-color-picker',
																				    'value' => 'rgba(235,235,235,1)',
																				    'label' => esc_html__('Border Color', 'naslaan' )
																				),
															
																			),
																		),
																		'show_borders' => false,
																	),
																	'right_bar_order' => array(
																	    'type' => 'group',
																	    'options' => array(
																	    
																			'right_bar_order_title' => array(
																				'label' => esc_html__('Right Bar Order', 'naslaan' ),
																				'type' => 'html',
																				'html'  => esc_html__('Elements order for the "Right Bar".', 'naslaan' ),
																			),
																			'right_bar_order_1' => array(
																			    'type'  => 'select',
																			    'value' => 'none',
																			    'label' => esc_html__('Order 1', 'naslaan' ),
																			    'choices' => array(
																			        'none' => esc_html__('None', 'naslaan' ),
																			        'search' => esc_html__('Search', 'naslaan' ),
																			        'message' => esc_html__('Message Block', 'naslaan' ),
																			        'social' => esc_html__('Social Media', 'naslaan' ),
																			        'shopping_cart' => esc_html__('Shopping Cart', 'naslaan' ),
																			        'wpml_btn' => esc_html__('WPML Button', 'naslaan' ),
																			        'slide_menu' => esc_html__('Slide Panel Menu', 'naslaan' ),
																			    ),
																			),
																			'right_bar_order_2' => array(
																			    'type'  => 'select',
																			    'value' => 'none',
																			    'label' => esc_html__('Order 2', 'naslaan' ),
																			    'choices' => array(
																			        'none' => esc_html__('None', 'naslaan' ),
																			        'search' => esc_html__('Search', 'naslaan' ),
																			        'message' => esc_html__('Message Block', 'naslaan' ),
																			        'social' => esc_html__('Social Media', 'naslaan' ),
																			        'shopping_cart' => esc_html__('Shopping Cart', 'naslaan' ),
																			        'wpml_btn' => esc_html__('WPML Button', 'naslaan' ),
																			        'slide_menu' => esc_html__('Slide Panel Menu', 'naslaan' ),
																			    ),
																			),
																			'right_bar_order_3' => array(
																			    'type'  => 'select',
																			    'value' => 'none',
																			    'label' => esc_html__('Order 3', 'naslaan' ),
																			    'choices' => array(
																			        'none' => esc_html__('None', 'naslaan' ),
																			        'search' => esc_html__('Search', 'naslaan' ),
																			        'message' => esc_html__('Message Block', 'naslaan' ),
																			        'social' => esc_html__('Social Media', 'naslaan' ),
																			        'shopping_cart' => esc_html__('Shopping Cart', 'naslaan' ),
																			        'wpml_btn' => esc_html__('WPML Button', 'naslaan' ),
																			        'slide_menu' => esc_html__('Slide Panel Menu', 'naslaan' ),
																			    ),
																			),
																			'right_bar_order_4' => array(
																			    'type'  => 'select',
																			    'value' => 'none',
																			    'label' => esc_html__('Order 4', 'naslaan' ),
																			    'choices' => array(
																			        'none' => esc_html__('None', 'naslaan' ),
																			        'search' => esc_html__('Search', 'naslaan' ),
																			        'message' => esc_html__('Message Block', 'naslaan' ),
																			        'social' => esc_html__('Social Media', 'naslaan' ),
																			        'shopping_cart' => esc_html__('Shopping Cart', 'naslaan' ),
																			        'wpml_btn' => esc_html__('WPML Button', 'naslaan' ),
																			        'slide_menu' => esc_html__('Slide Panel Menu', 'naslaan' ),
																			    ),
																			),
																			'right_bar_order_5' => array(
																			    'type'  => 'select',
																			    'value' => 'none',
																			    'label' => esc_html__('Order 5', 'naslaan' ),
																			    'choices' => array(
																			        'none' => esc_html__('None', 'naslaan' ),
																			        'search' => esc_html__('Search', 'naslaan' ),
																			        'message' => esc_html__('Message Block', 'naslaan' ),
																			        'social' => esc_html__('Social Media', 'naslaan' ),
																			        'shopping_cart' => esc_html__('Shopping Cart', 'naslaan' ),
																			        'wpml_btn' => esc_html__('WPML Button', 'naslaan' ),
																			        'slide_menu' => esc_html__('Slide Panel Menu', 'naslaan' ),
																			    ),
																			),
																	    
																		),
																	),
																),
															),
														),
													
														
														'header_margins' =>array(
														    'type'  => 'html',
														    'label' => esc_html__('Global Header Margins', 'naslaan' ),
														    'html'  => '',
														),
														'header_margin_top' => array(
															'label' => '',
															'type' => 'short-text',
															'value' => '0',
															'desc' => esc_html__( 'top', 'naslaan' ),
														),
														'header_margin_right' => array(
															'label' => '',
															'type' => 'short-text',
															'value' => '0',
															'desc' => esc_html__( 'right', 'naslaan' ),
														),
														'header_margin_bottom' => array(
															'label' => '',
															'type' => 'short-text',
															'value' => '0',
															'desc' => esc_html__( 'bottom', 'naslaan' ),
														),
														'header_margin_left' => array(
															'label' => '',
															'type' => 'short-text',
															'value' => '0',
															'desc' => esc_html__( 'left', 'naslaan' ),
														),
														'header_margin_clearfix' =>array(
														    'type'  => 'html',
														    'label' => '',
														    'html'  => '<div class="wp-clearfix"></div>',
														),					
														'header_background' => array(
														    'type'  => 'rgba-color-picker',
														    'value' => 'rgba(255,255,255,0.06)',
														    'label' => esc_html__('Header Background', 'naslaan' )
														),		
														'middle_header_top_border' => array(
															'type' => 'multi-picker',
															'label' => false,
															'desc' => false,
															'picker' => array(
																'top_border_switch' => array(
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
												
																	'top_border_color' => array(
																	    'type'  => 'rgba-color-picker',
																	    'value' => 'rgba(235,235,235,1)',
																	    'label' => esc_html__('Border Color', 'naslaan' )
																	),
																	'top_border_weight' => array(
																		'label' => '',
																		'type' => 'short-text',
																		'value' => '1',
																		'desc' => esc_html__( 'value in pixels', 'naslaan' ),
																	),
												
																),
															),
															'show_borders' => false,
														),
														
														'middle_header_bottom_border' => array(
															'type' => 'multi-picker',
															'label' => false,
															'desc' => false,
															'picker' => array(
																'bottom_border_switch' => array(
																	'type'  => 'switch',
																    'value' => 'disabled',
																    'label' => esc_html__('Bottom Border', 'naslaan' ),
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
												
																	'bottom_border_color' => array(
																	    'type'  => 'rgba-color-picker',
																	    'value' => 'rgba(235,235,235,1)',
																	    'label' => esc_html__('Border Color', 'naslaan' )
																	),
																	'bottom_border_weight' => array(
																		'label' => '',
																		'type' => 'short-text',
																		'value' => '1',
																		'desc' => esc_html__( 'value in pixels', 'naslaan' ),
																	),
												
																),
															),
															'show_borders' => false,
														),	
													
													),
													'side' => array(
													
														'bottom_bar_border' => array(
															'type' => 'multi-picker',
															'label' => false,
															'desc' => false,
															'picker' => array(
																'bottom_bar_border_switch' => array(
																	'type'  => 'switch',
																    'value' => 'disabled',
																    'label' => esc_html__('Bottom Bar Border', 'naslaan' ),
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
												
																	'bottom_bar_border_color' => array(
																	    'type'  => 'rgba-color-picker',
																	    'value' => 'rgba(235,235,235,1)',
																	    'label' => esc_html__('Border Color', 'naslaan' )
																	),
												
																),
															),
															'show_borders' => false,
														),
														'bottom_bar_order' => array(
														    'type' => 'group',
														    'options' => array(
														    
																'bottom_bar_order_title' => array(
																	'label' => esc_html__('Bottom Bar Order', 'naslaan' ),
																	'type' => 'html',
																	'html'  => esc_html__('Elements order for the "Bottom Bar".', 'naslaan' ),
																),
																'bottom_bar_order_1' => array(
																    'type'  => 'select',
																    'value' => 'none',
																    'label' => esc_html__('Order 1', 'naslaan' ),
																    'choices' => array(
																        'none' => esc_html__('None', 'naslaan' ),
																        'search' => esc_html__('Search', 'naslaan' ),
																        'message' => esc_html__('Message Block', 'naslaan' ),
																        'social' => esc_html__('Social Media', 'naslaan' ),
																        'shopping_cart' => esc_html__('Shopping Cart', 'naslaan' ),
																        'wpml_btn' => esc_html__('WPML Button', 'naslaan' ),
																    ),
																),
																'bottom_bar_order_2' => array(
																    'type'  => 'select',
																    'value' => 'none',
																    'label' => esc_html__('Order 2', 'naslaan' ),
																    'choices' => array(
																        'none' => esc_html__('None', 'naslaan' ),
																        'search' => esc_html__('Search', 'naslaan' ),
																        'message' => esc_html__('Message Block', 'naslaan' ),
																        'social' => esc_html__('Social Media', 'naslaan' ),
																        'shopping_cart' => esc_html__('Shopping Cart', 'naslaan' ),
																        'wpml_btn' => esc_html__('WPML Button', 'naslaan' ),
																    ),
																),
																'bottom_bar_order_3' => array(
																    'type'  => 'select',
																    'value' => 'none',
																    'label' => esc_html__('Order 3', 'naslaan' ),
																    'choices' => array(
																        'none' => esc_html__('None', 'naslaan' ),
																        'search' => esc_html__('Search', 'naslaan' ),
																        'message' => esc_html__('Message Block', 'naslaan' ),
																        'social' => esc_html__('Social Media', 'naslaan' ),
																        'shopping_cart' => esc_html__('Shopping Cart', 'naslaan' ),
																        'wpml_btn' => esc_html__('WPML Button', 'naslaan' ),
																    ),
																),
																'bottom_bar_order_4' => array(
																    'type'  => 'select',
																    'value' => 'none',
																    'label' => esc_html__('Order 4', 'naslaan' ),
																    'choices' => array(
																        'none' => esc_html__('None', 'naslaan' ),
																        'search' => esc_html__('Search', 'naslaan' ),
																        'message' => esc_html__('Message Block', 'naslaan' ),
																        'social' => esc_html__('Social Media', 'naslaan' ),
																        'shopping_cart' => esc_html__('Shopping Cart', 'naslaan' ),
																        'wpml_btn' => esc_html__('WPML Button', 'naslaan' ),
																    ),
																),
																'bottom_bar_order_5' => array(
																    'type'  => 'select',
																    'value' => 'none',
																    'label' => esc_html__('Order 5', 'naslaan' ),
																    'choices' => array(
																        'none' => esc_html__('None', 'naslaan' ),
																        'search' => esc_html__('Search', 'naslaan' ),
																        'message' => esc_html__('Message Block', 'naslaan' ),
																        'social' => esc_html__('Social Media', 'naslaan' ),
																        'shopping_cart' => esc_html__('Shopping Cart', 'naslaan' ),
																        'wpml_btn' => esc_html__('WPML Button', 'naslaan' ),
																    ),
																),
														    
															),
														),
														'header_background' => array(
														    'type'  => 'rgba-color-picker',
														    'value' => 'rgba(255,255,255,0.06)',
														    'label' => esc_html__('Header Background', 'naslaan' )
														),
													
													),
												),
				
											),
											
									    
									    ),
									 ),
									 
									'group_logo' => array(
									    'type' => 'group',
									    'options' => array(
									    
											'header_logo' => array(
												'type' => 'multi-picker',
												'show_borders' => false,
												'label' => false,
												'desc' => false,
												'value' => array(
													'logo_type' => 'text_logo',
												),
												'picker' => array(
													'logo_type' => array(
														'type'  => 'radio',
													    'label' => esc_html__('Logo Type', 'naslaan' ),
													    'choices' => array(
													    	'none' => esc_html__('None', 'naslaan' ),
													        'text_logo' => esc_html__('Text Logo', 'naslaan' ),
													        'image_logo' => esc_html__('Image Logo', 'naslaan' ),
													    ),
													    'inline' => false,
													)
												),
												'choices' => array(
													'text_logo' => array(
														'header_logo_text' => array(
														    'type' => 'typography-v2',
														    'value' => array(
														        'family' => 'Montserrat',
														        'subset' => 'latin-ext',
														        'variation' => '600',
														        'size' => 36,
														        'letter-spacing' => 0,
														        'color' => '#ffffff'
														    ),
														    'components' => array(
														        'family'         => true,
														        'size'           => true,
														        'line-height'    => false,
														        'letter-spacing' => true,
														        'color'          => true
														    ),
														    'label' => esc_html__('Logo Text', 'naslaan' )
														),
														'header_logo_text_paddings' =>array(
														    'type'  => 'html',
														    'label' => esc_html__('Logo Paddings', 'naslaan' ),
														    'html'  => '',
														),
														'header_logo_text_padding_top' => array(
															'label' => '',
															'type' => 'short-text',
															'value' => '30',
															'desc' => esc_html__( 'top', 'naslaan' ),
														),
														'header_logo_text_padding_right' => array(
															'label' => '',
															'type' => 'short-text',
															'value' => '0',
															'desc' => esc_html__( 'right', 'naslaan' ),
														),
														'header_logo_text_padding_bottom' => array(
															'label' => '',
															'type' => 'short-text',
															'value' => '30',
															'desc' => esc_html__( 'bottom', 'naslaan' ),
														),
														'header_logo_text_padding_left' => array(
															'label' => '',
															'type' => 'short-text',
															'value' => '0',
															'desc' => esc_html__( 'left', 'naslaan' ),
														),
														'header_logo_text_padding_clearfix' =>array(
														    'type'  => 'html',
														    'label' => '',
														    'html'  => '<div class="wp-clearfix"></div>',
														),
														'header_logo_text_border' => array(
															'type' => 'multi-picker',
															'label' => false,
															'desc' => false,
															'picker' => array(
																'logo_border_switch' => array(
																	'type'  => 'switch',
																    'value' => 'disabled',
																    'label' => esc_html__('Border', 'naslaan' ),
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
												
																	'logo_border_color' => array(
																	    'type'  => 'rgba-color-picker',
																	    'value' => 'rgba(235,235,235,1)',
																	    'label' => esc_html__('Border Color', 'naslaan' )
																	),
												
																),
															),
															'show_borders' => false,
														),
														
													),
													'image_logo' => array(
														'header_logo_image' => array(
															'label' => esc_html__( 'Logo', 'naslaan' ),
															'type' => 'upload',
														),
														'header_logo_width' => array(
															'label' => esc_html__( 'Logo Width', 'naslaan' ),
															'type' => 'short-text',
															'value' => '200',
															'desc' => esc_html__( 'value in pixels', 'naslaan' ),
														),
														'header_logo_paddings' =>array(
														    'type'  => 'html',
														    'label' => esc_html__('Logo Paddings', 'naslaan' ),
														    'html'  => '',
														),
														'header_logo_padding_top' => array(
															'label' => '',
															'type' => 'short-text',
															'value' => '30',
															'desc' => esc_html__( 'top', 'naslaan' ),
														),
														'header_logo_padding_right' => array(
															'label' => '',
															'type' => 'short-text',
															'value' => '0',
															'desc' => esc_html__( 'right', 'naslaan' ),
														),
														'header_logo_padding_bottom' => array(
															'label' => '',
															'type' => 'short-text',
															'value' => '30',
															'desc' => esc_html__( 'bottom', 'naslaan' ),
														),
														'header_logo_padding_left' => array(
															'label' => '',
															'type' => 'short-text',
															'value' => '0',
															'desc' => esc_html__( 'left', 'naslaan' ),
														),
														'header_logo_padding_clearfix' =>array(
														    'type'  => 'html',
														    'label' => '',
														    'html'  => '<div class="wp-clearfix"></div>',
														),
														'header_logo_border' => array(
															'type' => 'multi-picker',
															'label' => false,
															'desc' => false,
															'picker' => array(
																'logo_border_switch' => array(
																	'type'  => 'switch',
																    'value' => 'disabled',
																    'label' => esc_html__('Border', 'naslaan' ),
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
												
																	'logo_border_color' => array(
																	    'type'  => 'rgba-color-picker',
																	    'value' => 'rgba(235,235,235,1)',
																	    'label' => esc_html__('Border Color', 'naslaan' )
																	),
												
																),
															),
															'show_borders' => false,
														),
								
													)
												),
												'logo_border' => array(
													'type' => 'multi-picker',
													'label' => false,
													'desc' => false,
													'picker' => array(
														'logo_border_switch' => array(
															'type'  => 'switch',
														    'value' => 'enabled',
														    'label' => esc_html__('Logo Border', 'naslaan' ),
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
										
															'logo_border_color' => array(
															    'type'  => 'rgba-color-picker',
															    'value' => 'rgba(235,235,235,1)',
															    'label' => esc_html__('Border Color', 'naslaan' )
															),
										
														),
													),
													'show_borders' => false,
												),
											),
									    
									    ),
									),
									'group_menu' => array(
									    'type' => 'group',
									    'options' => array(


											'navigation_margins' =>array(
											    'type'  => 'html',
											    'label' => esc_html__('Navigation Margins', 'naslaan' ),
											    'html'  => '',
											),
											'navigation_margin_right' => array(
												'label' => '',
												'type' => 'short-text',
												'value' => '0',
												'desc' => esc_html__( 'right', 'naslaan' ),
											),
											'navigation_margin_left' => array(
												'label' => '',
												'type' => 'short-text',
												'value' => '0',
												'desc' => esc_html__( 'left', 'naslaan' ),
											),
											'navigation_margin_clearfix' =>array(
											    'type'  => 'html',
											    'label' => '',
											    'html'  => '<div class="wp-clearfix"></div>',
											),
											'menu_item_paddings' =>array(
											    'type'  => 'html',
											    'label' => esc_html__('Menu Item Paddings', 'naslaan' ),
											    'html'  => '',
											),
											'menu_item_padding_top' => array(
												'label' => '',
												'type' => 'short-text',
												'value' => '0',
												'desc' => esc_html__( 'top', 'naslaan' ),
											),
											'menu_item_padding_right' => array(
												'label' => '',
												'type' => 'short-text',
												'value' => '12',
												'desc' => esc_html__( 'right', 'naslaan' ),
											),
											'menu_item_padding_bottom' => array(
												'label' => '',
												'type' => 'short-text',
												'value' => '0',
												'desc' => esc_html__( 'bottom', 'naslaan' ),
											),
											'menu_item_padding_left' => array(
												'label' => '',
												'type' => 'short-text',
												'value' => '12',
												'desc' => esc_html__( 'left', 'naslaan' ),
											),
											'menu_item_padding_clearfix' =>array(
											    'type'  => 'html',
											    'label' => '',
											    'html'  => '<div class="wp-clearfix"></div>',
											),
											'menu_button_paddings_notebook_layout' => array(
												'type' => 'multi-picker',
												'label' => false,
												'desc' => false,
												'picker' => array(
													'menu_button_paddings_nl_switch' => array(
														'type'  => 'switch',
													    'value' => 'disabled',
													    'label' => esc_html__('Menu Button Paddings (Notebook Layout)', 'naslaan' ),
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
				
														'menu_button_paddings_nl' =>array(
														    'type'  => 'html',
														    'label' => '',
														    'html'  => '',
														),
														'menu_button_padding_right_nl' => array(
															'label' => '',
															'type' => 'short-text',
															'value' => '10',
															'desc' => esc_html__( 'right', 'naslaan' ),
														),
														'menu_button_padding_left_nl' => array(
															'label' => '',
															'type' => 'short-text',
															'value' => '10',
															'desc' => esc_html__( 'left', 'naslaan' ),
														),
														'menu_button_padding_clearfix_nl' =>array(
														    'type'  => 'html',
														    'label' => '',
														    'html'  => '<div class="wp-clearfix"></div>',
														),
			
													),
												),
												'show_borders' => false,
											),
											'menu_button_paddings_tablet_layout' => array(
												'type' => 'multi-picker',
												'label' => false,
												'desc' => false,
												'picker' => array(
													'menu_button_paddings_tl_switch' => array(
														'type'  => 'switch',
													    'value' => 'disabled',
													    'label' => esc_html__('Menu Button Paddings (Tablet Layout)', 'naslaan' ),
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
				
														'menu_button_paddings_tl' =>array(
														    'type'  => 'html',
														    'label' => '',
														    'html'  => '',
														),
														'menu_button_padding_right_tl' => array(
															'label' => '',
															'type' => 'short-text',
															'value' => '10',
															'desc' => esc_html__( 'right', 'naslaan' ),
														),
														'menu_button_padding_left_tl' => array(
															'label' => '',
															'type' => 'short-text',
															'value' => '10',
															'desc' => esc_html__( 'left', 'naslaan' ),
														),
														'menu_button_padding_clearfix_tl' =>array(
														    'type'  => 'html',
														    'label' => '',
														    'html'  => '<div class="wp-clearfix"></div>',
														),
			
													),
												),
												'show_borders' => false,
											),
											'menu_button_inner_paddings' =>array(
											    'type'  => 'html',
											    'label' => esc_html__('Menu Button Inner Paddings', 'naslaan' ),
											    'html'  => '',
											),
											'menu_button_inner_padding_right' => array(
												'label' => '',
												'type' => 'short-text',
												'value' => '0',
												'desc' => esc_html__( 'right', 'naslaan' ),
											),
											'menu_button_inner_padding_left' => array(
												'label' => '',
												'type' => 'short-text',
												'value' => '0',
												'desc' => esc_html__( 'left', 'naslaan' ),
											),
											'menu_button_inner_padding_clearfix' =>array(
											    'type'  => 'html',
											    'label' => '',
											    'html'  => '<div class="wp-clearfix"></div>',
											),
											'menu_button_inner_paddings_notebook_layout' => array(
												'type' => 'multi-picker',
												'label' => false,
												'desc' => false,
												'picker' => array(
													'menu_button_inner_paddings_nl_switch' => array(
														'type'  => 'switch',
													    'value' => 'disabled',
													    'label' => esc_html__('Menu Button Inner Paddings (Notebook Layout)', 'naslaan' ),
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
				
														'menu_button_inner_paddings_nl' =>array(
														    'type'  => 'html',
														    'label' => '',
														    'html'  => '',
														),
														'menu_button_inner_padding_right_nl' => array(
															'label' => '',
															'type' => 'short-text',
															'value' => '0',
															'desc' => esc_html__( 'right', 'naslaan' ),
														),
														'menu_button_inner_padding_left_nl' => array(
															'label' => '',
															'type' => 'short-text',
															'value' => '0',
															'desc' => esc_html__( 'left', 'naslaan' ),
														),
														'menu_button_inner_padding_clearfix_nl' =>array(
														    'type'  => 'html',
														    'label' => '',
														    'html'  => '<div class="wp-clearfix"></div>',
														),
			
													),
												),
												'show_borders' => false,
											),
											'menu_button_inner_paddings_tablet_layout' => array(
												'type' => 'multi-picker',
												'label' => false,
												'desc' => false,
												'picker' => array(
													'menu_button_inner_paddings_tl_switch' => array(
														'type'  => 'switch',
													    'value' => 'disabled',
													    'label' => esc_html__('Menu Button Inner Paddings (Tablet Layout)', 'naslaan' ),
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
				
														'menu_button_inner_paddings_tl' =>array(
														    'type'  => 'html',
														    'label' => '',
														    'html'  => '',
														),
														'menu_button_inner_padding_right_tl' => array(
															'label' => '',
															'type' => 'short-text',
															'value' => '0',
															'desc' => esc_html__( 'right', 'naslaan' ),
														),
														'menu_button_inner_padding_left_tl' => array(
															'label' => '',
															'type' => 'short-text',
															'value' => '0',
															'desc' => esc_html__( 'left', 'naslaan' ),
														),
														'menu_button_inner_padding_clearfix_tl' =>array(
														    'type'  => 'html',
														    'label' => '',
														    'html'  => '<div class="wp-clearfix"></div>',
														),
			
													),
												),
												'show_borders' => false,
											),
											'menu_button_text' => array(
											    'type' => 'typography-v2',
											    'value' => array(
											        'family' => 'Montserrat',
											        'subset' => 'latin-ext',
											        'variation' => '600',
											        'size' => 15,
											        'line-height' => 104,
											        'letter-spacing' => 0.5
											    ),
											    'components' => array(
											        'family'         => true,
											        'size'           => true,
											        'line-height'    => true,
											        'letter-spacing' => true,
											        'color'          => false
											    ),
											    'label' => esc_html__('Menu Button Text', 'naslaan' )
											),
											'menu_button_text_notebook_layout' => array(
												'type' => 'multi-picker',
												'label' => false,
												'desc' => false,
												'picker' => array(
													'menu_button_text_nl_switch' => array(
														'type'  => 'switch',
													    'value' => 'disabled',
													    'label' => esc_html__('Menu Button Text (Notebook Layout)', 'naslaan' ),
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
				
														'font_size' => array(
															'label' => esc_html__('Font Size', 'naslaan' ),
															'type' => 'short-text',
															'value' => '15',
															'desc' => esc_html__( 'value in pixels', 'naslaan' ),
														),
			
													),
												),
												'show_borders' => false,
											),
											'menu_button_text_tablet_layout' => array(
												'type' => 'multi-picker',
												'label' => false,
												'desc' => false,
												'picker' => array(
													'menu_button_text_tl_switch' => array(
														'type'  => 'switch',
													    'value' => 'disabled',
													    'label' => esc_html__('Menu Button Text (Tablet Layout)', 'naslaan' ),
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
				
														'font_size' => array(
															'label' => esc_html__('Font Size', 'naslaan' ),
															'type' => 'short-text',
															'value' => '15',
															'desc' => esc_html__( 'value in pixels', 'naslaan' ),
														),
			
													),
												),
												'show_borders' => false,
											),
											'menu_button_color' => array(
											    'type'  => 'rgba-color-picker',
											    'value' => 'rgba(255,255,255,1)',
											    'label' => esc_html__('Menu Button Color', 'naslaan' )
											),
											'menu_button_color_hover' => array(
											    'type'  => 'rgba-color-picker',
											    'value' => 'rgba(222,0,46,1)',
											    'label' => esc_html__('Menu Button Hover Color', 'naslaan' )
											),
											'menu_background_color' => array(
											    'type'  => 'rgba-color-picker',
											    'value' => 'rgba(255,255,255,0)',
											    'label' => esc_html__('Menu Background Color', 'naslaan' )
											),
											'menu_background_color_hover' => array(
											    'type'  => 'rgba-color-picker',
											    'value' => 'rgba(255,255,255,0)',
											    'label' => esc_html__('Menu Background Hover Color', 'naslaan' )
											),
											'menu_button_overlay_effect' => array(
												'type' => 'multi-picker',
												'label' => false,
												'desc' => false,
												'picker' => array(
													'menu_button_overlay_effect_switch' => array(
														'type'  => 'switch',
													    'value' => 'disabled',
													    'label' => esc_html__('Overlay Effect', 'naslaan' ),
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
				
														'menu_button_overlay_effect_types' => array(
														    'type'  => 'select',
														    'value' => 'none',
														    'label' => esc_html__('Types', 'naslaan' ),
														    'choices' => array(
														        'type_1' => esc_html__('Type 1', 'naslaan' ),
														        'type_2' => esc_html__('Type 2', 'naslaan' ),
														    ),
														),
			
													),
												),
												'show_borders' => false,
											),
											'menu_button_radius' => array(
												'label' => esc_html__('Button Radius', 'naslaan' ),
												'type' => 'short-text',
												'value' => '0',
											),
											'menu_button_top_border' => array(
												'type' => 'multi-picker',
												'label' => false,
												'desc' => false,
												'picker' => array(
													'top_border_switch' => array(
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
									
														'top_border_color' => array(
														    'type'  => 'rgba-color-picker',
														    'value' => 'rgba(255,255,255,1)',
														    'label' => esc_html__('Border Color', 'naslaan' )
														),
														'top_border_hover_color' => array(
														    'type'  => 'rgba-color-picker',
														    'value' => 'rgba(79,45,127,1)',
														    'label' => esc_html__('Border Hover Color', 'naslaan' )
														),
														'top_border_height' => array(
															'label' => esc_html__('Border Height', 'naslaan' ),
															'type' => 'short-text',
															'value' => '3',
															'desc' => esc_html__( 'value in pixels', 'naslaan' ),
														),
									
													),
												),
												'show_borders' => false,
											),
											'menu_button_right_border' => array(
												'type' => 'multi-picker',
												'label' => false,
												'desc' => false,
												'picker' => array(
													'right_border_switch' => array(
														'type'  => 'switch',
													    'value' => 'disabled',
													    'label' => esc_html__('Right Border', 'naslaan' ),
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
									
														'right_border_color' => array(
														    'type'  => 'rgba-color-picker',
														    'value' => 'rgba(255,255,255,1)',
														    'label' => esc_html__('Border Color', 'naslaan' )
														),
														'right_border_hover_color' => array(
														    'type'  => 'rgba-color-picker',
														    'value' => 'rgba(255,255,255,1)',
														    'label' => esc_html__('Border Hover Color', 'naslaan' )
														),
														'right_border_height' => array(
															'label' => esc_html__('Border Height', 'naslaan' ),
															'type' => 'short-text',
															'value' => '1',
															'desc' => esc_html__( 'value in pixels', 'naslaan' ),
														),
														
													),
												),
												'show_borders' => false,
											),
											'menu_button_bottom_border' => array(
												'type' => 'multi-picker',
												'label' => false,
												'desc' => false,
												'picker' => array(
													'bottom_border_switch' => array(
														'type'  => 'switch',
													    'value' => 'disabled',
													    'label' => esc_html__('Bottom Border', 'naslaan' ),
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
									
														'bottom_border_color' => array(
														    'type'  => 'rgba-color-picker',
														    'value' => 'rgba(255,255,255,1)',
														    'label' => esc_html__('Border Color', 'naslaan' )
														),
														'bottom_border_hover_color' => array(
														    'type'  => 'rgba-color-picker',
														    'value' => 'rgba(255,255,255,1)',
														    'label' => esc_html__('Border Hover Color', 'naslaan' )
														),
														'bottom_border_height' => array(
															'label' => esc_html__('Border Height', 'naslaan' ),
															'type' => 'short-text',
															'value' => '1',
															'desc' => esc_html__( 'value in pixels', 'naslaan' ),
														),
														
													),
												),
												'show_borders' => false,
											),
											'menu_button_left_border' => array(
												'type' => 'multi-picker',
												'label' => false,
												'desc' => false,
												'picker' => array(
													'left_border_switch' => array(
														'type'  => 'switch',
													    'value' => 'disabled',
													    'label' => esc_html__('Left Border', 'naslaan' ),
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
									
														'left_border_color' => array(
														    'type'  => 'rgba-color-picker',
														    'value' => 'rgba(255,255,255,1)',
														    'label' => esc_html__('Border Color', 'naslaan' )
														),
														'left_border_hover_color' => array(
														    'type'  => 'rgba-color-picker',
														    'value' => 'rgba(255,255,255,1)',
														    'label' => esc_html__('Border Hover Color', 'naslaan' )
														),
														'left_border_height' => array(
															'label' => esc_html__('Border Height', 'naslaan' ),
															'type' => 'short-text',
															'value' => '1',
															'desc' => esc_html__( 'value in pixels', 'naslaan' ),
														),
														
													),
												),
												'show_borders' => false,
											),
										),
									),
									
									'group_dropdown_menu' => array(
									    'type' => 'group',
									    'options' => array(
									    
											'menu_dropdown_variant' => array(
												'type' => 'multi-picker',
												'show_borders' => false,
												'label' => false,
												'desc' => false,
												'value' => array(
													'dropdown_variant' => 'variant_1',
												),
												'picker' => array(
													'dropdown_variant' => array(
														'type'  => 'radio',
													    'label' => esc_html__('Dropdown Navigation', 'naslaan' ),
													    'choices' => array(
													        'variant_1' => esc_html__('Variant 1', 'naslaan' ),
													        'variant_2' => esc_html__('Variant 2', 'naslaan' ),
													    ),
													    'inline' => false,
													)
												),
												'choices' => array(
													'variant_1' => array(),
													'variant_2' => array(
														'bullet_color' => array(
														    'type'  => 'rgba-color-picker',
														    'value' => 'rgba(222,0,46,1)',
														    'label' => esc_html__('Bullet Color', 'naslaan' )
														),
													)
												),
				
											),
											'menu_dropdown_border' => array(
												'type' => 'multi-picker',
												'label' => false,
												'desc' => false,
												'picker' => array(
													'menu_dropdown_border_switch' => array(
														'type'  => 'switch',
													    'value' => 'disabled',
													    'label' => esc_html__('Dropdown Top Border', 'naslaan' ),
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
														'menu_dropdown_border_color' => array(
														    'type'  => 'rgba-color-picker',
														    'value' => 'rgba(222,0,46,1)',
														    'label' => esc_html__('Border Color', 'naslaan' )
														),
			
													),
												),
												'show_borders' => false,
											),
											
											'dropdown_font' => array(
											    'type' => 'typography-v2',
											    'value' => array(
											        'family' => 'Lato',
											        'subset' => 'latin',
											        'variation' => '700',
											        'size' => 16,
											        'line-height' => 1.5,
											        'letter-spacing' => 0,
											    ),
											    'components' => array(
											        'family'         => true,
											        'size'           => true,
											        'line-height'    => true,
											        'letter-spacing' => true,
											        'color'          => false
											    ),
											    'label' => esc_html__('Dropdown Font', 'naslaan' )
											),
											
											'dropdown_color' => array(
											    'type'  => 'rgba-color-picker',
											    'value' => 'rgba(37,37,37,1)',
											    'label' => esc_html__('Menu Button Color', 'naslaan' )
											),
											'dropdown_color_hover' => array(
											    'type'  => 'rgba-color-picker',
											    'value' => 'rgba(222,0,46,1)',
											    'label' => esc_html__('Menu Button Hover Color', 'naslaan' )
											),
											
											'dropdown_title_font' => array(
											    'type' => 'typography-v2',
											    'value' => array(
											        'family' => 'Lato',
											        'subset' => 'latin',
											        'variation' => '700',
											        'size' => 16,
											        'letter-spacing' => 0,
											        'color' => '#252525'
											    ),
											    'components' => array(
											        'family'         => true,
											        'size'           => true,
											        'line-height'    => false,
											        'letter-spacing' => true,
											        'color'          => true,
											    ),
											    'label' => esc_html__('Dropdown Title Font', 'naslaan' )
											),
																		    
										),
									),

									'header_search' => array(
									    'type' => 'group',
									    'options' => array(
									    
									    
											'search_form' => array(
												'type' => 'multi-picker',
												'label' => false,
												'desc' => false,
												'picker' => array(
													'search_form_visibility' => array(
														'type'  => 'switch',
													    'value' => 'disabled',
													    'label' => esc_html__('Search Form', 'naslaan' ),
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
				
														'search_form_type' => array(
														    'type'  => 'radio',
														    'value' => 'search',
														    'label' => esc_html__('Form Type', 'naslaan' ),
														    'choices' => array(
														        'search' => esc_html__('Search For', 'naslaan' ),
														        'search_products' => esc_html__('Search For Products', 'naslaan' ),
														    ),
														    'inline' => true,
														),
																												
														'search_btn_container_margins' =>array(
														    'type'  => 'html',
														    'label' => esc_html__('Search Container Margins', 'naslaan' ),
														    'html'  => '',
														),
														'search_btn_container_margin_top' => array(
															'label' => '',
															'type' => 'short-text',
															'value' => '0',
															'desc' => esc_html__( 'top', 'naslaan' ),
														),
														'search_btn_container_margin_right' => array(
															'label' => '',
															'type' => 'short-text',
															'value' => '0',
															'desc' => esc_html__( 'right', 'naslaan' ),
														),
														'search_btn_container_margin_bottom' => array(
															'label' => '',
															'type' => 'short-text',
															'value' => '0',
															'desc' => esc_html__( 'bottom', 'naslaan' ),
														),
														'search_btn_container_margin_left' => array(
															'label' => '',
															'type' => 'short-text',
															'value' => '20',
															'desc' => esc_html__( 'left', 'naslaan' ),
														),
														'search_btn_container_margin_clearfix' =>array(
														    'type'  => 'html',
														    'label' => '',
														    'html'  => '<div class="wp-clearfix"></div>',
														),
														
														'search_btn_sepline' => array(
															'type' => 'multi-picker',
															'label' => false,
															'desc' => false,
															'picker' => array(
																'sepline_switch' => array(
																	'type'  => 'switch',
																    'value' => 'disabled',
																    'label' => esc_html__('Separate Line', 'naslaan' ),
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
																	'search_btn_sepline_color' => array(
																	    'type'  => 'rgba-color-picker',
																	    'value' => 'rgba(255,255,255,0.15)',
																	    'label' => esc_html__('Border Color', 'naslaan' )
																	),
						
																),
															),
															'show_borders' => false,
														),
														
														'search_btn_margins' =>array(
														    'type'  => 'html',
														    'label' => esc_html__('Search Button Margins', 'naslaan' ),
														    'html'  => '',
														),
														'search_btn_margin_right' => array(
															'label' => '',
															'type' => 'short-text',
															'value' => '0',
															'desc' => esc_html__( 'right', 'naslaan' ),
														),
														'search_btn_margin_left' => array(
															'label' => '',
															'type' => 'short-text',
															'value' => '20',
															'desc' => esc_html__( 'left', 'naslaan' ),
														),
														'search_btn_margin_clearfix' =>array(
														    'type'  => 'html',
														    'label' => '',
														    'html'  => '<div class="wp-clearfix"></div>',
														),
														'search_btn_width' => array(
															'label' => esc_html__('Button Width', 'naslaan' ),
															'type' => 'short-text',
															'value' => '36',
														),
														'search_btn_icon_size' => array(
															'label' => esc_html__('Button Icon Size', 'naslaan' ),
															'type' => 'short-text',
															'value' => '18',
														),
														'search_btn_color' => array(
														    'type'  => 'rgba-color-picker',
														    'value' => 'rgba(255,255,255,0.6)',
														    'label' => esc_html__('Search Button Color', 'naslaan' )
														),
														'search_btn_color_hover' => array(
														    'type'  => 'rgba-color-picker',
														    'value' => 'rgba(255,255,255,1)',
														    'label' => esc_html__('Search Button Hover Color', 'naslaan' )
														),
														'search_btn_background' => array(
														    'type'  => 'rgba-color-picker',
														    'value' => 'rgba(255,255,255,0)',
														    'label' => esc_html__('Search Button Background', 'naslaan' )
														),
														'search_btn_background_hover' => array(
														    'type'  => 'rgba-color-picker',
														    'value' => 'rgba(255,255,255,0)',
														    'label' => esc_html__('Search Button Hover Background', 'naslaan' )
														),
														'search_button_border' => array(
															'type' => 'multi-picker',
															'label' => false,
															'desc' => false,
															'picker' => array(
																'search_button_border_switch' => array(
																	'type'  => 'switch',
																    'value' => 'enabled',
																    'label' => esc_html__('Search Button Border', 'naslaan' ),
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
							
																	'search_border_weight' => array(
																		'label' => esc_html__('Border Weight', 'naslaan' ),
																		'type' => 'short-text',
																		'value' => '1',
																	),
																
																	'search_border_color' => array(
																	    'type'  => 'rgba-color-picker',
																	    'value' => 'rgba(255,255,255,0.15)',
																	    'label' => esc_html__('Border Color', 'naslaan' )
																	),
																	'search_border_color_hover' => array(
																	    'type'  => 'rgba-color-picker',
																	    'value' => 'rgba(255,255,255,0.15)',
																	    'label' => esc_html__('Border Hover Color', 'naslaan' )
																	),
						
																),
															),
															'show_borders' => false,
														),
														'search_button_visibility' => array(
														    'type'  => 'checkboxes',
														    'value' => array(
														        'notebook' => false,
														        'tablet' => false,
														        'mobile' => false,
														    ),
														    'label' => esc_html__('Visibility', 'naslaan'),
														    'desc'  => esc_html__('Check to hide on device.', 'naslaan'),
														    'choices' => array(
														        'notebook' => esc_html__('Notebook (1200px)', 'naslaan'),
														        'tablet' => esc_html__('Tablet (992px)', 'naslaan'),
														        'mobile' => esc_html__('Mobile (768px)', 'naslaan'),
														    ),
														    'inline' => false,
														),

													
													),
												),
												'show_borders' => false,
											),
									    
										),
									),
									
									
									'header_msg_container' => array(
									    'type' => 'group',
									    'options' => array(
									    
											'msg_container_visibility' => array(
												'type' => 'multi-picker',
												'label' => false,
												'desc' => false,
												'picker' => array(
													'msg_container_switch' => array(
														'type'  => 'switch',
													    'value' => 'disabled',
													    'label' => esc_html__('Message Block', 'naslaan' ),
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
														'msg_container_margins' =>array(
														    'type'  => 'html',
														    'label' => esc_html__('Message Container Margins', 'naslaan' ),
														    'html'  => '',
														),
														'msg_container_margin_top' => array(
															'label' => '',
															'type' => 'short-text',
															'value' => '0',
															'desc' => esc_html__( 'top', 'naslaan' ),
														),
														'msg_container_margin_right' => array(
															'label' => '',
															'type' => 'short-text',
															'value' => '0',
															'desc' => esc_html__( 'right', 'naslaan' ),
														),
														'msg_container_margin_bottom' => array(
															'label' => '',
															'type' => 'short-text',
															'value' => '0',
															'desc' => esc_html__( 'bottom', 'naslaan' ),
														),
														'msg_container_margin_left' => array(
															'label' => '',
															'type' => 'short-text',
															'value' => '20',
															'desc' => esc_html__( 'left', 'naslaan' ),
														),
														'msg_container_margin_clearfix' =>array(
														    'type'  => 'html',
														    'label' => '',
														    'html'  => '<div class="wp-clearfix"></div>',
														),
														'msg_container_sepline' => array(
															'type' => 'multi-picker',
															'label' => false,
															'desc' => false,
															'picker' => array(
																'sepline_switch' => array(
																	'type'  => 'switch',
																    'value' => 'enabled',
																    'label' => esc_html__('Separate Line', 'naslaan' ),
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
																	'msg_container_sepline_color' => array(
																	    'type'  => 'rgba-color-picker',
																	    'value' => 'rgba(255,255,255,0.15)',
																	    'label' => esc_html__('Border Color', 'naslaan' )
																	),
						
																),
															),
															'show_borders' => false,
														),
														'msg_block_margins' =>array(
														    'type'  => 'html',
														    'label' => esc_html__('Message Block Margins', 'naslaan' ),
														    'html'  => '',
														),
														'msg_block_margin_right' => array(
															'label' => '',
															'type' => 'short-text',
															'value' => '0',
															'desc' => esc_html__( 'right', 'naslaan' ),
														),
														'msg_block_margin_left' => array(
															'label' => '',
															'type' => 'short-text',
															'value' => '20',
															'desc' => esc_html__( 'left', 'naslaan' ),
														),
														'msg_block_margin_clearfix' =>array(
														    'type'  => 'html',
														    'label' => '',
														    'html'  => '<div class="wp-clearfix"></div>',
														),
														'msg_block_paddings' =>array(
														    'type'  => 'html',
														    'label' => esc_html__('Message Block Paddings', 'naslaan' ),
														    'html'  => '',
														),
														'msg_block_padding_right' => array(
															'label' => '',
															'type' => 'short-text',
															'value' => '20',
															'desc' => esc_html__( 'right', 'naslaan' ),
														),
														'msg_block_padding_left' => array(
															'label' => '',
															'type' => 'short-text',
															'value' => '20',
															'desc' => esc_html__( 'left', 'naslaan' ),
														),
														'msg_block_padding_clearfix' =>array(
														    'type'  => 'html',
														    'label' => '',
														    'html'  => '<div class="wp-clearfix"></div>',
														),
														'msg_block_content' => array(
															'label' => esc_html__('Text Content', 'naslaan' ),
															'type' => 'text',
															'value' => 'Text Content',
														),
														'msg_block_url' => array(
															'label' => esc_html__('URL (Link)', 'naslaan' ),
															'type' => 'text',
															'value' => '',
															'desc' => esc_html__( 'Add link to button.', 'naslaan' ),
														),
														'msg_block_text' => array(
														    'type' => 'typography-v2',
														    'value' => array(
														        'family' => 'Lato',
														        'subset' => 'latin-ext',
														        'variation' => 'regular',
														        'size' => 16,
														        'letter-spacing' => 0.3,
														        'color' => '#ffffff'
														    ),
														    'components' => array(
														        'family'         => true,
														        'size'           => true,
														        'line-height'    => false,
														        'letter-spacing' => true,
														        'color'          => true
														    ),
														    'label' => esc_html__('Text', 'naslaan' )
														),
														'msg_block_underline' => array(
														    'type'  => 'rgba-color-picker',
														    'value' => 'rgba(255,255,255,1)',
														    'label' => esc_html__('Message Underline Text', 'naslaan' )
														),
														'msg_block_background' => array(
														    'type'  => 'rgba-color-picker',
														    'value' => 'rgba(255,255,255,0)',
														    'label' => esc_html__('Message Block Background', 'naslaan' )
														),
														
														'msg_block_border' => array(
															'type' => 'multi-picker',
															'label' => false,
															'desc' => false,
															'picker' => array(
																'msg_block_border_switch' => array(
																	'type'  => 'switch',
																    'value' => 'enabled',
																    'label' => esc_html__('Message Block Border', 'naslaan' ),
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
							
																	'msg_block_border_weight' => array(
																		'label' => esc_html__('Border Weight', 'naslaan' ),
																		'type' => 'short-text',
																		'value' => '1',
																	),
																
																	'msg_block_border_color' => array(
																	    'type'  => 'rgba-color-picker',
																	    'value' => 'rgba(255,255,255,0.15)',
																	    'label' => esc_html__('Border Color', 'naslaan' )
																	),
																	'msg_block_border_color_hover' => array(
																	    'type'  => 'rgba-color-picker',
																	    'value' => 'rgba(255,255,255,0.15)',
																	    'label' => esc_html__('Border Hover Color', 'naslaan' )
																	),
						
																),
															),
															'show_borders' => false,
														),
														'msg_block_visibility' => array(
														    'type'  => 'checkboxes',
														    'value' => array(
														        'notebook' => false,
														        'tablet' => false,
														        'mobile' => false,
														    ),
														    'label' => esc_html__('Visibility', 'naslaan'),
														    'desc'  => esc_html__('Check to hide on device.', 'naslaan'),
														    'choices' => array(
														        'notebook' => esc_html__('Notebook (1200px)', 'naslaan'),
														        'tablet' => esc_html__('Tablet (992px)', 'naslaan'),
														        'mobile' => esc_html__('Mobile (768px)', 'naslaan'),
														    ),
														    'inline' => false,
														),
														
														
													),
												),
												'show_borders' => false,
											),
									    	
											
										),
									),
									
									'header_social_media_group' => array(
									    'type' => 'group',
									    'options' => array(
									    
											'header_social_media_picker' => array(
												'type' => 'multi-picker',
												'label' => false,
												'desc' => false,
												'picker' => array(
													'social_media_visibility' => array(
														'type'  => 'switch',
													    'value' => 'disabled',
													    'label' => esc_html__('Social Media', 'naslaan' ),
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
														'header_social_media_msg' =>array(
														    'type'  => 'html',
														    'label' => '',
														    'html'  => '',
														    'desc' => esc_html__( 'Navigate to "Header" => "Header Social Media" for social media options.', 'naslaan' ),
														),
													),
												),
												'show_borders' => false,
											),
									    
										),
									),
									
									'header_shopping_cart' => array(
									    'type' => 'group',
									    'options' => array(
									    
											'shopping_cart' => array(
												'type' => 'multi-picker',
												'label' => false,
												'desc' => false,
												'picker' => array(
													'shopping_cart_visibility' => array(
														'type'  => 'switch',
													    'value' => 'disabled',
													    'label' => esc_html__('Shopping Cart', 'naslaan' ),
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
									    
									    
														'shopping_cart_btn_container_margins' =>array(
														    'type'  => 'html',
														    'label' => esc_html__('Shopping Cart Container Margins', 'naslaan' ),
														    'html'  => '',
														),
														'shopping_cart_btn_container_margin_top' => array(
															'label' => '',
															'type' => 'short-text',
															'value' => '0',
															'desc' => esc_html__( 'top', 'naslaan' ),
														),
														'shopping_cart_btn_container_margin_right' => array(
															'label' => '',
															'type' => 'short-text',
															'value' => '0',
															'desc' => esc_html__( 'right', 'naslaan' ),
														),
														'shopping_cart_btn_container_margin_bottom' => array(
															'label' => '',
															'type' => 'short-text',
															'value' => '0',
															'desc' => esc_html__( 'bottom', 'naslaan' ),
														),
														'shopping_cart_btn_container_margin_left' => array(
															'label' => '',
															'type' => 'short-text',
															'value' => '20',
															'desc' => esc_html__( 'left', 'naslaan' ),
														),
														'shopping_cart_btn_container_margin_clearfix' =>array(
														    'type'  => 'html',
														    'label' => '',
														    'html'  => '<div class="wp-clearfix"></div>',
														),
														
														'shopping_cart_btn_sepline' => array(
															'type' => 'multi-picker',
															'label' => false,
															'desc' => false,
															'picker' => array(
																'sepline_switch' => array(
																	'type'  => 'switch',
																    'value' => 'enabled',
																    'label' => esc_html__('Separate Line', 'naslaan' ),
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
																	'shopping_cart_btn_sepline_color' => array(
																	    'type'  => 'rgba-color-picker',
																	    'value' => 'rgba(255,255,255,0.15)',
																	    'label' => esc_html__('Border Color', 'naslaan' )
																	),
						
																),
															),
															'show_borders' => false,
														),
														
														'shopping_cart_btn_margins' =>array(
														    'type'  => 'html',
														    'label' => esc_html__('Shopping Cart Button Margins', 'naslaan' ),
														    'html'  => '',
														),
														'shopping_cart_btn_margin_right' => array(
															'label' => '',
															'type' => 'short-text',
															'value' => '0',
															'desc' => esc_html__( 'right', 'naslaan' ),
														),
														'shopping_cart_btn_margin_left' => array(
															'label' => '',
															'type' => 'short-text',
															'value' => '20',
															'desc' => esc_html__( 'left', 'naslaan' ),
														),
														'shopping_cart_btn_margin_clearfix' =>array(
														    'type'  => 'html',
														    'label' => '',
														    'html'  => '<div class="wp-clearfix"></div>',
														),
														'shopping_cart_btn_padding_bottom' => array(
															'label' => esc_html__('Shopping Cart Button Padding', 'naslaan' ),
															'type' => 'short-text',
															'value' => '20',
															'desc' => esc_html__( 'bottom', 'naslaan' ),
														),
														'shopping_cart_btn_width' => array(
															'label' => esc_html__('Shopping Cart Button Width', 'naslaan' ),
															'type' => 'short-text',
															'value' => '40',
														),
														'shopping_cart_btn_color' => array(
														    'type'  => 'rgba-color-picker',
														    'value' => 'rgba(255,255,255,0.6)',
														    'label' => esc_html__('Shopping Cart Button Color', 'naslaan' )
														),
														'shopping_cart_btn_color_hover' => array(
														    'type'  => 'rgba-color-picker',
														    'value' => 'rgba(255,255,255,1)',
														    'label' => esc_html__('Shopping Cart Button Hover Color', 'naslaan' )
														),
														'shopping_cart_btn_background' => array(
														    'type'  => 'rgba-color-picker',
														    'value' => 'rgba(255,255,255,0)',
														    'label' => esc_html__('Shopping Cart Button Background', 'naslaan' )
														),
														'shopping_cart_btn_background_hover' => array(
														    'type'  => 'rgba-color-picker',
														    'value' => 'rgba(255,255,255,0)',
														    'label' => esc_html__('Shopping Cart Button Hover Background', 'naslaan' )
														),
														'shopping_cart_alternative' => array(
															'type' => 'multi-picker',
															'label' => false,
															'desc' => false,
															'picker' => array(
																'shopping_cart_alternative_switch' => array(
																	'type'  => 'switch',
																    'value' => 'disabled',
																    'label' => esc_html__('Shopping Cart Alternative Variant', 'naslaan' ),
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
																
																	'shopping_cart_btn_counter_color' => array(
																	    'type'  => 'rgba-color-picker',
																	    'value' => 'rgba(255,255,255,1)',
																	    'label' => esc_html__('Counter Color', 'naslaan' )
																	),
																	'shopping_cart_btn_counter_color_hover' => array(
																	    'type'  => 'rgba-color-picker',
																	    'value' => 'rgba(255,255,255,1)',
																	    'label' => esc_html__('Counter Hover Color', 'naslaan' )
																	),
																	'shopping_cart_btn_counter_bg' => array(
																	    'type'  => 'rgba-color-picker',
																	    'value' => 'rgba(222,0,46,1)',
																	    'label' => esc_html__('Counter Background', 'naslaan' )
																	),
																	'shopping_cart_btn_counter_bg_hover' => array(
																	    'type'  => 'rgba-color-picker',
																	    'value' => 'rgba(255,0,51,1)',
																	    'label' => esc_html__('Counter Hover Background', 'naslaan' )
																	),
																	
						
																),
															),
															'show_borders' => false,
														),
														'shopping_cart_button_border' => array(
															'type' => 'multi-picker',
															'label' => false,
															'desc' => false,
															'picker' => array(
																'shopping_cart_button_border_switch' => array(
																	'type'  => 'switch',
																    'value' => 'enabled',
																    'label' => esc_html__('Shopping Cart Button Border', 'naslaan' ),
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
							
																	'shopping_cart_border_weight' => array(
																		'label' => esc_html__('Border Weight', 'naslaan' ),
																		'type' => 'short-text',
																		'value' => '1',
																	),
																
																	'shopping_cart_border_color' => array(
																	    'type'  => 'rgba-color-picker',
																	    'value' => 'rgba(255,255,255,0.15)',
																	    'label' => esc_html__('Border Color', 'naslaan' )
																	),
																	'shopping_cart_border_color_hover' => array(
																	    'type'  => 'rgba-color-picker',
																	    'value' => 'rgba(255,255,255,0.15)',
																	    'label' => esc_html__('Border Hover Color', 'naslaan' )
																	),
						
																),
															),
															'show_borders' => false,
														),
														'shopping_cart_button_visibility' => array(
														    'type'  => 'checkboxes',
														    'value' => array(
														        'notebook' => false,
														        'tablet' => false,
														        'mobile' => false,
														    ),
														    'label' => esc_html__('Visibility', 'naslaan'),
														    'desc'  => esc_html__('Check to hide on device.', 'naslaan'),
														    'choices' => array(
														        'notebook' => esc_html__('Notebook (1200px)', 'naslaan'),
														        'tablet' => esc_html__('Tablet (992px)', 'naslaan'),
														        'mobile' => esc_html__('Mobile (768px)', 'naslaan'),
														    ),
														    'inline' => false,
														),
																							    
													),
												),
												'show_borders' => false,
											),
									    
										),
									),
									
									
									'header_wpml' => array(
									    'type' => 'group',
									    'options' => array(
									    
											'wpml_container_visibility' => array(
												'type' => 'multi-picker',
												'label' => false,
												'desc' => false,
												'picker' => array(
													'wpml_container_switch' => array(
														'type'  => 'switch',
													    'value' => 'disabled',
													    'label' => esc_html__('WPML Button', 'naslaan' ),
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
									    
									    
														'wpml_container_margins' =>array(
														    'type'  => 'html',
														    'label' => esc_html__('WPML Container Margins', 'naslaan' ),
														    'html'  => '',
														),
														'wpml_container_margin_top' => array(
															'label' => '',
															'type' => 'short-text',
															'value' => '0',
															'desc' => esc_html__( 'top', 'naslaan' ),
														),
														'wpml_container_margin_right' => array(
															'label' => '',
															'type' => 'short-text',
															'value' => '0',
															'desc' => esc_html__( 'right', 'naslaan' ),
														),
														'wpml_container_margin_bottom' => array(
															'label' => '',
															'type' => 'short-text',
															'value' => '0',
															'desc' => esc_html__( 'bottom', 'naslaan' ),
														),
														'wpml_container_margin_left' => array(
															'label' => '',
															'type' => 'short-text',
															'value' => '20',
															'desc' => esc_html__( 'left', 'naslaan' ),
														),
														'wpml_container_margin_clearfix' =>array(
														    'type'  => 'html',
														    'label' => '',
														    'html'  => '<div class="wp-clearfix"></div>',
														),
														
														'wpml_btn_sepline' => array(
															'type' => 'multi-picker',
															'label' => false,
															'desc' => false,
															'picker' => array(
																'sepline_switch' => array(
																	'type'  => 'switch',
																    'value' => 'enabled',
																    'label' => esc_html__('Separate Line', 'naslaan' ),
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
																	'wpml_btn_sepline_color' => array(
																	    'type'  => 'rgba-color-picker',
																	    'value' => 'rgba(255,255,255,0.15)',
																	    'label' => esc_html__('Border Color', 'naslaan' )
																	),
						
																),
															),
															'show_borders' => false,
														),
														'wpml_btn_width' => array(
															'label' => esc_html__('WPML Button Width', 'naslaan' ),
															'type' => 'short-text',
															'value' => '77',
														),
														'wpml_btn_font' => array(
														    'type' => 'typography-v2',
														    'value' => array(
														        'family' => 'Lato',
														        'subset' => 'latin-ext',
														        'variation' => '300',
														        'size' => 16,
														        'letter-spacing' => 0,
														    ),
														    'components' => array(
														        'family'         => true,
														        'size'           => true,
														        'line-height'    => false,
														        'letter-spacing' => true,
														        'color'          => false,
														    ),
														    'label' => esc_html__('WPML Button Font', 'naslaan' )
														),
														'wpml_btn_color' => array(
														    'type'  => 'rgba-color-picker',
														    'value' => 'rgba(255,255,255,1)',
														    'label' => esc_html__('WPML Button Color', 'naslaan' )
														),
														'wpml_btn_color_hover' => array(
														    'type'  => 'rgba-color-picker',
														    'value' => 'rgba(255,0,51,1)',
														    'label' => esc_html__('WPML Button Hover Color', 'naslaan' )
														),
														'wpml_btn_visibility' => array(
														    'type'  => 'checkboxes',
														    'value' => array(
														        'notebook' => false,
														        'tablet' => false,
														        'mobile' => false,
														    ),
														    'label' => esc_html__('Visibility', 'naslaan'),
														    'desc'  => esc_html__('Check to hide on device.', 'naslaan'),
														    'choices' => array(
														        'notebook' => esc_html__('Notebook (1200px)', 'naslaan'),
														        'tablet' => esc_html__('Tablet (992px)', 'naslaan'),
														        'mobile' => esc_html__('Mobile (768px)', 'naslaan'),
														    ),
														    'inline' => false,
														),
														
									    
													),
												),
												'show_borders' => false,
											),

									    
										),
									),

								
								),
							),
	
						),
					),
					
					
					'meta_top_bar' => array(
						'title' => esc_html__( 'Meta Top Bar', 'naslaan' ),
						'type' => 'tab',
						'options' => array(
	
							'theme_options-box' => array(
								'title' => esc_html__( 'Meta Top Bar', 'naslaan' ),
								'type' => 'box',
								'options' => array(

									'meta_top_bar_group' => array(
									    'type' => 'group',
									    'options' => array(
									    
									    
											'meta_top_bar_switch' => array(
												'type' => 'multi-picker',
												'label' => false,
												'desc' => false,
												'picker' => array(
													'meta_top_bar_visibility' => array(
														'type'  => 'switch',
													    'value' => 'disabled',
													    'label' => esc_html__('Meta Top Bar', 'naslaan' ),
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
													
														'meta_top_bg_color' => array(
														    'type'  => 'rgba-color-picker',
														    'value' => 'rgba(255,255,255,0.06)',
														    'label' => esc_html__('Meta Top Bar Background', 'naslaan' )
														),
														'meta_top_bottom_border' => array(
															'type' => 'multi-picker',
															'label' => false,
															'desc' => false,
															'picker' => array(
																'meta_top_border_switch' => array(
																	'type'  => 'switch',
																    'value' => 'enabled',
																    'label' => esc_html__('Meta Top Bottom Border', 'naslaan' ),
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
												
																	'meta_top_border_color' => array(
																	    'type'  => 'rgba-color-picker',
																	    'value' => 'rgba(255,255,255,0.15)',
																	    'label' => esc_html__('Border Color', 'naslaan' )
																	),
												
																),
															),
															'show_borders' => false,
														),
														'text_msg_1_group' => array(
														    'type' => 'group',
														    'options' => array(
																'text_msg_1_switch' => array(
																	'type' => 'multi-picker',
																	'label' => false,
																	'desc' => false,
																	'picker' => array(
																		'text_msg_visibility' => array(
																			'type'  => 'switch',
																		    'value' => 'disabled',
																		    'label' => esc_html__('Text Message 1', 'naslaan' ),
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
																		
																			'text_msg_text' => array(
																				'label' => esc_html__('Text', 'naslaan' ),
																				'type' => 'text',
																				'value' => '',
																				'desc' => '',
																			),
																			'text_msg_font' => array(
																			    'type' => 'typography-v2',
																			    'value' => array(
																			        'family' => 'Lato',
																			        'subset' => 'latin-ext',
																			        'variation' => 'regular',
																			        'size' => 16,
																			        'line-height' => 46,
																			        'letter-spacing' => 0.3,
																			    ),
																			    'components' => array(
																			        'family'         => true,
																			        'size'           => true,
																			        'line-height'    => true,
																			        'letter-spacing' => true,
																			        'color'          => false
																			    ),
																			    'label' => esc_html__('Text Font', 'naslaan' )
																			),
																			'text_msg_color' => array(
																			    'type'  => 'rgba-color-picker',
																			    'value' => 'rgba(255,255,255,0.6)',
																			    'label' => esc_html__('Text Color', 'naslaan' )
																			),
																			'text_msg_url' => array(
																				'label' => esc_html__('URL (Link)', 'naslaan' ),
																				'type' => 'text',
																				'value' => '',
																				'desc' => esc_html__( 'Add link to button.', 'naslaan' ),
																			),
																			'text_msg_color_hover' => array(
																			    'type'  => 'rgba-color-picker',
																			    'value' => 'rgba(255,255,255,1)',
																			    'label' => esc_html__('Link Hover Color', 'naslaan' )
																			),
																			'text_msg_margins' =>array(
																			    'type'  => 'html',
																			    'label' => esc_html__('Container Margins', 'naslaan' ),
																			    'html'  => '',
																			),
																			'text_msg_margin_top' => array(
																				'label' => '',
																				'type' => 'short-text',
																				'value' => '0',
																				'desc' => esc_html__( 'top', 'naslaan' ),
																			),
																			'text_msg_margin_right' => array(
																				'label' => '',
																				'type' => 'short-text',
																				'value' => '0',
																				'desc' => esc_html__( 'right', 'naslaan' ),
																			),
																			'text_msg_margin_bottom' => array(
																				'label' => '',
																				'type' => 'short-text',
																				'value' => '0',
																				'desc' => esc_html__( 'bottom', 'naslaan' ),
																			),
																			'text_msg_margin_left' => array(
																				'label' => '',
																				'type' => 'short-text',
																				'value' => '0',
																				'desc' => esc_html__( 'left', 'naslaan' ),
																			),
																			'text_msg_margin_clearfix' =>array(
																			    'type'  => 'html',
																			    'label' => '',
																			    'html'  => '<div class="wp-clearfix"></div>',
																			),
																			'text_msg_c_visibility' => array(
																			    'type'  => 'checkboxes',
																			    'value' => array(
																			        'notebook' => false,
																			        'tablet' => false,
																			        'mobile' => false,
																			    ),
																			    'label' => esc_html__('Visibility', 'naslaan'),
																			    'desc'  => esc_html__('Check to hide on device.', 'naslaan'),
																			    'choices' => array(
																			        'notebook' => esc_html__('Notebook (1200px)', 'naslaan'),
																			        'tablet' => esc_html__('Tablet (992px)', 'naslaan'),
																			        'mobile' => esc_html__('Mobile (768px)', 'naslaan'),
																			    ),
																			    'inline' => false,
																			),
																		),
																	),
																	'show_borders' => false,
																),
															),
														),
														
														'text_msg_2_group' => array(
														    'type' => 'group',
														    'options' => array(
														    
																'text_msg_2_switch' => array(
																	'type' => 'multi-picker',
																	'label' => false,
																	'desc' => false,
																	'picker' => array(
																		'text_msg_visibility' => array(
																			'type'  => 'switch',
																		    'value' => 'disabled',
																		    'label' => esc_html__('Text Message 2', 'naslaan' ),
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
																		
																			'text_msg_text' => array(
																				'label' => esc_html__('Text', 'naslaan' ),
																				'type' => 'text',
																				'value' => '',
																				'desc' => '',
																			),
																			'text_msg_font' => array(
																			    'type' => 'typography-v2',
																			    'value' => array(
																			        'family' => 'Lato',
																			        'subset' => 'latin-ext',
																			        'variation' => 'regular',
																			        'size' => 16,
																			        'line-height' => 46,
																			        'letter-spacing' => 0.3,
																			    ),
																			    'components' => array(
																			        'family'         => true,
																			        'size'           => true,
																			        'line-height'    => true,
																			        'letter-spacing' => true,
																			        'color'          => false
																			    ),
																			    'label' => esc_html__('Text Font', 'naslaan' )
																			),
																			'text_msg_color' => array(
																			    'type'  => 'rgba-color-picker',
																			    'value' => 'rgba(255,255,255,0.6)',
																			    'label' => esc_html__('Text Color', 'naslaan' )
																			),
																			'text_msg_url' => array(
																				'label' => esc_html__('URL (Link)', 'naslaan' ),
																				'type' => 'text',
																				'value' => '',
																				'desc' => esc_html__( 'Add link to button.', 'naslaan' ),
																			),
																			'text_msg_color_hover' => array(
																			    'type'  => 'rgba-color-picker',
																			    'value' => 'rgba(255,255,255,1)',
																			    'label' => esc_html__('Link Hover Color', 'naslaan' )
																			),
																			'text_msg_margins' =>array(
																			    'type'  => 'html',
																			    'label' => esc_html__('Container Margins', 'naslaan' ),
																			    'html'  => '',
																			),
																			'text_msg_margin_top' => array(
																				'label' => '',
																				'type' => 'short-text',
																				'value' => '0',
																				'desc' => esc_html__( 'top', 'naslaan' ),
																			),
																			'text_msg_margin_right' => array(
																				'label' => '',
																				'type' => 'short-text',
																				'value' => '0',
																				'desc' => esc_html__( 'right', 'naslaan' ),
																			),
																			'text_msg_margin_bottom' => array(
																				'label' => '',
																				'type' => 'short-text',
																				'value' => '0',
																				'desc' => esc_html__( 'bottom', 'naslaan' ),
																			),
																			'text_msg_margin_left' => array(
																				'label' => '',
																				'type' => 'short-text',
																				'value' => '0',
																				'desc' => esc_html__( 'left', 'naslaan' ),
																			),
																			'text_msg_margin_clearfix' =>array(
																			    'type'  => 'html',
																			    'label' => '',
																			    'html'  => '<div class="wp-clearfix"></div>',
																			),
																			'text_msg_c_visibility' => array(
																			    'type'  => 'checkboxes',
																			    'value' => array(
																			        'notebook' => false,
																			        'tablet' => false,
																			        'mobile' => false,
																			    ),
																			    'label' => esc_html__('Visibility', 'naslaan'),
																			    'desc'  => esc_html__('Check to hide on device.', 'naslaan'),
																			    'choices' => array(
																			        'notebook' => esc_html__('Notebook (1200px)', 'naslaan'),
																			        'tablet' => esc_html__('Tablet (992px)', 'naslaan'),
																			        'mobile' => esc_html__('Mobile (768px)', 'naslaan'),
																			    ),
																			    'inline' => false,
																			),
																		),
																	),
																	'show_borders' => false,
																),
														
															),
														),
														
														'meta_top_menu_1_group' => array(
														    'type' => 'group',
														    'options' => array(
														    
																'meta_top_menu_1_title' => array(
																	'label' => esc_html__('Meta Menu 1', 'naslaan' ),
																	'type' => 'html',
																	'html'  => esc_html__('Styles for the "Top Meta Menu 1" menu.', 'naslaan' ),
																),
																'meta_top_menu_1_font' => array(
																    'type' => 'typography-v2',
																    'value' => array(
																	    'family' => 'Lato',
																        'subset' => 'latin-ext',
																        'variation' => 'regular',
																        'size' => 16,
																        'line-height' => 46,
																        'letter-spacing' => 0.3,
																    ),
																    'components' => array(
																        'family'         => true,
																        'size'           => true,
																        'line-height'    => true,
																        'letter-spacing' => true,
																        'color'          => false
																    ),
																    'label' => esc_html__('Menu Font', 'naslaan' )
																),
																'meta_top_menu_1_color' => array(
																    'type'  => 'rgba-color-picker',
																    'value' => 'rgba(255,255,255,0.6)',
																    'label' => esc_html__('Menu Text Color', 'naslaan' )
																),
																'meta_top_menu_1_color_hover' => array(
																    'type'  => 'rgba-color-picker',
																    'value' => 'rgba(255,255,255,1)',
																    'label' => esc_html__('Menu Hover Color', 'naslaan' )
																),
																'meta_top_menu_1_icon_color' => array(
																    'type'  => 'rgba-color-picker',
																    'value' => 'rgba(255,255,255,0.6)',
																    'label' => esc_html__('Icon Color', 'naslaan' )
																),
																'meta_top_menu_1_sep_line' => array(
																    'type'  => 'rgba-color-picker',
																    'value' => 'rgba(255,255,255,0)',
																    'label' => esc_html__('Separate Line Color', 'naslaan' )
																),
																'meta_top_menu_1_margins' =>array(
																    'type'  => 'html',
																    'label' => esc_html__('Container Margins', 'naslaan' ),
																    'html'  => '',
																),
																'meta_top_menu_1_margin_top' => array(
																	'label' => '',
																	'type' => 'short-text',
																	'value' => '0',
																	'desc' => esc_html__( 'top', 'naslaan' ),
																),
																'meta_top_menu_1_margin_right' => array(
																	'label' => '',
																	'type' => 'short-text',
																	'value' => '0',
																	'desc' => esc_html__( 'right', 'naslaan' ),
																),
																'meta_top_menu_1_margin_bottom' => array(
																	'label' => '',
																	'type' => 'short-text',
																	'value' => '0',
																	'desc' => esc_html__( 'bottom', 'naslaan' ),
																),
																'meta_top_menu_1_margin_left' => array(
																	'label' => '',
																	'type' => 'short-text',
																	'value' => '0',
																	'desc' => esc_html__( 'left', 'naslaan' ),
																),
																'meta_top_menu_1_margin_clearfix' =>array(
																    'type'  => 'html',
																    'label' => '',
																    'html'  => '<div class="wp-clearfix"></div>',
																),
																'meta_top_menu_1_visibility' => array(
																    'type'  => 'checkboxes',
																    'value' => array(
																        'notebook' => false,
																        'tablet' => false,
																        'mobile' => false,
																    ),
																    'label' => esc_html__('Visibility', 'naslaan'),
																    'desc'  => esc_html__('Check to hide on device.', 'naslaan'),
																    'choices' => array(
																        'notebook' => esc_html__('Notebook (1200px)', 'naslaan'),
																        'tablet' => esc_html__('Tablet (992px)', 'naslaan'),
																        'mobile' => esc_html__('Mobile (768px)', 'naslaan'),
																    ),
																    'inline' => false,
																),
															),
														),
														
														'meta_top_menu_2_group' => array(
														    'type' => 'group',
														    'options' => array(
														    
																'meta_top_menu_2_title' => array(
																	'label' => esc_html__('Meta Menu 2', 'naslaan' ),
																	'type' => 'html',
																	'html'  => esc_html__('Styles for the "Top Meta Menu 2" menu.', 'naslaan' ),
																),
																'meta_top_menu_2_font' => array(
																    'type' => 'typography-v2',
																    'value' => array(
																	    'family' => 'Lato',
																        'subset' => 'latin-ext',
																        'variation' => 'regular',
																        'size' => 16,
																        'line-height' => 46,
																        'letter-spacing' => 0.3,
																    ),
																    'components' => array(
																        'family'         => true,
																        'size'           => true,
																        'line-height'    => true,
																        'letter-spacing' => true,
																        'color'          => false
																    ),
																    'label' => esc_html__('Menu Font', 'naslaan' )
																),
																'meta_top_menu_2_color' => array(
																    'type'  => 'rgba-color-picker',
																    'value' => 'rgba(255,255,255,0.6)',
																    'label' => esc_html__('Menu Text Color', 'naslaan' )
																),
																'meta_top_menu_2_color_hover' => array(
																    'type'  => 'rgba-color-picker',
																    'value' => 'rgba(255,255,255,1)',
																    'label' => esc_html__('Menu Hover Color', 'naslaan' )
																),
																'meta_top_menu_2_icon_color' => array(
																    'type'  => 'rgba-color-picker',
																    'value' => 'rgba(255,255,255,0.6)',
																    'label' => esc_html__('Icon Color', 'naslaan' )
																),
																'meta_top_menu_2_sep_line' => array(
																    'type'  => 'rgba-color-picker',
																    'value' => 'rgba(255,255,255,0)',
																    'label' => esc_html__('Separate Line Color', 'naslaan' )
																),
																'meta_top_menu_2_margins' =>array(
																    'type'  => 'html',
																    'label' => esc_html__('Container Margins', 'naslaan' ),
																    'html'  => '',
																),
																'meta_top_menu_2_margin_top' => array(
																	'label' => '',
																	'type' => 'short-text',
																	'value' => '0',
																	'desc' => esc_html__( 'top', 'naslaan' ),
																),
																'meta_top_menu_2_margin_right' => array(
																	'label' => '',
																	'type' => 'short-text',
																	'value' => '0',
																	'desc' => esc_html__( 'right', 'naslaan' ),
																),
																'meta_top_menu_2_margin_bottom' => array(
																	'label' => '',
																	'type' => 'short-text',
																	'value' => '0',
																	'desc' => esc_html__( 'bottom', 'naslaan' ),
																),
																'meta_top_menu_2_margin_left' => array(
																	'label' => '',
																	'type' => 'short-text',
																	'value' => '0',
																	'desc' => esc_html__( 'left', 'naslaan' ),
																),
																'meta_top_menu_2_margin_clearfix' =>array(
																    'type'  => 'html',
																    'label' => '',
																    'html'  => '<div class="wp-clearfix"></div>',
																),
																'meta_top_menu_2_visibility' => array(
																    'type'  => 'checkboxes',
																    'value' => array(
																        'notebook' => false,
																        'tablet' => false,
																        'mobile' => false,
																    ),
																    'label' => esc_html__('Visibility', 'naslaan'),
																    'desc'  => esc_html__('Check to hide on device.', 'naslaan'),
																    'choices' => array(
																        'notebook' => esc_html__('Notebook (1200px)', 'naslaan'),
																        'tablet' => esc_html__('Tablet (992px)', 'naslaan'),
																        'mobile' => esc_html__('Mobile (768px)', 'naslaan'),
																    ),
																    'inline' => false,
																),														    
															),
														),
														
														'meta_top_order_left' => array(
														    'type' => 'group',
														    'options' => array(
														    
																'meta_top_order_left_title' => array(
																	'label' => esc_html__('Left Section', 'naslaan' ),
																	'type' => 'html',
																	'html'  => esc_html__('Elements order for the left section.', 'naslaan' ),
																),
																'meta_top_order_left_1' => array(
																    'type'  => 'select',
																    'value' => 'none',
																    'label' => esc_html__('Order 1', 'naslaan' ),
																    'choices' => array(
																        'none' => esc_html__('None', 'naslaan' ),
																        'social' => esc_html__('Social Media', 'naslaan' ),
																        'search' => esc_html__('Search', 'naslaan' ),
																        'message-1' => esc_html__('Text Message 1', 'naslaan' ),
																        'message-2' => esc_html__('Text Message 2', 'naslaan' ),
																        'menu-1' => esc_html__('Meta Menu 1', 'naslaan' ),
																        'menu-2' => esc_html__('Meta Menu 2', 'naslaan' ),
																    ),
																),
																'meta_top_order_left_2' => array(
																    'type'  => 'select',
																    'value' => 'none',
																    'label' => esc_html__('Order 2', 'naslaan' ),
																    'choices' => array(
																        'none' => esc_html__('None', 'naslaan' ),
																        'social' => esc_html__('Social Media', 'naslaan' ),
																        'search' => esc_html__('Search', 'naslaan' ),
																        'message-1' => esc_html__('Text Message 1', 'naslaan' ),
																        'message-2' => esc_html__('Text Message 2', 'naslaan' ),
																        'menu-1' => esc_html__('Meta Menu 1', 'naslaan' ),
																        'menu-2' => esc_html__('Meta Menu 2', 'naslaan' ),
																    ),
																),
																'meta_top_order_left_3' => array(
																    'type'  => 'select',
																    'value' => 'none',
																    'label' => esc_html__('Order 3', 'naslaan' ),
																    'choices' => array(
																        'none' => esc_html__('None', 'naslaan' ),
																        'social' => esc_html__('Social Media', 'naslaan' ),
																        'search' => esc_html__('Search', 'naslaan' ),
																        'message-1' => esc_html__('Text Message 1', 'naslaan' ),
																        'message-2' => esc_html__('Text Message 2', 'naslaan' ),
																        'menu-1' => esc_html__('Meta Menu 1', 'naslaan' ),
																        'menu-2' => esc_html__('Meta Menu 2', 'naslaan' ),
																    ),
																),
														    
															),
														),
														'meta_top_order_right' => array(
														    'type' => 'group',
														    'options' => array(
														    
																'meta_top_order_right_title' => array(
																	'label' => esc_html__('Right Section', 'naslaan' ),
																	'type' => 'html',
																	'html'  => esc_html__('Elements order for the right section.', 'naslaan' ),
																),
																'meta_top_order_right_1' => array(
																    'type'  => 'select',
																    'value' => 'none',
																    'label' => esc_html__('Order 1', 'naslaan' ),
																    'choices' => array(
																        'none' => esc_html__('None', 'naslaan' ),
																        'social' => esc_html__('Social Media', 'naslaan' ),
																        'search' => esc_html__('Search', 'naslaan' ),
																        'message-1' => esc_html__('Text Message 1', 'naslaan' ),
																        'message-2' => esc_html__('Text Message 2', 'naslaan' ),
																        'menu-1' => esc_html__('Meta Menu 1', 'naslaan' ),
																        'menu-2' => esc_html__('Meta Menu 2', 'naslaan' ),
																    ),
																),
																'meta_top_order_right_2' => array(
																    'type'  => 'select',
																    'value' => 'none',
																    'label' => esc_html__('Order 2', 'naslaan' ),
																    'choices' => array(
																        'none' => esc_html__('None', 'naslaan' ),
																        'social' => esc_html__('Social Media', 'naslaan' ),
																        'search' => esc_html__('Search', 'naslaan' ),
																        'message-1' => esc_html__('Text Message 1', 'naslaan' ),
																        'message-2' => esc_html__('Text Message 2', 'naslaan' ),
																        'menu-1' => esc_html__('Meta Menu 1', 'naslaan' ),
																        'menu-2' => esc_html__('Meta Menu 2', 'naslaan' ),
																    ),
																),
																'meta_top_order_right_3' => array(
																    'type'  => 'select',
																    'value' => 'none',
																    'label' => esc_html__('Order 3', 'naslaan' ),
																    'choices' => array(
																        'none' => esc_html__('None', 'naslaan' ),
																        'social' => esc_html__('Social Media', 'naslaan' ),
																        'search' => esc_html__('Search', 'naslaan' ),
																        'message-1' => esc_html__('Text Message 1', 'naslaan' ),
																        'message-2' => esc_html__('Text Message 2', 'naslaan' ),
																        'menu-1' => esc_html__('Meta Menu 1', 'naslaan' ),
																        'menu-2' => esc_html__('Meta Menu 2', 'naslaan' ),
																    ),
																),
														    
															),
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


					'mobile_navigation' => array(
						'title' => esc_html__( 'Mobile Navigation', 'naslaan' ),
						'type' => 'tab',
						'options' => array(
	
							'theme_options-box' => array(
								'title' => esc_html__( 'Mobile Navigation', 'naslaan' ),
								'type' => 'box',
								'options' => array(

									'mob_first_level_nav_font' => array(
									    'type' => 'typography-v2',
									    'value' => array(
									        'family' => 'Montserrat',
									        'subset' => 'latin',
									        'variation' => 'regular',
									        'size' => 14,
									        'letter-spacing' => 0.3,
									    ),
									    'components' => array(
									        'family'         => true,
									        'size'           => true,
									        'line-height'    => false,
									        'letter-spacing' => true,
									        'color'          => false
									    ),
									    'label' => esc_html__('First Level Navigation Font', 'naslaan' )
									),
									'mob_first_level_nav_color' => array(
									    'type'  => 'rgba-color-picker',
									    'value' => 'rgba(37,37,37,1)',
									    'label' => esc_html__('First Level Color', 'naslaan' )
									),
									'mob_first_level_nav_color_hover' => array(
									    'type'  => 'rgba-color-picker',
									    'value' => 'rgba(222,0,46,1)',
									    'label' => esc_html__('First Level Hover Color', 'naslaan' )
									),
									'mob_nav_font' => array(
									    'type' => 'typography-v2',
									    'value' => array(
									        'family' => 'Lato',
									        'subset' => 'latin-ext',
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
									    'label' => esc_html__('Navigation Font', 'naslaan' )
									),
									'mob_nav_color' => array(
									    'type'  => 'rgba-color-picker',
									    'value' => 'rgba(79,45,127,1)',
									    'label' => esc_html__('Navigation Color', 'naslaan' )
									),
									'mob_nav_color_hover' => array(
									    'type'  => 'rgba-color-picker',
									    'value' => 'rgba(222,0,46,1)',
									    'label' => esc_html__('Navigation Hover Color', 'naslaan' )
									),
									'mob_nav_title_font' => array(
									    'type' => 'typography-v2',
									    'value' => array(
									        'family' => 'Lato',
									        'subset' => 'latin-ext',
									        'variation' => 'regular',
									        'size' => 15,
									        'letter-spacing' => 0,
									    ),
									    'components' => array(
									        'family'         => true,
									        'size'           => true,
									        'line-height'    => false,
									        'letter-spacing' => true,
									        'color'          => false,
									    ),
									    'label' => esc_html__('Navigation Title Font', 'naslaan' )
									),
									'mob_nav_title_font_color' => array(
									    'type'  => 'rgba-color-picker',
									    'value' => 'rgba(37,37,37,1)',
									    'label' => esc_html__('Navigation Color', 'naslaan' )
									),
									
									'group_mob_nav_btn' => array(
									    'type' => 'group',
									    'options' => array(
									    
									
											'mob_nav_btn_margins' =>array(
											    'type'  => 'html',
											    'label' => esc_html__('Navigation Button Margins', 'naslaan' ),
											    'html'  => '',
											),
											'mob_nav_btn_margin_top' => array(
												'label' => '',
												'type' => 'short-text',
												'value' => '35',
												'desc' => esc_html__( 'top', 'naslaan' ),
											),
											'mob_nav_btn_margin_right' => array(
												'label' => '',
												'type' => 'short-text',
												'value' => '0',
												'desc' => esc_html__( 'right', 'naslaan' ),
											),
											'mob_nav_btn_margin_bottom' => array(
												'label' => '',
												'type' => 'short-text',
												'value' => '0',
												'desc' => esc_html__( 'bottom', 'naslaan' ),
											),
											'mob_nav_btn_margin_left' => array(
												'label' => '',
												'type' => 'short-text',
												'value' => '20',
												'desc' => esc_html__( 'left', 'naslaan' ),
											),
											'mob_nav_btn_margin_clearfix' =>array(
											    'type'  => 'html',
											    'label' => '',
											    'html'  => '<div class="wp-clearfix"></div>',
											),
											
											'mob_nav_btn_color' => array(
											    'type'  => 'rgba-color-picker',
											    'value' => 'rgba(255,255,255,0)',
											    'label' => esc_html__('Navigation Button Color', 'naslaan' )
											),
											'mob_nav_btn_color_hover' => array(
											    'type'  => 'rgba-color-picker',
											    'value' => 'rgba(222,0,46,1)',
											    'label' => esc_html__('Navigation Button Hover Color', 'naslaan' )
											),
										
										),
									
									),								
								
								)
							),
	
						),
					),

					
					
					'header_social_media' => array(
						'title' => esc_html__( 'Header Social Media', 'naslaan' ),
						'type' => 'tab',
						'options' => array(
						
							'theme_options-box' => array(
								'title' => esc_html__( 'Header Social Media', 'naslaan' ),
								'type' => 'box',
								'options' => array(
								
									'group_header_social_media' => array(
									    'type' => 'group',
									    'options' => array(
								
										'header_social_media_type' => array(
										    'type'  => 'radio',
										    'value' => 'variant_1',
										    'label' => esc_html__('Button Types', 'naslaan' ),
										    'choices' => array(
										        'variant_1' => esc_html__('Variant 1', 'naslaan' ),
										        'variant_2' => esc_html__('Variant 2', 'naslaan' ),
										        'variant_3' => esc_html__('Variant 3', 'naslaan' ),
										        'variant_4' => esc_html__('Variant 4', 'naslaan' ),
										        'variant_5' => esc_html__('Variant 5', 'naslaan' ),
										        'variant_6' => esc_html__('Variant 6', 'naslaan' ),
										        'variant_7' => esc_html__('Variant 7', 'naslaan' ),
										    ),
										    'inline' => false,
										),
									
									
										
										'header_social_media_forrst' => array(
											'type' => 'multi-picker',
											'label' => false,
											'desc' => false,
											'picker' => array(
												'forrst_switch' => array(
													'type'  => 'switch',
												    'value' => 'disabled',
												    'label' => esc_html__('Forrst', 'naslaan' ),
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
			
													'forrst_url' => array(
														'label' => esc_html__('URL (Link)', 'naslaan' ),
														'type' => 'text',
														'value' => '',
														'desc' => esc_html__( 'Add link to button.', 'naslaan' ),
													),
		
												),
											),
											'show_borders' => false,
										),
										
										'header_social_media_dribbble' => array(
											'type' => 'multi-picker',
											'label' => false,
											'desc' => false,
											'picker' => array(
												'dribbble_switch' => array(
													'type'  => 'switch',
												    'value' => 'disabled',
												    'label' => esc_html__('Dribbble', 'naslaan' ),
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
			
													'dribbble_url' => array(
														'label' => esc_html__('URL (Link)', 'naslaan' ),
														'type' => 'text',
														'value' => '',
														'desc' => esc_html__( 'Add link to button.', 'naslaan' ),
													),
		
												),
											),
											'show_borders' => false,
										),
										
										'header_social_media_twitter' => array(
											'type' => 'multi-picker',
											'label' => false,
											'desc' => false,
											'picker' => array(
												'twitter_switch' => array(
													'type'  => 'switch',
												    'value' => 'disabled',
												    'label' => esc_html__('Twitter', 'naslaan' ),
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
			
													'twitter_url' => array(
														'label' => esc_html__('URL (Link)', 'naslaan' ),
														'type' => 'text',
														'value' => '',
														'desc' => esc_html__( 'Add link to button.', 'naslaan' ),
													),
		
												),
											),
											'show_borders' => false,
										),
							
										'header_social_media_flickr' => array(
											'type' => 'multi-picker',
											'label' => false,
											'desc' => false,
											'picker' => array(
												'flickr_switch' => array(
													'type'  => 'switch',
												    'value' => 'disabled',
												    'label' => esc_html__('Flickr', 'naslaan' ),
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
			
													'flickr_url' => array(
														'label' => esc_html__('URL (Link)', 'naslaan' ),
														'type' => 'text',
														'value' => '',
														'desc' => esc_html__( 'Add link to button.', 'naslaan' ),
													),
		
												),
											),
											'show_borders' => false,
										),
										
										'header_social_media_twitter2' => array(
											'type' => 'multi-picker',
											'label' => false,
											'desc' => false,
											'picker' => array(
												'twitter2_switch' => array(
													'type'  => 'switch',
												    'value' => 'disabled',
												    'label' => esc_html__('Twitter Alt', 'naslaan' ),
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
			
													'twitter2_url' => array(
														'label' => esc_html__('URL (Link)', 'naslaan' ),
														'type' => 'text',
														'value' => '',
														'desc' => esc_html__( 'Add link to button.', 'naslaan' ),
													),
		
												),
											),
											'show_borders' => false,
										),
										
										'header_social_media_facebook' => array(
											'type' => 'multi-picker',
											'label' => false,
											'desc' => false,
											'picker' => array(
												'facebook_switch' => array(
													'type'  => 'switch',
												    'value' => 'disabled',
												    'label' => esc_html__('Facebook', 'naslaan' ),
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
			
													'facebook_url' => array(
														'label' => esc_html__('URL (Link)', 'naslaan' ),
														'type' => 'text',
														'value' => '',
														'desc' => esc_html__( 'Add link to button.', 'naslaan' ),
													),
		
												),
											),
											'show_borders' => false,
										),
										
										'header_social_media_skype' => array(
											'type' => 'multi-picker',
											'label' => false,
											'desc' => false,
											'picker' => array(
												'skype_switch' => array(
													'type'  => 'switch',
												    'value' => 'disabled',
												    'label' => esc_html__('Skype', 'naslaan' ),
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
			
													'skype_url' => array(
														'label' => esc_html__('URL (Link)', 'naslaan' ),
														'type' => 'text',
														'value' => '',
														'desc' => esc_html__( 'Add link to button.', 'naslaan' ),
													),
		
												),
											),
											'show_borders' => false,
										),
							
										'header_social_media_digg' => array(
											'type' => 'multi-picker',
											'label' => false,
											'desc' => false,
											'picker' => array(
												'digg_switch' => array(
													'type'  => 'switch',
												    'value' => 'disabled',
												    'label' => esc_html__('Digg', 'naslaan' ),
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
			
													'digg_url' => array(
														'label' => esc_html__('URL (Link)', 'naslaan' ),
														'type' => 'text',
														'value' => '',
														'desc' => esc_html__( 'Add link to button.', 'naslaan' ),
													),
		
												),
											),
											'show_borders' => false,
										),
										
										'header_social_media_google' => array(
											'type' => 'multi-picker',
											'label' => false,
											'desc' => false,
											'picker' => array(
												'google_switch' => array(
													'type'  => 'switch',
												    'value' => 'disabled',
												    'label' => esc_html__('Google', 'naslaan' ),
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
			
													'google_url' => array(
														'label' => esc_html__('URL (Link)', 'naslaan' ),
														'type' => 'text',
														'value' => '',
														'desc' => esc_html__( 'Add link to button.', 'naslaan' ),
													),
		
												),
											),
											'show_borders' => false,
										),
										
										'header_social_media_html5' => array(
											'type' => 'multi-picker',
											'label' => false,
											'desc' => false,
											'picker' => array(
												'html5_switch' => array(
													'type'  => 'switch',
												    'value' => 'disabled',
												    'label' => esc_html__('Html5', 'naslaan' ),
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
			
													'html5_url' => array(
														'label' => esc_html__('URL (Link)', 'naslaan' ),
														'type' => 'text',
														'value' => '',
														'desc' => esc_html__( 'Add link to button.', 'naslaan' ),
													),
		
												),
											),
											'show_borders' => false,
										),
										
										'header_social_media_linkedin' => array(
											'type' => 'multi-picker',
											'label' => false,
											'desc' => false,
											'picker' => array(
												'linkedin_switch' => array(
													'type'  => 'switch',
												    'value' => 'disabled',
												    'label' => esc_html__('Linkedin', 'naslaan' ),
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
			
													'linkedin_url' => array(
														'label' => esc_html__('URL (Link)', 'naslaan' ),
														'type' => 'text',
														'value' => '',
														'desc' => esc_html__( 'Add link to button.', 'naslaan' ),
													),
		
												),
											),
											'show_borders' => false,
										),
							
										'header_social_media_lastfm' => array(
											'type' => 'multi-picker',
											'label' => false,
											'desc' => false,
											'picker' => array(
												'lastfm_switch' => array(
													'type'  => 'switch',
												    'value' => 'disabled',
												    'label' => esc_html__('Lastfm', 'naslaan' ),
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
			
													'lastfm_url' => array(
														'label' => esc_html__('URL (Link)', 'naslaan' ),
														'type' => 'text',
														'value' => '',
														'desc' => esc_html__( 'Add link to button.', 'naslaan' ),
													),
		
												),
											),
											'show_borders' => false,
										),
										
										'header_social_media_vimeo' => array(
											'type' => 'multi-picker',
											'label' => false,
											'desc' => false,
											'picker' => array(
												'vimeo_switch' => array(
													'type'  => 'switch',
												    'value' => 'disabled',
												    'label' => esc_html__('Vimeo', 'naslaan' ),
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
			
													'vimeo_url' => array(
														'label' => esc_html__('URL (Link)', 'naslaan' ),
														'type' => 'text',
														'value' => '',
														'desc' => esc_html__( 'Add link to button.', 'naslaan' ),
													),
		
												),
											),
											'show_borders' => false,
										),
										
										'header_social_media_yahoo' => array(
											'type' => 'multi-picker',
											'label' => false,
											'desc' => false,
											'picker' => array(
												'yahoo_switch' => array(
													'type'  => 'switch',
												    'value' => 'disabled',
												    'label' => esc_html__('Yahoo', 'naslaan' ),
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
			
													'yahoo_url' => array(
														'label' => esc_html__('URL (Link)', 'naslaan' ),
														'type' => 'text',
														'value' => '',
														'desc' => esc_html__( 'Add link to button.', 'naslaan' ),
													),
		
												),
											),
											'show_borders' => false,
										),
										
										'header_social_media_tumblr' => array(
											'type' => 'multi-picker',
											'label' => false,
											'desc' => false,
											'picker' => array(
												'tumblr_switch' => array(
													'type'  => 'switch',
												    'value' => 'disabled',
												    'label' => esc_html__('Tumblr', 'naslaan' ),
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
			
													'tumblr_url' => array(
														'label' => esc_html__('URL (Link)', 'naslaan' ),
														'type' => 'text',
														'value' => '',
														'desc' => esc_html__( 'Add link to button.', 'naslaan' ),
													),
		
												),
											),
											'show_borders' => false,
										),
							
										'header_social_media_apple' => array(
											'type' => 'multi-picker',
											'label' => false,
											'desc' => false,
											'picker' => array(
												'apple_switch' => array(
													'type'  => 'switch',
												    'value' => 'disabled',
												    'label' => esc_html__('Apple', 'naslaan' ),
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
			
													'apple_url' => array(
														'label' => esc_html__('URL (Link)', 'naslaan' ),
														'type' => 'text',
														'value' => '',
														'desc' => esc_html__( 'Add link to button.', 'naslaan' ),
													),
		
												),
											),
											'show_borders' => false,
										),
										
										'header_social_media_windows' => array(
											'type' => 'multi-picker',
											'label' => false,
											'desc' => false,
											'picker' => array(
												'windows_switch' => array(
													'type'  => 'switch',
												    'value' => 'disabled',
												    'label' => esc_html__('Windows', 'naslaan' ),
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
			
													'windows_url' => array(
														'label' => esc_html__('URL (Link)', 'naslaan' ),
														'type' => 'text',
														'value' => '',
														'desc' => esc_html__( 'Add link to button.', 'naslaan' ),
													),
		
												),
											),
											'show_borders' => false,
										),
										
										'header_social_media_youtube' => array(
											'type' => 'multi-picker',
											'label' => false,
											'desc' => false,
											'picker' => array(
												'youtube_switch' => array(
													'type'  => 'switch',
												    'value' => 'disabled',
												    'label' => esc_html__('Youtube', 'naslaan' ),
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
			
													'youtube_url' => array(
														'label' => esc_html__('URL (Link)', 'naslaan' ),
														'type' => 'text',
														'value' => '',
														'desc' => esc_html__( 'Add link to button.', 'naslaan' ),
													),
		
												),
											),
											'show_borders' => false,
										),
										
										'header_social_media_delicious' => array(
											'type' => 'multi-picker',
											'label' => false,
											'desc' => false,
											'picker' => array(
												'delicious_switch' => array(
													'type'  => 'switch',
												    'value' => 'disabled',
												    'label' => esc_html__('Delicious', 'naslaan' ),
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
			
													'delicious_url' => array(
														'label' => esc_html__('URL (Link)', 'naslaan' ),
														'type' => 'text',
														'value' => '',
														'desc' => esc_html__( 'Add link to button.', 'naslaan' ),
													),
		
												),
											),
											'show_borders' => false,
										),
							
										'header_social_media_rss' => array(
											'type' => 'multi-picker',
											'label' => false,
											'desc' => false,
											'picker' => array(
												'rss_switch' => array(
													'type'  => 'switch',
												    'value' => 'disabled',
												    'label' => esc_html__('Rss', 'naslaan' ),
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
			
													'rss_url' => array(
														'label' => esc_html__('URL (Link)', 'naslaan' ),
														'type' => 'text',
														'value' => '',
														'desc' => esc_html__( 'Add link to button.', 'naslaan' ),
													),
		
												),
											),
											'show_borders' => false,
										),
										
										'header_social_media_picasa' => array(
											'type' => 'multi-picker',
											'label' => false,
											'desc' => false,
											'picker' => array(
												'picasa_switch' => array(
													'type'  => 'switch',
												    'value' => 'disabled',
												    'label' => esc_html__('Picasa', 'naslaan' ),
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
			
													'picasa_url' => array(
														'label' => esc_html__('URL (Link)', 'naslaan' ),
														'type' => 'text',
														'value' => '',
														'desc' => esc_html__( 'Add link to button.', 'naslaan' ),
													),
		
												),
											),
											'show_borders' => false,
										),
										
										'header_social_media_deviantart' => array(
											'type' => 'multi-picker',
											'label' => false,
											'desc' => false,
											'picker' => array(
												'deviantart_switch' => array(
													'type'  => 'switch',
												    'value' => 'disabled',
												    'label' => esc_html__('Deviantart', 'naslaan' ),
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
			
													'deviantart_url' => array(
														'label' => esc_html__('URL (Link)', 'naslaan' ),
														'type' => 'text',
														'value' => '',
														'desc' => esc_html__( 'Add link to button.', 'naslaan' ),
													),
		
												),
											),
											'show_borders' => false,
										),
										
										'header_social_media_whatsapp' => array(
											'type' => 'multi-picker',
											'label' => false,
											'desc' => false,
											'picker' => array(
												'whatsapp_switch' => array(
													'type'  => 'switch',
												    'value' => 'disabled',
												    'label' => esc_html__('Whatsapp', 'naslaan' ),
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
			
													'whatsapp_url' => array(
														'label' => esc_html__('URL (Link)', 'naslaan' ),
														'type' => 'text',
														'value' => '',
														'desc' => esc_html__( 'Add link to button.', 'naslaan' ),
													),
		
												),
											),
											'show_borders' => false,
										),
							
										'header_social_media_snapchat' => array(
											'type' => 'multi-picker',
											'label' => false,
											'desc' => false,
											'picker' => array(
												'snapchat_switch' => array(
													'type'  => 'switch',
												    'value' => 'disabled',
												    'label' => esc_html__('Snapchat', 'naslaan' ),
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
			
													'snapchat_url' => array(
														'label' => esc_html__('URL (Link)', 'naslaan' ),
														'type' => 'text',
														'value' => '',
														'desc' => esc_html__( 'Add link to button.', 'naslaan' ),
													),
		
												),
											),
											'show_borders' => false,
										),
										
										'header_social_media_blogger' => array(
											'type' => 'multi-picker',
											'label' => false,
											'desc' => false,
											'picker' => array(
												'blogger_switch' => array(
													'type'  => 'switch',
												    'value' => 'disabled',
												    'label' => esc_html__('Blogger', 'naslaan' ),
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
			
													'blogger_url' => array(
														'label' => esc_html__('URL (Link)', 'naslaan' ),
														'type' => 'text',
														'value' => '',
														'desc' => esc_html__( 'Add link to button.', 'naslaan' ),
													),
		
												),
											),
											'show_borders' => false,
										),
										
										'header_social_media_wordpress' => array(
											'type' => 'multi-picker',
											'label' => false,
											'desc' => false,
											'picker' => array(
												'wordpress_switch' => array(
													'type'  => 'switch',
												    'value' => 'disabled',
												    'label' => esc_html__('WordPress', 'naslaan' ),
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
			
													'wordpress_url' => array(
														'label' => esc_html__('URL (Link)', 'naslaan' ),
														'type' => 'text',
														'value' => '',
														'desc' => esc_html__( 'Add link to button.', 'naslaan' ),
													),
		
												),
											),
											'show_borders' => false,
										),
										
										'header_social_media_amazon' => array(
											'type' => 'multi-picker',
											'label' => false,
											'desc' => false,
											'picker' => array(
												'amazon_switch' => array(
													'type'  => 'switch',
												    'value' => 'disabled',
												    'label' => esc_html__('Amazon', 'naslaan' ),
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
			
													'amazon_url' => array(
														'label' => esc_html__('URL (Link)', 'naslaan' ),
														'type' => 'text',
														'value' => '',
														'desc' => esc_html__( 'Add link to button.', 'naslaan' ),
													),
		
												),
											),
											'show_borders' => false,
										),
							
										'header_social_media_appstore' => array(
											'type' => 'multi-picker',
											'label' => false,
											'desc' => false,
											'picker' => array(
												'appstore_switch' => array(
													'type'  => 'switch',
												    'value' => 'disabled',
												    'label' => esc_html__('Appstore', 'naslaan' ),
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
			
													'appstore_url' => array(
														'label' => esc_html__('URL (Link)', 'naslaan' ),
														'type' => 'text',
														'value' => '',
														'desc' => esc_html__( 'Add link to button.', 'naslaan' ),
													),
		
												),
											),
											'show_borders' => false,
										),
										
										'header_social_media_paypal' => array(
											'type' => 'multi-picker',
											'label' => false,
											'desc' => false,
											'picker' => array(
												'paypal_switch' => array(
													'type'  => 'switch',
												    'value' => 'disabled',
												    'label' => esc_html__('Paypal', 'naslaan' ),
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
			
													'paypal_url' => array(
														'label' => esc_html__('URL (Link)', 'naslaan' ),
														'type' => 'text',
														'value' => '',
														'desc' => esc_html__( 'Add link to button.', 'naslaan' ),
													),
		
												),
											),
											'show_borders' => false,
										),
										
										'header_social_media_myspace' => array(
											'type' => 'multi-picker',
											'label' => false,
											'desc' => false,
											'picker' => array(
												'myspace_switch' => array(
													'type'  => 'switch',
												    'value' => 'disabled',
												    'label' => esc_html__('Myspace', 'naslaan' ),
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
			
													'myspace_url' => array(
														'label' => esc_html__('URL (Link)', 'naslaan' ),
														'type' => 'text',
														'value' => '',
														'desc' => esc_html__( 'Add link to button.', 'naslaan' ),
													),
		
												),
											),
											'show_borders' => false,
										),
										
										'header_social_media_dropbox' => array(
											'type' => 'multi-picker',
											'label' => false,
											'desc' => false,
											'picker' => array(
												'dropbox_switch' => array(
													'type'  => 'switch',
												    'value' => 'disabled',
												    'label' => esc_html__('Dropbox', 'naslaan' ),
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
			
													'dropbox_url' => array(
														'label' => esc_html__('URL (Link)', 'naslaan' ),
														'type' => 'text',
														'value' => '',
														'desc' => esc_html__( 'Add link to button.', 'naslaan' ),
													),
		
												),
											),
											'show_borders' => false,
										),
							
										'header_social_media_windows8' => array(
											'type' => 'multi-picker',
											'label' => false,
											'desc' => false,
											'picker' => array(
												'windows8_switch' => array(
													'type'  => 'switch',
												    'value' => 'disabled',
												    'label' => esc_html__('Windows8', 'naslaan' ),
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
			
													'windows8_url' => array(
														'label' => esc_html__('URL (Link)', 'naslaan' ),
														'type' => 'text',
														'value' => '',
														'desc' => esc_html__( 'Add link to button.', 'naslaan' ),
													),
		
												),
											),
											'show_borders' => false,
										),
										
										'header_social_media_pinterest' => array(
											'type' => 'multi-picker',
											'label' => false,
											'desc' => false,
											'picker' => array(
												'pinterest_switch' => array(
													'type'  => 'switch',
												    'value' => 'disabled',
												    'label' => esc_html__('Pinterest', 'naslaan' ),
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
			
													'pinterest_url' => array(
														'label' => esc_html__('URL (Link)', 'naslaan' ),
														'type' => 'text',
														'value' => '',
														'desc' => esc_html__( 'Add link to button.', 'naslaan' ),
													),
		
												),
											),
											'show_borders' => false,
										),
										
										'header_social_media_soundcloud' => array(
											'type' => 'multi-picker',
											'label' => false,
											'desc' => false,
											'picker' => array(
												'soundcloud_switch' => array(
													'type'  => 'switch',
												    'value' => 'disabled',
												    'label' => esc_html__('Soundcloud', 'naslaan' ),
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
			
													'soundcloud_url' => array(
														'label' => esc_html__('URL (Link)', 'naslaan' ),
														'type' => 'text',
														'value' => '',
														'desc' => esc_html__( 'Add link to button.', 'naslaan' ),
													),
		
												),
											),
											'show_borders' => false,
										),
										
										'header_social_media_google_drive' => array(
											'type' => 'multi-picker',
											'label' => false,
											'desc' => false,
											'picker' => array(
												'google_drive_switch' => array(
													'type'  => 'switch',
												    'value' => 'disabled',
												    'label' => esc_html__('Google Drive', 'naslaan' ),
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
			
													'google_drive_url' => array(
														'label' => esc_html__('URL (Link)', 'naslaan' ),
														'type' => 'text',
														'value' => '',
														'desc' => esc_html__( 'Add link to button.', 'naslaan' ),
													),
		
												),
											),
											'show_borders' => false,
										),
							
										'header_social_media_android' => array(
											'type' => 'multi-picker',
											'label' => false,
											'desc' => false,
											'picker' => array(
												'android_switch' => array(
													'type'  => 'switch',
												    'value' => 'disabled',
												    'label' => esc_html__('Android', 'naslaan' ),
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
			
													'android_url' => array(
														'label' => esc_html__('URL (Link)', 'naslaan' ),
														'type' => 'text',
														'value' => '',
														'desc' => esc_html__( 'Add link to button.', 'naslaan' ),
													),
		
												),
											),
											'show_borders' => false,
										),
										
										'header_social_media_behance' => array(
											'type' => 'multi-picker',
											'label' => false,
											'desc' => false,
											'picker' => array(
												'behance_switch' => array(
													'type'  => 'switch',
												    'value' => 'disabled',
												    'label' => esc_html__('Behance', 'naslaan' ),
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
			
													'behance_url' => array(
														'label' => esc_html__('URL (Link)', 'naslaan' ),
														'type' => 'text',
														'value' => '',
														'desc' => esc_html__( 'Add link to button.', 'naslaan' ),
													),
		
												),
											),
											'show_borders' => false,
										),
										
										'header_social_media_instagram' => array(
											'type' => 'multi-picker',
											'label' => false,
											'desc' => false,
											'picker' => array(
												'instagram_switch' => array(
													'type'  => 'switch',
												    'value' => 'disabled',
												    'label' => esc_html__('Instagram', 'naslaan' ),
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
			
													'instagram_url' => array(
														'label' => esc_html__('URL (Link)', 'naslaan' ),
														'type' => 'text',
														'value' => '',
														'desc' => esc_html__( 'Add link to button.', 'naslaan' ),
													),
		
												),
											),
											'show_borders' => false,
										),
										
										'header_social_media_ebay' => array(
											'type' => 'multi-picker',
											'label' => false,
											'desc' => false,
											'picker' => array(
												'ebay_switch' => array(
													'type'  => 'switch',
												    'value' => 'disabled',
												    'label' => esc_html__('Ebay', 'naslaan' ),
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
			
													'ebay_url' => array(
														'label' => esc_html__('URL (Link)', 'naslaan' ),
														'type' => 'text',
														'value' => '',
														'desc' => esc_html__( 'Add link to button.', 'naslaan' ),
													),
		
												),
											),
											'show_borders' => false,
										),
							
										'header_social_media_google_plus' => array(
											'type' => 'multi-picker',
											'label' => false,
											'desc' => false,
											'picker' => array(
												'google_plus_switch' => array(
													'type'  => 'switch',
												    'value' => 'disabled',
												    'label' => esc_html__('Google Plus', 'naslaan' ),
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
			
													'google_plus_url' => array(
														'label' => esc_html__('URL (Link)', 'naslaan' ),
														'type' => 'text',
														'value' => '',
														'desc' => esc_html__( 'Add link to button.', 'naslaan' ),
													),
		
												),
											),
											'show_borders' => false,
										),
										
										'header_social_media_github' => array(
											'type' => 'multi-picker',
											'label' => false,
											'desc' => false,
											'picker' => array(
												'github_switch' => array(
													'type'  => 'switch',
												    'value' => 'disabled',
												    'label' => esc_html__('Github', 'naslaan' ),
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
			
													'github_url' => array(
														'label' => esc_html__('URL (Link)', 'naslaan' ),
														'type' => 'text',
														'value' => '',
														'desc' => esc_html__( 'Add link to button.', 'naslaan' ),
													),
		
												),
											),
											'show_borders' => false,
										),
										
										'header_social_media_stackoverflow' => array(
											'type' => 'multi-picker',
											'label' => false,
											'desc' => false,
											'picker' => array(
												'stackoverflow_switch' => array(
													'type'  => 'switch',
												    'value' => 'disabled',
												    'label' => esc_html__('Stackoverflow', 'naslaan' ),
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
			
													'stackoverflow_url' => array(
														'label' => esc_html__('URL (Link)', 'naslaan' ),
														'type' => 'text',
														'value' => '',
														'desc' => esc_html__( 'Add link to button.', 'naslaan' ),
													),
		
												),
											),
											'show_borders' => false,
										),
										
										'header_social_media_spotify' => array(
											'type' => 'multi-picker',
											'label' => false,
											'desc' => false,
											'picker' => array(
												'spotify_switch' => array(
													'type'  => 'switch',
												    'value' => 'disabled',
												    'label' => esc_html__('Spotify', 'naslaan' ),
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
			
													'spotify_url' => array(
														'label' => esc_html__('URL (Link)', 'naslaan' ),
														'type' => 'text',
														'value' => '',
														'desc' => esc_html__( 'Add link to button.', 'naslaan' ),
													),
		
												),
											),
											'show_borders' => false,
										),
							
										'header_social_media_stumbleupon' => array(
											'type' => 'multi-picker',
											'label' => false,
											'desc' => false,
											'picker' => array(
												'stumbleupon_switch' => array(
													'type'  => 'switch',
												    'value' => 'disabled',
												    'label' => esc_html__('Stumbleupon', 'naslaan' ),
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
			
													'stumbleupon_url' => array(
														'label' => esc_html__('URL (Link)', 'naslaan' ),
														'type' => 'text',
														'value' => '',
														'desc' => esc_html__( 'Add link to button.', 'naslaan' ),
													),
		
												),
											),
											'show_borders' => false,
										),
										
										'header_social_media_visa' => array(
											'type' => 'multi-picker',
											'label' => false,
											'desc' => false,
											'picker' => array(
												'visa_switch' => array(
													'type'  => 'switch',
												    'value' => 'disabled',
												    'label' => esc_html__('Visa', 'naslaan' ),
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
			
													'visa_url' => array(
														'label' => esc_html__('URL (Link)', 'naslaan' ),
														'type' => 'text',
														'value' => '',
														'desc' => esc_html__( 'Add link to button.', 'naslaan' ),
													),
		
												),
											),
											'show_borders' => false,
										),
										
										'header_social_media_mastercard' => array(
											'type' => 'multi-picker',
											'label' => false,
											'desc' => false,
											'picker' => array(
												'mastercard_switch' => array(
													'type'  => 'switch',
												    'value' => 'disabled',
												    'label' => esc_html__('Mastercard', 'naslaan' ),
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
			
													'mastercard_url' => array(
														'label' => esc_html__('URL (Link)', 'naslaan' ),
														'type' => 'text',
														'value' => '',
														'desc' => esc_html__( 'Add link to button.', 'naslaan' ),
													),
		
												),
											),
											'show_borders' => false,
										),
										
										'header_social_media_amex' => array(
											'type' => 'multi-picker',
											'label' => false,
											'desc' => false,
											'picker' => array(
												'amex_switch' => array(
													'type'  => 'switch',
												    'value' => 'disabled',
												    'label' => esc_html__('Amex', 'naslaan' ),
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
			
													'amex_url' => array(
														'label' => esc_html__('URL (Link)', 'naslaan' ),
														'type' => 'text',
														'value' => '',
														'desc' => esc_html__( 'Add link to button.', 'naslaan' ),
													),
		
												),
											),
											'show_borders' => false,
										),
							
										'header_social_media_ios' => array(
											'type' => 'multi-picker',
											'label' => false,
											'desc' => false,
											'picker' => array(
												'ios_switch' => array(
													'type'  => 'switch',
												    'value' => 'disabled',
												    'label' => esc_html__('Ios', 'naslaan' ),
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
			
													'ios_url' => array(
														'label' => esc_html__('URL (Link)', 'naslaan' ),
														'type' => 'text',
														'value' => '',
														'desc' => esc_html__( 'Add link to button.', 'naslaan' ),
													),
		
												),
											),
											'show_borders' => false,
										),
										
										'header_social_media_osx' => array(
											'type' => 'multi-picker',
											'label' => false,
											'desc' => false,
											'picker' => array(
												'osx_switch' => array(
													'type'  => 'switch',
												    'value' => 'disabled',
												    'label' => esc_html__('Osx', 'naslaan' ),
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
			
													'osx_url' => array(
														'label' => esc_html__('URL (Link)', 'naslaan' ),
														'type' => 'text',
														'value' => '',
														'desc' => esc_html__( 'Add link to button.', 'naslaan' ),
													),
		
												),
											),
											'show_borders' => false,
										),
										
										'header_social_media_evernote' => array(
											'type' => 'multi-picker',
											'label' => false,
											'desc' => false,
											'picker' => array(
												'evernote_switch' => array(
													'type'  => 'switch',
												    'value' => 'disabled',
												    'label' => esc_html__('Evernote', 'naslaan' ),
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
			
													'evernote_url' => array(
														'label' => esc_html__('URL (Link)', 'naslaan' ),
														'type' => 'text',
														'value' => '',
														'desc' => esc_html__( 'Add link to button.', 'naslaan' ),
													),
		
												),
											),
											'show_borders' => false,
										),
										
										'header_social_media_yelp' => array(
											'type' => 'multi-picker',
											'label' => false,
											'desc' => false,
											'picker' => array(
												'yelp_switch' => array(
													'type'  => 'switch',
												    'value' => 'disabled',
												    'label' => esc_html__('Yelp', 'naslaan' ),
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
			
													'yelp_url' => array(
														'label' => esc_html__('URL (Link)', 'naslaan' ),
														'type' => 'text',
														'value' => '',
														'desc' => esc_html__( 'Add link to button.', 'naslaan' ),
													),
		
												),
											),
											'show_borders' => false,
										),
							
										'header_social_media_yelp2' => array(
											'type' => 'multi-picker',
											'label' => false,
											'desc' => false,
											'picker' => array(
												'yelp2_switch' => array(
													'type'  => 'switch',
												    'value' => 'disabled',
												    'label' => esc_html__('Yelp', 'naslaan' ),
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
			
													'yelp2_url' => array(
														'label' => esc_html__('URL (Link)', 'naslaan' ),
														'type' => 'text',
														'value' => '',
														'desc' => esc_html__( 'Add link to button.', 'naslaan' ),
													),
		
												),
											),
											'show_borders' => false,
										),
										
										'header_social_media_medium' => array(
											'type' => 'multi-picker',
											'label' => false,
											'desc' => false,
											'picker' => array(
												'medium_switch' => array(
													'type'  => 'switch',
												    'value' => 'disabled',
												    'label' => esc_html__('Medium', 'naslaan' ),
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
			
													'medium_url' => array(
														'label' => esc_html__('URL (Link)', 'naslaan' ),
														'type' => 'text',
														'value' => '',
														'desc' => esc_html__( 'Add link to button.', 'naslaan' ),
													),
		
												),
											),
											'show_borders' => false,
										),
										
										'header_social_media_slack' => array(
											'type' => 'multi-picker',
											'label' => false,
											'desc' => false,
											'picker' => array(
												'slack_switch' => array(
													'type'  => 'switch',
												    'value' => 'disabled',
												    'label' => esc_html__('Slack', 'naslaan' ),
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
			
													'slack_url' => array(
														'label' => esc_html__('URL (Link)', 'naslaan' ),
														'type' => 'text',
														'value' => '',
														'desc' => esc_html__( 'Add link to button.', 'naslaan' ),
													),
		
												),
											),
											'show_borders' => false,
										),
										
										'header_social_media_vine' => array(
											'type' => 'multi-picker',
											'label' => false,
											'desc' => false,
											'picker' => array(
												'vine_switch' => array(
													'type'  => 'switch',
												    'value' => 'disabled',
												    'label' => esc_html__('Vine', 'naslaan' ),
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
			
													'vine_url' => array(
														'label' => esc_html__('URL (Link)', 'naslaan' ),
														'type' => 'text',
														'value' => '',
														'desc' => esc_html__( 'Add link to button.', 'naslaan' ),
													),
		
												),
											),
											'show_borders' => false,
										),
							
										'header_social_media_edge' => array(
											'type' => 'multi-picker',
											'label' => false,
											'desc' => false,
											'picker' => array(
												'edge_switch' => array(
													'type'  => 'switch',
												    'value' => 'disabled',
												    'label' => esc_html__('Edge', 'naslaan' ),
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
			
													'edge_url' => array(
														'label' => esc_html__('URL (Link)', 'naslaan' ),
														'type' => 'text',
														'value' => '',
														'desc' => esc_html__( 'Add link to button.', 'naslaan' ),
													),
		
												),
											),
											'show_borders' => false,
										),
										
										'header_social_media_outlook' => array(
											'type' => 'multi-picker',
											'label' => false,
											'desc' => false,
											'picker' => array(
												'outlook_switch' => array(
													'type'  => 'switch',
												    'value' => 'disabled',
												    'label' => esc_html__('Outlook', 'naslaan' ),
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
			
													'outlook_url' => array(
														'label' => esc_html__('URL (Link)', 'naslaan' ),
														'type' => 'text',
														'value' => '',
														'desc' => esc_html__( 'Add link to button.', 'naslaan' ),
													),
		
												),
											),
											'show_borders' => false,
										),
										
										'header_social_media_pencilcase' => array(
											'type' => 'multi-picker',
											'label' => false,
											'desc' => false,
											'picker' => array(
												'pencilcase_switch' => array(
													'type'  => 'switch',
												    'value' => 'disabled',
												    'label' => esc_html__('Pencilcase', 'naslaan' ),
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
			
													'pencilcase_url' => array(
														'label' => esc_html__('URL (Link)', 'naslaan' ),
														'type' => 'text',
														'value' => '',
														'desc' => esc_html__( 'Add link to button.', 'naslaan' ),
													),
		
												),
											),
											'show_borders' => false,
										),
										
										'header_social_media_play' => array(
											'type' => 'multi-picker',
											'label' => false,
											'desc' => false,
											'picker' => array(
												'play_switch' => array(
													'type'  => 'switch',
												    'value' => 'disabled',
												    'label' => esc_html__('Play', 'naslaan' ),
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
			
													'play_url' => array(
														'label' => esc_html__('URL (Link)', 'naslaan' ),
														'type' => 'text',
														'value' => '',
														'desc' => esc_html__( 'Add link to button.', 'naslaan' ),
													),
		
												),
											),
											'show_borders' => false,
										),
							
										'header_social_media_icloud' => array(
											'type' => 'multi-picker',
											'label' => false,
											'desc' => false,
											'picker' => array(
												'icloud_switch' => array(
													'type'  => 'switch',
												    'value' => 'disabled',
												    'label' => esc_html__('iCloud', 'naslaan' ),
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
			
													'icloud_url' => array(
														'label' => esc_html__('URL (Link)', 'naslaan' ),
														'type' => 'text',
														'value' => '',
														'desc' => esc_html__( 'Add link to button.', 'naslaan' ),
													),
		
												),
											),
											'show_borders' => false,
										),
										
										
										
										'header_social_media_forrst_1' => array(
											'type' => 'multi-picker',
											'label' => false,
											'desc' => false,
											'picker' => array(
												'forrst_switch_1' => array(
													'type'  => 'switch',
												    'value' => 'disabled',
												    'label' => esc_html__('Forrst (round)', 'naslaan' ),
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
			
													'forrst_url_1' => array(
														'label' => esc_html__('URL (Link)', 'naslaan' ),
														'type' => 'text',
														'value' => '',
														'desc' => esc_html__( 'Add link to button.', 'naslaan' ),
													),
		
												),
											),
											'show_borders' => false,
										),
										
										'header_social_media_dribbble_1' => array(
											'type' => 'multi-picker',
											'label' => false,
											'desc' => false,
											'picker' => array(
												'dribbble_switch_1' => array(
													'type'  => 'switch',
												    'value' => 'disabled',
												    'label' => esc_html__('Dribbble (round)', 'naslaan' ),
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
			
													'dribbble_url_1' => array(
														'label' => esc_html__('URL (Link)', 'naslaan' ),
														'type' => 'text',
														'value' => '',
														'desc' => esc_html__( 'Add link to button.', 'naslaan' ),
													),
		
												),
											),
											'show_borders' => false,
										),
										
										'header_social_media_twitter_1' => array(
											'type' => 'multi-picker',
											'label' => false,
											'desc' => false,
											'picker' => array(
												'twitter_switch_1' => array(
													'type'  => 'switch',
												    'value' => 'disabled',
												    'label' => esc_html__('Twitter (round)', 'naslaan' ),
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
			
													'twitter_url_1' => array(
														'label' => esc_html__('URL (Link)', 'naslaan' ),
														'type' => 'text',
														'value' => '',
														'desc' => esc_html__( 'Add link to button.', 'naslaan' ),
													),
		
												),
											),
											'show_borders' => false,
										),
							
										'header_social_media_flickr_1' => array(
											'type' => 'multi-picker',
											'label' => false,
											'desc' => false,
											'picker' => array(
												'flickr_switch_1' => array(
													'type'  => 'switch',
												    'value' => 'disabled',
												    'label' => esc_html__('Flickr (round)', 'naslaan' ),
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
			
													'flickr_url_1' => array(
														'label' => esc_html__('URL (Link)', 'naslaan' ),
														'type' => 'text',
														'value' => '',
														'desc' => esc_html__( 'Add link to button.', 'naslaan' ),
													),
		
												),
											),
											'show_borders' => false,
										),
										
										'header_social_media_twitter2_1' => array(
											'type' => 'multi-picker',
											'label' => false,
											'desc' => false,
											'picker' => array(
												'twitter2_switch_1' => array(
													'type'  => 'switch',
												    'value' => 'disabled',
												    'label' => esc_html__('Twitter Alt (round)', 'naslaan' ),
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
			
													'twitter2_url_1' => array(
														'label' => esc_html__('URL (Link)', 'naslaan' ),
														'type' => 'text',
														'value' => '',
														'desc' => esc_html__( 'Add link to button.', 'naslaan' ),
													),
		
												),
											),
											'show_borders' => false,
										),
										
										'header_social_media_facebook_1' => array(
											'type' => 'multi-picker',
											'label' => false,
											'desc' => false,
											'picker' => array(
												'facebook_switch_1' => array(
													'type'  => 'switch',
												    'value' => 'disabled',
												    'label' => esc_html__('Facebook (round)', 'naslaan' ),
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
			
													'facebook_url_1' => array(
														'label' => esc_html__('URL (Link)', 'naslaan' ),
														'type' => 'text',
														'value' => '',
														'desc' => esc_html__( 'Add link to button.', 'naslaan' ),
													),
		
												),
											),
											'show_borders' => false,
										),
										
										'header_social_media_skype_1' => array(
											'type' => 'multi-picker',
											'label' => false,
											'desc' => false,
											'picker' => array(
												'skype_switch_1' => array(
													'type'  => 'switch',
												    'value' => 'disabled',
												    'label' => esc_html__('Skype (round)', 'naslaan' ),
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
			
													'skype_url_1' => array(
														'label' => esc_html__('URL (Link)', 'naslaan' ),
														'type' => 'text',
														'value' => '',
														'desc' => esc_html__( 'Add link to button.', 'naslaan' ),
													),
		
												),
											),
											'show_borders' => false,
										),
							
										'header_social_media_digg_1' => array(
											'type' => 'multi-picker',
											'label' => false,
											'desc' => false,
											'picker' => array(
												'digg_switch_1' => array(
													'type'  => 'switch',
												    'value' => 'disabled',
												    'label' => esc_html__('Digg (round)', 'naslaan' ),
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
			
													'digg_url_1' => array(
														'label' => esc_html__('URL (Link)', 'naslaan' ),
														'type' => 'text',
														'value' => '',
														'desc' => esc_html__( 'Add link to button.', 'naslaan' ),
													),
		
												),
											),
											'show_borders' => false,
										),
										
										'header_social_media_google_1' => array(
											'type' => 'multi-picker',
											'label' => false,
											'desc' => false,
											'picker' => array(
												'google_switch_1' => array(
													'type'  => 'switch',
												    'value' => 'disabled',
												    'label' => esc_html__('Google (round)', 'naslaan' ),
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
			
													'google_url_1' => array(
														'label' => esc_html__('URL (Link)', 'naslaan' ),
														'type' => 'text',
														'value' => '',
														'desc' => esc_html__( 'Add link to button.', 'naslaan' ),
													),
		
												),
											),
											'show_borders' => false,
										),
										
										'header_social_media_html5_1' => array(
											'type' => 'multi-picker',
											'label' => false,
											'desc' => false,
											'picker' => array(
												'html5_switch_1' => array(
													'type'  => 'switch',
												    'value' => 'disabled',
												    'label' => esc_html__('Html5 (round)', 'naslaan' ),
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
			
													'html5_url_1' => array(
														'label' => esc_html__('URL (Link)', 'naslaan' ),
														'type' => 'text',
														'value' => '',
														'desc' => esc_html__( 'Add link to button.', 'naslaan' ),
													),
		
												),
											),
											'show_borders' => false,
										),
										
										'header_social_media_linkedin_1' => array(
											'type' => 'multi-picker',
											'label' => false,
											'desc' => false,
											'picker' => array(
												'linkedin_switch_1' => array(
													'type'  => 'switch',
												    'value' => 'disabled',
												    'label' => esc_html__('Linkedin (round)', 'naslaan' ),
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
			
													'linkedin_url_1' => array(
														'label' => esc_html__('URL (Link)', 'naslaan' ),
														'type' => 'text',
														'value' => '',
														'desc' => esc_html__( 'Add link to button.', 'naslaan' ),
													),
		
												),
											),
											'show_borders' => false,
										),
							
										'header_social_media_lastfm_1' => array(
											'type' => 'multi-picker',
											'label' => false,
											'desc' => false,
											'picker' => array(
												'lastfm_switch_1' => array(
													'type'  => 'switch',
												    'value' => 'disabled',
												    'label' => esc_html__('Lastfm (round)', 'naslaan' ),
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
			
													'lastfm_url_1' => array(
														'label' => esc_html__('URL (Link)', 'naslaan' ),
														'type' => 'text',
														'value' => '',
														'desc' => esc_html__( 'Add link to button.', 'naslaan' ),
													),
		
												),
											),
											'show_borders' => false,
										),
										
										'header_social_media_vimeo_1' => array(
											'type' => 'multi-picker',
											'label' => false,
											'desc' => false,
											'picker' => array(
												'vimeo_switch_1' => array(
													'type'  => 'switch',
												    'value' => 'disabled',
												    'label' => esc_html__('Vimeo (round)', 'naslaan' ),
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
			
													'vimeo_url_1' => array(
														'label' => esc_html__('URL (Link)', 'naslaan' ),
														'type' => 'text',
														'value' => '',
														'desc' => esc_html__( 'Add link to button.', 'naslaan' ),
													),
		
												),
											),
											'show_borders' => false,
										),
										
										'header_social_media_yahoo_1' => array(
											'type' => 'multi-picker',
											'label' => false,
											'desc' => false,
											'picker' => array(
												'yahoo_switch_1' => array(
													'type'  => 'switch',
												    'value' => 'disabled',
												    'label' => esc_html__('Yahoo (round)', 'naslaan' ),
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
			
													'yahoo_url_1' => array(
														'label' => esc_html__('URL (Link)', 'naslaan' ),
														'type' => 'text',
														'value' => '',
														'desc' => esc_html__( 'Add link to button.', 'naslaan' ),
													),
		
												),
											),
											'show_borders' => false,
										),
										
										'header_social_media_tumblr_1' => array(
											'type' => 'multi-picker',
											'label' => false,
											'desc' => false,
											'picker' => array(
												'tumblr_switch_1' => array(
													'type'  => 'switch',
												    'value' => 'disabled',
												    'label' => esc_html__('Tumblr (round)', 'naslaan' ),
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
			
													'tumblr_url_1' => array(
														'label' => esc_html__('URL (Link)', 'naslaan' ),
														'type' => 'text',
														'value' => '',
														'desc' => esc_html__( 'Add link to button.', 'naslaan' ),
													),
		
												),
											),
											'show_borders' => false,
										),
							
										'header_social_media_apple_1' => array(
											'type' => 'multi-picker',
											'label' => false,
											'desc' => false,
											'picker' => array(
												'apple_switch_1' => array(
													'type'  => 'switch',
												    'value' => 'disabled',
												    'label' => esc_html__('Apple (round)', 'naslaan' ),
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
			
													'apple_url_1' => array(
														'label' => esc_html__('URL (Link)', 'naslaan' ),
														'type' => 'text',
														'value' => '',
														'desc' => esc_html__( 'Add link to button.', 'naslaan' ),
													),
		
												),
											),
											'show_borders' => false,
										),
										
										'header_social_media_windows_1' => array(
											'type' => 'multi-picker',
											'label' => false,
											'desc' => false,
											'picker' => array(
												'windows_switch_1' => array(
													'type'  => 'switch',
												    'value' => 'disabled',
												    'label' => esc_html__('Windows (round)', 'naslaan' ),
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
			
													'windows_url_1' => array(
														'label' => esc_html__('URL (Link)', 'naslaan' ),
														'type' => 'text',
														'value' => '',
														'desc' => esc_html__( 'Add link to button.', 'naslaan' ),
													),
		
												),
											),
											'show_borders' => false,
										),
										
										'header_social_media_youtube_1' => array(
											'type' => 'multi-picker',
											'label' => false,
											'desc' => false,
											'picker' => array(
												'youtube_switch_1' => array(
													'type'  => 'switch',
												    'value' => 'disabled',
												    'label' => esc_html__('Youtube (round)', 'naslaan' ),
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
			
													'youtube_url_1' => array(
														'label' => esc_html__('URL (Link)', 'naslaan' ),
														'type' => 'text',
														'value' => '',
														'desc' => esc_html__( 'Add link to button.', 'naslaan' ),
													),
		
												),
											),
											'show_borders' => false,
										),
										
										'header_social_media_delicious_1' => array(
											'type' => 'multi-picker',
											'label' => false,
											'desc' => false,
											'picker' => array(
												'delicious_switch_1' => array(
													'type'  => 'switch',
												    'value' => 'disabled',
												    'label' => esc_html__('Delicious (round)', 'naslaan' ),
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
			
													'delicious_url_1' => array(
														'label' => esc_html__('URL (Link)', 'naslaan' ),
														'type' => 'text',
														'value' => '',
														'desc' => esc_html__( 'Add link to button.', 'naslaan' ),
													),
		
												),
											),
											'show_borders' => false,
										),
							
										'header_social_media_rss_1' => array(
											'type' => 'multi-picker',
											'label' => false,
											'desc' => false,
											'picker' => array(
												'rss_switch_1' => array(
													'type'  => 'switch',
												    'value' => 'disabled',
												    'label' => esc_html__('Rss (round)', 'naslaan' ),
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
			
													'rss_url_1' => array(
														'label' => esc_html__('URL (Link)', 'naslaan' ),
														'type' => 'text',
														'value' => '',
														'desc' => esc_html__( 'Add link to button.', 'naslaan' ),
													),
		
												),
											),
											'show_borders' => false,
										),
										
										'header_social_media_picasa_1' => array(
											'type' => 'multi-picker',
											'label' => false,
											'desc' => false,
											'picker' => array(
												'picasa_switch_1' => array(
													'type'  => 'switch',
												    'value' => 'disabled',
												    'label' => esc_html__('Picasa (round)', 'naslaan' ),
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
			
													'picasa_url_1' => array(
														'label' => esc_html__('URL (Link)', 'naslaan' ),
														'type' => 'text',
														'value' => '',
														'desc' => esc_html__( 'Add link to button.', 'naslaan' ),
													),
		
												),
											),
											'show_borders' => false,
										),
										
										'header_social_media_deviantart_1' => array(
											'type' => 'multi-picker',
											'label' => false,
											'desc' => false,
											'picker' => array(
												'deviantart_switch_1' => array(
													'type'  => 'switch',
												    'value' => 'disabled',
												    'label' => esc_html__('Deviantart (round)', 'naslaan' ),
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
			
													'deviantart_url_1' => array(
														'label' => esc_html__('URL (Link)', 'naslaan' ),
														'type' => 'text',
														'value' => '',
														'desc' => esc_html__( 'Add link to button.', 'naslaan' ),
													),
		
												),
											),
											'show_borders' => false,
										),
										
										'header_social_media_whatsapp_1' => array(
											'type' => 'multi-picker',
											'label' => false,
											'desc' => false,
											'picker' => array(
												'whatsapp_switch_1' => array(
													'type'  => 'switch',
												    'value' => 'disabled',
												    'label' => esc_html__('Whatsapp (round)', 'naslaan' ),
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
			
													'whatsapp_url_1' => array(
														'label' => esc_html__('URL (Link)', 'naslaan' ),
														'type' => 'text',
														'value' => '',
														'desc' => esc_html__( 'Add link to button.', 'naslaan' ),
													),
		
												),
											),
											'show_borders' => false,
										),
							
										'header_social_media_snapchat_1' => array(
											'type' => 'multi-picker',
											'label' => false,
											'desc' => false,
											'picker' => array(
												'snapchat_switch_1' => array(
													'type'  => 'switch',
												    'value' => 'disabled',
												    'label' => esc_html__('Snapchat (round)', 'naslaan' ),
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
			
													'snapchat_url_1' => array(
														'label' => esc_html__('URL (Link)', 'naslaan' ),
														'type' => 'text',
														'value' => '',
														'desc' => esc_html__( 'Add link to button.', 'naslaan' ),
													),
		
												),
											),
											'show_borders' => false,
										),
										
										'header_social_media_blogger_1' => array(
											'type' => 'multi-picker',
											'label' => false,
											'desc' => false,
											'picker' => array(
												'blogger_switch_1' => array(
													'type'  => 'switch',
												    'value' => 'disabled',
												    'label' => esc_html__('Blogger (round)', 'naslaan' ),
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
			
													'blogger_url_1' => array(
														'label' => esc_html__('URL (Link)', 'naslaan' ),
														'type' => 'text',
														'value' => '',
														'desc' => esc_html__( 'Add link to button.', 'naslaan' ),
													),
		
												),
											),
											'show_borders' => false,
										),
										
										'header_social_media_wordpress_1' => array(
											'type' => 'multi-picker',
											'label' => false,
											'desc' => false,
											'picker' => array(
												'wordpress_switch_1' => array(
													'type'  => 'switch',
												    'value' => 'disabled',
												    'label' => esc_html__('WordPress (round)', 'naslaan' ),
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
			
													'wordpress_url_1' => array(
														'label' => esc_html__('URL (Link)', 'naslaan' ),
														'type' => 'text',
														'value' => '',
														'desc' => esc_html__( 'Add link to button.', 'naslaan' ),
													),
		
												),
											),
											'show_borders' => false,
										),
										
										'header_social_media_amazon_1' => array(
											'type' => 'multi-picker',
											'label' => false,
											'desc' => false,
											'picker' => array(
												'amazon_switch_1' => array(
													'type'  => 'switch',
												    'value' => 'disabled',
												    'label' => esc_html__('Amazon (round)', 'naslaan' ),
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
			
													'amazon_url_1' => array(
														'label' => esc_html__('URL (Link)', 'naslaan' ),
														'type' => 'text',
														'value' => '',
														'desc' => esc_html__( 'Add link to button.', 'naslaan' ),
													),
		
												),
											),
											'show_borders' => false,
										),
							
										'header_social_media_appstore_1' => array(
											'type' => 'multi-picker',
											'label' => false,
											'desc' => false,
											'picker' => array(
												'appstore_switch_1' => array(
													'type'  => 'switch',
												    'value' => 'disabled',
												    'label' => esc_html__('Appstore (round)', 'naslaan' ),
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
			
													'appstore_url_1' => array(
														'label' => esc_html__('URL (Link)', 'naslaan' ),
														'type' => 'text',
														'value' => '',
														'desc' => esc_html__( 'Add link to button.', 'naslaan' ),
													),
		
												),
											),
											'show_borders' => false,
										),
										
										'header_social_media_paypal_1' => array(
											'type' => 'multi-picker',
											'label' => false,
											'desc' => false,
											'picker' => array(
												'paypal_switch_1' => array(
													'type'  => 'switch',
												    'value' => 'disabled',
												    'label' => esc_html__('Paypal (round)', 'naslaan' ),
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
			
													'paypal_url_1' => array(
														'label' => esc_html__('URL (Link)', 'naslaan' ),
														'type' => 'text',
														'value' => '',
														'desc' => esc_html__( 'Add link to button.', 'naslaan' ),
													),
		
												),
											),
											'show_borders' => false,
										),
										
										'header_social_media_myspace_1' => array(
											'type' => 'multi-picker',
											'label' => false,
											'desc' => false,
											'picker' => array(
												'myspace_switch_1' => array(
													'type'  => 'switch',
												    'value' => 'disabled',
												    'label' => esc_html__('Myspace (round)', 'naslaan' ),
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
			
													'myspace_url_1' => array(
														'label' => esc_html__('URL (Link)', 'naslaan' ),
														'type' => 'text',
														'value' => '',
														'desc' => esc_html__( 'Add link to button.', 'naslaan' ),
													),
		
												),
											),
											'show_borders' => false,
										),
										
										'header_social_media_dropbox_1' => array(
											'type' => 'multi-picker',
											'label' => false,
											'desc' => false,
											'picker' => array(
												'dropbox_switch_1' => array(
													'type'  => 'switch',
												    'value' => 'disabled',
												    'label' => esc_html__('Dropbox (round)', 'naslaan' ),
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
			
													'dropbox_url_1' => array(
														'label' => esc_html__('URL (Link)', 'naslaan' ),
														'type' => 'text',
														'value' => '',
														'desc' => esc_html__( 'Add link to button.', 'naslaan' ),
													),
		
												),
											),
											'show_borders' => false,
										),
							
										'header_social_media_windows8_1' => array(
											'type' => 'multi-picker',
											'label' => false,
											'desc' => false,
											'picker' => array(
												'windows8_switch_1' => array(
													'type'  => 'switch',
												    'value' => 'disabled',
												    'label' => esc_html__('Windows8 (round)', 'naslaan' ),
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
			
													'windows8_url_1' => array(
														'label' => esc_html__('URL (Link)', 'naslaan' ),
														'type' => 'text',
														'value' => '',
														'desc' => esc_html__( 'Add link to button.', 'naslaan' ),
													),
		
												),
											),
											'show_borders' => false,
										),
										
										'header_social_media_pinterest_1' => array(
											'type' => 'multi-picker',
											'label' => false,
											'desc' => false,
											'picker' => array(
												'pinterest_switch_1' => array(
													'type'  => 'switch',
												    'value' => 'disabled',
												    'label' => esc_html__('Pinterest (round)', 'naslaan' ),
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
			
													'pinterest_url_1' => array(
														'label' => esc_html__('URL (Link)', 'naslaan' ),
														'type' => 'text',
														'value' => '',
														'desc' => esc_html__( 'Add link to button.', 'naslaan' ),
													),
		
												),
											),
											'show_borders' => false,
										),
										
										'header_social_media_soundcloud_1' => array(
											'type' => 'multi-picker',
											'label' => false,
											'desc' => false,
											'picker' => array(
												'soundcloud_switch_1' => array(
													'type'  => 'switch',
												    'value' => 'disabled',
												    'label' => esc_html__('Soundcloud (round)', 'naslaan' ),
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
			
													'soundcloud_url_1' => array(
														'label' => esc_html__('URL (Link)', 'naslaan' ),
														'type' => 'text',
														'value' => '',
														'desc' => esc_html__( 'Add link to button.', 'naslaan' ),
													),
		
												),
											),
											'show_borders' => false,
										),
										
										'header_social_media_google_drive_1' => array(
											'type' => 'multi-picker',
											'label' => false,
											'desc' => false,
											'picker' => array(
												'google_drive_switch_1' => array(
													'type'  => 'switch',
												    'value' => 'disabled',
												    'label' => esc_html__('Google Drive (round)', 'naslaan' ),
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
			
													'google_drive_url_1' => array(
														'label' => esc_html__('URL (Link)', 'naslaan' ),
														'type' => 'text',
														'value' => '',
														'desc' => esc_html__( 'Add link to button.', 'naslaan' ),
													),
		
												),
											),
											'show_borders' => false,
										),
							
										'header_social_media_android_1' => array(
											'type' => 'multi-picker',
											'label' => false,
											'desc' => false,
											'picker' => array(
												'android_switch_1' => array(
													'type'  => 'switch',
												    'value' => 'disabled',
												    'label' => esc_html__('Android (round)', 'naslaan' ),
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
			
													'android_url_1' => array(
														'label' => esc_html__('URL (Link)', 'naslaan' ),
														'type' => 'text',
														'value' => '',
														'desc' => esc_html__( 'Add link to button.', 'naslaan' ),
													),
		
												),
											),
											'show_borders' => false,
										),
										
										'header_social_media_behance_1' => array(
											'type' => 'multi-picker',
											'label' => false,
											'desc' => false,
											'picker' => array(
												'behance_switch_1' => array(
													'type'  => 'switch',
												    'value' => 'disabled',
												    'label' => esc_html__('Behance (round)', 'naslaan' ),
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
			
													'behance_url_1' => array(
														'label' => esc_html__('URL (Link)', 'naslaan' ),
														'type' => 'text',
														'value' => '',
														'desc' => esc_html__( 'Add link to button.', 'naslaan' ),
													),
		
												),
											),
											'show_borders' => false,
										),
										
										'header_social_media_instagram_1' => array(
											'type' => 'multi-picker',
											'label' => false,
											'desc' => false,
											'picker' => array(
												'instagram_switch_1' => array(
													'type'  => 'switch',
												    'value' => 'disabled',
												    'label' => esc_html__('Instagram (round)', 'naslaan' ),
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
			
													'instagram_url_1' => array(
														'label' => esc_html__('URL (Link)', 'naslaan' ),
														'type' => 'text',
														'value' => '',
														'desc' => esc_html__( 'Add link to button.', 'naslaan' ),
													),
		
												),
											),
											'show_borders' => false,
										),
										
										'header_social_media_ebay_1' => array(
											'type' => 'multi-picker',
											'label' => false,
											'desc' => false,
											'picker' => array(
												'ebay_switch_1' => array(
													'type'  => 'switch',
												    'value' => 'disabled',
												    'label' => esc_html__('Ebay (round)', 'naslaan' ),
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
			
													'ebay_url_1' => array(
														'label' => esc_html__('URL (Link)', 'naslaan' ),
														'type' => 'text',
														'value' => '',
														'desc' => esc_html__( 'Add link to button.', 'naslaan' ),
													),
		
												),
											),
											'show_borders' => false,
										),
							
										'header_social_media_google_plus_1' => array(
											'type' => 'multi-picker',
											'label' => false,
											'desc' => false,
											'picker' => array(
												'google_plus_switch_1' => array(
													'type'  => 'switch',
												    'value' => 'disabled',
												    'label' => esc_html__('Google Plus (round)', 'naslaan' ),
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
			
													'google_plus_url_1' => array(
														'label' => esc_html__('URL (Link)', 'naslaan' ),
														'type' => 'text',
														'value' => '',
														'desc' => esc_html__( 'Add link to button.', 'naslaan' ),
													),
		
												),
											),
											'show_borders' => false,
										),
										
										'header_social_media_github_1' => array(
											'type' => 'multi-picker',
											'label' => false,
											'desc' => false,
											'picker' => array(
												'github_switch_1' => array(
													'type'  => 'switch',
												    'value' => 'disabled',
												    'label' => esc_html__('Github (round)', 'naslaan' ),
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
			
													'github_url_1' => array(
														'label' => esc_html__('URL (Link)', 'naslaan' ),
														'type' => 'text',
														'value' => '',
														'desc' => esc_html__( 'Add link to button.', 'naslaan' ),
													),
		
												),
											),
											'show_borders' => false,
										),
										
										'header_social_media_stackoverflow_1' => array(
											'type' => 'multi-picker',
											'label' => false,
											'desc' => false,
											'picker' => array(
												'stackoverflow_switch_1' => array(
													'type'  => 'switch',
												    'value' => 'disabled',
												    'label' => esc_html__('Stackoverflow (round)', 'naslaan' ),
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
			
													'stackoverflow_url_1' => array(
														'label' => esc_html__('URL (Link)', 'naslaan' ),
														'type' => 'text',
														'value' => '',
														'desc' => esc_html__( 'Add link to button.', 'naslaan' ),
													),
		
												),
											),
											'show_borders' => false,
										),
										
										'header_social_media_spotify_1' => array(
											'type' => 'multi-picker',
											'label' => false,
											'desc' => false,
											'picker' => array(
												'spotify_switch_1' => array(
													'type'  => 'switch',
												    'value' => 'disabled',
												    'label' => esc_html__('Spotify (round)', 'naslaan' ),
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
			
													'spotify_url_1' => array(
														'label' => esc_html__('URL (Link)', 'naslaan' ),
														'type' => 'text',
														'value' => '',
														'desc' => esc_html__( 'Add link to button.', 'naslaan' ),
													),
		
												),
											),
											'show_borders' => false,
										),
							
										'header_social_media_stumbleupon_1' => array(
											'type' => 'multi-picker',
											'label' => false,
											'desc' => false,
											'picker' => array(
												'stumbleupon_switch_1' => array(
													'type'  => 'switch',
												    'value' => 'disabled',
												    'label' => esc_html__('Stumbleupon (round)', 'naslaan' ),
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
			
													'stumbleupon_url_1' => array(
														'label' => esc_html__('URL (Link)', 'naslaan' ),
														'type' => 'text',
														'value' => '',
														'desc' => esc_html__( 'Add link to button.', 'naslaan' ),
													),
		
												),
											),
											'show_borders' => false,
										),
										
										'header_social_media_visa_1' => array(
											'type' => 'multi-picker',
											'label' => false,
											'desc' => false,
											'picker' => array(
												'visa_switch_1' => array(
													'type'  => 'switch',
												    'value' => 'disabled',
												    'label' => esc_html__('Visa (round)', 'naslaan' ),
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
			
													'visa_url_1' => array(
														'label' => esc_html__('URL (Link)', 'naslaan' ),
														'type' => 'text',
														'value' => '',
														'desc' => esc_html__( 'Add link to button.', 'naslaan' ),
													),
		
												),
											),
											'show_borders' => false,
										),
										
										'header_social_media_mastercard_1' => array(
											'type' => 'multi-picker',
											'label' => false,
											'desc' => false,
											'picker' => array(
												'mastercard_switch_1' => array(
													'type'  => 'switch',
												    'value' => 'disabled',
												    'label' => esc_html__('Mastercard (round)', 'naslaan' ),
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
			
													'mastercard_url_1' => array(
														'label' => esc_html__('URL (Link)', 'naslaan' ),
														'type' => 'text',
														'value' => '',
														'desc' => esc_html__( 'Add link to button.', 'naslaan' ),
													),
		
												),
											),
											'show_borders' => false,
										),
										
										'header_social_media_amex_1' => array(
											'type' => 'multi-picker',
											'label' => false,
											'desc' => false,
											'picker' => array(
												'amex_switch_1' => array(
													'type'  => 'switch',
												    'value' => 'disabled',
												    'label' => esc_html__('Amex (round)', 'naslaan' ),
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
			
													'amex_url_1' => array(
														'label' => esc_html__('URL (Link)', 'naslaan' ),
														'type' => 'text',
														'value' => '',
														'desc' => esc_html__( 'Add link to button.', 'naslaan' ),
													),
		
												),
											),
											'show_borders' => false,
										),
							
										'header_social_media_ios_1' => array(
											'type' => 'multi-picker',
											'label' => false,
											'desc' => false,
											'picker' => array(
												'ios_switch_1' => array(
													'type'  => 'switch',
												    'value' => 'disabled',
												    'label' => esc_html__('Ios (round)', 'naslaan' ),
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
			
													'ios_url_1' => array(
														'label' => esc_html__('URL (Link)', 'naslaan' ),
														'type' => 'text',
														'value' => '',
														'desc' => esc_html__( 'Add link to button.', 'naslaan' ),
													),
		
												),
											),
											'show_borders' => false,
										),
										
										'header_social_media_osx_1' => array(
											'type' => 'multi-picker',
											'label' => false,
											'desc' => false,
											'picker' => array(
												'osx_switch_1' => array(
													'type'  => 'switch',
												    'value' => 'disabled',
												    'label' => esc_html__('Osx (round)', 'naslaan' ),
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
			
													'osx_url_1' => array(
														'label' => esc_html__('URL (Link)', 'naslaan' ),
														'type' => 'text',
														'value' => '',
														'desc' => esc_html__( 'Add link to button.', 'naslaan' ),
													),
		
												),
											),
											'show_borders' => false,
										),
										
										'header_social_media_evernote_1' => array(
											'type' => 'multi-picker',
											'label' => false,
											'desc' => false,
											'picker' => array(
												'evernote_switch_1' => array(
													'type'  => 'switch',
												    'value' => 'disabled',
												    'label' => esc_html__('Evernote (round)', 'naslaan' ),
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
			
													'evernote_url_1' => array(
														'label' => esc_html__('URL (Link)', 'naslaan' ),
														'type' => 'text',
														'value' => '',
														'desc' => esc_html__( 'Add link to button.', 'naslaan' ),
													),
		
												),
											),
											'show_borders' => false,
										),
										
										'header_social_media_yelp_1' => array(
											'type' => 'multi-picker',
											'label' => false,
											'desc' => false,
											'picker' => array(
												'yelp_switch_1' => array(
													'type'  => 'switch',
												    'value' => 'disabled',
												    'label' => esc_html__('Yelp (round)', 'naslaan' ),
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
			
													'yelp_url_1' => array(
														'label' => esc_html__('URL (Link)', 'naslaan' ),
														'type' => 'text',
														'value' => '',
														'desc' => esc_html__( 'Add link to button.', 'naslaan' ),
													),
		
												),
											),
											'show_borders' => false,
										),
							
										'header_social_media_yelp2_1' => array(
											'type' => 'multi-picker',
											'label' => false,
											'desc' => false,
											'picker' => array(
												'yelp2_switch_1' => array(
													'type'  => 'switch',
												    'value' => 'disabled',
												    'label' => esc_html__('Yelp (round)', 'naslaan' ),
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
			
													'yelp2_url_1' => array(
														'label' => esc_html__('URL (Link)', 'naslaan' ),
														'type' => 'text',
														'value' => '',
														'desc' => esc_html__( 'Add link to button.', 'naslaan' ),
													),
		
												),
											),
											'show_borders' => false,
										),
										
										'header_social_media_medium_1' => array(
											'type' => 'multi-picker',
											'label' => false,
											'desc' => false,
											'picker' => array(
												'medium_switch_1' => array(
													'type'  => 'switch',
												    'value' => 'disabled',
												    'label' => esc_html__('Medium (round)', 'naslaan' ),
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
			
													'medium_url_1' => array(
														'label' => esc_html__('URL (Link)', 'naslaan' ),
														'type' => 'text',
														'value' => '',
														'desc' => esc_html__( 'Add link to button.', 'naslaan' ),
													),
		
												),
											),
											'show_borders' => false,
										),
										
										'header_social_media_slack_1' => array(
											'type' => 'multi-picker',
											'label' => false,
											'desc' => false,
											'picker' => array(
												'slack_switch_1' => array(
													'type'  => 'switch',
												    'value' => 'disabled',
												    'label' => esc_html__('Slack (round)', 'naslaan' ),
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
			
													'slack_url_1' => array(
														'label' => esc_html__('URL (Link)', 'naslaan' ),
														'type' => 'text',
														'value' => '',
														'desc' => esc_html__( 'Add link to button.', 'naslaan' ),
													),
		
												),
											),
											'show_borders' => false,
										),
										
										'header_social_media_vine_1' => array(
											'type' => 'multi-picker',
											'label' => false,
											'desc' => false,
											'picker' => array(
												'vine_switch_1' => array(
													'type'  => 'switch',
												    'value' => 'disabled',
												    'label' => esc_html__('Vine (round)', 'naslaan' ),
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
			
													'vine_url_1' => array(
														'label' => esc_html__('URL (Link)', 'naslaan' ),
														'type' => 'text',
														'value' => '',
														'desc' => esc_html__( 'Add link to button.', 'naslaan' ),
													),
		
												),
											),
											'show_borders' => false,
										),
							
										'header_social_media_edge_1' => array(
											'type' => 'multi-picker',
											'label' => false,
											'desc' => false,
											'picker' => array(
												'edge_switch_1' => array(
													'type'  => 'switch',
												    'value' => 'disabled',
												    'label' => esc_html__('Edge (round)', 'naslaan' ),
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
			
													'edge_url_1' => array(
														'label' => esc_html__('URL (Link)', 'naslaan' ),
														'type' => 'text',
														'value' => '',
														'desc' => esc_html__( 'Add link to button.', 'naslaan' ),
													),
		
												),
											),
											'show_borders' => false,
										),
										
										'header_social_media_outlook_1' => array(
											'type' => 'multi-picker',
											'label' => false,
											'desc' => false,
											'picker' => array(
												'outlook_switch_1' => array(
													'type'  => 'switch',
												    'value' => 'disabled',
												    'label' => esc_html__('Outlook (round)', 'naslaan' ),
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
			
													'outlook_url_1' => array(
														'label' => esc_html__('URL (Link)', 'naslaan' ),
														'type' => 'text',
														'value' => '',
														'desc' => esc_html__( 'Add link to button.', 'naslaan' ),
													),
		
												),
											),
											'show_borders' => false,
										),
										
										'header_social_media_pencilcase_1' => array(
											'type' => 'multi-picker',
											'label' => false,
											'desc' => false,
											'picker' => array(
												'pencilcase_switch_1' => array(
													'type'  => 'switch',
												    'value' => 'disabled',
												    'label' => esc_html__('Pencilcase (round)', 'naslaan' ),
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
			
													'pencilcase_url_1' => array(
														'label' => esc_html__('URL (Link)', 'naslaan' ),
														'type' => 'text',
														'value' => '',
														'desc' => esc_html__( 'Add link to button.', 'naslaan' ),
													),
		
												),
											),
											'show_borders' => false,
										),
										
										'header_social_media_play_1' => array(
											'type' => 'multi-picker',
											'label' => false,
											'desc' => false,
											'picker' => array(
												'play_switch_1' => array(
													'type'  => 'switch',
												    'value' => 'disabled',
												    'label' => esc_html__('Play (round)', 'naslaan' ),
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
			
													'play_url_1' => array(
														'label' => esc_html__('URL (Link)', 'naslaan' ),
														'type' => 'text',
														'value' => '',
														'desc' => esc_html__( 'Add link to button.', 'naslaan' ),
													),
		
												),
											),
											'show_borders' => false,
										),
							
										'header_social_media_icloud_1' => array(
											'type' => 'multi-picker',
											'label' => false,
											'desc' => false,
											'picker' => array(
												'icloud_switch_1' => array(
													'type'  => 'switch',
												    'value' => 'disabled',
												    'label' => esc_html__('iCloud (round)', 'naslaan' ),
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
			
													'icloud_url_1' => array(
														'label' => esc_html__('URL (Link)', 'naslaan' ),
														'type' => 'text',
														'value' => '',
														'desc' => esc_html__( 'Add link to button.', 'naslaan' ),
													),
		
												),
											),
											'show_borders' => false,
										),

									
										'header_social_media_container_margins' =>array(
										    'type'  => 'html',
										    'label' => esc_html__('Social Media Container Margins', 'naslaan' ),
										    'html'  => '',
										),
										'header_social_media_container_margin_top' => array(
											'label' => '',
											'type' => 'short-text',
											'value' => '7',
											'desc' => esc_html__( 'top', 'naslaan' ),
										),
										'header_social_media_container_margin_right' => array(
											'label' => '',
											'type' => 'short-text',
											'value' => '0',
											'desc' => esc_html__( 'right', 'naslaan' ),
										),
										'header_social_media_container_margin_bottom' => array(
											'label' => '',
											'type' => 'short-text',
											'value' => '0',
											'desc' => esc_html__( 'bottom', 'naslaan' ),
										),
										'header_social_media_container_margin_left' => array(
											'label' => '',
											'type' => 'short-text',
											'value' => '20',
											'desc' => esc_html__( 'left', 'naslaan' ),
										),
										'header_social_media_container_margin_clearfix' =>array(
										    'type'  => 'html',
										    'label' => '',
										    'html'  => '<div class="wp-clearfix"></div>',
										),
										'header_social_media_btn_color' => array(
										    'type'  => 'rgba-color-picker',
										    'value' => 'rgba(255,255,255,0.6)',
										    'label' => esc_html__('Button Color', 'naslaan' )
										),
										'header_social_media_btn_hover_color' => array(
										    'type'  => 'rgba-color-picker',
										    'value' => 'rgba(255,255,255,1)',
										    'label' => esc_html__('Button Hover Color', 'naslaan' )
										),
										'header_social_media_btn_background' => array(
										    'type'  => 'rgba-color-picker',
										    'value' => 'rgba(255,255,255,0)',
										    'label' => esc_html__('Background Color', 'naslaan' )
										),
										'header_social_media_btn_background_hover' => array(
										    'type'  => 'rgba-color-picker',
										    'value' => 'rgba(255,255,255,0)',
										    'label' => esc_html__('Background Hover Color', 'naslaan' )
										),
										'header_social_media_tooltip_bg' => array(
										    'type'  => 'rgba-color-picker',
										    'value' => 'rgba(37,37,37,1)',
										    'label' => esc_html__('Tooltip Bakground', 'naslaan' )
										),
										'header_social_media_sepline' => array(
											'type' => 'multi-picker',
											'label' => false,
											'desc' => false,
											'picker' => array(
												'sepline_switch' => array(
													'type'  => 'switch',
												    'value' => 'enabled',
												    'label' => esc_html__('Separate Line', 'naslaan' ),
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
													'header_social_media_sepline_color' => array(
													    'type'  => 'rgba-color-picker',
													    'value' => 'rgba(255,255,255,0.15)',
													    'label' => esc_html__('Border Color', 'naslaan' )
													),
		
												),
											),
											'show_borders' => false,
										),
										
										'header_social_media_margins' =>array(
										    'type'  => 'html',
										    'label' => esc_html__('Social Media Buttons Margins', 'naslaan' ),
										    'html'  => '',
										),
										'header_social_media_margin_right' => array(
											'label' => '',
											'type' => 'short-text',
											'value' => '0',
											'desc' => esc_html__( 'right', 'naslaan' ),
										),
										'header_social_media_margin_left' => array(
											'label' => '',
											'type' => 'short-text',
											'value' => '20',
											'desc' => esc_html__( 'left', 'naslaan' ),
										),
										'header_social_media_margin_clearfix' =>array(
										    'type'  => 'html',
										    'label' => '',
										    'html'  => '<div class="wp-clearfix"></div>',
										),
										'header_social_media_btn_visibility' => array(
										    'type'  => 'checkboxes',
										    'value' => array(
										        'notebook' => false,
										        'tablet' => false,
										        'mobile' => false,
										    ),
										    'label' => esc_html__('Visibility', 'naslaan'),
										    'desc'  => esc_html__('Check to hide on device.', 'naslaan'),
										    'choices' => array(
										        'notebook' => esc_html__('Notebook (1200px)', 'naslaan'),
										        'tablet' => esc_html__('Tablet (992px)', 'naslaan'),
										        'mobile' => esc_html__('Mobile (768px)', 'naslaan'),
										    ),
										    'inline' => false,
										),
										
	
										),
									),
								
								)
							),
	
						),
					),
'sticky_header' => array(
						'title' => esc_html__( 'Sticky Header', 'naslaan' ),
						'type' => 'tab',
						'options' => array(
	
							'theme_options-box' => array(
								'title' => esc_html__( 'Sticky Header', 'naslaan' ),
								'type' => 'box',
								'options' => array(
								
									'sticky_header_switch' => array(
										'type' => 'multi-picker',
										'label' => false,
										'desc' => false,
										'picker' => array(
											'sticky_header_visibility' => array(
												'type'  => 'switch',
											    'value' => 'disabled',
											    'label' => esc_html__('Sticky Header', 'naslaan' ),
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
											
											
											
											
												'header_styles' => array(
												    'type' => 'group',
												    'options' => array(
														'header_background' => array(
														    'type'  => 'rgba-color-picker',
														    'value' => 'rgba(37,37,37,1)',
														    'label' => esc_html__('Header Background', 'naslaan' )
														),																
														'middle_header_top_border' => array(
															'type' => 'multi-picker',
															'label' => false,
															'desc' => false,
															'picker' => array(
																'top_border_switch' => array(
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
												
																	'top_border_color' => array(
																	    'type'  => 'rgba-color-picker',
																	    'value' => 'rgba(235,235,235,1)',
																	    'label' => esc_html__('Border Color', 'naslaan' )
																	),
																	'top_border_height' => array(
																		'label' => esc_html__('Border Height', 'naslaan' ),
																		'type' => 'short-text',
																		'value' => '0',
																		'desc' => esc_html__( 'value in pixels', 'naslaan' ),
																	),
												
																),
															),
															'show_borders' => false,
														),
														
														'middle_header_bottom_border' => array(
															'type' => 'multi-picker',
															'label' => false,
															'desc' => false,
															'picker' => array(
																'bottom_border_switch' => array(
																	'type'  => 'switch',
																    'value' => 'disabled',
																    'label' => esc_html__('Bottom Border', 'naslaan' ),
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
												
																	'bottom_border_color' => array(
																	    'type'  => 'rgba-color-picker',
																	    'value' => 'rgba(235,235,235,1)',
																	    'label' => esc_html__('Border Color', 'naslaan' )
																	),
																	'bottom_border_height' => array(
																		'label' => esc_html__('Border Height', 'naslaan' ),
																		'type' => 'short-text',
																		'value' => '0',
																		'desc' => esc_html__( 'value in pixels', 'naslaan' ),
																	),
												
																),
															),
															'show_borders' => false,
														),
												    
													),
												),
												
												
												
												'header_logo_group' => array(
												    'type' => 'group',
												    'options' => array(
														'header_logo' => array(
															'type' => 'multi-picker',
															'show_borders' => false,
															'label' => false,
															'desc' => false,
															'value' => array(
																'logo_type' => 'text_logo',
															),
															'picker' => array(
																'logo_type' => array(
																	'type'  => 'radio',
																    'label' => esc_html__('Logo Type', 'naslaan' ),
																    'choices' => array(
																    	'none' => esc_html__('None', 'naslaan' ),
																        'text_logo' => esc_html__('Text Logo', 'naslaan' ),
																        'image_logo' => esc_html__('Image Logo', 'naslaan' ),
																    ),
																    'inline' => false,
																)
															),
															'choices' => array(
																'text_logo' => array(
																	'header_logo_text' => array(
																	    'type' => 'typography-v2',
																	    'value' => array(
																	        'family' => 'Montserrat',
																	        'subset' => 'latin-ext',
																	        'variation' => '600',
																	        'size' => 36,
																	        'letter-spacing' => 0,
																	        'color' => '#ffffff'
																	    ),
																	    'components' => array(
																	        'family'         => true,
																	        'size'           => true,
																	        'line-height'    => false,
																	        'letter-spacing' => true,
																	        'color'          => true
																	    ),
																	    'label' => esc_html__('Logo Text', 'naslaan' )
																	),
																	'header_logo_text_paddings' =>array(
																	    'type'  => 'html',
																	    'label' => esc_html__('Logo Paddings', 'naslaan' ),
																	    'html'  => '',
																	),
																	'header_logo_text_padding_top' => array(
																		'label' => '',
																		'type' => 'short-text',
																		'value' => '30',
																		'desc' => esc_html__( 'top', 'naslaan' ),
																	),
																	'header_logo_text_padding_right' => array(
																		'label' => '',
																		'type' => 'short-text',
																		'value' => '30',
																		'desc' => esc_html__( 'right', 'naslaan' ),
																	),
																	'header_logo_text_padding_bottom' => array(
																		'label' => '',
																		'type' => 'short-text',
																		'value' => '30',
																		'desc' => esc_html__( 'bottom', 'naslaan' ),
																	),
																	'header_logo_text_padding_left' => array(
																		'label' => '',
																		'type' => 'short-text',
																		'value' => '30',
																		'desc' => esc_html__( 'left', 'naslaan' ),
																	),
																	'header_logo_text_padding_clearfix' =>array(
																	    'type'  => 'html',
																	    'label' => '',
																	    'html'  => '<div class="wp-clearfix"></div>',
																	),
																	'header_logo_text_border' => array(
																		'type' => 'multi-picker',
																		'label' => false,
																		'desc' => false,
																		'picker' => array(
																			'logo_border_switch' => array(
																				'type'  => 'switch',
																			    'value' => 'disabled',
																			    'label' => esc_html__('Border', 'naslaan' ),
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
															
																				'logo_border_color' => array(
																				    'type'  => 'rgba-color-picker',
																				    'value' => 'rgba(235,235,235,1)',
																				    'label' => esc_html__('Border Color', 'naslaan' )
																				),
															
																			),
																		),
																		'show_borders' => false,
																	),
																	
																),
																'image_logo' => array(
																	'header_logo_image' => array(
																		'label' => esc_html__( 'Logo', 'naslaan' ),
																		'type' => 'upload',
																	),
																	'header_logo_width' => array(
																		'label' => esc_html__( 'Logo Height', 'naslaan' ),
																		'type' => 'short-text',
																		'value' => '200',
																		'desc' => esc_html__( 'value in pixels', 'naslaan' ),
																	),
																	'header_logo_paddings' =>array(
																	    'type'  => 'html',
																	    'label' => esc_html__('Logo Paddings', 'naslaan' ),
																	    'html'  => '',
																	),
																	'header_logo_padding_top' => array(
																		'label' => '',
																		'type' => 'short-text',
																		'value' => '30',
																		'desc' => esc_html__( 'top', 'naslaan' ),
																	),
																	'header_logo_padding_right' => array(
																		'label' => '',
																		'type' => 'short-text',
																		'value' => '30',
																		'desc' => esc_html__( 'right', 'naslaan' ),
																	),
																	'header_logo_padding_bottom' => array(
																		'label' => '',
																		'type' => 'short-text',
																		'value' => '30',
																		'desc' => esc_html__( 'bottom', 'naslaan' ),
																	),
																	'header_logo_padding_left' => array(
																		'label' => '',
																		'type' => 'short-text',
																		'value' => '30',
																		'desc' => esc_html__( 'left', 'naslaan' ),
																	),
																	'header_logo_padding_clearfix' =>array(
																	    'type'  => 'html',
																	    'label' => '',
																	    'html'  => '<div class="wp-clearfix"></div>',
																	),
																	'logo_border' => array(
																		'type' => 'multi-picker',
																		'label' => false,
																		'desc' => false,
																		'picker' => array(
																			'logo_border_switch' => array(
																				'type'  => 'switch',
																			    'value' => 'disabled',
																			    'label' => esc_html__('Border', 'naslaan' ),
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
															
																				'logo_border_color' => array(
																				    'type'  => 'rgba-color-picker',
																				    'value' => 'rgba(235,235,235,1)',
																				    'label' => esc_html__('Border Color', 'naslaan' )
																				),
															
																			),
																		),
																		'show_borders' => false,
																	),
											
																)
															),
															'logo_border' => array(
																'type' => 'multi-picker',
																'label' => false,
																'desc' => false,
																'picker' => array(
																	'logo_border_switch' => array(
																		'type'  => 'switch',
																	    'value' => 'disabled',
																	    'label' => esc_html__('Logo Border', 'naslaan' ),
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
													
																		'logo_border_color' => array(
																		    'type'  => 'rgba-color-picker',
																		    'value' => 'rgba(235,235,235,1)',
																		    'label' => esc_html__('Border Color', 'naslaan' )
																		),
													
																	),
																),
																'show_borders' => false,
															),
														),
													),
												),




												'group_menu' => array(
												    'type' => 'group',
												    'options' => array(
				
														'navigation_margins' =>array(
														    'type'  => 'html',
														    'label' => esc_html__('Navigation Margins', 'naslaan' ),
														    'html'  => '',
														),
														'navigation_margin_right' => array(
															'label' => '',
															'type' => 'short-text',
															'value' => '0',
															'desc' => esc_html__( 'right', 'naslaan' ),
														),
														'navigation_margin_left' => array(
															'label' => '',
															'type' => 'short-text',
															'value' => '0',
															'desc' => esc_html__( 'left', 'naslaan' ),
														),
														'navigation_margin_clearfix' =>array(
														    'type'  => 'html',
														    'label' => '',
														    'html'  => '<div class="wp-clearfix"></div>',
														),
														'menu_item_paddings' =>array(
														    'type'  => 'html',
														    'label' => esc_html__('Menu Item Paddings', 'naslaan' ),
														    'html'  => '',
														),
														'menu_item_padding_top' => array(
															'label' => '',
															'type' => 'short-text',
															'value' => '0',
															'desc' => esc_html__( 'top', 'naslaan' ),
														),
														'menu_item_padding_right' => array(
															'label' => '',
															'type' => 'short-text',
															'value' => '0',
															'desc' => esc_html__( 'right', 'naslaan' ),
														),
														'menu_item_padding_bottom' => array(
															'label' => '',
															'type' => 'short-text',
															'value' => '0',
															'desc' => esc_html__( 'bottom', 'naslaan' ),
														),
														'menu_item_padding_left' => array(
															'label' => '',
															'type' => 'short-text',
															'value' => '0',
															'desc' => esc_html__( 'left', 'naslaan' ),
														),
														'menu_item_padding_clearfix' =>array(
														    'type'  => 'html',
														    'label' => '',
														    'html'  => '<div class="wp-clearfix"></div>',
														),
														'menu_button_paddings_notebook_layout' => array(
															'type' => 'multi-picker',
															'label' => false,
															'desc' => false,
															'picker' => array(
																'menu_button_paddings_nl_switch' => array(
																	'type'  => 'switch',
																    'value' => 'disabled',
																    'label' => esc_html__('Menu Button Paddings (Notebook Layout)', 'naslaan' ),
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
							
																	'menu_button_paddings_nl' =>array(
																	    'type'  => 'html',
																	    'label' => '',
																	    'html'  => '',
																	),
																	'menu_button_padding_right_nl' => array(
																		'label' => '',
																		'type' => 'short-text',
																		'value' => '0',
																		'desc' => esc_html__( 'right', 'naslaan' ),
																	),
																	'menu_button_padding_left_nl' => array(
																		'label' => '',
																		'type' => 'short-text',
																		'value' => '0',
																		'desc' => esc_html__( 'left', 'naslaan' ),
																	),
																	'menu_button_padding_clearfix_nl' =>array(
																	    'type'  => 'html',
																	    'label' => '',
																	    'html'  => '<div class="wp-clearfix"></div>',
																	),
						
																),
															),
															'show_borders' => false,
														),
														'menu_button_paddings_tablet_layout' => array(
															'type' => 'multi-picker',
															'label' => false,
															'desc' => false,
															'picker' => array(
																'menu_button_paddings_tl_switch' => array(
																	'type'  => 'switch',
																    'value' => 'disabled',
																    'label' => esc_html__('Menu Button Paddings (Tablet Layout)', 'naslaan' ),
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
							
																	'menu_button_paddings_tl' =>array(
																	    'type'  => 'html',
																	    'label' => '',
																	    'html'  => '',
																	),
																	'menu_button_padding_right_tl' => array(
																		'label' => '',
																		'type' => 'short-text',
																		'value' => '0',
																		'desc' => esc_html__( 'right', 'naslaan' ),
																	),
																	'menu_button_padding_left_tl' => array(
																		'label' => '',
																		'type' => 'short-text',
																		'value' => '0',
																		'desc' => esc_html__( 'left', 'naslaan' ),
																	),
																	'menu_button_padding_clearfix_tl' =>array(
																	    'type'  => 'html',
																	    'label' => '',
																	    'html'  => '<div class="wp-clearfix"></div>',
																	),
						
																),
															),
															'show_borders' => false,
														),
														'menu_button_inner_paddings' =>array(
														    'type'  => 'html',
														    'label' => esc_html__('Menu Button Inner Paddings', 'naslaan' ),
														    'html'  => '',
														),
														'menu_button_inner_padding_right' => array(
															'label' => '',
															'type' => 'short-text',
															'value' => '0',
															'desc' => esc_html__( 'right', 'naslaan' ),
														),
														'menu_button_inner_padding_left' => array(
															'label' => '',
															'type' => 'short-text',
															'value' => '0',
															'desc' => esc_html__( 'left', 'naslaan' ),
														),
														'menu_button_inner_padding_clearfix' =>array(
														    'type'  => 'html',
														    'label' => '',
														    'html'  => '<div class="wp-clearfix"></div>',
														),
														'menu_button_inner_paddings_notebook_layout' => array(
															'type' => 'multi-picker',
															'label' => false,
															'desc' => false,
															'picker' => array(
																'menu_button_inner_paddings_nl_switch' => array(
																	'type'  => 'switch',
																    'value' => 'disabled',
																    'label' => esc_html__('Menu Button Inner Paddings (Notebook Layout)', 'naslaan' ),
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
							
																	'menu_button_inner_paddings_nl' =>array(
																	    'type'  => 'html',
																	    'label' => '',
																	    'html'  => '',
																	),
																	'menu_button_inner_padding_right_nl' => array(
																		'label' => '',
																		'type' => 'short-text',
																		'value' => '0',
																		'desc' => esc_html__( 'right', 'naslaan' ),
																	),
																	'menu_button_inner_padding_left_nl' => array(
																		'label' => '',
																		'type' => 'short-text',
																		'value' => '0',
																		'desc' => esc_html__( 'left', 'naslaan' ),
																	),
																	'menu_button_inner_padding_clearfix_nl' =>array(
																	    'type'  => 'html',
																	    'label' => '',
																	    'html'  => '<div class="wp-clearfix"></div>',
																	),
						
																),
															),
															'show_borders' => false,
														),
														'menu_button_inner_paddings_tablet_layout' => array(
															'type' => 'multi-picker',
															'label' => false,
															'desc' => false,
															'picker' => array(
																'menu_button_inner_paddings_tl_switch' => array(
																	'type'  => 'switch',
																    'value' => 'disabled',
																    'label' => esc_html__('Menu Button Inner Paddings (Tablet Layout)', 'naslaan' ),
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
							
																	'menu_button_inner_paddings_tl' =>array(
																	    'type'  => 'html',
																	    'label' => '',
																	    'html'  => '',
																	),
																	'menu_button_inner_padding_right_tl' => array(
																		'label' => '',
																		'type' => 'short-text',
																		'value' => '0',
																		'desc' => esc_html__( 'right', 'naslaan' ),
																	),
																	'menu_button_inner_padding_left_tl' => array(
																		'label' => '',
																		'type' => 'short-text',
																		'value' => '0',
																		'desc' => esc_html__( 'left', 'naslaan' ),
																	),
																	'menu_button_inner_padding_clearfix_tl' =>array(
																	    'type'  => 'html',
																	    'label' => '',
																	    'html'  => '<div class="wp-clearfix"></div>',
																	),
						
																),
															),
															'show_borders' => false,
														),
														'menu_button_text' => array(
														    'type' => 'typography-v2',
														    'value' => array(
														        'family' => 'Montserrat',
														        'subset' => 'latin-ext',
														        'variation' => '600',
														        'size' => 15,
														        'line-height' => 104,
														        'letter-spacing' => 0.5
														    ),
														    'components' => array(
														        'family'         => true,
														        'size'           => true,
														        'line-height'    => true,
														        'letter-spacing' => true,
														        'color'          => false
														    ),
														    'label' => esc_html__('Menu Button Text', 'naslaan' )
														),
														'menu_button_text_notebook_layout' => array(
															'type' => 'multi-picker',
															'label' => false,
															'desc' => false,
															'picker' => array(
																'menu_button_text_nl_switch' => array(
																	'type'  => 'switch',
																    'value' => 'disabled',
																    'label' => esc_html__('Menu Button Text (Notebook Layout)', 'naslaan' ),
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
							
																	'font_size' => array(
																		'label' => esc_html__('Font Size', 'naslaan' ),
																		'type' => 'short-text',
																		'value' => '15',
																		'desc' => esc_html__( 'value in pixels', 'naslaan' ),
																	),
						
																),
															),
															'show_borders' => false,
														),
														'menu_button_text_tablet_layout' => array(
															'type' => 'multi-picker',
															'label' => false,
															'desc' => false,
															'picker' => array(
																'menu_button_text_tl_switch' => array(
																	'type'  => 'switch',
																    'value' => 'disabled',
																    'label' => esc_html__('Menu Button Text (Tablet Layout)', 'naslaan' ),
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
							
																	'font_size' => array(
																		'label' => esc_html__('Font Size', 'naslaan' ),
																		'type' => 'short-text',
																		'value' => '15',
																		'desc' => esc_html__( 'value in pixels', 'naslaan' ),
																	),
						
																),
															),
															'show_borders' => false,
														),
														'menu_button_color' => array(
														    'type'  => 'rgba-color-picker',
														    'value' => 'rgba(255,255,255,1)',
														    'label' => esc_html__('Menu Button Color', 'naslaan' )
														),
														'menu_button_color_hover' => array(
														    'type'  => 'rgba-color-picker',
														    'value' => 'rgba(222,0,46,1)',
														    'label' => esc_html__('Menu Button Hover Color', 'naslaan' )
														),
														'menu_background_color' => array(
														    'type'  => 'rgba-color-picker',
														    'value' => 'rgba(255,255,255,0)',
														    'label' => esc_html__('Menu Background Color', 'naslaan' )
														),
														'menu_background_color_hover' => array(
														    'type'  => 'rgba-color-picker',
														    'value' => 'rgba(255,255,255,0)',
														    'label' => esc_html__('Menu Background Hover Color', 'naslaan' )
														),
														'menu_button_overlay_effect' => array(
															'type' => 'multi-picker',
															'label' => false,
															'desc' => false,
															'picker' => array(
																'menu_button_overlay_effect_switch' => array(
																	'type'  => 'switch',
																    'value' => 'disabled',
																    'label' => esc_html__('Overlay Effect', 'naslaan' ),
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
							
																	'menu_button_overlay_effect_types' => array(
																	    'type'  => 'select',
																	    'value' => 'none',
																	    'label' => esc_html__('Types', 'naslaan' ),
																	    'choices' => array(
																	        'type_1' => esc_html__('Type 1', 'naslaan' ),
																	        'type_2' => esc_html__('Type 2', 'naslaan' ),
																	    ),
																	),
						
																),
															),
															'show_borders' => false,
														),
														'menu_button_radius' => array(
															'label' => esc_html__('Button Radius', 'naslaan' ),
															'type' => 'short-text',
															'value' => '0',
														),
														'menu_button_top_border' => array(
															'type' => 'multi-picker',
															'label' => false,
															'desc' => false,
															'picker' => array(
																'top_border_switch' => array(
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
												
																	'top_border_color' => array(
																	    'type'  => 'rgba-color-picker',
																	    'value' => 'rgba(235,235,235,1)',
																	    'label' => esc_html__('Border Color', 'naslaan' )
																	),
																	'top_border_hover_color' => array(
																	    'type'  => 'rgba-color-picker',
																	    'value' => 'rgba(235,235,235,1)',
																	    'label' => esc_html__('Border Hover Color', 'naslaan' )
																	),
																	'top_border_height' => array(
																		'label' => esc_html__('Border Height', 'naslaan' ),
																		'type' => 'short-text',
																		'value' => '0',
																		'desc' => esc_html__( 'value in pixels', 'naslaan' ),
																	),
												
																),
															),
															'show_borders' => false,
														),
														'menu_button_right_border' => array(
															'type' => 'multi-picker',
															'label' => false,
															'desc' => false,
															'picker' => array(
																'right_border_switch' => array(
																	'type'  => 'switch',
																    'value' => 'disabled',
																    'label' => esc_html__('Right Border', 'naslaan' ),
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
												
																	'right_border_color' => array(
																	    'type'  => 'rgba-color-picker',
																	    'value' => 'rgba(235,235,235,1))',
																	    'label' => esc_html__('Border Color', 'naslaan' )
																	),
																	'right_border_hover_color' => array(
																	    'type'  => 'rgba-color-picker',
																	    'value' => 'rgba(235,235,235,1)',
																	    'label' => esc_html__('Border Hover Color', 'naslaan' )
																	),
																	'right_border_height' => array(
																		'label' => esc_html__('Border Height', 'naslaan' ),
																		'type' => 'short-text',
																		'value' => '0',
																		'desc' => esc_html__( 'value in pixels', 'naslaan' ),
																	),
																	
																),
															),
															'show_borders' => false,
														),
														'menu_button_bottom_border' => array(
															'type' => 'multi-picker',
															'label' => false,
															'desc' => false,
															'picker' => array(
																'bottom_border_switch' => array(
																	'type'  => 'switch',
																    'value' => 'disabled',
																    'label' => esc_html__('Bottom Border', 'naslaan' ),
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
												
																	'bottom_border_color' => array(
																	    'type'  => 'rgba-color-picker',
																	    'value' => 'rgba(235,235,235,1)',
																	    'label' => esc_html__('Border Color', 'naslaan' )
																	),
																	'bottom_border_hover_color' => array(
																	    'type'  => 'rgba-color-picker',
																	    'value' => 'rgba(79,45,127,1)',
																	    'label' => esc_html__('Border Hover Color', 'naslaan' )
																	),
																	'bottom_border_height' => array(
																		'label' => esc_html__('Border Height', 'naslaan' ),
																		'type' => 'short-text',
																		'value' => '3',
																		'desc' => esc_html__( 'value in pixels', 'naslaan' ),
																	),
																	
																),
															),
															'show_borders' => false,
														),
														'menu_button_left_border' => array(
															'type' => 'multi-picker',
															'label' => false,
															'desc' => false,
															'picker' => array(
																'left_border_switch' => array(
																	'type'  => 'switch',
																    'value' => 'disabled',
																    'label' => esc_html__('Left Border', 'naslaan' ),
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
												
																	'left_border_color' => array(
																	    'type'  => 'rgba-color-picker',
																	    'value' => 'rgba(235,235,235,1)',
																	    'label' => esc_html__('Border Color', 'naslaan' )
																	),
																	'left_border_hover_color' => array(
																	    'type'  => 'rgba-color-picker',
																	    'value' => 'rgba(235,235,235,1)',
																	    'label' => esc_html__('Border Hover Color', 'naslaan' )
																	),
																	'left_border_height' => array(
																		'label' => esc_html__('Border Height', 'naslaan' ),
																		'type' => 'short-text',
																		'value' => '0',
																		'desc' => esc_html__( 'value in pixels', 'naslaan' ),
																	),
																	
																),
															),
															'show_borders' => false,
														),
													),
												),


												
												
												'navigation_align' => array(
													'type'  => 'radio',
													'value' => 'left',
												    'label' => esc_html__('Navigation Align', 'naslaan' ),
												    'choices' => array(
												        'left' => esc_html__('Left', 'naslaan' ),
												        'center' => esc_html__('Center', 'naslaan' ),
												        'right' => esc_html__('Right', 'naslaan' ),
												    ),
												    'desc' => '',
												    'inline' => false,
												),
												'right_bar_border' => array(
													'type' => 'multi-picker',
													'label' => false,
													'desc' => false,
													'picker' => array(
														'right_bar_border_switch' => array(
															'type'  => 'switch',
														    'value' => 'disabled',
														    'label' => esc_html__('Right Bar Border', 'naslaan' ),
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
										
															'right_bar_border_color' => array(
															    'type'  => 'rgba-color-picker',
															    'value' => 'rgba(235,235,235,1)',
															    'label' => esc_html__('Border Color', 'naslaan' )
															),
										
														),
													),
													'show_borders' => false,
												),
												'right_bar_order' => array(
												    'type' => 'group',
												    'options' => array(
												    
														'right_bar_order_title' => array(
															'label' => esc_html__('Right Bar Order', 'naslaan' ),
															'type' => 'html',
															'html'  => esc_html__('Elements order for the "Right Bar".', 'naslaan' ),
														),
														'right_bar_order_1' => array(
														    'type'  => 'select',
														    'value' => 'none',
														    'label' => esc_html__('Order 1', 'naslaan' ),
														    'choices' => array(
														        'none' => esc_html__('None', 'naslaan' ),
														        'search' => esc_html__('Search', 'naslaan' ),
														        'message' => esc_html__('Message Block', 'naslaan' ),
														        'social' => esc_html__('Social Media', 'naslaan' ),
														        'shopping_cart' => esc_html__('Shopping Cart', 'naslaan' ),
														        'wpml_btn' => esc_html__('WPML Button', 'naslaan' ),
														    ),
														),
														'right_bar_order_2' => array(
														    'type'  => 'select',
														    'value' => 'none',
														    'label' => esc_html__('Order 2', 'naslaan' ),
														    'choices' => array(
														        'none' => esc_html__('None', 'naslaan' ),
														        'search' => esc_html__('Search', 'naslaan' ),
														        'message' => esc_html__('Message Block', 'naslaan' ),
														        'social' => esc_html__('Social Media', 'naslaan' ),
														        'shopping_cart' => esc_html__('Shopping Cart', 'naslaan' ),
														        'wpml_btn' => esc_html__('WPML Button', 'naslaan' ),
														    ),
														),
														'right_bar_order_3' => array(
														    'type'  => 'select',
														    'value' => 'none',
														    'label' => esc_html__('Order 3', 'naslaan' ),
														    'choices' => array(
														        'none' => esc_html__('None', 'naslaan' ),
														        'search' => esc_html__('Search', 'naslaan' ),
														        'message' => esc_html__('Message Block', 'naslaan' ),
														        'social' => esc_html__('Social Media', 'naslaan' ),
														        'shopping_cart' => esc_html__('Shopping Cart', 'naslaan' ),
														        'wpml_btn' => esc_html__('WPML Button', 'naslaan' ),
														    ),
														),
														'right_bar_order_4' => array(
														    'type'  => 'select',
														    'value' => 'none',
														    'label' => esc_html__('Order 4', 'naslaan' ),
														    'choices' => array(
														        'none' => esc_html__('None', 'naslaan' ),
														        'search' => esc_html__('Search', 'naslaan' ),
														        'message' => esc_html__('Message Block', 'naslaan' ),
														        'social' => esc_html__('Social Media', 'naslaan' ),
														        'shopping_cart' => esc_html__('Shopping Cart', 'naslaan' ),
														        'wpml_btn' => esc_html__('WPML Button', 'naslaan' ),
														    ),
														),
														'right_bar_order_5' => array(
														    'type'  => 'select',
														    'value' => 'none',
														    'label' => esc_html__('Order 5', 'naslaan' ),
														    'choices' => array(
														        'none' => esc_html__('None', 'naslaan' ),
														        'search' => esc_html__('Search', 'naslaan' ),
														        'message' => esc_html__('Message Block', 'naslaan' ),
														        'social' => esc_html__('Social Media', 'naslaan' ),
														        'shopping_cart' => esc_html__('Shopping Cart', 'naslaan' ),
														        'wpml_btn' => esc_html__('WPML Button', 'naslaan' ),
														    ),
														),
												    
													),
												),
												
									'header_search' => array(
									    'type' => 'group',
									    'options' => array(
									    
									    
											'search_form' => array(
												'type' => 'multi-picker',
												'label' => false,
												'desc' => false,
												'picker' => array(
													'search_form_visibility' => array(
														'type'  => 'switch',
													    'value' => 'disabled',
													    'label' => esc_html__('Search Form', 'naslaan' ),
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
				
														'search_form_type' => array(
														    'type'  => 'radio',
														    'value' => 'search',
														    'label' => esc_html__('Form Type', 'naslaan' ),
														    'choices' => array(
														        'search' => esc_html__('Search For', 'naslaan' ),
														        'search_products' => esc_html__('Search For Products', 'naslaan' ),
														    ),
														    'inline' => true,
														),
																												
														'search_btn_container_margins' =>array(
														    'type'  => 'html',
														    'label' => esc_html__('Search Container Margins', 'naslaan' ),
														    'html'  => '',
														),
														'search_btn_container_margin_top' => array(
															'label' => '',
															'type' => 'short-text',
															'value' => '34',
															'desc' => esc_html__( 'top', 'naslaan' ),
														),
														'search_btn_container_margin_right' => array(
															'label' => '',
															'type' => 'short-text',
															'value' => '0',
															'desc' => esc_html__( 'right', 'naslaan' ),
														),
														'search_btn_container_margin_bottom' => array(
															'label' => '',
															'type' => 'short-text',
															'value' => '0',
															'desc' => esc_html__( 'bottom', 'naslaan' ),
														),
														'search_btn_container_margin_left' => array(
															'label' => '',
															'type' => 'short-text',
															'value' => '20',
															'desc' => esc_html__( 'left', 'naslaan' ),
														),
														'search_btn_container_margin_clearfix' =>array(
														    'type'  => 'html',
														    'label' => '',
														    'html'  => '<div class="wp-clearfix"></div>',
														),
														
														'search_btn_sepline' => array(
															'type' => 'multi-picker',
															'label' => false,
															'desc' => false,
															'picker' => array(
																'sepline_switch' => array(
																	'type'  => 'switch',
																    'value' => 'disabled',
																    'label' => esc_html__('Separate Line', 'naslaan' ),
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
																	'search_btn_sepline_color' => array(
																	    'type'  => 'rgba-color-picker',
																	    'value' => 'rgba(255,255,255,0.15)',
																	    'label' => esc_html__('Border Color', 'naslaan' )
																	),
						
																),
															),
															'show_borders' => false,
														),
														
														'search_btn_margins' =>array(
														    'type'  => 'html',
														    'label' => esc_html__('Search Button Margins', 'naslaan' ),
														    'html'  => '',
														),
														'search_btn_margin_right' => array(
															'label' => '',
															'type' => 'short-text',
															'value' => '0',
															'desc' => esc_html__( 'right', 'naslaan' ),
														),
														'search_btn_margin_left' => array(
															'label' => '',
															'type' => 'short-text',
															'value' => '20',
															'desc' => esc_html__( 'left', 'naslaan' ),
														),
														'search_btn_margin_clearfix' =>array(
														    'type'  => 'html',
														    'label' => '',
														    'html'  => '<div class="wp-clearfix"></div>',
														),
														'search_btn_width' => array(
															'label' => esc_html__('Button Width', 'naslaan' ),
															'type' => 'short-text',
															'value' => '36',
														),
														'search_btn_icon_size' => array(
															'label' => esc_html__('Button Icon Size', 'naslaan' ),
															'type' => 'short-text',
															'value' => '18',
														),
														'search_btn_color' => array(
														    'type'  => 'rgba-color-picker',
														    'value' => 'rgba(255,255,255,0.6)',
														    'label' => esc_html__('Search Button Color', 'naslaan' )
														),
														'search_btn_color_hover' => array(
														    'type'  => 'rgba-color-picker',
														    'value' => 'rgba(255,255,255,1)',
														    'label' => esc_html__('Search Button Hover Color', 'naslaan' )
														),
														'search_btn_background' => array(
														    'type'  => 'rgba-color-picker',
														    'value' => 'rgba(255,255,255,0)',
														    'label' => esc_html__('Search Button Background', 'naslaan' )
														),
														'search_btn_background_hover' => array(
														    'type'  => 'rgba-color-picker',
														    'value' => 'rgba(255,255,255,0)',
														    'label' => esc_html__('Search Button Hover Background', 'naslaan' )
														),
														'search_button_border' => array(
															'type' => 'multi-picker',
															'label' => false,
															'desc' => false,
															'picker' => array(
																'search_button_border_switch' => array(
																	'type'  => 'switch',
																    'value' => 'enabled',
																    'label' => esc_html__('Search Button Border', 'naslaan' ),
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
							
																	'search_border_weight' => array(
																		'label' => esc_html__('Border Weight', 'naslaan' ),
																		'type' => 'short-text',
																		'value' => '1',
																	),
																
																	'search_border_color' => array(
																	    'type'  => 'rgba-color-picker',
																	    'value' => 'rgba(255,255,255,0.15)',
																	    'label' => esc_html__('Border Color', 'naslaan' )
																	),
																	'search_border_color_hover' => array(
																	    'type'  => 'rgba-color-picker',
																	    'value' => 'rgba(255,255,255,0.15)',
																	    'label' => esc_html__('Border Hover Color', 'naslaan' )
																	),
						
																),
															),
															'show_borders' => false,
														),
														'search_button_visibility' => array(
														    'type'  => 'checkboxes',
														    'value' => array(
														        'notebook' => false,
														        'tablet' => false,
														        'mobile' => false,
														    ),
														    'label' => esc_html__('Visibility', 'naslaan'),
														    'desc'  => esc_html__('Check to hide on device.', 'naslaan'),
														    'choices' => array(
														        'notebook' => esc_html__('Notebook (1200px)', 'naslaan'),
														        'tablet' => esc_html__('Tablet (992px)', 'naslaan'),
														        'mobile' => esc_html__('Mobile (768px)', 'naslaan'),
														    ),
														    'inline' => false,
														),

													
													),
												),
												'show_borders' => false,
											),
									    
										),
									),
									
									
									'header_msg_container' => array(
									    'type' => 'group',
									    'options' => array(
									    
											'msg_container_visibility' => array(
												'type' => 'multi-picker',
												'label' => false,
												'desc' => false,
												'picker' => array(
													'msg_container_switch' => array(
														'type'  => 'switch',
													    'value' => 'disabled',
													    'label' => esc_html__('Message Block', 'naslaan' ),
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
														'msg_container_margins' =>array(
														    'type'  => 'html',
														    'label' => esc_html__('Message Container Margins', 'naslaan' ),
														    'html'  => '',
														),
														'msg_container_margin_top' => array(
															'label' => '',
															'type' => 'short-text',
															'value' => '0',
															'desc' => esc_html__( 'top', 'naslaan' ),
														),
														'msg_container_margin_right' => array(
															'label' => '',
															'type' => 'short-text',
															'value' => '0',
															'desc' => esc_html__( 'right', 'naslaan' ),
														),
														'msg_container_margin_bottom' => array(
															'label' => '',
															'type' => 'short-text',
															'value' => '0',
															'desc' => esc_html__( 'bottom', 'naslaan' ),
														),
														'msg_container_margin_left' => array(
															'label' => '',
															'type' => 'short-text',
															'value' => '20',
															'desc' => esc_html__( 'left', 'naslaan' ),
														),
														'msg_container_margin_clearfix' =>array(
														    'type'  => 'html',
														    'label' => '',
														    'html'  => '<div class="wp-clearfix"></div>',
														),
														'msg_container_sepline' => array(
															'type' => 'multi-picker',
															'label' => false,
															'desc' => false,
															'picker' => array(
																'sepline_switch' => array(
																	'type'  => 'switch',
																    'value' => 'enabled',
																    'label' => esc_html__('Separate Line', 'naslaan' ),
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
																	'msg_container_sepline_color' => array(
																	    'type'  => 'rgba-color-picker',
																	    'value' => 'rgba(235,235,235,1)',
																	    'label' => esc_html__('Border Color', 'naslaan' )
																	),
						
																),
															),
															'show_borders' => false,
														),
														'msg_block_margins' =>array(
														    'type'  => 'html',
														    'label' => esc_html__('Message Block Margins', 'naslaan' ),
														    'html'  => '',
														),
														'msg_block_margin_right' => array(
															'label' => '',
															'type' => 'short-text',
															'value' => '0',
															'desc' => esc_html__( 'right', 'naslaan' ),
														),
														'msg_block_margin_left' => array(
															'label' => '',
															'type' => 'short-text',
															'value' => '20',
															'desc' => esc_html__( 'left', 'naslaan' ),
														),
														'msg_block_margin_clearfix' =>array(
														    'type'  => 'html',
														    'label' => '',
														    'html'  => '<div class="wp-clearfix"></div>',
														),
														'msg_block_paddings' =>array(
														    'type'  => 'html',
														    'label' => esc_html__('Message Block Paddings', 'naslaan' ),
														    'html'  => '',
														),
														'msg_block_padding_right' => array(
															'label' => '',
															'type' => 'short-text',
															'value' => '20',
															'desc' => esc_html__( 'right', 'naslaan' ),
														),
														'msg_block_padding_left' => array(
															'label' => '',
															'type' => 'short-text',
															'value' => '20',
															'desc' => esc_html__( 'left', 'naslaan' ),
														),
														'msg_block_padding_clearfix' =>array(
														    'type'  => 'html',
														    'label' => '',
														    'html'  => '<div class="wp-clearfix"></div>',
														),
														'msg_block_content' => array(
															'label' => esc_html__('Text Content', 'naslaan' ),
															'type' => 'text',
															'value' => 'Text Content',
														),
														'msg_block_url' => array(
															'label' => esc_html__('URL (Link)', 'naslaan' ),
															'type' => 'text',
															'value' => '',
															'desc' => esc_html__( 'Add link to button.', 'naslaan' ),
														),
														'msg_block_text' => array(
														    'type' => 'typography-v2',
														    'value' => array(
														        'family' => 'Lato',
														        'subset' => 'latin-ext',
														        'variation' => '300',
														        'size' => 16,
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
														    'label' => esc_html__('Text', 'naslaan' )
														),
														'msg_block_underline' => array(
														    'type'  => 'rgba-color-picker',
														    'value' => 'rgba(37,37,37,1)',
														    'label' => esc_html__('Message Underline Text', 'naslaan' )
														),
														'msg_block_background' => array(
														    'type'  => 'rgba-color-picker',
														    'value' => 'rgba(255,255,255,1)',
														    'label' => esc_html__('Message Block Background', 'naslaan' )
														),
														
														'msg_block_border' => array(
															'type' => 'multi-picker',
															'label' => false,
															'desc' => false,
															'picker' => array(
																'msg_block_border_switch' => array(
																	'type'  => 'switch',
																    'value' => 'enabled',
																    'label' => esc_html__('Message Block Border', 'naslaan' ),
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
							
																	'msg_block_border_weight' => array(
																		'label' => esc_html__('Border Weight', 'naslaan' ),
																		'type' => 'short-text',
																		'value' => '1',
																	),
																
																	'msg_block_border_color' => array(
																	    'type'  => 'rgba-color-picker',
																	    'value' => 'rgba(235,235,235,1)',
																	    'label' => esc_html__('Border Color', 'naslaan' )
																	),
																	'msg_block_border_color_hover' => array(
																	    'type'  => 'rgba-color-picker',
																	    'value' => 'rgba(235,235,235,1)',
																	    'label' => esc_html__('Border Hover Color', 'naslaan' )
																	),
						
																),
															),
															'show_borders' => false,
														),
														'msg_block_visibility' => array(
														    'type'  => 'checkboxes',
														    'value' => array(
														        'notebook' => false,
														        'tablet' => false,
														        'mobile' => false,
														    ),
														    'label' => esc_html__('Visibility', 'naslaan'),
														    'desc'  => esc_html__('Check to hide on device.', 'naslaan'),
														    'choices' => array(
														        'notebook' => esc_html__('Notebook (1200px)', 'naslaan'),
														        'tablet' => esc_html__('Tablet (992px)', 'naslaan'),
														        'mobile' => esc_html__('Mobile (768px)', 'naslaan'),
														    ),
														    'inline' => false,
														),
														
														
													),
												),
												'show_borders' => false,
											),
									    	
											
										),
									),
									
									'header_social_media_group' => array(
									    'type' => 'group',
									    'options' => array(
									    
											'header_social_media_picker' => array(
												'type' => 'multi-picker',
												'label' => false,
												'desc' => false,
												'picker' => array(
													'social_media_visibility' => array(
														'type'  => 'switch',
													    'value' => 'disabled',
													    'label' => esc_html__('Social Media', 'naslaan' ),
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
														'header_social_media_msg' =>array(
														    'type'  => 'html',
														    'label' => '',
														    'html'  => '',
														    'desc' => esc_html__( 'Navigate to "Header" => "Header Social Media" for another options.', 'naslaan' ),
														),
														'header_social_media_container_margins' =>array(
														    'type'  => 'html',
														    'label' => esc_html__('Social Media Container Margins', 'naslaan' ),
														    'html'  => '',
														),
														'header_social_media_container_margin_top' => array(
															'label' => '',
															'type' => 'short-text',
															'value' => '0',
															'desc' => esc_html__( 'top', 'naslaan' ),
														),
														'header_social_media_container_margin_right' => array(
															'label' => '',
															'type' => 'short-text',
															'value' => '0',
															'desc' => esc_html__( 'right', 'naslaan' ),
														),
														'header_social_media_container_margin_bottom' => array(
															'label' => '',
															'type' => 'short-text',
															'value' => '0',
															'desc' => esc_html__( 'bottom', 'naslaan' ),
														),
														'header_social_media_container_margin_left' => array(
															'label' => '',
															'type' => 'short-text',
															'value' => '20',
															'desc' => esc_html__( 'left', 'naslaan' ),
														),
														'header_social_media_container_margin_clearfix' =>array(
														    'type'  => 'html',
														    'label' => '',
														    'html'  => '<div class="wp-clearfix"></div>',
														),
														'header_social_media_btn_color' => array(
														    'type'  => 'rgba-color-picker',
														    'value' => 'rgba(255,255,255,1)',
														    'label' => esc_html__('Button Color', 'naslaan' )
														),
														'header_social_media_btn_hover_color' => array(
														    'type'  => 'rgba-color-picker',
														    'value' => 'rgba(255,255,255,1)',
														    'label' => esc_html__('Button Hover Color', 'naslaan' )
														),
														'header_social_media_btn_background' => array(
														    'type'  => 'rgba-color-picker',
														    'value' => 'rgba(79,45,127,1)',
														    'label' => esc_html__('Background Color', 'naslaan' )
														),
														'header_social_media_btn_background_hover' => array(
														    'type'  => 'rgba-color-picker',
														    'value' => 'rgba(222,0,46,1)',
														    'label' => esc_html__('Background Hover Color', 'naslaan' )
														),
														'header_social_media_tooltip_bg' => array(
														    'type'  => 'rgba-color-picker',
														    'value' => 'rgba(37,37,37,1)',
														    'label' => esc_html__('Tooltip Bakground', 'naslaan' )
														),
														'header_social_media_sepline' => array(
															'type' => 'multi-picker',
															'label' => false,
															'desc' => false,
															'picker' => array(
																'sepline_switch' => array(
																	'type'  => 'switch',
																    'value' => 'enabled',
																    'label' => esc_html__('Separate Line', 'naslaan' ),
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
																	'header_social_media_sepline_color' => array(
																	    'type'  => 'rgba-color-picker',
																	    'value' => 'rgba(235,235,235,1)',
																	    'label' => esc_html__('Border Color', 'naslaan' )
																	),
						
																),
															),
															'show_borders' => false,
														),
														
														'header_social_media_margins' =>array(
														    'type'  => 'html',
														    'label' => esc_html__('Social Media Buttons Margins', 'naslaan' ),
														    'html'  => '',
														),
														'header_social_media_margin_right' => array(
															'label' => '',
															'type' => 'short-text',
															'value' => '0',
															'desc' => esc_html__( 'right', 'naslaan' ),
														),
														'header_social_media_margin_left' => array(
															'label' => '',
															'type' => 'short-text',
															'value' => '20',
															'desc' => esc_html__( 'left', 'naslaan' ),
														),
														'header_social_media_margin_clearfix' =>array(
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
									
									'header_shopping_cart' => array(
									    'type' => 'group',
									    'options' => array(
									    
											'shopping_cart' => array(
												'type' => 'multi-picker',
												'label' => false,
												'desc' => false,
												'picker' => array(
													'shopping_cart_visibility' => array(
														'type'  => 'switch',
													    'value' => 'disabled',
													    'label' => esc_html__('Shopping Cart', 'naslaan' ),
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
									    
									    
														'shopping_cart_btn_container_margins' =>array(
														    'type'  => 'html',
														    'label' => esc_html__('Shopping Cart Container Margins', 'naslaan' ),
														    'html'  => '',
														),
														'shopping_cart_btn_container_margin_top' => array(
															'label' => '',
															'type' => 'short-text',
															'value' => '0',
															'desc' => esc_html__( 'top', 'naslaan' ),
														),
														'shopping_cart_btn_container_margin_right' => array(
															'label' => '',
															'type' => 'short-text',
															'value' => '0',
															'desc' => esc_html__( 'right', 'naslaan' ),
														),
														'shopping_cart_btn_container_margin_bottom' => array(
															'label' => '',
															'type' => 'short-text',
															'value' => '0',
															'desc' => esc_html__( 'bottom', 'naslaan' ),
														),
														'shopping_cart_btn_container_margin_left' => array(
															'label' => '',
															'type' => 'short-text',
															'value' => '20',
															'desc' => esc_html__( 'left', 'naslaan' ),
														),
														'shopping_cart_btn_container_margin_clearfix' =>array(
														    'type'  => 'html',
														    'label' => '',
														    'html'  => '<div class="wp-clearfix"></div>',
														),
														
														'shopping_cart_btn_sepline' => array(
															'type' => 'multi-picker',
															'label' => false,
															'desc' => false,
															'picker' => array(
																'sepline_switch' => array(
																	'type'  => 'switch',
																    'value' => 'enabled',
																    'label' => esc_html__('Separate Line', 'naslaan' ),
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
																	'shopping_cart_btn_sepline_color' => array(
																	    'type'  => 'rgba-color-picker',
																	    'value' => 'rgba(235,235,235,1)',
																	    'label' => esc_html__('Border Color', 'naslaan' )
																	),
						
																),
															),
															'show_borders' => false,
														),
														
														'shopping_cart_btn_margins' =>array(
														    'type'  => 'html',
														    'label' => esc_html__('Shopping Cart Button Margins', 'naslaan' ),
														    'html'  => '',
														),
														'shopping_cart_btn_margin_right' => array(
															'label' => '',
															'type' => 'short-text',
															'value' => '0',
															'desc' => esc_html__( 'right', 'naslaan' ),
														),
														'shopping_cart_btn_margin_left' => array(
															'label' => '',
															'type' => 'short-text',
															'value' => '20',
															'desc' => esc_html__( 'left', 'naslaan' ),
														),
														'shopping_cart_btn_margin_clearfix' =>array(
														    'type'  => 'html',
														    'label' => '',
														    'html'  => '<div class="wp-clearfix"></div>',
														),
														'shopping_cart_btn_padding_bottom' => array(
															'label' => esc_html__('Shopping Cart Button Padding', 'naslaan' ),
															'type' => 'short-text',
															'value' => '20',
															'desc' => esc_html__( 'bottom', 'naslaan' ),
														),
														'shopping_cart_btn_width' => array(
															'label' => esc_html__('Shopping Cart Button Width', 'naslaan' ),
															'type' => 'short-text',
															'value' => '40',
														),
														'shopping_cart_btn_color' => array(
														    'type'  => 'rgba-color-picker',
														    'value' => 'rgba(149,149,149,1)',
														    'label' => esc_html__('Shopping Cart Button Color', 'naslaan' )
														),
														'shopping_cart_btn_color_hover' => array(
														    'type'  => 'rgba-color-picker',
														    'value' => 'rgba(149,149,149,1)',
														    'label' => esc_html__('Shopping Cart Button Hover Color', 'naslaan' )
														),
														'shopping_cart_btn_background' => array(
														    'type'  => 'rgba-color-picker',
														    'value' => 'rgba(255,255,255,1)',
														    'label' => esc_html__('Shopping Cart Button Background', 'naslaan' )
														),
														'shopping_cart_btn_background_hover' => array(
														    'type'  => 'rgba-color-picker',
														    'value' => 'rgba(255,255,255,1)',
														    'label' => esc_html__('Shopping Cart Button Hover Background', 'naslaan' )
														),
														'shopping_cart_alternative' => array(
															'type' => 'multi-picker',
															'label' => false,
															'desc' => false,
															'picker' => array(
																'shopping_cart_alternative_switch' => array(
																	'type'  => 'switch',
																    'value' => 'disabled',
																    'label' => esc_html__('Shopping Cart Alternative Variant', 'naslaan' ),
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
																
																	'shopping_cart_btn_counter_color' => array(
																	    'type'  => 'rgba-color-picker',
																	    'value' => 'rgba(255,255,255,1)',
																	    'label' => esc_html__('Counter Color', 'naslaan' )
																	),
																	'shopping_cart_btn_counter_color_hover' => array(
																	    'type'  => 'rgba-color-picker',
																	    'value' => 'rgba(255,255,255,1)',
																	    'label' => esc_html__('Counter Hover Color', 'naslaan' )
																	),
																	'shopping_cart_btn_counter_bg' => array(
																	    'type'  => 'rgba-color-picker',
																	    'value' => 'rgba(79,45,127,1)',
																	    'label' => esc_html__('Counter Background', 'naslaan' )
																	),
																	'shopping_cart_btn_counter_bg_hover' => array(
																	    'type'  => 'rgba-color-picker',
																	    'value' => 'rgba(79,45,127,1)',
																	    'label' => esc_html__('Counter Hover Background', 'naslaan' )
																	),
																	
						
																),
															),
															'show_borders' => false,
														),
														'shopping_cart_button_border' => array(
															'type' => 'multi-picker',
															'label' => false,
															'desc' => false,
															'picker' => array(
																'shopping_cart_button_border_switch' => array(
																	'type'  => 'switch',
																    'value' => 'enabled',
																    'label' => esc_html__('Shopping Cart Button Border', 'naslaan' ),
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
							
																	'shopping_cart_border_weight' => array(
																		'label' => esc_html__('Border Weight', 'naslaan' ),
																		'type' => 'short-text',
																		'value' => '1',
																	),
																
																	'shopping_cart_border_color' => array(
																	    'type'  => 'rgba-color-picker',
																	    'value' => 'rgba(235,235,235,1)',
																	    'label' => esc_html__('Border Color', 'naslaan' )
																	),
																	'shopping_cart_border_color_hover' => array(
																	    'type'  => 'rgba-color-picker',
																	    'value' => 'rgba(235,235,235,1)',
																	    'label' => esc_html__('Border Hover Color', 'naslaan' )
																	),
						
																),
															),
															'show_borders' => false,
														),
														'shopping_cart_button_visibility' => array(
														    'type'  => 'checkboxes',
														    'value' => array(
														        'notebook' => false,
														        'tablet' => false,
														        'mobile' => false,
														    ),
														    'label' => esc_html__('Visibility', 'naslaan'),
														    'desc'  => esc_html__('Check to hide on device.', 'naslaan'),
														    'choices' => array(
														        'notebook' => esc_html__('Notebook (1200px)', 'naslaan'),
														        'tablet' => esc_html__('Tablet (992px)', 'naslaan'),
														        'mobile' => esc_html__('Mobile (768px)', 'naslaan'),
														    ),
														    'inline' => false,
														),
																							    
													),
												),
												'show_borders' => false,
											),
									    
										),
									),
									
									
									'header_wpml' => array(
									    'type' => 'group',
									    'options' => array(
									    
											'wpml_container_visibility' => array(
												'type' => 'multi-picker',
												'label' => false,
												'desc' => false,
												'picker' => array(
													'wpml_container_switch' => array(
														'type'  => 'switch',
													    'value' => 'disabled',
													    'label' => esc_html__('WPML Button', 'naslaan' ),
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
									    
									    
														'wpml_container_margins' =>array(
														    'type'  => 'html',
														    'label' => esc_html__('WPML Container Margins', 'naslaan' ),
														    'html'  => '',
														),
														'wpml_container_margin_top' => array(
															'label' => '',
															'type' => 'short-text',
															'value' => '0',
															'desc' => esc_html__( 'top', 'naslaan' ),
														),
														'wpml_container_margin_right' => array(
															'label' => '',
															'type' => 'short-text',
															'value' => '0',
															'desc' => esc_html__( 'right', 'naslaan' ),
														),
														'wpml_container_margin_bottom' => array(
															'label' => '',
															'type' => 'short-text',
															'value' => '0',
															'desc' => esc_html__( 'bottom', 'naslaan' ),
														),
														'wpml_container_margin_left' => array(
															'label' => '',
															'type' => 'short-text',
															'value' => '20',
															'desc' => esc_html__( 'left', 'naslaan' ),
														),
														'wpml_container_margin_clearfix' =>array(
														    'type'  => 'html',
														    'label' => '',
														    'html'  => '<div class="wp-clearfix"></div>',
														),
														
														'wpml_btn_sepline' => array(
															'type' => 'multi-picker',
															'label' => false,
															'desc' => false,
															'picker' => array(
																'sepline_switch' => array(
																	'type'  => 'switch',
																    'value' => 'enabled',
																    'label' => esc_html__('Separate Line', 'naslaan' ),
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
																	'wpml_btn_sepline_color' => array(
																	    'type'  => 'rgba-color-picker',
																	    'value' => 'rgba(235,235,235,1)',
																	    'label' => esc_html__('Border Color', 'naslaan' )
																	),
						
																),
															),
															'show_borders' => false,
														),
														'wpml_btn_width' => array(
															'label' => esc_html__('WPML Cart Button Width', 'naslaan' ),
															'type' => 'short-text',
															'value' => '77',
														),
														'wpml_btn_font' => array(
														    'type' => 'typography-v2',
														    'value' => array(
														        'family' => 'Lato',
														        'subset' => 'latin-ext',
														        'variation' => 'regular',
														        'size' => 11,
														        'letter-spacing' => 0,
														    ),
														    'components' => array(
														        'family'         => true,
														        'size'           => true,
														        'line-height'    => false,
														        'letter-spacing' => true,
														        'color'          => false,
														    ),
														    'label' => esc_html__('WPML Button Font', 'naslaan' )
														),
														'wpml_btn_color' => array(
														    'type'  => 'rgba-color-picker',
														    'value' => 'rgba(37,37,37,1)',
														    'label' => esc_html__('WPML Button Color', 'naslaan' )
														),
														'wpml_btn_color_hover' => array(
														    'type'  => 'rgba-color-picker',
														    'value' => 'rgba(37,37,37,1)',
														    'label' => esc_html__('WPML Button Hover Color', 'naslaan' )
														),
														'wpml_btn_visibility' => array(
														    'type'  => 'checkboxes',
														    'value' => array(
														        'notebook' => false,
														        'tablet' => false,
														        'mobile' => false,
														    ),
														    'label' => esc_html__('Visibility', 'naslaan'),
														    'desc'  => esc_html__('Check to hide on device.', 'naslaan'),
														    'choices' => array(
														        'notebook' => esc_html__('Notebook (1200px)', 'naslaan'),
														        'tablet' => esc_html__('Tablet (992px)', 'naslaan'),
														        'mobile' => esc_html__('Mobile (768px)', 'naslaan'),
														    ),
														    'inline' => false,
														),
														
									    
													),
												),
												'show_borders' => false,
											),

									    
										),
									),

												
												
												
												
												
												
											),
										),
										'show_borders' => false,
									),
	
								
								),
							),
	
						),
					),
					
				)
			)
		),
	);
