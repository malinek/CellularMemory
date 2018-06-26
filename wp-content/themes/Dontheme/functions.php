<?php

function navBar() {
//Navigation menu
?>
  <section class="navigation">
  <div class="nav-container">
    <div class="brand">
      <a href="<?php echo site_url() ?>">Home</a>
    </div>
    <nav>
      <div class="nav-mobile">
        <a id="nav-toggle" href="#!"><span></span></a>
      </div>
      <ul class="nav-list">
        <li>
          <a href="#!">About</a>
          <ul class="nav-dropdown">
            <li>
              <a href="#!">Don Hanson</a>
            </li>
            <li>
              <a href="#!">TCM</a>
            </li>
            <li>
              <a href="<?php echo site_url('/about/testimonials') ?>">Testimonials</a>
            </li>
            <li>
              <a href="#!">Deutsche</a>
            </li>
          </ul>
        </li>
        <li>
          <a href="<?php echo site_url('/contact') ?>">Contact</a>
        </li>
        <li>
          <a href="#!">Workshops</a>
        </li>
        <li>
          <a href="<?php echo site_url('/private-sessions') ?>">Private Sessions</a>
        </li>
        <li>
          <a href="<?php echo site_url('/blog') ?>">Blog</a>
        </li>
        <li>
          <a href="#!">Gallery</a>
        </li>
      </ul>
    </nav>
  </div>
  </section><!-- end navigation menu -->
<?php }

function dons_files() {
  wp_enqueue_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js');
  wp_enqueue_script('bootstrap_js', get_template_directory_uri() . '/js/bootstrap/bootstrap.min.js');
  wp_enqueue_script('dons_main_js', get_theme_file_uri('/js/scripts.js'), NULL, microtime(), true);
  wp_enqueue_style('google_fonts', '//fonts.googleapis.com/css?family=Kaushan+Script|Merienda+One|Muli:400,600,700,800" rel="stylesheet">');
  wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css');
  wp_enqueue_style('dons_main_styles', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'dons_files');

function dons_features() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'dons_features');

?>