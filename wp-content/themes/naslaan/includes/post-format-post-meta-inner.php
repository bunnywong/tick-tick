									<div class="post-meta">
										<ul class="post-meta-data">
											<li><?php echo get_the_date('F j / Y'); ?></li>
											<li>By <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author(); ?></a></li>
										</ul>
										<?php if ( is_singular('post') ) {?>
										<?php get_template_part('includes/post-format-social-btn');?>
										<?php }?>
										<div class="clearfix"></div>
									</div>