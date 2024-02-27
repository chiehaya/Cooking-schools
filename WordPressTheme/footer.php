<?php if (!is_page(array('contact', 'thanks')) && !is_404()): ?>
<section class="contact 
    <?php echo (is_front_page() || is_page('sitemap')) 
        ? 'layout-contact' 
        : 'layout-contact-sub'; 
    ?>"
>
    <div class="contact__inner inner">
        <div class="contact__decoration">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/price-deco.png" alt="装飾">
        </div>
        <div class="contact__contents">
            <div class="contact__head">
                <div class="contact__logo">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/contact-logo.png" alt="CodeUps">
                </div>
                <div class="contact__guidance">
                    <div class="contact__address">
                        <p class="contact__text">沖縄県那覇市1-1</p>
                        <p class="contact__text">TEL:<a href="tel:01200000000">0120-000-0000</a></p>
                        <p class="contact__text">営業時間:8:30-19:00</p>
                        <p class="contact__text">定休日:毎週火曜日</p>
                    </div>
                    <div class="contact__map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d49312.094054889116!2d127.62837066999028!3d26.20002036652809!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sja!2sjp!4v1700466481953!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
            <div class="contact__wrapper">
                <div class="contact__title section-title">
                    <p class="section-title__en section-title__en--big">Contact</p>
                    <h2 class="section-title__ja section-title__ja--big">お問合せ</h2>
                </div>
                <p class="contact__message">ご予約・お問い合わせはコチラ</p>
                <div class="contact__btn">
                    <a href="<?php echo esc_url(home_url("/contact")) ?>" class="btn">
                        <span>Contact us</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
</main>

<footer class="footer layout-footer">
    <div class="footer__inner">
        <div class="footer__head">
            <div class="footer__logo">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/logo.png" alt="CodeUps">
            </div>
            <div class="footer__sns">
                <div class="footer__facebook">
                    <a href="https://www.facebook.com/?locale=ja_JP" target="_blank" rel="noopener no-referrer">
                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/FacebookLogo.png" alt="facebook">
                    </a>
                </div>
                <div class="footer__instagram">
                    <a href="https://www.instagram.com/" target="_blank" rel="noopener no-referrer">
                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/InstagramLogo.png" alt="instagram">
                    </a>
                </div>
            </div>
        </div>
        <div class="footer__nav page-nav">
            <div class="page-nav__flex-sp">
                <div class="page-nav__flex">
                    <ul class="page-nav__item">
                        <li class="page-nav__title">
                            <a href="<?php echo esc_url(home_url("/campaign")) ?>">キャンペーン</a>
                        </li>
                        <li class="page-nav__link">
                            <a href="<?php echo esc_url(home_url("/campaign")) ?>">ライセンス取得</a>
                        </li>
                        <li class="page-nav__link">
                            <a href="<?php echo esc_url(home_url("/campaign")) ?>">貸切体験ダイビング</a>
                        </li>
                        <li class="page-nav__link">
                            <a href="<?php echo esc_url(home_url("/campaign")) ?>">ナイトダイビング</a>
                        </li>
                    </ul>
                    <ul class="page-nav__item">
                        <li class="page-nav__title">
                            <a href="<?php echo esc_url(home_url("/about-us")) ?>">私たちについて</a>
                        </li>
                    </ul>
                </div>
                <div class="page-nav__flex">
                    <ul class="page-nav__item">
                        <li class="page-nav__title">
                            <a href="<?php echo esc_url(home_url("/information/?tab=1")) ?>">ダイビング情報</a>
                        </li>
                        <li class="page-nav__link">
                            <a href="<?php echo esc_url(home_url("/information/?tab=1")) ?>">ライセンス講習</a>
                        </li>
                        <li class="page-nav__link">
                            <a href="<?php echo esc_url(home_url("/information/?tab=3")) ?>">体験ダイビング</a>
                        </li>
                        <li class="page-nav__link">
                            <a href="<?php echo esc_url(home_url("/information/?tab=2")) ?>">ファンダイビング</a>
                        </li>
                    </ul>
                    <ul class="page-nav__item">
                        <li class="page-nav__title">
                            <a href="<?php echo esc_url(home_url("/blog")) ?>">ブログ</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="page-nav__flex-sp">
                <div class="page-nav__flex">
                    <ul class="page-nav__item">
                        <li class="page-nav__title">
                            <a href="<?php echo esc_url(home_url("/voice")) ?>">お客様の声</a>
                        </li>
                    </ul>
                    <ul class="page-nav__item">
                        <li class="page-nav__title">
                            <a href="<?php echo esc_url(home_url("/price")) ?>">料金一覧</a>
                        </li>
                        <li class="page-nav__link">
                            <a href="<?php echo esc_url(home_url("/price#price")) ?>">ライセンス講習</a>
                        </li>
                        <li class="page-nav__link">
                            <a href="<?php echo esc_url(home_url("/price#price-lisence")) ?>">体験ダイビング</a>
                        </li>
                        <li class="page-nav__link">
                            <a href="<?php echo esc_url(home_url("/price#price-lisence")) ?>">ファンダイビング</a>
                        </li>
                    </ul>
                </div>
                <div class="page-nav__flex">
                    <ul class="page-nav__item">
                        <li class="page-nav__title">
                            <a href="<?php echo esc_url(home_url("/faq")) ?>">よくある質問</a>
                        </li>
                    </ul>
                    <ul class="page-nav__item">
                        <li class="page-nav__title">
                            <a href="<?php echo esc_url(home_url("/privacypolicy")) ?>">プライバシー<br class="u-mobile">ポリシー</a>
                        </li>
                    </ul>
                    <ul class="page-nav__item">
                        <li class="page-nav__title">
                            <a href="<?php echo esc_url(home_url("/terms-of-service")) ?>">利用規約</a>
                        </li>
                    </ul>
                    <ul class="page-nav__item">
                        <li class="page-nav__title">
                            <a href="<?php echo esc_url(home_url("/contact")) ?>">お問合せ</a>
                        </li>
                    </ul>
                    <ul class="page-nav__item">
                        <li class="page-nav__title">
                            <a href="<?php echo esc_url(home_url("/sitemap")) ?>">サイトマップ</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer__copy">
            Copyright &copy; 2021 - 2023 CodeUps LLC. All Rights Reserved.
        </div>
    </div>
</footer>
<?php if(!is_404()): ?>
<div class="page-top js-page-top">
    <a href="#top"></a>
</div>
<?php endif; ?>
<?php wp_footer(); ?>
</body>
</html>
