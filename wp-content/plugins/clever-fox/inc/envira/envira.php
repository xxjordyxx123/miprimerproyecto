<?php
/**
 * @package   Envira
 */
 
require CLEVERFOX_PLUGIN_DIR . 'inc/startkit/features/section-slider.php';
require CLEVERFOX_PLUGIN_DIR . 'inc/startkit/features/section-info.php';
require CLEVERFOX_PLUGIN_DIR . 'inc/startkit/features/section-service.php';
require CLEVERFOX_PLUGIN_DIR . 'inc/envira/features/funfact-section.php';
require CLEVERFOX_PLUGIN_DIR . 'inc/startkit/features/navigation.php';
require CLEVERFOX_PLUGIN_DIR . 'inc/startkit/features/section-typography.php';
require CLEVERFOX_PLUGIN_DIR . 'inc/startkit/typography_style.php';


if ( ! function_exists( 'cleverfox_envira_frontpage_sections' ) ) :
	function cleverfox_envira_frontpage_sections() {	
		require CLEVERFOX_PLUGIN_DIR . 'inc/startkit/sections/section-slider.php';
		require CLEVERFOX_PLUGIN_DIR . 'inc/startkit/sections/section-flash.php';
		require CLEVERFOX_PLUGIN_DIR . 'inc/startkit/sections/section-service.php';
		require CLEVERFOX_PLUGIN_DIR . 'inc/envira/sections/section-funfact.php';
    }
	add_action( 'startkit_sections', 'cleverfox_envira_frontpage_sections' );
endif;

function cleverfox_envira_enqueue_scripts() {
	wp_enqueue_script( 'counterup', CLEVERFOX_PLUGIN_URL .'/inc/assets/js/jquery.counterup.min.js', array('jquery'), false, true);
}
add_action( 'wp_enqueue_scripts', 'cleverfox_envira_enqueue_scripts' );