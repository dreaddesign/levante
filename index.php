<?php
/**
 * @package WordPress
 */
get_header(); ?>

<div class="main-content-wrapper">
    <div class="content-wrapper">

        <main class="main" role="main">

            <h1>News/Blog</h1>

            <?php if (have_posts()): ?>
                <?php while (have_posts()): the_post(); ?>
                    
                    <article>
                        <?php if ( has_post_thumbnail() ) { ?>
                            <?php the_post_thumbnail(); ?>

                            <div class="content half">
                                <a href="<?php the_permalink(); ?>">
                                    <h2><?php the_title(); ?></h2>
                                </a>

                                <div class="topmeta">
                                    <span class="date"><?php echo the_time("F jS, Y"); ?></span>
                                </div><!--/topmeta-->

                                <?php the_excerpt(); ?>

                                <a href="<?php the_permalink(); ?>"><p>Read More</p></a>
                            </div>
                        <?php }  else { ?>
                            <div class="content full">
                                <a href="<?php the_permalink(); ?>">
                                    <h2><?php the_title(); ?></h2>
                                </a>

                                <div class="topmeta">
                                    <span class="date"><?php echo the_time("F jS, Y"); ?></span>
                                </div><!--/topmeta-->

                                <?php the_excerpt(); ?>
                            </div>
                        <?php } ?>
                    </article>

                <?php endwhile; ?>
                
                <?php if( get_previous_posts_link() ) : ?>
                
                	<span class="pagination button alignleft"><?php previous_posts_link('&laquo; Newer Entries'); ?></span>
                
                <?php endif; ?>
                
                <?php if( get_next_posts_link() ) : ?>
                
                	<span class="pagination button alignright"><?php next_posts_link('Older Entries &raquo;'); ?></span>
                	
               	<?php endif; ?>

            <?php else: ?>

                <?php get_template_part('notfound'); ?>

            <?php endif; ?>

        </main><!--/main-->

        <?php get_sidebar(); ?>

    </div><!--/content-wrapper-->
</div><!--/main-content-wrapper-->

<?php get_footer(); ?>