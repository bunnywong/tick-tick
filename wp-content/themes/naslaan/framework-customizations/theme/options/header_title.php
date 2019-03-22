<?php

	if ( ! defined( 'FW' ) ) {
		die( 'Forbidden' );
	}

	$options = array(
		array(
			'header_title' => array(
				'title' => esc_html__( 'Header Title', 'naslaan' ),
				'type' => 'tab',
				'options' => array(
				
					'header_title' => array(
						'title' => esc_html__( 'Title', 'naslaan' ),
						'type' => 'tab',
						'options' => array(
	
							'theme_options-box' => array(
								'title' => esc_html__( 'Title', 'naslaan' ),
								'type' => 'box',
								'options' => array(
								
									'title_variants' => array(
										'type' => 'multi-picker',
										'show_borders' => false,
										'label' => false,
										'desc' => false,
										'value' => array(
											'widget_variant' => 'left',
										),
										'picker' => array(
											'title_variant' => array(
												'type'  => 'radio',
											    'label' => esc_html__('Title Variants', 'naslaan' ),
											    'choices' => array(
											        'variant-1' => esc_html__('Variant 1', 'naslaan' ),
											    ),
											    'inline' => false,
											)
										),
										'choices' => array(
											'variant-1' => array(
													
												'header_title_padding_group' => array(
												    'type' => 'group',
												    'options' => array(
													
														'header_title_paddings' =>array(
														    'type'  => 'html',
														    'label' => esc_html__('Title Bar Paddings', 'naslaan' ),
														    'html'  => '',
														),
														'header_title_padding_top' => array(
															'label' => '',
															'type' => 'short-text',
															'value' => '230',
															'desc' => esc_html__( 'top', 'naslaan' ),
														),
														'header_title_padding_bottom' => array(
															'label' => '',
															'type' => 'short-text',
															'value' => '80',
															'desc' => esc_html__( 'bottom', 'naslaan' ),
														),
														'header_title_padding_clearfix' =>array(
														    'type'  => 'html',
														    'label' => '',
														    'html'  => '<div class="wp-clearfix"></div>',
														),
												
													),
												),
			
												'header_title_group' => array(
												    'type' => 'group',
												    'options' => array(
												    
														'header_title_visibility' => array(
															'type' => 'multi-picker',
															'label' => false,
															'desc' => false,
															'picker' => array(
																'header_title_switch' => array(
																	'type'  => 'switch',
																    'value' => 'enabled',
																    'label' => esc_html__('Title', 'naslaan' ),
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
							
																	'header_title' => array(
																	    'type' => 'typography-v2',
																	    'value' => array(
																	        'family' => 'Montserrat',
																	        'subset' => 'latin-ext',
																	        'variation' => '600',
																	        'size' => 45,
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
																	    'label' => esc_html__('Title Font', 'naslaan' )
																	),
																	'header_title_underline' => array(
																		'type'  => 'switch',
																	    'value' => 'disabled',
																	    'label' => esc_html__('Title Underline', 'naslaan' ),
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
															),
															'show_borders' => false,
														),
														
													),
												),
												
												
												'header_breadcrumb_group' => array(
												    'type' => 'group',
												    'options' => array(
												    
														'header_breadcrumb_visibility' => array(
															'type' => 'multi-picker',
															'label' => false,
															'desc' => false,
															'picker' => array(
																'header_breadcrumb_switch' => array(
																	'type'  => 'switch',
																    'value' => 'disabled',
																    'label' => esc_html__('Breadcrumb', 'naslaan' ),
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
					
																	'breadcrumb_paddings' =>array(
																	    'type'  => 'html',
																	    'label' => esc_html__('Breadcrumb Paddings', 'naslaan' ),
																	    'html'  => '',
																	),
																	'breadcrumb_padding_top' => array(
																		'label' => '',
																		'type' => 'short-text',
																		'value' => '25',
																		'desc' => esc_html__( 'top', 'naslaan' ),
																	),
																	'breadcrumb_padding_bottom' => array(
																		'label' => '',
																		'type' => 'short-text',
																		'value' => '25',
																		'desc' => esc_html__( 'bottom', 'naslaan' ),
																	),
																	'breadcrumb_padding_clearfix' =>array(
																	    'type'  => 'html',
																	    'label' => '',
																	    'html'  => '<div class="wp-clearfix"></div>',
																	),
																	'breadcrumb_bg_color' => array(
																	    'type'  => 'rgba-color-picker',
																	    'value' => 'rgba(250,250,250,1)',
																	    'label' => esc_html__('Breadcrumb Background Color', 'naslaan' )
																	),
																	'breadcrumb_font' => array(
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
																	    'label' => esc_html__('Breadcrumb Font', 'naslaan' )
																	),
																	
																	'breadcrumb_font_color' => array(
																	    'type'  => 'rgba-color-picker',
																	    'value' => 'rgba(37,37,37,1)',
																	    'label' => esc_html__('Breadcrumb Font Color', 'naslaan' )
																	),
																	
																	'breadcrumb_link_color' => array(
																	    'type'  => 'rgba-color-picker',
																	    'value' => 'rgba(222,0,46,1)',
																	    'label' => esc_html__('Breadcrumb Link Color', 'naslaan' )
																	),
																	
																	'breadcrumb_hover_link_color' => array(
																	    'type'  => 'rgba-color-picker',
																	    'value' => 'rgba(222,0,46,1)',
																	    'label' => esc_html__('Breadcrumb Hover Link Color', 'naslaan' )
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
									
								)
								
							),
	
						),
					),
					
					'header_background' => array(
						'title' => esc_html__( 'Background', 'naslaan' ),
						'type' => 'tab',
						'options' => array(
	
							'theme_options-box' => array(
								'title' => esc_html__( 'Background', 'naslaan' ),
								'type' => 'box',
								'options' => array(

									'header_background_group' => array(
									    'type' => 'group',
									    'options' => array(
		
											'header_background_choice' => array(
												'type' => 'multi-picker',
												'show_borders' => false,
												'label' => false,
												'desc' => false,
												'value' => array(
													'header_background_type' => 'background_color',
												),
												'picker' => array(
													'header_background_type' => array(
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
													
														'header_background_color' => array(
														    'type'  => 'color-picker',
														    'value' => '#363636',
														    'label' => esc_html__('Background Color', 'naslaan' )
														)
											
													),
													'background_image' => array(
													
														'header_background_color' => array(
														    'type'  => 'rgba-color-picker',
														    'value' => '#363636',
														    'label' => esc_html__('Background Color', 'naslaan'),
														),
														'header_background_settings' => array(
														    'type'  => 'select',
														    'value' => 'repeat_center',
														    'label' => esc_html__('Background Settings', 'naslaan' ),
														    'choices' => array(
														        'repeat_center' => esc_html__('Repeat, Position: center center', 'naslaan' ),
														        'repeat_top' => esc_html__('Repeat, Position: top center', 'naslaan' ),
														        'cover_center' => esc_html__('Cover, Position: center center', 'naslaan' ),
														        'cover_top' => esc_html__('Cover, Position: top center', 'naslaan' ),
														        'parallax_center' => esc_html__('Parallax, Position: center center', 'naslaan' ),
														        'parallax_top' => esc_html__('Parallax, Position: top center', 'naslaan' ),
														    ),
														    'no-validate' => false,
														),
														'header_background_image' => array(
															'label' => esc_html__( 'Background Image', 'naslaan' ),
															'type' => 'upload',
														),
														'animated_gradient' => array(
															'type' => 'multi-picker',
															'label' => false,
															'desc' => false,
															'picker' => array(
																'animated_gradient_switch' => array(
																	'type'  => 'switch',
																    'value' => 'disabled',
																    'label' => esc_html__('Animated Gradient', 'naslaan' ),
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
							
																	
																	'animated_gradient_color_1' => array(
																	    'type'  => 'color-picker',
																	    'value' => '#4f2d7f',
																	    'label' => esc_html__('Gradient Color #1', 'naslaan' )
																	),
																	'animated_gradient_color_2' => array(
																	    'type'  => 'color-picker',
																	    'value' => '#de002e',
																	    'label' => esc_html__('Gradient Color #2', 'naslaan' )
																	),
																	'animated_gradient_opacity' => array(
																		'label' => 'Gradient Opacity',
																		'type' => 'short-text',
																		'value' => '0.8',
																		'desc' => esc_html__( 'from 0.0 (fully transparent) to 1.0 (fully opaque)', 'naslaan' ),
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
									
								
								)
							),
	
						),
					),
					
				)
			)
		),
	);
	
	?>
