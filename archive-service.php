<?php
/*
Service Archive Page
*/
get_header();
?>


<section id="hero">
    <div class="hero-banner">
        <img class=" hero-img" src="<?php bloginfo("template_url") ?>/images/service_topimage.jpg" alt="スクール生活">
    </div>
</section>


<section id="intro">
    <div class="container">
        <div class="intro-text">
            <h1 class="en-text" data-en="School Life">スクール生活</h1>
            <p>リトルガーデンインターナショナルスクールでの取り組みや、園で過ごすこどもたちのようすなどをご紹介します。</p>
        </div>
    </div>
</section>

<!-- archive-service HTML  -->
<section class="bg-skew">
    <div class="container">
        <div class="section-image">
            <img src="<?php bloginfo("template_url"); ?>/images/service_curriculum.jpg" alt="独自カリキュラムについて">
            <p class="sec-num-right">01</p>
        </div>
        <div class="section-text">
            <h2 class="left-marker">バイリンガル育成に力を入れた、<br class="pc">独自の英語カリキュラム</h2>
            <p>バイリンガル育成保育園として大切な英語カリキュラムは、経験豊富なネイティブ講師とバイリンガル保育士によって作り上げられてきた、リトルガーデン独自のカリキュラム。学年ごとにステップアップし、言語の習得はもちろん、自然とグローバルな感覚を身に着けることができます。</p>
            <a class="button-white-lg" href="<?php echo get_post_type_archive_link('service'); ?>curriculum/">英語カリキュラムについて</a>
        </div>
    </div>
</section>


<section>
    <div class="container">
        <div class="section-image bg-polkadot">
            <img src="<?php bloginfo("template_url"); ?>/images/service_shokuiku.jpg" alt="食育について">
            <p class="sec-num-right">02</p>
        </div>
        <div class="section-text">
            <h2 class="left-marker">「食育」にこだわるリトルガーデンの、<br class="pc">給食・おやつの取り組みについて</h2>
            <p>リトルガーデンでは、グループ会社の農園と連携するなど、子どもたちへの「食育」に力を入れています。また、旬の食材を使用し、栄養バランスに配慮された給食やおやつは、園で手作りしています。</p>
            <a class="button-green-lg" href="<?php echo get_post_type_archive_link('service'); ?>lunch/">食育・おやつについて</a>
        </div>
    </div>
</section>


<section class="bg-skew">
    <div class="container">
        <div class="section-image">
            <img src="<?php bloginfo("template_url"); ?>/images/service_course.jpg" alt="コースについて">
            <p class="sec-num-right">03</p>
        </div>
        <div class="section-text">
            <h2 class="left-marker">0歳児からお預かり可能。<br class="pc">それぞれの月齢に合った成長プログラム</h2>
            <p>リトルガーデンは、年齢に合わせたクラス分けを行い、それぞれに保育目標を定めています。子どもたちひとりひとりの成長に寄り添ったカリキュラムを実施しています。</p>
            <a class="button-white-lg" href="<?php echo get_post_type_archive_link('service'); ?>course/">コース案内</a>
        </div>
    </div>
</section>


<section>
    <div class="container">
        <div class="section-image bg-fill">
            <img src="<?php bloginfo("template_url"); ?>/images/service_daily.jpg" alt=１日のスケジュール">
            <p class="sec-num-right">04</p>
        </div>
        <div class="section-text">
            <h2 class="left-marker">登園後すぐに英語が飛び交う、<br class="pc">インターナショナルスクールでの1日</h2>
            <p>リトルガーデンインターナショナルスクールでの、１日のスケジュールをご紹介します。</p>
            <a class="button-green-lg" href="<?php echo get_post_type_archive_link('service'); ?>dailyschedule/">一日の過ごし方</a>
        </div>
    </div>
</section>


<section class="bg-skew">
    <div class="container">
        <div class="section-image">
            <img src="<?php bloginfo("template_url"); ?>/images/service_annual.jpg" alt="独自カリキュラムについて">
            <p class="sec-num-right">05</p>
        </div>
        <div class="section-text">
            <h2 class="left-marker">年間を通じてたくさんのイベントを開催。<br class="pc">みんな本気で楽しみます</h2>
            <p>リトルガーデンでは季節を感じられる様々なイベントをご用意しています。インターナショナルスクールならではの「イースターパーティー」「ハロウィーンパーティー」「タレントショー」（英語劇発表会）等の他、春の遠足や夏のサマーキャンプ、秋のスポーツフェスティバルに冬のスキー等、盛りだくさんのイベントを一緒に楽しみましょう！</p>
            <div>
                <a class="button-white-lg" href="<?php echo get_post_type_archive_link('service'); ?>annual-events/">年間行事</a>
            </div>
        </div>
    </div>
</section>


<section>
    <div class="container">
        <div class="section-image bg-stripe">
            <img src="<?php bloginfo("template_url"); ?>/images/service_bus.jpg" alt="独自カリキュラムについて">
            <p class="sec-num-right">06</p>
        </div>
        <div class="section-text">
            <h2 class="left-marker">安心安全な送り迎えに送迎バスをご利用いただけます。</h2>
            <p>季節とともに移りかわる街路樹の色や、空の色を眺めたり、昨日あったおうちの出来事を楽しくおしゃべりしたり、添乗の先生の読み聞かせを楽しんだり。子どもたちはそれぞれに園までの道のりの中で成長します。五感やコミュニケーション力やマナーが自然と身に着きます。</p>
            <a class="button-green-lg" href="<?php echo get_post_type_archive_link('service'); ?>school-bus/">バス送迎</a>
        </div>
    </div>
</section>


<?php get_footer(); ?>