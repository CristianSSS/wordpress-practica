<?php 
get_header();

while(have_posts()){ 
the_post();    
?>
<div class="page-banner">
      <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri("./images/ocean.jpg") ?>)"></div>
      <div class="page-banner__content container container--narrow">
        <h1 class="page-banner__title"><?php the_title(); ?></h1>
        <div class="page-banner__intro">
          <p>Pagina</p>
        </div>
      </div>

  <div class="metabox metabox--position-up metabox--with-home-link">
          <p>
            <a class="metabox__blog-home-link" href="<?php echo site_url("/blog"); ?>"><i class="fa fa-home" aria-hidden="true"></i> Back to <?php get_the_title($var); ?></a> 
            <span class="metabox__main"><?php the_title(); ?></span>
          </p>
        </div>

    </div>

    

<?php the_content(); ?>

<?php
}

get_footer();
?>