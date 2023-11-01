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


<?php
// 404ページを判定
if (is_404()) {
  // 404ページの場合、コードを表示しない
} elseif (is_page('contact') || is_parent_slug() === ('contact')) {
  // contactページの場合、コードを表示しない
} else {
  // それ以外のページではコードを表示
?>
  <section class="contact top-contact">
    <div class="contact__inner inner">
      <div class="contact__wrapper">
        <div class="contact__info-box">
          <div class="contact__logo logo">
            <a href="<?php echo $home; ?>" class="logo__link">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/logo-green.png" alt="CodeUpsのロゴ" />
            </a>
          </div>
          <div class="contact__info">
            <address class="contact__address">
              沖縄県那覇市1-1<br />
              TEL:0120-000-0000<br />
              営業時間:8:30-19:00<br />
              定休日:毎週火曜日<br />
            </address>
            <div class="contact__map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d207447.05522075674!2d139.57572201316393!3d35.66813090635354!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188b857628235d%3A0xcdd8aef709a2b520!2z5p2x5Lqs6YO95p2x5Lqs!5e0!3m2!1sja!2sjp!4v1689557777754!5m2!1sja!2sjp" width="320" height="397" style="border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
        </div>
        <div class="contact__button-box">
          <div class="contact__title section-title">
            <h2 class="section-title__en section-title__en--large">
              Contact
            </h2>
            <p class="section-title__ja section-title__ja--large">
              お問い合わせ
            </p>
          </div>
          <p class="contact__text">ご予約・お問い合わせはコチラ</p>
          <div class="contact__button">
            <a href="<?php echo $contact; ?>" class="button">Contact us
              <div class="button__arrow"></div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php
}
?>


<div class="to-top">
  <a href="#top">
    <div class="to-top__arrow">
      <span class="to-top__line01"></span>
      <span class="to-top__line02"></span>
    </div>
  </a>
</div>
</main>
<footer class="footer <?php if (is_404()) echo ' footer--not-found'; ?>">
  <div class="footer__inner inner">
    <div class="footer__logos">
      <div class="footer__logo logo">
        <a href="<?php echo $home; ?>" class="logo__link">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/logo.png" alt="CodeUpsのロゴ" />
        </a>
      </div>
      <div class="footer__sns-items">
        <a href="https://www.facebook.com" target="_blank" class="footer__sns-item"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/facebook.svg" alt="facebookのリンク" /></a>
        <a href="https://www.instagram.com" target="_blank" class="footer__sns-item"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/instagram.svg" alt="instagramのリンク" /></a>
      </div>
    </div>
    <nav class="footer__nav site-nav">
      <div class="site-nav__items">
        <ul>
          <li class="site-nav__item site-nav__item--section">
            <a href="<?php echo $campaign; ?>">キャンペーン</a>
          </li>
          <li class="site-nav__item">
            <a href="" <?php echo $license; ?>">ライセンス講習</a>
          </li>
          <li class="site-nav__item">
            <a href="<?php echo $diving; ?>">ファンダイビング</a>
          </li>
          <li class="site-nav__item">
            <a href="<?php echo $experience; ?>">体験ダイビング</a>
          </li>
          <li class="site-nav__item site-nav__item--section">
            <a href="<?php echo $about; ?>">私たちについて</a>
          </li>
        </ul>
        <ul>
          <li class="site-nav__item site-nav__item--section">
            <a href="<?php echo $information; ?>">ダイビング情報</a>
          </li>
          <li class="site-nav__item">
            <a href="<?php echo $information; ?>?tabId=tab1">ライセンス講習</a>
          </li>
          <li class="site-nav__item">
            <a href="<?php echo $information; ?>?tabId=tab3">体験ダイビング</a>
          </li>
          <li class="site-nav__item">
            <a href="<?php echo $information; ?>?tabId=tab2">ファンダイビング</a>
          </li>
          <li class="site-nav__item site-nav__item--section">
            <a href="<?php echo $blog; ?>">ブログ</a>
          </li>
        </ul>
      </div>
      <div class="site-nav__items">
        <ul>
          <li class="site-nav__item site-nav__item--section">
            <a href="<?php echo $voice; ?>">お客様の声</a>
          </li>
          <li class="site-nav__item site-nav__item--section">
            <a href="<?php echo $price; ?>">料金一覧</a>
          </li>
          <li class="site-nav__item">
            <a href="<?php echo $price; ?>">ライセンス講習</a>
          </li>
          <li class="site-nav__item">
            <a href="<?php echo $price; ?>">体験ダイビング</a>
          </li>
          <li class="site-nav__item">
            <a href="<?php echo $price; ?>">ファンダイビング</a>
          </li>
        </ul>
        <ul>
          <li class="site-nav__item site-nav__item--section">
            <a href="<?php echo $faq; ?>">よくある質問</a>
          </li>
          <li class="site-nav__item site-nav__item--section">
            <a href="<?php echo $policy; ?>">プライバシー<br class="u-mobile" />
              ポリシー</a>
          </li>
          <li class="site-nav__item site-nav__item--section">
            <a href="<?php echo $terms; ?>">利用規約</a>
          </li>
          <li class="site-nav__item site-nav__item--section">
            <a href="<?php echo $sitemap; ?>">サイトマップ</a>
          </li>
          <li class="site-nav__item site-nav__item--section">
            <a href="<?php echo $contact; ?>">お問い合わせ</a>
          </li>
        </ul>
      </div>
    </nav>
    <div class="footer__copyright">
      Copyright &copy; 2021 - 2023 CodeUps LLC. All Rights Reserved.
    </div>
  </div>
  <?php wp_footer(); ?>
</footer>
</body>

</html>