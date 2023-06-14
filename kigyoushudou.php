<?php

/**
 * Template Name: Kigyoushudou Template
 */

get_header();
?>

<section id="hero">
    <div class="hero-banner">
        <img class=" hero-img" src="<?php bloginfo("template_url") ?>/images/kigyoushudou_topimage.jpg" alt="">
    </div>
</section>


<section id="intro">
    <div class="container">
        <div class="intro-text">
            <h1 class="en-text" data-en="School Category">保育園の種類</h1>
            <p>リトルガーデンインターナショナルスクールは「お子さまの預け先を探す保護者の助けになりたい」という思いから、保育の受け皿を広げ、地域の枠にとらわれない様々な種類の施設を展開しています。多くの選択肢から、それぞれのご家庭に合った施設をお探しいただくことができます。</p>
        </div>
    </div>
</section>


<!-- 以下kigyoushudou HTML  -->
<section id="ninka">
    <div class="container">
        <h3 class="underline-1">認可保育園（認可保育所）</h3>
        <div class="section-image">
            <img src="<?php bloginfo("template_url"); ?>/images/hoiku_ninka_img.png" alt="認可保育園について">
        </div>
        <div class="section-text">
            <p>
                認可保育園は、厚生労働省管轄の児童福祉施設で、施設の広さや保育士の数・給食設備といった設置基準をクリアして都道府県知事に認可された児童福祉施設です。<br>
                区市町村が運営する公立保育園と、社会福祉法人や株式会社などが運営する民間保育園がありますが、いずれにしても公費によって運営されています。原則として、その市区町村に在住・在勤している人が利用対象となります。<br><br>
                リトルガーデンインターナショナル新習志野保育園は「子育て日本一」を目指す習志野市に協調し、習志野市認可保育園となりました。
            </p>
        </div>
        <div class="school-box">
            <div class="box-title">対象保育施設</div>
            <p class="box-text"><span><a href="<?php echo home_url(); ?>/center/shinnarashino/">新習志野</a></span></p>
        </div>
    </div>
</section>

<section id="ninka-gai" class="bg-skew">
    <div class="container">
        <h3 class="underline-1">認可外保育園（無認可保育園）</h3>
        <div class="section-image">
            <img src="<?php bloginfo("template_url"); ?>/images/hoiku_ninkagai_img.png" alt="認可外保育園について">
        </div>
        <div class="section-text">
            <p>
                認可外保育園は、認可保育園よりも緩やかな基準が設けられている保育施設です。<br>
                「認可外保育施設」や「無認可保育園」と呼ばれることもあり、自治体独自の基準をクリアした「認証保育園」「認証保育ルーム」と呼ばれる施設も含まれます。<br>
                施設の広さや設備などに関して国が定める基準を満たしていないものの、保護者の多様化するニーズに応えていたり特色ある保育を提供していたりする施設が多いのも、認可外保育園の特徴です。<br><br>
                リトルガーデンは世界に羽ばたける人材を育成するため、英語教育に力をいれている、バイリンガル育成保育園です。
            </p>
        </div>
        <div class="school-box">
            <div class="box-title">対象保育施設</div>
            <p class="box-text">
                <span><a href="<?php echo home_url(); ?>/center/ichikawa/">市川</a></span>
                <span><a href="<?php echo home_url(); ?>/center/lalaportmitsui/">ららぽーと三井ビル</a></span>
                <span><a href="<?php echo home_url(); ?>/center/kashiwanoha/">柏の葉キャンパス</a></span>
            </p>
        </div>
        <div class="section-text" id="nintei">
            <h4 class="underline-2">千葉市認定保育ルーム</h4>
            <p>
                千葉市内の認可外保育施設のうち、認可外保育施設の基準を遵守し、1年以上の運営実績を有するなどの基準を満たした施設を「千葉市認定保育ルーム」として、千葉市の配置基準に則って運営されている施設です。
            </p>
        </div>
        <div class="school-box">
            <div class="box-title">対象保育施設</div>
            <p class="box-text">
                <span><a href="<?php echo home_url(); ?>/center/makuhari/">幕張</a></span>
                <span><a href="<?php echo home_url(); ?>/center/oyumino/">おゆみ野</a></span>
            </p>
        </div>
        <div class="section-text" id="ninshou">
            <h4 class="underline-2">東京都認証保育園（東京都認証保育所）　</h4>
            <p>
                認証保育所は、東京都独自の制度で、大都市の特性に着目した都独自の基準（認証基準を設定し、「国の認可基準を満たしていなくても自治体の基準に達している」施設です。多様化する保育ニーズに応えることのできる新しいスタイルの保育所として創設されました。
            </p>
        </div>
        <div class="school-box">
            <div class="box-title">対象保育施設</div>
            <p class="box-text">
                <span><a href="<?php echo home_url(); ?>/center/koiwa/">小岩</a></span>
            </p>
        </div>
    </div>
</section>

<section id="kigyoushudou">
    <div class="container">
        <h3 class="underline-1">企業主導型保育事業</h3>
        <div class="section-image">
            <img src="<?php bloginfo("template_url"); ?>/images/hoiku_kigyou_img.png" alt="企業主導型保育事業について">
        </div>
        <div class="section-text">

            <p>
                企業主導型保育園とは、企業が従業員の子どもを預かるために設置した保育園です。複数の企業が共同で設置できるほか、従業員だけでなく地域住民の子どもの受け入れが可能 といった特徴があり、柔軟な運営ができる保育園です。
            </p>
        </div>
        <div class="school-box">
            <div class="box-title">対象保育施設</div>
            <p class="box-text">
                <span><a href="<?php echo home_url(); ?>/center/wbg/">WBG</a></span>
                <span><a href="<?php echo home_url(); ?>/center/chibaporttown/">千葉ポートタウン</a></span>
                <span><a href="<?php echo home_url(); ?>/center/makuharihongo/">幕張本郷</a></span>
            </p>
        </div>
    </div>
</section>

<!-- END kigyoushudou HTML  -->


<?php get_footer(); ?>