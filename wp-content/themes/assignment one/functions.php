<?php 
//load stylesheet
function load_css(){
    wp_register_style('bootstrap',get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('styles',get_template_directory_uri() . '/css/styles.css', array(), false, 'all');
    wp_enqueue_style('styles');
}
add_action('wp_enqueue_scripts','load_css');

//load js
function load_js(){
    wp_enqueue_script('jquery');
    wp_register_script('bootstrap',get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery', false, true);
    wp_enqueue_script('bootstrap');
}
add_action('wp_enqueue_scripts','load_js');


//theme options
add_theme_support('menus');
add_theme_support('post-thumbnails');




//menus
register_nav_menus(
    array(
        'top-menu'=> 'Top Menu Location',
        'mobile-menu'=> 'Mobile Menu Location',
        // 'footer-menu'=> 'footer Menu Location',
    )
);



?>