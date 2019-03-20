<?php get_header(); ?>

		<div id="main" class="<?php naslaan_front_functions::naslaan_main_class(); ?>">

		    <div class="container">
		
				<div class="row">
				
					<div class="<?php naslaan_front_functions::naslaan_inner_page_columns(); ?> inner-page-content"<?php naslaan_front_functions::naslaan_page_paddings_value(); ?>>

						<?php if ( has_post_thumbnail() ) {?> 
						<div class="featured-image">
							<img src="<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); echo esc_url($image[0]);?>" alt="" />
						</div>
						<?php if ( !is_singular('post') ) {?>
						<div class="divider divider-20"></div>
						<?php }?>
						<?php }?>

						<?php if( have_posts() ): while ( have_posts() ) : the_post(); ?>
						
							<?php the_content(); ?>
							<div class="clearfix"></div>
							<?php
							wp_link_pages( array(
								'before'      => '<div class="clearfix"></div><div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'naslaan' ) . '</span>',
								'after'       => '</div>',
								'link_before' => '<span>',
								'link_after'  => '</span>',
								'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'naslaan' ) . ' </span>%',
								'separator'   => '<span class="screen-reader-text">, </span>',
							) );
							?>
							<?php if ( is_singular('post') ) {?>
							<?php get_template_part('includes/post-format-post-meta-inner');?>
							<?php }?>
							<?php $posttags = get_the_tags();
							if ($posttags) {
								echo '<div class="post-tags">';
								the_tags('',' ','');
								echo '</div>';
							}?>
							
							<?php if ( is_singular('post') ) {?>
							<?php get_template_part('includes/post-format-author'); ?>
							<?php }?>
							
							<?php if ( is_singular('post') ) {?>
							<?php get_template_part('includes/single-related-posts'); ?>
							<?php }?>
							
							<?php if ( is_singular('post') ) {?>
							<?php if ( comments_open() || get_comments_number() ) {
								comments_template();
							}?>
							<?php }?>
						
						<?php endwhile; endif; ?>
						
						<?php get_template_part('includes/post-footer-navigation'); ?>

					</div>
					
					<?php get_sidebar(); ?>
									
				</div>
				
			</div>
		    
		</div>


<?php get_footer(); ?>
