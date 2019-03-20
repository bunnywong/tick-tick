<?php
	$search_form_visibility = $search_form_type ='';
	
	if( naslaan_helpers::naslaan_unyson_check() ) {
		$search_form_visibility = fw_get_db_settings_option('search_form/search_form_visibility');
		$search_form_type = fw_get_db_settings_option('search_form/enabled/search_form_type');
	}
?>
											<?php if($search_form_visibility=='enabled'){?>
											<div class="search-overlay search-overlay-hugeinc">
												<div class="overlay-close"></div>
												<?php if($search_form_type=='search_products'){?>
													<?php if( naslaan_helpers::naslaan_woocommerce_check() ) {?>
													<form method="get" class="header-search-form clearfix" action="<?php echo esc_url( home_url( '/'  ) ); ?>">
													    <input type="hidden" name="post_type" value="product" />
													    <input type="search" class="form-control search" id="s" name="s" placeholder="<?php esc_attr_e( 'Search For Products', 'naslaan' ); ?>">
													</form>
													<?php }?>
												<?php }else{?>
													<form role="form" method="get" class="header-search-form clearfix" action="<?php echo esc_url( home_url( '/'  ) ); ?>">
													    <input type="search" class="form-control search" id="s" name="s" placeholder="<?php esc_attr_e( 'Search For', 'naslaan' ); ?>">
													</form>
												<?php }?>
											</div>
											<?php }?>