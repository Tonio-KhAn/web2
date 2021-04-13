<?php
/**
 * The Template for displaying all single posts.
 *
 * @package advance-pet-care
 */

get_header(); ?>
<?php
$relatedLocation = get_field('locations');
if (get_the_title($relatedLocation[0]) == 'Jungle'){
    $theme = 'green';
}
?>
<div class="" style="background-size: 100% 100%; height:300px; background-image: url(<?php echo get_theme_file_uri('/images/elephants.jpg') ?>);"></div>
<div class="container" style=" background-color:<?php echo $theme ?>;" >
    <main role="main" id="maincontent" class="middle-align my-0 mx-auto py-3 px-0">
            <div class="row" style="background-color:<?php $theme ?>;">
            <?php echo the_title()?>
		       	<div class="col-lg-8 col-md-8" class="content-ts">
					<?php
						/* Start the Loop */
						while ( have_posts() ) : the_post();

							get_template_part( 'template-parts/content-single' );

							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;

							the_post_navigation( array(
								'next_text' => '<span class="meta-nav text-uppercase p-2" aria-hidden="true">' . __( 'Next <i class="far fa-long-arrow-alt-right"></i>', 'advance-pet-care' ) . '</span> ' .
									'<span class="screen-reader-text">' . __( 'Next post:', 'advance-pet-care' ) . '</span> ' ,
								'prev_text' => '<span class="meta-nav text-uppercase p-2" aria-hidden="true">' . __( '<i class="far fa-long-arrow-alt-left"></i> Previous', 'advance-pet-care' ) . '</span> ' .
									'<span class="screen-reader-text">' . __( 'Previous post:', 'advance-pet-care' ) . '</span> ' ,
							) );

						endwhile; // End of the loop.
					?>
		       	</div>
				<div id="sidebar" class="col-lg-4 col-md-4">
        <?php
                       
                        if($relatedLocation){
                        echo '<hr class="section-break">';
                        echo '<aside role="complementary" aria-label="firstsidebar" id="archives" class="widget p-2 mb-3">';
                        echo '<h2 class="widget-title text-capitalize text-left p-2">Locations</h2>';
                        echo '<ul class="m-0">';
                        foreach($relatedLocation as $location){ //for each a post object
                            ?>

                    <li><a href="<?php echo get_the_permalink($location);?>">
                    <?php echo get_the_title($location);?>
                    </a>
                    </li>
                    <?php 
                    }
                    echo '</ul>';
                    echo '</aside>';
                }
                    
                    ?>


				</div>
			</div>
	    <div class="clearfix"></div>
    </main>
</div>

<?php get_footer(); ?>