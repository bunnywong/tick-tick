<?php	

class naslaan_theme_option_functions {

		function __construct() {
		
		}
		
		public static function naslaan_header_title_variant() {
	
			$value = '';
			if( naslaan_helpers::naslaan_unyson_check() ) {
			
				$theme_options = 'title_variants/title_variant';
				
				$page_options = 'header_custom_title/enabled/title_variants/title_variant';
				
				$events_options = 'events_header_custom_title/enabled/events_title_variants/events_title_variant';
				
				$page_switch= 'header_custom_title/header_custom_title_switch';
				
				$events_switch = 'events_header_custom_title/events_header_custom_title_switch';
				
				if( naslaan_helpers::naslaan_event_calendar_check() && tribe_is_event_query() && is_archive()){
				
					if(fw_get_db_settings_option( $events_switch )=='enabled'){
						$value = fw_get_db_settings_option( $events_options );
					}else{
						$value = fw_get_db_settings_option($theme_options);
					}
				
				}elseif( naslaan_helpers::naslaan_woocommerce_check() && is_shop() ){
				
					$shop_page = get_post( wc_get_page_id( 'shop' ) );
					
					if(fw_get_db_post_option( $shop_page->ID, $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( $shop_page->ID, $page_options );
					}else{
						$value = fw_get_db_settings_option($theme_options);
					}
					
				
				}elseif(is_single() || is_page()) {
				
					if(fw_get_db_post_option( get_the_ID(), $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( get_the_ID(), $page_options );
					}else{
						$value = fw_get_db_settings_option($theme_options);
					}
					
				} elseif((is_front_page() && is_home()) || is_home()) {
				
					if(fw_get_db_post_option( get_option( 'page_for_posts'), $page_switch )=='enabled'){
						$value = fw_get_db_post_option( get_option( 'page_for_posts'), $page_options );
					}else{
						$value = fw_get_db_settings_option($theme_options);
					}
					
				} else {
				
					$value = fw_get_db_settings_option($theme_options);
					
				}
			}
			return $value;
 		}
		
 		public static function naslaan_header_title_padding_top_v1() {
	
			$value = '';
			if( naslaan_helpers::naslaan_unyson_check() ) {
			
				$theme_options = 'title_variants/variant-1/header_title_padding_top';
				
				$page_options = 'header_custom_title/enabled/title_variants/variant-1/header_title_padding_top';
				
				$events_options = 'events_header_custom_title/enabled/events_title_variants/variant-1/events_header_title_padding_top';
				
				$page_switch= 'header_custom_title/header_custom_title_switch';
				
				$events_switch = 'events_header_custom_title/events_header_custom_title_switch';
				
				if( naslaan_helpers::naslaan_event_calendar_check() && tribe_is_event_query() && is_archive()){
				
					if(fw_get_db_settings_option( $events_switch )=='enabled'){
						$value = fw_get_db_settings_option( $events_options );
					}else{
						$value = fw_get_db_settings_option($theme_options);
					}
				
				}elseif( naslaan_helpers::naslaan_woocommerce_check() && is_shop() ){
				
					$shop_page = get_post( wc_get_page_id( 'shop' ) );
					
					if(fw_get_db_post_option( $shop_page->ID, $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( $shop_page->ID, $page_options );
					}else{
						$value = fw_get_db_settings_option($theme_options);
					}
					
				
				}elseif(is_single() || is_page()) {
				
					if(fw_get_db_post_option( get_the_ID(), $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( get_the_ID(), $page_options );
					}else{
						$value = fw_get_db_settings_option($theme_options);
					}
					
				} elseif((is_front_page() && is_home()) || is_home()) {
				
					if(fw_get_db_post_option( get_option( 'page_for_posts'), $page_switch )=='enabled'){
						$value = fw_get_db_post_option( get_option( 'page_for_posts'), $page_options );
					}else{
						$value = fw_get_db_settings_option($theme_options);
					}
					
				} else {
				
					$value = fw_get_db_settings_option($theme_options);
					
				}
			}
			return $value;
 		}
 		
 		public static function naslaan_header_title_padding_bottom_v1() {
	
			$value = '';
			if( naslaan_helpers::naslaan_unyson_check() ) {
			
				$theme_options = 'title_variants/variant-1/header_title_padding_bottom';
				
				$page_options = 'header_custom_title/enabled/title_variants/variant-1/header_title_padding_bottom';
				
				$events_options = 'events_header_custom_title/enabled/events_title_variants/variant-1/events_header_title_padding_bottom';
				
				$page_switch= 'header_custom_title/header_custom_title_switch';
				
				$events_switch = 'events_header_custom_title/events_header_custom_title_switch';
				
				if( naslaan_helpers::naslaan_event_calendar_check() && tribe_is_event_query() && is_archive()){
				
					if(fw_get_db_settings_option( $events_switch )=='enabled'){
						$value = fw_get_db_settings_option( $events_options );
					}else{
						$value = fw_get_db_settings_option($theme_options);
					}
				
				}elseif( naslaan_helpers::naslaan_woocommerce_check() && is_shop() ){
				
					$shop_page = get_post( wc_get_page_id( 'shop' ) );
					
					if(fw_get_db_post_option( $shop_page->ID, $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( $shop_page->ID, $page_options );
					}else{
						$value = fw_get_db_settings_option($theme_options);
					}
					
				
				}elseif(is_single() || is_page()) {
				
					if(fw_get_db_post_option( get_the_ID(), $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( get_the_ID(), $page_options );
					}else{
						$value = fw_get_db_settings_option($theme_options);
					}
					
				} elseif((is_front_page() && is_home()) || is_home()) {
				
					if(fw_get_db_post_option( get_option( 'page_for_posts'), $page_switch )=='enabled'){
						$value = fw_get_db_post_option( get_option( 'page_for_posts'), $page_options );
					}else{
						$value = fw_get_db_settings_option($theme_options);
					}
					
				} else {
				
					$value = fw_get_db_settings_option($theme_options);
					
				}
			}
			return $value;
 		}
 		
 		public static function naslaan_header_title_visibility_v1() {
	
			$value = '';
			if( naslaan_helpers::naslaan_unyson_check() ) {
			
				$theme_options = 'title_variants/variant-1/header_title_visibility/header_title_switch';
				
				$page_options = 'header_custom_title/enabled/title_variants/variant-1/header_title_visibility/header_title_switch';
				
				$events_options = 'events_header_custom_title/enabled/events_title_variants/variant-1/events_header_title_visibility/events_header_title_switch';
				
				$page_switch= 'header_custom_title/header_custom_title_switch';
				
				$events_switch = 'events_header_custom_title/events_header_custom_title_switch';
				
				if( naslaan_helpers::naslaan_event_calendar_check() && tribe_is_event_query() && is_archive()){
				
					if(fw_get_db_settings_option( $events_switch )=='enabled'){
						$value = fw_get_db_settings_option( $events_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif( naslaan_helpers::naslaan_woocommerce_check() && is_shop() ){
				
					$shop_page = get_post( wc_get_page_id( 'shop' ) );
					
					if(fw_get_db_post_option( $shop_page->ID, $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( $shop_page->ID, $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif(is_single() || is_page()) {
				
					if(fw_get_db_post_option( get_the_ID(), $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( get_the_ID(), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} elseif((is_front_page() && is_home()) || is_home()) {
				
					if(fw_get_db_post_option( get_option( 'page_for_posts'), $page_switch )=='enabled'){
						$value = fw_get_db_post_option( get_option( 'page_for_posts'), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} else {
				
					$value = fw_get_db_settings_option( $theme_options );
					
				}
			}
			return $value;
 		}
 		
 		public static function naslaan_header_title_v1() {
	
			$value = '';
			if( naslaan_helpers::naslaan_unyson_check() ) {
			
				$theme_options = 'title_variants/variant-1/header_title_visibility/enabled/header_title';
				
				$page_options = 'header_custom_title/enabled/title_variants/variant-1/header_title_visibility/enabled/header_title';
				
				$events_options = 'events_header_custom_title/enabled/events_title_variants/variant-1/events_header_title_visibility/enabled/events_header_title';
				
				$page_switch= 'header_custom_title/header_custom_title_switch';
				
				$events_switch = 'events_header_custom_title/events_header_custom_title_switch';
				
				if( naslaan_helpers::naslaan_event_calendar_check() && tribe_is_event_query() && is_archive()){
				
					if(fw_get_db_settings_option( $events_switch )=='enabled'){
						$value = fw_get_db_settings_option( $events_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif( naslaan_helpers::naslaan_woocommerce_check() && is_shop() ){
				
					$shop_page = get_post( wc_get_page_id( 'shop' ) );
					
					if(fw_get_db_post_option( $shop_page->ID, $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( $shop_page->ID, $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif(is_single() || is_page()) {
				
					if(fw_get_db_post_option( get_the_ID(), $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( get_the_ID(), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} elseif((is_front_page() && is_home()) || is_home()) {
				
					if(fw_get_db_post_option( get_option( 'page_for_posts'), $page_switch )=='enabled'){
						$value = fw_get_db_post_option( get_option( 'page_for_posts'), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} else {
				
					$value = fw_get_db_settings_option( $theme_options );
					
				}
			}
			return $value;
 		}
 		
 		public static function naslaan_header_title_underline_v1() {
	
			$value = '';
			if( naslaan_helpers::naslaan_unyson_check() ) {
			
				$theme_options = 'title_variants/variant-1/header_title_visibility/enabled/header_title_underline';
				
				$page_options = 'header_custom_title/enabled/title_variants/variant-1/header_title_visibility/enabled/header_title_underline';
				
				$events_options = 'events_header_custom_title/enabled/events_title_variants/variant-1/events_header_title_visibility/enabled/events_header_title_underline';
				
				$page_switch= 'header_custom_title/header_custom_title_switch';
				
				$events_switch = 'events_header_custom_title/events_header_custom_title_switch';
				
				if( naslaan_helpers::naslaan_event_calendar_check() && tribe_is_event_query() && is_archive()){
				
					if(fw_get_db_settings_option( $events_switch )=='enabled'){
						$value = fw_get_db_settings_option( $events_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif( naslaan_helpers::naslaan_woocommerce_check() && is_shop() ){
				
					$shop_page = get_post( wc_get_page_id( 'shop' ) );
					
					if(fw_get_db_post_option( $shop_page->ID, $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( $shop_page->ID, $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif(is_single() || is_page()) {
				
					if(fw_get_db_post_option( get_the_ID(), $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( get_the_ID(), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} elseif((is_front_page() && is_home()) || is_home()) {
				
					if(fw_get_db_post_option( get_option( 'page_for_posts'), $page_switch )=='enabled'){
						$value = fw_get_db_post_option( get_option( 'page_for_posts'), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} else {
				
					$value = fw_get_db_settings_option( $theme_options );
					
				}
			}
			return $value;
 		}
 		
 		public static function naslaan_header_breadcrumb_visibility_v1() {
	
			$value = '';
			if( naslaan_helpers::naslaan_unyson_check() ) {
			
				$theme_options = 'title_variants/variant-1/header_breadcrumb_visibility/header_breadcrumb_switch';
				
				$page_options = 'header_custom_title/enabled/title_variants/variant-1/header_breadcrumb_visibility/header_breadcrumb_switch';
				
				$events_options = 'events_header_custom_title/enabled/events_title_variants/variant-1/events_header_breadcrumb_visibility/events_header_breadcrumb_switch';
				
				$page_switch= 'header_custom_title/header_custom_title_switch';
				
				$events_switch = 'events_header_custom_title/events_header_custom_title_switch';
				
				if( naslaan_helpers::naslaan_event_calendar_check() && tribe_is_event_query() && is_archive()){
				
					if(fw_get_db_settings_option( $events_switch )=='enabled'){
						$value = fw_get_db_settings_option( $events_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif( naslaan_helpers::naslaan_woocommerce_check() && is_shop() ){
				
					$shop_page = get_post( wc_get_page_id( 'shop' ) );
					
					if(fw_get_db_post_option( $shop_page->ID, $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( $shop_page->ID, $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif(is_single() || is_page()) {
				
					if(fw_get_db_post_option( get_the_ID(), $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( get_the_ID(), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} elseif((is_front_page() && is_home()) || is_home()) {
				
					if(fw_get_db_post_option( get_option( 'page_for_posts'), $page_switch )=='enabled'){
						$value = fw_get_db_post_option( get_option( 'page_for_posts'), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} else {
				
					$value = fw_get_db_settings_option( $theme_options );
					
				}
			}
			return $value;
 		}
 		
 		public static function naslaan_header_breadcrumb_padding_top_v1() {
	
			$value = '';
			if( naslaan_helpers::naslaan_unyson_check() ) {
			
				$theme_options = 'title_variants/variant-1/header_breadcrumb_visibility/enabled/breadcrumb_padding_top';
				
				$page_options = 'header_custom_title/enabled/title_variants/variant-1/header_breadcrumb_visibility/enabled/breadcrumb_padding_top';
				
				$events_options = 'events_header_custom_title/enabled/events_title_variants/variant-1/events_header_breadcrumb_visibility/enabled-breadcrumb_padding_top';
				
				$page_switch= 'header_custom_title/header_custom_title_switch';
				
				$events_switch = 'events_header_custom_title/events_header_custom_title_switch';
				
				if( naslaan_helpers::naslaan_event_calendar_check() && tribe_is_event_query() && is_archive()){
				
					if(fw_get_db_settings_option( $events_switch )=='enabled'){
						$value = fw_get_db_settings_option( $events_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif( naslaan_helpers::naslaan_woocommerce_check() && is_shop() ){
				
					$shop_page = get_post( wc_get_page_id( 'shop' ) );
					
					if(fw_get_db_post_option( $shop_page->ID, $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( $shop_page->ID, $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif(is_single() || is_page()) {
				
					if(fw_get_db_post_option( get_the_ID(), $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( get_the_ID(), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} elseif((is_front_page() && is_home()) || is_home()) {
				
					if(fw_get_db_post_option( get_option( 'page_for_posts'), $page_switch )=='enabled'){
						$value = fw_get_db_post_option( get_option( 'page_for_posts'), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} else {
				
					$value = fw_get_db_settings_option( $theme_options );
					
				}
			}
			return $value;
 		}
 		
 		public static function naslaan_header_breadcrumb_padding_bottom_v1() {
	
			$value = '';
			if( naslaan_helpers::naslaan_unyson_check() ) {
			
				$theme_options = 'title_variants/variant-1/header_breadcrumb_visibility/enabled/breadcrumb_padding_bottom';
				
				$page_options = 'header_custom_title/enabled/title_variants/variant-1/header_breadcrumb_visibility/enabled/breadcrumb_padding_bottom';
				
				$events_options = 'events_header_custom_title/enabled/events_title_variants/variant-1/events_header_breadcrumb_visibility/enabled/breadcrumb_padding_bottom';
				
				$page_switch= 'header_custom_title/header_custom_title_switch';
				
				$events_switch = 'events_header_custom_title/events_header_custom_title_switch';
				
				if( naslaan_helpers::naslaan_event_calendar_check() && tribe_is_event_query() && is_archive()){
				
					if(fw_get_db_settings_option( $events_switch )=='enabled'){
						$value = fw_get_db_settings_option( $events_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif( naslaan_helpers::naslaan_woocommerce_check() && is_shop() ){
				
					$shop_page = get_post( wc_get_page_id( 'shop' ) );
					
					if(fw_get_db_post_option( $shop_page->ID, $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( $shop_page->ID, $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif(is_single() || is_page()) {
				
					if(fw_get_db_post_option( get_the_ID(), $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( get_the_ID(), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} elseif((is_front_page() && is_home()) || is_home()) {
				
					if(fw_get_db_post_option( get_option( 'page_for_posts'), $page_switch )=='enabled'){
						$value = fw_get_db_post_option( get_option( 'page_for_posts'), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} else {
				
					$value = fw_get_db_settings_option( $theme_options );
					
				}
			}
			return $value;
 		}
 		
 		public static function naslaan_header_breadcrumb_bg_color() {
	
			$value = '';
			if( naslaan_helpers::naslaan_unyson_check() ) {
			
				$theme_options = 'title_variants/variant-1/header_breadcrumb_visibility/enabled/breadcrumb_bg_color';
				
				$value = fw_get_db_settings_option( $theme_options );
			}
			return $value;
 		}
 		
 		public static function naslaan_header_breadcrumb_font_v1() {
	
			$value = '';
			if( naslaan_helpers::naslaan_unyson_check() ) {
			
				$theme_options = 'title_variants/variant-1/header_breadcrumb_visibility/enabled/breadcrumb_font';
				
				$page_options = 'header_custom_title/enabled/title_variants/variant-1/header_breadcrumb_visibility/enabled/breadcrumb_font';
				
				$events_options = 'events_header_custom_title/enabled/events_title_variants/variant-1/events_header_breadcrumb_visibility/enabled/breadcrumb_font';
				
				$page_switch= 'header_custom_title/header_custom_title_switch';
				
				$events_switch = 'events_header_custom_title/events_header_custom_title_switch';
				
				if( naslaan_helpers::naslaan_event_calendar_check() && tribe_is_event_query() && is_archive()){
				
					if(fw_get_db_settings_option( $events_switch )=='enabled'){
						$value = fw_get_db_settings_option( $events_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif( naslaan_helpers::naslaan_woocommerce_check() && is_shop() ){
				
					$shop_page = get_post( wc_get_page_id( 'shop' ) );
					
					if(fw_get_db_post_option( $shop_page->ID, $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( $shop_page->ID, $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif(is_single() || is_page()) {
				
					if(fw_get_db_post_option( get_the_ID(), $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( get_the_ID(), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} elseif((is_front_page() && is_home()) || is_home()) {
				
					if(fw_get_db_post_option( get_option( 'page_for_posts'), $page_switch )=='enabled'){
						$value = fw_get_db_post_option( get_option( 'page_for_posts'), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} else {
				
					$value = fw_get_db_settings_option( $theme_options );
					
				}
			}
			return $value;
 		}
 		
 		public static function naslaan_header_breadcrumb_font_color_v1() {
	
			$value = '';
			if( naslaan_helpers::naslaan_unyson_check() ) {
			
				$theme_options = 'title_variants/variant-1/header_breadcrumb_visibility/enabled/breadcrumb_font_color';
				
				$page_options = 'header_custom_title/enabled/title_variants/variant-1/header_breadcrumb_visibility/enabled/breadcrumb_font_color';
				
				$events_options = 'events_header_custom_title/enabled/events_title_variants/variant-1/events_header_breadcrumb_visibility/enabled/breadcrumb_font_color';
				
				$page_switch= 'header_custom_title/header_custom_title_switch';
				
				$events_switch = 'events_header_custom_title/events_header_custom_title_switch';
				
				if( naslaan_helpers::naslaan_event_calendar_check() && tribe_is_event_query() && is_archive()){
				
					if(fw_get_db_settings_option( $events_switch )=='enabled'){
						$value = fw_get_db_settings_option( $events_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif( naslaan_helpers::naslaan_woocommerce_check() && is_shop() ){
				
					$shop_page = get_post( wc_get_page_id( 'shop' ) );
					
					if(fw_get_db_post_option( $shop_page->ID, $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( $shop_page->ID, $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif(is_single() || is_page()) {
				
					if(fw_get_db_post_option( get_the_ID(), $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( get_the_ID(), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} elseif((is_front_page() && is_home()) || is_home()) {
				
					if(fw_get_db_post_option( get_option( 'page_for_posts'), $page_switch )=='enabled'){
						$value = fw_get_db_post_option( get_option( 'page_for_posts'), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} else {
				
					$value = fw_get_db_settings_option( $theme_options );
					
				}
			}
			return $value;
 		}
 		
 		public static function naslaan_header_breadcrumb_link_color_v1() {
	
			$value = '';
			if( naslaan_helpers::naslaan_unyson_check() ) {
			
				$theme_options = 'title_variants/variant-1/header_breadcrumb_visibility/enabled/breadcrumb_link_color';
				
				$page_options = 'header_custom_title/enabled/title_variants/variant-1/header_breadcrumb_visibility/enabled/breadcrumb_link_color';
				
				$events_options = 'events_header_custom_title/enabled/events_title_variants/variant-1/events_header_breadcrumb_visibility/enabled/breadcrumb_link_color';
				
				$page_switch= 'header_custom_title/header_custom_title_switch';
				
				$events_switch = 'events_header_custom_title/events_header_custom_title_switch';
				
				if( naslaan_helpers::naslaan_event_calendar_check() && tribe_is_event_query() && is_archive()){
				
					if(fw_get_db_settings_option( $events_switch )=='enabled'){
						$value = fw_get_db_settings_option( $events_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif( naslaan_helpers::naslaan_woocommerce_check() && is_shop() ){
				
					$shop_page = get_post( wc_get_page_id( 'shop' ) );
					
					if(fw_get_db_post_option( $shop_page->ID, $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( $shop_page->ID, $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif(is_single() || is_page()) {
				
					if(fw_get_db_post_option( get_the_ID(), $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( get_the_ID(), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} elseif((is_front_page() && is_home()) || is_home()) {
				
					if(fw_get_db_post_option( get_option( 'page_for_posts'), $page_switch )=='enabled'){
						$value = fw_get_db_post_option( get_option( 'page_for_posts'), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} else {
				
					$value = fw_get_db_settings_option( $theme_options );
					
				}
			}
			return $value;
 		}
 		
 		public static function naslaan_header_breadcrumb_hover_link_color_v1() {
	
			$value = '';
			if( naslaan_helpers::naslaan_unyson_check() ) {
			
				$theme_options = 'title_variants/variant-1/header_breadcrumb_visibility/enabled/breadcrumb_hover_link_color';
				
				$page_options = 'header_custom_title/enabled/title_variants/variant-1/header_breadcrumb_visibility/enabled/breadcrumb_hover_link_color';
				
				$events_options = 'events_header_custom_title/enabled/events_title_variants/variant-1/events_header_breadcrumb_visibility/enabled/breadcrumb_hover_link_color';
				
				$page_switch= 'header_custom_title/header_custom_title_switch';
				
				$events_switch = 'events_header_custom_title/events_header_custom_title_switch';
				
				if( naslaan_helpers::naslaan_event_calendar_check() && tribe_is_event_query() && is_archive()){
				
					if(fw_get_db_settings_option( $events_switch )=='enabled'){
						$value = fw_get_db_settings_option( $events_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif( naslaan_helpers::naslaan_woocommerce_check() && is_shop() ){
				
					$shop_page = get_post( wc_get_page_id( 'shop' ) );
					
					if(fw_get_db_post_option( $shop_page->ID, $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( $shop_page->ID, $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif(is_single() || is_page()) {
				
					if(fw_get_db_post_option( get_the_ID(), $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( get_the_ID(), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} elseif((is_front_page() && is_home()) || is_home()) {
				
					if(fw_get_db_post_option( get_option( 'page_for_posts'), $page_switch )=='enabled'){
						$value = fw_get_db_post_option( get_option( 'page_for_posts'), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} else {
				
					$value = fw_get_db_settings_option( $theme_options );
					
				}
			}
			return $value;
 		}
 		
 		public static function naslaan_header_share_visibility_v1() {
	
			$value = '';
			if( naslaan_helpers::naslaan_unyson_check() ) {
			
				$theme_options = 'title_variants/variant-1/header_share_visibility/header_share_switch';
				
				$page_options = 'header_custom_title/enabled/title_variants/variant-1/header_share_visibility/header_share_switch';
				
				$events_options = 'events_header_custom_title/enabled/events_title_variants/variant-1/events_header_share_visibility/events_header_share_switch';
				
				$page_switch= 'header_custom_title/header_custom_title_switch';
				
				$events_switch = 'events_header_custom_title/events_header_custom_title_switch';
				
				if( naslaan_helpers::naslaan_event_calendar_check() && tribe_is_event_query() && is_archive()){
				
					if(fw_get_db_settings_option( $events_switch )=='enabled'){
						$value = fw_get_db_settings_option( $events_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif( naslaan_helpers::naslaan_woocommerce_check() && is_shop() ){
				
					$shop_page = get_post( wc_get_page_id( 'shop' ) );
					
					if(fw_get_db_post_option( $shop_page->ID, $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( $shop_page->ID, $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif(is_single() || is_page()) {
				
					if(fw_get_db_post_option( get_the_ID(), $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( get_the_ID(), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} elseif((is_front_page() && is_home()) || is_home()) {
				
					if(fw_get_db_post_option( get_option( 'page_for_posts'), $page_switch )=='enabled'){
						$value = fw_get_db_post_option( get_option( 'page_for_posts'), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} else {
				
					$value = fw_get_db_settings_option( $theme_options );
					
				}
			}
			return $value;
 		}
 		
 		public static function naslaan_header_share_btn_padding_top_v1() {
	
			$value = '';
			if( naslaan_helpers::naslaan_unyson_check() ) {
			
				$theme_options = 'title_variants/variant-1/header_share_visibility/enabled/share_btn_padding_top';
				
				$page_options = 'header_custom_title/enabled/title_variants/variant-1/header_share_visibility/enabled/share_btn_padding_top';
				
				$events_options = 'events_header_custom_title/enabled/events_title_variants/variant-1/events_header_share_visibility/enabled/share_btn_padding_top';
				
				$page_switch= 'header_custom_title/header_custom_title_switch';
				
				$events_switch = 'events_header_custom_title/events_header_custom_title_switch';
				
				if( naslaan_helpers::naslaan_event_calendar_check() && tribe_is_event_query() && is_archive()){
				
					if(fw_get_db_settings_option( $events_switch )=='enabled'){
						$value = fw_get_db_settings_option( $events_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif( naslaan_helpers::naslaan_woocommerce_check() && is_shop() ){
				
					$shop_page = get_post( wc_get_page_id( 'shop' ) );
					
					if(fw_get_db_post_option( $shop_page->ID, $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( $shop_page->ID, $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif(is_single() || is_page()) {
				
					if(fw_get_db_post_option( get_the_ID(), $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( get_the_ID(), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} elseif((is_front_page() && is_home()) || is_home()) {
				
					if(fw_get_db_post_option( get_option( 'page_for_posts'), $page_switch )=='enabled'){
						$value = fw_get_db_post_option( get_option( 'page_for_posts'), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} else {
				
					$value = fw_get_db_settings_option( $theme_options );
					
				}
			}
			return $value;
 		}
 		
 		public static function naslaan_header_share_btn_padding_bottom_v1() {
	
			$value = '';
			if( naslaan_helpers::naslaan_unyson_check() ) {
			
				$theme_options = 'title_variants/variant-1/header_share_visibility/enabled/share_btn_padding_bottom';
				
				$page_options = 'header_custom_title/enabled/title_variants/variant-1/header_share_visibility/enabled/share_btn_padding_bottom';
				
				$events_options = 'events_header_custom_title/enabled/events_title_variants/variant-1/events_header_share_visibility/enabled/share_btn_padding_bottom';
				
				$page_switch= 'header_custom_title/header_custom_title_switch';
				
				$events_switch = 'events_header_custom_title/events_header_custom_title_switch';
				
				if( naslaan_helpers::naslaan_event_calendar_check() && tribe_is_event_query() && is_archive()){
				
					if(fw_get_db_settings_option( $events_switch )=='enabled'){
						$value = fw_get_db_settings_option( $events_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif( naslaan_helpers::naslaan_woocommerce_check() && is_shop() ){
				
					$shop_page = get_post( wc_get_page_id( 'shop' ) );
					
					if(fw_get_db_post_option( $shop_page->ID, $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( $shop_page->ID, $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif(is_single() || is_page()) {
				
					if(fw_get_db_post_option( get_the_ID(), $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( get_the_ID(), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} elseif((is_front_page() && is_home()) || is_home()) {
				
					if(fw_get_db_post_option( get_option( 'page_for_posts'), $page_switch )=='enabled'){
						$value = fw_get_db_post_option( get_option( 'page_for_posts'), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} else {
				
					$value = fw_get_db_settings_option( $theme_options );
					
				}
			}
			return $value;
 		}
 		
 		public static function naslaan_header_share_btn_text_v1() {
	
			$value = '';
			if( naslaan_helpers::naslaan_unyson_check() ) {
			
				$theme_options = 'title_variants/variant-1/header_share_visibility/enabled/share_btn_text';
				
				$page_options = 'header_custom_title/enabled/title_variants/variant-1/header_share_visibility/enabled/share_btn_text';
				
				$events_options = 'events_header_custom_title/enabled/events_title_variants/variant-1/events_header_share_visibility/enabled/share_btn_text';
				
				$page_switch= 'header_custom_title/header_custom_title_switch';
				
				$events_switch = 'events_header_custom_title/events_header_custom_title_switch';
				
				if( naslaan_helpers::naslaan_event_calendar_check() && tribe_is_event_query() && is_archive()){
				
					if(fw_get_db_settings_option( $events_switch )=='enabled'){
						$value = fw_get_db_settings_option( $events_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif( naslaan_helpers::naslaan_woocommerce_check() && is_shop() ){
				
					$shop_page = get_post( wc_get_page_id( 'shop' ) );
					
					if(fw_get_db_post_option( $shop_page->ID, $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( $shop_page->ID, $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif(is_single() || is_page()) {
				
					if(fw_get_db_post_option( get_the_ID(), $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( get_the_ID(), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} elseif((is_front_page() && is_home()) || is_home()) {
				
					if(fw_get_db_post_option( get_option( 'page_for_posts'), $page_switch )=='enabled'){
						$value = fw_get_db_post_option( get_option( 'page_for_posts'), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} else {
				
					$value = fw_get_db_settings_option( $theme_options );
					
				}
			}
			return $value;
 		}
 		
 		public static function naslaan_header_share_btn_text_color_v1() {
	
			$value = '';
			if( naslaan_helpers::naslaan_unyson_check() ) {
			
				$theme_options = 'title_variants/variant-1/header_share_visibility/enabled/share_btn_text_color';
				
				$page_options = 'header_custom_title/enabled/title_variants/variant-1/header_share_visibility/enabled/share_btn_text_color';
				
				$events_options = 'events_header_custom_title/enabled/events_title_variants/variant-1/events_header_share_visibility/enabled/share_btn_text_color';
				
				$page_switch= 'header_custom_title/header_custom_title_switch';
				
				$events_switch = 'events_header_custom_title/events_header_custom_title_switch';
				
				if( naslaan_helpers::naslaan_event_calendar_check() && tribe_is_event_query() && is_archive()){
				
					if(fw_get_db_settings_option( $events_switch )=='enabled'){
						$value = fw_get_db_settings_option( $events_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif( naslaan_helpers::naslaan_woocommerce_check() && is_shop() ){
				
					$shop_page = get_post( wc_get_page_id( 'shop' ) );
					
					if(fw_get_db_post_option( $shop_page->ID, $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( $shop_page->ID, $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif(is_single() || is_page()) {
				
					if(fw_get_db_post_option( get_the_ID(), $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( get_the_ID(), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} elseif((is_front_page() && is_home()) || is_home()) {
				
					if(fw_get_db_post_option( get_option( 'page_for_posts'), $page_switch )=='enabled'){
						$value = fw_get_db_post_option( get_option( 'page_for_posts'), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} else {
				
					$value = fw_get_db_settings_option( $theme_options );
					
				}
			}
			return $value;
 		}
 		
 		public static function naslaan_header_share_btn_icon_color_v1() {
	
			$value = '';
			if( naslaan_helpers::naslaan_unyson_check() ) {
			
				$theme_options = 'title_variants/variant-1/header_share_visibility/enabled/share_btn_icon_color';
				
				$page_options = 'header_custom_title/enabled/title_variants/variant-1/header_share_visibility/enabled/share_btn_icon_color';
				
				$events_options = 'events_header_custom_title/enabled/events_title_variants/variant-1/events_header_share_visibility/enabled/share_btn_icon_color';
				
				$page_switch= 'header_custom_title/header_custom_title_switch';
				
				$events_switch = 'events_header_custom_title/events_header_custom_title_switch';
				
				if( naslaan_helpers::naslaan_event_calendar_check() && tribe_is_event_query() && is_archive()){
				
					if(fw_get_db_settings_option( $events_switch )=='enabled'){
						$value = fw_get_db_settings_option( $events_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif( naslaan_helpers::naslaan_woocommerce_check() && is_shop() ){
				
					$shop_page = get_post( wc_get_page_id( 'shop' ) );
					
					if(fw_get_db_post_option( $shop_page->ID, $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( $shop_page->ID, $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif(is_single() || is_page()) {
				
					if(fw_get_db_post_option( get_the_ID(), $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( get_the_ID(), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} elseif((is_front_page() && is_home()) || is_home()) {
				
					if(fw_get_db_post_option( get_option( 'page_for_posts'), $page_switch )=='enabled'){
						$value = fw_get_db_post_option( get_option( 'page_for_posts'), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} else {
				
					$value = fw_get_db_settings_option( $theme_options );
					
				}
			}
			return $value;
 		}
 		
 		public static function naslaan_header_share_btn_sep_line_color_v1() {
	
			$value = '';
			if( naslaan_helpers::naslaan_unyson_check() ) {
			
				$theme_options = 'title_variants/variant-1/header_share_visibility/enabled/share_btn_sep_line_color';
				
				$page_options = 'header_custom_title/enabled/title_variants/variant-1/header_share_visibility/enabled/share_btn_sep_line_color';
				
				$events_options = 'events_header_custom_title/enabled/events_title_variants/variant-1/events_header_share_visibility/enabled/share_btn_sep_line_color';
				
				$page_switch= 'header_custom_title/header_custom_title_switch';
				
				$events_switch = 'events_header_custom_title/events_header_custom_title_switch';
				
				if( naslaan_helpers::naslaan_event_calendar_check() && tribe_is_event_query() && is_archive()){
				
					if(fw_get_db_settings_option( $events_switch )=='enabled'){
						$value = fw_get_db_settings_option( $events_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif( naslaan_helpers::naslaan_woocommerce_check() && is_shop() ){
				
					$shop_page = get_post( wc_get_page_id( 'shop' ) );
					
					if(fw_get_db_post_option( $shop_page->ID, $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( $shop_page->ID, $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif(is_single() || is_page()) {
				
					if(fw_get_db_post_option( get_the_ID(), $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( get_the_ID(), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} elseif((is_front_page() && is_home()) || is_home()) {
				
					if(fw_get_db_post_option( get_option( 'page_for_posts'), $page_switch )=='enabled'){
						$value = fw_get_db_post_option( get_option( 'page_for_posts'), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} else {
				
					$value = fw_get_db_settings_option( $theme_options );
					
				}
			}
			return $value;
 		}
 		
 		public static function naslaan_header_share_dropdown_text_v1() {
	
			$value = '';
			if( naslaan_helpers::naslaan_unyson_check() ) {
			
				$theme_options = 'title_variants/variant-1/header_share_visibility/enabled/share_dropdown_text';
				
				$page_options = 'header_custom_title/enabled/title_variants/variant-1/header_share_visibility/enabled/share_dropdown_text';
				
				$events_options = 'events_header_custom_title/enabled/events_title_variants/variant-1/events_header_share_visibility/enabled/share_dropdown_text';
				
				$page_switch= 'header_custom_title/header_custom_title_switch';
				
				$events_switch = 'events_header_custom_title/events_header_custom_title_switch';
				
				if( naslaan_helpers::naslaan_event_calendar_check() && tribe_is_event_query() && is_archive()){
				
					if(fw_get_db_settings_option( $events_switch )=='enabled'){
						$value = fw_get_db_settings_option( $events_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif( naslaan_helpers::naslaan_woocommerce_check() && is_shop() ){
				
					$shop_page = get_post( wc_get_page_id( 'shop' ) );
					
					if(fw_get_db_post_option( $shop_page->ID, $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( $shop_page->ID, $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif(is_single() || is_page()) {
				
					if(fw_get_db_post_option( get_the_ID(), $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( get_the_ID(), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} elseif((is_front_page() && is_home()) || is_home()) {
				
					if(fw_get_db_post_option( get_option( 'page_for_posts'), $page_switch )=='enabled'){
						$value = fw_get_db_post_option( get_option( 'page_for_posts'), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} else {
				
					$value = fw_get_db_settings_option( $theme_options );
					
				}
			}
			return $value;
 		}
 		
 		public static function naslaan_header_share_dropdown_hover_link_color_v1() {
	
			$value = '';
			if( naslaan_helpers::naslaan_unyson_check() ) {
			
				$theme_options = 'title_variants/variant-1/header_share_visibility/enabled/share_dropdown_hover_link_color';
				
				$page_options = 'header_custom_title/enabled/title_variants/variant-1/header_share_visibility/enabled/share_dropdown_hover_link_color';
				
				$events_options = 'events_header_custom_title/enabled/events_title_variants/variant-1/events_header_share_visibility/enabled/share_dropdown_hover_link_color';
				
				$page_switch= 'header_custom_title/header_custom_title_switch';
				
				$events_switch = 'events_header_custom_title/events_header_custom_title_switch';
				
				if( naslaan_helpers::naslaan_event_calendar_check() && tribe_is_event_query() && is_archive()){
				
					if(fw_get_db_settings_option( $events_switch )=='enabled'){
						$value = fw_get_db_settings_option( $events_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif( naslaan_helpers::naslaan_woocommerce_check() && is_shop() ){
				
					$shop_page = get_post( wc_get_page_id( 'shop' ) );
					
					if(fw_get_db_post_option( $shop_page->ID, $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( $shop_page->ID, $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif(is_single() || is_page()) {
				
					if(fw_get_db_post_option( get_the_ID(), $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( get_the_ID(), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} elseif((is_front_page() && is_home()) || is_home()) {
				
					if(fw_get_db_post_option( get_option( 'page_for_posts'), $page_switch )=='enabled'){
						$value = fw_get_db_post_option( get_option( 'page_for_posts'), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} else {
				
					$value = fw_get_db_settings_option( $theme_options );
					
				}
			}
			return $value;
 		}
 		
 		public static function naslaan_header_share_dropdown_link_color_v1() {
	
			$value = '';
			if( naslaan_helpers::naslaan_unyson_check() ) {
			
				$theme_options = 'title_variants/variant-1/header_share_visibility/enabled/share_dropdown_link_color';
				
				$page_options = 'header_custom_title/enabled/title_variants/variant-1/header_share_visibility/enabled/share_dropdown_link_color';
				
				$events_options = 'events_header_custom_title/enabled/events_title_variants/variant-1/events_header_share_visibility/enabled/share_dropdown_link_color';
				
				$page_switch= 'header_custom_title/header_custom_title_switch';
				
				$events_switch = 'events_header_custom_title/events_header_custom_title_switch';
				
				if( naslaan_helpers::naslaan_event_calendar_check() && tribe_is_event_query() && is_archive()){
				
					if(fw_get_db_settings_option( $events_switch )=='enabled'){
						$value = fw_get_db_settings_option( $events_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif( naslaan_helpers::naslaan_woocommerce_check() && is_shop() ){
				
					$shop_page = get_post( wc_get_page_id( 'shop' ) );
					
					if(fw_get_db_post_option( $shop_page->ID, $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( $shop_page->ID, $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif(is_single() || is_page()) {
				
					if(fw_get_db_post_option( get_the_ID(), $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( get_the_ID(), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} elseif((is_front_page() && is_home()) || is_home()) {
				
					if(fw_get_db_post_option( get_option( 'page_for_posts'), $page_switch )=='enabled'){
						$value = fw_get_db_post_option( get_option( 'page_for_posts'), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} else {
				
					$value = fw_get_db_settings_option( $theme_options );
					
				}
			}
			return $value;
 		}
 		
 		public static function naslaan_header_share_btn_icon_color_1() {
	
			$value = '';
			if( naslaan_helpers::naslaan_unyson_check() ) {
			
				$theme_options = 'title_variants/variant-1/header_share_visibility/enabled/share_btn_icon_color_1';
				
				$value = fw_get_db_settings_option( $theme_options );
			}
			return $value;
 		}
 		
 		public static function naslaan_header_share_btn_icon_bg_color_1() {
	
			$value = '';
			if( naslaan_helpers::naslaan_unyson_check() ) {
			
				$theme_options = 'title_variants/variant-1/header_share_visibility/enabled/share_btn_icon_bg_color_1';
				
				$value = fw_get_db_settings_option( $theme_options );
			}
			return $value;
 		}
 		
 		public static function naslaan_header_share_btn_icon_border_color_1() {
	
			$value = '';
			if( naslaan_helpers::naslaan_unyson_check() ) {
			
				$theme_options = 'title_variants/variant-1/header_share_visibility/enabled/share_btn_icon_border_color_1';
				
				$value = fw_get_db_settings_option( $theme_options );
			}
			return $value;
 		}
 		
 		public static function naslaan_header_share_btn_icon_color_hover_1() {
	
			$value = '';
			if( naslaan_helpers::naslaan_unyson_check() ) {
			
				$theme_options = 'title_variants/variant-1/header_share_visibility/enabled/share_btn_icon_color_hover_1';
				
				$value = fw_get_db_settings_option( $theme_options );
			}
			return $value;
 		}
 		
 		public static function naslaan_header_share_btn_icon_bg_color_hover_1() {
	
			$value = '';
			if( naslaan_helpers::naslaan_unyson_check() ) {
			
				$theme_options = 'title_variants/variant-1/header_share_visibility/enabled/share_btn_icon_bg_color_hover_1';
				
				$value = fw_get_db_settings_option( $theme_options );
			}
			return $value;
 		}
 		
 		public static function naslaan_header_share_btn_icon_border_color_hover_1() {
	
			$value = '';
			if( naslaan_helpers::naslaan_unyson_check() ) {
			
				$theme_options = 'title_variants/variant-1/header_share_visibility/enabled/share_btn_icon_border_color_hover_1';
				
				$value = fw_get_db_settings_option( $theme_options );
			}
			return $value;
 		}
 		
 		public static function naslaan_header_share_btn_email_v1() {
	
			$value = '';
			if( naslaan_helpers::naslaan_unyson_check() ) {
			
				$theme_options = 'title_variants/variant-1/header_share_visibility/enabled/share_btn_email';
				
				$page_options = 'header_custom_title/enabled/title_variants/variant-1/header_share_visibility/enabled/share_btn_email';
				
				$events_options = 'events_header_custom_title/enabled/events_title_variants/variant-1/events_header_share_visibility/enabled/share_btn_email';
				
				$page_switch= 'header_custom_title/header_custom_title_switch';
				
				$events_switch = 'events_header_custom_title/events_header_custom_title_switch';
				
				if( naslaan_helpers::naslaan_event_calendar_check() && tribe_is_event_query() && is_archive()){
				
					if(fw_get_db_settings_option( $events_switch )=='enabled'){
						$value = fw_get_db_settings_option( $events_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif( naslaan_helpers::naslaan_woocommerce_check() && is_shop() ){
				
					$shop_page = get_post( wc_get_page_id( 'shop' ) );
					
					if(fw_get_db_post_option( $shop_page->ID, $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( $shop_page->ID, $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif(is_single() || is_page()) {
				
					if(fw_get_db_post_option( get_the_ID(), $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( get_the_ID(), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} elseif((is_front_page() && is_home()) || is_home()) {
				
					if(fw_get_db_post_option( get_option( 'page_for_posts'), $page_switch )=='enabled'){
						$value = fw_get_db_post_option( get_option( 'page_for_posts'), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} else {
				
					$value = fw_get_db_settings_option( $theme_options );
					
				}
			}
			return $value;
 		}
 		
 		
 		public static function naslaan_header_title_padding_top_v2() {
	
			$value = '';
			if( naslaan_helpers::naslaan_unyson_check() ) {
			
				$theme_options = 'title_variants/variant-2/header_title_padding_top';
				
				$page_options = 'header_custom_title/enabled/title_variants/variant-2/header_title_padding_top';
				
				$events_options = 'events_header_custom_title/enabled/events_title_variants/variant-2/events_header_title_padding_top';
				
				$page_switch= 'header_custom_title/header_custom_title_switch';
				
				$events_switch = 'events_header_custom_title/events_header_custom_title_switch';
				
				if( naslaan_helpers::naslaan_event_calendar_check() && tribe_is_event_query() && is_archive()){
				
					if(fw_get_db_settings_option( $events_switch )=='enabled'){
						$value = fw_get_db_settings_option( $events_options );
					}else{
						$value = fw_get_db_settings_option($theme_options);
					}
				
				}elseif( naslaan_helpers::naslaan_woocommerce_check() && is_shop() ){
				
					$shop_page = get_post( wc_get_page_id( 'shop' ) );
					
					if(fw_get_db_post_option( $shop_page->ID, $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( $shop_page->ID, $page_options );
					}else{
						$value = fw_get_db_settings_option($theme_options);
					}
					
				
				}elseif(is_single() || is_page()) {
				
					if(fw_get_db_post_option( get_the_ID(), $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( get_the_ID(), $page_options );
					}else{
						$value = fw_get_db_settings_option($theme_options);
					}
					
				} elseif((is_front_page() && is_home()) || is_home()) {
				
					if(fw_get_db_post_option( get_option( 'page_for_posts'), $page_switch )=='enabled'){
						$value = fw_get_db_post_option( get_option( 'page_for_posts'), $page_options );
					}else{
						$value = fw_get_db_settings_option($theme_options);
					}
					
				} else {
				
					$value = fw_get_db_settings_option($theme_options);
					
				}
			}
			return $value;
 		}
 		
 		public static function naslaan_header_title_padding_bottom_v2() {
	
			$value = '';
			if( naslaan_helpers::naslaan_unyson_check() ) {
			
				$theme_options = 'title_variants/variant-2/header_title_padding_bottom';
				
				$page_options = 'header_custom_title/enabled/title_variants/variant-2/header_title_padding_bottom';
				
				$events_options = 'events_header_custom_title/enabled/events_title_variants/variant-2/events_header_title_padding_bottom';
				
				$page_switch= 'header_custom_title/header_custom_title_switch';
				
				$events_switch = 'events_header_custom_title/events_header_custom_title_switch';
				
				if( naslaan_helpers::naslaan_event_calendar_check() && tribe_is_event_query() && is_archive()){
				
					if(fw_get_db_settings_option( $events_switch )=='enabled'){
						$value = fw_get_db_settings_option( $events_options );
					}else{
						$value = fw_get_db_settings_option($theme_options);
					}
				
				}elseif( naslaan_helpers::naslaan_woocommerce_check() && is_shop() ){
				
					$shop_page = get_post( wc_get_page_id( 'shop' ) );
					
					if(fw_get_db_post_option( $shop_page->ID, $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( $shop_page->ID, $page_options );
					}else{
						$value = fw_get_db_settings_option($theme_options);
					}
					
				
				}elseif(is_single() || is_page()) {
				
					if(fw_get_db_post_option( get_the_ID(), $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( get_the_ID(), $page_options );
					}else{
						$value = fw_get_db_settings_option($theme_options);
					}
					
				} elseif((is_front_page() && is_home()) || is_home()) {
				
					if(fw_get_db_post_option( get_option( 'page_for_posts'), $page_switch )=='enabled'){
						$value = fw_get_db_post_option( get_option( 'page_for_posts'), $page_options );
					}else{
						$value = fw_get_db_settings_option($theme_options);
					}
					
				} else {
				
					$value = fw_get_db_settings_option($theme_options);
					
				}
			}
			return $value;
 		}
 		
 		public static function naslaan_header_title_visibility_v2() {
	
			$value = '';
			if( naslaan_helpers::naslaan_unyson_check() ) {
			
				$theme_options = 'title_variants/variant-2/header_title_visibility/header_title_switch';
				
				$page_options = 'header_custom_title/enabled/title_variants/variant-2/header_title_visibility/header_title_switch';
				
				$events_options = 'events_header_custom_title/enabled/events_title_variants/variant-2/events_header_title_visibility/events_header_title_switch';
				
				$page_switch= 'header_custom_title/header_custom_title_switch';
				
				$events_switch = 'events_header_custom_title/events_header_custom_title_switch';
				
				if( naslaan_helpers::naslaan_event_calendar_check() && tribe_is_event_query() && is_archive()){
				
					if(fw_get_db_settings_option( $events_switch )=='enabled'){
						$value = fw_get_db_settings_option( $events_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif( naslaan_helpers::naslaan_woocommerce_check() && is_shop() ){
				
					$shop_page = get_post( wc_get_page_id( 'shop' ) );
					
					if(fw_get_db_post_option( $shop_page->ID, $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( $shop_page->ID, $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif(is_single() || is_page()) {
				
					if(fw_get_db_post_option( get_the_ID(), $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( get_the_ID(), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} elseif((is_front_page() && is_home()) || is_home()) {
				
					if(fw_get_db_post_option( get_option( 'page_for_posts'), $page_switch )=='enabled'){
						$value = fw_get_db_post_option( get_option( 'page_for_posts'), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} else {
				
					$value = fw_get_db_settings_option( $theme_options );
					
				}
			}
			return $value;
 		}
 		
 		public static function naslaan_header_title_v2() {
	
			$value = '';
			if( naslaan_helpers::naslaan_unyson_check() ) {
			
				$theme_options = 'title_variants/variant-2/header_title_visibility/enabled/header_title';
				
				$page_options = 'header_custom_title/enabled/title_variants/variant-2/header_title_visibility/enabled/header_title';
				
				$events_options = 'events_header_custom_title/enabled/events_title_variants/variant-2/events_header_title_visibility/enabled/events_header_title';
				
				$page_switch= 'header_custom_title/header_custom_title_switch';
				
				$events_switch = 'events_header_custom_title/events_header_custom_title_switch';
				
				if( naslaan_helpers::naslaan_event_calendar_check() && tribe_is_event_query() && is_archive()){
				
					if(fw_get_db_settings_option( $events_switch )=='enabled'){
						$value = fw_get_db_settings_option( $events_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif( naslaan_helpers::naslaan_woocommerce_check() && is_shop() ){
				
					$shop_page = get_post( wc_get_page_id( 'shop' ) );
					
					if(fw_get_db_post_option( $shop_page->ID, $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( $shop_page->ID, $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif(is_single() || is_page()) {
				
					if(fw_get_db_post_option( get_the_ID(), $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( get_the_ID(), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} elseif((is_front_page() && is_home()) || is_home()) {
				
					if(fw_get_db_post_option( get_option( 'page_for_posts'), $page_switch )=='enabled'){
						$value = fw_get_db_post_option( get_option( 'page_for_posts'), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} else {
				
					$value = fw_get_db_settings_option( $theme_options );
					
				}
			}
			return $value;
 		}
 		
 		public static function naslaan_header_title_underline_v2() {
	
			$value = '';
			if( naslaan_helpers::naslaan_unyson_check() ) {
			
				$theme_options = 'title_variants/variant-2/header_title_visibility/enabled/header_title_underline';
				
				$page_options = 'header_custom_title/enabled/title_variants/variant-2/header_title_visibility/enabled/header_title_underline';
				
				$events_options = 'events_header_custom_title/enabled/events_title_variants/variant-2/events_header_title_visibility/enabled/events_header_title_underline';
				
				$page_switch= 'header_custom_title/header_custom_title_switch';
				
				$events_switch = 'events_header_custom_title/events_header_custom_title_switch';
				
				if( naslaan_helpers::naslaan_event_calendar_check() && tribe_is_event_query() && is_archive()){
				
					if(fw_get_db_settings_option( $events_switch )=='enabled'){
						$value = fw_get_db_settings_option( $events_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif( naslaan_helpers::naslaan_woocommerce_check() && is_shop() ){
				
					$shop_page = get_post( wc_get_page_id( 'shop' ) );
					
					if(fw_get_db_post_option( $shop_page->ID, $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( $shop_page->ID, $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif(is_single() || is_page()) {
				
					if(fw_get_db_post_option( get_the_ID(), $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( get_the_ID(), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} elseif((is_front_page() && is_home()) || is_home()) {
				
					if(fw_get_db_post_option( get_option( 'page_for_posts'), $page_switch )=='enabled'){
						$value = fw_get_db_post_option( get_option( 'page_for_posts'), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} else {
				
					$value = fw_get_db_settings_option( $theme_options );
					
				}
			}
			return $value;
 		}
 		
 		
 		public static function naslaan_header_title_desc_visibility_v2() {
	
			$value = '';
			if( naslaan_helpers::naslaan_unyson_check() ) {
			
				$theme_options = 'title_variants/variant-2/header_title_desc_visibility/header_title_switch';
				
				$page_options = 'header_custom_title/enabled/title_variants/variant-2/header_title_desc_visibility/header_title_switch';
				
				$events_options = 'events_header_custom_title/enabled/events_title_variants/variant-2/events_header_title_desc_visibility/events_header_title_switch';
				
				$page_switch= 'header_custom_title/header_custom_title_switch';
				
				$events_switch = 'events_header_custom_title/events_header_custom_title_switch';
				
				if( naslaan_helpers::naslaan_event_calendar_check() && tribe_is_event_query() && is_archive()){
				
					if(fw_get_db_settings_option( $events_switch )=='enabled'){
						$value = fw_get_db_settings_option( $events_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif( naslaan_helpers::naslaan_woocommerce_check() && is_shop() ){
				
					$shop_page = get_post( wc_get_page_id( 'shop' ) );
					
					if(fw_get_db_post_option( $shop_page->ID, $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( $shop_page->ID, $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif(is_single() || is_page()) {
				
					if(fw_get_db_post_option( get_the_ID(), $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( get_the_ID(), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} elseif((is_front_page() && is_home()) || is_home()) {
				
					if(fw_get_db_post_option( get_option( 'page_for_posts'), $page_switch )=='enabled'){
						$value = fw_get_db_post_option( get_option( 'page_for_posts'), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} else {
				
					$value = fw_get_db_settings_option( $theme_options );
					
				}
			}
			return $value;
 		}
 		
 		public static function naslaan_header_title_desc_v2() {
	
			$value = '';
			if( naslaan_helpers::naslaan_unyson_check() ) {
			
				$theme_options = 'title_variants/variant-2/header_title_desc_visibility/enabled/header_title_desc';
				
				$page_options = 'header_custom_title/enabled/title_variants/variant-2/header_title_desc_visibility/enabled/header_title_desc';
				
				$events_options = 'events_header_custom_title/enabled/events_title_variants/variant-2/events_header_title_desc_visibility/enabled/events_header_title_desc';
				
				$page_switch= 'header_custom_title/header_custom_title_switch';
				
				$events_switch = 'events_header_custom_title/events_header_custom_title_switch';
				
				if( naslaan_helpers::naslaan_event_calendar_check() && tribe_is_event_query() && is_archive()){
				
					if(fw_get_db_settings_option( $events_switch )=='enabled'){
						$value = fw_get_db_settings_option( $events_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif( naslaan_helpers::naslaan_woocommerce_check() && is_shop() ){
				
					$shop_page = get_post( wc_get_page_id( 'shop' ) );
					
					if(fw_get_db_post_option( $shop_page->ID, $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( $shop_page->ID, $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif(is_single() || is_page()) {
				
					if(fw_get_db_post_option( get_the_ID(), $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( get_the_ID(), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} elseif((is_front_page() && is_home()) || is_home()) {
				
					if(fw_get_db_post_option( get_option( 'page_for_posts'), $page_switch )=='enabled'){
						$value = fw_get_db_post_option( get_option( 'page_for_posts'), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} else {
				
					$value = fw_get_db_settings_option( $theme_options );
					
				}
			}
			return $value;
 		}
 		
 		public static function naslaan_header_title_desc_underline_v2() {
	
			$value = '';
			if( naslaan_helpers::naslaan_unyson_check() ) {
			
				$theme_options = 'title_variants/variant-2/header_title_desc_visibility/enabled/header_title_desc_underline';
				
				$page_options = 'header_custom_title/enabled/title_variants/variant-2/header_title_desc_visibility/enabled/header_title_desc_underline';
				
				$events_options = 'events_header_custom_title/enabled/events_title_variants/variant-2/events_header_title_desc_visibility/enabled/events_header_title_desc_underline';
				
				$page_switch= 'header_custom_title/header_custom_title_switch';
				
				$events_switch = 'events_header_custom_title/events_header_custom_title_switch';
				
				if( naslaan_helpers::naslaan_event_calendar_check() && tribe_is_event_query() && is_archive()){
				
					if(fw_get_db_settings_option( $events_switch )=='enabled'){
						$value = fw_get_db_settings_option( $events_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif( naslaan_helpers::naslaan_woocommerce_check() && is_shop() ){
				
					$shop_page = get_post( wc_get_page_id( 'shop' ) );
					
					if(fw_get_db_post_option( $shop_page->ID, $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( $shop_page->ID, $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif(is_single() || is_page()) {
				
					if(fw_get_db_post_option( get_the_ID(), $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( get_the_ID(), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} elseif((is_front_page() && is_home()) || is_home()) {
				
					if(fw_get_db_post_option( get_option( 'page_for_posts'), $page_switch )=='enabled'){
						$value = fw_get_db_post_option( get_option( 'page_for_posts'), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} else {
				
					$value = fw_get_db_settings_option( $theme_options );
					
				}
			}
			return $value;
 		}
 
 		
 		public static function naslaan_header_background_type() {
	
			$value = '';
			if( naslaan_helpers::naslaan_unyson_check() ) {
			
				$theme_options = 'header_background_choice/header_background_type';
				
				$page_options = 'header_custom_background/enabled/header_background_choice/header_background_type';
				
				$events_options = 'events_header_custom_background/enabled/events_header_background_choice/events_header_background_type';
				
				$page_switch= 'header_custom_background/header_custom_background_switch';
				
				$events_switch = 'events_header_custom_background/events_header_custom_background_switch';
				
				if( naslaan_helpers::naslaan_event_calendar_check() && tribe_is_event_query() && is_archive()){
				
					if(fw_get_db_settings_option( $events_switch )=='enabled'){
						$value = fw_get_db_settings_option( $events_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif( naslaan_helpers::naslaan_woocommerce_check() && is_shop() ){
				
					$shop_page = get_post( wc_get_page_id( 'shop' ) );
					
					if(fw_get_db_post_option( $shop_page->ID, $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( $shop_page->ID, $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif(is_single() || is_page()) {
				
					if(fw_get_db_post_option( get_the_ID(), $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( get_the_ID(), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} elseif((is_front_page() && is_home()) || is_home()) {
				
					if(fw_get_db_post_option( get_option( 'page_for_posts'), $page_switch )=='enabled'){
						$value = fw_get_db_post_option( get_option( 'page_for_posts'), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} else {
				
					$value = fw_get_db_settings_option( $theme_options );
					
				}
			}
			return $value;
 		}
 		
 		public static function naslaan_header_background_color() {
	
			$value = '';
			if( naslaan_helpers::naslaan_unyson_check() ) {
			
				$theme_options = 'header_background_choice/background_color/header_background_color';
				
				$page_options = 'header_custom_background/enabled/header_background_choice/background_color/header_background_color';
				
				$events_options = 'events_header_custom_background/enabled/events_header_background_choice/background_color/events_header_background_color';
				
				$page_switch= 'header_custom_background/header_custom_background_switch';
				
				$events_switch = 'events_header_custom_background/events_header_custom_background_switch';
				
				
				if( naslaan_helpers::naslaan_event_calendar_check() && tribe_is_event_query() && is_archive()){
				
					if(fw_get_db_settings_option( $events_switch )=='enabled'){
						$value = fw_get_db_settings_option( $events_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif( naslaan_helpers::naslaan_woocommerce_check() && is_shop() ){
				
					$shop_page = get_post( wc_get_page_id( 'shop' ) );
					
					if(fw_get_db_post_option( $shop_page->ID, $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( $shop_page->ID, $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif(is_single() || is_page()) {
				
					if(fw_get_db_post_option( get_the_ID(), $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( get_the_ID(), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} elseif((is_front_page() && is_home()) || is_home()) {
				
					if(fw_get_db_post_option( get_option( 'page_for_posts'), $page_switch )=='enabled'){
						$value = fw_get_db_post_option( get_option( 'page_for_posts'), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} else {
				
					$value = fw_get_db_settings_option( $theme_options );
					
				}
			}
			return $value;
 		}
 		
 		public static function naslaan_header_background_image_color() {
	
			$value = '';
			if( naslaan_helpers::naslaan_unyson_check() ) {
			
				$theme_options = 'header_background_choice/background_image/header_background_color';
				
				$page_options = 'header_custom_background/enabled/header_background_choice/background_image/header_background_color';
				
				$events_options = 'events_header_custom_background/enabled/events_header_background_choice/background_image/events_header_background_color';	
				
				$page_switch= 'header_custom_background/header_custom_background_switch';
				
				$events_switch = 'events_header_custom_background/events_header_custom_background_switch';
				
				
				if( naslaan_helpers::naslaan_event_calendar_check() && tribe_is_event_query() && is_archive()){
				
					if(fw_get_db_settings_option( $events_switch )=='enabled'){
						$value = fw_get_db_settings_option( $events_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif( naslaan_helpers::naslaan_woocommerce_check() && is_shop() ){
				
					$shop_page = get_post( wc_get_page_id( 'shop' ) );
					
					if(fw_get_db_post_option( $shop_page->ID, $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( $shop_page->ID, $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif(is_single() || is_page()) {
				
					if(fw_get_db_post_option( get_the_ID(), $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( get_the_ID(), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} elseif((is_front_page() && is_home()) || is_home()) {
				
					if(fw_get_db_post_option( get_option( 'page_for_posts'), $page_switch )=='enabled'){
						$value = fw_get_db_post_option( get_option( 'page_for_posts'), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} else {
				
					$value = fw_get_db_settings_option( $theme_options );
					
				}
			}
			return $value;
 		}
 		
 		public static function naslaan_header_background_settings() {
	
			$value = '';
			if( naslaan_helpers::naslaan_unyson_check() ) {
			
				$theme_options = 'header_background_choice/background_image/header_background_settings';
				
				$page_options = 'header_custom_background/enabled/header_background_choice/background_image/header_background_settings';
				
				$events_options = 'events_header_custom_background/enabled/events_header_background_choice/background_image/events_header_background_settings';
				
				$page_switch= 'header_custom_background/header_custom_background_switch';
				
				$events_switch = 'events_header_custom_background/events_header_custom_background_switch';
				
				if( naslaan_helpers::naslaan_event_calendar_check() && tribe_is_event_query() && is_archive()){
				
					if(fw_get_db_settings_option( $events_switch )=='enabled'){
						$value = fw_get_db_settings_option( $events_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif( naslaan_helpers::naslaan_woocommerce_check() && is_shop() ){
				
					$shop_page = get_post( wc_get_page_id( 'shop' ) );
					
					if(fw_get_db_post_option( $shop_page->ID, $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( $shop_page->ID, $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif(is_single() || is_page()) {
				
					if(fw_get_db_post_option( get_the_ID(), $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( get_the_ID(), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} elseif((is_front_page() && is_home()) || is_home()) {
				
					if(fw_get_db_post_option( get_option( 'page_for_posts'), $page_switch )=='enabled'){
						$value = fw_get_db_post_option( get_option( 'page_for_posts'), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} else {
				
					$value = fw_get_db_settings_option( $theme_options );
					
				}
			}
			return $value;
 		}
 		
 		public static function naslaan_header_background_image() {
	
			$value = '';
			if( naslaan_helpers::naslaan_unyson_check() ) {
			
				$theme_options = 'header_background_choice/background_image/header_background_image/url';
				
				$page_options = 'header_custom_background/enabled/header_background_choice/background_image/header_background_image/url';
				
				$events_options = 'events_header_custom_background/enabled/events_header_background_choice/background_image/header_background_image/url';
				
				$page_switch= 'header_custom_background/header_custom_background_switch';
				
				$events_switch = 'events_header_custom_background/events_header_custom_background_switch';
				
				if( naslaan_helpers::naslaan_event_calendar_check() && tribe_is_event_query() && is_archive()){
				
					if(fw_get_db_settings_option( $events_switch )=='enabled'){
						$value = fw_get_db_settings_option( $events_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif( naslaan_helpers::naslaan_woocommerce_check() && is_shop() ){
				
					$shop_page = get_post( wc_get_page_id( 'shop' ) );
					
					if(fw_get_db_post_option( $shop_page->ID, $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( $shop_page->ID, $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif(is_single() || is_page()) {
				
					if(fw_get_db_post_option( get_the_ID(), $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( get_the_ID(), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} elseif((is_front_page() && is_home()) || is_home()) {
				
					if(fw_get_db_post_option( get_option( 'page_for_posts'), $page_switch )=='enabled'){
						$value = fw_get_db_post_option( get_option( 'page_for_posts'), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} else {
				
					$value = fw_get_db_settings_option( $theme_options );
					
				}
			}
			return $value;
 		}
 		
 		public static function naslaan_header_animated_gradient_visibility() {
	
			$value = '';
			if( naslaan_helpers::naslaan_unyson_check() ) {
			
				$theme_options = 'header_background_choice/background_image/animated_gradient/animated_gradient_switch';
				
				$page_options = 'header_custom_background/enabled/header_background_choice/background_image/animated_gradient/animated_gradient_switch';
				
				$events_options = 'events_header_custom_background/enabled/events_header_background_choice/background_image/animated_gradient/animated_gradient_switch';
				
				$page_switch= 'header_custom_background/header_custom_background_switch';
				
				$events_switch = 'events_header_custom_background/events_header_custom_background_switch';
				
				if( naslaan_helpers::naslaan_event_calendar_check() && tribe_is_event_query() && is_archive()){
				
					if(fw_get_db_settings_option( $events_switch )=='enabled'){
						$value = fw_get_db_settings_option( $events_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif( naslaan_helpers::naslaan_woocommerce_check() && is_shop() ){
				
					$shop_page = get_post( wc_get_page_id( 'shop' ) );
					
					if(fw_get_db_post_option( $shop_page->ID, $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( $shop_page->ID, $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif(is_single() || is_page()) {
				
					if(fw_get_db_post_option( get_the_ID(), $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( get_the_ID(), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} elseif((is_front_page() && is_home()) || is_home()) {
				
					if(fw_get_db_post_option( get_option( 'page_for_posts'), $page_switch )=='enabled'){
						$value = fw_get_db_post_option( get_option( 'page_for_posts'), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} else {
				
					$value = fw_get_db_settings_option( $theme_options );
					
				}
			}
			return $value;
 		}
 		
 		public static function naslaan_header_animated_gradient_color_1() {
	
			$value = '';
			if( naslaan_helpers::naslaan_unyson_check() ) {
			
				$theme_options = 'header_background_choice/background_image/animated_gradient/enabled/animated_gradient_color_1';
				
				$page_options = 'header_custom_background/enabled/header_background_choice/background_image/animated_gradient/enabled/animated_gradient_color_1';
				
				$events_options = 'events_header_custom_background/enabled/events_header_background_choice/background_image/animated_gradient/enabled/animated_gradient_color_1';
				
				$page_switch= 'header_custom_background/header_custom_background_switch';
				
				$events_switch = 'events_header_custom_background/events_header_custom_background_switch';
				
				if( naslaan_helpers::naslaan_event_calendar_check() && tribe_is_event_query() && is_archive()){
				
					if(fw_get_db_settings_option( $events_switch )=='enabled'){
						$value = fw_get_db_settings_option( $events_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif( naslaan_helpers::naslaan_woocommerce_check() && is_shop() ){
				
					$shop_page = get_post( wc_get_page_id( 'shop' ) );
					
					if(fw_get_db_post_option( $shop_page->ID, $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( $shop_page->ID, $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif(is_single() || is_page()) {
				
					if(fw_get_db_post_option( get_the_ID(), $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( get_the_ID(), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} elseif((is_front_page() && is_home()) || is_home()) {
				
					if(fw_get_db_post_option( get_option( 'page_for_posts'), $page_switch )=='enabled'){
						$value = fw_get_db_post_option( get_option( 'page_for_posts'), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} else {
				
					$value = fw_get_db_settings_option( $theme_options );
					
				}
			}
			return $value;
 		}
 		
 		public static function naslaan_header_animated_gradient_color_2() {
	
			$value = '';
			if( naslaan_helpers::naslaan_unyson_check() ) {
			
				$theme_options = 'header_background_choice/background_image/animated_gradient/enabled/animated_gradient_color_2';
				
				$page_options = 'header_custom_background/enabled/header_background_choice/background_image/animated_gradient/enabled/animated_gradient_color_2';
				
				$events_options = 'events_header_custom_background/enabled/events_header_background_choice/background_image/animated_gradient/enabled/animated_gradient_color_2';
				
				$page_switch= 'header_custom_background/header_custom_background_switch';
				
				$events_switch = 'events_header_custom_background/events_header_custom_background_switch';
				
				if( naslaan_helpers::naslaan_event_calendar_check() && tribe_is_event_query() && is_archive()){
				
					if(fw_get_db_settings_option( $events_switch )=='enabled'){
						$value = fw_get_db_settings_option( $events_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif( naslaan_helpers::naslaan_woocommerce_check() && is_shop() ){
				
					$shop_page = get_post( wc_get_page_id( 'shop' ) );
					
					if(fw_get_db_post_option( $shop_page->ID, $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( $shop_page->ID, $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif(is_single() || is_page()) {
				
					if(fw_get_db_post_option( get_the_ID(), $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( get_the_ID(), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} elseif((is_front_page() && is_home()) || is_home()) {
				
					if(fw_get_db_post_option( get_option( 'page_for_posts'), $page_switch )=='enabled'){
						$value = fw_get_db_post_option( get_option( 'page_for_posts'), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} else {
				
					$value = fw_get_db_settings_option( $theme_options );
					
				}
			}
			return $value;
 		}
 		
 		public static function naslaan_header_animated_gradient_opacity() {
	
			$value = '';
			if( naslaan_helpers::naslaan_unyson_check() ) {
			
				$theme_options = 'header_background_choice/background_image/animated_gradient/enabled/animated_gradient_opacity';
				
				$page_options = 'header_custom_background/enabled/header_background_choice/background_image/animated_gradient/enabled/animated_gradient_opacity';
				
				$events_options = 'events_header_custom_background/enabled/events_header_background_choice/background_image/animated_gradient/enabled/animated_gradient_opacity';
				
				$page_switch= 'header_custom_background/header_custom_background_switch';
				
				$events_switch = 'events_header_custom_background/events_header_custom_background_switch';
				
				if( naslaan_helpers::naslaan_event_calendar_check() && tribe_is_event_query() && is_archive()){
				
					if(fw_get_db_settings_option( $events_switch )=='enabled'){
						$value = fw_get_db_settings_option( $events_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif( naslaan_helpers::naslaan_woocommerce_check() && is_shop() ){
				
					$shop_page = get_post( wc_get_page_id( 'shop' ) );
					
					if(fw_get_db_post_option( $shop_page->ID, $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( $shop_page->ID, $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif(is_single() || is_page()) {
				
					if(fw_get_db_post_option( get_the_ID(), $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( get_the_ID(), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} elseif((is_front_page() && is_home()) || is_home()) {
				
					if(fw_get_db_post_option( get_option( 'page_for_posts'), $page_switch )=='enabled'){
						$value = fw_get_db_post_option( get_option( 'page_for_posts'), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} else {
				
					$value = fw_get_db_settings_option( $theme_options );
					
				}
			}
			return $value;
 		}
 		

		public static function naslaan_footer_visibility() {
			if( naslaan_helpers::naslaan_unyson_check() ) {
				
				$footer_visibility = '';
				
				if( naslaan_helpers::naslaan_event_calendar_check() && tribe_is_event_query() && is_archive()){
				
					$footer_visibility = fw_get_db_settings_option( 'events_footer' );
				
				}elseif( naslaan_helpers::naslaan_woocommerce_check() && is_shop() ){
				
					$shop_page = get_post( wc_get_page_id( 'shop' ) );
					$footer_visibility  = fw_get_db_post_option( $shop_page->ID, 'page_footer' );
				
				}elseif(is_single() || is_page()) {
				
					$footer_visibility  = fw_get_db_post_option( get_the_ID(), 'page_footer' );
					
				} elseif((is_front_page() && is_home()) || is_home()) {
				
					$footer_visibility = fw_get_db_post_option( get_option( 'page_for_posts'), 'page_footer' );
					
				}
				return $footer_visibility;
				
			}
		}
		
		public static function naslaan_footer_bottom_visibility() {
			if( naslaan_helpers::naslaan_unyson_check() ) {
				
				$footer_bottom_visibility = '';
				
				if( naslaan_helpers::naslaan_event_calendar_check() && tribe_is_event_query() && is_archive()){
				
					$footer_bottom_visibility = fw_get_db_settings_option( 'events_bottom_footer' );
				
				}elseif( naslaan_helpers::naslaan_woocommerce_check() && is_shop() ){
				
					$shop_page = get_post( wc_get_page_id( 'shop' ) );
					$footer_bottom_visibility  = fw_get_db_post_option( $shop_page->ID, 'page_bottom_footer' );
				
				}elseif(is_single() || is_page()) {
				
					$footer_bottom_visibility  = fw_get_db_post_option( get_the_ID(), 'page_bottom_footer' );
					
				} elseif((is_front_page() && is_home()) || is_home()) {
				
					$footer_bottom_visibility = fw_get_db_post_option( get_option( 'page_for_posts'), 'page_bottom_footer' );
					
				}else{
					
					$footer_bottom_visibility = fw_get_db_settings_option('footer_bottom_options/footer_bottom_switch');
					
				}
				return $footer_bottom_visibility;
				
			}
		}
		
		
 		public static function naslaan_header_types_left_background() {
	
			$value = '';
			if( naslaan_helpers::naslaan_unyson_check() ) {
			
				$theme_options = 'header_types/left/header_background';
				
				$page_options = 'header_custom_styles/enabled/header_background';
				
				$events_options = 'events_header_custom_styles/enabled/header_background';
				
				$page_switch= 'header_custom_styles/header_custom_styles_switch';
				
				$events_switch = 'events_header_custom_styles/header_custom_styles_switch';
				
				if( naslaan_helpers::naslaan_event_calendar_check() && tribe_is_event_query() && is_archive()){
				
					if(fw_get_db_settings_option( $events_switch )=='enabled'){
						$value = fw_get_db_settings_option( $events_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif( naslaan_helpers::naslaan_woocommerce_check() && is_shop() ){
				
					$shop_page = get_post( wc_get_page_id( 'shop' ) );
					
					if(fw_get_db_post_option( $shop_page->ID, $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( $shop_page->ID, $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif(is_single() || is_page()) {
				
					if(fw_get_db_post_option( get_the_ID(), $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( get_the_ID(), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} elseif((is_front_page() && is_home()) || is_home()) {
				
					if(fw_get_db_post_option( get_option( 'page_for_posts'), $page_switch )=='enabled'){
						$value = fw_get_db_post_option( get_option( 'page_for_posts'), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} else {
				
					$value = fw_get_db_settings_option( $theme_options );
					
				}
			}
			return $value;
 		}
 		
 		public static function naslaan_header_types_center_background() {
	
			$value = '';
			if( naslaan_helpers::naslaan_unyson_check() ) {
			
				$theme_options = 'header_types/center/header_background';
				
				$page_options = 'header_custom_styles/enabled/header_background';
				
				$events_options = 'events_header_custom_styles/enabled/header_background';
				
				$page_switch= 'header_custom_styles/header_custom_styles_switch';
				
				$events_switch = 'events_header_custom_styles/header_custom_styles_switch';
				
				if( naslaan_helpers::naslaan_event_calendar_check() && tribe_is_event_query() && is_archive()){
				
					if(fw_get_db_settings_option( $events_switch )=='enabled'){
						$value = fw_get_db_settings_option( $events_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif( naslaan_helpers::naslaan_woocommerce_check() && is_shop() ){
				
					$shop_page = get_post( wc_get_page_id( 'shop' ) );
					
					if(fw_get_db_post_option( $shop_page->ID, $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( $shop_page->ID, $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif(is_single() || is_page()) {
				
					if(fw_get_db_post_option( get_the_ID(), $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( get_the_ID(), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} elseif((is_front_page() && is_home()) || is_home()) {
				
					if(fw_get_db_post_option( get_option( 'page_for_posts'), $page_switch )=='enabled'){
						$value = fw_get_db_post_option( get_option( 'page_for_posts'), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} else {
				
					$value = fw_get_db_settings_option( $theme_options );
					
				}
			}
			return $value;
 		}
 		
 		public static function naslaan_header_types_side_background() {
	
			$value = '';
			if( naslaan_helpers::naslaan_unyson_check() ) {
			
				$theme_options = 'header_types/side/header_background';
				
				$page_options = 'header_custom_styles/enabled/header_background';
				
				$events_options = 'events_header_custom_styles/enabled/header_background';
				
				$page_switch= 'header_custom_styles/header_custom_styles_switch';
				
				$events_switch = 'events_header_custom_styles/header_custom_styles_switch';
				
				if( naslaan_helpers::naslaan_event_calendar_check() && tribe_is_event_query() && is_archive()){
				
					if(fw_get_db_settings_option( $events_switch )=='enabled'){
						$value = fw_get_db_settings_option( $events_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif( naslaan_helpers::naslaan_woocommerce_check() && is_shop() ){
				
					$shop_page = get_post( wc_get_page_id( 'shop' ) );
					
					if(fw_get_db_post_option( $shop_page->ID, $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( $shop_page->ID, $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif(is_single() || is_page()) {
				
					if(fw_get_db_post_option( get_the_ID(), $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( get_the_ID(), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} elseif((is_front_page() && is_home()) || is_home()) {
				
					if(fw_get_db_post_option( get_option( 'page_for_posts'), $page_switch )=='enabled'){
						$value = fw_get_db_post_option( get_option( 'page_for_posts'), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} else {
				
					$value = fw_get_db_settings_option( $theme_options );
					
				}
			}
			return $value;
 		}
 		
 		public static function naslaan_header_types_left_top_border_color() {
	
			$value = '';
			if( naslaan_helpers::naslaan_unyson_check() ) {
			
				$theme_options = 'header_types/left/middle_header_top_border/enabled/top_border_color';
				
				$page_options = 'header_custom_styles/enabled/top_border_color';
				
				$events_options = 'events_header_custom_styles/enabled/top_border_color';
				
				$page_switch= 'header_custom_styles/header_custom_styles_switch';
				
				$events_switch = 'events_header_custom_styles/header_custom_styles_switch';
				
				if( naslaan_helpers::naslaan_event_calendar_check() && tribe_is_event_query() && is_archive()){
				
					if(fw_get_db_settings_option( $events_switch )=='enabled'){
						$value = fw_get_db_settings_option( $events_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif( naslaan_helpers::naslaan_woocommerce_check() && is_shop() ){
				
					$shop_page = get_post( wc_get_page_id( 'shop' ) );
					
					if(fw_get_db_post_option( $shop_page->ID, $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( $shop_page->ID, $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif(is_single() || is_page()) {
				
					if(fw_get_db_post_option( get_the_ID(), $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( get_the_ID(), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} elseif((is_front_page() && is_home()) || is_home()) {
				
					if(fw_get_db_post_option( get_option( 'page_for_posts'), $page_switch )=='enabled'){
						$value = fw_get_db_post_option( get_option( 'page_for_posts'), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} else {
				
					$value = fw_get_db_settings_option( $theme_options );
					
				}
			}
			return $value;
 		}
 		
 		public static function naslaan_header_types_left_bottom_border_color() {
	
			$value = '';
			if( naslaan_helpers::naslaan_unyson_check() ) {
			
				$theme_options = 'header_types/left/middle_header_bottom_border/enabled/bottom_border_color';
				
				$page_options = 'header_custom_styles/enabled/bottom_border_color';
				
				$events_options = 'events_header_custom_styles/enabled/bottom_border_color';
				
				$page_switch= 'header_custom_styles/header_custom_styles_switch';
				
				$events_switch = 'events_header_custom_styles/header_custom_styles_switch';
				
				if( naslaan_helpers::naslaan_event_calendar_check() && tribe_is_event_query() && is_archive()){
				
					if(fw_get_db_settings_option( $events_switch )=='enabled'){
						$value = fw_get_db_settings_option( $events_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif( naslaan_helpers::naslaan_woocommerce_check() && is_shop() ){
				
					$shop_page = get_post( wc_get_page_id( 'shop' ) );
					
					if(fw_get_db_post_option( $shop_page->ID, $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( $shop_page->ID, $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif(is_single() || is_page()) {
				
					if(fw_get_db_post_option( get_the_ID(), $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( get_the_ID(), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} elseif((is_front_page() && is_home()) || is_home()) {
				
					if(fw_get_db_post_option( get_option( 'page_for_posts'), $page_switch )=='enabled'){
						$value = fw_get_db_post_option( get_option( 'page_for_posts'), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} else {
				
					$value = fw_get_db_settings_option( $theme_options );
					
				}
			}
			return $value;
 		}
 		
 		public static function naslaan_header_types_center_top_border_color() {
	
			$value = '';
			if( naslaan_helpers::naslaan_unyson_check() ) {
			
				$theme_options = 'header_types/center/middle_header_top_border/enabled/top_border_color';
				
				$page_options = 'header_custom_styles/enabled/top_border_color';
				
				$events_options = 'events_header_custom_styles/enabled/top_border_color';
				
				$page_switch= 'header_custom_styles/header_custom_styles_switch';
				
				$events_switch = 'events_header_custom_styles/header_custom_styles_switch';
				
				if( naslaan_helpers::naslaan_event_calendar_check() && tribe_is_event_query() && is_archive()){
				
					if(fw_get_db_settings_option( $events_switch )=='enabled'){
						$value = fw_get_db_settings_option( $events_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif( naslaan_helpers::naslaan_woocommerce_check() && is_shop() ){
				
					$shop_page = get_post( wc_get_page_id( 'shop' ) );
					
					if(fw_get_db_post_option( $shop_page->ID, $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( $shop_page->ID, $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif(is_single() || is_page()) {
				
					if(fw_get_db_post_option( get_the_ID(), $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( get_the_ID(), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} elseif((is_front_page() && is_home()) || is_home()) {
				
					if(fw_get_db_post_option( get_option( 'page_for_posts'), $page_switch )=='enabled'){
						$value = fw_get_db_post_option( get_option( 'page_for_posts'), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} else {
				
					$value = fw_get_db_settings_option( $theme_options );
					
				}
			}
			return $value;
 		}
 		
 		public static function naslaan_header_types_center_bottom_border_color() {
	
			$value = '';
			if( naslaan_helpers::naslaan_unyson_check() ) {
			
				$theme_options = 'header_types/center/middle_header_bottom_border/enabled/bottom_border_color';
				
				$page_options = 'header_custom_styles/enabled/bottom_border_color';
				
				$events_options = 'events_header_custom_styles/enabled/bottom_border_color';
				
				$page_switch= 'header_custom_styles/header_custom_styles_switch';
				
				$events_switch = 'events_header_custom_styles/header_custom_styles_switch';
				
				if( naslaan_helpers::naslaan_event_calendar_check() && tribe_is_event_query() && is_archive()){
				
					if(fw_get_db_settings_option( $events_switch )=='enabled'){
						$value = fw_get_db_settings_option( $events_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif( naslaan_helpers::naslaan_woocommerce_check() && is_shop() ){
				
					$shop_page = get_post( wc_get_page_id( 'shop' ) );
					
					if(fw_get_db_post_option( $shop_page->ID, $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( $shop_page->ID, $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif(is_single() || is_page()) {
				
					if(fw_get_db_post_option( get_the_ID(), $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( get_the_ID(), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} elseif((is_front_page() && is_home()) || is_home()) {
				
					if(fw_get_db_post_option( get_option( 'page_for_posts'), $page_switch )=='enabled'){
						$value = fw_get_db_post_option( get_option( 'page_for_posts'), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} else {
				
					$value = fw_get_db_settings_option( $theme_options );
					
				}
			}
			return $value;
 		}
 		
 		public static function naslaan_header_types_left_right_bar_border_color_v1() {
	
			$value = '';
			if( naslaan_helpers::naslaan_unyson_check() ) {
			
				$theme_options = 'header_types/left/navigation_types/variant_1/right_bar_border/enabled/right_bar_border_color';
				
				$page_options = 'header_custom_styles/enabled/right_bar_border_color';
				
				$events_options = 'events_header_custom_styles/enabled/right_bar_border_color';
				
				$page_switch= 'header_custom_styles/header_custom_styles_switch';
				
				$events_switch = 'events_header_custom_styles/header_custom_styles_switch';
				
				if( naslaan_helpers::naslaan_event_calendar_check() && tribe_is_event_query() && is_archive()){
				
					if(fw_get_db_settings_option( $events_switch )=='enabled'){
						$value = fw_get_db_settings_option( $events_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif( naslaan_helpers::naslaan_woocommerce_check() && is_shop() ){
				
					$shop_page = get_post( wc_get_page_id( 'shop' ) );
					
					if(fw_get_db_post_option( $shop_page->ID, $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( $shop_page->ID, $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif(is_single() || is_page()) {
				
					if(fw_get_db_post_option( get_the_ID(), $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( get_the_ID(), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} elseif((is_front_page() && is_home()) || is_home()) {
				
					if(fw_get_db_post_option( get_option( 'page_for_posts'), $page_switch )=='enabled'){
						$value = fw_get_db_post_option( get_option( 'page_for_posts'), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} else {
				
					$value = fw_get_db_settings_option( $theme_options );
					
				}
			}
			return $value;
 		}
 		
 		public static function naslaan_header_types_left_right_bar_border_color_v2() {
	
			$value = '';
			if( naslaan_helpers::naslaan_unyson_check() ) {
			
				$theme_options = 'header_types/left/navigation_types/variant_2/right_bar_border/enabled/right_bar_border_color';
				
				$page_options = 'header_custom_styles/enabled/right_bar_border_color';
				
				$events_options = 'events_header_custom_styles/enabled/right_bar_border_color';
				
				$page_switch= 'header_custom_styles/header_custom_styles_switch';
				
				$events_switch = 'events_header_custom_styles/header_custom_styles_switch';
				
				if( naslaan_helpers::naslaan_event_calendar_check() && tribe_is_event_query() && is_archive()){
				
					if(fw_get_db_settings_option( $events_switch )=='enabled'){
						$value = fw_get_db_settings_option( $events_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif( naslaan_helpers::naslaan_woocommerce_check() && is_shop() ){
				
					$shop_page = get_post( wc_get_page_id( 'shop' ) );
					
					if(fw_get_db_post_option( $shop_page->ID, $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( $shop_page->ID, $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif(is_single() || is_page()) {
				
					if(fw_get_db_post_option( get_the_ID(), $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( get_the_ID(), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} elseif((is_front_page() && is_home()) || is_home()) {
				
					if(fw_get_db_post_option( get_option( 'page_for_posts'), $page_switch )=='enabled'){
						$value = fw_get_db_post_option( get_option( 'page_for_posts'), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} else {
				
					$value = fw_get_db_settings_option( $theme_options );
					
				}
			}
			return $value;
 		}
 		
 		public static function naslaan_header_types_left_right_bar_border_color_v3() {
	
			$value = '';
			if( naslaan_helpers::naslaan_unyson_check() ) {
			
				$theme_options = 'header_types/left/navigation_types/variant_3/right_bar_border/enabled/right_bar_border_color';
				
				$page_options = 'header_custom_styles/enabled/right_bar_border_color';
				
				$events_options = 'events_header_custom_styles/enabled/right_bar_border_color';
				
				$page_switch= 'header_custom_styles/header_custom_styles_switch';
				
				$events_switch = 'events_header_custom_styles/header_custom_styles_switch';
				
				if( naslaan_helpers::naslaan_event_calendar_check() && tribe_is_event_query() && is_archive()){
				
					if(fw_get_db_settings_option( $events_switch )=='enabled'){
						$value = fw_get_db_settings_option( $events_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif( naslaan_helpers::naslaan_woocommerce_check() && is_shop() ){
				
					$shop_page = get_post( wc_get_page_id( 'shop' ) );
					
					if(fw_get_db_post_option( $shop_page->ID, $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( $shop_page->ID, $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif(is_single() || is_page()) {
				
					if(fw_get_db_post_option( get_the_ID(), $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( get_the_ID(), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} elseif((is_front_page() && is_home()) || is_home()) {
				
					if(fw_get_db_post_option( get_option( 'page_for_posts'), $page_switch )=='enabled'){
						$value = fw_get_db_post_option( get_option( 'page_for_posts'), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} else {
				
					$value = fw_get_db_settings_option( $theme_options );
					
				}
			}
			return $value;
 		}
 		
 		
 		public static function naslaan_header_types_center_right_bar_border_color_v1() {
	
			$value = '';
			if( naslaan_helpers::naslaan_unyson_check() ) {
			
				$theme_options = 'header_types/center/navigation_types/variant_1/right_bar_border/enabled/right_bar_border_color';
				
				$page_options = 'header_custom_styles/enabled/right_bar_border_color';
				
				$events_options = 'events_header_custom_styles/enabled/right_bar_border_color';
				
				$page_switch= 'header_custom_styles/header_custom_styles_switch';
				
				$events_switch = 'events_header_custom_styles/header_custom_styles_switch';
				
				if( naslaan_helpers::naslaan_event_calendar_check() && tribe_is_event_query() && is_archive()){
				
					if(fw_get_db_settings_option( $events_switch )=='enabled'){
						$value = fw_get_db_settings_option( $events_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif( naslaan_helpers::naslaan_woocommerce_check() && is_shop() ){
				
					$shop_page = get_post( wc_get_page_id( 'shop' ) );
					
					if(fw_get_db_post_option( $shop_page->ID, $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( $shop_page->ID, $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif(is_single() || is_page()) {
				
					if(fw_get_db_post_option( get_the_ID(), $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( get_the_ID(), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} elseif((is_front_page() && is_home()) || is_home()) {
				
					if(fw_get_db_post_option( get_option( 'page_for_posts'), $page_switch )=='enabled'){
						$value = fw_get_db_post_option( get_option( 'page_for_posts'), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} else {
				
					$value = fw_get_db_settings_option( $theme_options );
					
				}
			}
			return $value;
 		}
 		
 		public static function naslaan_header_types_center_right_bar_border_color_v2() {
	
			$value = '';
			if( naslaan_helpers::naslaan_unyson_check() ) {
			
				$theme_options = 'header_types/center/navigation_types/variant_2/right_bar_border/enabled/right_bar_border_color';
				
				$page_options = 'header_custom_styles/enabled/right_bar_border_color';
				
				$events_options = 'events_header_custom_styles/enabled/right_bar_border_color';
				
				$page_switch= 'header_custom_styles/header_custom_styles_switch';
				
				$events_switch = 'events_header_custom_styles/header_custom_styles_switch';
				
				if( naslaan_helpers::naslaan_event_calendar_check() && tribe_is_event_query() && is_archive()){
				
					if(fw_get_db_settings_option( $events_switch )=='enabled'){
						$value = fw_get_db_settings_option( $events_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif( naslaan_helpers::naslaan_woocommerce_check() && is_shop() ){
				
					$shop_page = get_post( wc_get_page_id( 'shop' ) );
					
					if(fw_get_db_post_option( $shop_page->ID, $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( $shop_page->ID, $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif(is_single() || is_page()) {
				
					if(fw_get_db_post_option( get_the_ID(), $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( get_the_ID(), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} elseif((is_front_page() && is_home()) || is_home()) {
				
					if(fw_get_db_post_option( get_option( 'page_for_posts'), $page_switch )=='enabled'){
						$value = fw_get_db_post_option( get_option( 'page_for_posts'), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} else {
				
					$value = fw_get_db_settings_option( $theme_options );
					
				}
			}
			return $value;
 		}
 		
 		public static function naslaan_header_types_center_right_bar_border_color_v3() {
	
			$value = '';
			if( naslaan_helpers::naslaan_unyson_check() ) {
			
				$theme_options = 'header_types/center/navigation_types/variant_3/right_bar_border/enabled/right_bar_border_color';
				
				$page_options = 'header_custom_styles/enabled/right_bar_border_color';
				
				$events_options = 'events_header_custom_styles/enabled/right_bar_border_color';
				
				$page_switch= 'header_custom_styles/header_custom_styles_switch';
				
				$events_switch = 'events_header_custom_styles/header_custom_styles_switch';
				
				if( naslaan_helpers::naslaan_event_calendar_check() && tribe_is_event_query() && is_archive()){
				
					if(fw_get_db_settings_option( $events_switch )=='enabled'){
						$value = fw_get_db_settings_option( $events_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif( naslaan_helpers::naslaan_woocommerce_check() && is_shop() ){
				
					$shop_page = get_post( wc_get_page_id( 'shop' ) );
					
					if(fw_get_db_post_option( $shop_page->ID, $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( $shop_page->ID, $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif(is_single() || is_page()) {
				
					if(fw_get_db_post_option( get_the_ID(), $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( get_the_ID(), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} elseif((is_front_page() && is_home()) || is_home()) {
				
					if(fw_get_db_post_option( get_option( 'page_for_posts'), $page_switch )=='enabled'){
						$value = fw_get_db_post_option( get_option( 'page_for_posts'), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} else {
				
					$value = fw_get_db_settings_option( $theme_options );
					
				}
			}
			return $value;
 		}
 		
 		public static function naslaan_header_types_center_left_bar_border_color_v1() {
	
			$value = '';
			if( naslaan_helpers::naslaan_unyson_check() ) {
			
				$theme_options = 'header_types/center/navigation_types/variant_1/left_bar_border/enabled/left_bar_border_color';
				
				$page_options = 'header_custom_styles/enabled/left_bar_border_color';
				
				$events_options = 'events_header_custom_styles/enabled/left_bar_border_color';
				
				$page_switch= 'header_custom_styles/header_custom_styles_switch';
				
				$events_switch = 'events_header_custom_styles/header_custom_styles_switch';
				
				if( naslaan_helpers::naslaan_event_calendar_check() && tribe_is_event_query() && is_archive()){
				
					if(fw_get_db_settings_option( $events_switch )=='enabled'){
						$value = fw_get_db_settings_option( $events_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif( naslaan_helpers::naslaan_woocommerce_check() && is_shop() ){
				
					$shop_page = get_post( wc_get_page_id( 'shop' ) );
					
					if(fw_get_db_post_option( $shop_page->ID, $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( $shop_page->ID, $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif(is_single() || is_page()) {
				
					if(fw_get_db_post_option( get_the_ID(), $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( get_the_ID(), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} elseif((is_front_page() && is_home()) || is_home()) {
				
					if(fw_get_db_post_option( get_option( 'page_for_posts'), $page_switch )=='enabled'){
						$value = fw_get_db_post_option( get_option( 'page_for_posts'), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} else {
				
					$value = fw_get_db_settings_option( $theme_options );
					
				}
			}
			return $value;
 		}
 		
 		public static function naslaan_header_types_center_left_bar_border_color_v2() {
	
			$value = '';
			if( naslaan_helpers::naslaan_unyson_check() ) {
			
				$theme_options = 'header_types/center/navigation_types/variant_2/left_bar_border/enabled/left_bar_border_color';
				
				$page_options = 'header_custom_styles/enabled/left_bar_border_color';
				
				$events_options = 'events_header_custom_styles/enabled/left_bar_border_color';
				
				$page_switch= 'header_custom_styles/header_custom_styles_switch';
				
				$events_switch = 'events_header_custom_styles/header_custom_styles_switch';
				
				if( naslaan_helpers::naslaan_event_calendar_check() && tribe_is_event_query() && is_archive()){
				
					if(fw_get_db_settings_option( $events_switch )=='enabled'){
						$value = fw_get_db_settings_option( $events_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif( naslaan_helpers::naslaan_woocommerce_check() && is_shop() ){
				
					$shop_page = get_post( wc_get_page_id( 'shop' ) );
					
					if(fw_get_db_post_option( $shop_page->ID, $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( $shop_page->ID, $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif(is_single() || is_page()) {
				
					if(fw_get_db_post_option( get_the_ID(), $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( get_the_ID(), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} elseif((is_front_page() && is_home()) || is_home()) {
				
					if(fw_get_db_post_option( get_option( 'page_for_posts'), $page_switch )=='enabled'){
						$value = fw_get_db_post_option( get_option( 'page_for_posts'), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} else {
				
					$value = fw_get_db_settings_option( $theme_options );
					
				}
			}
			return $value;
 		}
 		
 		public static function naslaan_header_types_center_left_bar_border_color_v3() {
	
			$value = '';
			if( naslaan_helpers::naslaan_unyson_check() ) {
			
				$theme_options = 'header_types/center/navigation_types/variant_3/left_bar_border/enabled/left_bar_border_color';
				
				$page_options = 'header_custom_styles/enabled/left_bar_border_color';
				
				$events_options = 'events_header_custom_styles/enabled/left_bar_border_color';
				
				$page_switch= 'header_custom_styles/header_custom_styles_switch';
				
				$events_switch = 'events_header_custom_styles/header_custom_styles_switch';
				
				if( naslaan_helpers::naslaan_event_calendar_check() && tribe_is_event_query() && is_archive()){
				
					if(fw_get_db_settings_option( $events_switch )=='enabled'){
						$value = fw_get_db_settings_option( $events_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif( naslaan_helpers::naslaan_woocommerce_check() && is_shop() ){
				
					$shop_page = get_post( wc_get_page_id( 'shop' ) );
					
					if(fw_get_db_post_option( $shop_page->ID, $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( $shop_page->ID, $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif(is_single() || is_page()) {
				
					if(fw_get_db_post_option( get_the_ID(), $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( get_the_ID(), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} elseif((is_front_page() && is_home()) || is_home()) {
				
					if(fw_get_db_post_option( get_option( 'page_for_posts'), $page_switch )=='enabled'){
						$value = fw_get_db_post_option( get_option( 'page_for_posts'), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} else {
				
					$value = fw_get_db_settings_option( $theme_options );
					
				}
			}
			return $value;
 		}
 		
 		
 		public static function naslaan_header_types_side_bottom_bar_border_color() {
	
			$value = '';
			if( naslaan_helpers::naslaan_unyson_check() ) {
			
				$theme_options = 'header_types/side/bottom_bar_border/enabled/bottom_bar_border_color';
				
				$page_options = 'header_custom_styles/enabled/bottom_bar_border_color';
				
				$events_options = 'events_header_custom_styles/enabled/bottom_bar_border_color';
				
				$page_switch= 'header_custom_styles/header_custom_styles_switch';
				
				$events_switch = 'events_header_custom_styles/header_custom_styles_switch';
				
				if( naslaan_helpers::naslaan_event_calendar_check() && tribe_is_event_query() && is_archive()){
				
					if(fw_get_db_settings_option( $events_switch )=='enabled'){
						$value = fw_get_db_settings_option( $events_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif( naslaan_helpers::naslaan_woocommerce_check() && is_shop() ){
				
					$shop_page = get_post( wc_get_page_id( 'shop' ) );
					
					if(fw_get_db_post_option( $shop_page->ID, $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( $shop_page->ID, $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif(is_single() || is_page()) {
				
					if(fw_get_db_post_option( get_the_ID(), $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( get_the_ID(), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} elseif((is_front_page() && is_home()) || is_home()) {
				
					if(fw_get_db_post_option( get_option( 'page_for_posts'), $page_switch )=='enabled'){
						$value = fw_get_db_post_option( get_option( 'page_for_posts'), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} else {
				
					$value = fw_get_db_settings_option( $theme_options );
					
				}
			}
			return $value;
 		}
 		
 		public static function naslaan_header_types_left_nav_holder_background() {
	
			$value = '';
			if( naslaan_helpers::naslaan_unyson_check() ) {
			
				$theme_options = 'header_types/left/navigation_types/variant_2/nav_holder_bg';
				
				$page_options = 'header_custom_styles/enabled/nav_holder_bg';
				
				$events_options = 'events_header_custom_styles/enabled/nav_holder_bg';
				
				$page_switch= 'header_custom_styles/header_custom_styles_switch';
				
				$events_switch = 'events_header_custom_styles/header_custom_styles_switch';
				
				if( naslaan_helpers::naslaan_event_calendar_check() && tribe_is_event_query() && is_archive()){
				
					if(fw_get_db_settings_option( $events_switch )=='enabled'){
						$value = fw_get_db_settings_option( $events_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif( naslaan_helpers::naslaan_woocommerce_check() && is_shop() ){
				
					$shop_page = get_post( wc_get_page_id( 'shop' ) );
					
					if(fw_get_db_post_option( $shop_page->ID, $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( $shop_page->ID, $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif(is_single() || is_page()) {
				
					if(fw_get_db_post_option( get_the_ID(), $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( get_the_ID(), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} elseif((is_front_page() && is_home()) || is_home()) {
				
					if(fw_get_db_post_option( get_option( 'page_for_posts'), $page_switch )=='enabled'){
						$value = fw_get_db_post_option( get_option( 'page_for_posts'), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} else {
				
					$value = fw_get_db_settings_option( $theme_options );
					
				}
			}
			return $value;
 		}
 		
 		public static function naslaan_header_types_left_nav_holder_top_border_color() {
	
			$value = '';
			if( naslaan_helpers::naslaan_unyson_check() ) {
			
				$theme_options = 'header_types/left/navigation_types/variant_2/nav_holder_top_border/enabled/top_border_color';
				
				$page_options = 'header_custom_styles/enabled/nav_holder_top_border_color';
				
				$events_options = 'events_header_custom_styles/enabled/nav_holder_top_border_color';
				
				$page_switch= 'header_custom_styles/header_custom_styles_switch';
				
				$events_switch = 'events_header_custom_styles/header_custom_styles_switch';
				
				if( naslaan_helpers::naslaan_event_calendar_check() && tribe_is_event_query() && is_archive()){
				
					if(fw_get_db_settings_option( $events_switch )=='enabled'){
						$value = fw_get_db_settings_option( $events_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif( naslaan_helpers::naslaan_woocommerce_check() && is_shop() ){
				
					$shop_page = get_post( wc_get_page_id( 'shop' ) );
					
					if(fw_get_db_post_option( $shop_page->ID, $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( $shop_page->ID, $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif(is_single() || is_page()) {
				
					if(fw_get_db_post_option( get_the_ID(), $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( get_the_ID(), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} elseif((is_front_page() && is_home()) || is_home()) {
				
					if(fw_get_db_post_option( get_option( 'page_for_posts'), $page_switch )=='enabled'){
						$value = fw_get_db_post_option( get_option( 'page_for_posts'), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} else {
				
					$value = fw_get_db_settings_option( $theme_options );
					
				}
			}
			return $value;
 		}
 		
 		public static function naslaan_header_types_left_nav_holder_bottom_border_color() {
	
			$value = '';
			if( naslaan_helpers::naslaan_unyson_check() ) {
			
				$theme_options = 'header_types/left/navigation_types/variant_2/nav_holder_bottom_border/enabled/bottom_border_color';
				
				$page_options = 'header_custom_styles/enabled/nav_holder_bottom_border_color';
				
				$events_options = 'events_header_custom_styles/enabled/nav_holder_bottom_border_color';
				
				$page_switch= 'header_custom_styles/header_custom_styles_switch';
				
				$events_switch = 'events_header_custom_styles/header_custom_styles_switch';
				
				if( naslaan_helpers::naslaan_event_calendar_check() && tribe_is_event_query() && is_archive()){
				
					if(fw_get_db_settings_option( $events_switch )=='enabled'){
						$value = fw_get_db_settings_option( $events_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif( naslaan_helpers::naslaan_woocommerce_check() && is_shop() ){
				
					$shop_page = get_post( wc_get_page_id( 'shop' ) );
					
					if(fw_get_db_post_option( $shop_page->ID, $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( $shop_page->ID, $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif(is_single() || is_page()) {
				
					if(fw_get_db_post_option( get_the_ID(), $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( get_the_ID(), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} elseif((is_front_page() && is_home()) || is_home()) {
				
					if(fw_get_db_post_option( get_option( 'page_for_posts'), $page_switch )=='enabled'){
						$value = fw_get_db_post_option( get_option( 'page_for_posts'), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} else {
				
					$value = fw_get_db_settings_option( $theme_options );
					
				}
			}
			return $value;
 		}
 		
 		public static function naslaan_header_types_center_nav_holder_background() {
	
			$value = '';
			if( naslaan_helpers::naslaan_unyson_check() ) {
			
				$theme_options = 'header_types/center/navigation_types/variant_2/nav_holder_bg';
				
				$page_options = 'header_custom_styles/enabled/nav_holder_bg';
				
				$events_options = 'events_header_custom_styles/enabled/nav_holder_bg';
				
				$page_switch= 'header_custom_styles/header_custom_styles_switch';
				
				$events_switch = 'events_header_custom_styles/header_custom_styles_switch';
				
				if( naslaan_helpers::naslaan_event_calendar_check() && tribe_is_event_query() && is_archive()){
				
					if(fw_get_db_settings_option( $events_switch )=='enabled'){
						$value = fw_get_db_settings_option( $events_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif( naslaan_helpers::naslaan_woocommerce_check() && is_shop() ){
				
					$shop_page = get_post( wc_get_page_id( 'shop' ) );
					
					if(fw_get_db_post_option( $shop_page->ID, $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( $shop_page->ID, $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif(is_single() || is_page()) {
				
					if(fw_get_db_post_option( get_the_ID(), $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( get_the_ID(), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} elseif((is_front_page() && is_home()) || is_home()) {
				
					if(fw_get_db_post_option( get_option( 'page_for_posts'), $page_switch )=='enabled'){
						$value = fw_get_db_post_option( get_option( 'page_for_posts'), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} else {
				
					$value = fw_get_db_settings_option( $theme_options );
					
				}
			}
			return $value;
 		}
 		
 		public static function naslaan_header_types_center_nav_holder_top_border_color() {
	
			$value = '';
			if( naslaan_helpers::naslaan_unyson_check() ) {
			
				$theme_options = 'header_types/center/navigation_types/variant_2/nav_holder_top_border/enabled/top_border_color';
				
				$page_options = 'header_custom_styles/enabled/nav_holder_top_border_color';
				
				$events_options = 'events_header_custom_styles/enabled/nav_holder_top_border_color';
				
				$page_switch= 'header_custom_styles/header_custom_styles_switch';
				
				$events_switch = 'events_header_custom_styles/header_custom_styles_switch';
				
				if( naslaan_helpers::naslaan_event_calendar_check() && tribe_is_event_query() && is_archive()){
				
					if(fw_get_db_settings_option( $events_switch )=='enabled'){
						$value = fw_get_db_settings_option( $events_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif( naslaan_helpers::naslaan_woocommerce_check() && is_shop() ){
				
					$shop_page = get_post( wc_get_page_id( 'shop' ) );
					
					if(fw_get_db_post_option( $shop_page->ID, $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( $shop_page->ID, $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif(is_single() || is_page()) {
				
					if(fw_get_db_post_option( get_the_ID(), $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( get_the_ID(), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} elseif((is_front_page() && is_home()) || is_home()) {
				
					if(fw_get_db_post_option( get_option( 'page_for_posts'), $page_switch )=='enabled'){
						$value = fw_get_db_post_option( get_option( 'page_for_posts'), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} else {
				
					$value = fw_get_db_settings_option( $theme_options );
					
				}
			}
			return $value;
 		}
 		
 		public static function naslaan_header_types_center_nav_holder_bottom_border_color() {
	
			$value = '';
			if( naslaan_helpers::naslaan_unyson_check() ) {
			
				$theme_options = 'header_types/center/navigation_types/variant_2/nav_holder_bottom_border/enabled/bottom_border_color';
				
				$page_options = 'header_custom_styles/enabled/nav_holder_bottom_border_color';
				
				$events_options = 'events_header_custom_styles/enabled/nav_holder_bottom_border_color';
				
				$page_switch= 'header_custom_styles/header_custom_styles_switch';
				
				$events_switch = 'events_header_custom_styles/header_custom_styles_switch';
				
				if( naslaan_helpers::naslaan_event_calendar_check() && tribe_is_event_query() && is_archive()){
				
					if(fw_get_db_settings_option( $events_switch )=='enabled'){
						$value = fw_get_db_settings_option( $events_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif( naslaan_helpers::naslaan_woocommerce_check() && is_shop() ){
				
					$shop_page = get_post( wc_get_page_id( 'shop' ) );
					
					if(fw_get_db_post_option( $shop_page->ID, $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( $shop_page->ID, $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif(is_single() || is_page()) {
				
					if(fw_get_db_post_option( get_the_ID(), $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( get_the_ID(), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} elseif((is_front_page() && is_home()) || is_home()) {
				
					if(fw_get_db_post_option( get_option( 'page_for_posts'), $page_switch )=='enabled'){
						$value = fw_get_db_post_option( get_option( 'page_for_posts'), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} else {
				
					$value = fw_get_db_settings_option( $theme_options );
					
				}
			}
			return $value;
 		}
 		
 		public static function naslaan_header_logo_text_color() {
	
			$value = '';
			if( naslaan_helpers::naslaan_unyson_check() ) {
			
				$theme_options = 'header_logo/text_logo/header_logo_text';
				
				$page_options = 'header_custom_styles/enabled/text_logo_color';
				
				$events_options = 'events_header_custom_styles/enabled/text_logo_color';
				
				$page_switch= 'header_custom_styles/header_custom_styles_switch';
				
				$events_switch = 'events_header_custom_styles/header_custom_styles_switch';
				
				if( naslaan_helpers::naslaan_event_calendar_check() && tribe_is_event_query() && is_archive()){
				
					if(fw_get_db_settings_option( $events_switch )=='enabled'){
						$value = fw_get_db_settings_option( $events_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
						$value = $value['color'];
					}
				
				}elseif( naslaan_helpers::naslaan_woocommerce_check() && is_shop() ){
				
					$shop_page = get_post( wc_get_page_id( 'shop' ) );
					
					if(fw_get_db_post_option( $shop_page->ID, $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( $shop_page->ID, $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
						$value = $value['color'];
					}
				
				}elseif(is_single() || is_page()) {
				
					if(fw_get_db_post_option( get_the_ID(), $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( get_the_ID(), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
						$value = $value['color'];
					}
					
				} elseif((is_front_page() && is_home()) || is_home()) {
				
					if(fw_get_db_post_option( get_option( 'page_for_posts'), $page_switch )=='enabled'){
						$value = fw_get_db_post_option( get_option( 'page_for_posts'), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
						$value = $value['color'];
					}
					
				} else {
				
					$value = fw_get_db_settings_option( $theme_options );
					$value = $value['color'];
					
				}
			}
			return $value;
 		}
 		
 		public static function naslaan_header_logo_text_border_color() {
	
			$value = '';
			if( naslaan_helpers::naslaan_unyson_check() ) {
			
				$theme_options = 'header_logo/text_logo/header_logo_text_border/enabled/logo_border_color';
				
				$page_options = 'header_custom_styles/enabled/logo_border_color';
				
				$events_options = 'events_header_custom_styles/enabled/logo_border_color';
				
				$page_switch= 'header_custom_styles/header_custom_styles_switch';
				
				$events_switch = 'events_header_custom_styles/header_custom_styles_switch';
				
				if( naslaan_helpers::naslaan_event_calendar_check() && tribe_is_event_query() && is_archive()){
				
					if(fw_get_db_settings_option( $events_switch )=='enabled'){
						$value = fw_get_db_settings_option( $events_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif( naslaan_helpers::naslaan_woocommerce_check() && is_shop() ){
				
					$shop_page = get_post( wc_get_page_id( 'shop' ) );
					
					if(fw_get_db_post_option( $shop_page->ID, $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( $shop_page->ID, $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif(is_single() || is_page()) {
				
					if(fw_get_db_post_option( get_the_ID(), $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( get_the_ID(), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} elseif((is_front_page() && is_home()) || is_home()) {
				
					if(fw_get_db_post_option( get_option( 'page_for_posts'), $page_switch )=='enabled'){
						$value = fw_get_db_post_option( get_option( 'page_for_posts'), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} else {
				
					$value = fw_get_db_settings_option( $theme_options );
					
				}
			}
			return $value;
 		}
 		
 		public static function naslaan_header_logo_image_border_color() {
	
			$value = '';
			if( naslaan_helpers::naslaan_unyson_check() ) {
			
				$theme_options = 'header_logo/image_logo/header_logo_border/enabled/logo_border_color';
				
				$page_options = 'header_custom_styles/enabled/logo_border_color';
				
				$events_options = 'events_header_custom_styles/enabled/logo_border_color';
				
				$page_switch= 'header_custom_styles/header_custom_styles_switch';
				
				$events_switch = 'events_header_custom_styles/header_custom_styles_switch';
				
				if( naslaan_helpers::naslaan_event_calendar_check() && tribe_is_event_query() && is_archive()){
				
					if(fw_get_db_settings_option( $events_switch )=='enabled'){
						$value = fw_get_db_settings_option( $events_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif( naslaan_helpers::naslaan_woocommerce_check() && is_shop() ){
				
					$shop_page = get_post( wc_get_page_id( 'shop' ) );
					
					if(fw_get_db_post_option( $shop_page->ID, $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( $shop_page->ID, $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif(is_single() || is_page()) {
				
					if(fw_get_db_post_option( get_the_ID(), $page_switch )=='enabled'){
						$value  = fw_get_db_post_option( get_the_ID(), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} elseif((is_front_page() && is_home()) || is_home()) {
				
					if(fw_get_db_post_option( get_option( 'page_for_posts'), $page_switch )=='enabled'){
						$value = fw_get_db_post_option( get_option( 'page_for_posts'), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} else {
				
					$value = fw_get_db_settings_option( $theme_options );
					
				}
			}
			return $value;
 		}
 		
 		public static function naslaan_header_logo_image() {
	
			$value = '';
			if( naslaan_helpers::naslaan_unyson_check() ) {
			
				$theme_options = 'header_logo/image_logo/header_logo_image/url';
				
				$page_options = 'header_custom_styles/enabled/header_logo_image/url';
				
				$events_options = 'events_header_custom_styles/enabled/header_logo_image/url';
				
				$page_switch= 'header_custom_styles/header_custom_styles_switch';
				
				$events_switch = 'events_header_custom_styles/header_custom_styles_switch';
				
				if( naslaan_helpers::naslaan_event_calendar_check() && tribe_is_event_query() && is_archive()){
				
					if((fw_get_db_settings_option( $events_switch )=='enabled')&&(fw_get_db_settings_option( $events_options )!='')){
						$value = fw_get_db_settings_option( $events_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif( naslaan_helpers::naslaan_woocommerce_check() && is_shop() ){
				
					$shop_page = get_post( wc_get_page_id( 'shop' ) );
					
					if((fw_get_db_post_option( $shop_page->ID, $page_switch )=='enabled')&&(fw_get_db_post_option( $shop_page->ID, $page_options )!='')){
						$value  = fw_get_db_post_option( $shop_page->ID, $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif(is_single() || is_page()) {
				
					if((fw_get_db_post_option( get_the_ID(), $page_switch )=='enabled')&&(fw_get_db_post_option( get_the_ID(), $page_options )!='')){
						$value  = fw_get_db_post_option( get_the_ID(), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} elseif((is_front_page() && is_home()) || is_home()) {
				
					if((fw_get_db_post_option( get_option( 'page_for_posts'), $page_switch )=='enabled')&&(fw_get_db_post_option( get_option( 'page_for_posts'), $page_options )!='')){
						$value = fw_get_db_post_option( get_option( 'page_for_posts'), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} else {
				
					$value = fw_get_db_settings_option( $theme_options );
					
				}
			}
			return $value;
 		}
 		
 		public static function naslaan_menu_button_color() {
	
			$value = '';
			if( naslaan_helpers::naslaan_unyson_check() ) {
			
				$theme_options = 'menu_button_color';
				
				$page_options = 'header_custom_styles/enabled/menu_button_color';
				
				$events_options = 'events_header_custom_styles/enabled/menu_button_color';
				
				$page_switch= 'header_custom_styles/header_custom_styles_switch';
				
				$events_switch = 'events_header_custom_styles/header_custom_styles_switch';
				
				if( naslaan_helpers::naslaan_event_calendar_check() && tribe_is_event_query() && is_archive()){
				
					if((fw_get_db_settings_option( $events_switch )=='enabled')&&(fw_get_db_settings_option( $events_options )!='')){
						$value = fw_get_db_settings_option( $events_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif( naslaan_helpers::naslaan_woocommerce_check() && is_shop() ){
				
					$shop_page = get_post( wc_get_page_id( 'shop' ) );
					
					if((fw_get_db_post_option( $shop_page->ID, $page_switch )=='enabled')&&(fw_get_db_post_option( $shop_page->ID, $page_options )!='')){
						$value  = fw_get_db_post_option( $shop_page->ID, $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif(is_single() || is_page()) {
				
					if((fw_get_db_post_option( get_the_ID(), $page_switch )=='enabled')&&(fw_get_db_post_option( get_the_ID(), $page_options )!='')){
						$value  = fw_get_db_post_option( get_the_ID(), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} elseif((is_front_page() && is_home()) || is_home()) {
				
					if((fw_get_db_post_option( get_option( 'page_for_posts'), $page_switch )=='enabled')&&(fw_get_db_post_option( get_option( 'page_for_posts'), $page_options )!='')){
						$value = fw_get_db_post_option( get_option( 'page_for_posts'), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} else {
				
					$value = fw_get_db_settings_option( $theme_options );
					
				}
			}
			return $value;
 		}
 		
 		public static function naslaan_menu_button_color_hover() {
	
			$value = '';
			if( naslaan_helpers::naslaan_unyson_check() ) {
			
				$theme_options = 'menu_button_color_hover';
				
				$page_options = 'header_custom_styles/enabled/menu_button_color_hover';
				
				$events_options = 'events_header_custom_styles/enabled/menu_button_color_hover';
				
				$page_switch= 'header_custom_styles/header_custom_styles_switch';
				
				$events_switch = 'events_header_custom_styles/header_custom_styles_switch';
				
				if( naslaan_helpers::naslaan_event_calendar_check() && tribe_is_event_query() && is_archive()){
				
					if((fw_get_db_settings_option( $events_switch )=='enabled')&&(fw_get_db_settings_option( $events_options )!='')){
						$value = fw_get_db_settings_option( $events_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif( naslaan_helpers::naslaan_woocommerce_check() && is_shop() ){
				
					$shop_page = get_post( wc_get_page_id( 'shop' ) );
					
					if((fw_get_db_post_option( $shop_page->ID, $page_switch )=='enabled')&&(fw_get_db_post_option( $shop_page->ID, $page_options )!='')){
						$value  = fw_get_db_post_option( $shop_page->ID, $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif(is_single() || is_page()) {
				
					if((fw_get_db_post_option( get_the_ID(), $page_switch )=='enabled')&&(fw_get_db_post_option( get_the_ID(), $page_options )!='')){
						$value  = fw_get_db_post_option( get_the_ID(), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} elseif((is_front_page() && is_home()) || is_home()) {
				
					if((fw_get_db_post_option( get_option( 'page_for_posts'), $page_switch )=='enabled')&&(fw_get_db_post_option( get_option( 'page_for_posts'), $page_options )!='')){
						$value = fw_get_db_post_option( get_option( 'page_for_posts'), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} else {
				
					$value = fw_get_db_settings_option( $theme_options );
					
				}
			}
			return $value;
 		}
 		
 		public static function naslaan_menu_background_color_hover() {
	
			$value = '';
			if( naslaan_helpers::naslaan_unyson_check() ) {
			
				$theme_options = 'menu_background_color_hover';
				
				$page_options = 'header_custom_styles/enabled/menu_background_color_hover';
				
				$events_options = 'events_header_custom_styles/enabled/menu_background_color_hover';
				
				$page_switch= 'header_custom_styles/header_custom_styles_switch';
				
				$events_switch = 'events_header_custom_styles/header_custom_styles_switch';
				
				if( naslaan_helpers::naslaan_event_calendar_check() && tribe_is_event_query() && is_archive()){
				
					if((fw_get_db_settings_option( $events_switch )=='enabled')&&(fw_get_db_settings_option( $events_options )!='')){
						$value = fw_get_db_settings_option( $events_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif( naslaan_helpers::naslaan_woocommerce_check() && is_shop() ){
				
					$shop_page = get_post( wc_get_page_id( 'shop' ) );
					
					if((fw_get_db_post_option( $shop_page->ID, $page_switch )=='enabled')&&(fw_get_db_post_option( $shop_page->ID, $page_options )!='')){
						$value  = fw_get_db_post_option( $shop_page->ID, $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif(is_single() || is_page()) {
				
					if((fw_get_db_post_option( get_the_ID(), $page_switch )=='enabled')&&(fw_get_db_post_option( get_the_ID(), $page_options )!='')){
						$value  = fw_get_db_post_option( get_the_ID(), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} elseif((is_front_page() && is_home()) || is_home()) {
				
					if((fw_get_db_post_option( get_option( 'page_for_posts'), $page_switch )=='enabled')&&(fw_get_db_post_option( get_option( 'page_for_posts'), $page_options )!='')){
						$value = fw_get_db_post_option( get_option( 'page_for_posts'), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} else {
				
					$value = fw_get_db_settings_option( $theme_options );
					
				}
			}
			return $value;
 		}
 		
 		public static function naslaan_menu_background_color() {
	
			$value = '';
			if( naslaan_helpers::naslaan_unyson_check() ) {
			
				$theme_options = 'menu_background_color';
				
				$page_options = 'header_custom_styles/enabled/menu_background_color';
				
				$events_options = 'events_header_custom_styles/enabled/menu_background_color';
				
				$page_switch= 'header_custom_styles/header_custom_styles_switch';
				
				$events_switch = 'events_header_custom_styles/header_custom_styles_switch';
				
				if( naslaan_helpers::naslaan_event_calendar_check() && tribe_is_event_query() && is_archive()){
				
					if((fw_get_db_settings_option( $events_switch )=='enabled')&&(fw_get_db_settings_option( $events_options )!='')){
						$value = fw_get_db_settings_option( $events_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif( naslaan_helpers::naslaan_woocommerce_check() && is_shop() ){
				
					$shop_page = get_post( wc_get_page_id( 'shop' ) );
					
					if((fw_get_db_post_option( $shop_page->ID, $page_switch )=='enabled')&&(fw_get_db_post_option( $shop_page->ID, $page_options )!='')){
						$value  = fw_get_db_post_option( $shop_page->ID, $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif(is_single() || is_page()) {
				
					if((fw_get_db_post_option( get_the_ID(), $page_switch )=='enabled')&&(fw_get_db_post_option( get_the_ID(), $page_options )!='')){
						$value  = fw_get_db_post_option( get_the_ID(), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} elseif((is_front_page() && is_home()) || is_home()) {
				
					if((fw_get_db_post_option( get_option( 'page_for_posts'), $page_switch )=='enabled')&&(fw_get_db_post_option( get_option( 'page_for_posts'), $page_options )!='')){
						$value = fw_get_db_post_option( get_option( 'page_for_posts'), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} else {
				
					$value = fw_get_db_settings_option( $theme_options );
					
				}
			}
			return $value;
 		}
 		
 		public static function naslaan_menu_top_border_color() {
	
			$value = '';
			if( naslaan_helpers::naslaan_unyson_check() ) {
			
				$theme_options = 'menu_button_top_border/enabled/top_border_color';
				
				$page_options = 'header_custom_styles/enabled/menu_button_top_border_color';
				
				$events_options = 'events_header_custom_styles/enabled/menu_button_top_border_color';
				
				$page_switch= 'header_custom_styles/header_custom_styles_switch';
				
				$events_switch = 'events_header_custom_styles/header_custom_styles_switch';
				
				if( naslaan_helpers::naslaan_event_calendar_check() && tribe_is_event_query() && is_archive()){
				
					if((fw_get_db_settings_option( $events_switch )=='enabled')){
						$value = fw_get_db_settings_option( $events_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif( naslaan_helpers::naslaan_woocommerce_check() && is_shop() ){
				
					$shop_page = get_post( wc_get_page_id( 'shop' ) );
					
					if((fw_get_db_post_option( $shop_page->ID, $page_switch )=='enabled')){
						$value  = fw_get_db_post_option( $shop_page->ID, $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif(is_single() || is_page()) {
				
					if((fw_get_db_post_option( get_the_ID(), $page_switch )=='enabled')){
						$value  = fw_get_db_post_option( get_the_ID(), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} elseif((is_front_page() && is_home()) || is_home()) {
				
					if((fw_get_db_post_option( get_option( 'page_for_posts'), $page_switch )=='enabled')){
						$value = fw_get_db_post_option( get_option( 'page_for_posts'), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} else {
				
					$value = fw_get_db_settings_option( $theme_options );
					
				}
			}
			return $value;
 		}
 		
 		public static function naslaan_menu_top_border_hover_color() {
	
			$value = '';
			if( naslaan_helpers::naslaan_unyson_check() ) {
			
				$theme_options = 'menu_button_top_border/enabled/top_border_hover_color';
				
				$page_options = 'header_custom_styles/enabled/menu_button_top_border_hover_color';
				
				$events_options = 'events_header_custom_styles/enabled/menu_button_top_border_hover_color';
				
				$page_switch= 'header_custom_styles/header_custom_styles_switch';
				
				$events_switch = 'events_header_custom_styles/header_custom_styles_switch';
				
				if( naslaan_helpers::naslaan_event_calendar_check() && tribe_is_event_query() && is_archive()){
				
					if((fw_get_db_settings_option( $events_switch )=='enabled')){
						$value = fw_get_db_settings_option( $events_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif( naslaan_helpers::naslaan_woocommerce_check() && is_shop() ){
				
					$shop_page = get_post( wc_get_page_id( 'shop' ) );
					
					if((fw_get_db_post_option( $shop_page->ID, $page_switch )=='enabled')){
						$value  = fw_get_db_post_option( $shop_page->ID, $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif(is_single() || is_page()) {
				
					if((fw_get_db_post_option( get_the_ID(), $page_switch )=='enabled')){
						$value  = fw_get_db_post_option( get_the_ID(), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} elseif((is_front_page() && is_home()) || is_home()) {
				
					if((fw_get_db_post_option( get_option( 'page_for_posts'), $page_switch )=='enabled')){
						$value = fw_get_db_post_option( get_option( 'page_for_posts'), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} else {
				
					$value = fw_get_db_settings_option( $theme_options );
					
				}
			}
			return $value;
 		}
 		
 		public static function naslaan_menu_right_border_color() {
	
			$value = '';
			if( naslaan_helpers::naslaan_unyson_check() ) {
			
				$theme_options = 'menu_button_right_border/enabled/right_border_color';
				
				$page_options = 'header_custom_styles/enabled/menu_button_right_border_color';
				
				$events_options = 'events_header_custom_styles/enabled/menu_button_right_border_color';
				
				$page_switch= 'header_custom_styles/header_custom_styles_switch';
				
				$events_switch = 'events_header_custom_styles/header_custom_styles_switch';
				
				if( naslaan_helpers::naslaan_event_calendar_check() && tribe_is_event_query() && is_archive()){
				
					if((fw_get_db_settings_option( $events_switch )=='enabled')){
						$value = fw_get_db_settings_option( $events_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif( naslaan_helpers::naslaan_woocommerce_check() && is_shop() ){
				
					$shop_page = get_post( wc_get_page_id( 'shop' ) );
					
					if((fw_get_db_post_option( $shop_page->ID, $page_switch )=='enabled')){
						$value  = fw_get_db_post_option( $shop_page->ID, $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif(is_single() || is_page()) {
				
					if((fw_get_db_post_option( get_the_ID(), $page_switch )=='enabled')){
						$value  = fw_get_db_post_option( get_the_ID(), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} elseif((is_front_page() && is_home()) || is_home()) {
				
					if((fw_get_db_post_option( get_option( 'page_for_posts'), $page_switch )=='enabled')){
						$value = fw_get_db_post_option( get_option( 'page_for_posts'), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} else {
				
					$value = fw_get_db_settings_option( $theme_options );
					
				}
			}
			return $value;
 		}
 		
 		public static function naslaan_menu_right_border_hover_color() {
	
			$value = '';
			if( naslaan_helpers::naslaan_unyson_check() ) {
			
				$theme_options = 'menu_button_right_border/enabled/right_border_hover_color';
				
				$page_options = 'header_custom_styles/enabled/menu_button_right_border_hover_color';
				
				$events_options = 'events_header_custom_styles/enabled/menu_button_right_border_hover_color';
				
				$page_switch= 'header_custom_styles/header_custom_styles_switch';
				
				$events_switch = 'events_header_custom_styles/header_custom_styles_switch';
				
				if( naslaan_helpers::naslaan_event_calendar_check() && tribe_is_event_query() && is_archive()){
				
					if((fw_get_db_settings_option( $events_switch )=='enabled')){
						$value = fw_get_db_settings_option( $events_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif( naslaan_helpers::naslaan_woocommerce_check() && is_shop() ){
				
					$shop_page = get_post( wc_get_page_id( 'shop' ) );
					
					if((fw_get_db_post_option( $shop_page->ID, $page_switch )=='enabled')){
						$value  = fw_get_db_post_option( $shop_page->ID, $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif(is_single() || is_page()) {
				
					if((fw_get_db_post_option( get_the_ID(), $page_switch )=='enabled')){
						$value  = fw_get_db_post_option( get_the_ID(), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} elseif((is_front_page() && is_home()) || is_home()) {
				
					if((fw_get_db_post_option( get_option( 'page_for_posts'), $page_switch )=='enabled')){
						$value = fw_get_db_post_option( get_option( 'page_for_posts'), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} else {
				
					$value = fw_get_db_settings_option( $theme_options );
					
				}
			}
			return $value;
 		}	
 		
 		public static function naslaan_menu_bottom_border_color() {
	
			$value = '';
			if( naslaan_helpers::naslaan_unyson_check() ) {
			
				$theme_options = 'menu_button_bottom_border/enabled/bottom_border_color';
				
				$page_options = 'header_custom_styles/enabled/menu_button_bottom_border_color';
				
				$events_options = 'events_header_custom_styles/enabled/menu_button_bottom_border_color';
				
				$page_switch= 'header_custom_styles/header_custom_styles_switch';
				
				$events_switch = 'events_header_custom_styles/header_custom_styles_switch';
				
				if( naslaan_helpers::naslaan_event_calendar_check() && tribe_is_event_query() && is_archive()){
				
					if((fw_get_db_settings_option( $events_switch )=='enabled')){
						$value = fw_get_db_settings_option( $events_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif( naslaan_helpers::naslaan_woocommerce_check() && is_shop() ){
				
					$shop_page = get_post( wc_get_page_id( 'shop' ) );
					
					if((fw_get_db_post_option( $shop_page->ID, $page_switch )=='enabled')){
						$value  = fw_get_db_post_option( $shop_page->ID, $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif(is_single() || is_page()) {
				
					if((fw_get_db_post_option( get_the_ID(), $page_switch )=='enabled')){
						$value  = fw_get_db_post_option( get_the_ID(), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} elseif((is_front_page() && is_home()) || is_home()) {
				
					if((fw_get_db_post_option( get_option( 'page_for_posts'), $page_switch )=='enabled')){
						$value = fw_get_db_post_option( get_option( 'page_for_posts'), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} else {
				
					$value = fw_get_db_settings_option( $theme_options );
					
				}
			}
			return $value;
 		}
 		
 		public static function naslaan_menu_bottom_border_hover_color() {
	
			$value = '';
			if( naslaan_helpers::naslaan_unyson_check() ) {
			
				$theme_options = 'menu_button_bottom_border/enabled/bottom_border_hover_color';
				
				$page_options = 'header_custom_styles/enabled/menu_button_bottom_border_hover_color';
				
				$events_options = 'events_header_custom_styles/enabled/menu_button_bottom_border_hover_color';
				
				$page_switch= 'header_custom_styles/header_custom_styles_switch';
				
				$events_switch = 'events_header_custom_styles/header_custom_styles_switch';
				
				if( naslaan_helpers::naslaan_event_calendar_check() && tribe_is_event_query() && is_archive()){
				
					if((fw_get_db_settings_option( $events_switch )=='enabled')){
						$value = fw_get_db_settings_option( $events_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif( naslaan_helpers::naslaan_woocommerce_check() && is_shop() ){
				
					$shop_page = get_post( wc_get_page_id( 'shop' ) );
					
					if((fw_get_db_post_option( $shop_page->ID, $page_switch )=='enabled')){
						$value  = fw_get_db_post_option( $shop_page->ID, $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif(is_single() || is_page()) {
				
					if((fw_get_db_post_option( get_the_ID(), $page_switch )=='enabled')){
						$value  = fw_get_db_post_option( get_the_ID(), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} elseif((is_front_page() && is_home()) || is_home()) {
				
					if((fw_get_db_post_option( get_option( 'page_for_posts'), $page_switch )=='enabled')){
						$value = fw_get_db_post_option( get_option( 'page_for_posts'), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} else {
				
					$value = fw_get_db_settings_option( $theme_options );
					
				}
			}
			return $value;
 		}
 		
 		public static function naslaan_menu_left_border_color() {
	
			$value = '';
			if( naslaan_helpers::naslaan_unyson_check() ) {
			
				$theme_options = 'menu_button_left_border/enabled/left_border_color';
				
				$page_options = 'header_custom_styles/enabled/menu_button_left_border_color';
				
				$events_options = 'events_header_custom_styles/enabled/menu_button_left_border_color';
				
				$page_switch= 'header_custom_styles/header_custom_styles_switch';
				
				$events_switch = 'events_header_custom_styles/header_custom_styles_switch';
				
				if( naslaan_helpers::naslaan_event_calendar_check() && tribe_is_event_query() && is_archive()){
				
					if((fw_get_db_settings_option( $events_switch )=='enabled')){
						$value = fw_get_db_settings_option( $events_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif( naslaan_helpers::naslaan_woocommerce_check() && is_shop() ){
				
					$shop_page = get_post( wc_get_page_id( 'shop' ) );
					
					if((fw_get_db_post_option( $shop_page->ID, $page_switch )=='enabled')){
						$value  = fw_get_db_post_option( $shop_page->ID, $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif(is_single() || is_page()) {
				
					if((fw_get_db_post_option( get_the_ID(), $page_switch )=='enabled')){
						$value  = fw_get_db_post_option( get_the_ID(), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} elseif((is_front_page() && is_home()) || is_home()) {
				
					if((fw_get_db_post_option( get_option( 'page_for_posts'), $page_switch )=='enabled')){
						$value = fw_get_db_post_option( get_option( 'page_for_posts'), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} else {
				
					$value = fw_get_db_settings_option( $theme_options );
					
				}
			}
			return $value;
 		}
 		
 		public static function naslaan_menu_left_border_hover_color() {
	
			$value = '';
			if( naslaan_helpers::naslaan_unyson_check() ) {
			
				$theme_options = 'menu_button_left_border/enabled/left_border_hover_color';
				
				$page_options = 'header_custom_styles/enabled/menu_button_left_border_hover_color';
				
				$events_options = 'events_header_custom_styles/enabled/menu_button_left_border_hover_color';
				
				$page_switch= 'header_custom_styles/header_custom_styles_switch';
				
				$events_switch = 'events_header_custom_styles/header_custom_styles_switch';
				
				if( naslaan_helpers::naslaan_event_calendar_check() && tribe_is_event_query() && is_archive()){
				
					if((fw_get_db_settings_option( $events_switch )=='enabled')){
						$value = fw_get_db_settings_option( $events_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif( naslaan_helpers::naslaan_woocommerce_check() && is_shop() ){
				
					$shop_page = get_post( wc_get_page_id( 'shop' ) );
					
					if((fw_get_db_post_option( $shop_page->ID, $page_switch )=='enabled')){
						$value  = fw_get_db_post_option( $shop_page->ID, $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif(is_single() || is_page()) {
				
					if((fw_get_db_post_option( get_the_ID(), $page_switch )=='enabled')){
						$value  = fw_get_db_post_option( get_the_ID(), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} elseif((is_front_page() && is_home()) || is_home()) {
				
					if((fw_get_db_post_option( get_option( 'page_for_posts'), $page_switch )=='enabled')){
						$value = fw_get_db_post_option( get_option( 'page_for_posts'), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} else {
				
					$value = fw_get_db_settings_option( $theme_options );
					
				}
			}
			return $value;
 		}
 		
 		public static function naslaan_search_btn_sepline_color() {
	
			$value = '';
			if( naslaan_helpers::naslaan_unyson_check() ) {
			
				$theme_options = 'search_form/enabled/search_btn_sepline/enabled/search_btn_sepline_color';
				
				$page_options = 'header_custom_styles/enabled/search_btn_sepline_color';
				
				$events_options = 'events_header_custom_styles/enabled/search_btn_sepline_color';
				
				$page_switch= 'header_custom_styles/header_custom_styles_switch';
				
				$events_switch = 'events_header_custom_styles/header_custom_styles_switch';
				
				if( naslaan_helpers::naslaan_event_calendar_check() && tribe_is_event_query() && is_archive()){
				
					if((fw_get_db_settings_option( $events_switch )=='enabled')){
						$value = fw_get_db_settings_option( $events_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif( naslaan_helpers::naslaan_woocommerce_check() && is_shop() ){
				
					$shop_page = get_post( wc_get_page_id( 'shop' ) );
					
					if((fw_get_db_post_option( $shop_page->ID, $page_switch )=='enabled')){
						$value  = fw_get_db_post_option( $shop_page->ID, $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif(is_single() || is_page()) {
				
					if((fw_get_db_post_option( get_the_ID(), $page_switch )=='enabled')){
						$value  = fw_get_db_post_option( get_the_ID(), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} elseif((is_front_page() && is_home()) || is_home()) {
				
					if((fw_get_db_post_option( get_option( 'page_for_posts'), $page_switch )=='enabled')){
						$value = fw_get_db_post_option( get_option( 'page_for_posts'), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} else {
				
					$value = fw_get_db_settings_option( $theme_options );
					
				}
			}
			return $value;
 		}
 		
 		public static function naslaan_search_btn_color() {
	
			$value = '';
			if( naslaan_helpers::naslaan_unyson_check() ) {
			
				$theme_options = 'search_form/enabled/search_btn_color';
				
				$page_options = 'header_custom_styles/enabled/search_btn_color';
				
				$events_options = 'events_header_custom_styles/enabled/';
				
				$page_switch= 'header_custom_styles/header_custom_styles_switch';
				
				$events_switch = 'events_header_custom_styles/header_custom_styles_switch';
				
				if( naslaan_helpers::naslaan_event_calendar_check() && tribe_is_event_query() && is_archive()){
				
					if((fw_get_db_settings_option( $events_switch )=='enabled')){
						$value = fw_get_db_settings_option( $events_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif( naslaan_helpers::naslaan_woocommerce_check() && is_shop() ){
				
					$shop_page = get_post( wc_get_page_id( 'shop' ) );
					
					if((fw_get_db_post_option( $shop_page->ID, $page_switch )=='enabled')){
						$value  = fw_get_db_post_option( $shop_page->ID, $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif(is_single() || is_page()) {
				
					if((fw_get_db_post_option( get_the_ID(), $page_switch )=='enabled')){
						$value  = fw_get_db_post_option( get_the_ID(), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} elseif((is_front_page() && is_home()) || is_home()) {
				
					if((fw_get_db_post_option( get_option( 'page_for_posts'), $page_switch )=='enabled')){
						$value = fw_get_db_post_option( get_option( 'page_for_posts'), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} else {
				
					$value = fw_get_db_settings_option( $theme_options );
					
				}
			}
			return $value;
 		}
 		
 		public static function naslaan_search_btn_color_hover() {
	
			$value = '';
			if( naslaan_helpers::naslaan_unyson_check() ) {
			
				$theme_options = 'search_form/enabled/search_btn_color_hover';
				
				$page_options = 'header_custom_styles/enabled/search_btn_color_hover';
				
				$events_options = 'events_header_custom_styles/enabled/search_btn_color_hover';
				
				$page_switch= 'header_custom_styles/header_custom_styles_switch';
				
				$events_switch = 'events_header_custom_styles/header_custom_styles_switch';
				
				if( naslaan_helpers::naslaan_event_calendar_check() && tribe_is_event_query() && is_archive()){
				
					if((fw_get_db_settings_option( $events_switch )=='enabled')){
						$value = fw_get_db_settings_option( $events_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif( naslaan_helpers::naslaan_woocommerce_check() && is_shop() ){
				
					$shop_page = get_post( wc_get_page_id( 'shop' ) );
					
					if((fw_get_db_post_option( $shop_page->ID, $page_switch )=='enabled')){
						$value  = fw_get_db_post_option( $shop_page->ID, $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif(is_single() || is_page()) {
				
					if((fw_get_db_post_option( get_the_ID(), $page_switch )=='enabled')){
						$value  = fw_get_db_post_option( get_the_ID(), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} elseif((is_front_page() && is_home()) || is_home()) {
				
					if((fw_get_db_post_option( get_option( 'page_for_posts'), $page_switch )=='enabled')){
						$value = fw_get_db_post_option( get_option( 'page_for_posts'), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} else {
				
					$value = fw_get_db_settings_option( $theme_options );
					
				}
			}
			return $value;
 		}
 		
 		public static function naslaan_search_btn_background() {
	
			$value = '';
			if( naslaan_helpers::naslaan_unyson_check() ) {
			
				$theme_options = 'search_form/enabled/search_btn_background';
				
				$page_options = 'header_custom_styles/enabled/search_btn_background';
				
				$events_options = 'events_header_custom_styles/enabled/search_btn_background';
				
				$page_switch= 'header_custom_styles/header_custom_styles_switch';
				
				$events_switch = 'events_header_custom_styles/header_custom_styles_switch';
				
				if( naslaan_helpers::naslaan_event_calendar_check() && tribe_is_event_query() && is_archive()){
				
					if((fw_get_db_settings_option( $events_switch )=='enabled')){
						$value = fw_get_db_settings_option( $events_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif( naslaan_helpers::naslaan_woocommerce_check() && is_shop() ){
				
					$shop_page = get_post( wc_get_page_id( 'shop' ) );
					
					if((fw_get_db_post_option( $shop_page->ID, $page_switch )=='enabled')){
						$value  = fw_get_db_post_option( $shop_page->ID, $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif(is_single() || is_page()) {
				
					if((fw_get_db_post_option( get_the_ID(), $page_switch )=='enabled')){
						$value  = fw_get_db_post_option( get_the_ID(), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} elseif((is_front_page() && is_home()) || is_home()) {
				
					if((fw_get_db_post_option( get_option( 'page_for_posts'), $page_switch )=='enabled')){
						$value = fw_get_db_post_option( get_option( 'page_for_posts'), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} else {
				
					$value = fw_get_db_settings_option( $theme_options );
					
				}
			}
			return $value;
 		}
 		
 		public static function naslaan_search_btn_background_hover() {
	
			$value = '';
			if( naslaan_helpers::naslaan_unyson_check() ) {
			
				$theme_options = 'search_form/enabled/search_btn_background_hover';
				
				$page_options = 'header_custom_styles/enabled/search_btn_background_hover';
				
				$events_options = 'events_header_custom_styles/enabled/search_btn_background_hover';
				
				$page_switch= 'header_custom_styles/header_custom_styles_switch';
				
				$events_switch = 'events_header_custom_styles/header_custom_styles_switch';
				
				if( naslaan_helpers::naslaan_event_calendar_check() && tribe_is_event_query() && is_archive()){
				
					if((fw_get_db_settings_option( $events_switch )=='enabled')){
						$value = fw_get_db_settings_option( $events_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif( naslaan_helpers::naslaan_woocommerce_check() && is_shop() ){
				
					$shop_page = get_post( wc_get_page_id( 'shop' ) );
					
					if((fw_get_db_post_option( $shop_page->ID, $page_switch )=='enabled')){
						$value  = fw_get_db_post_option( $shop_page->ID, $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif(is_single() || is_page()) {
				
					if((fw_get_db_post_option( get_the_ID(), $page_switch )=='enabled')){
						$value  = fw_get_db_post_option( get_the_ID(), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} elseif((is_front_page() && is_home()) || is_home()) {
				
					if((fw_get_db_post_option( get_option( 'page_for_posts'), $page_switch )=='enabled')){
						$value = fw_get_db_post_option( get_option( 'page_for_posts'), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} else {
				
					$value = fw_get_db_settings_option( $theme_options );
					
				}
			}
			return $value;
 		}
 		
 		public static function naslaan_search_border_color() {
	
			$value = '';
			if( naslaan_helpers::naslaan_unyson_check() ) {
			
				$theme_options = 'search_form/enabled/search_button_border/enabled/search_border_color';
				
				$page_options = 'header_custom_styles/enabled/search_border_color';
				
				$events_options = 'events_header_custom_styles/enabled/search_border_color';
				
				$page_switch= 'header_custom_styles/header_custom_styles_switch';
				
				$events_switch = 'events_header_custom_styles/header_custom_styles_switch';
				
				if( naslaan_helpers::naslaan_event_calendar_check() && tribe_is_event_query() && is_archive()){
				
					if((fw_get_db_settings_option( $events_switch )=='enabled')){
						$value = fw_get_db_settings_option( $events_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif( naslaan_helpers::naslaan_woocommerce_check() && is_shop() ){
				
					$shop_page = get_post( wc_get_page_id( 'shop' ) );
					
					if((fw_get_db_post_option( $shop_page->ID, $page_switch )=='enabled')){
						$value  = fw_get_db_post_option( $shop_page->ID, $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif(is_single() || is_page()) {
				
					if((fw_get_db_post_option( get_the_ID(), $page_switch )=='enabled')){
						$value  = fw_get_db_post_option( get_the_ID(), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} elseif((is_front_page() && is_home()) || is_home()) {
				
					if((fw_get_db_post_option( get_option( 'page_for_posts'), $page_switch )=='enabled')){
						$value = fw_get_db_post_option( get_option( 'page_for_posts'), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} else {
				
					$value = fw_get_db_settings_option( $theme_options );
					
				}
			}
			return $value;
 		}
 		
 		public static function naslaan_search_border_color_hover() {
	
			$value = '';
			if( naslaan_helpers::naslaan_unyson_check() ) {
			
				$theme_options = 'search_form/enabled/search_button_border/enabled/search_border_color_hover';
				
				$page_options = 'header_custom_styles/enabled/search_border_color_hover';
				
				$events_options = 'events_header_custom_styles/enabled/search_border_color_hover';
				
				$page_switch= 'header_custom_styles/header_custom_styles_switch';
				
				$events_switch = 'events_header_custom_styles/header_custom_styles_switch';
				
				if( naslaan_helpers::naslaan_event_calendar_check() && tribe_is_event_query() && is_archive()){
				
					if((fw_get_db_settings_option( $events_switch )=='enabled')){
						$value = fw_get_db_settings_option( $events_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif( naslaan_helpers::naslaan_woocommerce_check() && is_shop() ){
				
					$shop_page = get_post( wc_get_page_id( 'shop' ) );
					
					if((fw_get_db_post_option( $shop_page->ID, $page_switch )=='enabled')){
						$value  = fw_get_db_post_option( $shop_page->ID, $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif(is_single() || is_page()) {
				
					if((fw_get_db_post_option( get_the_ID(), $page_switch )=='enabled')){
						$value  = fw_get_db_post_option( get_the_ID(), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} elseif((is_front_page() && is_home()) || is_home()) {
				
					if((fw_get_db_post_option( get_option( 'page_for_posts'), $page_switch )=='enabled')){
						$value = fw_get_db_post_option( get_option( 'page_for_posts'), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} else {
				
					$value = fw_get_db_settings_option( $theme_options );
					
				}
			}
			return $value;
 		}
 		
 		public static function naslaan_msg_container_sepline_color() {
	
			$value = '';
			if( naslaan_helpers::naslaan_unyson_check() ) {
			
				$theme_options = 'msg_container_visibility/enabled/msg_container_sepline/enabled/msg_container_sepline_color';
				
				$page_options = 'header_custom_styles/enabled/msg_container_sepline_color';
				
				$events_options = 'events_header_custom_styles/enabled/msg_container_sepline_color';
				
				$page_switch= 'header_custom_styles/header_custom_styles_switch';
				
				$events_switch = 'events_header_custom_styles/header_custom_styles_switch';
				
				if( naslaan_helpers::naslaan_event_calendar_check() && tribe_is_event_query() && is_archive()){
				
					if((fw_get_db_settings_option( $events_switch )=='enabled')){
						$value = fw_get_db_settings_option( $events_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif( naslaan_helpers::naslaan_woocommerce_check() && is_shop() ){
				
					$shop_page = get_post( wc_get_page_id( 'shop' ) );
					
					if((fw_get_db_post_option( $shop_page->ID, $page_switch )=='enabled')){
						$value  = fw_get_db_post_option( $shop_page->ID, $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif(is_single() || is_page()) {
				
					if((fw_get_db_post_option( get_the_ID(), $page_switch )=='enabled')){
						$value  = fw_get_db_post_option( get_the_ID(), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} elseif((is_front_page() && is_home()) || is_home()) {
				
					if((fw_get_db_post_option( get_option( 'page_for_posts'), $page_switch )=='enabled')){
						$value = fw_get_db_post_option( get_option( 'page_for_posts'), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} else {
				
					$value = fw_get_db_settings_option( $theme_options );
					
				}
			}
			return $value;
 		}
 		
 		public static function naslaan_msg_block_text_color() {
	
			$value = '';
			if( naslaan_helpers::naslaan_unyson_check() ) {
			
				$theme_options = 'msg_container_visibility/enabled/msg_block_text';
				
				$page_options = 'header_custom_styles/enabled/msg_block_text';
				
				$events_options = 'events_header_custom_styles/enabled/msg_block_text';
				
				$page_switch= 'header_custom_styles/header_custom_styles_switch';
				
				$events_switch = 'events_header_custom_styles/header_custom_styles_switch';
				
				if( naslaan_helpers::naslaan_event_calendar_check() && tribe_is_event_query() && is_archive()){
				
					if((fw_get_db_settings_option( $events_switch )=='enabled')){
						$value = fw_get_db_settings_option( $events_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
						$value = $value['color'];
					}
				
				}elseif( naslaan_helpers::naslaan_woocommerce_check() && is_shop() ){
				
					$shop_page = get_post( wc_get_page_id( 'shop' ) );
					
					if((fw_get_db_post_option( $shop_page->ID, $page_switch )=='enabled')){
						$value  = fw_get_db_post_option( $shop_page->ID, $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
						$value = $value['color'];
					}
				
				}elseif(is_single() || is_page()) {
				
					if((fw_get_db_post_option( get_the_ID(), $page_switch )=='enabled')){
						$value  = fw_get_db_post_option( get_the_ID(), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
						$value = $value['color'];
					}
					
				} elseif((is_front_page() && is_home()) || is_home()) {
				
					if((fw_get_db_post_option( get_option( 'page_for_posts'), $page_switch )=='enabled')){
						$value = fw_get_db_post_option( get_option( 'page_for_posts'), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
						$value = $value['color'];
					}
					
				} else {
				
					$value = fw_get_db_settings_option( $theme_options );
					$value = $value['color'];
					
				}
			}
			return $value;
 		}
 		
 		public static function naslaan_msg_block_underline() {
	
			$value = '';
			if( naslaan_helpers::naslaan_unyson_check() ) {
			
				$theme_options = 'msg_container_visibility/enabled/msg_block_underline';
				
				$page_options = 'header_custom_styles/enabled/msg_block_underline';
				
				$events_options = 'events_header_custom_styles/enabled/msg_block_underline';
				
				$page_switch= 'header_custom_styles/header_custom_styles_switch';
				
				$events_switch = 'events_header_custom_styles/header_custom_styles_switch';
				
				if( naslaan_helpers::naslaan_event_calendar_check() && tribe_is_event_query() && is_archive()){
				
					if((fw_get_db_settings_option( $events_switch )=='enabled')){
						$value = fw_get_db_settings_option( $events_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif( naslaan_helpers::naslaan_woocommerce_check() && is_shop() ){
				
					$shop_page = get_post( wc_get_page_id( 'shop' ) );
					
					if((fw_get_db_post_option( $shop_page->ID, $page_switch )=='enabled')){
						$value  = fw_get_db_post_option( $shop_page->ID, $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif(is_single() || is_page()) {
				
					if((fw_get_db_post_option( get_the_ID(), $page_switch )=='enabled')){
						$value  = fw_get_db_post_option( get_the_ID(), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} elseif((is_front_page() && is_home()) || is_home()) {
				
					if((fw_get_db_post_option( get_option( 'page_for_posts'), $page_switch )=='enabled')){
						$value = fw_get_db_post_option( get_option( 'page_for_posts'), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} else {
				
					$value = fw_get_db_settings_option( $theme_options );
					
				}
			}
			return $value;
 		}
 		
 		public static function naslaan_msg_block_background() {
	
			$value = '';
			if( naslaan_helpers::naslaan_unyson_check() ) {
			
				$theme_options = 'msg_container_visibility/enabled/msg_block_background';
				
				$page_options = 'header_custom_styles/enabled/msg_block_background';
				
				$events_options = 'events_header_custom_styles/enabled/msg_block_background';
				
				$page_switch= 'header_custom_styles/header_custom_styles_switch';
				
				$events_switch = 'events_header_custom_styles/header_custom_styles_switch';
				
				if( naslaan_helpers::naslaan_event_calendar_check() && tribe_is_event_query() && is_archive()){
				
					if((fw_get_db_settings_option( $events_switch )=='enabled')){
						$value = fw_get_db_settings_option( $events_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif( naslaan_helpers::naslaan_woocommerce_check() && is_shop() ){
				
					$shop_page = get_post( wc_get_page_id( 'shop' ) );
					
					if((fw_get_db_post_option( $shop_page->ID, $page_switch )=='enabled')){
						$value  = fw_get_db_post_option( $shop_page->ID, $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif(is_single() || is_page()) {
				
					if((fw_get_db_post_option( get_the_ID(), $page_switch )=='enabled')){
						$value  = fw_get_db_post_option( get_the_ID(), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} elseif((is_front_page() && is_home()) || is_home()) {
				
					if((fw_get_db_post_option( get_option( 'page_for_posts'), $page_switch )=='enabled')){
						$value = fw_get_db_post_option( get_option( 'page_for_posts'), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} else {
				
					$value = fw_get_db_settings_option( $theme_options );
					
				}
			}
			return $value;
 		}
 		
  		public static function naslaan_msg_block_border_color() {
	
			$value = '';
			if( naslaan_helpers::naslaan_unyson_check() ) {
			
				$theme_options = 'msg_container_visibility/enabled/msg_block_border/enabled/msg_block_border_color';
				
				$page_options = 'header_custom_styles/enabled/msg_block_border_color';
				
				$events_options = 'events_header_custom_styles/enabled/msg_block_border_color';
				
				$page_switch= 'header_custom_styles/header_custom_styles_switch';
				
				$events_switch = 'events_header_custom_styles/header_custom_styles_switch';
				
				if( naslaan_helpers::naslaan_event_calendar_check() && tribe_is_event_query() && is_archive()){
				
					if((fw_get_db_settings_option( $events_switch )=='enabled')){
						$value = fw_get_db_settings_option( $events_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif( naslaan_helpers::naslaan_woocommerce_check() && is_shop() ){
				
					$shop_page = get_post( wc_get_page_id( 'shop' ) );
					
					if((fw_get_db_post_option( $shop_page->ID, $page_switch )=='enabled')){
						$value  = fw_get_db_post_option( $shop_page->ID, $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif(is_single() || is_page()) {
				
					if((fw_get_db_post_option( get_the_ID(), $page_switch )=='enabled')){
						$value  = fw_get_db_post_option( get_the_ID(), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} elseif((is_front_page() && is_home()) || is_home()) {
				
					if((fw_get_db_post_option( get_option( 'page_for_posts'), $page_switch )=='enabled')){
						$value = fw_get_db_post_option( get_option( 'page_for_posts'), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} else {
				
					$value = fw_get_db_settings_option( $theme_options );
					
				}
			}
			return $value;
 		}
 		
 		public static function naslaan_msg_block_border_color_hover() {
	
			$value = '';
			if( naslaan_helpers::naslaan_unyson_check() ) {
			
				$theme_options = 'msg_container_visibility/enabled/msg_block_border/enabled/msg_block_border_color_hover';
				
				$page_options = 'header_custom_styles/enabled/msg_block_border_color_hover';
				
				$events_options = 'events_header_custom_styles/enabled/msg_block_border_color_hover';
				
				$page_switch= 'header_custom_styles/header_custom_styles_switch';
				
				$events_switch = 'events_header_custom_styles/header_custom_styles_switch';
				
				if( naslaan_helpers::naslaan_event_calendar_check() && tribe_is_event_query() && is_archive()){
				
					if((fw_get_db_settings_option( $events_switch )=='enabled')){
						$value = fw_get_db_settings_option( $events_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif( naslaan_helpers::naslaan_woocommerce_check() && is_shop() ){
				
					$shop_page = get_post( wc_get_page_id( 'shop' ) );
					
					if((fw_get_db_post_option( $shop_page->ID, $page_switch )=='enabled')){
						$value  = fw_get_db_post_option( $shop_page->ID, $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif(is_single() || is_page()) {
				
					if((fw_get_db_post_option( get_the_ID(), $page_switch )=='enabled')){
						$value  = fw_get_db_post_option( get_the_ID(), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} elseif((is_front_page() && is_home()) || is_home()) {
				
					if((fw_get_db_post_option( get_option( 'page_for_posts'), $page_switch )=='enabled')){
						$value = fw_get_db_post_option( get_option( 'page_for_posts'), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} else {
				
					$value = fw_get_db_settings_option( $theme_options );
					
				}
			}
			return $value;
 		}
 		
 		public static function naslaan_header_social_media_btn_color() {
	
			$value = '';
			if( naslaan_helpers::naslaan_unyson_check() ) {
			
				$theme_options = 'header_social_media_btn_color';
				
				$page_options = 'header_custom_styles/enabled/header_social_media_btn_color';
				
				$events_options = 'events_header_custom_styles/enabled/header_social_media_btn_color';
				
				$page_switch= 'header_custom_styles/header_custom_styles_switch';
				
				$events_switch = 'events_header_custom_styles/header_custom_styles_switch';
				
				if( naslaan_helpers::naslaan_event_calendar_check() && tribe_is_event_query() && is_archive()){
				
					if((fw_get_db_settings_option( $events_switch )=='enabled')){
						$value = fw_get_db_settings_option( $events_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif( naslaan_helpers::naslaan_woocommerce_check() && is_shop() ){
				
					$shop_page = get_post( wc_get_page_id( 'shop' ) );
					
					if((fw_get_db_post_option( $shop_page->ID, $page_switch )=='enabled')){
						$value  = fw_get_db_post_option( $shop_page->ID, $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif(is_single() || is_page()) {
				
					if((fw_get_db_post_option( get_the_ID(), $page_switch )=='enabled')){
						$value  = fw_get_db_post_option( get_the_ID(), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} elseif((is_front_page() && is_home()) || is_home()) {
				
					if((fw_get_db_post_option( get_option( 'page_for_posts'), $page_switch )=='enabled')){
						$value = fw_get_db_post_option( get_option( 'page_for_posts'), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} else {
				
					$value = fw_get_db_settings_option( $theme_options );
					
				}
			}
			return $value;
 		}
 		
 		public static function naslaan_header_social_media_btn_hover_color() {
	
			$value = '';
			if( naslaan_helpers::naslaan_unyson_check() ) {
			
				$theme_options = 'header_social_media_btn_hover_color';
				
				$page_options = 'header_custom_styles/enabled/header_social_media_btn_hover_color';
				
				$events_options = 'events_header_custom_styles/enabled/header_social_media_btn_hover_color';
				
				$page_switch= 'header_custom_styles/header_custom_styles_switch';
				
				$events_switch = 'events_header_custom_styles/header_custom_styles_switch';
				
				if( naslaan_helpers::naslaan_event_calendar_check() && tribe_is_event_query() && is_archive()){
				
					if((fw_get_db_settings_option( $events_switch )=='enabled')){
						$value = fw_get_db_settings_option( $events_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif( naslaan_helpers::naslaan_woocommerce_check() && is_shop() ){
				
					$shop_page = get_post( wc_get_page_id( 'shop' ) );
					
					if((fw_get_db_post_option( $shop_page->ID, $page_switch )=='enabled')){
						$value  = fw_get_db_post_option( $shop_page->ID, $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif(is_single() || is_page()) {
				
					if((fw_get_db_post_option( get_the_ID(), $page_switch )=='enabled')){
						$value  = fw_get_db_post_option( get_the_ID(), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} elseif((is_front_page() && is_home()) || is_home()) {
				
					if((fw_get_db_post_option( get_option( 'page_for_posts'), $page_switch )=='enabled')){
						$value = fw_get_db_post_option( get_option( 'page_for_posts'), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} else {
				
					$value = fw_get_db_settings_option( $theme_options );
					
				}
			}
			return $value;
 		}
 		
  		public static function naslaan_header_social_media_btn_background() {
	
			$value = '';
			if( naslaan_helpers::naslaan_unyson_check() ) {
			
				$theme_options = 'header_social_media_btn_background';
				
				$page_options = 'header_custom_styles/enabled/header_social_media_btn_background';
				
				$events_options = 'events_header_custom_styles/enabled/header_social_media_btn_background';
				
				$page_switch= 'header_custom_styles/header_custom_styles_switch';
				
				$events_switch = 'events_header_custom_styles/header_custom_styles_switch';
				
				if( naslaan_helpers::naslaan_event_calendar_check() && tribe_is_event_query() && is_archive()){
				
					if((fw_get_db_settings_option( $events_switch )=='enabled')){
						$value = fw_get_db_settings_option( $events_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif( naslaan_helpers::naslaan_woocommerce_check() && is_shop() ){
				
					$shop_page = get_post( wc_get_page_id( 'shop' ) );
					
					if((fw_get_db_post_option( $shop_page->ID, $page_switch )=='enabled')){
						$value  = fw_get_db_post_option( $shop_page->ID, $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif(is_single() || is_page()) {
				
					if((fw_get_db_post_option( get_the_ID(), $page_switch )=='enabled')){
						$value  = fw_get_db_post_option( get_the_ID(), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} elseif((is_front_page() && is_home()) || is_home()) {
				
					if((fw_get_db_post_option( get_option( 'page_for_posts'), $page_switch )=='enabled')){
						$value = fw_get_db_post_option( get_option( 'page_for_posts'), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} else {
				
					$value = fw_get_db_settings_option( $theme_options );
					
				}
			}
			return $value;
 		}
 		
 		public static function naslaan_header_social_media_btn_background_hover() {
	
			$value = '';
			if( naslaan_helpers::naslaan_unyson_check() ) {
			
				$theme_options = 'header_social_media_btn_background_hover';
				
				$page_options = 'header_custom_styles/enabled/header_social_media_btn_background_hover';
				
				$events_options = 'events_header_custom_styles/enabled/header_social_media_btn_background_hover';
				
				$page_switch= 'header_custom_styles/header_custom_styles_switch';
				
				$events_switch = 'events_header_custom_styles/header_custom_styles_switch';
				
				if( naslaan_helpers::naslaan_event_calendar_check() && tribe_is_event_query() && is_archive()){
				
					if((fw_get_db_settings_option( $events_switch )=='enabled')){
						$value = fw_get_db_settings_option( $events_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif( naslaan_helpers::naslaan_woocommerce_check() && is_shop() ){
				
					$shop_page = get_post( wc_get_page_id( 'shop' ) );
					
					if((fw_get_db_post_option( $shop_page->ID, $page_switch )=='enabled')){
						$value  = fw_get_db_post_option( $shop_page->ID, $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif(is_single() || is_page()) {
				
					if((fw_get_db_post_option( get_the_ID(), $page_switch )=='enabled')){
						$value  = fw_get_db_post_option( get_the_ID(), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} elseif((is_front_page() && is_home()) || is_home()) {
				
					if((fw_get_db_post_option( get_option( 'page_for_posts'), $page_switch )=='enabled')){
						$value = fw_get_db_post_option( get_option( 'page_for_posts'), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} else {
				
					$value = fw_get_db_settings_option( $theme_options );
					
				}
			}
			return $value;
 		}
 		
 		public static function naslaan_header_social_media_tooltip_bg() {
	
			$value = '';
			if( naslaan_helpers::naslaan_unyson_check() ) {
			
				$theme_options = 'header_social_media_tooltip_bg';
				
				$page_options = 'header_custom_styles/enabled/header_social_media_tooltip_bg';
				
				$events_options = 'events_header_custom_styles/enabled/header_social_media_tooltip_bg';
				
				$page_switch= 'header_custom_styles/header_custom_styles_switch';
				
				$events_switch = 'events_header_custom_styles/header_custom_styles_switch';
				
				if( naslaan_helpers::naslaan_event_calendar_check() && tribe_is_event_query() && is_archive()){
				
					if((fw_get_db_settings_option( $events_switch )=='enabled')){
						$value = fw_get_db_settings_option( $events_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif( naslaan_helpers::naslaan_woocommerce_check() && is_shop() ){
				
					$shop_page = get_post( wc_get_page_id( 'shop' ) );
					
					if((fw_get_db_post_option( $shop_page->ID, $page_switch )=='enabled')){
						$value  = fw_get_db_post_option( $shop_page->ID, $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif(is_single() || is_page()) {
				
					if((fw_get_db_post_option( get_the_ID(), $page_switch )=='enabled')){
						$value  = fw_get_db_post_option( get_the_ID(), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} elseif((is_front_page() && is_home()) || is_home()) {
				
					if((fw_get_db_post_option( get_option( 'page_for_posts'), $page_switch )=='enabled')){
						$value = fw_get_db_post_option( get_option( 'page_for_posts'), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} else {
				
					$value = fw_get_db_settings_option( $theme_options );
					
				}
			}
			return $value;
 		}
 		
 		public static function naslaan_header_social_media_sepline_color() {
	
			$value = '';
			if( naslaan_helpers::naslaan_unyson_check() ) {
			
				$theme_options = 'header_social_media_sepline/enabled/header_social_media_sepline_color';
				
				$page_options = 'header_custom_styles/enabled/header_social_media_sepline_color';
				
				$events_options = 'events_header_custom_styles/enabled/header_social_media_sepline_color';
				
				$page_switch= 'header_custom_styles/header_custom_styles_switch';
				
				$events_switch = 'events_header_custom_styles/header_custom_styles_switch';
				
				if( naslaan_helpers::naslaan_event_calendar_check() && tribe_is_event_query() && is_archive()){
				
					if((fw_get_db_settings_option( $events_switch )=='enabled')){
						$value = fw_get_db_settings_option( $events_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif( naslaan_helpers::naslaan_woocommerce_check() && is_shop() ){
				
					$shop_page = get_post( wc_get_page_id( 'shop' ) );
					
					if((fw_get_db_post_option( $shop_page->ID, $page_switch )=='enabled')){
						$value  = fw_get_db_post_option( $shop_page->ID, $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif(is_single() || is_page()) {
				
					if((fw_get_db_post_option( get_the_ID(), $page_switch )=='enabled')){
						$value  = fw_get_db_post_option( get_the_ID(), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} elseif((is_front_page() && is_home()) || is_home()) {
				
					if((fw_get_db_post_option( get_option( 'page_for_posts'), $page_switch )=='enabled')){
						$value = fw_get_db_post_option( get_option( 'page_for_posts'), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} else {
				
					$value = fw_get_db_settings_option( $theme_options );
					
				}
			}
			return $value;
 		}
 		
 		public static function naslaan_shopping_cart_btn_sepline_color() {
	
			$value = '';
			if( naslaan_helpers::naslaan_unyson_check() ) {
			
				$theme_options = 'shopping_cart/enabled/shopping_cart_btn_sepline/enabled/shopping_cart_btn_sepline_color';
				
				$page_options = 'header_custom_styles/enabled/shopping_cart_btn_sepline_color';
				
				$events_options = 'events_header_custom_styles/enabled/shopping_cart_btn_sepline_color';
				
				$page_switch= 'header_custom_styles/header_custom_styles_switch';
				
				$events_switch = 'events_header_custom_styles/header_custom_styles_switch';
				
				if( naslaan_helpers::naslaan_event_calendar_check() && tribe_is_event_query() && is_archive()){
				
					if((fw_get_db_settings_option( $events_switch )=='enabled')){
						$value = fw_get_db_settings_option( $events_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif( naslaan_helpers::naslaan_woocommerce_check() && is_shop() ){
				
					$shop_page = get_post( wc_get_page_id( 'shop' ) );
					
					if((fw_get_db_post_option( $shop_page->ID, $page_switch )=='enabled')){
						$value  = fw_get_db_post_option( $shop_page->ID, $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif(is_single() || is_page()) {
				
					if((fw_get_db_post_option( get_the_ID(), $page_switch )=='enabled')){
						$value  = fw_get_db_post_option( get_the_ID(), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} elseif((is_front_page() && is_home()) || is_home()) {
				
					if((fw_get_db_post_option( get_option( 'page_for_posts'), $page_switch )=='enabled')){
						$value = fw_get_db_post_option( get_option( 'page_for_posts'), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} else {
				
					$value = fw_get_db_settings_option( $theme_options );
					
				}
			}
			return $value;
 		}
 		
 		public static function naslaan_shopping_cart_btn_color() {
	
			$value = '';
			if( naslaan_helpers::naslaan_unyson_check() ) {
			
				$theme_options = 'shopping_cart/enabled/shopping_cart_btn_color';
				
				$page_options = 'header_custom_styles/enabled/shopping_cart_btn_color';
				
				$events_options = 'events_header_custom_styles/enabled/shopping_cart_btn_color';
				
				$page_switch= 'header_custom_styles/header_custom_styles_switch';
				
				$events_switch = 'events_header_custom_styles/header_custom_styles_switch';
				
				if( naslaan_helpers::naslaan_event_calendar_check() && tribe_is_event_query() && is_archive()){
				
					if((fw_get_db_settings_option( $events_switch )=='enabled')){
						$value = fw_get_db_settings_option( $events_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif( naslaan_helpers::naslaan_woocommerce_check() && is_shop() ){
				
					$shop_page = get_post( wc_get_page_id( 'shop' ) );
					
					if((fw_get_db_post_option( $shop_page->ID, $page_switch )=='enabled')){
						$value  = fw_get_db_post_option( $shop_page->ID, $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif(is_single() || is_page()) {
				
					if((fw_get_db_post_option( get_the_ID(), $page_switch )=='enabled')){
						$value  = fw_get_db_post_option( get_the_ID(), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} elseif((is_front_page() && is_home()) || is_home()) {
				
					if((fw_get_db_post_option( get_option( 'page_for_posts'), $page_switch )=='enabled')){
						$value = fw_get_db_post_option( get_option( 'page_for_posts'), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} else {
				
					$value = fw_get_db_settings_option( $theme_options );
					
				}
			}
			return $value;
 		}
 		
 		public static function naslaan_shopping_cart_btn_color_hover() {
	
			$value = '';
			if( naslaan_helpers::naslaan_unyson_check() ) {
			
				$theme_options = 'shopping_cart/enabled/shopping_cart_btn_color_hover';
				
				$page_options = 'header_custom_styles/enabled/shopping_cart_btn_color_hover';
				
				$events_options = 'events_header_custom_styles/enabled/shopping_cart_btn_color_hover';
				
				$page_switch= 'header_custom_styles/header_custom_styles_switch';
				
				$events_switch = 'events_header_custom_styles/header_custom_styles_switch';
				
				if( naslaan_helpers::naslaan_event_calendar_check() && tribe_is_event_query() && is_archive()){
				
					if((fw_get_db_settings_option( $events_switch )=='enabled')){
						$value = fw_get_db_settings_option( $events_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif( naslaan_helpers::naslaan_woocommerce_check() && is_shop() ){
				
					$shop_page = get_post( wc_get_page_id( 'shop' ) );
					
					if((fw_get_db_post_option( $shop_page->ID, $page_switch )=='enabled')){
						$value  = fw_get_db_post_option( $shop_page->ID, $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif(is_single() || is_page()) {
				
					if((fw_get_db_post_option( get_the_ID(), $page_switch )=='enabled')){
						$value  = fw_get_db_post_option( get_the_ID(), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} elseif((is_front_page() && is_home()) || is_home()) {
				
					if((fw_get_db_post_option( get_option( 'page_for_posts'), $page_switch )=='enabled')){
						$value = fw_get_db_post_option( get_option( 'page_for_posts'), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} else {
				
					$value = fw_get_db_settings_option( $theme_options );
					
				}
			}
			return $value;
 		}
 		
 		public static function naslaan_shopping_cart_btn_background() {
	
			$value = '';
			if( naslaan_helpers::naslaan_unyson_check() ) {
			
				$theme_options = 'shopping_cart/enabled/shopping_cart_btn_background';
				
				$page_options = 'header_custom_styles/enabled/shopping_cart_btn_background';
				
				$events_options = 'events_header_custom_styles/enabled/shopping_cart_btn_background';
				
				$page_switch= 'header_custom_styles/header_custom_styles_switch';
				
				$events_switch = 'events_header_custom_styles/header_custom_styles_switch';
				
				if( naslaan_helpers::naslaan_event_calendar_check() && tribe_is_event_query() && is_archive()){
				
					if((fw_get_db_settings_option( $events_switch )=='enabled')){
						$value = fw_get_db_settings_option( $events_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif( naslaan_helpers::naslaan_woocommerce_check() && is_shop() ){
				
					$shop_page = get_post( wc_get_page_id( 'shop' ) );
					
					if((fw_get_db_post_option( $shop_page->ID, $page_switch )=='enabled')){
						$value  = fw_get_db_post_option( $shop_page->ID, $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif(is_single() || is_page()) {
				
					if((fw_get_db_post_option( get_the_ID(), $page_switch )=='enabled')){
						$value  = fw_get_db_post_option( get_the_ID(), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} elseif((is_front_page() && is_home()) || is_home()) {
				
					if((fw_get_db_post_option( get_option( 'page_for_posts'), $page_switch )=='enabled')){
						$value = fw_get_db_post_option( get_option( 'page_for_posts'), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} else {
				
					$value = fw_get_db_settings_option( $theme_options );
					
				}
			}
			return $value;
 		}
 		
 		public static function naslaan_shopping_cart_btn_background_hover() {
	
			$value = '';
			if( naslaan_helpers::naslaan_unyson_check() ) {
			
				$theme_options = 'shopping_cart/enabled/shopping_cart_btn_background_hover';
				
				$page_options = 'header_custom_styles/enabled/shopping_cart_btn_background_hover';
				
				$events_options = 'events_header_custom_styles/enabled/shopping_cart_btn_background_hover';
				
				$page_switch= 'header_custom_styles/header_custom_styles_switch';
				
				$events_switch = 'events_header_custom_styles/header_custom_styles_switch';
				
				if( naslaan_helpers::naslaan_event_calendar_check() && tribe_is_event_query() && is_archive()){
				
					if((fw_get_db_settings_option( $events_switch )=='enabled')){
						$value = fw_get_db_settings_option( $events_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif( naslaan_helpers::naslaan_woocommerce_check() && is_shop() ){
				
					$shop_page = get_post( wc_get_page_id( 'shop' ) );
					
					if((fw_get_db_post_option( $shop_page->ID, $page_switch )=='enabled')){
						$value  = fw_get_db_post_option( $shop_page->ID, $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif(is_single() || is_page()) {
				
					if((fw_get_db_post_option( get_the_ID(), $page_switch )=='enabled')){
						$value  = fw_get_db_post_option( get_the_ID(), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} elseif((is_front_page() && is_home()) || is_home()) {
				
					if((fw_get_db_post_option( get_option( 'page_for_posts'), $page_switch )=='enabled')){
						$value = fw_get_db_post_option( get_option( 'page_for_posts'), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} else {
				
					$value = fw_get_db_settings_option( $theme_options );
					
				}
			}
			return $value;
 		}
 		
 		public static function naslaan_shopping_cart_btn_counter_color() {
	
			$value = '';
			if( naslaan_helpers::naslaan_unyson_check() ) {
			
				$theme_options = 'shopping_cart/enabled/shopping_cart_alternative/enabled/shopping_cart_btn_counter_color';
				
				$page_options = 'header_custom_styles/enabled/shopping_cart_btn_counter_color';
				
				$events_options = 'events_header_custom_styles/enabled/shopping_cart_btn_counter_color';
				
				$page_switch= 'header_custom_styles/header_custom_styles_switch';
				
				$events_switch = 'events_header_custom_styles/header_custom_styles_switch';
				
				if( naslaan_helpers::naslaan_event_calendar_check() && tribe_is_event_query() && is_archive()){
				
					if((fw_get_db_settings_option( $events_switch )=='enabled')){
						$value = fw_get_db_settings_option( $events_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif( naslaan_helpers::naslaan_woocommerce_check() && is_shop() ){
				
					$shop_page = get_post( wc_get_page_id( 'shop' ) );
					
					if((fw_get_db_post_option( $shop_page->ID, $page_switch )=='enabled')){
						$value  = fw_get_db_post_option( $shop_page->ID, $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif(is_single() || is_page()) {
				
					if((fw_get_db_post_option( get_the_ID(), $page_switch )=='enabled')){
						$value  = fw_get_db_post_option( get_the_ID(), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} elseif((is_front_page() && is_home()) || is_home()) {
				
					if((fw_get_db_post_option( get_option( 'page_for_posts'), $page_switch )=='enabled')){
						$value = fw_get_db_post_option( get_option( 'page_for_posts'), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} else {
				
					$value = fw_get_db_settings_option( $theme_options );
					
				}
			}
			return $value;
 		}
 		
 		public static function naslaan_shopping_cart_btn_counter_color_hover() {
	
			$value = '';
			if( naslaan_helpers::naslaan_unyson_check() ) {
			
				$theme_options = 'shopping_cart/enabled/shopping_cart_alternative/enabled/shopping_cart_btn_counter_color_hover';
				
				$page_options = 'header_custom_styles/enabled/shopping_cart_btn_counter_color_hover';
				
				$events_options = 'events_header_custom_styles/enabled/shopping_cart_btn_counter_color_hover';
				
				$page_switch= 'header_custom_styles/header_custom_styles_switch';
				
				$events_switch = 'events_header_custom_styles/header_custom_styles_switch';
				
				if( naslaan_helpers::naslaan_event_calendar_check() && tribe_is_event_query() && is_archive()){
				
					if((fw_get_db_settings_option( $events_switch )=='enabled')){
						$value = fw_get_db_settings_option( $events_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif( naslaan_helpers::naslaan_woocommerce_check() && is_shop() ){
				
					$shop_page = get_post( wc_get_page_id( 'shop' ) );
					
					if((fw_get_db_post_option( $shop_page->ID, $page_switch )=='enabled')){
						$value  = fw_get_db_post_option( $shop_page->ID, $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif(is_single() || is_page()) {
				
					if((fw_get_db_post_option( get_the_ID(), $page_switch )=='enabled')){
						$value  = fw_get_db_post_option( get_the_ID(), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} elseif((is_front_page() && is_home()) || is_home()) {
				
					if((fw_get_db_post_option( get_option( 'page_for_posts'), $page_switch )=='enabled')){
						$value = fw_get_db_post_option( get_option( 'page_for_posts'), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} else {
				
					$value = fw_get_db_settings_option( $theme_options );
					
				}
			}
			return $value;
 		}
 		
 		public static function naslaan_shopping_cart_btn_counter_bg() {
	
			$value = '';
			if( naslaan_helpers::naslaan_unyson_check() ) {
			
				$theme_options = 'shopping_cart/enabled/shopping_cart_alternative/enabled/shopping_cart_btn_counter_bg';
				
				$page_options = 'header_custom_styles/enabled/shopping_cart_btn_counter_bg';
				
				$events_options = 'events_header_custom_styles/enabled/shopping_cart_btn_counter_bg';
				
				$page_switch= 'header_custom_styles/header_custom_styles_switch';
				
				$events_switch = 'events_header_custom_styles/header_custom_styles_switch';
				
				if( naslaan_helpers::naslaan_event_calendar_check() && tribe_is_event_query() && is_archive()){
				
					if((fw_get_db_settings_option( $events_switch )=='enabled')){
						$value = fw_get_db_settings_option( $events_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif( naslaan_helpers::naslaan_woocommerce_check() && is_shop() ){
				
					$shop_page = get_post( wc_get_page_id( 'shop' ) );
					
					if((fw_get_db_post_option( $shop_page->ID, $page_switch )=='enabled')){
						$value  = fw_get_db_post_option( $shop_page->ID, $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif(is_single() || is_page()) {
				
					if((fw_get_db_post_option( get_the_ID(), $page_switch )=='enabled')){
						$value  = fw_get_db_post_option( get_the_ID(), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} elseif((is_front_page() && is_home()) || is_home()) {
				
					if((fw_get_db_post_option( get_option( 'page_for_posts'), $page_switch )=='enabled')){
						$value = fw_get_db_post_option( get_option( 'page_for_posts'), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} else {
				
					$value = fw_get_db_settings_option( $theme_options );
					
				}
			}
			return $value;
 		}
 		
 		public static function naslaan_shopping_cart_btn_counter_bg_hover() {
	
			$value = '';
			if( naslaan_helpers::naslaan_unyson_check() ) {
			
				$theme_options = 'shopping_cart/enabled/shopping_cart_alternative/enabled/shopping_cart_btn_counter_bg_hover';
				
				$page_options = 'header_custom_styles/enabled/shopping_cart_btn_counter_bg_hover';
				
				$events_options = 'events_header_custom_styles/enabled/shopping_cart_btn_counter_bg_hover';
				
				$page_switch= 'header_custom_styles/header_custom_styles_switch';
				
				$events_switch = 'events_header_custom_styles/header_custom_styles_switch';
				
				if( naslaan_helpers::naslaan_event_calendar_check() && tribe_is_event_query() && is_archive()){
				
					if((fw_get_db_settings_option( $events_switch )=='enabled')){
						$value = fw_get_db_settings_option( $events_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif( naslaan_helpers::naslaan_woocommerce_check() && is_shop() ){
				
					$shop_page = get_post( wc_get_page_id( 'shop' ) );
					
					if((fw_get_db_post_option( $shop_page->ID, $page_switch )=='enabled')){
						$value  = fw_get_db_post_option( $shop_page->ID, $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif(is_single() || is_page()) {
				
					if((fw_get_db_post_option( get_the_ID(), $page_switch )=='enabled')){
						$value  = fw_get_db_post_option( get_the_ID(), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} elseif((is_front_page() && is_home()) || is_home()) {
				
					if((fw_get_db_post_option( get_option( 'page_for_posts'), $page_switch )=='enabled')){
						$value = fw_get_db_post_option( get_option( 'page_for_posts'), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} else {
				
					$value = fw_get_db_settings_option( $theme_options );
					
				}
			}
			return $value;
 		}
 		
 		public static function naslaan_shopping_cart_border_color() {
	
			$value = '';
			if( naslaan_helpers::naslaan_unyson_check() ) {
			
				$theme_options = 'shopping_cart/enabled/shopping_cart_button_border/enabled/shopping_cart_border_color';
				
				$page_options = 'header_custom_styles/enabled/shopping_cart_border_color';
				
				$events_options = 'events_header_custom_styles/enabled/shopping_cart_border_color';
				
				$page_switch= 'header_custom_styles/header_custom_styles_switch';
				
				$events_switch = 'events_header_custom_styles/header_custom_styles_switch';
				
				if( naslaan_helpers::naslaan_event_calendar_check() && tribe_is_event_query() && is_archive()){
				
					if((fw_get_db_settings_option( $events_switch )=='enabled')){
						$value = fw_get_db_settings_option( $events_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif( naslaan_helpers::naslaan_woocommerce_check() && is_shop() ){
				
					$shop_page = get_post( wc_get_page_id( 'shop' ) );
					
					if((fw_get_db_post_option( $shop_page->ID, $page_switch )=='enabled')){
						$value  = fw_get_db_post_option( $shop_page->ID, $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif(is_single() || is_page()) {
				
					if((fw_get_db_post_option( get_the_ID(), $page_switch )=='enabled')){
						$value  = fw_get_db_post_option( get_the_ID(), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} elseif((is_front_page() && is_home()) || is_home()) {
				
					if((fw_get_db_post_option( get_option( 'page_for_posts'), $page_switch )=='enabled')){
						$value = fw_get_db_post_option( get_option( 'page_for_posts'), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} else {
				
					$value = fw_get_db_settings_option( $theme_options );
					
				}
			}
			return $value;
 		}
 		
 		public static function naslaan_shopping_cart_border_color_hover() {
	
			$value = '';
			if( naslaan_helpers::naslaan_unyson_check() ) {
			
				$theme_options = 'shopping_cart/enabled/shopping_cart_button_border/enabled/shopping_cart_border_color_hover';
				
				$page_options = 'header_custom_styles/enabled/shopping_cart_border_color_hover';
				
				$events_options = 'events_header_custom_styles/enabled/shopping_cart_border_color_hover';
				
				$page_switch= 'header_custom_styles/header_custom_styles_switch';
				
				$events_switch = 'events_header_custom_styles/header_custom_styles_switch';
				
				if( naslaan_helpers::naslaan_event_calendar_check() && tribe_is_event_query() && is_archive()){
				
					if((fw_get_db_settings_option( $events_switch )=='enabled')){
						$value = fw_get_db_settings_option( $events_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif( naslaan_helpers::naslaan_woocommerce_check() && is_shop() ){
				
					$shop_page = get_post( wc_get_page_id( 'shop' ) );
					
					if((fw_get_db_post_option( $shop_page->ID, $page_switch )=='enabled')){
						$value  = fw_get_db_post_option( $shop_page->ID, $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif(is_single() || is_page()) {
				
					if((fw_get_db_post_option( get_the_ID(), $page_switch )=='enabled')){
						$value  = fw_get_db_post_option( get_the_ID(), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} elseif((is_front_page() && is_home()) || is_home()) {
				
					if((fw_get_db_post_option( get_option( 'page_for_posts'), $page_switch )=='enabled')){
						$value = fw_get_db_post_option( get_option( 'page_for_posts'), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} else {
				
					$value = fw_get_db_settings_option( $theme_options );
					
				}
			}
			return $value;
 		}
 		
 		public static function naslaan_wpml_btn_sepline_color() {
	
			$value = '';
			if( naslaan_helpers::naslaan_unyson_check() ) {
			
				$theme_options = 'wpml_container_visibility/enabled/wpml_btn_sepline/enabled/wpml_btn_sepline_color';
				
				$page_options = 'header_custom_styles/enabled/wpml_btn_sepline_color';
				
				$events_options = 'events_header_custom_styles/enabled/wpml_btn_sepline_color';
				
				$page_switch= 'header_custom_styles/header_custom_styles_switch';
				
				$events_switch = 'events_header_custom_styles/header_custom_styles_switch';
				
				if( naslaan_helpers::naslaan_event_calendar_check() && tribe_is_event_query() && is_archive()){
				
					if((fw_get_db_settings_option( $events_switch )=='enabled')){
						$value = fw_get_db_settings_option( $events_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif( naslaan_helpers::naslaan_woocommerce_check() && is_shop() ){
				
					$shop_page = get_post( wc_get_page_id( 'shop' ) );
					
					if((fw_get_db_post_option( $shop_page->ID, $page_switch )=='enabled')){
						$value  = fw_get_db_post_option( $shop_page->ID, $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif(is_single() || is_page()) {
				
					if((fw_get_db_post_option( get_the_ID(), $page_switch )=='enabled')){
						$value  = fw_get_db_post_option( get_the_ID(), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} elseif((is_front_page() && is_home()) || is_home()) {
				
					if((fw_get_db_post_option( get_option( 'page_for_posts'), $page_switch )=='enabled')){
						$value = fw_get_db_post_option( get_option( 'page_for_posts'), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} else {
				
					$value = fw_get_db_settings_option( $theme_options );
					
				}
			}
			return $value;
 		}
 		
 		public static function naslaan_wpml_btn_color() {
	
			$value = '';
			if( naslaan_helpers::naslaan_unyson_check() ) {
			
				$theme_options = 'wpml_container_visibility/enabled/wpml_btn_color';
				
				$page_options = 'header_custom_styles/enabled/wpml_btn_color';
				
				$events_options = 'events_header_custom_styles/enabled/wpml_btn_color';
				
				$page_switch= 'header_custom_styles/header_custom_styles_switch';
				
				$events_switch = 'events_header_custom_styles/header_custom_styles_switch';
				
				if( naslaan_helpers::naslaan_event_calendar_check() && tribe_is_event_query() && is_archive()){
				
					if((fw_get_db_settings_option( $events_switch )=='enabled')){
						$value = fw_get_db_settings_option( $events_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif( naslaan_helpers::naslaan_woocommerce_check() && is_shop() ){
				
					$shop_page = get_post( wc_get_page_id( 'shop' ) );
					
					if((fw_get_db_post_option( $shop_page->ID, $page_switch )=='enabled')){
						$value  = fw_get_db_post_option( $shop_page->ID, $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif(is_single() || is_page()) {
				
					if((fw_get_db_post_option( get_the_ID(), $page_switch )=='enabled')){
						$value  = fw_get_db_post_option( get_the_ID(), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} elseif((is_front_page() && is_home()) || is_home()) {
				
					if((fw_get_db_post_option( get_option( 'page_for_posts'), $page_switch )=='enabled')){
						$value = fw_get_db_post_option( get_option( 'page_for_posts'), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} else {
				
					$value = fw_get_db_settings_option( $theme_options );
					
				}
			}
			return $value;
 		}
 		
 		public static function naslaan_wpml_btn_color_hover() {
	
			$value = '';
			if( naslaan_helpers::naslaan_unyson_check() ) {
			
				$theme_options = 'wpml_container_visibility/enabled/wpml_btn_color_hover';
				
				$page_options = 'header_custom_styles/enabled/wpml_btn_color_hover';
				
				$events_options = 'events_header_custom_styles/enabled/wpml_btn_color_hover';
				
				$page_switch= 'header_custom_styles/header_custom_styles_switch';
				
				$events_switch = 'events_header_custom_styles/header_custom_styles_switch';
				
				if( naslaan_helpers::naslaan_event_calendar_check() && tribe_is_event_query() && is_archive()){
				
					if((fw_get_db_settings_option( $events_switch )=='enabled')){
						$value = fw_get_db_settings_option( $events_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif( naslaan_helpers::naslaan_woocommerce_check() && is_shop() ){
				
					$shop_page = get_post( wc_get_page_id( 'shop' ) );
					
					if((fw_get_db_post_option( $shop_page->ID, $page_switch )=='enabled')){
						$value  = fw_get_db_post_option( $shop_page->ID, $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif(is_single() || is_page()) {
				
					if((fw_get_db_post_option( get_the_ID(), $page_switch )=='enabled')){
						$value  = fw_get_db_post_option( get_the_ID(), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} elseif((is_front_page() && is_home()) || is_home()) {
				
					if((fw_get_db_post_option( get_option( 'page_for_posts'), $page_switch )=='enabled')){
						$value = fw_get_db_post_option( get_option( 'page_for_posts'), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} else {
				
					$value = fw_get_db_settings_option( $theme_options );
					
				}
			}
			return $value;
 		}
 		
 		public static function naslaan_wpml_btn_background() {
	
			$value = '';
			if( naslaan_helpers::naslaan_unyson_check() ) {
			
				$theme_options = 'wpml_container_visibility/enabled/wpml_btn_background';
				
				$page_options = 'header_custom_styles/enabled/wpml_btn_background';
				
				$events_options = 'events_header_custom_styles/enabled/wpml_btn_background';
				
				$page_switch= 'header_custom_styles/header_custom_styles_switch';
				
				$events_switch = 'events_header_custom_styles/header_custom_styles_switch';
				
				if( naslaan_helpers::naslaan_event_calendar_check() && tribe_is_event_query() && is_archive()){
				
					if((fw_get_db_settings_option( $events_switch )=='enabled')){
						$value = fw_get_db_settings_option( $events_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif( naslaan_helpers::naslaan_woocommerce_check() && is_shop() ){
				
					$shop_page = get_post( wc_get_page_id( 'shop' ) );
					
					if((fw_get_db_post_option( $shop_page->ID, $page_switch )=='enabled')){
						$value  = fw_get_db_post_option( $shop_page->ID, $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif(is_single() || is_page()) {
				
					if((fw_get_db_post_option( get_the_ID(), $page_switch )=='enabled')){
						$value  = fw_get_db_post_option( get_the_ID(), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} elseif((is_front_page() && is_home()) || is_home()) {
				
					if((fw_get_db_post_option( get_option( 'page_for_posts'), $page_switch )=='enabled')){
						$value = fw_get_db_post_option( get_option( 'page_for_posts'), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} else {
				
					$value = fw_get_db_settings_option( $theme_options );
					
				}
			}
			return $value;
 		}
 		
 		public static function naslaan_wpml_btn_background_hover() {
	
			$value = '';
			if( naslaan_helpers::naslaan_unyson_check() ) {
			
				$theme_options = 'wpml_container_visibility/enabled/wpml_btn_background_hover';
				
				$page_options = 'header_custom_styles/enabled/wpml_btn_background_hover';
				
				$events_options = 'events_header_custom_styles/enabled/wpml_btn_background_hover';
				
				$page_switch= 'header_custom_styles/header_custom_styles_switch';
				
				$events_switch = 'events_header_custom_styles/header_custom_styles_switch';
				
				if( naslaan_helpers::naslaan_event_calendar_check() && tribe_is_event_query() && is_archive()){
				
					if((fw_get_db_settings_option( $events_switch )=='enabled')){
						$value = fw_get_db_settings_option( $events_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif( naslaan_helpers::naslaan_woocommerce_check() && is_shop() ){
				
					$shop_page = get_post( wc_get_page_id( 'shop' ) );
					
					if((fw_get_db_post_option( $shop_page->ID, $page_switch )=='enabled')){
						$value  = fw_get_db_post_option( $shop_page->ID, $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif(is_single() || is_page()) {
				
					if((fw_get_db_post_option( get_the_ID(), $page_switch )=='enabled')){
						$value  = fw_get_db_post_option( get_the_ID(), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} elseif((is_front_page() && is_home()) || is_home()) {
				
					if((fw_get_db_post_option( get_option( 'page_for_posts'), $page_switch )=='enabled')){
						$value = fw_get_db_post_option( get_option( 'page_for_posts'), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} else {
				
					$value = fw_get_db_settings_option( $theme_options );
					
				}
			}
			return $value;
 		}
 		
 		public static function naslaan_wpml_border_color() {
	
			$value = '';
			if( naslaan_helpers::naslaan_unyson_check() ) {
			
				$theme_options = 'wpml_container_visibility/enabled/wpml_button_border/enabled/wpml_border_color';
				
				$page_options = 'header_custom_styles/enabled/wpml_border_color';
				
				$events_options = 'events_header_custom_styles/enabled/wpml_border_color';
				
				$page_switch= 'header_custom_styles/header_custom_styles_switch';
				
				$events_switch = 'events_header_custom_styles/header_custom_styles_switch';
				
				if( naslaan_helpers::naslaan_event_calendar_check() && tribe_is_event_query() && is_archive()){
				
					if((fw_get_db_settings_option( $events_switch )=='enabled')){
						$value = fw_get_db_settings_option( $events_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif( naslaan_helpers::naslaan_woocommerce_check() && is_shop() ){
				
					$shop_page = get_post( wc_get_page_id( 'shop' ) );
					
					if((fw_get_db_post_option( $shop_page->ID, $page_switch )=='enabled')){
						$value  = fw_get_db_post_option( $shop_page->ID, $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif(is_single() || is_page()) {
				
					if((fw_get_db_post_option( get_the_ID(), $page_switch )=='enabled')){
						$value  = fw_get_db_post_option( get_the_ID(), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} elseif((is_front_page() && is_home()) || is_home()) {
				
					if((fw_get_db_post_option( get_option( 'page_for_posts'), $page_switch )=='enabled')){
						$value = fw_get_db_post_option( get_option( 'page_for_posts'), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} else {
				
					$value = fw_get_db_settings_option( $theme_options );
					
				}
			}
			return $value;
 		}
 		
 		public static function naslaan_wpml_border_color_hover() {
	
			$value = '';
			if( naslaan_helpers::naslaan_unyson_check() ) {
			
				$theme_options = 'wpml_container_visibility/enabled/wpml_button_border/enabled/wpml_border_color_hover';
				
				$page_options = 'header_custom_styles/enabled/wpml_border_color_hover';
				
				$events_options = 'events_header_custom_styles/enabled/wpml_border_color_hover';
				
				$page_switch= 'header_custom_styles/header_custom_styles_switch';
				
				$events_switch = 'events_header_custom_styles/header_custom_styles_switch';
				
				if( naslaan_helpers::naslaan_event_calendar_check() && tribe_is_event_query() && is_archive()){
				
					if((fw_get_db_settings_option( $events_switch )=='enabled')){
						$value = fw_get_db_settings_option( $events_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif( naslaan_helpers::naslaan_woocommerce_check() && is_shop() ){
				
					$shop_page = get_post( wc_get_page_id( 'shop' ) );
					
					if((fw_get_db_post_option( $shop_page->ID, $page_switch )=='enabled')){
						$value  = fw_get_db_post_option( $shop_page->ID, $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif(is_single() || is_page()) {
				
					if((fw_get_db_post_option( get_the_ID(), $page_switch )=='enabled')){
						$value  = fw_get_db_post_option( get_the_ID(), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} elseif((is_front_page() && is_home()) || is_home()) {
				
					if((fw_get_db_post_option( get_option( 'page_for_posts'), $page_switch )=='enabled')){
						$value = fw_get_db_post_option( get_option( 'page_for_posts'), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} else {
				
					$value = fw_get_db_settings_option( $theme_options );
					
				}
			}
			return $value;
 		}
 			
 		public static function naslaan_header_absolute() {
	
			$value = '';
			if( naslaan_helpers::naslaan_unyson_check() ) {
			
				$header_type = 'header_types/header_type';
				
				if($header_type=='left'){
					$theme_options = 'header_types/left/header_absolute';
				}elseif($header_type=='center'){
					$theme_options = 'header_types/center/header_absolute';
				}else{
					$theme_options = 'header_types/left/header_absolute';
				}
			
				$page_options = 'header_custom_styles/enabled/header_absolute';
				
				$events_options = 'events_header_custom_styles/enabled/header_absolute';
				
				$page_switch= 'header_custom_styles/header_custom_styles_switch';
				
				$events_switch = 'events_header_custom_styles/header_custom_styles_switch';
				
				if( naslaan_helpers::naslaan_event_calendar_check() && tribe_is_event_query() && is_archive()){
				
					if((fw_get_db_settings_option( $events_switch )=='enabled')){
						$value = fw_get_db_settings_option( $events_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif( naslaan_helpers::naslaan_woocommerce_check() && is_shop() ){
				
					$shop_page = get_post( wc_get_page_id( 'shop' ) );
					
					if((fw_get_db_post_option( $shop_page->ID, $page_switch )=='enabled')){
						$value  = fw_get_db_post_option( $shop_page->ID, $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
				
				}elseif(is_single() || is_page()) {
				
					if((fw_get_db_post_option( get_the_ID(), $page_switch )=='enabled')){
						$value  = fw_get_db_post_option( get_the_ID(), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} elseif((is_front_page() && is_home()) || is_home()) {
				
					if((fw_get_db_post_option( get_option( 'page_for_posts'), $page_switch )=='enabled')){
						$value = fw_get_db_post_option( get_option( 'page_for_posts'), $page_options );
					}else{
						$value = fw_get_db_settings_option( $theme_options );
					}
					
				} else {
				
					$value = fw_get_db_settings_option( $theme_options );
					
				}
			}
			return $value;
 		}
 		
 		public static function naslaan_main_layouts() {
	
			$value = '';
			if( naslaan_helpers::naslaan_unyson_check() ) {
			
				$theme_options = 'main_layouts';
				
				$page_options = 'page_main_layouts';
				
				$events_options = 'events_main_layouts';
				
				if( naslaan_helpers::naslaan_event_calendar_check() && tribe_is_event_query() && is_archive()){
				
					$value = fw_get_db_settings_option( $events_options );
				
				}elseif( naslaan_helpers::naslaan_woocommerce_check() && is_shop() ){
				
					$shop_page = get_post( wc_get_page_id( 'shop' ) );
					
					$value  = fw_get_db_post_option( $shop_page->ID, $page_options );	
				
				}elseif(is_single() || is_page()) {
				
					$value  = fw_get_db_post_option( get_the_ID(), $page_options );
					
				} elseif((is_front_page() && is_home()) || is_home()) {
				
					$value = fw_get_db_post_option( get_option( 'page_for_posts'), $page_options );
					
				} else {
				
					$value = fw_get_db_settings_option($theme_options);
					
				}
			}
			return $value;
 		}
 			
}
