<?php
/**
 * Template Name: Главная
 * Template Post Type: page
 */
?>



<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <title>CHRISTINA</title>
    <link rel="stylesheet" href="\wp-content\themes\CHRISTINA\style.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
</head>
<body>
    <header class="wrapper">
        <div class="mainblock">
            <div class="mainblock__container">
                <?php get_header() ?>
                <!--  -->
            </div>
            <div class="mainblock__content">
                <div class="mainblock__text">
                    <div class="mainblock__title"> <?= get_field('main_hero_text');?> </div>
                    <div class="mainblock__subtitle"><?= get_field('main_hero_city'); ?></div>
                    <a href="<?= get_field('main_hero_btn_link')?>" class="mainblock__btn">посмотреть продукты</a>
                </div>
                <div class="mainblock__footer">
                    <a href="#text" class="mainblock__arrow"><img src="\wp-content\themes\CHRISTINA\img\arrow.svg" alt="стрелка"></a>
                </div>
            </div>
            
        </div>
    </header>
    
    <main class="wrapper">
        <div class="content">

            <div class="content__wrapper" id="text">
                <div class="content__block">
                    <p class="content__text"><?= get_field('main_text1');?></p>
                </div>
                <div class="content__line"></div>
            </div>

            <div class="content__action">
                <div class="content__title">Cезонные акции</div>
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="<?= get_field('slider_photo_1');?>" alt=""></div>
                        <div class="swiper-slide"><img src="<?= get_field('slider_photo_2');?>" alt=""></div>
                        <div class="swiper-slide"><img src="<?= get_field('slider_photo_3');?>" alt=""></div>
                        <div class="swiper-slide"><img src="<?= get_field('slider_photo_4');?>" alt=""></div>
                        <div class="swiper-slide"><img src="<?= get_field('slider_photo_5');?>" alt=""></div>
                    </div>

                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>

            <div class="content__wrapper">
                <div class="content__block">
                    <img src="\wp-content\themes\CHRISTINA\img\flower1.png" alt="" class="<?= get_field('flower_icon_1');?>">
                    <p class="content__text" style="text-align: right;"> <?= get_field('main_text2');?> </p> 
                </div>
                <div class="content__line"></div>
            </div>
            
            <div class="content__advantage">
                <div class="content__title">Преимущества</div>
                <div class="advantage__boxes">
                    <div class="content__box">
                        <div>
                            <img src="\wp-content\themes\CHRISTINA\img\house.svg" alt="дом" class="box__logo">
                        </div>
                        <p class="box__title">Филиалы в разных городах России</p>
                    </div>
                    <div class="content__box">
                        <div>
                            <img src="\wp-content\themes\CHRISTINA\img\cent.svg" alt="дом" class="box__logo">
                        </div>
                        <p class="box__title">Бесплатная доставка</p>
                        <p class="box__text">*при покупке от 3000 рублей</p>
                    </div>
                    <div class="content__box">
                        <div>
                            <img src="\wp-content\themes\CHRISTINA\img\shield.svg" alt="дом" class="box__logo">
                        </div>
                        <p class="box__title">Качественные и уникальные товары</p>
                    </div>
                </div> 
                <div class="content__line"></div>
            </div>

            <div class="content__about">
                <div class="content__title">О нас</div>
                    <div class="about">
                        <div class="about-block">
                            <p class="about-block__text"> <?= get_field('main_text3_1');?> </p>
                            <img class="about-block__img" src="<?= get_field('flower_icon_2');?>" alt="Иконка 1">
                        </div>
                        <div class="about-block">
                            <p class="about-block__text">
                                <?= get_field('main_text3_2');?>
                                <br>
                                <?= get_field('main_text3_2_1');?>
                            </p>
                            <img class="about-block__img" src="<?= get_field('flower_icon_3');?>" alt="Иконка 2">
                        </div>
                    </div>
                </div>
                <div class="content__line" style="margin-top: 150px;"></div>
            </div>

            <div class="content__wrapper">
                <div class="content__block">
                    <p class="content__text"><?= get_field('main_text4');?></p>
                </div>
            </div>
        </div>
    </main>
<? get_footer(); ?>
