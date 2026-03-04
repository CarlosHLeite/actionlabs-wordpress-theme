<?php

function actionlabs_enqueue_assets() {

    wp_enqueue_style(
        'actionlabs-style',
        get_template_directory_uri() . '/assets/css/main.css',
        [],
        '1.0'
    );

    wp_enqueue_script(
        'actionlabs-script',
        get_template_directory_uri() . '/assets/js/main.js',
        [],
        '1.0',
        true
    );

}

add_action('wp_enqueue_scripts', 'actionlabs_enqueue_assets');