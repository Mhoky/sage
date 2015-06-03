<header class="banner" role="banner">
  <div class="container-fluid bgcolor">
    <div class="container">
      <div class="col-md-12 center titre">
        <a class="brand" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
  </div>
    <div class="col-md-12 center">
        <nav role="navigation">
          <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
          endif;
          ?>
        </nav>
      </div>
    </div>
  </div>
</header>
