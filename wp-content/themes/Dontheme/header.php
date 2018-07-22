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
          <li class="dropdown-button"><a href="#!">About <i class="fa fa-chevron-down"></i></a>
            <ul class="sub-menu">
              <li><a href="<?php echo site_url('/about/donald-hanson') ?>">Don Hanson</a></li>
              <li><a href="#">TCM</a></li>
              <li><a href="<?php echo site_url('/about/testimonials') ?>">Testimonials</a></li>
              <li><a href="#">Payment</a></li>
            </ul>
          </li>
          <li><a href="<?php echo site_url('/contact') ?>">Contact</a></li>
          <li><a href="<?php echo get_post_type_archive_link('workshop') ?>">Workshops</a></li>
          <li><a href="<?php echo site_url('/private-sessions') ?>">Private Sessions</a></li>
          <li><a href="<?php echo site_url('/blog') ?>">Read More</a></li>
          <li><a href="">Gallery</a></li>
          <li><a href="<?php echo site_url('/deutsche') ?>">Deutsche</a></li>
        </ul> 
      </nav>
    
      <div class="menu-toggle">
        <div class="hamburger"></div>
      </div>
    
    </div><!-- end container -->
  </header>
  
  





  


  