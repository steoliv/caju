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
            <div class="row">
              <div class="col-md-2 col-sm-12  logo">

                  <?php if(has_custom_logo()){
                    the_custom_logo(); 
                  }else{
                    ?>
                    <a href="<?php  echo home_url('/'); ?>">
                      <span><?php bloginfo('name');?>
                    </span>  
                  </a>
                    
                  <?php } ?>

              </div>
              <div class="col-md-8 col-sm-12 menu" style="text-align: right;">
                    <?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'depth' => 3 )); ?>
              </div>
              <div class="col-md-2 col-sm-12  search">
                    <?php get_search_form() ?>
              </div>

            </div>
        </div>
    </div>