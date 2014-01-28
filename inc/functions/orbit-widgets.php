<?php 

class cornerstone_content_width_orbit extends WP_Widget {
	function cornerstone_content_width_orbit() {
		parent::WP_Widget(false, 'Content Width Orbit');
	}
function form($instance) {
		// outputs the options form on admin
	}
function update($new_instance, $old_instance) {
		// processes widget options to be saved
		return $new_instance;
	}
function widget($args, $instance) { ?>
<div class="container orbit-container content-width" >
	<div class="content row">
		<main class="main small-12 medium-12 large-12 columns" role="main">
		<?php // WP_Query arguments
		$args = array (
		  'post_type'              => 'cornerstone_orbit',
		  'pagination'             => false,
		  'order'                  => 'DESC',
		  'orderby'                => 'menu_order',
		);
		// The Query
		$the_query = new WP_Query( $args ); ?>
		<section <?php post_class('orbit-slider'); ?>>
		<?php if ( $the_query->have_posts() ) : ?>
		<!-- the loop -->
		<ul class="example-orbit content-width-orbit" data-orbit>
		<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
		    <?php get_template_part('inc/templates/orbit-slider'); ?>
		<?php endwhile; ?>
		</ul>
		<!-- end of the loop -->
		<!-- pagination here -->
		<?php wp_reset_postdata(); ?>
		</section>
		<?php else:  ?>
		  <p><?php _e( 'Please add some slides to enable the orbit slider.' ); ?></p>
		<?php endif; ?>
		</main><!-- /.main -->
	</div><!-- /.content -->
</div><!-- /.wrap -->		
	<?php }
}
register_widget('cornerstone_content_width_orbit');

class cornerstone_container_width_orbit extends WP_Widget {
	function cornerstone_container_width_orbit() {
		parent::WP_Widget(false, 'Container Width Orbit');
	}
function form($instance) {
		// outputs the options form on admin
	}
function update($new_instance, $old_instance) {
		// processes widget options to be saved
		return $new_instance;
	}
function widget($args, $instance) { ?>
<div class="container orbit-container container-width">
		<?php // WP_Query arguments
		$args = array (
		  'post_type'              => 'cornerstone_orbit',
		  'pagination'             => false,
		  'order'                  => 'DESC',
		  'orderby'                => 'menu_order',
		);
		// The Query
		$the_query = new WP_Query( $args ); ?>
		<section <?php post_class('orbit-slider'); ?>>
		<?php if ( $the_query->have_posts() ) : ?>
		<!-- the loop -->
		<ul class="example-orbit container-width-orbit" data-orbit>
		<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
		    <?php get_template_part('inc/templates/orbit-slider'); ?>
		<?php endwhile; ?>
		</ul>
		<!-- end of the loop -->
		<!-- pagination here -->
		<?php wp_reset_postdata(); ?>
		</section>
		<?php else:  ?>
		  <p><?php _e( 'Please add some slides to enable the orbit slider.' ); ?></p>
		<?php endif; ?>
</div> <!-- /. container -->		
	<?php }
}
register_widget('cornerstone_container_width_orbit');