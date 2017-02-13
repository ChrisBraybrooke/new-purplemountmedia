<?php /* Template Name: Home Template */ ?>

<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="top_home_container purple_container">
<?php get_template_part( 'page-templates/content', 'home-news' ); ?>
</div>
<div class="second_home_container default_home_container purple_container">
<?php get_template_part( 'page-templates/content', 'home-macbook' ); ?>
</div>
<div class="social_home_container purple_container">
  <h1 class="social_home_text text-center"><span>We're Pretty Social!</span>
    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
    <a href="#"><i class="fa fa-vimeo" aria-hidden="true"></i></a>
  </h1>
</div>
<div class="fourth_home_container default_home_container purple_container">
<?php get_template_part( 'page-templates/content', 'home-camera' ); ?>
</div>
<div class="fith_home_container default_home_container purple_container">
<?php get_template_part( 'page-templates/content', 'home-studio' ); ?>
</div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>
