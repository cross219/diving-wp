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



  <section class="page-thanks lower-bg page-contact-layout">
    <div class="page-thanks__inner inner">
      <div class="page-thanks__body">
        <h3 class="page-thanks__title">
          お問い合わせ内容を送信完了しました。
        </h3>
        <p class="page-thanks__text">
          このたびは、お問い合わせ頂き<br class="u-mobile" />誠にありがとうございます。<br />
          お送り頂きました内容を確認の上、<br class="u-mobile" />
          3営業日以内に折り返しご連絡させて頂きます。<br />
          また、ご記入頂いたメールアドレスへ、<br class="u-mobile" />
          自動返信の確認メールをお送りしております。
        </p>
      </div>
    </div>
  </section>

  <?php get_footer(); ?>