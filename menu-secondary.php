<nav class="" role="navigation">
  <?php
      wp_nav_menu( array(
          'menu'              => 'secondary',
          'theme_location'    => 'secondary',
          'depth'             => 2,
          'container'         => 'div',
          'container_class'   => '',
          'menu_class'        => 'nav nav-pills',
          'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
          'walker'            => new wp_bootstrap_navwalker())
      );
  ?>
</nav>