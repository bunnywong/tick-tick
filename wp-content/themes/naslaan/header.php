<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<?php
	naslaan_front_functions::naslaan_pageloader();
	naslaan_front_functions::naslaan_slide_panel();
	?>

	<div id="wrapper" class="clearfix">
		
		<?php
		$header_type = '';
		
		if( naslaan_helpers::naslaan_unyson_check() ) {
			$header_type = fw_get_db_settings_option('header_types/header_type');
		}
		
		if( $header_type == 'side' ) {
			naslaan_front_functions::naslaan_side_header();
		}else{
			naslaan_front_functions::naslaan_header();
		}
		
		if ( !is_page_template( 'slider-template.php' ) ) {
			naslaan_front_functions::naslaan_header_title();
		}else{
			naslaan_front_functions::naslaan_revslider_container();
		}
		?>


