<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
  </head>
   <body <?php body_class(); ?>>

  <!-- Navigation Menu -->

  <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    
    <!-- Fix menu overlap -->
    <?php if ( is_admin_bar_showing() ) echo '<div style="min-height: 32px;"></div>'; ?>

    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div><!-- end navbar-header -->

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="navbar">
        <ul class="nav navbar-nav">
          <li><a href="<?php echo site_url() ?>">Home</a></li>
          <li class="dropdown">
            <a href="<?php echo site_url('/about') ?>" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="<?php echo site_url('/about/donald-hanson') ?>">Donald Hanson</a></li>
              <li><a href="<?php echo site_url('/about/tcm') ?>">TCM</a></li>
              <li><a href="<?php echo site_url('/about/testimonials') ?>">Testimonials</a></li>
              <li><a href="#">Publications</a></li>
            </ul>
          </li>
          <li <?php if (is_page('contact')) echo 'class="current-menu-item"' ?>><a href="<?php echo site_url('/contact')?>">Contact</a></li>
          <li><a href="#">Workshops</a></li>
          <li><a href="#">Private Sessions</a></li>
          <li><a href="#">Blog</a></li>
          <li><a href="#">Gallery</a></li>
          <li><a href="#">Deutsche</a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>

<!--
  <div class="topnav" id="myTopnav">
    <a href="<?php echo site_url() ?>" class="active">Home</a>
    <div class="dropdown">
      <button class="dropbtn"><a href="<?php echo site_url('/about') ?>">About 
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="<?php echo site_url('/about/donald-hanson') ?>">Donald Hanson</a>
        <a href="<?php echo site_url('/about/tcm') ?>">TCM</a>
        <a href="#">Testimonials</a>
        <a href="#">Publications</a>
      </div>
    </div>
    <a href="<?php echo site_url('/contact')?>">Contact</a>
    <a href="#workshops">Workshops</a>
    <a href="#contact">Private Sessions</a>
    <a href="#contact">Blog</a>
    <a href="#contact">Gallery</a>
    <a href="#contact">Deutsche</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
  </div>

-->

  <header class="site-header">
  </header>

  