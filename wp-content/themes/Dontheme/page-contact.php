<?php get_header(); ?>

 <div class="hero" style="background-image: url(<?php echo get_theme_file_uri('/images/hero-contact-compressor.jpg') ?>);">

  <div class="hero-headline">
    <h1>Please get in touch</h1>
  </div><!-- end hero-headline -->

</div><!-- end hero -->

<div class="container contact-content">
  
  <p><?php
    while(have_posts()) {
    the_post();

    the_content();
    }
  ?></p>

</div>

<?php get_footer(); ?>