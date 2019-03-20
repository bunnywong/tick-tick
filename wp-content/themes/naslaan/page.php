<?php get_header(); ?>

		<div id="main" class="<?php naslaan_front_functions::naslaan_main_class(); ?>">

		    <div class="container">
		
				<div class="row">
				
					<div class="<?php naslaan_front_functions::naslaan_inner_page_columns(); ?> inner-page-content"<?php naslaan_front_functions::naslaan_page_paddings_value(); ?>>					

						<?php if( have_posts() ): while ( have_posts() ) : the_post(); ?>
						
							<?php the_content();
								
							wp_link_pages( array(
								'before'      => '<div class="clearfix"></div><div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'naslaan' ) . '</span>',
								'after'       => '</div>',
								'link_before' => '<span>',
								'link_after'  => '</span>',
								'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'naslaan' ) . ' </span>%',
								'separator'   => '<span class="screen-reader-text">, </span>',
							) );
							?>
							
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
