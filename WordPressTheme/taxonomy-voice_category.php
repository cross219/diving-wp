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
          <li class="tab__button ">
            <a href="<?php echo esc_url(get_post_type_archive_link('voice')); ?>">ALL</a>
          </li>
          <?php
          $taxonomy_terms = get_terms('voice_category', array('hide_empty' => false));
          $current_category_id = get_queried_object_id(); // 現在のカテゴリーのIDを取得

          foreach ($taxonomy_terms as $taxonomy_term) :
            $term_id = $taxonomy_term->term_id;
            $term_url = esc_url(get_term_link($term_id, 'voice_category'));
            $current_class = ($term_id === $current_category_id) ? ' current-cat' : '';
          ?>
            <li class="tab__button<?php echo $current_class; ?>">
              <a href="<?php echo $term_url; ?>">
                <?php echo esc_html($taxonomy_term->name); ?>
              </a>
            </li>
          <?php endforeach; ?>
        </ul>
        <!-- コンテンツ -->
        <div class="tab__wrapper ">
          <ul class="voice-cards">
            <?php if (have_posts()) :
              while (have_posts()) :
                the_post(); ?>
                <li class="vice-cards__item voice-card">
                  <div class="voice-card__upper">
                    <div class="voice-card__title-box">
                      <div class="voice-card__meta">
                        <?php $age = get_field('age');
                        if ($age) : ?>
                          <div class="voice-card__age">
                            <?php echo $age ?>
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
                  <?php $text = get_field('content');
                  if ($text) : ?>
                    <div class="voice-card__text">
                      <?php echo $text; ?>
                    </div>
                  <?php endif; ?>
                </li>
            <?php endwhile;
            endif; ?>
          </ul>
        </div>
        <div class="archive-voice__pagenavi">
          <?php wp_pagenavi(); ?>
        </div>
      </div>
  </section>
  <?php get_footer(); ?>