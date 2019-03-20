<?php $columns = '3'; ?>

<?php get_header(); ?>

		<div id="main" class="<?php naslaan_front_functions::naslaan_main_class(); ?>">

		    <div class="container">
		
				<div class="row">
				
					<div class="<?php naslaan_front_functions::naslaan_inner_page_columns(); ?> inner-page-content">	
					
						
						<p class="not-happy"><?php esc_html_e('Not happy with the results below please do another search.', 'naslaan') ?></p>
						<form role="search" method="get" class="search-page-form" action="<?php echo esc_url(home_url('/')); ?>">
	                        <input id="s" class="search_input theme-form theme-form-inline" type="text" name="s" value="<?php the_search_query() ?>"/>
	                        <input class="lpd_t_btn" id="searchsubmit" type="submit" value="<?php esc_attr_e('Search', 'naslaan') ?>"/>
		                </form>
		                <hr>
		               
					                					
						<div class="row">					

							<?php $i = 0; if( have_posts() ): while ( have_posts() ) : the_post(); $i ++; ?>
								
								<div class="col-md-4 <?php $allClasses = get_post_class(); foreach ($allClasses as $class) { echo esc_attr($class) . " "; } ?>">
								
									<?php get_template_part('includes/post-search');?>
																										
								</div>
								
								<?php if (($i%$columns)==0) {?>
									<div class="clearfix"></div>
								<?php }?>

								
							<?php endwhile; ?>
							
							<div class="clearfix"></div>
							
							<div class="pagination">
							
								<?php the_posts_pagination( array(
									'type'         => 'list',
									'end_size'     => 3,
									'mid_size'     => 3,
									'prev_text'    => '<i class="material-icons">&#xE314;</i>',
									'next_text'    => '<i class="material-icons">&#xE315;</i>',
								) ); ?>
							
							</div>
						
						<?php else: ?>
						
							<div class="col-md-12"><h4><?php esc_html_e('Sorry, no posts matched your criteria.', 'naslaan'); ?></h4></div>
						
						<?php endif; ?>
						
						</div>
				
					</div>
					
					<?php get_sidebar(); ?>
									
				</div>
				
			</div>
		    
		</div>


<?php get_footer(); ?>
