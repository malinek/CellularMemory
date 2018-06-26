<?php

  get_header(); ?>

  <div class="header" style="background-image: url(<?php echo get_theme_file_uri('/images/testimonials-header3.jpg') ?>);">
    <div class="header-headline">
    <h1>Welcome to our blog</h1>
    </div>
  </div>

  <div class="container">

  <?php
  while(have_posts()) {
    the_post(); ?>
    <div class="col">
      <h2><?php the_title(); ?></h2>
      
      <div class="col">
        <p><?php the_time('F j Y'); ?></p>
      </div>

      <div class="col">
        <?php the_post_thumbnail(); ?>
      </div>

      <div class="col generic-content">
        <?php the_content(); ?>
      </div>

    </div>
  <?php }
  
  ?>
</div><!-- end container -->

<?php

  get_footer();

?>