<?php get_header(); ?>

<div class="hero" style="background-image: url(<?php echo get_theme_file_uri('/images/hero-workshops-compressor.jpg') ?>);">

  <div class="hero-headline">
    <h1>Upcoming Workshops</h1>
  </div><!-- end hero-headline -->

</div><!-- end hero -->

<div class="container container-workshops">
 
  <?php
  while(have_posts()) {
    the_post(); ?>
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
        <p><?php the_content(); ?></p>
        <button type="button" class="green-button"><a href="<?php the_permalink(); ?>">Read more</a></button>
      </div>
     
    </div><!-- end row -->

   <?php }
   ?> 

  <?php echo paginate_links(); ?>

  </div><!-- end row workshop-box -->

</div><!-- end container-->

<?php get_footer(); ?>