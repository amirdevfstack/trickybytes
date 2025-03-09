<?php
function trickybytes_customize_header($wp_customize) {
    // Header Section
    $wp_customize->add_section('trickybytes_header_section', [
        'title'    => __('Header Settings', 'trickybytes'),
        'priority' => 100,
    ]);

    // Header Background Color
    $wp_customize->add_setting('header_bg_color', [
        'default'           => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color',
    ]);
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'header_bg_color', [
        'label'    => __('Header Background Color', 'trickybytes'),
        'section'  => 'trickybytes_header_section',
    ]));

    // Header Text Color
    $wp_customize->add_setting('header_text_color', [
        'default'           => '#000000',
        'sanitize_callback' => 'sanitize_hex_color',
    ]);
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'header_text_color', [
        'label'    => __('Header Text Color', 'trickybytes'),
        'section'  => 'trickybytes_header_section',
    ]));

    // Header Logo
    $wp_customize->add_setting('header_logo', [
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ]);
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'header_logo', [
        'label'    => __('Header Logo', 'trickybytes'),
        'section'  => 'trickybytes_header_section',
    ]));

    // Social Media Links
    $social_networks = ['facebook', 'twitter', 'youtube', 'instagram'];
    foreach ($social_networks as $network) {
        $wp_customize->add_setting("header_social_{$network}", [
            'default'           => '#',
            'sanitize_callback' => 'esc_url_raw',
        ]);
        $wp_customize->add_control("header_social_{$network}", [
            'label'    => ucfirst($network) . ' URL',
            'type'     => 'url',
            'section'  => 'trickybytes_header_section',
        ]);
    }
}

add_action('customize_register', 'trickybytes_customize_header');
