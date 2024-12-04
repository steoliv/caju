<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <title><?php bloginfo('name'); ?> <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
  <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<div class="container-fluid  header ">
        <div class="container">
            <section class="top-bar">
                <div class="row">
                    <div class="logo col-4">
                        <?php 
                        if( has_custom_logo() ){
                            the_custom_logo();
                        }else{
                            ?>
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><span><?php bloginfo( 'name' ); ?></span></a>
                            <?php
                        }
                        ?>
                    </div>
                    <div class="searchbox col-8">
                        <?php get_search_form(); ?>
                    </div>                    
              </div>
            </section>
          </div>
          </div>
            <section class="menu-area">
              <div class="container">
                  <nav class="main-menu">
                      <button class="check-button">
                          <div class="menu-icon">
                              <div class="bar1"></div>
                              <div class="bar2"></div>
                              <div class="bar3"></div>
                          </div>
                      </button>
                      <?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'depth' => 2 )); ?>
                  </nav>                    
              </div>
            </section>
          </div>
    </div>