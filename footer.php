<footer>
        <div class="footer">
            <div class="footer__menu">

                <div class="footer__up">
                    <div class="footer__politic"><a href="pact.html"><?= get_field('policy_text','option'); ?></a></div>
                    <div class="footer__right">
                        <a href="<?= get_field('tg_link','option'); ?>"><img src="<?= get_field('tg_icon','option'); ?>" alt="telegram" class="footer__icon"></a>
                        <a href="<?= get_field('vk_link','option'); ?>"><img src="<?= get_field('vk_icon','option'); ?>" alt="vkontacte" class="footer__icon"></a>
                    </div>
                </div>

                <div class="footer__line"></div>

                <div class="footer__down">
                    <p class="footer__ch"><?= get_field('copyright','option'); ?></p>
                    <div class="footer__right">
                        <p class="footer__right"><a href="<?= get_field('developer_link','option'); ?>" class="footer__right-unicorn"><?= get_field('developer_text','option'); ?></a></p>
                    </div>
                </div>

            </div>
            
        </div>
    </footer>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="\wp-content\themes\CHRISTINA\script.js"></script>
    <?php wp_footer(); ?>
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
       (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
       m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
       (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");
    
       ym(89281120, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true,
            webvisor:true
       });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/89281120" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
</body>
</html>
