<?php
$campaign = esc_url(home_url('/campaign/'));
$blog = esc_url(home_url('/blog/'));
$voice = esc_url(home_url('/voice/'));
$contact = esc_url(home_url('/contact/'));
?>

<aside class="aside">
  <div class="aside__items">
    <div class="aside__item">
      <div class="aside__article aside-article">
        <div class="aside-article__title aside-title">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/aside-icon.png" class="aside-title__icon" alt=""></img>
          <h2 class="aside-title__text">人気記事</h2>
        </div>
        <div class="aside-article__items">
          <?php

          setPostViews(get_the_ID());


          $args = array(
            'post_type' => 'post',
            'posts_per_page' => 3,

            // 必須 ここから
            'orderby' => 'meta_value_num',
            'meta_key' => 'post_views_count'
            // 必須 ここまで

          );
          $the_query = new WP_Query($args);
          ?>
          <?php if ($the_query->have_posts()) : ?>
            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
              <a href="<?php the_permalink(); ?>" class="aside-article__item">
                <figure class="aside-article__img">
                  <?php if (get_the_post_thumbnail()) : ?>
                    <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャッチ画像">
                  <?php else : ?>
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/no-image.jpg" alt="no-mage">
                  <?php endif; ?>
                </figure>
                <div class="aside-article__body">
                  <time class="blog-card__date" datetime="<?php the_time('c'); ?>"><?php the_time('Y.m/d'); ?></time>
                  <h3 class="aside-article__title"><?php the_title(); ?></h3>
                </div>
              </a>
            <?php endwhile; ?>
          <?php endif; ?>
          <?php wp_reset_postdata(); ?>
        </div>
      </div>
    </div>
    <div class="aside__item">
      <div class="aside__voice aside-voice">
        <div class="aside-voice__title aside-title">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/aside-icon.png" class="aside-title__icon" alt=""></img>
          <h2 class="aside-title__text">口コミ</h2>
        </div>
        <div class="aside-voice__items">
          <?php $recent_query = new WP_Query(
            array(
              'post_type' => 'voice',
              'posts_per_page' => 1,
              'orderby' => 'date',
              'order' => 'DESC',
            )
          );
          ?>
          <?php if ($recent_query->have_posts()) : ?>
            <?php while ($recent_query->have_posts()) : ?>
              <?php $recent_query->the_post(); ?>
              <div class="aside-voice__item">
                <?php if (get_the_post_thumbnail()) : ?>
                  <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャッチ画像">
                <?php else : ?>
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/no-image.jpg" alt="no-mage">
                <?php endif; ?>
                <p class="aside-voice__age">
                  <?php $text = get_field('age');
                  if ($text) {
                    echo $text;
                  } ?></p>
                <h3 class="aside-voice__title"><?php the_title(); ?></h3>
              </div>
            <?php endwhile; ?>
          <?php endif; ?>
          <?php wp_reset_postdata(); ?>
        </div>
        <div class="aside-voice__button">
          <a href="<?php echo $voice; ?>" class="button">View more<span class="button__arrow"></span></a>
        </div>
      </div>
    </div>
    <div class="aside__item">
      <div class="aside__campaign aside-campaign">
        <div class="aside-campaign__title aside-title">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/aside-icon.png" class="aside-title__icon" alt=""></img>
          <h2 class="aside-title__text">キャンペーン</h2>
        </div>
        <div class="aside-campaign__items">
          <?php $recent_query = new WP_Query(
            array(
              'post_type' => 'campaign',
              'posts_per_page' => 2,
              'orderby' => 'date',
              'order' => 'DESC',
            )
          );
          ?>
          <?php if ($recent_query->have_posts()) : ?>
            <?php while ($recent_query->have_posts()) : ?>
              <?php $recent_query->the_post(); ?>
              <div class="aside-campaign__item price-card">
                <div class="price-card__img price-card__img--blog">
                  <?php if (get_the_post_thumbnail()) : ?>
                    <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャッチ画像">
                  <?php else : ?>
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/no-image.jpg" alt="no-mage">
                  <?php endif; ?>
                </div>
                <div class="price-card__container price-card__container--blog">
                  <h3 class="price-card__heading ">
                    <?php the_title(); ?>
                  </h3>
                </div>
                <div class="price-card__prices price-card__prices--blog">
                  <p class="price-card__text price-card__text--blog">全部コミコミ(お一人様)</p>
                  <div class="price-card__price-box price-card__price-box--blog">
                    <div class="price-card__price price-card__price--blog">
                      <span class="price-card__price--redline"><?php $redline = get_field('redline');
                                                                if ($redline) {
                                                                  echo $redline;
                                                                } ?></span>
                    </div>
                    <div class="price-card__discount price-card__discount--blog"><?php $discount = get_field('discount');
                                                                                  if ($discount) {
                                                                                    echo $discount;
                                                                                  } ?></div>
                  </div>
                </div>
              </div>
            <?php endwhile; ?>
          <?php endif; ?>
          <?php wp_reset_postdata(); ?>


        </div>
        <div class="aside-campaign__button">
          <a href="<?php echo $campaign; ?>" class="button">View more<span class="button__arrow"></span></a>
        </div>
      </div>
    </div>
    <div class="aside__item">
      <div class="aside__archive aside-archive">
        <div class="aside-archive__title aside-title">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/aside-icon.png" class="aside-title__icon" alt=""></img>
          <h2 class="aside-title__text">アーカイブ</h2>
        </div>
        <div class="aside__archive--container">
          <ul class="toggle">
            <?php
            // 現在の年を取得
            $current_year = date('Y');
            // 過去3年分のアーカイブをループで処理
            for ($year = $current_year; $year >= $current_year - 2; $year--) {
              // この年のアーカイブページへのリンクを取得
              $archive_link = get_year_link($year);
              // クエリの設定
              $args = array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'date_query' => array(
                  array(
                    'year' => $year,
                  ),
                ),
              );
              // クエリを実行
              $query = new WP_Query($args);
              // 記事が存在する場合の処理
              if ($query->have_posts()) {
                // この年が現在の年かどうかを判定
                $is_current_year = ($year === $current_year);
            ?>
                <li class="toggle__list js-toggle">
                  <p class="toggle__year js-toggle--year">
                    <span><?php echo $year; ?></span>
                  </p>
                  <ul class="toggle__items">
                    <?php
                    // 各月ごとにアーカイブを処理
                    for ($month = 12; $month >= 1; $month--) {
                      // この月のアーカイブページへのリンクを取得
                      $archive_link = get_month_link($year, $month);
                      // クエリの設定
                      $args = array(
                        'post_type' => 'post',
                        'post_status' => 'publish',
                        'date_query' => array(
                          array(
                            'year' => $year,
                            'month' => $month,
                          ),
                        ),
                      );
                      // クエリを実行
                      $query = new WP_Query($args);
                      // 記事が存在する場合の処理
                      if ($query->have_posts()) {
                        // 月のラベルを生成
                        $month_label = date('n月', mktime(0, 0, 0, $month, 1, $year)); // 記事数を取得
                        $post_count = $query->found_posts;
                    ?>
                        <li class="toggle__item">
                          <a href="<?php echo $archive_link; ?>">
                            <p class="toggle__month">
                              <span><?php echo $month_label; ?></span>
                              (<?php echo $post_count; ?>)
                              <!-- 記事数を表示 -->
                            </p>
                          </a>
                        </li>
                    <?php
                      }
                    }
                    ?>
                  </ul>
                </li>
            <?php
              }
            }
            ?>
          </ul>
        </div>
      </div>
    </div>
  </div>

</aside>