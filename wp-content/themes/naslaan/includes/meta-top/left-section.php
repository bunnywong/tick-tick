<?php
	$meta_top_order_left_1 = $meta_top_order_left_2 = $meta_top_order_left_3 = '';
	
	if( naslaan_helpers::naslaan_unyson_check() ) {
		$meta_top_order_left_1 = fw_get_db_settings_option('meta_top_bar_switch/enabled/meta_top_order_left_1');
		$meta_top_order_left_2 = fw_get_db_settings_option('meta_top_bar_switch/enabled/meta_top_order_left_2');
		$meta_top_order_left_3 = fw_get_db_settings_option('meta_top_bar_switch/enabled/meta_top_order_left_3');
	}
?>
<?php if($meta_top_order_left_1!='none'||$meta_top_order_left_2!='none'||$meta_top_order_left_3!='none'){?>											
								<div class="left-section">
											<?php if($meta_top_order_left_1=='social'){
												naslaan_front_functions::naslaan_header_social_media();
											}elseif($meta_top_order_left_1=='message-1'){
												get_template_part('includes/meta-top/text-message-1');
											}elseif($meta_top_order_left_1=='message-2'){
												get_template_part('includes/meta-top/text-message-2');
											}elseif($meta_top_order_left_1=='menu-1'){
												get_template_part('includes/meta-top/menu-1');
											}elseif($meta_top_order_left_1=='menu-2'){
												get_template_part('includes/meta-top/menu-2');
											}elseif($meta_top_order_left_1=='search'){
												naslaan_front_functions::naslaan_header_search_btn();
											}?>
											<?php if($meta_top_order_left_2=='social'){
												naslaan_front_functions::naslaan_header_social_media();
											}elseif($meta_top_order_left_2=='message-1'){
												get_template_part('includes/meta-top/text-message-1');
											}elseif($meta_top_order_left_2=='message-2'){
												get_template_part('includes/meta-top/text-message-2');
											}elseif($meta_top_order_left_2=='menu-1'){
												get_template_part('includes/meta-top/menu-1');
											}elseif($meta_top_order_left_2=='menu-2'){
												get_template_part('includes/meta-top/menu-2');
											}elseif($meta_top_order_left_2=='search'){
												naslaan_front_functions::naslaan_header_search_btn();
											}?>
											<?php if($meta_top_order_left_3=='social'){
												naslaan_front_functions::naslaan_header_social_media();
											}elseif($meta_top_order_left_3=='message-1'){
												get_template_part('includes/meta-top/text-message-1');
											}elseif($meta_top_order_left_3=='message-2'){
												get_template_part('includes/meta-top/text-message-2');
											}elseif($meta_top_order_left_3=='menu-1'){
												get_template_part('includes/meta-top/menu-1');
											}elseif($meta_top_order_left_3=='menu-2'){
												get_template_part('includes/meta-top/menu-2');
											}elseif($meta_top_order_left_3=='search'){
												naslaan_front_functions::naslaan_header_search_btn();
											}?>
								</div>
<?php }?>
