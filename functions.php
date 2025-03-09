<?php
// Define secure paths
define('TRICKYBYTES_CORE', get_template_directory() . '/core/');
define('TRICKYBYTES_ASSETS', get_template_directory_uri() . '/core/assets/');
define('TRICKYBYTES_TEMPLATES', get_template_directory() . '/core/templates/');
define('TRICKYBYTES_INC', get_template_directory() . '/core/inc/');
define('TRICKYBYTES_TEMPLATES_HOME', get_template_directory() . '/core/public/templates/');
define('TRICKYBYTES_ADMIN_CUSTOMIZATION', get_template_directory() . '/core/inc/admin/');

// Include theme core files
require_once TRICKYBYTES_INC . 'enqueue.php';
require_once TRICKYBYTES_INC . 'setup.php';
require_once TRICKYBYTES_INC . 'security.php';
require_once TRICKYBYTES_INC . 'widgets.php';
require_once TRICKYBYTES_INC . 'footer_customizer.php';
require_once TRICKYBYTES_INC . 'header_customizer.php';
require_once TRICKYBYTES_ADMIN_CUSTOMIZATION . 'tb-hero-admin.php';
require_once TRICKYBYTES_ADMIN_CUSTOMIZATION . 'tb-brand-admin.php';