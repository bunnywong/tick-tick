<?php
			$wpml_container_switch = $wpml_btn_visibility_class ='';
			
			if( naslaan_helpers::naslaan_unyson_check() ) {
				$wpml_container_switch = fw_get_db_settings_option('wpml_container_visibility/wpml_container_switch');
				$wpml_btn_visibility = fw_get_db_settings_option('wpml_container_visibility/enabled/wpml_btn_visibility');
			}
?>
											<?php if($wpml_container_switch=="enabled"){?>
											<div class="wpml-switcher-overlay wpml-switcher-overlay-hugeinc">
												<div class="wpml-switcher-overlay-close"></div>
												
												
												<div class="wpml-switcher-overlay-content">
													<h3 class="wpml-switcher-overlay-title"><?php esc_html_e('Switch The Language', 'naslaan') ?></h3>
													<?php
													
													$languages = icl_get_languages('skip_missing=0&orderby=code');
													
													echo '<ul class="wpml-switcher-flags">';
												    if(!empty($languages)){
												        foreach($languages as $l){
												        if(!$l['active']) echo '<li>';
												            if(!$l['active']) echo '<a href="'.esc_url($l['url']).'" title="'.esc_attr($l['translated_name']).'">';
												            if(!$l['active']) echo '<span class="wpml-switcher-lg-flag" style="background-image:url('.esc_attr($l['country_flag_url']).')"></span>';
												            if(!$l['active']) echo '<span class="wpml-switcher-lg-name">'.esc_html($l['translated_name']).'</span>';
												            if(!$l['active']) echo '</a>';
												        if(!$l['active']) echo '</li>';
												        }
												    } 
												    echo '</ul>';
												    
													?>
												</div>


											</div>
											<?php }?>