<?php if ( is_active_sidebar( 'primary-widget-area' ) ) : ?>

<ul class="xoxo">
<?php if (! is_home()) { ?>
<li id="back_to_news" class="widget-container back_to_news"><h4><a href="/latest-news">Back To Latest News!</a></h4></li>
<?php } ?>
<?php dynamic_sidebar( 'primary-widget-area' ); ?>
</ul>

<?php endif; ?>
