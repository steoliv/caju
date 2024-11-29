<?php

function add_Main_Nav() {
    register_nav_menu('header-menu',__( 'Header Menu' ));
  }

  add_action( 'init', 'add_Main_Nav' );