<?php

/**
 * Front Page Template
 */

get_header();
?>

<!--
ㅤ  ∧＿∧
　(　･∀･)
　(　つ┳⊃
ε (_)へ⌒ヽﾌ
(　　(　･ω･)
 ◎―◎   ⊃  ⊃
-->

<div id="front-page">
    <h1 class="visuallyhidden">リトルガーデンインターナショナルスクール</h1>

    <div id="hero">
        <div class="hero-slider">
            <div class="hero-slider-item">
                <img class="sp" src="<?php echo get_template_directory_uri(); ?>/images/top-banner-inter-768x900.jpg" alt="">
                <img class="pc" src="<?php echo get_template_directory_uri(); ?>/images/top-banner-inter-1800x550.jpg" alt="">
            </div>
            <div class="hero-slider-item">
                <img class="sp" src="<?php echo get_template_directory_uri(); ?>/images/banner-SP.jpg" alt="">
                <img class="pc" src="<?php echo get_template_directory_uri(); ?>/images/banner-PC.jpg" alt="">
            </div>
            <div class="hero-slider-item">
                <a href="<?php echo esc_url(home_url('/')); ?>information/">
                    <img class="sp" src="<?php echo get_template_directory_uri(); ?>/images/banner-enjiSP.png" alt="">
                    <img class="pc" src="<?php echo get_template_directory_uri(); ?>/images/banner-enjiPC.jpg" alt="">
                </a>
            </div>
            <div class="hero-slider-item">
                <a href="https://www.lifework-web.com/" target="_blank">
                    <img class="sp" src="<?php echo get_template_directory_uri(); ?>/images/banner-saiyoujyouhouSP.jpg" alt="">
                    <img class="pc" src="<?php echo get_template_directory_uri(); ?>/images/banner-saiyoujyouhouPC.jpg" alt="">
                </a>
            </div>
            <div class="hero-slider-item">
                <a href="<?php echo esc_url(home_url('/')); ?>afterschool/">
                    <img class="sp" src="<?php echo get_template_directory_uri(); ?>/images/banner-afterschoolSP.jpg" alt="">
                    <img class="pc" src="<?php echo get_template_directory_uri(); ?>/images/banner-afterschoolPC.jpg" alt="">
                </a>
            </div>
        </div>
    </div>


    <?php
    // NEWS Section
    // Start WP Query
    $the_query = new WP_Query(array(
        'post_type' => 'news',
        // 'posts_per_page' => 5,
    ));

    if ($the_query->have_posts()) {
    ?>
        <section id="news" class="bg-linen">
            <h2 class="font-caveat">Little Garden<br>新着情報</h2>
            <ul class="blog-list blog-slider">
                <?php
                // Start loop
                while ($the_query->have_posts()) : $the_query->the_post();
                ?>
                    <li class="blog-list-item">
                        <a href="<?php the_permalink() ?>">
                            <div class="blog-list-thumbnail"><?php the_post_thumbnail('thumbnail'); ?></div>
                            <div class="blog-list-text">
                                <span><?php the_title(); ?></span>
                            </div>
                        </a>
                    </li>
                <?php
                endwhile; ?>
            </ul>
            <div>
                <a href="<?php echo get_post_type_archive_link('news'); ?>" class="button-green-md">NEWS一覧</a>
            </div>
            <div class="afterschool_banner">
              <a href="<?php echo home_url('/afterschool/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/afterschool_banner.jpg" alt=""></a>
            </div>
        </section>
    <?php
    } else {
        //
    };
    wp_reset_postdata();
    ?>

    <section id="intro">
        <div class="fadein-up">
            <div class="intro-title">
                <h2>Little Garden<br>
                    International School
                </h2>
            </div>
            <div class="container">
                <p>リトルガーデンインターナショナルスクールは、『子どもたちが将来、世界のどこを活躍の場に選ぼうとも、充実した人生を送ることが出来るための基礎を築きあげていくこと』を目的とした保育園が母体のインターナショナルスクールです。</p>
            </div>
        </div>
    </section>

    <section id="about-us">
        <div class="about-us">
            <div class="about-us-item">
                <div class="about-us-title">
                    <span>1</span>
                    <h3>英語が自然に身につく<br>バイリンガル育成保育園</h3>
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/images/home_01_english_curriculum.jpg" alt="" loading="lazy">
                <div class="about-us-text">
                    <p>リトルガーデンのインターナショナルクラスでは、外国人が担任の先生であり、子どもたちは日常的に異文化に触れながら英語を習得します。英語・日本語ともにバランスのとれたバイリンガル育成を実践しています。</p>
                    <div class="more-button">
                        <a href="<?php echo get_post_type_archive_link('service'); ?>curriculum" class="button-green-md">もっと詳しく</a>
                    </div>
                </div>
            </div>

            <div class="about-us-item">
                <div class="about-us-title">
                    <span>2</span>
                    <h3>様々な経験と知識で<br class="sp">「食」を学ぶ食育カリキュラム</h3>
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/images/home_02_shokuiku.jpg" alt="" loading="lazy">
                <div class="about-us-text">
                    <p>リトルガーデンでは、子どもたちへの食育カリキュラムに力を入れています。グループ会社の農園と連携や栄養士の食育レッスンを通じて、「食」に関する経験と知識を育みます。</p>
                    <div class="more-button">
                        <a href="<?php echo get_post_type_archive_link('service'); ?>lunch/" class="button-green-md">もっと詳しく</a>
                    </div>
                </div>
            </div>

            <div class="about-us-item">
                <div class="about-us-title">
                    <span>3</span>
                    <h3>卒園後も学びの機会を<br>継続して提供します</h3>
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/images/home_03_afterschool.jpg" alt="" loading="lazy">
                <div class="about-us-text">
                    <p>リトルガーデンでは、保育園事業の他に学童保育（リトルガーデンアフタースクール）を運営しています。卒園から小学校入学までの間、放課後、夏休みなどの長期休暇にお子さまをお預かりし、子どもの成長や学習の機会を継続してご提供します。</p>
                    <span class="note">アフタースクールのみのご利用も可能です。</span>
                    <div class="more-button">
                        <a href="<?php echo home_url(); ?>/afterschool/" class="button-green-md">もっと詳しく</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <?php   //Custom shortcode 
    echo do_shortcode("[service_blackboard]");
    ?>


    <section id="center">
        <div class="container">
            <h2 class="en-text" data-en="Center">施設を探す
                <div class="title-bg">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/center_title2.png" alt="">
                </div>
            </h2>
            <ul class="school-list">
                <li><a href="<?php echo get_post_type_archive_link('center'); ?>makuhari/">幕張</a></li>
                <li><a href="<?php echo get_post_type_archive_link('center'); ?>ichikawa/">市川</a></li>
                <li><a href="<?php echo get_post_type_archive_link('center'); ?>wbg/">WBG</a></li>
                <li><a href="<?php echo get_post_type_archive_link('center'); ?>chibaporttown/">千葉ポートタウン</a></li>
                <li><a href="<?php echo get_post_type_archive_link('center'); ?>shinnarashino/">新習志野</a></li>
                <li><a href="<?php echo get_post_type_archive_link('center'); ?>oyumino/">おゆみ野</a></li>
                <li><a href="<?php echo get_post_type_archive_link('center'); ?>lalaportmitsui/">ららぽーと三井ビル</a></li>
                <li><a href="<?php echo get_post_type_archive_link('center'); ?>koiwa/">小岩</a></li>
                <li><a href="<?php echo get_post_type_archive_link('center'); ?>makuharihongo/">幕張本郷</a></li>
                <li><a href="<?php echo get_post_type_archive_link('center'); ?>kashiwanoha/">柏の葉キャンパス</a></li>
            </ul>
        </div>
    </section>


    <?php
    // Blog Section
    // Start our WP Query
    $the_query = new WP_Query(array(
        'post_type' => 'blog',
        'posts_per_page' => 3,
    ));

    if ($the_query->have_posts()) {
    ?>
        <section id="blog">
            <div class="container">
                <h2 class="en-text" data-en="Blog">スクールの日常
                    <div class="title-bg">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/center_title3.png" alt="">
                    </div>
                </h2>
                <ul class="blog-list">
                    <?php
                    // Start loop
                    while ($the_query->have_posts()) : $the_query->the_post();
                    ?>
                        <li class="blog-list-item">
                            <a href="<?php the_permalink() ?>">
                                <div class="blog-list-thumbnail"><?php the_post_thumbnail('thumbnail'); ?></div>
                                <div class="blog-list-text">
                                    <h3><?php the_title(); ?></h3>
                                    <p class="blog-date"><?php the_time('Y.m.d'); ?></p>
                                    <div class="blog-categories">
                                        <?php
                                        $terms =  get_the_terms($post->ID, 'school');
                                        if ($terms && !is_wp_error($terms)) {
                                            foreach ($terms as $term) {
                                                echo '<span class="school-color">' . $term->name . '</span>';
                                            }
                                        }
                                        ?>
                                        <?php
                                        $terms =  get_the_terms($post->ID, 'class');
                                        if ($terms && !is_wp_error($terms)) {
                                            foreach ($terms as $term) {
                                                echo '<span>' . $term->name . '</span>';
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                            </a>
                        </li>

                    <?php
                    endwhile; ?>
                </ul>
                <div class="blog-button">
                    <a href="<?php echo get_post_type_archive_link('blog'); ?>" class="button-green-md">ブログ一覧</a>
                </div>
            </div>
        </section>
    <?php
    } else {
        //
    };
    wp_reset_postdata();
    ?>

    <section id="sns">
        <div class="container">
            <h2 class="en-text" data-en="Official SNS">公式SNS
                <div class="title-bg">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/center_title4.png" alt="">
                </div>
            </h2>

            <div class="sns-banner">
                <a href="https://twitter.com/LittleG_LC/" target="_blank">
                    <img src="<?php bloginfo("template_url") ?>/images/twitter-banner.jpg" alt="">
                </a>
                <a href="https://lin.ee/i7R0MDO/" target="_blank">
                    <img src="<?php bloginfo("template_url") ?>/images/LINE-banner.jpg" alt="">
                </a>
            </div>
        </div>
    </section>
</div>


<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/slick-script.js"></script>


<?php get_footer(); ?>