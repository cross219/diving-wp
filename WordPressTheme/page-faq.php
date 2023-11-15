<?php get_header(); ?>
<main>
  <!-- 下層ページのメインビュー -->
  <div class="sub-mv">
    <picture class="sub-mv__img">
      <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/faq-sub-mv_sp.jpg" media="(max-width: 768px)" />
      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/faq-sub-mv_pc.jpg" alt="黄色い熱帯魚2匹の写真" />
    </picture>
    <div class="sub-mv__title-box">
      <h2 class="sub-mv__title">FAQ</h2>
    </div>
  </div>

  <!-- パンくず -->
  <?php get_template_part('parts/breadcrumb') ?>

  <section class="page-faq lower-bg page-faq-layout">
    <div class="page-faq__inner inner">
      <?php
      $faqData = SCF::get_option_meta('faq-options', 'faq');
      if ($faqData) :
      ?>
        <ul class="page-faq__items">
          <?php
          foreach ($faqData as $faqItem) :
            $question = esc_html($faqItem['faq-q']);
            $answer = esc_html($faqItem['faq-a']);
          ?>
            <li class="page-faq__item faq">
              <div class="faq__summary js-faq">
                <?php echo $question; ?><span class="faq__icon"></span>
              </div>
              <p class="faq__content">
                <?php echo $answer; ?>
              </p>
            </li>
          <?php endforeach; ?>
        </ul>
      <?php else : ?>
        <div>公開までお持ちください</div>
      <?php endif; ?>
    </div>
  </section>

  <?php get_footer(); ?>