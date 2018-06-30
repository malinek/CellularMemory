<?php get_header(); ?>

<div class="column-sm-12 welcome-image" style="background-image: url(<?php echo get_theme_file_uri('/images/front-page8.jpg') ?>);">

  <!-- insert navBar function here -->
  
  <?php navBar(); ?>

  <div class="column-sm-12 welcome-text">
    <h1>Clean out your closet and open up to the<br>sweetness and love of the universe<br><br>Come on in<br>Everybody is Welcome</h1>
  </div><!-- end hero-headline -->

</div><!-- end welcome-image -->

<div class="container intro-text-column">
  
  <div class="intro-text">
    <h3>Transforming Cellular Memory...</h3>

    <h4>...is the process of taking the body/mind through deep cellular purification and metamorphosis. This is created through sitting in a transmission of divine light, allowing this energy of universal intelligence to clear out the old cloaks of world mind and awaken the sacred nature of who we truly are.</h4>

    <h3>Expanding global consciousness</h3>

    <h4>There are many of us who are now and have been taking our bodies through deep purification. We are learning to live in alignment with the universal principles of love, gratitude and sweetness. Together we are pioneering a new global consciousness based on inclusion, connection and the recognition that we are all in this together as a global family. Together we now move beyond the grid of old world mind; fear, separation, exclusion, bigotry, greed/competition and self hatred.</h4>

    <p><a href="#" class="btn btn-default btn-lg front-page-button" role="button">Read more</a></p>

  </div>

  </div>

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
              'compare' => '>',
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

      <div class="col-sm-12">
        <button type="button" class="btn btn-default view-more"><a href="<?php echo get_post_type_archive_link('workshop') ?>">See all workshops</a></button>
      </div>
    
    </div>

    <!-- TESTIMONIALS -->
    
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