<?php get_header(); ?>
<main>
  <!-- 下層ページのメインビュー -->
  <div class="sub-mv">
    <picture class="sub-mv__img">
      <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/info-sub-mv_sp.jpg" media="(max-width: 768px)" />
      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/info-sub-mv_pc.jpg" alt="黄色い熱帯魚の写真" />
    </picture>
    <div class="sub-mv__title-box">
      <h2 class="sub-mv__title">Information</h2>
    </div>
  </div>

  <!-- パンくず -->
  <?php get_template_part('parts/breadcrumb') ?>
  

  <section class="lower-info lower-bg lower-bg--info lower-info-layout">
    <div class="lower-info__inner inner">
      <div class="lower-info__tab info-tab">
        <!-- タブ部分 -->
        <div class="info-tab__buttons">
          <button class="info-tab__button js-info-tab current" data-tab-id="tab1">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/lower-info-icon1.png" class="info-tab__icon u-desktop" alt="" />
            <div class="info-tab__text">
              ライセンス<br class="u-mobile" />講習
            </div>
          </button>
          <button class="info-tab__button js-info-tab" data-tab-id="tab2">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/lower-info-icon2.png" class="info-tab__icon u-desktop" alt="" />
            <div class="info-tab__text">
              ファン<br class="u-mobile" />ダイビング
            </div>
          </button>
          <button class="info-tab__button js-info-tab" data-tab-id="tab3">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/lower-info-icon3.png" class="info-tab__icon u-desktop" alt="" />
            <div class="info-tab__text">
              体験<br class="u-mobile" />ダイビング
            </div>
          </button>
        </div>
        <!--  ライセンス講習のコンテンツ -->
        <div class="info-tab__wrapper js-info-content current">
          <div class="lower-info__contents">
            <div class="lower-info__content">
              <h3 class="lower-info__heading">ライセンス講習</h3>
              <p class="lower-info__text">
                泳げない人も、ちょっと水が苦手な人も、ダイビングを「安全に」楽しんでいただけるよう、スタッフがサポートいたします！スキューバダイビングを楽しむためには最低限の知識とスキルが要求されます。知識やスキルと言ってもそんなに難しい事ではなく、安全に楽しむ事を目的としたものです。プロダイバーの指導のもと知識とスキルを習得しCカードを取得して、ダイバーになろう！
              </p>
            </div>
            <div class="lower-info__img animate-img js-colorbox">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/lower-info1.jpg" alt="ライセンス講習の写真" />
            </div>
          </div>
        </div>
        <!--  ファンダイビングのコンテンツ -->
        <div class="info-tab__wrapper js-info-content">
          <div class="lower-info__contents">
            <div class="lower-info__content">
              <h3 class="lower-info__heading">ファンダイビング</h3>
              <p class="lower-info__text">
                ブランクダイバー、ライセンスを取り立ての方も安心！沖縄本島を代表する「青の洞窟」（真栄田岬）やケラマ諸島などメジャーなポイントはモチロンのこと、最北端「辺戸岬」や最南端の「大渡海岸」等もご用意！
              </p>
            </div>
            <div class="lower-info__img animate-img js-colorbox">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/lower-info2.jpg" alt="ファンダイビングの写真" />
            </div>
          </div>
        </div>
        <!--  体験ダイビングのコンテンツ -->
        <div class="info-tab__wrapper js-info-content">
          <div class="lower-info__contents">
            <div class="lower-info__content">
              <h3 class="lower-info__heading">体験ダイビング</h3>
              <p class="lower-info__text">
                ブランクダイバー、ライセンスを取り立ての方も安心！沖縄本島を代表する「青の洞窟」（真栄田岬）やケラマ諸島などメジャーなポイントはモチロンのこと、最北端「辺戸岬」や最南端の「大渡海岸」等もご用意！
              </p>
            </div>
            <div class="lower-info__img animate-img js-colorbox">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/lower-info3.jpg" alt="体験ダイビングの写真" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php get_footer(); ?>