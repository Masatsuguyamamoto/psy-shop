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
        <h1>検索結果：<?php the_search_query(); ?></h1>
      </div>
    </div>
  </div>


  <div class="category-menu">
    <div class="container">
      <div class="row">
        <ul class="d-flex col-12">
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

  <form method="get" id="searchform" action="<?php echo esc_url(home_url('/')); ?>">
    <input type="text" class="field" name="s" id="s" onblur="if (value == '')  {value = 'Search...';}" onfocus="if (value == 'Search...') value = '';" />
    <input type="submit" class="btn btn-detail" name="submit" value="検索" />
  </form>


  <div></div>

  <?php
  global $query_string;
  query_posts($query_string . "&post_type=post");
  ?>
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
      <!-- キーワードに合った記事を表示させる処理 -->
      <div><a href="<?php the_permalink(); ?>"> <?php get_the_title(); ?> </a> </div>
      　　 <?php endwhile; ?>

  <?php else : ?>
    <!--  キーワードが見つからないときの処理 -->
    <p>キーワードはみつかりません。</p>
  <?php endif; ?>

</main>
<?php get_footer(); ?>