<?php
add_action('widgets_init', 'naslaan_posts_widget');
function naslaan_posts_widget()
{
    return register_widget('naslaan_posts_widget');
}


class naslaan_posts_widget extends WP_Widget
{
    function __construct()
    {
        parent::__construct(
            'naslaan_posts_widget',
            esc_html__('Naslaan Latest Posts Widget', 'naslaan'),
            array('description' => esc_html__('Your site’s most recent Posts.', 'naslaan'),)
        );
    }

    public function widget($args, $instance)
    {
		$title = empty($instance['title']) ? '' : $instance['title'];
        $number_of_posts = !empty($instance['number_of_posts']) ? apply_filters('widget_title', $instance['number_of_posts']) : 5;
		$post_category = empty($instance['post_category']) ? '' : $instance['post_category'];

        echo $args['before_widget'];
        if (!empty($title)){
			echo $args['before_title'] . $title . $args['after_title'];
		}
		
		$category = "";
		
		if($post_category != "all_categories"){
			$category = $post_category;
		}

		$blog_posts = get_posts(array( 'posts_per_page' => $number_of_posts, 'post_type' => 'post', 'category_name' => $category)); 
		
		?>
		
		<?php if(!empty($blog_posts)){ ?>
		
			<ul class="recent_posts_list">
			
				<?php foreach($blog_posts as $blog_post){ ?>
			
					<li>
					
						<a href="<?php echo get_permalink($blog_post->ID); ?>">
						
							<div class="row">
								<?php if(get_post_thumbnail_id($blog_post->ID)!=""){ ?>
								<div class="col-md-4">
									<?php echo wp_get_attachment_image(get_post_thumbnail_id($blog_post->ID),'naslaan-theme-size-3x2');?>
								</div>
								<?php } ?>
								<div class="<?php if(get_post_thumbnail_id($blog_post->ID)!=""){ ?>col-md-8<?php }else{ ?>col-md-12<?php } ?>">
								
									<h4 class="title"><?php echo esc_attr($blog_post->post_title); ?></h4>
									
									<div class="mw-date"><?php echo esc_attr(get_the_date(get_option('date_format'), $blog_post->ID)); ?></div>
									
								</div>
							</div>
							
						</a>
						
					</li>
				
				<?php } ?>
			
			</ul>
			
		<?php } ?>
		
        <?php
        echo $args['after_widget'];
    }

    public function form($instance)
    {
	
		$instance = wp_parse_args( (array) $instance, array( 'title' => '', 'number_of_posts' => '') );
	
        if (isset($instance['title']) && isset($instance['number_of_posts'])) {
            $title = $instance['title'];
            $number_of_posts = $instance['number_of_posts'];
        } else {
            $title = esc_html__('Latest Posts', 'naslaan');
            $number_of_posts = 3;
        }
		
        ?>
		
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title:', 'naslaan'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($title); ?>"/>
        </p>
		
		<p>
			<?php $terms = get_terms( array('taxonomy' => 'category')); ?>
			<label for="<?php echo esc_attr( $this->get_field_id( 'post_category' ) ); ?>"><?php esc_html_e('Select Category:', 'naslaan'); ?></label>
			<select name="<?php echo esc_attr( $this->get_field_name( 'post_category' ) ); ?>" id="<?php echo esc_attr( $this->get_field_id( 'post_category' ) ); ?>" class="widefat">
				<option value="all_categories" <?php selected( $instance['post_category'], 'all_categories' ); ?>><?php esc_html_e('All Categories', 'naslaan'); ?></option>
				<?php foreach($terms as $term){ ?>
					<option value="<?php echo esc_attr( $term->slug ); ?>" <?php selected( $instance['post_category'], $term->slug ); ?>><?php echo esc_html( $term->name ); ?></option>
				<?php } ?>
			</select>
		</p>
		
        <p>
            <label
                for="<?php echo esc_attr($this->get_field_id('number_of_posts')); ?>"><?php esc_html_e('Number of posts to show:', 'naslaan'); ?></label>
            <input size="3" maxlength="2" id="<?php echo esc_attr($this->get_field_id('number_of_posts')); ?>" name="<?php echo esc_attr($this->get_field_name('number_of_posts')); ?>" type="text" value="<?php echo esc_attr($number_of_posts); ?>"/>
        </p>

		
    <?php
    }

    public function update($new_instance, $old_instance)
    {
        $instance = array();
        $instance['title'] = (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';
        $instance['number_of_posts'] = (!empty($new_instance['number_of_posts'])) ? strip_tags($new_instance['number_of_posts']) : '';
		$instance['post_category'] = $new_instance['post_category'];

        return $instance;
    }

}

?>
