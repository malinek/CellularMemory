<?php get_header(); ?>

<div class="hero" style="background-image: url(<?php echo get_theme_file_uri('/images/hero-workshops-compressor.jpg') ?>);">

  <div class="hero-headline">
    <h1>Upcoming Workshops</h1>
  </div><!-- end hero-headline -->

</div><!-- end hero -->

<div class="container container-workshops">
 
  <?php
    while(have_posts()) {
      the_post();
  ?>

  <div class="row workshops-box">
    
    <div class="col-sm-12 date-column">
      <img class="calender-icon" src="<?php echo get_template_directory_uri() . '/images/calender-icon2.png'; ?>" />
      <h3 class="start-date"><?php
      $workshopStartDate = new DateTime(get_field('workshop_start_date'));
      echo $workshopStartDate->format('j F Y')
      ?> -<br> <?php
      $workshopEndDate = new DateTime(get_field('workshop_end_date'));
      echo $workshopEndDate->format('j F Y')
      ?></h3>
    </div>
   
    <div class="col-sm-12 content-workshops">
      <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
      <p><?php the_field('further_information'); ?></p>
<<<<<<< HEAD
      <a href="<?php the_permalink(); ?>" class="green-button">Read more</a>
    </div>

=======
      <button type="button" class="green-button"><a href="<?php the_permalink(); ?>">Read more</a></button>
    </div>
   
>>>>>>> b032d36b758f5ffcb54898073be9b3f9294dea77
  </div><!-- end row workshops-box-->

  <?php }
  ?> 

  <?php echo paginate_links(); ?>

  </div><!-- end row workshop-box -->

<?php get_footer(); ?>