<?php get_header(); ?>

 <div class="hero" style="background-image: url(<?php echo get_theme_file_uri('/images/greenbubbles.jpg') ?>);">

  <div class="hero-headline">
    <h1>Donald Hanson</h1>
  </div><!-- end hero-headline -->

</div><!-- end hero -->

<div class="container about-don">
  <div class="row">
    <div class="col-sm-8">
      <p>
      <?php
        while(have_posts()) {
        the_post();

        the_content();
        }
        ?>
      </p>
    </div>
    <div class="col-sm-4">
      <img class="private-sessions-image img-responsive" src="<?php echo get_template_directory_uri() . '/images/Donwithapes2.jpg'; ?>" />
      </div>
    </div>
  </div><!--end row-->
</div><!-- end container -->

<?php get_footer(); ?>
