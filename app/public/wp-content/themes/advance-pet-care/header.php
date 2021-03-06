<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div class="content-ts">
 *
 * @package advance-pet-care
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <?php if ( function_exists( 'wp_body_open' ) ) {
    wp_body_open();
  } else {
    do_action( 'wp_body_open' );
  } ?>
  
    <?php if(get_theme_mod('advance_pet_care_preloader_option',true) != '' || get_theme_mod('advance_pet_care_responsive_preloader', true) != ''){ ?>
      <div id="loader-wrapper">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
      </div>
    <?php }?>
    <a class="screen-reader-text skip-link" href="#maincontent"><?php esc_html_e( 'Skip to content', 'advance-pet-care' ); ?></a>
   
    
 
  <header role="banner" >
  <div id="header" style="position: sticky; top: 0; z-index:100;">
      <div class="main-menu  <?php if( get_theme_mod( 'advance_pet_care_sticky_header', false) != '' || get_theme_mod( 'advance_pet_care_responsive_sticky_header', false) != '') { ?> sticky-header"<?php } else { ?>close-sticky <?php } ?>" >
        <div class="container">
        <div class="row">
            <div class="col-lg-10 col-md-7 col-4">
              <?php 
                if(has_nav_menu('primary')){ ?>
                <div class="toggle-menu responsive-menu">
                  <button role="tab" class="mobiletoggle"><i class="fas fa-bars my-2"></i><span class="screen-reader-text"><?php esc_html_e('Open Menu','advance-pet-care'); ?></span></button>
                </div>
              <?php }?>
              <div id="menu-sidebar" class="nav sidebar text-center">
                <nav id="primary-site-navigation" class="primary-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'advance-pet-care' ); ?>">
                  <?php
                    if(has_nav_menu('primary')){ 
                      wp_nav_menu( array( 
                        'theme_location' => 'primary',
                        'container_class' => 'main-menu-navigation clearfix' ,
                        'menu_class' => 'clearfix',
                        'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav pl-lg-0 text-center">%3$s</ul>',
                        'fallback_cb' => 'wp_page_menu',
                      ) );
                    } 
                  ?>
                  <div id="contact-info w-100">
                    <div class="mail text-center my-1">
                      <?php if( get_theme_mod('advance_pet_care_mail1') != ''){ ?>
                        <a href="mailto:<?php echo esc_attr( get_theme_mod('advance_pet_care_mail1','') ); ?>" class="text-lowercase"><i class="fas fa-envelope mr-2"></i><?php echo esc_html( get_theme_mod('advance_pet_care_mail1','')); ?><span class="screen-reader-text"><i class="fas fa-envelope"></i><?php echo esc_html( get_theme_mod('advance_pet_care_mail1','')); ?></span></a>
                      <?php } ?>
                    </div>
                    <div class="phone text-center my-1">
                      <?php if( get_theme_mod('advance_pet_care_phone1') != ''){ ?>
                        <a href="tel:<?php echo esc_attr( get_theme_mod('advance_pet_care_phone1','' )); ?>"><i class="fas fa-phone mr-2"></i><?php echo esc_html( get_theme_mod('advance_pet_care_phone1','' )); ?><span class="screen-reader-text"><i class="fas fa-phone"></i><?php echo esc_html( get_theme_mod('advance_pet_care_phone1','' )); ?></span></a>
                      <?php } ?>
                    </div>
                    <?php get_search_form();?>
                    <div class="social-icons text-center my-2">
                      <?php if( get_theme_mod( 'advance_pet_care_facebook_url') != '') { ?>
                        <a href="<?php echo esc_url( get_theme_mod( 'advance_pet_care_facebook_url','' ) ); ?>"><i class="fab fa-facebook-f ml-2" aria-hidden="true"></i><span class="screen-reader-text"><?php esc_html_e( 'Facebook','advance-pet-care' );?></span></a>
                        <?php } ?>
                        <?php if( get_theme_mod( 'advance_pet_care_twitter_url') != '') { ?>
                        <a href="<?php echo esc_url( get_theme_mod( 'advance_pet_care_twitter_url','' ) ); ?>"><i class="fab fa-twitter ml-2"></i><span class="screen-reader-text"><?php esc_html_e( 'Twitter','advance-pet-care' );?></span></a>
                        <?php } ?>
                        <?php if( get_theme_mod( 'advance_pet_care_youtube_url') != '') { ?>
                        <a href="<?php echo esc_url( get_theme_mod( 'advance_pet_care_youtube_url','' ) ); ?>"><i class="fab fa-youtube ml-2"></i><span class="screen-reader-text"><?php esc_html_e( 'Youtube','advance-pet-care' );?></span></a>
                        <?php } ?>
                        <?php if( get_theme_mod( 'advance_pet_care_insta_url') != '') { ?>
                        <a href="<?php echo esc_url( get_theme_mod( 'advance_pet_care_insta_url','' ) ); ?>"><i class="fab fa-instagram ml-2"></i><span class="screen-reader-text"><?php esc_html_e( 'Instagram','advance-pet-care' );?></span></a>
                      <?php } ?>                
                    </div> 
                  </div>
                  <a href="javascript:void(0)" class="closebtn responsive-menu"><i class="far fa-times-circle"></i><span class="screen-reader-text"><?php esc_html_e('Close Menu','advance-pet-care'); ?></span></a>
                </nav>
              </div>
            </div>
            <div class="col-lg-1 col-md-1 col-4">
              <div class="search-box">
                <button type="button" class="search-open"><i class="fas fa-search m-2 p-2"></i></button>
              </div>
            </div>
            <div class="col-lg-1 col-md-3 col-4">
              <div class="cart_icon">
                <a href="<?php esc_url(the_permalink((get_option('woocommerce_cart_page_id')))); ?>"><i class="fas fa-shopping-bag p-3"></i><span class="screen-reader-text"><?php esc_html_e( 'Shopping Bag','advance-pet-care' );?></span></a>
              </div>
            </div>
          </div>
          <div class="search-outer">
            <div class="serach_inner w-100 h-100">
              <?php get_search_form(); ?>
            </div>
            <button type="button" class="search-close">X</span></button>
          </div>
        </div>
      </div>
      </div>
      </header>
     
      
    
  