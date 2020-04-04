<?php

/**
 * Plugin Name:       Donate Plugin
 * Plugin URI:        
 * Description:       
 * Author:            Priyan Darshana
 * Version:           1.0
 
 */
if (!defined('ABSPATH')) exit;
require_once(dirname(__FILE__) . '/function.php');

// main class start
class Ds_charity
{


    function __construct()
    {
        $this->plugin =  plugin_basename(__FILE__);
    }
    
    function register()
    {
        add_action('admin_menu', array($this, 'add_admin_pages'));
    }

    public function add_admin_pages()
    {
        // admin panel  plugin page creation
        add_menu_page('Donation Plugin', 'Donation ', 'manage_options', 'pd_donation', array($this, 'admin_index'), 'dashicons-cloud', 110);
    }

    public function admin_index()
    {
        // weather plugin admin page include
        require_once plugin_dir_path(__FILE__) . 'templates/admin.php';
    }

    function activate()
    {      
        flush_rewrite_rules();
    }

    function deactivate()
    {
    }

    function uninstall()
    {
    }



    //Table Generating code when plugin activate
    function custom_plugin_tables()
    {
        global $wpdb;
        require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
        if (count($wpdb->get_var('SHOW TABLES LIKE "wp_donation"')) == 0) {
            $sql_query_to_create_table = "CREATE TABLE `wp_donation` (
                `id` int(255) NOT NULL AUTO_INCREMENT,
                `couse_id` int(255) NOT NULL,
                `donor_name` varchar(255) NOT NULL,
                `donor_email` varchar(255) NOT NULL,
                `donor_phone` varchar(255) NOT NULL,
                `donor_address` varchar(255) NOT NULL,
                `donation_amount` int(255) NOT NULL,
                `donor_message` varchar(255) NOT NULL,
                PRIMARY KEY (`id`)
               ) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4";
            dbDelta($sql_query_to_create_table);
        }
    }
}
// main class end



if (class_exists('Ds_charity')) {
    $ds_charity = new Ds_charity();
    $ds_charity->register();
}


// activation 
register_activation_hook(__FILE__, array($ds_charity, 'custom_plugin_tables'));

// deactivation 
register_deactivation_hook(__FILE__, array($ds_charity, 'deactivate'));
