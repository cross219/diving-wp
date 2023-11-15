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
                    $prev_post = get_previous_post();
                    $next_post = get_next_post();

                    $prev_url = !empty($prev_post) ? esc_url(get_permalink($prev_post->ID)) : '';
                    $next_url = !empty($next_post) ? esc_url(get_permalink($next_post->ID)) : '';
                    ?>
                    <?php if (!empty($prev_post)) : ?>
                      <div class="page-link__prev">
                        <a href="<?php echo $prev_url; ?>"></a>
                      </div>
                    <?php endif; ?>
                    <?php if (!empty($next_post)) : ?>
                      <div class="page-link__next">
                        <a href="<?php echo $next_url; ?>"></a>
                      </div>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
            </div>
        <?php endwhile;
        endif; ?>
        <div class="lower-blog__aside">
          <?php get_sidebar(); ?>
        </div>
      </div>
    </div>
  </section>

  <?php get_footer(); ?>