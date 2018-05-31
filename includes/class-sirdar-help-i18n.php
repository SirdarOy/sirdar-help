<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       http://sirdar.fi
 * @since      1.0.0
 *
 * @package    Sirdar_Help
 * @subpackage Sirdar_Help/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Sirdar_Help
 * @subpackage Sirdar_Help/includes
 * @author     Jukka Rautanen <support@sirdar.fi>
 */
class Sirdar_Help_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {
		$loaded = load_plugin_textdomain(
			'sirdar-help',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);
		if ( !$loaded ) {
			load_muplugin_textdomain(
				'sirdar-help',
				dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
			);
		}
	}
}
