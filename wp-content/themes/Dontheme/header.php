<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>

  <!-- NAVIGATION MENU -->
  <header>
    <div class="container">
      <a href="<?php echo site_url() ?>"><img src="<?php echo get_theme_file_uri('/images/logo.png')?>" class="logo"></a>

      <nav class="site-nav">
        <ul>        
          <li class="dropdown-button" <?php if (is_page('about')) echo 'class="current-menu-item"'; ?>><a href="#">About <i class="fa fa-chevron-down"></i></a>
            <ul class="sub-menu">
              <li <?php if (is_page('donald-hanson')) echo 'class="current-menu-item"'; ?>><a href="<?php echo site_url('/about/donald-hanson') ?>">Don Hanson</a></li>
              <li <?php if (is_page('tcm')) echo 'class="current-menu-item"'; ?>><a href="<?php echo site_url('/about/tcm') ?>">TCM</a></li>
              <li <?php if (is_page('testimonials')) echo 'class="current-menu-item"' ?>><a href="<?php echo site_url('/about/testimonials') ?>">Testimonials</a></li>
              <li <?php if (is_page('payment')) echo 'class="current-menu-item"'; ?>><a href="<?php echo site_url('/about/payment') ?>">Payment</a></li>
            </ul>
          </li>
          <li <?php if (is_page('contact')) echo 'class="current-menu-item"'; ?>><a href="<?php echo site_url('/contact') ?>">Contact</a></li>
          <li <?php if (get_post_type() == 'workshop') echo 'class="current-menu-item"'; ?>>
          <a href="<?php echo get_post_type_archive_link('workshop') ?>">Workshops</a>
          <li <?php if (is_page('private-sessions')) echo 'class="current-menu-item"'; ?>><a href="<?php echo site_url('/private-sessions') ?>">Private Sessions</a></li>
          <li <?php if (get_post_type() == 'post') echo 'class="current-menu-item"'; ?>><a href="<?php echo site_url('/blog') ?>">Read More</a></li>
          <li <?php if (is_page('vlog')) echo 'class="current-menu-item"'; ?>><a href="<?php echo site_url('/vlog') ?>">Vlog</a></li>
          <li <?php if (is_page('gallery')) echo 'class="current-menu-item"'; ?>><a href="<?php echo site_url('/gallery') ?>">Gallery</a></li>
          <li <?php if (get_post_type() == 'deutsche') echo 'class="current-menu-item"'; ?>><a href="<?php echo site_url('/deutsch') ?>">Deutsch</a></li>
        </ul> 
      </nav>
    
      <div class="menu-toggle">
        <div class="hamburger"></div>
      </div>
    
    </div><!-- end container -->
  </header>
  
  





  


  