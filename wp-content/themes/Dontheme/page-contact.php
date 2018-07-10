<?php get_header(); ?>

 <div class="hero" style="background-image: url(<?php echo get_theme_file_uri('/images/contact-background.jpg') ?>);">

  <div class="hero-headline">
    <h1>Please get in touch</h1>
  </div><!-- end hero-headline -->

</div><!-- end hero -->

<div class="container contact-content">
  <h3>For general inquries, bookings, private sessions or if you want to create a workshop in your area, please send us an email.</h3>

  <?php
    while(have_posts()) {
    the_post();

    the_content();
    }
  ?>

</div>

<?php get_footer(); ?>