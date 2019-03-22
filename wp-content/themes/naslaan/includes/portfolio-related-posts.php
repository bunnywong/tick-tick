						<?php
						$portfolio_related_post_img_replacement = $portfolio_related_post_switch = '';
						
						$portfolio_related_post_image_size = 'naslaan-theme-size-3x2';
						$portfolio_related_post_image_size = 'related-post-container-img-ratio-3x2';
							
						if( naslaan_helpers::naslaan_unyson_check() ) {
						
							$portfolio_related_post_img_replacement = fw_get_db_settings_option('portfolio_related_post_img_replacement');
							$portfolio_related_post_switch = fw_get_db_settings_option('portfolio_related_post_meta/portfolio_related_post_switch');
							$portfolio_related_post_image_size = fw_get_db_settings_option('portfolio_related_post_image_size');
						
						}
						
						if($portfolio_related_post_image_size!='default') {
							$portfolio_related_post_image_ratio = 'related-post-container-img-ratio-'.$portfolio_related_post_image_size;
							$portfolio_related_post_image_size = 'naslaan-theme-size-'.$portfolio_related_post_image_size;	
						}else{
							$portfolio_related_post_image_ratio = 'related-post-container-img-ratio-3x2';
							$portfolio_related_post_image_size = 'naslaan-theme-size-3x2';
						}
						
					    $orig_post = $post;
					    global $post;
					    $tax_args=array('orderby' => 'date');
					    $taxs = wp_get_post_terms($post->ID,'fw-portfolio-category',$tax_args);
					     
					    if ($taxs) {
					    $tax_ids = array();
					    foreach($taxs as $individual_tax){
						    $resultstr[] = $individual_tax->slug;
					    }
					    
					    $tax_ids[] = $individual_tax->term_id;
					    
					    $args=array(
					    'fw-portfolio-category' => implode(",",$resultstr),
					    'post__not_in' => array($post->ID),
					    'posts_per_page'=> 4, 
					    'ignore_sticky_posts'=>1
					    );
					     
					    $my_query = new wp_query( $args );
					    if( $my_query->have_posts() ) {?>
					 
					     	<div class="related-posts">
						     	<h3><?php esc_html_e( 'Related Posts', 'naslaan' );?></h3>
							 	<div class="row">
					    <?php
					    while( $my_query->have_posts() ) {
					    $my_query->the_post();?>
					    
							    	<div class="col-md-3">
							    		<div class="related-post-container <?php echo esc_attr($portfolio_related_post_image_ratio);?><?php if ((has_post_thumbnail())||($portfolio_related_post_img_replacement=="enabled")  ) {?> rpc-remove-top-border<?php }?>">
											<?php if ( has_post_thumbnail() ) {?> 
											<div class="featured-image">
												<a href="<?php  the_permalink()?>"><img src="<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), $portfolio_related_post_image_size ); echo esc_url($image[0]);?>" alt="" /></a>
											</div>
											<?php }else{?>
												<?php if ($portfolio_related_post_img_replacement=="enabled") {?> 
												<div class="no-featured-image">
													<div class="no-image-label">
														<span><?php esc_html_e( 'No Image', 'naslaan' );?></span>
													</div>
												</div>
												<?php }?>
											<?php }?>
											<div class="related-post-container-content">
										        <h4><a href="<?php  the_permalink()?>"><?php the_title(); ?></a></h4>
										        
										        <?php if( $portfolio_related_post_switch == "enabled" ) {?>
										        <div class="related-post-container-meta"><?php echo naslaan_front_functions::naslaan_get_categories();?></div>
										        <?php }?>
											</div>
							    		</div>
									</div>
							    
					    <?php }?>
					   			 </div>
					    	</div>
					    
					    <?php } }
					    
					    $post = $orig_post;
					    wp_reset_postdata();
					    ?>
