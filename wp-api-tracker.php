<?php
/**
 * @wordpress-plugin
 * Plugin Name:       WP API Tracker
 * Plugin URI:        https://github.com/salar90/wp-api-tracker
 * Description:       Track and Analyse WordPress API calls and requests.
 * Version:           1.0.0
 * Author:            Salar Gholizadeh
 * Author URI:        http://salar.one/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       api-tracker
 * Domain Path:       /languages
 */


if ( ! defined( 'WPINC' ) ) {
	die;
}
require_once __DIR__ . "/administration.php";
register_uninstall_hook(__FILE__, 'sg_api_tracker_uninstall');
register_activation_hook( __FILE__, 'sg_api_tracker_activation' );
register_deactivation_hook( __FILE__, 'sg_api_tracker_deactivation' );

function sg_init_api_tracker(){
	include_once __DIR__ . "/class-wp-api-tracker.php";
	global $WP_API_Tracker;
	$WP_API_Tracker = new SG_API_Tracker();
}
sg_init_api_tracker();