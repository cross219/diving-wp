<?php get_header(); ?>

<main>
  <!-- 下層ページのメインビュー -->
  <div class="sub-mv">
    <picture class="sub-mv__img">
      <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/lower-sub-mv_sp.jpg" media="(max-width: 768px)" />
      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/lower-sub-mv_pc.jpg" alt="黄色い熱帯魚2匹の写真" />
    </picture>
    <div class="sub-mv__title-box">
      <h2 class="sub-mv__title">Privacy Policy</h2>
    </div>
  </div>

  <!-- パンくず -->
  <?php get_template_part('parts/breadcrumb') ?>


  <section class="page-privacypolicy lower-bg page-privacypolicy-layout">
    <div class="page-privacypolicy__inner inner">
      <?php if (have_posts()) :
        while (have_posts()) :
          the_post(); ?>
          <div class="page-privacypolicy__body">
            <h3 class="page-privacypolicy__title"><?php the_title(); ?></h3>
            <div class="page-privacypolicy__content">
              <?php the_content(); ?>
            </div>
          </div>
      <?php endwhile;
      endif; ?>
    </div>
  </section>

  <?php get_footer(); ?>