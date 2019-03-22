<?php
$social_media_visibility = $header_social_media_type = $forrst_switch = $forrst_url = $dribbble_switch = $dribbble_url =  $twitter_switch = $twitter_url =$flickr_switch = $flickr_url = $twitter2_switch = $twitter2_url = $facebook_switch = $facebook_url = $skype_switch = $skype_url = $digg_switch = $digg_url = $google_switch = $google_url = $html5_switch = $html5_url = $linkedin_switch = $linkedin_url = $lastfm_switch = $lastfm_url = $vimeo_switch = $vimeo_url = $yahoo_switch = $yahoo_url = $tumblr_switch = $tumblr_url = $apple_switch = $apple_url = $windows_switch = $windows_url = $youtube_switch = $youtube_url = $delicious_switch = $delicious_url = $rss_switch = $rss_url = $picasa_switch = $picasa_url = $deviantart_switch = $deviantart_url = $whatsapp_switch = $whatsapp_url = $snapchat_switch = $snapchat_url = $blogger_switch = $blogger_url = $wordpress_switch = $wordpress_url = $amazon_switch = $amazon_url = $appstore_switch = $appstore_url = $paypal_switch = $paypal_url = $myspace_switch = $myspace_url = $dropbox_switch = $dropbox_url = $windows8_switch = $windows8_url = $pinterest_switch = $pinterest_url = $soundcloud_switch = $soundcloud_url = $google_drive_switch = $google_drive_url = $android_switch = $android_url = $behance_switch = $behance_url = $instagram_switch = $instagram_url = $ebay_switch = $ebay_url = $google_plus_switch = $google_plus_url = $github_switch = $github_url = $stackoverflow_switch = $stackoverflow_url = $spotify_switch = $spotify_url = $stumbleupon_switch = $stumbleupon_url = $visa_switch = $visa_url = $mastercard_switch = $mastercard_url = $amex_switch = $amex_url = $ios_switch = $ios_url = $osx_switch = $osx_url = $evernote_switch = $evernote_url = $yelp_switch = $yelp_url = $yelp2_switch = $yelp2_url = $medium_switch = $medium_url = $slack_switch = $slack_url = $vine_switch = $vine_url = $edge_switch = $edge_url = $outlook_switch = $outlook_url = $pencilcase_switch = $pencilcase_url = $play_switch = $play_url = $icloud_switch = $icloud_url = $forrst_switch_1 = $forrst_url_1 = $dribbble_switch_1 = $dribbble_url_1 =  $twitter_switch_1 = $twitter_url_1 =$flickr_switch_1 = $flickr_url_1 = $twitter2_switch_1 = $twitter2_url_1 = $facebook_switch_1 = $facebook_url_1 = $skype_switch_1 = $skype_url_1 = $digg_switch_1 = $digg_url_1 = $google_switch_1 = $google_url_1 = $html5_switch_1 = $html5_url_1 = $linkedin_switch_1 = $linkedin_url_1 = $lastfm_switch_1 = $lastfm_url_1 = $vimeo_switch_1 = $vimeo_url_1 = $yahoo_switch_1 = $yahoo_url_1 = $tumblr_switch_1 = $tumblr_url_1 = $apple_switch_1 = $apple_url_1 = $windows_switch_1 = $windows_url_1 = $youtube_switch_1 = $youtube_url_1 = $delicious_switch_1 = $delicious_url_1 = $rss_switch_1 = $rss_url_1 = $picasa_switch_1 = $picasa_url_1 = $deviantart_switch_1 = $deviantart_url_1 = $whatsapp_switch_1 = $whatsapp_url_1 = $snapchat_switch_1 = $snapchat_url_1 = $blogger_switch_1 = $blogger_url_1 = $wordpress_switch_1 = $wordpress_url_1 = $amazon_switch_1 = $amazon_url_1 = $appstore_switch_1 = $appstore_url_1 = $paypal_switch_1 = $paypal_url_1 = $myspace_switch_1 = $myspace_url_1 = $dropbox_switch_1 = $dropbox_url_1 = $windows8_switch_1 = $windows8_url_1 = $pinterest_switch_1 = $pinterest_url_1 = $soundcloud_switch_1 = $soundcloud_url_1 = $google_drive_switch_1 = $google_drive_url_1 = $android_switch_1 = $android_url_1 = $behance_switch_1 = $behance_url_1 = $instagram_switch_1 = $instagram_url_1 = $ebay_switch_1 = $ebay_url_1 = $google_plus_switch_1 = $google_plus_url_1 = $github_switch_1 = $github_url_1 = $stackoverflow_switch_1 = $stackoverflow_url_1 = $spotify_switch_1 = $spotify_url_1 = $stumbleupon_switch_1 = $stumbleupon_url_1 = $visa_switch_1 = $visa_url_1 = $mastercard_switch_1 = $mastercard_url_1 = $amex_switch_1 = $amex_url_1 = $ios_switch_1 = $ios_url_1 = $osx_switch_1 = $osx_url_1 = $evernote_switch_1 = $evernote_url_1 = $yelp_switch_1 = $yelp_url_1 = $yelp2_switch_1 = $yelp2_url_1 = $medium_switch_1 = $medium_url_1 = $slack_switch_1 = $slack_url_1 = $vine_switch_1 = $vine_url_1 = $edge_switch_1 = $edge_url_1 = $outlook_switch_1 = $outlook_url_1 = $pencilcase_switch_1 = $pencilcase_url_1 = $play_switch_1 = $play_url_1 = $icloud_switch_1 = $icloud_url_1 =$social_media_btn_visibility = '';


	if( naslaan_helpers::naslaan_unyson_check() ) {
	
		$social_media_visibility = fw_get_db_settings_option('header_social_media_picker/social_media_visibility');	
		$header_social_media_type = fw_get_db_settings_option('header_social_media_type');
	
		$forrst_switch = fw_get_db_settings_option('header_social_media_forrst/forrst_switch');
		$forrst_url = fw_get_db_settings_option('header_social_media_forrst/enabled/forrst_url');
		
		$dribbble_switch = fw_get_db_settings_option('header_social_media_dribbble/dribbble_switch');
		$dribbble_url = fw_get_db_settings_option('header_social_media_dribbble/enabled/dribbble_url');
		
		$twitter_switch = fw_get_db_settings_option('header_social_media_twitter/twitter_switch');
		$twitter_url = fw_get_db_settings_option('header_social_media_twitter/enabled/twitter_url');
		
		$flickr_switch = fw_get_db_settings_option('header_social_media_flickr/flickr_switch');
		$flickr_url = fw_get_db_settings_option('header_social_media_flickr/enabled/flickr_url');
		
		$twitter2_switch = fw_get_db_settings_option('header_social_media_twitter2/twitter2_switch');
		$twitter2_url = fw_get_db_settings_option('header_social_media_twitter2/enabled/twitter2_url');
		
		$facebook_switch = fw_get_db_settings_option('header_social_media_facebook/facebook_switch');
		$facebook_url = fw_get_db_settings_option('header_social_media_facebook/enabled/facebook_url');
		
		$skype_switch = fw_get_db_settings_option('header_social_media_skype/skype_switch');
		$skype_url = fw_get_db_settings_option('header_social_media_skype/enabled/skype_url');
		
		$digg_switch = fw_get_db_settings_option('header_social_media_digg/digg_switch');
		$digg_url = fw_get_db_settings_option('header_social_media_digg/enabled/digg_url');
		
		$google_switch = fw_get_db_settings_option('header_social_media_google/google_switch');
		$google_url = fw_get_db_settings_option('header_social_media_google/enabled/google_url');
		
		$html5_switch = fw_get_db_settings_option('header_social_media_html5/html5_switch');
		$html5_url = fw_get_db_settings_option('header_social_media_html5/enabled/html5_url');
		
		$linkedin_switch = fw_get_db_settings_option('header_social_media_linkedin/linkedin_switch');
		$linkedin_url = fw_get_db_settings_option('header_social_media_linkedin/enabled/linkedin_url');
		
		$lastfm_switch = fw_get_db_settings_option('header_social_media_lastfm/lastfm_switch');
		$lastfm_url = fw_get_db_settings_option('header_social_media_lastfm/enabled/lastfm_url');
		
		$vimeo_switch = fw_get_db_settings_option('header_social_media_vimeo/vimeo_switch');
		$vimeo_url = fw_get_db_settings_option('header_social_media_vimeo/enabled/vimeo_url');
		
		$yahoo_switch = fw_get_db_settings_option('header_social_media_yahoo/yahoo_switch');
		$yahoo_url = fw_get_db_settings_option('header_social_media_yahoo/enabled/yahoo_url');
		
		$tumblr_switch = fw_get_db_settings_option('header_social_media_tumblr/tumblr_switch');
		$tumblr_url = fw_get_db_settings_option('header_social_media_tumblr/enabled/tumblr_url');
		
		$apple_switch = fw_get_db_settings_option('header_social_media_apple/apple_switch');
		$apple_url = fw_get_db_settings_option('header_social_media_apple/enabled/apple_url');
		
		$windows_switch = fw_get_db_settings_option('header_social_media_windows/windows_switch');
		$windows_url = fw_get_db_settings_option('header_social_media_windows/enabled/windows_url');
		
		$youtube_switch = fw_get_db_settings_option('header_social_media_youtube/youtube_switch');
		$youtube_url = fw_get_db_settings_option('header_social_media_youtube/enabled/youtube_url');
		
		$delicious_switch = fw_get_db_settings_option('header_social_media_delicious/delicious_switch');
		$delicious_url = fw_get_db_settings_option('header_social_media_delicious/enabled/delicious_url');
		
		$rss_switch = fw_get_db_settings_option('header_social_media_rss/rss_switch');
		$rss_url = fw_get_db_settings_option('header_social_media_rss/enabled/rss_url');
		
		$picasa_switch = fw_get_db_settings_option('header_social_media_picasa/picasa_switch');
		$picasa_url = fw_get_db_settings_option('header_social_media_picasa/enabled/picasa_url');
		
		$deviantart_switch = fw_get_db_settings_option('header_social_media_deviantart/deviantart_switch');
		$deviantart_url = fw_get_db_settings_option('header_social_media_deviantart/enabled/deviantart_url');
		
		$whatsapp_switch = fw_get_db_settings_option('header_social_media_whatsapp/whatsapp_switch');
		$whatsapp_url = fw_get_db_settings_option('header_social_media_whatsapp/enabled/whatsapp_url');
		
		$snapchat_switch = fw_get_db_settings_option('header_social_media_snapchat/snapchat_switch');
		$snapchat_url = fw_get_db_settings_option('header_social_media_snapchat/enabled/snapchat_url');
		
		$blogger_switch = fw_get_db_settings_option('header_social_media_blogger/blogger_switch');
		$blogger_url = fw_get_db_settings_option('header_social_media_blogger/enabled/blogger_url');
		
		$wordpress_switch = fw_get_db_settings_option('header_social_media_wordpress/wordpress_switch');
		$wordpress_url = fw_get_db_settings_option('header_social_media_wordpress/enabled/wordpress_url');
		
		$amazon_switch = fw_get_db_settings_option('header_social_media_amazon/amazon_switch');
		$amazon_url = fw_get_db_settings_option('header_social_media_amazon/enabled/amazon_url');
		
		$appstore_switch = fw_get_db_settings_option('header_social_media_appstore/appstore_switch');
		$appstore_url = fw_get_db_settings_option('header_social_media_appstore/enabled/appstore_url');
		
		$paypal_switch = fw_get_db_settings_option('header_social_media_paypal/paypal_switch');
		$paypal_url = fw_get_db_settings_option('header_social_media_paypal/enabled/paypal_url');
		
		$myspace_switch = fw_get_db_settings_option('header_social_media_myspace/myspace_switch');
		$myspace_url = fw_get_db_settings_option('header_social_media_myspace/enabled/myspace_url');
		
		$dropbox_switch = fw_get_db_settings_option('header_social_media_dropbox/dropbox_switch');
		$dropbox_url = fw_get_db_settings_option('header_social_media_dropbox/enabled/dropbox_url');
		
		$windows8_switch = fw_get_db_settings_option('header_social_media_windows8/windows8_switch');
		$windows8_url = fw_get_db_settings_option('header_social_media_windows8/enabled/windows8_url');
		
		$pinterest_switch = fw_get_db_settings_option('header_social_media_pinterest/pinterest_switch');
		$pinterest_url = fw_get_db_settings_option('header_social_media_pinterest/enabled/pinterest_url');
		
		$soundcloud_switch = fw_get_db_settings_option('header_social_media_soundcloud/soundcloud_switch');
		$soundcloud_url = fw_get_db_settings_option('header_social_media_soundcloud/enabled/soundcloud_url');
		
		$google_drive_switch = fw_get_db_settings_option('header_social_media_google_drive/google_drive_switch');
		$google_drive_url = fw_get_db_settings_option('header_social_media_google_drive/enabled/google_drive_url');
		
		$android_switch = fw_get_db_settings_option('header_social_media_android/android_switch');
		$android_url = fw_get_db_settings_option('header_social_media_android/enabled/android_url');
		
		$behance_switch = fw_get_db_settings_option('header_social_media_behance/behance_switch');
		$behance_url = fw_get_db_settings_option('header_social_media_behance/enabled/behance_url');
		
		$instagram_switch = fw_get_db_settings_option('header_social_media_instagram/instagram_switch');
		$instagram_url = fw_get_db_settings_option('header_social_media_instagram/enabled/instagram_url');
		
		$ebay_switch = fw_get_db_settings_option('header_social_media_ebay/ebay_switch');
		$ebay_url = fw_get_db_settings_option('header_social_media_ebay/enabled/ebay_url');
		
		$google_plus_switch = fw_get_db_settings_option('header_social_media_google_plus/google_plus_switch');
		$google_plus_url = fw_get_db_settings_option('header_social_media_google_plus/enabled/google_plus_url');

		$github_switch = fw_get_db_settings_option('header_social_media_github/github_switch');
		$github_url = fw_get_db_settings_option('header_social_media_github/enabled/github_url');
		
		$stackoverflow_switch = fw_get_db_settings_option('header_social_media_stackoverflow/stackoverflow_switch');
		$stackoverflow_url = fw_get_db_settings_option('header_social_media_stackoverflow/enabled/stackoverflow_url');
		
		$spotify_switch = fw_get_db_settings_option('header_social_media_spotify/spotify_switch');
		$spotify_url = fw_get_db_settings_option('header_social_media_spotify/enabled/spotify_url');
		
		$stumbleupon_switch = fw_get_db_settings_option('header_social_media_stumbleupon/stumbleupon_switch');
		$stumbleupon_url = fw_get_db_settings_option('header_social_media_stumbleupon/enabled/stumbleupon_url');
		
		$visa_switch = fw_get_db_settings_option('header_social_media_visa/visa_switch');
		$visa_url = fw_get_db_settings_option('header_social_media_visa/enabled/visa_url');
		
		$mastercard_switch = fw_get_db_settings_option('header_social_media_mastercard/mastercard_switch');
		$mastercard_url = fw_get_db_settings_option('header_social_media_mastercard/enabled/mastercard_url');
		
		$amex_switch = fw_get_db_settings_option('header_social_media_amex/amex_switch');
		$amex_url = fw_get_db_settings_option('header_social_media_amex/enabled/amex_url');
		
		$ios_switch = fw_get_db_settings_option('header_social_media_ios/ios_switch');
		$ios_url = fw_get_db_settings_option('header_social_media_ios/enabled/ios_url');
		
		$osx_switch = fw_get_db_settings_option('header_social_media_osx/osx_switch');
		$osx_url = fw_get_db_settings_option('header_social_media_osx/enabled/osx_url');
		
		$evernote_switch = fw_get_db_settings_option('header_social_media_evernote/evernote_switch');
		$evernote_url = fw_get_db_settings_option('header_social_media_evernote/enabled/evernote_url');
		
		$yelp_switch = fw_get_db_settings_option('header_social_media_yelp/yelp_switch');
		$yelp_url = fw_get_db_settings_option('header_social_media_yelp/enabled/yelp_url');
		
		$yelp2_switch = fw_get_db_settings_option('header_social_media_yelp2/yelp2_switch');
		$yelp2_url = fw_get_db_settings_option('header_social_media_yelp2/enabled/yelp2_url');
		
		$medium_switch = fw_get_db_settings_option('header_social_media_medium/medium_switch');
		$medium_url = fw_get_db_settings_option('header_social_media_medium/enabled/medium_url');
		
		$slack_switch = fw_get_db_settings_option('header_social_media_slack/slack_switch');
		$slack_url = fw_get_db_settings_option('header_social_media_slack/enabled/slack_url');
		
		$vine_switch = fw_get_db_settings_option('header_social_media_vine/vine_switch');
		$vine_url = fw_get_db_settings_option('header_social_media_vine/enabled/vine_url');
		
		$edge_switch = fw_get_db_settings_option('header_social_media_edge/edge_switch');
		$edge_url = fw_get_db_settings_option('header_social_media_edge/enabled/edge_url');
		
		$outlook_switch = fw_get_db_settings_option('header_social_media_outlook/outlook_switch');
		$outlook_url = fw_get_db_settings_option('header_social_media_outlook/enabled/outlook_url');
		
		$pencilcase_switch = fw_get_db_settings_option('header_social_media_pencilcase/pencilcase_switch');
		$pencilcase_url = fw_get_db_settings_option('header_social_media_pencilcase/enabled/pencilcase_url');
		
		$play_switch = fw_get_db_settings_option('header_social_media_play/play_switch');
		$play_url = fw_get_db_settings_option('header_social_media_play/enabled/play_url');
		
		$icloud_switch = fw_get_db_settings_option('header_social_media_icloud/icloud_switch');
		$icloud_url = fw_get_db_settings_option('header_social_media_icloud/enabled/icloud_url');
		
		$forrst_switch_1 = fw_get_db_settings_option('header_social_media_forrst_1/forrst_switch_1');
		$forrst_url_1 = fw_get_db_settings_option('header_social_media_forrst_1/enabled/forrst_url_1');
		
		$dribbble_switch_1 = fw_get_db_settings_option('header_social_media_dribbble_1/dribbble_switch_1');
		$dribbble_url_1 = fw_get_db_settings_option('header_social_media_dribbble_1/enabled/dribbble_url_1');
		
		$twitter_switch_1 = fw_get_db_settings_option('header_social_media_twitter_1/twitter_switch_1');
		$twitter_url_1 = fw_get_db_settings_option('header_social_media_twitter_1/enabled/twitter_url_1');
		
		$flickr_switch_1 = fw_get_db_settings_option('header_social_media_flickr_1/flickr_switch_1');
		$flickr_url_1 = fw_get_db_settings_option('header_social_media_flickr_1/enabled/flickr_url_1');
		
		$twitter2_switch_1 = fw_get_db_settings_option('header_social_media_twitter2_1/twitter2_switch_1');
		$twitter2_url_1 = fw_get_db_settings_option('header_social_media_twitter2_1/enabled/twitter2_url_1');
		
		$facebook_switch_1 = fw_get_db_settings_option('header_social_media_facebook_1/facebook_switch_1');
		$facebook_url_1 = fw_get_db_settings_option('header_social_media_facebook_1/enabled/facebook_url_1');
		
		$skype_switch_1 = fw_get_db_settings_option('header_social_media_skype_1/skype_switch_1');
		$skype_url_1 = fw_get_db_settings_option('header_social_media_skype_1/enabled/skype_url_1');
		
		$digg_switch_1 = fw_get_db_settings_option('header_social_media_digg_1/digg_switch_1');
		$digg_url_1 = fw_get_db_settings_option('header_social_media_digg_1/enabled/digg_url_1');
		
		$google_switch_1 = fw_get_db_settings_option('header_social_media_google_1/google_switch_1');
		$google_url_1 = fw_get_db_settings_option('header_social_media_google_1/enabled/google_url_1');
		
		$html5_switch_1 = fw_get_db_settings_option('header_social_media_html5_1/html5_switch_1');
		$html5_url_1 = fw_get_db_settings_option('header_social_media_html5_1/enabled/html5_url_1');
		
		$linkedin_switch_1 = fw_get_db_settings_option('header_social_media_linkedin_1/linkedin_switch_1');
		$linkedin_url_1 = fw_get_db_settings_option('header_social_media_linkedin_1/enabled/linkedin_url_1');
		
		$lastfm_switch_1 = fw_get_db_settings_option('header_social_media_lastfm_1/lastfm_switch_1');
		$lastfm_url_1 = fw_get_db_settings_option('header_social_media_lastfm_1/enabled/lastfm_url_1');
		
		$vimeo_switch_1 = fw_get_db_settings_option('header_social_media_vimeo_1/vimeo_switch_1');
		$vimeo_url_1 = fw_get_db_settings_option('header_social_media_vimeo_1/enabled/vimeo_url_1');
		
		$yahoo_switch_1 = fw_get_db_settings_option('header_social_media_yahoo_1/yahoo_switch_1');
		$yahoo_url_1 = fw_get_db_settings_option('header_social_media_yahoo_1/enabled/yahoo_url_1');
		
		$tumblr_switch_1 = fw_get_db_settings_option('header_social_media_tumblr_1/tumblr_switch_1');
		$tumblr_url_1 = fw_get_db_settings_option('header_social_media_tumblr_1/enabled/tumblr_url_1');
		
		$apple_switch_1 = fw_get_db_settings_option('header_social_media_apple_1/apple_switch_1');
		$apple_url_1 = fw_get_db_settings_option('header_social_media_apple_1/enabled/apple_url_1');
		
		$windows_switch_1 = fw_get_db_settings_option('header_social_media_windows_1/windows_switch_1');
		$windows_url_1 = fw_get_db_settings_option('header_social_media_windows_1/enabled/windows_url_1');
		
		$youtube_switch_1 = fw_get_db_settings_option('header_social_media_youtube_1/youtube_switch_1');
		$youtube_url_1 = fw_get_db_settings_option('header_social_media_youtube_1/enabled/youtube_url_1');
		
		$delicious_switch_1 = fw_get_db_settings_option('header_social_media_delicious_1/delicious_switch_1');
		$delicious_url_1 = fw_get_db_settings_option('header_social_media_delicious_1/enabled/delicious_url_1');
		
		$rss_switch_1 = fw_get_db_settings_option('header_social_media_rss_1/rss_switch_1');
		$rss_url_1 = fw_get_db_settings_option('header_social_media_rss_1/enabled/rss_url_1');
		
		$picasa_switch_1 = fw_get_db_settings_option('header_social_media_picasa_1/picasa_switch_1');
		$picasa_url_1 = fw_get_db_settings_option('header_social_media_picasa_1/enabled/picasa_url_1');
		
		$deviantart_switch_1 = fw_get_db_settings_option('header_social_media_deviantart_1/deviantart_switch_1');
		$deviantart_url_1 = fw_get_db_settings_option('header_social_media_deviantart_1/enabled/deviantart_url_1');
		
		$whatsapp_switch_1 = fw_get_db_settings_option('header_social_media_whatsapp_1/whatsapp_switch_1');
		$whatsapp_url_1 = fw_get_db_settings_option('header_social_media_whatsapp_1/enabled/whatsapp_url_1');
		
		$snapchat_switch_1 = fw_get_db_settings_option('header_social_media_snapchat_1/snapchat_switch_1');
		$snapchat_url_1 = fw_get_db_settings_option('header_social_media_snapchat_1/enabled/snapchat_url_1');
		
		$blogger_switch_1 = fw_get_db_settings_option('header_social_media_blogger_1/blogger_switch_1');
		$blogger_url_1 = fw_get_db_settings_option('header_social_media_blogger_1/enabled/blogger_url_1');
		
		$wordpress_switch_1 = fw_get_db_settings_option('header_social_media_wordpress_1/wordpress_switch_1');
		$wordpress_url_1 = fw_get_db_settings_option('header_social_media_wordpress_1/enabled/wordpress_url_1');
		
		$amazon_switch_1 = fw_get_db_settings_option('header_social_media_amazon_1/amazon_switch_1');
		$amazon_url_1 = fw_get_db_settings_option('header_social_media_amazon_1/enabled/amazon_url_1');
		
		$appstore_switch_1 = fw_get_db_settings_option('header_social_media_appstore_1/appstore_switch_1');
		$appstore_url_1 = fw_get_db_settings_option('header_social_media_appstore_1/enabled/appstore_url_1');
		
		$paypal_switch_1 = fw_get_db_settings_option('header_social_media_paypal_1/paypal_switch_1');
		$paypal_url_1 = fw_get_db_settings_option('header_social_media_paypal_1/enabled/paypal_url_1');
		
		$myspace_switch_1 = fw_get_db_settings_option('header_social_media_myspace_1/myspace_switch_1');
		$myspace_url_1 = fw_get_db_settings_option('header_social_media_myspace_1/enabled/myspace_url_1');
		
		$dropbox_switch_1 = fw_get_db_settings_option('header_social_media_dropbox_1/dropbox_switch_1');
		$dropbox_url_1 = fw_get_db_settings_option('header_social_media_dropbox_1/enabled/dropbox_url_1');
		
		$windows8_switch_1 = fw_get_db_settings_option('header_social_media_windows8_1/windows8_switch_1');
		$windows8_url_1 = fw_get_db_settings_option('header_social_media_windows8_1/enabled/windows8_url_1');
		
		$pinterest_switch_1 = fw_get_db_settings_option('header_social_media_pinterest_1/pinterest_switch_1');
		$pinterest_url_1 = fw_get_db_settings_option('header_social_media_pinterest_1/enabled/pinterest_url_1');
		
		$soundcloud_switch_1 = fw_get_db_settings_option('header_social_media_soundcloud_1/soundcloud_switch_1');
		$soundcloud_url_1 = fw_get_db_settings_option('header_social_media_soundcloud_1/enabled/soundcloud_url_1');
		
		$google_drive_switch_1 = fw_get_db_settings_option('header_social_media_google_drive_1/google_drive_switch_1');
		$google_drive_url_1 = fw_get_db_settings_option('header_social_media_google_drive_1/enabled/google_drive_url_1');
		
		$android_switch_1 = fw_get_db_settings_option('header_social_media_android_1/android_switch_1');
		$android_url_1 = fw_get_db_settings_option('header_social_media_android_1/enabled/android_url_1');
		
		$behance_switch_1 = fw_get_db_settings_option('header_social_media_behance_1/behance_switch_1');
		$behance_url_1 = fw_get_db_settings_option('header_social_media_behance_1/enabled/behance_url_1');
		
		$instagram_switch_1 = fw_get_db_settings_option('header_social_media_instagram_1/instagram_switch_1');
		$instagram_url_1 = fw_get_db_settings_option('header_social_media_instagram_1/enabled/instagram_url_1');
		
		$ebay_switch_1 = fw_get_db_settings_option('header_social_media_ebay_1/ebay_switch_1');
		$ebay_url_1 = fw_get_db_settings_option('header_social_media_ebay_1/enabled/ebay_url_1');
		
		$google_plus_switch_1 = fw_get_db_settings_option('header_social_media_google_plus_1/google_plus_switch_1');
		$google_plus_url_1 = fw_get_db_settings_option('header_social_media_google_plus_1/enabled/google_plus_url_1');

		$github_switch_1 = fw_get_db_settings_option('header_social_media_github_1/github_switch_1');
		$github_url_1 = fw_get_db_settings_option('header_social_media_github_1/enabled/github_url_1');
		
		$stackoverflow_switch_1 = fw_get_db_settings_option('header_social_media_stackoverflow_1/stackoverflow_switch_1');
		$stackoverflow_url_1 = fw_get_db_settings_option('header_social_media_stackoverflow_1/enabled/stackoverflow_url_1');
		
		$spotify_switch_1 = fw_get_db_settings_option('header_social_media_spotify_1/spotify_switch_1');
		$spotify_url_1 = fw_get_db_settings_option('header_social_media_spotify_1/enabled/spotify_url_1');
		
		$stumbleupon_switch_1 = fw_get_db_settings_option('header_social_media_stumbleupon_1/stumbleupon_switch_1');
		$stumbleupon_url_1 = fw_get_db_settings_option('header_social_media_stumbleupon_1/enabled/stumbleupon_url_1');
		
		$visa_switch_1 = fw_get_db_settings_option('header_social_media_visa_1/visa_switch_1');
		$visa_url_1 = fw_get_db_settings_option('header_social_media_visa_1/enabled/visa_url_1');
		
		$mastercard_switch_1 = fw_get_db_settings_option('header_social_media_mastercard_1/mastercard_switch_1');
		$mastercard_url_1 = fw_get_db_settings_option('header_social_media_mastercard_1/enabled/mastercard_url_1');
		
		$amex_switch_1 = fw_get_db_settings_option('header_social_media_amex_1/amex_switch_1');
		$amex_url_1 = fw_get_db_settings_option('header_social_media_amex_1/enabled/amex_url_1');
		
		$ios_switch_1 = fw_get_db_settings_option('header_social_media_ios_1/ios_switch_1');
		$ios_url_1 = fw_get_db_settings_option('header_social_media_ios_1/enabled/ios_url_1');
		
		$osx_switch_1 = fw_get_db_settings_option('header_social_media_osx_1/osx_switch_1');
		$osx_url_1 = fw_get_db_settings_option('header_social_media_osx_1/enabled/osx_url_1');
		
		$evernote_switch_1 = fw_get_db_settings_option('header_social_media_evernote_1/evernote_switch_1');
		$evernote_url_1 = fw_get_db_settings_option('header_social_media_evernote_1/enabled/evernote_url_1');
		
		$yelp_switch_1 = fw_get_db_settings_option('header_social_media_yelp_1/yelp_switch_1');
		$yelp_url_1 = fw_get_db_settings_option('header_social_media_yelp_1/enabled/yelp_url_1');
		
		$yelp2_switch_1 = fw_get_db_settings_option('header_social_media_yelp2_1/yelp2_switch_1');
		$yelp2_url_1 = fw_get_db_settings_option('header_social_media_yelp2_1/enabled/yelp2_url_1');
		
		$medium_switch_1 = fw_get_db_settings_option('header_social_media_medium_1/medium_switch_1');
		$medium_url_1 = fw_get_db_settings_option('header_social_media_medium_1/enabled/medium_url_1');
		
		$slack_switch_1 = fw_get_db_settings_option('header_social_media_slack_1/slack_switch_1');
		$slack_url_1 = fw_get_db_settings_option('header_social_media_slack_1/enabled/slack_url_1');
		
		$vine_switch_1 = fw_get_db_settings_option('header_social_media_vine_1/vine_switch_1');
		$vine_url_1 = fw_get_db_settings_option('header_social_media_vine_1/enabled/vine_url_1');
		
		$edge_switch_1 = fw_get_db_settings_option('header_social_media_edge_1/edge_switch_1');
		$edge_url_1 = fw_get_db_settings_option('header_social_media_edge_1/enabled/edge_url_1');
		
		$outlook_switch_1 = fw_get_db_settings_option('header_social_media_outlook_1/outlook_switch_1');
		$outlook_url_1 = fw_get_db_settings_option('header_social_media_outlook_1/enabled/outlook_url_1');
		
		$pencilcase_switch_1 = fw_get_db_settings_option('header_social_media_pencilcase_1/pencilcase_switch_1');
		$pencilcase_url_1 = fw_get_db_settings_option('header_social_media_pencilcase_1/enabled/pencilcase_url_1');
		
		$play_switch_1 = fw_get_db_settings_option('header_social_media_play_1/play_switch_1');
		$play_url_1 = fw_get_db_settings_option('header_social_media_play_1/enabled/play_url_1');
		
		$icloud_switch_1 = fw_get_db_settings_option('header_social_media_icloud_1/icloud_switch_1');
		$icloud_url_1 = fw_get_db_settings_option('header_social_media_icloud_1/enabled/icloud_url_1');
		
		$social_media_btn_visibility = fw_get_db_settings_option('header_social_media_btn_visibility');
		
	}
	
	$social_media_btn_visibility_class = '';
	
	if(isset($social_media_btn_visibility['notebook'])!=''){
		$social_media_btn_visibility_class .= ' hidden-md';
	}
	
	if(isset($social_media_btn_visibility['tablet'])!=''){
		$social_media_btn_visibility_class .= ' hidden-sm';
	}
	
	if(isset($social_media_btn_visibility['mobile'])!=''){
		$social_media_btn_visibility_class .= ' hidden-xs';
	}
	
?>
<?php if($social_media_visibility=='enabled'){?>

<?php if(($social_media_visibility=='enabled')||($header_social_media_type=='enabled')||($forrst_switch=='enabled')||($forrst_url=='enabled')||($dribbble_switch=='enabled')||($dribbble_url=='enabled')||($twitter_switch=='enabled')||($twitter_url=='enabled')||($flickr_switch=='enabled')||($flickr_url=='enabled')||($twitter2_switch=='enabled')||($twitter2_url=='enabled')||($facebook_switch=='enabled')||($facebook_url=='enabled')||($skype_switch=='enabled')||($skype_url=='enabled')||($digg_switch=='enabled')||($digg_url=='enabled')||($google_switch=='enabled')||($google_url=='enabled')||($html5_switch=='enabled')||($html5_url=='enabled')||($linkedin_switch=='enabled')||($linkedin_url=='enabled')||($lastfm_switch=='enabled')||($lastfm_url=='enabled')||($vimeo_switch=='enabled')||($vimeo_url=='enabled')||($yahoo_switch=='enabled')||($yahoo_url=='enabled')||($tumblr_switch=='enabled')||($tumblr_url=='enabled')||($apple_switch=='enabled')||($apple_url=='enabled')||($windows_switch=='enabled')||($windows_url=='enabled')||($youtube_switch=='enabled')||($youtube_url=='enabled')||($delicious_switch=='enabled')||($delicious_url=='enabled')||($rss_switch=='enabled')||($rss_url=='enabled')||($picasa_switch=='enabled')||($picasa_url=='enabled')||($deviantart_switch=='enabled')||($deviantart_url=='enabled')||($whatsapp_switch=='enabled')||($whatsapp_url=='enabled')||($snapchat_switch=='enabled')||($snapchat_url=='enabled')||($blogger_switch=='enabled')||($blogger_url=='enabled')||($wordpress_switch=='enabled')||($wordpress_url=='enabled')||($amazon_switch=='enabled')||($amazon_url=='enabled')||($appstore_switch=='enabled')||($appstore_url=='enabled')||($paypal_switch=='enabled')||($paypal_url=='enabled')||($myspace_switch=='enabled')||($myspace_url=='enabled')||($dropbox_switch=='enabled')||($dropbox_url=='enabled')||($windows8_switch=='enabled')||($windows8_url=='enabled')||($pinterest_switch=='enabled')||($pinterest_url=='enabled')||($soundcloud_switch=='enabled')||($soundcloud_url=='enabled')||($google_drive_switch=='enabled')||($google_drive_url=='enabled')||($android_switch=='enabled')||($android_url=='enabled')||($behance_switch=='enabled')||($behance_url=='enabled')||($instagram_switch=='enabled')||($instagram_url=='enabled')||($ebay_switch=='enabled')||($ebay_url=='enabled')||($google_plus_switch=='enabled')||($google_plus_url=='enabled')||($github_switch=='enabled')||($github_url=='enabled')||($stackoverflow_switch=='enabled')||($stackoverflow_url=='enabled')||($spotify_switch=='enabled')||($spotify_url=='enabled')||($stumbleupon_switch=='enabled')||($stumbleupon_url=='enabled')||($visa_switch=='enabled')||($visa_url=='enabled')||($mastercard_switch=='enabled')||($mastercard_url=='enabled')||($amex_switch=='enabled')||($amex_url=='enabled')||($ios_switch=='enabled')||($ios_url=='enabled')||($osx_switch=='enabled')||($osx_url=='enabled')||($evernote_switch=='enabled')||($evernote_url=='enabled')||($yelp_switch=='enabled')||($yelp_url=='enabled')||($yelp2_switch=='enabled')||($yelp2_url=='enabled')||($medium_switch=='enabled')||($medium_url=='enabled')||($slack_switch=='enabled')||($slack_url=='enabled')||($vine_switch=='enabled')||($vine_url=='enabled')||($edge_switch=='enabled')||($edge_url=='enabled')||($outlook_switch=='enabled')||($outlook_url=='enabled')||($pencilcase_switch=='enabled')||($pencilcase_url=='enabled')||($play_switch=='enabled')||($play_url=='enabled')||($icloud_switch=='enabled')||($icloud_url=='enabled')||($forrst_switch_1=='enabled')||($forrst_url_1=='enabled')||($dribbble_switch_1=='enabled')||($dribbble_url_1=='enabled')|| ($twitter_switch_1=='enabled')||($twitter_url_1=='enabled')||($flickr_switch_1=='enabled')||($flickr_url_1=='enabled')||($twitter2_switch_1=='enabled')||($twitter2_url_1=='enabled')||($facebook_switch_1=='enabled')||($facebook_url_1=='enabled')||($skype_switch_1=='enabled')||($skype_url_1=='enabled')||($digg_switch_1=='enabled')||($digg_url_1=='enabled')||($google_switch_1=='enabled')||($google_url_1=='enabled')||($html5_switch_1=='enabled')||($html5_url_1=='enabled')||($linkedin_switch_1=='enabled')||($linkedin_url_1=='enabled')||($lastfm_switch_1=='enabled')||($lastfm_url_1=='enabled')||($vimeo_switch_1=='enabled')||($vimeo_url_1=='enabled')||($yahoo_switch_1=='enabled')||($yahoo_url_1=='enabled')||($tumblr_switch_1=='enabled')||($tumblr_url_1=='enabled')||($apple_switch_1=='enabled')||($apple_url_1=='enabled')||($windows_switch_1=='enabled')||($windows_url_1=='enabled')||($youtube_switch_1=='enabled')||($youtube_url_1=='enabled')||($delicious_switch_1=='enabled')||($delicious_url_1=='enabled')||($rss_switch_1=='enabled')||($rss_url_1=='enabled')||($picasa_switch_1=='enabled')||($picasa_url_1=='enabled')||($deviantart_switch_1=='enabled')||($deviantart_url_1=='enabled')||($whatsapp_switch_1=='enabled')||($whatsapp_url_1=='enabled')||($snapchat_switch_1=='enabled')||($snapchat_url_1=='enabled')||($blogger_switch_1=='enabled')||($blogger_url_1=='enabled')||($wordpress_switch_1=='enabled')||($wordpress_url_1=='enabled')||($amazon_switch_1=='enabled')||($amazon_url_1=='enabled')||($appstore_switch_1=='enabled')||($appstore_url_1=='enabled')||($paypal_switch_1=='enabled')||($paypal_url_1=='enabled')||($myspace_switch_1=='enabled')||($myspace_url_1=='enabled')||($dropbox_switch_1=='enabled')||($dropbox_url_1=='enabled')||($windows8_switch_1=='enabled')||($windows8_url_1=='enabled')||($pinterest_switch_1=='enabled')||($pinterest_url_1=='enabled')||($soundcloud_switch_1=='enabled')||($soundcloud_url_1=='enabled')||($google_drive_switch_1=='enabled')||($google_drive_url_1=='enabled')||($android_switch_1=='enabled')||($android_url_1=='enabled')||($behance_switch_1=='enabled')||($behance_url_1=='enabled')||($instagram_switch_1=='enabled')||($instagram_url_1=='enabled')||($ebay_switch_1=='enabled')||($ebay_url_1=='enabled')||($google_plus_switch_1=='enabled')||($google_plus_url_1=='enabled')||($github_switch_1=='enabled')||($github_url_1=='enabled')||($stackoverflow_switch_1=='enabled')||($stackoverflow_url_1=='enabled')||($spotify_switch_1=='enabled')||($spotify_url_1=='enabled')||($stumbleupon_switch_1=='enabled')||($stumbleupon_url_1=='enabled')||($visa_switch_1=='enabled')||($visa_url_1=='enabled')||($mastercard_switch_1=='enabled')||($mastercard_url_1=='enabled')||($amex_switch_1=='enabled')||($amex_url_1=='enabled')||($ios_switch_1=='enabled')||($ios_url_1=='enabled')||($osx_switch_1=='enabled')||($osx_url_1=='enabled')||($evernote_switch_1=='enabled')||($evernote_url_1=='enabled')||($yelp_switch_1=='enabled')||($yelp_url_1=='enabled')||($yelp2_switch_1=='enabled')||($yelp2_url_1=='enabled')||($medium_switch_1=='enabled')||($medium_url_1=='enabled')||($slack_switch_1=='enabled')||($slack_url_1=='enabled')||($vine_switch_1=='enabled')||($vine_url_1=='enabled')||($edge_switch_1=='enabled')||($edge_url_1=='enabled')||($outlook_switch_1=='enabled')||($outlook_url_1=='enabled')||($pencilcase_switch_1=='enabled')||($pencilcase_url_1=='enabled')||($play_switch_1=='enabled')||($play_url_1=='enabled')||($icloud_switch_1=='enabled')||($icloud_url_1=='enabled')||($social_media_btn_visibility=='enabled')
){?>

		<div class="social-container<?php echo esc_attr($social_media_btn_visibility_class);?>">
			<div class="social-icons-container<?php if($header_social_media_type!=''){?> social-icons-container-<?php echo esc_attr($header_social_media_type);?><?php }?>">
				<ul>
					<?php if($forrst_switch=='enabled'){?><li><a href="<?php if($forrst_url){ echo esc_url($forrst_url); }?>"><i class="social-icon social-icon-01-forrst"></i><span class="tooltip-text tooltip-container"><span>Forrest</span></span><span class="bg-overlay"></span></a></li><?php }?>
					<?php if($dribbble_switch=='enabled'){?><li><a href="<?php if($dribbble_url){ echo esc_url($dribbble_url); }?>"><i class="social-icon social-icon-02-dribbble"></i><span class="tooltip-text tooltip-container"><span>Dribbble</span></span><span class="bg-overlay"></span></a></li><?php }?>
					<?php if($twitter_switch=='enabled'){?><li><a href="<?php if($twitter_url){ echo esc_url($twitter_url); }?>"><i class="social-icon social-icon-03-twitter"></i><span class="tooltip-text tooltip-container"><span>Twitter</span></span><span class="bg-overlay"></span></a></li><?php }?>
					<?php if($flickr_switch=='enabled'){?><li><a href="<?php if($flickr_url){ echo esc_url($flickr_url); }?>"><i class="social-icon social-icon-04-flickr"></i><span class="tooltip-text tooltip-container"><span>Flickr</span></span><span class="bg-overlay"></span></a></li><?php }?>
					<?php if($twitter2_switch=='enabled'){?><li><a href="<?php if($twitter2_url){ echo esc_url($twitter2_url); }?>"><i class="social-icon social-icon-05-twitter"></i><span class="tooltip-text tooltip-container"><span>Twitter</span></span><span class="bg-overlay"></span></a></li><?php }?>
					<?php if($facebook_switch=='enabled'){?><li><a href="<?php if($facebook_url){ echo esc_url($facebook_url); }?>"><i class="social-icon social-icon-06-facebook"></i><span class="tooltip-text tooltip-container"><span>Facebook</span></span><span class="bg-overlay"></span></a></li><?php }?>
					<?php if($skype_switch=='enabled'){?><li><a href="<?php if($skype_url){ echo esc_url($skype_url); }?>"><i class="social-icon social-icon-07-skype"></i><span class="tooltip-text tooltip-container"><span>Skype</span></span><span class="bg-overlay"></span></a></li><?php }?>
					<?php if($digg_switch=='enabled'){?><li><a href="<?php if($digg_url){ echo esc_url($digg_url); }?>"><i class="social-icon social-icon-08-digg"></i><span class="tooltip-text tooltip-container"><span>Digg</span></span><span class="bg-overlay"></span></a></li><?php }?>
					<?php if($google_switch=='enabled'){?><li><a href="<?php if($google_url){ echo esc_url($google_url); }?>"><i class="social-icon social-icon-09-google"></i><span class="tooltip-text tooltip-container"><span>Google</span></span><span class="bg-overlay"></span></a></li><?php }?>
					<?php if($html5_switch=='enabled'){?><li><a href="<?php if($html5_url){ echo esc_url($html5_url); }?>"><i class="social-icon social-icon-10-html5"></i><span class="tooltip-text tooltip-container"><span>Html5</span></span><span class="bg-overlay"></span></a></li><?php }?>
					<?php if($linkedin_switch=='enabled'){?><li><a href="<?php if($linkedin_url){ echo esc_url($linkedin_url); }?>"><i class="social-icon social-icon-11-linkedin"></i><span class="tooltip-text tooltip-container"><span>Linkedin</span></span><span class="bg-overlay"></span></a></li><?php }?>
					<?php if($lastfm_switch=='enabled'){?><li><a href="<?php if($lastfm_url){ echo esc_url($lastfm_url); }?>"><i class="social-icon social-icon-12-lastfm"></i><span class="tooltip-text tooltip-container"><span>Lastfm</span></span><span class="bg-overlay"></span></a></li><?php }?>
					<?php if($vimeo_switch=='enabled'){?><li><a href="<?php if($vimeo_url){ echo esc_url($vimeo_url); }?>"><i class="social-icon social-icon-13-vimeo"></i><span class="tooltip-text tooltip-container"><span>Vimeo</span></span><span class="bg-overlay"></span></a></li><?php }?>
					<?php if($yahoo_switch=='enabled'){?><li><a href="<?php if($yahoo_url){ echo esc_url($yahoo_url); }?>"><i class="social-icon social-icon-14-yahoo"></i><span class="tooltip-text tooltip-container"><span>Yahoo</span></span><span class="bg-overlay"></span></a></li><?php }?>
					<?php if($tumblr_switch=='enabled'){?><li><a href="<?php if($tumblr_url){ echo esc_url($tumblr_url); }?>"><i class="social-icon social-icon-15-tumblr"></i><span class="tooltip-text tooltip-container"><span>Tumblr</span></span><span class="bg-overlay"></span></a></li><?php }?>
					<?php if($apple_switch=='enabled'){?><li><a href="<?php if($apple_url){ echo esc_url($apple_url); }?>"><i class="social-icon social-icon-16-apple"></i><span class="tooltip-text tooltip-container"><span>Apple</span></span><span class="bg-overlay"></span></a></li><?php }?>
					<?php if($windows_switch=='enabled'){?><li><a href="<?php if($windows_url){ echo esc_url($windows_url); }?>"><i class="social-icon social-icon-17-windows"></i><span class="tooltip-text tooltip-container"><span>Windows</span></span><span class="bg-overlay"></span></a></li><?php }?>
					<?php if($youtube_switch=='enabled'){?><li><a href="<?php if($youtube_url){ echo esc_url($youtube_url); }?>"><i class="social-icon social-icon-18-youtube"></i><span class="tooltip-text tooltip-container"><span>Youtube</span></span><span class="bg-overlay"></span></a></li><?php }?>
					<?php if($delicious_switch=='enabled'){?><li><a href="<?php if($delicious_url){ echo esc_url($delicious_url); }?>"><i class="social-icon social-icon-19-delicious"></i><span class="tooltip-text tooltip-container"><span>Delicious</span></span><span class="bg-overlay"></span></a></li><?php }?>
					<?php if($rss_switch=='enabled'){?><li><a href="<?php if($rss_url){ echo esc_url($rss_url); }?>"><i class="social-icon social-icon-20-rss"></i><span class="tooltip-text tooltip-container"><span>Rss</span></span><span class="bg-overlay"></span></a></li><?php }?>
					<?php if($picasa_switch=='enabled'){?><li><a href="<?php if($picasa_url){ echo esc_url($picasa_url); }?>"><i class="social-icon social-icon-21-picasa"></i><span class="tooltip-text tooltip-container"><span>Picasa</span></span><span class="bg-overlay"></span></a></li><?php }?>
					<?php if($deviantart_switch=='enabled'){?><li><a href="<?php if($deviantart_url){ echo esc_url($deviantart_url); }?>"><i class="social-icon social-icon-22-deviantart"></i><span class="tooltip-text tooltip-container"><span>Deviantart</span></span><span class="bg-overlay"></span></a></li><?php }?>
					<?php if($whatsapp_switch=='enabled'){?><li><a href="<?php if($whatsapp_url){ echo esc_url($whatsapp_url); }?>"><i class="social-icon social-icon-23-whatsapp"></i><span class="tooltip-text tooltip-container"><span>Whatsapp</span></span><span class="bg-overlay"></span></a></li><?php }?>
					<?php if($snapchat_switch=='enabled'){?><li><a href="<?php if($snapchat_url){ echo esc_url($snapchat_url); }?>"><i class="social-icon social-icon-24-snapchat"></i><span class="tooltip-text tooltip-container"><span>Snapchat</span></span><span class="bg-overlay"></span></a></li><?php }?>
					<?php if($blogger_switch=='enabled'){?><li><a href="<?php if($blogger_url){ echo esc_url($blogger_url); }?>"><i class="social-icon social-icon-25-blogger"></i><span class="tooltip-text tooltip-container"><span>Blogger</span></span><span class="bg-overlay"></span></a></li><?php }?>
					<?php if($wordpress_switch=='enabled'){?><li><a href="<?php if($wordpress_url){ echo esc_url($wordpress_url); }?>"><i class="social-icon social-icon-26-wordpress"></i><span class="tooltip-text tooltip-container"><span>Wordpress</span></span><span class="bg-overlay"></span></a></li><?php }?>
					<?php if($amazon_switch=='enabled'){?><li><a href="<?php if($amazon_url){ echo esc_url($amazon_url); }?>"><i class="social-icon social-icon-27-amazon"></i><span class="tooltip-text tooltip-container"><span>Amazon</span></span><span class="bg-overlay"></span></a></li><?php }?>
					<?php if($appstore_switch=='enabled'){?><li><a href="<?php if($appstore_url){ echo esc_url($appstore_url); }?>"><i class="social-icon social-icon-28-appstore"></i><span class="tooltip-text tooltip-container"><span>Appstore</span></span><span class="bg-overlay"></span></a></li><?php }?>
					<?php if($paypal_switch=='enabled'){?><li><a href="<?php if($paypal_url){ echo esc_url($paypal_url); }?>"><i class="social-icon social-icon-29-paypal"></i><span class="tooltip-text tooltip-container"><span>Paypal</span></span><span class="bg-overlay"></span></a></li><?php }?>
					<?php if($myspace_switch=='enabled'){?><li><a href="<?php if($myspace_url){ echo esc_url($myspace_url); }?>"><i class="social-icon social-icon-30-myspace"></i><span class="tooltip-text tooltip-container"><span>Myspace</span></span><span class="bg-overlay"></span></a></li><?php }?>
					<?php if($dropbox_switch=='enabled'){?><li><a href="<?php if($dropbox_url){ echo esc_url($dropbox_url); }?>"><i class="social-icon social-icon-31-dropbox"></i><span class="tooltip-text tooltip-container"><span>Dropbox</span></span><span class="bg-overlay"></span></a></li><?php }?>
					<?php if($windows8_switch=='enabled'){?><li><a href="<?php if($windows8_url){ echo esc_url($windows8_url); }?>"><i class="social-icon social-icon-32-windows8"></i><span class="tooltip-text tooltip-container"><span>Windows 8</span></span><span class="bg-overlay"></span></a></li><?php }?>
					<?php if($pinterest_switch=='enabled'){?><li><a href="<?php if($pinterest_url){ echo esc_url($pinterest_url); }?>"><i class="social-icon social-icon-33-pinterest"></i><span class="tooltip-text tooltip-container"><span>Pinterest</span></span><span class="bg-overlay"></span></a></li><?php }?>
					<?php if($soundcloud_switch=='enabled'){?><li><a href="<?php if($soundcloud_url){ echo esc_url($soundcloud_url); }?>"><i class="social-icon social-icon-34-soundcloud"></i><span class="tooltip-text tooltip-container"><span>Soundcloud</span></span><span class="bg-overlay"></span></a></li><?php }?>
					<?php if($google_drive_switch=='enabled'){?><li><a href="<?php if($google_drive_url){ echo esc_url($google_drive_url); }?>"><i class="social-icon social-icon-35-google-drive"></i><span class="tooltip-text tooltip-container"><span>Google Drive</span></span><span class="bg-overlay"></span></a></li><?php }?>
					<?php if($android_switch=='enabled'){?><li><a href="<?php if($android_url){ echo esc_url($android_url); }?>"><i class="social-icon social-icon-36-android"></i><span class="tooltip-text tooltip-container"><span>Android</span></span><span class="bg-overlay"></span></a></li><?php }?>
					<?php if($behance_switch=='enabled'){?><li><a href="<?php if($behance_url){ echo esc_url($behance_url); }?>"><i class="social-icon social-icon-37-behance"></i><span class="tooltip-text tooltip-container"><span>Behance</span></span><span class="bg-overlay"></span></a></li><?php }?>
					<?php if($instagram_switch=='enabled'){?><li><a href="<?php if($instagram_url){ echo esc_url($instagram_url); }?>"><i class="social-icon social-icon-38-instagram"></i><span class="tooltip-text tooltip-container"><span>Instagram</span></span><span class="bg-overlay"></span></a></li><?php }?>
					<?php if($ebay_switch=='enabled'){?><li><a href="<?php if($ebay_url){ echo esc_url($ebay_url); }?>"><i class="social-icon social-icon-39-ebay"></i><span class="tooltip-text tooltip-container"><span>Ebay</span></span><span class="bg-overlay"></span></a></li><?php }?>
					<?php if($google_plus_switch=='enabled'){?><li><a href="<?php if($google_plus_url){ echo esc_url($google_plus_url); }?>"><i class="social-icon social-icon-40-google-plus"></i><span class="tooltip-text tooltip-container"><span>Google Plus</span></span><span class="bg-overlay"></span></a></li><?php }?>
					<?php if($github_switch=='enabled'){?><li><a href="<?php if($github_url){ echo esc_url($github_url); }?>"><i class="social-icon social-icon-41-github"></i><span class="tooltip-text tooltip-container"><span>Github</span></span><span class="bg-overlay"></span></a></li><?php }?>
					<?php if($stackoverflow_switch=='enabled'){?><li><a href="<?php if($stackoverflow_url){ echo esc_url($stackoverflow_url); }?>"><i class="social-icon social-icon-42-stackoverflow"></i><span class="tooltip-text tooltip-container"><span>Spotify</span></span><span class="bg-overlay"></span></a></li><?php }?>
					<?php if($spotify_switch=='enabled'){?><li><a href="<?php if($spotify_url){ echo esc_url($spotify_url); }?>"><i class="social-icon social-icon-43-spotify"></i><span class="tooltip-text tooltip-container"><span>Stumbleupon</span></span><span class="bg-overlay"></span></a></li><?php }?>
					<?php if($stumbleupon_switch=='enabled'){?><li><a href="<?php if($stumbleupon_url){ echo esc_url($stumbleupon_url); }?>"><i class="social-icon social-icon-44-stumbleupon"></i><span class="tooltip-text tooltip-container"><span>Visa</span></span><span class="bg-overlay"></span></a></li><?php }?>
					<?php if($visa_switch=='enabled'){?><li><a href="<?php if($visa_url){ echo esc_url($visa_url); }?>"><i class="social-icon social-icon-45-visa"></i><span class="tooltip-text tooltip-container"><span>Mastercard</span></span><span class="bg-overlay"></span></a></li><?php }?>
					<?php if($mastercard_switch=='enabled'){?><li><a href="<?php if($mastercard_url){ echo esc_url($mastercard_url); }?>"><i class="social-icon social-icon-46-mastercard"></i><span class="tooltip-text tooltip-container"><span>Amex</span></span><span class="bg-overlay"></span></a></li><?php }?>
					<?php if($amex_switch=='enabled'){?><li><a href="<?php if($amex_url){ echo esc_url($amex_url); }?>"><i class="social-icon social-icon-47-amex"></i><span class="tooltip-text tooltip-container"><span>Ios</span></span><span class="bg-overlay"></span></a></li><?php }?>
					<?php if($ios_switch=='enabled'){?><li><a href="<?php if($ios_url){ echo esc_url($ios_url); }?>"><i class="social-icon social-icon-48-ios"></i><span class="tooltip-text tooltip-container"><span>Osx</span></span><span class="bg-overlay"></span></a></li><?php }?>
					<?php if($osx_switch=='enabled'){?><li><a href="<?php if($osx_url){ echo esc_url($osx_url); }?>"><i class="social-icon social-icon-49-osx"></i><span class="tooltip-text tooltip-container"><span>Evernote</span></span><span class="bg-overlay"></span></a></li><?php }?>
					<?php if($evernote_switch=='enabled'){?><li><a href="<?php if($evernote_url){ echo esc_url($evernote_url); }?>"><i class="social-icon social-icon-50-evernote"></i><span class="tooltip-text tooltip-container"><span>Yelp</span></span><span class="bg-overlay"></span></a></li><?php }?>
					<?php if($yelp_switch=='enabled'){?><li><a href="<?php if($yelp_url){ echo esc_url($yelp_url); }?>"><i class="social-icon social-icon-51-yelp"></i><span class="tooltip-text tooltip-container"><span>Yelp</span></span><span class="bg-overlay"></span></a></li><?php }?>
					<?php if($yelp2_switch=='enabled'){?><li><a href="<?php if($yelp2_url){ echo esc_url($yelp2_url); }?>"><i class="social-icon social-icon-52-yelp"></i><span class="tooltip-text tooltip-container"><span>Yelp</span></span><span class="bg-overlay"></span></a></li><?php }?>
					<?php if($medium_switch=='enabled'){?><li><a href="<?php if($medium_url){ echo esc_url($medium_url); }?>"><i class="social-icon social-icon-53-medium"></i><span class="tooltip-text tooltip-container"><span>Medium</span></span><span class="bg-overlay"></span></a></li><?php }?>
					<?php if($slack_switch=='enabled'){?><li><a href="<?php if($slack_url){ echo esc_url($slack_url); }?>"><i class="social-icon social-icon-54-slack"></i><span class="tooltip-text tooltip-container"><span>Slack</span></span><span class="bg-overlay"></span></a></li><?php }?>
					<?php if($vine_switch=='enabled'){?><li><a href="<?php if($vine_url){ echo esc_url($vine_url); }?>"><i class="social-icon social-icon-55-vine"></i><span class="tooltip-text tooltip-container"><span>Vine</span></span><span class="bg-overlay"></span></a></li><?php }?>
					<?php if($edge_switch=='enabled'){?><li><a href="<?php if($edge_url){ echo esc_url($edge_url); }?>"><i class="social-icon social-icon-56-edge"></i><span class="tooltip-text tooltip-container"><span>Edge</span></span><span class="bg-overlay"></span></a></li><?php }?>
					<?php if($outlook_switch=='enabled'){?><li><a href="<?php if($outlook_url){ echo esc_url($outlook_url); }?>"><i class="social-icon social-icon-57-outlook"></i><span class="tooltip-text tooltip-container"><span>Outlook</span></span><span class="bg-overlay"></span></a></li><?php }?>
					<?php if($pencilcase_switch=='enabled'){?><li><a href="<?php if($pencilcase_url){ echo esc_url($pencilcase_url); }?>"><i class="social-icon social-icon-58-pencilcase"></i><span class="tooltip-text tooltip-container"><span>Pencilcase</span></span><span class="bg-overlay"></span></a></li><?php }?>
					<?php if($play_switch=='enabled'){?><li><a href="<?php if($play_url){ echo esc_url($play_url); }?>"><i class="social-icon social-icon-59-play"></i><span class="tooltip-text tooltip-container"><span>Play</span></span><span class="bg-overlay"></span></a></li><?php }?>
					<?php if($icloud_switch=='enabled'){?><li><a href="<?php if($icloud_url){ echo esc_url($icloud_url); }?>"><i class="social-icon social-icon-60-icloud"></i><span class="tooltip-text tooltip-container"><span>iCloud</span></span><span class="bg-overlay"></span></a></li><?php }?>

					<?php if($forrst_switch_1=='enabled'){?><li><a href="<?php if($forrst_url_1){ echo esc_url($forrst_url_1); }?>"><i class="social-icon social-icon-01-forrst-1"></i><span class="tooltip-text tooltip-container"><span>Forrest</span></span><span class="bg-overlay"></span></a></li><?php }?>
					<?php if($dribbble_switch_1=='enabled'){?><li><a href="<?php if($dribbble_url_1){ echo esc_url($dribbble_url_1); }?>"><i class="social-icon social-icon-02-dribbble-1"></i><span class="tooltip-text tooltip-container"><span>Dribbble</span></span><span class="bg-overlay"></span></a></li><?php }?>
					<?php if($twitter_switch_1=='enabled'){?><li><a href="<?php if($twitter_url_1){ echo esc_url($twitter_url_1); }?>"><i class="social-icon social-icon-03-twitter-1"></i><span class="tooltip-text tooltip-container"><span>Twitter</span></span><span class="bg-overlay"></span></a></li><?php }?>
					<?php if($flickr_switch_1=='enabled'){?><li><a href="<?php if($flickr_url_1){ echo esc_url($flickr_url_1); }?>"><i class="social-icon social-icon-04-flickr-1"></i><span class="tooltip-text tooltip-container"><span>Flickr</span></span><span class="bg-overlay"></span></a></li><?php }?>
					<?php if($twitter2_switch_1=='enabled'){?><li><a href="<?php if($twitter2_url_1){ echo esc_url($twitter2_url_1); }?>"><i class="social-icon social-icon-05-twitter-1"></i><span class="tooltip-text tooltip-container"><span>Twitter</span></span><span class="bg-overlay"></span></a></li><?php }?>
					<?php if($facebook_switch_1=='enabled'){?><li><a href="<?php if($facebook_url_1){ echo esc_url($facebook_url_1); }?>"><i class="social-icon social-icon-06-facebook-1"></i><span class="tooltip-text tooltip-container"><span>Facebook</span></span><span class="bg-overlay"></span></a></li><?php }?>
					<?php if($skype_switch_1=='enabled'){?><li><a href="<?php if($skype_url_1){ echo esc_url($skype_url_1); }?>"><i class="social-icon social-icon-07-skype-1"></i><span class="tooltip-text tooltip-container"><span>Skype</span></span><span class="bg-overlay"></span></a></li><?php }?>
					<?php if($digg_switch_1=='enabled'){?><li><a href="<?php if($digg_url_1){ echo esc_url($digg_url_1); }?>"><i class="social-icon social-icon-08-digg-1"></i><span class="tooltip-text tooltip-container"><span>Digg</span></span><span class="bg-overlay"></span></a></li><?php }?>
					<?php if($google_switch_1=='enabled'){?><li><a href="<?php if($google_url_1){ echo esc_url($google_url_1); }?>"><i class="social-icon social-icon-09-google-1"></i><span class="tooltip-text tooltip-container"><span>Google</span></span><span class="bg-overlay"></span></a></li><?php }?>
					<?php if($html5_switch_1=='enabled'){?><li><a href="<?php if($html5_url_1){ echo esc_url($html5_url_1); }?>"><i class="social-icon social-icon-10-html5-1"></i><span class="tooltip-text tooltip-container"><span>Html5</span></span><span class="bg-overlay"></span></a></li><?php }?>
					<?php if($linkedin_switch_1=='enabled'){?><li><a href="<?php if($linkedin_url_1){ echo esc_url($linkedin_url_1); }?>"><i class="social-icon social-icon-11-linkedin-1"></i><span class="tooltip-text tooltip-container"><span>Linkedin</span></span><span class="bg-overlay"></span></a></li><?php }?>
					<?php if($lastfm_switch_1=='enabled'){?><li><a href="<?php if($lastfm_url_1){ echo esc_url($lastfm_url_1); }?>"><i class="social-icon social-icon-12-lastfm-1"></i><span class="tooltip-text tooltip-container"><span>Lastfm</span></span><span class="bg-overlay"></span></a></li><?php }?>
					<?php if($vimeo_switch_1=='enabled'){?><li><a href="<?php if($vimeo_url_1){ echo esc_url($vimeo_url_1); }?>"><i class="social-icon social-icon-13-vimeo-1"></i><span class="tooltip-text tooltip-container"><span>Vimeo</span></span><span class="bg-overlay"></span></a></li><?php }?>
					<?php if($yahoo_switch_1=='enabled'){?><li><a href="<?php if($yahoo_url_1){ echo esc_url($yahoo_url_1); }?>"><i class="social-icon social-icon-14-yahoo-1"></i><span class="tooltip-text tooltip-container"><span>Yahoo</span></span><span class="bg-overlay"></span></a></li><?php }?>
					<?php if($tumblr_switch_1=='enabled'){?><li><a href="<?php if($tumblr_url_1){ echo esc_url($tumblr_url_1); }?>"><i class="social-icon social-icon-15-tumblr-1"></i><span class="tooltip-text tooltip-container"><span>Tumblr</span></span><span class="bg-overlay"></span></a></li><?php }?>
					<?php if($apple_switch_1=='enabled'){?><li><a href="<?php if($apple_url_1){ echo esc_url($apple_url_1); }?>"><i class="social-icon social-icon-16-apple-1"></i><span class="tooltip-text tooltip-container"><span>Apple</span></span><span class="bg-overlay"></span></a></li><?php }?>
					<?php if($windows_switch_1=='enabled'){?><li><a href="<?php if($windows_url_1){ echo esc_url($windows_url_1); }?>"><i class="social-icon social-icon-17-windows-1"></i><span class="tooltip-text tooltip-container"><span>Windows</span></span><span class="bg-overlay"></span></a></li><?php }?>
					<?php if($youtube_switch_1=='enabled'){?><li><a href="<?php if($youtube_url_1){ echo esc_url($youtube_url_1); }?>"><i class="social-icon social-icon-18-youtube-1"></i><span class="tooltip-text tooltip-container"><span>Youtube</span></span><span class="bg-overlay"></span></a></li><?php }?>
					<?php if($delicious_switch_1=='enabled'){?><li><a href="<?php if($delicious_url_1){ echo esc_url($delicious_url_1); }?>"><i class="social-icon social-icon-19-delicious-1"></i><span class="tooltip-text tooltip-container"><span>Delicious</span></span><span class="bg-overlay"></span></a></li><?php }?>
					<?php if($rss_switch_1=='enabled'){?><li><a href="<?php if($rss_url_1){ echo esc_url($rss_url_1); }?>"><i class="social-icon social-icon-20-rss-1"></i><span class="tooltip-text tooltip-container"><span>Rss</span></span><span class="bg-overlay"></span></a></li><?php }?>
					<?php if($picasa_switch_1=='enabled'){?><li><a href="<?php if($picasa_url_1){ echo esc_url($picasa_url_1); }?>"><i class="social-icon social-icon-21-picasa-1"></i><span class="tooltip-text tooltip-container"><span>Picasa</span></span><span class="bg-overlay"></span></a></li><?php }?>
					<?php if($deviantart_switch_1=='enabled'){?><li><a href="<?php if($deviantart_url_1){ echo esc_url($deviantart_url_1); }?>"><i class="social-icon social-icon-22-deviantart-1"></i><span class="tooltip-text tooltip-container"><span>Deviantart</span></span><span class="bg-overlay"></span></a></li><?php }?>
					<?php if($whatsapp_switch_1=='enabled'){?><li><a href="<?php if($whatsapp_url_1){ echo esc_url($whatsapp_url_1); }?>"><i class="social-icon social-icon-23-whatsapp-1"></i><span class="tooltip-text tooltip-container"><span>Whatsapp</span></span><span class="bg-overlay"></span></a></li><?php }?>
					<?php if($snapchat_switch_1=='enabled'){?><li><a href="<?php if($snapchat_url_1){ echo esc_url($snapchat_url_1); }?>"><i class="social-icon social-icon-24-snapchat-1"></i><span class="tooltip-text tooltip-container"><span>Snapchat</span></span><span class="bg-overlay"></span></a></li><?php }?>
					<?php if($blogger_switch_1=='enabled'){?><li><a href="<?php if($blogger_url_1){ echo esc_url($blogger_url_1); }?>"><i class="social-icon social-icon-25-blogger-1"></i><span class="tooltip-text tooltip-container"><span>Blogger</span></span><span class="bg-overlay"></span></a></li><?php }?>
					<?php if($wordpress_switch_1=='enabled'){?><li><a href="<?php if($wordpress_url_1){ echo esc_url($wordpress_url_1); }?>"><i class="social-icon social-icon-26-wordpress-1"></i><span class="tooltip-text tooltip-container"><span>Wordpress</span></span><span class="bg-overlay"></span></a></li><?php }?>
					<?php if($amazon_switch_1=='enabled'){?><li><a href="<?php if($amazon_url_1){ echo esc_url($amazon_url_1); }?>"><i class="social-icon social-icon-27-amazon-1"></i><span class="tooltip-text tooltip-container"><span>Amazon</span></span><span class="bg-overlay"></span></a></li><?php }?>
					<?php if($appstore_switch_1=='enabled'){?><li><a href="<?php if($appstore_url_1){ echo esc_url($appstore_url_1); }?>"><i class="social-icon social-icon-28-appstore-1"></i><span class="tooltip-text tooltip-container"><span>Appstore</span></span><span class="bg-overlay"></span></a></li><?php }?>
					<?php if($paypal_switch_1=='enabled'){?><li><a href="<?php if($paypal_url_1){ echo esc_url($paypal_url_1); }?>"><i class="social-icon social-icon-29-paypal-1"></i><span class="tooltip-text tooltip-container"><span>Paypal</span></span><span class="bg-overlay"></span></a></li><?php }?>
					<?php if($myspace_switch_1=='enabled'){?><li><a href="<?php if($myspace_url_1){ echo esc_url($myspace_url_1); }?>"><i class="social-icon social-icon-30-myspace-1"></i><span class="tooltip-text tooltip-container"><span>Myspace</span></span><span class="bg-overlay"></span></a></li><?php }?>
					<?php if($dropbox_switch_1=='enabled'){?><li><a href="<?php if($dropbox_url_1){ echo esc_url($dropbox_url_1); }?>"><i class="social-icon social-icon-31-dropbox-1"></i><span class="tooltip-text tooltip-container"><span>Dropbox</span></span><span class="bg-overlay"></span></a></li><?php }?>
					<?php if($windows8_switch_1=='enabled'){?><li><a href="<?php if($windows8_url_1){ echo esc_url($windows8_url_1); }?>"><i class="social-icon social-icon-32-windows8-1"></i><span class="tooltip-text tooltip-container"><span>Windows 8</span></span><span class="bg-overlay"></span></a></li><?php }?>
					<?php if($pinterest_switch_1=='enabled'){?><li><a href="<?php if($pinterest_url_1){ echo esc_url($pinterest_url_1); }?>"><i class="social-icon social-icon-33-pinterest-1"></i><span class="tooltip-text tooltip-container"><span>Pinterest</span></span><span class="bg-overlay"></span></a></li><?php }?>
					<?php if($soundcloud_switch_1=='enabled'){?><li><a href="<?php if($soundcloud_url_1){ echo esc_url($soundcloud_url_1); }?>"><i class="social-icon social-icon-34-soundcloud-1"></i><span class="tooltip-text tooltip-container"><span>Soundcloud</span></span><span class="bg-overlay"></span></a></li><?php }?>
					<?php if($google_drive_switch_1=='enabled'){?><li><a href="<?php if($google_drive_url_1){ echo esc_url($google_drive_url_1); }?>"><i class="social-icon social-icon-35-google-drive-1"></i><span class="tooltip-text tooltip-container"><span>Google Drive</span></span><span class="bg-overlay"></span></a></li><?php }?>
					<?php if($android_switch_1=='enabled'){?><li><a href="<?php if($android_url_1){ echo esc_url($android_url_1); }?>"><i class="social-icon social-icon-36-android-1"></i><span class="tooltip-text tooltip-container"><span>Android</span></span><span class="bg-overlay"></span></a></li><?php }?>
					<?php if($behance_switch_1=='enabled'){?><li><a href="<?php if($behance_url_1){ echo esc_url($behance_url_1); }?>"><i class="social-icon social-icon-37-behance-1"></i><span class="tooltip-text tooltip-container"><span>Behance</span></span><span class="bg-overlay"></span></a></li><?php }?>
					<?php if($instagram_switch_1=='enabled'){?><li><a href="<?php if($instagram_url_1){ echo esc_url($instagram_url_1); }?>"><i class="social-icon social-icon-38-instagram-1"></i><span class="tooltip-text tooltip-container"><span>Instagram</span></span><span class="bg-overlay"></span></a></li><?php }?>
					<?php if($ebay_switch_1=='enabled'){?><li><a href="<?php if($ebay_url_1){ echo esc_url($ebay_url_1); }?>"><i class="social-icon social-icon-39-ebay-1"></i><span class="tooltip-text tooltip-container"><span>Ebay</span></span><span class="bg-overlay"></span></a></li><?php }?>
					<?php if($google_plus_switch_1=='enabled'){?><li><a href="<?php if($google_plus_url_1){ echo esc_url($google_plus_url_1); }?>"><i class="social-icon social-icon-40-google-plus-1"></i><span class="tooltip-text tooltip-container"><span>Google Plus</span></span><span class="bg-overlay"></span></a></li><?php }?>
					<?php if($github_switch_1=='enabled'){?><li><a href="<?php if($github_url_1){ echo esc_url($github_url_1); }?>"><i class="social-icon social-icon-41-github-1"></i><span class="tooltip-text tooltip-container"><span>Github</span></span><span class="bg-overlay"></span></a></li><?php }?>
					<?php if($stackoverflow_switch_1=='enabled'){?><li><a href="<?php if($stackoverflow_url_1){ echo esc_url($stackoverflow_url_1); }?>"><i class="social-icon social-icon-42-stackoverflow-1"></i><span class="tooltip-text tooltip-container"><span>Spotify</span></span><span class="bg-overlay"></span></a></li><?php }?>
					<?php if($spotify_switch_1=='enabled'){?><li><a href="<?php if($spotify_url_1){ echo esc_url($spotify_url_1); }?>"><i class="social-icon social-icon-43-spotify-1"></i><span class="tooltip-text tooltip-container"><span>Stumbleupon</span></span><span class="bg-overlay"></span></a></li><?php }?>
					<?php if($stumbleupon_switch_1=='enabled'){?><li><a href="<?php if($stumbleupon_url_1){ echo esc_url($stumbleupon_url_1); }?>"><i class="social-icon social-icon-44-stumbleupon-1"></i><span class="tooltip-text tooltip-container"><span>Visa</span></span><span class="bg-overlay"></span></a></li><?php }?>
					<?php if($visa_switch_1=='enabled'){?><li><a href="<?php if($visa_url_1){ echo esc_url($visa_url_1); }?>"><i class="social-icon social-icon-45-visa-1"></i><span class="tooltip-text tooltip-container"><span>Mastercard</span></span><span class="bg-overlay"></span></a></li><?php }?>
					<?php if($mastercard_switch_1=='enabled'){?><li><a href="<?php if($mastercard_url_1){ echo esc_url($mastercard_url_1); }?>"><i class="social-icon social-icon-46-mastercard-1"></i><span class="tooltip-text tooltip-container"><span>Amex</span></span><span class="bg-overlay"></span></a></li><?php }?>
					<?php if($amex_switch_1=='enabled'){?><li><a href="<?php if($amex_url_1){ echo esc_url($amex_url_1); }?>"><i class="social-icon social-icon-47-amex-1"></i><span class="tooltip-text tooltip-container"><span>Ios</span></span><span class="bg-overlay"></span></a></li><?php }?>
					<?php if($ios_switch_1=='enabled'){?><li><a href="<?php if($ios_url_1){ echo esc_url($ios_url_1); }?>"><i class="social-icon social-icon-48-ios-1"></i><span class="tooltip-text tooltip-container"><span>Osx</span></span><span class="bg-overlay"></span></a></li><?php }?>
					<?php if($osx_switch_1=='enabled'){?><li><a href="<?php if($osx_url_1){ echo esc_url($osx_url_1); }?>"><i class="social-icon social-icon-49-osx-1"></i><span class="tooltip-text tooltip-container"><span>Evernote</span></span><span class="bg-overlay"></span></a></li><?php }?>
					<?php if($evernote_switch_1=='enabled'){?><li><a href="<?php if($evernote_url_1){ echo esc_url($evernote_url_1); }?>"><i class="social-icon social-icon-50-evernote-1"></i><span class="tooltip-text tooltip-container"><span>Yelp</span></span><span class="bg-overlay"></span></a></li><?php }?>
					<?php if($yelp_switch_1=='enabled'){?><li><a href="<?php if($yelp_url_1){ echo esc_url($yelp_url_1); }?>"><i class="social-icon social-icon-51-yelp-1"></i><span class="tooltip-text tooltip-container"><span>Yelp</span></span><span class="bg-overlay"></span></a></li><?php }?>
					<?php if($yelp2_switch_1=='enabled'){?><li><a href="<?php if($yelp2_url_1){ echo esc_url($yelp2_url_1); }?>"><i class="social-icon social-icon-52-yelp-1"></i><span class="tooltip-text tooltip-container"><span>Yelp</span></span><span class="bg-overlay"></span></a></li><?php }?>
					<?php if($medium_switch_1=='enabled'){?><li><a href="<?php if($medium_url_1){ echo esc_url($medium_url_1); }?>"><i class="social-icon social-icon-53-medium-1"></i><span class="tooltip-text tooltip-container"><span>Medium</span></span><span class="bg-overlay"></span></a></li><?php }?>
					<?php if($slack_switch_1=='enabled'){?><li><a href="<?php if($slack_url_1){ echo esc_url($slack_url_1); }?>"><i class="social-icon social-icon-54-slack-1"></i><span class="tooltip-text tooltip-container"><span>Slack</span></span><span class="bg-overlay"></span></a></li><?php }?>
					<?php if($vine_switch_1=='enabled'){?><li><a href="<?php if($vine_url_1){ echo esc_url($vine_url_1); }?>"><i class="social-icon social-icon-55-vine-1"></i><span class="tooltip-text tooltip-container"><span>Vine</span></span><span class="bg-overlay"></span></a></li><?php }?>
					<?php if($edge_switch_1=='enabled'){?><li><a href="<?php if($edge_url_1){ echo esc_url($edge_url_1); }?>"><i class="social-icon social-icon-56-edge-1"></i><span class="tooltip-text tooltip-container"><span>Edge</span></span><span class="bg-overlay"></span></a></li><?php }?>
					<?php if($outlook_switch_1=='enabled'){?><li><a href="<?php if($outlook_url_1){ echo esc_url($outlook_url_1); }?>"><i class="social-icon social-icon-57-outlook-1"></i><span class="tooltip-text tooltip-container"><span>Outlook</span></span><span class="bg-overlay"></span></a></li><?php }?>
					<?php if($pencilcase_switch_1=='enabled'){?><li><a href="<?php if($pencilcase_url_1){ echo esc_url($pencilcase_url_1); }?>"><i class="social-icon social-icon-58-pencilcase-1"></i><span class="tooltip-text tooltip-container"><span>Pencilcase</span></span><span class="bg-overlay"></span></a></li><?php }?>
					<?php if($play_switch_1=='enabled'){?><li><a href="<?php if($play_url_1){ echo esc_url($play_url_1); }?>"><i class="social-icon social-icon-59-play-1"></i><span class="tooltip-text tooltip-container"><span>Play</span></span><span class="bg-overlay"></span></a></li><?php }?>
					<?php if($icloud_switch_1=='enabled'){?><li><a href="<?php if($icloud_url_1){ echo esc_url($icloud_url_1); }?>"><i class="social-icon social-icon-60-icloud-1"></i><span class="tooltip-text tooltip-container"><span>iCloud</span></span><span class="bg-overlay"></span></a></li><?php }?>
				</ul>
			</div>
		</div>
		
<?php }?>

<?php }?>
