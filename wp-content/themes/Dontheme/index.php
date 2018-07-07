<!-- This is the blog page -->

<?php get_header(); ?>

<div class="hero" style="background-image: url(<?php echo get_theme_file_uri('/images/beautiful-blooming.jpg') ?>);">

  <!-- insert navBar function here -->
  
  <?php navBar(); ?>

  <div class="hero-headline">
    <h1>Welcome to our blog</h1>
  </div><!-- end hero-headline -->

</div><!-- end hero -->

<div class="container">

<?php
  while(have_posts()) {
    the_post(); ?>
    <div class="col">
      <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      
      <div class="col">
        <p><?php the_time('F j Y'); ?></p>
      </div>

      <div class="col generic-content">
        <?php the_excerpt(); ?>
        <p><a href="<?php the_permalink(); ?>" class="btn btn-default" role="button">Read more</a></p>
      </div>

    </div>
  <?php }
  echo paginate_links();
  ?>
</div><!-- end container -->

<?php get_footer();

?>

