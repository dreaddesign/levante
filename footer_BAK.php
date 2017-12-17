<?php
/**
 * @package WordPress
 */
?>

    <footer class="footer" role="contentinfo">

    	<div class="footer-top" <?php if(get_field('top_background_image', 'option')) { ?>style="background-image:url(<?php the_field('top_background_image', 'option'); ?>);"<?php } ?>>
    		<div class="content-wrapper">
    			<div class="left">
    				<?php if(get_field('top_title', 'option')) { ?>
                		<h1><?php the_field('top_title', 'option'); ?></h1>
            		<?php } ?>

    				<div class="address">
            			<?php if(get_field('address', 'option')) { ?>
                			<?php the_field('address', 'option'); ?>
            			<?php } ?>

            			<?php if(get_field('phone_number', 'option')) { ?>
                			<p><img src="<?php bloginfo('template_url'); ?>/images/tinyphone.png" alt="Phone Icon" class="phone"/><span><?php the_field('phone_number', 'option'); ?></span></p>
            			<?php } ?>
                        <div style="clear:both;"></div>

                        <?php if(get_field('direction_link', 'option')) { ?>
            			<p><a href="<?php the_field('direction_link', 'option'); ?>" target="_blank">
                            <img src="<?php bloginfo('template_url'); ?>/images/tinymap.png" alt="Directions Icon" class="direction"/>
                            <span>Directions</span>
                            <img src="<?php bloginfo('template_url'); ?>/images/nextarrow.png" alt="Next Arrow" class="arrow"/>
                        </a></p>
                        <?php } ?>
            		</div><!--address-->

            		<?php if( have_rows('tap_room_hours', 'option') ): ?>
            			<div class="hours">
            				<p class="title">Tap Room Hours:</p>
            				<?php while( have_rows('tap_room_hours', 'option') ): the_row(); ?>
            					<?php if(get_sub_field('hours', 'option')) { ?>
                        			<h2><?php the_sub_field('hours', 'option'); ?></h2>
                    			<?php } ?>
            				<?php endwhile; ?>
            			</div><!--hours-->
            		<?php endif; ?>

            	</div><!--left-->

            	<div class="right">
            		<?php if(get_field('form_title', 'option')) { ?>
                		<h3><?php the_field('form_title', 'option'); ?></h3>
            		<?php } ?>

            		<?php echo do_shortcode("[gravityform id='1' title='false' description='false']"); ?>
            	</div><!--right-->
    		</div><!--content-wrapper-->
    	</div><!--footer-top-->

    	<div class="footer-bottom" <?php if(get_field('bottom_fotter_image', 'option')) { ?>style="background-image:url(<?php the_field('bottom_fotter_image', 'option'); ?>);"<?php } ?>>
        	<div class="diamond">
                <img src="<?php bloginfo('template_url'); ?>/images/diamond.png" alt="Levante Diamond" />
            </div>
            <div class="content-wrapper">
            	<?php if(get_field('copyright', 'option')) { ?>
            		<div class="copyright">
                		<p><?php the_field('copyright', 'option'); ?></p>
                	</div><!--copyright-->
            	<?php } ?>

            	<?php if(get_field('subscribe_title', 'option')) { ?>
            		<div class="subscribe">
                		<h3><?php the_field('subscribe_title', 'option'); ?></h3>
                        <?php echo do_shortcode("[gravityform id='2' title='false' description='false']"); ?>
                	</div><!--subscribe-->
            	<?php } ?>
        	</div><!--/content-wrapper-->
        </div><!--footer-top-->
    </footer><!--/footer-->
        
</div><!--/page-wrapper-->

<?php wp_footer(); ?>
</body>
</html>