<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Gridbox
 */
//if (is_home()) {
//    header('location: ' . get_home_url() . '/category/trang-chu');
//}
global $wp;
if (home_url($wp->request) == get_home_url() . '/category/blog') {
    echo '<style>.page-header{display: none !important;}</style>';
}

gridbox_header_image();
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . '/css/indeteam.css' ?>">
    <script src="<?php echo get_stylesheet_directory_uri() . '/js/indieteam.js' ?>"></script>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> onload="showSlidesAuto()">

<div id="page" class="hfeed site">

    <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'gridbox'); ?></a>

    <?php do_action('gridbox_header_bar'); ?>

    <header id="masthead" class="site-header clearfix" role="banner">

        <div class="header-main container clearfix">

            <div id="logo" class="site-branding clearfix">

                <?php gridbox_site_logo(); ?>
                <?php gridbox_site_title(); ?>
                <?php gridbox_site_description(); ?>

            </div><!-- .site-branding -->

            <nav id="main-navigation" class="primary-navigation navigation clearfix" role="navigation">
                <?php
                // Display Main Navigation.
                wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'container' => false,
                        'menu_class' => 'main-navigation-menu',
                        'echo' => true,
                        'fallback_cb' => 'gridbox_default_menu',
                    )
                );
                ?>
            </nav><!-- #main-navigation -->

        </div><!-- .header-main -->

    </header><!-- #masthead -->

    <?php gridbox_breadcrumbs(); ?>

    <div id="content" class="site-content container clearfix">

        <?php if (!is_single()) {
            require_once(get_template_directory() . '/template-parts/indeteam_slideshow.php');
        } ?>


