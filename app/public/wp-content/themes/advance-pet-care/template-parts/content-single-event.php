<?php
/**
 * The template part for displaying single post
 *
 * @package advance-pet-care
 * @subpackage advance-pet-care
 * @since advance-pet-care 1.0
 */
?> 
<?php 
  $archive_year  = get_the_time('Y'); 
  $archive_month = get_the_time('m'); 
  $archive_day   = get_the_time('d'); 
  $relatedImage = get_field('images',get_the_ID());
  
?> 
<article class="page-box-single">
  <div class="new-text">
    <h1><a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php echo the_title_attribute(); ?>"><?php the_title();?><span class="screen-reader-text"><?php the_title(); ?></span></a></h1>
    <?php if( get_theme_mod( 'advance_pet_care_date_hide',true) != '' || get_theme_mod( 'advance_pet_care_date_hide',true) != '' || get_theme_mod( 'advance_pet_care_date_hide',true) != '') { ?>
      <div class="" style="width:200px; height:200px; margin:auto;")>
      <?php the_post_thumbnail('themeImage');?>
      </div>
      
    <?php }
    ?>
    <div class="entry-content"><p><i class="fa fa-calendar mr-2"></i>Date: <?php echo get_field('event_date');?></p></div>
    <div class="entry-content"><p><i class="fa fa-clock mr-2"></i>Time: <?php echo get_field('start_time');?>-<?php echo get_field('end_time');?></p></div>
    <div class="entry-content"><p><i class="fa fa-map mr-2"></i>Location: <?php echo get_field('start_time');?>-<?php echo get_field('end_time');?></p></div>
    <div class="entry-content"><h6>Description</h6><p><?php the_content();?></p></div>
    <?php if( get_theme_mod( 'advance_pet_care_tags_hide',true) != '') { ?>
      <div class="tags my-3 mx-0"><p><?php
      if( $tags = get_the_tags() ) {
        echo '<i class="fas fa-tags"></i>';
        echo '<span class="meta-sep"></span>';
        foreach( $tags as $content_tag ) {
          $sep = ( $content_tag === end( $tags ) ) ? '' : ' ';
          echo '<a href="' . esc_url(get_term_link( $content_tag, $content_tag->taxonomy )) . '">' . esc_html($content_tag->name) . '</a>' . esc_html($sep);
        }
      } ?></p></div>
    <?php } ?>
  </div>
  <div class="clearfix"></div>
</article>