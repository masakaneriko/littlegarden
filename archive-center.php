<?php
/*
Center Archive Page
*/
get_header();
?>

<section id="hero">
    <div class="hero-banner">
        <img class=" hero-img" src="<?php bloginfo("template_url") ?>/images/center_topimage.jpg" alt="施設を探す">
    </div>
</section>


<section id="intro">
    <div class="container">
        <div class="intro-text">
            <h1 class="en-text" data-en="Center">施設を探す</h1>
            <p>リトルガーデンインターナショナルスクールは、千葉県を中心に10カ所のインターナショナルスクールを運営しています。保育に関わるサービスの充実を図り、地域で選ばれる保育園事業を目指しています。</p>
        </div>
    </div>
</section>


<section id="center-map">
    <div class="center-map-google">
        <div class="sp">
            <img src="<?php bloginfo("template_url") ?>/images/center_area-map.jpg" alt="施設一覧map">
            <img src="<?php bloginfo("template_url") ?>/images/center_area-map_text.jpg" alt="施設一覧">
        </div>
        <div class="pc center-map-pc">
            <img src="<?php bloginfo("template_url") ?>/images/center_area-map_pc.png" alt="施設一覧">
        </div>
    </div>
</section>


<section id="center-chiba">
    <div class="container">
        <div class="center-state">
            <img src="<?php bloginfo("template_url"); ?>/images/center_icon_chiba.png" alt="千葉県" width="20%">
            <h2>千葉県</h2>
        </div>

        <div class="center-state-list">
            <ul>
                <li>
                    <a href="#chiba">千葉市</a>
                </li>
                <li>
                    <a href="#narashino">習志野市</a>
                </li>
                <li>
                    <a href="#funabashi">船橋市</a>
                </li>
                <li>
                    <a href="#ichikawa">市川市</a>
                </li>
                <li>
                    <a href="#kashiwa">柏市</a>
                </li>
            </ul>
        </div>

        <div class="center-city">
            <h3 id="chiba" tabindex="-1">千葉市</h3>
            <div class="center-city-item">
                <ul>
                    <li>
                        <a href="<?php echo get_post_type_archive_link('center'); ?>makuhari/">幕張
                            <span>（千葉市認定保育ルーム）</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo get_post_type_archive_link('center'); ?>wbg/">WBG
                            <span>（企業主導型保育事業）</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo get_post_type_archive_link('center'); ?>chibaporttown/">千葉ポートタウン
                            <span>（企業主導型保育事業）</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo get_post_type_archive_link('center'); ?>oyumino/">おゆみ野
                            <span>（千葉市認定保育ルーム）</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo get_post_type_archive_link('center'); ?>makuharihongo/">幕張本郷
                            <span>（企業主導型保育事業）</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="center-city">
            <h3 id="narashino" tabindex="-1">習志野市</h3>
            <div class="center-city-item">
                <ul>
                    <li>
                        <a href="<?php echo get_post_type_archive_link('center'); ?>shinnarashino/">新習志野
                            <span>（習志野市認可保育園）</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="center-city">
            <h3 id="funabashi" tabindex="-1">船橋市</h3>
            <div class="center-city-item">
                <ul>
                    <li>
                        <a href="<?php echo get_post_type_archive_link('center'); ?>lalaportmitsui/">ららぽーと三井ビル</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="center-city">
            <h3 id="ichikawa" tabindex="-1">市川市</h3>
            <div class="center-city-item">
                <ul>
                    <li>
                        <a href="<?php echo get_post_type_archive_link('center'); ?>ichikawa/">市川</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="center-city">
            <h3 id="kashiwa" tabindex="-1">柏市</h3>
            <div class="center-city-item">
                <ul>
                    <li>
                        <a href="<?php echo get_post_type_archive_link('center'); ?>kashiwanoha/">柏の葉キャンパス</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>


<section id="center-tokyo">
    <div class="container">
        <div class="center-state">
            <img src="<?php bloginfo("template_url"); ?>/images/center_icon_tokyo.png" alt="東京都" width="20%">
            <h2>東京都</h2>
        </div>
        <div class="center-city">
            <h3>江戸川区</h3>
            <div class="center-city-item">
                <ul>
                    <li>
                        <a href="<?php echo get_post_type_archive_link('center'); ?>koiwa/">小岩</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>


<section id="center-guam">
    <div class="container">
        <div class="center-state">
            <img src="<?php bloginfo("template_url"); ?>/images/center_icon_guam.png" alt="グアム" width="20%">
            <h2>グアム</h2>
        </div>
        <div class="center-city">
            <div class="center-city-item">
                <ul>
                    <li class="guam-link">
                        グアム
                    </li>
                    <li>
                        <p>リトルガーデングアム校では、お父様、お母様の「大変さ」をサポートさせて頂くと共に、日本人の先生と日常会話を通して日本語力を身につけ、豊かな心と思いやりの心を養う情操教育を目的としています。
                            明るく清潔感のあるお部屋に、外には広い園庭があります。無料体験学習も行っております。お問い合わせの上、是非グアムに遊びにいらしてください。スタッフ一同お待ちしております。</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>


<section id="center-other">
    <div class="container">
        <p>株式会社リトルガーデンが運営するその他保育施設の情報は、下のバナーをクリックしてください。</p>
        <ul class="center-other-banner">
            <li>
                <a href="https://www.doumugarden.com/" target="_blank">
                    <img src="<?php bloginfo("template_url") ?>/images/doumugarden_logo.svg" alt="童夢ガーデンロゴ">
                </a>
            </li>
            <li>
                <a href="https://www.doumu-jidou.com/" target="_blank">
                    <img src="<?php bloginfo("template_url") ?>/images/doumu_logo.svg" alt="童夢ロゴ">
                </a>
            </li>
        </ul>
    </div>
</section>



<?php get_footer(); ?>