<?php

/*****************************
-Filter the except length to 19 words.
*****************************/
function wpdocs_custom_excerpt_length( $length ) {
    return 19;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

/*****************************
Clean up the header
*****************************/
function remove_wp_header_links() {
  // all actions related to emojis
  remove_action( 'admin_print_styles', 'print_emoji_styles' );
  remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
  remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
  remove_action( 'wp_print_styles', 'print_emoji_styles' );
  remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
  remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
  remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );

  // remove the DNS prefetch by returning false on filter
  add_filter( 'emoji_svg_url', '__return_false' );

  // remove the EditURI/RSD link from the header
  remove_action('wp_head', 'rsd_link');

  // remove the wlwmanifest link from your header
  remove_action( 'wp_head', 'wlwmanifest_link');

  // remove WordPress Generator from the header
  remove_action('wp_head', 'wp_generator');

  // remove api link from the header
  remove_action( 'wp_head', 'rest_output_link_wp_head', 10 );
  remove_action( 'wp_head', 'wp_oembed_add_discovery_links', 10 );

  //Remove Jetpack’s Open Graph meta tags
  add_filter( 'jetpack_enable_open_graph', '__return_false' );
}
add_action( 'init', 'remove_wp_header_links' );


/*****************************
Enqueue Scripts
*****************************/
function add_theme_scripts() {
  wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Open+Sans:300,400,700|Roboto:300,400,700&amp;subset=greek', false );

  wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css', array(), '4.3.0', 'all');
  wp_enqueue_style( 'themify-icons', get_template_directory_uri() . '/css/themify-icons.css', array(), 'false', 'all');
  wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.5', 'all');
  wp_enqueue_style( 'flexslider', get_template_directory_uri() . '/css/flexslider.css', array(), '2.3.0', 'all');
  wp_enqueue_style( 'theme', get_template_directory_uri() . '/css/theme.css', array(), 'false', 'all');
  wp_enqueue_style( 'style', get_stylesheet_uri() );

  if (!is_admin())  {
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', get_template_directory_uri() . '/js/jquery.min.js', false, '1.11.1', true );
    wp_enqueue_script( 'jquery' );
  }
  wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array ('jquery'), '3.3.5', true);
  wp_enqueue_script( 'flexslider', get_template_directory_uri() . '/js/flexslider.min.js', array ('jquery'), false, true);
  wp_enqueue_script( 'parallax', get_template_directory_uri() . '/js/parallax.js', array ('jquery'), false, true);
  wp_enqueue_script( 'smooth-scroll', get_template_directory_uri() . '/js/smooth-scroll.min.js', array ('jquery'), false, true);
  wp_enqueue_script( 'masonry', get_template_directory_uri() . '/js/masonry.min.js', array ('jquery'), false, true);
  wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/scripts.js', array ('jquery'), false, true);
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );
