<!-- THIS IS THE BLOG ARCHIVE PAGE -->

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
  <div class="row post-row">
    <div class="col-sm-4 post-image-col">
      <?php the_post_thumbnail('medium', array('class' => 'post-image img-responsive')); ?>
    </div>
    <div class="col-sm-8 col post-content-archive-col">
      <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <h4>Posted on <?php the_time('F j Y'); ?></h4>
      <div class="col post-content-archive">
        <p><?php the_excerpt(); ?></p>
        <a href="<?php the_permalink(); ?>" class="green-button">Read more</a>
      </div>
    </div>
  </div><!-- end row post-row-->

  <hr class="divider">
  
  <?php }
  echo paginate_links();
  ?>
    
</div><!-- end container -->

<?php get_footer(); ?>

