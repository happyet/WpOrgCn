<?php
add_filter( 'pre_option_link_manager_enabled', '__return_true' );
function lmsim_load() {
    $logo_width  = 240;
	$logo_height = 80;
	add_theme_support(
		'custom-logo',
		array(
			'height'               => $logo_height,
			'width'                => $logo_width
		)
	);
    register_nav_menus( array(
		'topbar' => 'Main Menu',
		'footer-menu' => 'Footer Menu'
	) );
	add_theme_support( 'title-tag' );
    add_theme_support( 'custom-background' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );	
}
add_action( 'after_setup_theme', 'lmsim_load' );

function add_scripts() {
    wp_enqueue_style( 'happyet', get_stylesheet_uri() );
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' );
}
add_action('wp_enqueue_scripts', 'add_scripts');

function lmsim_record_views() {
    if (is_singular()) {
        global $post, $user_ID;
        $post_ID = $post->ID;
        if (empty($_COOKIE[USER_COOKIE]) && intval($user_ID) == 0) {
            if ($post_ID) {
                $post_views = (int)get_post_meta($post_ID, 'views', true);
                if (!update_post_meta($post_ID, 'views', ($post_views + 1))) {
                    add_post_meta($post_ID, 'views', 1, true);
                }
            }
        }
    }
}
add_action('wp_head', 'lmsim_record_views');
function post_views($before = '', $after = '', $echo = 1) {
    global $post;
    $post_ID = $post->ID;
    $views = (int)get_post_meta($post_ID, 'views', true);
    if ($echo) {
        echo $before, number_format($views) , $after;
    } else {
        return $views;
    }
}
function lmsim_theme_views(){
	if(function_exists('the_views')) { 
		echo the_views(false); 
	}else{ 
		post_views();
	}
}
function lmsim_excerpt_length( $length ) {
	return 120;
}
add_filter( 'excerpt_length', 'lmsim_excerpt_length' );

function lmsim_auto_excerpt_more( $more ) {
		return ' &hellip;';
}
add_filter( 'excerpt_more', 'lmsim_auto_excerpt_more' );
function modify_read_more_link() {
    return ' &hellip;';
}
add_filter( 'the_content_more_link', 'modify_read_more_link' );
function get_cn_avatar($avatar) {
    $avatar = str_replace(array("www.gravatar.com", "0.gravatar.com", "1.gravatar.com", "2.gravatar.com"), "cravatar.cn", $avatar);
    return $avatar;
}
add_filter('get_avatar', 'get_cn_avatar');