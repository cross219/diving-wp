<?php get_header(); ?>
<main>
  <!-- 下層ページのメインビュー -->
  <div class="sub-mv">
    <picture class="sub-mv__img">
      <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/contact-sub-mv_sp.jpg" media="(max-width: 768px)" />
      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/contact-sub-mv_pc.jpg" alt="黄色い熱帯魚2匹の写真" />
    </picture>
    <div class="sub-mv__title-box">
      <h2 class="sub-mv__title">Contact</h2>
    </div>
  </div>
  <!-- パンくず -->
  <?php get_template_part('parts/breadcrumb') ?>

  <section class="page-contact lower-bg page-contact-layout">
    <div class="page-contact__inner inner">
      <div class="page-contact__error js-error ">
        <p>
          ※必須項目が入力されていません。<br class="u-mobile" />入力してください。
        </p>
      </div>
      <div class="page-contact__content form">
        <?php echo do_shortcode('[contact-form-7 id="d11baca" title="お問い合わせ"]'); ?>
      </div>
    </div>
  </section>

  <?php get_footer(); ?>