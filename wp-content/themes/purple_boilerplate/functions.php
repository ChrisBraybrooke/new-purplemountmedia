<?php
add_action( 'after_setup_theme', 'purple_boilerplate_setup' );
require ('includes/theme_autoload.php'); // Theme dependecies autoload
function purple_boilerplate_setup()
{
// Register custom navigation walker. Christian Braybrooke 2Feb16
require_once('wp_bootstrap_navwalker.php');
load_theme_textdomain( 'purple_boilerplate', get_template_directory() . '/languages' );
add_theme_support( 'title-tag' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'post-thumbnails' );
add_image_size( 'header', 1900, 500, array( 'center', 'center' ) );
add_image_size( 'feature', 686, 350, array( 'center', 'top' ) );
add_image_size( 'feature_small', 300, 175, array( 'center', 'top' ) );
add_image_size( 'feature_port', 350, 600, array( 'center', 'top' ) );
add_image_size( 'feature_port_small', 175, 300, array( 'center', 'top' ) );
global $content_width;
if ( ! isset( $content_width ) ) $content_width = 640;
register_nav_menus(
array( 'main-menu' => __( 'Main Menu', 'purple_boilerplate' ),
		'secondary-menu' => __( 'Secondary Menu', 'purple_boilerplate' )  
	 )
);
}
add_action( 'wp_enqueue_scripts', 'purple_boilerplate_load_scripts' );
function purple_boilerplate_load_scripts()
{
wp_enqueue_script( 'jquery' );
}
add_action( 'comment_form_before', 'purple_boilerplate_enqueue_comment_reply_script' );
function purple_boilerplate_enqueue_comment_reply_script()
{
if ( get_option( 'thread_comments' ) ) { wp_enqueue_script( 'comment-reply' ); }
}
add_filter( 'the_title', 'purple_boilerplate_title' );
function purple_boilerplate_title( $title ) {
if ( $title == '' ) {
return '&rarr;';
} else {
return $title;
}
}
add_filter( 'wp_title', 'purple_boilerplate_filter_wp_title' );
function purple_boilerplate_filter_wp_title( $title )
{
return $title . esc_attr( get_bloginfo( 'name' ) );
}
add_action( 'widgets_init', 'purple_boilerplate_widgets_init' );
function purple_boilerplate_widgets_init()
{
register_sidebar( array (
'name' => __( 'Sidebar Widget Area', 'purple_boilerplate' ),
'id' => 'primary-widget-area',
'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
'after_widget' => "</li>",
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
register_sidebar( array (
'name' => __( 'Landscape Widget Area', 'purple_boilerplate' ),
'id' => 'landscape-widget-area',
'before_widget' => '<div class="col-md-4"><li id="%1$s" class="widget-container %2$s">',
'after_widget' => "</li></div>",
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3><div class="widget_title_underline"></div>',
) );
}
function purple_boilerplate_custom_pings( $comment )
{
$GLOBALS['comment'] = $comment;
?>
<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>"><?php echo comment_author_link(); ?></li>
<?php 
}
add_filter( 'get_comments_number', 'purple_boilerplate_comments_number' );
function purple_boilerplate_comments_number( $count )
{
if ( !is_admin() ) {
global $id;
$comments_by_type = &separate_comments( get_comments( 'status=approve&post_id=' . $id ) );
return count( $comments_by_type['comment'] );
} else {
return $count;
}
}
function wpt_register_js() {
    wp_register_script('bootstrap.min', get_template_directory_uri() . '/js/bootstrap.min.js');
    wp_enqueue_script('bootstrap.min');
}
add_action( 'init', 'wpt_register_js' );
function wpt_register_css() {
    wp_register_style( 'bootstrap.min', get_template_directory_uri() . '/css/bootstrap.min.css' );
    wp_register_style( 'style', get_template_directory_uri() . '/css/style.css' );
    wp_register_style( 'style', get_template_directory_uri() . '/css/animate.css' );
    wp_enqueue_style( 'bootstrap.min' );
    wp_enqueue_style( 'animate' );
    wp_enqueue_style( 'style' );
}
add_action( 'wp_enqueue_scripts', 'wpt_register_css' );

function hmtcycling_add_image_class($class){
    $class .= ' img-responsive purple_image';
    return $class;
}
add_filter('get_image_tag_class','hmtcycling_add_image_class');

function hmtcycling_mail_name( $email ){
  return 'Website Name'; // new email name from sender.
}
add_filter( 'wp_mail_from_name', 'hmtcycling_mail_name' );

function hmtcycling_mail_from ($email ){
  return 'auto@domain.com'; // new email address from sender.
}
add_filter( 'wp_mail_from', 'hmtcycling_mail_from' );

//Remove Emoji Script from head.
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );

add_filter( 'comment_form_default_fields', 'bootstrap3_comment_form_fields' );
function bootstrap3_comment_form_fields( $fields ) {
    $commenter = wp_get_current_commenter();
    
    $req      = get_option( 'require_name_email' );
    $aria_req = ( $req ? " aria-required='true'" : '' );
    $html5    = current_theme_supports( 'html5', 'comment-form' ) ? 1 : 0;
    
    $fields   =  array(
        'author' => '<div class="form-group comment-form-author">' . '<label for="author">' . __( 'Name' ) . ( $req ? ' <span class="required">*</span>' : '' ) . '</label> ' .
                    '<input class="form-control" id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></div>',
        'email'  => '<div class="form-group comment-form-email"><label for="email">' . __( 'Email' ) . ( $req ? ' <span class="required">*</span>' : '' ) . '</label> ' .
                    '<input class="form-control" id="email" name="email" ' . ( $html5 ? 'type="email"' : 'type="text"' ) . ' value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' /></div>'
    );
    
    return $fields;
}

add_filter( 'comment_form_defaults', 'bootstrap3_comment_form' );
function bootstrap3_comment_form( $args ) {
    $args['comment_field'] = '<div class="form-group comment-form-comment">
            <label for="comment">' . _x( 'Comment <span class="required">*</span>', 'noun' ) . '</label> 
            <textarea class="form-control" id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea>
        </div>';
    $args['class_submit'] = 'btn btn-primary'; // since WP 4.1
    
    return $args;
}
