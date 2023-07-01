<?php

/**
 * Plugin Name: Horoscope of the prophets
 * Plugin URI:  http://localhost
 * Description: Use [insert_horoscope] to view horoscope shortcode on the page.
 * Version: 1.1.0
 * Author: ZeroOne
 * Author URI: https://github.com/tuderiewsc
 * Text Domain: prophets_horoscope
 * Domain Path: /languages
 */
defined('ABSPATH') or die('No script kiddies please!');
define('MYPH_ROOTDIR', plugin_dir_path(__FILE__));
define('MYPH_INC', MYPH_ROOTDIR . 'includes/');
define('MYPH_ADMIN', MYPH_ROOTDIR . 'admin/');
define('MYPH_ADMIN_PAGES', MYPH_ROOTDIR . 'admin/pages/');
define('MYPH_ADMIN_CSS', plugin_dir_url(__FILE__) . 'admin/static/css/');
define('MYPH_SITE_JS', plugin_dir_url(__FILE__) . 'site/static/js/');
define('MYPH_SITE_CSS', plugin_dir_url(__FILE__) . 'site/static/css/');
define('MYPH_SITE_IMAGES', plugin_dir_url(__FILE__) . 'site/static/images/');
define('MYPH_HOROSCOPES_TBL', 'horoscopes');


add_action('plugins_loaded', function () {
    load_plugin_textdomain('prophets_horoscope', false, basename(MYPH_ROOTDIR) . '/languages/');
});

if (!function_exists('get_plugin_data'))
    require_once(ABSPATH . 'wp-admin/includes/plugin.php');


add_action('admin_enqueue_scripts', function () {
    $pluginVersion = (get_plugin_data(__FILE__, false))['Version'];

    wp_enqueue_style('myph-admin-styles', MYPH_ADMIN_CSS . 'admin-styles.css', array(), $pluginVersion);
});

/** Inits */
include(MYPH_ROOTDIR . 'base_functions.php');
register_activation_hook(__FILE__, 'MYPH_activate_function');
register_deactivation_hook(__FILE__, 'MYPH_deactivate_function');
include(MYPH_INC . 'shortcodes.php');
if (is_admin()) {
    include(MYPH_ADMIN . 'ajax_requests.php');
    include(MYPH_ADMIN . 'admin_process.php');

    /** Add settings link to plugin-title  */
    add_filter('plugin_action_links_' . plugin_basename(__FILE__), 'myph_settings_link');
    function myph_settings_link(array $links)
    {
        $url = get_admin_url() . "admin.php?page=myph";
        $settingsLink = '<a href="' . $url . '">' . __('Settings', 'prophets_horoscope') . '</a>';
        $links[] = $settingsLink;
        return $links;
    }
}
