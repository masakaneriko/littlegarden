<?php


/*
Service-Annual-Events Page
*/

get_header();
?>

<section id="hero">
    <div class="hero-banner">
        <img class=" hero-img" src="<?php bloginfo("template_url") ?>/images/service_annual.jpg" alt="年間行事">
    </div>
</section>


<section id="intro">
    <div class="container">
        <div class="intro-text">
            <h1 class="en-text" data-en="Annual Events">年間行事</h1>
            <p>リトルガーデンでは季節を感じられる様々なイベントをご用意しています。インターナショナルスクールならではの「イースターパーティー」「ハロウィーンパーティー」「タレントショー」（英語劇発表会）等の他、春の遠足や夏のサマーキャンプ、秋のスポーツフェスティバルに冬のスキー等、盛りだくさんのイベントを一緒に楽しみましょう！</p>
        </div>
    </div>
</section>


<div id="single-annual-events">

    <div id="spring">
        <section class="cherry-blossom-container container">
            <div class="h2-wrap">
                <h2><img src="<?php bloginfo("template_url") ?>/images/annual_icon_spring.png" alt="春"></h2>
            </div>
            <div class="flex">
                <div class="card">
                    <div class="content">
                        <label class="modal-open modal-label" for="modal-open">
                            <div class="card-img">
                                <img src="<?php bloginfo("template_url") ?>/images/annual_spring_entrance-ceremony.png" alt="入園歓迎会">
                            </div>
                        </label>
                        <input type="radio" name="modal" value="open" id="modal-open" class="modal-radio" />
                        <div class="modal">
                            <label class="modal-label overlay">
                                <input type="radio" name="modal" value="close" class="modal-radio" />
                            </label>
                            <div class="content">
                                <div class="top">
                                    <label class="modal-label close-btn">
                                        <input type="radio" name="modal" value="close" class="modal-radio" />
                                    </label>
                                </div>
                                <div class="popup-pic">
                                    <img src=" <?php bloginfo("template_url") ?>/images/annual_spring_entrance-ceremony.jpg" alt="入園歓迎会">
                                </div>
                                <h3>ウェルカムパーティー（入園歓迎会）</h3>
                                <p>新年度から入園されるお子さまと進級のお子さまが一緒に参加するWelcomeイベントです。</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="content">
                        <label class="modal-open modal-label" for="modal-open2">
                            <div class="card-img">
                                <img src="<?php bloginfo("template_url") ?>/images/annual_spring_easter-party.png" alt="イースターパーティー">
                            </div>
                        </label>
                        <input type="radio" name="modal" value="open" id="modal-open2" class="modal-radio" />
                        <div class="modal">
                            <label class="modal-label overlay">
                                <input type="radio" name="modal" value="close" class="modal-radio" />
                            </label>
                            <div class="content">
                                <div class="top">
                                    <label class="modal-label close-btn close-btn-othor">
                                        <input type="radio" name="modal" value="close" class="modal-radio" />
                                    </label>
                                </div>
                                <div class="popup-pic">
                                    <img src="<?php bloginfo("template_url") ?>/images/annual_spring_easter-party.jpg" alt="イースターパーティー">
                                </div>
                                <h3>イースターパーティー</h3>
                                <p>エッグハントなどのゲームやアクテビティー中心のイベントです。</p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="content">
                        <label class="modal-open modal-label" for="modal-open3">
                            <div class="card-img">
                                <img src="<?php bloginfo("template_url") ?>/images/annual_spring_school-trip.png" alt="遠足">
                            </div>
                        </label>
                        <input type="radio" name="modal" value="open" id="modal-open3" class="modal-radio" />
                        <div class="modal">
                            <label class="modal-label overlay">
                                <input type="radio" name="modal" value="close" class="modal-radio" />
                            </label>
                            <div class="content">
                                <div class="top">
                                    <label class="modal-label close-btn">
                                        <input type="radio" name="modal" value="close" class="modal-radio" />
                                    </label>
                                </div>
                                <div class="popup-pic">
                                    <img src="<?php bloginfo("template_url") ?>/images/annual_spring_school-trip.jpg" alt="遠足">
                                </div>
                                <h3>フィールドトリップ（遠足）</h3>
                                <p>新緑の時期に、園のバスを利用して近隣の動物園など、遠足へ出かけます。</p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img src="<?php bloginfo("template_url") ?>/images/annual_spring_message.png" alt="入園おめでとう！">
                </div>
            </div>
        </section>
    </div>
    <div id="summer">
        <section class="summer-container container">
            <div class="h2-wrap">
                <h2><img src="<?php bloginfo("template_url") ?>/images/annual_icon_summer.png" alt="夏"></h2>
            </div>
            <div class="flex">
                <div class="card">
                    <div class="content">
                        <label class="modal-open modal-label" for="modal-open4">
                            <div class="card-img">
                                <img src="<?php bloginfo("template_url") ?>/images/annual_summer_splash-water.png" alt="水遊び">
                            </div>
                        </label>
                        <input type="radio" name="modal" value="open" id="modal-open4" class="modal-radio" />
                        <div class="modal">
                            <label class="modal-label overlay">
                                <input type="radio" name="modal" value="close" class="modal-radio" />
                            </label>
                            <div class="content">
                                <div class="top">
                                    <label class="modal-label close-btn">
                                        <input type="radio" name="modal" value="close" class="modal-radio" />
                                    </label>
                                </div>
                                <div class="popup-pic">
                                    <img src="<?php bloginfo("template_url") ?>/images/annual_summer_splash-water-popup.jpg" alt="水遊び">
                                </div>
                                <h3>ウォータープレイ（水遊び）</h3>
                                <p>園のプールや近隣園のプールを使用し、水遊びをします。</p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="content">
                        <label class="modal-open modal-label" for="modal-open5">
                            <div class="card-img">
                                <img src="<?php bloginfo("template_url") ?>/images/annual_summer_summer-camp.png" alt="サマーキャンプ">
                            </div>
                        </label>
                        <input type="radio" name="modal" value="open" id="modal-open5" class="modal-radio" />
                        <div class="modal">
                            <label class="modal-label overlay">
                                <input type="radio" name="modal" value="close" class="modal-radio" />
                            </label>
                            <div class="content">
                                <div class="top">
                                    <label class="modal-label close-btn">
                                        <input type="radio" name="modal" value="close" class="modal-radio" />
                                    </label>
                                </div>
                                <div class="popup-pic">
                                    <img src="<?php bloginfo("template_url") ?>/images/annual_summer_summer-camp-popup.jpg" alt="サマーキャンプ">
                                </div>
                                <h3>サマーキャンプ</h3>
                                <p>K2クラスのお子さま向けのイベントで、1泊2日で「ロマンの森共和国」（君津市）などへ出かけて、外国人の先生たちと一緒に英語でバーベキューやキャンプファイヤー、ゲームやダンスなどを楽しみます。</p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="content">
                        <label class="modal-open modal-label" for="modal-open6">
                            <div class="card-img">
                                <img src="<?php bloginfo("template_url") ?>/images/annual_summer_summer-fes.png" alt="夏祭り">
                            </div>
                        </label>
                        <input type="radio" name="modal" value="open" id="modal-open6" class="modal-radio" />
                        <div class="modal">
                            <label class="modal-label overlay">
                                <input type="radio" name="modal" value="close" class="modal-radio" />
                            </label>
                            <div class="content">
                                <div class="top">
                                    <label class="modal-label close-btn">
                                        <input type="radio" name="modal" value="close" class="modal-radio" />
                                    </label>
                                </div>
                                <div class="popup-pic">
                                    <img src="<?php bloginfo("template_url") ?>/images/annual_summer_summer-fes-popup.jpg" alt="夏祭り">
                                </div>
                                <h3>サマーフェスティバル（夏祭り）</h3>
                                <p>サマースクール内のイベントの一つで、リトルガーデン各園がそれぞれ決めたテーマに沿って、ゲームやアクティビティなどを実施します。毎年土曜日に開催しており、保護者の方にもご参加いただけるイベントです。</p>


                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="content">
                        <label class="modal-open modal-label" for="modal-open7">
                            <div class="card-img">
                                <img src="<?php bloginfo("template_url") ?>/images/annual_summer_summer-school.png" alt="サマースクール">
                            </div>
                        </label>
                        <input type="radio" name="modal" value="open" id="modal-open7" class="modal-radio" />
                        <div class="modal">
                            <label class="modal-label overlay">
                                <input type="radio" name="modal" value="close" class="modal-radio" />
                            </label>
                            <div class="content">
                                <div class="top">
                                    <label class="modal-label close-btn">
                                        <input type="radio" name="modal" value="close" class="modal-radio" />
                                    </label>
                                </div>
                                <div class="popup-pic">
                                    <img src="<?php bloginfo("template_url") ?>/images/annual_summer_summer-school-popup.jpg" alt="サマースクール">
                                </div>
                                <h3>サマースクール</h3>
                                <p>通常のレッスンとは異なり、夏ならではの楽しいイベントやカリキュラムを多数ご用意しています。夏休み中の外部のお子さまもご参加いただけます。</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div id="autumn">
        <section class="leaves-container container">
            <div class="h2-wrap">
                <h2><img src="<?php bloginfo("template_url") ?>/images/annual_icon_autumn.png" alt="秋"></h2>
            </div>
            <div class="flex">
                <div class="card">
                    <div class="content">
                        <label class="modal-open modal-label" for="modal-open8">
                            <div class="card-img">
                                <img src="<?php bloginfo("template_url") ?>/images/annual_autumn_sports-fes.png" alt="運動会">
                            </div>
                        </label>
                        <input type="radio" name="modal" value="open" id="modal-open8" class="modal-radio" />
                        <div class="modal">
                            <label class="modal-label overlay">
                                <input type="radio" name="modal" value="close" class="modal-radio" />
                            </label>
                            <div class="content">
                                <div class="top">
                                    <label class="modal-label close-btn">
                                        <input type="radio" name="modal" value="close" class="modal-radio" />
                                    </label>
                                </div>
                                <div class="popup-pic">
                                    <img src="<?php bloginfo("template_url") ?>/images/annual_autumn_sports-fes-popup.jpg" alt="運動会">
                                </div>
                                <h3>スポーツフェスティバル（運動会）</h3>
                                <p>園対抗のかけっこやリレー、ダンスなど、お揃いの園Tシャツを着てみんなで競技も応援も大盛り上がり！保護者の方にご参加いただく競技もあります！※例年はリトルガーデン全園合同開催の大きなイベントでしたが、近年は各園や近隣園のみの合同にて開催しています。</p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="content">
                        <label class="modal-open modal-label" for="modal-open9">
                            <div class="card-img">
                                <img src="<?php bloginfo("template_url") ?>/images/annual_autumn_halloween.png" alt="ハロウィーンパーティー">
                            </div>
                        </label>
                        <input type="radio" name="modal" value="open" id="modal-open9" class="modal-radio" />
                        <div class="modal">
                            <label class="modal-label overlay">
                                <input type="radio" name="modal" value="close" class="modal-radio" />
                            </label>
                            <div class="content">
                                <div class="top">
                                    <label class="modal-label close-btn">
                                        <input type="radio" name="modal" value="close" class="modal-radio" />
                                    </label>
                                </div>
                                <div class="popup-pic">
                                    <img src="<?php bloginfo("template_url") ?>/images/annual_autumn_halloween-popup.jpg" alt="ハロウィーンパーティー">
                                </div>
                                <h3>ハロウィーンパーティー</h3>
                                <p>お子さまがそれぞれお好きな仮装をして園を飛び出し、パレードを実施したり、発表会に参加したり！とても賑やかなイベントです！</p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img src="<?php bloginfo("template_url") ?>/images/annual_autumn_message.png" alt="秋もイベントが目白押し！">
                </div>
                <div class="card">
                    <div class="content">
                        <label class="modal-open modal-label" for="modal-open10">
                            <div class="card-img">
                                <img src="<?php bloginfo("template_url") ?>/images/annual_autumn_potato-digging.png" alt="お芋掘り">
                            </div>
                        </label>
                        <input type="radio" name="modal" value="open" id="modal-open10" class="modal-radio" />
                        <div class="modal">
                            <label class="modal-label overlay">
                                <input type="radio" name="modal" value="close" class="modal-radio" />
                            </label>
                            <div class="content">
                                <div class="top">
                                    <label class="modal-label close-btn">
                                        <input type="radio" name="modal" value="close" class="modal-radio" />
                                    </label>
                                </div>
                                <div class="popup-pic">
                                    <img src="<?php bloginfo("template_url") ?>/images/annual_autumn_potato-digging-popup.jpg" alt="お芋掘り">
                                </div>
                                <h3>お芋掘り</h3>
                                <p>食育の一環として、園のバスで自社農園の「LCファーム」に訪れ、お芋堀りを体験します。</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div id="winter">
        <section class="snow-container container">

            <div class=" h2-wrap">
                <h2><img src="<?php bloginfo("template_url") ?>/images/annual_icon_winter.png" alt="冬"></h2>
            </div>
            <div class="flex">
                <div class="card">
                    <div class="content">
                        <label class="modal-open modal-label" for="modal-open11">
                            <div class="card-img">
                                <img src="<?php bloginfo("template_url") ?>/images/annual_winter_christmas.png" alt="クリスマスパーティー">
                            </div>
                        </label>
                        <input type="radio" name="modal" value="open" id="modal-open11" class="modal-radio" />
                        <div class="modal">
                            <label class="modal-label overlay">
                                <input type="radio" name="modal" value="close" class="modal-radio" />
                            </label>
                            <div class="content">
                                <div class="top">
                                    <label class="modal-label close-btn">
                                        <input type="radio" name="modal" value="close" class="modal-radio" />
                                    </label>
                                </div>
                                <div class="popup-pic">
                                    <img src="<?php bloginfo("template_url") ?>/images/annual_winter_christmas-popup.jpg" alt="クリスマスパーティー">
                                </div>
                                <h3>クリスマスパーティー</h3>
                                <p>みんなでクリスマスソングを歌ったりプレゼント交換をしたりなど、クリスマスならではのイベントを楽しみます。</p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="content">
                        <label class="modal-open modal-label" for="modal-open12">
                            <div class="card-img">
                                <img src="<?php bloginfo("template_url") ?>/images/annual_winter_talent-show.png" alt="タレントショー">
                            </div>
                        </label>
                        <input type="radio" name="modal" value="open" id="modal-open12" class="modal-radio" />
                        <div class="modal">
                            <label class="modal-label overlay">
                                <input type="radio" name="modal" value="close" class="modal-radio" />
                            </label>
                            <div class="content">
                                <div class="top">
                                    <label class="modal-label close-btn">
                                        <input type="radio" name="modal" value="close" class="modal-radio" />
                                    </label>
                                </div>
                                <div class="popup-pic">
                                    <img src="<?php bloginfo("template_url") ?>/images/annual_winter_talent-show-popup.jpg" alt="タレントショー">
                                </div>
                                <h3>タレントショー（英語劇発表会）</h3>
                                <p>大きな会場を貸し切り、全園のK1・K2クラスと学童クラスのお子さまが合同で英語劇を発表するイベントです。</p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="content">
                        <label class="modal-open modal-label" for="modal-open13">
                            <div class="card-img">
                                <img src="<?php bloginfo("template_url") ?>/images/annual_winter_mochi-party.png" alt="もちパーティー">
                            </div>
                        </label>
                        <input type="radio" name="modal" value="open" id="modal-open13" class="modal-radio" />
                        <div class="modal">
                            <label class="modal-label overlay">
                                <input type="radio" name="modal" value="close" class="modal-radio" />
                            </label>
                            <div class="content">
                                <div class="top">
                                    <label class="modal-label close-btn">
                                        <input type="radio" name="modal" value="close" class="modal-radio" />
                                    </label>
                                </div>
                                <div class="popup-pic">
                                    <img src="<?php bloginfo("template_url") ?>/images/annual_winter_mochi-party-popup.jpg" alt="もちパーティー">
                                </div>
                                <h3>もちパーティー</h3>
                                <p>日本のお正月のイベントとして、園でお餅つきをしてみんなでお餅を味わいます。</p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="content">
                        <label class="modal-open modal-label" for="modal-open14">
                            <div class="card-img">
                                <img src="<?php bloginfo("template_url") ?>/images/annual_winter_setsubun.png" alt="節分">
                            </div>
                        </label>
                        <input type="radio" name="modal" value="open" id="modal-open14" class="modal-radio" />
                        <div class="modal">
                            <label class="modal-label overlay">
                                <input type="radio" name="modal" value="close" class="modal-radio" />
                            </label>
                            <div class="content">
                                <div class="top">
                                    <label class="modal-label close-btn">
                                        <input type="radio" name="modal" value="close" class="modal-radio" />
                                    </label>
                                </div>
                                <div class="popup-pic">
                                    <img src="<?php bloginfo("template_url") ?>/images/annual_winter_setsubun-popup.jpg" alt="節分">
                                </div>
                                <h3>節分</h3>
                                <p>園に鬼がやってきて豆まきを行います。鬼がこわくて、泣いてしまうお子さまも・・・</p>

                            </div>
                        </div>
                    </div>

                </div>
                <div class="card">
                    <div class="content">
                        <label class="modal-open modal-label" for="modal-open15">
                            <div class="card-img">
                                <img src="<?php bloginfo("template_url") ?>/images/annual_winter_graduation-ceremony.png" alt="卒園式">
                            </div>
                        </label>
                        <input type="radio" name="modal" value="open" id="modal-open15" class="modal-radio" />
                        <div class="modal">
                            <label class="modal-label overlay">
                                <input type="radio" name="modal" value="close" class="modal-radio" />
                            </label>
                            <div class="content">
                                <div class="top">
                                    <label class="modal-label close-btn">
                                        <input type="radio" name="modal" value="close" class="modal-radio" />
                                    </label>
                                </div>
                                <div class="popup-pic">
                                    <img src="<?php bloginfo("template_url") ?>/images/annual_winter_graduation-ceremony-popup.jpg" alt="卒園式">
                                </div>
                                <h3>卒園式</h3>
                                <p>リトルガーデンオリジナルの博士帽とガウンを着て、卒園スピーチを英語で披露します。インターナショナルスクールならではの思い出に残る卒園式です。</p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="content">
                        <label class="modal-open modal-label" for="modal-open16">
                            <div class="card-img">
                                <img src="<?php bloginfo("template_url") ?>/images/annual_winter_ski-camp.png" alt="スキーキャンプ">
                            </div>
                        </label>
                        <input type="radio" name="modal" value="open" id="modal-open16" class="modal-radio" />
                        <div class="modal">
                            <label class="modal-label overlay">
                                <input type="radio" name="modal" value="close" class="modal-radio" />
                            </label>
                            <div class="content">
                                <div class="top">
                                    <label class="modal-label close-btn">
                                        <input type="radio" name="modal" value="close" class="modal-radio" />
                                    </label>
                                </div>
                                <div class="popup-pic">
                                    <img src="<?php bloginfo("template_url") ?>/images/annual_winter_ski-camp-popup.jpg" alt="スキーキャンプ">
                                </div>
                                <h3>スキーキャンプ</h3>
                                <p>K1・K2クラスのみんなで、1泊2日で新潟・湯沢のスキー場へ行き、スキーやソリ、雪合戦など、めいっぱい雪遊びを楽しみます。</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div>
        <p class="others-p"><span class="note">上記の他、月に1度の身体検査、防災訓練、年に1～2回の健康診断や歯科健診などを実施しています。</span></p>
        </section>
    </div>

    <?php get_footer(); ?>