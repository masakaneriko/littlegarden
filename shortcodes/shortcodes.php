<?php

// Service Blackboard
function service_blackboard_function()
{
    ob_start();
?>
    <section id="services" class="blackboard">
        <div class="container">
            <h2 class="en-text" data-en="School Life">スクール生活</h2>
            <div class="services-list">
                <div class="services-list-item">
                    <a href="<?php echo home_url(); ?>/services/curriculum/">
                        <div class="services-list-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/card_01_english.jpg" alt="">
                            <span>01</span>
                        </div>
                        <h3>
                            カリキュラム
                        </h3>
                    </a>
                </div>
                <div class="services-list-item">
                    <a href="<?php echo home_url(); ?>/services/lunch/">
                        <div class="services-list-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/card_02_shokuiku.jpg" alt="">
                            <span>02</span>
                        </div>
                        <h3>
                            給食・おやつ
                        </h3>
                    </a>
                </div>
                <div class="services-list-item">
                    <a href="<?php echo home_url(); ?>/services/course/">
                        <div class="services-list-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/card_03_course.jpg" alt="">
                            <span>03</span>
                        </div>
                        <h3>
                            コース案内
                        </h3>
                    </a>
                </div>
                <div class="services-list-item">
                    <a href="<?php echo home_url(); ?>/services/dailyschedule/">
                        <div class="services-list-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/card_04_daily.jpg" alt="">
                            <span>04</span>
                        </div>
                        <h3>
                            一日の過ごし方
                        </h3>
                    </a>
                </div>
                <div class="services-list-item">
                    <a href="<?php echo home_url(); ?>/services/annual-events/">
                        <div class="services-list-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/card_05_annual.jpg" alt="">
                            <span>05</span>
                        </div>
                        <h3>
                            年間行事
                        </h3>
                    </a>
                </div>
                <div class="services-list-item">
                    <a href="<?php echo home_url(); ?>/services/school-bus/">
                        <div class="services-list-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/card_06_bus.jpg" alt="">
                            <span>06</span>
                        </div>
                        <h3>
                            送迎
                        </h3>
                    </a>
                </div>
            </div>
        </div>
    </section>
<?php
    return  ob_get_clean();
}
add_shortcode('service_blackboard', 'service_blackboard_function');




// School List for Coubic
function school_list_function()
{
    ob_start();
?>
    <ul class="school-list">
        <li><a href="https://coubic.com/littlegarden_group/917465/express/" target="_blank" rel="noopener">幕張</a></li>
        <li><a href="https://coubic.com/littlegarden_group/433674/express/" target="_blank" rel="noopener">市川</a></li>
        <li><a href="https://coubic.com/littlegarden_group/837849/express/" target="_blank" rel="noopener">WBG</a></li>
        <li><a href="https://coubic.com/littlegarden_group/477867/express/" target="_blank" rel="noopener">千葉ポートタウン</a></li>
        <li><a href="https://coubic.com/littlegarden_group/996136/express/" target="_blank" rel="noopener">新習志野</a></li>
        <li><a href="https://coubic.com/littlegarden_group/577812/express/" target="_blank" rel="noopener">おゆみ野</a></li>
        <li><a href="https://coubic.com/littlegarden_group/705701/express/" target="_blank" rel="noopener">ららぽーと三井ビル</a></li>
        <li><a href="https://coubic.com/littlegarden_group/858643/express/" target="_blank" rel="noopener">小岩</a></li>
        <li><a href="https://coubic.com/littlegarden_group/427053/express/" target="_blank" rel="noopener">幕張本郷</a></li>
        <li><a href="https://coubic.com/littlegarden_group/790943/express/" target="_blank" rel="noopener">柏の葉キャンパス</a></li>
    </ul>
<?php
    return  ob_get_clean();
}
add_shortcode('school_list', 'school_list_function');


// School Phone Number List
function school_number_function()
{
    ob_start();
?>
    <ul class="school-number">
        <li><a href="tel:0433517670">幕張（043-351-7670）</a></li>
        <li><a href="tel:0477108235">市川 （047-710-8235）</a></li>
        <li><a href="tel:0433511630">WBG （043-351-1630）</a></li>
        <li><a href="tel:0432448839">千葉ポートタウン（043-244-8839）</a></li>
        <li><a href="tel:0432926014">おゆみ野 （043-292-6014）</a></li>
        <li><a href="tel:0474044321">ららぽーと三井ビル （047-404-4321）</a></li>
        <li><a href="tel:0358768521">小岩 （03-5876-8521）</a></li>
        <li><a href="tel:0432162220">幕張本郷 （043-216-2220）</a></li>
        <li><a href="tel:0471571724">柏の葉キャンパス （04-7157-1724）</a></li>
    </ul>
<?php
    return  ob_get_clean();
}
add_shortcode('school_number', 'school_number_function');



// SNS CTA
function sns_cta_function()
{
    ob_start();
?>
    <section id="sns-cta">
        <div class="sns_cta_flex">

            <h2 class="en-text" data-en="Official SNS">リトルガーデン公式SNS</h2>
            <div class="sns_cta_icons">
                <a href="https://twitter.com/LittleG_LC" target="_blank">
                    <img src="<?php bloginfo("template_url") ?>/images/twitter-icons.svg" alt="">
                </a>
            </div>
            <div class="sns_cta_icons">
                <a href="https://lin.ee/i7R0MDO/" target="_blank">
                    <img src="<?php bloginfo("template_url") ?>/images/LINE-logo.svg" alt="">
                </a>
            </div>
        </div>
    </section>
<?php
    return  ob_get_clean();
}
add_shortcode('sns_cta', 'sns_cta_function');



function custom_button_shortcode( $atts, $content = null ) {
  extract( shortcode_atts( array(
      'text' => 'Click Here',
      'url' => '#'
  ), $atts ) );

  return '<a href="' . esc_url( $url ) . '" class="button">' . esc_html( $text ) . '</a>';
}
add_shortcode( 'custom_button', 'custom_button_shortcode' );


?>