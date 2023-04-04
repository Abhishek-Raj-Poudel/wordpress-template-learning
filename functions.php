<?php

function testtheme_theme_support(){

    // Adds dynamic title tag support
    add_theme_support('title-tag');
}

add_action('after_setup_theme','testtheme_theme_support');


//  this is to call all the stylesheets which will be located in the head section
function testtheme_register_styles(){

    $version = wp_get_theme()->get("Version");

    // the array() is for dependency meaning it depends on something for us that is the testtheme_bootstrap
    wp_enqueue_style('testtheme-style', get_template_directory_uri() . "/style.css", array('testtheme-bootstrap'), $version, "all");
    wp_enqueue_style('testtheme-bootstrap',"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), "4.4.1", "all");
    
    wp_enqueue_style('testtheme-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), "5.13.0", "all");
}
//write wp_enqueue_script to call a specific function. before this you wrote style and thats why it wasnot working.
add_action('wp_enqueue_scripts', "testtheme_register_styles");
 
// this is to call all the scripts located at the bottom of the html
function testtheme_register_scripts(){

    wp_enqueue_script('testtheme-jquery', 'https://code.jquery.com/jquery-3.4.1.slim.min.js',array(),'3.4.1',true);

    wp_enqueue_script('testtheme-popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js',array(),'1.16.0',true);

    wp_enqueue_script('testtheme-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js',array(),'4.4.1',true);

    wp_enqueue_script('testtheme-main',get_template_directory_uri()."/assets/js/main.js",array(),'3.4.1',true);
}

add_action('wp_enqueue_scripts', "testtheme_register_scripts");
?>