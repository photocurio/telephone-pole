<?php
if ( function_exists( 'add_theme_support' ) ) { 
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 150, 150, true ); // default Post Thumbnail dimensions 
	add_image_size( 'desktop-thumbnail', 250, 250 ); 
	add_image_size( 'mobile-thumbnail', 350, 350 ); 
}

add_filter('widget_text', 'do_shortcode');

add_filter( 'gallery_style', 'my_gallery_style', 99 );

function tagcloud_widget() {
	ob_start();
	wp_tag_cloud('smallest=100&largest=100&unit=%&separator=, ');
	$output = ob_get_contents();
	ob_end_clean();
	return $output;
}

add_shortcode("tagcloud-widget", "tagcloud_widget");

function my_gallery_style() {
    return "<div class='gallery'>";
}
if (wpmd_is_notphone()) {
function topheavy_scripts() {
	wp_register_script( 'masonry-script', get_template_directory_uri() . '/js/jquery.masonry.min.js', array( 'jquery' ) );
	wp_enqueue_script( 'masonry-script' ) ;
}
add_action( 'wp_enqueue_scripts', 'topheavy_scripts' );
}

register_sidebar( array(
		'name' => 'Main Sidebar',
		'id' => 'main-sidebar',
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget' => "</li>",
		'before_title' => '<h5 class="widget-title">',
		'after_title' => '</h5>',
	) );
?>