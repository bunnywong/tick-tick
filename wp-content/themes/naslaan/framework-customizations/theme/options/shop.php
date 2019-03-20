<?php if (!defined( 'FW' )) die('Forbidden');

	$options = array(
		array(
			'shop' => array(
				'title' => esc_html__( 'Shop', 'naslaan' ),
				'type' => 'tab',
				'options' => array(
				
					'shop_options' => array(
						'title' => esc_html__( 'Shop options', 'naslaan' ),
						'type' => 'tab',
						'options' => array(
	
							'shop_options-box' => array(
								'title' => esc_html__( 'Shop options', 'naslaan' ),
								'type' => 'box',
								'options' => array(

									'shop_title' => array(
								        'type'  => 'text',
								        'value' => 'Shop',
								        'label' => esc_html__('Shop Title', 'naslaan' ),
									),
									'shop_products_per_row' => array(
									    'type'  => 'short-select',
									    'value' => '3',
									    'label' => '',
									    'choices' => array(
									    	'1' => '1',
									        '2' => '2',
									        '3' => '3',
									        '4' => '4',
									        '5' => '5',
									        '6' => '6',
									    ),
									    'label' => esc_html__('Shop Columns', 'naslaan' ),
									    'no-validate' => false,
									),
									'shop_products_per_page' => array(
								        'type'  => 'short-text',
								        'value' => '12',
								        'label' => esc_html__('Products Per Page', 'naslaan' ),
									),
									'shop_price_font' => array(
									    'type' => 'typography-v2',
									    'value' => array(
									        'family' => 'Lato',
									        'subset' => 'latin',
									        'variation' => '700',
									        'letter-spacing' => 0,
									        'color' => '#4f2d7f',
									    ),
									    'components' => array(
									        'family'         => true,
									        'size'           => false,
									        'line-height'    => false,
									        'letter-spacing' => true,
									        'color'          => true
									    ),
									    'label' => esc_html__('Price Font', 'naslaan'),
									),
									'shop_rating_color' => array(
									    'type'  => 'rgba-color-picker',
									    'value' => 'rgba(248,196,0,1)',
									    'label' => esc_html__('Rating Color', 'naslaan'),
									),
									'shop_btn_group' => array(
									    'type' => 'group',
									    'options' => array(

											'shop_btn_text' => array(
											    'type' => 'typography-v2',
											    'value' => array(
											        'family' => 'Montserrat',
											        'subset' => 'latin',
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
											'shop_btn_color' => array(
											    'type'  => 'rgba-color-picker',
											    'value' => 'rgba(37,37,37,1)',
											    'label' => esc_html__('Button Text Color', 'naslaan' )
											),
											'shop_btn_color_hover' => array(
											    'type'  => 'rgba-color-picker',
											    'value' => 'rgba(255,255,255,1)',
											    'label' => esc_html__('Button Text Hover Color', 'naslaan' )
											),
											'shop_btn_background_color' => array(
											    'type'  => 'rgba-color-picker',
											    'value' => 'rgba(255,255,255,1)',
											    'label' => esc_html__('Button Color', 'naslaan' )
											),
											'shop_btn_background_color_hover' => array(
											    'type'  => 'rgba-color-picker',
											    'value' => 'rgba(222,0,46,1)',
											    'label' => esc_html__('Button Hover Color', 'naslaan' )
											),
											'shop_btn_border_color' => array(
											    'type'  => 'rgba-color-picker',
											    'value' => 'rgba(225,225,225,1)',
											    'label' => esc_html__('Button Border', 'naslaan' )
											),
											'shop_btn_border_color_hover' => array(
											    'type'  => 'rgba-color-picker',
											    'value' => 'rgba(222,0,46,1)',
											    'label' => esc_html__('Button Hover Border', 'naslaan' )
											),
											'shop_btn_overlay_effect' =>array(
											    'type'  => 'switch',
											    'value' => 'enabled',
											    'label' => esc_html__('Button Overlay Effect', 'naslaan' ),
											    'left-choice' => array(
											        'value' => 'disabled',
											        'label' => esc_html__('Disabled', 'naslaan' ),
											    ),
											    'right-choice' => array(
											        'value' => 'enabled',
											        'label' => esc_html__('Enabled', 'naslaan' ),
											    ),
											),
																				    
									    ),
									    
									),
									'shop_alt_btn_group' => array(
									    'type' => 'group',
									    'options' => array(

											'alt_shop_btn_color' => array(
											    'type'  => 'rgba-color-picker',
											    'value' => 'rgba(37,37,37,1)',
											    'label' => esc_html__('Alt. Button Text Color', 'naslaan' )
											),
											'alt_shop_btn_color_hover' => array(
											    'type'  => 'rgba-color-picker',
											    'value' => 'rgba(255,255,255,1)',
											    'label' => esc_html__('Alt. Button Text Hover Color', 'naslaan' )
											),
											'alt_shop_btn_background_color' => array(
											    'type'  => 'rgba-color-picker',
											    'value' => 'rgba(255,255,255,1)',
											    'label' => esc_html__('Alt. Button Color', 'naslaan' )
											),
											'alt_shop_btn_background_color_hover' => array(
											    'type'  => 'rgba-color-picker',
											    'value' => 'rgba(79,45,127,1)',
											    'label' => esc_html__('Alt. Button Hover Color', 'naslaan' )
											),
											'alt_shop_btn_border_color' => array(
											    'type'  => 'rgba-color-picker',
											    'value' => 'rgba(225,225,225,1)',
											    'label' => esc_html__('Alt. Button Border', 'naslaan' )
											),
											'alt_shop_btn_border_color_hover' => array(
											    'type'  => 'rgba-color-picker',
											    'value' => 'rgba(79,45,127,1)',
											    'label' => esc_html__('Alt. Button Hover Border', 'naslaan' )
											),
											
									    ),
									    
									),
									'shop_sale_badge' => array(
									    'type' => 'group',
									    'options' => array(

											'shop_sale_color' => array(
											    'type'  => 'rgba-color-picker',
											    'value' => 'rgba(124,201,23,1)',
											    'label' => __('"Sale" Badge Color', 'naslaan'),
											),
											'shop_sale_font' => array(
											    'type' => 'typography-v2',
											    'value' => array(
											        'family' => 'Lato',
											        'subset' => 'latin',
											        'variation' => '700',
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
											    'label' => __('"Sale" Badge Font', 'naslaan'),
											),
									    
									    ),
									    
									),
									'shop_form_group' => array(
									    'type' => 'group',
									    'options' => array(

											'shop_form_label_font' => array(
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
									    
									    ),
									    
									),
								
								)
							),
	
						),
					),
					
					'shopping_cart_options' => array(
						'title' => esc_html__( 'Shopping Cart', 'naslaan' ),
						'type' => 'tab',
						'options' => array(
	
							'shopping_cart-box' => array(
								'title' => esc_html__( 'Shopping Cart Options', 'naslaan' ),
								'type' => 'box',
								'options' => array(

									'shopping_cart_btn_group' => array(
									    'type' => 'group',
									    'options' => array(

											'shopping_cart_btn_text' => array(
											    'type' => 'typography-v2',
											    'value' => array(
											        'family' => 'Montserrat',
											        'subset' => 'latin',
											        'variation' => '700',
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
											'shopping_cart_btn_color' => array(
											    'type'  => 'rgba-color-picker',
											    'value' => 'rgba(255,255,255,1)',
											    'label' => esc_html__('Button Text Color', 'naslaan' )
											),
											'shopping_cart_btn_color_hover' => array(
											    'type'  => 'rgba-color-picker',
											    'value' => 'rgba(255,255,255,1)',
											    'label' => esc_html__('Button Text Hover Color', 'naslaan' )
											),
											'shopping_cart_btn_background_color' => array(
											    'type'  => 'rgba-color-picker',
											    'value' => 'rgba(79,45,127,1)',
											    'label' => esc_html__('Button Color', 'naslaan' )
											),
											'shopping_cart_btn_background_color_hover' => array(
											    'type'  => 'rgba-color-picker',
											    'value' => 'rgba(37,37,37,1)',
											    'label' => esc_html__('Button Hover Color', 'naslaan' )
											),
											'shopping_cart_btn_border_color' => array(
											    'type'  => 'rgba-color-picker',
											    'value' => 'rgba(79,45,127,1)',
											    'label' => esc_html__('Button Border', 'naslaan' )
											),
											'shopping_cart_btn_border_color_hover' => array(
											    'type'  => 'rgba-color-picker',
											    'value' => 'rgba(37,37,37,1)',
											    'label' => esc_html__('Button Hover Border', 'naslaan' )
											),
											'shopping_cart_btn_radius' => array(
												'label' => esc_html__('Button Radius', 'naslaan' ),
												'type' => 'short-text',
												'value' => '0',
												'desc' => esc_html__( 'px', 'naslaan' ),
											),
											'shopping_cart_btn_overlay_effect' =>array(
											    'type'  => 'switch',
											    'value' => 'enabled',
											    'label' => esc_html__('Button Overlay Effect', 'naslaan' ),
											    'left-choice' => array(
											        'value' => 'disabled',
											        'label' => esc_html__('Disabled', 'naslaan' ),
											    ),
											    'right-choice' => array(
											        'value' => 'enabled',
											        'label' => esc_html__('Enabled', 'naslaan' ),
											    ),
											),
																				    
									    ),
									    
									),
									'shopping_cart_alt_btn_group' => array(
									    'type' => 'group',
									    'options' => array(

											'alt_shopping_cart_btn_color' => array(
											    'type'  => 'rgba-color-picker',
											    'value' => 'rgba(255,255,255,1)',
											    'label' => esc_html__('Alt. Button Text Color', 'naslaan' )
											),
											'alt_shopping_cart_btn_color_hover' => array(
											    'type'  => 'rgba-color-picker',
											    'value' => 'rgba(255,255,255,1)',
											    'label' => esc_html__('Alt. Button Text Hover Color', 'naslaan' )
											),
											'alt_shopping_cart_btn_background_color' => array(
											    'type'  => 'rgba-color-picker',
											    'value' => 'rgba(222,0,46,1)',
											    'label' => esc_html__('Alt. Button Color', 'naslaan' )
											),
											'alt_shopping_cart_btn_background_color_hover' => array(
											    'type'  => 'rgba-color-picker',
											    'value' => 'rgba(37,37,37,1)',
											    'label' => esc_html__('Alt. Button Hover Color', 'naslaan' )
											),
											'alt_shopping_cart_btn_border_color' => array(
											    'type'  => 'rgba-color-picker',
											    'value' => 'rgba(222,0,46,1)',
											    'label' => esc_html__('Alt. Button Border', 'naslaan' )
											),
											'alt_shopping_cart_btn_border_color_hover' => array(
											    'type'  => 'rgba-color-picker',
											    'value' => 'rgba(37,37,37,1)',
											    'label' => esc_html__('Alt. Button Hover Border', 'naslaan' )
											),
											'alt_shopping_cart_btn_radius' => array(
												'label' => esc_html__('Button Radius', 'naslaan' ),
												'type' => 'short-text',
												'value' => '0',
												'desc' => esc_html__( 'px', 'naslaan' ),
											),
											
									    ),
									    
									),
									'shopping_cart_dropdown_border' => array(
										'type' => 'multi-picker',
										'label' => false,
										'desc' => false,
										'picker' => array(
											'shopping_cart_dropdown_border_switch' => array(
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
												'shopping_cart_dropdown_border_color' => array(
												    'type'  => 'rgba-color-picker',
												    'value' => 'rgba(222,0,46,1)',
												    'label' => esc_html__('Border Color', 'naslaan' )
												),
	
											),
										),
										'show_borders' => false,
									),
								
								)
							),
	
						),
					),
					
					'product_catalog_options' => array(
						'title' => esc_html__( 'Catalog options', 'naslaan' ),
						'type' => 'tab',
						'options' => array(
	
							'product_catalog-box' => array(
								'title' => esc_html__( 'Catalog options', 'naslaan' ),
								'type' => 'box',
								'options' => array(
								
									'product_catalog_item_group' => array(
									    'type' => 'group',
									    'options' => array(

											'product_catalog_title_font' => array(
											    'type' => 'typography-v2',
											    'value' => array(
											        'family' => 'Lato',
											        'subset' => 'latin',
											        'variation' => 'regular',
											        'size' => 18,
											        'letter-spacing' => -0.3,
											        'color' => '#252525',
											    ),
											    'components' => array(
											        'family'         => true,
											        'size'           => true,
											        'line-height'    => false,
											        'letter-spacing' => true,
											        'color'          => true
											    ),
											    'label' => esc_html__('Product Title', 'naslaan'),
											),
											'product_catalog_item_border' => array(
												'type' => 'multi-picker',
												'label' => false,
												'desc' => false,
												'picker' => array(
													'product_category_item_switch' => array(
														'type'  => 'switch',
													    'value' => 'enabled',
													    'label' => esc_html__('Product Border', 'naslaan' ),
													    'left-choice' => array(
													        'value' => 'disabled',
													        'label' => esc_html__('Disabled', 'naslaan' ),
													    ),
													    'right-choice' => array(
													        'value' => 'enabled',
													        'label' => esc_html__('Enabled', 'naslaan' ),
													    ),
													)
												),
												'choices' => array(
													'enabled' => array(
				
														'product_catalog_item_border_weight' => array(
															'label' => esc_html__('Border Weight', 'naslaan' ),
															'type' => 'short-text',
															'value' => '1',
														),
														'product_catalog_item_border_color' => array(
														    'type'  => 'rgba-color-picker',
														    'value' => 'rgba(0,0,0,0.1)',
														    'label' => esc_html__('Border Color', 'naslaan' )
														),
			
													),
												),
												'show_borders' => false,
											),
									    
									    ),
									    
									),
									'product_category_item_group' => array(
									    'type' => 'group',
									    'options' => array(


											'product_category_title_font' => array(
											    'type' => 'typography-v2',
											    'value' => array(
											        'family' => 'Lato',
											        'subset' => 'latin',
											        'variation' => 'regular',
											        'size' => 20,
											        'letter-spacing' => -0.3,
											    ),
											    'components' => array(
											        'family'         => true,
											        'size'           => true,
											        'line-height'    => false,
											        'letter-spacing' => true,
											        'color'          => false
											    ),
											    'label' => esc_html__('Category Title Font', 'naslaan'),
											),
											'product_category_counter_font' => array(
											    'type' => 'typography-v2',
											    'value' => array(
											        'family' => 'Lato',
											        'subset' => 'latin',
											        'variation' => 'regular',
											        'size' => 30,
											        'letter-spacing' => 0,
											    ),
											    'components' => array(
											        'family'         => true,
											        'size'           => true,
											        'line-height'    => false,
											        'letter-spacing' => true,
											        'color'          => false
											    ),
											    'label' => esc_html__('Category Counter Font', 'naslaan'),
											),
											'product_category_item_color' => array(
											    'type'  => 'rgba-color-picker',
											    'value' => 'rgba(79,45,127,1)',
											    'label' => esc_html__('Category Item Color', 'naslaan'),
											),
											'product_category_item_hover_color' => array(
											    'type'  => 'rgba-color-picker',
											    'value' => 'rgba(222,0,46,1)',
											    'label' => esc_html__('Category Item Hover Color', 'naslaan'),
											),
											'product_category_item_border' => array(
												'type' => 'multi-picker',
												'label' => false,
												'desc' => false,
												'picker' => array(
													'product_category_item_switch' => array(
														'type'  => 'switch',
													    'value' => 'disabled',
													    'label' => esc_html__('Category Border', 'naslaan' ),
													    'left-choice' => array(
													        'value' => 'disabled',
													        'label' => esc_html__('Disabled', 'naslaan' ),
													    ),
													    'right-choice' => array(
													        'value' => 'enabled',
													        'label' => esc_html__('Enabled', 'naslaan' ),
													    ),
													)
												),
												'choices' => array(
													'enabled' => array(
				
														'product_category_item_border_weight' => array(
															'label' => esc_html__('Border Weight', 'naslaan' ),
															'type' => 'short-text',
															'value' => '1',
														),
														'product_category_item_border_color' => array(
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

								
								)
							),
	
						),
					),
					
					'product_post_options' => array(
						'title' => esc_html__( 'Product options', 'naslaan' ),
						'type' => 'tab',
						'options' => array(
	
							'product_post-box' => array(
								'title' => esc_html__( 'Product options', 'naslaan' ),
								'type' => 'box',
								'options' => array(

									'product_post_title_font' => array(
									    'type' => 'typography-v2',
									    'value' => array(
									        'family' => 'Montserrat',
									        'subset' => 'latin',
									        'variation' => '700',
									        'size' => 30,
									        'letter-spacing' => -0.3,
									        'color' => '#252525',
									    ),
									    'components' => array(
									        'family'         => true,
									        'size'           => true,
									        'line-height'    => false,
									        'letter-spacing' => true,
									        'color'          => true
									    ),
									    'label' => esc_html__('Product Title', 'naslaan'),
									),
									'product_post_heading_font' => array(
									    'type' => 'typography-v2',
									    'value' => array(
									        'family' => 'Montserrat',
									        'subset' => 'latin',
									        'variation' => '700',
									        'size' => 22,
									        'letter-spacing' => -0.3,
									        'color' => '#252525',
									    ),
									    'components' => array(
									        'family'         => true,
									        'size'           => true,
									        'line-height'    => false,
									        'letter-spacing' => true,
									        'color'          => true
									    ),
									    'label' => esc_html__('Heading Font', 'naslaan'),
									),
									
									'product_post_tab_group' => array(
									    'type' => 'group',
									    'options' => array(


											'product_post_tab_btn_font' => array(
											    'type' => 'typography-v2',
											    'value' => array(
											        'family' => 'Lato',
											        'subset' => 'latin',
											        'variation' => '700',
											        'size' => 15,
											        'letter-spacing' => 0,
											    ),
											    'components' => array(
											        'family'         => true,
											        'size'           => true,
											        'line-height'    => false,
											        'letter-spacing' => true,
											        'color'          => false
											    ),
											    'label' => esc_html__('Tab Button Font', 'naslaan'),
											),
											'product_post_tab_btn_color' => array(
											    'type'  => 'rgba-color-picker',
											    'value' => 'rgba(37,37,37,1)',
											    'label' => esc_html__('Button Font Color', 'naslaan'),
											),
											'product_post_tab_btn_active_color' => array(
											    'type'  => 'rgba-color-picker',
											    'value' => 'rgba(79,45,127,1)',
											    'label' => esc_html__('Button Font Active Color', 'naslaan'),
											),
																				    
									    ),
									    
									),
									
									'product_post_review_author_group' => array(
									    'type' => 'group',
									    'options' => array(


											'product_post_review_author_font' => array(
											    'type' => 'typography-v2',
											    'value' => array(
											        'family' => 'Lato',
											        'subset' => 'latin',
											        'variation' => 'regular',
											        'size' => 15,
											        'letter-spacing' => 0,
											        'color' => '#5f408a',
											    ),
											    'components' => array(
											        'family'         => true,
											        'size'           => true,
											        'line-height'    => false,
											        'letter-spacing' => true,
											        'color'          => true
											    ),
											    'label' => esc_html__('Review Author Font', 'naslaan'),
											),
											
									    
									    ),
									    
									),
								
								)
							),
	
						),
					),
					
					'shop_checkout_options' => array(
						'title' => esc_html__( 'Checkout options', 'naslaan' ),
						'type' => 'tab',
						'options' => array(
	
							'shop_checkout-box' => array(
								'title' => esc_html__( 'Checkout options', 'naslaan' ),
								'type' => 'box',
								'options' => array(

									'shop_checkout_heading_font' => array(
									    'type' => 'typography-v2',
									    'value' => array(
									        'family' => 'Montserrat',
									        'subset' => 'latin',
									        'variation' => 'regular',
									        'size' => 22,
									        'letter-spacing' => -0.3,
									        'color' => '#252525',
									    ),
									    'components' => array(
									        'family'         => true,
									        'size'           => true,
									        'line-height'    => false,
									        'letter-spacing' => true,
									        'color'          => true
									    ),
									    'label' => esc_html__('Page Headings', 'naslaan'),
									),
								
								)
							),
	
						),
					),
					
					'shop_cart_options' => array(
						'title' => esc_html__( 'Cart options', 'naslaan' ),
						'type' => 'tab',
						'options' => array(
	
							'shop_cart-box' => array(
								'title' => esc_html__( 'Cart options', 'naslaan' ),
								'type' => 'box',
								'options' => array(

									'shop_cart_heading_font' => array(
									    'type' => 'typography-v2',
									    'value' => array(
									        'family' => 'Montserrat',
									        'subset' => 'latin',
									        'variation' => 'regular',
									        'size' => 22,
									        'letter-spacing' => -0.3,
									        'color' => '#252525',
									    ),
									    'components' => array(
									        'family'         => true,
									        'size'           => true,
									        'line-height'    => false,
									        'letter-spacing' => true,
									        'color'          => true
									    ),
									    'label' => esc_html__('Page Headings', 'naslaan'),
									),
									
									'shop_cart_remove_btn_group' => array(
									    'type' => 'group',
									    'options' => array(

											'shop_cart_remove_btn' => array(
											    'type'  => 'rgba-color-picker',
											    'value' => 'rgba(79,45,127,1)',
											    'label' => esc_html__('Remove Button', 'naslaan'),
											),
											'shop_cart_remove_btn_hover' => array(
											    'type'  => 'rgba-color-picker',
											    'value' => 'rgba(222,0,46,1)',
											    'label' => esc_html__('Remove Button Hover', 'naslaan'),
											),
									    
									    ),
									    
									),
									
									'shop_cart_product_title' => array(
									    'type' => 'typography-v2',
									    'value' => array(
									        'family' => 'Lato',
									        'subset' => 'latin',
									        'variation' => 'regular',
									        'size' => 17,
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
									    'label' => esc_html__('Product Title', 'naslaan'),
									),
								
								)
							),
	
						),
					),
					
					'shop_widget_options' => array(
						'title' => esc_html__( 'Widget options', 'naslaan' ),
						'type' => 'tab',
						'options' => array(
	
							'shop_widget-box' => array(
								'title' => esc_html__( 'Widget options', 'naslaan' ),
								'type' => 'box',
								'options' => array(

									'prodcut_widget_title_font' => array(
									    'type' => 'typography-v2',
									    'value' => array(
									        'family' => 'Lato',
									        'subset' => 'latin',
									        'variation' => 'regular',
									        'size' => 17,
									        'letter-spacing' => 0,
									    ),
									    'components' => array(
									        'family'         => true,
									        'size'           => true,
									        'line-height'    => false,
									        'letter-spacing' => true,
									        'color'          => false
									    ),
									    'label' => esc_html__('Product Widget Title', 'naslaan'),
									),
									'prodcut_widget_btn_group' => array(
									    'type' => 'group',
									    'options' => array(

											'prodcut_widget_btn' => array(
											    'type'  => 'rgba-color-picker',
											    'value' => 'rgba(37,37,37,1)',
											    'label' => esc_html__('Widget Title Color', 'naslaan'),
											),
											'prodcut_widget_btn_hover' => array(
											    'type'  => 'rgba-color-picker',
											    'value' => 'rgba(222,0,46,1)',
											    'label' => esc_html__('Widget Title Color Hover', 'naslaan'),
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
