<?php

/**
 * Plugin Name: Horoscope of the prophets
 * Plugin URI:  http://localhost
 * Description: ---
 * Version: 1.0.0
 * Author: ZeroOne
 * Author URI: https://github.com/tuderiewsc
 * Text Domain: prophets_horoscope
 * Domain Path: /languages
 */
defined('ABSPATH') or die('No script kiddies please!');
define('MYPH_ROOTDIR', plugin_dir_path(__FILE__));
define('MYPH_INC', MYPH_ROOTDIR . 'includes/');
define('MYPH_ADMIN', MYPH_ROOTDIR . 'admin/');
define('MYPH_ADMIN_JS', plugin_dir_url(__FILE__) . 'admin/static/js/');
define('MYPH_SITE_JS', plugin_dir_url(__FILE__) . 'site/static/js/');
define('MYPH_SITE_CSS', plugin_dir_url(__FILE__) . 'site/static/css/');
define('MYPH_HOROSCOPES_TBL', 'horoscopes');


add_action('plugins_loaded', function () {
    load_plugin_textdomain('prophets_horoscope', false, basename(MYPH_ROOTDIR) . '/languages/');
});

add_action('admin_enqueue_scripts', function () {
});
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('myph-main-styles', MYPH_SITE_CSS . 'styles.css', array(), '1.0.0');

    wp_enqueue_script('myph-main-script', MYPH_SITE_JS . 'scripts.js', array('jquery'), '1.0.0');
    wp_localize_script('myph-main-script', 'MYPH_SITE_AJAX', array(
        'AJAXURL' => admin_url('admin-ajax.php'),
        'SECURITY' => wp_create_nonce('Dnt3dUF8U4FRBNt3'),
        'REQUEST_TIMEOUT' => 30000,
    ));
});

/** Inits */
include(MYPH_ROOTDIR . 'base_functions.php');
register_activation_hook(__FILE__, 'MYPH_activate_function');
register_deactivation_hook(__FILE__, 'MYPH_deactivate_function');
include(MYPH_INC . 'shortcodes.php');
if (is_admin()) {
    include(MYPH_ADMIN . 'ajax_requests.php');
}
