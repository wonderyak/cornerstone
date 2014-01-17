<?php get_template_part('inc/templates/head'); ?>
<body <?php body_class(); ?>>

  <!--[if lt IE 8]>
    <div class="alert alert-warning">
      <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'cornerstone'); ?>
    </div>
  <![endif]-->
  <?php get_template_part('inc/templates/header'); ?>
        <?php include cornerstone_template_path(); ?>
  <?php get_template_part('inc/templates/footer'); ?>