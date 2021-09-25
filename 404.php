<?php get_header(); ?>
<main>

  <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/" style="margin-left: 160px;">

    <?php if (function_exists('bcn_display')) {
      bcn_display();
    } ?>
  </div>

  <div class="div-img d-flex justify-content-center">
    <div class="container">
      <div class="row">
        <div class="col-12 d-flex justify-content-center">

          <img src="<?php echo get_template_directory_uri(); ?>/images/404_img.png" alt="404" class="">
        </div>
      </div>
    </div>
  </div>

  <div class="">
    <div class="container">
      <div class="row">

        <div class="col-2">

        </div>
        <div class="col-8 p-0">
          <div class=" ">
            <h2 class="error-h2">
              ページが見つかりません。
            </h2>
          </div>
        </div>

        <div class="col-2">

        </div>

      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-2"></div>
      <div class="d-flex justify-content-center">
        <p class="error-p">
          申し訳ございません。<br>
          お探しのページが見つかりませんでした。<br>
          アドレスが変更されているか、ページが削除されている可能性があります。
        </p>
      </div>
      <div class="col-2"></div>
    </div>
  </div>



  <div class=" d-flex justify-content-center">
    <a href="<?php bloginfo('url'); ?> " class="error-button1 d-flex">
      <img src="<?php echo get_template_directory_uri(); ?>images/home_icon (1).png" alt="ホーム">
      トップページへ戻る
    </a>
  </div>

  <div class="d-flex justify-content-center">


    <a href="<?php echo $_SERVER['HTTP_REFERER']; ?>" class="error-button2 d-flex">
      <img src="<?php echo get_template_directory_uri(); ?>images/chevron-left-white_icon (2).png" alt="＜">
      前のページへ戻る
    </a>
  </div>




</main>
<?php get_footer(); ?>