<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/font-awesome.min.css" />
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.js"></script>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<nav class="bottom_nav scroller badt_navbar navbar navbar-default">
  <div class="center-block container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
       <?php if ( is_front_page() || is_home() || is_front_page() && is_home() ) ?><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="navbar-brand" title="<?php echo esc_html( get_bloginfo( 'name' ) ); ?>" rel="home"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></a><?php if ( is_front_page() || is_home() || is_front_page() && is_home() ) ?>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div  class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">    
	  	<li class="social_item menu-item menu-item-type-post_type menu-item-object-page"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
	  	<li class="social_item menu-item menu-item-type-post_type menu-item-object-page"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>     
	  	<li class="social_item menu-item menu-item-type-post_type menu-item-object-page"><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>          
      </ul>
      <ul class="nav navbar-nav navbar-right">    
    <?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'container' => '', 'items_wrap' => '%3$s', 'walker' => new wp_bootstrap_navwalker() ) ); ?>     
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
