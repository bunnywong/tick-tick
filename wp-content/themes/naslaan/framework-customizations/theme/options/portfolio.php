<?php if (!defined( 'FW' )) die('Forbidden');

	$options = array(
		array(
			'portfolio' => array(
				'title' => esc_html__( 'Portfolio', 'naslaan' ),
				'type' => 'tab',
				'options' => array(
				
					'portfolio_post_options' => array(
						'title' => esc_html__( 'Post options', 'naslaan' ),
						'type' => 'tab',
						'options' => array(
	
							'portfolio_post-box' => array(
								'title' => esc_html__( 'Post options', 'naslaan' ),
								'type' => 'box',
								'options' => array(


									'portfolio_link_color' => array(
									    'type'  => 'rgba-color-picker',
									    'value' => 'rgba(222,0,46,1)',
									    'label' => esc_html__('Post Color', 'naslaan'),
									),
									'portfolio_link_hover_color' => array(
									    'type'  => 'rgba-color-picker',
									    'value' => 'rgba(79,45,127,1)',
									    'label' => esc_html__('Post Hover Color', 'naslaan'),
									),
									'portfolio_related_post_title_group' => array(
									    'type' => 'group',
									    'options' => array(

											'portfolio_related_post_title' => array(
											    'type' => 'typography-v2',
											    'value' => array(
											        'family' => 'Montserrat',
											        'subset' => 'latin',
											        'variation' => '700',
											        'size' => 18,
											        'letter-spacing' => -0.1,
											    ),
											    'components' => array(
											        'family'         => true,
											        'size'           => true,
											        'line-height'    => false,
											        'letter-spacing' => true,
											        'color'          => false
											    ),
											    'label' => esc_html__('Related Post Title Font', 'naslaan'),
											),
											'portfolio_related_post_title_color' => array(
											    'type'  => 'rgba-color-picker',
											    'value' => '#252525',
											    'label' => esc_html__('Title Color', 'naslaan'),
											),
											'portfolio_related_post_title_hover_color' => array(
											    'type'  => 'rgba-color-picker',
											    'value' => 'rgba(222,0,46,1)',
											    'label' => esc_html__('Title Hover Color', 'naslaan'),
											),
									    
									    ),
									    
									),
									'portfolio_related_post_meta' => array(
										'type' => 'multi-picker',
										'label' => false,
										'desc' => false,
										'picker' => array(
											'portfolio_related_post_switch' => array(
											    'type'  => 'switch',
											    'value' => 'disabled',
											    'label' => esc_html__('Related Post Meta', 'naslaan' ),
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
		
												'portfolio_related_post_meta_font' => array(
												    'type' => 'typography-v2',
												    'value' => array(
												        'family' => 'Montserrat',
												        'subset' => 'latin',
												        'variation' => '700',
												        'size' => 13,
												        'letter-spacing' => 1,
												    ),
												    'components' => array(
												        'family'         => true,
												        'size'           => true,
												        'line-height'    => false,
												        'letter-spacing' => true,
												        'color'          => false
												    ),
												    'label' => '',
												),
	
											),
										),
										'show_borders' => false,
									),
									'portfolio_related_post_img_replacement' =>array(
									    'type'  => 'switch',
									    'value' => 'enabled',
									    'label' => esc_html__('Image Replacement', 'naslaan' ),
									    'left-choice' => array(
									        'value' => 'disabled',
									        'label' => esc_html__('Disabled', 'naslaan' ),
									    ),
									    'right-choice' => array(
									        'value' => 'disabled',
									        'label' => esc_html__('Enabled', 'naslaan' ),
									    ),
									),
									'portfolio_post_navigation_btn_group' => array(
									    'type' => 'group',
									    'options' => array(
									    
											'portfolio_post_navigation_btn_font' => array(
											    'type' => 'typography-v2',
											    'value' => array(
											        'family' => 'Montserrat',
											        'subset' => 'latin',
											        'variation' => '600',
											        'size' => 14,
											        'letter-spacing' => 0,
											    ),
											    'components' => array(
											        'family'         => true,
											        'size'           => true,
											        'line-height'    => false,
											        'letter-spacing' => true,
											        'color'          => false
											    ),
											    'label' => esc_html__('Navigation Font', 'naslaan'),
											),
											'portfolio_post_navigation_btn_link_color' => array(
											    'type'  => 'rgba-color-picker',
											    'value' => 'rgba(149,149,149,1)',
											    'label' => esc_html__('Navigation Color', 'naslaan'),
											),
											'portfolio_post_navigation_btn_hover_link_color' => array(
											    'type'  => 'rgba-color-picker',
											    'value' => 'rgba(222,0,46,1)',
											    'label' => esc_html__('Navigation Hover Color', 'naslaan'),
											),
									    
									    ),
	   
									),
									'portfolio_post_thumb_group' => array(
									    'type' => 'group',
									    'options' => array(
									    
											'portfolio_post_gallery_image_size' => array(
											    'type'  => 'short-select',
											    'value' => 'default',
											    'label' => '',
											    'choices' => array(
											    	'default' => esc_html__('Default', 'naslaan'),
											        '4x3' => '4x3',
											        '3x2' => '3x2',
											        '16x9' => '16x9',
											        '1x1' => '1x1',
											        '3x4' => '3x4',
											        '2x3' => '2x3',
											    ),
											    'label' => esc_html__('Gallery Image Size', 'naslaan' ),
											    'no-validate' => false,
											),
											'portfolio_related_post_image_size' => array(
											    'type'  => 'short-select',
											    'value' => 'default',
											    'label' => '',
											    'choices' => array(
											    	'default' => esc_html__('Default', 'naslaan'),
											        '4x3' => '4x3',
											        '3x2' => '3x2',
											        '16x9' => '16x9',
											        '1x1' => '1x1',
											        '3x4' => '3x4',
											        '2x3' => '2x3',
											    ),
											    'label' => esc_html__('Related Post Image Size', 'naslaan' ),
											    'no-validate' => false,
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
