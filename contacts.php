<?php
/**
 * Template Name: Контакты
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
        <div class="contacts">
            <div class="content__title">Наши контакты</div>

            <div class="contacts__city">
                <div class="contacts__line"><p class="contacts__city1">Ростов-на-Дону</p></div>
                <div class="contacts__block">
                    <div class="contacts__phone"><img src="\wp-content\themes\CHRISTINA\img\phone.svg" alt="телефон" class="contacts__icon">
                    <div class="contacts__phone-left">
                        <a href="tel:+7(938)106-51-81">+7(938)106-51-81</a>
                        <a href="tel:+7(988)254-98-85">+7(988)254-98-85</a>
                    </div>
                    </div>
                    <div class="contacts__map"><img src="\wp-content\themes\CHRISTINA\img\map.svg" alt="адрес" class="contacts__icon">г. Ростов-на-Дону, "Компания CHRISTINA", ул. Текучева, д. 224 (лестница на 3й этаж справа от продуктового магазина "Ассорти")</div>
                    <div class="contacts__mail"><img src="\wp-content\themes\CHRISTINA\img\mail.svg" alt="почта" class="contacts__icon"><a href="christinarostov@yandex.ru">christinarostov@yandex.ru</a></div>
                </div>     
            </div>

            <div class="contacts__city-right">
                <div class="contacts__flower"><img src="\wp-content\themes\CHRISTINA\img\flower4.png" alt="" class="contacts__flower1"></div>
                <div class="contacts__line-right"><p class="contacts__city2">Сочи</p></div>
                <div class="contacts__block-right">
                    <div class="contacts__phone-right"><a href="tel:8 (963) 162-19-72">8 (963) 162-19-72</a><img src="\wp-content\themes\CHRISTINA\img\phone.svg" alt="телефон" style="margin-right: 20px;" class="contacts__icon"></div>
                    <div class="contacts__map-right">"Компания CHRISTINA", ул. Роз 67<img src="\wp-content\themes\CHRISTINA\img\map.svg" alt="адрес" style="margin-right: 20px;" class="contacts__icon"></div>
                    <div class="contacts__mail-right"><a href="ch.sochi@mail.ru">ch.sochi@mail.ru</a><img src="\wp-content\themes\CHRISTINA\img\mail.svg" alt="почта" style="margin-right: 20px;" class="contacts__icon"></div>
                </div>     
            </div>
            

            <div class="contacts__city">
                <div class="contacts__line"><p class="contacts__city1">Астрахань</p></div>
                <div class="contacts__block">
                    <div class="contacts__phone"><img src="\wp-content\themes\CHRISTINA\img\phone.svg" alt="телефон" class="contacts__icon">
                        <a href="tel:8 (917) 180-68-28">8 (917) 180-68-28</a>
                    </div>
                    <div class="contacts__map"><img src="\wp-content\themes\CHRISTINA\img\map.svg" alt="адрес" class="contacts__icon">"Компания CHRISTINA", ул. Фиолетовая 32, офис 1</div>
                    <div class="contacts__mail"><img src="\wp-content\themes\CHRISTINA\img\mail.svg" alt="почта" class="contacts__icon"><a href="christinaast@yandex.ru">christinaast@yandex.ru</a></div>
                </div>     
            </div>

            <div class="contacts__city-right">

                <div class="contacts__line-right"><p class="contacts__city2">Сухум</p></div>
                    <div class="contacts__block-right">
                        <div class="contacts__phone-right">
                            <div class="contacts__phone-left">
                                <a href="tel:+7(938)106-51-81">+7(938)106-51-81</a>
                                <a href="tel:+7(988)254-98-85">+7(988)254-98-85</a>
                                <a href="tel:+7(988)254-98-85">+7(988)254-98-85</a>
                            </div>
                            <img src="\wp-content\themes\CHRISTINA\img\phone.svg" alt="телефон" class="contacts__icon">
                        </div>
                        <div class="contacts__map-right">"Компания CHRISTINA", ул. Ардзинба 140/24, ТЦ Rio 3 этаж (центральный рынок)<img src="\wp-content\themes\CHRISTINA\img\map.svg" alt="адрес" class="contacts__icon"></div>
                    </div> 
                </div>    
            </div>
            

            <div class="contacts__city">
                <div class="contacts__flower-right"><img src="\wp-content\themes\CHRISTINA\img\flower5.png" alt="" class="contacts__flower2"></div>
                <div class="contacts__line"><p class="contacts__city1">Краснодар</p></div>
                <div class="contacts__block">
                    <div class="contacts__phone"><img src="\wp-content\themes\CHRISTINA\img\phone.svg" alt="телефон" class="contacts__icon">
                        <a href="tel:8 (989) 164-65-25">8 (989) 164-65-25</a>
                    </div>
                    <div class="contacts__map"><img src="\wp-content\themes\CHRISTINA\img\map.svg" alt="адрес" class="contacts__icon"> "Компания CHRISTINA", ул. 3-я линия Нефтянников, д.2, оф.10</div>
                    <div class="contacts__mail"><img src="\wp-content\themes\CHRISTINA\img\mail.svg" alt="почта" class="contacts__icon"><a href="christinakrasnodar@yandex.ru">christinakrasnodar@yandex.ru</a></div>
                </div>     
            </div>

            <div class="content__line"></div>

            <div class="contacts__feedback">
                <div class="content__title">Обратная связь</div>
                <div class="feedback__container">
                    <div class="feedback__wrapper">
                        <form class="feedback__form">
                            <?=the_content();?>
                        </form>
                        <div><img src="\wp-content\themes\CHRISTINA\img\flower6.png" alt="" class="feedback__flower"></div>
                    </div>
                </div>
            </div>

        </div>
    </main>

    <?php get_footer() ?>