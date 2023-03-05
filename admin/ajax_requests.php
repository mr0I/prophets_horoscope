<?php defined('ABSPATH') or die('No script kiddies please!');


function fetchHoroscopes_callback()
{
    // if (!wp_verify_nonce($_POST['nonce'], 'sp-shortcode-nonce') || !check_ajax_referer('OwpCojMcdGJ-k-o', 'SECURITY')) {
    //     wp_send_json_error('Forbidden', 403);
    //     exit();
    // }

    global $wpdb;
    $tbl = $wpdb->prefix . MYPH_HOROSCOPES_TBL;
    $query = $wpdb->prepare("SELECT COUNT(*) FROM $tbl ");
    $horoscopesCount = $wpdb->get_var($query);

    wp_send_json(['data' => $horoscopesCount], 200);
    exit();
}
add_action('wp_ajax_fetchHoroscopes', 'fetchHoroscopes_callback');
add_action('wp_ajax_nopriv_fetchHoroscopes', 'fetchHoroscopes_callback');
