								
								<?php $disabled_top_border = '';?>
								<div class="post-wrap<?php echo esc_attr($disabled_top_border) ; ?>">
									
								
								
								<?php if ( has_post_format('image') ) {?>
									<?php if ( has_post_thumbnail() ) {
										$disabled_top_border = ' disabled-top-border';
									?> 
									<div class="featured-image">
										<a href="<?php the_permalink(); ?>"><img src="<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); echo esc_url($image[0]);?>" alt="" /></a>
										<a href="<?php echo esc_url(get_day_link(get_the_time('Y'), get_the_time('m'), get_the_time('d'))); ?>" class="date">
										<span><span class="month"><?php the_time('M'); ?></span>
										<span class="day"><?php the_time('d'); ?></span></span></a>
									</div>
									<?php }?>
								<?php }?>
								
									<div class="post-title-meta-wrap">
										<?php get_template_part('includes/post-format-post-cat');?>
										<div class="post-title"><h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3></div>
										<?php get_template_part('includes/post-format-post-meta');?>
									</div>
								
									<div class="post-content clearfix">
										<?php if ( get_post_type() == 'post' ) {?>
											<?php the_content('...'); ?>
										<?php }else{?>
											<?php the_excerpt(); ?>
										<?php }?>
									</div>
									<div class="post-bottom clearfix">
									<?php echo naslaan_front_functions::naslaan_read_more_link(); ?>
									<?php get_template_part('includes/post-format-social-btn');?>
									</div>
								</div>