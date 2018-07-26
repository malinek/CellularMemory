<?php get_header(); ?>

<h1 class="h1-gallery-page">
  Some pictures from around the world
</h1>

<?php
  while(have_posts()) {
  the_post();

  the_content();
  }
?>

<?php get_footer(); ?>