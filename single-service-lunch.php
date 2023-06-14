<?php

/*
Service-Lunch Page
*/

get_header();
?>

<section id="hero">
    <div class="hero-banner">
        <img class=" hero-img" src="<?php bloginfo("template_url") ?>/images/shokuiku_topimage.jpg" alt="食育について">
    </div>
</section>


<section id="intro">
    <div class="container">
        <div class="intro-text">
            <h1 class="en-text" data-en="Dietary Education">食育・給食</h1>
            <p>リトルガーデンでは、グループ会社の農園と連携するなど、子どもたちへの「食育」に力を入れています。また、旬の食材を使用し、栄養バランスに配慮された給食やおやつは、園で手作りしています。</p>
        </div>
    </div>
</section>


<div id="single-service-lunch">

    <section id="education">
        <div class="container">
            <h2 class="underline-1">食育に関する取り組み</h2>
            <div class="flex">
                <div class="section-image">
                    <img class="bg-fill" src="<?php bloginfo("template_url"); ?>/images/shokuiku_torikumi.jpg" alt="調理をするこども">
                </div>
                <div class="section-text">
                    <p>「食育」とは、食べ物や食事に関する知識を学び、食への興味関心を育むことで、子どもたちが一生を通じて健康的な食生活を送れるようにするための教育です。子どもの頃から適切な食育を受けることで、栄養バランスやマナーを身につけ<span id="dots">...</span><span id="more">、食材に感謝する心などを養うことができます。
                            私たちは、教育・保育に携わるものとして、これからの未来を担う子どもたちに、「食育」を通じ、食の楽しさや大切さを届けることが重要であると感じています。リトルガーデンインターナショナルスクールでは、様々な食に関する体験を通じて、子どもたちが食に関する知識を身に着け、楽しく学ぶことができるよう、下記のような「食育」の取り組みを行っております。</span>
                        <button onclick="myFunction()" id="myBtn">もっとよむ</button>
                    </p>
                </div>
            </div>
        </div>

        <div class="decoration-icon">
            <img src="<?php bloginfo("template_url"); ?>/images/kirakira.svg" alt="">
        </div>

        <div class="container">
            <h3 class="underline-3">【栄養士による食育レッスン】</h3>
            <div class="flex">
                <div class="section-image">
                    <img src="<?php bloginfo("template_url"); ?>/images/shokuiku_lesson.jpg" alt="食育レッスンのようす">
                </div>
                <div class="section-text">
                    <p>各園の栄養士が毎月、食育テーマに沿った内容のレッスンを実施しています。レッスンでは、日々の給食に使用されている食材を見たり実際に触れてみたりします。また、七夕やクリスマス、ひなまつりなど、行事に関連する食材のいわれなどを子どもたちに話をしたりもします。年に数回、子どもたちも参加する「クッキング」も実施しています。<span class="note">先生が食育レッスンを行っている園もございます。</span></p>
                </div>
            </div>
        </div>

        <div class="decoration-icon">
            <img src="<?php bloginfo("template_url"); ?>/images/kirakira.svg" alt="">
        </div>

        <div class="container">
            <h3 class="underline-3">【福岡女子大学大学院との共同開発による食育プログラム】</h3>
            <div class="flex">
                <div class="section-image">
                    <img src="<?php bloginfo("template_url"); ?>/images/shokuiku_program.jpg" alt="Zoomのようす">
                </div>
                <div class="section-text">
                    <p>今年度より、リトルガーデン所属の管理栄養士が主体となり、福岡女子大学大学院栄養教育学研究室と共同開発した食育プログラムを実施することになりました。
                        対象の園では、月に1度、保育時間中に園でZoomを利用したオンライン食育レッスンを実施します。レッスン後、子どもが自宅に「食育だより」を持ち帰り、保護者の方とレッスン内容を共有することができます。また、食育レッスンと連動した内容で、ご自宅にてお子さまと取り組んでいただけるクッキング動画をYouTubeにて配信予定です。
                    </p>
                </div>
            </div>
        </div>

        <div class="decoration-icon">
            <img src="<?php bloginfo("template_url"); ?>/images/kirakira.svg" alt="">
        </div>

        <div class="container">
            <h3 class="underline-3">【ＬＣファームとの連携による「食農教育」】</h3>
            <div class="flex">
                <div class="section-image">
                    <img src="<?php bloginfo("template_url"); ?>/images/shokuiku_lcfarm.jpg" alt="自社農園で食育を受けるこども">
                </div>
                <div class="section-text">
                    <p>リトルガーデンでは、自社農園の「ＬＣファーム」と連携し、農業体験を実施しています。
                        子どもたちと一緒に、農園から園に届いた枝豆のもぎ取りをしたり、実際に農園へ行き、さつまいもの苗の植え付けや、じゃがいもの収穫をしたりします。子どもたちが自ら畑を耕し、土の感触や匂いを感じ、みんなで草取りや水やりをしながら育て、収穫した野菜を調理して味わう<span id="dots2">...</span><span id="more2">種をまいて作物を育てて収穫し食べると、いう一連の流れを体験することで、食を支えている農家の方への感謝の気持ちと、生き物をいただいているということへの理解を深める目的があります。
                            リトルガーデンでは、このような体験を通じ、農業についての知識を深める「食農教育」にも力を入れています。また、LCファームで収穫された野菜を日々の給食においしく調理し、提供しています。</span>
                        <button onclick="myFunction2()" id="myBtn2">もっとよむ</button>
                    </p>
                </div>
            </div>
            <div>
                <a href="<?php echo get_post_type_archive_link('blog') . 'other'; ?>" class="button-green-md">食育ブログはこちら</a>
            </div>
        </div>
    </section>

    <section id="lunch" class="bg-skew-end">
        <div class="container sub-read2">
            <div class="intro-text">
                <h2 class="en-text" data-en="Lunch">給食・おやつ</h2>
            </div>
            <div class="flex">
                <div class="section-image bg-unfill">
                    <img src="<?php bloginfo("template_url"); ?>/images/shokuiku_subimage.jpg" alt="おいし～い">
                </div>
                <div class="section-text">
                    <p>リトルガーデンでは子どもたちの成長に合わせた給食を提供しています。また、季節を感じる旬の食材を使った給食を提供するなど、食育にも力を入れています。</p>
                </div>
            </div>
        </div>

        <div class="decoration-icon">
            <img src="<?php bloginfo("template_url"); ?>/images/kirakira.svg" alt="">
        </div>

        <div class="container">
            <h3 class="underline-3">栄養士監修の手作り給食</h3>
            <div class="flex">
                <div class="flex">
                    <div class="section-image">
                        <img src="<?php bloginfo("template_url"); ?>/images/shokuiku_staff.jpg" alt="調理スタッフたち">
                    </div>
                    <div class="section-text">
                        <p>リトルガーデンでは、子供たちの成長に合わせた給食を提供しています。季節の食材を使用したり、自社農園で収穫した野菜を使用する等、食育にも力を入れています。また、Taste the worldという取り組みでいろいろな国の料理が毎月出たり、イベント食があったりと、おいしいのはもちろん楽しい給食の時間で子供たちの成長を支えています。</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="decoration-icon">
            <img src="<?php bloginfo("template_url"); ?>/images/kirakira.svg" alt="">
        </div>

        <div class="container">
            <h3 class="underline-3">おやつについて</h3>
            <div class="flex">
                <div class="section-image">
                    <img src="<?php bloginfo("template_url"); ?>/images/shokuiku_snack.jpg" alt="実際のおやつのようす">
                </div>
                <div class="section-text">
                    <p>おやつタイムは子どもたちの脳と心のリフレッシュに欠かせません。リトルガーデンでは栄養士と調理師が協力して作る、栄養バランスのとれたおいしいおやつを提供しています。
                        ※市販のおやつやくだものを提供することもあります</p>
                </div>
            </div>
        </div>

        <div class="decoration-icon">
            <img src="<?php bloginfo("template_url"); ?>/images/kirakira.svg" alt="">
        </div>

        <div class="container">
            <h3 class="underline-3">リトルガーデンならではTaste the Worldで世界一周</h3>
            <div class="flex">
                <div class="section-image">
                    <img src="<?php bloginfo("template_url"); ?>/images/shokuiku_world.jpg" alt="料理で世界一周">
                </div>
                <div class="section-text">
                    <p>リトルガーデンはインターナショナルスクールということもあり、給食でいろいろな国の料理が楽しめるよう、栄養士が子供たちにも食べやすいようにアレンジをして提供しています。また、子供たちの味覚が形成される大切な時期に色々な世界の料理に触れることで、これからの長い人生で出会う様々な料理をおいしく食べられるようになってくれることを願っています。</p>
                </div>
            </div>
        </div>

    </section>
</div>


<script>
    function myFunction() {
        var dots = document.getElementById("dots");
        var moreText = document.getElementById("more");
        var btnText = document.getElementById("myBtn");

        if (dots.style.display === "none") {
            dots.style.display = "inline";
            btnText.innerHTML = "もっとよむ";
            moreText.style.display = "none";
        } else {
            dots.style.display = "none";
            btnText.innerHTML = "とじる";
            moreText.style.display = "inline";
        }
    };

    function myFunction2() {
        var dots = document.getElementById("dots2");
        var moreText = document.getElementById("more2");
        var btnText = document.getElementById("myBtn2");

        if (dots.style.display === "none") {
            dots.style.display = "inline";
            btnText.innerHTML = "もっとよむ";
            moreText.style.display = "none";
        } else {
            dots.style.display = "none";
            btnText.innerHTML = "とじる";
            moreText.style.display = "inline";
        }
    };
</script>


<?php get_footer(); ?>