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
        <h1>Other</h1>
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
            'term' => 'other',
            'post_status' => 'publish',
            'posts_per_page' => 16,
          );

          $my_query = new WP_Query($args); ?>

          <?php while($my_query->have_posts()):
          $my_query->the_post(); ?>
          <div class="category-img-g-w">
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
            <a href="<?php the_permalink(); ?>"><h5><?php the_title(); ?></h5>
          </a>
          <p><?php echo get_post_meta(get_the_ID(),'price', true); ?><span>（税込）</span></p>
          </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        </div><!-- category-img-g end-->

      </div>
    </div>
  </div><!-- category-img end -->

  <!-- ここにページネーションを入れる -->
  <div class="page-nations">


  </div>

</main>
<?php get_footer(); ?>