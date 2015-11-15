<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?> style="margin-top: 0!important">
    <!--<![endif]-->
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width">
        <title><?php wp_title( '|', true, 'right' ); ?></title>
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <link href='<?php echo get_template_directory_uri(); ?>/sass/montserrat/stylesheet.css' rel='stylesheet' type='text/css'>
        <!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
<![endif]-->
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>  >
        <div id="page" class="hfeed site">
            <header id="header" >
                <div id="top-menu">
                    <div class="head-content">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" id="logo" class="black"><img src="<?php echo get_bloginfo('template_directory');?>/images/logo-kawaweb.png" alt=""></a>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" id="logo" class="white"><img src="<?php echo get_bloginfo('template_directory');?>/images/logo-kawaweb-white.png" alt=""></a>
                        <nav id="main-nav">
                            <?php  wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu', 'menu_id' => 'primary-menu' ) ); ?>
                        </nav>
                    </div>
                </div>
                <div id="head-artwork">
                    <div class="visible-header a-propos">
                        <h1>Kawaweb // <span>à propos</span></h1>
                        <h2>10 ans d'expérience</h2>
                    </div>
                    <div class="visible-header prestations">
                        <h1>Kawaweb // <span>nos prestations</span></h1>
                        <h2>3 mots clés</h2>
                    </div>
                    <div class="visible-header contact">
                        <h1>Kawaweb // <span>contactez-nous</span></h1>
                        <h2>L'étude est gratuite</h2>
                    </div>
                </div>

            </header><!-- #masthead -->

            <div id="main" class="site-main">
