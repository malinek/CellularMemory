<?php get_header(); ?>

 <div class="hero" style="background-image: url(<?php echo get_theme_file_uri('/images/summer-background.jpg') ?>);">

  <!-- insert navBar function here -->
  
  <?php navBar(); ?>

  <div class="hero-headline">
    <h1>Private Sessions</h1>
  </div><!-- end hero-headline -->

</div><!-- end hero -->

<div class="container">
  <div class="row">
    <div class="col-sm-8">
      <?php
        while(have_posts()) {
        the_post();

        the_content();
        }
        ?>
    </div>
    <div class="col-sm-4">
      <img class="private-sessions-image" src="<?php echo get_template_directory_uri() . '/images/Don-privatesessions.jpg'; ?>" />
      </div>
    </div>
  </div><!--end row-->
  </div><!-- end container -->

  <div class="container">
    <div class="col-sm-6 book-session">
      <h3>To book your private session</h3>
      <h4>e-mail: info@donhanson.com (business manager)<br><br>Donald's skype address: donhanson-texas<br><br>Pay by cash / check or money order in the mail / paypal</h4>
      <h4><strong>Cost USD 200</strong></h4>
       <p>Paypal button goes here</p>
    </div>
  </div><!-- end container -->




<?php get_footer(); ?>