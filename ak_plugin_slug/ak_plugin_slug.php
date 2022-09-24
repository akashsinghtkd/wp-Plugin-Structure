<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              ak_plugin_auther_uri
 * @since             1.0.0
 * @package           Ak_plugin_slug
 *
 * @wordpress-plugin
 * Plugin Name:       ak_plugin_Name
 * Plugin URI:        ak_plugin_url
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            ak_plugin_author_name
 * Author URI:        ak_plugin_auther_uri
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       ak_plugin_slug
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
define( 'AK_PLUGIN_SLUG_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-ak_plugin_slug-activator.php
 */
function activate_ak_plugin_slug() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-ak_plugin_slug-activator.php';
	Ak_plugin_slug_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-ak_plugin_slug-deactivator.php
 */
function deactivate_ak_plugin_slug() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-ak_plugin_slug-deactivator.php';
	Ak_plugin_slug_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_ak_plugin_slug' );
register_deactivation_hook( __FILE__, 'deactivate_ak_plugin_slug' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-ak_plugin_slug.php';

/**
 * This file is use for connect the db for run the laravel function
 * This also include the migrations, models
 */
require plugin_dir_path( __FILE__ ) . "bootstrap.php";

// $user = User::Create([    'name' => "Ahmed Khan",    'email' => "ahmed.khan@lbs.com",    'password' => password_hash("ahmedkhan",PASSWORD_BCRYPT), ]);
// $user->todo()->create([
// 	'todo' => "Working with Eloquent Without PHP",
// 	'category' => "eloquent",
// 	'description' => "Testing the work using eloquent without laravel"
// ]);



/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_ak_plugin_slug() {

	$plugin = new Ak_plugin_slug();
	$plugin->run();

}
run_ak_plugin_slug();
