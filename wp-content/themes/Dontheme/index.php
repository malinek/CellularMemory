<!-- THIS IS THE BLOG ARCHIVE PAGE -->

<?php get_header(); ?>

<div class="hero" style="background-image: url(<?php echo get_theme_file_uri('/images/blog3.jpg') ?>);">
  <div class="hero-headline">
    <h1>Welcome to our blog</h1>
  </div><!-- end hero-headline -->
</div><!-- end hero -->

<div class="container blog-container">
  <?php
    while(have_posts()) {
      the_post(); ?>
  <div class="row blog-row">

    <div class="col-sm-4 blog-image-col">
      <?php the_post_thumbnail('medium', array('class' => 'blog-image img-responsive')); ?>
    </div>

    <div class="col-sm-8 blog-archive-content-col">
      <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <h4>Posted on <?php the_time('F j Y'); ?></h4>
      <div class="col generic-blog-content">
        <p><?php the_excerpt(); ?></p>
        <a href="<?php the_permalink(); ?>" class="btn green-button" role="button">Read more</a>
      </div>
    </div>

  </div><!-- end row -->
    
    <?php }
    echo paginate_links();
    ?>
    
</div><!-- end container -->

<?php get_footer();

?>

