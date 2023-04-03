<div class="sidebar-container">
  <aside id="sidebar">
    <?php
      wp_nav_menu(array(
        'theme_location' => 'sidebar-menu',
        'container' => 'nav',
        'container_id' => 'sidebar-menu',
        'fallback_cb' => false,
      ));
    ?>
  </aside>
</div>
