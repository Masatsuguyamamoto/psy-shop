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

            <a href="<?php echo home_url(); ?>">
              <div class="header-img col-3 ml-5 mr-5">
                <img src="<?php echo get_template_directory_uri(); ?>/images/header-logo_img.png" alt="mainlogo" height="71px" width="331px" />
            </a>
          </div>

          <div class="header-list col-9 d-flex">
            <div class="pr-5">
              <ul class="nav-menu-ul d-flex pt-4 px-5 ml-5 ">

                <li class="ml-4"><a href="<?php echo home_url(); ?>/about">ABOUT</a></li>
                <li class="ml-4"><a href="<?php echo home_url(); ?>/items">PRODUCT</a></li>
                <li class="ml-4"><a href="<?php echo home_url(); ?>/contact">CONTACT</a></li>
                <li class="ml-4"><a href="<?php echo home_url(); ?>/faq">FAQ</a></li>
              </ul>
            </div>

            <div class="header-icon d-flex ml-5 col-3 pt-4 pl-5">

              <!-- <img src="<?php //echo get_template_directory_uri(); ?>/images/search_icon.png" alt="search-icon" height="30" width="30"> -->

              <div id="wrap">
                <form action="" autocomplete="on">
                  <input id="search" name="search" type="text" placeholder="キーワード検索"><input id="search_submit" value="Rechercher" type="submit">
                </form>
              </div>

              <div class="">
                <ul class="d-menu">
                  <li>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/account_icon.png" alt="coat" height="30" width="30" />

                    <ul class="">
                      <li><a href="">ログイン</a></li>
                      <li><a href="">新規会員登録</a></li>
                    </ul>

                  </li>
                </ul>
              </div>

              <a href="" class="ml-4"><img src="<?php echo get_template_directory_uri(); ?>/images/shopping-cart_icon.png" alt="coat" height="30" width="30" /></a>

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
                <img src="<?php echo get_template_directory_uri(); ?>/images/MV-1.jpg" alt="main-mv" height="800px" width="1440px">
              </div>
            </div><!-- row no-gutters -->
          </div>
        </div><!-- header-mv end -->
      <?php endif; ?>
    </div>

  </header>

  <body>