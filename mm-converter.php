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
{Plugin Name} is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.
 
{Plugin Name} is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
 
You should have received a copy of the GNU General Public License
along with {Plugin Name}. If not, see {URI to Plugin License}.
*/

defined ('ABSPATH') or die('You can\t access this file.');

if( file_exists( dirname(__FILE__) . '/vendor/autoload.php') ) {
    require_once dirname(__FILE__) . '/vendor/autoload.php';
}

if( class_exists('App\\Init') ) {
    \App\Init::register_services();
}