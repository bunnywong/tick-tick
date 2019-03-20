<?php
	/**
	* Template name: Slider Template
	**/
	 get_header(); ?>

		<div id="main" class="<?php naslaan_front_functions::naslaan_main_class(); ?>">

		    <div class="container">
		
				<div class="row">
				
					<div class="<?php naslaan_front_functions::naslaan_inner_page_columns(); ?> inner-page-content"<?php naslaan_front_functions::naslaan_page_paddings_value(); ?>>					

						<?php if( have_posts() ): while ( have_posts() ) : the_post(); ?>
						
							<?php the_content(); ?>
							
							<?php  if ( comments_open() || get_comments_number() ) {
								comments_template();
							}?>
						
						<?php endwhile; endif; ?>

					</div>
					
					<?php get_sidebar(); ?>
									
				</div>
				
			</div>
		    
		</div>


<?php get_footer(); ?>
