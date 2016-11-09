<?php get_header(); ?>
<div class="main_container container">
<div class="post_wrap col-md-8">
<?php if (current_user_can( 'manage_options' )) { ?>
<?php global $wp_query; ?>
<?php $args = array_merge( $wp_query->query, array( 'post_status' => array('publish', 'draft') ) ); ?>
<?php query_posts( $args ); ?>
<?php } ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php  if ( get_post_status ( $ID ) == 'draft' ) { $draft_class = "alert-warning"; } else { $draft_class = ""; }?>
<div class="blog_post <?php echo $draft_class; ?>">
<?php  if ( get_post_status ( $ID ) == 'draft' ) { ?>
<h1 class="draft_post">DRAFT</h1>
<?php } ?>
<?php get_template_part( 'entry' ); ?>
<?php comments_template(); ?>
</div>
<?php endwhile; else : ?>
<h1 class="text-center">No Posts, Sorry...</h1>
<?php endif; ?>

<?php get_template_part( 'nav', 'below' ); ?>
</div>
<div class="sidebar_wrap col-md-4">
<?php get_sidebar(); ?>
</div>
</div>
<?php get_footer(); ?>
