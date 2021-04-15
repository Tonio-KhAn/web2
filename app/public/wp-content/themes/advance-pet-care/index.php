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
pageBanner();
get_header(); ?>

<main role="main" id="maincontent" class="our-services">
  <div class="innerlightbox">
    <div class="container">
      <div class="mt-5">
        <div class="row mt-5 mb-5" style="background-color:green;">
          <div class="col-lg-4 col-md-4 ml-0 pl-0">
            <div class="" style="background-size: 100% 100%; height:300px; background-image: url(<?php echo get_theme_file_uri('/images/iguana.png') ?>);">
            </div>
          </div>
         
          <div class="col-lg-4 col-md-4" style="color:white; text-align:center;">
            <h5 style=" display:initial; color:white;">Get to Know Each Animal at our ZOO</h5> 
            <div class="row mt-3">
          
            
            <?php
            
            $animalposts = new WP_Query(array(
                'posts_per_page' => 3,
                'post_type' => 'animal'
                
            ));

            while($animalposts->have_posts()){ // tied to the default query used
              $animalposts->the_post();?>
              <div class="col-lg-4 col-md-4 ml-0 pl-0">
              <a class=""  href="<?php the_permalink();?>">
              <h3 style="display:initial; color:white;"><?php the_title(); ?></h3> 
              <div class="mt-2" style="width:120px; height:120px;margin:auto; border-radius:10px;")>
              <?php the_post_thumbnail('themeImage');?>
              </div>
            </a></div>
            <?php  }
              
          ?>
          </div>
          <div class="row mt-4"> 
          <a class="" style="margin: auto;" href="animals/"><h3 style="display:initial ; color:white;"> Click Here To See More</h3></a>
          </div>
          </div>
          <div class="col-lg-4 col-md-4 mr-0 pr-0">
            <div class="" style="background-size: 100% 100%; height:300px; background-image: url(<?php echo get_theme_file_uri('/images/tiger3.png') ?>);">
           
          </div>
          </div>
        </div>

        <div class="row mt-5 mb-5">
          <div class="col-lg-4 col-md-4">
            <div class="" style="background-size: 100% 100%; height:300px; background-image: url(<?php echo get_theme_file_uri('/images/events-animal.png') ?>);">
            </div>
          </div>
          <div class="col-lg-8 col-md-8">
          <a class="" href="events/"><h3> Click Here To See upcoming events</h3></a>
           <div class="row mt-5 mb-5">
          <?php
            
            $eventposts = new WP_Query(array(
                'posts_per_page' => 3,
                'post_type' => 'event'
                
            ));

            while($eventposts->have_posts()){ // tied to the default query used
              $eventposts->the_post();?>
               <div class="col-lg-4 col-md-4 ml-0 pl-0">
              <a class="" href="<?php the_permalink();?>">
              <h3><?php the_title(); ?></h3> 
              <div class="" style="width:160px; height:190px;margin:auto; border-radius:10px;")>
              <?php the_post_thumbnail('themeImage');?>
              </div>
            </a></div>
            <?php  }
              
          ?>

</div>
          </div>
        </div>
        <div class="row mt-5 mb-5">
        <div class="col-lg-2 col-md-2">
        </div>
          <div class="col-lg-4 col-md-4" style="text-align: center;">
           <h4> Come Learn More About Animals </h4>
          
          <?php
            
            $animalinformationposts = new WP_Query(array(
                'posts_per_page' => 3,
                'post_type' => 'animal-information'
                
            ));

            while($animalinformationposts->have_posts()){ // tied to the default query used
              $animalinformationposts->the_post();?>
              <a class="" href="<?php the_permalink();?>">
              <h3><?php the_title(); ?></h3> 
              <div class="" style="width:200px; height:200px;margin:auto; border-radius:10px;")>
              <?php the_post_thumbnail('themeImage');?>
              </div>
            </a>
            <?php  }
              
          ?>
          <a class="" href="information/animal-information/"><h3> Click For More</h3></a>
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