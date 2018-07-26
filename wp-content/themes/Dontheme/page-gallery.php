<?php get_header(); ?>

 <div class="hero hero-gallery" style="background-image: url(<?php echo get_theme_file_uri('/images/about-don-hero-compressor.jpg') ?>);">

  <div class="hero-headline">
    <h1>Gallery</h1>
  </div><!-- end hero-headline -->

</div><!-- end hero -->

<?php
  while(have_posts()) {
  the_post();

  the_content();
  }
?>


<?php get_footer(); ?>