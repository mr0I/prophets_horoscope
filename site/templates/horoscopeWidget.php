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

<section class="horoscope" id="horoscope_answer" style="display: none;">
    <div class="horoscope-content">
        <figure>
            <img src="<?= plugins_url('static/images/anbia/prophet_1.png', dirname(__FILE__)) ?>" alt="<?= __('Prophets Horoscope Picture', 'prophets_horoscope') ?>">
        </figure>
        <h3 class="horoscope-content__title" id="horoscope_answer_title">حضرت ابراهیم (ع)</h3>
        <p><?= __('Horoscope Result:', 'prophets_horoscope') ?>&nbsp;&nbsp;<span class="text-green">عالی</span>&nbsp;</p>
        <p><?= __('Lucky Day for you:', 'prophets_horoscope') ?>&nbsp;&nbsp;<span class="text-red">جمعه</span>&nbsp;</p>
        <p class="horoscope-content__dobeity">
            چو آمد نام ابراهیم (ع) در فال
            به سامان می‌رسد، کار تو امسال
            ❆❆❆
            بکن شکرانه لطف خداوند
            رضایش را بدست آور، به هر حال
        </p>
        <p class="horoscope-content__desc">
            ای صاحب فال! نتیجه کاری که برای آن فال گرفته‌ای بی‌نهایت نیکوست. به زودی از شر افراد حسود اطرافت نجات پیدا خواهی کرد. طاعت و عبادت پروردگار بلند مرتبه را فراموش مکن تا حق تعالی درهای روزی و برکت را به روی تو بگشاید. اقبال تو بلند بوده و در طالع سعد است. در همین سال فرجی در کارها ایجاد شده و گره کور مشکلات باز خواهد شد.
            همیشه خاطر خود را آسوده بدار و با مردم سازش کن. با خدا باش و پادشاهی و اندیشه‌های مخرب را از خود دور نگه دار. اگر نام ابراهیم در فال تو آمده است روز جمعه برایت خوش یمن خواهد بود. سعی کن در روزهای دیگر خود را در میان درگیری‌ها قرار ندهی. اگر غایبی داری خبری خوش خواهی شنید انشالله...
        </p>
        <button class="horoscope-content__submitBtn" onclick="horoscopeAgain(event)">
            <?= __('Horoscope Again', 'prophets_horoscope') ?>
        </button>
    </div>
</section>