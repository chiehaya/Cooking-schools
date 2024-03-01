<?php get_header(); ?>
<main>
    <section class="sub-mv js-mv">
        <h1 class="sub-mv__title">Course</h1>
        <picture class="sub-mv__img">
            <source media="(min-width: 768px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/info-mv-pc.jpg">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/info-mv-sp.jpg" alt="サブメインビュー">
        </picture>
    </section>

    <div class="layout-breadcrumb">
        <?php get_template_part('parts/breadcrumb'); ?>
    </div>

    <section class="info-page layout-page-top">
        <div class="info-page__inner inner">
            <div class="info-page__decoration page-decoration">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/page-deco.png" alt="装飾">
            </div>
            <ul class="info-page__list" id="info-contents">
                <li class="info-page__tag">
                    <span>お試し<br class="u-mobile">レッスン</span>
                </li>
                <li class="info-page__tag">
                    <span>パン<br class="u-mobile">コース</span>
                </li>
                <li class="info-page__tag">
                    <span>本格<br class="u-mobile">コース</span>
                </li>
            </ul>
            <div class="info-page__contents" id="info-lisence">
                <div class="info-page__wrapper">
                    <h2 class="info-page__title">お試しレッスン</h2>
                    <p class="info-page__text">クッキング わたの1番人気コースは、お試しレッスン。料理初心者でも安心して参加できます。女性だけでなく、最近は男性同士の参加も増えています！お気軽にお申し込みください！ご家族やお友達同士の参加もお待ちしております。</p>
                </div>
                <div class="info-page__img">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/course01.jpg" alt="ライセンス講習">
                </div>
            </div>
            <div class="info-page__contents" id="info-fun-diving">
                <div class="info-page__wrapper">
                    <h2 class="info-page__title">パンコース</h2>
                    <p class="info-page__text">基本的なパンからアートパンまで、幅広いパン作りのスキルを身につけることができます。プロのシェフが丁寧に指導し、美味しいパンの作り方を楽しく学びます。初心者から上級者まで、どなたでもご参加いただけます。</p>
                </div>
                <div class="info-page__img">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/course02.jpg" alt="ファンダイビング">
                </div>
            </div>
            <div class="info-page__contents" id="info-diving">
                <div class="info-page__wrapper">
                    <h2 class="info-page__title">本格コース</h2>
                    <p class="info-page__text">本格コースでは、厳選された食材とプロのシェフによる指導のもと、料理の基本から応用まで幅広く学べるプログラムをご用意しています。このコースは、食に興味をお持ちの方やプロの技術を向上させたい方に最適です。</p>
                </div>
                <div class="info-page__img">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/course03.jpg" alt="体験ダイビング">
                </div>
            </div>
        </div>
    </section>
<?php get_footer(); ?>