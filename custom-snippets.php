<?php
/**
 * Plugin Name: Custom Snippets
 * Description: Custom functionality snippets for the site.
 * Version:     1.0.0
 * Author:
 * License:     GPL-2.0-or-later
 * Text Domain: custom-snippets
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

define( 'CUSTOM_SNIPPETS_VERSION', '1.0.0' );
define( 'CUSTOM_SNIPPETS_DIR', plugin_dir_path( __FILE__ ) );
define( 'CUSTOM_SNIPPETS_URL', plugin_dir_url( __FILE__ ) );

// Load includes
foreach ( glob( CUSTOM_SNIPPETS_DIR . 'includes/*.php' ) as $file ) {
    require_once $file;
}
