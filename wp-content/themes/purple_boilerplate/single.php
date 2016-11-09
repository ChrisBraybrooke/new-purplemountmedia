<?php get_header(); ?>
<div class="blog_post_single container">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'entry' ); ?>
<?php if ( ! post_password_required() ) comments_template( '', true ); ?>
<?php endwhile; endif; ?>
<?php get_template_part( 'nav', 'below-single' ); ?>
</div>
<?php get_template_part( 'page-templates/content', 'posts' ); ?>
<div class="landscape_sidebar container">
<?php get_sidebar('landscape'); ?>
</div>
<?php get_footer(); ?>