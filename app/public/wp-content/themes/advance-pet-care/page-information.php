<?php

/**
 * The template for displaying all pages.
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

<?php do_action('advance_pet_care_page_header'); ?>

<main role="main" id="maincontent" class="middle-align my-0 mx-auto py-3 px-0">
    <div class="container">
        <?php
        $advance_pet_care_left_right = get_theme_mod('advance_pet_care_single_page_sidebar_layout', 'One Column');
        if ($advance_pet_care_left_right == 'Left Sidebar') { ?>
            <div class="row">
                <div id="sidebar" class="col-lg-4 col-md-4">
                    <?php dynamic_sidebar('sidebar-1'); ?>
                </div>
                <div class="col-lg-8 col-md-8 left-sidebar-page background-img-skin">
                    <?php while (have_posts()) : the_post(); ?>
                        <?php the_post_thumbnail(); ?>
                        <h1><?php the_title(); ?></h1>
                        <div class="entry-content"><?php the_content(); ?></div>
                    <?php endwhile; // end of the loop. 
                    ?>
                    <?php
                    // If comments are open or we have at least one comment, load up the comment template.
                    if (comments_open() || get_comments_number()) :
                        comments_template();
                    endif;
                    ?>
                    <div class="clear"></div>
                </div>
            </div>
        <?php } else if ($advance_pet_care_left_right == 'One Column') { ?>
            <div class="row">
                <div class="col-lg-8 col-md-8 right-sidebar-page background-img-skin">
                    <?php while (have_posts()) : the_post(); ?>
                        <?php the_post_thumbnail(); ?>
                        <h1><?php the_title(); ?></h1>
                        <div class="entry-content"><?php the_content(); ?></div>
                    <?php endwhile; // end of the loop. 
                    ?>
                    <?php
                    // If comments are open or we have at least one comment, load up the comment template.
                    if (comments_open() || get_comments_number()) :
                        comments_template();
                    endif;
                    ?>
                    <div class="clear"></div>
                </div>
                <div id="sidebar" class="col-lg-4 col-md-4">
                    <?php
                    // this returns the pages but doesn't output it. If the pages has a parent or
                    $testArray = get_pages(array(
                        'child_of' => get_the_ID()
                    ));

                    if ($theParent or $testArray) { ?>
                        <div class="page-links">
                            <h2 class="page-links__title">
                                <a href="<?php echo get_permalink($theParent); ?>">
                                    <?php echo get_the_title($theParent); ?>
                                </a>
                            </h2>

                            <ul class="min-list">
                                <?php
                                if ($theParent) { // if the current page has a parent
                                    $findChildrenOf = $theParent;
                                } else { //viewing a parent page
                                    $findChildrenOf = get_the_ID();
                                }
                                wp_list_pages(array(
                                    'title_li' => NULL,
                                    'child_of' => $findChildrenOf,
                                    'sort_column' => 'menu_order'
                                ));
                                ?>
                            </ul>
                        </div>
                    <?php } ?>
                </div>
            </div>
        <?php }
        ?>
        <div class="clear"></div>
    </div>

    </div>
</main>

<?php do_action('advance_pet_care_page_footer'); ?>

<?php get_footer(); ?>