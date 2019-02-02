<?php
/**
 * @package MyanmarConverter
 * @version 1.0.0
 */

/*
Plugin Name: Myanmar Unicode Converter
Plugin URI: http://www.example.com
Description: This plugin detect shitty zawgyi fonts and convert it to unicode.
Author: Khun Zero
Version: 1.0.0
Author URI: http://www.example.com
*/

/*
MyanmarConverter  is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.
 
MyanmarConverter is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
 
You should have received a copy of the GNU General Public License
along with MyanmarConverter. If not, see {URI to Plugin License}.
*/

defined ('ABSPATH') or die('You can\t access this file.');

if( file_exists( dirname(__FILE__) . '/vendor/autoload.php') ) {
    require_once dirname(__FILE__) . '/vendor/autoload.php';
}

use App\Base\Activate;
use App\Base\Deactivate;

/**
 * activate plugin
 */
if(!function_exists('activate_mmconverter_plugin')) {
    function activate_mmconverter_plugin()
    {
        Activate::activate();
    }
}
register_activation_hook(__FILE__, 'activate_mmconverter_plugin');

/**
 * deactivate plugin 
 */
if(!function_exists('deactivate_mmconverter_plugin')) {
    function deactivate_mmconverter_plugin()
    {
        Deactivate::deactivate();
    }
}
register_deactivation_hook(__FILE__, 'deactivate_mmconverter_plugin');

/**
 * Register services (action, filters)
 */
if( class_exists('App\\Init') ) {
    \App\Init::register_services();
}