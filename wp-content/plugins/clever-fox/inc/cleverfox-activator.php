<?php

/**
 * Fired during plugin activation
 *
 * @package    Clever-fox
 */

/**
 * This class defines all code necessary to run during the plugin's activation.
 *
 */
class Cleverfox_Activator {

	public static function activate() {

        $item_details_page = get_option('item_details_page'); 
		$theme = wp_get_theme(); // gets the current theme
		if(!$item_details_page){
			if ( 'StartKit' == $theme->name){
				require CLEVERFOX_PLUGIN_DIR . 'inc/startkit/default-pages/upload-media.php';
				require CLEVERFOX_PLUGIN_DIR . 'inc/startkit/default-pages/home-page.php';
				require CLEVERFOX_PLUGIN_DIR . 'inc/startkit/default-widgets/default-widget.php';
			}
			
			if ( 'StartBiz' == $theme->name){
				require CLEVERFOX_PLUGIN_DIR . 'inc/startbiz/default-pages/upload-media.php';
				require CLEVERFOX_PLUGIN_DIR . 'inc/startkit/default-pages/home-page.php';
				require CLEVERFOX_PLUGIN_DIR . 'inc/startbiz/default-widgets/default-widget.php';
			}
			
			if ( 'Arowana' == $theme->name){
				require CLEVERFOX_PLUGIN_DIR . 'inc/arowana/default-pages/upload-media.php';
				require CLEVERFOX_PLUGIN_DIR . 'inc/startkit/default-pages/home-page.php';
				require CLEVERFOX_PLUGIN_DIR . 'inc/arowana/default-widgets/default-widget.php';
			}
			if ( 'Envira' == $theme->name){
				require CLEVERFOX_PLUGIN_DIR . 'inc/envira/default-pages/upload-media.php';
				require CLEVERFOX_PLUGIN_DIR . 'inc/startkit/default-pages/home-page.php';
				require CLEVERFOX_PLUGIN_DIR . 'inc/envira/default-widgets/default-widget.php';
			}	
			
			if ( 'Hantus' == $theme->name){
				require CLEVERFOX_PLUGIN_DIR . 'inc/hantus/default-pages/upload-media.php';
				require CLEVERFOX_PLUGIN_DIR . 'inc/hantus/default-pages/home-page.php';
				require CLEVERFOX_PLUGIN_DIR . 'inc/hantus/default-widgets/default-widget.php';
			}

			if ( 'Thai Spa' == $theme->name){
				require CLEVERFOX_PLUGIN_DIR . 'inc/thai-spa/default-pages/upload-media.php';
				require CLEVERFOX_PLUGIN_DIR . 'inc/thai-spa/default-pages/home-page.php';
				require CLEVERFOX_PLUGIN_DIR . 'inc/thai-spa/default-widgets/default-widget.php';
			}

			if ( 'Conceptly' == $theme->name){
				require CLEVERFOX_PLUGIN_DIR . 'inc/conceptly/default-pages/upload-media.php';
				require CLEVERFOX_PLUGIN_DIR . 'inc/conceptly/default-pages/home-page.php';
				require CLEVERFOX_PLUGIN_DIR . 'inc/conceptly/default-widgets/default-widget.php';
			}	
			
			if ( 'Ameya' == $theme->name){
				require CLEVERFOX_PLUGIN_DIR . 'inc/ameya/default-pages/upload-media.php';
				require CLEVERFOX_PLUGIN_DIR . 'inc/ameya/default-pages/home-page.php';
				require CLEVERFOX_PLUGIN_DIR . 'inc/ameya/default-widgets/default-widget.php';
			}
			
			if ( 'Azwa' == $theme->name){
				require CLEVERFOX_PLUGIN_DIR . 'inc/azwa/default-pages/upload-media.php';
				require CLEVERFOX_PLUGIN_DIR . 'inc/azwa/default-pages/home-page.php';
				require CLEVERFOX_PLUGIN_DIR . 'inc/azwa/default-widgets/default-widget.php';
			}
			
			if ( 'Avril' == $theme->name){
				require CLEVERFOX_PLUGIN_DIR . 'inc/avril/default-pages/upload-media.php';
				require CLEVERFOX_PLUGIN_DIR . 'inc/avril/default-pages/home-page.php';
				require CLEVERFOX_PLUGIN_DIR . 'inc/avril/default-widgets/default-widget.php';
			}
			
			if ( 'Aera' == $theme->name){
				require CLEVERFOX_PLUGIN_DIR . 'inc/aera/default-pages/upload-media.php';
				require CLEVERFOX_PLUGIN_DIR . 'inc/aera/default-pages/home-page.php';
				require CLEVERFOX_PLUGIN_DIR . 'inc/aera/default-widgets/default-widget.php';
			}
			
			if ( 'Avail' == $theme->name){
				require CLEVERFOX_PLUGIN_DIR . 'inc/avail/default-pages/upload-media.php';
				require CLEVERFOX_PLUGIN_DIR . 'inc/avail/default-pages/home-page.php';
				require CLEVERFOX_PLUGIN_DIR . 'inc/avail/default-widgets/default-widget.php';
			}
			
			update_option( 'item_details_page', 'Done' );
		}
	}

}