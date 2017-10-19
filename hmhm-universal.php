<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://www.helpmehelpmomma.com
 * @since             1.0.0
 * @package           Hmhm_Universal
 *
 * @wordpress-plugin
 * Plugin Name:       HMHM Universal Plugin
 * Plugin URI:        https://github.com/BurtThaMan/HMHM-Universal-Plugin
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Matthew Burt
 * Author URI:        https://www.helpmehelpmomma.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       hmhm-universal
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

define( 'PLUGIN_NAME_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-hmhm-universal-activator.php
 */
function activate_hmhm_universal() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-hmhm-universal-activator.php';
	Hmhm_Universal_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-hmhm-universal-deactivator.php
 */
function deactivate_hmhm_universal() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-hmhm-universal-deactivator.php';
	Hmhm_Universal_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_hmhm_universal' );
register_deactivation_hook( __FILE__, 'deactivate_hmhm_universal' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-hmhm-universal.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_hmhm_universal() {

	$plugin = new Hmhm_Universal();
	$plugin->run();

}
run_hmhm_universal();
