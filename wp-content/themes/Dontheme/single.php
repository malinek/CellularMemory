<?php get_header(); ?>

<div class="hero" style="background-image: url(<?php echo get_theme_file_uri('/images/blogsingle.jpg') ?>);">

  <div class="hero-headline">
    <h1>Welcome to our blog</h1>
  </div><!-- end hero-headline -->

</div><!-- end hero -->

<div class="container blog-container">
  <?php
  while(have_posts()) {
    the_post(); ?>

  <div class="col-sm-12 blog-single-content-col">
    <h1><?php the_title(); ?></h1>
    
    <div class="col">
      <h4>Posted on <?php the_time('F j Y'); ?></h4>
    </div>
      <hr class="page-divider first-page-divider">
      <hr class="page-divider second-page-divider">
    <div class="col-sm-4 blog-image-col-single">
      <?php the_post_thumbnail('medium', array('class' => 'blog-image-single img-responsive')); ?>
    </div>
    <div class="col generic-blog-content-single">
      <p><?php the_content(); ?></p>
    </div>
  </div>
  <?php }
  ?>
</div><!-- end container -->

<div class="button-blog-page">
  <a href="<?php echo site_url('/blog') ?>" class="btn main-button" role="button">Back to all posts</a>
</div>

<?php

  get_footer();

?>