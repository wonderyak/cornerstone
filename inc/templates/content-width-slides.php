<!-- content-width-slides.php -->
<li>
<?php $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'cornerstone-container-width-orbit' ); ?>
<img src="<?php echo $thumbnail['0']; ?>" />
<div class="orbit-caption"><h1><?php the_title(); ?></h1></div>
</li>