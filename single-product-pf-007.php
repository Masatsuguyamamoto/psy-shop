<?php get_header(); ?>


<main>

  <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/" style="margin-left: 160px;">

    <?php if (function_exists('bcn_display')) {
      bcn_display();
    } ?>
  </div>


  <section class="category-menu mt-5">
    <div class="container">
      <div class="">
        <div class="d-flex">
          <div class=" col-6">

            <div class="slider_wrap">
              <?php
              echo do_shortcode('[smartslider3 slider="8"]');
              ?>
            </div>
          </div>

          <div class="category-info col-6 ">
            <h2 class="category-info-h2">RAINBOW Tshirt PF-007</h2>
            <h3 class="mt-4">¥3,500<span class="category-info-span">（税込）</span></h3>
            <p class="mt-4">カラーを選択して下さい</p>
            <p id="text mt-4">ブラック</p>
            <div class="d-flex mt-4">
              <img src="<?php bloginfo('template_url'); ?>/images/fb8aabc0e9e9a2d6e643276d058ab9ef.jpg
" alt="ブラック" id="category-img-1" height="100" width="100">
              <img src="<?php bloginfo('template_url'); ?>/images/bb56ef02a276d60336148cb839723901.jpg" alt="ホワイト" class="ml-3" height="100" width="100">
              <img src="<?php bloginfo('template_url'); ?>/images/0149bf2eb3be2cb22765be8b15438421.jpg" alt="ミントブルー" class="ml-3" height="100" width="100">

            </div>

            <div class="">
              <p class="mt-4">サイズを選択して下さい</p>
              <p class="mt-4">選んだサイズを表記</p>
            </div>

            <div class="d-flex mt-4">
              <p class="">120</p>
              <p class="ml-2">140</p>
              <p class="ml-2">S</p>
              <p class="ml-2">M</p>
              <p class="ml-2">L</p>
              <p class="ml-2">XL</p>
            </div>

            <div class="item-cart">
              <a href="" class="faq-button ">
                <img src="<?php bloginfo('template_url'); ?>/images/shopping-cart_icon.png" alt="カートアイコン" 　class="px-2">
                カートに入れる
              </a>
            </div>

            <div class="mt-4">
              <a href="" class="">
                <img src="<?php bloginfo('template_url'); ?>/images/review-check.png" alt="レビューアイコン">
                カートに入れる
              </a>
            </div>

            <div class="mt-4">
              <a href="" class="">
                <img src="<?php bloginfo('template_url'); ?>/images/review-write.png" alt="レビューペンアイコン">
                商品レビューを見る<span class="">2件</span>
              </a>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section><!-- category-menu end -->

  <article class="explanation mt-5">
    <div class="container">
      <div class="row">

        <div class="col-12">
          <div class="article-div d-flex">
            <div class="article-p-1 ">
              <button id="fuu" class="secList">アイテム説明</button>
            </div>

            <div class="article-p-1 ml-5">
              <button id="euu" class="secList">アイテムサイズ</button>
            </div>
          </div>
        </div>

        <div class="article-div2">
          <div class="fuu section">
            <!-- <p class="article-p" style="line-height: 3;">商品説明が入ります。商品説明が入ります。商品説明が入ります。商品説明が入ります。商品説明が入ります。商品説明が入ります。商品説明が入ります。商品説明が入ります。商品説明が入ります。商品説明が入ります。商品説明が入ります。商品説明が入ります。商品説明が入ります。商品説明が入ります。商品説明が入ります。商品説明が入ります。商品説明が入ります。</p>
          </div> -->

            <div class="euu section">
              <img src="<?php bloginfo('template_url'); ?>/images/single-size-1_img.png" alt="サイズ表３" height="420" width="475" style="margin-top: 50px;">
            </div>
          </div>

          <script>

          </script>
        </div>

        <div class="mt-3">
          <p class="">写真の光加減や、、ご覧いただく環境により、ご覧いただく環境により色味が異なる場合がございます。</p>
        </div>
        <div class="container">
          <div class="row">
            <div class="">
              <p class="">商品番号<span class="">: PF-007</span></p>
              <p class="">素材<span class="">: 綿100%</span></p>
              <p class="">配送予定日<span class="">: ご注文より約３週間</span></p>
            </div>
          </div>
        </div>
        <div class="mt-3">

        </div>


      </div>
  </article><!-- explanation end -->

  <section class="group-item mt-5">
    <div class="container">
      <div class="row">
        <div class="">

          <div class="">
            <h2 class="group-item-h2">関連アイテム</h2>
          </div>

          <div class="group-item-img d-flex">



            <!-- <div class="col-3 group-item-img-img">
              <img src="<?php bloginfo('template_url'); ?>/images/250x350.png" alt="関連商品写真"  >
              <p class="group-item-p">商品名</p>
              <p class="group-item-p2">値段<span class="">（税込）</span></p>
            </div>

            <div class="col-3 group-item-img-img">
              <img src="<?php bloginfo('template_url'); ?>/images/250x350.png" alt="関連商品写真">
              <p class="group-item-p">商品名</p>
              <p class="group-item-p2">値段<span class="">（税込）</span></p>
            </div>

            <div class="col-3 group-item-img-img">
              <img src="<?php bloginfo('template_url'); ?>/images/250x350.png" alt="関連商品写真">
              <p class="group-item-p">商品名</p>
              <p class="group-item-p2">値段<span class="">（税込）</span></p>
            </div>

            <div class="col-3 group-item-img-img">
              <img src="<?php bloginfo('template_url'); ?>/images/250x350.png" alt="関連商品写真">
              <p class="group-item-p">商品名</p>
              <p class="group-item-p2">値段<span class="">（税込）</span></p>
            </div> -->

          </div>
        </div>
      </div>
    </div>
  </section><!-- group-item end -->


</main>

<?php get_footer(); ?>