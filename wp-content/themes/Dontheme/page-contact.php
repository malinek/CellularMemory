<?php get_header(); ?>

<div class="hero" style="background-image: url(<?php the_field('hero_image'); ?>);">
  <div class="hero-headline">
    <h1><?php the_field('hero_title'); ?></h1>
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