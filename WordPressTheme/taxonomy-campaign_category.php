<?php get_header(); ?>
<main>
  <!-- 下層ページのメインビュー -->
  <div class="sub-mv">
    <picture class="sub-mv__img">
      <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign-sub-mv_sp.jpg" media="(max-width: 768px)" />
      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign-sub-mv_pc.jpg" alt="黄色い熱帯魚2匹の写真" />
    </picture>
    <div class="sub-mv__title-box">
      <h2 class="sub-mv__title">campaign</h2>
    </div>
  </div>
  <!-- パンくず -->
  <?php get_template_part('parts/breadcrumb') ?>

  <section class="lower-campaign lower-bg lower-campaign-layout">
    <div class="lower-campaign__inner inner">
      <div class="lower-campaign__tab tab">
        <!-- タブ部分 -->
        <?php
        $taxonomy_terms = get_terms('campaign_category', array('hide_empty' => false));
        if (!empty($taxonomy_terms) && !is_wp_error($taxonomy_terms)) :
        ?>
          <ul class="tab__buttons">
            <li class="tab__button current-cat">
              <a href="<?php echo esc_url(get_post_type_archive_link('campaign')); ?>">ALL</a>
            </li>
            <?php
            foreach ($taxonomy_terms as $taxonomy_term) :
            ?>
              <li class="tab__button">
                <a href="<?php echo esc_url(get_term_link($taxonomy_term, 'campaign_category')); ?>">
                  <?php echo esc_html($taxonomy_term->name); ?>
                </a>
              </li>
            <?php
            endforeach;
            ?>
          </ul>
        <?php
        endif;
        ?>
        <!-- コンテンツ -->
                <!-- コンテンツ -->
                <div class="tab__wrapper">
          <?php if (have_posts()) : ?>
            <ul class="tab__items">
              <?php while (have_posts()) :
                the_post(); ?>
                <li class="tab__item">
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
                      <h3 class="price-card__heading price-card__heading--lower">
                        <?php the_title(); ?>
                      </h3>
                    </div>
                    <div class="price-card__prices price-card__prices--lower">
                      <p class="price-card__text">全部コミコミ(お一人様)</p>
                      <div class="price-card__price-box">
                        <?php
                        $campaign_regular = get_field('campaign-price');
                        if ($campaign_regular['campaign-regular']) :
                        ?>
                          <p class="price-card__price">
                            <span class="price-card__price--redline">¥<?php echo $campaign_regular['campaign-regular'] ?></span>
                          </p>
                        <?php endif; ?>
                        <?php
                        $campaign_discount = get_field('campaign-price');
                        if ($campaign_discount['campaign-discount']) : ?>
                          <p class="price-card__discount">
                            ¥<?php echo $campaign_discount['campaign-discount']; ?>
                          </p>
                        <?php endif; ?>

                      </div>
                    </div>
                    <div class="price-card__pc u-desktop">
                      <?php $campaign_content = get_field('campaign-content');
                      if ($campaign_content) : ?>
                        <p class="price-card__description">
                          <?php echo $campaign_content; ?>
                        </p>
                      <?php endif; ?>
                      <div class="price-card__link-items">
                        <?php
                        $campaign_period = get_field('campaign-period');
                        if (!empty($campaign_period['campaign-start']) && !empty($campaign_period['campaign-end'])) :
                        ?>
                          <p class="price-card__period">
                            <?php echo $campaign_period['campaign-start']; ?>&nbsp;&#45;&nbsp;<?php echo $campaign_period['campaign-end']; ?>
                          </p>
                        <?php endif; ?>
                        <p class="price-card__contact">
                          ご予約・お問い合わせはコチラ
                        </p>
                        <div class="price-card__button">
                          <a href="<?php echo $contact; ?>" class="button">Contact us
                            <div class="button__arrow"></div>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
              <?php endwhile; ?>
            </ul>
          <?php endif; ?>
        </div>
        <!-- page-navi-->
        <div class="lower-campaign__pagenavi">
          <?php wp_pagenavi(); ?>
        </div>
        <!-- page-navi-->
      </div>
    </div>
  </section>
  <?php get_footer(); ?>