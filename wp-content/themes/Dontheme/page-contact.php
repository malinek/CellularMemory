<?php get_header(); ?>

 <div class="hero" style="background-image: url(<?php echo get_theme_file_uri('/images/contact-background.jpg') ?>);">

  <!-- insert navBar function here -->
  
  <?php navBar(); ?>

  <div class="hero-headline">
    <h1>Contact</h1>
  </div><!-- end hero-headline -->

</div><!-- end hero -->

<?php the_content(); ?>

<?php get_footer(); ?>