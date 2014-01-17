<!-- content-image.php -->
<article <?php post_class(); ?>>
<?php $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'post-format-image' ); ?>
<img src="<?php echo $thumbnail['0']; ?>" />
<header style="background-image: url('<?php echo $thumbnail['0']; ?>') no-repeat;">
    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php get_template_part('templates/entry-meta'); ?>
  </header>
  <div class="entry-summary">
    <?php the_excerpt(); ?>
  </div>
</article>