<?php

class naslaan_nav_mobmenu_walker extends Walker_Nav_Menu {

  	private $curItem;

	function start_lvl(&$output, $depth = 0, $args = array()) {
	
		global $thisItem;
	
		$thisItem = $this->curItem;
		
		$indent = str_repeat("\t", $depth);
		
		$depth_str = '';
		
		if($depth==1){
			$menu_level = 'lpdmobmenu-submenu-sub';
		}elseif($depth==2){
			$menu_level = 'lpdmobmenu-submenu-sub-sub';
		}else{
			$menu_level = 'lpdmobmenu-submenu';
		}
		
		if(in_array('mega-menu', $thisItem->classes)){
			
			if($depth==0){
					
				$output .= "\n$indent<div class='megamenu clearfix'>\n";
				
			}else{
		
				$output .= "\n$indent<ul>\n";
			}
		}elseif((in_array("col-1-2", $thisItem->classes))||(in_array("col-1-3", $thisItem->classes))||(in_array("col-1-4", $thisItem->classes))||(in_array("col-1-6", $thisItem->classes))){
			
			$output .= "";
			
		}else{
		
			$depth_str = $menu_level;
			
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
    
		global $wp_query;
		
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
			$output .= $indent . '<li' . $id . $value . $class_names .'>';	
		}
		
		$title_attr  	 = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
		$attributes 	 = ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
		$attributes 	.= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
		$attributes 	.= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
			
		$item_output = $args->before;
		
				
		if((in_array("col-1-2", $classes))||(in_array("col-1-3", $classes))||(in_array("col-1-4", $classes))||(in_array("col-1-6", $classes))){
			if($depth==1){
				$item_output .= '<li class="title">';
				$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
				$item_output .= '</li>';
			}else{
				$item_output .= '<a '. $attributes .' ' . $title_attr . '>';
				$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
				$item_output .= '</a>';
			}
		}else{
			if($depth==0){
				$item_output .= '<a '. $attributes .' ' . $title_attr . '>';
				$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
				$item_output .= '</a>';
			}else{
				$item_output .= '<a '. $attributes .' ' . $title_attr . '>';
				$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
				$item_output .= '</a>';
			}
		}
		
		$item_output .= $args->after;

		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
        
    }
    
    function end_el(&$output, $item, $depth = 0, $args = array(), $id = 0 ) {
	    
	    $classes = empty( $item->classes ) ? array() : (array) $item->classes;
	    
	    $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
	    
		if((in_array("col-1-2", $classes))||(in_array("col-1-3", $classes))||(in_array("col-1-4", $classes))||(in_array("col-1-6", $classes))){
			$output .= $indent . '</ul>';
		}elseif(in_array('mega-menu', $classes)){
			$output .= $indent . '</div>';
		}else{
			$output .= $indent . '</li>';
		}
	    
    }
	

}
