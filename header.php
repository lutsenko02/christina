<div class="mainblock__navigation">
    <div class="mainblock__number">
        <a href="tel:+7(938)106-51-81"> <?= get_field('phone', 'option'); ?> </a>
        <a href="tel:+7(988)254-98-85"><?= get_field('phone1', 'option'); ?></a>
    </div>

    <div class="mainblock__logo"><a href="<?= home_url('/') ?>">christina</a></div>

    <nav class="mainblock__menu">
        <?php echo strip_tags(wp_nav_menu([
            'menu' => 'header',
            'echo' => '',
        ]), '<a>') ?>
        <!-- <a href="\wp-content\themes\CHRISTINA\" class="mainblock__link"><img src="\wp-content\themes\CHRISTINA\img\shop.svg" alt="корзина"></a> -->
    </nav>
</div>

<div class="mainblock__authorization">
    <a href="/my-account/" class="mainblock__sign-in mainblock__link">Личный кабинет<img src="\wp-content\themes\CHRISTINA\img\user.svg" alt="вход"></a>
</div>

<div id="myNav" class="burger">

    <a href="#" class="closebtn" onclick="closeNav()">&times;</a>

    <div class="burger__content">
        <div class="burger__element-partition">
            <p class="burger__span burger__logo">christina</p>
        </div>
        <?php echo strip_tags(wp_nav_menu([
            'menu' => 'burger',
            'echo' => '',
        ]), '<a>') ?>
    </div>

    <div class="burger__account">
        <div class="burger__element-partition">
            <p class="burger__span">Вход в аккаунт</p>
        </div>
        <?php echo strip_tags(wp_nav_menu([
            'menu' => 'autho',
            'echo' => '',
        ]), '<a>') ?>
    </div>

    <div class="burger__social">
        <div class="burger__element-partition">
            <p class="burger__span">Социальные сети</p>
        </div>
        <a href="\wp-content\themes\CHRISTINA\" class="burger__element">Telegram</a>
        <a href="\wp-content\themes\CHRISTINA\" class="burger__element">Vkontakte</a>
    </div>

    <div class="burder__number">
        <div class="burger__element-partition">
            <p class="burger__span">Контактный номер</p>
        </div>
        <a href="\wp-content\themes\CHRISTINA\tel:+7(938)106-51-81" class="burger__element">+7(938)106-51-81</a>
        <a href="\wp-content\themes\CHRISTINA\tel:+7(988)254-98-85" class="burger__element">+7(988)254-98-85</a>
    </div>
</div>

<span onclick="openNav()" class="burger__menu"><img src="\wp-content\themes\CHRISTINA\img\burger.svg" alt=""></span>
