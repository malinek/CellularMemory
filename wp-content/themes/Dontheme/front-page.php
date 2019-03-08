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
      <div class="container-vlog-button">
        <a href="<?php echo site_url('/vlog') ?>" class="big-purple-button first-button-frontpage">To vlog page</a>
      </div>
    </div><!-- end video-section-->

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
    <a href="<?php echo site_url('/about/tcm') ?>" class="big-purple-button second-button-frontpage">Read more</a>
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
            <a href="<?php the_permalink(); ?>" class="light-purple-button frontpage-button-2">Read more</a>
          </div><!-- end div -->
        </div><!-- end row -->
        <?php }
      ?>

      <div class="col-sm-12">
        <a href="<?php echo get_post_type_archive_link('workshop') ?>" class="purple-button button-view-all">View all workshops</a>
      </div>

    </div>
   
    </div><!-- end col-sm-6 workshop column -->

    <!-- TESTIMONIALS -->
    
    <div class="col-sm-6">
   
      <div class="col-sm-12 testimonials-column">

        <h1><i class="far fa-comments"></i>Testimonials</h1>
        
      <div class="row">
        <div class="col-sm-3 image-column">
          <img class="testimonials-image-frontpage img-responsive" src="<?php echo get_template_directory_uri() . '/images/Johanna.jpg'; ?>" />
        </div>
        <div class="col-sm-9 testimonials-content">
          <p>Don Hanson is a truly gifted and very experienced teacher. I have known him for 20 years and seen miracle after miracle taking place in these circles. This is very powerful work for those who are willing to be vulnerable, take responsibility for their feelings and expand beyond the ego mind into higher vibrational reality [...] <a href="<?php echo site_url('/about/testimonials') ?>">Read more</a></p>
          <span>Johanna Harmala, Costa Rica</span>
        </div>
      </div><!-- end row -->
      <div class="row">
        <div class="col-sm-3 image-column">
          <img class="testimonials-image-frontpage img-responsive" src="<?php echo get_template_directory_uri() . '/images/Dawn.jpg'; ?>" />
        </div>
        <div class="col-sm-9 testimonials-content">
          <p>Don Hanson's work taps into such a deeply spiritual, profoundly healing energy that mere words cannot possibly capture the wonder and scope of its essence. He is coming from such a boundless, generous, limitless place of acceptance, love and presence [...] <a href="<?php echo site_url('/about/testimonials') ?>">Read more</a></p>
          <span>Dawn Colombo, New York</span>
        </div>
      </div><!-- end row -->
      <div class="row">
        <div class="col-sm-12">
          <a href="<?php echo site_url('/about/testimonials') ?>" class="purple-button button-view-all">View all testimonials</a>
        </div>
      </div><!-- end row -->
    </div>

  </div>

  </div><!-- end row -->

</div><!-- end container -->

<?php get_footer(); ?>

