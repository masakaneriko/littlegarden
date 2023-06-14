<?php
/*
Blog Archive Page
*/
get_header();
?>


<section id="hero">
    <div class="hero-banner">
        <img class=" hero-img" src="<?php bloginfo("template_url") ?>/images/blog_topimage.jpg" alt="ブログ">
    </div>
</section>


<section id="intro">
    <div class="container">
        <div class="intro-text">
            <h1 class="en-text" data-en="Blog">ブログ</h1>
            <p>リトルガーデン各園の日常の保育のようすやイベントのようすをご紹介しています。</p>
        </div>
    </div>
</section>


<section>
    <div class="container">
        <div class="schools-nav">
            <ul class="blog-list">
                <?php if (have_posts()) :
                    // Start the Loop.
                    while (have_posts()) : the_post();
                ?>
                        <li class="blog-list-item">
                            <a href="<?php the_permalink() ?>">
                                <div class="blog-list-thumbnail"><?php the_post_thumbnail('thumbnail'); ?></div>
                                <div class="blog-list-text">
                                    <h3><?php the_title(); ?></h3>
                                    <p class="blog-date"><?php the_time('Y.m.d'); ?></p>
                                    <div class="blog-categories">
                                        <?php
                                        $terms = get_the_terms($post->ID, 'school');
                                        if ($terms && !is_wp_error($terms)) {
                                            foreach ($terms as $term) {
                                                echo '<span class="school-color">' . $term->name . '</span>';
                                            }
                                        }
                                        ?>
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
                    // End the loop.
                    endwhile; ?>
            </ul>
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