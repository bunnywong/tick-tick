<?php if (!defined( 'FW' )) die('Forbidden');

$options = array(
     
    'product_cat_options' => array(
        'type' => 'box',
        'title' => esc_html__('Category Options', 'naslaan'),
        'options' => array(
        
			'product_cat_options_group' => array(
			    'type' => 'group',
			    'options' => array(

					'product_cat_icon' => array(
						'label' => esc_html__( 'Icon', 'naslaan' ),
						'type' => 'upload',
					),
			    
			    ),
			    
			),
			
        ),
        
    ), 
       
);
