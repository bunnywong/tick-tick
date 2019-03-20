							<?php
							
							$portfolio_post_gallery_image_size = 'naslaan-theme-size-3x2';
								
							if( naslaan_helpers::naslaan_unyson_check() ) {

								$portfolio_post_gallery_image_size = fw_get_db_settings_option('portfolio_post_gallery_image_size');
							
							}
							
							if($portfolio_post_gallery_image_size!='default') {
								$portfolio_post_gallery_image_size = 'naslaan-theme-size-'.$portfolio_post_gallery_image_size;
							}else{
								$portfolio_post_gallery_image_size = 'naslaan-theme-size-3x2';
							}
							
							$thumbnails = fw_ext_portfolio_get_gallery_images();
							
							$captions = array();
							if ( ! empty( $thumbnails ) ) :
								?>
								<section class="wrap-nivoslider theme-default">
									<div id="slider" class="nivoslider">
										<?php foreach ( $thumbnails as $thumbnail ) :
											$attachment = get_post( $thumbnail['attachment_id'] );
							
											$captions[ $thumbnail['attachment_id'] ] = $attachment->post_title;
							
											$image = wp_get_attachment_image_src( $thumbnail['attachment_id'], $portfolio_post_gallery_image_size );
											?>
											<img src="<?php echo esc_attr($image[0]) ?>"
											     class="nivoslider-image"
											     alt="<?php echo esc_attr($attachment->post_title) ?>"
											     title="#nivoslider-caption-<?php echo esc_attr($attachment->ID) ?>"
												/>
										<?php endforeach ?>
									</div>
									<div class="nivo-html-caption">
										<?php foreach ( $captions as $attachment_id => $post_title ) : ?>
											<div
												id="nivoslider-caption-<?php echo esc_attr($attachment_id) ?>"><?php echo esc_html($post_title); ?></div>
										<?php endforeach ?>
									</div>
								</section>
							<?php endif ?>