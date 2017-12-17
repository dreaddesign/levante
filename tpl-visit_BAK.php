<?php
/**
 * @package WordPress
 *
 * Template Name: Visit Us Bak
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

<div class="content-wrapper main">
    <div class="bottom-section">
        <section class="five">
            <div class="content-wrapper">
                <?php if(get_field('section_5_title')) { ?>
                    <h1><?php the_field('section_5_title'); ?></h1>
                <?php } ?>

                <div class="left">
                    <?php echo do_shortcode('[tribe_this_week category="food-trucks" layout="vertical"]'); ?>
                </div><!--left-->

                <div class="right">
                    <div class="block">
                        <?php echo do_shortcode('[untappd-menu location=2580 theme=6796]'); ?>
                    </div><!--block-->
                </div><!--right-->
            </div><!--content-wrapper-->
        </section><!--five-->
    </div><!--bottom-->
</div><!--content-wrapper main-->

<hr></hr>

<div class="content-wrapper main">
    <div class="top">
        <div class="rightvisit">
            <?php if (have_posts()): ?>
                <?php while (have_posts()): the_post(); ?>
                    <?php the_content(); ?>
                <?php endwhile; ?>
            <?php endif; ?>
        </div><!--right-->
    </div><!--top-->
</div><!--content-wrapper main-->

</div><!--main-content-wrapper-->

<?php get_footer(); ?>