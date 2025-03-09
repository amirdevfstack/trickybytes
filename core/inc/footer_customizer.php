<?php
function trickybytes_customize_register($wp_customize) {
    // Footer Section
    $wp_customize->add_section('trickybytes_footer_section', [
        'title' => __('Footer Settings', 'trickybytes'),
        'priority' => 150,
    ]);

    // Footer Background Color (Applies to Entire Footer)
    $wp_customize->add_setting('footer_bg_color', ['default' => '#222', 'sanitize_callback' => 'sanitize_hex_color']);
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'footer_bg_color', [
        'label' => __('Footer Background Color', 'trickybytes'),
        'section' => 'trickybytes_footer_section',
    ]));

    // Footer Logo
    $wp_customize->add_setting('footer_logo', ['default' => '', 'sanitize_callback' => 'esc_url_raw']);
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'footer_logo', [
        'label' => __('Footer Logo', 'trickybytes'),
        'section' => 'trickybytes_footer_section',
    ]));

    // About Section
    $wp_customize->add_setting('footer_about_text', ['default' => 'Default About Text Here', 'sanitize_callback' => 'sanitize_textarea_field']);
    $wp_customize->add_control('footer_about_text', [
        'label' => __('About Text', 'trickybytes'),
        'type' => 'textarea',
        'section' => 'trickybytes_footer_section',
    ]);

    $wp_customize->add_setting('footer_about_text_color', ['default' => '#fff', 'sanitize_callback' => 'sanitize_hex_color']);
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'footer_about_text_color', [
        'label' => __('About Text Color', 'trickybytes'),
        'section' => 'trickybytes_footer_section',
    ]));



        // Footer Menu Text Color
        $wp_customize->add_setting('footer_menu_text_color', [
            'default'           => '#fff',
            'sanitize_callback' => 'sanitize_hex_color'
        ]);
        $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'footer_menu_text_color', [
            'label'    => __('Footer Menu Text Color', 'trickybytes'),
            'section'  => 'trickybytes_footer_section',
        ]));

        // Fetch all available menus
        $menus = get_terms('nav_menu', ['hide_empty' => false]);
        $menu_choices = [];
        foreach ($menus as $menu) {
            $menu_choices[$menu->term_id] = $menu->name;
        }

        // Footer Menu Selection
        $wp_customize->add_setting('footer_menu_selection', [
            'default'           => '',
            'sanitize_callback' => 'sanitize_text_field',
        ]);
        $wp_customize->add_control('footer_menu_selection', [
            'label'    => __('Select Footer Menu', 'trickybytes'),
            'type'     => 'select',
            'choices'  => $menu_choices,
            'section'  => 'trickybytes_footer_section',
        ]);



            // Recent Posts Section
        // Fetch all post types
        $post_types = get_post_types(['public' => true], 'objects');
        $post_type_choices = [];
        foreach ($post_types as $post_type) {
            $post_type_choices[$post_type->name] = $post_type->label;
        }

        // Footer Recent Posts Section - Select Post Type
        $wp_customize->add_setting('footer_recent_post_type', [
            'default'           => 'post',
            'sanitize_callback' => 'sanitize_text_field'
        ]);
        $wp_customize->add_control('footer_recent_post_type', [
            'label'    => __('Select Post Type for Recent Posts', 'trickybytes'),
            'type'     => 'select',
            'choices'  => $post_type_choices,
            'section'  => 'trickybytes_footer_section',
        ]);

        // Number of Recent Posts to Show
        $wp_customize->add_setting('footer_recent_posts_count', [
            'default'           => 2,
            'sanitize_callback' => 'absint'
        ]);
        $wp_customize->add_control('footer_recent_posts_count', [
            'label'    => __('Number of Recent Posts', 'trickybytes'),
            'type'     => 'number',
            'section'  => 'trickybytes_footer_section',
        ]);

        // Text Color for Recent Posts
        $wp_customize->add_setting('footer_recent_text_color', [
            'default'           => '#fff',
            'sanitize_callback' => 'sanitize_hex_color'
        ]);
        $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'footer_recent_text_color', [
            'label'    => __('Recent Posts Text Color', 'trickybytes'),
            'section'  => 'trickybytes_footer_section',
        ]));



    // Contact Section
    $wp_customize->add_setting('footer_email', ['default' => 'info@example.com', 'sanitize_callback' => 'sanitize_email']);
    $wp_customize->add_control('footer_email', ['label' => __('Email Address', 'trickybytes'), 'type' => 'text', 'section' => 'trickybytes_footer_section']);

    $wp_customize->add_setting('footer_phone', ['default' => '+208-6666-0112', 'sanitize_callback' => 'sanitize_text_field']);
    $wp_customize->add_control('footer_phone', ['label' => __('Phone Number', 'trickybytes'), 'type' => 'text', 'section' => 'trickybytes_footer_section']);

    $wp_customize->add_setting('footer_contact_text_color', ['default' => '#fff', 'sanitize_callback' => 'sanitize_hex_color']);
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'footer_contact_text_color', [
        'label' => __('Contact Text Color', 'trickybytes'),
        'section' => 'trickybytes_footer_section',
    ]));

    // Copyright Section
    $wp_customize->add_setting('footer_copyright_text', ['default' => '© 2024 All Rights Reserved', 'sanitize_callback' => 'sanitize_text_field']);
    $wp_customize->add_control('footer_copyright_text', [
        'label' => __('Copyright Text', 'trickybytes'),
        'type' => 'text',
        'section' => 'trickybytes_footer_section',
    ]);

    $wp_customize->add_setting('footer_copyright_text_color', ['default' => '#fff', 'sanitize_callback' => 'sanitize_hex_color']);
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'footer_copyright_text_color', [
        'label' => __('Copyright Text Color', 'trickybytes'),
        'section' => 'trickybytes_footer_section',
    ]));
}

add_action('customize_register', 'trickybytes_customize_register');



function trickybytes_register_menus() {
    register_nav_menus([
        'footer_menu'  => __('Footer Menu', 'trickybytes'),
    ]);
}
add_action('after_setup_theme', 'trickybytes_register_menus');
