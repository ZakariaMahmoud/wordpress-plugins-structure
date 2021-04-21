<?php

/**
 * @PluginStructure
 */

/*
 Plugin Name: Wordpress Plugins Structure
 Plugin URI: https://github.com/ZakariaMahmoud/wordpress-plugins-structure.git
 Description:Best Wordpress Plugins Structure
 Version:1.0.0
 Author: Mahmoud Zakaria
 Author URI: http//www.mahmoud.ma

 */


defined('ABSPATH') or die('Hey, you can\'t access this file, you silly human!');
define('PLUGIN_PATH', plugin_dir_path(__FILE__));
define('PLUGIN_URL', plugin_dir_url(__FILE__));
define('PLUGIN', plugin_basename(__FILE__));

if (file_exists(dirname(__FILE__) . '/vendor/autoload.php')) {
    require_once dirname(__FILE__) . '/vendor/autoload.php';
}

use Inc\Base\Activate;
use Inc\Base\Deactivate;

function activate_my_plugin(){
    Activate::activate();

}

function deactivate_my_plugin()
{
    Deactivate::deactivate();
}

register_activation_hook(__FILE__,'activate_my_plugin');
register_deactivation_hook(__FILE__, 'deactivate_my_plugin');


if (class_exists('Inc\\Init')) {
    Inc\Init::register_services();
}