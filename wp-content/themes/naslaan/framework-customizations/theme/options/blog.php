<?php if (!defined( 'FW' )) die('Forbidden');

	$options = array(
		array(
			'blog' => array(
				'title' => esc_html__( 'Blog', 'naslaan' ),
				'type' => 'tab',
				'options' => array(
				
					'blog_options' => array(
						'title' => esc_html__( 'Blog options', 'naslaan' ),
						'type' => 'tab',
						'options' => array(
	
							'theme_options-box' => array(
								'title' => esc_html__( 'Blog options', 'naslaan' ),
								'type' => 'box',
								'options' => array(
									
									'blog_title' => array(
								        'type'  => 'text',
								        'value' => 'The Blog',
								        'label' => esc_html__('Blog Title', 'naslaan' ),
									),
									'blog_post_link_color' => array(
									    'type'  => 'rgba-color-picker',
									    'value' => 'rgba(79,45,127,1)',
									    'label' => esc_html__('Blog Post Color', 'naslaan'),
									),
									'blog_post_hover_color' => array(
									    'type'  => 'rgba-color-picker',
									    'value' => 'rgba(222,0,46,1)',
									    'label' => esc_html__('Blog Post Hover Color', 'naslaan'),
									),
									'blog_post_title' => array(
									    'type' => 'typography-v2',
									    'value' => array(
									        'family' => 'Montserrat',
									        'subset' => 'latin',
									        'variation' => '700',
									        'size' => 20,
									        'letter-spacing' => 0.4,
									        'color' => '#252525',
									    ),
									    'components' => array(
									        'family'         => true,
									        'size'           => true,
									        'line-height'    => false,
									        'letter-spacing' => true,
									        'color'          => true
									    ),
									    'label' => esc_html__('Blog Post Title Font', 'naslaan'),
									),
									'blog_post_title_link_color' => array(
									    'type'  => 'rgba-color-picker',
									    'value' => 'rgba(37,37,37,1)',
									    'label' => esc_html__('Title Link Color', 'naslaan'),
									),
									'blog_post_title_hover_link_color' => array(
									    'type'  => 'rgba-color-picker',
									    'value' => 'rgba(79,45,127,1)',
									    'label' => esc_html__('Title Hover Link Color', 'naslaan'),
									),
									'blog_post_meta_font' => array(
									    'type' => 'typography-v2',
									    'value' => array(
									        'family' => 'Lato',
									        'subset' => 'latin',
									        'variation' => '700',
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
									    'label' => esc_html__('Post Meta Font', 'naslaan'),
									),
									'more_btn_font' => array(
									    'type' => 'typography-v2',
									    'value' => array(
									        'family' => 'Montserrat',
									        'subset' => 'latin',
									        'variation' => '600',
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
									    'label' => esc_html__('Continue Button Font', 'naslaan'),
									),
									'more_btn_color' => array(
									    'type'  => 'rgba-color-picker',
									    'value' => 'rgba(37,37,37,1)',
									    'label' => esc_html__('Continue Button Color', 'naslaan'),
									),
									'more_btn_hover_color' => array(
									    'type'  => 'rgba-color-picker',
									    'value' => 'rgba(255,255,255,1)',
									    'label' => esc_html__('Continue Button Hover Color', 'naslaan'),
									),
									'more_btn_bg_color' => array(
									    'type'  => 'rgba-color-picker',
									    'value' => 'rgba(255,255,255,1)',
									    'label' => esc_html__('Continue Button Background', 'naslaan'),
									),
									'more_btn_bg_hover_color' => array(
									    'type'  => 'rgba-color-picker',
									    'value' => 'rgba(222,0,46,1)',
									    'label' => esc_html__('Continue Button Hover Background', 'naslaan'),
									),
									'more_btn_border_color' => array(
									    'type'  => 'rgba-color-picker',
									    'value' => 'rgba(225,225,225,1)',
									    'label' => esc_html__('Continue Button Border', 'naslaan'),
									),
									'more_btn_border_hover_color' => array(
									    'type'  => 'rgba-color-picker',
									    'value' => 'rgba(222,0,46,1)',
									    'label' => esc_html__('Continue Button Border Hover', 'naslaan'),
									),
									'thumbnail_overlay_group' => array(
									    'type' => 'group',
									    'options' => array(

											'thumbnail_overlay_bg' => array(
											    'type'  => 'rgba-color-picker',
											    'value' => 'rgba(255,255,255,0.3)',
											    'label' => esc_html__('Thumbnail Overlay Background', 'naslaan'),
											),
											'thumbnail_overlay_btn' => array(
											    'type'  => 'rgba-color-picker',
											    'value' => 'rgba(79,45,127,1)',
											    'label' => esc_html__('Thumbnail Button Color', 'naslaan'),
											),
											'thumbnail_overlay_btn_hover' => array(
											    'type'  => 'rgba-color-picker',
											    'value' => 'rgba(222,0,46,1)',
											    'label' => esc_html__('Thumbnail Button Hover Color', 'naslaan'),
											),
									    
									    ),
									    
									),
									'social_media_btn' =>array(
									    'type'  => 'switch',
									    'value' => 'disabled',
									    'label' => esc_html__('Social Media Buttons', 'naslaan' ),
									    'left-choice' => array(
									        'value' => 'disabled',
									        'label' => esc_html__('Disabled', 'naslaan' ),
									    ),
									    'right-choice' => array(
									        'value' => 'enabled',
									        'label' => esc_html__('Enabled', 'naslaan' ),
									    ),
									),
									'blog_post_date_group' => array(
									    'type' => 'group',
									    'options' => array(
									    
											'blog_post_date_font_m' => array(
											    'type' => 'typography-v2',
											    'value' => array(
											        'family' => 'Montserrat',
											        'subset' => 'latin',
											        'variation' => 'regular',
											        'size' => 17,
											        'letter-spacing' => 0,
											        'color' => '#ffffff',
											    ),
											    'components' => array(
											        'family'         => true,
											        'size'           => true,
											        'line-height'    => false,
											        'letter-spacing' => true,
											        'color'          => true,
											    ),
											    'label' => esc_html__('Date Month Font', 'naslaan'),
											),
											'blog_post_date_font_d' => array(
											    'type' => 'typography-v2',
											    'value' => array(
											        'family' => 'Montserrat',
											        'subset' => 'latin',
											        'variation' => 'regular',
											        'size' => 30,
											        'letter-spacing' => 0,
											        'color' => '#ffffff',
											    ),
											    'components' => array(
											        'family'         => true,
											        'size'           => true,
											        'line-height'    => false,
											        'letter-spacing' => true,
											        'color'          => true,
											    ),
											    'label' => esc_html__('Date Day Font', 'naslaan'),
											),
											'blog_post_date_bg' => array(
											    'type'  => 'rgba-color-picker',
											    'value' => 'rgba(222,0,46,1)',
											    'label' => esc_html__('Date Background', 'naslaan'),
											),
									    
									    ),
	   
									),
								
								)
							),
	
						),
					),
					
					'post_options' => array(
						'title' => esc_html__( 'Post options', 'naslaan' ),
						'type' => 'tab',
						'options' => array(
	
							'post_options-box' => array(
								'title' => esc_html__( 'Post options', 'naslaan' ),
								'type' => 'box',
								'options' => array(

									'post_link_color' => array(
									    'type'  => 'rgba-color-picker',
									    'value' => 'rgba(79,45,127,1)',
									    'label' => esc_html__('Post Color', 'naslaan'),
									),
									'post_link_hover_color' => array(
									    'type'  => 'rgba-color-picker',
									    'value' => 'rgba(222,0,46,1)',
									    'label' => esc_html__('Post Hover Color', 'naslaan'),
									),
									'post_meta_font' => array(
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
									    'label' => esc_html__('Post Meta Font', 'naslaan'),
									),
									'post_author_font' => array(
									    'type' => 'typography-v2',
									    'value' => array(
									        'family' => 'Montserrat',
									        'subset' => 'latin',
									        'variation' => 'regular',
									        'size' => 15,
									        'letter-spacing' => 1,
									    ),
									    'components' => array(
									        'family'         => true,
									        'size'           => true,
									        'line-height'    => false,
									        'letter-spacing' => true,
									        'color'          => false
									    ),
									    'label' => esc_html__('Author Font', 'naslaan'),
									),
									'post_navigation_btn_group' => array(
									    'type' => 'group',
									    'options' => array(
									    
											'post_navigation_btn_font' => array(
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
											    'label' => esc_html__('Navigation Font', 'naslaan'),
											),
											'post_navigation_btn_link_color' => array(
											    'type'  => 'rgba-color-picker',
											    'value' => 'rgba(149,149,149,1)',
											    'label' => esc_html__('Navigation Color', 'naslaan'),
											),
											'post_navigation_btn_hover_link_color' => array(
											    'type'  => 'rgba-color-picker',
											    'value' => 'rgba(222,0,46,1)',
											    'label' => esc_html__('Navigation Hover Color', 'naslaan'),
											),
									    
									    ),
	   
									),
								
								)
							),
	
						),
					),
					
					'related_post_options' => array(
						'title' => esc_html__( 'Related posts', 'naslaan' ),
						'type' => 'tab',
						'options' => array(
	
							'related_post-box' => array(
								'title' => esc_html__( 'Related posts', 'naslaan' ),
								'type' => 'box',
								'options' => array(

									'related_post_title_group' => array(
									    'type' => 'group',
									    'options' => array(

											'related_post_title' => array(
											    'type' => 'typography-v2',
											    'value' => array(
										        'family' => 'Montserrat',
										        'subset' => 'latin',
										        'variation' => '700',
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
											'related_post_title_color' => array(
											    'type'  => 'rgba-color-picker',
											    'value' => 'rgba(37,37,37,1)',
											    'label' => esc_html__('Title Color', 'naslaan'),
											),
											'related_post_title_hover_color' => array(
											    'type'  => 'rgba-color-picker',
											    'value' => 'rgba(222,0,46,1)',
											    'label' => esc_html__('Title Hover Color', 'naslaan'),
											),
									    
									    ),
									    
									),
									'related_post_meta' => array(
										'type' => 'multi-picker',
										'label' => false,
										'desc' => false,
										'picker' => array(
											'related_post_switch' => array(
											    'type'  => 'switch',
											    'value' => 'disabled',
											    'label' => esc_html__('Post Meta', 'naslaan' ),
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
		
												'related_post_meta_font' => array(
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
									'related_post_img_replacement' =>array(
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
									'related_post_excerpt' => array(
								        'type'  => 'short-text',
								        'value' => '10',
								        'label' => esc_html__('Excerpt', 'naslaan' ),
								        'desc' => esc_html__( 'Choose number of words for description.', 'naslaan' ),
									),
								
								)
							),
	
						),
					),
					
					'comments_options' => array(
						'title' => esc_html__( 'Comments options', 'naslaan' ),
						'type' => 'tab',
						'options' => array(
	
							'post_comment_options-box' => array(
								'title' => esc_html__( 'Comment options', 'naslaan' ),
								'type' => 'box',
								'options' => array(

									'comment_link_color' => array(
									    'type'  => 'rgba-color-picker',
									    'value' => 'rgba(79,45,127,1)',
									    'label' => esc_html__('Comments Color', 'naslaan'),
									),
									'comment_link_hover_color' => array(
									    'type'  => 'rgba-color-picker',
									    'value' => 'rgba(222,0,46,1)',
									    'label' => esc_html__('Comments Hover Color', 'naslaan'),
									),
									'comment_author_font' => array(
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
									    'label' => esc_html__('Comment Author Font', 'naslaan'),
									),
									'comment_reply_font' => array(
									    'type' => 'typography-v2',
									    'value' => array(
										        'family' => 'Montserrat',
										        'subset' => 'latin',
										        'variation' => '700',
										        'size' => 11,
										        'letter-spacing' => 0.3,
									    ),
									    'components' => array(
									        'family'         => true,
									        'size'           => true,
									        'line-height'    => false,
									        'letter-spacing' => true,
									        'color'          => false
									    ),
									    'label' => esc_html__('Reply Button Font', 'naslaan'),
									),
									'comment_reply_btn_color' => array(
									    'type'  => 'rgba-color-picker',
									    'value' => 'rgba(79,45,127,1)',
									    'label' => esc_html__('Reply Button Color', 'naslaan'),
									),
									'comment_reply_btn_hover_color' => array(
									    'type'  => 'rgba-color-picker',
									    'value' => 'rgba(222,0,46,1)',
									    'label' => esc_html__('Reply Button Hover Color', 'naslaan'),
									),
									'comment_form_label_font' => array(
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
									    'label' => esc_html__('Form Label Font', 'naslaan'),
									),
									'comment_form_btn_group' => array(
									    'type' => 'group',
									    'options' => array(

											'comment_form_btn_text' => array(
											    'type' => 'typography-v2',
											    'value' => array(
										        'family' => 'Montserrat',
										        'subset' => 'latin',
										        'variation' => '700',
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
											    'label' => esc_html__('Button Text', 'naslaan' )
											),
											'comment_form_btn_color' => array(
											    'type'  => 'rgba-color-picker',
											    'value' => 'rgba(37,37,37,1)',
											    'label' => esc_html__('Button Text Color', 'naslaan' )
											),
											'comment_form_btn_color_hover' => array(
											    'type'  => 'rgba-color-picker',
											    'value' => 'rgba(255,255,255,1)',
											    'label' => esc_html__('Button Text Hover Color', 'naslaan' )
											),
											'comment_form_btn_background_color' => array(
											    'type'  => 'rgba-color-picker',
											    'value' => 'rgba(255,255,255,1)',
											    'label' => esc_html__('Button Color', 'naslaan' )
											),
											'comment_form_btn_background_color_hover' => array(
											    'type'  => 'rgba-color-picker',
											    'value' => 'rgba(222,0,46,1)',
											    'label' => esc_html__('Button Hover Color', 'naslaan' )
											),
											'comment_form_btn_border_color' => array(
											    'type'  => 'rgba-color-picker',
											    'value' => 'rgba(235,235,235,1)',
											    'label' => esc_html__('Button Border Color', 'naslaan' )
											),
											'comment_form_btn_border_color_hover' => array(
											    'type'  => 'rgba-color-picker',
											    'value' => 'rgba(222,0,46,1)',
											    'label' => esc_html__('Button Border Hover Color', 'naslaan' )
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
