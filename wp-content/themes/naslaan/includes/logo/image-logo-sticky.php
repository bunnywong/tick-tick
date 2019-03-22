<?php

$header_logo_image = '';

if( naslaan_helpers::naslaan_unyson_check() ) {
	$header_logo_image = esc_attr(fw_get_db_settings_option('sticky_header_switch/enabled/header_logo/image_logo/header_logo_image/url'));
}

?>

<div id="logo-sticky" class="image-logo">
	<a class="logo" href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo esc_url($header_logo_image); ?>" alt="<?php echo esc_attr( get_bloginfo('name') ); ?> &ndash; <?php echo esc_attr( get_bloginfo('description') ); ?>" /></a>
</div>
