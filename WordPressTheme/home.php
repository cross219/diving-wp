<?php get_header(); ?>
<main>
  <!-- 下層ページのメインビュー -->
  <div class="sub-mv">
    <picture class="sub-mv__img">
      <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog-sub-mv_sp.jpg" media="(max-width: 768px)" />
      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog-sub-mv_pc.jpg" alt="魚群の写真" />
    </picture>
    <div class="sub-mv__title-box">
      <h2 class="sub-mv__title">Blog</h2>
    </div>
  </div>
  <!-- パンくず -->
  <?php get_template_part('parts/breadcrumb') ?>

  <section class="lower-blog lower-bg lower-bg--blog lower-blog-layout">
    <div class="lower-blog__inner inner">
      <div class="lower-blog__contents">
        <div class="lower-blog__content">
          <div class="lower-blog__items blog-cards blog-cards--lower">
            <?php if (have_posts()) :
              while (have_posts()) :
                the_post(); ?>
                <a href="<?php the_permalink(); ?>" class="blog-cards__item blog-card">
                  <div class="blog-card__img">
                    <?php if (get_the_post_thumbnail()) : ?>
                      <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャッチ画像">
                    <?php else : ?>
                      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/no-image.jpg" alt="no-mage">
                    <?php endif; ?>
                  </div>
                  <div class="blog-card__container">
                    <div class="blog-card__meta">
                      <time class="blog-card__date" datetime="<?php the_time('c'); ?>"><?php the_time('Y.m/d'); ?></time>
                      <div class="blog-card__title"><?php the_title(); ?></div>
                    </div>
                    <div class="blog-card__text">
                      <?php echo wp_trim_words(get_the_content(), 80, '…'); ?>
                    </div>
                  </div>
                </a>
            <?php endwhile;
            endif; ?>
          </div>
          <div class="lower-blog__pagenavi">
            <?php wp_pagenavi(); ?>
          </div>
        </div>
        <div class="lower-blog__aside">
          <?php get_sidebar(); ?>
        </div>
      </div>
    </div>
  </section>

  <?php get_footer(); ?>