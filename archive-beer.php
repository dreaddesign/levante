<?php
/**
 * @package WordPress
 */
$title = '';
if (is_category()) { // category
    $title = single_cat_title('', false);
} else if (is_tag()) { // tag
    $title = single_tag_title('', false);
} else if (is_tax()) { // custom taxonomy
    $title = get_queried_object()->name;
} else if (is_post_type_archive()) {// custom post type
    $title = post_type_archive_title('', false);
} else if (is_day()) { // date -> day
    $title = get_the_time('F j, Y');
} else if (is_month()) { // date -> month
    $title = get_the_time('F, Y');
} else if (is_year()) { // date -> year
    $title = get_the_time('Y');
} else if (is_author()) { // author
    $author = (get_query_var('author_name')) ? get_user_by('slug', get_query_var('author_name')) : get_userdata(get_query_var('author'));
    $title = $author->display_name;
}

get_header(); ?>


<div class="main-content-wrapper">
    <div class="content-wrapper">

        <main class="main beer" role="main">

            <?php if (have_posts()): ?>

                    <?php if(get_field('beer_archive_title', 'option')) { ?>
                        <h1><?php the_field('beer_archive_title', 'option'); ?></h1>
                    <?php } else { ?>
                        <?php if ($title): ?>
                            <h1><?php echo $title; ?></h1>
                        <?php endif; ?>
                    <?php } ?>

                    <?php echo do_shortcode('[listmenu menu="Beers"]'); ?>

                    <section>

                    <?php while (have_posts()): the_post(); ?>

                        <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
                            <?php if(get_field('archive_image')) { ?>
                                <div class="left">
                                    <img src="<?php the_field('archive_image'); ?>" alt="Photo of <?php the_title(); ?>" />
                                </div><!--left-->
                            <?php } ?>

                            <?php if(get_field('archive_image')) { ?>
                                <div class="right">
                            <?php } ?>

                                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

                                <div class="top"><?php the_content(); ?></div>
                                <?php if(get_field('availability')) { ?><p><strong>Beer Name:</strong><?php the_field('availability'); ?></p><?php } ?>
                                <?php if(get_field('package_size')) { ?><p><strong>Beer Style:</strong><?php the_field('package_size'); ?></p><?php } ?>
                                <?php if(get_field('abv')) { ?><p><strong>ABV %:</strong><?php the_field('abv'); ?></p><?php } ?>
                                <?php if(get_field('grains')) { ?><p><strong>IBU:</strong><?php the_field('grains'); ?></p><?php } ?>
                                <?php if(get_field('hops')) { ?><p><strong>Serving Style:</strong><?php the_field('hops'); ?></p><?php } ?>
                                <?php if(get_field('spices')) { ?><p><strong>Seasonal Availability:</strong><?php the_field('spices'); ?></p><?php } ?>
                                <?php if(get_field('yeast')) { ?><p><a href="<?php the_field('yeast'); ?>" target="_blank"><strong>Untappd</strong></a></p><?php } ?>
                            
                            <?php if(get_field('archive_image')) { ?>
                                </div><!--right-->
                            <?php } ?>
                        </div><!--/post-->

                    <?php endwhile; ?>

                    <div class="navigation">
                        <div class="alignleft"><?php next_posts_link('&laquo; View More Beers') ?></div>
                        <div class="alignright"><?php previous_posts_link('View More Beers &raquo;') ?></div>
                    </div>

                </section>

            <?php else: ?>

                <?php get_template_part('notfound'); ?>

            <?php endif; ?>

        </main><!--/main-->

        <?php get_sidebar(); ?>

    </div><!--/content-wrapper-->
</div><!--/main-content-wrapper-->

<?php get_footer(); ?>