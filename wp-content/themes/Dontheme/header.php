<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>

  <!-- NAVIGATION MENU -->
 
  <section class="navigation">
  <div class="nav-container">
    <div class="brand">
      <a href="<?php echo site_url() ?>">Home</a>
    </div>
    <nav>
      <div class="nav-mobile">
        <a id="nav-toggle" href="#!"><span></span></a>
      </div>
      <ul class="nav-list">
        <li>
          <a href="#!">About</a>
          <ul class="nav-dropdown">
            <li>
              <a href="<?php echo site_url('/about/donald-hanson') ?>">Don Hanson</a>
            </li>
            <li>
              <a href="#!">TCM</a>
            </li>
            <li>
              <a href="<?php echo site_url('/about/testimonials') ?>">Testimonials</a>
            </li>
            <li>
              <a href="#!">Payment</a>
            </li>
            <li>
              <a href="#!">Deutsche</a>
            </li>
            <li>
              <a href="#!">Gallery</a>
            </li>
          </ul>
        </li>
        <li>
          <a href="<?php echo site_url('/contact') ?>">Contact</a>
        </li>
        <li <?php if (get_post_type() == 'event') echo 'class="current-menu-item"'; ?>>
          <a href="<?php echo get_post_type_archive_link('workshop') ?>">Workshops</a>
        </li>
        <li>
          <a href="<?php echo site_url('/private-sessions') ?>">Private Sessions</a>
        </li>
        <li>
          <a href="<?php echo site_url('/blog') ?>">Blog</a>
        </li>
        <li>
          <a href="#!">Publications</a>
        </li>
      </ul>
    </nav>
  </div>
  </section>
  

  


  