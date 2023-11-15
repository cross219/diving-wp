<?php get_header(); ?>
<main>
  <!-- 下層ページのメインビュー -->
  <div class="sub-mv">
    <picture class="sub-mv__img">
      <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/price-sub-mv_sp.jpg" media="(max-width: 768px)" />
      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/price-sub-mv_pc.jpg" alt="黄色い熱帯魚2匹の写真" />
    </picture>
    <div class="sub-mv__title-box">
      <h2 class="sub-mv__title">Price</h2>
    </div>
  </div>
  <!-- パンくず -->
  <?php get_template_part('parts/breadcrumb') ?>

  <section class="page-price lower-bg page-price-layout">
    <div class="page-price__inner inner">
      <ul class="page-price__list-wrap">
        <?php
        $priceTable1 = SCF::get('price-table1');
        if ($priceTable1) : ?>
          <li class="page-price__list">
            <h3 class="page-price__heading"><span>ライセンス講習</span></h3>
            <dl class="page-price__content">
              <?php
              foreach ($priceTable1 as $priceItem1) :
                $course1 = esc_html($priceItem1['course1']);
                $price1 = esc_html($priceItem1['price1']);
              ?>
                <dt class="page-price__course">
                  <?php echo $course1; ?>
                </dt>
                <dd class="page-price__price"><?php echo $price1; ?></dd>
              <?php endforeach; ?>
            </dl>
          </li>
        <?php endif; ?>
        <?php
        $priceTable2 = SCF::get('price-table2');
        if ($priceTable2) : ?>
          <li class="page-price__list">
            <h3 class="page-price__heading"><span>体験ダイビング</span></h3>
            <dl class="page-price__content">
              <?php
              foreach ($priceTable2 as $priceItem2) :
                $course2 = esc_html($priceItem2['course2']);
                $price2 = esc_html($priceItem2['price2']);
              ?>
                <dt class="page-price__course">
                  <?php echo $course2; ?>
                </dt>
                <dd class="page-price__price"><?php echo $price2; ?></dd>
              <?php endforeach; ?>
            </dl>
          </li>
        <?php endif; ?>
        <?php
        $priceTable3 = SCF::get('price-table3');
        if ($priceTable3) : ?>
          <li class="page-price__list">
            <h3 class="page-price__heading"><span>ファンダイビング</span></h3>
            <dl class="page-price__content">
              <?php
              foreach ($priceTable3 as $priceItem3) :
                $course3 = esc_html($priceItem3['course3']);
                $price3 = esc_html($priceItem3['price3']);
              ?>
                <dt class="page-price__course">
                  <?php echo $course3; ?>
                </dt>
                <dd class="page-price__price"><?php echo $price3; ?></dd>
              <?php endforeach; ?>
            </dl>
          </li>
        <?php endif; ?>
        <?php
        $priceTable4 = SCF::get('price-table4');
        if ($priceTable4) : ?>
          <li class="page-price__list">
            <h3 class="page-price__heading">
              <span>スペシャルダイビング</span>
            </h3>
            <dl class="page-price__content">
              <?php foreach ($priceTable4 as $priceItem4) :
                $course4 = esc_html($priceItem4['course4']);
                $price4 = esc_html($priceItem4['price4']);
              ?>
                <dt class="page-price__course">
                  <?php echo $course4; ?>
                </dt>
                <dd class="page-price__price"><?php echo $price4; ?></dd>
              <?php endforeach; ?>
            </dl>
          </li>
        <?php endif; ?>
      </ul>
    </div>
  </section>
  <?php get_footer(); ?>