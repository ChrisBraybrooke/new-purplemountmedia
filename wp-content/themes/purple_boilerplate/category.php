<?php get_header(); ?>
	<div class="container main_container">
		<div class="archive_title col-md-12">
			<h1 class="entry-title"><?php _e( 'Category Archives: ', 'hmtcycling' ); ?><?php single_cat_title(); ?></h1>
			<?php if ( '' != category_description() ) echo apply_filters( 'archive_meta', '<div class="archive-meta">' . category_description() . '</div>' ); ?>
		</div>
		<div class="post_wrap col-md-8">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="blog_post">
					<?php get_template_part( 'entry' ); ?>
				</div>
				<?php endwhile; endif; ?>
			<?php get_template_part( 'nav', 'below' ); ?>
		</div>
		<div class="sidebar_wrap col-md-4">
			<?php get_sidebar(); ?>
		</div>
	</div>
<?php get_footer(); ?>