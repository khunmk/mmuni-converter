<?php

namespace App\Base;

class Enqueue
{
    public $plugin_url;

    public function __construct()
    {
        $this->plugin_url = plugin_dir_url(dirname(__DIR__));
    }

    public function register()
    {
        add_action('admin_enqueue_scripts', array($this, 'enqueue'));
    }

    public function enqueue()
    {
        wp_enqueue_style( 'app_css', $this->plugin_url.'dist/css/app.css');

        wp_enqueue_script( 'app_js', $this->plugin_url.'dist/js/app.js' );
    }
}