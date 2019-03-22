
								<div class="post-wrap">
									<div class="post-title"><h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3></div>
									<?php get_template_part('includes/post-format-post-meta');?>
									<div class="post-content clearfix">
										<?php if ( get_post_type() == 'post' ) {?>
											<?php the_content(); ?>
										<?php }else{?>
											<?php the_excerpt(); ?>
										<?php }?>
									</div>
									<div class="post-bottom clearfix">
									<?php echo naslaan_front_functions::naslaan_read_more_link(); ?>
									<?php get_template_part('includes/post-format-social-btn');?>
									</div>
								</div>
