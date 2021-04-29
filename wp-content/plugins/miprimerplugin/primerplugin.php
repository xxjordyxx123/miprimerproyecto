<?php
/**
 * Plugin Name: wpplugi -ejemplo
 * Plugin URI: https://getshortcodes.com/
 * Version: 5.9.8
 * Author: Vladimir Anokhin
 * Author URI: https://getshortcodes.com/
 * Description: un pluguin de prueba
 * Text Domain: shortcodes-ultimate
 * License: GPLv3
 * Requires PHP: 5.3
 * Requires at least: 4.6
 * Tested up to: 5.7
 */
require_once 'mi_widget_class.php';




    function widget_carga(){
        register_widget("mi_widget_class");
    }


add_action("widgets_init","widget_carga");
// echo "Hola mundo plugins";