<?php get_header(); ?>

<div class="hero" style="background-image: url(<?php the_field('hero_image'); ?>);">
  <div class="hero-headline">
    <h1><?php the_field('hero_title'); ?></h1>
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

<div class="button-tcm-page">
<<<<<<< HEAD
  <a href="<?php echo site_url() ?>" class="big-purple-button back-to-home">Back to Home</a>
=======
  <button type="button" class="big-purple-button"><a href="<?php echo site_url() ?>">Back to Home</a></button>
>>>>>>> b032d36b758f5ffcb54898073be9b3f9294dea77
</div>

<?php get_footer(); ?>