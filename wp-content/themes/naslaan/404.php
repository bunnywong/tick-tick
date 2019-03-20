<?php get_header(); ?>

		<div id="main" class="<?php naslaan_front_functions::naslaan_main_class(); ?>">

		    <div class="container">
		
				<div class="row">
				
					<div class="<?php naslaan_front_functions::naslaan_inner_page_columns(); ?> inner-page-content">
					
						<h4><?php esc_html_e('Oops! The page can&rsquo;t be found.', 'naslaan'); ?></h4>
						<p class="not-happy"><?php esc_html_e('The page you are looking for is not available. Please try to perform a search.', 'naslaan') ?></p>
						<form role="search" method="get" class="search-page-form" action="<?php echo esc_url(home_url('/')); ?>">
	                        <input id="s" class="search_input theme-form theme-form-inline" type="text" name="s" value="<?php the_search_query() ?>"/>
	                        <input class="lpd_t_btn" id="searchsubmit" type="submit" value="<?php esc_attr_e('Search', 'naslaan') ?>"/>
		                </form>
		                <hr>
		                
						<div class="row">
						
	                    	<?php 
	                    	if( naslaan_helpers::naslaan_woocommerce_check() && naslaan_helpers::naslaan_unyson_check()) {
		                    	$columns = 'col-md-3';
	                    	}else if( naslaan_helpers::naslaan_woocommerce_check() || naslaan_helpers::naslaan_unyson_check()){
		                    	$columns = 'col-md-4';
	                    	}else{
		                    	$columns = 'col-md-6';
	                    	}?>
							
	                    	<?php $query = new WP_Query();
	                    	$query->query('ignore_sticky_posts=1&post_status=publish&posts_per_page=-1');
	                    	
	                    	if ($query->have_posts()){
	                    	?>
			                    	
							<div class="<?php echo esc_attr($columns);?>">
								<h4><?php esc_html_e('Blog Posts', 'naslaan') ?></h4>
								<ul class="_404_bulleted-list _404_bulleted-list-40 _404_bulleted-list-type-3">

			                    	<?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
			                        
			                        <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
			                        
			                        <?php endwhile; endif; ?>
									
								</ul>
							</div>
							
							<?php 
							}
							wp_reset_postdata(); ?>
							
							<?php $pages = get_pages();
								
							if($pages){ ?>
							
							<div class="<?php echo esc_attr($columns);?>">
								
								<h4><?php esc_html_e('Available Pages', 'naslaan') ?></h4>
								<ul class="_404_bulleted-list _404_bulleted-list-40 _404_bulleted-list-type-3">
								<?php foreach ( $pages as $page ) {
								
								$option = '<li><a href="'.esc_url(get_permalink( $page->ID )).'">';
								$option .= esc_html($page->post_title);
								$option .= '</a></li>';
								
								echo $option;
								}
								?>
								</ul>
								
							</div>
							
							<?php } ?>
							
	                    	<?php
	                    	if( naslaan_helpers::naslaan_woocommerce_check() ) {
	                    	$query = new WP_Query();
	                    	$query->query('post_type=product&ignore_sticky_posts=1&post_status=publish&posts_per_page=-1');
	                    	
	                    	if ($query->have_posts()){
	                    	?>
			                    	
							<div class="<?php echo esc_attr($columns);?>">
								<h4><?php esc_html_e('Available Products', 'naslaan') ?></h4>
								<ul class="_404_bulleted-list _404_bulleted-list-40 _404_bulleted-list-type-3">

			                    	<?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
			                        
			                        <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
			                        
			                        <?php endwhile; endif; ?>
									
								</ul>
							</div>
							
							<?php 
							}
							wp_reset_postdata(); 
							} ?>
							
	                    	<?php 
	                    	if( naslaan_helpers::naslaan_unyson_check() ) {
	                    	$query = new WP_Query();
	                    	$query->query('post_type=fw-portfolio&ignore_sticky_posts=1&post_status=publish&posts_per_page=-1');
	                    	
	                    	if ($query->have_posts()){
	                    	?>
			                    	
							<div class="<?php echo esc_attr($columns);?>">
								<h4><?php esc_html_e('Available Projects', 'naslaan') ?></h4>
								<ul class="_404_bulleted-list _404_bulleted-list-40 _404_bulleted-list-type-3">

			                    	<?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
			                        
			                        <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
			                        
			                        <?php endwhile; endif; ?>
									
								</ul>
							</div>
							
							<?php 
							}
							wp_reset_postdata();
							} ?>
							
						</div>	
				
					</div>
					
					<?php get_sidebar(); ?>
									
				</div>
				
			</div>
		    
		</div>


<?php get_footer(); ?>
