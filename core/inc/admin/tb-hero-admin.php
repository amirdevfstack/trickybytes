<?php
class TrickyBytes_Hero_Section {
    public function __construct() {
        add_action('customize_register', array($this, 'register_customizer_settings'));
    }

    public function register_customizer_settings($wp_customize) {
        $wp_customize->add_section('trickybytes_hero_section', array(
            'title'    => __('Hero Section', 'trickybytes'),
            'priority' => 30,
        ));

        // Background Image
        $wp_customize->add_setting('hero_bg_image', array(
            'default'   => get_template_directory_uri() . '/core/assets/img/hero/hero-bg.jpg',
            'transport' => 'refresh',
            'sanitize_callback' => 'esc_url_raw',
        ));
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_bg_image', array(
            'label'   => __('Background Image', 'trickybytes'),
            'section' => 'trickybytes_hero_section',
            'settings' => 'hero_bg_image',
        )));

        // Subtitle
        $wp_customize->add_setting('hero_subtitle', array(
            'default'   => 'Everything You Need to Create a Website',
            'transport' => 'refresh',
            'sanitize_callback' => 'sanitize_text_field',
        ));
        $wp_customize->add_control('hero_subtitle', array(
            'label'   => __('Subtitle', 'trickybytes'),
            'section' => 'trickybytes_hero_section',
            'type'    => 'text',
        ));

        // Main Title
        $wp_customize->add_setting('hero_title', array(
            'default'   => 'Business Innovation With IT Services Expertise',
            'transport' => 'refresh',
            'sanitize_callback' => 'sanitize_text_field',
        ));
        $wp_customize->add_control('hero_title', array(
            'label'   => __('Hero Title', 'trickybytes'),
            'section' => 'trickybytes_hero_section',
            'type'    => 'text',
        ));

        // Button Text
        $wp_customize->add_setting('hero_button_text', array(
            'default'   => 'Get Started',
            'transport' => 'refresh',
            'sanitize_callback' => 'sanitize_text_field',
        ));
        $wp_customize->add_control('hero_button_text', array(
            'label'   => __('Button Text', 'trickybytes'),
            'section' => 'trickybytes_hero_section',
            'type'    => 'text',
        ));

        // Button Link
        $wp_customize->add_setting('hero_button_link', array(
            'default'   => '#',
            'transport' => 'refresh',
            'sanitize_callback' => 'esc_url_raw',
        ));
        $wp_customize->add_control('hero_button_link', array(
            'label'   => __('Button Link', 'trickybytes'),
            'section' => 'trickybytes_hero_section',
            'type'    => 'url',
        ));

        // Hero Image
        $wp_customize->add_setting('hero_image', array(
            'default'   => get_template_directory_uri() . '/core/assets/img/hero/heroThumb1_1.png',
            'transport' => 'refresh',
            'sanitize_callback' => 'esc_url_raw',
        ));
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_image', array(
            'label'   => __('Hero Image', 'trickybytes'),
            'section' => 'trickybytes_hero_section',
            'settings' => 'hero_image',
        )));
    }
}

// Initialize Hero Section Class
new TrickyBytes_Hero_Section();
