<?php defined('ABSPATH') or die('No script kiddies please!');


add_action('init', function () {
    add_shortcode('insert_horoscope', 'insertHoroscope');
});

function insertHoroscope($atts, $content = null)
{
    ob_start();
    include(MYPH_ROOTDIR . 'site/templates/horoscopeWidget.php');
    return do_shortcode(ob_get_clean());
}
