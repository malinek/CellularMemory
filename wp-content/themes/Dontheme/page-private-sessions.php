<?php get_header(); ?>

<div class="hero" style="background-image: url(<?php the_field('hero_image'); ?>);">
  <div class="hero-headline">
    <h1><?php the_field('hero_title'); ?></h1>
  </div><!-- end hero-headline -->
</div><!-- end hero -->

<div class="container about-don-container">

  <div class="col-sm-8 about-don-content-col">
    <p><?php
      while(have_posts()) {
      the_post();

      the_content();
      }
      ?></p>
  </div>

  <div class="col-sm-4">

    <div class="about-don-image-col">
      <?php the_post_thumbnail('medium', array('class' => 'about-don-image img-responsive')); ?>
    </div>

    <div class="book-session">
      <h3><?php the_field('title_book_your_session'); ?></h3>
      <h4><?php the_field('e-mail_private_sessions'); ?></h4>
      <h4><?php the_field('skype_address_private_sessions'); ?></h4>
      <h4><?php the_field('payment_options_private_sessions'); ?></h4>
      <h4><strong><?php the_field('cost_session'); ?></strong></h4>
      <div class="paypal-button-private-sessions">
        <?php the_field('private_sessions_paypal_button'); ?>
      </div>
    </div>
  
  </div>

</div><!-- end container -->

<?php get_footer(); ?>

