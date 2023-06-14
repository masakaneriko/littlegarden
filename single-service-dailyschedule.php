<?php

/*
Service-Bus Page
*/

get_header();
?>

<section id="hero">
    <div class="hero-banner">
        <img class=" hero-img" src="<?php bloginfo("template_url") ?>/images/daily_topimage.jpg" alt="">
    </div>
</section>


<section id="intro">
    <div class="container">
        <div class="intro-text">
            <h1 class="en-text" data-en="Daily Schedule">1日の過ごし方</h1>
            <p>リトルガーデンインターナショナルスクールでの、１日のスケジュールをご紹介します。</P>
            <p>
                <span class="note">Nursery（2歳児）以上のクラスのイメージです。</span>
                <span class="note">時間や内容は、園やクラスごとに異なる場合があります。</span>
            </p>
        </div>
    </div>
</section>
<div class="decoration-icon">
    <img src="<?php bloginfo("template_url"); ?>/images/kirakira.svg" alt="">
</div>
<section id="daily-schedule">

    <div class="container">
        <div class="flow">
            <div class="flow-item">
                <div class="flow-title">7:30</div>
                <h3>開園（随時登園）</h3>
                <p class="flow-text">
                    「Good Morning!」先生やお友達に元気に挨拶して登園です。バスの子どもたちもリトルガーデンのバスに乗って登園してきます。
                    外国人スタッフとは英語で、日本人スタッフとは日本語で会話をするバイリンガルな空間で、10時まではそれぞれ室内で自由遊びをして過ごします。</p>
                <div class="flow-image">
                    <img src="<?php bloginfo("template_url"); ?>/images/daily_01_touen.jpg" alt="登園風景">
                </div>
            </div>

            <div class="flow-item">
                <div class="flow-title">10:00</div>
                <h3>Morning Circle（朝の会）</h3>
                <p class="flow-text">
                    ここからが本格的な英語の時間のスタート！
                    この時間は園のみんなが集合して、外国人の先生と一緒に、英語で挨拶をして、歌やダンス、ゲームなどを楽しみます。
                </p>
                <span class="note">現在は新型コロナウイルス等感染防止のため、クラスごとに実施している園もあります。</span>
                <div class="flow-image">
                    <img src="<?php bloginfo("template_url"); ?>/images/daily_02_morning_circle.jpg" alt="朝の会の風景">
                </div>
            </div>

            <div class="flow-item">
                <div class="flow-title">10:30</div>
                <h3>午前のレッスン／お外遊び（英語）</h3>
                <p class="flow-text">
                    クラスごとにフォニックスのレッスン、ワークブック、ゲーム、クラフト（製作）などを英語で行います。K2（年長）クラスになると、Math（算数）、Science（理科）、Geography（地理）など小学校を意識した様々なジャンルを英語で学びます。
                    お天気の良い日は、園庭や近所の公園などでお外遊びもします。お外遊びの時も、コミュニケーションはもちろん英語です！
                </p>
                <div class="flow-image">
                    <img src="<?php bloginfo("template_url"); ?>/images/daily_03_am.jpg" alt="午前の活動">
                </div>
            </div>

            <div class="flow-item">
                <div class="flow-title">12:00</div>
                <h3>昼食（英語）</h3>
                <p class="flow-text">
                    おいしくて栄養満点！リトルガーデンオリジナルの手作り給食をご提供しています。
                    英語で「いただきます」の歌を歌ってランチスタート♪
                    「おかわり」をお願いするときももちろん英語で！
                </p>
                <span class="note">調理施設のない園では、近隣のリトルガーデンで作った給食を当日配送しています。</span>
                <div class="flow-image">
                    <img src="<?php bloginfo("template_url"); ?>/images/daily_04_lunch.jpg" alt="英語でランチ">
                </div>
            </div>

            <div class="flow-item">
                <div class="flow-title">13:00</div>
                <h3>午後のレッスン（英語）</h3>
                <p class="flow-text">
                    午前のレッスン同様、この時間もフォニックスやワークブック、ゲーム、クラフトなどを英語で行います。
                </p>
                <div class="flow-image">
                    <img src="<?php bloginfo("template_url"); ?>/images/daily_05_pm.jpg" alt="午後の活動">
                </div>
            </div>

            <div class="flow-item">
                <div class="flow-title">14:00</div>
                <h3>お昼寝</h3>
                <p class="flow-text">
                    いっぱい遊んでしっかり眠って…生活のリズムを整えます。
                    「トイレに行ってもいいですか？」も英語で言えるようになります！
                </p>
                <span class="note">お昼寝は、全園で午睡用の簡易ベッド「コット」を使用しています。汚れてもすぐに洗えるため衛生面に優れています。少し高さがあるため、夏は通気性がよく、冬は床の冷たさが伝わりません。埃やアレルギーからも子どもたちを守ります。</span>
                <span class="note">Starクラス（0・1歳児）のお昼寝は13:00からとなります。</span>
                <div class="flow-image">
                    <img src="<?php bloginfo("template_url"); ?>/images/daily_06_nap.jpg" alt="午睡">
                </div>
            </div>

            <div class="flow-item">
                <div class="flow-title">15:30～16:00</div>
                <h3>おやつ</h3>
                <p class="flow-text">
                    みんなお待ちかねのおやつの時間♪手作りおやつが大人気！
                </p>
                <span class="note">市販のおやつを提供することもあります。</span>
                <div class="flow-image">
                    <img src="<?php bloginfo("template_url"); ?>/images/daily_07_snack.jpg" alt="おやつの時間">
                </div>
            </div>

            <div class="flow-item">
                <div class="flow-title">16:00</div>
                <h3>日本語レッスン</h3>
                <p class="flow-text">
                    日本語のワークブックを使ったレッスンや、クラフトの他、日本の歌やリトミック、絵本の読み聞かせなども行います。英語の時間は英語を使って製作をする子どもたちも、この時間は日本語で過ごします。K２クラス（5歳児）では、ひらがなや足し算なども学習します。体育の専門の先生による、マットや跳び箱、鉄棒などのレッスンもあり、小学校入学を意識した取り組みを行っています。
                </p>
                <div class="flow-image">
                    <img src="<?php bloginfo("template_url"); ?>/images/daily_08_japanese.jpg" alt="日本語の時間">
                </div>
            </div>

            <div class="flow-item">
                <div class="flow-title">17:00</div>
                <h3>自由遊び／随時降園</h3>
                <p class="flow-text">お迎えや帰りのバスの時間まではそれぞれ自由遊びをして過ごします。
                    お帰りの時は「See you!」また明日、元気に登園しましょうね！
                </p>
                <div class="flow-image">
                    <img src="<?php bloginfo("template_url"); ?>/images/daily_09_enchou.jpg" alt="日本語の時間">
                </div>
            </div>

            <div class="flow-item">
                <div class="flow-title">18:30～19:00</div>
                <h3>延長保育時間（自由遊び）</h3>
                <p class="flow-text">
                    保護者様のお迎えの時間まで、おやつを食べたり、先生や異年齢児のお友達と遊んだりして過ごします。
                </p>
                <span class="note">延長保育実施の有無・時間・費用等につきましては、各園にお問い合わせください。</span>
                <div class="flow-image">
                    <img src="<?php bloginfo("template_url"); ?>/images/daily_10_closed.jpg" alt="日本語の時間">
                </div>
            </div>

        </div>
    </div>
</section>



<?php get_footer(); ?>