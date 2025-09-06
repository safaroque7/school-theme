<?php
    function custom_post_type_academic_calendar(){
        register_post_type('academiccalender', array(
            'label'     =>  'একাডেমিক ক্যালেন্ডার ',
                'public'                =>  true,
                'menu_position'         =>  15
        ));
    }
        add_action('init', 'custom_post_type_academic_calendar');
?>