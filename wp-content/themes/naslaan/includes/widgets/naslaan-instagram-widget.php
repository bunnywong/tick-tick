<?php
add_action('widgets_init', 'naslaan_instagram_widget');
function naslaan_instagram_widget()
{
    return register_widget('naslaan_instagram_widget');
}

class naslaan_instagram_widget extends WP_Widget
{
    function __construct()
    {
        parent::__construct(
            'naslaan_instagram_widget',
            esc_html__('Naslaan Instagram Widget', 'naslaan'),
            array('description' => esc_html__('Custom widget to display an Instagram feed.', 'naslaan'),)
        );
    }

    public function widget($args, $instance)
    {
		$instagram_feed = "";
	
		$title = empty($instance['title']) ? '' : $instance['title'];
		$instagram_feed = !empty($instance['instagram_feed']) ? $instance['instagram_feed'] : '';
		
		echo $args['before_widget'];
		
		if(!empty($title))
            echo $args['before_title'] . $title . $args['after_title'];
			
		if(!empty($instagram_feed)){
			echo do_shortcode($instagram_feed);
		}

		echo $args['after_widget'];
		
    }

    public function form($instance)
    {
		$instance = wp_parse_args( (array) $instance, array( 'title' => '', 'instagram_feed' => '' ) );
	
		$instagram_feed = "";
	
        if (isset($instance['title']) && isset($instance['instagram_feed'])) {
            $title = $instance['title'];
            $instagram_feed = $instance['instagram_feed'];
        } else {
            $title = esc_html__('Instagram', 'naslaan');
        }
        ?>
        
		<p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title:', 'naslaan'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($title); ?>">
        </p>
		
		<p>
            <label for="<?php echo esc_attr($this->get_field_id('instagram_feed')); ?>"><?php esc_html_e('Instagram feed shortcode:', 'naslaan'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('instagram_feed')); ?>" name="<?php echo esc_attr($this->get_field_name('instagram_feed')); ?>" type="text" value="<?php echo esc_attr($instagram_feed); ?>">
        </p>
		
    <?php
    }

    public function update($new_instance, $old_instance)
    {
        $instance = array();
        $instance['title'] = (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';
		$instance['instagram_feed'] = $new_instance['instagram_feed'];
        return $instance;
    }

}

?>
