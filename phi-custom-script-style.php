<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://painfreeidaho.com
 * @since             1.0.0
 * @package           Phi_Custom_Script_Style
 *
 * @wordpress-plugin
 * Plugin Name:       PainFreeIdaho Custom Script and Style
 * Plugin URI:        https://painfreeidaho.com
 * Description:       The plugin is to do custom script and style for the Pain Free Idaho
 * Version:           1.0.0
 * Author:            Ariel Cruz
 * Author URI:        https://painfreeidaho.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       phi-custom-script-style
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'PHI_CUSTOM_SCRIPT_STYLE_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-phi-custom-script-style-activator.php
 */
function activate_phi_custom_script_style() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-phi-custom-script-style-activator.php';
	Phi_Custom_Script_Style_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-phi-custom-script-style-deactivator.php
 */
function deactivate_phi_custom_script_style() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-phi-custom-script-style-deactivator.php';
	Phi_Custom_Script_Style_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_phi_custom_script_style' );
register_deactivation_hook( __FILE__, 'deactivate_phi_custom_script_style' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-phi-custom-script-style.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_phi_custom_script_style() {

	$plugin = new Phi_Custom_Script_Style();
	$plugin->run();

}
run_phi_custom_script_style();
