<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php if (is_front_page()) { echo get_bloginfo('title'); } else { echo get_bloginfo('title')." - ".get_the_title(); } ?></title>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta http-equiv="Content-Style-Type" content="text/css" />
        <meta http-equiv="Content-Script-Type" content="text/javascript" />
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
        <meta http-equiv="cache-control" content="max-age=0" />
        <meta http-equiv="cache-control" content="no-cache" />
        <meta http-equiv="expires" content="0" />
        <meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
        <meta http-equiv="pragma" content="no-cache" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, user-scalable=no" />
        <link rel="canonical" href="<?php echo site_url(); ?>" />
        <meta property="og:locale" content="pt_BR" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="<?php echo get_bloginfo('title'); ?>" />
        <meta property="og:description" content="<?php echo get_bloginfo('description'); ?>" />
        <meta property="og:url" content="<?php echo get_bloginfo('title'); ?>" />
        <meta property="og:site_name" content="<?php echo get_bloginfo('description'); ?>" />
        <meta property="og:image" content="<?php echo get_template_directory_uri().'/screenshot.jpg'; ?>" />
        <?php wp_meta(); ?>
        
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="HandheldFriendly" content="true" />
        <!-- SEO -->
        <meta name="audience" content="all" />
        <meta name="description" content="<?php echo get_bloginfo('description'); ?>" />
        <meta name="author" content="WpMasterLab" />
        <meta name="copyright" content="WpMasterLab" />
        <meta name="resource-type" content="Document" />
        <meta name="distribution" content="Global" />
        <meta name="robots" content="index, follow, ALL" />
        <meta name="GOOGLEBOT" content="index, follow" />
        <meta name="rating" content="General" />
        <meta name="revisit-after" content="2 Days" />
        <meta name="language" content="pt-br" />
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" type="text/css" media="all" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/functions.min.js" type="text/javascript"></script>
        <?php wp_head(); ?>
    </head>
    <body
        <?php
        global $post;
        if (is_front_page()) {
        echo 'class="pg-home"';
        } else if(is_archive()){
        echo 'class="pg-archive pg-interna"';
        } else if(is_category()){
        echo 'class="pg-category pg-interna"';
        } else if(is_search()){
        echo 'class="pg-search pg-interna post_id_'.$post->ID.'"';
        } else if(is_single()){
        echo 'class="pg-single pg-interna post_id_'.$post->ID.'"';
        } else {
        echo 'class="pg-interna page_id_'.$post->ID.'"';
        }
        ?>>
        <div id="wrap">
            <header>
                <div class="fluid-container hidden-lg hidden-md">
                    <nav class="navbarmobile">
                        <ul>
                            <?php wp_nav_menu( array( 'container' => false, 'menu' => 'footer', 'items_wrap' => '%3$s' ) ); ?>
                        </ul>
                    </nav>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="v-center col-lg-4 col-md-4 col-sm-4 col-xs-8 text-left">
                            <?php if ( get_theme_mod( 'logo' ) ) : ?>
                            <a class="logo" href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img src='<?php echo esc_url( get_theme_mod( 'logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'></a>
                            <?php else : ?>
                            <a class="logo" href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><?php bloginfo( 'name' ); ?></a>
                            <?php endif; ?>
                        </div>
                        <div class="v-center col-lg-8 col-md-8 col-sm-8 col-xs-4">
                            <nav class="pull-right">
                                <form role="search" method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                                    <input required="required"  placeholder="Busca" type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" />
                                    <input type="hidden" name="post_type" value="pages" />
                                    <button><i class="glyphicon glyphicon-search"></i></button>
                                </form>
                                <ul>
                                    <?php wp_nav_menu( array( 'container' => false, 'menu' => 'header', 'items_wrap' => '%3$s' ) ); ?>
                                    <li class="hidden-lg hidden-md hidden-sm"><a title="Menu" href="javascript:void(0)" class="navbar-toggle">
                                        <i class="glyphicon glyphicon-menu-hamburger"></i>
                                    </a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </header>
            <main>