<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <?php wp_head(); ?> 
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
        <title>Document</title>
    </head>
    <body>
    <header class="l-header">
        <h1 class="header-title"><?php bloginfo( 'name' ); ?></h1>
        <?php if ( is_active_sidebar( 'header-nav-widget' ) ) : ?>
        <div class="header-widget">
            <?php dynamic_sidebar( 'header-nav-widget' ); ?>
        </div>
        <?php endif; ?>
    </header>
    <div class="container">
        <div class="row">
            <div class="l-main col-9">