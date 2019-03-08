<?php get_header(); ?>

<div class="hero" style="background-image: url(<?php echo get_theme_file_uri('/images/hero-workshops-compressor.jpg') ?>);">

  <div class="hero-headline">
    <h1>More info about this workshop</h1>
  </div><!-- end hero-headline -->

</div><!-- end hero -->

<div class="container container-workshops workshops-box container-single-workshop">

<?php
  while(have_posts()) {
    the_post();
?>

  <img class="calender-icon" src="<?php echo get_template_directory_uri() . '/images/calender-icon2.png'; ?>" />
  <h3 class="start-date"><?php
  $workshopStartDate = new DateTime(get_field('workshop_start_date'));
  echo $workshopStartDate->format('j F Y')
  ?> -<br> <?php
  $workshopEndDate = new DateTime(get_field('workshop_end_date'));
  echo $workshopEndDate->format('j F Y')
  ?></h3>
  <h1><?php the_title(); ?></h1>

  <?php the_post_thumbnail('medium-large', 
    array( 'class' => "image-single-workshop img-responsive")); ?>

  <h4><?php the_field('location_workshop'); ?></h4>

  <h4><strong><?php the_field('cost_workshop'); ?></strong></h4>

  <?php the_field('paypal_button_workshops'); ?>

  <h4 class="further-information"><?php the_field('further_information'); ?></h4>

  <h4><?php the_content(); ?></h4>

<?php }
?>

</div><!-- end container -->

<div class="button-workshop-single">
<<<<<<< HEAD
  <a href="<?php echo get_post_type_archive_link('workshop'); ?>" class="big-green-button">Back to all workshops</a>
</div>

<?php get_footer(); ?>
=======
  <button type="button" class="big-green-button"><a href="<?php echo get_post_type_archive_link('workshop'); ?>">Back to all workshops</a></button>
</div>

<?php get_footer(); ?>
>>>>>>> b032d36b758f5ffcb54898073be9b3f9294dea77
