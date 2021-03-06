<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="home_head_wrap">
<div class="home_head_container purple_container">
  <div id="main_menu" class="main_menu menu animated invisible">
    <div class="box one"></div>
    <div class="box two"></div>
    <div class="box three"></div>
    <div class="main_menu_list text-center">
      <?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'menu_class' => 'main_menu', 'link_after' => '<span class="menu_item after">-</span>', 'link_before' => '<span class="menu_item before">-</span>',) ); ?>
    </div>

  </div>
  <div class="head">
    <a href="/">
      <?php $logo = wp_get_attachment_image( 15, "", "", array( "class" => "home_head_logo img-responsive", "id" => 'main_logo' ) ); ?>
      <?php if (!empty($logo)){ ?>
      <?php  echo $logo; ?>
      <?php } else { ?>
      <?php  echo wp_get_attachment_image( 14, "feature_small", "", array( "class" => "home_head_logo img-responsive center-block" ) ); ?>
      <?php } ?>
    </a>
    <i id="bars" class="menu_bars bars_inactive fa fa-bars" aria-hidden="true"></i>
  </div>
  <div class="home_head_slider">
    <div class="home_head_innner first_load purple">
      <div class="box one"></div>
      <div class="box two"></div>
      <div class="box three"></div>
      <h1 class="home_head_text text-center">We craft user interactions...</h1>
      <a href="/test" class="home_head_btn btn btn-lg btn-default">Find Out More  >></a>
    </div>
    <div class="home_head_innner blue">
      <div class="box one"></div>
      <div class="box two"></div>
      <div class="box three"></div>
      <h1 class="home_head_text text-center">We develop web applications...</h1>
      <a href="/test" class="home_head_btn btn btn-lg btn-default">Find Out More  >></a>
    </div>
    <div class="home_head_innner yellow">
      <div class="box one"></div>
      <div class="box two"></div>
      <div class="box three"></div>
      <h1 class="home_head_text text-center">We produce visual experiences...</h1>
      <a href="/test" class="home_head_btn btn btn-lg btn-default">Find Out More  >></a>
    </div>
    <div class="home_head_innner green">
      <div class="box one"></div>
      <div class="box two"></div>
      <div class="box three"></div>
      <h1 class="home_head_text text-center">We nuture digital content...</h1>
      <a href="/test" class="home_head_btn btn btn-lg btn-default">Find Out More  >></a>
    </div>
  </div>
</div>
<div id="slider_dots" class="home_head_dots"></div>
</div>
