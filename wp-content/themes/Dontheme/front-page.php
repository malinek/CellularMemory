<?php get_header(); 

navBar();

?>

<div class="container">
  <div class="row">

    <div class="col-sm-6 frontpage-headline">
      <h2>Upcoming workshops</h2>
      
      <?php
        $today = date('Ymd');
        $homepageWorkshops = new WP_Query(array(
          'posts_per_page' => 2,
          'post_type' => 'workshop',
          'meta_key' => 'workshop_start_date',
          'orderby' => 'meta_value_num',
          'order' => 'ASC',
          'meta_query' => array(
            array(
              'key' => 'workshop_start_date',
              'compare' => '>=',
              'value' => $today,
              'type' => 'numeric'
            )
          )
        ));

        while($homepageWorkshops->have_posts()) {
          $homepageWorkshops->the_post(); ?>
        <div class="row">
          <div class="col-sm-4 workshop-date">
            <span><?php
            $workshopStartDate = new DateTime(get_field('workshop_start_date'));
            echo $workshopStartDate->format('j F Y')
            ?> to <?php
            $workshopEndDate = new DateTime(get_field('workshop_end_date'));
            echo $workshopEndDate->format('j F Y')
            ?></span>
            
          </div>
          <div class="col-sm-8">
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <p><?php echo wp_trim_words(get_the_content(), 25); ?><a href="<?php the_permalink(); ?>"> Read more</a></p>
          </div><!-- end div -->
        </div><!-- end row -->
        <?php }
      ?>

      <a href="<?php echo get_post_type_archive_link('workshop') ?>">See all workshops</a>


      
      
      
    
    </div>
    
    <div class="col-sm-6 testimonials frontpage-headline">
      <h2>Testimonials</h2>

      <div class="row">
        <div class="col-sm-3">
          <p>Place for image</p>
        </div>
        <div class="col-sm-9">
          <p>I have been working with Donald now consistently for over 15 years. During this time I have gone though such a great metamorphose that I feel like I can now say I feel love and joy pretty much most of the time and I have created a really wonderful life for myself.</p>
        </div>
      </div><!-- end row -->
      <div class="row">
        <div class="col-sm-3">
          <p>Place for image</p>
        </div>
        <div class="col-sm-9">
          <p>Donald reconnected me with the divine within. His gift of bringing through the unconditional love necessary to melt away the emotional, mental and physical blocks to our divine self is beyond works. Experiencing his work helped me remember what I came to do. He is Unconditional Love.</p>
        </div>
      </div><!-- end row -->
      <div class="row">
        <div class="col-sm-12">
          <button type="button" class="btn btn-default view-more">View all testimonials</button>
        </div>
      </div><!-- end row -->
    </div>

  </div><!-- end row -->
</div><!-- end container -->

<?php get_footer(); ?>