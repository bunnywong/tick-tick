<?php get_header(); ?>

		<div id="main" class="<?php naslaan_front_functions::naslaan_main_class(); ?>">

		    <div class="container">
		
				<div class="row">
				
					<div class="<?php naslaan_front_functions::naslaan_inner_page_columns(); ?> inner-page-content"<?php naslaan_front_functions::naslaan_page_paddings_value(); ?>>						

						<?php woocommerce_content(); ?>
				
					</div>
					
					<?php do_action( 'woocommerce_sidebar' ); ?>
									
				</div>
				
			</div>
		    
		</div>

<?php get_footer(); ?>