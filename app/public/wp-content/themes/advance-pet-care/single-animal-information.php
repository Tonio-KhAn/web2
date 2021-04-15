<?php

/**
 * The Template for displaying all single posts.
 *
 * @package advance-pet-care
 */
pageBanner();
get_header(); ?>
<?php
$relatedLocation = get_field('locations');


$pageBannerImage = get_field('theme_image', $relatedLocation[0]);
$theme = get_field('color', $relatedLocation[0]);		

$homepagePosts = new WP_Query(array(
    'post_type' => 'animal',
    'meta_query' => array(
        array(
            'key' => 'related_animal_information',
            'compare' => 'LIKE',
            'value' => '"' . get_the_ID() . '"'
        )
    )
));
wp_reset_postdata();
?>


<div class="" style="background-image: url(<?php echo $pageBannerImage['sizes']['themeImage']; ?>);">
    <main role="main" id="maincontent" class="middle-align my-0 mx-auto py-3 px-0" style="max-width:1000px;">
        <div class="row" style="border-color:<?php echo $theme ?>;background-color:white; border-size:10px; border-style:solid;">

            <div class="col-lg-8 col-md-8" class="content-ts">
                <?php
                /* Start the Loop */
                while (have_posts()) : the_post();

                    get_template_part('template-parts/content-single-animal-information');

                    // If comments are open or we have at least one comment, load up the comment template.
                    if (comments_open() || get_comments_number()) :
                        comments_template();
                    endif;

                    the_post_navigation(array(
                        'next_text' => '<span class="meta-nav text-uppercase p-2" aria-hidden="true">' . __('Next <i class="far fa-long-arrow-alt-right"></i>', 'advance-pet-care') . '</span> ' .
                            '<span class="screen-reader-text">' . __('Next post:', 'advance-pet-care') . '</span> ',
                        'prev_text' => '<span class="meta-nav text-uppercase p-2" aria-hidden="true">' . __('<i class="far fa-long-arrow-alt-left"></i> Previous', 'advance-pet-care') . '</span> ' .
                            '<span class="screen-reader-text">' . __('Previous post:', 'advance-pet-care') . '</span> ',
                    ));

                endwhile; // End of the loop.
                ?>
            </div>
            <div id="sidebar" class="col-lg-4 col-md-4">
                <?php

                if ($relatedLocation) {
                    echo '<hr class="section-break">';
                    echo '<aside role="complementary" aria-label="firstsidebar" id="archives" class="widget p-2 mb-3">';
                    echo '<h2 class="widget-title text-capitalize text-left p-2">Locations</h2>';
                    echo '<ul class="m-0">';
                    foreach ($relatedLocation as $location) { //for each a post object
                ?>

                        <li><a href="<?php echo get_the_permalink($location); ?>">
                                <?php echo get_the_title($location); ?>
                            </a>
                        </li>
                <?php
                    }
                    echo '</ul>';
                    echo '</aside>';
                }

                ?>

                <?php
                echo '<hr class="section-break">';
                echo '<aside role="complementary" aria-label="firstsidebar" id="archives" class="widget p-2 mb-3">';
                echo '<h2 class="widget-title text-capitalize text-left p-2">Members of this Species in our Zoo</h2>';
                echo '<ul class="m-0">';
                while ($homepagePosts->have_posts()) { // tied to the default query usedon the url
                    $homepagePosts->the_post(); ?>
                    <li> <a href="<?php echo get_the_permalink(); ?>">
                                <?php echo get_the_title(); ?>
                            </a></li>
                 <?php 
                }
               echo '</ul>';
                    echo '</aside>';
                ?>
            </div>
        </div>
        <div class="clearfix"></div>
    </main>
</div>

<?php get_footer(); ?>