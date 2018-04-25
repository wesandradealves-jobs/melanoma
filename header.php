<?php $lang = substr(get_language_attributes(), -6, 5); ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <title><?php if (is_front_page()) { echo get_bloginfo('title')." - ".get_bloginfo('description'); } else { echo get_bloginfo('title')." - ".get_the_title(); } ?></title>
    <?php wp_meta(); ?>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="Content-Style-Type" content="text/css" />
    <meta http-equiv="Content-Script-Type" content="text/javascript" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/php;charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
    <meta name="DC.title" content="<?php echo get_bloginfo('title'); ?>" />
    <meta name="DC.creator " content="Wesley Andrade - http://www.github.com/wesandradealves - wesandradealves@gmail.com" />
    <meta name="DC.creator.address" content="http://www.github.com/wesandradealves" />
    <meta name="DC.description" content="<?php echo get_bloginfo('description'); ?>" />
    <meta name="DC.publisher" content="Visana Comunicação - http://www.visanacomunicacao.com.br" />
    <meta name="DC.Identifier" content="<?php echo site_url(); ?>">
    <!--cache-->
    <meta http-equiv="cache-Control" content="public, max-age=31536000" />
    <meta http-equiv="expires" content="0" />
    <!--<meta http-equiv="pragma" content="no-cache" />-->
    <!---->
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="HandheldFriendly" content="true" />
    <meta name="audience" content="all" />
    <meta name="author" content="Wesley Andrade - http://www.github.com/wesandradealves - wesandradealves@gmail.com" />
    <meta name="copyright" content="Wesley Andrade - http://www.github.com/wesandradealves - wesandradealves@gmail.com" />
    <meta name="resource-type" content="Document" />
    <meta name="distribution" content="Global" />
    <meta name="robots" content="index, follow, ALL" />
    <meta name="GOOGLEBOT" content="index, follow" />
    <meta name="rating" content="General" />
    <meta name="revisit-after" content="2 Days" />
    <meta http-equiv="content-language" content="<?php echo $lang; ?>" />
    <meta name="language" content="<?php echo $lang; ?>" />
    <meta property="og:locale" content="<?php echo $lang; ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php echo get_bloginfo('title'); ?>" />
    <meta property="og:description" content="<?php echo get_bloginfo('description'); ?>" />
    <meta property="og:url" content="<?php echo site_url(); ?>" />
    <meta property="og:site_name" content="<?php echo get_bloginfo('title'); ?>" />
    <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/screenshot.png" />
    <link rel="canonical" href="<?php echo site_url(); ?>" />
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
      echo 'class="pg-search pg-interna"';
    } else if(is_single()){
      echo 'class="pg-single pg-interna"';
    } else {
      echo 'class="pg-interna page_id_'.$post->ID.'"';
    }
    ?>>
        <div id="wrap" <?php if(get_theme_mod('site_fundo')) : ?> style="background-image:url(<?php echo get_theme_mod('site_fundo'); ?>);" <?php endif; ?>>
            <header <?php if(get_theme_mod('header_fundo')) : ?> style="background-image:url(<?php echo get_theme_mod('header_fundo'); ?>);" <?php endif; ?>>
                <div id="header">
                    <div class="container">
                        <h1 class="col-lg-3 col-md-3 col-sm-4 col-xs-6 logo">
                            <a href="<?php echo site_url(); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) )." - ".get_bloginfo('description'); ?>">
                            <?php 
                                if ( get_theme_mod( 'logo' ) ) :
                                    echo "<img src='".esc_url( get_theme_mod( 'logo' ) )."' alt='".esc_attr( get_bloginfo( 'name', 'display' ) )." - ".get_bloginfo('description')."'>";
                                else : 
                                    echo "<span>".esc_attr( get_bloginfo( 'name', 'display' ) )."</span>";
                                endif;
                            ?>
                            </a>
                        </h1>
                        <nav class="col-lg-9 col-md-9 col-sm-8 col-xs-6 text-center">
                            <ul class="text-right clearfix">
                                <?php wp_nav_menu( array( 'container' => false, 'menu' => 'Header', 'items_wrap' => '%3$s' ) ); ?> 
                                <li class="visible-xs visible-sm">
                                    <button onclick="mobileNavigation()" type="button" class="tcon tcon-menu--xcross" aria-label="toggle menu">
                                        <span class="tcon-menu__lines" aria-hidden="true"></span>
                                        <span class="tcon-visuallyhidden">toggle menu</span>
                                    </button>                                    
                                </li>
                            </ul>
                        </nav>
                    </div>                    
                </div>
            </header>
            <nav id="mobileNavigation">
                <ul>
                    <?php wp_nav_menu( array( 'container' => false, 'menu' => 'Mobile', 'items_wrap' => '%3$s' ) ); ?> 
                </ul>
            </nav> 