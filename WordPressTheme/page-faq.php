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
      <!-- <ul class="page-faq__items">
        <?php
        $faq_q_key = 'faq-q';
        $faq_a_key = 'faq-a';
        $faq_data =  SCF::get('faq');
        if ($faq_data) {
          foreach ($faq_data as $faq) {
            $question = $faq[$faq_q_key];
            $answer = $faq[$faq_a_key];
        ?>
            <li class="page-faq__item faq">
              <div class="faq__summary js-faq">
                <?php echo esc_html($question); ?><span class="faq__icon"></span>
              </div>
              <p class="faq__content">
                <?php echo esc_html($answer); ?>
              </p>
            </li>
        <?php
          }
        }
        ?>
      </ul> -->
      <ul class="page-faq__items">
        <?php
        $faqData = SCF::get('faq');
        if ($faqData) {
          foreach ($faqData as $faqItem) {
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
        <?php
          }
        }
        ?>
      </ul>

    </div>
  </section>
  <?php get_footer(); ?>