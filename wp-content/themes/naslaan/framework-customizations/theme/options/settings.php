<?php

	if (!defined( 'FW' )) die('Forbidden');

	$options = array(
		fw()->theme->get_options( 'general' ),
		fw()->theme->get_options( 'header' ),
		fw()->theme->get_options( 'header_title' ),
		fw()->theme->get_options( 'footer' ),
		fw()->theme->get_options( 'blog' ),
		fw()->theme->get_options( 'shop' ),
		fw()->theme->get_options( 'portfolio' ),
		fw()->theme->get_options( 'contact_form' ),
		fw()->theme->get_options( 'widgets' ),
	);
