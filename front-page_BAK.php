<?php
/**
 * @package WordPress
 */
get_header(); ?>


<?php if( have_rows('block') ): ?>
    <section class="first">
        <?php while( have_rows('block') ): the_row(); ?>
            <div class="col" style="<?php if(get_sub_field('background_image')) { ?>background-image:url(<?php the_sub_field('background_image'); ?>);<?php } else { ?>background-color:#000;<?php } ?>" >
                <div class="content">
                    <?php if(get_sub_field('title')) { ?>
                        <h1><?php the_sub_field('title'); ?></h1>
                    <?php } ?>

                    <?php if(get_sub_field('sub_title')) { ?>
                        <h2><?php the_sub_field('sub_title'); ?></h2>
                    <?php } ?>

                    <?php if(get_sub_field('button_text')) { ?>
                        <a href="<?php the_sub_field('button_link'); ?>">
                            <p><?php the_sub_field('button_text'); ?></p>
                        </a>
                    <?php } ?>
                </div><!--content-->
            </div><!--col-->
        <?php endwhile; ?>
        <div style="clear:both;"></div>
    </section><!--first-->
<?php endif; ?>

<section class="two">

    <hr class="mobile"></hr>

    <div class="content-wrapper">
        <?php if(get_field('section_2_title')) { ?>
            <h1><a href="/beer/"><?php the_field('section_2_title'); ?></a></h1>
        <?php } ?>

        <div class="cycle-slideshow"
            data-cycle-fx="carousel"
            data-cycle-pause-on-hover="true"
            data-cycle-speed="200"
            data-cycle-next="#next"
            data-cycle-prev="#prev"
            data-cycle-slides="> div"
            >

            <?php $loop = new WP_Query( array( 'post_type' => 'beer' ) ); ?>
            <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                <?php if ( has_post_thumbnail() ) : ?>
                    <?php if(get_field('show_on_homepage')) : ?>
                        <div>
                            <a href="/beer/">
                                <?php the_post_thumbnail(); ?>
                            </a>
                        </div>
                    <?php endif; ?>
                <?php endif; ?>
            <?php endwhile; wp_reset_query(); ?>
        </div><!--cycle-slideshow-->

        <div class=center>
            <a href=# id="prev"><img src="<?php bloginfo('template_url'); ?>/images/prevarrow.png" alt="Previous Arrow" /></a>
            <a href=# id="next"><img src="<?php bloginfo('template_url'); ?>/images/nextarrow.png" alt="Next Arrow" /></a>
        </div>

    </div><!--content-wrapper-->

    <hr class="mobile"></hr>

</section><!--two-->

<section class="three">
    <div class="right col" style="<?php if(get_field('section_3_image')) { ?>background-image:url(<?php the_field('section_3_image'); ?>);<?php } else { ?>background-color:#1a1d27;<?php } ?>">
    </div><!--right-->

    <div class="left col" style="<?php if(get_field('section_3_background_image')) { ?>background-image:url(<?php the_field('section_3_background_image'); ?>);<?php } else { ?>background-color:#1a1d27;<?php } ?>">
        <div class="content">
            <?php if(get_field('section_3_title')) { ?>
                <h1><?php the_field('section_3_title'); ?></h1>
            <?php } ?>

            <?php if(get_field('section_3_content')) { ?>
                <p><?php the_field('section_3_content'); ?></p>
            <?php } ?>

            <?php if(get_field('section_3_button_text')) { ?>
                <a href="<?php the_field('section_3_button_link'); ?>">
                    <p><?php the_field('section_3_button_text'); ?></p>
                </a>
            <?php } ?>
        </div><!--content-->
    </div><!--left-->
</section><!--three-->

<section class="four">
    <div class="left col">
        <img src="<?php bloginfo('template_url'); ?>/images/instagrambadge.jpg" alt="Instagram @levantebrewing" class="owl-item" />
    </div><!--left-->

    <div class="right col">
        <?php echo do_shortcode('[enjoyinstagram_mb]'); ?>

        <img src="<?php bloginfo('template_url'); ?>/images/grayarrow.png" alt="Arrow Icon" class="arrow icon" />
    </div><!--right-->
</section><!--four-->

<section class="five">

    <hr class="mobile"></hr>

    <div class="content-wrapper">
        <?php if(get_field('section_5_title')) { ?>
            <h1><?php the_field('section_5_title'); ?></h1>
        <?php } ?>

        <div class="left">
            <?php echo do_shortcode('[tribe_this_week category="food-trucks" layout="vertical"]'); ?>
        </div><!--left-->

        <div class="right">
            <div class="block">
                <?php echo do_shortcode('[tribe_events_list category="homepage" limit="2"]'); ?>
            </div><!--block-->
        </div><!--right-->
    </div><!--content-wrapper-->

    <hr class="mobile"></hr>

</section><!--five-->

<?php get_footer(); ?>