<?php
/**
 * @package WordPress
 *
 * Template Name: Visit Us
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
        <?php endwhile; ?>
    <?php endif; ?>
    <div class="content-wrapper main">
        <div class="top">
            <div class="rightvisit">
                <!-- <div class="visitMenu"><?php //echo do_shortcode( '[listmenu menu="Visit Us"]', false ); ?></div> -->
                <div style="font-size: 26px;line-height: 1;">Coordinates &amp; Hours</div>
                <div class="address">
                    <div class="address--location">
                        <p><b>Taproom</b><br>208 Carter Dr, Suite 2<br>West Chester, PA 19382</p>
                        <p><span>(484) 999-8761</span></p>
                        <p>
                            <a href="https://www.google.com/maps/place/Levante+Brewing/@39.948756,-75.587724,16z/data=!4m5!3m4!1s0x0:0x8e8a47e3bf212392!8m2!3d39.9487565!4d-75.5877243?ll=39.948756,-75.587724&amp;z=16&amp;t=m&amp;hl=en-US&amp;gl=US&amp;mapclient=embed&amp;cid=10271100943661605778" target="_blank">
                                <span>Directions</span>
                                <img src="https://testbeersite.website/wp-content/themes/levante/images/nextarrow.png" alt="Next Arrow" class="arrow" scale="0">
                            </a>
                        </p>
                    </div>
                    <div class="address--location">
                        <p> 
                            <b>The Stables</b><br>160 Park Road<br>
                        Chester Springs, PA 19425
                        </p>
                        <p>
                            <span>(484) 302-5118</span>
                        </p>
                        <p>
                            <a href="https://www.google.com/maps/place/Levante+At+The+Stables/@40.080231,-75.690267,16z/data=!4m5!3m4!1s0x0:0x39fd58f048d6f7cb!8m2!3d40.0802313!4d-75.6902669?ll=40.080231,-75.690267&amp;z=16&amp;t=m&amp;hl=en-US&amp;gl=US&amp;mapclient=embed&amp;cid=4178593818307131339" target="_blank"> 
                            <span>Directions</span>
                            <img src="https://testbeersite.website/wp-content/themes/levante/images/nextarrow.png" alt="Next Arrow" class="arrow" scale="0">
                            </a>
                        </p>
                    </div>
                </div>
            </div><!--content-wrapper main-->   
	            <?php if (have_posts()): ?>
	                <?php while (have_posts()): the_post(); ?>
	                    <?php the_content(); ?>
	                <?php endwhile; ?>
	            <?php endif; ?>
	        </div><!--right-->
	    </div><!--top-->
	</div><!--content-wrapper main-->

<?php if ( is_page( 807 ) ) { ?>
    <hr></hr>
    
    <div class="content-wrapper main">
        <div class="bottom-section">
            <section class="five">
                <div class="content-wrapper">
                    <?php if(get_field('section_5_title')) { ?>
                        <h1><?php the_field('section_5_title'); ?></h1>
                    <?php } ?>

                    <div class="left">
                        <?php echo do_shortcode('[tribe_this_week category="stables-food-trucks" layout="vertical"]'); ?>
                    </div><!--left-->

                    <div class="right">
                        <div class="block">
                            <?php echo do_shortcode( '[tappd-press-menu menu_id=2580]' );
                            //echo do_shortcode('[untappd-menu location=2580 theme=6332624]'); ?>
                        </div><!--block-->
                    </div><!--right-->
                </div><!--content-wrapper-->
            </section><!--five-->
        </div><!--bottom-->
</div><!--content-wrapper main-->
<?php } else { ?>
    <hr></hr>

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
                            <?php  echo do_shortcode( '[tappd-press-menu menu_id=4963]' );?>
                        </div><!--block-->
                    </div><!--right-->
                </div><!--content-wrapper-->
            </section><!--five-->
        </div><!--bottom-->
</div><!--content-wrapper main-->
<?php } ?>

</div><!--main-content-wrapper-->

<?php get_footer(); ?>