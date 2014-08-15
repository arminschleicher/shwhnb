<?php

if (!function_exists('FoundationPress_scripts')) :
  function FoundationPress_scripts() {

    // deregister the jquery version bundled with wordpress
    wp_deregister_script( 'jquery' );

    // register scripts
    wp_register_script( 'modernizr', get_template_directory_uri() . '/js/modernizr/modernizr.min.js', array(), '1.0.0', false );
    wp_register_script( 'jquery', get_template_directory_uri() . '/js/jquery/dist/jquery.min.js', array(), '1.0.0', false );
    wp_register_script( 'foundation', get_template_directory_uri() . '/js/app.js', array('jquery'), '1.0.0', true );

    // enqueue scripts
    wp_enqueue_script('modernizr');
    wp_enqueue_script('jquery');
    wp_enqueue_script('foundation');

  }

  add_action( 'wp_enqueue_scripts', 'FoundationPress_scripts' );
endif;

if (!function_exists('shwohnbau_scripts')) :
  function shwohnbau_scripts() {
    wp_register_script( 'jquery-preload', get_template_directory_uri() . '/js/jquery-preload/jquery.preload.js', array('jquery'), '1.0.0', false );
    wp_register_script('jquery-validation-plugin', 'http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js', array('jquery'),'1.9', false );
     wp_register_script( 'top-button', get_template_directory_uri() . '/js/top-button.js', array('jquery'), '1.0.0', false );
    wp_register_script( 'shwohnbau-main', get_template_directory_uri() . '/js/shwohnbau-main.js', array('jquery'), '1.0.0', false );
    wp_register_script( 'sticky-nav', get_template_directory_uri() . '/js/sticky-nav.js', array('jquery'), '1.0.0', false );
    wp_register_script( 'kontaktformular', get_template_directory_uri() . '/js/kontaktformular.js', array('jquery'), '1.0.0', false );
    
    wp_enqueue_script('jquery-preload');
    wp_enqueue_script('jquery-validation-plugin');
     wp_enqueue_script('top-button');
    wp_enqueue_script('shwohnbau-main');
    wp_enqueue_script('sticky-nav');
    wp_enqueue_script('kontaktformular');

  }

  add_action( 'wp_enqueue_scripts', 'shwohnbau_scripts' );
endif;

function kitchensink_scripts() {
  if ( is_page_template('kitchen-sink.php') ) {

    wp_enqueue_script( 'kitchen-sink', get_template_directory_uri() . '/js/kitchen-sink.js', array('jquery'), '1.0.0', true );

  }
}

add_action( 'wp_enqueue_scripts', 'kitchensink_scripts' );


?>