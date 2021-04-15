<?php
/**
 * The Template for displaying all single posts.
 *
 * @package advance-pet-care
 */
pageBanner();
get_header(); ?>


<div class="" >
    <main role="main" id="maincontent" class="middle-align my-0 mx-auto py-3 px-0" style="max-width:1000px;">
            <div class="row" style="border-color:<?php echo $theme ?>;background-color:white; border-size:10px; border-style:solid;">
            
		       	<div class="col-lg-12 col-md-12" class="content-ts">
					<?php
						/* Start the Loop */
						while ( have_posts() ) : the_post();

							get_template_part( 'template-parts/content-single-event' );

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
				
			</div>
	    <div class="clearfix"></div>
    </main>
</div>

<?php get_footer(); ?>