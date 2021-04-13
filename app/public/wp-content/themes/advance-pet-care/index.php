<?php

/**
 * The template for displaying home page.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package advance-pet-care
 */
get_header(); ?>

<main role="main" id="maincontent" class="our-services">
  <div class="" style="background-size: 100% 100%; height:550px; background-image: url(<?php echo get_theme_file_uri('/images/elephants.jpg') ?>);">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-4">

        </div>
        <div class="col-lg-4 col-md-4">
          <div class="logo">
            <?php if (has_custom_logo()) : ?>
              <div class="site-logo text-center"><?php the_custom_logo(); ?></div>
            <?php endif; ?>
            <?php $blog_info = get_bloginfo('name'); ?>
            <?php if (!empty($blog_info)) : ?>
              <?php if (get_theme_mod('advance_pet_care_site_title', true) != '') { ?>
                <?php if (is_front_page() && is_home()) : ?>
                  <h1 class="site-title text-center mb-0"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home">Hakuna Matata Zoo</a></h1>
                <?php else : ?>
                  <p class="site-title text-center mb-0"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home">Hakuna Matata Zoo</a></p>
                <?php endif; ?>
              <?php } ?>
            <?php endif; ?>
            <?php
            $description = get_bloginfo('description', 'display');
            if ($description || is_customize_preview()) :
            ?>
              <?php if (get_theme_mod('advance_pet_care_tagline', true) != '') { ?>
                <p class="site-description text-center mb-md-0 mb-2">
                  <?php echo esc_html($description); ?>
                </p>
              <?php } ?>
            <?php endif; ?>
          </div>
        </div>

      </div>
    </div>
  </div>



  <div class="innerlightbox">
    <div class="container">
      <div class="mt-5">
        <div class="row mt-5 mb-5" style="background-color:green;">
          <div class="col-lg-4 col-md-4 ml-0 pl-0">
            <div class="" style="background-size: 100% 100%; height:300px; background-image: url(<?php echo get_theme_file_uri('/images/iguana.png') ?>);">
            </div>
          </div>
          <div class="col-lg-4 col-md-4" style="color:white; text-align:center;">
            Get to Know Each Animal at our ZOO
          </div>
          <div class="col-lg-4 col-md-4 mr-0 pr-0">
            <div class="" style="background-size: 100% 100%; height:300px; background-image: url(<?php echo get_theme_file_uri('/images/tiger3.png') ?>);">
            </div>
          </div>
        </div>

        <div class="row mt-5 mb-5">
          <div class="col-lg-4 col-md-4 ml-0 pl-0">
            View Phots taken at the zoo
          </div>
          <div class="col-lg-8 col-md-8" style="color:white; text-align:center;">

            <div class="" style="background-size: 100% 100%; height:300px; background-image: url(<?php echo get_theme_file_uri('/images/photo.png') ?>);">
            </div>
          </div>
        </div>

        <div class="row mt-5 mb-5">
          <div class="col-lg-4 col-md-4">
            <div class="" style="background-size: 100% 100%; height:300px; background-image: url(<?php echo get_theme_file_uri('/images/events-animal.png') ?>);">
            </div>
          </div>

          <div class="col-lg-8 col-md-8">
            Click Here To See upcoming events
          </div>
        </div>
        <div class="row mt-5 mb-5">

          <div class="col-lg-6 col-md-6">
            Come Learn More About Animals
          </div>
          <div class="col-lg-4 col-md-4">
            <div class="" style="background-size: 100% 100%; height:300px; background-image: url(<?php echo get_theme_file_uri('/images/learn-animal.png') ?>);">
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</main>

<?php get_footer(); ?>