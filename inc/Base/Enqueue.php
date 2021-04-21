<?php

/**
 * @PluginStructure
 */

namespace Inc\Base;

class Enqueue
{
    public function register()
    {
        add_action('admin_enqueue_scripts', array($this, 'enqueue'));
    }

    function enqueue()
    {
        wp_enqueue_style('my_plugin_styles', PLUGIN_URL.'assets/style.css');
        wp_enqueue_script('my_plugin_scripts', PLUGIN_URL.'assets/script.js');
    }
}
