<?php

/**
 * The file that creates custom tables
 *
 * A class definition custom tables if they don't already exist
 *
 * @link       https://github.com/janezsarlah
 * @since      1.0.0
 *
 * @package    Wk_Crm
 * @subpackage Wk_Crm/includes
 */

global $wpdb;

/**
 * The core plugin class.
 *
 * A class definition custom tables if they don't already exist
 *
 * @since      1.0.0
 * @package    Wk_Crm
 * @subpackage Wk_Crm/includes
 * @author     Janez Šarlah <janez.sarlah@av-studio.si>
 */
class Wk_Crm_Create_Custom_tables {
    
    /**
	 * Sets user table name with the right prefix
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      Wk_Crm_Users_Table_Name    $users_table_name    Table name
	 */
	protected $users_table_name;

    public function __constructor() {
        $this->$users_table_name = $wpdb->base_prefix . 'crm_users';
    }
}