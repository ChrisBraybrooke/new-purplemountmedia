<?php get_header(); ?>
	<div class="container main_container">
		<div class="archive_title col-md-12">
			<h1 class="entry-title"><?php 
				if ( is_day() ) { printf( __( 'Daily Archives: %s', 'hmtcycling' ), get_the_time( get_option( 'date_format' ) ) ); }
				elseif ( is_month() ) { printf( __( 'Monthly Archives: %s', 'hmtcycling' ), get_the_time( 'F Y' ) ); }
				elseif ( is_year() ) { printf( __( 'Yearly Archives: %s', 'hmtcycling' ), get_the_time( 'Y' ) ); }
				else { _e( 'Archives', 'hmtcycling' ); }?>
			</h1>
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