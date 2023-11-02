<?php get_header(); ?>

<?php
$home = esc_url(home_url('/'));
$campaign = esc_url(home_url('/campaign'));
$license = esc_url(home_url('/campaign_category/license/'));
$experience = esc_url(home_url('/campaign_category/experience/'));
$diving = esc_url(home_url('/campaign_category/diving/'));
$about = esc_url(home_url('/about/'));
$information = esc_url(home_url('/information/'));
$blog = esc_url(home_url('/blog/'));
$voice = esc_url(home_url('/voice/'));
$price = esc_url(home_url('/price/'));
$faq = esc_url(home_url('/faq/'));
$contact = esc_url(home_url('/contact/'));
$policy = esc_url(home_url('/privacypolicy/'));
$terms = esc_url(home_url('/terms-of-service/'));
$sitemap = esc_url(home_url('/sitemap/'));
?>

<main>
  <!-- 下層ページのメインビュー -->
  <div class="sub-mv">
    <picture class="sub-mv__img">
      <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/lower-sub-mv_sp.jpg" media="(max-width: 768px)" />
      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/lower-sub-mv_pc.jpg" alt="黄色い熱帯魚2匹の写真" />
    </picture>
    <div class="sub-mv__title-box">
      <h2 class="sub-mv__title">Site MAP</h2>
    </div>
  </div>

  <!-- パンくず -->
  <?php get_template_part('parts/breadcrumb') ?>


  <div class="page-sitemap lower-bg page-sitemap-layout">
    <div class="page-sitemap__inner inner">
      <nav class="page-sitemap__container">
        <ul class="page-sitemap__items">
          <li class="page-sitemap__item page-sitemap__item--section">
            <a href="<?php echo $campaign; ?>">キャンペーン</a>
          </li>
          <li class="page-sitemap__item">
            <a href="<?php echo $license; ?>">ライセンス講習</a>
          </li>
          <li class="page-sitemap__item">
            <a href="<?php echo $diving; ?>">ファンダイビング</a>
          </li>
          <li class="page-sitemap__item">
            <a href="<?php echo $experience; ?>">体験ダイビング</a>
          </li>
          <li class="page-sitemap__item page-sitemap__item--section page-sitemap__item--margin-sp page-sitemap__item--margin-pc">
            <a href="<?php echo $about; ?>">私たちについて</a>
          </li>
        </ul>

        <ul class="page-sitemap__items">
          <li class="page-sitemap__item page-sitemap__item--section page-sitemap__item--margin-sp">
            <a href="<?php echo $information; ?>">ダイビング情報</a>
          </li>
          <li class="page-sitemap__item">
            <a href="<?php echo $information; ?>?tabId=tab1">ライセンス講習</a>
          </li>
          <li class="page-sitemap__item">
            <a href="<?php echo $information; ?>?tabId=tab3">体験ダイビング</a>
          </li>
          <li class="page-sitemap__item">
            <a href="<?php echo $information; ?>?tabId=tab2">ファンダイビング</a>
          </li>
          <li class="page-sitemap__item page-sitemap__item--section page-sitemap__item--margin-sp page-sitemap__item--margin-pc">
            <a href="<?php echo $blog; ?>">ブログ</a>
          </li>
        </ul>

        <ul class="page-sitemap__items page-sitemap__items--right">
          <li class="page-sitemap__item page-sitemap__item--section">
            <a href="<?php echo $voice; ?>">お客様の声</a>
          </li>
          <li class="page-sitemap__item page-sitemap__item--section page-sitemap__item--margin-sp page-sitemap__item--margin-pc">
            <a href="<?php echo $price; ?>">料金一覧</a>
          </li>
          <li class="page-sitemap__item">
            <a href="<?php echo $price; ?>">ライセンス講習</a>
          </li>
          <li class="page-sitemap__item">
            <a href="<?php echo $price; ?>">体験ダイビング</a>
          </li>
          <li class="page-sitemap__item">
            <a href="<?php echo $price; ?>">ファンダイビング</a>
          </li>
        </ul>
        <ul class="page-sitemap__items page-sitemap__items--right">
          <li class="page-sitemap__item page-sitemap__item--section page-sitemap__item--margin--sp">
            <a href="<?php echo $faq; ?>">よくある質問</a>
          </li>
          <li class="page-sitemap__item page-sitemap__item--section page-sitemap__item--margin--sp page-sitemap__item--margin-pc">
            <a href="<?php echo $policy; ?>">プライバシー<br class="u-mobile" />
              ポリシー</a>
          </li>
          <li class="page-sitemap__item page-sitemap__item--section page-sitemap__item--margin--sp page-sitemap__item--margin-pc">
            <a href="<?php echo $terms; ?>">利用規約</a>
          </li>
          <li class="page-sitemap__item page-sitemap__item--section page-sitemap__item--margin--sp page-sitemap__item--margin-pc">
            <a href="<?php echo $sitemap; ?>">サイトマップ</a>
          </li>
          <li class="page-sitemap__item page-sitemap__item--section page-sitemap__item--margin--sp page-sitemap__item--margin-pc">
            <a href="<?php echo $contact; ?>">お問い合わせ</a>
          </li>
        </ul>
      </nav>
    </div>
  </div>
  <?php get_footer(); ?>