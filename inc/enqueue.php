<?php

function actionlabs_enqueue_assets() {

    // Google Fonts - Roboto
    wp_enqueue_style(
        'actionlabs-fonts',
        'https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap',
        array(),
        null
    );

    // Main Stylesheet & Script
    wp_enqueue_style(
        'actionlabs-style',
        get_template_directory_uri() . '/assets/css/main.css',
        [],
        '1.0'
    );

    //
    wp_enqueue_script(
        'actionlabs-script',
        get_template_directory_uri() . '/assets/js/main.js',
        [],
        '1.0',
        true
    );

}

add_action('wp_enqueue_scripts', 'actionlabs_enqueue_assets');