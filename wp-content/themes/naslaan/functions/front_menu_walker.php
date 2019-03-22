<?php

class naslaan_nav_menu_walker extends Walker_Nav_Menu {

  	private $curItem;
    public $break_point = null;
    public $displayed_end = 1; 

	function start_lvl(&$output, $depth = 0, $args = array()) {
	
		global $thisItem;
	
		$thisItem = $this->curItem;
		
		$indent = str_repeat("\t", $depth);
		
		$menu_dropdown_border_switch = "disabled";
		
		if( naslaan_helpers::naslaan_unyson_check() ) {
			$menu_dropdown_border_switch = fw_get_db_settings_option('menu_dropdown_border/menu_dropdown_border_switch');
		}
		
		$depth_str = '';
		
		if($depth==1){
			$menu_level = 'lpdmenu-submenu-sub';
		}elseif($depth==2){
			$menu_level = 'lpdmenu-submenu-sub-sub';
		}else{
			$menu_level = 'lpdmenu-submenu';
		}
		
		if(in_array('mega-menu', $thisItem->classes)){
			
			if($depth==0){
			
				$disabled_border = '';
				
				if($menu_dropdown_border_switch=="disabled"){
					$disabled_border = ' megamenu-disabled-border';
				}
					
				$output .= "\n$indent<div class='megamenu$disabled_border clearfix'>\n";
				
			}else{
		
				$output .= "\n$indent<ul>\n";
			}
		}elseif((in_array("col-1-2", $thisItem->classes))||(in_array("col-1-3", $thisItem->classes))||(in_array("col-1-4", $thisItem->classes))||(in_array("col-1-6", $thisItem->classes))){
			
			$output .= "";
			
		}else{
		
			$depth_str = $menu_level;
			
			if($menu_dropdown_border_switch=="disabled"){
				$depth_str .= ' lpdmenu-submenu-disabled-border';
			}
			
			$output .= "\n<ul class=\"$depth_str\">\n";
			
		}
		

	}
	
	function end_lvl(&$output, $depth = 0, $args = array()) {
	
		global $thisItem;
		
		$indent = str_repeat("\t", $depth);
		
		if(in_array('mega-menu', $thisItem->classes)){
			
			if($depth==0){
				$output .= "$indent</div>\n";
			}else{
				$output .= "$indent</ul>\n";
			}
			
		}elseif((in_array("col-1-2", $thisItem->classes))||(in_array("col-1-3", $thisItem->classes))||(in_array("col-1-4", $thisItem->classes))||(in_array("col-1-6", $thisItem->classes))){
			
			$output .= "";
			
		}else{
			
			$output .= "$indent</ul>\n";
			
		}	
	
	}
	
    function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
    
    	$this->curItem = $item;
		
		$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
		
		$class_names = $value = '';
		
		$classes = empty( $item->classes ) ? array() : (array) $item->classes;

		$classes[] = 'menu-item-' . $item->ID;
		
		if(in_array("col-1-6", $classes)){
			$classes[] = 'col-lg-2 col-md-2 col-xs-12 link-list';
		}
		
		if(in_array("col-1-4", $classes)){
			$classes[] = 'col-lg-3 col-md-3 col-xs-12 link-list';
		}
		
		if(in_array("col-1-3", $classes)){
			$classes[] = 'col-lg-4 col-md-4 col-xs-12 link-list';
		}

		if(in_array("col-1-2", $classes)){
			$classes[] = 'col-lg-6 col-md-6 col-xs-12 link-list';
		}
		
		$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
		
		$class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';
		
		$id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
		
		$id = $id ? ' id="' . esc_attr( $id ) . '"' : '';

		if((in_array("col-1-2", $classes))||(in_array("col-1-3", $classes))||(in_array("col-1-4", $classes))||(in_array("col-1-6", $classes))){
			$output .= $indent . '<ul'. $class_names .'>';
		}else{
			$output .= $indent;
			$output .= '<li' . $id . $value . $class_names .'>';	
		}
		
		$title_attr  	 = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
		$attributes 	 = ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
		$attributes 	.= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
		$attributes 	.= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
			
		$item_output = $args->before;
		
		$dropdown_variant = '';
		
		if( naslaan_helpers::naslaan_unyson_check() ) {
			$dropdown_variant = fw_get_db_settings_option('menu_dropdown_variant/dropdown_variant');
		}
		
		if((in_array("col-1-2", $classes))||(in_array("col-1-3", $classes))||(in_array("col-1-4", $classes))||(in_array("col-1-6", $classes))){
			if($depth==1){
				$item_output .= '<li class="title">';
				$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
				$item_output .= '</li>';
			}else{
				$item_output .= '<a '. $attributes .' ' . $title_attr . '><span class="menu-itemWrap"><span class="menu-item-textWrap">';
				if($dropdown_variant=='variant_2'){
					$item_output .= '<i class="material-icons">keyboard_backspace</i><span class="menu-item-animateText">';
				}
				$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
				if($dropdown_variant=='variant_2'){
					$item_output .= '</span>';
				}
				$item_output .= '</span></span></a>';
			}
		}else{
			if($depth==0){
				$item_output .= '<a '. $attributes .' ' . $title_attr . '><span><span class="btn-overlay"></span>';
				$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
				$item_output .= '</span></a>';
			}else{
				$item_output .= '<a '. $attributes .' ' . $title_attr . '><span class="menu-itemWrap"><span class="menu-item-textWrap">';
				if($dropdown_variant=='variant_2'){
					$item_output .= '<i class="material-icons">keyboard_backspace</i><span class="menu-item-animateText">';
				}
				$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
				if($dropdown_variant=='variant_2'){
					$item_output .= '</span>';
				}
				$item_output .= '</span></span></a>';
			}
		}
		
		$item_output .= $args->after;

		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    }
    
    function end_el(&$output, $item, $depth = 0, $args = array(), $id = 0 ) {
    
		global $wp_query;
		
	    if( !isset( $this->break_point ) ) {
			$menu_elements = wp_get_nav_menu_items( $args->menu );
			$top_level_elements = 0;
			
			foreach( $menu_elements as $el ) {
			    if( $el->menu_item_parent === '0' ) {
			        $top_level_elements++;
			    }
			}
			$this->break_point = ceil( $top_level_elements / 2 );
		}
		
		$logo = '';
		
		if( naslaan_helpers::naslaan_unyson_check() ) {
		
			$header_types = fw_get_db_settings_option('header_types/header_type');
			$navigation_center_variants = fw_get_db_settings_option('header_types/center/navigation_types/navigation_variant');
			
			if($header_types=='center'){
				if($navigation_center_variants=='variant_1'){
			
					if($depth==0){
						if( $this->displayed_end == $this->break_point ){
							$logo .= '<li class="centered-logo">';
							ob_start();
							naslaan_front_functions::naslaan_logo();
							$logo .= ob_get_clean();
							$logo .= '</li>';
						}
					}
				
				}
			}
		}
	    
	    $classes = empty( $item->classes ) ? array() : (array) $item->classes;
	    
	    $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
	    
		if((in_array("col-1-2", $classes))||(in_array("col-1-3", $classes))||(in_array("col-1-4", $classes))||(in_array("col-1-6", $classes))){
			$output .= $indent . '</ul>';
		}elseif(in_array('mega-menu', $classes)){
			$output .= $indent . '</div>';
			
			$output .= '</li>';
			$output .= $logo;
			
		}else{
			$output .= $indent . '</li>';
			$output .= $logo;
		}
		
		if($depth==0){
			$this->displayed_end++;
		}
	    
    }
	

}
