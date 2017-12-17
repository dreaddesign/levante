<?php
/**
 * @package WordPress
 */
get_header(); ?>

<div class="main-content-wrapper">
    <div class="content-wrapper">

        <main class="main" role="main">

            <?php if (have_posts()): ?>
                <?php while (have_posts()): the_post(); ?>
                    
                    <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
                        <?php if ( has_post_thumbnail() ) { ?>
                            <?php the_post_thumbnail(); ?>
                        <?php } ?>

                        <div class="content">
                            <h1><?php the_title(); ?></h1>
                            <div class="topmeta">
                                <span class="date"><?php echo the_time("F jS, Y"); ?></span>
                            </div><!--/topmeta-->
                            <div class="postcontent">
                                <?php the_content(); ?>
                            </div><!--/postcontent-->
                        </div>
                    </article>

                <?php endwhile; ?>

            <?php else: ?>

                <?php get_template_part('notfound'); ?>

            <?php endif; ?>

        </main><!--/main-->

        <?php get_sidebar(); ?>

    </div><!--/content-wrapper-->
</div><!--/main-content-wrapper-->

<?php get_footer(); ?>