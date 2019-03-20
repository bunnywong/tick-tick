<?php

$header_logo_image = '';

if( naslaan_helpers::naslaan_unyson_check() ) {
	$header_logo_image = esc_attr(naslaan_theme_option_functions::naslaan_header_logo_image());
	$second_custom_styles_switch = fw_get_db_settings_option('second_header_custom_styles/second_custom_styles_switch');
	$second_header_logo_image = fw_get_db_settings_option('second_header_custom_styles/enabled/header_logo_image/url');
}

?>

<div id="logo" class="image-logo">
	<a class="logo" href="<?php echo esc_url(home_url('/')); ?>">
	<img src="<?php echo esc_url($header_logo_image); ?>" alt="<?php echo esc_attr( get_bloginfo('name') ); ?> &ndash; <?php echo esc_attr( get_bloginfo('description') ); ?>" />
	<?php if(($second_custom_styles_switch == 'enabled')&&($second_header_logo_image!="")) {?>
		<img class="second-style-logo" src="<?php echo esc_url($second_header_logo_image); ?>" alt="<?php echo esc_attr( get_bloginfo('name') ); ?> &ndash; <?php echo esc_attr( get_bloginfo('description') ); ?>" />
	<?php }?>
	</a>
</div>