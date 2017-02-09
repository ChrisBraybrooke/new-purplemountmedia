<div class="clear"></div>
<footer id="footer" role="contentinfo">
<div class="container">
<div id="copyright">
<div class="footer_left pull-left text-left"><?php echo sprintf( __( '%1$s %2$s %3$s. All Rights Reserved.', 'purple_boilerplate' ), '&copy;', date( 'Y' ), esc_html( get_bloginfo( 'name' ) ) ); ?> </div>
<div class="footer_right pull-right text-right"><?php echo sprintf( __( ' Website By: %1$s.', 'purple_boilerplate' ), '<a class="footer_site_link" href="http://www.purplemountmedia.com">Purple Mountain Media</a>' ); ?></div>
</div>
</div>
</footer>
<?php wp_footer(); ?>

<script>
$(document).ready(function(){
  $('.home_head_slider').slick({
    // autoplay: true,
    dots: true,
    appendDots: $('.home_head_dots'),
    arrows: false
  });

  $("#bars").click(function(){
    if ($("#bars").hasClass("bars_active")) {
      console.log('active');
      $("#main_menu").addClass("zoomOut");
      $("#bars").fadeOut();

      setTimeout(function() {
          $("#main_menu").removeClass("fadeIn visible zoomOut");
          $("#main_menu").addClass("invisible");
          $("#bars").fadeIn();
      }, 400);
    }

    $("#main_menu").addClass("fadeIn visible");
    $("#main_menu").removeClass("invisible");
    $("#bars").toggleClass("bars_active bars_inactive");

  });

  $(".menu-item a").click(function(){
    $("#main_menu").addClass("fadeOut");
  });

});
</script>
</body>
</html>
