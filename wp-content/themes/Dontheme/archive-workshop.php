<?php get_header(); ?>

<div class="hero" style="background-image: url(<?php echo get_theme_file_uri('/images/bubbles-background.jpg') ?>);">

  <!-- insert navBar function here -->
  
  <?php navBar(); ?>

  <div class="hero-headline">
    <h1>Upcoming Workshops</h1>
  </div><!-- end hero-headline -->

</div><!-- end hero -->

<div class="container">

<?php
  while(have_posts()) {
    the_post(); ?>
    <div class="col-sm-4 workshop-date">
          <span>AUG 31 - SEP 5, 2018</span>
        </div>
        <div class="col-sm-8">
          <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
          <p><?php echo wp_trim_words(get_the_content(), 25); ?><a href="<?php the_permalink(); ?>"> Read more</a></p>
        </div>
  <?php }
  echo paginate_links();
  ?>
</div><!-- end container -->

<?php get_footer();

?>