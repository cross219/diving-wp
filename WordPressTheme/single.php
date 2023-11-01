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

  <section class="lower-blog lower-bg single-layout">
    <div class="lower-blog__inner inner">
      <div class="lower-blog__contents">
        <?php if (have_posts()) :
          while (have_posts()) :
            the_post(); ?>
            <div class="lower-blog__content single-body">
              <div class="single-body__meta">
                <time class="blog-card__date" datetime="<?php the_time('c'); ?>"><?php the_time('Y.m/d'); ?></time>
              </div>
              <h3 class="single-body__title"><?php the_title(); ?></h3>
              <div class="single-body__wrapper">
                <div class="single-body__img">
                  <?php if (get_the_post_thumbnail()) : ?>
                    <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャッチ画像">
                  <?php else : ?>
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/no-image.jpg" alt="no-mage">
                  <?php endif; ?>
                </div>
                <div class="single-body__content">
                  <?php the_content(); ?>
                </div>
              </div>
              <div class="single-body__page-link page-link">
                <div class="page-link__inner">
                  <div class="page-link__flex">
                    <?php
                    $prev = get_previous_post();
                    if (!empty($prev)) {
                      $prev_url = esc_url(get_permalink($prev->ID));
                    }
                    $next = get_next_post();
                    if (!empty($next)) {
                      $next_url = esc_url(get_permalink($next->ID));
                    }
                    ?>
                    <div class="page-link__prev">
                      <?php if (!empty($prev)) : ?>
                        <a href="<?php echo $prev_url; ?>"></a>
                      <?php endif; ?>
                    </div>
                    <div class="page-link__next">
                      <?php if (!empty($next)) : ?>
                        <a href="<?php echo $next_url; ?>">
                        </a>
                      <?php endif; ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        <?php endwhile;
        endif; ?>

        <aside class="lower-blog__aside aside">
          <?php get_sidebar(); ?>
        </aside>
      </div>
    </div>
  </section>

  <?php get_footer(); ?>