<?php
/*
News Archive Page
*/
get_header();
?>


<section id="hero">
    <div class="hero-banner">
        <img class=" hero-img" src="<?php bloginfo("template_url") ?>/images/news_topimage.jpg" alt="ニュース">
    </div>
</section>


<section id="intro">
    <div class="container">
        <div class="intro-text">
            <h1 class="en-text" data-en="News">新着情報</h1>
            <p>リトルガーデンインターナショナルスクールのイベントや取り組みなど、最新情報をお知らせします。</p>
        </div>
    </div>
</section>


<section>
    <div class="container">
        <ul class="blog-list">
            <?php if (have_posts()) :
                // Start the Loop.
                while (have_posts()) : the_post();
            ?>
                    <li class="blog-list-item">
                        <a href="<?php the_permalink() ?>">
                            <div class="blog-list-text">
                                <h3><?php the_title(); ?></h3>
                                <p class="blog-date"><?php the_time('Y.m.d'); ?></p>
                            </div>
                            <div class="blog-list-thumbnail"><?php the_post_thumbnail('thumbnail'); ?></div>
                        </a>
                    </li>
                <?php
                // End the loop.
                endwhile; ?>
        </ul>

    <?php
                // Previous/next page navigation.
                $pagination = get_the_posts_pagination();
                echo preg_replace('/\<h2 class=\"screen-reader-text\"\>(.*?)\<\/h2\>/ui', '', $pagination);

            // If no content, include the "No posts found" template.
            else :
                get_template_part('content', 'none');

            endif;
    ?>

    </div>
</section>


<?php get_footer(); ?>