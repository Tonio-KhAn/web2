<?php
/**
 * The template part for displaying post 
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
?>
<article class="page-box-single">
  <div class="new-text">
    <h1><a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php echo the_title_attribute(); ?>"><?php the_title();?><span class="screen-reader-text"><?php the_title(); ?></span></a></h1>
    <?php if( get_theme_mod( 'advance_pet_care_date_hide',true) != '' || get_theme_mod( 'advance_pet_care_date_hide',true) != '' || get_theme_mod( 'advance_pet_care_date_hide',true) != '') { ?>
      <div class="" style="width:200px; height:200px; margin:auto;")>
      <?php the_post_thumbnail('themeImage');?>
      </div>
      
    <?php }?>

    <div class="entry-content"><p><i class="fa fa-calendar mr-2"></i>Date: <?php echo get_field('event_date');?></p></div>
    <div class="entry-content"><p><i class="fa fa-clock mr-2"></i>Time: <?php echo get_field('start_time');?>-<?php echo get_field('end_time');?></p></div>
    <div class="entry-content"><p><i class="fa fa-map mr-2"></i>Location: <?php echo get_field('start_time');?>-<?php echo get_field('end_time');?></p></div>
    
    <?php if(get_theme_mod('advance_pet_care_blog_post_description_option') == 'Full Content'){ ?>
      <div class="entry-content"><p><?php the_content();?></p></div>
    <?php }
    if(get_theme_mod('advance_pet_care_blog_post_description_option', 'Excerpt Content') == 'Excerpt Content'){ ?>
      <?php if(get_the_excerpt()) { ?>
        <div class="entry-content"><p><?php $excerpt = get_the_excerpt(); echo esc_html( advance_pet_care_string_limit_words( $excerpt, esc_attr(get_theme_mod('advance_pet_care_excerpt_number','20')))); ?><?php echo esc_html( get_theme_mod('advance_pet_care_post_suffix_option','...') ); ?></p></div>
      <?php }?>
    <?php }?>
    <?php if( get_theme_mod('advance_pet_care_button_text','READ MORE') != ''){ ?>
      <div class="read-more-btn my-3 mx-0">
        <a href="<?php the_permalink(); ?>" class="py-3 px-4"><?php echo esc_html(get_theme_mod('advance_pet_care_button_text','READ MORE'));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('advance_pet_care_button_text','READ MORE'));?></span></a>
      </div>
    <?php }?>
  </div>
  <div class="clearfix"></div>
</article>