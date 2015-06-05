<?php
/**
 * Template Name: Home Template
 */
?>

<?php get_template_part('templates/home', ''); ?>
    <style>
      body {
        background-image: url('<?php the_field('background'); ?>');
      }
    </style>