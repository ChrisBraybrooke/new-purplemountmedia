<div class="inner_home_post_row row">
<?php query_posts(array('posts_per_page' => 3, 'post_type' => 'post', 'post_status' => 'publish', 'orderby' => 'desc' ));?>
<?php $i = 0; ?>
<div class="top_home_post_left_col col-md-4">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php $i++; ?>
<?php if ($i == 3) { ?>
<?php $col_width = 'col-md-7'; ?>
<?php $excerpt_length = 600; ?>
<?php } else { ?>
<?php $col_width = 'col-md-12'; ?>
<?php $excerpt_length = 200; ?>
<?php } ?>
<div class="top_home_post_container post_<?php echo $i; ?> <?php echo $col_width; ?>">
<?php edit_post_link(); ?>
<h2><?php the_title(); ?></h2>
<div class="underline purple"></div>
<?php $excerpt = get_the_content(); ?>
<?php $excerpt = substr( $excerpt, 0, $excerpt_length ) . '...'; ?>
<p><?php echo $excerpt; ?></p>
<?php if ($i !== 1) { ?>
  <span class="feat_post_cats"><?php _e( '', 'purplemountain' ); ?><?php the_category( ' ' ); ?></span>
<?php } ?>
<?php echo ' <a href="'.get_the_permalink().'" class="btn btn_feat_post btn-sm btn-default">Continue Reading</a>'; ?>
</div>
<?php if ($i == 2) { ?>
</div>
<div class="col-md-5">
<?php } ?>
<?php if ($i == 3) { ?>
<div class="feat_img_home col-md-5">
<?php echo wp_get_attachment_image( 29, "feature_port", "", array( "class" => "home_posts_feat_image img-responsive" ) ); ?>
</div>
</div>
<?php } ?>
<?php endwhile; endif; ?>
<?php wp_reset_query(); ?>
<div class="top_home_post_right_col col-md-3">
<div class="top_home_post_container post_4 stay_in_touch col-md-12">
  <h2 class="stay_in_touch_title text-center">Stay in Touch!</h2>
  <p>Enter your email below and we’ll make sure we keep you up to date once a month. No spam, we promise. Or contact us.</p>
  <form>
    <div class="form-group">
      <input type="email" class="email_submit_field form-control" id="user_input_email" placeholder="Email address">
    </div>
    <button type="submit" class="email_submit_button text_purple btn_block btn btn-lg btn-default">Keep Me In The Loop</submit>
  </form>
</div>
</div>
</div>
<a class="more_btn center-block btn_block text_purple btn btn-default btn-lg" href="/">More News >></a>
