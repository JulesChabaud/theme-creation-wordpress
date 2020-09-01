
<?php
  get_header();
 ?>

<section class="julio_frontPagePresentation">

  <div class="julio_containerFrontPageMain">

    <img class="julio-image-frontpage img-fluid img-header" src="<?php echo header_image() ?>" alt="image header">

    <div class="julio_frontPageTitle">
      <h2><span class="julio-title-layer1"><?php newSloganWp() ?></h2>
    </div>

  </div>



</section>

<section class="julio_sectionArticlesFront">

  <div class="julio_containerArticlesFront">

      <?php
        $my_query = new WP_Query('category_name=front&showposts=3');
        while ($my_query->have_posts()) : $my_query->the_post();
        $do_not_duplicate = $post->ID;
      ?>

    <div class="julio_frontArticle">
      <h3><?php the_title() ?></h3>
      <p><?php the_excerpt() ?></p>
      <img src="<?php the_post_thumbnail_url() ?>" alt="">
    </div>

      <?php endwhile; ?>

  </div>

</section>



  <?php
    get_footer();
   ?>
