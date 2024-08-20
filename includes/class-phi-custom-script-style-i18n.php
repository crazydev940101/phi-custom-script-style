<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://painfreeidaho.com
 * @since      1.0.0
 *
 * @package    Phi_Custom_Script_Style
 * @subpackage Phi_Custom_Script_Style/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Phi_Custom_Script_Style
 * @subpackage Phi_Custom_Script_Style/includes
 * @author     Ariel Cruz <ariel@ieproductions.com>
 */
class Phi_Custom_Script_Style_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'phi-custom-script-style',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
