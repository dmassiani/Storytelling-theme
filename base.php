<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>>

  <!--[if lt IE 8]>
    <div class="alert alert-warning">
      <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'roots'); ?>
    </div>
  <![endif]-->

  <?php
    do_action('get_header');
    if( is_front_page() ){
      get_template_part('templates/header');
    }else{
      get_template_part('templates/header-docs');
    }
  ?>

  <main class="main" role="main">
    <?php include roots_template_path(); ?>
  </main>

  <?php wp_footer(); ?>

  <script src="<?php echo get_template_directory_uri() ?>/assets/js/storytelling.js"></script>
  <?php
  if( is_front_page() ):
  ?>
  <script data-main="<?php echo get_template_directory_uri() ?>/assets/js/app" src="<?php echo get_template_directory_uri() ?>/assets/components/requirejs/require.js"></script>
  <?php
  else:
  ?>
  <script data-main="<?php echo get_template_directory_uri() ?>/assets/js/docs" src="<?php echo get_template_directory_uri() ?>/assets/components/requirejs/require.js"></script>
  <?php
  endif;
  ?>
</body>
</html>
