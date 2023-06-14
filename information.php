<?php

/**
 * Template Name: Information Template
 */

get_header();
?>

<section id="hero">
    <div class="hero-banner">
        <img class=" hero-img" src="<?php bloginfo("template_url") ?>/images/information_topimage.jpg" alt="">
    </div>
</section>


<section id="intro">
    <div class="container">
        <div class="intro-text">
            <h1 class="en-text" data-en="How to enter">園見学・入園手続き</h1>
            <p>リトルガーデンインターナショナルスクールへ、ようこそ。
                リトルガーデンは保育園と幼稚園の機能を備えたバイリンガル保育園です。
                生徒の国籍は問わずご入園を随時受け付けております。外国人担任をはじめバイリンガル保育スタッフ、経験豊富な保育士や幼稚園教諭などでお子様ををサポートします。</p>
        </div>
    </div>
</section>


<section id="visit">
    <div class="container">
        <h2 class="en-text" data-en="Visit">園見学
            <div class="title-bg">
                <img src="<?php echo get_template_directory_uri(); ?>/images/center_title3.png" alt="">
            </div>
        </h2>
        <div class="section-image bg-fill">
            <img src="<?php bloginfo("template_url"); ?>/images/information_visit.jpg" alt="園見学" loading="lazy">
        </div>
        <div class="section-text">
            <p>
                リトルガーデンはすべてのクラスで質の高い独創性に富んだプログラムを実践しています。
                スタッフは、外国人担任をはじめバイリンガル保育スタッフ、経験豊富な保育士や幼稚園教諭などでお子様をサポートします。スタッフは全員インターナショナルマインド（国際的な考え方）を持ち合わせています。
                実際に園をご覧いただきながら、園の特色やリトルガーデンのカリキュラムなど、ご説明させていただきたいと思います。ご興味をお持ちになりましたら、まずは、ぜひ見学にお越しください。
            </p>
        </div>
        <div class="reservation">
            <h3 class="underline-3">園見学予約</h3>
            <p>園見学をご希望の方は下記のボタンより直接お申し込みいただけます。
                ご希望の園のボタンをクリックいただき、希望日時を選択ください。
            </p>
            <?php   //Custom shortcode 'school_list' 
            echo do_shortcode("[school_list]");
            ?>
            <div class="reservation-note">
                <span class="note">お急ぎの方や当日キャンセルの場合は各園まで直接ご連絡ください。</span>
                <span class="note">防犯の関係上、ご予約のないご来園はご遠慮ください。</span>
                <span class="note">新型コロナウイルスの感染対策として、極力親子1人ずつの見学をお願いいたします。また、咳や熱など風邪の症状がある場合は見学をご遠慮ください。</span>
                <span class="note">駐車場は近隣のコインパーキングをご利用いただく場合がございます。</span>
            </div>
        </div>
</section>

<section id="how-to-enter">
    <div class="container">
        <h2 class="en-text" data-en="How to enter">入園の手続き
            <div class="title-bg">
                <img src="<?php echo get_template_directory_uri(); ?>/images/center_title1.png" alt="">
            </div>
        </h2>
        <div class="section-image bg-fill">
            <img src="<?php bloginfo("template_url"); ?>/images/information_howtoenter.jpg" alt="入園の手続き" loading="lazy">
        </div>

        <div class="entrance-flow">
            <h3 class="underline-3">入園の流れ</h3>

            <div class="flow">
                <div class="flow-item">
                    <div class="flow-title">園見学</div>
                    <p class="flow-text">安心してお子さまをお預けいただくため随時園見学を行っています。入園をご希望の園を上記一覧からお選びいただきご予約ください。<br><br></p>
                    <span class="note">基本的に平日の10時～の開催です。土曜日の見学に関しましてはお問い合わせください。</span>
                </div>
                <div class="flow-item">
                    <div class="circle"></div>
                    <div class="flow-title">申込書提出</div>
                    <p class="flow-text"><a href="https://docs.google.com/forms/d/e/1FAIpQLSch-JmueKDNCmHNbYeFF0O4jaRWqP_HENMNR0wqVYRlV1sbmg/viewform" target="_blank" rel="noopener">ご希望の園の入園願書（Google Forms）</a>を入力して送信してください。<br><br></p>
                    <span class="note">リトルガーデンインターナショナル新習志野保育園は認可保育園となりますので、習志野市への入園のお申し込みが必要となります。</span>
                </div>
                <div class="flow-item">
                    <div class="circle"></div>
                    <div class="flow-title">入園審査決定のご連絡</div>
                    <p class="flow-text">入園についての審査を行わせていただきます。<br>入園願書をご提出いただいてから一週間程度で、園の担当者よりご連絡し入園面談日の設定をさせていただきます。</p>
                </div>
                <div class="flow-item">
                    <div class="circle"></div>
                    <div class="flow-title">入園面談</div>
                    <p class="flow-text">入園書類や利用規約（重要説明事項）のご説明にあたり、入園面談を行わせていただきます。<br>
                        お持ちいただくもの：印鑑・母子手帳・筆記用具<br><br>
                        その後入園書類一式をご提出いただき、入園確定となります。</p>
                </div>
                <div class="flow-item">
                    <div class="circle"></div>
                    <div class="flow-title">登園開始</div>
                </div>
            </div>
        </div>

        <div id="application-form" class="application-form">
            <h3 class="underline-3">入園願書</h3>
            <div class="bg-fill">
                <p>入園願書は下記のGoogle Formsよりご入力いただけます。
                </p>
                <a href="https://docs.google.com/forms/d/e/1FAIpQLSch-JmueKDNCmHNbYeFF0O4jaRWqP_HENMNR0wqVYRlV1sbmg/viewform" target="_blank" rel="noopener" class="button-green-lg" align="center">リトルガーデン入園願書<br>（Google Forms）</a>
            </div>
        </div>

        <!--
        <div id="application-form" class="application-form">
            <h3 class="underline-3">入園申込書ダウンロード</h3>
            <div class="bg-fill">
                <p>
                    <span>市川</span>
                    <span>WBG</span>
                    <span>千葉ポートタウン</span>
                    <span>新習志野</span>
                    <span>ららぽーと三井ビル</span>
                    <span>小岩</span>
                    <span>幕張本郷</span>
                    <span>柏の葉キャンパス</span>
                </p>
                <a href="<?php bloginfo("template_url"); ?>/pdf/Application_Form.pdf" target="_blank" class="button-green-lg">リトルガーデン入園申込書（PDF）</a>
            </div>
            <div class="bg-fill">
                <p>
                    <span>幕張</span>
                    <span>おゆみ野</span>
                </p>
                <a href="<?php bloginfo("template_url"); ?>/pdf/Application_Form(Licensed).pdf" target="_blank" class="button-green-lg">認定保育ルーム入園申込書（PDF）</a>
            </div>
             <div class="bg-fill">
                <p>リトルガーデンインターナショナル アフタースクール幕張</p>
                <a href="<?php bloginfo("template_url"); ?>/pdf/Application_Form(Afterschool).pdf" target="_blank" class="button-orange-lg">学童保育入校申込書（PDF）</a>
            </div>
        </div>
-->
    </div>
</section>



<?php get_footer(); ?>