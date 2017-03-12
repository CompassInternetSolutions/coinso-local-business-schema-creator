<?php
/*
Plugin Name: Coinso Local Business Schema
Plugin URI: https://github.com/coinso/coinso-local-business-schema-creator
Description: create your local schema and add to pages and posts with shortcode
Version: 0.1.0
Author: ido @coinso.com
Author URI: http://coinso.com
Text Domain: coinso_lbs
Domain Path: /languages
*/

if( !defined('ABSPATH') ){
    exit();
}

//Setup



//Includes
//1.1 include registration
include('inc/coinso_lbs_activate_plugin.php');



//Hooks
//1.1 regster activation
register_activation_hook(__FILE__, 'coinso_lbs_activate_plugin');


//Shorcodes
add_action('admin_menu', 'coinso_lbs_plugin_menu');
add_action('admin_init', 'coinso_lbs_admin_init');

/*
 * add plugin's options page
 *
 */
function coinso_lbs_plugin_menu(){
    add_options_page('Compass Local Business Schema Creator','Compass Local Business Schema Creator', 'manage_options','coinso_lbs','coinso_lbs_options' );
}
/*
 * register the settings
 */
function coinso_lbs_admin_init(){
    register_setting('coinso_lbs_group', 'coinso_lbs_dashboard_title');
    register_setting('coinso_lbs_group', 'coinso_lbs_number_of_items');
}
function coinso_lbs_options(){

}