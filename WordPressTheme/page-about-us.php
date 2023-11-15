<?php get_header(); ?>
<main>
  <!-- 下層ページのメインビュー -->
  <div class="sub-mv">
    <picture class="sub-mv__img">
      <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/about-sub-mv_sp.jpg" media="(max-width: 768px)" />
      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/about-sub-mv_pc.jpg" alt="黄色い熱帯魚2匹の写真" />
    </picture>
    <div class="sub-mv__title-box">
      <h2 class="sub-mv__title">About us</h2>
    </div>
  </div>
  <!-- パンくず -->
  <?php get_template_part('parts/breadcrumb') ?>

  <section class="lower-about lower-bg lower-bg--about lower-about-layout">
    <div class="lower-about__inner inner">
      <div class="lower-about__container">
        <div class="lower-about__img-box">
          <div class="lower-about__img-left u-desktop">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/about-1.jpg" alt="シーサーの写真" />
          </div>
          <div class="lower-about__img-right">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/about-2.jpg" alt="熱帯魚の写真" />
          </div>
        </div>
        <div class="lower-about__contents">
          <p class="lower-about__catch">
            Dive into<br />
            the Ocean
          </p>
          <div class="lower-about__pc u-desktop">
            <p class="lower-about__text">
              ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
              ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
            </p>
          </div>
        </div>
      </div>
      <div class="lower-about__sp u-mobile">
        <p class="lower-about__text">
          ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
          ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
        </p>
      </div>
      <div class="lower-about__gallery gallery">
        <div class="gallery__inner">
          <div class="about__title section-title">
            <h2 class="section-title__en">Gallery</h2>
            <p class="section-title__ja">フォト</p>
          </div>
          <div class="gallery__container">
            <ul class="gallery__items">
              <?php
              $imgGroup = SCF::get('gallery_list');
              foreach ($imgGroup as $fields) :
                $imgurl = wp_get_attachment_image_src($fields['gallery_item'], 'full');
              ?>
                <li class="gallery__item js-modal">
                  <?php if (empty($fields['gallery_item'])) : ?>
                    <!-- 画像がない時はnoImg画像を表示 -->
                    <img src="<?php echo get_template_directory_uri(); ?>/img/noImage.jpg" alt="No Image">
                  <?php else : ?>
                    <!-- 画像がある時は画像を表示 -->
                    <img src="<?php echo esc_url($imgurl[0]); ?>" alt="ギャラリーの写真">
                  <?php endif; ?>
                </li>
              <?php endforeach; ?>
            </ul>
          </div>
          <div class="gallery__modal">
            <!-- モーダル内のコンテンツ -->
            <img src="" alt="ギャラリーの写真" class="gallery__modal-image" />
          </div>
          <!-- モーダル外のクリック領域 -->
          <div class="gallery__modal-overlay"></div>
        </div>
      </div>
    </div>
  </section>
  <?php get_footer(); ?>