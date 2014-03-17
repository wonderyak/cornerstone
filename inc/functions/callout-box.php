<?php

class cornerstone_callout_box extends WP_Widget {

    // Create Widget
    function cornerstone_callout_box() {
        parent::WP_Widget(false, $name = 'Callout Box', array('description' => ''));
    }

    // Widget Content
    function widget($args, $instance) { 
        extract( $args );
        $cornerstone_callout_body = strip_tags($instance['cornerstone_callout_body']);
        $cornerstone_callout_button = strip_tags($instance['cornerstone_callout_button']);
        $cornerstone_button_link = strip_tags($instance['cornerstone_button_link']);
        ?>
		<section class="callout-box-container">
            <div class="callout-box row">
            	<div class="small-12 medium-8 large-8 columns">
            		<h4><?php echo $cornerstone_callout_body; ?></h4>
            	</div>
            	<div class="small-12 medium-4 large-4 columns">	
					<a href="<?php echo $cornerstone_button_link; ?>" class="button [radius round]"><?php echo $cornerstone_callout_button; ?></a>
				</div>	
            </div>
        </section>    
        <?php
     }

    // Update and save the widget
    function update($new_instance, $old_instance) {
        return $new_instance;
    }

    // If widget content needs a form
    function form($instance) {
        //widgetform in backend
        $cornerstone_callout_body = strip_tags($instance['cornerstone_callout_body']);
        $cornerstone_callout_button = strip_tags($instance['cornerstone_callout_button']);
        $cornerstone_button_link = strip_tags($instance['cornerstone_button_link']);
        ?>
        	<p>
                <label for="<?php echo $this->get_field_id('cornerstone_callout_body'); ?>">Text for Box: </label>
                <textarea class="widefat" id="<?php echo $this->get_field_id('cornerstone_callout_body'); ?>" name="<?php echo $this->get_field_name('cornerstone_callout_body'); ?>"><?php echo esc_attr($cornerstone_callout_body); ?></textarea>
            </p>
            <p>
                <label for="<?php echo $this->get_field_id('cornerstone_callout_button'); ?>">Button Text: </label>
                <input class="widefat" id="<?php echo $this->get_field_id('cornerstone_callout_button'); ?>" name="<?php echo $this->get_field_name('cornerstone_callout_button'); ?>" type="text" value="<?php echo esc_attr($cornerstone_callout_button); ?>" />
            </p>
            <p>
                <label for="<?php echo $this->get_field_id('cornerstone_button_link'); ?>">Button URL: </label>
                <input class="widefat" id="<?php echo $this->get_field_id('cornerstone_button_link'); ?>" name="<?php echo $this->get_field_name('cornerstone_button_link'); ?>" type="text" value="<?php echo esc_attr($cornerstone_button_link); ?>" />
            </p>
        <?php       
    }

}

register_widget('cornerstone_callout_box');
