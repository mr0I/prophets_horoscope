jQuery(document).ready(function ($) {
    "use strict";
    window.jq = $;
});


function loadRandomHoroscope(event) {
    event.preventDefault();
    const nonce = document.getElementById('horoscope_nonce').value;
    const submitBtn = event.target || event.currentTarget;

    jq.ajax({
        url: MYPH_SITE_AJAX.AJAXURL,
        type: 'POST',
        data: {
            SECURITY: MYPH_SITE_AJAX.SECURITY,
            action: 'fetchHoroscopes',
            nonce: nonce
        },
        beforeSend: () => {
            jq(submitBtn).text(MYPH_SITE_AJAX.WAITING_TXT).attr('disabled', true);
        },
        success: (res, xhr) => {
            console.log(res);
            if (xhr) {
                jq('#horoscope_answer_title').text(res.data.h_name);
                setTimeout(() => {
                    jq('.horoscope').slideUp(400);
                    jq('.horoscope.horoscope-answer').slideDown(200);
                }, 500);
            }
        },
        error: (jqXHR, textStatus, errorThrown) => {
            console.error(errorThrown);
        },
        complete: () => {
            jq(submitBtn).text(MYPH_SITE_AJAX.SUBMIT_BTN_TXT).attr('disabled', false);
        },
        timeout: MYPH_SITE_AJAX.REQUEST_TIMEOUT
    });

}

function horoscopeAgain(event) {
    event.preventDefault();
    jq('.horoscope').slideDown(200);
    jq('.horoscope.horoscope-answer').slideUp(400);
}