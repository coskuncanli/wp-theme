<!doctype html>

<html <?php echo language_attributes(); ?>>

<head>
    <title>
        <?php echo bloginfo('site-title'); ?>
    </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="description" content="<?php echo  bloginfo('description'); ?>">
    <meta name="author" content="Coşkun Canlı, coskun.canli@gmail.com">
    <meta name="keywords" content="html, css, php, wordpress, sass">
    <meta name="theme-color" content="#16141a">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/prism.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <link rel="shorcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon-32x32.png" sizes="32x32">
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/apple-touch-icon.png">
    <?php wp_head(); ?>
</head>

<body>
    <a href="#" id="btn-up" title="Yukarı"><i class="fas fa-chevron-up"></i></a>
    
    <?php get_template_part('template_parts/header','banner'); ?>

    <main role="main" class="main">