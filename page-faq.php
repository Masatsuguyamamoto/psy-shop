<?php get_header(); ?>

<main>

  <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
    <?php if (function_exists('bcn_display')) {
      bcn_display();
    } ?>
  </div>

  <div class="ttl-h1">
    <div class="container">
      <div class="row">
        <h1>FAQ<span class="">よくあるご質問</span></h1>
      </div>
    </div>
  </div>


  <div class="faq">
    <div class="container">
      <div class="row">
        <div class="faq-menu col-12 d-flex justify-content-start">

          <dl class="faq-dl">
            <dt class="faq-dt d-flex align-items-center">
              <h3 class="faq-h3 ">Q.</h3><span class="faq-span">注文してからいつ届きますか？</span>
            </dt>
            <dd class="faq-dd">
              <div class="faq-dd-dd d-flex  align-items-center">
                <h3 class="faq-h3-a">A.</h3><span class="faq-span-A">すべての商品はご注文いただいてからの生産になります。<br>
                  そのため、ご注文いただいてから、約三週間後の発送となります。</span>
              </div>
            </dd>

            <dt class="faq-dt d-flex align-items-center">
              <h3 class="faq-h3 ">Q.</h3><span class="faq-span"><span class="faq-span">注文したあとでキャンセル、また届いた商品の返品はできますか？</span>
            </dt>
            <dd class="faq-dd">
              <div class="faq-dd-dd d-flex  align-items-center">
                <h3 class="faq-h3-a">A.</h3><span class="faq-span-A">お客様都合による、ご注文完了後のキャンセル、変更、返品は一切承ってありません。<br>
                  内容をよくご確認の上、ご注文ください。<br>
                  不良品の場合は、お手数をおかけしますがお問い合わせフォームより詳細をお知らせ<br>
                  頂き、対応させて頂きます。</span>
              </div>
            </dd>

            <dt class="faq-dt d-flex align-items-center">
              <h3 class="faq-h3 ">Q.</h3><span class="faq-span">ギフトラッピングをしてもらうことはできますか？</span>
            </dt>
            <dd class="faq-dd">
              <div class="faq-dd-dd d-flex  align-items-center">
                <h3 class="faq-h3-a">A.</h3><span class="faq-span-A">申し訳ございませんが、ギフトラッピングサービスは行っておりませんのでご了承くださ<br>
                  い。</span>
              </div>
            </dd>

            <dt class="faq-dt d-flex align-items-center">
              <div class="faq-dd-dd d-flex  align-items-center">
                <h3 class="faq-h3 ">Q.</h3><span class="faq-span">支払方法は何がありますか？</span>
            </dt>
            <dd class="faq-dd">
              <div class="faq-dd-dd d-flex  align-items-center">
                <h3 class="faq-h3-a">A.</h3><span class="faq-span-A">お支払い方法はクレジットカード、代金引換、コンビニ前払い、銀行振り込みからお選びいただ<br>
                  けます。</span>
              </div>
            </dd>

            <dt class="faq-dt d-flex align-items-center">
              <h3 class="faq-h3 ">Q.</h3><span class="faq-span">配送方法について、配送業者や日時指定はできますか？</span>
            </dt>
            <dd class="faq-dd">
              <div class="faq-dd-dd d-flex  align-items-center">
                <h3 class="faq-h3-a">A.</h3>
                <span class="faq-span-A">配送業者はヤマト運輸のみになります。<br>
                  配送時にお送りする発送のお知らせメールにクロネコヤマトのお問い合わせ伝票番号を記<br>
                  載しております。<br>
                  配送日時指定は承っておりませんので、クロネコメンバーズ登録による、配送のお知らせ<br>
                  メールや不在票に記載されるクロネコヤマトのお問合せ伝票番号を利用し、日時指定・<br>
                  再配達をご利用ください。</span>
              </div>
            </dd>
          </dl>

          <script>
            jQuery(function($) {
              $(".faq-dt").on("click", function() {
                $(this).next().slideToggle();
              });
            });
          </script>


        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-12 d-flex justify-content-center">
        <a href="<?php echo home_url(); ?>/contact" class="faq-button">
          <img src="<?php bloginfo('template_url'); ?>/images/mail-white_icon.png" alt="メール">
          お問い合わせはこちらから
        </a>
      </div>
    </div>
  </div>


</main>
<?php get_footer(); ?>