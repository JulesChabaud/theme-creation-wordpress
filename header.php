
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="">

  <?php
    wp_head();
   ?>

  </head>
  <body>

    <section class="julio_header">
      <div class="julio_container-1stRow">
        <div class="julio_burgerMenu">

          <div id="julio_burgerMenuOpen" class="julio_burgerMenuOpenOpacityOpen" onclick="ouvrir()">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/burger-menu.svg" alt="burger-menu">
              </div>

              <div id="julio_burgerMenuClose" class="julio_burgerMenuOpenOpacityClose" onclick="fermer()">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/close-icon.svg" alt="close icon">
              </div>

              <nav class="mobile-menu" id="moui">

                  <?php echo wp_nav_menu( array( 'theme_location' => 'side-menu' ) ) ?>

              </nav>


        </div>

        <div class="julio_logo">
          <?php
          if(function_exists('the_custom_logo')){
            $custom_logo_id = get_theme_mod('custom_logo');
            $logo = wp_get_attachment_image_src($custom_logo_id);

          }
           ?>
          <img src="<?php echo $logo[0] ?>" alt="logo">
        </div>

        <div class="julio_title">
          <h1><?php bloginfo('name') ?></h1>
        </div>



        <div class="julio_CTA">
          <button onclick="location.href='#'" type="button">
         Break the ice</button>
        </div>

      </div>
    </section>
