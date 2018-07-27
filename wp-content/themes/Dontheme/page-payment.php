<?php get_header(); ?>

  <div class="hero" style="background-image: url(<?php echo get_theme_file_uri('/images/hero-purpleflowers-compressor.jpg') ?>);">

    <div class="hero-headline">
      <h1>Payment for bookings</h1>
    </div><!-- end hero-headline -->

  </div><!-- end hero -->

  <div class="container container-payment">

    <?php
      while(have_posts()) {
      the_post();

      the_content();
      }
    ?>
   
  </div>

  <?php get_footer(); ?>