<?php
/* Post type
================================================== */
function service_post_type() 
{
	$labels = array(
		'name' => __( 'Service', 'lpd_service_posts'),
		'singular_name' => __( 'Service' , 'lpd_service_posts'),
		'add_new' => _x('Add New', 'service', 'lpd_service_posts'),
		'add_new_item' => __('Add New Service', 'lpd_service_posts'),
		'edit_item' => __('Edit Service', 'lpd_service_posts'),
		'new_item' => __('New Service', 'lpd_service_posts'),
		'view_item' => __('View Service', 'lpd_service_posts'),
		'search_items' => __('Search Service Items', 'lpd_service_posts'),
		'not_found' =>  __('No member items found', 'lpd_service_posts'),
		'not_found_in_trash' => __('No member found in Trash', 'lpd_service_posts'), 
		'parent_item_colon' => ''
	  );
	  
	  $args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true, 
		'query_var' => true,
        'has_archive' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => 35,
		'rewrite' => array('slug' => 'service'),
		'supports' => array('title','editor','thumbnail')
	  ); 
	  
	  register_post_type('service',$args);
	  flush_rewrite_rules();
}


/* Taxonomies
================================================== */
function service_taxonomies(){
    
	// Categories
	
	register_taxonomy(
		'service_category',
		'service',
		array(
			'hierarchical' => true,
			'label' => __('Service Categories', 'lpd_service_posts'),
			'query_var' => true,
			'rewrite' => true
		)
	);

}

/* Edit
================================================== */
function service_edit_columns($columns){  

        $columns = array(  
            "cb" => "<input type=\"checkbox\" />",  
            "title" => __( 'Service Title' , 'lpd_service_posts'),
            "service_category" => __( 'Categories' , 'lpd_service_posts'),
        );   
  
        return $columns;  
}  

/* Custom column
================================================== */
function service_custom_columns($column){  
        global $post;  
        switch ($column)  
        {    
    		case "service_category":
    			echo get_the_term_list($post->ID, 'service_category', '', ', ','');
    		break;
        }  
}  

add_action( 'init', 'service_post_type' );
add_action( 'init', 'service_taxonomies', 0 ); 
add_filter("manage_edit-service_columns", "service_edit_columns");  
add_action("manage_posts_custom_column",  "service_custom_columns");
 
?>