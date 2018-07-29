<?php get_header(); ?>

<div class="hero" style="background-image: url(<?php the_field('hero_image'); ?>);">
  <div class="hero-headline">
    <h1><?php the_field('hero_title'); ?></h1>
  </div><!-- end hero-headline -->
</div><!-- end hero -->

<div class="container about-don-container">
  
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
