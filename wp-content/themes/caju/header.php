<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <title><?php bloginfo('name'); ?> <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> 
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">


</head>

<body <?php body_class(); ?>>

<div class="container-fluid  header ">
        <div class="container">
            <div class="row">
              <div class="col-md-2 col-sm-12  logo">
                    <a href="/">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Site Logo" width="50px" height="50px">
                    </a>
              </div>
              <div class="col-md-9 col-sm-12 menu" style="text-align: right;">
                    <?php wp_nav_menu( array( 'header-menu' => 'header-menu' )); ?>
              </div>
            </div>
        </div>
    </div>