<?php

  //Carregar arquivo customizer.php com as funções para personalização extras
    require get_template_directory() . '/inc/customizer.php';

  // Função para carregar folhas de estilo
  function caju_load_scripts(){
    wp_enqueue_style( 'caju-style', get_stylesheet_uri(), array(),'1.0','all');
    wp_enqueue_style( 'boostrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css', array(), null );
    wp_enqueue_script( 'menu-dropdown', get_template_directory_uri() . '/js/menu-dropdown.js', array(), '1.0', true);
  }
  add_action('wp_enqueue_scripts', 'caju_load_scripts');


  // Função para registrar menu
  register_nav_menus(
    array(
      'header-menu' => 'Header Menu',
      'footer-menu' => 'Footer Menu'
      )
  );


  
  function caju_config(){
    $args = array(
      'height' => 350,
      'width' => 1920
    );
    add_theme_support( 'custom-header', $args);
    add_theme_support( 'post-thumbnails');
    add_theme_support( 'custom-logo', array(
      'height' => 250,
      'width' => 300,
      'flex-height' => true,
      'flex-width' => true
    ));
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style','script'));
    add_theme_support( 'title-tag');


    add_theme_support( 'align-wide');
    add_theme_support( 'responsive-embeds');
    add_theme_support( 'wp-block_styles');
 
  };
  add_action( 'after_setup_theme', 'caju_config', 0);
  
//Função que cria  Sidebar
  add_action('widgets_init', 'caju_sidebars' );
  function caju_sidebars(){
    register_sidebar(
      array(
        'name' => ' Blog Sidebar',
        'id' => 'sidebar-blog',
        'description' => ' This is the Blog Sidebar. You can add your widgets here.',
        'before_widget' => '<div class="widget-wrapper">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widget-title>',
        'after_title' => '</h4>'
        )
    );
  }


  //Deixar tema compativel com versões anteriores do Wordpress
  if( ! function_exists( 'wp_body_open')){
    function wp_body_open() {
      do_action( 'wp_body_open' );
    }
  }