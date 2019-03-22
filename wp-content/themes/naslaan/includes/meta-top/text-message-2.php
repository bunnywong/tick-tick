<?php
	$text_msg_2_visibility = $text_msg_2 = $text_msg_2_url = $text_msg_c_visibility = '';
	
	if( naslaan_helpers::naslaan_unyson_check() ) {
		$text_msg_2_visibility = fw_get_db_settings_option('meta_top_bar_switch/enabled/text_msg_2_switch/text_msg_visibility');
		$text_msg_2 = fw_get_db_settings_option('meta_top_bar_switch/enabled/text_msg_2_switch/enabled/text_msg_text');
		$text_msg_2_url = fw_get_db_settings_option('meta_top_bar_switch/enabled/text_msg_2_switch/enabled/text_msg_url');
		$text_msg_c_visibility = fw_get_db_settings_option('meta_top_bar_switch/enabled/text_msg_2_switch/enabled/text_msg_c_visibility');
	}
	
	$text_msg_c_visibility_class = '';
	
	if(isset($text_msg_c_visibility['notebook'])!=''){
		$text_msg_c_visibility_class .= ' hidden-md';
	}
	
	if(isset($text_msg_c_visibility['tablet'])!=''){
		$text_msg_c_visibility_class .= ' hidden-sm';
	}
	
	if(isset($text_msg_c_visibility['mobile'])!=''){
		$text_msg_c_visibility_class .= ' hidden-xs';
	}
?>
											
								<?php if(($text_msg_2!="")&&($text_msg_2_visibility=='enabled')){?>
									<?php if($text_msg_2_url!=""){?>
										<a href="<?php echo esc_url($text_msg_2_url); ?>" class="text-message text-message-2<?php echo esc_attr($text_msg_c_visibility_class);?>"><?php echo esc_html($text_msg_2);?></a>
									<?php }else{?>
										<div class="text-message text-message-2<?php echo esc_attr($text_msg_c_visibility_class);?>"><?php echo esc_html($text_msg_2);?></div>
									<?php }?>
								<?php }?>
