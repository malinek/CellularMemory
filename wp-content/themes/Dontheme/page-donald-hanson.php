<?php get_header(); ?>

 <div class="hero" style="background-image: url(<?php echo get_theme_file_uri('/images/about-don-hero-compressor.jpg') ?>);">

  <div class="hero-headline">
    <h1>Donald Hanson</h1>
  </div><!-- end hero-headline -->

</div><!-- end hero -->

<div class="container about-don">
  
    <div class="col-sm-8 about-don-content-col">
      <p>
      <?php
        while(have_posts()) {
        the_post();

        the_content();
        }
        ?>
      </p>
    </div>
    <div class="col-sm-4 about-don-image-col">
      <?php the_post_thumbnail('medium', array('class' => 'about-don-image img-responsive')); ?>
    </div>
 
</div><!-- end container -->

<?php get_footer(); ?>
