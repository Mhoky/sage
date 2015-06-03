<div class="index">
<?php get_template_part('templates/page', 'header'); ?>

  <?php if (!have_posts()) : ?>
    <div class="alert alert-warning">
      <?php _e('Sorry, no results were found.', 'sage'); ?>
    </div>
    <?php get_search_form(); ?>
  <?php endif; ?>

  <?php while (have_posts()) : the_post(); ?>
  <!--html pour chaque post-->
    <?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
  <?php endwhile; ?>

  <?php the_posts_navigation(); ?>

</div>
<style type="text/css">

<?php
    $image = get_post_meta($post->ID, 'bg', true);
    $titlecolor = get_post_meta($post->ID, 'titleColor', true);
    $bgcolor = get_post_meta($post->ID, 'bgcolor', true);
?>

.index {
    background-color: <?php echo $bgcolor ?>;
    background-image: url('<?php sage('stylesheet_directory'); ?>/<?php echo $image ?>');
}

</style>
