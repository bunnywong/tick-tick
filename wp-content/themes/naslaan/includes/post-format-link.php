
								<div class="post-wrap">
									<div class="post-title"><h3><?php the_title(); ?></h3></div>
									<?php get_template_part('includes/post-format-post-meta');?>
									<div class="post-content clearfix">
										<p><a href="<?php echo strip_tags( get_the_content() ); ?>"><?php echo strip_tags( get_the_content() ); ?></a></p>
									</div>
									<div class="post-bottom clearfix">
									<?php echo naslaan_front_functions::naslaan_read_more_link(); ?>
									<?php get_template_part('includes/post-format-social-btn');?>
									</div>
								</div>