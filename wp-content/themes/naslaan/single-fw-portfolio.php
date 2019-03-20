<?php get_header(); ?>

		<div id="main" class="<?php naslaan_front_functions::naslaan_main_class(); ?>">

		    <div class="container">
		
				<div class="row">
				
					<?php
					$portfolio_post_layout = $portfolio_post_type = '';
					
					if( naslaan_helpers::naslaan_unyson_check() ) {
					
						$portfolio_post_layout = fw_get_db_post_option( get_the_ID(), 'portfolio_post_layout');
						
						$portfolio_post_type = fw_get_db_post_option( get_the_ID(), 'portfolio_post_type');

					}?>
				
					<div class="<?php naslaan_front_functions::naslaan_inner_page_columns(); ?> inner-page-content"<?php naslaan_front_functions::naslaan_page_paddings_value(); ?>>
					
						<?php if ( $portfolio_post_layout == 'sidebar' ) { ?>
							<div class="row">
								<div class="col-md-8">
									<?php if ( $portfolio_post_type == 'slider' ) { ?>
										<?php get_template_part('includes/portfolio-nivoslider'); ?>
									<?php }else{ ?>
										<?php get_template_part('includes/portfolio-gallery'); ?>
									<?php } ?>
								</div>
								<div class="col-md-4">
									
									<?php if( have_posts() ): while ( have_posts() ) : the_post(); ?>
									
										<?php the_content(); ?>
									
									<?php endwhile; endif; ?>
									
								</div>
							</div>
						<?php }else{ ?>
							
							<?php if ( $portfolio_post_type == 'slider' ) { ?>
								<?php get_template_part('includes/portfolio-nivoslider'); ?>
							<?php }else{ ?>
								<?php get_template_part('includes/portfolio-gallery'); ?>
							<?php } ?>

							<?php if( have_posts() ): while ( have_posts() ) : the_post(); ?>
							
								<?php the_content(); ?>
							
							<?php endwhile; endif; ?>
									
						<?php } ?>
						
						
						<?php get_template_part('includes/portfolio-related-posts'); ?>
						
						<?php get_template_part('includes/post-footer-navigation'); ?>
						

					</div>
					
					<?php get_sidebar(); ?>
									
				</div>
				
			</div>
		    
		</div>


<?php get_footer(); ?>
