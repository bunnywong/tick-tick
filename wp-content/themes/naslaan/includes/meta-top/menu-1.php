<?php
	$meta_top_menu_1_visibility = '';
	
	if( naslaan_helpers::naslaan_unyson_check() ) {
		$meta_top_menu_1_visibility = fw_get_db_settings_option('meta_top_bar_switch/enabled/meta_top_menu_1_visibility');
	}
	
	$meta_top_menu_1_visibility_class = '';
	
	if(isset($meta_top_menu_1_visibility['notebook'])!=''){
		$meta_top_menu_1_visibility_class .= ' hidden-md';
	}
	
	if(isset($meta_top_menu_1_visibility['tablet'])!=''){
		$meta_top_menu_1_visibility_class .= ' hidden-sm';
	}
	
	if(isset($meta_top_menu_1_visibility['mobile'])!=''){
		$meta_top_menu_1_visibility_class .= ' hidden-xs';
	}
?>

										<?php if ( has_nav_menu( 'top-meta-menu-1' ) ) {
										
										$menu_class = "top-meta-menu top-meta-menu-1";
										$menu_class .= $meta_top_menu_1_visibility_class;
										
										wp_nav_menu( array(
											'theme_location' => 'top-meta-menu-1',
											'menu_class' => $menu_class,
											'container' => '',		
										));
										
										}?>
