<!DOCTYPE html>
<!--[if lte IE 8]>     <html <?php language_attributes(); ?> class="no-js lte-ie9 lte-ie8"> <![endif]-->
<!--[if lte IE 9]>     <html <?php language_attributes(); ?> class="no-js lte-ie9"> <![endif]-->
<!--[if gt IE 9]><!--> <html <?php language_attributes(); ?> class="no-js"> <!--<![endif]-->

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />

    <title><?php wp_title('|', true, 'right'); ?></title>

    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <meta id="viewport" name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=1" />

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <div class="page-wrapper">

        <header <?php if ( !is_front_page() ) { ?>class="smaller"<?php } ?> >
            <div class="container clearfix content-wrapper">
                <div class="left">
                    <h1 id="logo" class="desktop">
                        <a href="<?php bloginfo('url'); ?>/"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="<?php bloginfo('name'); ?>" /></a>
                    </h1>

                    <h1 id="logo smaller" class="smaller">
                        <a href="<?php bloginfo('url'); ?>/"><img src="<?php bloginfo('template_url'); ?>/images/smalllogodesktop.jpg" alt="<?php bloginfo('name'); ?>" /></a>
                    </h1>

                    <h1 id="logo mobile" class="mobile">
                        <a href="<?php bloginfo('url'); ?>/"><img src="<?php bloginfo('template_url'); ?>/images/mobilelogo.png" alt="<?php bloginfo('name'); ?>" /></a>
                    </h1>
                </div><!--lef-->

                <div class="right">
                    <div class="social">
                        <?php if(get_field('facebook', 'option')) { ?>
                            <a href="<?php the_field('facebook', 'option'); ?>" target="_blank">
                                <img src="<?php bloginfo('template_url'); ?>/images/facebook.png" alt="Facebook Icon" />
                            </a>
                        <?php } ?>

                        <?php if(get_field('instagram', 'option')) { ?>
                            <a href="<?php the_field('instagram', 'option'); ?>" target="_blank">
                                <img src="<?php bloginfo('template_url'); ?>/images/instagram.png" alt="Instagram Icon" />
                            </a>
                        <?php } ?>

                        <?php if(get_field('twitter', 'option')) { ?>
                            <a href="<?php the_field('twitter', 'option'); ?>" target="_blank">
                                <img src="<?php bloginfo('template_url'); ?>/images/twitter.png" alt="Twitter Icon" />
                            </a>
                        <?php } ?>
                    </div><!--social-->
                    
                    <nav class="main-nav" id="main-nav" role="navigation">
                        <div class="icon">
                            <a href="javascript:void(0);" onclick="myFunction()">
                                <img src="<?php bloginfo('template_url'); ?>/images/mobileicon.png" alt="Menu Icon" />
                            </a>
                        </div>

                        <?php wp_nav_menu('theme_location=primary'); ?>
                    </nav><!--/main-nav-->
                </div><!--right-->
            </div>
        </header><!-- /header -->
