<?php
    function calendar(){
        register_sidebar(array(
            'name'          =>  'calendar widget',
            'id'            =>  'calender',
            'discription'   =>  'ওয়েবসাইটের নিচে ক্যালেন্ডার ডিজাইন',
            'before_widget' =>  '<div class="fix footer_part">',
            'after_widget'  =>  '</div>',
            'before_title'  =>  '<h2>',
            'after_title'   =>  '</h2>'
        ));
    }

    add_action('widgets_init', 'calendar');
?>