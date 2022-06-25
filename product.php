<?php
/**
 * Template Name: Продукт
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
    <title>CHRISTINA</title>
    <link rel="stylesheet" href="\wp-content\themes\CHRISTINA\style.css">
</head>
<body>
    <header class="wrapper">
    <?php get_header() ?>
    </header>


    <main class="wrapper">
        <div class="product">
            <div class="product__description">
                <div class="content__title">Пилинговое мыло Rose de Mer Peeling Soap</div>
                <div class="product__info">
                    <img src="\wp-content\themes\CHRISTINA\img\test.png" alt="" class="product__image">
                    <div class="product__info-right">
                        <p class="product__name">Пилинговое мыло Rose de Mer Peeling Soap в подарочной упаковке Coral Pack</p>
                        <p class="product__text">Средство глубоко и деликатно очищает кожу, удаляет черные точки. Микрочастицы кораллов выравнивают рельеф и оказывают поросуживающее действие. Мыло шлифует стрии, постакне-рубцы, борется с гиперкератозом. Целебные растительные экстракты в составе мыла обладают противовоспалительным и антибактериальным действием.</p>
                        <p class="product__text">Активные ингридиенты: Пальмитат натрия, оливат натрия, касторат натрия, глицерин, губка, коралловая пудра, двуокись кремния, экстракт лишайника.</p>
                        <div class="product__price">
                            <div class="product__text-price"><p>цена: <span class="product__rub">5900 руб.</span></p></div>
                            <div><a href="" class="product__button">в корзину</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product__like">
                <div class="content__title">Похожие товары</div>
                <div class="product__container">
                    <div class="product__similar">
                        <div class="product__img"><img src="\wp-content\themes\CHRISTINA\img\test.png" alt="продукт" class="product__img-min"></div>
                        <div><p class="product__name-min">Пилинговое мыло Rose de Mer Peeling Soap</p></div>
                        <a href="product.html"><div class="product__value"><p>Цена: 1600 руб.</p></div></a>
                    </div>
                    <div class="product__similar">
                        <div class="product__img"><img src="\wp-content\themes\CHRISTINA\img\test.png" alt="продукт" class="product__img-min"></div>
                        <div><p class="product__name-min">Пилинговое мыло Rose de Mer Peeling Soap</p></div>
                        <a href="product.html"><div class="product__value"><p>Цена: 1600 руб.</p></div></a>
                    </div>
                    <div class="product__similar">
                        <div class="product__img"><img src="\wp-content\themes\CHRISTINA\img\test.png" alt="продукт" class="product__img-min"></div>
                        <div><p class="product__name-min">Пилинговое мыло Rose de Mer Peeling Soap</p></div>
                        <a href="product.html"><div class="product__value"><p>Цена: 1600 руб.</p></div></a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php get_footer() ?>