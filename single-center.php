<?php
/*
Template Name: Center Pages Template
Template Post Type: center
*/
get_header();
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div id="single-center">


            <section id="hero">
                <div class="hero-banner hero-mask">
                    <?php the_post_thumbnail('full', array('class' => 'hero-img')); ?>
                </div>
            </section>


            <section id="intro">
                <div class="container">
                    <div class="intro-text">
                        <span><?php the_field('intro_catch'); ?></span>
                        <h1>リトルガーデンインターナショナル<br>
                            <?php echo get_the_title(); ?>
                        </h1>

                        <?php   //Show row only if
                        $radio = get_field('intro_link');
                        if (!empty($radio)) :
                            if ($radio == "ninka") :
                                echo '<a class="childcare-type" href="' . home_url() . '/kigyoushudou#ninka">認可保育園</a>';
                            elseif ($radio == "ninka-gai") :
                                echo '<a class="childcare-type" href="' . home_url() . '/kigyoushudou#ninka-gai">認可外保育園</a>';
                            elseif ($radio == "nintei") :
                                echo '<a class="childcare-type" href="' . home_url() . '/kigyoushudou#nintei">千葉市認定保育ルーム</a>';
                            elseif ($radio == "ninshou") :
                                echo '<a class="childcare-type" href="' . home_url() . '/kigyoushudou#ninshou">東京都認証保育園</a>';
                            elseif ($radio == "kigyoushudou") :
                                echo '<a class="childcare-type" href="' . home_url() . '/kigyoushudou#kigyoushudou">企業主導型保育事業</a>';
                            endif;
                        endif; ?>

                        <p><?php the_field('intro_text'); ?></p>
                    </div>
                </div>
            </section>


            <section id="message">
                <div class="container">
                    <h2 class="en-text" data-en="Message">メッセージ
                        <div class="title-bg">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/center_title1.png" alt="">
                        </div>
                    </h2>
                    <div class="message-content">
                        <div class="message-img">
                            <?php
                            $image = get_field('message_photo');
                            if (!empty($image)) : ?>
                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            <?php endif; ?>

                            <h3>
                                <span>
                                    <?php the_field('message_name_english'); ?>
                                </span>
                            </h3>

                        </div>
                        <p class="message-text"><?php the_field('message_message'); ?><br><br>
                            <span class="name"><?php the_field('message_job_title'); ?><br>
                                <?php the_field('message_name'); ?></span>
                        </p>
                    </div>
                </div>
            </section>


            <?php   //Custom shortcode 'school_list"
            echo do_shortcode("[service_blackboard]");
            ?>


            <?php
            // Movie Section 
            // show only if there is ACF content
            if (!empty(get_field('movie'))) { ?>
                <section id="movie">
                    <h2 class="en-text" data-en="Movie"><?php echo get_the_title(); ?>での過ごし方
                        <div class="title-bg">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/center_title2.png" alt="">
                        </div>
                    </h2>
                    <div class="youtube-responsive-container"><?php the_field('movie'); ?></div>
                </section>
            <?php
            } ?>


            <section id="features" class="bg-linen">
                <div class="container">
                    <h2 class="en-text" data-en="Features"><?php echo get_the_title(); ?>の魅力
                        <div class="title-bg">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/center_title3.png" alt="">
                        </div>
                    </h2>
                    <div class="feature-list">
                        <div class="feature-list-item">
                            <div class="feature-img">
                                <?php
                                $image = get_field('features_image_1');
                                if (!empty($image)) : ?>
                                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                <?php endif; ?>
                            </div>
                            <div class="feature-text">
                                <h3><?php the_field('features_title_1'); ?></h3>
                                <p><?php the_field('features_description_1'); ?></p>
                            </div>
                        </div>
                        <div class="feature-list-item">
                            <div class="feature-img">
                                <?php
                                $image = get_field('features_image_2');
                                if (!empty($image)) : ?>
                                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                <?php endif; ?>
                            </div>
                            <div class="feature-text">
                                <h3><?php the_field('features_title_2'); ?></h3>
                                <p><?php the_field('features_description_2'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section id="staff">
                <div class="container">
                    <h2 class="en-text" data-en="Foreign Staff">外国人スタッフのご紹介
                        <div class="title-bg">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/center_title4.png" alt="">
                        </div>
                    </h2>
                    <div class="profile-card">

                        <div class="profile-top">
                            <div class="profile-img">
                                <?php
                                $image = get_field('staff_photo');
                                if (!empty($image)) : ?>
                                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                <?php endif; ?>
                            </div>
                            <div class="profile-title">
                                <p>
                                    <?php the_field('staff_name'); ?>
                                </p>
                                <span>
                                    -- <?php the_field('staff_nickname'); ?> --
                                </span>
                            </div>
                        </div>

                        <div class="profile-bottom">
                            <table class="profile-info">
                                <tbody>
                                    <tr>
                                        <th>Class:</th>
                                        <td><?php the_field('staff_class'); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Hobbies:</th>
                                        <td><?php the_field('staff_interests'); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Message</th>
                                        <td><?php the_field('staff_message'); ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </section>


            <section id="daily-schedule">
                <h2 class="en-text" data-en="Daily Schedule">1日の過ごし方
                    <div class="title-bg">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/center_title1.png" alt="">
                    </div>
                </h2>
                <div class="slider-day">
                    <div class="slider-day-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/daily_01_touen.jpg">
                        <div class="slider-day-text">
                            <span>7：30</span>
                            <h3>開園（随時登園）</h3>
                            <p>「Good Morning!」先生やお友達に元気に挨拶して登園です。バスの子どもたちもリトルガーデンのバスに乗って登園してきます。
                            </p>
                        </div>
                    </div>
                    <div class="slider-day-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/daily_02_morning_circle.jpg">
                        <div class="slider-day-text">
                            <span>10：00</span>
                            <h3> Morning Circle（朝の会）</h3>
                            <p>ここからが本格的な英語の時間のスタート！ この時間は園のみんなが集合して、外国人の先生と一緒に、英語で挨拶をして、歌やダンス、ゲームなどを楽しみます。
                            </p>
                        </div>
                    </div>
                    <div class="slider-day-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/daily_03_am.jpg">
                        <div class="slider-day-text">
                            <span>10：30</span>
                            <h3>午前のレッスン／お外遊び（英語）</h3>
                            <p>クラスごとにフォニックスのレッスン、ワークブック、ゲーム、クラフト（製作）などを英語で行います。お天気の良い日は、園庭や近所の公園などでお外遊びもします。
                            </p>
                        </div>
                    </div>
                    <div class="slider-day-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/daily_04_lunch.jpg">
                        <div class="slider-day-text">
                            <span>12：00</span>
                            <h3>昼食（英語）</h3>
                            <p>おいしくて栄養満点！リトルガーデンオリジナルの手作り給食をご提供しています。 英語で「いただきます」の歌を歌ってランチスタート♪
                            </p>
                        </div>
                    </div>
                    <div class="slider-day-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/daily_05_pm.jpg">
                        <div class="slider-day-text">
                            <span>13：00</span>
                            <h3>午後のレッスン（英語）</h3>
                            <p>午前のレッスン同様、この時間もフォニックスやワークブック、ゲーム、クラフトなどを英語で行います。</p>
                        </div>
                    </div>
                    <div class="slider-day-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/daily_06_nap.jpg">
                        <div class="slider-day-text">
                            <span>14：00</span>
                            <h3>お昼寝</h3>
                            <p>いっぱい遊んでしっかり眠って…生活のリズムを整えます。 「トイレに行ってもいいですか？」も英語で言えるようになります！</p>
                        </div>
                    </div>
                    <div class="slider-day-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/daily_07_snack.jpg">
                        <div class="slider-day-text">
                            <span>15：30～16：00</span>
                            <h3>おやつ</h3>
                            <p>みんなお待ちかねのおやつの時間♪手作りおやつが大人気！</p>
                        </div>
                    </div>
                    <div class="slider-day-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/daily_08_japanese.jpg">
                        <div class="slider-day-text">
                            <span>16：00</span>
                            <h3>日本語レッスン</h3>
                            <p>日本語のワークブックを使ったレッスンや、クラフトの他、日本の歌やリトミック、絵本の読み聞かせなどを行います。子どもたちも、この時間は日本語で過ごします。</p>
                        </div>
                    </div>
                    <div class="slider-day-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/daily_09_enchou.jpg">
                        <div class="slider-day-text">
                            <span>17：00</span>
                            <h3>自由遊び／随時降園</h3>
                            <p>お迎えや帰りのバスの時間まではそれぞれ自由遊びをして過ごします。 <br>お帰りの時は「See you!」また明日、元気に登園しましょうね！</p>
                        </div>
                    </div>
                    <div class="slider-day-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/daily_10_closed.jpg">
                        <div class="slider-day-text">
                            <span>18：30～19：00</span>
                            <h3>延長保育時間（自由遊び）／開園時間終了</h3>
                            <p>延長保育実施の有無・時間・費用等につきましては、各園にお問い合わせください。</p>
                        </div>
                    </div>
                </div>
            </section>


            <section id="annual-events">
                <h2 class="en-text" data-en="Annual Events">年間行事
                    <div class="title-bg">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/center_title5.png" alt="">
                    </div>
                </h2>
                <div class="slider-annual">
                    <div class="slider-annual-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/annual_spring_school-trip-center.jpg">
                        <div class="slider-annual-text">
                            <h3>春のイベント（4・5・6月）</h3>
                            <ul>
                                <li>ウェルカムパーティー（入園歓迎会）</li>
                                <li>イースターパーティー</li>
                                <li>フィールドトリップ（遠足）</li>
                            </ul>
                        </div>
                    </div>
                    <div class="slider-annual-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/annual_summer_summer-fes-center.jpg">
                        <div class="slider-annual-text">
                            <h3>夏のイベント（7・8月）</h3>
                            <ul>
                                <li>ウォータープレイ（水遊び）</li>
                                <li>サマーキャンプ</li>
                                <li>サマースクール</li>
                                <li>サマーフェスティバル（夏祭り）</li>
                            </ul>
                        </div>
                    </div>
                    <div class="slider-annual-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/annual_autumn_sports-fes-center.jpg">
                        <div class="slider-annual-text">
                            <h3>秋のイベント（9・10・11月）</h3>
                            <ul>
                                <li>スポーツフェスティバル（運動会）</li>
                                <li>ハロウィーンパーティー</li>
                                <li>お芋掘り</li>
                            </ul>
                        </div>
                    </div>
                    <div class="slider-annual-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/annual_winter_talent-show-center.jpg">
                        <div class="slider-annual-text">
                            <h3>冬のイベント（12・1・2・3月）</h3>
                            <ul>
                                <li>クリスマスパーティー</li>
                                <li>タレントショー（英語劇発表会）</li>
                                <li>もちパーティー</li>
                                <li>節分</li>
                                <li>卒園式</li>
                                <li>スキーキャンプ</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>


            <?php
            // BLOG SECTION 
            if (has_term($center, 'centers')) {
                $the_query = new WP_Query(array(
                    'post_type' => 'blog',
                    'posts_per_page' => 3,
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'school',
                            'field' => 'slug',
                            'terms' => $center,
                        )
                    )
                ));
                // Start our WP Query
                if ($the_query->have_posts()) {
            ?>
                    <section id="blog">
                        <div class="container">
                            <h2 class="en-text" data-en="Blog">ブログ
                                <div class="title-bg">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/center_title3.png" alt="">
                                </div>
                            </h2>
                            <ul class="blog-list">
                                <?php
                                while ($the_query->have_posts()) : $the_query->the_post();
                                    // Display the Post
                                ?>
                                    <li class="blog-list-item">
                                        <a href="<?php the_permalink() ?>">
                                            <div class="blog-list-thumbnail"><?php the_post_thumbnail('thumbnail'); ?></div>
                                            <div class="blog-list-text">
                                                <p><?php the_time('Y.m.d'); ?></p>
                                                <h3><?php the_title(); ?></h3>
                                                <div class="blog-categories">
                                                    <?php
                                                    $terms = get_the_terms($post->ID, 'class');
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
                                // Repeat the process and reset once it hits the limit
                                endwhile; ?>
                            </ul>
                            <div class="blog-button">
                                <?php $terms = get_the_terms($post->ID, 'school');
                                foreach ($terms as $term) { ?>
                                    <a href="<?php echo get_post_type_archive_link('blog') . $term->slug; ?>" class="button-green-md">ブログ一覧</a>
                                <?php
                                };
                                ?>
                            </div>
                        </div>
                    </section>
            <?php
                } else {
                    //
                };
                wp_reset_postdata();
            }
            ?>


            <?php
            // VR SECTION 
            // show only if there is ACF content
            if (get_field('vr')) { ?>
                <section id="vr">
                    <h2 class="en-text" data-en="VR Tour">VR 園見学
                        <div class="title-bg">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/center_title1.png" alt="">
                        </div>
                    </h2>
                    <?php the_field('vr'); ?>
                </section>
            <?php
            } ?>


            <section id="center">
                <div class="container">
                    <h2 class="en-text" data-en="Center">施設概要
                        <div class="title-bg">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/center_title2.png" alt="">
                        </div>
                    </h2>
                    <table class="center-table">
                        <tbody>
                            <tr>
                                <th>園名</th>
                                <td><?php the_field('center_name'); ?>
                                    <span>
                                        <?php   //Show only if
                                        $radio = get_field('intro_link');
                                        if (!empty($radio)) :
                                            if ($radio == "ninka") :
                                                echo '<a class="childcare-type" href="' . home_url() . '/kigyoushudou#ninka">【認可保育園】</a>';
                                            elseif ($radio == "ninka-gai") :
                                                echo '<a class="childcare-type" href="' . home_url() . '/kigyoushudou#ninka-gai">【認可外保育園】</a>';
                                            elseif ($radio == "nintei") :
                                                echo '<a class="childcare-type" href="' . home_url() . '/kigyoushudou#nintei">【千葉市認定保育ルーム】</a>';
                                            elseif ($radio == "ninshou") :
                                                echo '<a class="childcare-type" href="' . home_url() . '/kigyoushudou#ninshou">【東京都認証保育園】</a>';
                                            elseif ($radio == "kigyoushudou") :
                                                echo '<a class="childcare-type" href="' . home_url() . '/kigyoushudou#kigyoushudou">【企業主導型保育事業】</a>';
                                            endif;
                                        endif; ?>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <th>所在地</th>
                                <td><?php the_field('center_address'); ?></td>
                            </tr>
                            <tr>
                                <th>MAP</th>
                                <td class="map">
                                    <?php the_field('center_map'); ?>
                                </td>
                            </tr>
                            <tr>
                                <th>電話番号</th>
                                <td>
                                    <a href="tel:<?php the_field('center_phone'); ?>"><?php the_field('center_phone'); ?></a>
                                </td>
                            </tr>
                            <tr>
                                <th>開園日</th>
                                <td><?php the_field('center_open'); ?></td>
                            </tr>
                            <tr>
                                <th>開園時間</th>
                                <td><?php the_field('center_hours'); ?></td>
                            </tr>
                            <tr>
                                <th>休園日</th>
                                <td><?php the_field('center_closed'); ?></td>
                            </tr>
                            <tr>
                                <th>駐車場・駐輪場</th>
                                <td><?php the_field('center_parking'); ?></td>
                            </tr>
                            <tr>
                                <th>車送迎</th>
                                <td><?php the_field('center_pickup'); ?></td>
                            </tr>
                            <tr>
                                <th>対象年齢</th>
                                <td><?php the_field('center_ages'); ?></td>
                            </tr>
                            <tr>
                                <th>定員</th>
                                <td><?php the_field('center_capacity'); ?></td>
                            </tr>
                            <!--
                            <?php   //Show row only if there is an image
                            $image = get_field('center_bus');
                            if (!empty($image)) : ?>

                                <tr>
                                    <th>バスエリア</th>
                                    <td class="busmap">
                                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                        <span class="note">バスエリアは目安です。対応エリアについて必ず園にご相談ください。</span>
                                    </td>
                                </tr>

                            <?php endif; ?>
                            -->
                            <tr>
                                <th>スクールカレンダー</th>
                                <td>
                                    <a href="<?php echo get_template_directory_uri(); ?>/pdf/Calendar2023-2024.pdf" target="_blank" alt="school calendar">
                                        2023年度スクールカレンダーダウンロード（PDF）
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <th>保護者専用アプリ</th>
                                <td>
                                    <a class="external-link" href="<?php the_field('center_app'); ?>" target="_blank" rel="noopener">
                                        れんらくアプリ
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <th>料金表</th>
                                <td>
                                    <a href="<?php echo home_url('/download-form/'); ?>">資料ダウンロードページ</a>
                                </td>
                            </tr>
                            <?php    //Show row only if there is content
                            if (get_field('banner_banner_ichijihoiku')) : ?>
                                <tr>
                                    <th>その他のサービス</th>
                                    <td><a class="ichijihoiku-banner" href="<?php echo home_url(); ?>/other-services/"><img src="<?php echo get_template_directory_uri(); ?>/images/ichijihoiku_banner.jpg"></a></td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>

                    <div class="center-others">
                        <a class="button-green-lg" href="<?php echo get_post_type_archive_link('center'); ?>">その他のスクールはこちら</a>
                    </div>
                </div>
            </section>

            <section id="center-visit" class="bg-center-visit pc">
                <div class="container">

                    <div class="box">
                        <div class="item">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/center_visit-icon02.png">

                        </div>
                        <div class="item">
                            <!--<h2>園見学</h2>-->
                            <h2><img src="<?php echo get_template_directory_uri(); ?>/images/center_visit-title-pc.png" alt="園見学はこちら"></h2>
                            <p>園見学をご希望の方は、<br>下記のボタンより直接お申込みいただけます。</p>
                            <div class="visit-link">
                                <a href="<?php echo home_url(); ?>/information/" class="button-green-lg">園見学のお申込みはこちら</a>
                            </div>
                        </div>
                        <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/images/center_visit-icon01.png"></div>

                    </div>

                </div>
            </section>
        </div>







    <?php endwhile; ?>
<?php else : ?>
    <p>No posts found. :(</p>
<?php endif; ?>

<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/slick-script.js"></script>

<?php get_footer(); ?>