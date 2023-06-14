<?php

/**
 * Single Blog Posts
 */

get_header(); ?>


<section id="hero">
    <div class="hero-banner">
        <img class="hero-img" src="<?php bloginfo("template_url") ?>/images/school_category_topimage.jpg" alt="">
        <h1 class="hero-title">
            <?php
            $terms = get_the_terms($post->ID, 'school');
            if ($terms && !is_wp_error($terms)) {
                foreach ($terms as $term) {
                    echo $term->name;
                }
            } ?>
            ブログ
        </h1>
    </div>
</section>


<section id="blog-content">
    <div class="container">
        <div class="schools-nav">
            <div class="blog-main">
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
            </div>
            <aside>
                <div class="schools-nav-title">
                    カテゴリー
                </div>
                <ul>
                    <?php
                    $categories = get_terms(array(
                        'taxonomy' => 'school',
                        'hide_empty' => 'false',
                        'orderby' => 'term_order',
                        'order' => 'ASC',
                    ));
                    foreach ($categories as $category) {
                    ?>
                        <li>
                            <a href="<?php echo get_post_type_archive_link('blog') . $category->slug; ?>">
                                <?php echo $category->name; ?>
                            </a>
                        </li>
                    <?php
                    }
                    ?>
                </ul>
            </aside>
        </div>
        <div class="blog-button">
            <a class="button-green-md" href="<?php echo get_post_type_archive_link('blog') . $term->slug; ?>"><?php echo $term->name; ?>のブログ一覧</a>
        </div>
    </div>
</section>


<?php get_footer(); ?>