<?php
function trickybytes_widgets_init() {
    register_sidebar([
        'name' => __('Sidebar', 'trickybytes'),
        'id' => 'sidebar-1',
        'description' => __('Add widgets here.', 'trickybytes'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ]);
}
add_action('widgets_init', 'trickybytes_widgets_init');
