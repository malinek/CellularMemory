<?php get_header(); ?>

<div class="hero" style="background-image: url(<?php the_field('hero_image'); ?>);">
  <div class="hero-headline">
    <h1><?php the_field('hero_title'); ?></h1>
  </div><!-- end hero-headline -->
</div><!-- end hero -->

<div class="container container-payment">

  <?php the_field('headline_payment_page'); ?>

  <?php the_field('first_paragraph_payments'); ?>

  <?php the_field('paypal_button_dollars'); ?>

  <?php the_field('paypal_button_euro'); ?>

  <?php
    while(have_posts()) {
    the_post();

    the_content();
    }
  ?>

</div><!-- end container -->

<div class="button-payment-page">
  <a href="<?php echo site_url() ?>" class="big-purple-button back-to-home">Back to Home</a>
</div>

<?php get_footer(); ?>