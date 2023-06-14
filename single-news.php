<?php

/**
 * Single News Posts
 */

get_header(); ?>


<section id="hero">
    <div class="hero-banner">
        <img class=" hero-img" src="<?php bloginfo("template_url") ?>/images/news_topimage.jpg" alt="">
        <h1 class="hero-title">ニュース</h1>
    </div>
</section>

<section id="blog-content">
    <div class="container">
        <div class="blog-title">
            <?php wp_title(''); ?>
        </div>
        <?php
        $terms_class =  get_the_terms($post->ID, 'class');
        if ($terms_class && !is_wp_error($terms_class)) { ?>
            <div class="blog-categories">
                <?php
                foreach ($terms_class as $term_class) {
                    echo '<span>' . $term_class->name . '</span>';
                }
                ?>
            </div>
        <?php
        }
        ?>
        <div class="blog-date"><?php the_time('Y.m.d'); ?></div>
        <div class="blog-post"><?php the_content(); ?></div>

        <div class="blog-button">
            <a class="button-green-md" href="<?php echo get_post_type_archive_link('news'); ?>">ニュース一覧</a>
        </div>
    </div>
</section>



<?php get_footer(); ?>