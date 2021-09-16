<?php get_header(); ?>
<main>
  <article class="">
    <div class="">
      <div class="row no-gutters">
        <div class="about-image col-12">



          <img src="<?php bloginfo('template_url'); ?>/images/about-mv_img.jpg" alt="about-image" class="img-fluid about-img">

          <div class="about-h">

            <div class="breadcrumbs-about">

              <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/" style="margin-left: 160px;">

                <?php if (function_exists('bcn_display')) {
                  bcn_display();
                } ?>
              </div>
            </div>


            <p class="p-0">サイコフレーム</p>
            <h3 class="">PSYCHOFRAME<span>とは</span></h3>
            <p class="p-1">2013年、大阪 堺発。</p>
            <p class="p-2">流行りに左右されず、シンプルながらもあそび心のある衣服を </p>
            <p class="p-2">受注生産で発信していきます。</p>

          </div>
        </div>
      </div>
    </div>
  </article>
</main>


<?php get_footer(); ?>