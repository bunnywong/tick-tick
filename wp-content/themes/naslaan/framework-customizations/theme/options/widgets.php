<?php if (!defined( 'FW' )) die('Forbidden');

	$options = array(
		array(
			'widgets' => array(
				'title' => esc_html__( 'Widgets', 'naslaan' ),
				'type' => 'tab',
				'options' => array(
					
					'latest_posts_widget' => array(
						'title' => esc_html__( 'Latest Posts Widget', 'naslaan' ),
						'type' => 'tab',
						'options' => array(
	
							'latest_posts_widget_options-box' => array(
								'title' => esc_html__( 'Latest Posts Widget', 'naslaan' ),
								'type' => 'box',
								'options' => array(

									'lpw_title' => array(
									    'type' => 'typography-v2',
									    'value' => array(
									        'family' => 'Lato',
									        'subset' => 'latin',
									        'variation' => 'regular',
									        'size' => 16,
									        'letter-spacing' => 0.3
									    ),
									    'components' => array(
									        'family'         => true,
									        'size'           => true,
									        'line-height'    => false,
									        'letter-spacing' => true,
									        'color'          => false
									    ),
									    'label' => esc_html__('Title Font', 'naslaan' )
									),
									'lpw_title_color' => array(
									    'type'  => 'rgba-color-picker',
									    'value' => 'rgba(79,45,127,1)',
									    'label' => esc_html__('Title Color', 'naslaan' )
									),
									'lpw_title_color_hover' => array(
									    'type'  => 'rgba-color-picker',
									    'value' => 'rgba(222,0,46,1)',
									    'label' => esc_html__('Title Hover Color', 'naslaan' )
									),
									
									'lpw_meta' => array(
									    'type' => 'typography-v2',
									    'value' => array(
									        'family' => 'Montserrat',
									        'subset' => 'latin',
									        'variation' => 'regular',
									        'size' => 11,
									        'letter-spacing' => 1
									    ),
									    'components' => array(
									        'family'         => true,
									        'size'           => true,
									        'line-height'    => false,
									        'letter-spacing' => true,
									        'color'          => false
									    ),
									    'label' => esc_html__('Meta Font', 'naslaan' )
									),
									'lpw_meta_color' => array(
									    'type'  => 'rgba-color-picker',
									    'value' => 'rgba(112,112,112,1)',
									    'label' => esc_html__('Meta Color', 'naslaan' )
									),
								
								)
							),
	
						),
					),
					
					'widget_newsletter_widget' => array(
						'title' => esc_html__( 'Newsletter Widget', 'naslaan' ),
						'type' => 'tab',
						'options' => array(
	
							'widget_newsletter_options-box' => array(
								'title' => esc_html__( 'Newsletter Widget', 'naslaan' ),
								'type' => 'box',
								'options' => array(
								
										'widget_newsletter_paddings_group' => array(
									    'type' => 'group',
									    'options' => array(

												'widget_newsletter_paddings' =>array(
												    'type'  => 'html',
												    'label' => esc_html__('Section Paddings', 'naslaan' ),
												    'html'  => '',
												),

												'widget_newsletter_padding_top' => array(
													'label' => '',
													'type' => 'short-text',
													'value' => '10',
													'desc' => esc_html__( 'top', 'naslaan' ),
												),
												'widget_newsletter_padding_right' => array(
													'label' => '',
													'type' => 'short-text',
													'value' => '20',
													'desc' => esc_html__( 'right', 'naslaan' ),
												),
												'widget_newsletter_padding_bottom' => array(
													'label' => '',
													'type' => 'short-text',
													'value' => '20',
													'desc' => esc_html__( 'bottom', 'naslaan' ),
												),
												'widget_newsletter_padding_left' => array(
													'label' => '',
													'type' => 'short-text',
													'value' => '20',
													'desc' => esc_html__( 'left', 'naslaan' ),
												),
												'widget_newsletterr_padding_clearfix' =>array(
												    'type'  => 'html',
												    'label' => '',
												    'html'  => '<div class="wp-clearfix"></div>',
												),
												
										),
										
										),
									
										'widget_newsletter_margins_group' => array(
									    'type' => 'group',
									    'options' => array(
												
												
												'widget_newsletter_margins' =>array(
												    'type'  => 'html',
												    'label' => esc_html__('Section Margins', 'naslaan' ),
												    'html'  => '',
												),
												'widget_newsletter_margin_top' => array(
													'label' => '',
													'type' => 'short-text',
													'value' => '0',
													'desc' => esc_html__( 'top', 'naslaan' ),
												),
												'widget_newsletter_margin_bottom' => array(
													'label' => '',
													'type' => 'short-text',
													'value' => '0',
													'desc' => esc_html__( 'bottom', 'naslaan' ),
												),
												'widget_newsletter_margin_clearfix' =>array(
												    'type'  => 'html',
												    'label' => '',
												    'html'  => '<div class="wp-clearfix"></div>',
												),
												
										),
										
										),
												
												'widget_newsletter_container_bg' => array(
												    'type'  => 'rgba-color-picker',
												    'value' => 'rgba(255,255,255,1)',
												    'label' => esc_html__('Container Background', 'naslaan'),
												),
												'widget_newsletter_container_border_color' => array(
												    'type'  => 'rgba-color-picker',
												    'value' => 'rgba(225,225,225,1)',
												    'label' => esc_html__('Border Color', 'naslaan'),
												),
												'widget_newsletter_btn_color' => array(
												    'type'  => 'rgba-color-picker',
												    'value' => 'rgba(112,112,112,1)',
												    'label' => esc_html__('Button Color', 'naslaan'),
												),
												'widget_newsletter_btn_hover_color' => array(
												    'type'  => 'rgba-color-picker',
												    'value' => 'rgba(255,255,255,1)',
												    'label' => esc_html__('Button Hover Color', 'naslaan'),
												),
												'widget_newsletter_btn_bg_color' => array(
												    'type'  => 'rgba-color-picker',
												    'value' => 'rgba(79,45,127,1)',
												    'label' => esc_html__('Button Background', 'naslaan'),
												),
												'widget_newsletter_btn_bg_hover_color' => array(
												    'type'  => 'rgba-color-picker',
												    'value' => 'rgba(222,0,46,1)',
												    'label' => esc_html__('Button Hover Background', 'naslaan'),
												),
												'widget_newsletter_title_font' => array(
												    'type' => 'typography-v2',
												    'value' => array(
												        'family' => 'Lato',
												        'subset' => 'latin',
												        'variation' => 'italic',
												        'size' => 20,
												        'letter-spacing' => 0,
												        'color' => '#252525',
												    ),
												    'components' => array(
												        'family'         => true,
												        'size'           => true,
												        'line-height'    => false,
												        'letter-spacing' => true,
												        'color'          => true
												    ),
												    'label' => esc_html__('Newsletter Title', 'naslaan'),
												),
												'widget_newsletter_description_font' => array(
													'type' => 'typography-v2',
												    'value' => array(
												        'family' => 'Lato',
												        'subset' => 'latin',
												        'variation' => 'regular',
												        'size' => 15,
												        'letter-spacing' => 0.3,
												        'color' => '#707070',
												    ),
												    'components' => array(
												        'family'         => true,
												        'size'           => true,
												        'line-height'    => false,
												        'letter-spacing' => true,
												        'color'          => true
												    ),
												    'label' => esc_html__('Newsletter Description', 'naslaan'),
												),
								
								)
							),
	
						),
					),
					
					'social_media_widget' => array(
						'title' => esc_html__( 'Widgets Social Media', 'naslaan' ),
						'type' => 'tab',
						'options' => array(
	
							'social_media_widget_options-box' => array(
								'title' => esc_html__( 'Widgets Social Media', 'naslaan' ),
								'type' => 'box',
								'options' => array(
								
									'group_widget_social_media' => array(
									    'type' => 'group',
									    'options' => array(
								
										'widget_social_media_type' => array(
										    'type'  => 'radio',
										    'value' => 'variant_7',
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
									
									
										
										'widget_social_media_forrst' => array(
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
										
										'widget_social_media_dribbble' => array(
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
										
										'widget_social_media_twitter' => array(
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
							
										'widget_social_media_flickr' => array(
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
										
										'widget_social_media_twitter2' => array(
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
										
										'widget_social_media_facebook' => array(
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
										
										'widget_social_media_skype' => array(
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
							
										'widget_social_media_digg' => array(
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
										
										'widget_social_media_google' => array(
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
										
										'widget_social_media_html5' => array(
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
										
										'widget_social_media_linkedin' => array(
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
							
										'widget_social_media_lastfm' => array(
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
										
										'widget_social_media_vimeo' => array(
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
										
										'widget_social_media_yahoo' => array(
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
										
										'widget_social_media_tumblr' => array(
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
							
										'widget_social_media_apple' => array(
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
										
										'widget_social_media_windows' => array(
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
										
										'widget_social_media_youtube' => array(
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
										
										'widget_social_media_delicious' => array(
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
							
										'widget_social_media_rss' => array(
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
										
										'widget_social_media_picasa' => array(
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
										
										'widget_social_media_deviantart' => array(
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
										
										'widget_social_media_whatsapp' => array(
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
							
										'widget_social_media_snapchat' => array(
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
										
										'widget_social_media_blogger' => array(
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
										
										'widget_social_media_wordpress' => array(
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
										
										'widget_social_media_amazon' => array(
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
							
										'widget_social_media_appstore' => array(
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
										
										'widget_social_media_paypal' => array(
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
										
										'widget_social_media_myspace' => array(
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
										
										'widget_social_media_dropbox' => array(
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
							
										'widget_social_media_windows8' => array(
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
										
										'widget_social_media_pinterest' => array(
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
										
										'widget_social_media_soundcloud' => array(
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
										
										'widget_social_media_google_drive' => array(
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
							
										'widget_social_media_android' => array(
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
										
										'widget_social_media_behance' => array(
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
										
										'widget_social_media_instagram' => array(
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
										
										'widget_social_media_ebay' => array(
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
							
										'widget_social_media_google_plus' => array(
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
										
										'widget_social_media_github' => array(
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
										
										'widget_social_media_stackoverflow' => array(
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
										
										'widget_social_media_spotify' => array(
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
							
										'widget_social_media_stumbleupon' => array(
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
										
										'widget_social_media_visa' => array(
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
										
										'widget_social_media_mastercard' => array(
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
										
										'widget_social_media_amex' => array(
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
							
										'widget_social_media_ios' => array(
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
										
										'widget_social_media_osx' => array(
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
										
										'widget_social_media_evernote' => array(
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
										
										'widget_social_media_yelp' => array(
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
							
										'widget_social_media_yelp2' => array(
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
										
										'widget_social_media_medium' => array(
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
										
										'widget_social_media_slack' => array(
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
										
										'widget_social_media_vine' => array(
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
							
										'widget_social_media_edge' => array(
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
										
										'widget_social_media_outlook' => array(
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
										
										'widget_social_media_pencilcase' => array(
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
										
										'widget_social_media_play' => array(
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
							
										'widget_social_media_icloud' => array(
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
										
										
										
										'widget_social_media_forrst_1' => array(
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
										
										'widget_social_media_dribbble_1' => array(
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
										
										'widget_social_media_twitter_1' => array(
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
							
										'widget_social_media_flickr_1' => array(
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
										
										'widget_social_media_twitter2_1' => array(
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
										
										'widget_social_media_facebook_1' => array(
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
										
										'widget_social_media_skype_1' => array(
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
							
										'widget_social_media_digg_1' => array(
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
										
										'widget_social_media_google_1' => array(
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
										
										'widget_social_media_html5_1' => array(
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
										
										'widget_social_media_linkedin_1' => array(
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
							
										'widget_social_media_lastfm_1' => array(
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
										
										'widget_social_media_vimeo_1' => array(
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
										
										'widget_social_media_yahoo_1' => array(
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
										
										'widget_social_media_tumblr_1' => array(
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
							
										'widget_social_media_apple_1' => array(
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
										
										'widget_social_media_windows_1' => array(
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
										
										'widget_social_media_youtube_1' => array(
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
										
										'widget_social_media_delicious_1' => array(
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
							
										'widget_social_media_rss_1' => array(
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
										
										'widget_social_media_picasa_1' => array(
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
										
										'widget_social_media_deviantart_1' => array(
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
										
										'widget_social_media_whatsapp_1' => array(
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
							
										'widget_social_media_snapchat_1' => array(
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
										
										'widget_social_media_blogger_1' => array(
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
										
										'widget_social_media_wordpress_1' => array(
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
										
										'widget_social_media_amazon_1' => array(
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
							
										'widget_social_media_appstore_1' => array(
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
										
										'widget_social_media_paypal_1' => array(
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
										
										'widget_social_media_myspace_1' => array(
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
										
										'widget_social_media_dropbox_1' => array(
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
							
										'widget_social_media_windows8_1' => array(
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
										
										'widget_social_media_pinterest_1' => array(
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
										
										'widget_social_media_soundcloud_1' => array(
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
										
										'widget_social_media_google_drive_1' => array(
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
							
										'widget_social_media_android_1' => array(
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
										
										'widget_social_media_behance_1' => array(
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
										
										'widget_social_media_instagram_1' => array(
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
										
										'widget_social_media_ebay_1' => array(
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
							
										'widget_social_media_google_plus_1' => array(
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
										
										'widget_social_media_github_1' => array(
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
										
										'widget_social_media_stackoverflow_1' => array(
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
										
										'widget_social_media_spotify_1' => array(
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
							
										'widget_social_media_stumbleupon_1' => array(
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
										
										'widget_social_media_visa_1' => array(
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
										
										'widget_social_media_mastercard_1' => array(
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
										
										'widget_social_media_amex_1' => array(
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
							
										'widget_social_media_ios_1' => array(
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
										
										'widget_social_media_osx_1' => array(
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
										
										'widget_social_media_evernote_1' => array(
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
										
										'widget_social_media_yelp_1' => array(
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
							
										'widget_social_media_yelp2_1' => array(
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
										
										'widget_social_media_medium_1' => array(
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
										
										'widget_social_media_slack_1' => array(
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
										
										'widget_social_media_vine_1' => array(
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
							
										'widget_social_media_edge_1' => array(
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
										
										'widget_social_media_outlook_1' => array(
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
										
										'widget_social_media_pencilcase_1' => array(
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
										
										'widget_social_media_play_1' => array(
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
							
										'widget_social_media_icloud_1' => array(
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

										'widget_social_media_btn_color' => array(
										    'type'  => 'rgba-color-picker',
										    'value' => 'rgba(112,112,112,1)',
										    'label' => esc_html__('Button Color', 'naslaan' )
										),
										'widget_social_media_btn_hover_color' => array(
										    'type'  => 'rgba-color-picker',
										    'value' => 'rgba(37,37,37,1)',
										    'label' => esc_html__('Button Hover Color', 'naslaan' )
										),
										'widget_social_media_btn_background' => array(
										    'type'  => 'rgba-color-picker',
										    'value' => 'rgba(255,255,255,1)',
										    'label' => esc_html__('Background Color', 'naslaan' )
										),
										'widget_social_media_btn_background_hover' => array(
										    'type'  => 'rgba-color-picker',
										    'value' => 'rgba(255,255,255,1)',
										    'label' => esc_html__('Background Hover Color', 'naslaan' )
										),
										'widget_social_media_btn_border' => array(
										    'type'  => 'rgba-color-picker',
										    'value' => 'rgba(235,235,235,1)',
										    'label' => esc_html__('Button Border Color', 'naslaan' )
										),
										'widget_social_media_btn_border_hover' => array(
										    'type'  => 'rgba-color-picker',
										    'value' => 'rgba(235,235,235,1)',
										    'label' => esc_html__('Button Border Hover', 'naslaan' )
										),
										'widget_social_media_tooltip_bg' => array(
										    'type'  => 'rgba-color-picker',
										    'value' => 'rgba(37,37,37,1)',
										    'label' => esc_html__('Tooltip Background', 'naslaan' )
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
