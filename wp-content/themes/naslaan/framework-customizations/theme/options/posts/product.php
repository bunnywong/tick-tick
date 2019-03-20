<?php if (!defined( 'FW' )) die('Forbidden');

$options = array(
    
    'page_options' => array(
        'type' => 'box',
        'title' => esc_html__('Page Options', 'naslaan'),
        'options' => array(
        
			'page_options_group' => array(
			    'type' => 'group',
			    'options' => array(
				
					'page_options_paddings' =>array(
					    'type'  => 'html',
					    'label' => esc_html__('Page Paddings', 'naslaan' ),
					    'html'  => '',
					),
					'page_options_padding_top' => array(
						'label' => '',
						'type' => 'short-text',
						'value' => '50',
						'desc' => esc_html__( 'top', 'naslaan' ),
					),
					'page_options_padding_bottom' => array(
						'label' => '',
						'type' => 'short-text',
						'value' => '50',
						'desc' => esc_html__( 'bottom', 'naslaan' ),
					),
					'page_options_padding_clearfix' =>array(
					    'type'  => 'html',
					    'label' => '',
					    'html'  => '<div class="wp-clearfix"></div>',
					),
					'page_main_layouts' => array(
					    'type'  => 'select',
					    'value' => '1200',
					    'label' => esc_html__('Page Layouts', 'naslaan' ),
					    'choices' => array(
					        'full' => esc_html__('Full Width', 'naslaan' ),
					        '1110' => esc_html__('1110 Pixels Width', 'naslaan' ),
					        '1200' => esc_html__('1200 Pixels Width', 'naslaan' ),
					        '1480' => esc_html__('1480 Pixels Width', 'naslaan' ),
					    ),
					),
			
				),
			),
        
        ),
    ),
    
    'page_footer_settings' => array(
        'type' => 'box',
        'title' => esc_html__('Page Footer Settings', 'naslaan'),
        'options' => array(
        
			'page_footer_settings_group' => array(
			    'type' => 'group',
			    'options' => array(
				
					'page_footer' => array(
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
					),
					'page_bottom_footer' => array(
						'type'  => 'switch',
					    'value' => 'enabled',
					    'label' => esc_html__('Bottom Section', 'naslaan' ),
					    'left-choice' => array(
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
        
        ),
    ),
    
    
);