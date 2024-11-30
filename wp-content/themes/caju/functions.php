<?php


  function add_Main_Nav() {
    register_nav_menu('header-menu',__( 'Header Menu' ));
  }
  add_action( 'init', 'add_Main_Nav' );

  // Função para carregar folhas de estilo
  function caju_load_scripts(){
    wp_enqueue_style( 'caju-style', get_stylesheet_uri(), array(),'1.0','all');
    wp_enqueue_style( 'boostrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css', array(), null );
    wp_enqueue_script( 'menu-dropdown', get_template_directory_uri() . '/js/menu-dropdown.js', array(), '1.0', true);
  }
  add_action('wp_enqueue_scripts', 'caju_load_scripts');

