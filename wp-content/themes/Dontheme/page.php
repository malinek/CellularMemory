<?php
get_header();
?>

<div class="jumbotron" style="background-image: url(<?php echo get_theme_file_uri('/images/ball-green-small.jpg') ?>);">
  <div class="container">
   
    <h2>Welcome to the about page</h2>
    <h2>More info is coming.</h2>
    <h3>I'm just testing</h3>
    <h3>This is finally working</h3>
    <h3>I have learned more about images but still a lot to learn.</h3>
  </div>
</div>
  
  <?php while(have_posts()) {
    the_post(); ?>
    <h1>This is a page not a post</h1>
    <h2><?php the_title(); ?></h2>
    <?php the_content(); ?>
  <?php }

get_footer();

?>