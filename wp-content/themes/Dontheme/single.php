<?php get_header(); ?>

<div class="hero" style="background-image: url(<?php echo get_theme_file_uri('/images/hero-readmore-compressor.jpg') ?>);">
  <div class="hero-headline">
    <h1>Welcome to read more</h1>
  </div><!-- end hero-headline -->
</div><!-- end hero -->

<div class="container post-container">
  <?php
  while(have_posts()) {
    the_post(); ?>

  <div class="col-sm-12 post-single-content-col">
    <h1><?php the_title(); ?></h1>
    <h4>Posted on <?php the_time('F j Y'); ?></h4>
    <hr class="page-divider first-page-divider">
    <hr class="page-divider second-page-divider">
    <div class="col-sm-5 post-image-col-single">
      <?php the_post_thumbnail('medium', array('class' => 'post-image-single img-responsive')); ?>
    </div>
    <div class="col post-content-single">
      <p><?php the_content(); ?></p>
    </div>
  </div><!-- end col-sm-12 post-single-content-col -->
  <?php }
  ?>
</div><!-- end container -->

<div class="button-post-single">
  <button type="button" class="big-green-button"><a href="<?php echo site_url('/blog') ?>">Back to all posts</a></button>
</div>

<?php get_footer(); ?>