<?php get_header(); ?>




<main>
  <section class="news">
    <div class="container">
      <div class="row">
        <div class="col-12 mt-5">
          <div class="section-news">
            <h2 class="section-h2">News <span class="section-span">お知らせ</span></h2>


            <div class="c-1">
              <ul class="box_srcollbar">
                <li class="">2021/8/3<span class="">新商品３点追加しました。</span></li>
                <li class="">2021/8/3<span class="">8/12〜8/15は夏季休業のため、お問い合わせは8/16より順次返信させていただきます。</span></li>
                <li class="">2021/8/1<span class="">新商品2点追加しました。。</span></li>
                <li class="">2021/8/3<span class="">8/12〜8/15は夏季休業のため、お問い合わせは8/16より順次返信させていただきます。</span></li>
                <li class="">2021/7/4<span class="">新商品2点追加しました。</span></li>
                <li class="">2021/7/4<span class="">新商品2点追加しました。</span></li>
                <li class="">2021/6/2<span class="">新商品3点追加しました。</span></li>
                <li class="">2021/5/18<span class="">新商品3点追加しました。</span></li>
                <li class="">2021/4/29<span class="">5/2〜5/5はGW休業のために、お問い合わせは5/6より順次返信させていただきます</span></li>
              </ul>
            </div>
          </div><!-- section-news end -->
        </div>
      </div><!-- row end -->
    </div><!-- container end -->
  </section><!-- news end -->

  <section class="instagram">
    <div class="container">
      <div class="row">
        <div class="instagram-cont1 col-12 mt-5">
          <h2 class="section-h2">Instagram</h2>

          <div class="instagram-img d-flex mt-4">
            <?php echo do_shortcode('[instagram-feed]'); ?>
          </div><!-- instagram-img -->
        </div><!-- instagram-cont1 -->
      </div><!-- container end -->
  </section><!-- instagram end -->

  <div class="">
    <div class="container">
      <div class="row ">
        <div class="col-12">

          <div class="d-flex justify-content-center ">
            <a href="https://www.instagram.com/dodo1980614/">
              <button type="button" class="section-button ">read more</button>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>





  </div><!-- row end -->


  <section class="category">
    <div class="container">
      <div class="row">
        <div class="category-cont1">
          <h2 class="section-h2">Category<span class="section-span">カテゴリーから探す</span></h2>
          <div class="category-img d-flex mt-4">
            <a href="" class="col-3"><img src="<?php bloginfo('template_url'); ?>/images/top-category-tops_icon.png" alt="tops" class="" height="351" width="263"></a>
            <a href="" class="col-3"><img src="<?php bloginfo('template_url'); ?>/images/top-category-bottom_icon.png" alt="bottom" height="351" width="263"></a>
            <a href="" class="col-3"><img src="<?php bloginfo('template_url'); ?>/images/top-category-headwear_icon.png" alt="headwear" height="351" width="263"></a>
            <a href="" class="col-3"><img src="<?php bloginfo('template_url'); ?>/images/top-category-other_icon.png" alt="other" height="351" width="263"></a>
          </div>
        </div><!-- row end -->
      </div><!-- container end -->
  </section><!-- category end -->

  <section class="newarrival">
    <div class="container">
      <div class="row">
        <div class="newarrival-cont">
          <h2 class="section-h2">New Arrival<span class="section-span ml-2">新商品</span></h2>
          <div class="newarrival-img d-flex mt-4">
            <a href="" class="col-3"><img src="<?php bloginfo('template_url'); ?>/images/a52118bf55d791155b119b7af0a73db1.jpg" alt="商品" height="342" width="255"></a>

            <a href="" class="col-3"><img src="<?php bloginfo('template_url'); ?>/images/a52118bf55d791155b119b7af0a73db1.jpg" alt="商品" height="342" width="255"></a>

            <a href="" class="col-3"><img src="<?php bloginfo('template_url'); ?>/images/a91602ddb24df3269c05b892010e26ec.jpg" alt="商品" height="342" width="255"></a>

            <a href="" class="col-3"><img src="<?php bloginfo('template_url'); ?>/images/a91602ddb24df3269c05b892010e26ec.jpg" alt="商品" height="342" width="255"></a>
          </div>

          <div class="button-last">
            <div class="container">
              <div class="row ">
                <div class="col-12">

                  <div class="d-flex justify-content-center ">
                    <button type="button" class="section-button ">read more</button>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div><!-- row end -->
    </div><!-- container end -->
  </section><!-- newarrival end -->


</main>

<?php get_footer(); ?>