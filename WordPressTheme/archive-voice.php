<?php get_header(); ?>
<main>
  <!-- 下層ページのメインビュー -->
  <div class="sub-mv">
    <picture class="sub-mv__img">
      <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/voice-sub-mv_sp.jpg" media="(max-width: 768px)" />
      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/voice-sub-mv_pc.jpg" alt="黄色い熱帯魚2匹の写真" />
    </picture>
    <div class="sub-mv__title-box">
      <h2 class="sub-mv__title">Voice</h2>
    </div>
  </div>
  <!-- パンくず -->
  <?php get_template_part('parts/breadcrumb') ?>
  <section class="archive-voice lower-bg archive-voice-layout">
    <div class="archive-voice__inner inner">
      <div class="archive-voice__tab tab">
        <!-- タブ部分 -->
        <ul class="tab__buttons">
          <li class="tab__button current-cat">
            <a href="<?php echo esc_url(get_post_type_archive_link('voice')); ?>">ALL</a>
          </li>
          <?php
          $taxonomy_terms = get_terms('voice_category', array('hide_empty' => false));
          foreach ($taxonomy_terms as $taxonomy_term) :
          ?>
            <li class="tab__button">
              <a href="<?php echo esc_url(get_term_link($taxonomy_term, 'voice_category')); ?>">
                <?php echo esc_html($taxonomy_term->name); ?>
              </a>
            </li>
          <?php endforeach; ?>
        </ul>
        <!-- コンテンツ -->
        <div class="tab__wrapper">
          <ul class="voice-cards">
            <?php if (have_posts()) :
              while (have_posts()) :
                the_post(); ?>
                <li class="vice-cards__item voice-card">
                  <div class="voice-card__upper">
                    <div class="voice-card__title-box">
                      <div class="voice-card__meta">
                        <?php
                        $voice_meta = get_field('voice-meta');
                        if ($voice_meta) :
                        ?>
                          <div class="voice-card__age">
                            <p><?php echo $voice_meta['voice-age'] ?></p>
                            <p>(<?php echo $voice_meta['voice-attribute'] ?>)</p>
                          </div>
                        <?php endif; ?>
                        <?php
                        $taxonomy_terms = get_the_terms($post->ID, 'voice_category');
                        if ($taxonomy_terms) : ?>
                          <div class="voice-card__category">
                            <?php echo $taxonomy_terms[0]->name; ?>
                          </div>
                        <?php endif; ?>
                      </div>
                      <h3 class="voice-card__title">
                        <?php the_title(); ?>
                      </h3>
                    </div>
                    <div class="voice-card__img animate-img js-colorbox">
                      <?php if (get_the_post_thumbnail()) : ?>
                        <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャッチ画像">
                      <?php else : ?>
                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/no-image.jpg" alt="no-mage">
                      <?php endif; ?>
                    </div>
                  </div>
                  <?php $content = get_field('content');
                  if ($content) : ?>
                    <div class="voice-card__text">
                      <?php echo $content; ?>
                    </div>
                  <?php endif; ?>
                </li>
            <?php endwhile;
            endif; ?>
          </ul>
        </div>
      </div>
      <!-- page-navi-->
      <div class="archive-voice__pagenavi">
        <?php wp_pagenavi(); ?>
      </div>
      <!-- page-navi-->
    </div>
  </section>
  <?php get_footer(); ?>