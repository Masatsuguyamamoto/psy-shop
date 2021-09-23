<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

<script src="<?php echo get_template_directory_uri(); ?>/main.js"></script>
</body>

<footer>
  <div class="footer-menu">
    <div class="pt-5">
      <div class="row no-gutters">
        <div class="col-4 ">
          <div class="d-flex justify-content-center">
            <a href="<?php echo home_url(); ?>">
              <img src="<?php echo get_template_directory_uri(); ?>/images/header-logo_img.png" alt="mainlogo" height="71px" width="331px" />
            </a>
          </div>

          <div class="d-flex justify-content-center">
            <p>&copy;PSYCHOFREAME</p>
          </div>
        </div>

        <div class="col-2">
          <ul class="footer-ul">
            <li class="ml-4"><a href="<?php echo home_url(); ?>/about">ABOUT</a></li>
            <li class="ml-4 mt-3"><a href="<?php echo home_url(); ?>/items">PRODUCT</a></li>
            <li class="ml-4 mt-3"><a href="<?php echo home_url(); ?>/contact">CONTACT</a></li>
            <li class="ml-4 mt-3"><a href="<?php echo home_url(); ?>/faq">FAQ</a></li>
          </ul>
        </div>

        <div class="col-2">
          <ul class="footer-ul">
            <li class="ml-4"><a href="">利用規約</a></li>
            <li class="ml-4 mt-3"><a href="">プライバシーポリシー</a></li>
            <li class="ml-4 mt-3"><a href="">特定商取引について</a></li>
          </ul>
        </div>


        <div class="col-4 d-flex justify-content-center">
          <img src="<?php echo get_template_directory_uri(); ?>/images/instagram_icon.png" alt="インスタグラムロゴ" height="29" width="29">
          <p class="ml-2">Instagram</p>
        </div>

      </div><!-- row -->
    </div>
  </div><!-- footer-menu end -->
</footer>

<?php wp_footer(); ?>


</html>