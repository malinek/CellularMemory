<?php get_header(); ?>


<div class="welcome-image" style="background-image: url(<?php echo get_theme_file_uri('/images/header3.jpg') ?>);">
  <div class="welcome-text">
    <h1>Clean out your closet and open up to the <br> sweetness and love of the universe<br>Come on in<br>Everybody is Welcome</h1>
  </div>
</div><!-- end welcome-image -->


<div class="container intro-text">
  <div class="intro-text">
    <h1>Transforming Cellular Memory...</h1>
      <p>...is the process of taking the body/mind through deep cellular purification and metamorphosis. This is created through sitting in a transmission of divine light, allowing this energy of universal intelligence to clear out the old cloaks of world mind and awaken the sacred nature of who we truly are.</p>
    <h1>Expanding global consciousness</h1>
      <p>There are many of us who are now and have been taking our bodies through deep purification. We are learning to live in alignment with the universal principles of love, gratitude and sweetness. Together we are pioneering a new global consciousness based on inclusion, connection and the recognition that we are all in this together as a global family. Together we now move beyond the grid of old world mind; fear, separation, exclusion, bigotry, greed/competition and self hatred.</p>
    <h1>Through attending and committing to...</h1>
      <p>...these courses, workshops and seminars on an on-going basis, participants will eventually become proficient and will develop a mastery in the areas of:</p>
  </div>
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

    <!--<h4><i class="far fa-heart"></i>Clear Thinking, Living Passionately</h4>
    <h4><i class="far fa-heart"></i>Self Love, Sweetness &amp; Gratitude</h4>
    <h4><i class="far fa-heart"></i>Energy as the Universal Language</h4>
    <h4><i class="far fa-heart"></i>Divine Alchemy; Body/Mind Ressurrection</h4>
    <h4><i class="far fa-heart"></i>Transforming Victim/Blame Consciousness</h4>
    <h4><i class="far fa-heart"></i>Understanding the Way the Universe Works</h4>
    <h4><i class="far fa-heart"></i>Vulnerability, Taking Ownership of your Own</h4>
    <h4><i class="far fa-heart"></i>Reactions &amp; Feelings</h4> -->
  </div>
  <div class="button-front-page">
    <button type="button" class="big-purple-button f-page-button"><a href="<?php echo site_url('/about/tcm') ?>">Read more</a></button>
  </div>
</div>



  



<!-- Section Upcoming workshops and testimonials -->
<div class="container-fluid front-page-two-columns">

  <div class="row">

    <div class="col-sm-6">
    
      <div class="col-sm-12 workshop-column">

      <h2><i class="fa fa-calendar fa-lg"></i>Upcoming workshops</h2>
      
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
            ?> -<br> <?php
            $workshopEndDate = new DateTime(get_field('workshop_end_date'));
            echo $workshopEndDate->format('j F Y')
            ?></span>
          </div>

          <div class="col-sm-8 workshop-content">
            <span><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span>
            <p><?php echo wp_trim_words(get_the_content(), 25); ?><a href="<?php the_permalink(); ?>"><br>Read more</a></p>
          </div><!-- end div -->
        </div><!-- end row -->
        <?php }
      ?>

      <div class="col-sm-12">
        <button type="button" class="btn btn-default purple-button"><a href="<?php echo get_post_type_archive_link('workshop') ?>">View all workshops</a></button>
      </div>

    </div>
   
    </div><!-- end col-sm-6 workshop column -->

    <!-- TESTIMONIALS -->
    
    <div class="col-sm-6">
   
      <div class="col-sm-12 testimonials-column">

      <h2><i class="fa fa-comments-o fa-lg"></i>Testimonials</h2>

      <div class="row">
        <div class="col-sm-3 image-column">
          <img class="testimonials-image-frontpage img-responsive" src="<?php echo get_template_directory_uri() . '/images/brett.jpg'; ?>" />
        </div>
        <div class="col-sm-9 testimonials-content">
          <p>Donald reconnected me with the divine within. His gift of bringing through the unconditional love necessary to melt away the emotional, mental and physical blocks to our divine self is beyond works. Experiencing his work helped me remember what I came to do. He is Unconditional Love.</p>
          <span>Brett Cotter, Energy Worker, New York</span>
        </div>
      </div><!-- end row -->
      <div class="row">
        <div class="col-sm-3 image-column">
          <img class="testimonials-image-frontpage img-responsive" src="<?php echo get_template_directory_uri() . '/images/Gretta.jpg'; ?>" />
        </div>
        <div class="col-sm-9 testimonials-content">
          <p>For 10 years before meeting Donald I suffered from chronic back pain. In the first workshop with Donald he released a deep cellular memory within me that was causing it. Since then I have had no need for regular pain killers. Donald's channel and connection with Spirit is truly awesome and I have witnessed profound changes within me and others. Thank you Donald.</p>
          <span>Gretta Barry, Ennis, Ireland</span>
        </div>
      </div><!-- end row -->
      <div class="row">
        <div class="col-sm-12">
          <button type="button" class="btn btn-default purple-button"><a href="<?php echo site_url('/about/testimonials') ?>">View all testimonials</a></button>
        </div>
      </div><!-- end row -->
    </div>

  </div>

  </div><!-- end row -->

</div><!-- end container -->

<?php get_footer(); ?>

