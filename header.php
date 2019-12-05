<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title><?php  bloginfo('name') ?></title>
        <?php wp_head(); ?>
    </head>
    <header <?php if(is_front_page()) : echo 'class="home-page"'; endif ?>>
        <nav class="main-nav-menu">
            <a href="<?php get_home_url(); ?>" class="logo">
                <?php
        $custom_logo_id = get_theme_mod( 'custom_logo' );
        $custom_logo_url = wp_get_attachment_image_url( $custom_logo_id , 'full' );
        if($custom_logo_url){
            echo '<img src="' . esc_url( $custom_logo_url ) . '" alt="">';
        }else{
            echo '<img src="' . get_template_directory_uri().'/assets/images/logo.png' . '" alt="">';
        }
    ?>
            </a>
            <div class="nav-menu">
                <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
            </div>
        </nav>
    </header>

    <body <?php body_class(); ?>>