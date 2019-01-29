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

defined ('ABSPATH') or die('Hey, you can\t access this file.');

class MyanmarConverter
{
    public function __construct()
    {
        //
    }

    public function register()
    {
        //actions
        add_action('init', array($this, 'custom_post_type'));

        //filter
        add_filter('wp_insert_post_data', array($this, 'filter_post_data'), '99', 2);
        add_action('pre_category_name', array($this, 'do_something'));
        add_action('pre_category_description', array($this, 'do_something'));
        add_action('pre_post_tag_name', array($this, 'do_something'));
        add_action('pre_post_tag_description', array($this, 'do_something'));
    }

    public function activate()
    {
        // generate CPI
        $this->custom_post_type();
        // flush rewrite rules
        flush_rewrite_rules();
    }

    public function deactivate()
    {
        // flush rewrite rules
        flush_rewrite_rules();
    }

    public function custom_post_type()
    {
        register_post_type('book', ['public' => true, 'label' => 'Book' ]);
    }

    public function filter_post_data($data, $postarr)
    {
        // $data['post_title'] = 'Hello World '.$data['post_title'];
        // $data['post_content'] = $data['post_content'];
        // $data['post_excerpt'] = $data['post_excerpt'];
        return $data;
    }

    public function do_something($data)
    {
        return $data;
    }
}

if( class_exists('MyanmarConverter') ) {
    $converter = new MyanmarConverter();
    $converter->register();
}

//activation
register_activation_hook(__FILE__, array( $converter, 'activate' ) );

//deactivation
register_deactivation_hook(__FILE__, array( $converter, 'deactivate' ) );