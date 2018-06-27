
<?php get_header(); ?>

<div class="hero" style="background-image: url(<?php echo get_theme_file_uri('/images/bubbles-background.jpg') ?>);">

  <!-- insert navBar function here -->
  <?php navBar(); ?>

  <div class="hero-headline">
    <h1>More info about this workshop</h1>
  </div><!-- end hero-headline -->

</div><!-- end hero -->

<p><a href="<?php echo get_post_type_archive_link('workshop'); ?>">Workshops Home</a></p>

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