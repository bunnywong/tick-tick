
								<?php $url=naslaan_front_functions::naslaan_get_youtube_url( get_the_content() );
									$disabled_top_border = '';
								?>
								<?php if ( has_post_format('video') && (naslaan_front_functions::naslaan_get_youtube_id( $url )!='')) {
									$disabled_top_border = ' disabled-top-border';
								?>
									<div class="video-container">
									    <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo esc_attr(naslaan_front_functions::naslaan_get_youtube_id( $url )); ?>" allowfullscreen></iframe>
									</div>
								<?php }?>
								<div class="post-wrap<?php echo esc_attr($disabled_top_border); ?>">
									<div class="post-title"><h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3></div>
									<?php get_template_part('includes/post-format-post-meta');?>
									<div class="post-content clearfix">
										<?php if (naslaan_front_functions::naslaan_get_youtube_id( $url )!='') {?>
											<?php the_excerpt(); ?>
										<?php }else{?>
											<?php the_content(); ?>
										<?php }?>
									</div>
									<div class="post-bottom clearfix">
									<?php echo naslaan_front_functions::naslaan_read_more_link(); ?>
									<?php get_template_part('includes/post-format-social-btn');?>
									</div>
								</div>
