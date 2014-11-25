<?php

// Add Jukebox wheel shortcode
function saju_shortcode_jukebox_wheel( $atts ) {

    // Get attributes
    extract( shortcode_atts(
            array(
            ), $atts )
    );
    
    // Queue styles
    wp_enqueue_style( 'bootstrap-css', plugins_url( 'bower_components/bootstrap/dist/css/bootstrap.min.css', __FILE__ ) );
    wp_enqueue_style( 'jukebox-wheel-css', plugins_url( 'style.css', __FILE__ ) );
   
    // Queue scripts
    wp_enqueue_script( 'jquery', plugins_url( 'bower_components/jquery/dist/jquery.min.js', __FILE__ ) );
    wp_enqueue_script( 'bootstrap-js', plugins_url( 'bower_components/bootstrap/dist/js/bootstrap.min.js', __FILE__ ) );
    wp_enqueue_script( 'hammer', plugins_url( 'bower_components/hammerjs/hammer.min.js', __FILE__ ) );
    wp_enqueue_script( 'd3', plugins_url( 'bower_components/d3/d3.min.js', __FILE__ ) );
    wp_enqueue_script( 'jukebox-wheel-functions', plugins_url( 'js/jukebox-functions.js', __FILE__ ) );
    wp_enqueue_script( 'jukebox-wheel', plugins_url( 'js/jukebox.js', __FILE__ ) );
   
    // Write content 
    ob_start();
    require_once 'saju_shortcode_jukebox_wheel_html_template.php';
    return ob_get_clean();
}
add_shortcode( 'saju-jukebox-wheel', 'saju_shortcode_jukebox_wheel' );

