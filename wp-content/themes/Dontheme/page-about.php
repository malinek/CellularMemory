<?php get_header(); ?>

<div class="hero" style="background-image: url(<?php the_field('hero_image'); ?>);">
  <div class="hero-headline">
    <h1><?php the_field('hero_title'); ?></h1>
  </div><!-- end hero-headline -->
</div><!-- end hero -->

<div class="container container-about">

  <h2>Please read more here:</h2>

  <ul>
    <li <?php if (is_page('donald-hanson')) echo 'class="current-menu-item"'; ?>><a href="<?php echo site_url('/about/donald-hanson') ?>">Don Hanson</a></li>
<<<<<<< HEAD
    <li <?php if (is_page('tcm')) echo 'class="current-menu-item"'; ?>><a href="<?php echo site_url('/about/tcm') ?>">TWSL</a></li>
=======
    <li <?php if (is_page('tcm')) echo 'class="current-menu-item"'; ?>><a href="<?php echo site_url('/about/tcm') ?>">TCM</a></li>
>>>>>>> b032d36b758f5ffcb54898073be9b3f9294dea77
    <li <?php if (is_page('testimonials')) echo 'class="current-menu-item"' ?>><a href="<?php echo site_url('/about/testimonials') ?>">Testimonials</a></li>
    <li <?php if (is_page('payment')) echo 'class="current-menu-item"'; ?>><a href="<?php echo site_url('/about/payment') ?>">Payment</a></li>
  </ul>

</div>


<?php get_footer(); ?>