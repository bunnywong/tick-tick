<?php
	$meta_top_bar_visibility = '';
	
	if( naslaan_helpers::naslaan_unyson_check() ) {
		$meta_top_bar_visibility = fw_get_db_settings_option('meta_top_bar_switch/meta_top_bar_visibility');
	}
?>
											
				<?php if($meta_top_bar_visibility=='enabled'){?>							
				<div class="meta-top">
				
					<div class="container">
					
						<div class="row">
							<div class="col-md-12">
								
								<?php get_template_part('includes/meta-top/left-section'); ?>
								<?php get_template_part('includes/meta-top/right-section'); ?>
						
							</div>
						</div>
					
					</div>
				
				</div>
				<?php }?>
