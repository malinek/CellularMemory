<?php get_header(); ?>

<div class="hero" style="background-image: url(<?php echo get_theme_file_uri('/images/vlog3-compressor.jpg') ?>);">

  <div class="hero-headline">
    <h1>Welcome to our vlog</h1>
  </div><!-- end hero-headline -->

</div><!-- end hero -->

<div class="container container-vlog">
 
  <?php
    while(have_posts()) {
      the_post();
  ?>

  <div class="row vlog-box">
    
    <div class="col-sm-12 date-column">
      <h1><?php the_title(); ?></h1>
      <h4>Posted on <?php the_time('F j Y'); ?></h4>
      <?php the_content(); ?>
      <p><?php the_excerpt(); ?></p>
    </div>
   
  </div><!-- end row vlog-box-->

  <?php }
  ?> 

  <?php echo paginate_links(); ?>

</div><!-- end container container-vlog -->

<div class="button-post-single">
  <a href="<?php echo site_url('/vlog') ?>" class="big-green-button back-to-home">Back to Vlog</a>
</div>

<?php get_footer(); ?>
