<?php get_header(); ?>

<div class="hero" style="background-image: url(<?php echo get_theme_file_uri('/images/pine-cones.jpg') ?>);">
  <div class="hero-headline">
    <h1>Deutsche</h1>
  </div><!-- end hero-headline -->
</div><!-- end hero -->

<div class="container about-don-deutsche-container">
  <div class="row">
  <div class="col-sm-8 about-don-deutsche-col">
    <h2>Über Don</h2>
      <p>Donald (Don) Hanson hat einen Master-Abschluss in transpersonaler Psychologie und ist lizenzierter interreligiöser Minister. Seit den frühen 1980igern leitet er sowohl in den USA als auch international workshops und hat Tausende von Menschen durch eine tiefe zelluläre / molekulare Reinigung und Metamorphose geführt.<br><br>Don ist seit über 47 Jahren auf dem spirituellen Weg. Im Zuge seiner jahrzehnte langen Studien, sowohl psychologische als auch spirituelle Disziplinen, öffnete sich die Quelle des Lichts in seinem Bewusstsein. Dies eröffnete einige spirituelle Gaben und Fähigkeiten, die ihn bei seiner Arbeit unterstützen. Sein Lieblingsgefühl ist es mit anderen das Licht zu fühlen - hierbei beherrscht er die Kunst Menschen in ihrer Tiefe wahrzunehmen (wie eine Stimmgabel) und seinen Körper als Kanal für heilende Energie zur Verfügung zu stellen, die andere dabei unterstützt sich von hinderlichen alten Mustern und kulturellen Konditionierungen zu lösen. Seine Workshops und privaten Sessions sind ein Übungsfeld um unser persönliches Verhältnis zu dieser heilenden göttlichen Energie zu bekommen oder zu vertiefen.</p>
  </div>
    
     <div class="col-sm-4 about-don-deutsche-img img-responsive" style="background-image: url(<?php echo get_theme_file_uri('/images/Donwithapes2.jpg') ?>);">
    
  </div>
   <div class="row">
    
    <div class="col-sm-12 ilse-contact">
      <h2>Anmeldung & Information</h2>
      <h3>Ilse Engel</h3>
      <h4>Tel: +49-3379 – 20 20 02</h4>
      <h4>Email: ilse.engel@web.de</h4>
    </div>
  </div>
    
</div><!-- end container -->

<div class="container post-container">
  <?php
    while(have_posts()) {
      the_post(); ?>
  <div class="row post-row">
    <div class="col-sm-4 post-image-col">
      <?php the_post_thumbnail('medium', array('class' => 'post-image img-responsive')); ?>
    </div>
    <div class="col-sm-8 col post-content-archive-col">
      <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <h4>Posted on <?php the_time('F j Y'); ?></h4>
      <div class="col post-content-archive">
        <p><?php the_excerpt(); ?></p>
        <a href="<?php the_permalink(); ?>" class="btn green-button" role="button">Read more</a>
      </div>
    </div>
  </div><!-- end row post-row-->

  <hr class="divider">
  
  <?php }
  echo paginate_links();
  ?>
    
</div><!-- end container -->

<?php get_footer(); ?>