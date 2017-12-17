<?php
/**
 * @package WordPress
 *
 * Template Name: Inside Levante
 *
 */
get_header(); ?>

<div class="main-content-wrapper insidelevante">
    <div class="banner inside" <?php if(get_field('banner_image')) { ?>style="background-image:url(<?php the_field('banner_image'); ?>);"<?php } ?> >
        <div class="content-wrapper">
            <div class="content">
                <?php if(get_field('banner_text')) { ?>
                    <?php the_field('banner_text'); ?>
                <?php } ?>
            </div><!--content-->
        </div><!--content-wrapper-->
    </div>

    <hr></hr>

    <?php if (have_posts()): ?>
        <?php while (have_posts()): the_post(); ?>
            <div class="content-wrapper main">
                <h1><?php the_title(); ?></h1>
                <?php the_content(); ?>
            </div><!--content-wrapper main-->
        <?php endwhile; ?>
    <?php endif; ?>

    <div class="bottom-section">
        <div class="content-wrapper">
            <div class="bottom-row"><!--rename top-row later when back to three across-->
                <?php if( have_rows('blocks') ): ?>
                    <?php while( have_rows('blocks') ): the_row(); ?>
                        <a class="blocks" href="<?php the_sub_field('link'); ?>">
                            <div class="block" style="background-image:url(<?php the_sub_field('block_image'); ?>);">
                                <h1><?php the_sub_field('title'); ?></h1>
                            </div><!--block-->
                        </a>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div><!--top-row-->

            <div class="bottom-row">
                <?php if( have_rows('bottom_blocks') ): ?>
                    <?php while( have_rows('bottom_blocks') ): the_row(); ?>
                        <a class="blocks" href="<?php the_sub_field('link'); ?>">
                            <div class="block" style="background-image:url(<?php the_sub_field('block_image'); ?>);">
                                <h1><?php the_sub_field('title'); ?></h1>
                            </div><!--block-->
                        </a>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div><!--bottom-row-->
        </div><!--content-wrapper-->
    </div><!--bottom-->

</div><!--main-content-wrapper-->

<?php get_footer(); ?>