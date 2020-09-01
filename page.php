<?php get_header(); ?>

<section class="julio_containerPresPage">

  <div class="julio_titlePresPage">
    <h3><?php the_title() ?></h3>
  </div>

  <div class="julio_contentPresPage">
    <p><?php the_content() ?></p>
  </div>

</section>


<section>

  <?php
    $my_query = new WP_Query('category_name=coucou&showposts=1');
    while ($my_query->have_posts()) : $my_query->the_post();
    $do_not_duplicate = $post->ID;
  ?>

  <div class="">
    <h3><?php the_title() ?></h3>
    <p><?php the_content() ?></p>
  </div>
</section>



<?php endwhile; ?>


<?php get_footer(); ?>
