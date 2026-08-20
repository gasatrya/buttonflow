<?php
/**
 * ButtonFlow - Sticky Floating Mobile Button for Call, Messaging & Booking
 *
 * @package           ButtonFlow
 * @author            Ga Satrya
 * @copyright         2026 Ga Satrya
 * @license           GPL-2.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name:       ButtonFlow
 * Plugin URI:        https://gasatrya.com/wp-plugins/buttonflow/
 * Description:       Add a permanent floating CTA button to your site on mobile. One tap to call, book, or message. Zero code required.
 * Version:           1.3.1
 * Requires at least: 6.5
 * Requires PHP:      8.0
 * Author:            Ga Satrya
 * Author URI:        https://gasatrya.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       buttonflow
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit();
}

// Load class files.
require_once __DIR__ . '/includes/Core.php';
require_once __DIR__ . '/includes/Admin/Settings.php';
require_once __DIR__ . '/includes/Frontend/Renderer.php';

/**
 * Initialize the plugin.
 */
function buttonflow_init() {
	// Initialize the main plugin class.
	\ButtonFlow\Core::get_instance();
}
add_action( 'plugins_loaded', 'buttonflow_init' );
