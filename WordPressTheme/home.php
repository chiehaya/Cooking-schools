<?php get_header(); ?>

<main>
    <section class="sub-mv js-mv">
        <h1 class="sub-mv__title">Blog</h1>
        <picture class="sub-mv__img">
            <source media="(min-width: 768px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog-mv-pc.jpg">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog-mv-sp.jpg" alt="サブメインビュー">
        </picture>
    </section>

    <div class="layout-breadcrumb">
        <?php get_template_part('parts/breadcrumb'); ?>
    </div>

    <div class="two-colums layout-two-colums">
        <div class="two-colums__inner inner">
            <div class="two-colums__decoration page-decoration">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/page-deco.png" alt="装飾">
            </div>

            <div class="two-colums__contents">
                <div class="two-colums__main">
                <?php if (have_posts()) : ?>
                    <div class="two-colums__items cards cards--2col">
                        <?php while (have_posts()) : the_post(); ?>
                            <a href="<?php the_permalink(); ?>" class="cards__item card">
                                <figure class="card__img">
                                    <?php if(get_the_post_thumbnail()): ?>
                                        <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャッチ画像">
                                    <?php else : ?>
                                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/noimage.jpg" alt="">
                                    <?php endif ; ?>
                                </figure>
                                <div class="card__body">
                                    <time class="card__date" datetime="<?php the_time('c'); ?>"><?php the_time('Y.n/j'); ?></time>
                                    <p class="card__title">
                                        <?php the_title(); ?>
                                    </p>
                                    <p class="card__text">
                                        <?php $content = get_the_content();
                                        echo wp_trim_words($content, 80, '...');
                                        ?>
                                    </p>
                                </div>
                            </a>
                        <?php endwhile; ?>
                    </div>
                    <div class="two-colums__pagenavi">
                        <?php wp_pagenavi(); ?>
                    </div>
                    <?php else: ?>
                        <p class="two-colums__message">記事が投稿されていません</p>
                    <?php endif; ?>
                </div>
                
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>
