<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>PSYCHOFREAME WEBSHOP</title>
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <?php wp_head(); ?>
</head>

<body>

  <header class="">
    <div class="header-menu">
      <div class="">
        <div class="row no-gutters">
          <div class="d-flex">

            <a href="<?php bloginfo('url'); ?>">
              <div class="header-img col-3 ml-5 mr-5">
                <img src="<?php bloginfo('template_url'); ?>/images/header-logo_img.png" alt="mainlogo" height="71px" width="331px" />
            </a>
          </div>

          <div class="header-list col-9 d-flex">
            <div class="pr-5">
              <ul class="nav-menu-ul d-flex pt-4 px-5 ml-5 ">
                <li class="ml-4"><a href="<?php bloginfo('url'); ?>/about">ABOUT</a></li>
                <li class="ml-4"><a href="<?php bloginfo('url'); ?>/archive">PRODUCT</a></li>
                <li class="ml-4"><a href="<?php bloginfo('url'); ?>/contact">CONTACT</a></li>
                <li class="ml-4"><a href="<?php bloginfo('url'); ?>/faq">FAQ</a></li>
              </ul>
            </div>

            <div class="header-icon d-flex ml-5 col-3 pt-4 pl-5">

              <!-- <img src="<?php bloginfo('template_url'); ?>/images/search_icon.png" alt="search-icon" height="30" width="30"> -->

              <!-- <div id="wrap">
                <form action="" autocomplete="on">
                  <input id="search" name="search" type="text" placeholder="キーワード検索"><input id="search_submit" value="Rechercher" type="submit">
                </form>
              </div> -->



              <a href="" class="ml-4"><img src="<?php bloginfo('template_url'); ?>/images/account_icon.png" alt="login-icon" height="30" width="30" /></a>
              <a href="" class="ml-4"><img src="<?php bloginfo('template_url'); ?>/images/shopping-cart_icon.png" alt="coat" height="30" width="30" /></a>

            </div><!-- header-icon -->

          </div><!-- header-list -->
        </div><!-- row no-gutters -->
      </div>
    </div><!-- container end -->

    <div class="">
      <?php if (is_front_page()) : ?>
        <div class="header-mv">
          <div class="">
            <div class="row no-gutters">
              <div class="col px-0">
                <img src="<?php bloginfo('template_url'); ?>/images/MV-1.jpg" alt="main-mv" height="800px" width="1440px">
              </div>
            </div><!-- row no-gutters -->
          </div>
        </div><!-- header-mv end -->
      <?php endif; ?>
    </div>

  </header>

  <body>