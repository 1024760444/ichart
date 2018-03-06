<?php 
// 小工具
if (function_exists('register_sidebar')){
    register_sidebar( array() );
}

// 引入各个功能模块
get_template_part( 'ext/include/navigation' ); // 引入分页功能

/**
 * 屏蔽所有小工具。
 * 参考文章： http://www.frontopen.com/1397.html
 */
function unregister_wp_widget(){
    unregister_widget('WP_Widget_Pages');
    unregister_widget('WP_Widget_Calendar');
    unregister_widget('WP_Widget_Archives');
    unregister_widget('WP_Widget_Links');
    unregister_widget('WP_Widget_Meta');
    unregister_widget('WP_Widget_Search');
    unregister_widget('WP_Widget_Text');
    unregister_widget('WP_Widget_Categories');
    unregister_widget('WP_Widget_Recent_Posts');
    unregister_widget('WP_Widget_Recent_Comments');
    unregister_widget('WP_Widget_RSS');
    unregister_widget('WP_Widget_Tag_Cloud');
    unregister_widget('WP_Nav_Menu_Widget');
}
add_action('widgets_init','unregister_wp_widget');

// 登录退出跳转链接到主页
add_action ( 'wp_logout', 'auto_redirect_after_logout' );
function auto_redirect_after_logout() {
    wp_redirect ( home_url () );
    exit ();
}
add_action ( 'wp_login', 'auto_redirect_after_login' );
function auto_redirect_after_login() {
    wp_redirect ( home_url () );
    exit ();
}

// 默认情况下，excerpt长度设置为55个字
function new_excerpt_length($length) {
	return 180;
}
add_filter('excerpt_length', 'new_excerpt_length');

// 自定义文章摘要
function my_init() {
	add_post_type_support('page', array('excerpt'));
}
add_action('init', 'my_init');
?>