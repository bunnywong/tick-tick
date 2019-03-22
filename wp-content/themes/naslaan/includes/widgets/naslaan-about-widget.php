<?php
add_action('widgets_init', 'naslaan_about_widget');
function naslaan_about_widget()
{
    return register_widget('naslaan_about_widget');
}

class naslaan_about_widget extends WP_Widget
{
    function __construct()
    {
        parent::__construct(
            'naslaan_about_widget',
            esc_html__('Naslaan About Widget', 'naslaan'),
            array('description' => esc_html__('Tell a little bit about yourself.', 'naslaan'),)
        );
    }

    public function widget($args, $instance)
    {
    	$title = apply_filters( 'widget_title', empty( $instance['title'] ) ? '' : $instance['title'], $instance, $this->id_base );
		$image = empty($instance['image']) ? '' : $instance['image'];
        $heading = !empty($instance['heading']) ? $instance['heading'] : '';
		$content = ! empty( $instance['content'] ) ? $instance['content'] : '';
		$social_media = isset( $instance['social_media'] ) ? $instance['social_media'] : false;
		
		
        echo $args['before_widget'];

		?>
		
		<?php if ( $title ) {
			echo $args['before_title'] . $title . $args['after_title'];
		}?>
		
		<?php if($image != ""){ ?>
			<img src="<?php echo esc_attr($image); ?>" alt="<?php if(!empty($heading)){ echo esc_attr($heading); } ?>">
		<?php } ?>
		
		<?php if(!empty($heading)){ ?>
			<h4><?php echo esc_attr($heading); ?></h4>
		<?php } ?>
		
		<?php if(!empty($content)){ ?>
			<div class="mw-about-content">
				<?php echo apply_filters('the_content', $content); ?>
			</div>
		<?php } ?>
		
		<?php if($social_media == ""){
			naslaan_front_functions::naslaan_widgets_social_media();
		} ?>

        <?php
        echo $args['after_widget'];
    }

    public function form($instance)
    {
	
		$instance = wp_parse_args( (array) $instance, array( 'title' => '', 'heading' => '', 'content' => '', 'social_media' => '', 'image' => '' ) );

		$title = $instance['title'];
		
        $heading = $instance['heading'];
        
        $content = $instance['content'];
		
		$social_media = isset( $instance['social_media'] ) ? (bool) $instance['social_media'] : false;
		
		$image = '';
        if(isset($instance['image'])) { $image = $instance['image']; }
		
        ?>
		
		<p><label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title:', 'naslaan'); ?><input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($title); ?>" /></label></p>
		
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('image')); ?>"><?php esc_html_e('Image URL:', 'naslaan'); ?></label><br />
			<input type="text" class="widefat" name="<?php echo esc_attr($this->get_field_name('image')); ?>" id="<?php echo esc_attr($this->get_field_id('image')); ?>" value="<?php echo esc_attr($instance['image']); ?>" />
		</p>
		
		<p>
            <label for="<?php echo esc_attr($this->get_field_id('heading')); ?>"><?php esc_html_e('Heading:', 'naslaan'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('heading')); ?>" name="<?php echo esc_attr($this->get_field_name('heading')); ?>" type="text" value="<?php echo esc_attr($heading); ?>"/>
        </p>
		
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('content')); ?>"><?php esc_html_e('Content:', 'naslaan'); ?></label>
			<textarea class="widefat" rows="16" cols="20" id="<?php echo esc_attr($this->get_field_id('content')); ?>" name="<?php echo esc_attr($this->get_field_name('content')); ?>"><?php echo esc_textarea( $instance['content'] ); ?></textarea>
		</p>

		<p>
			<input class="checkbox" type="checkbox"<?php checked($social_media); ?> id="<?php echo esc_attr($this->get_field_id('social_media')); ?>" name="<?php echo esc_attr($this->get_field_name('social_media')); ?>" />
			<label for="<?php echo esc_attr($this->get_field_id('social_media')); ?>"><?php esc_html_e('Hide Social Media Icons', 'naslaan'); ?></label>
		</p>
		
    <?php
    }

    public function update($new_instance, $old_instance)
    {
        $instance = array();
		$instance['title'] = sanitize_text_field( $new_instance['title'] );
		$instance['image'] = $new_instance['image'];
        $instance['heading'] = (!empty($new_instance['heading'])) ? strip_tags($new_instance['heading']) : '';
        $instance['content'] = (!empty($new_instance['content'])) ? strip_tags($new_instance['content']) : '';
		$instance['social_media'] = isset( $new_instance['social_media'] ) ? (bool) $new_instance['social_media'] : false;
        return $instance;
    }

}

?>
