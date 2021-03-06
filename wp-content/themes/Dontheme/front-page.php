<?php get_header(); ?>

<div class="welcome-image" style="background-image: url(<?php the_field('hero_image'); ?>);">
  <div class="welcome-text">
    <h1><?php the_field('hero_title'); ?></h1>
  </div>
</div><!-- end welcome-image -->

<div class="container intro-text">
  <div class="intro-text">
    <?php the_field('intro_text_1'); ?>

    <div class="col-sm-12 video-section">
      <?php
        while(have_posts()) {
        the_post();
        }
      ?>
      <h1><?php the_field('video_title'); ?></h1>
      <?php the_field('video_link'); ?>
      <p><?php the_field('description_video'); ?></p>
<<<<<<< HEAD
      <div class="container-vlog-button">
        <a href="<?php echo site_url('/vlog') ?>" class="big-purple-button first-button-frontpage">To vlog page</a>
      </div>
    </div><!-- end video-section-->

=======
    </div><!-- end video-section-->

    <div class="button-post-single">
    <button type="button" class="big-green-button button-vlog-front"><a href="<?php echo site_url('/vlog') ?>">To vlog page</a></button>
    </div>
 
>>>>>>> b032d36b758f5ffcb54898073be9b3f9294dea77
    <?php the_field('intro_text_2'); ?>

  </div><!-- end intro-text -->
</div><!-- end container intro-text -->

<div class="intro-effects-bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/2ndheader.jpg') ?>);">
  <div class="intro-effects-text">
    <ul>
      <li>Clear Thinking, Living Passionately</li>
      <li>Self Love, Sweetness &amp; Gratitude</li>
      <li>Energy as the Universal Language</li>
      <li>Divine Alchemy; Body/Mind Ressurrection</li>
      <li>Transforming Victim/Blame Consciousness</li>
      <li>Understanding the Way the Universe Works</li>
      <li>Vulnerability, Taking Ownership of your Own</li>
      <li>Reactions &amp; Feelings</li>
    </ul>
  </div>
  <div class="button-front-page">
<<<<<<< HEAD
    <a href="<?php echo site_url('/about/tcm') ?>" class="big-purple-button second-button-frontpage">Read more</a>
=======
    <button type="button" class="big-purple-button"><a href="<?php echo site_url('/about/tcm') ?>">Read more</a></button>
>>>>>>> b032d36b758f5ffcb54898073be9b3f9294dea77
  </div>
</div>

<!-- Section Upcoming workshops and testimonials -->
<div class="container-fluid front-page-two-columns">
  <div class="row">
    <div class="col-sm-6">
      <div class="col-sm-12 workshop-column">

        <h1><i class="far fa-calendar-alt"></i>Upcoming workshops</h1>
        
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
              'key' => 'workshop_end_date',
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
            ?> -<br> <?php
            $workshopEndDate = new DateTime(get_field('workshop_end_date'));
            echo $workshopEndDate->format('j F Y')
            ?></span>
          </div>

          <div class="col-sm-8 workshop-content">
            <span><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span>
            <p><?php echo wp_trim_words(get_field('further_information'), 25); ?></p>
<<<<<<< HEAD
            <a href="<?php the_permalink(); ?>" class="light-purple-button frontpage-button-2">Read more</a>
=======
            <button type="button" class="light-purple-button frontpage-button-2"><a href="<?php the_permalink(); ?>">Read more</a></button>
>>>>>>> b032d36b758f5ffcb54898073be9b3f9294dea77
          </div><!-- end div -->
        </div><!-- end row -->
        <?php }
      ?>

      <div class="col-sm-12">
<<<<<<< HEAD
        <a href="<?php echo get_post_type_archive_link('workshop') ?>" class="purple-button button-view-all">View all workshops</a>
=======
        <button type="button" class="purple-button button-view-all"><a href="<?php echo get_post_type_archive_link('workshop') ?>">View all workshops</a></button>
>>>>>>> b032d36b758f5ffcb54898073be9b3f9294dea77
      </div>

    </div>
   
    </div><!-- end col-sm-6 workshop column -->

    <!-- TESTIMONIALS -->
    
    <div class="col-sm-6">
   
      <div class="col-sm-12 testimonials-column">

        <h1><i class="far fa-comments"></i>Testimonials</h1>
        
      <div class="row">
        <div class="col-sm-3 image-column">
<<<<<<< HEAD
          <img class="testimonials-image-frontpage img-responsive" src="<?php echo get_template_directory_uri() . '/images/Johanna.jpg'; ?>" />
        </div>
        <div class="col-sm-9 testimonials-content">
          <p>Don Hanson is a truly gifted and very experienced teacher. I have known him for 20 years and seen miracle after miracle taking place in these circles. This is very powerful work for those who are willing to be vulnerable, take responsibility for their feelings and expand beyond the ego mind into higher vibrational reality [...] <a href="<?php echo site_url('/about/testimonials') ?>">Read more</a></p>
          <span>Johanna Harmala, Costa Rica</span>
=======
          <img class="testimonials-image-frontpage img-responsive" src="<?php echo get_template_directory_uri() . '/images/brett.jpg'; ?>" />
        </div>
        <div class="col-sm-9 testimonials-content">
          <p>Donald reconnected me with the divine within. His gift of bringing through the unconditional love necessary to melt away the emotional, mental and physical blocks to our divine self is beyond works. Experiencing his work helped me remember what I came to do. He is Unconditional Love.</p>
          <span>Brett Cotter, Energy Worker, New York</span>
>>>>>>> b032d36b758f5ffcb54898073be9b3f9294dea77
        </div>
      </div><!-- end row -->
      <div class="row">
        <div class="col-sm-3 image-column">
<<<<<<< HEAD
          <img class="testimonials-image-frontpage img-responsive" src="<?php echo get_template_directory_uri() . '/images/Dawn.jpg'; ?>" />
        </div>
        <div class="col-sm-9 testimonials-content">
          <p>Don Hanson's work taps into such a deeply spiritual, profoundly healing energy that mere words cannot possibly capture the wonder and scope of its essence. He is coming from such a boundless, generous, limitless place of acceptance, love and presence [...] <a href="<?php echo site_url('/about/testimonials') ?>">Read more</a></p>
          <span>Dawn Colombo, New York</span>
=======
          <img class="testimonials-image-frontpage img-responsive" src="<?php echo get_template_directory_uri() . '/images/Bridget.jpg'; ?>" />
        </div>
        <div class="col-sm-9 testimonials-content">
          <p>Donald has a rare gift to share. He has helped me get in touch with and release blocks in my energy flow as well as mental and emotional bodies. He works in a clear and direct way to assist deep and profound changes that are lasting.</p>
          <span>Bridget Van Block, M.A. Psychology, Sedona, AZ</span>
>>>>>>> b032d36b758f5ffcb54898073be9b3f9294dea77
        </div>
      </div><!-- end row -->
      <div class="row">
        <div class="col-sm-12">
<<<<<<< HEAD
          <a href="<?php echo site_url('/about/testimonials') ?>" class="purple-button button-view-all">View all testimonials</a>
=======
          <button type="button" class="purple-button button-view-all"><a href="<?php echo site_url('/about/testimonials') ?>">View all testimonials</a></button>
>>>>>>> b032d36b758f5ffcb54898073be9b3f9294dea77
        </div>
      </div><!-- end row -->
    </div>

  </div>

  </div><!-- end row -->

</div><!-- end container -->

<?php get_footer(); ?>

