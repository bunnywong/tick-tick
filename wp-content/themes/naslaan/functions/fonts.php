<?php
/**
 * Functions for handling font enqueueing, registration, etc.  This works with the
 * Google Fonts API.
 *
 * Extending an idea from Jose Castaneda. This is a small script for loading Google fonts
 * with an easy method for adding/removing/editing the fonts loaded via child theme.
 *
 * @link http://blog.josemcastaneda.com/2016/02/29/adding-removing-fonts-from-a-theme/
 */

/**
 * Registers a font.
 *
 * @uses   wp_register_style()
 * @since  1.0.0
 * @access public
 * @param  string  $handle
 * @param  array   $args
 * @return bool
 */
function naslaan_register_font( $handle, $args = array() ) {

	$args = wp_parse_args(
		$args,
		array(
			'family'  => array(),
			'subset'  => array(),
			'depends' => array(),
			'version' => false,
			'media'   => 'all'
		)
	);

	$url = naslaan_create_font_url( $handle, $args['family'], $args['subset'] );

	return wp_register_style( "{$handle}-font", $url, $args['depends'], $args['version'], $args['media'] );
}

/**
 * Deregisters a registered font.
 *
 * @uses   wp_deregister_style()
 * @since  1.0.0
 * @access public
 * @param  string  $handle
 * @return void
 */
function naslaan_deregister_font( $handle ) {

	wp_deregister_style( "{$handle}-font" );
}

/**
 * Enqueue a registered font.  If the font is not registered, pass the `$args` to
 * register it.  See `naslaan_register_font()`.
 *
 * @uses   wp_enqueue_style()
 * @since  1.0.0
 * @access public
 * @param  string  $handle
 * @param  array   $args
 * @return void
 */
function naslaan_enqueue_font( $handle, $args = array() ) {

	if ( ! naslaan_font_is_registered( $handle ) )
		naslaan_register_font( $handle, $args );

	wp_enqueue_style( "{$handle}-font" );
}

/**
 * Dequeues a font.
 *
 * @uses   wp_dequeue_style()
 * @since  1.0.0
 * @access public
 * @param  string  $handle
 * @return void
 */
function naslaan_dequeue_font( $handle ) {

	wp_dequeue_style( "{$handle}-font" );
}

/**
 * Checks a font's status.
 *
 * @uses   wp_style_is()
 * @since  1.0.0
 * @access public
 * @param  string  $handle
 * @param  string  $list
 * @return bool
 */
function naslaan_font_is( $handle, $list = 'enqueued' ) {

	return wp_style_is( "{$handle}-font", $list );
}

/**
 * Checks if a font is registered.
 *
 * @since  1.0.0
 * @access public
 * @param  string  $handle
 * @return bool
 */
function naslaan_font_is_registered( $handle ) {

	return naslaan_font_is( $handle, 'registered' );
}

/**
 * Checks if a font is enqueued.
 *
 * @since  1.0.0
 * @access public
 * @param  string  $handle
 * @return bool
 */
function naslaan_font_is_enqueued( $handle ) {

	return naslaan_font_is( $handle, 'enqueued' );
}

/**
 * Helper function for creating the Google Fonts URL.
 *
 * @since  1.0.0
 * @access public
 * @param  string  $handle
 * @param  array   $family
 * @param  array   $subset
 * @return void
 */
function naslaan_create_font_url( $handle, $family, $subset ) {

	$url    = '';
	$args   = array();

	$family = apply_filters( "{$handle}_font_family", $family );
	$subset = apply_filters( "{$handle}_font_subset", $subset );

	if ( $family ) {

		$args['family'] = urlencode( implode( '|', $family ) );

		if ( $subset )
			$args['subset'] = urlencode( implode( ',', $subset ) );

		$url = add_query_arg( $args, 'https://fonts.googleapis.com/css' );
	}

	return apply_filters( "{$handle}_font_url", $url, $family, $subset );
}
