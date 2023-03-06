jQuery(document).ready(function ($) {
    "use strict";
    window.jq = $;
});


function loadRandomHoroscope(event) {
    event.preventDefault();
    const nonce = document.getElementById('horoscope_nonce').value;

    jq.ajax({
        url: MYPH_SITE_AJAX.AJAXURL,
        type: 'POST',
        data: {
            SECURITY: MYPH_SITE_AJAX.SECURITY,
            action: 'fetchHoroscopes',
            nonce: nonce
        },
        beforeSend: () => {
            // jq('.loader-spinner').css('display', 'block');
        },
        success: (res, xhr) => {
            console.log(res);
            if (xhr) {
                //
            }
        },
        error: (jqXHR, textStatus, errorThrown) => {
            console.log(errorThrown);
        },
        complete: () => {
            // jq('.loader-spinner').css('display', 'none');
        },
        timeout: MYPH_SITE_AJAX.REQUEST_TIMEOUT
    });

}