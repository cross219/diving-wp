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
$pricepage = esc_url(home_url('/price/'));
$faq = esc_url(home_url('/faq/'));
$contact = esc_url(home_url('/contact/'));
$policy = esc_url(home_url('/privacypolicy/'));
$terms = esc_url(home_url('/terms-of-service/'));
$sitemap = esc_url(home_url('/sitemap/'));
?>

<main>
  <section class="fv">
    <div class="fv__inner">
      <div class="fv__images">
        <!-- Swiper -->
        <div class="swiper js-fv-swiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <picture class="fv__img">
                <source srcset="<?php the_field('mv-sp1'); ?>" media="(max-width: 768px)" />
                <img src="<?php the_field('mv-pc1'); ?>" alt="" />
              </picture>
            </div>
            <div class="swiper-slide">
              <picture class="fv__img">
                <source srcset="<?php the_field('mv-sp2'); ?>" media="(max-width: 768px)" />
                <img src="<?php the_field('mv-pc2'); ?>" alt="" />
              </picture>
            </div>
            <div class="swiper-slide">
              <picture class="fv__img">
                <source srcset="<?php the_field('mv-sp3'); ?>" media="(max-width: 768px)" />
                <img src="<?php the_field('mv-pc3'); ?>" alt="" />
              </picture>
            </div>
            <div class="swiper-slide">
              <picture class="fv__img">
                <source srcset="<?php the_field('mv-sp4'); ?>" media="(max-width: 768px)" />
                <img src="<?php the_field('mv-pc4'); ?>" alt="" />
              </picture>
            </div>



          </div>
        </div>
        <div class="fv__title-box">
          <h2 class="fv__main-title">diving</h2>
          <p class="fv__sub-title">into the ocean</p>
        </div>
      </div>
    </div>
  </section>
  <section class="campaign top-campaign">
    <div class="campaign__inner inner">
      <div class="campaign__title section-title">
        <h2 class="section-title__en">Campaign</h2>
        <p class="section-title__ja">キャンペーン</p>
      </div>
      <div class="campaign__items price-cards swiper js-campaign-swiper">
        <?php
        $args = [
          'post_type' => 'campaign',
          'posts_per_page' => 10
        ];
        $the_query = new WP_Query($args); ?>
        <?php if ($the_query->have_posts()) : ?>
          <div class="swiper-wrapper price-cards__items">
            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
              <div class="swiper-slide price-cards__item">
                <div class="price-card">
                  <div class="price-card__img">
                    <?php if (get_the_post_thumbnail()) : ?>
                      <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャッチ画像">
                    <?php else : ?>
                      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/no-image.jpg" alt="no-mage">
                    <?php endif; ?>
                  </div>
                  <div class="price-card__container">
                    <?php
                    $taxonomy_terms = get_the_terms($post->ID, 'campaign_category');
                    if ($taxonomy_terms) : ?>
                      <div class="price-card__category"><?php echo $taxonomy_terms[0]->name; ?></div>
                    <?php endif; ?>
                    <h3 class="price-card__heading"><?php the_title(); ?></h3>
                  </div>
                  <div class="price-card__prices">
                    <p class="price-card__text">全部コミコミ(お一人様)</p>
                    <div class="price-card__price-box">
                      <div class="price-card__price">
                        <span class="price-card__price--redline"><?php $text = get_field('redline');
                                                                  if ($text) {
                                                                    echo $text;
                                                                  } ?></span>
                      </div>
                      <div class="price-card__discount"><?php $text = get_field('discount');
                                                        if ($text) {
                                                          echo $text;
                                                        } ?></div>
                    </div>
                  </div>
                </div>
              </div>
            <?php endwhile; ?>
          </div>
          <?php wp_reset_postdata(); ?>
        <?php endif; ?>
      </div>
      <div class="campaign-swiper__button-box">
        <div class="campaign-swiper__button-prev"></div>
        <div class="campaign-swiper__button-next"></div>
      </div>
      <div class="campaign__button">
        <a href="<?php echo $campaign; ?>" class="button">View more<span class="button__arrow"></span></a>
      </div>
    </div>
  </section>
  <section class="about top-about">
    <div class="about__inner inner">
      <div class="about__title section-title">
        <h2 class="section-title__en">About us</h2>
        <p class="section-title__ja">私たちについて</p>
      </div>
      <div class="about__container">
        <div class="about__img-box">
          <div class="about__img-left">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/about-1.jpg" alt="シーサーの写真" />
          </div>
          <div class="about__img-right">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/about-2.jpg" alt="熱帯魚の写真" />
          </div>
        </div>
        <div class="about__contents">
          <p class="about__catch">
            Dive into<br />
            the Ocean
          </p>
          <div class="about__text-box">
            <p class="about__text">
              ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
              ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
            </p>
            <div class="about__button">
              <a href="<?php echo $about; ?>" class="button">View more<span class="button__arrow"></span></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="info top-info">
    <div class="info__inner inner">
      <div class="info__title section-title">
        <h2 class="section-title__en">Information</h2>
        <p class="section-title__ja">ダイビング情報</p>
      </div>
      <div class="info__contents">
        <div class="info__img animate-img js-colorbox">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/info.jpg" alt="熱帯魚の写真" />
        </div>
        <div class="info__content">
          <h3 class="info__heading">ライセンス講習</h3>
          <p class="info__text">
            当店はダイビングライセンス（Cカード）世界最大の教育機関PADIの「正規店」として店舗登録されています。<br />
            正規登録店として、安心安全に初めての方でも安心安全にライセンス取得をサポート致します。
          </p>
          <div class="info__button">
            <a href="<?php echo $information; ?>" class="button">View more<span class="button__arrow"></span></a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="blog top-blog">
    <div class="blog__inner inner">
      <div class="blog__title section-title">
        <h2 class="section-title__en section-title__en--white">Blog</h2>
        <p class="section-title__ja section-title__ja--white">ブログ</p>
      </div>
      <?php
      $args = array(
        'post_type' => 'post',
        'posts_per_page' => 3
      );
      $the_query = new WP_Query($args); ?>
      <?php if ($the_query->have_posts()) : ?>
        <div class="blog__items blog-cards">
          <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <a href="<?php the_permalink(); ?>" class="blog-cards__item blog-card">
              <div class="blog-card__img">
                <?php if (get_the_post_thumbnail()) : ?>
                  <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャッチ画像">
                <?php else : ?>
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/no-image.jpg" alt="no-mage">
                <?php endif; ?>
              </div>
              <div class="blog-card__container">
                <div class="blog-card__meta">
                  <time class="blog-card__date" datetime="<?php the_time('c'); ?>"><?php the_time('Y.m/d'); ?></time>
                  <div class="blog-card__title"><?php the_title(); ?></div>
                </div>
                <p class="blog-card__text">
                  <?php echo wp_trim_words(get_the_content(), 85, '…'); ?>
                </p>
              </div>
            </a>
          <?php endwhile; ?>
        </div>
        <?php wp_reset_postdata(); ?>
      <?php endif; ?>
      <div class="blog__button">
        <a href="<?php echo $blog; ?>" class="button">View more<span class="button__arrow"></span></a>
      </div>
    </div>
  </section>

  <section class="voice top-voice">
    <div class="voice__inner inner">
      <div class="voice__title section-title">
        <h2 class="section-title__en">Voice</h2>
        <p class="section-title__ja">お客様の声</p>
      </div>
      <?php
      $args = array(
        'post_type'  => 'voice',
        'posts_per_page' => 2,
        'orderby' => 'rand'
      );
      $the_query = new WP_Query($args);
      ?>

      <?php if ($the_query->have_posts()) : ?>
        <div class="voice__items voice-cards">
          <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <div class="voice-cards__item voice-card">
              <div class="voice-card__upper">
                <div class="voice-card__title-box">
                  <div class="voice-card__meta">
                    <div class="voice-card__age"><?php $text = get_field('age');
                                                  if ($text) {
                                                    echo $text;
                                                  } ?></div>
                    <?php
                    $taxonomy_terms = get_the_terms($post->ID, 'voice_category');
                    if ($taxonomy_terms) : ?>
                      <div class="voice-card__category"><?php echo $taxonomy_terms[0]->name; ?></div>
                    <?php endif; ?>
                  </div>
                  <div class="voice-card__title">
                    <?php the_title(); ?>
                  </div>
                </div>
                <div class="voice-card__img animate-img js-colorbox">
                  <?php if (get_the_post_thumbnail()) : ?>
                    <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャッチ画像">
                  <?php else : ?>
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/no-image.jpg" alt="no-mage">
                  <?php endif; ?>
                </div>
              </div>
              <p class="voice-card__text">

                <?php
                $voice_text = get_field('content');
                if (mb_strlen($voice_text, 'UTF-8') > 200) {
                  $voice_text = mb_substr($voice_text, 0, 200, 'UTF-8');
                  echo $voice_text . '…';
                } else {
                  echo $voice_text;
                }
                ?>
              </p>
            </div>
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
        <?php endif; ?>
        </div>
        <div class="voice__button">
          <a href="<?php echo $voice; ?>" class="button">View more<span class="button__arrow"></span></a>
        </div>
    </div>
  </section>

  <section class="price top-price">
    <div class="price__inner inner">
      <div class="price__title section-title">
        <h2 class="section-title__en">Price</h2>
        <p class="section-title__ja">料金一覧</p>
      </div>
      <div class="price__sp-img u-mobile animate-img js-colorbox">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/price_sp.jpg" alt="サンゴ礁の写真" />
      </div>
      <div class="price__container">
        <div class="price__contents">
          <div class="price__content price-table">
            <h3 class="price-table__heading">ライセンス講習</h3>
            <dl class="price-table__content">
              <?php
              $priceTable = SCF::get('price-table1', 118);
              if ($priceTable) {
                foreach ($priceTable as $priceItem) {
                  $course = esc_html($priceItem['course1']);
                  $price = esc_html($priceItem['price1']);
              ?>
                  <dt class="price-table__course">
                    <?php echo $course; ?>
                  </dt>
                  <dd class="price-table__price"><?php echo $price; ?></dd>
              <?php
                }
              }
              ?>
            </dl>
          </div>
          <div class="price__content price-table">
            <h3 class="price-table__heading">体験ダイビング</h3>
            <dl class="price-table__content">
              <?php
              $priceTable = SCF::get('price-table2', 118);
              if ($priceTable) {
                foreach ($priceTable as $priceItem) {
                  $course = esc_html($priceItem['course2']);
                  $price = esc_html($priceItem['price2']);
              ?>
                  <dt class="price-table__course">
                    <?php echo $course; ?>
                  </dt>
                  <dd class="price-table__price"><?php echo $price; ?></dd>
              <?php
                }
              }
              ?>
            </dl>
          </div>
          <div class="price__content price-table">
            <h3 class="price-table__heading">ファンダイビング</h3>
            <dl class="price-table__content">
              <?php
              $priceTable = SCF::get('price-table3', 118);
              if ($priceTable) {
                foreach ($priceTable as $priceItem) {
                  $course = esc_html($priceItem['course3']);
                  $price = esc_html($priceItem['price3']);
              ?>
                  <dt class="price-table__course"><?php echo $course; ?></dt>
                  <dd class="price-table__price"><?php echo $price; ?></dd>
              <?php
                }
              }
              ?>
            </dl>
          </div>
          <div class="price__content price-table">
            <h3 class="price-table__heading">スペシャルダイビング</h3>
            <dl class="price-table__content">
              <?php
              $priceTable = SCF::get('price-table4', 118);
              if ($priceTable) {
                foreach ($priceTable as $priceItem) {
                  $course = esc_html($priceItem['course4']);
                  $price = esc_html($priceItem['price4']);
              ?>
                  <dt class="price-table__course"><?php echo $course; ?></dt>
                  <dd class="price-table__price"><?php echo $price; ?></dd>
              <?php
                }
              }
              ?>
            </dl>
          </div>
        </div>
        <div class="price__pc-img u-desktop animate-img js-colorbox">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/price_pc.jpg" alt="" />
        </div>
      </div>
      <div class="price__button">
        <a href="<?php echo $pricepage; ?>" class="button">View more<span class="button__arrow"></span></a>
      </div>
    </div>
  </section>
  <?php get_footer(); ?>