<?php 

/* 
    Plugin Name: Gallery
*/

function inito() {
    register_post_type('gallery', [
        'public' => true,
        'label' => 'Gallery',
        'supports' => ['title']
    ]);
}

add_action('init', 'inito');

?>