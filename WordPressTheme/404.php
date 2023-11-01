<?php get_header(); ?>
<main>
  <div class="not-found-layout"></div>
  <!-- パンくず -->
  <div class="breadcrumb breadcrumb--white breadcrumb--not-found">
    <div class="inner">
      <?php get_template_part('parts/breadcrumb') ?>
    </div>
  </div>
  <section class="not-found">
    <div class="not-found__inner inner">
      <div class="not-found__body">
        <h3 class="not-found__title">404</h3>
        <p class="not-found__text">
          申し訳ありません。<br />
          お探しのページが見つかりません。
        </p>
        <div class="not-found__button">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="button button--accent">Page TOP<span class="button__arrow button__arrow--accent"></span></a>
        </div>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>