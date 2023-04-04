<?php

function testtheme_register_styles(){

    $version = wp_get_theme()->get("Version");

    // the array() is for dependency meaning it depends on something for us that is the testtheme_bootstrap
    wp_enqueue_style('testtheme-style', get_template_directory_uri() . "/style.css", array('testtheme-bootstrap'), $version, "all");
    wp_enqueue_style('testtheme-bootstrap',"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), "4.4.1", "all");
    
    wp_enqueue_style('testtheme-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), "5.13.0", "all");
}
//write wp_enqueue_script to call a specific function. before this you wrote style and thats why it wasnot working.
add_action('wp_enqueue_scripts', "testtheme_register_styles");
 
function testtheme_register_scripts(){

    wp_enqueue_scripts('testtheme-jquery', 'https://code.jquery.com/jquery-3.4.1.slim.min.js',array(),'3.4.1',true);

    wp_enqueue_scripts('testtheme-popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js',array(),'3.4.1',true);

    wp_enqueue_scripts('testtheme-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js',array(),'3.4.1',true);

    wp_enqueue_scripts('testtheme-scripts','https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js',array(),'3.4.1',true);


}

?>