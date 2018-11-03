<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * Dashboard. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://webrockstar.net
 * @since             0.0.1
 * @package           Notes_Widget_Wrapper
 *
 * @wordpress-plugin
 * Plugin Name:       Notes Widget Wrapper
 * Plugin URI:        http://webrockstar.net
 * Description:       Wraps widgets in a "sticky note" style wrapper
 * Version:           1.2.0
 * Author:            Steve Puddick
 * Author URI:        http://webrockstar.net
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       notes-widget-wrapper
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-notes-widget-wrapper-activator.php
 */
function activate_Notes_Widget_Wrapper() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-notes-widget-wrapper-activator.php';
	Notes_Widget_Wrapper_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-notes-widget-wrapper-deactivator.php
 */
function deactivate_Notes_Widget_Wrapper() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-notes-widget-wrapper-deactivator.php';
	Notes_Widget_Wrapper_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_Notes_Widget_Wrapper' );
register_deactivation_hook( __FILE__, 'deactivate_Notes_Widget_Wrapper' );

/**
 * The core plugin class that is used to define internationalization,
 * dashboard-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-notes-widget-wrapper.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    0.0.1
 */
function run_Notes_Widget_Wrapper() {

	$plugin = new Notes_Widget_Wrapper();
	$plugin->run();

}
run_Notes_Widget_Wrapper();
