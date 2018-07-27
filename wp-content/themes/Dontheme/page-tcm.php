<?php get_header(); ?>

  <div class="hero" style="background-image: url(<?php echo get_theme_file_uri('/images/barley-field-hero-compressor.jpg') ?>);">

    <div class="hero-headline">
      <h1>Transforming Cellular Memory</h1>
    </div><!-- end hero-headline -->

  </div><!-- end hero -->

  <div class="container container-tcm">

    <?php
      while(have_posts()) {
      the_post();

      the_content();
      }
    ?>

  </div><!-- end container -->

<?php get_footer(); ?>