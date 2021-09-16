<?php get_header(); ?>

<main>

  <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/" style="margin-left: 160px;">

    <?php if (function_exists('bcn_display')) {
      bcn_display();
    } ?>
  </div>

  <div class="ttl-h1">

    <div class="container">
      <div class="row">
        <h1>All Product<span class="ml-3">商品一覧</span></h1>
      </div>
    </div>
  </div>


  <div class="category-menu mt-5">
    <div class="container">
      <div class="row">
        <ul class="d-flex ">
          <a href="">
            <li class="px-5 py-2 ml-5">ALL</li>
          </a>
          <a href="">
            <li class="px-5 py-2 ml-5">Tops</li>
          </a>
          <a href="">
            <li class="px-5 py-2 ml-5">Bottom</li>
          </a>
          <a href="">
            <li class="px-5 py-2 ml-5">Headwear</li>
          </a>
          <a href="">
            <li class="px-5 py-2 ml-5">Other</li>
          </a>
        </ul>
      </div>
    </div>
  </div>



</main>
<?php get_footer(); ?>