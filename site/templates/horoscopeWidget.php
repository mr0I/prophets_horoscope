<?php defined('ABSPATH') or die('No script kiddies please!'); ?>


<section class="horoscope">
    <div class="horoscope-content">
        <p>
            بِسْمِ اللَّهِ الرَّحْمَنِ الرَّحِيمِ ﴿۱﴾
            الْحَمْدُ للّهِ رَبِّ الْعَالَمِينَ ﴿۲﴾ الرَّحْمنِ الرَّحِيمِ ﴿۳﴾
            مَالِكِ يَوْمِ الدِّينِ ﴿۴﴾ إِيَّاكَ نَعْبُدُ وإِيَّاكَ نَسْتَعِينُ ﴿۵﴾
            اهدِنَا الصِّرَاطَ المُستَقِيمَ ﴿۶﴾
            صِرَاطَ الَّذِينَ أَنعَمتَ عَلَيهِمْ غَيرِ المَغضُوبِ عَلَيهِمْ وَلاَ الضَّالِّينَ ﴿۷﴾
        </p>

        <button onclick="loadRandomHoroscope(event)">Show</button>
        <input type="hidden" name="horoscope_nonce" id="horoscope_nonce" value="<?= wp_create_nonce('horoscope-nonce') ?>">
    </div>
</section>