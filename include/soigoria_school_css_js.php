<?php
    function soigoria_school_css_js(){
        wp_register_style('font-awesome.min', get_template_directory_uri().'/css/font-awesome.min.css', array(), '4.3.0', 'all');
        wp_register_style('jquery.bxslider', get_template_directory_uri().'/jquery.bxslider.css', array(), 'v4.1.2', 'all');
        wp_register_style('style', get_template_directory_uri().'/style.css', array(), 'null', 'all');
        
        wp_register_style('responsive', get_template_directory_uri().'/responsive.css', array(), 'null', 'all');
        wp_register_style('print', get_template_directory_uri().'/print.css', array(), 'null', 'print');
        
        wp_enqueue_style('font-awesome.min');
        wp_enqueue_style('jquery.bxslider');
        wp_enqueue_style('style');
        wp_enqueue_style('responsive');
        wp_enqueue_style('screen');
        wp_enqueue_style('print');
        
        
        wp_enqueue_script('jquery');
        wp_enqueue_script('jquery-2.1.3.min', get_template_directory_uri().'/js/jquery-2.1.3.min.js', array('jquery'), '2.1.3', true);
        wp_enqueue_script('jquery.bxslider.min', get_template_directory_uri().'/js/jquery.bxslider.min.js', array('jquery'), 'v4.1.2', true);    
        wp_enqueue_script('my', get_template_directory_uri().'/js/my.js', array('jquery'), 'null', true);
        wp_enqueue_script('select2.min', get_template_directory_uri().'/js/select2.min.js', array('jquery'), 'null', true);
    }
    add_action('wp_enqueue_scripts', 'soigoria_school_css_js');
?>