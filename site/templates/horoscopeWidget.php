<?php defined('ABSPATH') or die('No script kiddies please!'); ?>


<section class="horoscope">
    <div class="horoscope-content">
        <h3 class="horoscope-content__title"><?= __('Prophets Horoscope', 'prophets_horoscope') ?></h3>
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
        <p><strong><?= __('Make an intention and click on the button', 'prophets_horoscope') ?></strong></p>
        <button class="horoscope-content__submitBtn" onclick="loadRandomHoroscope(event)">
            <?= __('Prophets online horoscope', 'prophets_horoscope') ?>
        </button>
        <input type="hidden" id="horoscope_nonce" value="<?= wp_create_nonce('horoscope-nonce') ?>">
    </div>
</section>