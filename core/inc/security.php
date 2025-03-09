<?php
// Remove WordPress version for security
remove_action('wp_head', 'wp_generator');

// Disable XML-RPC to prevent brute force attacks
add_filter('xmlrpc_enabled', '__return_false');

// Disable file editing from the WordPress dashboard
define('DISALLOW_FILE_EDIT', true);

// Secure header outputs
function trickybytes_security_headers() {
    header('X-Frame-Options: SAMEORIGIN'); // Prevent clickjacking
    header('X-XSS-Protection: 1; mode=block'); // Prevent XSS
    header('X-Content-Type-Options: nosniff'); // Prevent MIME sniffing
}
add_action('send_headers', 'trickybytes_security_headers');
