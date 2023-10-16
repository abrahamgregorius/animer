<?php

function load_scripts() {
    wp_enqueue_style('style-css', get_theme_file_uri() . '/css/style.css', []);
    wp_enqueue_script('script-js', get_theme_file_uri() . '/js/script.js', [], '', true);
}



function init() {
    register_post_type('anime', [
        'public' => true,
        'label' => 'Anime',
        'supports' => ['title', 'thumbnail']
    ]);

    register_post_type('article', [
        'public' => true,
        'label' => 'Article',
        'supports' => ['title', 'editor', 'thumbnail']
    ]);

    register_post_type('social_media', [
        'public' => true,
        'label' => "Social Media",
        'supports' => ['title', 'thumbnail'] 
    ]);

    register_post_type('episode', [
        'public' => true,
        'label' => 'Episode',
        'supports' => ['title', 'thumbnail']
    ]);

    register_post_meta('anime', 'view_count', [
        'single' => true,
        'type' => 'integer',
        'default' => 0
    ]);

    register_post_type('gallery', [
        'public' => true,
        'label' => 'Gallery',
        'supports' => ['title']
    ]);

    register_taxonomy('genre', 'anime', [
        'hierarchical' => true,
        'label' => 'Genre'
    ]);
    register_taxonomy('season', 'anime', [
        'hierarchical' => true,
        'label' => 'Season'
    ]);

    add_theme_support('menus');
    add_theme_support('post-thumbnails');
}

function add_view_count($post_id) {
    $current_view_count = get_view_count($post_id);
    update_post_meta($post_id, 'view_count', $current_view_count + 1);
}

function get_view_count($post_id) {
    $view_count = get_post_meta($post_id, 'view_count', true);
    if($view_count == null) {
        update_post_meta($post_id, 'view_count', 0);
        return 0;
    } 
    return $view_count;
}






add_action('wp_enqueue_scripts', 'load_scripts');
add_action('login_init', function() { ?>
    <style>
    body {
        /* background: none !important; */
        background-image: url('../wp-content/themes/AnimerV1/assets/spyfamily-2.jpg') !important;
        background-size: cover !important;
        background-position: center !important;
        background-repeat: no-repeat !important;
    }

    .login h1 a {
        background-image: none !important;
    }
    </style>
<?php });

add_action('init', 'init');


?> 

