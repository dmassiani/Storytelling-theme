<?php
/*
Template Name: Custom Template
*/
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <h1>Template New</h1>
  <?php the_story(); ?>
<?php endwhile; ?>
