<?php

namespace Inc ;
use Base\BaseController;
//require_once 'Base\BaseController.php';

//require_once (get_template_directory().'Inc/Base/BaseController.php'); 

  final class StarInit 
{
	protected $loader;

	//add_action( 'init', 'register');

 // register_activation_hook( __FILE__, 'register' );

//$this->$loader->add_action( 'widgets_init', 'register' );



//creator widget
public static function CreatorWidget(){
	add_action( "widgets_init", 'CreatorWid' ); 
}


//registrar el widget
public static function CreatorWid(){
	require_once plugin_dir_path( __FILE__ ).'Base/BaseController.php';

	register_widget( 'BaseController' );
}


}