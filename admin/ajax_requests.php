<?php defined('ABSPATH') or die('No script kiddies please!');


function fetchHoroscopes_callback()
{
    if (
        !wp_verify_nonce($_POST['nonce'], 'horoscope-nonce')
        || !check_ajax_referer('Dnt3dUF8U4FRBNt3', 'SECURITY')
    ) {
        wp_send_json_error('Forbidden', 403);
        exit();
    }

    global $wpdb;
    $tbl = $wpdb->prefix . MYPH_HOROSCOPES_TBL;
    $horoscopesIdsArray = [];
    $getIdsQuery = $wpdb->prepare("SELECT id FROM $tbl");
    $horoscopesIds = $wpdb->get_results($getIdsQuery);
    foreach ($horoscopesIds as $id) {
        $horoscopesIdsArray[] = intval($id->id);
    }
    $randomId = array_rand($horoscopesIdsArray, 1);
    $getOneHoroscopeQuery = $wpdb->prepare("SELECT * FROM $tbl WHERE id=%d", array($randomId));
    $selectedHoroscope = $wpdb->get_row($getOneHoroscopeQuery);

    wp_send_json(['data' => $selectedHoroscope], 200);
    exit();
}
add_action('wp_ajax_fetchHoroscopes', 'fetchHoroscopes_callback');
add_action('wp_ajax_nopriv_fetchHoroscopes', 'fetchHoroscopes_callback');
