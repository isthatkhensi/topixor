<?php
/**
 * Plugin Name: Topixor
 * Plugin URI: https://yourwebsite.com
 * Description: A plugin that scans content for keyword density and generates Content Clusters & Topical Maps.
 * Version: 1.0.0
 * Author: Your Name
 * Author URI: https://yourwebsite.com
 * License: GPL2
 */

// Prevent direct access
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Define constants
define( 'TOPIXOR_VERSION', '1.0.0' );
define( 'TOPIXOR_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'TOPIXOR_PLUGIN_URL', plugin_dir_url( __FILE__ ) );

// Include core files
require_once TOPIXOR_PLUGIN_DIR . 'includes/admin.php';
require_once TOPIXOR_PLUGIN_DIR . 'includes/analysis.php';
require_once TOPIXOR_PLUGIN_DIR . 'includes/report.php';

// Initialize plugin
function topixor_init() {
    new Topixor_Admin();
    new Topixor_Scanner();
    new Topixor_Reports();
}
add_action( 'plugins_loaded', 'topixor_init' );

// Activation & Deactivation hooks
register_activation_hook( __FILE__, 'topixor_activate' );
register_deactivation_hook( __FILE__, 'topixor_deactivate' );

function topixor_activate() {
    // Code to execute on plugin activation
}

function topixor_deactivate() {
    // Code to execute on plugin deactivation
}
