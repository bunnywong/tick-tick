<?php 
$social_media_btn = '';

if( naslaan_helpers::naslaan_unyson_check() ) {

$social_media_btn = fw_get_db_settings_option('social_media_btn');

if($social_media_btn != 'disabled') {

?>
<div class="post-share-me">
	
	<ul>
		<li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>"><i class="social-icon social-icon-06-facebook-1"></i></a></li>
		<li><a href="https://twitter.com/home?status=<?php the_permalink(); ?>"><i class="social-icon social-icon-05-twitter-1"></i></a></li>
		<li><a href="https://plus.google.com/share?url=<?php the_permalink(); ?>"><i class="social-icon social-icon-40-google-plus-1"></i></a></li>
		<li><a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&title=<?php preg_replace('/ /', '%20', get_the_title()); ?>&summary=&source="><i class="social-icon social-icon-11-linkedin-1"></i></a></li>
	</ul>
	
</div>
<?php }}?>
