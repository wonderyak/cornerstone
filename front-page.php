<?php get_template_part('inc/templates/page', 'header'); ?>
<?php if ( is_active_sidebar( 'home-widget-area' ) ) : ?>
	<?php dynamic_sidebar( 'home-widget-area' ); ?>
<?php endif; ?>
<?php if(has_action('woothemes_features')) { ?>
<section class="woo-feature-section">
	<?php do_action( 'woothemes_features', array( 'limit' => 3, 'per_row' => 3, 'link_title' => false, 'orderby' => 'menu_order', 'size' => 500 ) ); ?>
</section>	
<?php } else { ?>
	<p>Nothing to see here. Move along.</p>
<?php } ?>	