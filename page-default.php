<?php

/**
 * Template Name: Page - Intro Leaves w/ Container
 */

get_header();
?>

<section id="hero">
    <div class="hero-banner">
        <?php the_post_thumbnail('full', array('class' => 'hero-img')); ?>
    </div>
</section>

<section id="intro">
    <div class="container">
        <div class="intro-text">
            <h1 class="en-text" data-en="<?php the_field('intro_english_title'); ?>"><?php the_field('intro_japanese_title'); ?></h1>
            <p><?php the_field('intro_text'); ?></p>
        </div>
    </div>
</section>


<div id="content">
    <div class="container">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php the_content(); ?>
        <?php endwhile;
        endif; ?>
    </div>
</div>


<?php get_footer(); ?>