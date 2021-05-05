<?php

/**
 * @package PuglinStrucuture
 */
/*
Plugin Name: PuglinStrucuture
Description: las estructura de un plugin.
Version: 0.1.0
Contributors: ebani
Author: Jordy Sebastian Castaño Holguin
Author URI: https://github.com/xxjordyxx123/PluginStructure.git
License: GPLv2 or later
License URI:
Text Domain: PuglinStrucuture
Domain Path:
*/
//require_once 'Inc/Base/BaseController.php';
 
use Inc\StarInit;
use Inc\Base\BaseController;
use Inc\Base\Activate;
use Inc\Base\Deactivate;
//require_once 'Inc\Base\BaseController.php';
require_once 'Inc\StarInit.php';

define ('_MY_PLUGIN_DIR', plugin_dir_path(__FILE__));
define ( '_MY_PLUGIN_DIR_URL', plugin_dir_url(__FILE__) );
 


if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Requiere once the Composer Autoload
if ( file_exists( dirname( __FILE__ ) . '/vendor/autoload.php' ) ) {
	require_once dirname( __FILE__ ) . '/vendor/autoload.php';
}


/**
 * The code that runs during plugin activation
 */
function activate_plugin_ej() {
  error_log("ACTIVATE_PLUGIN entro aca");
  require_once plugin_dir_path( __FILE__ ).'Inc/Base/Activate.php';
	Activate::activate();
}


/**
 * The code that runs during plugin deactivation
 */
function deactivate_plugin_ej() {
  error_log("DEACTIVATE_PLUGIN entro aca");
  require_once plugin_dir_path( __FILE__ ).'Inc/Base/Deactivate.php';
  Deactivate::deactivate();
}

register_activation_hook( __FILE__, 'activate_plugin_ej' );
register_deactivation_hook( __FILE__, 'deactivate_plugin_ej' );


 //function register() {
	//	     error_log("entro a register starInit");
		//	   register_widget( 'BaseController' );	  
	 //}	
	 //add_action ( 'widgets_init', 'register' );
  


//function action(){
//  require_once plugin_dir_path( __FILE__ ).'Inc/Base/BaseController.php';
  
// register_widget( 'BaseController' );
 // error_log("action() entro aca");
//Inc\StarInit::register();

//}
//add_action( "widgets_init", 'action' );
//
//register_activation_hook( __FILE__, 'action' );
 

//if ( is_admin() || ( defined( 'WP_CLI' ) && WP_CLI ) ) {
 
//  require_once ( _MY_PLUGIN_DIR . 'Inc\Base\BaseController.php' );


//  register_activation_hook( __FILE__, 'activation' );


  // aquí funciones de activación
  // menús de administración
  // scripts
//
//}



//Segundo forma de hacer 
//function creator_widget(){
//  register_widget( 'BaseController' );
//}
//add_action( "widgets_init", 'creator_widget' );


//register_activation_hook( "hook_activation", "activation" );
//add_action('init','register_services');
//register_activation_hook( __FILE__, 'register_services' );


// Initializes all the Core classes of the plugin
 if ( class_exists( 'Inc\\StarInit') ) {
  error_log("entro a register_services() starInit");
	Inc\StarInit::CreatorWidget();
}






