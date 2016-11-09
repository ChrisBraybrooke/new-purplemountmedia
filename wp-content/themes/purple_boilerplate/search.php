<?php get_header(); ?>
<div class="main_container container">
<div class="post_wrap col-md-8">
<?php if ( have_posts() ) : ?>
<div class="blog_post">
<h1 class="entry-title"><?php printf( __( 'Search Results for: %s', 'purple_boilerplate' ), get_search_query() ); ?></h1>
<?php while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'entry' ); ?>
<?php endwhile; ?>
</div>
<?php get_template_part( 'nav', 'below' ); ?>
<?php else : ?>
<h2 class="entry-title text-center"><?php _e( 'Nothing Found', 'purple_boilerplate' ); ?></h2>
<p class="text-center"><?php _e( 'Sorry, nothing matched your search. Please try again.', 'purple_boilerplate' ); ?></p>
<div class="text-center">
<?php get_search_form(); ?>
</div>
<?php endif; ?>
</div>
<div class="sidebar_wrap col-md-4">
<?php get_sidebar(); ?>
</div>
</div>
<?php get_footer(); ?>


