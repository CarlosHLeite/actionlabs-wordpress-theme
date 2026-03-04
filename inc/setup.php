<?php

function actionlabs_theme_setup() {

    add_theme_support('title-tag');

    add_theme_support('post-thumbnails');

    add_theme_support('custom-logo');

    register_nav_menus(['primary' => 'Primary Menu']);

    add_theme_support('custom-logo', [
        'height'      => 60,
        'width'       => 200,
        'flex-height' => true,
        'flex-width'  => true,
    ]);

    // Hero image size
    add_image_size('hero-large', 1920, 800, true);

}

add_action('after_setup_theme', 'actionlabs_theme_setup');