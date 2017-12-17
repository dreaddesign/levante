<?php
/**
 * @package WordPress
 */
get_header(); ?>

<div class="main-content-wrapper">
    <div class="content-wrapper">

        <main class="main beer" role="main">

            <?php if (have_posts()): ?>
                <?php while (have_posts()): the_post(); ?>
                    
                    <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
	                    
	                    <a href="/beer_type/solid-ales/" class="allBeerLink">All Beers</a>
	                    
                        <h1><?php the_title(); ?></h1>

                        <div class="beer" id="post-<?php the_ID(); ?>">
                            <?php if(get_field('archive_image')) { ?>
                                <div class="left">
                                    <img src="<?php the_field('archive_image'); ?>" alt="Photo of <?php the_title(); ?>" />
                                </div><!--left-->
                            <?php } ?>

                            <?php if(get_field('archive_image')) { ?>
                                <div class="right">
                            <?php } ?>

                                <div class="top"><?php the_content(); ?></div>
                                <?php if(get_field('availability')) { ?><p><strong>Beer Name:</strong><?php the_field('availability'); ?></p><?php } ?>
                                <?php if(get_field('package_size')) { ?><p><strong>Beer Style:</strong><?php the_field('package_size'); ?></p><?php } ?>
                                <?php if(get_field('abv')) { ?><p><strong>ABV %:</strong><?php the_field('abv'); ?></p><?php } ?>
                                <?php if(get_field('grains')) { ?><p><strong>IBU:</strong><?php the_field('grains'); ?></p><?php } ?>
                                <?php if(get_field('hops')) { ?><p><strong>Serving Style:</strong><?php the_field('hops'); ?></p><?php } ?>
                                <?php if(get_field('spices')) { ?><p><strong>Seasonal Availability:</strong><?php the_field('spices'); ?></p><?php } ?>
                                <?php if(get_field('yeast')) { ?><p><a href="<?php the_field('yeast'); ?>" target="_blank"><strong>Untappd</strong></p><?php } ?>
                            
                            <?php if(get_field('archive_image')) { ?>
                                </div><!--right-->
                            <?php } ?>
                        </div><!--/post-->

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