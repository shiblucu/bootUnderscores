<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package simplexttc
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="page" class="site">
    <div class="container-fluid">
        <a class="skip-link screen-reader-text"
           href="#content"><?php esc_html_e('Skip to content', 'simplexttc'); ?></a>

        <header id="masthead" class="site-header">

            <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar justify-content-md-center info-color-dark"
                 role="navigation">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1"
                            aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="site-branding">
                        <?php

                        if (get_custom_logo()) :
                            the_custom_logo();
                        else :
                            ?>
                        <h1 class="site-title"><a class="navbar-brand font-weight-bold" href="<?php echo esc_url(home_url('/')); ?>"
                                                      rel="home"><?php bloginfo('name'); ?></a></h1>
                        <?php
                        endif; ?>
                    </div><!-- .site-branding -->
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'depth' => 2,
                        'container' => 'div',
                        'container_class' => 'collapse navbar-collapse',
                        'container_id' => 'bs-example-navbar-collapse-1',
                        'menu_class' => 'nav navbar-nav ml-auto',
                        'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                        'walker' => new WP_Bootstrap_Navwalker(),
                    ));
                    ?>
                </div>
            </nav><!-- #site-navigation -->
        </header><!-- #masthead -->
    </div> <!-- .container-fluid -->

    <div id="content" class="site-content">
