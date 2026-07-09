<?php
/**
 * Plugin Name: STT RMK Repository
 * Plugin URI: https://sttrmk.ac.id
 * Description: Academic Repository Plugin for STT Rumah Murid Kristus.
 * Version: 1.0.0
 * Requires at least: 6.6
 * Requires PHP: 8.1
 * Author: STT RMK
 * Author URI: https://sttrmk.ac.id
 * License: GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: sttrmk-repository
 * Domain Path: /languages
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/*
|--------------------------------------------------------------------------
| Plugin Constants
|--------------------------------------------------------------------------
*/

define( 'STTRMK_REPOSITORY_VERSION', '1.0.0' );

define( 'STTRMK_REPOSITORY_FILE', __FILE__ );

define( 'STTRMK_REPOSITORY_PATH', plugin_dir_path( __FILE__ ) );

define( 'STTRMK_REPOSITORY_URL', plugin_dir_url( __FILE__ ) );

/*
|--------------------------------------------------------------------------
| Includes
|--------------------------------------------------------------------------
*/

require_once STTRMK_REPOSITORY_PATH . 'includes/class-loader.php';
require_once STTRMK_REPOSITORY_PATH . 'includes/class-activator.php';
require_once STTRMK_REPOSITORY_PATH . 'includes/class-deactivator.php';

/*
|--------------------------------------------------------------------------
| Activation
|--------------------------------------------------------------------------
*/

register_activation_hook(
	STTRMK_REPOSITORY_FILE,
	array( 'STTRMK_Repository_Activator', 'activate' )
);

register_deactivation_hook(
	STTRMK_REPOSITORY_FILE,
	array( 'STTRMK_Repository_Deactivator', 'deactivate' )
);

/*
|--------------------------------------------------------------------------
| Start Plugin
|--------------------------------------------------------------------------
*/

function sttrmk_repository() {

	return STTRMK_Repository_Loader::instance();

}

sttrmk_repository();
