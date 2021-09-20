<?php

add_action('admin_menu', 'jetpack_remove_menus',999);
function jetpack_remove_menus(){
    if(!current_user_can('add_users')){
        remove_menu_page('jetpack');
    }
}


add_theme_support('post-thumbnails');

/* 【管理画面】カスタム投稿タイプの追加 */
add_action( 'init', 'create_post_type' );
    function create_post_type() {
        register_post_type( 'product',
        array(
        'labels' => array(
        'name' => __( 'Product' ),
        'singular_name' => __( 'Product' )
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title','editor','thumbnail','custom-fields','excerpt','author','trackbacks','comments','revisions','page-attributes')
        )
    );
}

add_theme_support('post-thumbnails');




