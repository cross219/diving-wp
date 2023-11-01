<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />
  <?php wp_head(); ?>
</head>

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


<body>
  <header class="header js-header">
    <div class="header__inner">
      <h1 class="header__logo logo">
        <a href="<?php echo $home; ?>" class="logo__link">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/logo.svg" alt="CodeUpsのロゴ" />
        </a>
      </h1>
      <button class="header__drawer hamburger js-hamburger">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <nav class="header__pc-nav pc-nav">
        <ul class="pc-nav__items">
          <li class="pc-nav__item">
            <a href="<?php echo $campaign; ?>" class="pc-nav__en">Campaign
              <span class="pc-nav__ja">キャンペーン</span>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo $about; ?>" class="pc-nav__en">About us
              <span class="pc-nav__ja">私たちについて</span>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo $information; ?>" class="pc-nav__en">Information
              <span class="pc-nav__ja">ダイビング情報</span>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo $blog; ?>" class="pc-nav__en">Blog
              <span class="pc-nav__ja">ブログ</span>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo $voice; ?>" class="pc-nav__en">Voice
              <span class="pc-nav__ja">お客様の声</span>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo $price; ?>" class="pc-nav__en">Price
              <span class="pc-nav__ja">料金一覧</span>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo $faq; ?>" class="pc-nav__en">FAQ
              <span class="pc-nav__ja">よくある質問</span>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo $contact; ?>" class="pc-nav__en">Contact
              <span class="pc-nav__ja">お問い合わせ</span>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </header>
  <div class="header__nav sp-nav js-drawer-menu">
    <div class="sp-nav__inner inner">
      <nav class="sp-nav__items drawer-menu js-drawer-menu">
        <ul class="drawer-menu__items">
          <li class="drawer-menu__item drawer-menu__item--section">
            <a href="<?php echo $campaign; ?>">キャンペーン</a>
          </li>
          <li class="drawer-menu__item">
            <a href="<?php echo $license; ?>">ライセンス取得</a>
          </li>
          <li class="drawer-menu__item">
            <a href="<?php echo $diving; ?>">ファンダイビング</a>
          </li>
          <li class="drawer-menu__item">
            <a href="<?php echo $experience; ?>">体験ダイビング</a>
          </li>
          <li class="drawer-menu__item drawer-menu__item--section">
            <a href="<?php echo $about; ?>">私たちについて</a>
          </li>
          <li class="drawer-menu__item drawer-menu__item--section">
            <a href="<?php echo $information; ?>">ダイビング情報</a>
          </li>
          <li class="drawer-menu__item">
            <a href="<?php echo $information; ?>?tabId=tab1">ライセンス講習</a>
          </li>
          <li class="drawer-menu__item">
            <a href="<?php echo $information; ?>?tabId=tab3">体験ダイビング</a>
          </li>
          <li class="drawer-menu__item">
            <a href="<?php echo $information; ?>?tabId=tab2">ファンダイビング</a>
          </li>
          <li class="drawer-menu__item site-nav__item--section">
            <a href="<?php echo $blog; ?>">ブログ</a>
          </li>
        </ul>
        <ul class="drawer-menu__items">
          <li class="drawer-menu__item drawer-menu__item--section">
            <a href="<?php echo $voice; ?>">お客様の声</a>
          </li>
          <li class="drawer-menu__item drawer-menu__item--section">
            <a href="<?php echo $price; ?>">料金一覧</a>
          </li>
          <li class="drawer-menu__item">
            <a href="<?php echo $price; ?>">ライセンス講習</a>
          </li>
          <li class="drawer-menu__item">
            <a href="<?php echo $price; ?>">体験ダイビング</a>
          </li>
          <li class="drawer-menu__item">
            <a href="<?php echo $price; ?>">ファンダイビング</a>
          </li>
          <li class="drawer-menu__item drawer-menu__item--section">
            <a href="<?php echo $faq; ?>">よくある質問</a>
          </li>
          <li class="drawer-menu__item drawer-menu__item--section">
            <a href="<?php echo $policy; ?>">プライバシー<br class="u-mobile" />
              ポリシー</a>
          </li>
          <li class="drawer-menu__item drawer-menu__item--section">
            <a href="<?php echo $terms; ?>">利用規約</a>
          </li>
          <li class="drawer-menu__item drawer-menu__item--section">
            <a href="<?php echo $sitemap; ?>">サイトマップ</a>
          </li>
          <li class="drawer-menu__item drawer-menu__item--section">
            <a href="<?php echo $contact; ?>">お問い合わせ</a>
          </li>
        </ul>
      </nav>
    </div>
  </div>