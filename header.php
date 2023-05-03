<!DOCTYPE html>
<html lang="<?php bloginfo( 'language' ); ?>">

<head>
    <?php wp_head(); ?>
</head>

<body>

<header class="header">
    <div class="header--navbar wrapper">
        <div class="logo">
            
            <?php

            // set variables
            $logo_img = get_option( 'base-logo' );
            $logo_alt = 'Logotipo de'. get_bloginfo('name');
            $site_url = get_bloginfo('url'); 
            $site_name = get_bloginfo('name');   
            // verify if logo exists
            if ( $logo_img == '') {
                $logo_img = get_bloginfo('template_url') .'/assets/images/logo.png';
            }
            // print logo
            echo '
            <div class="logo-img">
                <a href="'. $site_url .'"><img src="'. $logo_img .'" alt="'. $logo_alt .'"></a>
            </div>
            <div class="logo-text">
                <a href="'. $site_url .'"><h1>'. $site_name .'</h1></a>
            </div>
            ';

            ?>
        </div>

        <!-- main nav bar -->
        <nav id="navigation" class="nav nav--main">
            <!-- close button -->
            <button class="btn btn--close mobile" onclick="hideNav()">
                <div></div>
                <div></div>
            </button>
            <?php 

            wp_nav_menu( 
                array( 
                    'theme_location' => 'main-nav', 
                    'container'      => 'ul',
                    'menu_class'     => ''
                ) 
            ); 

            ?>
        </nav>

        <!-- nav button -->
        <button class="btn btn--nav mobile" onclick="showNav()">
            <div></div>
            <div></div>
            <div></div>
        </button>
    </div>
</header>