<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="main_container container" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<h1 class="entry-title"><?php the_title(); ?></h1> <?php edit_post_link(); ?>
<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
<?php the_content(); ?>
<div class="entry-links"><?php wp_link_pages(); ?></div>
</div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>