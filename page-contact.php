<?php get_header(); ?>


<main>
  <div class="mt-5 mb-5">
    <div class="container">
      <div class="row">
        <div class="col-12 ">
          <div class="d-flex justify-content-center">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile;
            endif; ?>



          </div>
        </div>
      </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>