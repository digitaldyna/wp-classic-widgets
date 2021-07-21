<?php
/**
 * Classic Widgets for WP
 *
 * Plugin Name: Classic Widgets for WP
 * Plugin URI:  https://wordpress.org/plugins/wp-classic-widgets/
 * Description: Classic Widgets for WP will will restore classic mode of widgets under Appearance -> Widgets and under Customizer -> Widgets. 
 * Version:     0.1
 * Author:      DigitalDyna
 * Author URI:  https://github.com/digitaldyna/wp-classic-widgets/
 * License:     GPLv2 or later
 * License URI: http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 * Text Domain: wp-classic-widgets
 * Domain Path: /languages
 * Requires at least: 4.8
 * Requires PHP: 5.6 or later
 *
 * This program is free software; you can redistribute it and/or modify it under the terms of the GNU
 * General Public License version 2, as published by the Free Software Foundation. You may NOT assume
 * that you can use any other version of the GPL.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without
 * even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( 'Don\'t play with me' );
}

if( !function_exists('digitaldyna_restore_default_widget')){
	function digitaldyna_restore_default_widget(){
		remove_theme_support( 'widgets-block-editor' );	
	}
	add_action( 'after_setup_theme', 'digitaldyna_restore_default_widget' );
}