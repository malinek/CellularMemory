<?php get_header(); ?>

<div class="hero" style="background-image: url(<?php echo get_theme_file_uri('/images/butterfly-background.jpg') ?>);">

  <!-- insert navBar function here -->
  
  <?php navBar(); ?>

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
        <button type="button" class="btn btn-default"><a href="<?php the_permalink(); ?>">Read more</a></button>
      </div>


    
      
    </div><!-- end row -->

   <?php }
   ?> 
  </div><!-- end row workshop-box -->

  <?php echo paginate_links();

  ?>
  
</div><!-- end container-->

<!-- 
<div class="container">

  <div class="row">
    
  <?php
  while(have_posts()) {
    the_post(); ?>

    <div class="col workshop-box">
  
  <div class="row workshops-box">
    <div class="col-sm-1">
      <img class="calender-icon" src="<?php echo get_template_directory_uri() . '/images/calender-icon2.png'; ?>" />
    </div>
    <div class="col-sm-3 workshop-date">

      
      <span class="start-date"><?php
        $workshopStartDate = new DateTime(get_field('workshop_start_date'));
        echo $workshopStartDate->format('j F Y')
        ?> -<br> <?php
        $workshopEndDate = new DateTime(get_field('workshop_end_date'));
        echo $workshopEndDate->format('j F Y')
        ?></span>
    </div><

    <div class="col-sm-8">
      <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
      <p><?php the_content(); ?><a href="<?php the_permalink(); ?>"> Read more</a></p>
    </div>
  </div>
  </div>
  <?php }
  ?>
 
  <?php echo paginate_links();

  ?>
  
</div> -->



<?php get_footer();

?>