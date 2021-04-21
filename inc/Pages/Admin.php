<?php

/**
 * @PluginStructure
 */

namespace Inc\Pages;

/**
 * 
 */
class Admin
{
    public function register()
    {
        add_action('admin_menu', array($this, 'add_admin_pages'));
    }

    public function add_admin_pages()
    {
        add_menu_page('WP Plugins Structure', 'WP Plugins Structure', 'manage_options', 'wordpress-plugins-structure', array($this, 'admin_index'), 'dashicons-networking', 10);
    }

    public function admin_index()
    {
         require_once PLUGIN_PATH .  'templates/admin.php';
    }
}