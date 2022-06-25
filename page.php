<?php
/**
 * Template Name: Шаблон
 * Template Post Type: page
 */
?>


<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <link rel="stylesheet" href="\wp-content\themes\CHRISTINA\style.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
</head>
<body>
    <header class="wrapper">
        <div class="mainblock__container">
            <?php get_header() ?>
        </div>
    </header>
    
    <main class="wrapper">
       <?=the_content();?>
    </main>
<? get_footer(); ?>
