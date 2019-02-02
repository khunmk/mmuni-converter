<?php

namespace App\Base;

class SettingLinks
{
    public $plugin_name;

    public function __construct()
    {
        $this->plugin_name = plugin_basename(dirname(__FILE__, 3) .'/mm-converter.php');
    }

    public function register()
    {
        add_filter("plugin_action_links_$this->plugin_name", array($this, 'settings_link'));
    }

    public function settings_link($links)
    {
        $setting_links = '<a href="admin.php?page=mmconverter_plugin">Settings</a>';

        array_push($links, $setting_links);

        return $links;
    }
}