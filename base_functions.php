<?php defined('ABSPATH') or die('No script kiddies please!');


function MYPH_activate_function()
{
    require(MYPH_ROOTDIR . 'helpers/db.php');
    sleep(1);
    require(MYPH_ROOTDIR . 'helpers/db_seed.php');


    register_uninstall_hook(__FILE__, 'prophetsHoroscopeUninstall');
    flush_rewrite_rules();
}

function MYPH_deactivate_function()
{
    flush_rewrite_rules();
}

function prophetsHoroscopeUninstall()
{
    //if (get_option('should_delete_myph_db')) {
    global $wpdb;
    $table = $wpdb->prefix . MYPH_HOROSCOPES_TBL;
    $wpdb->query("DROP TABLE IF EXISTS ${table}");
    //}
}
