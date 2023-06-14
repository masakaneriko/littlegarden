<?php

/**
 * Template Name: About Us Template
 */

get_header();
?>

<section id="hero">
    <div class="hero-banner">
        <!-- <img class=" hero-img" src="<?php bloginfo("template_url") ?>/images/no_image_placeholder.png" alt=""> -->
        <img class="hero-img" src="<?php bloginfo("template_url") ?>/images/about_us_topimage.jpg" alt="">
    </div>
</section>


<section id="intro">
    <div class="container">
        <div class="intro-text">
            <h1 class="en-text" data-en="About Us">リトルガーデンについて</h1>
            <p>リトルガーデングループは、未来を担う子どもたちがより良い環境で学び、健やかに育つ教育福祉事業の拡大に取り組んでいます。また保護者様、働くスタッフすべての方の幸せを目指した経営を目指しています。</p>
        </div>
    </div>
</section>



<!-- Start here  -->

<div class="vision container">
    <p class="sp"><img src="<?php bloginfo("template_url") ?>/images/about-us_image.jpg" alt="リトルガーデン教育モデル">
    </p>
    <p class="pc"><img src="<?php bloginfo("template_url") ?>/images/about-us_image_desktop.png" alt="リトルガーデン教育モデル">
    </p>
</div>

<section id="little-garden">
    <div class="container">
        <h3 class="underline-3">リトルガーデンインターナショナル</h3>
        <div class="flexbox">
            <div class="box">
                <div class="section-image">
                    <img class="logo" src="<?php bloginfo("template_url") ?>/images/little_logo.png" alt="リトルガーデンロゴ">
                </div>
            </div>
            <div class="box">
                <div class="section-text">
                    <p class="credo">世界に羽ばたける翼を<br>子どもたちに</p>
                    <p>リトルガーデンインターナショナルスクールは、『子どもたちが将来、世界のどこを活躍の場に選ぼうとも、充実した人生を送ることが出来るための基礎を築きあげていくこと』を目的とした保育園が母体のインターナショナルスクールです。千葉県内を中心に11校のスクールを運営しています。
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php   //Custom shortcode 
echo do_shortcode("[service_blackboard]");
?>

<section class="other-schools">
    <div class="container">
        <h2 class="en-text" data-en="Other Schools">その他の運営施設
            <div class="title-bg">
                <img src="<?php echo get_template_directory_uri(); ?>/images/center_title2.png" alt="">
            </div>
        </h2>

        <div class="other-list">
            <div id="afterschool">
                <h3 class="underline-3">リトルガーデンインターナショナルアフタースクール</h3>
                <div class="flexbox">
                    <div class="box">
                        <div class="section-image">
                            <a href="<?php echo home_url(); ?>/afterschool/"><img class="logo" src="<?php bloginfo("template_url") ?>/images/afterschool_logo.png" alt="アフタースクールロゴ"></a>
                        </div>
                    </div>
                    <div class="box">
                        <div class="section-text">
                            <p>リトルガーデンから生まれたアフタースクールは、外国人講師による英語環境に学習塾の要素を取り入れたバランスの良い学童保育塾です。子どもたちの可能性を高めるため、一人ひとりの感性を大切にしながら英語を中心としたさまざまな学びの機会を提供します。
                            </p>
                        </div>
                    </div>
                </div>
                <a class="button-green-lg" href="<?php echo home_url(); ?>/afterschool/">アフタースクールについて</a>
            </div>
            <div id="doumu-garden">
                <h3 class="underline-3">童夢ガーデン</h3>
                <div class="flexbox">
                    <div class="box">
                        <div class="section-image">
                            <a href="https://www.doumugarden.com/" target="_blank"><img class="logo" src="<?php bloginfo("template_url") ?>/images/doumugarden_logo.svg" alt="童夢ガーデンロゴ"></a>
                        </div>
                    </div>
                    <div class="box">
                        <div class="section-text">
                            <p>『その子らしく健やかに』をモットーに、子どもの個性や長所を大切に伸ばす保育を行っていきます。乳幼児期という大切な時期、一人ひとりに寄り添い信頼関係を築き、子どもたちの自己肯定感を養い、個性や感受性、思いやりの心という「生きる力の基礎」を育んでいます。
                            </p>
                        </div>
                    </div>
                </div>
                <a class="button-green-lg external-link" href="https://www.doumugarden.com/" target="_blank">童夢ガーデンについて</a>
            </div>
            <div id="doumu">
                <h3 class="underline-3">童夢</h3>
                <div class="flexbox">
                    <div class="box">
                        <div class="section-image">
                            <a href="https://www.doumu-jidou.com/" target="_blank"> <img class="logo" src="<?php bloginfo("template_url") ?>/images/doumu_logo.svg" alt="童夢ロゴ"></a>
                        </div>
                    </div>
                    <div class="box">
                        <div class="section-text">
                            <p>『童夢は、特別なものの見方をしたり、捉えたりする子どもたちが、地域であたりまえに暮らすために必要な力を育むお手伝いをしたいという気持ちからはじまった児童発達支援事業所です。<br>
                                子どもたちの抱えている困っているところを見つけ、子どもたちのかけがえのない個性を尊重しつつ、その魅力や可能性を伸ばしていくため、さまざまな体験・経験ができる場を提供します。
                            </p>
                        </div>
                    </div>
                </div>
                <a class="button-green-lg external-link" href="https://www.doumu-jidou.com/" target="_blank">童夢について</a>
            </div>
        </div>
    </div>
</section>




<?php get_footer(); ?>