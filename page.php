<?php

/**
 * Single.php
 */

get_header();
?>

<section id="hero">
    <div class="hero-banner">
        <?php the_post_thumbnail('full', array('class' => 'hero-img')); ?>
    </div>
</section>


<div id="content">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php the_content(); ?>
    <?php endwhile;
    endif; ?>
</div>


<?php get_footer(); ?>