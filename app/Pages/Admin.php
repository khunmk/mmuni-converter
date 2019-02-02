<?php

namespace App\Pages;

class Admin
{
    public $plugin_path;

    public function __construct()
    {
        $this->plugin_path = plugin_dir_path(dirname(__DIR__));
    }

    public function register()
    {
        add_action('admin_menu', array($this, 'add_admin_pages'));
    }

    public function add_admin_pages()
    {
        add_menu_page('MM Converter', 'mm-converter', 'manage_options', 'mmconverter_plugin', array($this, 'admin_index'), 'dashicons-store', 110);
    }

    public function admin_index()
    {
        require_once $this->plugin_path . 'template/admin.php';
    }
}