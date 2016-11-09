<?php get_header(); ?>
	<div class="container main_container">
		<div class="archive_title col-md-12">
			<h1 class="entry-title author"><?php _e( 'Author Archives', 'hmtcycling' ); ?>: <?php the_author_link(); ?></h1>
		</div>
		<div class="post_wrap col-md-8">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="blog_post">
					<?php get_template_part( 'entry' ); ?>
					<?php comments_template(); ?>
				</div>
				<?php endwhile; endif; ?>
			<?php get_template_part( 'nav', 'below' ); ?>
		</div>
		<div class="sidebar_wrap col-md-4">
			<?php get_sidebar(); ?>
		</div>
	</div>
<?php get_footer(); ?>