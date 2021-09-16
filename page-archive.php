<?php get_header(); ?>

<main>



  <div class="ttl-h1">

    <div class="container">
      <div class="row">
        <h1>All Product<span class="ml-3">商品一覧</span></h1>
      </div>
    </div>
  </div>


  <div class="category-menu">
    <div class="container">
      <div class="row">
        <ul class="d-flex col-12">

          <li class="px-5 py-2 ml-5"><a href="<?php bloginfo('url'); ?>/archive">All</a></li>

          <li class="px-5 py-2 ml-5"><a href="<?php bloginfo('url'); ?>/tops">Tops</a></li>


          <li class="px-5 py-2 ml-5"><a href="<?php bloginfo('url'); ?>/bottom">Bottom</a>
            <Bottom</li>

          <li class="px-5 py-2 ml-5"><a href="<?php bloginfo('url'); ?>/headwear">Headwear</a></li>

          <li class="px-5 py-2 ml-5"><a href="<?php bloginfo('url'); ?>/other">other</a></li>

        </ul>
      </div>
    </div>
  </div>

  <div class="category-img">
    <div class="container">
      <div class="row">

        <div class="category-img-g d-flex justify-content-center">

          <div class="">

            <?php
            $args = array(
              'post_type' => 'product',
              'post_status' => 'publish',
              'posts_per_page' => 4
            );

            $my_query = new WP_Query($args);
            ?>

          </div><!-- category-img-g end-->

          <div class="category-img-g  d-flex justify-content-center">

            <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>

              <div class="col-3">
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a>
                <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                <P>価格</P>
              </div><!-- category-img-g end-->

              <div class="col-3">
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a>
                <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                <P>価格</P>
              </div><!-- category-img-g end-->

              <div class="col-3">
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a>
                <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                <P>価格</P>
              </div><!-- category-img-g end-->

              <div class="col-3">
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a>
                <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                <P>価格</P>
              </div><!-- category-img-g end-->

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