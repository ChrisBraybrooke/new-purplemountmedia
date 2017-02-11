<?php /* Template Name: Home Template */ ?>

<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="top_home_row row">
<div class="top_home_container purple_container">
<?php get_template_part( 'page-templates/content', 'home-news' ); ?>
<?php edit_post_link(); ?>
<?php the_content(); ?>
</div>
</div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>
