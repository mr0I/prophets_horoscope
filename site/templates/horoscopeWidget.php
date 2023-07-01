<link rel="stylesheet" href="<?= plugin_dir_url(__FILE__) . '../static/css/styles.css' ?>">

<section class="horoscope">
    <div class="horoscope-content">
        <h2 class="horoscope-content__title"><?= __('Prophets Horoscope', 'prophets_horoscope') ?></h2>
        <figure>
            <img src="<?= plugins_url('static/images/anbia_img.png', dirname(__FILE__)) ?>" alt="<?= __('Prophets Horoscope Picture', 'prophets_horoscope') ?>">
        </figure>
        <p class="horoscope-content__aye">
            بِسْمِ اللَّهِ الرَّحْمَنِ الرَّحِيمِ ﴿۱﴾
            الْحَمْدُ للّهِ رَبِّ الْعَالَمِينَ ﴿۲﴾ الرَّحْمنِ الرَّحِيمِ ﴿۳﴾
            مَالِكِ يَوْمِ الدِّينِ ﴿۴﴾ إِيَّاكَ نَعْبُدُ وإِيَّاكَ نَسْتَعِينُ ﴿۵﴾
            اهدِنَا الصِّرَاطَ المُستَقِيمَ ﴿۶﴾
            صِرَاطَ الَّذِينَ أَنعَمتَ عَلَيهِمْ غَيرِ المَغضُوبِ عَلَيهِمْ وَلاَ الضَّالِّينَ ﴿۷﴾
        </p>
        <p class="horoscope-content__niat"><?= __('Make an intention and click on the button', 'prophets_horoscope') ?></p>
        <button class="horoscope-content__submitBtn" onclick="loadRandomHoroscope(event)">
            <?= __('Prophets online horoscope', 'prophets_horoscope') ?>
        </button>
        <input type="hidden" id="horoscope_nonce" value="<?= wp_create_nonce('horoscope-nonce') ?>">
    </div>
</section>

<section class="horoscope" id="horoscope_answer_section" style="display: none;">

</section>



<script id='myph-main-script-js-extra'>
    var MYPH_SITE_AJAX = {
        'AJAXURL': '<?= admin_url('admin-ajax.php'); ?>',
        'SECURITY': '<?= wp_create_nonce('Dnt3dUF8U4FRBNt3'); ?>',
        "REQUEST_TIMEOUT": "30000",
        'SUBMIT_BTN_TXT': '<?= __('Prophets online horoscope', 'prophets_horoscope') ?>',
        'WAITING_TXT': '<?= __('Please Wait...', 'prophets_horoscope') ?>',
        'PROPHET_PIC_SRC': '<?= MYPH_SITE_IMAGES . 'anbia/prophet_1.png' ?>',
        'PROPHETS_HOROSCOPE_PICTURE': '<?= __('Prophets Horoscope Picture', 'prophets_horoscope') ?>',
        'HOROSCOPE_RESULT': '<?= __('Horoscope Result:', 'prophets_horoscope') ?>',
        'LUCKY_DAY_FOR_YOU': '<?= __('Lucky Day for you:', 'prophets_horoscope') ?>',
        'HOROSCOPE_AGAIN': '<?= __('Horoscope Again', 'prophets_horoscope') ?>',
    };
</script>
<script src="<?= plugin_dir_url(__FILE__) . '../static/js/scripts.js' ?>" defer></script>