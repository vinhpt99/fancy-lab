<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
  <title><?php bloginfo('name'); ?> | <?php bloginfo('description'); ?></title>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <div id="page" class="site">
    <header>
      <section class="search">
        <div class="container">
          <div class="text-center d-md-flex align-items-center"><?php get_search_form(); ?></div>
        </div>
      </section>
      <section class="top-bar">
        <div class="container">
          <div class="row">
            <div class="brand col-md-3 col-12 col-lg-2 text-center text-md-left">
              <a href=<?php echo home_url('/') ?>">
                <?php if (has_custom_logo()) : ?>
                  <?php the_custom_logo(); ?>
                <?php else: ?>
                  <p class="site-title"><?php bloginfo('title'); ?></p>
                  <span><?php bloginfo('description'); ?></span>
                <?php endif ?>
              </a>
            </div>
            <div class="second-column col-md-9 col-12 col-lg-10">
              <div class="row">
                <?php if (class_exists('WooCommerce')) : ?>
                  <div class="account col-12">
                    <div class="navbar-expand">
                      <ul class="navbar-nav float-left">
                        <?php if (is_user_logged_in()) : ?>
                          <li>
                            <a href="<?php echo esc_url(get_permalink(get_option('woocommerce_myaccount_page_id')));  ?>" class="nav-link">My Account</a>
                          </li>
                          <li>
                            <a href="<?php echo esc_url(wp_logout_url(get_permalink(get_option('woocommerce_myaccount_page_id'))));  ?>" class="nav-link">Logout</a>
                          </li>
                        <?php else: ?>
                          <li>
                            <a href="<?php echo esc_url(get_permalink(get_option('woocommerce_myaccount_page_id')));  ?>" class="nav-link">Register</a>
                          </li>
                        <?php endif; ?>
                      </ul>
                    </div>
                    <div class="cart text-right">
                      <a href="<?php echo wc_get_cart_url(); ?>"><span class="cart-icon"></span></a>
                      <span class="items"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
                    </div>
                  </div>
                <?php endif; ?>
                <div class="col-12">
                  <nav class="main-menu navbar navbar-expand-md navbar-light" role="navigation">
                    <div class="container">
                      <!-- Mobile display -->
                      <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <?php
                      wp_nav_menu(array(
                        'container' => 'div',
                        'theme_location' => 'fancy_lab_main_menu',
                        'depth' => 3,
                        'container' => false,
                        'menu_class' => 'nav navbar-nav',
                        'walker' => new Fancy_Lab_Walker_Menu()
                      ));
                      ?>
                    </div>
                  </nav>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </header>