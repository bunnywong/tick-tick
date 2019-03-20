										<?php
										
										$search_page_img_replacement = '';
										$obj = get_post_type_object( get_post_type() );
										
										
										if( naslaan_helpers::naslaan_unyson_check() && function_exists('fw_ext_sidebars_get_current_position') ) {
											$search_page_img_replacement = fw_get_db_settings_option('search_page_img_replacement');
										}
											
										?>
	
							    		<div class="search-post-container search-post-container-img-ratio-16x9<?php if ( (has_post_thumbnail())||($search_page_img_replacement=="enabled")  ) {?> rpc-remove-top-border<?php }?>">
											<?php if ( has_post_thumbnail() ) {?> 
											<div class="featured-image">
												<img src="<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'naslaan-theme-size-16x9' ); echo esc_url($image[0]);?>" alt="" />
												<div class="hover-effect">
													<a href="<?php the_permalink()?>" class="hover-effect-btn"><i class="material-icons">&#xE042;</i></a>
												</div>
											</div>
											<?php }else{?>
												<?php if ( $search_page_img_replacement == "enabled" ) {?> 
												<div class="no-featured-image">
													<div class="no-image-label">
														<span><?php esc_html_e( 'No Image', 'naslaan' );?></span>
													</div>
												</div>
												<?php }?>
											<?php }?>
											<div class="search-post-container-content">
										        <h4><a href="<?php the_permalink()?>"><?php the_title(); ?></a></h4>
										        <div class="search-post-container-meta"><?php esc_html($obj->labels->singular_name); ?> <?php esc_html_e( 'posted by', 'naslaan' );?> <?php the_author(); ?></div>
											</div>
							    		</div>