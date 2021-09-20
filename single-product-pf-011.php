<?php get_header(); ?>


<main>

  <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
    <?php if (function_exists('bcn_display')) {
      bcn_display();
    } ?>
  </div>


  <section class="category-menu mt-5">
    <div class="container">
      <div class="">
        <div class="d-flex">

          <div class=" col-6">
            <div id="slider_wrap">
              <?php
              echo do_shortcode('[smartslider3 slider="12"]');
              ?>
            </div>
          </div>

          <div class="category-info col-5 ">
            <h2 class="category-info-h2">PSYCHO LongsleeveTshirt　PF-011</h2>
            <h3 class="mt-4">¥4,500<span class="category-info-span">（税込）</span></h3>
            <p class="mt-4">カラーを選択して下さい</p>
            <p id="text mt-4">ホワイト</p>
            <div class="d-flex mt-4">
              <img src="<?php echo get_template_directory_uri(); ?>/images/922f2cb6674eb74ef2ad9375a6b47259.jpg" alt="ホワイト" id="category-img-1" height="100" width="100">
              <img src="<?php echo get_template_directory_uri(); ?>/images/3cc983ef72d1a304c556ef908ad4e7e3.jpg" alt="ブラック" class="ml-3" height="100" width="100">
              <img src="<?php echo get_template_directory_uri(); ?>/images/991d5de2656e668ec3b08eaed7600b7f.jpg" alt="グレー" class="ml-3" height="100" width="100">

            </div>

            <div class="">
              <p class="mt-4">サイズを選択して下さい</p>
              <p class="mt-4">選んだサイズを表記</p>
            </div>

            <div class="d-flex mt-4">
              <p class="ml-2">S</p>
              <p class="ml-2">M</p>
              <p class="ml-2">L</p>
              <p class="ml-2">XL</p>
            </div>

            <div class="item-cart">
              <a href="" class="faq-button ">
                <img src="<?php echo get_template_directory_uri(); ?>/images/shopping-cart_icon.png" alt="カートアイコン" 　class="px-2">
                カートに入れる
              </a>
            </div>

            <div class="mt-4">
              <a href="" class="">
                <img src="<?php echo get_template_directory_uri(); ?>/images/review-check.png" alt="レビューアイコン">
                カートに入れる
              </a>
            </div>

            <div class="mt-4">
              <a href="" class="">
                <img src="<?php echo get_template_directory_uri(); ?>/images/review-write.png" alt="レビューペンアイコン">
                商品レビューを見る<span class="">2件</span>
              </a>
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
              <img src="<?php echo get_template_directory_uri(); ?>/images/single-size-2_img.png" alt="サイズ表３" height="420" width="475" style="margin-top: 50px;">
            </div>
          </div>

          <script>

          </script>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="mt-3">
                <p class="">写真の光加減やご覧いただく環境により色味が異なる場合がございます。</p>
              </div>
            </div>
          </div>
        </div>


        <div class="mt-5">
          <div class="container ">
            <div class="row">
              <div class="">
                <p class="">商品番号<span class="">: PF-011</span></p>
                <p class="">素材<span class="">: 綿100%</span></p>
                <p class="">配送予定日<span class="">: ご注文より約３週間</span></p>
              </div>
            </div>
          </div>



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