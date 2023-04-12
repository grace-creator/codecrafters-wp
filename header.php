<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />

  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <header>
    <div class="header-content">
      <h1>CODECRAFTERS</h1>
      <nav class="main-navigation">
        <?php
        wp_nav_menu( array(
          'theme_location' => 'primary-menu',
          'container'      => false,
          'fallback_cb'    => false,
        ) );
        ?>
      </nav>
    </div>
  </header>
