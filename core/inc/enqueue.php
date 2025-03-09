<?php
function trickybytes_enqueue_assets() {
    // Enqueue Styles
    wp_enqueue_style('trickybytes-bootstrap', TRICKYBYTES_ASSETS . 'css/bootstrap.min.css', [], '5.0', 'all');
    // wp_enqueue_style('fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css', array(), '6.5.1', 'all');
    wp_enqueue_style('trickybytes-all', TRICKYBYTES_ASSETS . 'css/all.min.css', [], '1.0', 'all');
    wp_enqueue_style('trickybytes-animate', TRICKYBYTES_ASSETS . 'css/animate.css', [], '1.0', 'all');
    wp_enqueue_style('trickybytes-popup', TRICKYBYTES_ASSETS . 'css/magnific-popup.css', [], '1.0', 'all');
    wp_enqueue_style('trickybytes-meanmenu', TRICKYBYTES_ASSETS . 'css/meanmenu.css', [], '1.0', 'all');
    wp_enqueue_style('trickybytes-swiper', TRICKYBYTES_ASSETS . 'css/swiper-bundle.min.css', [], '1.0', 'all');
    wp_enqueue_style('trickybytes-nice-select', TRICKYBYTES_ASSETS . 'css/nice-select.css', [], '1.0', 'all');
    wp_enqueue_style('trickybytes-main', TRICKYBYTES_ASSETS . 'css/main.css', [], '1.0', 'all');
    wp_enqueue_style('trickybytes-style', get_stylesheet_uri(), [], '1.0', 'all');

    // Enqueue Scripts (Placed in Footer)
    wp_enqueue_script('jquery'); // Ensure jQuery is loaded
    wp_enqueue_script('trickybytes-viewport', TRICKYBYTES_ASSETS . 'js/viewport.jquery.js', ['jquery'], '1.0', true);
    wp_enqueue_script('trickybytes-bootstrap', TRICKYBYTES_ASSETS . 'js/bootstrap.bundle.min.js', ['jquery'], '5.0', true);
    wp_enqueue_script('trickybytes-nice-select', TRICKYBYTES_ASSETS . 'js/jquery.nice-select.min.js', ['jquery'], '1.0', true);
    wp_enqueue_script('trickybytes-waypoints', TRICKYBYTES_ASSETS . 'js/jquery.waypoints.js', ['jquery'], '1.0', true);
    wp_enqueue_script('trickybytes-counterup', TRICKYBYTES_ASSETS . 'js/jquery.counterup.min.js', ['jquery'], '1.0', true);
    wp_enqueue_script('trickybytes-swiper', TRICKYBYTES_ASSETS . 'js/swiper-bundle.min.js', ['jquery'], '1.0', true);
    wp_enqueue_script('trickybytes-meanmenu', TRICKYBYTES_ASSETS . 'js/jquery.meanmenu.min.js', ['jquery'], '1.0', true);
    wp_enqueue_script('trickybytes-popup', TRICKYBYTES_ASSETS . 'js/jquery.magnific-popup.min.js', ['jquery'], '1.0', true);
    wp_enqueue_script('trickybytes-wow', TRICKYBYTES_ASSETS . 'js/wow.min.js', ['jquery'], '1.0', true);
    wp_enqueue_script('trickybytes-main', TRICKYBYTES_ASSETS . 'js/main.js', ['jquery'], '1.0', true);

    // Localize script for AJAX (if needed)
    wp_localize_script('trickybytes-main', 'trickybytes_ajax', ['ajax_url' => admin_url('admin-ajax.php')]);
}
add_action('wp_enqueue_scripts', 'trickybytes_enqueue_assets');
