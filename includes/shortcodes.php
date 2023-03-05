<?php defined('ABSPATH') or die('No script kiddies please!');


add_action('init', function () {
    add_shortcode('insert_horoscope', 'insertHoroscope');
});

function insertHoroscope($atts, $content = null)
{
    echo '<button onclick="loadRandomHoroscope(event)">Go!</button>';
}
