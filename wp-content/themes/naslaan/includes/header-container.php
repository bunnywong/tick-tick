<?php
$header_types = $navigation_left_variants = $navigation_center_variants = '';

if( naslaan_helpers::naslaan_unyson_check() ) {
	$header_types = fw_get_db_settings_option('header_types/header_type');
	$navigation_left_variants = fw_get_db_settings_option('header_types/left/navigation_types/navigation_variant');
	$navigation_center_variants = fw_get_db_settings_option('header_types/center/navigation_types/navigation_variant');
}

if($header_types=='left'){
	if($navigation_left_variants=='variant_1'){
		get_template_part('includes/header/left-header-variant-1');
    // Add header news widget
    if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('header-news-bar') ) : endif;
	}elseif($navigation_left_variants=='variant_2'){
		get_template_part('includes/header/left-header-variant-2');
	}elseif($navigation_left_variants=='variant_3'){
		get_template_part('includes/header/left-header-variant-3');
	}
}elseif($header_types=='center'){
	if($navigation_center_variants=='variant_1'){
		get_template_part('includes/header/center-header-variant-1');
	}elseif($navigation_center_variants=='variant_2'){
		get_template_part('includes/header/center-header-variant-2');
	}elseif($navigation_center_variants=='variant_3'){
		get_template_part('includes/header/center-header-variant-3');
	}
}elseif($header_types=='side'){
	get_template_part('includes/header/side-header-variant-1');
}else{
	get_template_part('includes/header/left-header-variant-1');
}


?>
