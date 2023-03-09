<?php defined('ABSPATH') or die('No script kiddies please!');


add_action('admin_menu', function () {
    global $myphPageHook;

    $myphPageHook = add_menu_page(
        __('Prophets Horoscope Settings', 'prophets_horoscope'),
        __('Prophets Horoscope Settings', 'prophets_horoscope'),
        'administrator',
        'myph',
        function () {
            include(MYPH_ADMIN_PAGES . 'settings.php');
        },
        'dashicons-media-default'
    );
});
