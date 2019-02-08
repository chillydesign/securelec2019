<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
        <?php $tdu =  get_template_directory_uri(); ?>
        <?php $blog_name =  get_bloginfo('name'); ?>
        <?php $home_url =  home_url(); ?>
        <!-- <link href="//www.google-analytics.com" rel="dns-prefetch"> -->
        <meta name="apple-mobile-web-app-title" content="<?php echo $blog_name; ?>">
        <meta name="application-name" content="<?php echo $blog_name; ?>">
        <meta name="theme-color" content="#ffffff">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="<?php bloginfo('description'); ?>">
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>



        <header>
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <a href="<?php echo $home_url ; ?>" id="branding">Securelec</a>
                    </div>
                    <div class="col-sm-9">
                        <nav>
                            <ul id="main_nav">
                                <?php chilly_nav('header_nav'); ?>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div id="menu_button">Menu</div>
        </header>

        <main id="main">
