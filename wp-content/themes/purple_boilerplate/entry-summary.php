<?php if ( is_singular() ) { echo '<h1 class="entry-title">'; } else { echo '<h2 class="entry-title">'; } ?><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a><?php if ( is_singular() ) { echo '</h1>'; } else { echo '</h2>'; } ?> 
<div class="widget_title_underline longer_underline"></div>
<?php the_excerpt(); ?>
<?php if( is_search() ) { ?><div class="entry-links"><?php wp_link_pages(); ?></div><?php } ?>
