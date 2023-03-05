<?php defined('ABSPATH') or die('No script kiddies please!');


function MYPH_activate_function()
{
    global $wpdb;
    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');

    $horoscopes_tbl = $wpdb->prefix . MYPH_HOROSCOPES_TBL;
    $createHoroscopesTable =
        "
		CREATE TABLE IF NOT EXISTS `{$horoscopes_tbl}` (
            `id` int(11) NOT NULL AUTO_INCREMENT,
            `h_name` varchar(55) COLLATE utf8_unicode_ci DEFAULT NULL,
            `h_result` enum('عالی','خوب','بد') COLLATE utf8_unicode_ci DEFAULT NULL,
            `h_luckyday` varchar(155) COLLATE utf8_unicode_ci DEFAULT NULL,
            `h_dobeity` text COLLATE utf8_unicode_ci DEFAULT NULL,
            `h_description` text COLLATE utf8_unicode_ci DEFAULT NULL,
            `created_at` date DEFAULT NULL,
            `updated_at` date DEFAULT NULL,
            PRIMARY KEY (`id`)
          ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci
		";
    dbDelta($createHoroscopesTable);

    flush_rewrite_rules();
}

function MYPH_deactivate_function()
{
    flush_rewrite_rules();
}
