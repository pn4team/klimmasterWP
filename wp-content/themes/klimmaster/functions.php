<?php
  remove_action('wp_head', 'rsd_link');
  remove_action('wp_head', 'wlwmanifest_link');
  remove_action('wp_head', 'wp_generator');

  show_admin_bar(false);
  add_theme_support( 'post-thumbnails' );
  add_theme_support('menus');

  remove_filter( 'the_content', 'wpautop' );
  remove_filter( 'the_excerpt', 'wpautop' );


  function enqueue_styles() {
    /*Font CSS */
    wp_register_style('font', 'http://fonts.googleapis.com/css?family=Montserrat:400,700');
    wp_enqueue_style('font');
    wp_register_style('fa', get_template_directory_uri() . '/css/font-awesome.min.css');
    wp_enqueue_style('fa');
    
    /*Plugin CSS */
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css');
    wp_enqueue_style('bootstrap');
    wp_register_style('animate', get_template_directory_uri() . '/css/animate.min.css');
    wp_enqueue_style('animate');
    wp_register_style('owl-theme', get_template_directory_uri() . '/css/owl.theme.css');
    wp_enqueue_style('owl-theme');
    wp_register_style('owl-carousel', get_template_directory_uri() . '/css/owl.carousel.css');
    wp_enqueue_style('owl-carousel');
    wp_register_style('superslides', get_template_directory_uri() . '/css/superslides.css');
    wp_enqueue_style('superslides');
    wp_register_style('cubeportfolio', get_template_directory_uri() . '/css/cubeportfolio.min.css');
    wp_enqueue_style('cubeportfolio');
    wp_register_style('magnific-popup', get_template_directory_uri() . '/css/magnific-popup.css');
    wp_enqueue_style('magnific-popup');
    wp_register_style('reset', get_template_directory_uri() . '/css/reset.css');
    wp_enqueue_style('reset');
    /*Theme CSS */
    wp_enqueue_style( 'klimmaster-style', get_stylesheet_uri());
  }
  add_action('wp_enqueue_scripts', 'enqueue_styles');

  function enqueue_scripts () {
    wp_register_script('$', get_template_directory_uri() . '/js/jquery-2.1.3.min.js');
    wp_enqueue_script('$');
    wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js');
    wp_enqueue_script('bootstrap');
    wp_register_script('owl-carousel', get_template_directory_uri() . '/js/owl.carousel.min.js');
    wp_enqueue_script('owl-carousel');
    wp_register_script('superslides', get_template_directory_uri() . '/js/jquery.superslides.min.js');
    wp_enqueue_script('superslides');
    wp_register_script('glides', 'http://maps.google.com/maps/api/js?sensor=false');
    wp_enqueue_script('glides');
    wp_register_script('retina', get_template_directory_uri() . '/js/retina-1.1.0.min.js');
    wp_enqueue_script('retina');
    wp_register_script('wow', get_template_directory_uri() . '/js/wow.min.js');
    wp_enqueue_script('wow');
    wp_register_script('cubeportfolio', get_template_directory_uri() . '/js/jquery.cubeportfolio.min.js');
    wp_enqueue_script('cubeportfolio');
    wp_register_script('fitvids', get_template_directory_uri() . '/js/jquery.fitvids.js');
    wp_enqueue_script('fitvids');
    wp_register_script('smooth-scroll', get_template_directory_uri() . '/js/smooth-scroll.js');
    wp_enqueue_script('smooth-scroll');
    wp_register_script('magnific-popup', get_template_directory_uri() . '/js/jquery.magnific-popup.js');
    wp_enqueue_script('magnific-popup');
    wp_register_script('main', get_template_directory_uri() . '/js/main.js');
    wp_enqueue_script('main');
  }
  add_action('wp_enqueue_scripts', 'enqueue_scripts');
?>