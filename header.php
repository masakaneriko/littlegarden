<!DOCTYPE html>

<head>
    <title>Little Garden Website</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php // adds unique ids for each page
        body_class(); ?>>


    <header id="header">
        <div class="main-flag">
            <a href="<?php echo home_url(); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/images/main_flag.svg" alt="">
            </a>
        </div>

        <nav class="header-nav">
            <div class="container">
                <div class="header-nav-logo">
                    <a href="<?php echo home_url(); ?>" class="sp">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/logo_littlegarden.png" alt="">
                    </a>
                    <a href="<?php echo home_url(); ?>" class="pc">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/littlegarden_logo_w.svg" alt="">
                    </a>
                </div>
                <ul class="header-nav-menu">
                    <li>
                        <a href="<?php echo home_url(); ?>/about-us/">当園について</a>
                    </li>
                    <li class="menu">
                        <a href="<?php echo home_url(); ?>/service/">スクール生活</a>
                        <ul class="child_menu">
                            <li> <a href="<?php echo get_post_type_archive_link('service'); ?>curriculum/">英語カリキュラム</a></li>
                            <li> <a href="<?php echo get_post_type_archive_link('service'); ?>lunch/">食育・おやつ</a></li>
                            <li><a href="<?php echo get_post_type_archive_link('service'); ?>course/">コース案内</a></li>
                            <li><a href="<?php echo get_post_type_archive_link('service'); ?>dailyschedule/">一日の過ごし方</a></li>
                            <li><a href="<?php echo get_post_type_archive_link('service'); ?>annual-events/">年間行事</a></li>
                            <li><a href="<?php echo get_post_type_archive_link('service'); ?>school-bus/">バス送迎</a></li>
                        </ul>
                    </li>
                    <li class="menu">
                        <a href="<?php echo home_url(); ?>/center/" class="magnify-icon">施設を探す</a>
                    </li>
                    <li>
                        <a href="<?php echo home_url(); ?>/news/">ニュース</a>
                    </li>
                    <li>
                        <a href="<?php echo home_url(); ?>/blog/">ブログ</a>
                    </li>
                    <li>
                        <a href="<?php echo home_url(); ?>/contact/">お問い合わせ</a>
                    </li>
                    <li class="pc">
                        <a href="<?php echo home_url(); ?>/information/">
                            入園手続き<span>園見学</span>
                        </a>
                    </li>
                    <li class="pc">
                        <a class="external-link" style="flex-direction:row" href="https://www.lifework-web.com/" target="_blank" rel="noopener">
                            採用情報

                        </a>
                    </li>
                </ul>
                <ul class="header-nav-featured sp">
                    <li class="header-nav-featured-bootom">
                        <a href="<?php echo home_url(); ?>/information/">
                            <p>入園手続き・<span>園見学</span></p>
                            <div>
                                <img src="<?php echo get_template_directory_uri(); ?>/images/bus_sample.jpg" alt="">
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.lifework-web.com/" target="_blank" rel="noopener">
                            <p class="external-link">採用情報</p>
                            <div>
                                <img src="<?php echo get_template_directory_uri(); ?>/images/saiyou.jpg" alt="">
                            </div>
                        </a>
                    </li>
                </ul>
                <ul class="header-nav-sub">
                    <li>
                        <a href="<?php echo home_url(); ?>/company/">会社情報</a>
                    </li>
                    <li>
                        <a href="<?php echo home_url(); ?>/privacy-policy">プライバシーポリシー</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <main id="main">