<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       ak_plugin_auther_uri
 * @since      1.0.0
 *
 * @package    Ak_plugin_slug
 * @subpackage Ak_plugin_slug/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Ak_plugin_slug
 * @subpackage Ak_plugin_slug/includes
 * @author     ak_plugin_author_name <ak_plugin_author_email>
 */
class Ak_plugin_slug_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'ak_plugin_slug',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
