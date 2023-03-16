<?php get_header();?>


<div class="page-banner">
<div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri("./images/ocean.jpg") ?>)"></div>
<div class="page-banner__content container container--narrow">
  <h1 class="page-banner__title">Bienvenido al blog</h1>
  <div class="page-banner__intro">
    <p>Un blog para gente como tu</p>
  </div>
</div>
</div>
<?php 
while(have_posts()){
the_post();
?>
    <p>el autor es:<?php the_author_posts_link();?> </p>
    <h1><a href="<?php the_permalink();?>"><?php the_title();?></a></h1>
    <p><?php the_excerpt();?></p>
    <p><a href="<?php the_permalink(); ?>">Continuar leyendo &raquo;</a></p>

    

<?php 

}

echo paginate_links();

?>


<?php get_footer();?>