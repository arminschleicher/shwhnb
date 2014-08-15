<?php

if (!function_exists('load_GoogleFonts')) :
    
    function load_GoogleFonts() {
        wp_register_style('sourceSansPro', 'http://fonts.googleapis.com/css?family=Source+Sans+Pro');
        wp_register_style('lora', 'http://fonts.googleapis.com/css?family=Lora');
        wp_enqueue_style( 'sourceSansPro');
        wp_enqueue_style( 'lora');
            
            
    }
    add_action('wp_print_styles', 'load_GoogleFonts');
endif;




?>