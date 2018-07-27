<?php get_header(); ?>

 <div class="hero" style="background-image: url(<?php echo get_theme_file_uri('/images/Hero-private-sessions-compressor.jpg') ?>);">

  <div class="hero-headline">
    <h1>Private Sessions</h1>
  </div><!-- end hero-headline -->

</div><!-- end hero -->

<div class="container about-don">
  <div class="col-sm-8 about-don-content-col">
    <p><?php
      while(have_posts()) {
      the_post();

      the_content();
      }
      ?></p>
  </div>

  <div class="col-sm-4 private-sessions-col-2">

    <div class="about-don-image-col">
      <?php the_post_thumbnail('medium', array('class' => 'about-don-image img-responsive')); ?>
    </div>

    <div class="book-session">
      <h3>To book your private session</h3>
      <h4>E-mail: info@donhanson.com (business manager)</h4>
      <h4>Donald's skype address: donhanson-texas</h4>
      <h4>Pay by cash / check or money order in the mail / paypal</h4>
      <h4><strong><?php the_field('cost_session'); ?></strong></h4>
       <p>Paypal button goes here</p>
    </div>

  </div>

</div><!-- end container -->

<?php get_footer(); ?>