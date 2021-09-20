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
        <h1>Bottom</h1>
      </div>
    </div>
  </div>


  <div class="category-menu">
    <div class="container">
      <div class="row">
        <ul class="d-flex col-12">

          <li class="px-5 py-2 ml-5"><a href="<?php echo home_url(); ?>/items">All</a></li>

          <li class="px-5 py-2 ml-5"><a href="<?php echo home_url(); ?>/tops">Tops</a></li>

          <li class="px-5 py-2 ml-5"><a href="<?php echo home_url(); ?>/bottom">Bottom</a></li>

          <li class="px-5 py-2 ml-5"><a href="<?php echo home_url(); ?>/headwear">Headwear</a></li>

          <li class="px-5 py-2 ml-5"><a href="<?php echo home_url(); ?>/other">other</a></li>

        </ul>
      </div>
    </div>
  </div>

  <div class="category-img">
    <div class="container">
      <div class="row">

        <div class="category-img-g d-flex justify-content-center">

          <?php
          $args = array(
            'post_type' => 'product',
            'taxonomy' => 'product_cat',
            'field' => 'slug',
            'term' => 'bottom',
            'post_status' => 'publish',
            'posts_per_page' => 16,
          );
          ?>
          
          <?php $my_query = get_posts($args);
          if ($my_query) : ?>
            <?php foreach ($my_query as $post) : setup_postdata($post); ?>
              <p><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?><?php the_title(); ?></a></p>
            <?php endforeach; ?>
          <?php else : ?>
            <p>関連アイテムはまだありません。</p>
          <?php endif;
          wp_reset_postdata(); ?>
        </div><!-- category-img-g end-->

      </div>
    </div>
  </div><!-- category-img end -->

  <!-- ここにページネーションを入れる -->
  <div class="page-nations">


  </div>

</main>
<?php get_footer(); ?>