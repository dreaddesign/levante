<?php
/**
 * @package WordPress
 *
 * Template Name: Crew
 *
 */
get_header(); ?>

<div class="main-content-wrapper insidelevante">
    <div class="banner">
        <img src="<?php the_field('banner_image'); ?>" alt="<?php the_title(); ?>" />
    </div>

    <?php if (have_posts()): ?>
        <?php while (have_posts()): the_post(); ?>
            <div class="content-wrapper main">
                <h1><?php the_title(); ?></h1>
            </div><!--content-wrapper main-->
        <?php endwhile; ?>
    <?php endif; ?>

    <?php if(get_field('top_section_content')) { ?>
        <div class="content-top" <?php if(get_field('background_image')) { ?>style="background-image:url(<?php the_field('background_image'); ?>);"<?php } ?> >
            <div class="content-wrapper">
                <div class="top"><?php the_field('top_section_content'); ?></div>
            </div><!--content-wrapper-->
        </div><!--content-->
    <?php } ?>

    <div class="content-bottom">
        <div class="content-wrapper">
            <?php the_field('bottom_section_content'); ?>
        </div><!--content-wrapper-->
    </div>

    <div class="bottom">
        <?php if(get_field('left_section_image')) { ?>
        <div class="left equal" <?php if(get_field('left_section_image')) { ?>style="background-image:url(<?php the_field('left_section_image'); ?>);"<?php } ?> >
            <div class="content-wrapper">
                <h2><?php the_field('left_section_title'); ?></h2>
                <?php the_field('left_section_text'); ?>
            </div><!--content-wrapper-->
        </div><!--left-->
        <?php } ?>

        <?php if(get_field('right_section_image')) { ?>
        <div class="right equal" <?php if(get_field('right_section_image')) { ?>style="background-image:url(<?php the_field('right_section_image'); ?>);"<?php } ?> >
        </div><!--right-->
        <?php } ?>
    </div><!--bottom-->

</div><!--main-content-wrapper-->

<?php get_footer(); ?>