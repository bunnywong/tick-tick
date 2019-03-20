
					<?php if( naslaan_helpers::naslaan_unyson_check() && function_exists('fw_ext_sidebars_get_current_position') ) {

						if( naslaan_helpers::naslaan_event_calendar_check() && tribe_is_event_query() && is_archive()){
						
							$current_position = fw_get_db_settings_option( 'events_sidebar' );
						
						}else{
						
							$current_position = fw_ext_sidebars_get_current_position();
							
						}
						
						if( naslaan_helpers::naslaan_unyson_check() ) {
							$main_layouts = naslaan_theme_option_functions::naslaan_main_layouts();
						}
						
						if( $main_layouts=="1110" ) {
							$sidebar_col='col-md-4';
						}else{
							$sidebar_col='col-md-3';
						}
						
						if ( $current_position !== 'full' ) {?>
						
							<?php if( ($current_position === 'left' && naslaan_helpers::naslaan_event_calendar_check() && tribe_is_event_query() && is_archive()) || ($current_position === 'right' && naslaan_helpers::naslaan_event_calendar_check() && tribe_is_event_query() && is_archive()) ){?>
									<?php if ( is_active_sidebar( 'main-sidebar' ) ) { ?>
									<div class="<?php echo esc_attr($sidebar_col); ?> sidebar"<?php naslaan_front_functions::naslaan_page_paddings_value(); ?>>
										<?php dynamic_sidebar( 'main-sidebar' ); ?>
									</div>
									<?php } ?>
							<?php }elseif( $current_position === 'right' ) {?>
								<div class="<?php echo esc_attr($sidebar_col); ?> sidebar"<?php naslaan_front_functions::naslaan_page_paddings_value(); ?>>
									<?php echo fw_ext_sidebars_show( 'blue' );?>
								</div>
							<?php }elseif( $current_position === 'left' ){?>
								<div class="<?php echo esc_attr($sidebar_col); ?> sidebar"<?php naslaan_front_functions::naslaan_page_paddings_value(); ?>>
									<?php echo fw_ext_sidebars_show( 'blue' );?>
								</div>
							<?php }else{?>
								<?php if ( is_active_sidebar( 'main-sidebar' ) ) { ?>
									<div class="<?php echo esc_attr($sidebar_col); ?> sidebar"<?php naslaan_front_functions::naslaan_page_paddings_value(); ?>>
										<?php dynamic_sidebar( 'main-sidebar' ); ?>
									</div>
								<?php } ?>	
							<?php } ?>
						
						<?php } ?>
						
					<?php  }else{ ?>
						<?php if ( is_active_sidebar( 'main-sidebar' ) ) { ?>
							<div class="col-md-3 sidebar">
								<?php dynamic_sidebar( 'main-sidebar' ); ?>
							</div>
						<?php } ?>
					<?php } ?>