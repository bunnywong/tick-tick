<?php
add_action('widgets_init', 'naslaan_social_widget');
function naslaan_social_widget()
{
    return register_widget('naslaan_social_widget');
}

class naslaan_social_widget extends WP_Widget
{
    function __construct()
    {
        parent::__construct(
            'naslaan_social_widget',
            esc_html__('Naslaan Social Widget', 'naslaan'),
            array('description' => esc_html__('Custom widget to display your social media.', 'naslaan'))
        );
    }

    public function widget($args, $instance)
    {
        $title = empty($instance['title']) ? '' : $instance['title'];
		
		echo $args['before_widget'];
		
		if(!empty($title))
            echo $args['before_title'] . $title . $args['after_title'];
			
		naslaan_front_functions::naslaan_widgets_social_media();

		echo $args['after_widget'];
		
    }

    public function form($instance)
    {
		$instance = wp_parse_args( (array) $instance, array( 'title' => '' ) );
	
        if (isset($instance['title'])) {
            $title = $instance['title'];
        } else {
			$title = "";
		}
		
        ?>
        
		<p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title:', 'naslaan'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($title); ?>">
        </p>
		
    <?php
    }

    public function update($new_instance, $old_instance)
    {
        $instance = array();
        $instance['title'] = (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';
        return $instance;
    }

}

?>
