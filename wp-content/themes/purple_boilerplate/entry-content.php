<?php if ( has_post_thumbnail() && !is_singular() ) { ?><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('feature', array( 'class' => 'post_feature_index img-responsive' )); ?></a><?php } ?>
<?php if ( has_post_thumbnail() && is_singular() ) { ?><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('header', array( 'class' => 'post_feature_header img-responsive' )); ?></a><?php } ?>
<?php if ( !is_search() && !is_singular() ) get_template_part( 'entry', 'meta' ); ?>
<?php if ( !is_singular() ) { ?> <h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
<div class="widget_title_underline longer_underline"></div><?php } ?>
<?php if ( is_singular() ) { ?> <h1 class="entry-title title_single_post text-center"><?php the_title(); ?></h1><?php } ?>
<?php if ( is_singular() ) get_template_part( 'entry', 'meta-single' ); ?>
<?php edit_post_link(); ?>
<?php if ( !is_singular() ) { the_excerpt(); } else { the_content(); }  ?>
<div class="entry-links"><?php wp_link_pages(); ?></div>
