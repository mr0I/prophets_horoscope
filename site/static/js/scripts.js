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
            if (xhr) {
                const answerSection = document.getElementById('horoscope_answer_section');
                jq(answerSection).append(`
                    <div class="horoscope-content">
                        <figure>
                            <img src="${MYPH_SITE_AJAX.PROPHET_PIC_SRC}" alt="">
                        </figure>
                        <h3 class="horoscope-content__title" id="horoscope_answer_title">
                            ${res.data.h_name}
                        </h3>
                        <p>${MYPH_SITE_AJAX.HOROSCOPE_RESULT}&nbsp;&nbsp;<span class="text-green">${res.data.h_result}</span>&nbsp;</p>
                        ${(res.data.h_luckyday != '-' && res.data.h_luckyday != '')
                        ? `<p>${MYPH_SITE_AJAX.LUCKY_DAY_FOR_YOU}&nbsp;&nbsp;<span class="text-red">${res.data.h_luckyday}</span>&nbsp;</p>`
                        : ''
                    }
                        <p class="horoscope-content__dobeity">${res.data.h_dobeity}</p>
                        <p class="horoscope-content__desc">${res.data.h_description}</p>
                        <button class="horoscope-content__submitBtn" onclick="horoscopeAgain(event)">
                            ${MYPH_SITE_AJAX.HOROSCOPE_AGAIN}
                        </button>
                    </div>
                `);

                setTimeout(() => {
                    jq('.horoscope').slideUp(400);
                    jq(answerSection).slideDown(200);
                }, 400);
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
    const answerSection = document.getElementById('horoscope_answer_section');
    answerSection.innerHTML = '';
    jq('.horoscope').slideDown(400);
    jq(answerSection).slideUp(400);
}