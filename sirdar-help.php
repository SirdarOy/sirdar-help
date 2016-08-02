<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://sirdar.fi
 * @since             1.0.0
 * @package           Sirdar_Help
 *
 * @wordpress-plugin
 * Plugin Name:       Sirdar Help
 * Plugin URI:        http://sirdar.fi
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Jukka Rautanen
 * Author URI:        http://sirdar.fi
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       sirdar-help
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-sirdar-help-activator.php
 */
function activate_sirdar_help() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-sirdar-help-activator.php';
	Sirdar_Help_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-sirdar-help-deactivator.php
 */
function deactivate_sirdar_help() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-sirdar-help-deactivator.php';
	Sirdar_Help_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_sirdar_help' );
register_deactivation_hook( __FILE__, 'deactivate_sirdar_help' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-sirdar-help.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_sirdar_help() {

	$plugin = new Sirdar_Help();
	$plugin->run();

}
run_sirdar_help();
