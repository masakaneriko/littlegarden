<?php

/**
 * Template Name: 404 Template
 */

get_header();
?>
<div id="page-404">

    <section id="hero">
        <div class="hero-banner">
            <!-- <img class=" hero-img" src="<?php bloginfo("template_url") ?>/images/no_image_placeholder.png" alt=""> -->
            <img class="hero-img" src="<?php bloginfo("template_url") ?>/images/404_topimage.jpg" alt="">
        </div>
    </section>

    <section id="intro">
        <div class="container">
            <div class="intro-text">
                <h1 class="en-text" data-en="404 Not Found">ページが見つかりませんでした。</h1>
                <p>申し訳ございませんが、該当ページがございません。<br>
                    トップページへとご案内いたします。</p>
                <p>
                    <a class="button-white-lg" href="<?php echo home_url(); ?>/">トップにもどる</a>
                    <br>
                    <span class="note">
                        このページは5秒後に自動的にジャンプします。<br>
                        自動的にジャンプしない場合は、上記のリンクボタンをクリックしてください。
                    </span>
                </p>
            </div>
        </div>
    </section>

</div>


<?php get_footer(); ?>