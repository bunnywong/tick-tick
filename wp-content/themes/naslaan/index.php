<?php get_header(); ?>

		<div id="main" class="<?php naslaan_front_functions::naslaan_main_class(); ?>">

		    <div class="container">
		
				<div class="row">
				
					<div class="<?php naslaan_front_functions::naslaan_inner_page_columns(); ?> inner-page-content"<?php naslaan_front_functions::naslaan_page_paddings_value(); ?>>		

						<?php if( have_posts() ): while ( have_posts() ) : the_post(); ?>
							
							<div class="<?php $allClasses = get_post_class(); foreach ($allClasses as $class) { echo esc_attr($class) . " "; } ?>">
							
								<?php if ( has_post_format('video') ) {?>
									<?php get_template_part('includes/post-format-video');?>
								<?php } elseif ( has_post_format('image') ) {?>
									<?php get_template_part('includes/post-format-image');?>
								<?php } elseif ( has_post_format('link') ) {?>
									<?php get_template_part('includes/post-format-link');?>
								<?php } else {?>
									<?php get_template_part('includes/post-format-standard');?>
								<?php }?>
																
							</div>
							
						<?php endwhile; ?>
						
						<?php if((get_next_posts_link()!= null)||(get_next_posts_link()!= null)){?>
						<div class="pagination">
						<?php if(get_previous_posts_link()!= null){ echo '<span class="navigation-left">'; previous_posts_link(__('&larr; Newer Entries', 'naslaan'), 0);  echo '</span>'; }?>
						<?php if(get_next_posts_link()!= null){ echo '<span class="navigation-right">'; next_posts_link(__('Older Entries &rarr;', 'naslaan'), 0);  echo '</span>'; }?>
						<div class="clearfix"></div>
						</div>
						<?php }?>
						
						<?php else: ?>
						
							<h4><?php esc_html_e('Sorry, no posts matched your criteria.', 'naslaan'); ?></h4>
						
						<?php endif; wp_reset_query();?>
						
					</div>
					
					<?php get_sidebar(); ?>
									
				</div>
				
			</div>
		    
		</div>


<?php get_footer(); ?>
