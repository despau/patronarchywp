<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="http:gmpg.org/xfn/11">
    <title>WP Patronarchy</title>
    <?php wp_head(); ?>
</head>
  <body <?php body_class(); ?>>
        <div id="page">
          <nav id="site-navigation" class="main-navigation" role="navigation">
              <?php 
                  $args = [
                      'theme_location' => 'main-menu'
                  ];

                  wp_nav_menu( $args );
              ?>
          </nav>
        