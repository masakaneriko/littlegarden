<?php

/**
 * Template Name: Contact Template
 */

get_header();
?>

<section id="hero">
    <div class="hero-banner">
        <img class=" hero-img" src="<?php bloginfo("template_url") ?>/images/contact_topimage.jpg" alt="">
    </div>
</section>


<section id="intro">
    <div class="container">
        <div class="intro-text">
            <h1 class="en-text" data-en="Contact">お問い合わせ</h1>
            <p>入園についてのご相談やご質問など、お気軽にお問い合わせください。コンタクトフォームや公式LINEアカウントからもご連絡いただくことができます。</p>
        </div>
    </div>
</section>


<!-- <div class="contact-nav">
    <div class="container">
        <ul>
            <li><a href="#faq">よくあるご質問</a></li>
            <li><a href="#form">フォーム</a></li>
            <li><a href="#other">その他</a></li>
        </ul>
    </div>
</div> -->


<section id="faq">
    <div class="container">
        <h2 class="en-text" data-en="Faq">よくあるご質問
            <div class="title-bg">
                <img src="<?php bloginfo("template_url") ?>/images/center_title1.png" alt="">
            </div>
        </h2>
        <div class="faq">
            <div class="faq-item">
                <button class="accordion">見学をしたいのですが？</button>
                <div class="panel">
                    <p>ご見学は随時承っております。<br><br>園のイベント等で外出する場合もございますので、各園に事前にお問い合わせの上、ご予約をお願いいたします。<br><br>モーニングサークルの始まる10時から約1時間をご見学の目安にしていただけますよう、お願いいたします。
                        <br><br>
                        <a href="<?php echo home_url(); ?>/information/">園見学について</a>
                    </p>
                </div>
            </div>
            <div class="faq-item">
                <button class="accordion">一時保育をお願いしたいのですが？</button>
                <div class="panel">
                    <p>一時保育をご希望のお客様には事前にご予約をお願いしております。<br>ご希望の園にお電話にてお問い合わせください。<br><br>
                        <a href="<?php echo home_url(); ?>/other-services/">一時保育について</a>
                    </p>
                </div>
            </div>
            <div class="faq-item">
                <button class="accordion">英語が全くできませんが大丈夫ですか？</button>
                <div class="panel">
                    <p>外国人担任が丁寧に指導を行っておりますので、英語がはじめてのお子さまも安心してお預けいただけます。<br><br>また、各園に日本人のバイリンガルスタッフがおりますので、ご不安な点がございましたら何なりとご相談ください。</p>
                </div>
            </div>
            <div class="faq-item">
                <button class="accordion">保護者が英語力に自信がありませんが、大丈夫ですか？</button>
                <div class="panel">
                    <p>バイリンガルの日本人スタッフが常時勤務しておりますのでご安心ください。通訳が必要な場合はお気軽にお声がけください。</p>
                </div>
            </div>
            <div class="faq-item">
                <button class="accordion">利用料はどのくらいでしょうか？一般の保育園や幼稚園に比べてお高めですか？</button>
                <div class="panel">
                    <p>各施設ごとに利用料金が異なるため一概には言えませんが、リトルガーデンは認可外施設のほか「千葉市認定保育ルーム」、「企業主導型保育事業」、「東京都認証保育所」に加え、「習志野市認可保育園」に該当する施設もあります。<br><br>
                        また、国内にあるすべての園は「幼児教育・保育の無償化」の対象となりますし、各ご家庭が、自治体からの各種補助金交付の対象となる場合もあります（各自治体にお問い合わせください）。<br><br>
                        詳細な料金は、各園（の形態）により異なりますので、ご希望の園のページにてご確認ください。<br><br>
                        <a href="<?php echo home_url(); ?>/center/">施設を探す</a>
                    </p>
                </div>
            </div>
            <div class="faq-item">
                <button class="accordion">卒園時にはどのくらい英語が話せるようになりますか？</button>
                <div class="panel">
                    <p>個人差がありますが、多くのお子さまが、生活に必要なコミュニケーションを英語でとることができるようになります。</p>
                </div>
            </div>
            <div class="faq-item">
                <button class="accordion">卒園後、近所の公立の小学校に通う予定ですが、せっかく覚えた英語を忘れてしまわないか心配です。</button>
                <div class="panel">
                    <p>リトルガーデン各園にはインターナショナルスクールの学童保育があります。<br><br>放課後は再び英語を使用する環境で過ごすことができます。おやつや送迎サービスなどもございます。詳しくは学童ページをご覧ください。<br><br>
                        <a href="<?php echo home_url(); ?>/afterschool/">アフタースクールについて</a>
                    </p>
                </div>
            </div>
            <div class="faq-item">
                <button class="accordion">開園時間は何時から何時までですか？</button>
                <div class="panel">
                    <p>朝9時から夜6時までです。<br><br>延長保育については、ご利用の園にご相談ください。<br>詳しくは各園の料金表をご覧ください。</p>
                </div>
            </div>
            <div class="faq-item">
                <button class="accordion">昼食やおやつはどうなっていますか？</button>
                <div class="panel">
                    <p>園内で手作りした栄養満点の食事とおやつをご用意しております。</p>
                </div>
            </div>
            <div class="faq-item">
                <button class="accordion">離乳食やアレルギー食には対応していますか？</button>
                <div class="panel">
                    <p>施設形態により対応が異なりますので、ご利用の園にお問い合わせください。</p>
                </div>
            </div>
            <div class="faq-item">
                <button class="accordion">インターナショナルスクールでもトイレトレーニングは実施してもらえるのでしょうか？</button>
                <div class="panel">
                    <p>もちろんです。<br>まだおむつの外れていないお子さまには、外国人スタッフ・日本人スタッフが連携してしっかりトイレトレーニングを行います。<br><br>基本的にNurseryクラス（2歳児）の春頃からスタートしますが、それぞれのお子さまの状況やペースを尊重しながら、お友だちと一緒に楽しく進めていきます。</p>
                </div>
            </div>
            <div class="faq-item">
                <button class="accordion">お昼寝はお布団ですか？ベッドですか？</button>
                <div class="panel">
                    <p>お昼寝は、全園で午睡用の簡易ベッド「コット」を使用しています。<br>汚れてもすぐに洗えるため衛生面に優れています。少し高さがあるため、夏は通気性がよく、冬は床の冷たさが伝わりません。埃やアレルギーからも子どもたちを守ります。<br>
                        ご家庭では、コットカバーと掛け布団代わりの大き目のタオルをご用意いただきます。
                    </p>
                </div>
            </div>
            <div class="faq-item">
                <button class="accordion">バス送迎をお願いしたいのですが？</button>
                <div class="panel">
                    <p>Preschool 以上のお子さまは1ヶ月8,600円～8,800円（税込）にて承っております。 <br><br>但し地域によってはご利用頂けない場合がございますが、事前に各園にお問い合わせ下さい。<br><br>なお、新規の受付は4月からとなります。 <br><br>また、個別送迎をご希望の場合はご相談ください（片道1,650円／税込）</p>
                </div>
            </div>
            <div class="faq-item">
                <button class="accordion">兄弟割引はありますか？</button>
                <div class="panel">
                    <p>ご兄弟で入園いただいた場合、下のお子さまの入園料が半額となります。<br><br>また、下のお子さまの保育料は10％割引とさせていただきます。</p>
                </div>
            </div>
            <div class="faq-item">
                <button class="accordion">年度途中での入園や、リトルガーデン内での転園は可能ですか？</button>
                <div class="panel">
                    <p>ご入園は随時承っております。<br><br>また、リトルガーデン内の転園も可能です。<br><br>事前にご希望の園までお問い合わせください。</p>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="form">
    <div class="container">
        <h2 class="en-text" data-en="Contact Form">お問い合わせフォーム
            <div class="title-bg">
                <img src="<?php bloginfo("template_url") ?>/images/center_title3.png" alt="">
            </div>
        </h2>
        <p>お問い合わせは下記のご記入フォームに必要事項を入力し、<span class="send-color">「送信」</span>をクリックしてください。</p>
        <span class="note">お電話での問い合わせは各園へ直接お問い合わせください。</span>
        <div class="form">
            <?php   // Contact Form Shortcode
            echo do_shortcode('[contact-form-7 id="528" title="Contact Form"]');
            ?>
        </div>

    </div>
</section>


<section id="tel">
    <div class="container">
        <h2 class="en-text" data-en="Telephone">お電話でのお問い合わせ</h2>
        <p>お電話でのお問い合わせは、各園へ直接お問い合わせください</p>
        <div class="white-box">
            <?php   //Custom shortcode 
            echo do_shortcode("[school_number]");
            ?>
        </div>
        <a href="<?php echo get_post_type_archive_link('center'); ?>" class="button-green-lg">施設一覧ページへ</a>


    </div>
</section>
<section id="line">
    <div class="container">
        <h2 class="en-text" data-en="Line">公式LINE
            <div class="title-bg">
                <img src="<?php bloginfo("template_url") ?>/images/center_title4.png" alt="">
            </div>
        </h2>
        <p>LINE公式アカウントからチャット形式でお問い合わせいただくことも可能です。</p>
        <div class="line-logo">
            <a href="https://lin.ee/i7R0MDO/" target="_blank">
                <img src="<?php bloginfo("template_url") ?>/images/LINE-banner.jpg" alt="">
            </a>
        </div>
    </div>
</section>




<!-- <?php echo do_shortcode("[sns_cta]"); ?> -->




<?php get_footer(); ?>