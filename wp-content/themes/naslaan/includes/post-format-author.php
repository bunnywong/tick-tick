<?php if ( is_single() && isset( $post->post_author ) ) {if ( '' !== get_the_author_meta( 'description' ) ) {?>

								<div class="post-author">
								
									<div class="row">
										<div class="col-md-3"><div class="author-img"><?php echo get_avatar( get_the_author_meta('user_email') , 180 );?></div></div>
										<div class="col-md-9"><div class="author-info">
											<h3><?php echo get_the_author_meta( 'display_name', $post->post_author );?></h3>
											<p><?php echo get_the_author_meta( 'user_description', $post->post_author );?></p>
											<div class="author-social">
												<ul>
													<?php
													$user_id = get_the_author_meta( 'ID' );
													$user_obj = get_userdata( $user_id );
													if ($user_obj->roles[0]!='administrator') { if (get_the_author_meta('email', $post->post_author)!=''){?><li><a href="mailto:<?php echo get_the_author_meta('email', $post->post_author);?>"><i class="icon icon-letter"></i></a></li><?php }}?>
													<?php if (get_the_author_meta('url', $post->post_author)!=''){?><li><a href="<?php echo get_the_author_meta('url', $post->post_author);?>"><i class="icon icon-earth"></i></a></li><?php }?>
													<?php if (get_the_author_meta('twitter', $post->post_author)!=''){?><li><a href="<?php echo get_the_author_meta('twitter', $post->post_author);?>"><i class="social-icon social-icon-03-twitter"></i></a></li><?php }?>
													<?php if (get_the_author_meta('facebook', $post->post_author)!=''){?><li><a href="<?php echo get_the_author_meta('facebook', $post->post_author);?>"><i class="social-icon social-icon-06-facebook"></i></a></li><?php }?>
													<?php if (get_the_author_meta('instagram', $post->post_author)!=''){?><li><a href="<?php echo get_the_author_meta('instagram', $post->post_author);?>"><i class="social-icon social-icon-38-instagram"></i></a></li><?php }?>
													<?php if (get_the_author_meta('pintrest', $post->post_author)!=''){?><li><a href="<?php echo get_the_author_meta('pintrest', $post->post_author);?>"><i class="social-icon social-icon-33-pinterest"></i></a></li><?php }?>
													<?php if (get_the_author_meta('linkedin', $post->post_author)!=''){?><li><a href="<?php echo get_the_author_meta('linkedin', $post->post_author);?>"><i class="social-icon social-icon-11-linkedin"></i></a></li><?php }?>
												</ul>
											</div>
										</div></div>
									</div>
								</div>
<?php }}?>